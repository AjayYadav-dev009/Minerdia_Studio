<?php
// Edit the content here.
$watermark   = 'MINERDIASTUDIO';
$title_main  = 'Paid Ads';
$title_accent = 'Services';
$description = 'Minerdia Studio is a leading PPC and performance marketing agency in Delhi. We are experts in Meta Ads, Google Ads, Facebook Ads, Instagram Ads, Lead Generation and Conversion Focused Digital Marketing Strategies. We help startups, personal brands and growing businesses scale through high ROI paid advertising campaigns built to boost sales, generate quality leads, increase engagement and drive real business growth. From performance marketing to social media advertising and PPC management services Minerdia Studio delivers data-driven strategies that convert clicks to customers.';
?>
<section class="ms-about">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-about,
        .ms-about * {
            box-sizing: border-box;
        }

        .ms-about {
            --purple: #5A2EA6;
            width: 100%;
            padding: 40px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
            overflow: hidden;
        }

        .ms-about-wrap {
            max-width: 1110px;
            margin: 0 auto;
            text-align: center;
        }

        /* ---------- Title with watermark ---------- */
        .ms-about-head {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90px;
            margin-bottom: 26px;
        }

        .ms-about-watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 108px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: -6px;
            white-space: nowrap;
            color: #f1f1f1;
            pointer-events: none;
            user-select: none;
        }

        .ms-about-title {
            position: relative;
            margin: 0;
            font-size: 52px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-about-title span {
            color: var(--purple);
        }

        .ms-about-text {
            max-width: 1110px;
            margin: 0 auto;
            font-size: 15.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #111;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-about-watermark {
                font-size: 76px;
                letter-spacing: -4px;
            }

            .ms-about-title {
                font-size: 42px;
            }

            .ms-about-text {
                font-size: 15px;
            }
        }

        @media (max-width: 575px) {
            .ms-about {
                padding: 30px 14px 40px;
            }

            .ms-about-head {
                min-height: 70px;
                margin-bottom: 20px;
            }

            .ms-about-watermark {
                font-size: 44px;
                letter-spacing: -2px;
            }

            .ms-about-title {
                font-size: 32px;
            }

            .ms-about-text {
                font-size: 14.5px;
                line-height: 1.65;
            }
        }
    </style>

    <div class="ms-about-wrap">

        <div class="ms-about-head">
            <div class="ms-about-watermark" aria-hidden="true"><?php echo htmlspecialchars($watermark); ?></div>
            <h2 class="ms-about-title"><?php echo htmlspecialchars($title_main); ?> <span><?php echo htmlspecialchars($title_accent); ?></span></h2>
        </div>

        <p class="ms-about-text"><?php echo htmlspecialchars($description); ?></p>

    </div>
</section>