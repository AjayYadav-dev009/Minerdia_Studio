<?php
$faqs = [
    ['What SEO services does Minerdia Studio provide?', 'We offer a full range of SEO services, including keyword research, on-page optimization, technical SEO, content optimization, link building, local SEO and ongoing reporting, all tailored to your business goals.'],
    ['What is SEO Services?', 'SEO services are the activities that improve your website\'s visibility in search engines like Google. The aim is to bring more qualified visitors to your site and turn them into leads and customers.'],
    ['How long does it take for SEO to work?', 'SEO is a long-term investment. Most websites start to see early improvements in 3 to 6 months, while stronger and more stable results usually build over 6 to 12 months, depending on competition and your starting point.'],
    ['Why SEO is important for my Business ?', 'Most customers begin their search online. SEO helps your business show up when they do, builds trust and credibility, and brings consistent, high-intent traffic without paying for every click.'],
    ['Do you offer SEO services?', 'Yes. Minerdia Studio provides complete SEO services for small businesses, startups and established brands, from a first audit to monthly optimization and support.'],
    ['What is included in your SEO service?', 'Our service includes a website audit, keyword and competitor research, on-page and technical fixes, content recommendations, link building, performance tracking and clear monthly reports.'],
    ['Can SEO Generate Leads and Sales?', 'Yes. By attracting people who are already searching for what you offer, SEO brings in visitors who are more likely to enquire or buy, which means more leads and sales over time.'],
    ['Do you work with all kinds of businesses?', 'We work with businesses across many industries. Before we begin, we study your market and audience so the strategy fits your business rather than following a generic template.'],
    ['Will my website be on the page of Google?', 'No one can honestly guarantee a specific ranking on Google. What we do is follow best practices and a data-driven strategy to improve your visibility and move your site up the results over time.'],
    ['Do you offer any SEO reports?', 'Yes. You receive regular reports covering rankings, traffic, leads and the work completed, so you always know how your website is performing.'],
    ['How are your SEO services different?', 'We focus on results that matter to your business, not just rankings. You get transparent communication, a strategy built around your goals and ongoing support from a dedicated team.'],
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
<section class="ms-seofaq">

    <style>
        .ms-seofaq,
        .ms-seofaq * {
            box-sizing: border-box;
        }

        .ms-seofaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-seofaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-seofaq-badge {
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

        .ms-seofaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-seofaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-seofaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-seofaq-q {
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

        .ms-seofaq-q:hover {
            color: #5A2EA6;
        }

        .ms-seofaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-seofaq-q:hover svg {
            color: #5A2EA6;
        }

        .ms-seofaq-item.is-open .ms-seofaq-q svg {
            transform: rotate(180deg);
        }

        .ms-seofaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-seofaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-seofaq {
                padding: 35px 14px 45px;
            }

            .ms-seofaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-seofaq-list {
                gap: 14px;
            }

            .ms-seofaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-seofaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-seofaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-seofaq-wrap">
        <h3 class="ms-seofaq-badge">FAQ Question</h3>

        <div class="ms-seofaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-seofaq-item">
                    <button type="button" class="ms-seofaq-q" aria-expanded="false" aria-controls="ms-seofaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path>
                        </svg>
                    </button>
                    <div class="ms-seofaq-a" id="ms-seofaq-a-<?php echo $i; ?>" role="region">
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
            var items = document.querySelectorAll('.ms-seofaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-seofaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-seofaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-seofaq-q');
                var ans = item.querySelector('.ms-seofaq-a');

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
                var open = document.querySelector('.ms-seofaq-item.is-open .ms-seofaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>