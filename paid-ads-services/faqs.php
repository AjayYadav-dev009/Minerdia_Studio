<?php
$faqs = [
    ['Is PPC Advertising Right for My Business and Goals?', 'PPC works well for almost any business that wants fast, measurable results, whether that means leads, calls, sales or app installs. We review your goals, budget and market first, then tell you honestly if PPC is the right fit or if another channel should come first.'],
    ['Why Should I Hire a PPC Management Company for My Campaigns?', 'Running ads without experience often wastes budget on the wrong keywords and audiences. A dedicated team handles research, ad copy, bidding, tracking and constant optimisation, so every rupee works harder and you can focus on running your business.'],
    ['What Sets Your PPC Service Agency Apart from Others?', 'We combine more than 15 years of digital marketing experience with transparent reporting, clear pricing and a performance-first approach. You always know where your budget is going and what results it is bringing.'],
    ['How Long Does It Take to See Results from a PPC Campaign?', 'You can start getting clicks and enquiries within days of launch. Most campaigns take 4 to 8 weeks of testing and optimisation to reach a stable, profitable performance.'],
    ['How Do I Choose the Right PPC Service Agency for My Business?', 'Look for proven case studies, transparent reporting, certified experts and clear communication. Avoid agencies that promise guaranteed rankings or hide their pricing and ad account access.'],
    ['What common PPC mistakes do businesses make?', 'Common mistakes include targeting broad keywords, ignoring negative keywords, sending traffic to weak landing pages, skipping conversion tracking and not reviewing campaigns regularly.'],
    ['What is the difference between PPC and organic marketing?', 'PPC gives you instant visibility by paying for each click, while organic marketing such as SEO builds long-term traffic without per-click costs but takes more time. The best results usually come from using both together.'],
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
<section class="ms-ppcfaq">

    <style>
        .ms-ppcfaq,
        .ms-ppcfaq * {
            box-sizing: border-box;
        }

        .ms-ppcfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-ppcfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-ppcfaq-badge {
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

        .ms-ppcfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-ppcfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-ppcfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-ppcfaq-q {
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

        .ms-ppcfaq-q:hover {
            color: #5A2EA6;
        }

        .ms-ppcfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-ppcfaq-q:hover svg {
            color: #5A2EA6;
        }

        .ms-ppcfaq-item.is-open .ms-ppcfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-ppcfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-ppcfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-ppcfaq {
                padding: 35px 14px 45px;
            }

            .ms-ppcfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-ppcfaq-list {
                gap: 14px;
            }

            .ms-ppcfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-ppcfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-ppcfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-ppcfaq-wrap">
        <h3 class="ms-ppcfaq-badge">FAQ Question</h3>

        <div class="ms-ppcfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-ppcfaq-item">
                    <button type="button" class="ms-ppcfaq-q" aria-expanded="false" aria-controls="ms-ppcfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path>
                        </svg>
                    </button>
                    <div class="ms-ppcfaq-a" id="ms-ppcfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
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
            var items = document.querySelectorAll('.ms-ppcfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-ppcfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-ppcfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-ppcfaq-q');
                var ans = item.querySelector('.ms-ppcfaq-a');

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
                var open = document.querySelector('.ms-ppcfaq-item.is-open .ms-ppcfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>