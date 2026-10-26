<?php
/* =========================================================
   MINERDIA STUDIO – FREE AUDIT FORM HANDLER
   Saves every submission to Google Sheets (via Apps Script)
   and can optionally also send an email.
   Settings live in /config.php (LEADS section).
   ========================================================= */

require_once __DIR__ . '/../include/lead-helpers.php';

lead_guard('audit');

$name     = lead_clean($_POST['name'] ?? '');
$business = lead_clean($_POST['business'] ?? '');
$website  = lead_clean($_POST['website'] ?? '', 250);
$phone    = lead_clean($_POST['phone'] ?? '', 25);
$service  = lead_clean($_POST['service'] ?? '');
$budget   = lead_clean($_POST['budget'] ?? '');

if ($name === '' || $business === '' || $phone === '' || $service === '' || $budget === '') {
    lead_finish(false, 'Please fill all required fields.', 422);
}
if (($_POST['consent'] ?? '') !== 'yes') {
    lead_finish(false, 'Please accept the Terms & Conditions and Privacy Policy.', 422);
}
if (!lead_valid_phone($phone)) {
    lead_finish(false, 'Please enter a valid phone number.', 422);
}
if (!lead_valid_url($website)) {
    lead_finish(false, 'Please enter a valid website URL (include https://).', 422);
}

$saved = lead_save_to_sheets(
    lead_sheets_url([SHEETS_URL_AUDIT, SHEETS_URL_SERVICE]),
    [
        'form'     => 'audit',
        'date'     => date('d/m/Y'),
        'name'     => lead_safe_cell($name),
        'business' => lead_safe_cell($business),
        'website'  => lead_safe_cell($website),
        'phone'    => $phone,
        'service'  => lead_safe_cell($service),
        'budget'   => lead_safe_cell($budget),
        'page'     => lead_safe_cell(lead_clean($_SERVER['HTTP_REFERER'] ?? '', 250)),
    ],
    'audit form'
);

$emailed = lead_email(
    'New Free Audit Request - ' . $business,
    "Name: $name\nBusiness: $business\nWebsite: $website\nPhone: $phone\nService: $service\nBudget: $budget\n"
);

if ($saved || $emailed) {
    lead_mark_done('audit');
    lead_finish(true, 'Thank you! Our team will contact you shortly.');
}

lead_finish(false, 'Something went wrong. Please try again.', 500);