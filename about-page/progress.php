    <style>

        .ms-process-section {
            --ms-purple: #5A2EA6;
            --ms-teal: #2FA8A1;
            --ms-dark: #17142b;
            --ms-text: #57576a;
            font-family: Arial, sans-serif;
            padding: 52px 20px 58px;
            background: #fff;
            overflow: hidden;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .ms-process-wrap {
            max-width: 1120px;
            margin: 0 auto;
            width: 100%;
        }

        .ms-process-head {
            text-align: center;
            max-width: 850px;
            margin: 0 auto 36px;
        }

        .ms-process-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(255, 255, 255, .82);
            color: var(--ms-purple);
            font-size: 13px;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
            margin-bottom: 16px;
            line-height: 1;
        }

        .ms-process-label:before {
            content: "";
            width: 8px;
            height: 8px;
            flex: 0 0 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
            animation: msProcessDot 1.5s ease-in-out infinite;
        }

        .ms-process-head h2 {
            margin: 0 0 16px;
            font-size: 42px;
            line-height: 1.15;
            font-weight: 900;
            letter-spacing: -1px;
            color: var(--ms-dark);
        }

        .ms-process-gradient-text {
            background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .ms-process-head p {
            margin: 0;
            font-size: 16px;
            line-height: 1.7;
            color: var(--ms-text);
        }

        .ms-process-timeline {
            position: relative;
            max-width: 980px;
            margin: 0 auto;
            padding: 0 0 4px;
            width: 100%;
        }

        .ms-process-timeline:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 3px;
            border-radius: 20px;
            background: linear-gradient(180deg, var(--ms-purple), var(--ms-teal));
            transform: translateX(-50%);
            z-index: 1;
        }

        .ms-process-item {
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 76px;
            align-items: center;
            margin-bottom: 32px;
        }

        .ms-process-item:last-child {
            margin-bottom: 0;
        }

        .ms-process-card {
            position: relative;
            overflow: hidden;
            padding: 26px 24px;
            border-radius: 26px;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .76), rgba(255, 255, 255, .42)),
                radial-gradient(circle at 12% 10%, rgba(90, 46, 166, .07), transparent 35%),
                radial-gradient(circle at 90% 90%, rgba(47, 168, 161, .09), transparent 36%);
            border: 1px solid rgba(255, 255, 255, .88);
            backdrop-filter: blur(22px) saturate(160%);
            -webkit-backdrop-filter: blur(22px) saturate(160%);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .98),
                0 24px 60px rgba(23, 20, 43, .08);
            transition: .35s ease;
            z-index: 2;
        }

        .ms-process-card:hover {
            transform: translateY(-6px);
            box-shadow:
                inset 0 1px 1px rgba(255, 255, 255, .98),
                0 30px 70px rgba(23, 20, 43, .12);
        }

        .ms-process-card:before {
            content: "";
            position: absolute;
            top: -90%;
            left: -75%;
            width: 45%;
            height: 250%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .90), rgba(255, 255, 255, .45), transparent);
            transform: rotate(25deg);
            animation: msProcessShine 5s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
        }

        .ms-process-card:after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 26px;
            padding: 1px;
            background: linear-gradient(120deg,
                    transparent,
                    rgba(90, 46, 166, .30),
                    var(--ms-purple),
                    var(--ms-teal),
                    rgba(47, 168, 161, .30),
                    transparent);
            background-size: 300% 300%;
            animation: msProcessBorderMove 4.5s linear infinite;
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            z-index: 2;
        }

        .ms-process-item:nth-child(even) .ms-process-card {
            grid-column: 2;
        }

        .ms-process-step {
            position: relative;
            z-index: 3;
            display: block;
            margin-bottom: 12px;
            font-size: 14px;
            font-weight: 900;
            color: var(--ms-purple);
        }

        .ms-process-card h3 {
            position: relative;
            z-index: 3;
            margin: 0 0 12px;
            font-size: 23px;
            line-height: 1.25;
            font-weight: 900;
            color: var(--ms-dark);
        }

        .ms-process-card p {
            position: relative;
            z-index: 3;
            margin: 0;
            font-size: 15px;
            line-height: 1.75;
            color: var(--ms-text);
        }

        .ms-process-radar-dot {
            position: absolute;
            left: 50%;
            top: 32px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
            transform: translateX(-50%);
            z-index: 5;
            box-shadow: 0 0 0 8px rgba(90, 46, 166, .12);
        }

        .ms-process-radar-dot:before,
        .ms-process-radar-dot:after {
            content: "";
            position: absolute;
            inset: -8px;
            border-radius: 50%;
            border: 2px solid rgba(90, 46, 166, .38);
            animation: msProcessRadar 2s ease-out infinite;
        }

        .ms-process-radar-dot:after {
            animation-delay: 1s;
            border-color: rgba(47, 168, 161, .38);
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

        @keyframes msProcessShine {
            0% {
                left: -75%;
                opacity: 0;
            }

            35% {
                opacity: .8;
            }

            65% {
                left: 130%;
                opacity: 0;
            }

            100% {
                left: 130%;
                opacity: 0;
            }
        }

        @keyframes msProcessBorderMove {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 300% 50%;
            }
        }

        @keyframes msProcessRadar {
            0% {
                transform: scale(.65);
                opacity: .75;
            }

            100% {
                transform: scale(2.25);
                opacity: 0;
            }
        }

        @media(max-width:991px) {
            .ms-process-head h2 {
                font-size: 34px;
            }

            .ms-process-item {
                gap: 54px;
            }

            .ms-process-card h3 {
                font-size: 21px;
            }
        }

        @media(max-width:767px) {
            .ms-process-section {
                padding: 38px 12px 42px;
            }

            .ms-process-head {
                margin-bottom: 28px;
            }

            .ms-process-head h2 {
                font-size: 29px;
            }

            .ms-process-head p {
                font-size: 15px;
            }

            .ms-process-timeline {
                max-width: 100%;
                padding: 0;
            }

            .ms-process-timeline:before {
                left: 50%;
                transform: translateX(-50%);
            }

            .ms-process-item {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 28px;
                margin-bottom: 32px;
                align-items: center;
            }

            .ms-process-item:nth-child(even) .ms-process-card {
                grid-column: 2;
            }

            .ms-process-radar-dot {
                left: 50%;
                top: 34px;
                transform: translateX(-50%);
            }

            .ms-process-card {
                padding: 22px 16px;
                border-radius: 24px;
            }

            .ms-process-card:after {
                border-radius: 24px;
            }

            .ms-process-step {
                font-size: 13px;
            }

            .ms-process-card h3 {
                font-size: 18px;
            }

            .ms-process-card p {
                font-size: 14px;
                line-height: 1.65;
            }
        }

        @media(max-width:420px) {
            .ms-process-item {
                gap: 22px;
            }

            .ms-process-card {
                padding: 20px 14px;
            }

            .ms-process-card h3 {
                font-size: 17px;
            }

            .ms-process-card p {
                font-size: 13.5px;
            }
        }
    </style>

    <section class="ms-process-section">
        <div class="ms-process-wrap">
            <div class="ms-process-head">
                <span class="ms-process-label">Our Process</span>
                <h2>How We Turn Ideas Into <span class="ms-process-gradient-text">Powerful Content</span></h2>
                <p>Every project follows a clear creative process so the final output looks professional and supports your business goals.</p>
            </div>

            <div class="ms-process-timeline">

                <div class="ms-process-item">
                    <span class="ms-process-radar-dot"></span>
                    <div class="ms-process-card">
                        <span class="ms-process-step">Step 01</span>
                        <h3>Understanding Your Brand</h3>
                        <p>We first understand your business, target audience, content goals and brand positioning.</p>
                    </div>
                </div>

                <div class="ms-process-item">
                    <span class="ms-process-radar-dot"></span>
                    <div class="ms-process-card">
                        <span class="ms-process-step">Step 02</span>
                        <h3>Strategy & Planning</h3>
                        <p>We create a clear plan for content, design direction, campaign structure and final delivery.</p>
                    </div>
                </div>

                <div class="ms-process-item">
                    <span class="ms-process-radar-dot"></span>
                    <div class="ms-process-card">
                        <span class="ms-process-step">Step 03</span>
                        <h3>Creative Production</h3>
                        <p>Our team works on recording, editing, designing, writing and developing the required assets.</p>
                    </div>
                </div>

                <div class="ms-process-item">
                    <span class="ms-process-radar-dot"></span>
                    <div class="ms-process-card">
                        <span class="ms-process-step">Step 04</span>
                        <h3>Review & Optimization</h3>
                        <p>We polish the work with better visuals, messaging, formatting and quality checks.</p>
                    </div>
                </div>

                <div class="ms-process-item">
                    <span class="ms-process-radar-dot"></span>
                    <div class="ms-process-card">
                        <span class="ms-process-step">Step 05</span>
                        <h3>Final Delivery</h3>
                        <p>You receive professional, ready-to-use content created for your brand and platform.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>