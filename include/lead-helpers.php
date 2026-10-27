<?php
/* =========================================================
   MINERDIA STUDIO – SHARED LEAD-FORM HELPERS
   Used by submit-form.php, home-page/submit-audit.php and
   home-page/submit-contact.php so all three forms get the
   same validation, spam protection and Google Sheets saving.
   ========================================================= */

require_once __DIR__ . '/../config.php';
date_default_timezone_set('Asia/Kolkata');

/** Trim, strip tags, collapse whitespace, cap length. */
function lead_clean($v, $max = 150)
{
    if (!is_string($v)) {
        return '';
    }
    $v = trim(strip_tags($v));
    $v = preg_replace('/\s+/', ' ', $v);
    return function_exists('mb_substr') ? mb_substr($v, 0, $max) : substr($v, 0, $max);
}

/** Stops a spreadsheet from running a value as a formula. */
function lead_safe_cell($v)
{
    return preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v;
}

/** Send a JSON reply (or redirect back when the browser didn't ask for JSON) and stop. */
function lead_finish($ok, $message, $code = 200)
{
    $wantsJson = strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false
        || ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'XMLHttpRequest'
        || ($_SERVER['HTTP_SEC_FETCH_MODE'] ?? '') === 'cors';

    if ($wantsJson || empty($_SERVER['HTTP_REFERER'])) {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($code);
        echo json_encode(['ok' => $ok, 'message' => $message]);
    } else {
        // no-JS fallback: go back to the page the form was on
        $back = preg_replace('/[?#].*$/', '', $_SERVER['HTTP_REFERER']) . '?lead=' . ($ok ? 'ok' : 'error');
        header('Location: ' . $back);
    }
    exit;
}

/**
 * Common gate for every lead form: POST only, honeypot, per-form throttle.
 * Call before reading any fields.
 */
function lead_guard($formKey, $cooldown = 30)
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        lead_finish(false, 'Invalid request.', 405);
    }

    // honeypot: real visitors never fill this hidden field -> pretend success, save nothing
    if (!empty($_POST['ms_trap_q7'])) {
        lead_finish(true, 'Thank you! Our team will contact you shortly.');
    }

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    $last = $_SESSION['lead_last'][$formKey] ?? 0;
    if ($last && time() - $last < $cooldown) {
        lead_finish(false, 'Please wait a few seconds before submitting again.', 429);
    }
}

/** Remember a successful submission (starts the throttle window). */
function lead_mark_done($formKey)
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        $_SESSION['lead_last'][$formKey] = time();
    }
}

function lead_valid_phone($p)
{
    return (bool) preg_match('/^[0-9+\-\s()]{7,20}$/', $p) && preg_match_all('/\d/', $p) >= 7;
}

function lead_valid_url($u)
{
    return $u === '' || (filter_var($u, FILTER_VALIDATE_URL) && preg_match('#^https?://#i', $u));
}

/** First configured Apps Script URL from the list (skips empty / PASTE_ placeholders). */
function lead_sheets_url(array $candidates)
{
    foreach ($candidates as $u) {
        if (is_string($u) && strpos($u, 'http') === 0) {
            return $u;
        }
    }
    return '';
}

/** POST a lead to the Apps Script web app. Returns true only when the sheet confirmed it. */
function lead_save_to_sheets($url, array $payload, $label)
{
    if ($url === '' || !function_exists('curl_init')) {
        return false;
    }

    $payload['token'] = SHEETS_TOKEN;

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,   // Apps Script answers with a redirect
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_TIMEOUT        => 20,
    ]);
    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error    = curl_error($ch);
    curl_close($ch);

    $saved = false;
    if ($response !== false && $status === 200) {
        $json  = json_decode($response, true);
        $saved = is_array($json) && !empty($json['ok']);
    }
    if (!$saved) {
        error_log("Minerdia $label -> Sheets failed: $error (HTTP $status) " . substr((string) $response, 0, 200));
    }
    return $saved;
}

/** Optional email copy of a lead. Header values are stripped of line breaks. */
function lead_email($subject, $body, $replyTo = '')
{
    if (!LEAD_EMAIL_ENABLED) {
        return false;
    }
    $subject = preg_replace('/[\r\n]+/', ' ', $subject);
    $head    = 'From: ' . LEAD_EMAIL_FROM . "\r\n";
    if ($replyTo !== '' && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
        $head .= "Reply-To: $replyTo\r\n";
    }
    $head .= "Content-Type: text/plain; charset=UTF-8\r\n";
    return @mail(LEAD_EMAIL_TO, $subject, $body, $head);
}
