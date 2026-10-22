<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    html,
    body {
        overflow-x: hidden
    }

    .podcast-banner-root {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
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
        background-image: linear-gradient(rgba(255, 255, 255, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .04) 1px, transparent 1px);
        background-size: 64px 64px;
        pointer-events: none;
    }

    .podcast-noise-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 18% 30%, rgba(255, 255, 255, .12) 0%, transparent 34%), radial-gradient(circle at 70% 42%, rgba(255, 255, 255, .07) 0%, transparent 30%);
        pointer-events: none;
    }

    .podcast-hero {
        position: relative;
        z-index: 2;
        min-height: 520px;
        padding: 96px 42px 24px;
        display: flex;
        align-items: center;
        justify-content: center
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
        background: linear-gradient(135deg, rgba(255, 255, 255, .18), rgba(255, 255, 255, .07)), rgba(255, 255, 255, .08);
        backdrop-filter: blur(10px) saturate(145%);
        -webkit-backdrop-filter: blur(10px) saturate(145%);
        border: 1px solid rgba(255, 255, 255, .24);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .20), inset 0 -1px 0 rgba(255, 255, 255, .04), 0 18px 42px rgba(45, 16, 100, .12);
        overflow: hidden;
    }

    .podcast-glass-card:before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, rgba(255, 255, 255, .12), transparent 32%), radial-gradient(circle at 15% 18%, rgba(255, 255, 255, .06), transparent 22%);
        pointer-events: none;
    }

    .podcast-left {
        flex: 1 1 56%;
        max-width: 560px;
        position: relative;
        z-index: 2
    }

    .podcast-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 20px;
        margin-bottom: 16px;
        border-radius: 999px;
        background: rgba(255, 255, 255, .10);
        backdrop-filter: blur(10px) saturate(150%);
        -webkit-backdrop-filter: blur(10px) saturate(150%);
        border: 1px solid rgba(255, 255, 255, .22);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .22), 0 8px 24px rgba(35, 12, 88, .08);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .03em;
        text-transform: uppercase;
    }

    .podcast-badge-text {
        display: inline-block;
        background: linear-gradient(90deg, #2FA8A1 0%, #5A2EA6 25%, #2FA8A1 50%, #5A2EA6 75%, #2FA8A1 100%);
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
            background-position: 0% 50%
        }

        to {
            background-position: 200% 50%
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
            transform: scale(1)
        }

        50% {
            opacity: .45;
            transform: scale(.85)
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
            transform: translateY(-7px) rotate(1.5deg)
        }
    }

    @keyframes flt3 {
        0% {
            transform: translateY(0) rotate(1deg)
        }

        100% {
            transform: translateY(-6px) rotate(-1.5deg)
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

    @keyframes shimmer {
        0% {
            left: -60%
        }

        100% {
            left: 130%
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

    @keyframes graphline {
        0% {
            stroke-dashoffset: 300
        }

        100% {
            stroke-dashoffset: 0
        }
    }

    .seo-visual-wrap {
        position: relative;
        width: 360px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    @media(max-width:1200px) {
        .podcast-hero {
            min-height: 500px;
            padding: 86px 28px 18px
        }

        .podcast-glass-card {
            min-height: 255px;
            padding: 24px
        }

        .seo-visual-wrap {
            transform: scale(.9)
        }
    }

    @media(max-width:1024px) {
        .podcast-banner-root {
            min-height: 390px
        }

        .podcast-hero {
            min-height: 390px;
            padding: 180px 20px 12px
        }

        .podcast-glass-card {
            margin-top: 30px;
            margin-bottom: 20px;
            min-height: 220px;
            border-radius: 24px;
            gap: 28px;
            padding: 22px 20px
        }

        .podcast-left {
            flex: 0 0 56%;
            max-width: 56%
        }

        .podcast-badge {
            padding: 8px 14px;
            font-size: 8px;
            margin-bottom: 0
        }

        .podcast-badge-dot {
            width: 6px;
            height: 6px
        }

        .podcast-title {
            font-size: 27px;
            margin-bottom: 10px;
            margin-top: 12px;
            line-height: .95;
            letter-spacing: -.04em
        }

        .podcast-sub {
            max-width: 310px;
            min-height: 62px;
            font-size: 11px;
            line-height: 1.42
        }

        .podcast-right {
            flex: 0 0 44%;
            max-width: 44%;
            min-width: 0;
            justify-content: center
        }

        .seo-visual-wrap {
            width: 280px;
            height: 210px;
            transform: scale(.82)
        }
    }

    @media(max-width:767px) {
        .podcast-banner-root {
            min-height: auto !important;
            padding-top: 18px !important
        }

        .podcast-hero {
            min-height: auto !important;
            padding: 140px 16px 35px !important
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
            border-radius: 22px
        }

        .podcast-left,
        .podcast-right {
            width: 100%;
            max-width: 100%;
            min-width: 100%
        }

        .podcast-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center
        }

        .podcast-badge {
            padding: 8px 14px;
            font-size: 9px;
            margin-bottom: 10px;
            justify-content: center
        }

        .podcast-title {
            font-size: 32px;
            line-height: .98;
            margin-bottom: 10px;
            letter-spacing: -.04em;
            text-align: center
        }

        .podcast-sub {
            max-width: 255px;
            min-height: auto;
            font-size: 13px;
            line-height: 1.45;
            text-align: center
        }

        .podcast-right {
            display: none
        }
    }

    @media(max-width:480px) {
        .podcast-banner-root {
            padding-top: 24px !important
        }

        .podcast-hero {
            padding: 140px 14px 20px !important;
            min-height: auto !important
        }

        .podcast-glass-card {
            margin-top: 50px !important;
            margin-bottom: 20px !important;
            padding: 22px 16px 24px !important;
            gap: 12px
        }

        .podcast-badge {
            font-size: 8px;
            padding: 7px 12px;
            margin-bottom: 8px
        }

        .podcast-title {
            font-size: 28px;
            margin-bottom: 8px
        }

        .podcast-sub {
            max-width: 240px;
            font-size: 11px;
            line-height: 1.42
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

                <h1 class="podcast-title">SEO</h1>

                <p class="podcast-sub">
                    Rank higher, get found faster. We build SEO strategies that improve visibility, organic traffic, and long-term business growth.
                </p>
            </div>

            <div class="podcast-right">
                <div class="seo-visual-wrap">

                    <div style="position:absolute;top:8px;left:8px;width:210px;height:180px;background:rgba(255,255,255,0.28);border-radius:16px;transform:rotate(4deg);border:1px solid rgba(255,255,255,0.35);"></div>
                    <div style="position:absolute;top:4px;left:4px;width:210px;height:180px;background:rgba(255,255,255,0.35);border-radius:16px;transform:rotate(-2deg);border:1px solid rgba(255,255,255,0.4);"></div>

                    <div style="position:absolute;top:0;left:0;width:218px;height:188px;background:linear-gradient(170deg,rgba(255,255,255,0.97),rgba(240,235,255,0.93));border-radius:16px;border:1px solid rgba(196,181,253,0.55);box-shadow:0 12px 36px rgba(76,29,149,0.25);z-index:4;overflow:hidden;animation:flt 3.4s ease-in-out infinite alternate;">
                        <div style="height:26px;background:linear-gradient(90deg,#1a0533,#2d1065);display:flex;align-items:center;padding:0 10px;gap:6px;">
                            <div style="width:6px;height:6px;border-radius:50%;background:#ef4444;"></div>
                            <div style="width:6px;height:6px;border-radius:50%;background:#f59e0b;"></div>
                            <div style="width:6px;height:6px;border-radius:50%;background:#22c55e;"></div>
                            <div style="flex:1;display:flex;align-items:center;justify-content:center;gap:4px;">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                    <circle cx="3.5" cy="3.5" r="2.5" stroke="rgba(255,255,255,0.6)" stroke-width=".7" fill="none" />
                                    <path d="M5.5 5.5L7.5 7.5" stroke="rgba(255,255,255,0.6)" stroke-width=".8" stroke-linecap="round" />
                                </svg>
                                <span style="font-size:7px;color:rgba(255,255,255,0.6);font-family:monospace;">search console · analytics</span>
                            </div>
                        </div>

                        <div style="padding:10px;">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                <div style="font-size:8px;font-weight:800;color:#1a0533;letter-spacing:.04em;">KEYWORD RANKINGS</div>
                                <div style="background:rgba(34,197,94,0.15);border:1px solid rgba(34,197,94,0.3);border-radius:50px;padding:2px 7px;font-size:7px;font-weight:700;color:#16a34a;">↑ +24 this week</div>
                            </div>

                            <div style="display:flex;flex-direction:column;gap:5px;margin-bottom:10px;">
                                <div style="display:flex;align-items:center;gap:6px;">
                                    <div style="width:16px;height:16px;border-radius:4px;background:linear-gradient(135deg,#f59e0b,#d97706);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                        <span style="font-size:7px;font-weight:800;color:white;">#1</span>
                                    </div>
                                    <div style="flex:1;">
                                        <div style="font-size:7.5px;font-weight:700;color:#1a0533;margin-bottom:2px;">digital studio delhi</div>
                                        <div style="height:4px;background:rgba(196,181,253,0.2);border-radius:2px;overflow:hidden;">
                                            <div style="height:100%;width:96%;background:linear-gradient(90deg,#22c55e,#06b6d4);border-radius:2px;"></div>
                                        </div>
                                    </div>
                                    <div style="font-size:7.5px;font-weight:800;color:#22c55e;flex-shrink:0;">96</div>
                                </div>

                                <div style="display:flex;align-items:center;gap:6px;">
                                    <div style="width:16px;height:16px;border-radius:4px;background:linear-gradient(135deg,#7c3aed,#4c1d95);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                        <span style="font-size:7px;font-weight:800;color:white;">#2</span>
                                    </div>
                                    <div style="flex:1;">
                                        <div style="font-size:7.5px;font-weight:700;color:#1a0533;margin-bottom:2px;">podcast production india</div>
                                        <div style="height:4px;background:rgba(196,181,253,0.2);border-radius:2px;overflow:hidden;">
                                            <div style="height:100%;width:84%;background:linear-gradient(90deg,#7c3aed,#06b6d4);border-radius:2px;"></div>
                                        </div>
                                    </div>
                                    <div style="font-size:7.5px;font-weight:800;color:#7c3aed;flex-shrink:0;">84</div>
                                </div>

                                <div style="display:flex;align-items:center;gap:6px;">
                                    <div style="width:16px;height:16px;border-radius:4px;background:linear-gradient(135deg,#06b6d4,#0891b2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                        <span style="font-size:7px;font-weight:800;color:white;">#3</span>
                                    </div>
                                    <div style="flex:1;">
                                        <div style="font-size:7.5px;font-weight:700;color:#1a0533;margin-bottom:2px;">video editing agency</div>
                                        <div style="height:4px;background:rgba(196,181,253,0.2);border-radius:2px;overflow:hidden;">
                                            <div style="height:100%;width:72%;background:linear-gradient(90deg,#06b6d4,#22c55e);border-radius:2px;"></div>
                                        </div>
                                    </div>
                                    <div style="font-size:7.5px;font-weight:800;color:#06b6d4;flex-shrink:0;">72</div>
                                </div>
                            </div>

                            <div style="background:rgba(76,29,149,0.05);border-radius:8px;padding:7px 8px;border:1px solid rgba(196,181,253,0.2);">
                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:5px;">
                                    <div style="font-size:7px;font-weight:700;color:#4c1d95;letter-spacing:.04em;">ORGANIC TRAFFIC</div>
                                    <div style="font-size:7px;font-weight:700;color:#22c55e;">↑ 142%</div>
                                </div>
                                <svg width="100%" height="36" viewBox="0 0 190 36" fill="none" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="tg-final-seo" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#7c3aed" stop-opacity=".35" />
                                            <stop offset="100%" stop-color="#7c3aed" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 34 C20 32, 35 28, 50 24 C65 20, 75 22, 90 18 C105 14, 115 16, 130 10 C145 4, 160 6, 190 2 L190 36 L0 36 Z" fill="url(#tg-final-seo)" />
                                    <path d="M0 34 C20 32, 35 28, 50 24 C65 20, 75 22, 90 18 C105 14, 115 16, 130 10 C145 4, 160 6, 190 2" stroke="#7c3aed" stroke-width="1.8" stroke-linecap="round" fill="none" stroke-dasharray="300" stroke-dashoffset="0" style="animation:graphline 2s ease-out forwards;" />
                                    <circle cx="190" cy="2" r="3" fill="#7c3aed" />
                                    <circle cx="190" cy="2" r="5" fill="rgba(124,58,237,0.25)" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div style="position:absolute;bottom:0;right:0;width:158px;z-index:6;background:rgba(255,255,255,0.95);border-radius:12px;border:1px solid rgba(196,181,253,0.5);padding:9px 11px;box-shadow:0 8px 24px rgba(76,29,149,0.2);animation:flt2 3s ease-in-out infinite alternate;">
                        <div style="display:flex;gap:2px;margin-bottom:6px;align-items:center;">
                            <div style="width:5px;height:5px;border-radius:50%;background:#4285F4;"></div>
                            <div style="width:5px;height:5px;border-radius:50%;background:#EA4335;"></div>
                            <div style="width:5px;height:5px;border-radius:50%;background:#FBBC05;"></div>
                            <div style="width:5px;height:5px;border-radius:50%;background:#34A853;"></div>
                            <span style="font-size:7px;font-weight:700;color:#6b7280;margin-left:3px;letter-spacing:.04em;">Search Results</span>
                        </div>

                        <div style="background:linear-gradient(90deg,rgba(124,58,237,0.08),rgba(124,58,237,0.04));border-left:2.5px solid #7c3aed;border-radius:0 6px 6px 0;padding:5px 7px;margin-bottom:5px;position:relative;overflow:hidden;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:2px;">
                                <div style="width:7px;height:7px;border-radius:50%;background:linear-gradient(135deg,#7c3aed,#06b6d4);flex-shrink:0;"></div>
                                <span style="font-size:6.5px;color:#4c1d95;font-weight:600;">minerdiastudio.com</span>
                            </div>
                            <div style="font-size:8px;font-weight:800;color:#1a0533;margin-bottom:2px;line-height:1.2;">Minerdia Studio – #1 Creative Agency</div>
                            <div style="height:2.5px;background:rgba(124,58,237,0.15);border-radius:1px;width:95%;margin-bottom:2px;"></div>
                            <div style="height:2.5px;background:rgba(124,58,237,0.1);border-radius:1px;width:70%;"></div>
                            <div style="position:absolute;top:5px;right:6px;background:#f59e0b;border-radius:4px;padding:1px 5px;font-size:7px;font-weight:800;color:white;">#1</div>
                            <div style="position:absolute;top:0;left:-40%;width:25%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.3),transparent);animation:shimmer 3s ease-in-out infinite;"></div>
                        </div>

                        <div style="padding:4px 7px;margin-bottom:4px;opacity:.5;">
                            <div style="height:2.5px;background:#e5e7eb;border-radius:1px;width:80%;margin-bottom:3px;"></div>
                            <div style="height:2px;background:#f3f4f6;border-radius:1px;width:60%;margin-bottom:2px;"></div>
                            <div style="height:2px;background:#f3f4f6;border-radius:1px;width:75%;"></div>
                        </div>

                        <div style="display:flex;align-items:center;gap:3px;margin-top:5px;padding:0 2px;">
                            <span style="color:#f59e0b;font-size:8px;">★★★★★</span>
                            <span style="font-size:7px;font-weight:700;color:#4c1d95;">4.9</span>
                            <span style="font-size:6.5px;color:#6b7280;">(200+ reviews)</span>
                        </div>
                    </div>

                    <div style="position:absolute;top:10px;right:0px;z-index:7;animation:flt3 2.6s ease-in-out infinite alternate;">
                        <div style="background:linear-gradient(135deg,#4c1d95,#7c3aed);border-radius:12px;padding:7px 11px;box-shadow:0 6px 18px rgba(76,29,149,0.45);">
                            <div style="font-size:7px;font-weight:600;color:rgba(196,181,253,0.8);letter-spacing:.08em;">RANKING ON</div>
                            <div style="font-size:16px;font-weight:800;color:white;line-height:1.1;">Page 1</div>
                            <div style="display:flex;align-items:center;gap:3px;margin-top:2px;">
                                <div style="width:5px;height:5px;border-radius:50%;background:#22c55e;animation:blink 1.5s ease-in-out infinite;"></div>
                                <span style="font-size:6.5px;color:rgba(196,181,253,0.8);">Google</span>
                            </div>
                        </div>
                    </div>

                    <div style="position:absolute;bottom:-4px;left:0;width:222px;overflow:hidden;z-index:5;">
                        <div style="display:flex;gap:0;width:max-content;animation:marquee 12s linear infinite;">
                            <div style="display:flex;gap:8px;padding:0 4px;white-space:nowrap;">
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">ON-PAGE SEO</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">BACKLINKS</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">TECHNICAL SEO</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">CONTENT</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">LOCAL SEO</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                            </div>
                            <div style="display:flex;gap:8px;padding:0 4px;white-space:nowrap;">
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">ON-PAGE SEO</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">BACKLINKS</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">TECHNICAL SEO</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">CONTENT</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                                <span style="font-size:7px;font-weight:700;color:rgba(76,29,149,0.45);letter-spacing:.05em;">LOCAL SEO</span>
                                <span style="color:rgba(196,181,253,0.4);font-size:7px;">·</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>