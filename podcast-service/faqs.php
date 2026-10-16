<?php
// Answers can contain <strong> tags. Edit / add / remove items here.
$faqs = [
    [
        'What podcast production services does Minerdia Studio provide?',
        'Minerdia Studio offers complete <strong>podcast production services in Delhi</strong>, including studio recording, multi-camera setup, professional audio recording, lighting, podcast editing, reels creation, subtitles, thumbnails, and final content delivery.',
    ],
    [
        'Do I need podcast recording experience before booking a session?',
        'No. Our team manages the technical side of production, making it easy for first-time podcasters, business owners, creators, and professionals to record confidently.',
    ],
    [
        'Is your podcast studio located in Delhi NCR?',
        'Yes, <strong>Minerdia Studio</strong> is located in Dwarka Mor, New Delhi, and serves clients across Delhi NCR, including Gurgaon, Noida, Ghaziabad, Faridabad, and nearby areas.',
    ],
    [
        'Can you record video podcasts with multiple cameras?',
        'Absolutely. We provide professional <strong>multi-camera podcast recording</strong> that creates a more engaging viewing experience with different camera angles and smooth transitions.',
    ],
    [
        'Do you provide podcast editing services?',
        'Yes. Our <strong>podcast editing services</strong> include audio enhancement, noise reduction, color grading, video editing, subtitles, thumbnails, and platform-ready formatting.',
    ],
    [
        'Will I receive short reels from my podcast episode?',
        'Yes. Depending on the selected package, we create short-form content such as <strong>Instagram Reels</strong>, <strong>YouTube Shorts</strong>, and social media clips to help increase reach and engagement.',
    ],
    [
        'Can I bring guests to the podcast recording session?',
        'Yes. You can invite guests for interviews, discussions, and expert conversations. Our studio setup is designed to accommodate host-and-guest podcast formats comfortably.',
    ],
    [
        'How long does it take to receive the final podcast?',
        'Delivery timelines depend on the selected package and project requirements. Our team ensures timely delivery of edited podcast videos and additional content assets.',
    ],
    [
        'Can businesses and brands use your podcast services?',
        'Yes. Our <strong>podcast production company in Delhi</strong> works with entrepreneurs, brands, consultants, coaches, educators, healthcare professionals, and corporate teams for professional podcast creation.',
    ],
    [
        'How do I book a podcast recording session at Minerdia Studio?',
        'You can contact our team through the website, phone, or inquiry form to discuss your requirements and schedule your podcast recording session at <strong>Minerdia Studio</strong>.',
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
<section class="ms-faq">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

    <style>
        .ms-faq,
        .ms-faq * {
            box-sizing: border-box;
        }

        .ms-faq {
            --green: #22a47c;
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-faq-head {
            text-align: center;
            margin-bottom: 14px;
        }

        .ms-faq-badge {
            display: inline-block;
            padding: 8px 26px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-family: 'Roboto Condensed', Arial, sans-serif;
            font-size: 18px;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(34, 164, 124, .28);
        }

        .ms-faq-list {
            max-width: 880px;
            margin: 0 auto;
            display: grid;
            gap: 14px;
        }

        .ms-faq-item {
            border-radius: 24px;
            background: #f6f6f6;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .12);
            overflow: hidden;
            transition: box-shadow .3s ease;
        }

        .ms-faq-item.is-open {
            box-shadow: 0 8px 20px rgba(90, 46, 166, .18);
        }

        .ms-faq-q {
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
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
            font-weight: 700;
            color: #1b1b1b;
        }

        .ms-faq-icon {
            flex: 0 0 22px;
            width: 22px;
            height: 22px;
            color: #222;
            transition: transform .35s ease, color .3s ease;
        }

        .ms-faq-icon svg {
            width: 100%;
            height: 100%;
            display: block;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-faq-item.is-open .ms-faq-icon {
            transform: rotate(180deg);
            color: var(--purple);
        }

        .ms-faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease;
        }

        .ms-faq-a-inner {
            padding: 0 24px 18px;
            font-size: 14.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #333;
        }

        .ms-faq-a-inner strong {
            font-weight: 700;
            color: #000;
        }

        @media (max-width: 767px) {
            .ms-faq {
                padding: 20px 14px 40px;
            }

            .ms-faq-q {
                padding: 14px 18px;
                font-size: 13px;
            }

            .ms-faq-a-inner {
                padding: 0 18px 16px;
                font-size: 13.5px;
            }
        }
    </style>

    <div class="ms-faq-head">
        <span class="ms-faq-badge">FAQ Question</span>
    </div>

    <div class="ms-faq-list">
        <?php foreach ($faqs as $i => $faq) : ?>
            <div class="ms-faq-item">
                <button type="button" class="ms-faq-q" aria-expanded="false" aria-controls="ms-faq-a-<?php echo $i; ?>">
                    <span><?php echo htmlspecialchars($faq[0]); ?></span>
                    <span class="ms-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 10.5l4 4 4-4"></path>
                        </svg>
                    </span>
                </button>
                <div class="ms-faq-a" id="ms-faq-a-<?php echo $i; ?>" role="region">
                    <div class="ms-faq-a-inner"><?php echo $faq[1]; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-faq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-faq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-faq-a').style.maxHeight = '0px';
            }

            function open(item) {
                var panel = item.querySelector('.ms-faq-a');
                item.classList.add('is-open');
                item.querySelector('.ms-faq-q').setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }

            items.forEach(function(item) {
                item.querySelector('.ms-faq-q').addEventListener('click', function() {
                    var wasOpen = item.classList.contains('is-open');
                    items.forEach(close); // one open at a time
                    if (!wasOpen) open(item);
                });
            });

            window.addEventListener('resize', function() {
                var openItem = document.querySelector('.ms-faq-item.is-open');
                if (openItem) {
                    var panel = openItem.querySelector('.ms-faq-a');
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        })();
    </script>
</section>