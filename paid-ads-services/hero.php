<style>

    .podcast-banner-root {
        font-family: var(--font-body);
        position: relative;
        width: 100%;
        min-height: 0;
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
        backdrop-filter: blur(10px) saturate(145%);
        -webkit-backdrop-filter: blur(10px) saturate(145%);
        border: 1px solid rgba(255, 255, 255, 0.24);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.20),
            inset 0 -1px 0 rgba(255, 255, 255, 0.04),
            0 18px 42px rgba(45, 16, 100, 0.12);
        overflow: hidden;
        box-sizing: border-box;
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

    /* LCP FIX TARGET */
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

    .ads-visual-wrap {
        position: relative;
        width: 360px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ads-glow-bg {
        position: absolute;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background:
            radial-gradient(circle, rgba(47, 168, 161, 0.16) 0%, rgba(90, 46, 166, 0.10) 45%, transparent 72%);
        filter: blur(10px);
        animation: adsGlowPulse 4s ease-in-out infinite;
    }

    @keyframes adsGlowPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: .85;
        }

        50% {
            transform: scale(1.06);
            opacity: .62;
        }
    }

    .ads-dashboard {
        position: relative;
        width: 325px;
        height: 190px;
        border-radius: 26px;
        background: linear-gradient(160deg, rgba(255, 255, 255, 0.84), rgba(255, 255, 255, 0.58));
        border: 1px solid rgba(255, 255, 255, 0.44);
        box-shadow:
            0 14px 28px rgba(72, 25, 130, 0.10),
            inset 0 1px 0 rgba(255, 255, 255, 0.60);
        overflow: hidden;
    }

    .ads-topbar {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        border-bottom: 1px solid rgba(90, 46, 166, .08);
        background: rgba(255, 255, 255, .18);
    }

    .ads-brand {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .ads-brand-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #2FA8A1;
        box-shadow: 0 0 8px rgba(47, 168, 161, .35);
    }

    .ads-brand-text {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .08em;
        color: #4a1d8c;
    }

    .ads-mini-tabs {
        display: flex;
        gap: 6px;
    }

    .ads-mini-tabs span {
        width: 28px;
        height: 8px;
        border-radius: 999px;
        background: linear-gradient(90deg, rgba(90, 46, 166, .18), rgba(47, 168, 161, .14));
    }

    .ads-content {
        position: absolute;
        inset: 42px 0 0 0;
        padding: 16px;
    }

    .ads-chart-area {
        position: absolute;
        left: 16px;
        top: 16px;
        width: 186px;
        height: 102px;
        border-radius: 18px;
        background: linear-gradient(180deg, rgba(90, 46, 166, 0.07), rgba(47, 168, 161, 0.04));
        border: 1px solid rgba(90, 46, 166, .05);
        overflow: hidden;
    }

    .ads-chart-grid {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(90, 46, 166, 0.045) 1px, transparent 1px),
            linear-gradient(90deg, rgba(90, 46, 166, 0.045) 1px, transparent 1px);
        background-size: 22px 22px;
    }

    .ads-chart-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
    }

    .line1 {
        stroke: #5A2EA6;
        stroke-width: 4;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 260;
        stroke-dashoffset: 260;
        animation: drawLine1 3.2s ease-in-out infinite;
    }

    .line2 {
        stroke: #2FA8A1;
        stroke-width: 4;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 260;
        stroke-dashoffset: 260;
        animation: drawLine2 3.2s ease-in-out infinite .4s;
    }

    @keyframes drawLine1 {
        0% {
            stroke-dashoffset: 260;
        }

        35%,
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes drawLine2 {

        0%,
        12% {
            stroke-dashoffset: 260;
        }

        48%,
        100% {
            stroke-dashoffset: 0;
        }
    }

    .ads-bars-row {
        position: absolute;
        left: 16px;
        bottom: 16px;
        width: 186px;
        height: 42px;
        display: flex;
        align-items: flex-end;
        gap: 8px;
    }

    .ads-bars-row span {
        flex: 1;
        border-radius: 10px 10px 4px 4px;
        background: linear-gradient(180deg, #2FA8A1, #5A2EA6);
        transform-origin: bottom;
        animation: barDance 1.4s ease-in-out infinite alternate;
    }

    .ads-bars-row span:nth-child(1) {
        height: 18px;
    }

    .ads-bars-row span:nth-child(2) {
        height: 28px;
        animation-delay: .12s;
    }

    .ads-bars-row span:nth-child(3) {
        height: 38px;
        animation-delay: .24s;
    }

    .ads-bars-row span:nth-child(4) {
        height: 24px;
        animation-delay: .08s;
    }

    .ads-bars-row span:nth-child(5) {
        height: 34px;
        animation-delay: .18s;
    }

    @keyframes barDance {
        0% {
            transform: scaleY(.78);
        }

        100% {
            transform: scaleY(1.08);
        }
    }

    .ads-right-stack {
        position: absolute;
        right: 12px;
        top: 16px;
        width: 96px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .ads-stat-card {
        width: 100%;
        min-height: 48px;
        border-radius: 16px;
        background: rgba(255, 255, 255, .88);
        border: 1px solid rgba(90, 46, 166, .05);
        box-shadow: 0 6px 14px rgba(90, 46, 166, .05);
        padding: 10px 10px 8px;
        position: relative;
        overflow: hidden;
    }

    .ads-stat-label {
        font-size: 8px;
        font-weight: 700;
        letter-spacing: .1em;
        color: rgba(90, 46, 166, .58);
        text-transform: uppercase;
        margin-bottom: 3px;
    }

    .ads-stat-value {
        font-size: 16px;
        line-height: 1;
        font-weight: 800;
        color: #34115d;
    }

    .ads-stat-growth {
        font-size: 9px;
        font-weight: 700;
        color: #2FA8A1;
        margin-top: 4px;
    }

    .ads-floating-chip {
        position: absolute;
        padding: 8px 12px;
        border-radius: 999px;
        background: rgba(255, 255, 255, .95);
        border: 1px solid rgba(255, 255, 255, .7);
        box-shadow: 0 8px 16px rgba(74, 22, 118, 0.08);
        display: flex;
        align-items: center;
        gap: 7px;
        z-index: 4;
        animation: chipFloat 3.4s ease-in-out infinite;
    }

    .ads-floating-chip .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .ads-floating-chip span {
        font-size: 10px;
        font-weight: 700;
        color: #4f1f8d;
        white-space: nowrap;
    }

    .chip-1 {
        top: 8px;
        left: -12px;
    }

    .chip-2 {
        top: 20px;
        right: -16px;
        animation-delay: .9s;
    }

    .chip-3 {
        bottom: 4px;
        left: -6px;
        animation-delay: 1.5s;
    }

    @keyframes chipFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-7px);
        }
    }

    .ads-conversion-pulse {
        position: absolute;
        right: 62px;
        bottom: 50px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #2FA8A1;
        box-shadow: 0 0 0 0 rgba(47, 168, 161, .30);
        animation: conversionPulse 1.8s ease-out infinite;
        z-index: 4;
    }

    @keyframes conversionPulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(47, 168, 161, .30);
        }

        70% {
            transform: scale(1.08);
            box-shadow: 0 0 0 10px rgba(47, 168, 161, 0);
        }

        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(47, 168, 161, 0);
        }
    }

    @media (max-width:1200px) {
        .podcast-hero {
            min-height: 0;
            padding: 115px 28px 40px;
        }

        .podcast-glass-card {
            min-height: 313px;
            padding: 24px 24px;
        }

        .ads-visual-wrap {
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

        .ads-visual-wrap {
            width: 280px;
            height: 210px;
            transform: scale(.82);
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
            max-width: 240px;
            font-size: 11px;
            line-height: 1.42;
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

                <h1 class="podcast-title">Paid Ads Services</h1>

                <p class="podcast-sub">
                    <strong>Paid Ads Services</strong> by Minerdia Studio help businesses generate quality leads through Google Ads, Meta Ads, and YouTube campaigns with higher ROI and scalable growth.
                </p>
            </div>

            <div class="podcast-right">
                <div class="ads-visual-wrap">
                    <div class="ads-glow-bg"></div>

                    <div class="ads-floating-chip chip-1">
                        <div class="dot" style="background:#2FA8A1;"></div>
                        <span>Live Campaigns</span>
                    </div>

                    <div class="ads-floating-chip chip-2">
                        <div class="dot" style="background:#5A2EA6;"></div>
                        <span>ROAS Boost</span>
                    </div>

                    <div class="ads-floating-chip chip-3">
                        <div class="dot" style="background:#2FA8A1;"></div>
                        <span>Better Leads</span>
                    </div>

                    <div class="ads-dashboard">
                        <div class="ads-topbar">
                            <div class="ads-brand">
                                <span class="ads-brand-dot"></span>
                                <span class="ads-brand-text">PAID ADS</span>
                            </div>
                            <div class="ads-mini-tabs">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="ads-content">
                            <div class="ads-chart-area">
                                <div class="ads-chart-grid"></div>
                                <svg class="ads-chart-svg" viewBox="0 0 176 102" preserveAspectRatio="none">
                                    <path class="line1" d="M8 74 C28 70, 38 56, 54 58 S86 68, 102 46 S130 20, 168 16"></path>
                                    <path class="line2" d="M8 82 C20 84, 34 72, 50 76 S82 82, 100 60 S132 42, 168 28"></path>
                                </svg>
                            </div>

                            <div class="ads-bars-row">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="ads-right-stack">
                                <div class="ads-stat-card">
                                    <div class="ads-stat-label">Clicks</div>
                                    <div class="ads-stat-value">24.8K</div>
                                    <div class="ads-stat-growth">+18.4%</div>
                                </div>

                                <div class="ads-stat-card">
                                    <div class="ads-stat-label">Leads</div>
                                    <div class="ads-stat-value">1.92K</div>
                                    <div class="ads-stat-growth">+31.2%</div>
                                </div>

                                <div class="ads-stat-card">
                                    <div class="ads-stat-label">ROAS</div>
                                    <div class="ads-stat-value">4.8X</div>
                                    <div class="ads-stat-growth">Optimized</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ads-conversion-pulse"></div>
                </div>
            </div>
        </div>
    </div>
</div>