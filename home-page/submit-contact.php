<?php
/* =========================================================
   MINERDIA STUDIO – HOME PAGE CONTACT FORM HANDLER
   (the "Start Your Growth Journey" form in home-page/form1.php)

   Same set-up as submit-audit.php: saves every submission to
   Google Sheets (via Apps Script) and can optionally email it.
   ========================================================= */

require_once __DIR__ . '/../config.php';
header('Content-Type: application/json; charset=utf-8');

/* ---- settings now live in /config.php (LEADS section) ---- */

// Web app URL you get after deploying your Apps Script
$GOOGLE_SCRIPT_URL = (SHEETS_URL_CONTACT !== '' ? SHEETS_URL_CONTACT : SHEETS_URL_AUDIT);

// Must be EXACTLY the same as SECRET_TOKEN inside the Apps Script
$SECRET_TOKEN = SHEETS_TOKEN;

// Also email each lead? (mail() often fails on localhost)
$SEND_EMAIL = LEAD_EMAIL_ENABLED;
$EMAIL_TO   = LEAD_EMAIL_TO;
$EMAIL_FROM = LEAD_EMAIL_FROM;

/* -------------------------------------------- */


// Must match the options in the Services dropdown of form1.php
$ALLOWED_SERVICES = [
    'Social Media Management',
    'Podcast',
    'Google Ads',
    'Facebook Ads',
    'Email Marketing',
    'Scriptwriting',
    'Video Editing',
    'Graphic Designing',
    'Search Engine Optimization (SEO)',
];


function respond($ok, $message, $code = 200)
{
    http_response_code($code);
    echo json_encode(['ok' => $ok, 'message' => $message]);
    exit;
}

function clean($v)
{
    if (!is_string($v)) {
        return '';
    }

    return mb_substr(trim(strip_tags($v)), 0, 250);
}

function is_local_request()
{
    $ip = $_SERVER['REMOTE_ADDR'] ?? '';

    return $ip === '127.0.0.1' || $ip === '::1';
}


/* ---------------- BASIC CHECKS ---------------- */

// Bots fill the hidden honeypot field; people never see it
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !empty($_POST['website_hp'])) {
    respond(false, 'Invalid request.', 400);
}

$name     = clean($_POST['name'] ?? '');
$business = clean($_POST['business_name'] ?? '');
$phone    = clean($_POST['phone'] ?? '');
$email    = clean($_POST['email'] ?? '');
$website  = clean($_POST['website'] ?? '');
$service  = clean($_POST['services'] ?? '');
$terms    = clean($_POST['terms'] ?? '');

if (!$name || !$business || !$phone || !$email || !$service) {
    respond(false, 'Please fill all required fields.');
}

if ($terms !== 'on') {
    respond(false, 'Please accept the Terms and Conditions and Privacy Policy.');
}

if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    respond(false, 'Please enter a valid phone number.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please enter a valid email address.');
}

if ($website !== '' && (!filter_var($website, FILTER_VALIDATE_URL) || !preg_match('#^https?://#i', $website))) {
    respond(false, 'Please enter a valid website URL (include https://).');
}

if (!in_array($service, $ALLOWED_SERVICES, true)) {
    respond(false, 'Please choose a service from the list.');
}


/* ---------------- SAVE TO GOOGLE SHEETS ---------------- */

$sheetsConfigured = strpos($GOOGLE_SCRIPT_URL, 'PASTE_') === false;

$payload = [
    'token'    => $SECRET_TOKEN,
    'form'     => 'home-contact',      // lets your Apps Script tell this form from the audit form
    'name'     => $name,
    'business' => $business,
    'phone'    => $phone,
    'email'    => $email,
    'website'  => $website,
    'service'  => $service,
    'page'     => clean($_SERVER['HTTP_REFERER'] ?? ''),
];

$saved = false;

if ($sheetsConfigured && function_exists('curl_init')) {

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
        error_log('Minerdia contact form - Sheets error: ' . $error . ' (HTTP ' . $status . ')');
    }
}


/* ---------------- OPTIONAL EMAIL ---------------- */

$emailed = false;

if ($SEND_EMAIL) {

    $body  = "Name: $name\nBusiness: $business\nPhone: $phone\nEmail: $email\n";
    $body .= "Website: $website\nService: $service\n";

    // Remove line breaks so nothing can be injected into the mail headers
    $safeBusiness = preg_replace('/[\r\n]+/', ' ', $business);

    $headers  = "From: $EMAIL_FROM\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $emailed = @mail($EMAIL_TO, 'New Website Enquiry - ' . $safeBusiness, $body, $headers);
}


if ($saved || $emailed) {
    respond(true, 'Thank you! Our team will contact you shortly.');
}

// Helpful hint while developing on localhost only (never shown to real visitors)
if (!$sheetsConfigured && !$SEND_EMAIL && is_local_request()) {
    respond(false, 'Form works, but nothing is connected yet: set $GOOGLE_SCRIPT_URL (or $SEND_EMAIL) in home-page/submit-contact.php.', 500);
}

respond(false, 'Something went wrong. Please try again.', 500);
