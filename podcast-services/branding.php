<section class="ms-branding-section">
    <style>
        .ms-branding-section,
        .ms-branding-section * {
            box-sizing: border-box;
        }

        .ms-branding-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: var(--font-body);
            padding: 32px 20px 35px;
            background:
                radial-gradient(circle at 8% 10%, rgba(90, 46, 166, .08), transparent 28%),
                radial-gradient(circle at 92% 18%, rgba(47, 168, 161, .12), transparent 30%),
                linear-gradient(135deg, #ffffff 0%, #fbf8ff 48%, #effafa 100%);
            overflow: hidden;
        }

        .ms-branding-wrap {
            max-width: 1180px;
            margin: 0 auto;
        }

        .ms-branding-head {
            max-width: 980px;
            margin: 0 auto 24px;
            text-align: center;
        }

        .ms-branding-badge {
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
            margin-bottom: 16px;
        }

        .ms-branding-badge::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msBrandBlink 1.5s ease-in-out infinite;
        }

        .ms-branding-title {
            margin: 0 0 14px;
            font-size: 42px;
            line-height: 1.14;
            letter-spacing: -1.2px;
            color: var(--dark);
            font-weight: 900;
            text-align: center;
        }

        .ms-branding-title span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-branding-text {
            margin: 0 auto;
            max-width: 940px;
            font-size: 16px;
            line-height: 1.7;
            color: var(--text);
            text-align: center;
        }

        .ms-branding-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .ms-branding-card {
            min-height: 195px;
            padding: 22px 20px;
            border-radius: 24px;
            background: rgba(255, 255, 255, .70);
            border: 1px solid rgba(255, 255, 255, .94);
            backdrop-filter: blur(24px) saturate(150%);
            -webkit-backdrop-filter: blur(24px) saturate(150%);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 16px 40px rgba(23, 20, 43, .07);
            position: relative;
            overflow: hidden;
            transition: .35s ease;
        }

        .ms-branding-card::before {
            content: "";
            position: absolute;
            top: -90%;
            left: -85%;
            width: 55%;
            height: 260%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .60), transparent);
            transform: rotate(25deg);
            animation: msBrandShine 6s ease-in-out infinite;
            pointer-events: none;
        }

        .ms-branding-card:hover {
            transform: translateY(-6px);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .95),
                0 22px 52px rgba(23, 20, 43, .11);
        }

        .ms-illustration {
            width: 52px;
            height: 52px;
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .68), rgba(47, 168, 161, .68));
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 14px;
            position: relative;
            z-index: 2;
            box-shadow: 0 12px 26px rgba(90, 46, 166, .14);
            animation: msIconFloat 3.8s ease-in-out infinite;
        }

        .ms-illustration svg {
            width: 33px;
            height: 33px;
            overflow: visible;
        }

        .ms-illustration .line {
            stroke: #fff;
            stroke-width: 4;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }

        .ms-illustration .fill {
            fill: #fff;
            opacity: .96;
        }

        .ms-illustration .accent {
            fill: #d9fff9;
            opacity: .95;
            animation: msSmallMove 2.8s ease-in-out infinite;
        }

        .ms-branding-card h3 {
            margin: 0 0 8px;
            font-size: 19px;
            line-height: 1.3;
            color: #222033;
            font-weight: 900;
            position: relative;
            z-index: 2;
        }

        .ms-branding-card p {
            margin: 0;
            font-size: 14px;
            line-height: 1.65;
            color: #575766;
            text-align: justify;
            position: relative;
            z-index: 2;
        }

        @keyframes msBrandBlink {

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

        @keyframes msBrandShine {
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

        @keyframes msIconFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes msSmallMove {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .ms-branding-section {
                padding: 26px 18px 30px;
            }

            .ms-branding-title {
                font-size: 34px;
            }

            .ms-branding-text {
                font-size: 15px;
            }

            .ms-branding-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }

            .ms-branding-card {
                min-height: 190px;
                padding: 18px 14px;
            }

            .ms-branding-card h3 {
                font-size: 16px;
            }

            .ms-branding-card p {
                font-size: 13px;
                line-height: 1.55;
            }

            .ms-illustration {
                width: 44px;
                height: 44px;
                border-radius: 14px;
                margin-bottom: 12px;
            }

            .ms-illustration svg {
                width: 28px;
                height: 28px;
            }
        }

        @media(max-width:767px) {
            .ms-branding-section {
                padding: 22px 15px 25px;
            }

            .ms-branding-title {
                font-size: 30px;
                letter-spacing: -.7px;
            }

            .ms-branding-grid {
                grid-template-columns: 1fr;
            }

            .ms-branding-text,
            .ms-branding-card p {
                text-align: center;
            }

            .ms-branding-card {
                padding: 20px 18px;
                text-align: center;
                min-height: auto;
            }

            .ms-illustration {
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>

    <div class="ms-branding-wrap">
        <div class="ms-branding-head">
            <span class="ms-branding-badge">Brand Building</span>

            <h2 class="ms-branding-title">
                Podcasts for <span>Personal & Business Branding</span>
            </h2>

            <p class="ms-branding-text">
                Podcasts can be more than a form of entertainment. These are now good branding and marketing tools. A professionally created podcast will assist you to establish trust, pass on useful information and increase audience engagement.
            </p>
        </div>

        <div class="ms-branding-grid">

            <div class="ms-branding-card">
                <div class="ms-illustration">
                    <svg viewBox="0 0 64 64">
                        <circle class="fill" cx="32" cy="30" r="12" />
                        <path class="line" d="M18 48c4-9 24-9 28 0" />
                        <path class="line" d="M45 16l5 5 8-10" />
                        <circle class="accent" cx="16" cy="18" r="4" />
                    </svg>
                </div>
                <h3>Establish Trust</h3>
                <p>
                    Establish trust in your field of work and build credibility in the practice.
                </p>
            </div>

            <div class="ms-branding-card">
                <div class="ms-illustration">
                    <svg viewBox="0 0 64 64">
                        <rect class="fill" x="12" y="34" width="8" height="16" rx="3" />
                        <rect class="fill" x="28" y="24" width="8" height="26" rx="3" />
                        <rect class="fill" x="44" y="14" width="8" height="36" rx="3" />
                        <path class="line" d="M12 18c10 2 18-2 28-10" />
                        <circle class="accent" cx="48" cy="10" r="5" />
                    </svg>
                </div>
                <h3>Improve Visibility</h3>
                <p>
                    Improve brand visibility, create longer video content for YouTube and build audience connection.
                </p>
            </div>

            <div class="ms-branding-card">
                <div class="ms-illustration">
                    <svg viewBox="0 0 64 64">
                        <path class="line" d="M18 18l28 28" />
                        <path class="line" d="M46 18L18 46" />
                        <circle class="fill" cx="18" cy="18" r="7" />
                        <circle class="fill" cx="18" cy="46" r="7" />
                        <rect class="accent" x="36" y="27" width="16" height="10" rx="5" />
                    </svg>
                </div>
                <h3>Create Micro Content</h3>
                <p>
                    Create several micro-content ideas from one podcast episode for social media platforms.
                </p>
            </div>

        </div>
    </div>
</section>