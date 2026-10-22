<?php
$brand     = 'Minerdia Studio';
$watermark = 'Minerdia Studio';

$paragraphs = [
    'At ' . $brand . ', we provide professional <strong>Website Development Services</strong> for startups, small businesses, and enterprises across India. Our goal is to create modern, responsive, and high-performing websites that strengthen your online presence and help your business grow.',
    'As an experienced web development company, we do more than just design attractive websites. Our Website Development Services focus on delivering fast-loading, secure, SEO-friendly, and mobile-responsive websites that provide an excellent user experience on every device.',
    'Every website is built following industry best practices and Google\'s recommendations to improve performance, search visibility, and user engagement. From UI/UX design and custom development to speed optimization and ongoing support, we ensure your website is ready for long-term success.',
    'Whether you need a business website, corporate website, portfolio, or custom web solution, our Website Development Services are designed to generate leads, increase conversions, and help your business achieve measurable online growth.',
];
?>
<section class="ms-wdabout">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-wdabout,
        .ms-wdabout * {
            box-sizing: border-box;
        }

        .ms-wdabout {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 40px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
            overflow: hidden;
        }

        .ms-wdabout-wrap {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        /* faint big background word behind the heading */
        .ms-wdabout-wrap::before {
            content: attr(data-watermark);
            position: absolute;
            top: -34px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            font-size: 72px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            white-space: nowrap;
            color: #ececec;
            pointer-events: none;
            user-select: none;
            z-index: 0;
        }

        .ms-wdabout-title {
            position: relative;
            z-index: 1;
            margin: 0 0 18px;
            font-size: 38px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-wdabout-title span {
            color: var(--purple);
        }

        .ms-wdabout-text {
            position: relative;
            z-index: 1;
        }

        .ms-wdabout-text p {
            margin: 0 auto 10px;
            max-width: 900px;
            font-size: 11.5px;
            line-height: 1.65;
            font-weight: 400;
            color: #111;
        }

        .ms-wdabout-text p:last-child {
            margin-bottom: 0;
        }

        .ms-wdabout-text strong {
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .ms-wdabout {
                padding: 40px 16px 30px;
            }

            .ms-wdabout-wrap::before {
                font-size: 40px;
                top: -20px;
            }

            .ms-wdabout-title {
                font-size: 28px;
            }

            .ms-wdabout-text p {
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            .ms-wdabout-wrap::before {
                font-size: 28px;
            }

            .ms-wdabout-title {
                font-size: 24px;
            }
        }
    </style>

    <div class="ms-wdabout-wrap" data-watermark="<?php echo htmlspecialchars($watermark); ?>">
        <h2 class="ms-wdabout-title">Website Development <span>Services</span></h2>

        <div class="ms-wdabout-text">
            <?php foreach ($paragraphs as $para) : ?>
                <p><?php echo $para; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>