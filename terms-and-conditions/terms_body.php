<?php
// Each section: a title and a list of content blocks.
// Block types: 'h4' (sub heading), 'p' (paragraph), 'ul' (bullet list).
// Content is trusted static HTML, so <strong>, <a> and <br> are allowed inside it.
$sections = [
    [
        'title'  => '1. About Minerdia Studio',
        'blocks' => [
            ['p', '<strong>Minerdia Studio</strong> is a full-service digital marketing agency and creative production house. We provide:'],
            ['ul', [
                'Social media management and content creation',
                'Reels, video production, and post-production editing',
                'Meta Ads and performance marketing campaigns',
                'Brand identity and creative strategy',
                'Telegram channel management and community building',
                'Monthly retainer packages and custom project engagements',
            ]],
            ['p', 'Registered Business: Minerdia Studio | Website: <a href="https://minerdiastudio.com/"><strong>minerdiastudio.com</strong></a>'],
        ],
    ],
    [
        'title'  => '2. Service Agreements and Packages',
        'blocks' => [
            ['h4', '2.1 Package Tiers'],
            ['p', 'Minerdia Studio offers the following standard service packages:'],
            ['ul', [
                'Starter Pack — ₹20,000/month: Ideal for businesses beginning their digital presence',
                'Growth Retainer — ₹60,000/month: For brands looking to scale consistently',
                'Full Creative Partnership — ₹1,50,000/month: End-to-end creative and marketing management',
            ]],
            ['p', 'Custom packages may also be offered based on scope. All deliverables and timelines for custom work will be outlined in a separate Scope of Work (SOW) document.'],
            ['h4', '2.2 Scope of Work'],
            ['p', 'The scope of work, number of deliverables, and revision rounds included in each engagement will be communicated in writing at the time of onboarding. Any work beyond the agreed scope will be quoted and approved separately before execution.'],
        ],
    ],
    [
        'title'  => '3. Payments and Billing',
        'blocks' => [
            ['h4', '3.1 Payment Terms'],
            ['ul', [
                'All monthly retainer fees are due at the start of each billing cycle, before work commences for that month.',
                'Project-based engagements require a 50% advance payment prior to commencement, with the remaining 50% due upon delivery.',
                'Payments must be made via the agreed payment method (bank transfer, UPI, or other mutually agreed mode).',
            ]],
            ['h4', '3.2 Late Payments'],
            ['p', 'If a payment is delayed by more than 7 days from the due date, Minerdia Studio reserves the right to pause active deliverables until payment is received. Work will resume within 2 business days of payment confirmation.'],
            ['h4', '3.3 Refund Policy'],
            ['p', 'Due to the nature of creative and digital services, fees paid are generally non-refundable once work has commenced. In cases where Minerdia Studio is unable to deliver agreed services due to reasons within our control, a pro-rated refund may be considered at our discretion. Refund requests must be raised in writing within 7 days of the disputed delivery.'],
        ],
    ],
    [
        'title'  => '4. Client Responsibilities',
        'blocks' => [
            ['p', 'To ensure smooth delivery of our services, the client agrees to:'],
            ['ul', [
                'Provide accurate brand information, login credentials, and creative assets in a timely manner',
                'Respond to feedback requests and approval queries within 48 hours to avoid timeline delays',
                'Appoint a primary point of contact for communication with the Minerdia team',
                'Ensure that all content, assets, or references provided to us are either owned by the client or properly licensed for use',
                'Not share proprietary strategies, content plans, or creative frameworks developed by Minerdia Studio with third parties',
            ]],
        ],
    ],
    [
        'title'  => '5. Revisions and Approvals',
        'blocks' => [
            ['p', 'Each deliverable includes up to 2 rounds of revisions as standard, unless otherwise specified in the service agreement. Revision requests must be specific, consolidated, and submitted within 48 hours of receiving the draft.'],
            ['p', 'Additional revisions beyond the included rounds will be billed at ₹500–₹2,000 per revision depending on the scope of work, and will be quoted before execution.'],
            ['p', 'Once a deliverable has been approved — verbally, via message, or in writing — it is considered final. Changes requested after approval will be treated as new work.'],
        ],
    ],
    [
        'title'  => '6. Content Ownership and Intellectual Property',
        'blocks' => [
            ['h4', '6.1 Client-Owned Content'],
            ['p', 'Upon receipt of full payment for the relevant deliverable or month, all final creative outputs — including graphics, videos, written content, and edited reels — produced specifically for the client become the property of the client.'],
            ['h4', '6.2 Minerdia Studio Portfolio Rights'],
            ['p', 'Minerdia Studio retains the right to showcase completed work in our portfolio, case studies, website, and social media, unless the client has specifically requested confidentiality in writing prior to project commencement.'],
            ['h4', '6.3 Pre-Existing Assets and Templates'],
            ['p', 'Any frameworks, templates, systems, or processes used by Minerdia Studio in producing your deliverables remain the intellectual property of Minerdia Studio, even if they are customised for your brand.'],
        ],
    ],
    [
        'title'  => '7. Confidentiality',
        'blocks' => [
            ['p', 'Minerdia Studio agrees to keep all client business information, strategies, and data shared with us strictly confidential. This includes business performance data, unreleased campaigns, internal goals, and any sensitive information shared during our engagement.'],
            ['p', 'This confidentiality obligation remains in effect during and for 2 years after the conclusion of any engagement with us.'],
        ],
    ],
    [
        'title'  => '8. Campaign Performance and Results',
        'blocks' => [
            ['p', 'Minerdia Studio applies industry best practices, creative expertise, and platform knowledge to every campaign. However, we do not guarantee specific outcomes such as follower counts, engagement rates, lead volumes, or revenue figures, as these are influenced by a variety of external factors beyond our control — including platform algorithm changes, market conditions, and audience behaviour.'],
            ['p', 'We commit to transparency, regular reporting, and proactive strategy adjustments throughout the engagement.'],
        ],
    ],
    [
        'title'  => '9. Third-Party Platforms and Ad Spend',
        'blocks' => [
            ['p', 'Minerdia Studio manages campaigns across third-party platforms including Meta (Facebook &amp; Instagram), Google, Telegram, and others. We are not responsible for:'],
            ['ul', [
                'Changes to platform policies, algorithms, or ad account restrictions',
                'Ad account suspensions or rejections by Meta or any other platform',
                'Performance fluctuations caused by external market conditions',
            ]],
            ['p', 'Ad spend budgets are managed on behalf of the client but are the client’s financial responsibility. Minerdia Studio charges separately for campaign management and does not mark up ad spend unless explicitly agreed upon.'],
        ],
    ],
    [
        'title'  => '10. Termination of Services',
        'blocks' => [
            ['h4', '10.1 Termination by Client'],
            ['p', 'A client wishing to discontinue services must provide a minimum of 30 days written notice before the next billing cycle. No refund will be issued for the current active month. Any outstanding deliverables will be completed and handed over within this notice period.'],
            ['h4', '10.2 Termination by Minerdia Studio'],
            ['p', 'Minerdia Studio reserves the right to terminate a client engagement with 14 days notice in circumstances including: non-payment, breach of these terms, abusive conduct toward our team, or requests to produce content that violates legal or ethical standards. In such cases, a pro-rated fee will be charged for work completed.'],
        ],
    ],
    [
        'title'  => '11. Limitation of Liability',
        'blocks' => [
            ['p', 'To the maximum extent permitted by applicable law, Minerdia Studio shall not be liable for any indirect, incidental, or consequential damages arising from the use of our services, including but not limited to loss of revenue, data loss, or reputational harm.'],
            ['p', 'Our total liability to a client in any matter shall not exceed the fees paid for the immediately preceding calendar month of service.'],
        ],
    ],
    [
        'title'  => '12. Governing Law and Disputes',
        'blocks' => [
            ['p', 'These Terms and Conditions are governed by the laws of India. Any disputes arising out of or in connection with these terms shall first be attempted to be resolved through mutual discussion in good faith.'],
            ['p', 'If unresolved, disputes shall be subject to the jurisdiction of the courts located in [Your City, India]. (Please insert your registered business city here.)'],
        ],
    ],
    [
        'title'  => '13. Amendments to These Terms',
        'blocks' => [
            ['p', 'Minerdia Studio reserves the right to update or modify these Terms and Conditions at any time. Updated terms will be published on our website with a revised date. Continued engagement with our services following any update constitutes acceptance of the revised terms.'],
        ],
    ],
    [
        'title'  => '14. Contact Us',
        'blocks' => [
            ['p', 'If you have any questions about these Terms and Conditions, please reach out to us:'],
            ['p', '<strong>Minerdia Studio</strong>'],
            ['p', '<strong>Website:</strong> <a href="https://minerdiastudio.com/">minerdiastudio.com</a>'],
            ['p', '<strong>Email:</strong> <a href="mailto:info@minerdiastudio.com">info@minerdiastudio.com</a><br><strong>Phone:</strong> <a href="tel:+919711555223">9711555223</a>'],
        ],
    ],
];
?>
<section class="ms-tbody">

    <style>

        .ms-tbody {
            --purple: #5A2EA6;
            --link: #1fa596;
            width: 100%;
            padding: 20px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
            overflow: hidden;
        }

        .ms-tbody-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            gap: 30px;
        }

        .ms-tbody-item {
            scroll-margin-top: 100px;
        }

        .ms-tbody-item h3 {
            margin: 0 0 16px;
            font-size: 24px;
            line-height: 1.35;
            font-weight: 600;
            color: var(--purple);
        }

        .ms-tbody-card {
            padding: 22px 28px 20px;
            border: 1px solid #ddd6ea;
            border-radius: 14px;
            background: linear-gradient(180deg, #faf9fd 0%, #f3f0f9 100%);
            box-shadow: 0 2px 8px rgba(90, 46, 166, .06);
        }

        .ms-tbody-card h4 {
            margin: 18px 0 4px;
            font-size: 18px;
            line-height: 1.4;
            font-weight: 600;
            color: #000;
        }

        .ms-tbody-card h4:first-child {
            margin-top: 0;
        }

        .ms-tbody-card p {
            margin: 0 0 12px;
            font-size: 16px;
            line-height: 1.7;
            font-weight: 400;
            text-align: justify;
            color: #222;
        }

        .ms-tbody-card ul {
            margin: 0 0 12px;
            padding-left: 26px;
            display: grid;
            gap: 4px;
        }

        .ms-tbody-card li {
            font-size: 14px;
            line-height: 1.65;
            font-weight: 400;
            color: #222;
        }

        .ms-tbody-card strong {
            font-weight: 600;
            color: #000;
        }

        .ms-tbody-card a {
            color: var(--link);
            text-decoration: none;
        }

        .ms-tbody-card a:hover {
            text-decoration: underline;
        }

        .ms-tbody-card> :last-child {
            margin-bottom: 0;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-tbody-item h3 {
                font-size: 19px;
            }
        }

        @media (max-width: 575px) {
            .ms-tbody {
                padding: 10px 14px 44px;
            }

            .ms-tbody-wrap {
                gap: 24px;
            }

            .ms-tbody-item h3 {
                font-size: 17px;
            }

            .ms-tbody-card {
                padding: 16px 16px 14px;
            }

            .ms-tbody-card p {
                text-align: left;
            }

            .ms-tbody-card p,
            .ms-tbody-card li {
                font-size: 13.5px;
            }

            .ms-tbody-card ul {
                padding-left: 20px;
            }
        }
    </style>

    <div class="ms-tbody-wrap">
        <?php foreach ($sections as $i => $sec) : ?>
            <div class="ms-tbody-item" id="terms-<?php echo $i + 1; ?>">
                <h3><?php echo htmlspecialchars($sec['title']); ?></h3>
                <div class="ms-tbody-card">
                    <?php foreach ($sec['blocks'] as $block) : ?>
                        <?php if ($block[0] === 'h4') : ?>
                            <h4><?php echo htmlspecialchars($block[1]); ?></h4>
                        <?php elseif ($block[0] === 'p') : ?>
                            <p><?php echo $block[1]; ?></p>
                        <?php elseif ($block[0] === 'ul') : ?>
                            <ul>
                                <?php foreach ($block[1] as $li) : ?>
                                    <li><?php echo htmlspecialchars($li); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>