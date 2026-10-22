<?php
$shadow_text  = 'MINERDIA STUDIO';
$title_main   = 'Contact';
$title_accent = 'Us';
$description  = 'At <strong>Minerdia Studio</strong> we help businesses grow online with digital and creative services. We offer video editing and podcast production services. Our SEO services and paid advertising solutions are also available. Our team works hard to deliver solutions that fit your business goals. We provide website development services. Our team also manages media and creates high-quality content, for businesses. We support businesses at every stage.';
?>
<section class="ms-contact">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-contact,
        .ms-contact * {
            box-sizing: border-box;
        }

        .ms-contact {
            --purple: #5b2fb0;
            width: 100%;
            padding: 40px 20px 40px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
            overflow: hidden;
        }

        .ms-contact-wrap {
            position: relative;
            max-width: 780px;
            margin: 0 auto;
            text-align: center;
        }

        /* big light-grey background text */
        .ms-contact-shadow {
            display: block;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: clamp(40px, 8.5vw, 84px);
            font-weight: 700;
            line-height: 1;
            letter-spacing: 1px;
            white-space: nowrap;
            text-transform: uppercase;
            color: #efefef;
            pointer-events: none;
            user-select: none;
        }

        /* title sits on top of the shadow text */
        .ms-contact-title {
            position: relative;
            margin: -0.62em 0 14px;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: clamp(28px, 4.2vw, 40px);
            font-weight: 600;
            line-height: 1.2;
            color: #000;
        }

        .ms-contact-shadow + .ms-contact-title {
            margin-top: calc(clamp(40px, 8.5vw, 84px) * -0.62);
        }

        .ms-contact-title span {
            color: var(--purple);
        }

        .ms-contact-desc {
            margin: 0 auto;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.75;
            color: #333;
        }

        .ms-contact-desc strong {
            font-weight: 600;
            color: #000;
        }

        @media (max-width: 767px) {
            .ms-contact {
                padding: 30px 14px 30px;
            }

            .ms-contact-desc {
                font-size: 12.5px;
                line-height: 1.7;
            }
        }
    </style>

    <div class="ms-contact-wrap">
        <span class="ms-contact-shadow" aria-hidden="true"><?php echo htmlspecialchars($shadow_text); ?></span>
        <h2 class="ms-contact-title"><?php echo htmlspecialchars($title_main); ?> <span><?php echo htmlspecialchars($title_accent); ?></span></h2>
        <p class="ms-contact-desc"><?php echo $description; /* trusted HTML */ ?></p>
    </div>
</section>