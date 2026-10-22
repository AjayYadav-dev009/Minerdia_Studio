<?php
$services = [
    ['🎙', 'Podcast Recording', 'Professional recording support for creators, founders, experts and branded podcast episodes.'],
    ['🎥', 'Multi-Camera Video Production', 'Dynamic camera angles, smooth framing and engaging video podcast production setup.'],
    ['🎧', 'Professional Audio Recording', 'Clean sound recording with professional microphones and studio-grade audio setup.'],
    ['💡', 'Studio Lighting Setup', 'Controlled lighting environment to make every podcast visually polished and premium.'],
    ['✂', 'Podcast Editing', 'Raw recordings are polished into clean, professional and publish-ready podcast content.'],
    ['🔊', 'Audio Enhancement', 'Noise management, sound balancing and audio cleanup for crystal-clear conversations.'],
    ['🎨', 'Color Grading', 'Professional visual enhancement to improve tone, consistency and final video quality.'],
    ['💬', 'Subtitle Creation', 'Readable subtitles that make your podcast clips more accessible and social-friendly.'],
    ['🖼', 'Thumbnail Design', 'Creative thumbnails designed to improve clicks, visibility and content presentation.'],
    ['⭐', 'Highlight Videos', 'Important moments from your episode are turned into engaging highlight content.'],
    ['📱', 'Short Reels Creation', 'Podcast clips are converted into short-form reels for Instagram, YouTube and LinkedIn.'],
    ['🚀', 'Platform-Ready Delivery', 'Final files are delivered ready to publish across the platforms you want to target.'],
];
?>
<section class="ms-complete-service-section">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-complete-service-section,
        .ms-complete-service-section * {
            box-sizing: border-box;
        }

        .ms-complete-service-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: Arial, sans-serif;
            padding: 20px 20px 35px;
            background: #ffffff;
            overflow: hidden;
        }

        .ms-complete-wrap {
            max-width: 1180px;
            margin: 0 auto;
        }

        .ms-complete-head {
            max-width: 920px;
            margin: 0 auto 20px;
            text-align: center;
        }

        .ms-complete-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(255, 255, 255, .86);
            border: 1px solid rgba(255, 255, 255, .95);
            color: var(--purple);
            font-size: 14px;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
            margin-bottom: 14px;
        }

        .ms-complete-badge::before {
            content: "";
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msCompleteBlink 1.5s ease-in-out infinite;
        }

        .ms-complete-title {
            margin: 0 0 12px;
            font-size: 46px;
            line-height: 1.14;
            letter-spacing: -1.4px;
            color: var(--dark);
            font-weight: 900;
        }

        .ms-complete-title span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-complete-text {
            margin: 0 auto;
            max-width: 850px;
            font-size: 17px;
            line-height: 1.7;
            color: var(--text);
            text-align: center;
        }

        /* Slider: extra bottom padding + softer shadow so the shadow is not hard-clipped into a grey band */
        .ms-service-slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 8px 0 34px;
        }

        .ms-service-slider::before,
        .ms-service-slider::after {
            content: "";
            position: absolute;
            top: 0;
            width: 80px;
            height: 100%;
            z-index: 5;
            pointer-events: none;
        }

        .ms-service-slider::before {
            left: 0;
            background: linear-gradient(90deg, #fff, rgba(255, 255, 255, 0));
        }

        .ms-service-slider::after {
            right: 0;
            background: linear-gradient(270deg, #fff, rgba(255, 255, 255, 0));
        }

        .ms-service-track {
            display: flex;
            align-items: stretch;
            gap: 22px;
            width: max-content;
            animation: msServiceSlide 38s linear infinite;
        }

        .ms-service-track.ms-service-paused {
            animation-play-state: paused;
        }

        .ms-service-card {
            width: 285px;
            min-height: 250px;
            flex: 0 0 auto;
            padding: 24px 20px;
            border-radius: 26px;
            background: rgba(255, 255, 255, .85);
            border: 1px solid rgba(255, 255, 255, .92);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 10px 26px rgba(23, 20, 43, .06);
            position: relative;
            overflow: hidden;
            transition: .35s ease;
            cursor: pointer;
        }

        .ms-service-card::before {
            content: "";
            position: absolute;
            inset: 0;
            padding: 2px;
            border-radius: 26px;
            background: linear-gradient(120deg, var(--purple), var(--teal), var(--purple));
            background-size: 250% 250%;
            animation: msBorderMove 4s linear infinite;
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        .ms-service-card::after {
            content: "";
            position: absolute;
            top: -90%;
            left: -85%;
            width: 55%;
            height: 260%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .68), transparent);
            transform: rotate(25deg);
            animation: msServiceShine 6s ease-in-out infinite;
            pointer-events: none;
        }

        .ms-service-card:hover {
            transform: translateY(-6px);
        }

        .ms-service-icon {
            width: 48px;
            height: 48px;
            border-radius: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            color: #fff;
            font-size: 21px;
            margin-bottom: 18px;
            position: relative;
            z-index: 2;
            box-shadow: 0 12px 28px rgba(90, 46, 166, .22);
        }

        .ms-service-card h3 {
            margin: 0;
            font-size: 19px;
            line-height: 1.35;
            color: #222033;
            font-weight: 800;
            position: relative;
            z-index: 2;
        }

        .ms-service-card p {
            margin: 10px 0 0;
            font-size: 14.5px;
            line-height: 1.65;
            color: #575766;
            position: relative;
            z-index: 2;
            text-align: justify;
        }

        /* Bottom highlight bar (missing before) */
        .ms-complete-bar {
            max-width: 1140px;
            margin: 6px auto 0;
            padding: 22px 26px;
            display: grid;
            grid-template-columns: .85fr 1.6fr;
            gap: 40px;
            align-items: center;
            border-left: 4px solid var(--purple);
            border-radius: 16px;
            background: linear-gradient(90deg, #f0ecf9 0%, #eef6f7 100%);
            box-shadow: 0 8px 22px rgba(23, 20, 43, .12);
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-complete-bar h3 {
            margin: 0;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 600;
            color: #000;
        }

        .ms-complete-bar p {
            margin: 0;
            font-size: 15.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        @keyframes msServiceSlide {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes msBorderMove {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 250% 50%;
            }
        }

        @keyframes msServiceShine {
            0% {
                left: -85%;
                opacity: 0;
            }

            35% {
                opacity: .5;
            }

            62% {
                left: 130%;
                opacity: 0;
            }

            100% {
                left: 130%;
                opacity: 0;
            }
        }

        @keyframes msCompleteBlink {

            0%,
            100% {
                opacity: .45;
                transform: scale(.85);
            }

            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }

        @media(max-width:991px) {
            .ms-complete-service-section {
                padding: 15px 18px 25px;
            }

            .ms-complete-title {
                font-size: 34px;
            }

            .ms-complete-text {
                font-size: 15.5px;
            }

            .ms-service-card {
                width: 270px;
            }

            .ms-complete-bar {
                gap: 24px;
            }
        }

        @media(max-width:767px) {
            .ms-complete-service-section {
                padding: 10px 15px 20px;
            }

            .ms-complete-head {
                margin-bottom: 16px;
            }

            .ms-complete-title {
                font-size: 30px;
                letter-spacing: -.7px;
            }

            .ms-complete-text {
                font-size: 15.5px;
            }

            .ms-service-slider::before,
            .ms-service-slider::after {
                width: 35px;
            }

            .ms-service-card {
                width: 255px;
                min-height: 240px;
            }

            .ms-complete-bar {
                grid-template-columns: 1fr;
                gap: 10px;
                padding: 18px 18px;
            }

            .ms-complete-bar h3 {
                font-size: 18px;
            }

            .ms-complete-bar p {
                font-size: 14.5px;
            }
        }
    </style>

    <div class="ms-complete-wrap">
        <div class="ms-complete-head">
            <span class="ms-complete-badge">All In One Service</span>

            <h2 class="ms-complete-title">
                Complete <span>Podcast Production Services</span>
            </h2>

            <p class="ms-complete-text">
                Minerdia Studio offers an all-in-one podcast production services solution, solving the problem of managing multiple vendors for recording, editing, visuals and final content delivery.
            </p>
        </div>

        <div class="ms-service-slider">
            <div class="ms-service-track" id="msServiceTrack">
                <?php for ($loop = 0; $loop < 2; $loop++) : ?>
                    <?php foreach ($services as $s) : ?>
                        <div class="ms-service-card">
                            <div class="ms-service-icon"><?php echo $s[0]; ?></div>
                            <h3><?php echo htmlspecialchars($s[1]); ?></h3>
                            <p><?php echo htmlspecialchars($s[2]); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>

        <div class="ms-complete-bar">
            <h3>Complete production. One studio. One team.</h3>
            <p>This all-in-one solution helps creators and businesses save time while ensuring professional production quality for every episode.</p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var track = document.getElementById("msServiceTrack");
            if (!track) return;

            track.querySelectorAll(".ms-service-card").forEach(function(card) {
                card.addEventListener("click", function() {
                    track.classList.toggle("ms-service-paused");
                });
            });
        });
    </script>
</section>