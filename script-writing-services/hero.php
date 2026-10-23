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
        /* padding: 150px 42px 24px; */
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

    /* LCP-friendly paragraph */
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

    /* Scriptwriting visual */
    .script-visual-wrap {
        position: relative;
        width: 340px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .script-glow-1,
    .script-glow-2,
    .script-glow-3 {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(22px);
    }

    .script-glow-1 {
        width: 140px;
        height: 140px;
        background: rgba(90, 46, 166, .18);
        top: 22px;
        right: 38px;
    }

    .script-glow-2 {
        width: 100px;
        height: 100px;
        background: rgba(47, 168, 161, .16);
        bottom: 30px;
        left: 35px;
    }

    .script-glow-3 {
        width: 84px;
        height: 84px;
        background: rgba(255, 255, 255, .16);
        top: 72px;
        left: 92px;
    }

    .floating-paper {
        position: absolute;
        width: 62px;
        height: 76px;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.76);
        border: 1px solid rgba(255, 255, 255, 0.55);
        box-shadow: 0 12px 24px rgba(76, 29, 149, .10);
    }

    .floating-paper::before,
    .floating-paper::after {
        content: "";
        position: absolute;
        left: 12px;
        right: 12px;
        height: 4px;
        border-radius: 4px;
        background: #d7dff0;
    }

    .floating-paper::before {
        top: 18px;
    }

    .floating-paper::after {
        top: 30px;
    }

    .floating-paper .mini-line {
        position: absolute;
        left: 12px;
        right: 18px;
        height: 4px;
        border-radius: 4px;
        background: #e4e9f5;
    }

    .floating-paper.p1 {
        top: 16px;
        left: 28px;
        transform: rotate(-12deg);
        animation: paperFloat1 4s ease-in-out infinite;
    }

    .floating-paper.p2 {
        top: 24px;
        right: 26px;
        transform: rotate(12deg);
        animation: paperFloat2 4.6s ease-in-out infinite;
    }

    .floating-paper.p3 {
        bottom: 18px;
        right: 52px;
        transform: rotate(-10deg);
        animation: paperFloat3 4.2s ease-in-out infinite;
    }

    @keyframes paperFloat1 {

        0%,
        100% {
            transform: rotate(-12deg) translateY(0);
        }

        50% {
            transform: rotate(-8deg) translateY(-10px);
        }
    }

    @keyframes paperFloat2 {

        0%,
        100% {
            transform: rotate(12deg) translateY(0);
        }

        50% {
            transform: rotate(8deg) translateY(-12px);
        }
    }

    @keyframes paperFloat3 {

        0%,
        100% {
            transform: rotate(-10deg) translateY(0);
        }

        50% {
            transform: rotate(-6deg) translateY(-8px);
        }
    }

    .main-script-card {
        position: relative;
        width: 180px;
        height: 205px;
        border-radius: 26px;
        background: linear-gradient(145deg, #6d28d9, #4c1d95);
        border: 2px solid rgba(196, 181, 253, 0.42);
        box-shadow:
            0 16px 34px rgba(76, 29, 149, 0.26),
            0 6px 14px rgba(124, 58, 237, 0.18);
        overflow: hidden;
        z-index: 4;
        animation: cardHover 3.5s ease-in-out infinite;
    }

    @keyframes cardHover {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .main-script-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.18), transparent);
        border-radius: 26px 0 0 26px;
    }

    .script-inner {
        position: absolute;
        inset: 10px 10px 16px 10px;
        border-radius: 18px;
        background: linear-gradient(180deg, #f6f3ff 0%, #e8e0ff 100%);
        padding: 12px 12px 10px;
        overflow: hidden;
    }

    .script-chip {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 10px;
        border-radius: 999px;
        background: rgba(124, 58, 237, .10);
        border: 1px solid rgba(124, 58, 237, .14);
        margin-bottom: 10px;
    }

    .script-chip-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #2FA8A1;
        box-shadow: 0 0 8px rgba(47, 168, 161, .45);
    }

    .script-chip span {
        font-size: 9px;
        font-weight: 700;
        color: #5A2EA6;
    }

    .type-lines {
        position: relative;
    }

    .type-line {
        height: 5px;
        border-radius: 6px;
        background: #d8dff0;
        margin-bottom: 7px;
        position: relative;
        overflow: hidden;
    }

    .type-line::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 0;
        background: linear-gradient(90deg, #2FA8A1, #7c3aed);
        border-radius: 6px;
        animation: typingFill 2.8s ease-in-out infinite;
    }

    .type-line.l1 {
        width: 84%;
    }

    .type-line.l2 {
        width: 100%;
    }

    .type-line.l3 {
        width: 76%;
    }

    .type-line.l4 {
        width: 92%;
    }

    .type-line.l5 {
        width: 62%;
    }

    .type-line.l1::after {
        animation-delay: .15s;
    }

    .type-line.l2::after {
        animation-delay: .4s;
    }

    .type-line.l3::after {
        animation-delay: .7s;
    }

    .type-line.l4::after {
        animation-delay: 1s;
    }

    .type-line.l5::after {
        animation-delay: 1.3s;
    }

    @keyframes typingFill {
        0% {
            width: 0;
            opacity: .9;
        }

        55% {
            width: 100%;
            opacity: 1;
        }

        100% {
            width: 100%;
            opacity: .18;
        }
    }

    .scene-card {
        margin-top: 10px;
        padding: 10px 9px;
        border-radius: 12px;
        background: rgba(255, 255, 255, .86);
        box-shadow: 0 6px 18px rgba(76, 29, 149, .06);
        position: relative;
    }

    .scene-tag {
        width: 42px;
        height: 6px;
        border-radius: 6px;
        background: #7c3aed;
        margin-bottom: 7px;
    }

    .scene-txt {
        height: 4px;
        border-radius: 4px;
        background: #dde4f3;
        margin-bottom: 5px;
    }

    .scene-txt:last-child {
        margin-bottom: 0;
    }

    .writing-pen {
        position: absolute;
        right: -6px;
        bottom: 28px;
        width: 78px;
        height: 18px;
        transform: rotate(-28deg);
        z-index: 6;
        animation: penMove 2.6s ease-in-out infinite alternate;
    }

    @keyframes penMove {
        0% {
            transform: rotate(-28deg) translate(0, 0);
        }

        100% {
            transform: rotate(-28deg) translate(-8px, -4px);
        }
    }

    .pen-body {
        position: absolute;
        left: 0;
        top: 3px;
        width: 46px;
        height: 12px;
        border-radius: 12px;
        background: linear-gradient(90deg, #2FA8A1, #5A2EA6);
    }

    .pen-ring {
        position: absolute;
        left: 42px;
        top: 3px;
        width: 8px;
        height: 12px;
        background: #d8c8ff;
    }

    .pen-tip {
        position: absolute;
        left: 50px;
        top: 3px;
        width: 0;
        height: 0;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 14px solid #efd2ad;
    }

    .pen-point {
        position: absolute;
        left: 63px;
        top: 7px;
        width: 0;
        height: 0;
        border-top: 2px solid transparent;
        border-bottom: 2px solid transparent;
        border-left: 5px solid #2f1d18;
    }

    .spark {
        position: absolute;
        border-radius: 50%;
        animation: sparkMove 2.8s ease-in-out infinite;
    }

    .spark.s1 {
        width: 8px;
        height: 8px;
        background: #2FA8A1;
        top: 52px;
        right: 84px;
    }

    .spark.s2 {
        width: 6px;
        height: 6px;
        background: #ffffff;
        top: 84px;
        left: 72px;
        animation-delay: .6s;
    }

    .spark.s3 {
        width: 7px;
        height: 7px;
        background: #7c3aed;
        bottom: 52px;
        left: 44px;
        animation-delay: 1.1s;
    }

    @keyframes sparkMove {

        0%,
        100% {
            transform: translateY(0);
            opacity: .7;
        }

        50% {
            transform: translateY(-10px);
            opacity: 1;
        }
    }

    .stat-pill {
        position: absolute;
        background: rgba(255, 255, 255, 0.94);
        border: 1px solid rgba(196, 181, 253, 0.42);
        border-radius: 50px;
        padding: 5px 11px;
        display: flex;
        align-items: center;
        gap: 6px;
        z-index: 7;
        box-shadow: 0 8px 16px rgba(76, 29, 149, 0.08);
        animation: statFloat 3.2s ease-in-out infinite alternate;
    }

    .stat-pill span {
        font-size: 10px;
        font-weight: 700;
        color: #4c1d95;
        white-space: nowrap;
    }

    .stat-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    @keyframes statFloat {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-8px);
        }
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

        .script-visual-wrap {
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

        .script-visual-wrap {
            width: 270px;
            height: 210px;
            transform: scale(.75);
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

                <h1 class="podcast-title">Scriptwriting</h1>

                <p class="podcast-sub">
                    We write sharp, engaging, conversion-focused scripts for ads, reels, podcasts, and branded videos that turn ideas into memorable stories.
                </p>
            </div>

            <div class="podcast-right">
                <div class="script-visual-wrap">
                    <div class="script-glow-1"></div>
                    <div class="script-glow-2"></div>
                    <div class="script-glow-3"></div>

                    <div class="floating-paper p1">
                        <div class="mini-line" style="top:42px;"></div>
                        <div class="mini-line" style="top:54px; right:24px;"></div>
                    </div>

                    <div class="floating-paper p2">
                        <div class="mini-line" style="top:42px;"></div>
                        <div class="mini-line" style="top:54px; right:20px;"></div>
                    </div>

                    <div class="floating-paper p3">
                        <div class="mini-line" style="top:42px;"></div>
                        <div class="mini-line" style="top:54px; right:22px;"></div>
                    </div>

                    <div class="main-script-card">
                        <div class="script-inner">
                            <div class="script-chip">
                                <span class="script-chip-dot"></span>
                                <span>Script Draft</span>
                            </div>

                            <div class="type-lines">
                                <div class="type-line l1"></div>
                                <div class="type-line l2"></div>
                                <div class="type-line l3"></div>
                                <div class="type-line l4"></div>
                                <div class="type-line l5"></div>
                            </div>

                            <div class="scene-card">
                                <div class="scene-tag"></div>
                                <div class="scene-txt"></div>
                                <div class="scene-txt" style="width:88%;"></div>
                                <div class="scene-txt" style="width:67%;"></div>
                            </div>
                        </div>

                        <div class="writing-pen">
                            <div class="pen-body"></div>
                            <div class="pen-ring"></div>
                            <div class="pen-tip"></div>
                            <div class="pen-point"></div>
                        </div>
                    </div>

                    <div class="spark s1"></div>
                    <div class="spark s2"></div>
                    <div class="spark s3"></div>

                    <div class="stat-pill" style="top:12px; left:8px;">
                        <div class="stat-dot" style="background:#22c55e;"></div>
                        <span>Strong Hooks</span>
                    </div>

                    <div class="stat-pill" style="bottom:12px; left:0; animation-delay:.5s;">
                        <div class="stat-dot" style="background:#7c3aed;"></div>
                        <span>Better Storytelling</span>
                    </div>

                    <div class="stat-pill" style="top:14px; right:2px; animation-delay:1s;">
                        <div class="stat-dot" style="background:#f59e0b;"></div>
                        <span>Creative Flow</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>