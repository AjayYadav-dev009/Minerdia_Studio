<?php
/* Replace with the real image URL from your uploads folder */
$ms_smf_img = 'https://minerdiastudio.com/wp-content/uploads/2026/06/Social-Media-Experts-1-1.png';
?>
<section class="ms-smf">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-smf,
        .ms-smf * {
            box-sizing: border-box;
        }

        .ms-smf {
            --purple: #5A2EA6;
            width: 100%;
            padding: 40px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-smf-wrap {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 36px;
            align-items: center;
        }

        .ms-smf-label {
            display: block;
            margin: 0 0 10px;
            font-family: 'Lato', Arial, sans-serif;
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-smf-title {
            margin: 0 0 24px;
            font-size: 32px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-smf-text p {
            margin: 0;
            font-size: 16px;
            line-height: 1.55;
            font-weight: 300;
            color: #1b1b1b;
            text-align: justify;
        }

        .ms-smf-text strong {
            font-weight: 600;
            color: #000;
        }

        .ms-smf-img {
            border-radius: 30px;
            border: 3px solid #e2e2e2;
            overflow: hidden;
            line-height: 0;
            background: #f3f3f3;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .25);
        }

        .ms-smf-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        @media (max-width: 991px) {
            .ms-smf-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-smf-title {
                font-size: 28px;
            }
        }

        @media (max-width: 575px) {
            .ms-smf {
                padding: 30px 14px 40px;
            }

            .ms-smf-title {
                font-size: 25px;
                margin-bottom: 16px;
            }

            .ms-smf-text p {
                font-size: 15px;
            }

            .ms-smf-img {
                border-radius: 22px;
            }
        }
    </style>

    <div class="ms-smf-wrap">
        <div class="ms-smf-text">
            <span class="ms-smf-label">Features</span>
            <h2 class="ms-smf-title">Dedicated Social Media Experts for Your Business Growth</h2>

            <p>Here at Minerdia Studio, our team truly understands social media and is dedicated to helping your business grow through <strong>social media marketing services in Delhi</strong>. Our aim is to increase your business visibility, get people talking about your brand, and turn that attention into real customers.</p>
            <p>We don’t just post content randomly. We plan what to post, create content that connects with your audience, and make sure it supports your business goals. We do this through <strong>Instagram marketing services India</strong>, <strong>Facebook marketing services</strong>, and as a <strong>YouTube marketing agency</strong>. We also track performance data to understand what works and what doesn’t.</p>
            <p>We combine creativity, trending content, and performance tracking to make sure your business stays in people’s minds and builds a strong social media presence in Delhi and across India as a trusted <strong>social media management company in India</strong>.</p>
        </div>

        <div class="ms-smf-img">
            <img src="<?= htmlspecialchars($ms_smf_img) ?>" alt="Social media management team in a strategy meeting" loading="lazy">
        </div>
    </div>
</section>