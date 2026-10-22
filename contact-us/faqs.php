<?php
$faqs = [
    ['What services does Minerdia Studio offer?', 'Minerdia Studio offers a wide range of services to help businesses grow online. These include video editing, podcast production, SEO services, paid advertising, website development, script writing, and email marketing.'],
    ['How can I contact your team?', 'To contact the team at Minerdia Studio, you can fill out the contact form on this page. You can also reach out directly via email or phone. The team usually responds within 24 hours.'],
    ['Do you provide custom marketing solutions?', 'Yes, Minerdia Studio creates custom strategies for businesses. These strategies are based on the business goals, the target audience, and the industry requirements.'],
    ['What is the cost of your services?', 'The cost of Minerdia Studio services depends on what the project requires. If you contact Minerdia Studio with your details, they will provide a customized quote for your project.'],
    ['Do you work with startups and small businesses?', 'Yes, Minerdia Studio works with startups, small businesses, and established brands. They help these businesses grow with digital solutions.'],
    ['How long does it take to complete a project?', 'The time it takes to complete a project depends on the type and scope of the project. Minerdia Studio always aims to deliver high-quality work within the timeframe agreed with the business.'],
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
<section class="ms-cfaq">

    <style>
        .ms-cfaq,
        .ms-cfaq * {
            box-sizing: border-box;
        }

        .ms-cfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-cfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-cfaq-badge {
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

        .ms-cfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-cfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-cfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-cfaq-q {
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

        .ms-cfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-cfaq-item.is-open .ms-cfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-cfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-cfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-cfaq {
                padding: 35px 14px 45px;
            }

            .ms-cfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-cfaq-list {
                gap: 14px;
            }

            .ms-cfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-cfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-cfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-cfaq-wrap">
        <h3 class="ms-cfaq-badge">FAQ Question</h3>

        <div class="ms-cfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-cfaq-item">
                    <button type="button" class="ms-cfaq-q" aria-expanded="false" aria-controls="ms-cfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path></svg>
                    </button>
                    <div class="ms-cfaq-a" id="ms-cfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-cfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-cfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-cfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-cfaq-q');
                var ans = item.querySelector('.ms-cfaq-a');

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
                var open = document.querySelector('.ms-cfaq-item.is-open .ms-cfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>