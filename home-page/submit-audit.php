<?php
/* =========================================================
   MINERDIA STUDIO – FREE AUDIT FORM HANDLER
   Saves every submission to Google Sheets (via Apps Script)
   and can optionally also send an email.
   ========================================================= */

require_once __DIR__ . '/../config.php';
header('Content-Type: application/json; charset=utf-8');

/* ---- settings now live in /config.php (LEADS section) ---- */

// Web app URL you get after deploying google-apps-script.gs
// (falls back to SHEETS_URL_SERVICE: one Apps Script handles all forms)
$GOOGLE_SCRIPT_URL = (strpos(SHEETS_URL_AUDIT, 'PASTE_') === false) ? SHEETS_URL_AUDIT : SHEETS_URL_SERVICE;

// Must be EXACTLY the same as SECRET_TOKEN inside google-apps-script.gs
$SECRET_TOKEN = SHEETS_TOKEN;

// Also email each lead? (mail() often fails on localhost)
$SEND_EMAIL = LEAD_EMAIL_ENABLED;
$EMAIL_TO   = LEAD_EMAIL_TO;
$EMAIL_FROM = LEAD_EMAIL_FROM;

/* -------------------------------------------- */


function respond($ok, $message, $code = 200)
{
    http_response_code($code);
    echo json_encode(['ok' => $ok, 'message' => $message]);
    exit;
}

function clean($v)
{
    return trim(strip_tags($v ?? ''));
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !empty($_POST['website_hp'])) {
    respond(false, 'Invalid request.', 400);
}

$name     = clean($_POST['name'] ?? '');
$business = clean($_POST['business'] ?? '');
$website  = clean($_POST['website'] ?? '');
$phone    = clean($_POST['phone'] ?? '');
$service  = clean($_POST['service'] ?? '');
$budget   = clean($_POST['budget'] ?? '');

if (!$name || !$business || !$phone || !$service || !$budget) {
    respond(false, 'Please fill all required fields.');
}

if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    respond(false, 'Please enter a valid phone number.');
}

if ($website !== '' && !filter_var($website, FILTER_VALIDATE_URL)) {
    respond(false, 'Please enter a valid website URL (include https://).');
}


/* ---------------- SAVE TO GOOGLE SHEETS ---------------- */

$payload = [
    'token'    => $SECRET_TOKEN,
    'form'     => 'audit',
    'name'     => $name,
    'business' => $business,
    'website'  => $website,
    'phone'    => $phone,
    'service'  => $service,
    'budget'   => $budget,
    'page'     => clean($_SERVER['HTTP_REFERER'] ?? ''),
];

$saved = false;

if (function_exists('curl_init')) {

    $ch = curl_init($GOOGLE_SCRIPT_URL);

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
    } else {
        error_log('Minerdia Sheets error: ' . $error . ' (HTTP ' . $status . ')');
    }
}


/* ---------------- OPTIONAL EMAIL ---------------- */

$emailed = false;

if ($SEND_EMAIL) {

    $body  = "Name: $name\nBusiness: $business\nWebsite: $website\n";
    $body .= "Phone: $phone\nService: $service\nBudget: $budget\n";

    $headers  = "From: $EMAIL_FROM\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $emailed = @mail($EMAIL_TO, 'New Free Audit Request - ' . $business, $body, $headers);
}


if ($saved || $emailed) {
    respond(true, 'Thank you! Our team will contact you shortly.');
}

respond(false, 'Something went wrong. Please try again.', 500);
