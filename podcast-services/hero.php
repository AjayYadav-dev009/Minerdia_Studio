<style>

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
            linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
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
        padding: 150px 42px 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .podcast-glass-card {
        width: 100%;
        max-width: 1140px;
        min-height: 280px;
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
        will-change: background-position;
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
        font-size: 15px;
        line-height: 1.7;
        font-weight: 500;
        text-align: justify;
        text-justify: inter-word;
        hyphens: auto;
        word-spacing: 0.01em;
        text-wrap: pretty;
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

    .mic-wrap {
        position: relative;
        width: 270px;
        height: 270px;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(0.88);
    }

    .mic-ring {
        position: absolute;
        border-radius: 50%;
        border: 1.8px solid rgba(255, 255, 255, 0.25);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: micRingPulse 2.8s ease-out infinite;
    }

    .mic-ring:nth-child(1) {
        width: 120px;
        height: 120px;
        animation-delay: 0s;
    }

    .mic-ring:nth-child(2) {
        width: 180px;
        height: 180px;
        animation-delay: .7s;
    }

    .mic-ring:nth-child(3) {
        width: 240px;
        height: 240px;
        animation-delay: 1.4s;
    }

    @keyframes micRingPulse {
        0% {
            opacity: .75;
            transform: translate(-50%, -50%) scale(.92);
        }

        100% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(1.12);
        }
    }

    .mic-particle {
        position: absolute;
        border-radius: 50%;
        animation: micFloat 3s ease-in-out infinite alternate;
    }

    .mic-particle.p1 {
        width: 8px;
        height: 8px;
        background: rgba(196, 181, 253, .82);
        top: 48px;
        left: 56px;
    }

    .mic-particle.p2 {
        width: 6px;
        height: 6px;
        background: #2FA8A1;
        top: 66px;
        right: 54px;
        animation-delay: .4s;
    }

    .mic-particle.p3 {
        width: 7px;
        height: 7px;
        background: rgba(167, 139, 250, .78);
        bottom: 54px;
        left: 72px;
        animation-delay: .8s;
    }

    @keyframes micFloat {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    .podcast-wave-wrap {
        position: absolute;
        bottom: 26px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: flex-end;
        gap: 3px;
        z-index: 4;
    }

    .podcast-wave-bar {
        width: 3px;
        border-radius: 2px;
        background: rgba(124, 58, 237, .55);
        animation: podcastWave 1.1s ease-in-out infinite alternate;
    }

    .podcast-wave-bar:nth-child(1) {
        height: 6px;
        animation-delay: 0s;
    }

    .podcast-wave-bar:nth-child(2) {
        height: 14px;
        animation-delay: .08s;
    }

    .podcast-wave-bar:nth-child(3) {
        height: 20px;
        animation-delay: .16s;
    }

    .podcast-wave-bar:nth-child(4) {
        height: 26px;
        animation-delay: .10s;
        background: #2FA8A1;
    }

    .podcast-wave-bar:nth-child(5) {
        height: 18px;
        animation-delay: .22s;
    }

    .podcast-wave-bar:nth-child(6) {
        height: 12px;
        animation-delay: .06s;
    }

    .podcast-wave-bar:nth-child(7) {
        height: 7px;
        animation-delay: .18s;
    }

    @keyframes podcastWave {
        0% {
            transform: scaleY(1);
        }

        100% {
            transform: scaleY(2);
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

        .mic-wrap {
            width: 240px;
            height: 240px;
            transform: scale(.82);
        }
    }

    @media (max-width:1024px) {
        .podcast-banner-root {
            min-height: 390px;
        }

        .podcast-hero {
            min-height: 390px;
            padding: 135px 20px 12px;
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
            font-size: 12px;
            line-height: 1.6;
            max-width: 100%;
        }

        .podcast-right {
            flex: 0 0 44%;
            max-width: 44%;
            min-width: 0;
            justify-content: center;
        }

        .mic-wrap {
            width: 200px;
            height: 200px;
            transform: scale(.68);
        }

        .mic-ring:nth-child(1) {
            width: 76px;
            height: 76px;
        }

        .mic-ring:nth-child(2) {
            width: 108px;
            height: 108px;
        }

        .mic-ring:nth-child(3) {
            width: 142px;
            height: 142px;
        }

        .mic-particle.p1 {
            width: 5px;
            height: 5px;
            top: 42px;
            left: 48px;
        }

        .mic-particle.p2 {
            width: 4px;
            height: 4px;
            top: 54px;
            right: 46px;
        }

        .mic-particle.p3 {
            width: 5px;
            height: 5px;
            bottom: 44px;
            left: 60px;
        }

        .podcast-wave-wrap {
            bottom: 18px;
        }

        .podcast-wave-bar {
            width: 2.5px;
        }

        .podcast-wave-bar:nth-child(1) {
            height: 5px;
        }

        .podcast-wave-bar:nth-child(2) {
            height: 10px;
        }

        .podcast-wave-bar:nth-child(3) {
            height: 14px;
        }

        .podcast-wave-bar:nth-child(4) {
            height: 18px;
        }

        .podcast-wave-bar:nth-child(5) {
            height: 12px;
        }

        .podcast-wave-bar:nth-child(6) {
            height: 8px;
        }

        .podcast-wave-bar:nth-child(7) {
            height: 5px;
        }
    }

    @media (max-width:767px) {
        .podcast-banner-root {
            min-height: auto !important;
            padding-top: 18px !important;
        }

        .podcast-hero {
            min-height: auto !important;
            padding: 82px 16px 35px !important;
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
            line-height: 1.5;
            max-width: 100%;
            text-align: center;
            text-justify: auto;
            hyphens: none;
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
            padding: 78px 14px 20px !important;
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
            line-height: 1.45;
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

                <h1 class="podcast-title">Podcast</h1>

                <p class="podcast-sub">
                    We help brands find their voice. From scripting to full production, Minerdia Studio crafts podcast experiences that captivate audiences and build lasting connections.
                </p>
            </div>

            <div class="podcast-right">
                <div class="mic-wrap">
                    <div class="mic-ring"></div>
                    <div class="mic-ring"></div>
                    <div class="mic-ring"></div>

                    <div class="mic-particle p1"></div>
                    <div class="mic-particle p2"></div>
                    <div class="mic-particle p3"></div>

                    <svg width="160" height="200" viewBox="0 0 160 200" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:relative;z-index:3;filter:drop-shadow(0 12px 32px rgba(76,29,149,0.45)) drop-shadow(0 4px 12px rgba(124,58,237,0.3))">
                        <defs>
                            <linearGradient id="mg" x1="40" y1="0" x2="120" y2="130" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#c4b5fd" />
                                <stop offset="35%" stop-color="#8b5cf6" />
                                <stop offset="70%" stop-color="#6d28d9" />
                                <stop offset="100%" stop-color="#4c1d95" />
                            </linearGradient>

                            <linearGradient id="cap" x1="52" y1="20" x2="108" y2="110" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="rgba(255,255,255,0.45)" />
                                <stop offset="50%" stop-color="rgba(139,92,246,0.24)" />
                                <stop offset="100%" stop-color="rgba(76,29,149,0.12)" />
                            </linearGradient>

                            <linearGradient id="st" x1="75" y1="110" x2="85" y2="175" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#7c3aed" />
                                <stop offset="100%" stop-color="#4c1d95" />
                            </linearGradient>

                            <linearGradient id="bg2" x1="30" y1="170" x2="130" y2="192" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#8b5cf6" />
                                <stop offset="50%" stop-color="#6d28d9" />
                                <stop offset="100%" stop-color="#4c1d95" />
                            </linearGradient>

                            <linearGradient id="ag" x1="20" y1="90" x2="140" y2="90" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#2FA8A1" />
                                <stop offset="40%" stop-color="#7c3aed" />
                                <stop offset="100%" stop-color="#2FA8A1" />
                            </linearGradient>

                            <radialGradient id="tg" cx="80" cy="18" r="30" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="rgba(255,255,255,0.70)" />
                                <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                            </radialGradient>

                            <linearGradient id="sh" x1="40" y1="40" x2="60" y2="100" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="rgba(255,255,255,0.50)" />
                                <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                            </linearGradient>
                        </defs>

                        <path d="M22 100 C22 72 50 62 80 62 C110 62 138 72 138 100" stroke="url(#ag)" stroke-width="4" stroke-linecap="round" fill="none" />
                        <circle cx="22" cy="100" r="5" fill="#2FA8A1" opacity="0.95" />
                        <circle cx="138" cy="100" r="5" fill="#2FA8A1" opacity="0.95" />

                        <rect x="77" y="100" width="6" height="68" rx="3" fill="url(#st)" />

                        <rect x="32" y="170" width="96" height="16" rx="8" fill="url(#bg2)" />
                        <rect x="36" y="172" width="88" height="6" rx="3" fill="rgba(255,255,255,0.14)" />
                        <rect x="38" y="182" width="16" height="6" rx="3" fill="#4c1d95" />
                        <rect x="106" y="182" width="16" height="6" rx="3" fill="#4c1d95" />

                        <rect x="44" y="8" width="72" height="120" rx="36" fill="url(#mg)" />

                        <ellipse cx="80" cy="10" rx="28" ry="6" fill="url(#tg)" />
                        <rect x="44" y="20" width="14" height="80" rx="7" fill="url(#sh)" />
                        <rect x="52" y="20" width="56" height="96" rx="28" fill="url(#cap)" />

                        <rect x="55" y="36" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="44" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="52" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="60" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="68" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="76" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="84" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="92" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />
                        <rect x="55" y="100" width="50" height="2.5" rx="1.25" fill="rgba(255,255,255,0.28)" />

                        <rect x="63" y="30" width="2" height="86" rx="1" fill="rgba(255,255,255,0.16)" />
                        <rect x="72" y="26" width="2" height="96" rx="1" fill="rgba(255,255,255,0.16)" />
                        <rect x="81" y="24" width="2" height="100" rx="1" fill="rgba(255,255,255,0.16)" />
                        <rect x="90" y="26" width="2" height="96" rx="1" fill="rgba(255,255,255,0.16)" />
                        <rect x="99" y="30" width="2" height="86" rx="1" fill="rgba(255,255,255,0.16)" />

                        <circle cx="80" cy="68" r="18" fill="rgba(76,29,149,0.5)" stroke="rgba(255,255,255,0.34)" stroke-width="1.2" />
                        <circle cx="80" cy="68" r="11" fill="rgba(139,92,246,0.6)" stroke="rgba(255,255,255,0.30)" stroke-width="1" />
                        <circle cx="80" cy="68" r="5" fill="rgba(196,181,253,0.95)" />
                        <circle cx="76" cy="64" r="2.5" fill="rgba(255,255,255,0.7)" />

                        <ellipse cx="80" cy="126" rx="28" ry="6" fill="rgba(255,255,255,0.10)" />

                        <path d="M52 38 Q80 28 108 38" stroke="#2FA8A1" stroke-width="1.5" stroke-linecap="round" fill="none" opacity="0.7" />
                        <path d="M52 100 Q80 110 108 100" stroke="#2FA8A1" stroke-width="1.5" stroke-linecap="round" fill="none" opacity="0.5" />

                        <ellipse cx="80" cy="14" rx="32" ry="6" stroke="rgba(255,255,255,0.34)" stroke-width="1.7" fill="none" />
                        <ellipse cx="80" cy="122" rx="32" ry="6" stroke="rgba(255,255,255,0.28)" stroke-width="1.7" fill="none" />
                        <ellipse cx="80" cy="68" rx="42" ry="72" stroke="rgba(255,255,255,0.22)" stroke-width="2.2" fill="none" stroke-dasharray="5 4" />
                    </svg>

                    <div class="podcast-wave-wrap">
                        <div class="podcast-wave-bar"></div>
                        <div class="podcast-wave-bar"></div>
                        <div class="podcast-wave-bar"></div>
                        <div class="podcast-wave-bar"></div>
                        <div class="podcast-wave-bar"></div>
                        <div class="podcast-wave-bar"></div>
                        <div class="podcast-wave-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>