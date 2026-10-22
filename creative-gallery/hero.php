<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

    .podcast-banner-root {
        font-family: 'Poppins', sans-serif;
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
        padding: 140px 42px 24px;
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

    /* GALLERY VISUAL */
    .gallery-visual {
        position: relative;
        width: 320px;
        height: 245px;
        overflow: hidden;
        border-radius: 14px;
    }

    @keyframes scrollLeft {
        0% {
            transform: translateX(0)
        }

        100% {
            transform: translateX(-50%)
        }
    }

    @keyframes scrollRight {
        0% {
            transform: translateX(-50%)
        }

        100% {
            transform: translateX(0)
        }
    }

    @keyframes flt {
        0% {
            transform: translateY(0)
        }

        100% {
            transform: translateY(-7px)
        }
    }

    @keyframes flt2 {
        0% {
            transform: translateY(0) rotate(-1deg)
        }

        100% {
            transform: translateY(-9px) rotate(1deg)
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

    .gallery-glow-1,
    .gallery-glow-2,
    .gallery-glow-3 {
        position: absolute;
        border-radius: 50%;
        filter: blur(42px);
        pointer-events: none;
    }

    .gallery-glow-1 {
        width: 180px;
        height: 180px;
        background: rgba(139, 92, 246, 0.24);
        top: -40px;
        right: 20px;
    }

    .gallery-glow-2 {
        width: 120px;
        height: 120px;
        background: rgba(196, 181, 253, 0.25);
        bottom: 0;
        left: -18px;
    }

    .gallery-glow-3 {
        width: 100px;
        height: 100px;
        background: rgba(6, 182, 212, 0.16);
        bottom: 24px;
        right: 90px;
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

        .gallery-visual {
            transform: scale(.9);
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

        .gallery-visual {
            width: 260px;
            height: 205px;
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

                <h1 class="podcast-title">Our Creative Gallery</h1>

                <p class="podcast-sub">
                    Explore our creative showcase featuring standout campaigns, brand visuals, cinematic edits, and high-impact digital work crafted to leave a lasting impression.
                </p>
            </div>

            <div class="podcast-right">
                <div class="gallery-visual">
                    <div class="gallery-glow-1"></div>
                    <div class="gallery-glow-2"></div>
                    <div class="gallery-glow-3"></div>

                    <!-- TOP FILM STRIP -->
                    <div style="position:absolute;top:0;left:0;width:100%;overflow:hidden;height:78px;">
                        <div style="display:flex;gap:0;width:max-content;animation:scrollLeft 14s linear infinite;">
                            <div style="display:flex;gap:0;">
                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#7c3aed 0%,#06b6d4 50%,#4c1d95 100%);border-radius:3px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <rect x="2" y="5" width="18" height="13" rx="2.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M14 11l-5 3V8l5 3z" fill="rgba(255,255,255,0.8)" />
                                        </svg>
                                        <div style="position:absolute;top:0;left:-40%;width:30%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.12),transparent);animation:shine 3s ease-in-out infinite;"></div>
                                    </div>
                                </div>

                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#ec4899,#9333ea,#7c3aed);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="7" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M8 11l2 2 4-4" stroke="rgba(255,255,255,0.9)" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#f59e0b,#ef4444,#ec4899);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <path d="M4 17L8 11l3 4 3-5 4 7H4z" stroke="rgba(255,255,255,0.8)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                            <circle cx="7" cy="7" r="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.1" fill="none" />
                                        </svg>
                                    </div>
                                </div>

                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#22c55e,#06b6d4);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <rect x="3" y="6" width="10" height="11" rx="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M13 9l6-3v10l-6-3" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" stroke-linejoin="round" fill="none" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div style="display:flex;gap:0;">
                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#7c3aed 0%,#06b6d4 50%,#4c1d95 100%);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <rect x="2" y="5" width="18" height="13" rx="2.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M14 11l-5 3V8l5 3z" fill="rgba(255,255,255,0.8)" />
                                        </svg></div>
                                </div>
                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#ec4899,#9333ea,#7c3aed);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="7" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M8 11l2 2 4-4" stroke="rgba(255,255,255,0.9)" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></div>
                                </div>
                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#f59e0b,#ef4444,#ec4899);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <path d="M4 17L8 11l3 4 3-5 4 7H4z" stroke="rgba(255,255,255,0.8)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                            <circle cx="7" cy="7" r="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.1" fill="none" />
                                        </svg></div>
                                </div>
                                <div style="width:84px;height:78px;background:#1a0533;border-right:2px solid #2d1065;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="position:absolute;right:3px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                        <div style="width:5px;height:5px;border-radius:1px;background:#0f0620;"></div>
                                    </div>
                                    <div style="margin:6px 12px;height:66px;background:linear-gradient(135deg,#22c55e,#06b6d4);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <rect x="3" y="6" width="10" height="11" rx="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M13 9l6-3v10l-6-3" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" stroke-linejoin="round" fill="none" />
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MIDDLE POLAROIDS -->
                    <div style="position:absolute;top:84px;left:0;right:0;display:flex;justify-content:center;align-items:flex-end;gap:8px;padding:0 6px;z-index:4;">
                        <div style="width:70px;flex-shrink:0;transform:rotate(-6deg) translateY(4px);animation:flt 3s ease-in-out infinite alternate;">
                            <div style="background:white;border-radius:4px;padding:5px 5px 14px;box-shadow:0 8px 24px rgba(76,29,149,0.25);">
                                <div style="height:58px;background:linear-gradient(135deg,#7c3aed,#c4b5fd,#06b6d4);border-radius:2px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" y="5" width="16" height="11" rx="2" stroke="rgba(255,255,255,0.8)" stroke-width="1.2" fill="none" />
                                        <circle cx="10" cy="10.5" r="3" stroke="rgba(255,255,255,0.8)" stroke-width="1.1" fill="none" />
                                        <circle cx="15" cy="7" r="1" fill="rgba(255,255,255,0.7)" />
                                    </svg>
                                    <div style="position:absolute;top:0;left:-40%;width:25%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.18),transparent);animation:shine 4s 1s ease-in-out infinite;"></div>
                                </div>
                                <div style="margin-top:6px;text-align:center;font-size:6.5px;font-weight:700;color:#4c1d95;letter-spacing:.05em;">BRAND FILM</div>
                            </div>
                        </div>

                        <div style="width:80px;flex-shrink:0;transform:rotate(2deg);z-index:5;animation:flt2 3.5s ease-in-out infinite alternate;">
                            <div style="background:white;border-radius:4px;padding:5px 5px 16px;box-shadow:0 12px 32px rgba(76,29,149,0.35);">
                                <div style="height:68px;background:linear-gradient(135deg,#4c1d95,#ec4899,#f59e0b);border-radius:2px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;">
                                    <div style="width:26px;height:26px;border-radius:50%;background:rgba(255,255,255,0.25);border:2px solid rgba(255,255,255,0.7);display:flex;align-items:center;justify-content:center;">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <path d="M3 2l6 3-6 3V2z" fill="white" />
                                        </svg>
                                    </div>
                                    <div style="position:absolute;top:0;left:-40%;width:25%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.18),transparent);animation:shine 4s ease-in-out infinite;"></div>
                                </div>
                                <div style="margin-top:7px;text-align:center;font-size:6.5px;font-weight:700;color:#4c1d95;letter-spacing:.05em;">AD CAMPAIGN</div>
                            </div>
                            <div style="width:8px;height:8px;border-radius:50%;background:#ef4444;margin:-4px auto 0;box-shadow:0 2px 6px rgba(239,68,68,0.5);"></div>
                        </div>

                        <div style="width:70px;flex-shrink:0;transform:rotate(5deg) translateY(6px);animation:flt 2.8s ease-in-out infinite alternate;animation-delay:.4s;">
                            <div style="background:white;border-radius:4px;padding:5px 5px 14px;box-shadow:0 8px 24px rgba(76,29,149,0.25);">
                                <div style="height:58px;background:linear-gradient(135deg,#22c55e,#06b6d4,#7c3aed);border-radius:2px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M4 15l4-5 3 3.5 2.5-4L17 15H4z" stroke="rgba(255,255,255,0.8)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                        <circle cx="6.5" cy="7" r="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.1" fill="none" />
                                    </svg>
                                    <div style="position:absolute;top:0;left:-40%;width:25%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.18),transparent);animation:shine 4s 2s ease-in-out infinite;"></div>
                                </div>
                                <div style="margin-top:6px;text-align:center;font-size:6.5px;font-weight:700;color:#4c1d95;letter-spacing:.05em;">SOCIAL MEDIA</div>
                            </div>
                        </div>
                    </div>

                    <!-- BOTTOM FILM STRIP -->
                    <div style="position:absolute;bottom:0;left:0;width:100%;overflow:hidden;height:72px;">
                        <div style="display:flex;gap:0;width:max-content;animation:scrollRight 18s linear infinite;">
                            <div style="display:flex;gap:0;">
                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#9333ea,#f59e0b);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M4 16V8l6-4 6 4v8H4z" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                            <rect x="7" y="11" width="6" height="5" rx="1" stroke="rgba(255,255,255,0.6)" stroke-width="1" fill="none" />
                                        </svg>
                                    </div>
                                </div>

                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#06b6d4,#7c3aed,#ec4899);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <circle cx="10" cy="9" r="3.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M4 17c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke="rgba(255,255,255,0.6)" stroke-width="1.2" stroke-linecap="round" fill="none" />
                                        </svg>
                                    </div>
                                </div>

                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#f59e0b,#22c55e,#06b6d4);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M10 3L3 8v9h14V8L10 3z" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                            <path d="M7 17V12h6v5" stroke="rgba(255,255,255,0.6)" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                                        </svg>
                                    </div>
                                </div>

                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#ec4899,#f59e0b,#22c55e);border-radius:3px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <rect x="3" y="4" width="14" height="12" rx="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M7 4V2M13 4V2M3 8h14" stroke="rgba(255,255,255,0.6)" stroke-width="1.1" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div style="display:flex;gap:0;">
                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#9333ea,#f59e0b);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M4 16V8l6-4 6 4v8H4z" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                            <rect x="7" y="11" width="6" height="5" rx="1" stroke="rgba(255,255,255,0.6)" stroke-width="1" fill="none" />
                                        </svg></div>
                                </div>
                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#06b6d4,#7c3aed,#ec4899);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <circle cx="10" cy="9" r="3.5" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M4 17c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke="rgba(255,255,255,0.6)" stroke-width="1.2" stroke-linecap="round" fill="none" />
                                        </svg></div>
                                </div>
                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#f59e0b,#22c55e,#06b6d4);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M10 3L3 8v9h14V8L10 3z" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" stroke-linejoin="round" />
                                            <path d="M7 17V12h6v5" stroke="rgba(255,255,255,0.6)" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                                        </svg></div>
                                </div>
                                <div style="width:76px;height:72px;background:#2d1065;border-right:2px solid #1a0533;flex-shrink:0;position:relative;overflow:hidden;">
                                    <div style="position:absolute;left:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="position:absolute;right:2px;top:0;bottom:0;display:flex;flex-direction:column;justify-content:space-evenly;">
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                        <div style="width:4px;height:4px;border-radius:1px;background:#1a0533;"></div>
                                    </div>
                                    <div style="margin:5px 10px;height:62px;background:linear-gradient(135deg,#ec4899,#f59e0b,#22c55e);border-radius:3px;display:flex;align-items:center;justify-content:center;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <rect x="3" y="4" width="14" height="12" rx="2" stroke="rgba(255,255,255,0.7)" stroke-width="1.2" fill="none" />
                                            <path d="M7 4V2M13 4V2M3 8h14" stroke="rgba(255,255,255,0.6)" stroke-width="1.1" stroke-linecap="round" />
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>