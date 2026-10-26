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
        /* padding: 150px 42px 24px; */
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
        font-size: clamp(28px, 3.6vw, 46px);
        font-weight: 800;
        line-height: .96;
        letter-spacing: -.05em;
    }

    .podcast-sub {
        margin: 0;
        max-width: 460px;
        color: rgba(53, 24, 98, .72);
        font-size: 16px;
        line-height: 1.6;
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

    .webdev-visual {
        flex-shrink: 0;
        width: 268px;
        height: 252px;
        position: relative;
        display: flex;
        align-items: flex-start;
        justify-content: center;
    }

    .typing-wrap {
        font-family: monospace;
        font-size: 6.5px;
        line-height: 1.7;
    }

    .typing-line {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        width: 0;
    }

    .typing-line.line1 {
        animation: type1 6s steps(22) infinite;
    }

    .typing-line.line2 {
        animation: type2 6s steps(54) infinite;
    }

    .typing-line.line3 {
        animation: type3 6s steps(2) infinite;
    }

    .typing-cursor {
        display: inline-block;
        width: 2px;
        height: 9px;
        background: #7c3aed;
        margin-left: 1px;
        vertical-align: middle;
        animation: blink .8s step-end infinite;
    }

    @keyframes type1 {

        0%,
        5% {
            width: 0
        }

        18%,
        100% {
            width: 22ch
        }
    }

    @keyframes type2 {

        0%,
        20% {
            width: 0
        }

        52%,
        100% {
            width: 54ch
        }
    }

    @keyframes type3 {

        0%,
        54% {
            width: 0
        }

        60%,
        100% {
            width: 2ch
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

        .webdev-visual {
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

        .webdev-visual {
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
                    <span class="podcast-badge-text">Website Development Company</span>
                </div>

                <h1 class="podcast-title">Professional Website Development Services</h1>

                <p class="podcast-sub">
                    Minerdia Studio provides professional <strong>Website Development</strong> services to build fast, secure, mobile-friendly and SEO-ready websites that help businesses generate more leads, improve user experience and grow online.
                </p>
            </div>

            <div class="podcast-right">
                <div class="webdev-visual" aria-label="Website Development Services">

                    <div style="position:absolute;top:12px;left:12px;width:224px;height:190px;background:rgba(255,255,255,0.22);border-radius:14px;transform:rotate(4deg);border:1px solid rgba(255,255,255,0.3);"></div>
                    <div style="position:absolute;top:6px;left:6px;width:224px;height:190px;background:rgba(255,255,255,0.3);border-radius:14px;transform:rotate(-2deg);border:1px solid rgba(255,255,255,0.35);"></div>

                    <div style="position:relative;width:232px;height:196px;background:linear-gradient(170deg,rgba(255,255,255,0.97),rgba(240,235,255,0.93));border-radius:14px;border:1px solid rgba(196,181,253,0.55);box-shadow:0 12px 36px rgba(76,29,149,0.25);z-index:4;overflow:hidden;animation:flt 3.4s ease-in-out infinite alternate;">

                        <div style="height:28px;background:linear-gradient(90deg,#1a0533,#2d1065);display:flex;align-items:center;padding:0 10px;gap:5px;">
                            <div style="width:7px;height:7px;border-radius:50%;background:#ef4444;flex-shrink:0;"></div>
                            <div style="width:7px;height:7px;border-radius:50%;background:#f59e0b;flex-shrink:0;"></div>
                            <div style="width:7px;height:7px;border-radius:50%;background:#22c55e;flex-shrink:0;"></div>
                            <div style="flex:1;height:16px;background:rgba(255,255,255,0.1);border-radius:8px;margin:0 6px;display:flex;align-items:center;padding:0 8px;gap:4px;">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                    <path d="M4 1L1.5 2.5v2C1.5 6 2.7 7.2 4 7.5 5.3 7.2 6.5 6 6.5 4.5v-2L4 1z" stroke="rgba(255,255,255,0.6)" stroke-width=".7" fill="none" />
                                </svg>
                                <span style="font-size:7px;color:rgba(255,255,255,0.7);font-family:monospace;">minerdiastudio.com</span>
                            </div>
                            <div style="display:flex;align-items:center;gap:3px;">
                                <div style="width:5px;height:5px;border-radius:50%;background:#22c55e;animation:blink 1.5s ease-in-out infinite;"></div>
                                <span style="font-size:6.5px;color:rgba(255,255,255,0.6);font-weight:600;">LIVE</span>
                            </div>
                        </div>

                        <div style="display:flex;height:calc(100% - 28px);">
                            <div style="width:38px;background:rgba(76,29,149,0.06);border-right:1px solid rgba(196,181,253,0.2);padding:8px 5px;display:flex;flex-direction:column;gap:5px;">
                                <div style="width:28px;height:6px;background:linear-gradient(90deg,#7c3aed,#06b6d4);border-radius:3px;"></div>
                                <div style="height:1px;background:rgba(196,181,253,0.25);margin:3px 0;"></div>
                                <div style="width:22px;height:4px;background:rgba(124,58,237,0.25);border-radius:2px;"></div>
                                <div style="width:26px;height:4px;background:rgba(124,58,237,0.15);border-radius:2px;"></div>
                                <div style="width:20px;height:4px;background:rgba(124,58,237,0.2);border-radius:2px;"></div>
                                <div style="width:24px;height:4px;background:rgba(124,58,237,0.15);border-radius:2px;"></div>
                                <div style="width:18px;height:4px;background:rgba(124,58,237,0.12);border-radius:2px;"></div>
                                <div style="margin-top:auto;width:28px;height:20px;background:linear-gradient(135deg,#4c1d95,#7c3aed);border-radius:4px;display:flex;align-items:center;justify-content:center;">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M2 6h8M6 2l4 4-4 4" stroke="white" stroke-width=".9" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>

                            <div style="flex:1;padding:8px;position:relative;overflow:hidden;">
                                <div style="height:52px;background:linear-gradient(135deg,#4c1d95,#7c3aed,#06b6d4);border-radius:8px;margin-bottom:6px;position:relative;overflow:hidden;display:flex;align-items:center;padding:0 8px;gap:6px;">
                                    <div>
                                        <div style="height:5px;background:rgba(255,255,255,0.85);border-radius:3px;width:55px;margin-bottom:3px;"></div>
                                        <div style="height:3px;background:rgba(255,255,255,0.5);border-radius:2px;width:40px;"></div>
                                    </div>
                                    <div style="margin-left:auto;width:28px;height:20px;background:rgba(255,255,255,0.2);border-radius:4px;border:1px solid rgba(255,255,255,0.4);display:flex;align-items:center;justify-content:center;">
                                        <div style="width:10px;height:3px;background:white;border-radius:2px;"></div>
                                    </div>
                                    <div style="position:absolute;top:0;height:100%;width:20%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.12),transparent);animation:shimmer 3.5s ease-in-out infinite;left:-20%;"></div>
                                </div>

                                <div style="display:flex;gap:4px;margin-bottom:6px;">
                                    <div style="flex:1;height:30px;background:rgba(124,58,237,0.08);border-radius:5px;border:1px solid rgba(196,181,253,0.3);display:flex;align-items:center;padding:0 5px;gap:3px;">
                                        <div style="width:10px;height:10px;border-radius:3px;background:linear-gradient(135deg,#7c3aed,#06b6d4);flex-shrink:0;"></div>
                                        <div style="height:3px;background:rgba(124,58,237,0.3);border-radius:1px;width:80%;"></div>
                                    </div>
                                    <div style="flex:1;height:30px;background:rgba(6,182,212,0.08);border-radius:5px;border:1px solid rgba(6,182,212,0.2);display:flex;align-items:center;padding:0 5px;gap:3px;">
                                        <div style="width:10px;height:10px;border-radius:3px;background:linear-gradient(135deg,#06b6d4,#22c55e);flex-shrink:0;"></div>
                                        <div style="height:3px;background:rgba(6,182,212,0.3);border-radius:1px;width:75%;"></div>
                                    </div>
                                    <div style="flex:1;height:30px;background:rgba(236,72,153,0.07);border-radius:5px;border:1px solid rgba(236,72,153,0.18);display:flex;align-items:center;padding:0 5px;gap:3px;">
                                        <div style="width:10px;height:10px;border-radius:3px;background:linear-gradient(135deg,#ec4899,#9333ea);flex-shrink:0;"></div>
                                        <div style="height:3px;background:rgba(236,72,153,0.3);border-radius:1px;width:70%;"></div>
                                    </div>
                                </div>

                                <div style="background:#1a0533;border-radius:6px;padding:6px 8px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:5px;">
                                        <div style="width:5px;height:5px;border-radius:50%;background:#ef4444;"></div>
                                        <div style="width:5px;height:5px;border-radius:50%;background:#f59e0b;"></div>
                                        <div style="width:5px;height:5px;border-radius:50%;background:#22c55e;"></div>
                                        <div style="font-size:6px;color:rgba(196,181,253,0.5);margin-left:auto;font-family:monospace;">index.jsx</div>
                                    </div>

                                    <div class="typing-wrap">
                                        <span class="typing-line line1">
                                            <span style="color:#7c3aed;">const</span>
                                            <span style="color:#06b6d4;"> App</span>
                                            <span style="color:rgba(196,181,253,0.7);"> = () =&gt; {</span>
                                        </span>

                                        <span class="typing-line line2">
                                            <span style="color:rgba(196,181,253,0.5);">&nbsp;&nbsp;return</span>
                                            <span style="color:#ec4899;"> &lt;Hero</span>
                                            <span style="color:#f59e0b;"> brand</span>
                                            <span style="color:rgba(196,181,253,.7);">=</span>
                                            <span style="color:#22c55e;">"Minerdia"</span>
                                            <span style="color:#ec4899;"> /&gt;</span>
                                        </span>

                                        <span class="typing-line line3">
                                            <span style="color:rgba(196,181,253,0.7);">}</span>
                                        </span>
                                    </div>
                                </div>

                                <div style="margin-top:6px;display:flex;align-items:center;gap:5px;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <path d="M1 6l2-3 1.5 2L6 3l1.5 3" stroke="#22c55e" stroke-width=".8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                                    </svg>
                                    <span style="font-size:6.5px;font-weight:700;color:#22c55e;">Performance</span>
                                    <div style="flex:1;height:4px;background:rgba(196,181,253,0.2);border-radius:2px;overflow:hidden;">
                                        <div style="height:100%;width:94%;background:linear-gradient(90deg,#22c55e,#06b6d4);border-radius:2px;"></div>
                                    </div>
                                    <span style="font-size:6.5px;font-weight:800;color:#22c55e;">94</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="position:absolute;top:8px;right:0;z-index:7;animation:flt2 2.8s ease-in-out infinite alternate;">
                        <div style="background:rgba(255,255,255,0.92);border:1px solid rgba(196,181,253,0.5);border-radius:12px;padding:7px 10px;box-shadow:0 6px 18px rgba(76,29,149,0.2);">
                            <div style="font-size:7px;font-weight:700;color:#4c1d95;margin-bottom:4px;letter-spacing:.06em;">PAGE SPEED</div>
                            <div style="display:flex;align-items:baseline;gap:2px;">
                                <span style="font-size:22px;font-weight:800;color:#22c55e;line-height:1;">0.8</span>
                                <span style="font-size:9px;font-weight:600;color:#6b7280;">s load</span>
                            </div>
                            <div style="display:flex;align-items:center;gap:3px;margin-top:3px;">
                                <div style="width:5px;height:5px;border-radius:50%;background:#22c55e;"></div>
                                <span style="font-size:6.5px;font-weight:600;color:#22c55e;">Optimised</span>
                            </div>
                        </div>
                    </div>

                    <div style="position:absolute;bottom:46px;right:0;z-index:7;background:rgba(76,29,149,0.85);border-radius:50px;padding:6px 12px;display:flex;align-items:center;gap:6px;box-shadow:0 6px 18px rgba(76,29,149,0.4);animation:flt 3s ease-in-out infinite alternate;animation-delay:.5s;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <rect x="1" y="2" width="10" height="7" rx="1.2" stroke="white" stroke-width=".9" fill="none" />
                            <path d="M4 11h4M6 9v2" stroke="white" stroke-width=".9" stroke-linecap="round" />
                        </svg>
                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none">
                            <rect x="1" y="1" width="7" height="10" rx="1.5" stroke="rgba(255,255,255,0.7)" stroke-width=".9" fill="none" />
                            <circle cx="4.5" cy="9.5" r=".7" fill="rgba(255,255,255,0.6)" />
                        </svg>
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none">
                            <rect x=".5" y="1" width="6" height="10" rx="1.5" stroke="rgba(255,255,255,0.5)" stroke-width=".9" fill="none" />
                            <circle cx="3.5" cy="9.5" r=".6" fill="rgba(255,255,255,0.4)" />
                        </svg>
                        <span style="font-size:9px;font-weight:700;color:white;">Responsive</span>
                    </div>

                    <div style="position:absolute;bottom:10px;left:10px;z-index:7;background:rgba(255,255,255,0.9);border:1px solid rgba(196,181,253,0.5);border-radius:50px;padding:5px 11px;display:flex;align-items:center;gap:5px;animation:flt 2.7s ease-in-out infinite alternate;animation-delay:1s;">
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                            <circle cx="4.8" cy="4.8" r="3.3" stroke="#7c3aed" stroke-width="1" fill="none" />
                            <path d="M7.5 7.5L10 10" stroke="#7c3aed" stroke-width="1.1" stroke-linecap="round" />
                        </svg>
                        <span style="font-size:9px;font-weight:700;color:#4c1d95;">SEO Ready</span>
                    </div>

                    <div style="position:absolute;top:106px;right:0;z-index:7;background:linear-gradient(135deg,#22c55e,#16a34a);border-radius:50px;padding:5px 11px;display:flex;align-items:center;gap:5px;box-shadow:0 4px 14px rgba(34,197,94,0.4);animation:flt 3.2s ease-in-out infinite alternate;animation-delay:.3s;">
                        <div style="width:6px;height:6px;border-radius:50%;background:white;animation:blink 1.2s step-end infinite;"></div>
                        <span style="font-size:9px;font-weight:700;color:white;">Deployed ✓</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>