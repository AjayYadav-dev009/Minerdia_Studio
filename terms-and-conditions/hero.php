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

    /* DOCUMENT VISUAL */
    .doc-visual {
        position: relative;
        width: 272px;
        height: 248px;
        display: flex;
        align-items: center;
        justify-content: center;
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

    @keyframes stamp {
        0% {
            transform: rotate(-18deg) scale(0.5);
            opacity: 0
        }

        60% {
            transform: rotate(-18deg) scale(1.1);
            opacity: 1
        }

        100% {
            transform: rotate(-18deg) scale(1);
            opacity: 1
        }
    }

    @keyframes scanline {
        0% {
            top: 8px
        }

        100% {
            top: calc(100% - 8px)
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: .4;
            transform: translate(-50%, -50%) scale(1)
        }

        50% {
            opacity: .8;
            transform: translate(-50%, -50%) scale(1.06)
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
            left: 120%
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

        .doc-visual {
            transform: scale(.9);
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

        .doc-visual {
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
            padding: 120px 16px 35px !important;
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
            padding: 130px 14px 20px !important;
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

                <h1 class="podcast-title">Terms and Conditions</h1>

                <p class="podcast-sub">
                    We present policies, clauses, obligations, and agreement details in a clear, structured format that helps users understand important terms with confidence and transparency.
                </p>
            </div>

            <div class="podcast-right">
                <div class="doc-visual">

                    <div style="position:absolute;width:160px;height:160px;border-radius:50%;background:rgba(124,58,237,0.18);top:50%;left:50%;transform:translate(-50%,-50%);animation:pulse 3s ease-in-out infinite;filter:blur(20px);"></div>

                    <div style="position:absolute;top:18px;left:36px;width:148px;height:192px;background:rgba(255,255,255,0.28);border-radius:12px;transform:rotate(6deg);border:1px solid rgba(255,255,255,0.4);"></div>
                    <div style="position:absolute;top:10px;left:28px;width:148px;height:192px;background:rgba(255,255,255,0.38);border-radius:12px;transform:rotate(-4deg);border:1px solid rgba(255,255,255,0.45);"></div>

                    <div style="position:relative;width:156px;height:200px;background:linear-gradient(170deg,rgba(255,255,255,0.97),rgba(240,235,255,0.94));border-radius:12px;border:1px solid rgba(196,181,253,0.55);box-shadow:0 12px 36px rgba(76,29,149,0.25);z-index:4;overflow:hidden;animation:flt 3.4s ease-in-out infinite alternate;">

                        <div style="height:6px;background:linear-gradient(90deg,#4c1d95,#7c3aed,#06b6d4);"></div>

                        <div style="position:absolute;left:0;right:0;height:1.5px;background:linear-gradient(90deg,transparent,rgba(124,58,237,0.35),transparent);animation:scanline 3.5s ease-in-out infinite alternate;pointer-events:none;z-index:9;"></div>

                        <div style="padding:12px 14px 10px;">
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:10px;">
                                <div style="width:22px;height:22px;border-radius:6px;background:linear-gradient(135deg,#4c1d95,#7c3aed);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <rect x="2" y="1" width="8" height="10" rx="1.5" stroke="white" stroke-width=".9" fill="none" />
                                        <path d="M4 4h4M4 6h4M4 8h2.5" stroke="white" stroke-width=".8" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div>
                                    <div style="font-size:8px;font-weight:800;color:#1a0533;letter-spacing:.04em;">MINERDIA STUDIO</div>
                                    <div style="font-size:6.5px;color:#7c3aed;font-weight:600;">Terms &amp; Conditions</div>
                                </div>
                            </div>

                            <div style="display:flex;flex-direction:column;gap:7px;">

                                <div style="display:flex;align-items:flex-start;gap:6px;">
                                    <div style="width:13px;height:13px;border-radius:3px;background:#22c55e;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                            <path d="M1.5 4l2 2 3-3.5" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="font-size:7.5px;font-weight:700;color:#1a0533;margin-bottom:2px;">Service Agreement</div>
                                        <div style="height:2px;background:rgba(124,58,237,0.18);border-radius:1px;width:95%;margin-bottom:2px;"></div>
                                        <div style="height:2px;background:rgba(124,58,237,0.12);border-radius:1px;width:70%;"></div>
                                    </div>
                                </div>

                                <div style="display:flex;align-items:flex-start;gap:6px;">
                                    <div style="width:13px;height:13px;border-radius:3px;background:#22c55e;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                            <path d="M1.5 4l2 2 3-3.5" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="font-size:7.5px;font-weight:700;color:#1a0533;margin-bottom:2px;">Intellectual Property</div>
                                        <div style="height:2px;background:rgba(124,58,237,0.18);border-radius:1px;width:85%;margin-bottom:2px;"></div>
                                        <div style="height:2px;background:rgba(124,58,237,0.12);border-radius:1px;width:60%;"></div>
                                    </div>
                                </div>

                                <div style="display:flex;align-items:flex-start;gap:6px;">
                                    <div style="width:13px;height:13px;border-radius:3px;background:#22c55e;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                            <path d="M1.5 4l2 2 3-3.5" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div style="font-size:7.5px;font-weight:700;color:#1a0533;margin-bottom:2px;">Payment &amp; Refunds</div>
                                        <div style="height:2px;background:rgba(124,58,237,0.18);border-radius:1px;width:90%;margin-bottom:2px;"></div>
                                        <div style="height:2px;background:rgba(124,58,237,0.12);border-radius:1px;width:55%;"></div>
                                    </div>
                                </div>

                                <div style="display:flex;align-items:flex-start;gap:6px;">
                                    <div style="width:13px;height:13px;border-radius:3px;background:rgba(124,58,237,0.15);border:1.5px solid rgba(124,58,237,0.4);flex-shrink:0;margin-top:1px;"></div>
                                    <div>
                                        <div style="font-size:7.5px;font-weight:700;color:#6b7280;margin-bottom:2px;">Confidentiality<span style="display:inline-block;width:1.5px;height:8px;background:#7c3aed;margin-left:2px;vertical-align:middle;animation:blink .8s step-end infinite;"></span></div>
                                        <div style="height:2px;background:rgba(124,58,237,0.1);border-radius:1px;width:75%;margin-bottom:2px;"></div>
                                        <div style="height:2px;background:rgba(124,58,237,0.07);border-radius:1px;width:45%;"></div>
                                    </div>
                                </div>

                            </div>

                            <div style="height:1px;background:linear-gradient(90deg,transparent,rgba(124,58,237,0.25),transparent);margin:10px 0 8px;"></div>

                            <div style="display:flex;align-items:center;justify-content:space-between;">
                                <div>
                                    <div style="font-size:6px;font-weight:600;color:#9ca3af;letter-spacing:.06em;margin-bottom:3px;">SIGNATURE</div>
                                    <svg width="60" height="16" viewBox="0 0 60 16" fill="none">
                                        <path d="M4 12 C8 4, 12 14, 16 8 C20 2, 22 13, 28 9 C34 5, 36 12, 42 10 C46 9, 48 6, 52 8" stroke="#4c1d95" stroke-width="1.4" stroke-linecap="round" fill="none" opacity=".7" />
                                    </svg>
                                    <div style="height:1px;background:rgba(124,58,237,0.3);width:60px;"></div>
                                </div>
                                <div style="text-align:right;">
                                    <div style="font-size:6px;font-weight:600;color:#9ca3af;letter-spacing:.06em;margin-bottom:3px;">DATE</div>
                                    <div style="font-size:8px;font-weight:700;color:#4c1d95;">Apr 2025</div>
                                </div>
                            </div>
                        </div>

                        <div style="position:absolute;bottom:14px;right:10px;z-index:8;transform:rotate(-18deg);animation:stamp .6s .4s cubic-bezier(.36,.07,.19,.97) both;">
                            <div style="border:2.5px solid rgba(34,197,94,0.75);border-radius:6px;padding:3px 7px;text-align:center;">
                                <div style="font-size:9px;font-weight:800;color:rgba(34,197,94,0.85);letter-spacing:.12em;line-height:1.1;">APPROVED</div>
                                <div style="font-size:6px;font-weight:600;color:rgba(34,197,94,0.6);letter-spacing:.08em;">MINERDIA</div>
                            </div>
                        </div>

                        <div style="position:absolute;top:0;left:-60%;width:30%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.18),transparent);animation:shimmer 5s 1s ease-in-out infinite;pointer-events:none;"></div>
                    </div>

                    <div style="position:absolute;top:10px;right:6px;z-index:7;animation:flt2 2.8s ease-in-out infinite alternate;">
                        <div style="width:48px;height:52px;position:relative;display:flex;align-items:center;justify-content:center;">
                            <svg width="48" height="52" viewBox="0 0 48 52" fill="none" style="position:absolute;top:0;left:0;">
                                <path d="M24 2L4 10v16c0 12 9 22 20 24 11-2 20-12 20-24V10L24 2z" fill="rgba(76,29,149,0.85)" stroke="rgba(196,181,253,0.6)" stroke-width="1.5" />
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" style="position:relative;z-index:1;">
                                <path d="M11 4L5 7v5c0 5 3.5 9.5 6 11 2.5-1.5 6-6 6-11V7L11 4z" stroke="rgba(196,181,253,0.9)" stroke-width="1.2" fill="none" />
                                <path d="M8 11l2 2 4-4" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div style="text-align:center;margin-top:2px;">
                            <div style="font-size:7px;font-weight:800;color:#4c1d95;letter-spacing:.06em;">SECURED</div>
                        </div>
                    </div>

                    <div style="position:absolute;bottom:14px;right:4px;z-index:7;background:rgba(255,255,255,0.9);border:1px solid rgba(196,181,253,0.5);border-radius:50px;padding:5px 10px;display:flex;align-items:center;gap:5px;animation:flt 3s ease-in-out infinite alternate;animation-delay:.8s;">
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                            <circle cx="5.5" cy="5.5" r="4.5" stroke="#7c3aed" stroke-width="1" fill="none" />
                            <path d="M5.5 3v2.5l1.5 1" stroke="#7c3aed" stroke-width="1" stroke-linecap="round" />
                        </svg>
                        <span style="font-size:9px;font-weight:700;color:#4c1d95;">~5 min read</span>
                    </div>

                    <div style="position:absolute;top:14px;left:14px;z-index:7;background:linear-gradient(135deg,#4c1d95,#7c3aed);border-radius:6px;padding:4px 9px;animation:flt2 3.2s ease-in-out infinite alternate;">
                        <div style="font-size:7px;font-weight:600;color:rgba(196,181,253,0.8);letter-spacing:.08em;">VERSION</div>
                        <div style="font-size:13px;font-weight:800;color:white;line-height:1;">v 2.4</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>