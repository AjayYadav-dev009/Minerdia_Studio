<style>

    .podcast-banner-root {
        font-family: var(--font-body);
        position: relative;
        width: 100%;
        min-height: 0;
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
        min-height: 0;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding: 115px 28px 40px;
    }

    .podcast-glass-card {
        width: 100%;
        max-width: 1140px;
        min-height: 313px;
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
        box-sizing: border-box;
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
        font-size: clamp(26px, 3.8vw, 48px);
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

    /* CREATIVE DESIGN + VIDEO VISUAL */
    @keyframes flt {
        0% {
            transform: translateY(0)
        }

        100% {
            transform: translateY(-8px)
        }
    }

    @keyframes flt2 {
        0% {
            transform: translateY(0) rotate(-1deg)
        }

        100% {
            transform: translateY(-6px) rotate(1.5deg)
        }
    }

    @keyframes spin {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    @keyframes spinR {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(-360deg)
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

    @keyframes shine {
        0% {
            left: -60%
        }

        100% {
            left: 120%
        }
    }

    @keyframes marquee {
        0% {
            transform: translateX(0)
        }

        100% {
            transform: translateX(-50%)
        }
    }

    .creative-visual {
        flex-shrink: 0;
        width: 278px;
        height: 252px;
        position: relative;
    }

    @media (max-width:1200px) {
        .podcast-banner-root {
            min-height: 0;
        }

        .podcast-hero {
            min-height: 0;
            padding: 115px 28px 40px;
        }

        .podcast-glass-card {
            min-height: 313px;
            padding: 24px 24px;
        }

        .creative-visual {
            transform: scale(.9);
        }
    }

    @media (max-width:1024px) {
        .podcast-banner-root {
            min-height: 0;
        }

        .podcast-hero {
            min-height: 0;
            padding: 111px 20px 36px;
        }

        .podcast-glass-card {
            margin-top: 0;
            margin-bottom: 0;
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

        .creative-visual {
            width: 260px;
            height: 205px;
            transform: scale(.76);
        }
    }

    @media (max-width:767px) {
        .podcast-banner-root {
            min-height: auto !important;
            padding-top: 0 !important;
        }

        .podcast-hero {
            min-height: auto !important;
            padding: 106px 16px 32px !important;
        }

        .podcast-glass-card {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
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
            padding-top: 0 !important;
        }

        .podcast-hero {
            padding: 103px 14px 28px !important;
            min-height: auto !important;
        }

        .podcast-glass-card {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
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

                <h1 class="podcast-title">Professional Designing and Video Editing Services</h1>

                <p class="podcast-sub">
                    Professional Designing and Video Editing Services for businesses, brands, and creators to create engaging graphics, videos, and visual content.
                </p>
            </div>

            <div class="podcast-right">
                <div class="creative-visual">

                    <!-- MAIN CANVAS / EDITOR WINDOW -->
                    <div style="position:absolute;top:0;left:14px;width:188px;height:170px;background:linear-gradient(160deg,rgba(255,255,255,0.96),rgba(237,233,254,0.92));border-radius:14px;border:1px solid rgba(196,181,253,0.6);box-shadow:0 10px 32px rgba(76,29,149,0.22);z-index:4;overflow:hidden;animation:flt 3.2s ease-in-out infinite alternate;">

                        <!-- Title bar -->
                        <div style="height:24px;background:linear-gradient(90deg,#4c1d95,#7c3aed);display:flex;align-items:center;padding:0 10px;gap:5px;">
                            <div style="width:7px;height:7px;border-radius:50%;background:#ef4444;"></div>
                            <div style="width:7px;height:7px;border-radius:50%;background:#f59e0b;"></div>
                            <div style="width:7px;height:7px;border-radius:50%;background:#22c55e;"></div>
                            <div style="flex:1;text-align:center;font-size:8px;font-weight:700;color:rgba(255,255,255,0.8);letter-spacing:.08em;">minerdia_brand.psd</div>
                            <div style="display:flex;align-items:center;gap:3px;background:rgba(239,68,68,0.3);border-radius:4px;padding:1px 5px;">
                                <div style="width:5px;height:5px;border-radius:50%;background:#ef4444;animation:blink 1s step-end infinite;"></div>
                                <span style="font-size:7px;font-weight:700;color:white;">REC</span>
                            </div>
                        </div>

                        <!-- Canvas area -->
                        <div style="display:flex;height:calc(100% - 24px);">

                            <!-- Left toolbar -->
                            <div style="width:22px;background:rgba(76,29,149,0.08);border-right:1px solid rgba(196,181,253,0.3);display:flex;flex-direction:column;align-items:center;gap:6px;padding:8px 0;">
                                <div style="width:13px;height:13px;border-radius:3px;background:linear-gradient(135deg,#7c3aed,#06b6d4);display:flex;align-items:center;justify-content:center;">
                                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none">
                                        <path d="M1 6L3.5 1 6 6" stroke="white" stroke-width=".8" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div style="width:13px;height:13px;border-radius:3px;background:rgba(124,58,237,0.15);display:flex;align-items:center;justify-content:center;">
                                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none">
                                        <rect x="1" y="1" width="5" height="5" rx="1" stroke="#7c3aed" stroke-width=".8" fill="none" />
                                    </svg>
                                </div>
                                <div style="width:13px;height:13px;border-radius:3px;background:rgba(124,58,237,0.15);display:flex;align-items:center;justify-content:center;">
                                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none">
                                        <circle cx="3.5" cy="3.5" r="2.5" stroke="#7c3aed" stroke-width=".8" fill="none" />
                                    </svg>
                                </div>
                                <div style="width:13px;height:13px;border-radius:3px;background:rgba(124,58,237,0.15);display:flex;align-items:center;justify-content:center;">
                                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none">
                                        <path d="M1 6L3.5 1 6 6M1.8 4.2h3.4" stroke="#7c3aed" stroke-width=".8" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div style="width:13px;height:2px;background:rgba(196,181,253,0.4);border-radius:1px;"></div>
                                <div style="width:11px;height:11px;border-radius:2px;background:#4c1d95;border:1.5px solid white;"></div>
                                <div style="width:11px;height:11px;border-radius:2px;background:white;border:1.5px solid rgba(124,58,237,0.4);margin-top:-8px;margin-left:3px;"></div>
                            </div>

                            <!-- Main canvas -->
                            <div style="flex:1;position:relative;overflow:hidden;background:white;">
                                <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(196,181,253,0.12) 1px,transparent 1px),linear-gradient(90deg,rgba(196,181,253,0.12) 1px,transparent 1px);background-size:12px 12px;"></div>

                                <div style="position:absolute;inset:6px;">
                                    <div style="position:absolute;top:4px;left:6px;width:60px;height:60px;border-radius:50% 30% 50% 30%;background:linear-gradient(135deg,#7c3aed,#c4b5fd);opacity:.9;animation:spin 18s linear infinite;"></div>
                                    <div style="position:absolute;top:12px;left:20px;width:40px;height:40px;border-radius:30% 50% 30% 50%;background:linear-gradient(135deg,#06b6d4,#7c3aed);opacity:.85;animation:spinR 12s linear infinite;"></div>
                                    <div style="position:absolute;top:8px;right:8px;width:50px;height:50px;background:linear-gradient(135deg,#ec4899,#f59e0b);border-radius:8px;transform:rotate(15deg);opacity:.9;"></div>
                                    <div style="position:absolute;top:16px;right:14px;width:30px;height:30px;border-radius:50%;background:rgba(255,255,255,0.6);"></div>

                                    <div style="position:absolute;bottom:14px;left:4px;right:4px;">
                                        <div style="height:5px;background:linear-gradient(90deg,#4c1d95,#7c3aed);border-radius:3px;margin-bottom:4px;width:80%;"></div>
                                        <div style="height:3px;background:rgba(124,58,237,0.3);border-radius:2px;margin-bottom:3px;width:65%;"></div>
                                        <div style="height:3px;background:rgba(124,58,237,0.2);border-radius:2px;width:50%;"></div>
                                    </div>

                                    <div style="position:absolute;top:2px;left:4px;width:64px;height:64px;border:1.5px dashed rgba(124,58,237,0.5);border-radius:4px;pointer-events:none;">
                                        <div style="position:absolute;top:-3px;left:-3px;width:6px;height:6px;background:#7c3aed;border-radius:1px;"></div>
                                        <div style="position:absolute;top:-3px;right:-3px;width:6px;height:6px;background:#7c3aed;border-radius:1px;"></div>
                                        <div style="position:absolute;bottom:-3px;left:-3px;width:6px;height:6px;background:#7c3aed;border-radius:1px;"></div>
                                        <div style="position:absolute;bottom:-3px;right:-3px;width:6px;height:6px;background:#7c3aed;border-radius:1px;"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right layers panel -->
                            <div style="width:36px;background:rgba(76,29,149,0.05);border-left:1px solid rgba(196,181,253,0.3);padding:6px 4px;display:flex;flex-direction:column;gap:4px;">
                                <div style="font-size:6px;font-weight:700;color:#7c3aed;letter-spacing:.06em;text-align:center;margin-bottom:2px;">LAYERS</div>
                                <div style="height:14px;background:rgba(124,58,237,0.18);border-radius:3px;border-left:2px solid #7c3aed;display:flex;align-items:center;padding-left:3px;">
                                    <div style="height:2px;width:18px;background:#7c3aed;border-radius:1px;"></div>
                                </div>
                                <div style="height:14px;background:rgba(6,182,212,0.12);border-radius:3px;border-left:2px solid #06b6d4;display:flex;align-items:center;padding-left:3px;">
                                    <div style="height:2px;width:14px;background:#06b6d4;border-radius:1px;"></div>
                                </div>
                                <div style="height:14px;background:rgba(236,72,153,0.12);border-radius:3px;border-left:2px solid #ec4899;display:flex;align-items:center;padding-left:3px;">
                                    <div style="height:2px;width:16px;background:#ec4899;border-radius:1px;"></div>
                                </div>
                                <div style="height:14px;background:rgba(245,158,11,0.12);border-radius:3px;border-left:2px solid #f59e0b;display:flex;align-items:center;padding-left:3px;">
                                    <div style="height:2px;width:12px;background:#f59e0b;border-radius:1px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- VIDEO TIMELINE PANEL -->
                    <div style="position:absolute;bottom:0;left:6px;width:210px;height:72px;background:linear-gradient(160deg,rgba(26,5,51,0.92),rgba(76,29,149,0.88));border-radius:12px;border:1px solid rgba(196,181,253,0.3);padding:8px 10px;z-index:5;box-shadow:0 8px 24px rgba(76,29,149,0.3);">
                        <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                            <div style="width:18px;height:18px;border-radius:50%;background:#7c3aed;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                    <path d="M2 1.5l5 2.5-5 2.5V1.5z" fill="white" />
                                </svg>
                            </div>
                            <div style="font-size:8px;font-weight:700;color:rgba(196,181,253,0.9);letter-spacing:.04em;">00:24 / 01:30</div>
                            <div style="margin-left:auto;display:flex;gap:4px;">
                                <div style="width:14px;height:14px;border-radius:3px;background:rgba(196,181,253,0.15);display:flex;align-items:center;justify-content:center;">
                                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none">
                                        <path d="M1 2h5M1 3.5h4M1 5h3" stroke="rgba(196,181,253,0.7)" stroke-width=".7" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div style="width:14px;height:14px;border-radius:3px;background:rgba(239,68,68,0.25);display:flex;align-items:center;justify-content:center;">
                                    <div style="width:5px;height:5px;border-radius:50%;background:#ef4444;animation:blink 1s step-end infinite;"></div>
                                </div>
                            </div>
                        </div>

                        <div style="display:flex;flex-direction:column;gap:3px;">
                            <div style="display:flex;align-items:center;gap:4px;">
                                <div style="font-size:6px;font-weight:700;color:rgba(196,181,253,0.6);width:14px;flex-shrink:0;">VID</div>
                                <div style="flex:1;height:10px;background:rgba(255,255,255,0.06);border-radius:3px;overflow:hidden;position:relative;">
                                    <div style="position:absolute;left:0;top:0;height:100%;background:linear-gradient(90deg,#7c3aed,#06b6d4);border-radius:3px;width:38%;"></div>
                                    <div style="position:absolute;left:42%;top:0;height:100%;background:linear-gradient(90deg,#ec4899,#7c3aed);border-radius:3px;width:28%;"></div>
                                    <div style="position:absolute;left:74%;top:0;height:100%;background:linear-gradient(90deg,#06b6d4,#22c55e);border-radius:3px;width:18%;"></div>
                                    <div style="position:absolute;left:30%;top:-1px;width:1.5px;height:calc(100%+2px);background:#f59e0b;box-shadow:0 0 4px #f59e0b;"></div>
                                </div>
                            </div>

                            <div style="display:flex;align-items:center;gap:4px;">
                                <div style="font-size:6px;font-weight:700;color:rgba(196,181,253,0.6);width:14px;flex-shrink:0;">AUD</div>
                                <div style="flex:1;height:10px;background:rgba(255,255,255,0.06);border-radius:3px;overflow:hidden;position:relative;display:flex;align-items:center;padding:0 3px;gap:1px;">
                                    <div style="width:2px;height:4px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:8px;background:rgba(34,197,94,0.8);border-radius:1px;"></div>
                                    <div style="width:2px;height:6px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:10px;background:rgba(34,197,94,0.9);border-radius:1px;"></div>
                                    <div style="width:2px;height:5px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:9px;background:rgba(34,197,94,0.8);border-radius:1px;"></div>
                                    <div style="width:2px;height:4px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:7px;background:rgba(34,197,94,0.8);border-radius:1px;"></div>
                                    <div style="width:2px;height:3px;background:rgba(34,197,94,0.6);border-radius:1px;"></div>
                                    <div style="width:2px;height:8px;background:rgba(34,197,94,0.8);border-radius:1px;"></div>
                                    <div style="width:2px;height:6px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:10px;background:rgba(34,197,94,0.9);border-radius:1px;"></div>
                                    <div style="width:2px;height:4px;background:rgba(34,197,94,0.6);border-radius:1px;"></div>
                                    <div style="width:2px;height:7px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:5px;background:rgba(34,197,94,0.7);border-radius:1px;"></div>
                                    <div style="width:2px;height:9px;background:rgba(34,197,94,0.8);border-radius:1px;"></div>
                                    <div style="position:absolute;left:30%;top:-1px;width:1.5px;height:calc(100%+2px);background:#f59e0b;box-shadow:0 0 4px #f59e0b;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Color palette pill -->
                    <div style="position:absolute;top:6px;right:0px;z-index:7;background:rgba(255,255,255,0.92);border:1px solid rgba(196,181,253,0.5);border-radius:12px;padding:7px 10px;box-shadow:0 6px 18px rgba(76,29,149,0.2);animation:flt2 2.8s ease-in-out infinite alternate;">
                        <div style="font-size:7px;font-weight:700;color:#4c1d95;margin-bottom:5px;letter-spacing:.06em;">COLOR PALETTE</div>
                        <div style="display:flex;gap:4px;">
                            <div style="width:14px;height:14px;border-radius:4px;background:#4c1d95;box-shadow:0 2px 6px rgba(76,29,149,0.4);"></div>
                            <div style="width:14px;height:14px;border-radius:4px;background:#7c3aed;box-shadow:0 2px 6px rgba(124,58,237,0.4);"></div>
                            <div style="width:14px;height:14px;border-radius:4px;background:#06b6d4;box-shadow:0 2px 6px rgba(6,182,212,0.4);"></div>
                            <div style="width:14px;height:14px;border-radius:4px;background:#ec4899;box-shadow:0 2px 6px rgba(236,72,153,0.35);"></div>
                            <div style="width:14px;height:14px;border-radius:4px;background:#f59e0b;box-shadow:0 2px 6px rgba(245,158,11,0.4);"></div>
                        </div>
                    </div>

                    <!-- Export pill -->
                    <div style="position:absolute;top:92px;right:0px;z-index:7;background:linear-gradient(135deg,#4c1d95,#7c3aed);border-radius:50px;padding:6px 12px;display:flex;align-items:center;gap:6px;box-shadow:0 6px 18px rgba(76,29,149,0.4);animation:flt 3s ease-in-out infinite alternate;animation-delay:.6s;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M6 1v7M3.5 5.5L6 8l2.5-2.5" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 9.5h8" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        <span style="font-size:9px;font-weight:700;color:white;">Export 4K</span>
                    </div>

                    <!-- Bottom marquee -->
                    <div style="position:absolute;bottom:-2px;left:6px;width:210px;overflow:hidden;z-index:6;">
                        <div style="display:flex;gap:0;width:max-content;animation:marquee 10s linear infinite;">
                            <div style="display:flex;gap:12px;padding:0 6px;white-space:nowrap;">
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">PHOTOSHOP</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">PREMIERE PRO</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">AFTER EFFECTS</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">ILLUSTRATOR</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">FIGMA</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                            </div>
                            <div style="display:flex;gap:12px;padding:0 6px;white-space:nowrap;">
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">PHOTOSHOP</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">PREMIERE PRO</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">AFTER EFFECTS</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">ILLUSTRATOR</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                                <span style="font-size:7.5px;font-weight:700;color:rgba(76,29,149,0.5);letter-spacing:.06em;">FIGMA</span>
                                <span style="font-size:7.5px;color:rgba(196,181,253,0.5);">·</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>