<style>

    .emx-banner-root {
        font-family: var(--font-body);
        position: relative;
        width: 100%;
        min-height: 520px;
        overflow: hidden;
        background:
            radial-gradient(circle at 14% 20%, rgba(255, 255, 255, 0.22) 0%, transparent 26%),
            radial-gradient(circle at 84% 24%, rgba(255, 255, 255, 0.12) 0%, transparent 20%),
            linear-gradient(135deg, #a78bfa 0%, #c4b5fd 24%, #e5dbff 45%, #d7c0ff 63%, #b58df1 82%, #8b5cf6 100%);
    }

    .emx-grid-overlay {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        background-size: 58px 58px;
        pointer-events: none;
    }

    .emx-noise-overlay {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 20% 70%, rgba(47, 168, 161, 0.08), transparent 22%),
            radial-gradient(circle at 80% 74%, rgba(90, 46, 166, 0.10), transparent 24%);
        pointer-events: none;
    }

    .emx-hero {
        position: relative;
        z-index: 2;
        min-height: 520px;
        /* padding: 150px 42px 24px; */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .emx-glass-card {
        width: 100%;
        max-width: 1140px;
        min-height: 290px;
        border-radius: 30px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 34px;
        padding: 28px 30px;
        background:
            linear-gradient(135deg, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0.06)),
            rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(18px) saturate(175%);
        -webkit-backdrop-filter: blur(18px) saturate(175%);
        border: 1px solid rgba(255, 255, 255, 0.24);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.24),
            inset 0 -1px 0 rgba(255, 255, 255, 0.06),
            0 24px 60px rgba(48, 19, 110, 0.17);
        overflow: hidden;
    }

    .emx-glass-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(125deg, rgba(255, 255, 255, 0.14), transparent 30%),
            radial-gradient(circle at 12% 18%, rgba(255, 255, 255, 0.08), transparent 24%);
        pointer-events: none;
    }

    .emx-left {
        flex: 1 1 54%;
        max-width: 560px;
        position: relative;
        z-index: 2;
    }

    .emx-badge {
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

    .emx-badge-text {
        display: inline-block;
        background: linear-gradient(90deg, #2FA8A1 0%, #5A2EA6 30%, #2FA8A1 60%, #5A2EA6 85%, #2FA8A1 100%);
        background-size: 200% 100%;
        background-position: 0% 50%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
        animation: emxGradientFlow 4.5s linear infinite;
    }

    @keyframes emxGradientFlow {
        from {
            background-position: 0% 50%;
        }

        to {
            background-position: 200% 50%;
        }
    }

    .emx-badge-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #2FA8A1;
        flex-shrink: 0;
        animation: emxPulse 1.8s infinite;
        box-shadow: 0 0 10px rgba(47, 168, 161, .60);
    }

    @keyframes emxPulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .45;
            transform: scale(.84);
        }
    }

    .emx-title {
        margin: 0 0 12px;
        color: #17032f;
        font-size: clamp(34px, 5vw, 64px);
        font-weight: 700;
        line-height: .96;
        letter-spacing: -.05em;
    }

    .emx-sub {
        margin: 0;
        max-width: 430px;
        color: rgba(53, 24, 98, .74);
        font-size: 15px;
        line-height: 1.7;
        font-weight: 500;
        text-align: justify;
        text-justify: inter-word;
        hyphens: auto;
        word-spacing: 0.01em;
        text-wrap: pretty;
    }

    .emx-right {
        flex: 1 1 46%;
        min-width: 280px;
        max-width: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 2;
    }

    .emx-scene {
        position: relative;
        width: 360px;
        height: 290px;
        transform: scale(.96);
    }

    .emx-glow-1,
    .emx-glow-2 {
        position: absolute;
        border-radius: 50%;
        filter: blur(28px);
        opacity: .56;
        pointer-events: none;
    }

    .emx-glow-1 {
        width: 140px;
        height: 140px;
        left: 20px;
        top: 26px;
        background: rgba(47, 168, 161, .28);
        animation: emxGlowA 5s ease-in-out infinite alternate;
    }

    .emx-glow-2 {
        width: 170px;
        height: 170px;
        right: 10px;
        bottom: 16px;
        background: rgba(90, 46, 166, .28);
        animation: emxGlowB 5.8s ease-in-out infinite alternate;
    }

    @keyframes emxGlowA {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(10px, -12px) scale(1.08);
        }
    }

    @keyframes emxGlowB {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(-12px, 10px) scale(1.06);
        }
    }

    .emx-laptop {
        position: absolute;
        left: 50%;
        top: 52%;
        width: 250px;
        height: 168px;
        transform: translate(-50%, -50%) perspective(1000px) rotateX(6deg) rotateY(-10deg);
        border-radius: 24px;
        background:
            linear-gradient(145deg, rgba(255, 255, 255, 0.30), rgba(255, 255, 255, 0.08)),
            rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.22);
        backdrop-filter: blur(18px) saturate(180%);
        -webkit-backdrop-filter: blur(18px) saturate(180%);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.24),
            0 22px 48px rgba(49, 19, 108, 0.18);
        overflow: hidden;
    }

    .emx-laptop::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, rgba(255, 255, 255, 0.14), transparent 34%);
        pointer-events: none;
    }

    .emx-screen-top {
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    }

    .emx-window-dots {
        display: flex;
        gap: 6px;
        align-items: center;
    }

    .emx-window-dots span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.78);
    }

    .emx-window-dots span:nth-child(2) {
        opacity: .68;
    }

    .emx-window-dots span:nth-child(3) {
        opacity: .48;
    }

    .emx-live-pill {
        padding: 5px 10px;
        border-radius: 999px;
        font-size: 10px;
        font-weight: 700;
        color: #fff;
        background: linear-gradient(90deg, #2FA8A1, #5A2EA6);
        box-shadow: 0 8px 16px rgba(90, 46, 166, .18);
    }

    .emx-screen-body {
        position: relative;
        padding: 16px;
        height: calc(100% - 42px);
    }

    .emx-header-line,
    .emx-text-line {
        position: relative;
        border-radius: 999px;
        overflow: hidden;
        background: linear-gradient(90deg, rgba(90, 46, 166, .16), rgba(47, 168, 161, .12));
    }

    .emx-header-line {
        width: 84%;
        height: 11px;
        margin-bottom: 10px;
    }

    .emx-text-line {
        height: 8px;
        margin-bottom: 8px;
    }

    .emx-text-line.t1 {
        width: 68%;
    }

    .emx-text-line.t2 {
        width: 76%;
    }

    .emx-text-line.t3 {
        width: 54%;
    }

    .emx-header-line::after,
    .emx-text-line::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 34%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .85), transparent);
        animation: emxSweep 2.2s linear infinite;
    }

    @keyframes emxSweep {
        0% {
            transform: translateX(-150%);
        }

        100% {
            transform: translateX(340%);
        }
    }

    .emx-stats-row {
        position: absolute;
        left: 16px;
        right: 16px;
        bottom: 16px;
        display: flex;
        align-items: flex-end;
        gap: 8px;
        height: 56px;
    }

    .emx-stat-bar {
        flex: 1;
        border-radius: 10px 10px 4px 4px;
        background: linear-gradient(180deg, rgba(47, 168, 161, .9), rgba(90, 46, 166, .86));
        box-shadow: 0 10px 18px rgba(90, 46, 166, .14);
        transform-origin: bottom;
        animation: emxBarPulse 1.9s ease-in-out infinite alternate;
    }

    .emx-stat-bar:nth-child(1) {
        height: 24px;
        animation-delay: 0s;
    }

    .emx-stat-bar:nth-child(2) {
        height: 42px;
        animation-delay: .18s;
    }

    .emx-stat-bar:nth-child(3) {
        height: 31px;
        animation-delay: .34s;
    }

    .emx-stat-bar:nth-child(4) {
        height: 48px;
        animation-delay: .5s;
    }

    .emx-stat-bar:nth-child(5) {
        height: 36px;
        animation-delay: .68s;
    }

    @keyframes emxBarPulse {
        0% {
            transform: scaleY(.88);
        }

        100% {
            transform: scaleY(1.08);
        }
    }

    .emx-laptop-base {
        position: absolute;
        left: 50%;
        bottom: 34px;
        width: 278px;
        height: 18px;
        transform: translateX(-50%);
        border-radius: 0 0 20px 20px;
        background: linear-gradient(180deg, rgba(255, 255, 255, .34), rgba(255, 255, 255, .12));
        box-shadow: 0 14px 28px rgba(49, 19, 108, 0.14);
    }

    .emx-laptop-base::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 4px;
        transform: translateX(-50%);
        width: 78px;
        height: 6px;
        border-radius: 999px;
        background: rgba(90, 46, 166, .22);
    }

    .emx-panel {
        position: absolute;
        width: 126px;
        padding: 12px 12px 10px;
        border-radius: 18px;
        background:
            linear-gradient(145deg, rgba(255, 255, 255, 0.34), rgba(255, 255, 255, 0.10)),
            rgba(255, 255, 255, 0.10);
        border: 1px solid rgba(255, 255, 255, 0.22);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        box-shadow: 0 14px 30px rgba(46, 17, 103, 0.16);
    }

    .emx-panel.left {
        left: -2px;
        top: 30px;
        transform: rotate(-8deg);
        animation: emxPanelLeft 4s ease-in-out infinite alternate;
    }

    .emx-panel.right {
        right: -2px;
        bottom: 20px;
        transform: rotate(8deg);
        animation: emxPanelRight 4.4s ease-in-out infinite alternate;
    }

    @keyframes emxPanelLeft {
        0% {
            transform: rotate(-8deg) translateY(0);
        }

        100% {
            transform: rotate(-4deg) translateY(-12px);
        }
    }

    @keyframes emxPanelRight {
        0% {
            transform: rotate(8deg) translateY(0);
        }

        100% {
            transform: rotate(4deg) translateY(-10px);
        }
    }

    .emx-panel-icon {
        width: 34px;
        height: 34px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #2FA8A1, #5A2EA6);
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        box-shadow: 0 10px 18px rgba(90, 46, 166, .20);
    }

    .emx-panel-line {
        height: 8px;
        border-radius: 999px;
        background: rgba(53, 24, 98, .12);
        margin-bottom: 7px;
        position: relative;
        overflow: hidden;
    }

    .emx-panel-line::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(47, 168, 161, .55), rgba(90, 46, 166, .32));
    }

    .emx-panel-line.full {
        width: 100%;
    }

    .emx-panel-line.mid {
        width: 82%;
    }

    .emx-panel-line.short {
        width: 62%;
    }

    .emx-flying-mail {
        position: absolute;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%, #ffffff 0%, #2FA8A1 34%, #5A2EA6 100%);
        box-shadow: 0 0 20px rgba(47, 168, 161, .45);
    }

    .emx-flying-mail.m1 {
        top: 88px;
        left: 88px;
        animation: emxMailPath1 3.3s linear infinite;
    }

    .emx-flying-mail.m2 {
        bottom: 78px;
        right: 92px;
        animation: emxMailPath2 3.8s linear infinite;
    }

    @keyframes emxMailPath1 {
        0% {
            transform: translate(0, 0) scale(.7);
            opacity: 0;
        }

        15% {
            opacity: 1;
        }

        58% {
            transform: translate(104px, 10px) scale(1);
        }

        100% {
            transform: translate(176px, 28px) scale(.7);
            opacity: 0;
        }
    }

    @keyframes emxMailPath2 {
        0% {
            transform: translate(0, 0) scale(.7);
            opacity: 0;
        }

        18% {
            opacity: 1;
        }

        62% {
            transform: translate(-88px, -16px) scale(1);
        }

        100% {
            transform: translate(-152px, -42px) scale(.66);
            opacity: 0;
        }
    }

    .emx-path-line {
        position: absolute;
        height: 2px;
        border-radius: 999px;
        background: linear-gradient(90deg, rgba(47, 168, 161, 0), rgba(47, 168, 161, .8), rgba(90, 46, 166, 0));
        opacity: .8;
    }

    .emx-path-line.p1 {
        width: 120px;
        left: 86px;
        top: 98px;
        transform: rotate(8deg);
    }

    .emx-path-line.p2 {
        width: 112px;
        right: 86px;
        bottom: 92px;
        transform: rotate(-16deg);
    }

    .emx-metric {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 12px;
        border-radius: 16px;
        background:
            linear-gradient(145deg, rgba(255, 255, 255, 0.28), rgba(255, 255, 255, 0.10)),
            rgba(255, 255, 255, 0.10);
        border: 1px solid rgba(255, 255, 255, 0.20);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 12px 24px rgba(49, 21, 108, 0.14);
        animation: emxMetricFloat 3.4s ease-in-out infinite alternate;
    }

    .emx-metric.top {
        top: 10px;
        right: 22px;
    }

    .emx-metric.bottom {
        bottom: 8px;
        left: 22px;
        animation-delay: .8s;
    }

    @keyframes emxMetricFloat {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-9px);
        }
    }

    .emx-metric-icon {
        width: 28px;
        height: 28px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #2FA8A1, #5A2EA6);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        box-shadow: 0 8px 16px rgba(90, 46, 166, .20);
    }

    .emx-metric-text {
        display: flex;
        flex-direction: column;
        line-height: 1;
    }

    .emx-metric-text strong {
        font-size: 13px;
        color: #25064d;
        font-weight: 700;
    }

    .emx-metric-text span {
        margin-top: 4px;
        font-size: 10px;
        color: rgba(53, 24, 98, .68);
        font-weight: 600;
    }

    .emx-float-dot {
        position: absolute;
        border-radius: 50%;
        background: #2FA8A1;
        box-shadow: 0 0 14px rgba(47, 168, 161, .45);
        animation: emxDotFloat 3s ease-in-out infinite alternate;
    }

    .emx-float-dot.d1 {
        width: 8px;
        height: 8px;
        top: 36px;
        left: 42px;
    }

    .emx-float-dot.d2 {
        width: 7px;
        height: 7px;
        top: 68px;
        right: 34px;
        animation-delay: .5s;
    }

    .emx-float-dot.d3 {
        width: 6px;
        height: 6px;
        bottom: 44px;
        left: 84px;
        animation-delay: 1s;
    }

    @keyframes emxDotFloat {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-12px);
        }
    }

    @media (max-width:1200px) {
        .emx-banner-root {
            min-height: 500px;
        }

        .emx-hero {
            min-height: 500px;
            padding: 78px 28px 18px;
        }

        .emx-glass-card {
            min-height: 260px;
            padding: 24px 24px;
        }

        .emx-scene {
            width: 315px;
            height: 255px;
            transform: scale(.88);
        }
    }

    @media (max-width:1024px) {
        .emx-banner-root {
            min-height: 390px;
        }

        .emx-hero {
            min-height: 390px;
            padding: 135px 20px 12px;
        }

        .emx-glass-card {
            margin-top: 30px;
            margin-bottom: 20px;
            min-height: 220px;
            border-radius: 24px;
            gap: 28px;
            padding: 22px 20px;
        }

        .emx-left {
            flex: 0 0 56%;
            max-width: 56%;
        }

        .emx-badge {
            padding: 8px 14px;
            font-size: 8px;
            margin-bottom: 0;
        }

        .emx-badge-dot {
            width: 6px;
            height: 6px;
        }

        .emx-title {
            font-size: 27px;
            margin-bottom: 10px;
            margin-top: 12px;
            line-height: .95;
            letter-spacing: -.04em;
        }

        .emx-sub {
            font-size: 12px;
            line-height: 1.6;
            max-width: 100%;
        }

        .emx-right {
            flex: 0 0 44%;
            max-width: 44%;
            min-width: 0;
            justify-content: center;
        }

        .emx-scene {
            width: 255px;
            height: 212px;
            transform: scale(.76);
        }
    }

    @media (max-width:767px) {
        .emx-banner-root {
            min-height: auto !important;
            padding-top: 18px !important;
        }

        .emx-hero {
            min-height: auto !important;
            padding: 82px 16px 35px !important;
        }

        .emx-glass-card {
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

        .emx-left,
        .emx-right {
            width: 100%;
            max-width: 100%;
            min-width: 100%;
        }

        .emx-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .emx-badge {
            padding: 8px 14px;
            font-size: 9px;
            margin-bottom: 10px;
            justify-content: center;
        }

        .emx-title {
            font-size: 32px;
            line-height: .98;
            margin-bottom: 10px;
            letter-spacing: -.04em;
            text-align: center;
        }

        .emx-sub {
            font-size: 13px;
            line-height: 1.5;
            max-width: 100%;
            text-align: center;
            text-justify: auto;
            hyphens: none;
        }

        .emx-right {
            display: none;
        }
    }

    @media (max-width:480px) {
        .emx-banner-root {
            padding-top: 24px !important;
        }

        .emx-hero {
            padding: 78px 14px 20px !important;
            min-height: auto !important;
        }

        .emx-glass-card {
            margin-top: 50px !important;
            margin-bottom: 20px !important;
            padding: 22px 16px 24px !important;
            gap: 12px;
        }

        .emx-badge {
            font-size: 8px;
            padding: 7px 12px;
            margin-bottom: 8px;
        }

        .emx-title {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .emx-sub {
            font-size: 11px;
            line-height: 1.45;
        }
    }
</style>

<div class="emx-banner-root">
    <div class="emx-grid-overlay"></div>
    <div class="emx-noise-overlay"></div>

    <div class="emx-hero">
        <div class="emx-glass-card">
            <div class="emx-left">
                <div class="emx-badge">
                    <span class="emx-badge-dot"></span>
                    <span class="emx-badge-text">MINERDIA STUDIO</span>
                </div>

                <h1 class="emx-title">Email Marketing</h1>

                <p class="emx-sub">
                    We create high-converting email campaigns that boost opens, clicks, leads, and customer loyalty with smart strategy and compelling content.
                </p>
            </div>

            <div class="emx-right">
                <div class="emx-scene">
                    <div class="emx-glow-1"></div>
                    <div class="emx-glow-2"></div>

                    <div class="emx-float-dot d1"></div>
                    <div class="emx-float-dot d2"></div>
                    <div class="emx-float-dot d3"></div>

                    <div class="emx-panel left">
                        <div class="emx-panel-icon">✉</div>
                        <div class="emx-panel-line full"></div>
                        <div class="emx-panel-line mid"></div>
                        <div class="emx-panel-line short"></div>
                    </div>

                    <div class="emx-laptop">
                        <div class="emx-screen-top">
                            <div class="emx-window-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="emx-live-pill">Campaign Live</div>
                        </div>

                        <div class="emx-screen-body">
                            <div class="emx-header-line"></div>
                            <div class="emx-text-line t1"></div>
                            <div class="emx-text-line t2"></div>
                            <div class="emx-text-line t3"></div>

                            <div class="emx-stats-row">
                                <div class="emx-stat-bar"></div>
                                <div class="emx-stat-bar"></div>
                                <div class="emx-stat-bar"></div>
                                <div class="emx-stat-bar"></div>
                                <div class="emx-stat-bar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="emx-laptop-base"></div>

                    <div class="emx-panel right">
                        <div class="emx-panel-icon">↗</div>
                        <div class="emx-panel-line full"></div>
                        <div class="emx-panel-line mid"></div>
                        <div class="emx-panel-line short"></div>
                    </div>

                    <div class="emx-path-line p1"></div>
                    <div class="emx-path-line p2"></div>

                    <div class="emx-flying-mail m1"></div>
                    <div class="emx-flying-mail m2"></div>

                    <div class="emx-metric top">
                        <div class="emx-metric-icon">38%</div>
                        <div class="emx-metric-text">
                            <strong>Open Rate</strong>
                            <span>Higher reach</span>
                        </div>
                    </div>

                    <div class="emx-metric bottom">
                        <div class="emx-metric-icon">CTR</div>
                        <div class="emx-metric-text">
                            <strong>More Clicks</strong>
                            <span>Better response</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>