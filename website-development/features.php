<?php
$paragraphs = [
    'We do more than just make websites look good. We do the thing. This means we design and build websites that work well and look good too. As a <strong>web development company in India</strong> that has been around for a while we make sure every part of your website is done right.',
    'We want to make websites that everyone can use, no matter what device they\'re on. We know that people will leave and not come back if a website is slow or hard to use, so we make sure our websites load quickly and are easy to use. We also make sure that our websites follow the rules so that search engines like Google can find them. We take care of everything, from designing the website to making it fast, so visitors will have a good time on your website and find it easily.',
    'In the end what we want to do is simple. We want to make a website that helps your business do well online and get results.',
];

// third value: show the dotted pattern in the bottom-left corner of the card
$cards = [
    ['Custom Website', 'We make websites that\'re just for you and your business. Every website we build is made to fit your business needs. This differentiates your business. Helps you stand out on the internet.', true],
    ['Responsive Design', 'Our websites work well on your phone, tablet and computer. This means that no matter what device people are using, they can easily use your website.', false],
    ['Clean & Optimized', 'Our websites are easy to find on search engines like Google, load quickly, and use clean code to improve performance and rankings, ensuring your website reaches people searching for your business.', true],
];
?>
<section class="ms-wdfeat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-wdfeat,
        .ms-wdfeat * {
            box-sizing: border-box;
        }

        .ms-wdfeat {
            --purple: #5A2EA6;
            width: 100%;
            padding: 60px 20px 70px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-wdfeat-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Top: text + image ---------- */
        .ms-wdfeat-top {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        .ms-wdfeat-label {
            display: block;
            margin: 0 0 8px;
            font-family: 'Lato', Arial, sans-serif;
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-wdfeat-title {
            margin: 0 0 18px;
            max-width: 480px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-wdfeat-text p {
            margin: 0 0 10px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-wdfeat-text p:last-child {
            margin-bottom: 0;
        }

        .ms-wdfeat-text strong {
            font-weight: 600;
        }

        .ms-wdfeat-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-wdfeat-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-wdfeat-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- Bottom: 3 cards ---------- */
        .ms-wdfeat-cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .ms-wdfeat-card {
            position: relative;
            padding: 34px 30px 38px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 12px 40px rgba(0, 0, 0, .12);
            transition: .3s ease;
        }

        .ms-wdfeat-card:hover {
            transform: translateY(-6px);
        }

        .ms-wdfeat-card h3 {
            margin: 0 0 12px;
            font-size: 24px;
            line-height: 1.3;
            font-weight: 400;
            color: var(--purple);
        }

        .ms-wdfeat-card p {
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        /* dotted pattern image, bottom-left corner of the card */
        .ms-wdfeat-dots {
            position: absolute;
            left: -14px;
            bottom: -14px;
            width: 64px;
            height: 64px;
            pointer-events: none;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-wdfeat-top {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-wdfeat-title {
                max-width: none;
                font-size: 30px;
            }

            .ms-wdfeat-cards {
                grid-template-columns: 1fr;
                gap: 24px;
                margin-top: 40px;
            }
        }

        @media (max-width: 575px) {
            .ms-wdfeat {
                padding: 35px 16px 45px;
            }

            .ms-wdfeat-label,
            .ms-wdfeat-title {
                text-align: center;
            }

            .ms-wdfeat-label {
                font-size: 16px;
            }

            .ms-wdfeat-title {
                font-size: 26px;
            }

            .ms-wdfeat-card {
                padding: 28px 22px 32px;
            }

            .ms-wdfeat-card h3 {
                font-size: 21px;
            }
        }
    </style>

    <div class="ms-wdfeat-wrap">

        <div class="ms-wdfeat-top">
            <div class="ms-wdfeat-text">
                <span class="ms-wdfeat-label">Features</span>
                <h2 class="ms-wdfeat-title">A Team That Understands What Your Website Needs</h2>
                <?php foreach ($paragraphs as $para) : ?>
                    <p><?php echo $para; ?></p>
                <?php endforeach; ?>
            </div>

            <div class="ms-wdfeat-img">
                <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/website-devlopment-Your-Website-Needs-1.png" alt="Website Development Services" width="1536" height="1024" loading="lazy">
            </div>
        </div>

        <div class="ms-wdfeat-cards">
            <?php foreach ($cards as $card) : ?>
                <div class="ms-wdfeat-card">
                    <h3><?php echo htmlspecialchars($card[0]); ?></h3>
                    <p><?php echo htmlspecialchars($card[1]); ?></p>
                    <?php if ($card[2]) : ?>
                        <img class="ms-wdfeat-dots" src="https://minerdiastudio.com/wp-content/uploads/2026/04/doted.png" alt="" width="64" height="64" loading="lazy">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>