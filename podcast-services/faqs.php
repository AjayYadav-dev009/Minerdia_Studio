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

// FAQPage schema for Google (same data as the visible FAQs)
$schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])],
        ];
    }, $faqs),
];
?>
<section class="ms-podfaq">

    <style>
        .ms-podfaq,
        .ms-podfaq * {
            box-sizing: border-box;
        }

        .ms-podfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-podfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-podfaq-badge {
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

        .ms-podfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-podfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-podfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-podfaq-q {
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

        .ms-podfaq-q:hover {
            color: #5A2EA6;
        }

        .ms-podfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-podfaq-q:hover svg {
            color: #5A2EA6;
        }

        .ms-podfaq-item.is-open .ms-podfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-podfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-podfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-podfaq-a p strong {
            font-weight: 700;
            color: #000;
        }

        @media (max-width: 767px) {
            .ms-podfaq {
                padding: 35px 14px 45px;
            }

            .ms-podfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-podfaq-list {
                gap: 14px;
            }

            .ms-podfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-podfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-podfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-podfaq-wrap">
        <h3 class="ms-podfaq-badge">FAQ Question</h3>

        <div class="ms-podfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-podfaq-item">
                    <button type="button" class="ms-podfaq-q" aria-expanded="false" aria-controls="ms-podfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path>
                        </svg>
                    </button>
                    <div class="ms-podfaq-a" id="ms-podfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo $faq[1]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json">
        <?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?>
    </script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-podfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-podfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-podfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-podfaq-q');
                var ans = item.querySelector('.ms-podfaq-a');

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
                var open = document.querySelector('.ms-podfaq-item.is-open .ms-podfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>