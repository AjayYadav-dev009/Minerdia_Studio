<?php
// Edit / add / remove rows here. 'reverse' => true puts the image on the left.
// 'bg' is the background colour of that row's full-width band.
$rows = [
    [
        'title' => 'SEO Strategy That Drives Growth',
        'text' => 'At Minerdia Studio our objective is to design SEO strategies. These produce results. We use data-driven approaches that incorporate keyword analysis, website optimisation and user experience. This boosts website performance and user retention. Through performance analysis we refine strategies using data. This helps your website compete and grow steadily over time.',
        'image' => 'assets/image/services/seo-2.webp',
        'alt' => 'SEO Growth Strategy',
        'reverse' => false,
        'bg' => '#f2f0f9',
    ],
    [
        'title' => 'SEO Optimization for Better Visibility',
        'text' => 'We aim to optimise every element of your website. This boosts its search engine visibility. We focus on creating websites that users and search engines can find easily. Key areas of focus include enhancing page speed ensuring a user- design and seamless navigation. We specialize in SEO optimization. This makes sure your business can be found easily in \'near me\' searches.',
        'image' => 'assets/image/services/seo-3.webp',
        'alt' => 'Website SEO Optimization',
        'reverse' => true,
        'bg' => '#ffffff',
    ],
];
?>
<section class="ms-seoalt">

    <style>
        .ms-seoalt,
        .ms-seoalt * {
            box-sizing: border-box;
        }

        .ms-seoalt {
            width: 100%;
            font-family: var(--font-body);
        }

        .ms-seoalt-band {
            width: 100%;
            padding: 42px 20px;
        }

        .ms-seoalt-wrap {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        .ms-seoalt-title {
            margin: 0 0 22px;
            font-size: 32px;
            line-height: 1.25;
            font-weight: 500;
            color: #000;
        }

        .ms-seoalt-text {
            margin: 0;
            font-size: 16px;
            line-height: 1.6;
            font-weight: 300;
            color: #1b1b1b;
            text-align: justify;
        }

        .ms-seoalt-img {
            border-radius: 30px;
            border: 3px solid #e2e2e2;
            overflow: hidden;
            line-height: 0;
            background: #f3f3f3;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .25);
        }

        .ms-seoalt-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Mobile: text first, then image (for both rows) */
        @media (max-width: 991px) {
            .ms-seoalt-wrap {
                grid-template-columns: 1fr;
                gap: 26px;
            }

            .ms-seoalt-copy {
                order: 1;
            }

            .ms-seoalt-img {
                order: 2;
            }

            .ms-seoalt-title {
                font-size: 28px;
                margin-bottom: 16px;
            }
        }

        @media (max-width: 575px) {
            .ms-seoalt-band {
                padding: 30px 14px;
            }

            .ms-seoalt-title {
                font-size: 24px;
            }

            .ms-seoalt-text {
                font-size: 15px;
            }

            .ms-seoalt-img {
                border-radius: 22px;
            }
        }
    </style>

    <?php foreach ($rows as $r) : ?>
        <div class="ms-seoalt-band" style="background: <?php echo htmlspecialchars($r['bg']); ?>;">
            <div class="ms-seoalt-wrap">
                <?php
                $copy = '<div class="ms-seoalt-copy"><h2 class="ms-seoalt-title">' . htmlspecialchars($r['title']) . '</h2><p class="ms-seoalt-text">' . htmlspecialchars($r['text']) . '</p></div>';
                $img = '<div class="ms-seoalt-img"><img src="' . BASE . htmlspecialchars($r['image']) . '" alt="' . htmlspecialchars($r['alt']) . '" loading="lazy"></div>';
                echo $r['reverse'] ? $img . $copy : $copy . $img;
                ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>