<?php
// Answers can contain <strong> tags. Edit / add / remove items here.
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

// SEO: FAQ structured data built from the same list
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type' => 'Question',
            'name' => $f[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])],
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
            --green: #22a47c;
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-dfaq-head {
            text-align: center;
            margin-bottom: 14px;
        }

        .ms-dfaq-badge {
            display: inline-block;
            padding: 8px 26px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-family: var(--font-head);
            font-size: 18px;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(34, 164, 124, .28);
        }

        .ms-dfaq-list {
            max-width: 880px;
            margin: 0 auto;
            display: grid;
            gap: 14px;
        }

        .ms-dfaq-item {
            border-radius: 24px;
            background: #f6f6f6;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .12);
            overflow: hidden;
            transition: box-shadow .3s ease;
        }

        .ms-dfaq-item.is-open {
            box-shadow: 0 8px 20px rgba(90, 46, 166, .18);
        }

        .ms-dfaq-q {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 15px 24px;
            border: 0;
            background: transparent;
            cursor: pointer;
            text-align: left;
            font-family: var(--font-body);
            font-size: 14px;
            line-height: 1.4;
            font-weight: 700;
            color: #1b1b1b;
        }

        .ms-dfaq-icon {
            flex: 0 0 22px;
            width: 22px;
            height: 22px;
            color: #222;
            transition: transform .35s ease, color .3s ease;
        }

        .ms-dfaq-icon svg {
            width: 100%;
            height: 100%;
            display: block;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-dfaq-item.is-open .ms-dfaq-icon {
            transform: rotate(180deg);
            color: var(--purple);
        }

        .ms-dfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease;
        }

        .ms-dfaq-a-inner {
            padding: 0 24px 18px;
            font-size: 14.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #333;
        }

        .ms-dfaq-a-inner strong {
            font-weight: 700;
            color: #000;
        }

        @media (max-width: 767px) {
            .ms-dfaq {
                padding: 20px 14px 40px;
            }

            .ms-dfaq-q {
                padding: 14px 18px;
                font-size: 13px;
            }

            .ms-dfaq-a-inner {
                padding: 0 18px 16px;
                font-size: 13.5px;
            }
        }
    </style>

    <div class="ms-dfaq-head">
        <span class="ms-dfaq-badge">FAQ Question</span>
    </div>

    <div class="ms-dfaq-list">
        <?php foreach ($faqs as $i => $faq) : ?>
            <div class="ms-dfaq-item">
                <button type="button" class="ms-dfaq-q" aria-expanded="false" aria-controls="ms-dfaq-a-<?php echo $i; ?>">
                    <span><?php echo htmlspecialchars($faq[0]); ?></span>
                    <span class="ms-dfaq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 10.5l4 4 4-4"></path>
                        </svg>
                    </span>
                </button>
                <div class="ms-dfaq-a" id="ms-dfaq-a-<?php echo $i; ?>" role="region">
                    <div class="ms-dfaq-a-inner"><?php echo $faq[1]; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-dfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-dfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-dfaq-a').style.maxHeight = '0px';
            }

            function open(item) {
                var panel = item.querySelector('.ms-dfaq-a');
                item.classList.add('is-open');
                item.querySelector('.ms-dfaq-q').setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }

            items.forEach(function(item) {
                item.querySelector('.ms-dfaq-q').addEventListener('click', function() {
                    var wasOpen = item.classList.contains('is-open');
                    items.forEach(close); // one open at a time
                    if (!wasOpen) open(item);
                });
            });

            window.addEventListener('resize', function() {
                var openItem = document.querySelector('.ms-dfaq-item.is-open');
                if (openItem) {
                    var panel = openItem.querySelector('.ms-dfaq-a');
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        })();
    </script>
</section>