<section class="ms-multicam-section">
    <style>
        .ms-multicam-section,
        .ms-multicam-section * {
            box-sizing: border-box;
        }

        .ms-multicam-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: Arial, sans-serif;
            padding: 42px 20px 46px;
            background:
                radial-gradient(circle at 8% 10%, rgba(90, 46, 166, .09), transparent 28%),
                radial-gradient(circle at 92% 18%, rgba(47, 168, 161, .14), transparent 30%),
                linear-gradient(135deg, #ffffff 0%, #fbf8ff 48%, #effafa 100%);
            overflow: hidden;
        }

        .ms-multicam-wrap {
            max-width: 1120px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: .95fr 1fr;
            gap: 42px;
            align-items: center;
        }

        .ms-multicam-visual {
            position: relative;
            padding: 26px;
            border-radius: 34px;
            background: rgba(255, 255, 255, .74);
            border: 1px solid rgba(255, 255, 255, .95);
            backdrop-filter: blur(24px) saturate(150%);
            -webkit-backdrop-filter: blur(24px) saturate(150%);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, .95), 0 28px 70px rgba(23, 20, 43, .10);
            overflow: hidden;
            animation: msMultiFloat 5s ease-in-out infinite;
        }

        .ms-multicam-visual::before {
            content: "";
            position: absolute;
            right: -42px;
            top: -42px;
            width: 150px;
            height: 150px;
            border-radius: 34px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .20), rgba(47, 168, 161, .17));
            animation: msMultiBlob 6s ease-in-out infinite;
        }

        .ms-multicam-image-box {
            position: relative;
            z-index: 2;
            width: 100%;
            aspect-ratio: 1536 / 1024;
            border-radius: 26px;
            overflow: hidden;
            box-shadow: 0 22px 50px rgba(23, 20, 43, .18);
        }

        .ms-multicam-image-box img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center;
            border-radius: 26px;
            animation: msMultiZoom 8s ease-in-out infinite;
        }

        .ms-multicam-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(255, 255, 255, .88);
            border: 1px solid rgba(255, 255, 255, .95);
            color: var(--purple);
            font-size: 13px;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
            margin-bottom: 18px;
        }

        .ms-multicam-badge::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msMultiBlink 1.5s ease-in-out infinite;
        }

        .ms-multicam-title {
            margin: 0 0 16px;
            font-size: 42px;
            line-height: 1.14;
            letter-spacing: -1.2px;
            color: var(--dark);
            font-weight: 900;
        }

        .ms-multicam-title span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-multicam-text {
            margin: 0 0 22px;
            font-size: 15.5px;
            line-height: 1.75;
            color: var(--text);
            text-align: justify;
        }

        .ms-multicam-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .ms-multicam-item {
            padding: 13px 15px;
            border-radius: 16px;
            background: rgba(255, 255, 255, .78);
            border: 1px solid rgba(255, 255, 255, .95);
            backdrop-filter: blur(18px) saturate(145%);
            -webkit-backdrop-filter: blur(18px) saturate(145%);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, .96), 0 12px 30px rgba(23, 20, 43, .05);
            color: #333;
            font-size: 14px;
            line-height: 1.35;
            display: flex;
            align-items: center;
            gap: 9px;
            min-height: 48px;
            transition: .3s ease;
        }

        .ms-multicam-item:hover {
            transform: translateY(-4px);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, .96), 0 16px 38px rgba(23, 20, 43, .08);
        }

        .ms-multicam-item::before {
            content: "✓";
            color: var(--teal);
            font-size: 18px;
            font-weight: 900;
            flex: 0 0 auto;
        }

        @keyframes msMultiBlink {

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

        @keyframes msMultiFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-9px);
            }
        }

        @keyframes msMultiZoom {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.03);
            }
        }

        @keyframes msMultiBlob {

            0%,
            100% {
                transform: translate(0, 0) rotate(0);
            }

            50% {
                transform: translate(-12px, 12px) rotate(8deg);
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .ms-multicam-section {
                padding: 34px 18px 38px;
            }

            .ms-multicam-wrap {
                grid-template-columns: .95fr 1fr;
                gap: 26px;
            }

            .ms-multicam-title {
                font-size: 32px;
            }

            .ms-multicam-text {
                font-size: 14.5px;
                line-height: 1.62;
            }

            .ms-multicam-visual {
                padding: 18px;
                border-radius: 28px;
            }

            .ms-multicam-image-box {
                border-radius: 22px;
            }

            .ms-multicam-image-box img {
                border-radius: 22px;
            }

            .ms-multicam-list {
                gap: 9px;
            }

            .ms-multicam-item {
                padding: 11px 12px;
                font-size: 12.5px;
                min-height: 44px;
            }
        }

        @media(max-width:767px) {
            .ms-multicam-section {
                padding: 30px 18px 34px;
            }

            .ms-multicam-wrap {
                grid-template-columns: 1fr;
                gap: 28px;
                text-align: center;
            }

            .ms-multicam-content {
                order: 1;
            }

            .ms-multicam-visual {
                order: 2;
                padding: 18px;
                border-radius: 26px;
            }

            .ms-multicam-title {
                font-size: 30px;
                letter-spacing: -.7px;
            }

            .ms-multicam-text {
                text-align: center;
                font-size: 15px;
                line-height: 1.65;
            }

            .ms-multicam-list {
                grid-template-columns: 1fr;
            }

            .ms-multicam-item {
                justify-content: center;
            }

            .ms-multicam-image-box {
                border-radius: 22px;
            }

            .ms-multicam-image-box img {
                border-radius: 22px;
            }
        }
    </style>

    <div class="ms-multicam-wrap">
        <div class="ms-multicam-visual">
            <div class="ms-multicam-image-box">
                <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/multi-camera-podcast-recording-studio.png" alt="Multi Camera Podcast Recording">
            </div>
        </div>

        <div class="ms-multicam-content">
            <span class="ms-multicam-badge">Video Podcast</span>

            <h2 class="ms-multicam-title">
                Multi-Camera Podcast <span>Recording</span>
            </h2>

            <p class="ms-multicam-text">
                Video podcasts stay to rule platforms such as YouTube, LinkedIn, Instagram, and Facebook. In order to keep the viewers engaged, we have multi-camera podcast recording solutions.
            </p>

            <div class="ms-multicam-list">
                <div class="ms-multicam-item">Host close-up shots</div>
                <div class="ms-multicam-item">Guest close-up shots</div>
                <div class="ms-multicam-item">Wide conversation angles</div>
                <div class="ms-multicam-item">Reaction shots</div>
                <div class="ms-multicam-item">Smooth camera transitions</div>
                <div class="ms-multicam-item">Professional framing</div>
            </div>
        </div>
    </div>
</section>