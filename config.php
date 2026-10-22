<?php
/* =========================================================
   MINERDIA STUDIO – CONFIG  (the only file you edit for
   site-wide settings)
   ========================================================= */

/* ---------- LIVE vs LOCAL ---------- */
$LIVE_URL     = 'https://minerdiastudio.com';   // the real website, no trailing slash
$LOCAL_FOLDER = null;                           // null = auto-detect (e.g. /Minerdia_Studio/). Or set by hand: '/Minerdia_Studio/'

/* ---------- SITE ---------- */
define('SITE_NAME',        'Minerdia Studio');
define('DEFAULT_DESC',     'Minerdia Studio is a digital marketing agency in India offering SEO, social media, paid ads, web development, podcast, video and email marketing services.');

/* ---------- LOGOS  (files inside assets/image/logo/) ----------
   Change the file names to match yours. If a file is missing,
   the old logo URL below is used instead.                        */
define('LOGO_HEADER',   'header-logo-2.webp');
define('LOGO_FOOTER',   'footer-logo-1.webp');
define('LOGO_WHATSAPP', 'whatsapp.webp');       // missing = built-in WhatsApp icon is used
define('LOGO_SHARE',    'logo-header.webp');    // image shown when a link is shared (Open Graph)

/* ---------- CONTACT ---------- */
define('ADDRESS',   '2nd Floor, Plot No-456, Kakrola Housing Complex, Opposite Metro Pillar 796, Dwarka Mor, New Delhi-110078');
define('MAP_URL',   'https://share.google/5pqBE6DiiJmTzchum');
define('EMAIL',     'info@minerdiastudio.com');
define('EMAIL2',    'marketingminerdia@gmail.com');
define('PHONE',     '+919711555223');
define('PHONE_TXT', '+91 9711555223');

/* ---------- WHATSAPP (floating button) ---------- */
define('WHATSAPP_NUMBER',  '919711555223');     // country code + number, digits only
define('WHATSAPP_MESSAGE', 'Hi Minerdia Studio, I would like to know more about your services.');

/* ---------- SOCIAL ---------- */
define('FACEBOOK',  'https://www.facebook.com/share/1DuRJ3KHHW/?mibextid=wwXIfr');
define('PINTEREST', 'https://in.pinterest.com/minerdiastudio/');
define('INSTAGRAM', 'https://www.instagram.com/minerdiastudio/');
define('LINKEDIN',  'https://www.linkedin.com/company/minerdia-studio/');
define('YOUTUBE',   'https://www.youtube.com/@minerdiastudio');


/* ---------- LEADS  (Google Sheets + optional email) ----------
   Paste the Apps Script "Web app" URLs here (see google-apps-script-service-leads.gs).
   SHEETS_TOKEN must be EXACTLY the same as SECRET_TOKEN inside the Apps Script.   */
define('SHEETS_TOKEN',        'kR7xPm2nQw9Lb4Yt6HjZ');   // must match the token in the Google Apps Script
define('SHEETS_URL_SERVICE',  'https://script.google.com/macros/s/AKfycbyhfUgWSLXSzyUEZw3IkCOoOjGuxrLoHoFtBuWppwmVRhhzyDuJe4nwheDvOAHv1OBU/exec');   // service-page forms  -> "Service Leads" tab
define('SHEETS_URL_AUDIT',    'PASTE_AUDIT_WEB_APP_URL_HERE');           // free audit popup    -> "Get Free Audit Form" tab
define('SHEETS_URL_CONTACT',  '');                                       // home contact form   (empty = uses the audit URL)

define('LEAD_EMAIL_ENABLED',  false);                                    // also email every lead? (mail() often fails on localhost)
define('LEAD_EMAIL_TO',       EMAIL);
define('LEAD_EMAIL_FROM',     'no-reply@minerdiastudio.com');


/* =========================================================
   Nothing below needs editing
   ========================================================= */

$__host  = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'localhost'));
$__local = in_array($__host, ['localhost', '127.0.0.1', '::1', '[::1]'], true) || substr($__host, -6) === '.local' || substr($__host, -5) === '.test';

if ($__local) {
    $__base = $LOCAL_FOLDER;
    if ($__base === null) {
        $__root = realpath($_SERVER['DOCUMENT_ROOT'] ?? '') ?: '';
        $__here = realpath(__DIR__) ?: '';
        $__base = ($__root !== '' && strpos($__here, $__root) === 0) ? str_replace('\\', '/', substr($__here, strlen($__root))) : '/';
    }
} else {
    $__base = parse_url($LIVE_URL, PHP_URL_PATH) ?: '/';
}

define('SITE_ENV',  $__local ? 'local' : 'live');
define('BASE',      '/' . trim($__base, '/') . (trim($__base, '/') === '' ? '' : '/'));   // prefix for internal links
define('LIVE_BASE', rtrim($LIVE_URL, '/') . '/');                                          // used for canonical / share URLs

/** URL of a file in assets/image/logo/ – or $fallback when the file isn't there yet. */
function logo_url($file, $fallback = '')
{
    return is_file(__DIR__ . '/assets/image/logo/' . $file) ? BASE . 'assets/image/logo/' . $file : $fallback;
}

function e($v)
{
    return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8');
}
