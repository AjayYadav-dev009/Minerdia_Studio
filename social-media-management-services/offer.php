<?php
$ms_offer_items = [
    [
        'Social Media Audit',
        'We look at how your social media\'s doing now to find out what is working and what is not. We want to help you grow and get better.',
        '<rect x="6" y="4" width="12" height="16" rx="2"/><path d="M9 4V3h6v1M9 11l2 2 4-4M9 16h6"/>',
    ],
    [
        'Social Media Strategy',
        'We make a plan that\'s just for you. This plan is based on what your business wants to achieve who your customers are and what is happening in the market. We want to make sure you get the results.',
        '<circle cx="12" cy="5" r="2"/><circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M12 7v4M12 11l-6 5M12 11l6 5"/>',
    ],
    [
        'Account Optimization',
        'We set up your social media accounts. Make them look great. We use branding, important words and a professional setup so more people can find you.',
        '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3.5"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/>',
    ],
    [
        'Content Creation & Posting',
        'We create posts, videos and reels that people will like and want to share. We use the words and hashtags so you can reach more people.',
        '<rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="10" r="1.5"/><path d="M21 16l-5-5-8 8"/>',
    ],
    [
        'Community Management',
        'We talk to the people who\'re interested, in your business. We answer their questions and comments to build trust and make your business stronger.',
        '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.5"/><path d="M17 14c2.8 0 5 2 5 5"/>',
    ],
    [
        'Analytics & Reporting',
        'We look at how your social media\'s doing and give you reports that are easy to understand. This helps us make your plan better and get you the results you want all the time.',
        '<path d="M4 20V11M10 20V4M16 20v-7M22 20H2"/>',
    ],
];
?>
<section class="ms-offer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-offer,
        .ms-offer * {
            box-sizing: border-box;
        }

        .ms-offer {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 55px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-offer-wrap {
            max-width: 1140px;
            margin: 0 auto;
        }

        .ms-offer-head {
            text-align: center;
            margin-bottom: 38px;
        }

        .ms-offer-title {
            margin: 0 0 22px;
            font-size: 48px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-offer-title span {
            color: var(--purple);
        }

        .ms-offer-intro {
            max-width: 1010px;
            margin: 0 auto;
            font-size: 14px;
            line-height: 1.85;
            font-weight: 400;
            color: #1b1b1b;
        }

        .ms-offer-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .ms-offer-card {
            padding: 24px 26px 26px;
            border: 1px solid #ececec;
            border-radius: 26px;
            background: #f7f7f7;
            text-align: center;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, .12);
        }

        .ms-offer-icon {
            width: 44px;
            height: 44px;
            margin: 0 auto 14px;
            border: 1.5px solid #111;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ms-offer-icon svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: #111;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-offer-card h3 {
            margin: 0 0 14px;
            font-size: 18px;
            line-height: 1.3;
            font-weight: 500;
            color: #111;
        }

        .ms-offer-card p {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            font-size: 14px;
            line-height: 1.75;
            font-weight: 400;
            color: #666;
        }

        @media (max-width: 991px) {
            .ms-offer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ms-offer-title {
                font-size: 40px;
            }
        }

        @media (max-width: 575px) {
            .ms-offer {
                padding: 35px 14px 40px;
            }

            .ms-offer-head {
                margin-bottom: 26px;
            }

            .ms-offer-title {
                font-size: 30px;
                margin-bottom: 14px;
            }

            .ms-offer-intro {
                font-size: 14px;
                line-height: 1.7;
            }

            .ms-offer-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .ms-offer-card {
                padding: 22px 20px 24px;
                border-radius: 22px;
            }
        }
    </style>

    <div class="ms-offer-wrap">
        <div class="ms-offer-head">
            <h2 class="ms-offer-title">What We <span>Offer</span></h2>
            <p class="ms-offer-intro">We give you social media marketing services in Delhi. This includes looking at how your social media's doing now making a plan creating content managing your community and looking at the numbers.</p>
        </div>

        <div class="ms-offer-grid">
            <?php foreach ($ms_offer_items as $item): ?>
                <div class="ms-offer-card">
                    <div class="ms-offer-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><?= $item[2] ?></svg>
                    </div>
                    <h3><?= htmlspecialchars($item[0]) ?></h3>
                    <p><?= htmlspecialchars($item[1]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>