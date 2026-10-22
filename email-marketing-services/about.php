<?php
$shadow = 'MINERDIA STUDIO';
$title_plain = 'Email';
$title_accent = 'Marketing';

$paragraphs = [
    'At Minerdia Studio, we help businesses reach the right people, get them interested and generate consistent leads through email marketing services. Done correctly, email marketing is a way to build relationships with customers and grow a business online.',
    'Our team creates email campaigns that are professional, personal and useful, never spammy or repetitive. We focus on sending the right message to the right people at the right time. We plan every email, whether it is a one-off email or an automated campaign, to get more people to open, click and take action.',
    'As an <strong>Email Marketing Agency in India</strong>, we help businesses build campaigns that keep customers interested and make them want to come back. We work on finding the audience, designing emails, writing content, automating emails and tracking performance, so every campaign gets results.',
    'We know that every business is unique, so we customize our <strong>Email Marketing Services</strong> to fit your industry, goals and what your audience likes. Whether you want more sales, more website visitors or longer customer relationships, our plans are made to help your business grow in the long run. Our goal is simple: to create <strong>email marketing campaigns</strong> that people actually want to open, read and act on.',
];
?>
<section class="ms-emi">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-emi,
        .ms-emi * {
            box-sizing: border-box;
        }

        .ms-emi {
            --purple: #5A2EA6;
            width: 100%;
            padding: 60px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-emi-wrap {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        /* ---------- Heading with big faded shadow text ---------- */
        .ms-emi-head {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 110px;
            margin-bottom: 26px;
            overflow: hidden;
        }

        .ms-emi-shadow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 92px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: 2px;
            white-space: nowrap;
            color: rgba(90, 46, 166, .07);
            pointer-events: none;
            user-select: none;
        }

        .ms-emi-title {
            position: relative;
            margin: 0;
            font-size: 40px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-emi-title span {
            color: var(--purple);
        }

        /* ---------- Text ---------- */
        .ms-emi-text p {
            margin: 0 0 16px;
            font-size: 15px;
            line-height: 1.8;
            font-weight: 400;
            color: #222;
        }

        .ms-emi-text p:last-child {
            margin-bottom: 0;
        }

        .ms-emi-text strong {
            font-weight: 600;
            color: #000;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emi-shadow {
                font-size: 70px;
            }

            .ms-emi-title {
                font-size: 34px;
            }
        }

        @media (max-width: 575px) {
            .ms-emi {
                padding: 35px 16px 40px;
            }

            .ms-emi-head {
                min-height: 80px;
                margin-bottom: 18px;
            }

            .ms-emi-shadow {
                font-size: 34px;
                letter-spacing: 1px;
            }

            .ms-emi-title {
                font-size: 28px;
            }

            .ms-emi-text p {
                font-size: 14px;
                line-height: 1.75;
            }
        }
    </style>

    <div class="ms-emi-wrap">
        <div class="ms-emi-head">
            <span class="ms-emi-shadow" aria-hidden="true"><?php echo htmlspecialchars($shadow); ?></span>
            <h2 class="ms-emi-title"><?php echo htmlspecialchars($title_plain); ?> <span><?php echo htmlspecialchars($title_accent); ?></span></h2>
        </div>

        <div class="ms-emi-text">
            <?php foreach ($paragraphs as $para) : ?>
                <p><?php echo $para; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>