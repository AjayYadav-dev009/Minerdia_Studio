<section class="ms-recording-studio-section">
    <style>
        .ms-recording-studio-section,
        .ms-recording-studio-section * {
            box-sizing: border-box;
        }

        .ms-recording-studio-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: var(--font-body);
            padding: 42px 20px 46px;
            background: #ffffff;
            overflow: hidden;
        }

        .ms-recording-wrap {
            max-width: 1120px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr .95fr;
            gap: 44px;
            align-items: center;
        }

        .ms-recording-badge {
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

        .ms-recording-badge::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msRecordBlink 1.5s ease-in-out infinite;
        }

        .ms-recording-title {
            margin: 0 0 16px;
            font-size: 42px;
            line-height: 1.14;
            letter-spacing: -1.2px;
            color: var(--dark);
            font-weight: 900;
        }

        .ms-recording-title span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-recording-text {
            margin: 0 0 10px;
            font-size: 15.5px;
            line-height: 1.75;
            color: var(--text);
            text-align: justify;
        }

        .ms-feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 24px;
        }

        .ms-feature-item {
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

        .ms-feature-item:hover {
            transform: translateY(-4px);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, .96), 0 16px 38px rgba(23, 20, 43, .08);
        }

        .ms-feature-item::before {
            content: "✓";
            color: var(--teal);
            font-size: 18px;
            font-weight: 900;
            flex: 0 0 auto;
        }

        .ms-recording-visual {
            position: relative;
            padding: 26px;
            border-radius: 34px;
            background: radial-gradient(circle at 85% 0%, rgba(90, 46, 166, .15), transparent 32%), rgba(255, 255, 255, .74);
            border: 1px solid rgba(255, 255, 255, .95);
            backdrop-filter: blur(24px) saturate(150%);
            -webkit-backdrop-filter: blur(24px) saturate(150%);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, .95), 0 28px 70px rgba(23, 20, 43, .10);
            overflow: hidden;
            animation: msRecordFloat 5s ease-in-out infinite;
        }

        .ms-recording-visual::before {
            content: "";
            position: absolute;
            right: -45px;
            top: -45px;
            width: 150px;
            height: 150px;
            border-radius: 35px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .22), rgba(47, 168, 161, .18));
            animation: msRecordBlob 6s ease-in-out infinite;
        }

        .ms-recording-image-box {
            position: relative;
            z-index: 2;
            width: 100%;
            aspect-ratio: 1536 / 1024;
            border-radius: 26px;
            overflow: hidden;
            box-shadow: 0 22px 50px rgba(23, 20, 43, .18);
        }

        .ms-recording-image-box img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center;
            border-radius: 26px;
            animation: msRecordZoom 8s ease-in-out infinite;
        }

        @keyframes msRecordBlink {

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

        @keyframes msRecordFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-9px);
            }
        }

        @keyframes msRecordZoom {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.03);
            }
        }

        @keyframes msRecordBlob {

            0%,
            100% {
                transform: translate(0, 0) rotate(0);
            }

            50% {
                transform: translate(-12px, 12px) rotate(8deg);
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .ms-recording-studio-section {
                padding: 34px 18px 38px;
            }

            .ms-recording-wrap {
                grid-template-columns: 1fr .95fr;
                gap: 26px;
            }

            .ms-recording-title {
                font-size: 32px;
            }

            .ms-recording-text {
                font-size: 14.5px;
                line-height: 1.62;
            }

            .ms-feature-grid {
                gap: 9px;
                margin-top: 18px;
            }

            .ms-feature-item {
                padding: 11px 12px;
                font-size: 12.5px;
                min-height: 44px;
            }

            .ms-recording-visual {
                padding: 18px;
                border-radius: 28px;
            }

            .ms-recording-image-box,
            .ms-recording-image-box img {
                border-radius: 22px;
            }
        }

        @media(max-width:767px) {
            .ms-recording-studio-section {
                padding: 30px 18px 34px;
            }

            .ms-recording-wrap {
                grid-template-columns: 1fr;
                gap: 28px;
                text-align: center;
            }

            .ms-recording-title {
                font-size: 30px;
                letter-spacing: -.7px;
            }

            .ms-recording-text {
                text-align: center;
                font-size: 15px;
                line-height: 1.65;
            }

            .ms-feature-grid {
                grid-template-columns: 1fr;
            }

            .ms-feature-item {
                justify-content: center;
            }

            .ms-recording-visual {
                padding: 18px;
                border-radius: 26px;
            }

            .ms-recording-image-box,
            .ms-recording-image-box img {
                border-radius: 22px;
            }
        }
    </style>

    <div class="ms-recording-wrap">
        <div class="ms-recording-content">
            <span class="ms-recording-badge">Recording Environment</span>

            <h2 class="ms-recording-title">
                Podcast Recording Studio in <span>Delhi</span>
            </h2>

            <p class="ms-recording-text">
                The starting point of a good podcast is a suitable recording environment.
            </p>

            <p class="ms-recording-text">
                Podcast Recording Studio in Delhi is meant to assist you with getting the right sound, professional visuals and a comfy environment.
            </p>

            <div class="ms-feature-grid">
                <div class="ms-feature-item">Professional recording setup</div>
                <div class="ms-feature-item">High-quality cameras</div>
                <div class="ms-feature-item">Studio-grade microphones</div>
                <div class="ms-feature-item">Acoustic treatment</div>
                <div class="ms-feature-item">Controlled lighting environment</div>
                <div class="ms-feature-item">Multiple seating arrangements</div>
                <div class="ms-feature-item">Professional visual backgrounds</div>
                <div class="ms-feature-item">Dedicated production support</div>
            </div>
        </div>

        <div class="ms-recording-visual">
            <div class="ms-recording-image-box">
                <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/podcast-recording-studio-in-Delhi.png" alt="Podcast Recording Studio in Delhi">
            </div>
        </div>
    </div>
</section>