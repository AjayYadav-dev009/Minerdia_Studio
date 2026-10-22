<?php
$watermark = 'Minerdia Studio';

// One block of text, exactly as on the live page. <b> is allowed here.
$text = 'A good script is the foundation of every great campaign or video. That\'s why at Minerdia Studio, we help our clients with <b>script writing services</b>, especially brands, businesses, influencers and content creators in India to attract customers online. We understand that different platforms have different requirements. YouTube videos need to be more engaging and hold the viewer\'s attention. Instagram Reels need to have a strong hook. WhatsApp and Facebook ads need to have a direct call to action. That\'s why we craft scripts based on the audience you wish to target, the goals you wish to achieve and the requirements of the platform. Our team strives to ensure that the content they create is clear, easy to read and engaging. This will ensure that your audience is engaged longer. We go a step further to craft scripts that are enticing, with a captivating opening and closing statement, flow of the story and engagement points to ensure that the video is professional and captures the viewer\'s attention.';
?>
<section class="ms-swabout">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-swabout,
        .ms-swabout * {
            box-sizing: border-box;
        }

        .ms-swabout {
            --purple: #5A2EA6;
            width: 100%;
            padding: 70px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
            overflow: hidden; /* only clips the big watermark text, nothing sticky here */
        }

        .ms-swabout-wrap {
            position: relative;
            max-width: 1110px;
            margin: 0 auto;
            text-align: center;
        }

        /* faint big background word behind the heading */
        .ms-swabout-wrap::before {
            content: attr(data-watermark);
            position: absolute;
            top: -42px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            font-size: 110px;
            line-height: 1;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            white-space: nowrap;
            color: #efefef;
            pointer-events: none;
            user-select: none;
            z-index: 0;
        }

        .ms-swabout-title {
            position: relative;
            z-index: 1;
            margin: 0 0 24px;
            font-size: 48px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-swabout-title span {
            color: var(--purple);
        }

        .ms-swabout-text {
            position: relative;
            z-index: 1;
            margin: 0 auto;
            max-width: 1040px;
            font-size: 15px;
            line-height: 1.8;
            font-weight: 400;
            color: #222;
        }

        .ms-swabout-text b {
            font-weight: 600;
            color: #000;
        }

        /* ---------- Tablet ---------- */
        @media (max-width: 991px) {
            .ms-swabout-wrap::before {
                font-size: 76px;
                top: -30px;
            }

            .ms-swabout-title {
                font-size: 40px;
            }
        }

        /* ---------- Mobile ---------- */
        @media (max-width: 575px) {
            .ms-swabout {
                padding: 45px 16px 40px;
            }

            .ms-swabout-wrap::before {
                font-size: 38px;
                top: -16px;
            }

            .ms-swabout-title {
                font-size: 32px;
                margin-bottom: 18px;
            }

            .ms-swabout-text {
                font-size: 14.5px;
                line-height: 1.75;
            }
        }
    </style>

    <div class="ms-swabout-wrap" data-watermark="<?php echo htmlspecialchars($watermark); ?>">
        <h2 class="ms-swabout-title">Script <span>Writing</span></h2>
        <p class="ms-swabout-text"><?php echo $text; ?></p>
    </div>
</section>