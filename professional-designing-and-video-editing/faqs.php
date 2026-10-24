<?php
$faqs = [
    [
        'What is included in your graphic designing and video editing services?',
        'Our services cover graphic design, logo and branding work, social media creatives, thumbnails, motion graphics, video editing, Reels, podcast editing, ad creatives, promotional videos and other marketing content built around your business goals.',
    ],
    [
        'Do you provide graphic designing services in India?',
        'Yes. We work with businesses, startups, creators and brands across India, creating social media designs, branding, marketing materials and digital creatives.',
    ],
    [
        'Do you provide professional video editing services?',
        'Yes. We edit YouTube videos, Reels, podcasts, promotional videos, ads, corporate videos and social media content, including transitions, captions, motion graphics and color correction.',
    ],
    [
        'Can you create Instagram posts and Reels for my brand?',
        'Yes. We design Instagram posts, carousels and Stories, and edit Reels that are made to improve engagement, reach and brand awareness.',
    ],
    [
        'Do you design YouTube thumbnails?',
        'Yes. Our thumbnails use strong layouts, bold typography and eye-catching visuals to help improve your click-through rate.',
    ],
    [
        'Can you edit podcast videos?',
        'Yes. Our podcast editing includes multi-camera editing, noise reduction, captions, branding, transitions and short highlight clips for YouTube and social media.',
    ],
    [
        'Do you create ad creatives for paid campaigns?',
        'Yes. We create ad creatives for Google Ads, Meta Ads, Instagram, Facebook and LinkedIn campaigns, matched to your marketing objectives.',
    ],
    [
        'How long does a design or video editing project take?',
        'Most projects take around 2 to 7 business days, depending on the scope, complexity and number of revisions.',
    ],
    [
        'Can you follow my brand colors and style?',
        'Yes. Every project follows your brand guidelines, including colors, fonts, logo usage, visual style and messaging.',
    ],
    [
        'Can I hire you for monthly design and video editing work?',
        'Yes. We offer flexible monthly creative support for businesses, agencies, startups and creators.',
    ],
];

// FAQPage schema for Google (same data as the visible FAQs)
$schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
        ];
    }, $faqs),
];
?>
<section class="ms-dfaq">

    <style>
        .ms-dfaq,
        .ms-dfaq * {
            box-sizing: border-box;
        }

        .ms-dfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-dfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-dfaq-badge {
            display: table;
            margin: 0 auto 30px;
            padding: 12px 52px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-family: var(--font-head);
            font-size: 24px;
            line-height: 1.2;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(33, 166, 122, .35);
        }

        .ms-dfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-dfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-dfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-dfaq-q {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 22px 34px 22px 32px;
            border: 0;
            background: transparent;
            text-align: left;
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
            color: #000;
            cursor: pointer;
        }

        .ms-dfaq-q:hover {
            color: #5A2EA6;
        }

        .ms-dfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-dfaq-q:hover svg {
            color: #5A2EA6;
        }

        .ms-dfaq-item.is-open .ms-dfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-dfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-dfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-dfaq {
                padding: 35px 14px 45px;
            }

            .ms-dfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-dfaq-list {
                gap: 14px;
            }

            .ms-dfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-dfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-dfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-dfaq-wrap">
        <h3 class="ms-dfaq-badge">FAQ Question</h3>

        <div class="ms-dfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-dfaq-item">
                    <button type="button" class="ms-dfaq-q" aria-expanded="false" aria-controls="ms-dfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path></svg>
                    </button>
                    <div class="ms-dfaq-a" id="ms-dfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-dfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-dfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-dfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-dfaq-q');
                var ans = item.querySelector('.ms-dfaq-a');

                btn.addEventListener('click', function() {
                    var wasOpen = item.classList.contains('is-open');
                    items.forEach(close); // only one open at a time
                    if (!wasOpen) {
                        item.classList.add('is-open');
                        btn.setAttribute('aria-expanded', 'true');
                        ans.style.maxHeight = ans.scrollHeight + 'px';
                    }
                });
            });

            // keep the open answer sized correctly if the window is resized
            window.addEventListener('resize', function() {
                var open = document.querySelector('.ms-dfaq-item.is-open .ms-dfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>