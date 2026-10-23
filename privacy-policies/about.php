<?php
// Edit the content here.
$watermark    = 'MINERDIA STUDIO';
$title_before = 'Privacy';
$title_accent = 'Policy';
// Trusted static HTML, so <strong> and <a> are allowed inside the paragraphs.
$paragraphs = [
    'At <strong>Minerdia Studio</strong>, your privacy matters to us. This Privacy Policy explains how we collect, use, store, and protect information when you visit our website (<a href="https://minerdiastudio.com/">minerdiastudio.com</a>), inquire about our services, or engage us as a client.',
    'By using our website or services, you agree to the practices described in this policy. If you do not agree, please refrain from using our website or submitting any personal information',
];
?>
<section class="ms-privacy">

    <style>
        .ms-privacy {
            --purple: #5A2EA6;
            --link: #1fa596;
            width: 100%;
            padding: 40px 20px 40px;
            background: #fff;
            font-family: var(--font-body);
            overflow: hidden;
        }

        .ms-privacy-wrap {
            max-width: 1110px;
            margin: 0 auto;
            text-align: center;
        }

        /* ---------- Title with watermark ---------- */
        .ms-privacy-head {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90px;
            margin-bottom: 24px;
        }

        .ms-privacy-watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            line-height: 1;
            font-weight: 800;
            letter-spacing: -10px;
            white-space: nowrap;
            color: #f1f1f1;
            pointer-events: none;
            user-select: none;
        }

        .ms-privacy-title {
            position: relative;
            margin: 0;
            font-size: 52px;
            line-height: 1.2;
            font-weight: 800;
            color: #000;
        }

        .ms-privacy-title span {
            color: var(--purple);
        }

        .ms-privacy-text {
            margin: 0 auto 12px;
            font-size: 15.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-privacy-text:last-child {
            margin-bottom: 0;
        }

        .ms-privacy-text strong {
            font-weight: 600;
            color: #000;
        }

        .ms-privacy-text a {
            color: var(--link);
            text-decoration: underline;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-privacy-watermark {
                font-size: 76px;
                letter-spacing: -4px;
            }

            .ms-privacy-title {
                font-size: 42px;
            }

            .ms-privacy-text {
                font-size: 15px;
            }
        }

        @media (max-width: 575px) {
            .ms-privacy {
                padding: 30px 14px 32px;
            }

            .ms-privacy-head {
                min-height: 70px;
                margin-bottom: 18px;
            }

            .ms-privacy-watermark {
                font-size: 44px;
                letter-spacing: -2px;
            }

            .ms-privacy-title {
                font-size: 32px;
            }

            .ms-privacy-text {
                font-size: 14.5px;
                line-height: 1.65;
            }
        }
    </style>

    <div class="ms-privacy-wrap">

        <div class="ms-privacy-head">
            <div class="ms-privacy-watermark" aria-hidden="true"><?php echo htmlspecialchars($watermark); ?></div>
            <h1 class="ms-privacy-title"><?php echo htmlspecialchars($title_before); ?> <span><?php echo htmlspecialchars($title_accent); ?></span></h1>
        </div>

        <?php foreach ($paragraphs as $para) : ?>
            <p class="ms-privacy-text"><?php echo $para; ?></p>
        <?php endforeach; ?>

    </div>
</section>