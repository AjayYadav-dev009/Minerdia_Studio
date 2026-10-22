<?php
$title_start  = 'Why';
$title_accent = 'Businesses Choose';
$title_end    = 'Email Marketing';

$paragraphs = [
    'Email marketing is really good at getting results because it lets businesses talk to their customers in a professional way. Unlike other marketing methods, emails go straight to the people you want to reach and help businesses stay in touch with people who are interested in what they do. With a plan, you can use email marketing to keep customers happy, bring them back, and build awareness of your business without paying for ads all the time. At Minerdia Studio, we make emails that people actually want to read. We don\'t send the same email to everyone. Instead, we create emails about things our customers are interested in and encourage them to talk back to us.',
    'Our team works on figuring out who to send emails to, when to send them, what to put in the subject line, and how to design the email, so that every email does its job and businesses get better results. We also make sure every email looks good on smartphones, because that is how most people check their email. If an email looks good and is easy to use on a smartphone, people are more likely to read it and take action. Whether you want more sign-ups, to keep the customers you already have, or to sell more, our email marketing company helps you create emails that help your business grow for a long time.',
];
?>
<section class="ms-emw">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-emw,
        .ms-emw * {
            box-sizing: border-box;
        }

        .ms-emw {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 70px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-emw-wrap {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .ms-emw-title {
            margin: 0 0 22px;
            font-size: 36px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-emw-title span {
            color: var(--purple);
        }

        .ms-emw-text p {
            margin: 0 0 16px;
            font-size: 15px;
            line-height: 1.8;
            font-weight: 400;
            color: #222;
        }

        .ms-emw-text p:last-child {
            margin-bottom: 0;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emw-title {
                font-size: 31px;
            }
        }

        @media (max-width: 575px) {
            .ms-emw {
                padding: 20px 16px 45px;
            }

            .ms-emw-title {
                font-size: 26px;
                margin-bottom: 18px;
            }

            .ms-emw-text p {
                font-size: 14px;
                line-height: 1.75;
            }
        }
    </style>

    <div class="ms-emw-wrap">
        <h2 class="ms-emw-title"><?php echo htmlspecialchars($title_start); ?> <span><?php echo htmlspecialchars($title_accent); ?></span> <?php echo htmlspecialchars($title_end); ?></h2>

        <div class="ms-emw-text">
            <?php foreach ($paragraphs as $para) : ?>
                <p><?php echo $para; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>