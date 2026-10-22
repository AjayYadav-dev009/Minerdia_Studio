<?php
$faqs = [
    ['What types of script writing services does Minerdia Studio offer?', 'Minerdia Studio provides script writing services for YouTube videos, Instagram Reels, advertisement videos, brand promotions, podcast content, explainer videos, corporate videos, and short-form video content.'],
    ['How do you create scripts for different platforms?', 'We customize every script according to the platform\'s requirements. YouTube videos focus on retention and storytelling, Instagram Reels require strong hooks, and ad scripts are designed with clear calls to action.'],
    ['Can you write scripts for YouTube channels?', 'Yes. We create engaging YouTube scripts with compelling hooks, storytelling techniques, audience retention strategies, and structured content flow to help increase watch time.'],
    ['Do you provide script writing for Instagram Reels and Shorts?', 'Absolutely. Our team creates short-form scripts designed to grab attention quickly, encourage engagement, and deliver your message effectively within a short duration.'],
    ['How does your script writing process work?', 'Our process includes research and understanding, topic planning, script development, editing and optimization, followed by final script delivery ready for production.'],
    ['Can you write scripts for business and promotional videos?', 'Yes. We create professional scripts for corporate presentations, company videos, product promotions, brand campaigns, and marketing content.'],
    ['Why is a professionally written script important?', 'A well-written script improves audience engagement, delivers clear messaging, enhances storytelling, and helps viewers stay interested until the end of the video.'],
    ['Do you write SEO-friendly video scripts?', 'Yes. Our scripts include relevant keywords, audience-focused topics, engaging hooks, and optimized content structures to improve visibility on YouTube and search engines.'],
    ['Which industries do you write scripts for?', 'We create scripts for businesses, corporate brands, YouTube creators, e-commerce companies, real estate businesses, educational platforms, and social media brands.'],
    ['Can Minerdia Studio help with podcast script writing?', 'Yes. We develop well-structured podcast scripts that keep conversations organized, informative, engaging, and easy for listeners to follow.'],
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
<section class="ms-swfaq">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <style>
        .ms-swfaq,
        .ms-swfaq * {
            box-sizing: border-box;
        }

        .ms-swfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-swfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-swfaq-badge {
            display: table;
            margin: 0 auto 30px;
            padding: 12px 52px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 24px;
            line-height: 1.2;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(33, 166, 122, .35);
        }

        .ms-swfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-swfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-swfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-swfaq-q {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 22px 34px 22px 32px;
            border: 0;
            background: transparent;
            text-align: left;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
            color: #000;
            cursor: pointer;
        }

        .ms-swfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-swfaq-item.is-open .ms-swfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-swfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-swfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-swfaq {
                padding: 35px 14px 45px;
            }

            .ms-swfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-swfaq-list {
                gap: 14px;
            }

            .ms-swfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-swfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-swfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-swfaq-wrap">
        <h3 class="ms-swfaq-badge">FAQ Question</h3>

        <div class="ms-swfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-swfaq-item">
                    <button type="button" class="ms-swfaq-q" aria-expanded="false" aria-controls="ms-swfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path></svg>
                    </button>
                    <div class="ms-swfaq-a" id="ms-swfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-swfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-swfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-swfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-swfaq-q');
                var ans = item.querySelector('.ms-swfaq-a');

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
                var open = document.querySelector('.ms-swfaq-item.is-open .ms-swfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>