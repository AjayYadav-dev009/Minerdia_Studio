<?php
$faqs = [
    ['What are email marketing services?', 'Email marketing services help businesses stay connected with their customers through email. This includes promotional campaigns, newsletters, and planned email sequences that keep your audience interested in your brand.'],
    ['Why is email marketing important for businesses?', 'Email lets you talk directly to your customers. It helps you build relationships, increase engagement, drive sales, and bring customers back to buy again.'],
    ['Do you provide email automation services?', 'Yes, we set up automated emails such as welcome emails, follow-up emails, and reminders for customers who left items in their shopping cart. These sequences keep your customers engaged without sending every email by hand.'],
    ['Can email marketing generate leads?', 'Yes, with a well-planned strategy, email marketing can bring in new leads, encourage people to buy, and keep your audience engaged with your business.'],
    ['Do you design email templates?', 'Yes, we design email templates that look great on mobile phones and are easy to read and understand. A clear design helps your message get noticed and your campaigns perform better.'],
    ['How do you improve email open rates?', 'We write stronger subject lines, choose the right audience, and send emails at the right time. We also personalize your emails so they feel relevant to the people reading them.'],
    ['Is email marketing suitable for small businesses?', 'Yes, email marketing is one of the most practical ways for small businesses and new companies to reach customers and grow without a large marketing budget.'],
    ['Do you provide campaign performance reports?', 'Yes, our reports show how many people opened your emails, how many clicked on links, and how engaged your audience was. This helps you see what works and what to improve.'],
    ['Which industries do you work with?', 'We work with online stores, local businesses, service providers, startups, and growing brands across many industries that want to get more from email marketing.'],
    ['How can email marketing help customer retention?', 'Email helps you stay in touch with your customers through regular conversations, special offers, and useful updates. This keeps your brand fresh in their minds and gives them a reason to come back.'],
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
<section class="ms-emfaq">

    <style>
        .ms-emfaq,
        .ms-emfaq * {
            box-sizing: border-box;
        }

        .ms-emfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-emfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-emfaq-badge {
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

        .ms-emfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-emfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-emfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-emfaq-q {
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

        .ms-emfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-emfaq-item.is-open .ms-emfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-emfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-emfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-emfaq {
                padding: 35px 14px 45px;
            }

            .ms-emfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-emfaq-list {
                gap: 14px;
            }

            .ms-emfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-emfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-emfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-emfaq-wrap">
        <h3 class="ms-emfaq-badge">FAQ Question</h3>

        <div class="ms-emfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-emfaq-item">
                    <button type="button" class="ms-emfaq-q" aria-expanded="false" aria-controls="ms-emfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path></svg>
                    </button>
                    <div class="ms-emfaq-a" id="ms-emfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-emfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-emfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-emfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-emfaq-q');
                var ans = item.querySelector('.ms-emfaq-a');

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
                var open = document.querySelector('.ms-emfaq-item.is-open .ms-emfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>