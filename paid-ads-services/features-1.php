<?php
// Edit the content here.
$label   = 'Features';
$title   = 'Wondering why your paid ads aren’t scaling?';
$intro   = 'Get a clear, data-driven view of your paid campaigns, what’s working, what’s blocking growth, and where you can improve profitability. We are a performance driven Paid Marketing Agency in Delhi, help brands in reducing wasted ad spend, improving ROI and scale faster with strategic PPC and paid advertising campaigns.';

$services = [
    'Meta Advertising',
    'Google Adwords',
    'YouTube Advertising',
    'LinkedIn Advertising',
    'Performance Marketing',
    'Lead Generation Campaigns',
];

// Put your image in this path (or change it)
$image_src = 'assets/image/services/paid-1.webp';
$image_alt = 'Team reviewing paid ads performance dashboard';
?>
<section class="ms-ad-features">

    <style>

        .ms-ad-features {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-ad-features-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        /* ---------- Left ---------- */
        .ms-ad-features-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-ad-features-title {
            margin: 0 0 8px;
            font-size: 32px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-ad-features-intro {
            margin: 0 0 20px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            text-align: justify;
            color: #111;
        }

        .ms-ad-features-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .ms-ad-features-pill {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 68px;
            /* padding: 10px 18px; */
            border: 1px solid #dcdcdc;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 3px 8px rgba(0, 0, 0, .12);
            font-family: var(--font-body);
            font-size: 17px;
            font-weight: 600;
            line-height: 1.4;
            text-align: center;
            color: #000;
            transition: .3s ease;
        }

        .ms-ad-features-pill:hover {
            transform: translateY(-3px);
            border-color: var(--purple);
            box-shadow: 0 8px 18px rgba(90, 46, 166, .22);
        }

        /* ---------- Right ---------- */
        .ms-ad-features-media {
            border-radius: 24px;
            border: 3px solid #e4e4e4;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .3);
        }

        .ms-ad-features-media img {
            display: block;
            width: 100%;
            height: auto;
            aspect-ratio: 3 / 2;
            object-fit: cover;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-ad-features-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-ad-features-title {
                font-size: 28px;
            }
        }

        @media (max-width: 575px) {
            .ms-ad-features {
                padding: 24px 14px 40px;
            }

            .ms-ad-features-title {
                font-size: 24px;
            }

            .ms-ad-features-intro {
                font-size: 14.5px;
                text-align: left;
            }

            .ms-ad-features-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }

            .ms-ad-features-pill {
                min-height: 58px;
                font-size: 16px;
            }
        }
    </style>

    <div class="ms-ad-features-wrap">

        <div class="ms-ad-features-left">
            <span class="ms-ad-features-label"><?php echo htmlspecialchars($label); ?></span>
            <h2 class="ms-ad-features-title"><?php echo htmlspecialchars($title); ?></h2>
            <p class="ms-ad-features-intro"><?php echo htmlspecialchars($intro); ?></p>

            <div class="ms-ad-features-grid">
                <?php foreach ($services as $service) : ?>
                    <div class="ms-ad-features-pill"><?php echo htmlspecialchars($service); ?></div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-ad-features-media">
            <img src="<?php echo BASE . htmlspecialchars($image_src); ?>" alt="<?php echo htmlspecialchars($image_alt); ?>" loading="lazy">
        </div>

    </div>
</section>