<?php
/* =========================================================
   MINERDIA STUDIO – SHARED SERVICE-PAGE FORM HANDLER
   Used by every service page form (SEO, Podcast, Paid Ads...).
   Saves to Google Sheets ("Service Leads" tab):
   Service Page | Date | Full Name | Email | Phone Number | States
   Settings live in config.php (LEADS section).
   ========================================================= */

require_once __DIR__ . '/include/lead-helpers.php';

lead_guard('service');

$page  = lead_clean($_POST['source_page'] ?? '');
$name  = lead_clean($_POST['full_name'] ?? '');
$email = lead_clean($_POST['email'] ?? '');
$phone = lead_clean($_POST['phone'] ?? '', 25);
$state = lead_clean($_POST['state'] ?? '');

if ($name === '' || $email === '' || $phone === '' || $state === '') {
    lead_finish(false, 'Please fill all required fields.', 422);
}
if (($_POST['consent'] ?? '') !== 'yes') {
    lead_finish(false, 'Please accept the Terms & Conditions and Privacy Policy.', 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    lead_finish(false, 'Please enter a valid email address.', 422);
}
if (!lead_valid_phone($phone)) {
    lead_finish(false, 'Please enter a valid phone number.', 422);
}
if ($page === '') {
    $page = 'Unknown page';
}

$saved = lead_save_to_sheets(
    lead_sheets_url([SHEETS_URL_SERVICE]),
    [
        'form'  => 'service',
        'page'  => lead_safe_cell($page),
        'date'  => date('d/m/Y'),
        'name'  => lead_safe_cell($name),
        'email' => $email,
        'phone' => $phone,
        'state' => lead_safe_cell($state),
    ],
    'service lead'
);

$emailed = lead_email(
    'New Lead - ' . $page . ' - ' . $name,
    "Service Page: $page\nDate: " . date('d/m/Y') . "\nName: $name\nEmail: $email\nPhone: $phone\nState: $state\n",
    $email
);

if ($saved || $emailed) {
    lead_mark_done('service');
    lead_finish(true, 'Thank you! Our team will contact you shortly.');
}

lead_finish(false, 'Something went wrong. Please try again or call us.', 500);
