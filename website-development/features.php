<?php
$paragraphs = [
    'We do more than just make websites look good. We do the thing. This means we design and build websites that work well and look good too. As a <strong>web development company in India</strong> that has been around for a while we make sure every part of your website is done right.',
    'We want to make websites that everyone can use, no matter what device they\'re on. We know that people will leave and not come back if a website is slow or hard to use, so we make sure our websites load quickly and are easy to use. We also make sure that our websites follow the rules so that search engines like Google can find them. We take care of everything, from designing the website to making it fast, so visitors will have a good time on your website and find it easily.',
    'In the end what we want to do is simple. We want to make a website that helps your business do well online and get results.',
];

$cards = [
    ['Custom Website', 'We make websites that\'re just for you and your business. Every website we build is made to fit your business needs. This differentiates your business. Helps you stand out on the internet.'],
    ['Responsive Design', 'Our websites work well on your phone, tablet and computer. This means that no matter what device people are using, they can easily use your website.'],
    ['Clean & Optimized', 'Our websites are easy to find on search engines like Google, load quickly, and use clean code to improve performance and rankings, ensuring your website reaches people searching for your business.'],
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
            padding: 40px 20px 50px;
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
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 1fr);
            gap: 30px;
            align-items: start;
        }

        .ms-wdfeat-label {
            display: block;
            margin: 0 0 6px;
            font-family: 'Lato', Arial, sans-serif;
            font-size: 13px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-wdfeat-title {
            margin: 0 0 14px;
            max-width: 300px;
            font-size: 24px;
            line-height: 1.35;
            font-weight: 600;
            color: #000;
        }

        .ms-wdfeat-text p {
            margin: 0;
            font-size: 11.5px;
            line-height: 1.55;
            font-weight: 400;
            color: #111;
        }

        .ms-wdfeat-text strong {
            font-weight: 600;
        }

        .ms-wdfeat-img {
            border-radius: 28px;
            overflow: hidden;
            border: 2px solid #fff;
            box-shadow: 0 8px 24px rgba(90, 46, 166, .22), 0 0 0 1px rgba(90, 46, 166, .12);
        }

        .ms-wdfeat-img img {
            display: block;
            width: 100%;
            aspect-ratio: 16 / 10;
            object-fit: cover;
        }

        /* ---------- Bottom: 3 cards ---------- */
        .ms-wdfeat-cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 26px;
            margin-top: 22px;
        }

        .ms-wdfeat-card {
            position: relative;
            padding: 26px 22px 28px 26px;
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 10px 34px rgba(0, 0, 0, .12);
            transition: .3s ease;
        }

        .ms-wdfeat-card:hover {
            transform: translateY(-5px);
        }

        /* dotted corner decoration (bottom-left) */
        .ms-wdfeat-card::after {
            content: "";
            position: absolute;
            left: -2px;
            bottom: -2px;
            width: 34px;
            height: 34px;
            background-image: radial-gradient(var(--purple) 1px, transparent 1.4px);
            background-size: 5px 5px;
            opacity: .55;
            pointer-events: none;
        }

        .ms-wdfeat-card h3 {
            margin: 0 0 8px;
            font-size: 17px;
            line-height: 1.3;
            font-weight: 400;
            color: var(--purple);
        }

        .ms-wdfeat-card p {
            margin: 0;
            font-size: 11.5px;
            line-height: 1.65;
            font-weight: 400;
            color: #111;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-wdfeat-top {
                grid-template-columns: 1fr;
            }

            .ms-wdfeat-title {
                max-width: none;
            }

            .ms-wdfeat-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 575px) {
            .ms-wdfeat {
                padding: 30px 14px 40px;
            }

            .ms-wdfeat-title {
                font-size: 21px;
            }

            .ms-wdfeat-text p,
            .ms-wdfeat-card p {
                font-size: 13px;
            }

            .ms-wdfeat-card h3 {
                font-size: 18px;
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
                <img src="images/web-development.jpg" alt="Website development" loading="lazy">
            </div>
        </div>

        <div class="ms-wdfeat-cards">
            <?php foreach ($cards as $card) : ?>
                <div class="ms-wdfeat-card">
                    <h3><?php echo htmlspecialchars($card[0]); ?></h3>
                    <p><?php echo htmlspecialchars($card[1]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>