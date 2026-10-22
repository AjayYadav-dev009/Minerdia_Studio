<?php
$rows = [
    [
        'label'   => '',
        'title'   => 'Smart Website Development That Works',
        'image'   => 'https://minerdiastudio.com/wp-content/uploads/2026/06/website-devlopment-Smart-Website-Development.png',
        'alt'     => 'Responsive Website Design',
        'reverse' => false, // image left, text right
        'paras'   => [
            'A website should not just look good it should help your business grow. We create websites that\'re easy to use. They load fast. Are simple for visitors to understand. Every section is planned with care.',
            'This way users quickly find what they need. They can take action without confusion. This is a delight for users. Builds Trust With Your Audience. We try to keep things simple. We want your website to perform. This can help your business to succeed in the long term.',
        ],
    ],
    [
        'label'   => 'Features',
        'title'   => 'WordPress & Custom Website Development',
        'image'   => 'https://minerdiastudio.com/wp-content/uploads/2026/06/WordPress-Custom-Website-Development-1.png',
        'alt'     => 'WordPress Website Development',
        'reverse' => true, // text left, image right
        'paras'   => [
            'We make websites using WordPress and we also do custom coding it depends on what you need. WordPress is great because it is easy to manage. Custom development gives you more freedom to do what you want. We look at what you want. Then we choose the best way to make your website work well and grow along with your business. Our aim is to create a website that is good and easy to use and that will work for you for a long time and that is what WordPress and custom website development is all about making a good website for you.',
        ],
    ],
];
?>
<section class="ms-wdrows">

    <style>
        .ms-wdrows,
        .ms-wdrows * {
            box-sizing: border-box;
        }

        .ms-wdrows {
            --purple: #5A2EA6;
            width: 100%;
            padding: 60px 20px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-wdrows-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            gap: 90px;
        }

        .ms-wdrows-row {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        /* put the image on the right for reversed rows (desktop only) */
        .ms-wdrows-row.is-reverse .ms-wdrows-img {
            order: 2;
        }

        .ms-wdrows-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-wdrows-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-wdrows-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        .ms-wdrows-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-wdrows-title {
            margin: 0 0 18px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-wdrows-text p {
            margin: 0 0 10px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-wdrows-text p:last-child {
            margin-bottom: 0;
        }

        /* ---------- Tablet ---------- */
        @media (max-width: 991px) {
            .ms-wdrows-wrap {
                gap: 60px;
            }

            .ms-wdrows-row {
                gap: 28px;
            }

            .ms-wdrows-title {
                font-size: 28px;
            }
        }

        /* ---------- Mobile: stack, image on top, heading centered ---------- */
        @media (max-width: 767px) {
            .ms-wdrows {
                padding: 35px 16px;
            }

            .ms-wdrows-wrap {
                gap: 45px;
            }

            .ms-wdrows-row,
            .ms-wdrows-row.is-reverse {
                grid-template-columns: 1fr;
            }

            .ms-wdrows-row.is-reverse .ms-wdrows-img {
                order: 0;
            }

            .ms-wdrows-label,
            .ms-wdrows-title {
                text-align: center;
            }

            .ms-wdrows-label {
                font-size: 16px;
            }

            .ms-wdrows-title {
                font-size: 26px;
            }

            .ms-wdrows-text p {
                font-size: 14.5px;
            }
        }
    </style>

    <div class="ms-wdrows-wrap">
        <?php foreach ($rows as $row) : ?>
            <div class="ms-wdrows-row<?php echo $row['reverse'] ? ' is-reverse' : ''; ?>">
                <div class="ms-wdrows-img">
                    <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['alt']); ?>" width="1536" height="1024" loading="lazy">
                </div>
                <div class="ms-wdrows-text">
                    <?php if ($row['label'] !== '') : ?>
                        <span class="ms-wdrows-label"><?php echo htmlspecialchars($row['label']); ?></span>
                    <?php endif; ?>
                    <h2 class="ms-wdrows-title"><?php echo htmlspecialchars($row['title']); ?></h2>
                    <?php foreach ($row['paras'] as $para) : ?>
                        <p><?php echo htmlspecialchars($para); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>