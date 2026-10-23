<?php
// Edit the content here.
$watermark = 'MINERDIA STUDIO';
$title_before = 'Terms';
$title_accent = 'and';
$title_after  = 'Conditions';
$paragraphs = [
    'Welcome to Minerdia Studio. By accessing our website, engaging our services, or entering into any agreement with us, you agree to be bound by the following Terms and Conditions. Please read them carefully before proceeding.',
    'These terms apply to all clients, visitors, and users of our services- including digital marketing, content creation, social media management, video production, and all related creative and consulting work.',
];
?>
<section class="ms-terms">

    <style>

        .ms-terms {
            --purple: #5A2EA6;
            width: 100%;
            padding: 40px 20px 40px;
            background: #fff;
            font-family: var(--font-body);
            overflow: hidden;
        }

        .ms-terms-wrap {
            max-width: 1110px;
            margin: 0 auto;
            text-align: center;
        }

        /* ---------- Title with watermark ---------- */
        .ms-terms-head {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80px;
            margin-bottom: 18px;
        }

        .ms-terms-watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: 5px;
            white-space: nowrap;
            color: #f1f1f1;
            pointer-events: none;
            user-select: none;
        }

        .ms-terms-title {
            position: relative;
            margin: 0;
            font-size: 50px;
            line-height: 1.2;
            font-weight: 800;
            color: #000;
        }

        .ms-terms-title span {
            color: var(--purple);
        }

        .ms-terms-text {
            margin: 0 auto 8px;
            font-size: 18px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-terms-text:last-child {
            margin-bottom: 0;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-terms-watermark {
                font-size: 70px;
                letter-spacing: -4px;
            }

            .ms-terms-title {
                font-size: 38px;
            }

            .ms-terms-text {
                font-size: 12.5px;
            }
        }

        @media (max-width: 575px) {
            .ms-terms {
                padding: 30px 14px 32px;
            }

            .ms-terms-head {
                min-height: 64px;
            }

            .ms-terms-watermark {
                font-size: 40px;
                letter-spacing: -2px;
            }

            .ms-terms-title {
                font-size: 30px;
            }

            .ms-terms-text {
                font-size: 13px;
            }
        }
    </style>

    <div class="ms-terms-wrap">

        <div class="ms-terms-head">
            <div class="ms-terms-watermark" aria-hidden="true"><?php echo htmlspecialchars($watermark); ?></div>
            <h1 class="ms-terms-title"><?php echo htmlspecialchars($title_before); ?> <span><?php echo htmlspecialchars($title_accent); ?></span> <?php echo htmlspecialchars($title_after); ?></h1>
        </div>

        <?php foreach ($paragraphs as $para) : ?>
            <p class="ms-terms-text"><?php echo htmlspecialchars($para); ?></p>
        <?php endforeach; ?>

    </div>
</section>