<section class="ms-audio-editing-section">
    <style>
        .ms-audio-editing-section,
        .ms-audio-editing-section * {
            box-sizing: border-box;
        }

        .ms-audio-editing-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: var(--font-body);
            padding: 38px 20px 42px;
            background:
                radial-gradient(circle at 10% 10%, rgba(90, 46, 166, .07), transparent 26%),
                radial-gradient(circle at 90% 20%, rgba(47, 168, 161, .10), transparent 28%),
                #ffffff;
            overflow: hidden;
        }

        .ms-audio-wrap {
            max-width: 1120px;
            margin: 0 auto;
        }

        .ms-audio-head {
            max-width: 950px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .ms-audio-badge {
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

        .ms-audio-badge:before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msAudioDot 1.5s infinite;
        }

        .ms-audio-title {
            margin: 0 0 14px;
            font-size: 42px;
            line-height: 1.14;
            letter-spacing: -1.2px;
            color: var(--dark);
            font-weight: 900;
            text-align: center;
        }

        .ms-audio-title span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-audio-text {
            max-width: 900px;
            margin: 0 auto;
            font-size: 16px;
            line-height: 1.75;
            color: var(--text);
            text-align: center;
        }

        .ms-audio-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .ms-audio-card {
            min-height: 245px;
            padding: 24px;
            border-radius: 28px;
            background: rgba(255, 255, 255, .78);
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

        .ms-audio-card:before {
            content: "";
            position: absolute;
            top: -90%;
            left: -85%;
            width: 55%;
            height: 260%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .65), transparent);
            transform: rotate(25deg);
            animation: msAudioShine 6s ease-in-out infinite;
            pointer-events: none;
        }

        .ms-audio-card:hover {
            transform: translateY(-7px);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 24px 58px rgba(23, 20, 43, .11);
        }

        .ms-illustration-box {
            height: 86px;
            border-radius: 22px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .09), rgba(47, 168, 161, .10));
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            overflow: hidden;
        }

        .ms-illustration-box:before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .55), transparent);
            transform: translateX(-120%);
            animation: msVisualShine 4.8s ease-in-out infinite;
        }

        .ms-illustration-box svg {
            width: 112px;
            height: 72px;
            position: relative;
            z-index: 2;
            overflow: visible;
        }

        .ms-shape-white {
            fill: #ffffff;
            filter: drop-shadow(0 8px 12px rgba(23, 20, 43, .10));
        }

        .ms-line-purple {
            stroke: var(--purple);
            stroke-width: 4.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }

        .ms-line-teal {
            stroke: var(--teal);
            stroke-width: 4.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }

        .ms-fill-purple {
            fill: var(--purple);
        }

        .ms-fill-teal {
            fill: var(--teal);
        }

        .ms-wave-bar {
            transform-origin: center bottom;
            animation: msWaveMove 1.35s ease-in-out infinite;
        }

        .ms-wave-bar:nth-child(1) {
            animation-delay: .1s;
        }

        .ms-wave-bar:nth-child(2) {
            animation-delay: .22s;
        }

        .ms-wave-bar:nth-child(3) {
            animation-delay: .34s;
        }

        .ms-wave-bar:nth-child(4) {
            animation-delay: .46s;
        }

        .ms-pencil {
            animation: msPencilMove 2.8s ease-in-out infinite;
            transform-origin: center;
        }

        .ms-spark {
            animation: msSparkMove 2.3s ease-in-out infinite;
            transform-origin: center;
        }

        .ms-audio-card h3 {
            margin: 0 0 10px;
            font-size: 21px;
            line-height: 1.3;
            color: #222033;
            font-weight: 900;
            position: relative;
            z-index: 2;
        }

        .ms-audio-card p {
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
            color: #575766;
            text-align: left;
            position: relative;
            z-index: 2;
        }

        @keyframes msAudioDot {

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

        @keyframes msAudioShine {
            0% {
                left: -85%;
                opacity: 0;
            }

            35% {
                opacity: .48;
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

        @keyframes msVisualShine {
            0% {
                transform: translateX(-120%);
            }

            55% {
                transform: translateX(120%);
            }

            100% {
                transform: translateX(120%);
            }
        }

        @keyframes msWaveMove {

            0%,
            100% {
                transform: scaleY(.55);
            }

            50% {
                transform: scaleY(1);
            }
        }

        @keyframes msPencilMove {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            50% {
                transform: translate(5px, -4px) rotate(-4deg);
            }
        }

        @keyframes msSparkMove {

            0%,
            100% {
                transform: scale(.9);
                opacity: .7;
            }

            50% {
                transform: scale(1.18);
                opacity: 1;
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .ms-audio-editing-section {
                padding: 30px 18px 34px;
            }

            .ms-audio-title {
                font-size: 34px;
            }

            .ms-audio-text {
                font-size: 15px;
            }

            .ms-audio-cards {
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }

            .ms-audio-card {
                min-height: 235px;
                padding: 18px 14px;
            }

            .ms-illustration-box {
                height: 70px;
                margin-bottom: 15px;
            }

            .ms-illustration-box svg {
                width: 92px;
                height: 58px;
            }

            .ms-audio-card h3 {
                font-size: 17px;
            }

            .ms-audio-card p {
                font-size: 13px;
                line-height: 1.58;
            }
        }

        @media(max-width:767px) {
            .ms-audio-editing-section {
                padding: 28px 18px 32px;
            }

            .ms-audio-title {
                font-size: 30px;
                letter-spacing: -.7px;
            }

            .ms-audio-text {
                font-size: 15px;
            }

            .ms-audio-cards {
                grid-template-columns: 1fr;
            }

            .ms-audio-card {
                min-height: auto;
                padding: 22px 20px;
                text-align: center;
            }

            .ms-audio-card p {
                text-align: center;
            }
        }
    </style>

    <div class="ms-audio-wrap">
        <div class="ms-audio-head">
            <span class="ms-audio-badge">Audio + Editing</span>

            <h2 class="ms-audio-title">
                Professional Audio Recording & <span>Podcast Editing</span>
            </h2>

            <p class="ms-audio-text">
                The quality of the audio is a critical element to the success of a podcast. We have state-of-the-art recording equipment at Minerdia Studio to accurately record each word and polish the raw footage into published content.
            </p>
        </div>

        <div class="ms-audio-cards">

            <div class="ms-audio-card">
                <div class="ms-illustration-box">
                    <svg viewBox="0 0 120 80">
                        <rect class="ms-shape-white" x="21" y="20" width="30" height="42" rx="15" />
                        <path class="ms-line-purple" d="M36 31v14" />
                        <path class="ms-line-purple" d="M30 45h12" />
                        <path class="ms-line-teal" d="M36 62v7" />
                        <rect class="ms-wave-bar ms-fill-teal" x="68" y="42" width="7" height="18" rx="4" />
                        <rect class="ms-wave-bar ms-fill-purple" x="81" y="33" width="7" height="27" rx="4" />
                        <rect class="ms-wave-bar ms-fill-teal" x="94" y="25" width="7" height="35" rx="4" />
                        <circle class="ms-fill-purple" cx="58" cy="50" r="4" opacity=".28" />
                    </svg>
                </div>
                <h3>Crystal Clear Audio</h3>
                <p>
                    Professional microphones, lapel options, audio mixers, noise management and sound balancing.
                </p>
            </div>

            <div class="ms-audio-card">
                <div class="ms-illustration-box">
                    <svg viewBox="0 0 120 80">
                        <rect class="ms-shape-white" x="25" y="20" width="54" height="38" rx="12" />
                        <path class="ms-line-purple" d="M38 32h25" />
                        <path class="ms-line-purple" d="M38 43h17" />
                        <g class="ms-pencil">
                            <path class="ms-line-teal" d="M75 56l19-19" />
                            <path class="ms-line-teal" d="M90 33l8 8" />
                        </g>
                        <circle class="ms-fill-purple" cx="82" cy="22" r="5" opacity=".75" />
                        <rect class="ms-fill-teal" x="31" y="27" width="5" height="5" rx="2" />
                    </svg>
                </div>
                <h3>Professional Editing</h3>
                <p>
                    Audio cleanup, background noise reduction, video trimming, synchronization and enhancement.
                </p>
            </div>

            <div class="ms-audio-card">
                <div class="ms-illustration-box">
                    <svg viewBox="0 0 120 80">
                        <rect class="ms-shape-white" x="32" y="23" width="38" height="34" rx="11" />
                        <circle class="ms-fill-teal" cx="46" cy="37" r="5" />
                        <circle class="ms-fill-purple" cx="58" cy="37" r="5" opacity=".82" />
                        <circle class="ms-fill-teal" cx="52" cy="49" r="5" opacity=".9" />
                        <g class="ms-spark">
                            <path class="ms-line-purple" d="M85 19l3 7 7 3-7 3-3 7-3-7-7-3 7-3z" />
                        </g>
                        <path class="ms-line-teal" d="M77 54h22" />
                        <path class="ms-line-purple" d="M82 46h14" />
                    </svg>
                </div>
                <h3>Visual Polish</h3>
                <p>
                    Color correction, color grading, intros, outros and subtitle addition for better content quality.
                </p>
            </div>

        </div>
    </div>
</section>