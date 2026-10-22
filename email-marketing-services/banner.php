<?php
$title  = 'Ready to Turn Emails Into Sales?';
$text   = 'Reach the right audience, increase engagement, and grow your business with email campaigns designed to deliver results.';
$button = 'Get Started Today';
$link   = 'https://minerdiastudio.com/free-audit/';

$image  = 'https://minerdiastudio.com/wp-content/uploads/2026/04/email-desktop-1.png';
$alt    = 'Email Campaign Management';
?>
<section class="ms-emcta">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-emcta,
        .ms-emcta * {
            box-sizing: border-box;
        }

        .ms-emcta {
            --purple: #5A2EA6;
            width: 100%;
            padding: 20px 20px 80px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-emcta-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* light lavender card, text left / image right */
        .ms-emcta-box {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(0, .8fr);
            gap: 30px;
            align-items: center;
            padding: 26px 50px;
            border-radius: 24px;
            background: linear-gradient(120deg, #FFFFFF 0%, #F3EDFC 45%, #E6DBF8 100%);
            box-shadow: 0 8px 26px rgba(90, 46, 166, .14);
        }

        .ms-emcta-title {
            margin: 0 0 12px;
            font-size: 30px;
            line-height: 1.25;
            font-weight: 600;
            color: #111;
        }

        .ms-emcta-desc {
            margin: 0 0 22px;
            max-width: 520px;
            font-size: 14px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-emcta-btn {
            display: inline-block;
            padding: 12px 26px;
            border-radius: 50px;
            background: var(--purple);
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.2;
            text-decoration: none;
            color: #fff;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-emcta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .35);
        }

        .ms-emcta-btn:focus-visible {
            outline: 2px solid var(--purple);
            outline-offset: 3px;
        }

        .ms-emcta-img img {
            display: block;
            width: 100%;
            max-width: 480px;
            height: auto;
            margin-left: auto;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emcta-box {
                grid-template-columns: 1fr;
                gap: 22px;
                padding: 32px 30px;
                text-align: center;
            }

            .ms-emcta-desc {
                max-width: none;
            }

            .ms-emcta-img img {
                max-width: 460px;
                margin: 0 auto;
            }
        }

        @media (max-width: 575px) {
            .ms-emcta {
                padding: 10px 16px 50px;
            }

            .ms-emcta-box {
                padding: 26px 18px;
                border-radius: 18px;
            }

            .ms-emcta-title {
                font-size: 24px;
            }

            .ms-emcta-btn {
                padding: 11px 24px;
            }
        }
    </style>

    <div class="ms-emcta-wrap">
        <div class="ms-emcta-box">

            <div class="ms-emcta-text">
                <h2 class="ms-emcta-title"><?php echo htmlspecialchars($title); ?></h2>
                <p class="ms-emcta-desc"><?php echo htmlspecialchars($text); ?></p>
                <a class="ms-emcta-btn" href="<?php echo htmlspecialchars($link); ?>"><?php echo htmlspecialchars($button); ?></a>
            </div>

            <div class="ms-emcta-img">
                <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($alt); ?>" width="650" height="320" loading="lazy">
            </div>

        </div>
    </div>
</section>