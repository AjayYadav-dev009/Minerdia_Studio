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
        padding: 150px 42px 24px;
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
        font-size: clamp(30px, 4.2vw, 56px);
        font-weight: 700;
        line-height: .96;
        letter-spacing: -.05em;
    }

    .podcast-sub {
        margin: 0;
        max-width: 460px;
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

    /* PRIVACY ORBIT VISUAL */
    @keyframes cw {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    @keyframes ccw {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(-360deg)
        }
    }

    @keyframes fixcw {
        from {
            transform: translateY(-50%) rotate(0deg)
        }

        to {
            transform: translateY(-50%) rotate(-360deg)
        }
    }

    @keyframes fixccw {
        from {
            transform: translateY(-50%) rotate(0deg)
        }

        to {
            transform: translateY(-50%) rotate(360deg)
        }
    }

    @keyframes ping {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: .45
        }

        100% {
            transform: translate(-50%, -50%) scale(2.6);
            opacity: 0
        }
    }

    @keyframes bob {
        0% {
            transform: translateY(0)
        }

        100% {
            transform: translateY(-8px)
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: .35;
            transform: translate(-50%, -50%) scale(1)
        }

        50% {
            opacity: .6;
            transform: translate(-50%, -50%) scale(1.05)
        }
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: 0.15
        }
    }

    .privacy-visual {
        flex-shrink: 0;
        width: 268px;
        height: 258px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
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

        .privacy-visual {
            transform: scale(.9);
        }
    }

    @media (max-width:1024px) {
        .podcast-banner-root {
            min-height: 390px;
        }

        .podcast-hero {
            min-height: 390px;
            padding: 140px 20px 12px;
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

        .privacy-visual {
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
            padding: 80px 16px 35px !important;
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
            padding: 80px 14px 20px !important;
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

                <h1 class="podcast-title">Privacy Policy</h1>

                <p class="podcast-sub">
                    Your data belongs to you. We are committed to protecting your privacy and being fully transparent about how we collect, use, and safeguard your information.
                </p>
            </div>

            <div class="podcast-right">
                <div class="privacy-visual">

                    <!-- Orbit track 1 -->
                    <div style="position:absolute;width:152px;height:152px;border-radius:50%;border:1px dashed rgba(196,181,253,0.45);top:50%;left:50%;transform:translate(-50%,-50%);"></div>

                    <!-- Orbit track 2 -->
                    <div style="position:absolute;width:234px;height:234px;border-radius:50%;border:1px dashed rgba(196,181,253,0.3);top:50%;left:50%;transform:translate(-50%,-50%);"></div>

                    <!-- Soft glow core -->
                    <div style="position:absolute;width:100px;height:100px;border-radius:50%;background:rgba(124,58,237,0.18);top:50%;left:50%;filter:blur(18px);animation:pulse 3s ease-in-out infinite;"></div>
                    <div style="position:absolute;width:60px;height:60px;border-radius:50%;background:rgba(124,58,237,0.22);top:50%;left:50%;filter:blur(10px);animation:pulse 2.5s ease-in-out infinite;animation-delay:.4s;"></div>

                    <!-- Ping rings from center -->
                    <div style="position:absolute;top:50%;left:50%;width:76px;height:76px;border-radius:50%;border:1.5px solid rgba(124,58,237,0.35);animation:ping 2.4s ease-out infinite;"></div>
                    <div style="position:absolute;top:50%;left:50%;width:76px;height:76px;border-radius:50%;border:1.5px solid rgba(124,58,237,0.25);animation:ping 2.4s ease-out infinite;animation-delay:.8s;"></div>

                    <!-- INNER ORBIT -->
                    <div style="position:absolute;top:50%;left:50%;width:76px;height:0;transform-origin:left center;animation:cw 16s linear infinite;">
                        <div style="position:absolute;right:-18px;top:50%;animation:fixcw 16s linear infinite;width:36px;height:36px;border-radius:10px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 14px rgba(76,29,149,0.2);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:20px;height:20px;border-radius:6px;background:linear-gradient(135deg,#7c3aed,#4c1d95);display:flex;align-items:center;justify-content:center;">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                    <circle cx="5.5" cy="4" r="2" stroke="white" stroke-width=".9" fill="none" />
                                    <path d="M2 9.5c0-2 1.6-3.5 3.5-3.5S9 7.5 9 9.5" stroke="white" stroke-width=".9" stroke-linecap="round" fill="none" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.04em;">USER DATA</div>
                        </div>
                    </div>

                    <div style="position:absolute;top:50%;left:50%;width:76px;height:0;transform-origin:left center;animation:cw 16s linear infinite;animation-delay:-4s;">
                        <div style="position:absolute;right:-18px;top:50%;animation:fixcw 16s linear infinite;animation-delay:-4s;width:36px;height:36px;border-radius:10px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 14px rgba(76,29,149,0.2);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:20px;height:20px;border-radius:6px;background:linear-gradient(135deg,#22c55e,#16a34a);display:flex;align-items:center;justify-content:center;">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                    <rect x="2.5" y="5" width="6" height="4.5" rx="1" stroke="white" stroke-width=".9" fill="none" />
                                    <path d="M4 5V3.5a1.5 1.5 0 013 0V5" stroke="white" stroke-width=".9" stroke-linecap="round" fill="none" />
                                    <circle cx="5.5" cy="7" r=".6" fill="white" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.04em;">ENCRYPTED</div>
                        </div>
                    </div>

                    <div style="position:absolute;top:50%;left:50%;width:76px;height:0;transform-origin:left center;animation:cw 16s linear infinite;animation-delay:-8s;">
                        <div style="position:absolute;right:-18px;top:50%;animation:fixcw 16s linear infinite;animation-delay:-8s;width:36px;height:36px;border-radius:10px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 14px rgba(76,29,149,0.2);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:20px;height:20px;border-radius:6px;background:linear-gradient(135deg,#06b6d4,#0891b2);display:flex;align-items:center;justify-content:center;">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                    <circle cx="5.5" cy="5.5" r="4" stroke="white" stroke-width=".9" fill="none" />
                                    <circle cx="4" cy="4.5" r=".6" fill="white" />
                                    <circle cx="7" cy="4" r=".5" fill="white" />
                                    <circle cx="6.5" cy="7" r=".6" fill="white" />
                                    <circle cx="4" cy="7" r=".5" fill="white" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.04em;">COOKIES</div>
                        </div>
                    </div>

                    <div style="position:absolute;top:50%;left:50%;width:76px;height:0;transform-origin:left center;animation:cw 16s linear infinite;animation-delay:-12s;">
                        <div style="position:absolute;right:-18px;top:50%;animation:fixcw 16s linear infinite;animation-delay:-12s;width:36px;height:36px;border-radius:10px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 14px rgba(76,29,149,0.2);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:20px;height:20px;border-radius:6px;background:linear-gradient(135deg,#f59e0b,#d97706);display:flex;align-items:center;justify-content:center;">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                    <path d="M5.5 1.5L2 3.2v2.3c0 2.2 1.5 4 3.5 4.5 2-.5 3.5-2.3 3.5-4.5V3.2L5.5 1.5z" stroke="white" stroke-width=".9" fill="none" />
                                    <path d="M4 5.5l1 1 2.5-2" stroke="white" stroke-width=".9" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.04em;">GDPR</div>
                        </div>
                    </div>

                    <!-- OUTER ORBIT -->
                    <div style="position:absolute;top:50%;left:50%;width:117px;height:0;transform-origin:left center;animation:ccw 26s linear infinite;">
                        <div style="position:absolute;right:-20px;top:50%;animation:fixccw 26s linear infinite;width:40px;height:40px;border-radius:12px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 16px rgba(76,29,149,0.18);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:22px;height:22px;border-radius:7px;background:linear-gradient(135deg,#f59e0b,#ec4899);display:flex;align-items:center;justify-content:center;">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <circle cx="4" cy="6" r="2.5" stroke="white" stroke-width=".9" fill="none" />
                                    <circle cx="9" cy="4" r="2" stroke="white" stroke-width=".9" fill="none" />
                                    <path d="M6.5 5.5C7 5 8 4.5 8 4" stroke="white" stroke-width=".8" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.03em;">3RD PARTY</div>
                        </div>
                    </div>

                    <div style="position:absolute;top:50%;left:50%;width:117px;height:0;transform-origin:left center;animation:ccw 26s linear infinite;animation-delay:-6.5s;">
                        <div style="position:absolute;right:-20px;top:50%;animation:fixccw 26s linear infinite;animation-delay:-6.5s;width:40px;height:40px;border-radius:12px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 16px rgba(76,29,149,0.18);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:22px;height:22px;border-radius:7px;background:linear-gradient(135deg,#ec4899,#9333ea);display:flex;align-items:center;justify-content:center;">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M2 9l2.5-3 2 2 2-4 1.5 2" stroke="white" stroke-width=".9" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.03em;">ANALYTICS</div>
                        </div>
                    </div>

                    <div style="position:absolute;top:50%;left:50%;width:117px;height:0;transform-origin:left center;animation:ccw 26s linear infinite;animation-delay:-13s;">
                        <div style="position:absolute;right:-20px;top:50%;animation:fixccw 26s linear infinite;animation-delay:-13s;width:40px;height:40px;border-radius:12px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 16px rgba(76,29,149,0.18);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:22px;height:22px;border-radius:7px;background:linear-gradient(135deg,#7c3aed,#06b6d4);display:flex;align-items:center;justify-content:center;">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <rect x="2" y="2" width="8" height="8" rx="1.5" stroke="white" stroke-width=".9" fill="none" />
                                    <path d="M4 5h4M4 7h2.5" stroke="white" stroke-width=".9" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.03em;">DATA RIGHTS</div>
                        </div>
                    </div>

                    <div style="position:absolute;top:50%;left:50%;width:117px;height:0;transform-origin:left center;animation:ccw 26s linear infinite;animation-delay:-19.5s;">
                        <div style="position:absolute;right:-20px;top:50%;animation:fixccw 26s linear infinite;animation-delay:-19.5s;width:40px;height:40px;border-radius:12px;background:white;border:1px solid rgba(196,181,253,0.5);box-shadow:0 4px 16px rgba(76,29,149,0.18);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:2px;">
                            <div style="width:22px;height:22px;border-radius:7px;background:linear-gradient(135deg,#06b6d4,#22c55e);display:flex;align-items:center;justify-content:center;">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <circle cx="6" cy="6" r="4" stroke="white" stroke-width=".9" fill="none" />
                                    <path d="M6 3.5V6l1.5 1.5" stroke="white" stroke-width=".9" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div style="font-size:5.5px;font-weight:700;color:#4c1d95;letter-spacing:.03em;">RETENTION</div>
                        </div>
                    </div>

                    <!-- CENTER SHIELD -->
                    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:10;animation:bob 3s ease-in-out infinite alternate;">
                        <div style="position:absolute;top:50%;left:50%;width:70px;height:70px;border-radius:50%;border:1.5px solid rgba(124,58,237,0.3);animation:ping 2.2s ease-out infinite;"></div>
                        <div style="position:absolute;top:50%;left:50%;width:70px;height:70px;border-radius:50%;border:1.5px solid rgba(124,58,237,0.2);animation:ping 2.2s ease-out infinite;animation-delay:.7s;"></div>

                        <div style="width:58px;height:64px;position:relative;display:flex;align-items:center;justify-content:center;">
                            <svg width="58" height="64" viewBox="0 0 58 64" fill="none" style="position:absolute;top:0;left:0;">
                                <path d="M29 2L4 12v20c0 16 11 29 25 30 14-1 25-14 25-30V12L29 2z" fill="url(#sg)" stroke="rgba(196,181,253,0.6)" stroke-width="1.5" />
                                <defs>
                                    <linearGradient id="sg" x1="4" y1="2" x2="54" y2="64" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#7c3aed" />
                                        <stop offset="100%" stop-color="#4c1d95" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style="position:relative;z-index:1;margin-top:4px;">
                                <rect x="5" y="11" width="14" height="10" rx="2.5" stroke="white" stroke-width="1.4" fill="none" />
                                <path d="M8 11V7.5a4 4 0 018 0V11" stroke="white" stroke-width="1.4" stroke-linecap="round" fill="none" />
                                <circle cx="12" cy="16" r="1.5" fill="white" />
                                <path d="M12 17.5v1.5" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>

                            <div style="position:absolute;top:4px;left:8px;width:12px;height:28px;background:linear-gradient(180deg,rgba(255,255,255,0.2),transparent);border-radius:6px;transform:rotate(-8deg);pointer-events:none;"></div>
                            <div style="position:absolute;top:6px;right:6px;width:8px;height:8px;border-radius:50%;background:#22c55e;box-shadow:0 0 6px #22c55e;border:1.5px solid white;animation:blink 2s ease-in-out infinite;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>