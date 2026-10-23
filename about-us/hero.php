<style>

    .podcast-banner-root {
        font-family: var(--font-body);
        position: relative;
        width: 100%;
        min-height: 520px;
        overflow: hidden;
        background:
            radial-gradient(circle at 15% 20%, rgba(47, 168, 161, 0.14) 0%, transparent 28%),
            radial-gradient(circle at 85% 22%, rgba(90, 46, 166, 0.14) 0%, transparent 30%),
            linear-gradient(135deg, #a78bfa 0%, #c4b5fd 25%, #e0d7ff 45%, #d4b8f0 65%, #b794e8 85%, #8b5cf6 100%);
    }

    .podcast-grid-overlay {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
        background-size: 64px 64px;
        pointer-events: none;
    }

    .podcast-noise-overlay {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 18% 30%, rgba(255, 255, 255, 0.12) 0%, transparent 34%),
            radial-gradient(circle at 70% 42%, rgba(255, 255, 255, 0.07) 0%, transparent 30%);
        pointer-events: none;
    }

    .podcast-hero {
        position: relative;
        z-index: 2;
        min-height: 520px;
        /* padding: 210px 42px 24px; */
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
        backdrop-filter: blur(10px) saturate(145%);
        -webkit-backdrop-filter: blur(10px) saturate(145%);
        border: 1px solid rgba(255, 255, 255, 0.24);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.20),
            inset 0 -1px 0 rgba(255, 255, 255, 0.04),
            0 18px 42px rgba(45, 16, 100, 0.12);
        overflow: hidden;
    }

    .podcast-glass-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(120deg, rgba(255, 255, 255, 0.12), transparent 32%),
            radial-gradient(circle at 15% 18%, rgba(255, 255, 255, 0.06), transparent 22%);
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
        backdrop-filter: blur(10px) saturate(150%);
        -webkit-backdrop-filter: blur(10px) saturate(150%);
        border: 1px solid rgba(255, 255, 255, 0.22);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.22),
            0 8px 24px rgba(35, 12, 88, 0.08);
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
        box-shadow: 0 0 10px rgba(47, 168, 161, .55);
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
        font-weight: 800;
        line-height: .96;
        letter-spacing: -.05em;
    }

    .podcast-sub {
        display: block;
        margin: 0;
        width: 100%;
        max-width: 430px;
        min-height: 74px;
        color: rgba(53, 24, 98, .74);
        font-size: 16px;
        line-height: 1.55;
        font-weight: 500;
        letter-spacing: 0;
        text-rendering: optimizeSpeed;
        -webkit-font-smoothing: antialiased;
        word-break: normal;
        overflow-wrap: normal;
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

    /* ABOUT US VISUAL */
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
            transform: translateY(-6px) rotate(1deg)
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

    @keyframes blink {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: 0
        }
    }

    @media (prefers-reduced-motion:reduce) {

        .podcast-banner-root *,
        .podcast-banner-root *::before,
        .podcast-banner-root *::after {
            animation: none !important;
            transition: none !important;
            scroll-behavior: auto !important;
        }
    }

    .about-visual {
        flex-shrink: 0;
        width: 260px;
        height: 250px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (max-width:1200px) {
        .podcast-hero {
            min-height: 500px;
            padding: 86px 28px 18px;
        }

        .podcast-glass-card {
            min-height: 255px;
            padding: 24px 24px;
        }

        .about-visual {
            width: 235px;
            height: 225px;
            transform: scale(.92);
        }
    }

    @media (max-width:1024px) {
        .podcast-banner-root {
            min-height: 390px;
        }

        .podcast-hero {
            min-height: 390px;
            padding: 180px 20px 12px;
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
            max-width: 310px;
            min-height: 62px;
            font-size: 11px;
            line-height: 1.42;
        }

        .podcast-right {
            flex: 0 0 44%;
            max-width: 44%;
            min-width: 0;
            justify-content: center;
        }

        .about-visual {
            width: 220px;
            height: 210px;
            transform: scale(.78);
        }
    }

    @media (max-width:767px) {
        .podcast-banner-root {
            min-height: auto !important;
            padding-top: 18px !important;
        }

        .podcast-hero {
            min-height: auto !important;
            padding: 180px 16px 35px !important;
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
            max-width: 255px;
            min-height: auto;
            font-size: 13px;
            line-height: 1.45;
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
            max-width: 240px;
            font-size: 11px;
            line-height: 1.42;
        }
    }
</style>

<section class="podcast-banner-root" aria-labelledby="minerdia-about-title">
    <div class="podcast-grid-overlay" aria-hidden="true"></div>
    <div class="podcast-noise-overlay" aria-hidden="true"></div>

    <div class="podcast-hero">
        <div class="podcast-glass-card">
            <div class="podcast-left">
                <div class="podcast-badge">
                    <span class="podcast-badge-dot" aria-hidden="true"></span>
                    <span class="podcast-badge-text">MINERDIA STUDIO</span>
                </div>

                <h1 class="podcast-title" id="minerdia-about-title">About Us</h1>

                <p class="podcast-sub">
                    Established in 2019, Minerdia Studio is a Delhi-based creative and digital marketing agency backed by 8+ years of industry experience. We build content and campaigns designed for measurable brand growth.
                </p>
            </div>

            <div class="podcast-right" aria-hidden="true">
                <div class="about-visual">

                    <div style="position:absolute;width:220px;height:220px;border-radius:50%;border:1.5px dashed rgba(196,181,253,0.35);top:50%;left:50%;transform:translate(-50%,-50%);animation:spin 30s linear infinite;"></div>

                    <div style="position:relative;z-index:4;width:168px;animation:flt 3.5s ease-in-out infinite alternate;">

                        <div style="position:absolute;top:8px;left:10px;width:150px;height:185px;background:rgba(255,255,255,0.22);border-radius:16px;transform:rotate(5deg);border:1px solid rgba(255,255,255,0.3);"></div>
                        <div style="position:absolute;top:4px;left:5px;width:150px;height:185px;background:rgba(255,255,255,0.3);border-radius:16px;transform:rotate(-3deg);border:1px solid rgba(255,255,255,0.35);"></div>

                        <div style="position:relative;width:155px;height:188px;background:linear-gradient(160deg,rgba(255,255,255,0.95),rgba(237,233,254,0.9));border-radius:16px;border:1px solid rgba(196,181,253,0.6);padding:14px;box-shadow:0 10px 32px rgba(76,29,149,0.25);">

                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;">
                                <div style="display:flex;align-items:center;gap:5px;">
                                    <div style="width:18px;height:14px;background:linear-gradient(135deg,#7c3aed,#4c1d95);border-radius:3px;position:relative;display:flex;align-items:center;justify-content:center;">
                                        <div style="width:7px;height:7px;border-radius:50%;background:rgba(255,255,255,0.5);"></div>
                                        <div style="position:absolute;top:2px;left:2px;width:3px;height:3px;border-radius:50%;background:rgba(255,255,255,0.6);"></div>
                                    </div>
                                    <div style="width:6px;height:6px;border-radius:50%;background:#ef4444;box-shadow:0 0 4px #ef4444;animation:blink 1s step-end infinite;"></div>
                                </div>
                                <div style="font-size:8px;font-weight:700;color:#7c3aed;letter-spacing:.08em;">MINERDIA</div>
                            </div>

                            <div style="display:flex;justify-content:center;gap:0;margin-bottom:10px;padding:8px;background:linear-gradient(135deg,rgba(124,58,237,0.08),rgba(6,182,212,0.06));border-radius:10px;">
                                <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#7c3aed,#4c1d95);border:2.5px solid white;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:800;color:white;margin-right:-8px;z-index:3;box-shadow:0 3px 8px rgba(76,29,149,0.3);">M</div>
                                <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#06b6d4,#0891b2);border:2.5px solid white;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:800;color:white;margin-right:-8px;z-index:2;box-shadow:0 3px 8px rgba(6,182,212,0.3);">S</div>
                                <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#ec4899,#9333ea);border:2.5px solid white;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:800;color:white;z-index:1;box-shadow:0 3px 8px rgba(236,72,153,0.3);">T</div>
                            </div>

                            <div style="text-align:center;margin-bottom:8px;">
                                <div style="font-size:10px;font-weight:800;color:#1a0533;letter-spacing:.04em;">Minerdia Studio</div>
                                <div style="font-size:8px;color:#7c3aed;font-weight:600;">Delhi, India · Est. 2019</div>
                            </div>

                            <div style="height:1px;background:linear-gradient(90deg,transparent,rgba(124,58,237,0.3),transparent);margin-bottom:8px;"></div>

                            <div style="display:flex;flex-wrap:wrap;gap:4px;justify-content:center;">
                                <div style="background:rgba(124,58,237,0.12);border:1px solid rgba(124,58,237,0.25);border-radius:50px;padding:2px 8px;font-size:7.5px;font-weight:700;color:#4c1d95;">Podcast</div>
                                <div style="background:rgba(6,182,212,0.1);border:1px solid rgba(6,182,212,0.25);border-radius:50px;padding:2px 8px;font-size:7.5px;font-weight:700;color:#0e7490;">Social Media</div>
                                <div style="background:rgba(236,72,153,0.1);border:1px solid rgba(236,72,153,0.25);border-radius:50px;padding:2px 8px;font-size:7.5px;font-weight:700;color:#9d174d;">Scripts</div>
                                <div style="background:rgba(245,158,11,0.1);border:1px solid rgba(245,158,11,0.25);border-radius:50px;padding:2px 8px;font-size:7.5px;font-weight:700;color:#92400e;">Video Ads</div>
                            </div>
                        </div>
                    </div>

                    <div style="position:absolute;top:8px;right:0px;z-index:6;animation:flt2 2.8s ease-in-out infinite alternate;">
                        <div style="background:linear-gradient(135deg,#f59e0b,#d97706);border-radius:50%;width:44px;height:44px;display:flex;flex-direction:column;align-items:center;justify-content:center;box-shadow:0 6px 18px rgba(245,158,11,0.45);border:2px solid rgba(255,255,255,0.6);">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9 2l1.8 4 4.2.6-3 3 .7 4.4L9 12l-3.7 2 .7-4.4-3-3 4.2-.6z" fill="white" />
                            </svg>
                        </div>
                        <div style="position:absolute;top:-8px;left:50%;transform:translateX(-50%);background:white;border-radius:50px;padding:2px 7px;font-size:7px;font-weight:800;color:#92400e;white-space:nowrap;border:1px solid rgba(245,158,11,0.4);">Creative Team</div>
                    </div>

                    <div style="position:absolute;bottom:12px;left:0px;z-index:6;background:rgba(255,255,255,0.9);border:1px solid rgba(196,181,253,0.55);border-radius:50px;padding:5px 11px;display:flex;align-items:center;gap:5px;animation:flt 3s ease-in-out infinite alternate;animation-delay:.5s;">
                        <div style="width:16px;height:16px;border-radius:50%;background:linear-gradient(135deg,#a78bfa,#4c1d95);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <circle cx="4.5" cy="3.5" r="1.3" stroke="white" stroke-width=".7" fill="none" />
                                <path d="M4.5 1C3 1 2 2 2 3.5c0 2.3 2.5 4.5 2.5 4.5S7 5.8 7 3.5C7 2 6 1 4.5 1z" stroke="white" stroke-width=".7" fill="none" />
                            </svg>
                        </div>
                        <span style="font-size:9px;font-weight:700;color:#4c1d95;">Delhi, India</span>
                    </div>

                    <div style="position:absolute;top:14px;left:2px;z-index:6;background:rgba(76,29,149,0.82);border-radius:10px;padding:6px 10px;animation:flt 2.6s ease-in-out infinite alternate;animation-delay:1s;">
                        <div style="font-size:7px;font-weight:600;color:rgba(196,181,253,0.8);letter-spacing:.08em;">EXPERIENCE</div>
                        <div style="font-size:13px;font-weight:800;color:white;line-height:1.1;white-space:nowrap;">8+ YEARS</div>
                    </div>

                    <div style="position:absolute;bottom:14px;right:2px;z-index:6;background:rgba(255,255,255,0.9);border:1px solid rgba(196,181,253,0.5);border-radius:50px;padding:5px 10px;display:flex;align-items:center;gap:5px;animation:flt 3.2s ease-in-out infinite alternate;animation-delay:.3s;">
                        <div style="display:flex;">
                            <div style="width:14px;height:14px;border-radius:50%;background:#7c3aed;border:1.5px solid white;margin-right:-4px;"></div>
                            <div style="width:14px;height:14px;border-radius:50%;background:#06b6d4;border:1.5px solid white;margin-right:-4px;"></div>
                            <div style="width:14px;height:14px;border-radius:50%;background:#ec4899;border:1.5px solid white;"></div>
                        </div>
                        <span style="font-size:9px;font-weight:700;color:#4c1d95;">200+ Clients Served</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>