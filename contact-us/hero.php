    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            overflow-x: hidden;
        }

        .podcast-banner-root {
            font-family: var(--font-body);
            position: relative;
            width: 100%;
            min-height: 520px;
            overflow: hidden;
            background: linear-gradient(135deg, #a78bfa 0%, #c4b5fd 25%, #e0d7ff 45%, #d4b8f0 65%, #b794e8 85%, #8b5cf6 100%);
        }

        .podcast-grid-overlay {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 64px 64px;
            pointer-events: none;
        }

        .podcast-noise-overlay {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 18% 30%, rgba(255, 255, 255, 0.14) 0%, transparent 34%),
                radial-gradient(circle at 70% 42%, rgba(255, 255, 255, 0.08) 0%, transparent 30%);
            pointer-events: none;
        }

        .podcast-hero {
            position: relative;
            z-index: 2;
            min-height: 520px;
            padding: 210px 42px 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .podcast-glass-card {
            width: 100%;
            max-width: 1140px;
            min-height: 290px;
            border-radius: 30px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            padding: 26px 28px;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0.07)),
                rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(18px) saturate(170%);
            -webkit-backdrop-filter: blur(18px) saturate(170%);
            border: 1px solid rgba(255, 255, 255, 0.24);
            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.22),
                inset 0 -1px 0 rgba(255, 255, 255, 0.05),
                0 20px 55px rgba(45, 16, 100, 0.16);
            overflow: hidden;
        }

        .podcast-glass-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(120deg, rgba(255, 255, 255, 0.14), transparent 32%),
                radial-gradient(circle at 15% 18%, rgba(255, 255, 255, 0.08), transparent 22%);
            pointer-events: none;
        }

        .podcast-left {
            flex: 1 1 56%;
            max-width: 560px;
            position: relative;
            z-index: 2;
        }

        .podcast-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 20px;
            margin-bottom: 16px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.10);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.22);
            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.24),
                0 8px 30px rgba(35, 12, 88, 0.10);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .03em;
            text-transform: uppercase;
        }

        .podcast-badge-text {
            display: inline-block;
            background: linear-gradient(90deg,
                    #2FA8A1 0%,
                    #5A2EA6 25%,
                    #2FA8A1 50%,
                    #5A2EA6 75%,
                    #2FA8A1 100%);
            background-size: 200% 100%;
            background-position: 0% 50%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            animation: liquidGradientFlow 4.5s linear infinite;
        }

        @keyframes liquidGradientFlow {
            from {
                background-position: 0% 50%;
            }

            to {
                background-position: 200% 50%;
            }
        }

        .podcast-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #2FA8A1;
            flex-shrink: 0;
            animation: podcastPulse 1.8s infinite;
            box-shadow: 0 0 10px rgba(47, 168, 161, .60);
        }

        @keyframes podcastPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .45;
                transform: scale(.85);
            }
        }

        .podcast-title {
            margin: 0 0 12px;
            color: #17032f;
            font-size: clamp(34px, 5vw, 64px);
            font-weight: 700;
            line-height: .96;
            letter-spacing: -.05em;
        }

        .podcast-sub {
            margin: 0;
            max-width: 430px;
            color: rgba(53, 24, 98, .72);
            font-size: 16px;
            line-height: 1.55;
            font-weight: 500;
        }

        .podcast-right {
            flex: 1 1 44%;
            min-width: 280px;
            max-width: 430px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        /* CONTACT VISUAL */
        .contact-visual {
            position: relative;
            width: 340px;
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-scene-glow {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.14) 0%, transparent 72%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            filter: blur(4px);
            pointer-events: none;
            animation: glowBreath 5.5s ease-in-out infinite;
        }

        @keyframes glowBreath {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: .85;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.05);
                opacity: 1;
            }
        }

        .contact-track {
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 50%;
            border: 1px dashed rgba(196, 181, 253, .20);
            transform: translate(-50%, -50%);
            animation: trackFloat 7s ease-in-out infinite;
        }

        .contact-t1 {
            width: 104px;
            height: 104px;
            animation-delay: 0s;
        }

        .contact-t2 {
            width: 156px;
            height: 156px;
            animation-delay: 1s;
        }

        .contact-t3 {
            width: 208px;
            height: 208px;
            animation-delay: 2s;
        }

        @keyframes trackFloat {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: .55;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.02);
                opacity: .9;
            }
        }

        .contact-orbit {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            animation-name: orbitCW;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @keyframes orbitCW {
            from {
                transform: rotate(var(--start-angle));
            }

            to {
                transform: rotate(calc(var(--start-angle) + 360deg));
            }
        }

        .contact-node {
            position: absolute;
            top: 0;
            left: 0;
            transform: translate(var(--radius)) translate(-50%, -50%);
        }

        .contact-node-inner {
            display: flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(196, 181, 253, 0.55);
            border-radius: 999px;
            padding: 6px 10px;
            white-space: nowrap;
            box-shadow: 0 8px 18px rgba(76, 29, 149, 0.12);
            animation-name: keepStraight;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @keyframes keepStraight {
            from {
                transform: rotate(calc(-1 * var(--start-angle)));
            }

            to {
                transform: rotate(calc(-1 * var(--start-angle) - 360deg));
            }
        }

        .contact-node-dark .contact-node-inner {
            background: linear-gradient(135deg, rgba(82, 32, 156, 0.96), rgba(74, 23, 145, 0.96));
            border-color: rgba(167, 139, 250, 0.32);
        }

        .contact-node-icon {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-node-inner span {
            font-size: 9px;
            font-weight: 700;
            color: #4c1d95;
            letter-spacing: .01em;
        }

        .contact-node-dark .contact-node-inner span {
            color: #ede9fe;
        }

        .contact-phone {
            position: relative;
            z-index: 5;
            width: 74px;
            height: 128px;
            background: linear-gradient(160deg, #7a3ae6, #4c1d95);
            border-radius: 18px;
            border: 2px solid rgba(196, 181, 253, 0.55);
            box-shadow:
                0 18px 36px rgba(76, 29, 149, 0.28),
                0 8px 14px rgba(124, 58, 237, 0.18);
            overflow: hidden;
        }

        .contact-phone-screen {
            margin: 7px 6px 5px;
            background: linear-gradient(160deg, #efe9ff, #ddd6fe);
            border-radius: 10px;
            height: 98px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            gap: 4px;
            padding: 7px 6px;
        }

        .contact-phone-home {
            width: 24px;
            height: 3px;
            background: rgba(255, 255, 255, 0.42);
            border-radius: 2px;
            margin: 0 auto;
        }

        .contact-shine {
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.14), transparent);
            border-radius: 20px 0 0 20px;
        }

        .contact-live-dot {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 10px;
            height: 10px;
            z-index: 7;
        }

        .contact-live-dot-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #22c55e;
            transform: translate(-50%, -50%);
        }

        .contact-live-dot-ping {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(34, 197, 94, 0.35);
            transform: translate(-50%, -50%);
            animation: contactPing 1.6s ease-out infinite;
        }

        @keyframes contactPing {
            0% {
                transform: translate(-50%, -50%) scale(.8);
                opacity: .7;
            }

            100% {
                transform: translate(-50%, -50%) scale(2);
                opacity: 0;
            }
        }

        @media (max-width:1200px) {
            .podcast-banner-root {
                min-height: 500px;
            }

            .podcast-hero {
                min-height: 500px;
                padding: 78px 28px 18px;
            }

            .podcast-glass-card {
                min-height: 255px;
                padding: 24px 24px;
            }

            .contact-visual {
                transform: scale(.9);
            }
        }

        @media (max-width:1024px) {
            .podcast-banner-root {
                min-height: 390px;
            }

            .podcast-hero {
                min-height: 390px;
                padding: 200px 20px 12px;
            }

            .podcast-glass-card {
                margin-top: 30px;
                margin-bottom: 20px;
                min-height: 220px;
                border-radius: 24px;
                gap: 28px;
                padding: 22px 20px;
            }

            .podcast-left {
                flex: 0 0 56%;
                max-width: 56%;
            }

            .podcast-badge {
                padding: 8px 14px;
                font-size: 8px;
                margin-bottom: 0;
            }

            .podcast-badge-dot {
                width: 6px;
                height: 6px;
            }

            .podcast-title {
                font-size: 27px;
                margin-bottom: 10px;
                margin-top: 12px;
                line-height: .95;
                letter-spacing: -.04em;
            }

            .podcast-sub {
                font-size: 11px;
                line-height: 1.42;
                max-width: 100%;
            }

            .podcast-right {
                flex: 0 0 44%;
                max-width: 44%;
                min-width: 0;
                justify-content: center;
            }

            .contact-visual {
                width: 260px;
                height: 205px;
                transform: scale(.76);
            }
        }

        @media (max-width:767px) {
            .podcast-banner-root {
                min-height: auto !important;
                padding-top: 18px !important;
            }

            .podcast-hero {
                min-height: auto !important;
                padding: 150px 16px 35px !important;
            }

            .podcast-glass-card {
                margin-top: 50px !important;
                margin-bottom: 20px !important;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                gap: 14px;
                min-height: auto !important;
                padding: 28px 18px 30px !important;
                text-align: center;
                border-radius: 22px;
            }

            .podcast-left,
            .podcast-right {
                width: 100%;
                max-width: 100%;
                min-width: 100%;
            }

            .podcast-left {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .podcast-badge {
                padding: 8px 14px;
                font-size: 9px;
                margin-bottom: 10px;
                justify-content: center;
            }

            .podcast-title {
                font-size: 32px;
                line-height: .98;
                margin-bottom: 10px;
                letter-spacing: -.04em;
                text-align: center;
            }

            .podcast-sub {
                font-size: 13px;
                line-height: 1.45;
                max-width: 100%;
                text-align: center;
            }

            .podcast-right {
                display: none;
            }
        }

        @media (max-width:480px) {
            .podcast-banner-root {
                padding-top: 24px !important;
            }

            .podcast-hero {
                padding: 150px 14px 20px !important;
                min-height: auto !important;
            }

            .podcast-glass-card {
                margin-top: 50px !important;
                margin-bottom: 20px !important;
                padding: 22px 16px 24px !important;
                gap: 12px;
            }

            .podcast-badge {
                font-size: 8px;
                padding: 7px 12px;
                margin-bottom: 8px;
            }

            .podcast-title {
                font-size: 28px;
                margin-bottom: 8px;
            }

            .podcast-sub {
                font-size: 11px;
                line-height: 1.4;
            }
        }
    </style>

    <div class="podcast-banner-root">
        <div class="podcast-grid-overlay"></div>
        <div class="podcast-noise-overlay"></div>

        <div class="podcast-hero">
            <div class="podcast-glass-card">
                <div class="podcast-left">
                    <div class="podcast-badge">
                        <span class="podcast-badge-dot"></span>
                        <span class="podcast-badge-text">MINERDIA STUDIO</span>
                    </div>

                    <h1 class="podcast-title">Contact Us</h1>

                    <p class="podcast-sub">
                        Got a project in mind? Let’s connect and create high-converting digital experiences that help your brand grow faster.
                    </p>
                </div>

                <div class="podcast-right">
                    <div class="contact-visual">
                        <div class="contact-scene-glow"></div>

                        <div class="contact-track contact-t1"></div>
                        <div class="contact-track contact-t2"></div>
                        <div class="contact-track contact-t3"></div>

                        <div class="contact-orbit" style="--start-angle: 308deg; animation-duration: 18s;">
                            <div class="contact-node" style="--radius: 104px, 0px;">
                                <div class="contact-node-inner" style="animation-duration: 18s; --start-angle: 308deg;">
                                    <div class="contact-node-icon" style="background:linear-gradient(135deg,#f59e0b,#ef4444);">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <rect x="1" y="1.5" width="8" height="5.5" rx="1.5" stroke="white" stroke-width=".85" fill="none" />
                                            <path d="M3 9l1.5-2h2" stroke="white" stroke-width=".85" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <span>Live Chat</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-orbit" style="--start-angle: 228deg; animation-duration: 22s;">
                            <div class="contact-node" style="--radius: 82px, 0px;">
                                <div class="contact-node-inner" style="animation-duration: 22s; --start-angle: 228deg;">
                                    <div class="contact-node-icon" style="background:linear-gradient(135deg,#25d366,#128c7e);">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <path d="M5 1C2.8 1 1 2.8 1 5c0 .8.2 1.5.6 2.1L1 9l1.9-.6C3.5 8.8 4.2 9 5 9c2.2 0 4-1.8 4-4S7.2 1 5 1z" stroke="white" stroke-width=".85" fill="none" />
                                            <path d="M3.5 4.5s.4 1 1 1.5 1.5.8 1.5.8" stroke="white" stroke-width=".85" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <span>WhatsApp</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-orbit" style="--start-angle: 28deg; animation-duration: 26s;">
                            <div class="contact-node contact-node-dark" style="--radius: 92px, 0px;">
                                <div class="contact-node-inner" style="animation-duration: 26s; --start-angle: 28deg;">
                                    <div class="contact-node-icon" style="background:rgba(255,255,255,0.15);">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <circle cx="5" cy="5" r="3.5" stroke="white" stroke-width=".85" fill="none" />
                                            <path d="M5 3v2.2l1.5 1" stroke="white" stroke-width=".85" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <span>24h Reply</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-orbit" style="--start-angle: 356deg; animation-duration: 20s;">
                            <div class="contact-node" style="--radius: 72px, 0px;">
                                <div class="contact-node-inner" style="animation-duration: 20s; --start-angle: 356deg;">
                                    <div class="contact-node-icon" style="background:linear-gradient(135deg,#3b82f6,#06b6d4);">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <rect x="1" y="2.5" width="8" height="5" rx="1" stroke="white" stroke-width=".85" />
                                            <path d="M1 3.5l4 2.5 4-2.5" stroke="white" stroke-width=".85" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <span>Email Us</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-orbit" style="--start-angle: 58deg; animation-duration: 24s;">
                            <div class="contact-node" style="--radius: 112px, 0px;">
                                <div class="contact-node-inner" style="animation-duration: 24s; --start-angle: 58deg;">
                                    <div class="contact-node-icon" style="background:linear-gradient(135deg,#06b6d4,#7c3aed);">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <path d="M5 1l1.2 2.5L9 4 7 6l.4 2.8L5 7.5 2.6 8.8 3 6 1 4l2.8-.5z" stroke="white" stroke-width=".75" fill="none" />
                                        </svg>
                                    </div>
                                    <span>Free Audit</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-orbit" style="--start-angle: 98deg; animation-duration: 28s;">
                            <div class="contact-node" style="--radius: 100px, 0px;">
                                <div class="contact-node-inner" style="animation-duration: 28s; --start-angle: 98deg;">
                                    <div class="contact-node-icon" style="background:linear-gradient(135deg,#8b5cf6,#a78bfa);">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <path d="M1.5 2.5h7v5h-7z" stroke="white" stroke-width=".85" fill="none" rx="1" />
                                            <path d="M2 3l3 2.5L8 3" stroke="white" stroke-width=".85" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <span>Schedule</span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-phone">
                            <div class="contact-live-dot">
                                <div class="contact-live-dot-ping"></div>
                                <div class="contact-live-dot-inner"></div>
                            </div>

                            <div class="contact-phone-screen">
                                <div style="background:white;border-radius:5px;padding:4px 5px;">
                                    <div style="display:flex;align-items:center;gap:3px;margin-bottom:2px;">
                                        <div style="width:7px;height:7px;border-radius:50%;background:#7c3aed;flex-shrink:0;"></div>
                                        <div style="height:2px;width:30px;background:#e9d5ff;border-radius:1px;"></div>
                                    </div>
                                    <div style="height:2px;background:#f3f4f6;border-radius:1px;width:90%;"></div>
                                </div>

                                <div style="background:linear-gradient(90deg,#4c1d95,#7c3aed);border-radius:5px;padding:4px 5px;">
                                    <div style="height:2px;background:rgba(255,255,255,0.4);border-radius:1px;width:70%;margin-bottom:2px;"></div>
                                    <div style="height:2px;background:rgba(255,255,255,0.25);border-radius:1px;width:50%;"></div>
                                </div>

                                <div style="background:white;border-radius:5px;padding:4px 5px;">
                                    <div style="display:flex;align-items:center;gap:3px;margin-bottom:2px;">
                                        <div style="width:7px;height:7px;border-radius:50%;background:#06b6d4;flex-shrink:0;"></div>
                                        <div style="height:2px;width:24px;background:#cffafe;border-radius:1px;"></div>
                                    </div>
                                    <div style="height:2px;background:#f3f4f6;border-radius:1px;width:80%;"></div>
                                </div>

                                <div style="background:rgba(76,29,149,0.08);border-radius:5px;padding:4px 5px;">
                                    <div style="height:2px;background:#ddd6fe;border-radius:1px;width:90%;margin-bottom:2px;"></div>
                                    <div style="height:2px;background:#ede9fe;border-radius:1px;width:60%;"></div>
                                </div>
                            </div>

                            <div class="contact-phone-home"></div>
                            <div class="contact-shine"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>