<?php
$faqs = [
    ['What does a website development company do?', 'A website development company makes websites for businesses. They create the layout. Build the website using codes or tools like WordPress. They also make sure the website works well on all devices like computers and phones.'],
    ['Which is the website development company in Delhi?', 'The best website development company in Delhi is one that knows what your business needs. They build websites that\'re easy to use and help you for a long time. Minerdia Studio makes websites that\'re easy to understand fast and help your business.'],
    ['How much does website development cost in India?', 'The cost of making a website in India depends on what kind of website you want and how complicated it\'s. A simple business website can start from ₹25,000. If you want a special or advanced website it can cost more.'],
    ['How long does it take to develop a website?', 'The time it takes to make a website depends on how big the project\'s what features it needs. A simple website can take one to two weeks. A more complicated website can take three to six weeks or even more.'],
    ['Do you provide WordPress website development?', 'Yes, we make WordPress websites for businesses that want websites that\'re easy to manage. WordPress is a choice because it is flexible and easy to use. It works well for businesses.'],
    ['Do you also create coded websites?', 'Yes, we make custom websites using codes for projects that need features or a unique design. We do this for businesses that want control over their website. Website development companies, like us can help you with this. Website development is what we do. We can make a website that works well for you.'],
    ['Will my website work well on phones?', 'Yes, all our websites are built to work smoothly on phones, tablets and desktops. We use a design called responsive web design.'],
    ['Do you help my website show up on Google?', 'We build websites that\'re easy for search engines like Google to understand. Our websites have a structure load fast and have clean coding. This helps your website show up better on Google.'],
    ['Can you make my existing website look better?', 'Yes, we can help redesign your website to make it look better and work better too. We offer services to improve the design make it load faster and fix any problems.'],
    ['Will you help me if I have problems, with my website?', 'Yes, we offer support after we launch your website. We will help keep your website updated, secure and working properly. This way you can focus on your business. Not worry about your website.'],
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
<section class="ms-wdfaq">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <style>
        .ms-wdfaq,
        .ms-wdfaq * {
            box-sizing: border-box;
        }

        .ms-wdfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-wdfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-wdfaq-badge {
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

        .ms-wdfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-wdfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-wdfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-wdfaq-q {
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

        .ms-wdfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-wdfaq-item.is-open .ms-wdfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-wdfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-wdfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-wdfaq {
                padding: 35px 14px 45px;
            }

            .ms-wdfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-wdfaq-list {
                gap: 14px;
            }

            .ms-wdfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-wdfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-wdfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-wdfaq-wrap">
        <h3 class="ms-wdfaq-badge">FAQ Question</h3>

        <div class="ms-wdfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-wdfaq-item">
                    <button type="button" class="ms-wdfaq-q" aria-expanded="false" aria-controls="ms-wdfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path></svg>
                    </button>
                    <div class="ms-wdfaq-a" id="ms-wdfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?></script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-wdfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-wdfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-wdfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-wdfaq-q');
                var ans = item.querySelector('.ms-wdfaq-a');

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
                var open = document.querySelector('.ms-wdfaq-item.is-open .ms-wdfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>