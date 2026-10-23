<?php
$title = 'Email Marketing Strategy That Delivers Results';

$paragraphs = [
    'At Minerdia Studio, we use data and customer behavior insights to craft smarter email campaigns that lead to greater engagement and conversions over time. We examine your open rates, click rates, customer activity and audience interaction to understand their needs and what is working for your business. This data then helps us continually optimize your campaigns for better performance.',
    'We focus on creating value and relevance in your email marketing, which improves customer trust and increases the chances of users interacting with your emails. We also work on email timing, segmentation, subject line optimization and automation to ensure the most effective campaign.',
    'Every business wants to send better emails, build better customer relationships and get more predictable results. That is exactly what we help you do.',
];

$alt   = 'Email Marketing Strategy';
?>
<section class="ms-emst">

    <style>
        .ms-emst,
        .ms-emst * {
            box-sizing: border-box;
        }

        .ms-emst {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-emst-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        /* ---------- Text ---------- */
        .ms-emst-title {
            margin: 0 0 18px;
            max-width: 480px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-emst-text p {
            margin: 0 0 12px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-emst-text p:last-child {
            margin-bottom: 0;
        }

        /* ---------- Image ---------- */
        .ms-emst-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-emst-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-emst-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emst-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-emst-title {
                max-width: none;
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-emst {
                padding: 20px 16px 45px;
            }

            .ms-emst-title {
                font-size: 26px;
                text-align: center;
            }
        }
    </style>

    <div class="ms-emst-wrap">

        <div class="ms-emst-text">
            <h2 class="ms-emst-title"><?php echo htmlspecialchars($title); ?></h2>
            <?php foreach ($paragraphs as $para) : ?>
                <p><?php echo htmlspecialchars($para); ?></p>
            <?php endforeach; ?>
        </div>

        <div class="ms-emst-img">
            <img src="<?php echo BASE; ?>assets/image/services/email-3.webp" alt="<?php echo htmlspecialchars($alt); ?>" width="1536" height="1024" loading="lazy">
        </div>

    </div>
</section>