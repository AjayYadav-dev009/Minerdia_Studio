<?php
// Each section: a title and a list of content blocks.
// Block types: 'h4' (sub heading), 'p' (paragraph), 'ul' (bullet list).
// 'p' and 'ul' items are trusted static HTML, so <strong>, <a> and <br> are allowed inside them.
$sections = [
    [
        'title'  => '1. Who We Are',
        'blocks' => [
            ['p', '<strong>Minerdia Studio</strong> is a digital marketing agency and creative production house offering social media management, content creation, video production, Meta Ads management, Telegram channel management, and related services.'],
            ['p', '<strong>Website:</strong> <a href="https://minerdiastudio.com/">minerdiastudio.com</a>'],
            ['p', '<strong>Contact Email:</strong> <a href="mailto:info@minerdiastudio.com">info@minerdiastudio.com</a>'],
            ['p', '<strong>Business Location:</strong> <a href="https://share.google/JtRUDNY6CCb9P9koU" target="_blank" rel="noopener">Dwarka, Delhi</a>'],
        ],
    ],
    [
        'title'  => '2. Information We Collect',
        'blocks' => [
            ['p', 'We collect information in the following ways:'],
            ['h4', '2.1 Information You Provide Directly'],
            ['ul', [
                'Name, email address, and phone number submitted through contact forms or inquiry messages',
                'Business name, industry, and social media handles shared during onboarding',
                'Payment details (processed securely through third-party payment gateways — we do not store card or UPI information directly)',
                'Brand assets, logos, images, and written content shared for creative production',
                'Feedback, revision notes, and communications exchanged via email, WhatsApp, or any other channel',
            ]],
            ['h4', '2.2 Information Collected Automatically'],
            ['p', 'When you visit our website, we may automatically collect:'],
            ['ul', [
                'IP address and browser type',
                'Pages visited and time spent on the site',
                'Referring URL (the page that brought you to our site)',
                'Device type and operating system',
            ]],
            ['p', 'This data is collected through cookies and standard web analytics tools (such as Google Analytics) to help us understand how visitors use our website and improve the experience.'],
            ['h4', '2.3 Information from Third-Party Platforms'],
            ['p', 'When we manage your social media accounts (Instagram, Facebook, Telegram, etc.), we may access performance data, audience insights, and engagement metrics as authorised by you. This data is used solely to optimize your campaigns and is never shared with other clients or third parties.'],
        ],
    ],
    [
        'title'  => '3. How We Use Your Information',
        'blocks' => [
            ['p', '<strong>Minerdia Studio</strong> uses the information we collect for the following purposes:'],
            ['ul', [
                'To respond to inquiries and communicate with prospective clients',
                'To onboard new clients and set up service agreements',
                'To deliver agreed services — content creation, scheduling, ads management, and reporting',
                'To send service-related updates, invoices, and project communications',
                'To improve our website experience and understand visitor behaviour',
                'To maintain internal records and comply with legal obligations',
                'To showcase completed work in our portfolio (subject to client consent)',
            ]],
            ['p', 'We do not use your personal information for unsolicited marketing. We do not sell, rent, or trade your personal data to any third party.'],
        ],
    ],
    [
        'title'  => '4. How We Store and Protect Your Information',
        'blocks' => [
            ['p', 'Your information is stored securely on our business systems and cloud tools (such as Google Drive, project management platforms, and email services). We take reasonable technical and organisational measures to protect your data against unauthorised access, loss, or misuse.'],
            ['p', 'While we do our best to protect your information, no method of digital storage or transmission is 100% secure. We encourage you to communicate sensitive credentials only through agreed secure channels.'],
            ['p', 'Client data is retained for as long as the engagement is active, and for a period of up to 2 years after the engagement ends, unless you request deletion earlier.'],
        ],
    ],
    [
        'title'  => '5. Sharing of Information',
        'blocks' => [
            ['p', '<strong>Minerdia Studio</strong> does not sell or share your personal data with third parties for commercial purposes. Limited sharing may occur in the following situations:'],
            ['ul', [
                'With trusted tools and platforms we use to deliver services — such as Meta Business Suite, Google Ads, scheduling tools, and cloud storage — only to the extent necessary for service delivery',
                'With payment processors when handling invoices or transactions — these parties are governed by their own privacy policies',
                'With legal or regulatory authorities if required by applicable law',
            ]],
            ['p', 'All third-party tools we use are reputable platforms with their own data protection policies. We recommend reviewing their policies for complete information.'],
        ],
    ],
    [
        'title'  => '6. Cookies',
        'blocks' => [
            ['p', 'Our website may use cookies — small text files stored on your device — to enhance your browsing experience and gather website analytics.'],
            ['p', 'Types of cookies we may use:'],
            ['ul', [
                '<strong>Essential cookies:</strong> Required for the website to function properly',
                '<strong>Analytics cookies:</strong> Help us understand how visitors interact with our site (e.g., Google Analytics)',
                '<strong>Preference cookies:</strong> Remember your settings and preferences for future visits',
            ]],
            ['p', 'You can control or disable cookies through your browser settings. Please note that disabling cookies may affect the functionality of some parts of our website.'],
        ],
    ],
    [
        'title'  => '7. Client Content and Brand Assets',
        'blocks' => [
            ['p', 'Any brand assets, images, videos, written content, or business information you share with us for the purpose of delivering our services remain your intellectual property. We handle all client content with strict confidentiality and do not use it for any purpose beyond the agreed scope of work.'],
            ['p', 'With your explicit permission, we may feature completed work (such as reels, posts, or campaign results) in our portfolio or social media. If you prefer your work to remain confidential, please inform us in writing before or during onboarding'],
        ],
    ],
    [
        'title'  => '8. Social Media and Third-Party Links',
        'blocks' => [
            ['p', 'Our website may contain links to our social media profiles or third-party websites. Clicking on these links will take you away from our site. <strong>Minerdia Studio</strong> is not responsible for the privacy practices of external websites or platforms. We encourage you to read the privacy policies of any third-party sites you visit.'],
        ],
    ],
    [
        'title'  => '9. Children’s Privacy',
        'blocks' => [
            ['p', 'Our services are intended for businesses and professionals. We do not knowingly collect personal information from individuals under the age of 18. If we become aware that a minor has submitted personal data to us, we will delete it promptly. If you believe this has occurred, please contact us immediately.'],
        ],
    ],
    [
        'title'  => '10. Your Rights',
        'blocks' => [
            ['p', 'As someone whose data we hold, you have the following rights:'],
            ['ul', [
                'Access: Request a copy of the personal information we hold about you',
                'Correction: Ask us to correct any inaccurate or incomplete information',
                'Deletion: Request that we delete your personal data, subject to any legal obligations we may have to retain it',
                'Objection: Object to how we are using your information in certain circumstances',
                'Withdrawal of Consent: Where we rely on your consent to process data, you may withdraw it at any time',
            ]],
            ['p', 'To exercise any of these rights, please write to us at <a href="mailto:info@minerdiastudio.com">info@minerdiastudio.com</a>. We will respond within 14 business days.'],
        ],
    ],
    [
        'title'  => '11. Data Breach Notification',
        'blocks' => [
            ['p', 'In the unlikely event of a data breach that may affect your personal information, <strong>Minerdia Studio</strong> will notify affected individuals in a timely manner and take all reasonable steps to mitigate the impact. We will also report the breach to relevant authorities as required by applicable law.'],
        ],
    ],
    [
        'title'  => '12. Changes to This Privacy Policy',
        'blocks' => [
            ['p', '<strong>Minerdia Studio</strong> reserves the right to update this Privacy Policy at any time to reflect changes in our practices, services, or legal requirements. The updated policy will be published on our website with a revised date at the top. We encourage you to review this page periodically.'],
            ['p', 'Continued use of our website or services after any update constitutes your acceptance of the revised policy.'],
        ],
    ],
    [
        'title'  => '13. Governing Law',
        'blocks' => [
            ['p', 'This Privacy Policy is governed by the laws of India. Any disputes related to data privacy will be subject to the jurisdiction of the courts located in <strong>Dwarka mor, Delhi.</strong>'],
        ],
    ],
    [
        'title'  => '14. Contact Us',
        'blocks' => [
            ['p', 'If you have any questions, concerns, or requests related to this Privacy Policy, please get in touch with us:'],
            ['p', '<strong>Minerdia Studio</strong>'],
            ['p', 'Website: www.minerdiastudio.com'],
            ['p', 'Email: <a href="mailto:info@minerdiastudio.com">info@minerdiastudio.com</a>'],
            ['p', 'Phone: <a href="tel:+919711555223">+91 9711555223</a>'],
            ['p', 'Address: <a href="https://share.google/JtRUDNY6CCb9P9koU" target="_blank" rel="noopener">2nd Floor, kakrola complex, Plot no.5, Nishat Park, Sector 15 Dwarka, Dwarka, Delhi, 110078</a>'],
        ],
    ],
];
?>
<section class="ms-pbody">
    <style>

        .ms-pbody {
            --purple: #5A2EA6;
            --link: #1fa596;
            width: 100%;
            padding: 20px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
            overflow: hidden;
        }

        .ms-pbody-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            gap: 30px;
        }

        .ms-pbody-item {
            scroll-margin-top: 100px;
        }

        .ms-pbody-item h3 {
            margin: 0 0 16px;
            font-size: 24px;
            line-height: 1.35;
            font-weight: 600;
            color: var(--purple);
        }

        .ms-pbody-card {
            padding: 22px 28px 20px;
            border: 1px solid #ddd6ea;
            border-radius: 14px;
            background: linear-gradient(180deg, #faf9fd 0%, #f3f0f9 100%);
            box-shadow: 0 2px 8px rgba(90, 46, 166, .06);
        }

        .ms-pbody-card h4 {
            margin: 18px 0 4px;
            font-size: 18px;
            line-height: 1.4;
            font-weight: 600;
            color: #000;
        }

        .ms-pbody-card h4:first-child {
            margin-top: 0;
        }

        .ms-pbody-card p {
            margin: 0 0 12px;
            font-size: 16px;
            line-height: 1.7;
            font-weight: 400;
            text-align: justify;
            color: #222;
        }

        .ms-pbody-card ul {
            margin: 0 0 12px;
            padding-left: 26px;
            display: grid;
            gap: 4px;
        }

        .ms-pbody-card li {
            font-size: 14px;
            line-height: 1.65;
            font-weight: 400;
            color: #222;
        }

        .ms-pbody-card strong {
            font-weight: 600;
            color: #000;
        }

        .ms-pbody-card a {
            color: var(--link);
            text-decoration: none;
            overflow-wrap: anywhere;
        }

        .ms-pbody-card a:hover {
            text-decoration: underline;
        }

        .ms-pbody-card > :last-child {
            margin-bottom: 0;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-pbody-item h3 {
                font-size: 19px;
            }
        }

        @media (max-width: 575px) {
            .ms-pbody {
                padding: 10px 14px 44px;
            }

            .ms-pbody-wrap {
                gap: 24px;
            }

            .ms-pbody-item h3 {
                font-size: 17px;
            }

            .ms-pbody-card {
                padding: 16px 16px 14px;
            }

            .ms-pbody-card p {
                text-align: left;
            }

            .ms-pbody-card p,
            .ms-pbody-card li {
                font-size: 13.5px;
            }

            .ms-pbody-card ul {
                padding-left: 20px;
            }
        }
    </style>

    <div class="ms-pbody-wrap">
        <?php foreach ($sections as $i => $sec) : ?>
            <div class="ms-pbody-item" id="privacy-<?php echo $i + 1; ?>">
                <h3><?php echo htmlspecialchars($sec['title']); ?></h3>
                <div class="ms-pbody-card">
                    <?php foreach ($sec['blocks'] as $block) : ?>
                        <?php if ($block[0] === 'h4') : ?>
                            <h4><?php echo htmlspecialchars($block[1]); ?></h4>
                        <?php elseif ($block[0] === 'p') : ?>
                            <p><?php echo $block[1]; ?></p>
                        <?php elseif ($block[0] === 'ul') : ?>
                            <ul>
                                <?php foreach ($block[1] as $li) : ?>
                                    <li><?php echo $li; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
