<?php
$faqs = [
    ['What does Minerdia Studio actually do?', 'Minerdia Studio is a digital marketing studio. We plan, create and manage your brand\'s online presence, from social media and content to strategy and growth, so you can focus on running your business.'],
    ['How long does it take to start seeing results?', 'Early signs, like better engagement and reach, usually show within the first 4 to 6 weeks. Steady growth in followers, leads and sales builds over 3 to 6 months, depending on your industry, competition and how consistently we can publish.'],
    ['How fast can my social media account grow?', 'It depends on your niche, your starting audience and the quality of your content. Some accounts pick up momentum in the first couple of months, others take longer. We focus on real followers who engage and convert, not quick spikes that fade.'],
    ['Do you manage complete social media accounts?', 'Yes. We can handle everything: content planning, design, captions, posting, community replies and performance tracking. If you\'d rather keep some parts in-house, we can take on just the pieces you need.'],
    ['Do you only post content or provide full strategy?', 'Full strategy. Posting is the last step. Before that, we research your audience and competitors, set goals, define content themes and build a calendar. After posting, we review the numbers and adjust what isn\'t working.'],
    ['What is your refund policy?', 'Because our work starts as soon as you sign on, fees for work already delivered are non-refundable. If we haven\'t started a billing cycle, you can cancel and get that cycle\'s payment back. The exact terms are written in your service agreement before you pay anything.'],
    ['Do you guarantee results?', 'No agency can honestly promise exact numbers, because platforms and audiences change. What we do guarantee is a clear plan, consistent execution, honest reporting and constant improvement based on what the data shows.'],
    ['Do I need to hire multiple agencies for different services?', 'No. Strategy, content, design, websites, ads and growth all sit under one roof, so your team talks to one point of contact and your brand stays consistent across every channel.'],
    ['How do you get started with a new client?', 'We begin with a free discovery call to understand your business, goals and audience. Then we audit your current presence, share a tailored plan and pricing, and once you approve it, we onboard you and start on your first content calendar.'],
    ['Do you use the same strategy for every business?', 'Never. Every strategy is built around your industry, audience, budget and goals. A local bakery and a B2B software company need very different content, so they get different plans.'],
    ['Will I receive regular updates?', 'Yes. You\'ll get a content calendar to approve in advance and a performance report every month showing what worked and what we\'re changing next. You can also message us any time with questions.'],
    ['Is growth possible without paid ads?', 'Yes. Strong content, smart use of hashtags and keywords, collaborations and steady engagement can build a real audience organically. It\'s slower than ads, but it lasts. Ads can be added later if you want to speed things up.'],
    ['Do you work with small businesses or only big brands?', 'Both. Startups, small businesses, creators and established brands all work with us. Our packages scale to your size and budget, so you only pay for what you need.'],
    ['Do you work only with clients in India?', 'No. We\'re based in India, but we work with clients around the world. Calls, approvals and reports all happen online, so location isn\'t a barrier.'],
    ['Why should I choose Minerdia Studio?', 'You get a strategy built for your business, one team for every service, and clear monthly reporting. We\'re upfront about what\'s realistic and focus on growth that turns into leads and sales, not just numbers on a profile.'],
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
<section class="ms-gfaq">

    <style>
        .ms-gfaq,
        .ms-gfaq * {
            box-sizing: border-box;
        }

        .ms-gfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-gfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-gfaq-badge {
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

        .ms-gfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-gfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-gfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-gfaq-q {
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

        .ms-gfaq-q:hover {
            color: #5A2EA6;
        }

        .ms-gfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-gfaq-q:hover svg {
            color: #5A2EA6;
        }

        .ms-gfaq-item.is-open .ms-gfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-gfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-gfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-gfaq {
                padding: 35px 14px 45px;
            }

            .ms-gfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-gfaq-list {
                gap: 14px;
            }

            .ms-gfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-gfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-gfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-gfaq-wrap">
        <h3 class="ms-gfaq-badge">FAQ Question</h3>

        <div class="ms-gfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-gfaq-item">
                    <button type="button" class="ms-gfaq-q" aria-expanded="false" aria-controls="ms-gfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path>
                        </svg>
                    </button>
                    <div class="ms-gfaq-a" id="ms-gfaq-a-<?php echo $i; ?>" role="region">
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
            var items = document.querySelectorAll('.ms-gfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-gfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-gfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-gfaq-q');
                var ans = item.querySelector('.ms-gfaq-a');

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
                var open = document.querySelector('.ms-gfaq-item.is-open .ms-gfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>