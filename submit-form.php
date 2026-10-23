<?php
/* =========================================================
   MINERDIA STUDIO – SHARED SERVICE-PAGE FORM HANDLER
   Used by every service page form (SEO, Podcast, Paid Ads...).
   Saves to Google Sheets ("Service Leads" tab):
   Service Page | Date | Full Name | Email | Phone Number | States
   Settings live in config.php (LEADS section).
   ========================================================= */

require_once __DIR__ . '/config.php';
date_default_timezone_set('Asia/Kolkata');

$wantsJson = (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);

function finish($ok, $message, $code = 200)
{
    global $wantsJson;
    if ($wantsJson) {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($code);
        echo json_encode(['ok' => $ok, 'message' => $message]);
    } else {
        // no-JS fallback: go back to the page the form was on
        $back = $_SERVER['HTTP_REFERER'] ?? BASE;
        $back = preg_replace('/[?#].*$/', '', $back) . '?lead=' . ($ok ? 'ok' : 'error');
        header('Location: ' . $back);
    }
    exit;
}

function clean($v, $max = 150)
{
    $v = trim(strip_tags((string) $v));
    $v = preg_replace('/\s+/', ' ', $v);
    return function_exists('mb_substr') ? mb_substr($v, 0, $max) : substr($v, 0, $max);
}

/** stops a spreadsheet from running a value as a formula */
function safe_cell($v)
{
    return preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v;
}


/* ---------------- BASIC CHECKS + SPAM ---------------- */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    finish(false, 'Invalid request.', 405);
}

// honeypot: real visitors never fill this hidden field
if (!empty($_POST['website_hp'])) {
    finish(true, 'Thank you! Our team will contact you shortly.');   // pretend success, save nothing
}

// 1 submission per 30 seconds per visitor
session_start();
if (!empty($_SESSION['lead_last']) && time() - $_SESSION['lead_last'] < 30) {
    finish(false, 'Please wait a few seconds before submitting again.', 429);
}


/* ---------------- VALIDATE ---------------- */

$page  = clean($_POST['source_page'] ?? '');
$name  = clean($_POST['full_name'] ?? '');
$email = clean($_POST['email'] ?? '');
$phone = clean($_POST['phone'] ?? '', 25);
$state = clean($_POST['state'] ?? '');

if ($name === '' || $email === '' || $phone === '' || $state === '') {
    finish(false, 'Please fill all required fields.', 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    finish(false, 'Please enter a valid email address.', 422);
}
if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    finish(false, 'Please enter a valid phone number.', 422);
}
if ($page === '') {
    $page = 'Unknown page';
}


/* ---------------- SAVE TO GOOGLE SHEETS ---------------- */

$payload = [
    'token' => SHEETS_TOKEN,
    'form'  => 'service',
    'page'  => safe_cell($page),
    'date'  => date('d/m/Y'),
    'name'  => safe_cell($name),
    'email' => $email,
    'phone' => $phone,
    'state' => safe_cell($state),
];

$saved = false;
if (strpos(SHEETS_URL_SERVICE, 'PASTE_') === false && function_exists('curl_init')) {
    $ch = curl_init(SHEETS_URL_SERVICE);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,   // Apps Script answers with a redirect
        CURLOPT_TIMEOUT        => 20,
    ]);
    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error    = curl_error($ch);
    curl_close($ch);

    if ($response !== false && $status === 200) {
        $json  = json_decode($response, true);
        $saved = is_array($json) && !empty($json['ok']);
    }
    if (!$saved) {
        error_log('Minerdia lead -> Sheets failed: ' . $error . ' (HTTP ' . $status . ') ' . substr((string) $response, 0, 200));
    }
}


/* ---------------- OPTIONAL EMAIL ---------------- */

$emailed = false;
if (LEAD_EMAIL_ENABLED) {
    $body  = "Service Page: $page\nDate: " . date('d/m/Y') . "\nName: $name\nEmail: $email\nPhone: $phone\nState: $state\n";
    $head  = "From: " . LEAD_EMAIL_FROM . "\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";
    $emailed = @mail(LEAD_EMAIL_TO, 'New Lead - ' . $page . ' - ' . $name, $body, $head);
}


/* ---------------- RESULT ---------------- */

if ($saved || $emailed) {
    $_SESSION['lead_last'] = time();
    finish(true, 'Thank you! Our team will contact you shortly.');
}

finish(false, 'Something went wrong. Please try again or call us.', 500);
