<?php
/* =========================================================
   MINERDIA STUDIO – HOME PAGE CONTACT FORM HANDLER
   (the "Start Your Growth Journey" form in home-page/form1.php)
   Saves to Google Sheets ("Home Contact" tab).
   Settings live in /config.php (LEADS section).
   ========================================================= */

require_once __DIR__ . '/../include/lead-helpers.php';

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

lead_guard('contact');

$name     = lead_clean($_POST['name'] ?? '', 250);
$business = lead_clean($_POST['business_name'] ?? '', 250);
$phone    = lead_clean($_POST['phone'] ?? '', 25);
$email    = lead_clean($_POST['email'] ?? '', 250);
$website  = lead_clean($_POST['website'] ?? '', 250);
$service  = lead_clean($_POST['services'] ?? '', 250);
$terms    = lead_clean($_POST['terms'] ?? '');

if ($name === '' || $business === '' || $phone === '' || $email === '' || $service === '') {
    lead_finish(false, 'Please fill all required fields.', 422);
}
if ($terms !== 'on') {
    lead_finish(false, 'Please accept the Terms and Conditions and Privacy Policy.', 422);
}
if (!lead_valid_phone($phone)) {
    lead_finish(false, 'Please enter a valid phone number.', 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    lead_finish(false, 'Please enter a valid email address.', 422);
}
if (!lead_valid_url($website)) {
    lead_finish(false, 'Please enter a valid website URL (include https://).', 422);
}
if (!in_array($service, $ALLOWED_SERVICES, true)) {
    lead_finish(false, 'Please choose a service from the list.', 422);
}

$saved = lead_save_to_sheets(
    lead_sheets_url([SHEETS_URL_CONTACT, SHEETS_URL_AUDIT, SHEETS_URL_SERVICE]),
    [
        'form'     => 'contact',
        'date'     => date('d/m/Y'),
        'name'     => lead_safe_cell($name),
        'business' => lead_safe_cell($business),
        'phone'    => $phone,
        'email'    => $email,
        'website'  => lead_safe_cell($website),
        'service'  => lead_safe_cell($service),
        'page'     => lead_safe_cell(lead_clean($_SERVER['HTTP_REFERER'] ?? '', 250)),
    ],
    'contact form'
);

$emailed = lead_email(
    'New Website Enquiry - ' . $business,
    "Name: $name\nBusiness: $business\nPhone: $phone\nEmail: $email\nWebsite: $website\nService: $service\n",
    $email
);

if ($saved || $emailed) {
    lead_mark_done('contact');
    lead_finish(true, 'Thank you! Our team will contact you shortly.');
}

lead_finish(false, 'Something went wrong. Please try again.', 500);
