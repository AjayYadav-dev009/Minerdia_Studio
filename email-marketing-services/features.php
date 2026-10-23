<?php
$label = 'Features';
$title = 'Effective Email Marketing Services';

$paragraphs = [
    'Email marketing is one of the best ways to connect directly with your audience. At Minerdia Studio, we create smart and engaging email marketing campaigns that help businesses build trust, increase customer engagement, and grow their brand. As a trusted <strong>Email Marketing Company in India</strong>, we focus on personalized content, audience targeting, mobile-friendly designs, and performance tracking to deliver better opens, clicks, and conversions. From newsletters to promotional campaigns, we help businesses stay connected with customers through effective email marketing solutions.',
];

$alt   = 'Email Marketing Services';
?>
<section class="ms-emf">

    <style>
        .ms-emf,
        .ms-emf * {
            box-sizing: border-box;
        }

        .ms-emf {
            --purple: #5A2EA6;
            width: 100%;
            padding: 40px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-emf-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        /* ---------- Text ---------- */
        .ms-emf-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-emf-title {
            margin: 0 0 18px;
            max-width: 480px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-emf-text p {
            margin: 0 0 10px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-emf-text p:last-child {
            margin-bottom: 0;
        }

        .ms-emf-text strong {
            font-weight: 600;
        }

        /* ---------- Image ---------- */
        .ms-emf-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-emf-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-emf-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emf-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-emf-title {
                max-width: none;
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-emf {
                padding: 25px 16px 45px;
            }

            .ms-emf-label,
            .ms-emf-title {
                text-align: center;
            }

            .ms-emf-label {
                font-size: 16px;
            }

            .ms-emf-title {
                font-size: 26px;
            }
        }
    </style>

    <div class="ms-emf-wrap">

        <div class="ms-emf-text">
            <span class="ms-emf-label"><?php echo htmlspecialchars($label); ?></span>
            <h2 class="ms-emf-title"><?php echo htmlspecialchars($title); ?></h2>
            <?php foreach ($paragraphs as $para) : ?>
                <p><?php echo $para; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="ms-emf-img">
            <img src="<?php echo BASE; ?>assets/image/services/email-1.webp" alt="<?php echo htmlspecialchars($alt); ?>" width="1536" height="1024" loading="lazy">
        </div>

    </div>
</section>