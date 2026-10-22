<section class="ms-process-timeline-section">
    <style>
        .ms-process-timeline-section,
        .ms-process-timeline-section * {
            box-sizing: border-box;
        }

        .ms-process-timeline-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: Arial, sans-serif;
            padding: 38px 20px 42px;
            background: #ffffff;
            overflow: hidden;
        }

        .ms-process-wrap {
            max-width: 1120px;
            margin: 0 auto;
        }

        .ms-process-head {
            text-align: center;
            max-width: 900px;
            margin: 0 auto 35px;
        }

        .ms-process-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 50px;
            background: #fff;
            color: var(--purple);
            font-size: 13px;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
            margin-bottom: 16px;
        }

        .ms-process-badge:before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msProcessDot 1.5s infinite;
        }

        .ms-process-title {
            margin: 0;
            font-size: 42px;
            line-height: 1.14;
            letter-spacing: -1.2px;
            color: var(--dark);
            font-weight: 900;
        }

        .ms-process-title span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-timeline {
            position: relative;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 18px;
            align-items: start;
        }

        .ms-timeline:before {
            content: "";
            position: absolute;
            top: 43px;
            left: 7%;
            right: 7%;
            height: 3px;
            border-radius: 50px;
            background: linear-gradient(90deg, var(--purple), var(--teal), var(--purple));
            background-size: 220% 100%;
            animation: msLineMove 4s linear infinite;
            z-index: 1;
        }

        .ms-proc-card {
            position: relative;
            z-index: 2;
            padding-top: 0;
        }

        .ms-proc-circle {
            width: 72px;
            height: 72px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .78);
            border: 1px solid rgba(255, 255, 255, .95);
            backdrop-filter: blur(18px) saturate(150%);
            -webkit-backdrop-filter: blur(18px) saturate(150%);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 16px 36px rgba(23, 20, 43, .10);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .ms-proc-circle span {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            color: #fff;
            font-size: 18px;
            font-weight: 900;
            animation: msNumberFloat 3s ease-in-out infinite;
        }

        .ms-proc-content {
            min-height: 185px;
            padding: 24px 20px;
            border-radius: 26px;
            background: rgba(255, 255, 255, .76);
            border: 1px solid rgba(255, 255, 255, .95);
            backdrop-filter: blur(22px) saturate(150%);
            -webkit-backdrop-filter: blur(22px) saturate(150%);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 18px 45px rgba(23, 20, 43, .07);
            position: relative;
            overflow: hidden;
            transition: .35s ease;
        }

        .ms-proc-content:before {
            content: "";
            position: absolute;
            top: -90%;
            left: -85%;
            width: 55%;
            height: 260%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .65), transparent);
            transform: rotate(25deg);
            animation: msStepShine 6s ease-in-out infinite;
            pointer-events: none;
        }

        .ms-proc-content:hover {
            transform: translateY(-7px);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 24px 58px rgba(23, 20, 43, .11);
        }

        .ms-proc-content h3 {
            margin: 0 0 10px;
            font-size: 18px;
            line-height: 1.3;
            color: #222033;
            font-weight: 900;
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .ms-proc-content p {
            margin: 0;
            font-size: 14px;
            line-height: 1.65;
            color: var(--text);
            position: relative;
            z-index: 2;
            text-align: center;
        }

        @keyframes msProcessDot {

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

        @keyframes msLineMove {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 220% 50%;
            }
        }

        @keyframes msNumberFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        @keyframes msStepShine {
            0% {
                left: -85%;
                opacity: 0;
            }

            35% {
                opacity: .45;
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

        @media(min-width:768px) and (max-width:991px) {
            .ms-process-timeline-section {
                padding: 30px 18px 34px;
            }

            .ms-process-title {
                font-size: 34px;
            }

            .ms-timeline {
                grid-template-columns: repeat(3, 1fr);
                row-gap: 28px;
            }

            .ms-timeline:before {
                display: none;
            }

            .ms-proc-content {
                min-height: 165px;
                padding: 20px 16px;
            }
        }

        @media(max-width:767px) {
            .ms-process-timeline-section {
                padding: 28px 18px 32px;
            }

            .ms-process-title {
                font-size: 30px;
                letter-spacing: -.7px;
            }

            .ms-process-head {
                margin-bottom: 25px;
            }

            .ms-timeline {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .ms-timeline:before {
                display: none;
            }

            .ms-proc-card {
                display: grid;
                grid-template-columns: 72px 1fr;
                gap: 14px;
                align-items: center;
            }

            .ms-proc-circle {
                margin: 0;
            }

            .ms-proc-content {
                min-height: auto;
                padding: 20px 18px;
            }

            .ms-proc-content h3,
            .ms-proc-content p {
                text-align: left;
            }
        }
    </style>

    <div class="ms-process-wrap">
        <div class="ms-process-head">
            <span class="ms-process-badge">Process</span>

            <h2 class="ms-process-title">
                Our Podcast Production <span>Process</span>
            </h2>
        </div>

        <div class="ms-timeline">

            <div class="ms-proc-card">
                <div class="ms-proc-circle"><span>1</span></div>
                <div class="ms-proc-content">
                    <h3>Consultation</h3>
                    <p>Knowing what you want, who you are working for and what type of content you are looking for.</p>
                </div>
            </div>

            <div class="ms-proc-card">
                <div class="ms-proc-circle"><span>2</span></div>
                <div class="ms-proc-content">
                    <h3>Planning</h3>
                    <p>Setting up the recordings and production process.</p>
                </div>
            </div>

            <div class="ms-proc-card">
                <div class="ms-proc-circle"><span>3</span></div>
                <div class="ms-proc-content">
                    <h3>Studio Recording</h3>
                    <p>Professional recording session with technical assistance.</p>
                </div>
            </div>

            <div class="ms-proc-card">
                <div class="ms-proc-circle"><span>4</span></div>
                <div class="ms-proc-content">
                    <h3>Editing</h3>
                    <p>Post production of Audio and Video.</p>
                </div>
            </div>

            <div class="ms-proc-card">
                <div class="ms-proc-circle"><span>5</span></div>
                <div class="ms-proc-content">
                    <h3>Content Creation</h3>
                    <p>Reels, highlights, thumbnails and more.</p>
                </div>
            </div>

            <div class="ms-proc-card">
                <div class="ms-proc-circle"><span>6</span></div>
                <div class="ms-proc-content">
                    <h3>Final Delivery</h3>
                    <p>Ready-to-publish podcast content.</p>
                </div>
            </div>

        </div>
    </div>
</section>