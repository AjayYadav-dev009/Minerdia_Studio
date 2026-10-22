<?php
$ms_faq_items = [
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

$ms_faq_schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($i) {
        return [
            '@type'          => 'Question',
            'name'           => $i[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $i[1]],
        ];
    }, $ms_faq_items),
];
?>
<section class="ms-faq">

    <style>
        .ms-faq,
        .ms-faq * {
            box-sizing: border-box;
        }

        .ms-faq {
            --purple: #5A2EA6;
            --green: #21A67A;
            width: 100%;
            padding: 30px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-faq-wrap {
            max-width: 900px;
            margin: 0 auto;
        }

        .ms-faq-head {
            text-align: center;
            margin-bottom: 30px;
        }

        .ms-faq-pill {
            display: inline-block;
            padding: 10px 40px;
            border-radius: 40px;
            background: var(--green);
            font-size: 19px;
            line-height: 1.3;
            font-weight: 600;
            color: #fff;
            box-shadow: 0 5px 14px rgba(33, 166, 122, .35);
        }

        .ms-faq-list {
            display: flex;
            flex-direction: column;
            gap: 28px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .ms-faq-item {
            border: 1px solid #ececec;
            border-radius: 32px;
            background: #f6f6f6;
            box-shadow: 0 3px 9px rgba(0, 0, 0, .13);
            overflow: hidden;
        }

        .ms-faq-q {
            width: 100%;
            min-height: 58px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 10px 26px 10px 32px;
            border: 0;
            background: transparent;
            font-family: inherit;
            font-size: 15px;
            line-height: 1.4;
            font-weight: 600;
            color: #111;
            text-align: left;
            cursor: pointer;
        }

        .ms-faq-q:focus-visible {
            outline: 2px solid var(--purple);
            outline-offset: -4px;
            border-radius: 32px;
        }

        .ms-faq-icon {
            flex: 0 0 26px;
            width: 26px;
            height: 26px;
            border: 1.5px solid #222;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform .3s ease, background .3s, border-color .3s;
        }

        .ms-faq-icon svg {
            width: 14px;
            height: 14px;
            fill: none;
            stroke: #222;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: stroke .3s;
        }

        .ms-faq-item.is-open .ms-faq-icon {
            transform: rotate(180deg);
            background: var(--purple);
            border-color: var(--purple);
        }

        .ms-faq-item.is-open .ms-faq-icon svg {
            stroke: #fff;
        }

        .ms-faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-faq-a p {
            margin: 0;
            padding: 0 32px 20px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #333;
        }

        @media (max-width: 767px) {
            .ms-faq {
                padding: 25px 14px 45px;
            }

            .ms-faq-pill {
                font-size: 17px;
                padding: 9px 30px;
            }

            .ms-faq-list {
                gap: 16px;
            }

            .ms-faq-q {
                font-size: 14px;
                padding: 10px 18px 10px 22px;
            }

            .ms-faq-a p {
                font-size: 14px;
                padding: 0 22px 18px;
            }
        }
    </style>

    <div class="ms-faq-wrap">
        <div class="ms-faq-head">
            <span class="ms-faq-pill">FAQ Question</span>
        </div>

        <ul class="ms-faq-list">
            <?php foreach ($ms_faq_items as $i => $item): ?>
                <li class="ms-faq-item">
                    <button class="ms-faq-q" type="button" aria-expanded="false" aria-controls="ms-faq-a-<?= $i ?>" id="ms-faq-q-<?= $i ?>">
                        <span><?= htmlspecialchars($item[0]) ?></span>
                        <span class="ms-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="ms-faq-a" id="ms-faq-a-<?= $i ?>" role="region" aria-labelledby="ms-faq-q-<?= $i ?>">
                        <p><?= htmlspecialchars($item[1]) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script type="application/ld+json"><?= json_encode($ms_faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>

    <script>
        (function () {
            var items = document.querySelectorAll('.ms-faq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-faq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-faq-a').style.maxHeight = null;
            }

            function open(item) {
                var panel = item.querySelector('.ms-faq-a');
                item.classList.add('is-open');
                item.querySelector('.ms-faq-q').setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }

            items.forEach(function (item) {
                item.querySelector('.ms-faq-q').addEventListener('click', function () {
                    var wasOpen = item.classList.contains('is-open');
                    items.forEach(close); /* one open at a time */
                    if (!wasOpen) open(item);
                });
            });

            window.addEventListener('resize', function () {
                items.forEach(function (item) {
                    if (item.classList.contains('is-open')) {
                        var panel = item.querySelector('.ms-faq-a');
                        panel.style.maxHeight = panel.scrollHeight + 'px';
                    }
                });
            });
        })();
    </script>
</section>