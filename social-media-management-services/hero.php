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
        font-size: clamp(28px, 3.8vw, 46px);
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

    /* Social visual */
    .social-visual-wrap {
        position: relative;
        width: 320px;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(.96);
    }

    .social-orbit {
        position: absolute;
        border-radius: 50%;
        border: 1px solid rgba(196, 181, 253, 0.28);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .social-orbit-1 {
        width: 140px;
        height: 140px;
        animation: socialSpin 12s linear infinite;
    }

    .social-orbit-2 {
        width: 210px;
        height: 210px;
        animation: socialSpin 18s linear infinite reverse;
    }

    @keyframes socialSpin {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    .social-node {
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 18px rgba(76, 29, 149, 0.10);
    }

    .social-float {
        animation: socialFloat 3s ease-in-out infinite alternate;
    }

    @keyframes socialFloat {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-8px);
        }
    }

    .social-like-pop {
        position: absolute;
        font-size: 10px;
        font-weight: 700;
        color: #7c3aed;
        animation: socialPopup 2.5s ease-in-out infinite;
        opacity: 0;
        white-space: nowrap;
    }

    @keyframes socialPopup {
        0% {
            opacity: 0;
            transform: translateY(0);
        }

        30% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            transform: translateY(-24px);
        }
    }

    .phone-wrap {
        position: relative;
        z-index: 4;
        width: 92px;
        height: 148px;
    }

    .phone-body {
        width: 92px;
        height: 148px;
        background: linear-gradient(145deg, #6d28d9, #4c1d95);
        border-radius: 18px;
        border: 2px solid rgba(196, 181, 253, 0.46);
        position: relative;
        overflow: hidden;
        box-shadow:
            0 12px 28px rgba(76, 29, 149, 0.30),
            0 4px 12px rgba(124, 58, 237, 0.18);
    }

    .phone-screen {
        margin: 8px 7px 7px;
        background: linear-gradient(160deg, #ede9fe, #ddd6fe);
        border-radius: 12px;
        height: 114px;
        overflow: hidden;
        position: relative;
    }

    .phone-post {
        background: white;
        border-radius: 7px;
        margin: 5px 4px;
        padding: 4px;
    }

    .phone-post.top {
        margin-bottom: 4px;
    }

    .phone-post-row {
        display: flex;
        align-items: center;
        gap: 3px;
        margin-bottom: 3px;
    }

    .phone-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    .phone-line {
        height: 3px;
        background: #e2e8f0;
        border-radius: 2px;
    }

    .phone-box-purple {
        height: 24px;
        background: linear-gradient(90deg, #ddd6fe, #c4b5fd);
        border-radius: 4px;
    }

    .phone-box-cyan {
        height: 18px;
        background: linear-gradient(90deg, #cffafe, #a5f3fc);
        border-radius: 4px;
    }

    .phone-mini-lines {
        display: flex;
        gap: 4px;
        margin-top: 3px;
    }

    .phone-homebar {
        width: 28px;
        height: 3px;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 2px;
        margin: 6px auto 0;
    }

    .phone-highlight {
        position: absolute;
        top: 0;
        left: 0;
        width: 12px;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.12), transparent);
        border-radius: 18px 0 0 18px;
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
        z-index: 5;
        box-shadow: 0 8px 16px rgba(76, 29, 149, 0.08);
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

    @media (max-width:1200px) {
        .podcast-hero {
            min-height: 500px;
            padding: 86px 28px 18px;
        }

        .podcast-glass-card {
            min-height: 255px;
            padding: 24px 24px;
        }

        .social-visual-wrap {
            width: 290px;
            height: 235px;
            transform: scale(.88);
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

        .social-visual-wrap {
            width: 250px;
            height: 205px;
            transform: scale(.74);
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

                <h1 class="podcast-title">Social Media Management Services</h1>

                <p class="podcast-sub">
                    We help businesses grow through strategic social media management. Our team creates engaging content, manages your accounts, and optimizes performance for better reach, engagement, and conversions.
                </p>
            </div>

            <div class="podcast-right">
                <div class="social-visual-wrap">

                    <div class="social-orbit social-orbit-1">
                        <div class="social-node" style="background:#e9d5ff;top:-15px;left:50%;transform:translateX(-50%);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="5" fill="#7c3aed"></rect>
                                <circle cx="12" cy="12" r="4" fill="white"></circle>
                                <circle cx="17" cy="7" r="1.5" fill="white"></circle>
                            </svg>
                        </div>

                        <div class="social-node" style="background:#dbeafe;top:50%;right:-15px;transform:translateY(-50%);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="4" fill="#1877f2"></rect>
                                <path d="M15 8h-1.5A1.5 1.5 0 0012 9.5V11h3l-.5 3H12v7H9v-7H7v-3h2V9.5A4.5 4.5 0 0113.5 5H15z" fill="white"></path>
                            </svg>
                        </div>

                        <div class="social-node" style="background:#fce7f3;bottom:-15px;left:50%;transform:translateX(-50%);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="4" fill="#ec4899"></rect>
                                <path d="M8 12h8M12 8v8" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </div>

                        <div class="social-node" style="background:#f3f4f6;top:50%;left:-15px;transform:translateY(-50%);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="4" fill="#111827"></rect>
                                <path d="M8 8h8v8H8z" fill="white"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="social-orbit social-orbit-2">
                        <div class="social-node" style="background:#fee2e2;top:8px;right:8px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="4" fill="#ef4444"></rect>
                                <polygon points="10,8 17,12 10,16" fill="white"></polygon>
                            </svg>
                        </div>

                        <div class="social-node" style="background:#dbeafe;bottom:8px;right:8px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="4" fill="#6366f1"></rect>
                                <circle cx="12" cy="12" r="4" fill="white"></circle>
                            </svg>
                        </div>

                        <div class="social-node" style="background:#e0f2fe;top:8px;left:8px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="4" fill="#3b82f6"></rect>
                                <path d="M8 12h8M12 8v8" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="phone-wrap">
                        <div class="phone-body">
                            <div class="phone-screen">
                                <div class="phone-post top">
                                    <div class="phone-post-row">
                                        <div class="phone-dot" style="background:#7c3aed;"></div>
                                        <div class="phone-line" style="width:30px;"></div>
                                    </div>
                                    <div class="phone-box-purple"></div>
                                    <div class="phone-mini-lines">
                                        <div class="phone-line" style="width:12px;"></div>
                                        <div class="phone-line" style="width:18px;"></div>
                                    </div>
                                </div>

                                <div class="phone-post">
                                    <div class="phone-post-row">
                                        <div class="phone-dot" style="background:#06b6d4;"></div>
                                        <div class="phone-line" style="width:24px;"></div>
                                    </div>
                                    <div class="phone-box-cyan"></div>
                                </div>

                                <div class="social-like-pop" style="bottom:10px;left:12px;animation-delay:0s;">♥ 142</div>
                                <div class="social-like-pop" style="bottom:10px;right:8px;animation-delay:1.2s;">↗ Share</div>
                            </div>

                            <div class="phone-homebar"></div>
                            <div class="phone-highlight"></div>
                        </div>
                    </div>

                    <div class="stat-pill social-float" style="top:18px;left:2px;">
                        <div class="stat-dot" style="background:#22c55e;"></div>
                        <span>+2.4k Reach</span>
                    </div>

                    <div class="stat-pill social-float" style="bottom:20px;left:0;animation-delay:.5s;">
                        <div class="stat-dot" style="background:#7c3aed;"></div>
                        <span>↑ 89% Engage</span>
                    </div>

                    <div class="stat-pill social-float" style="top:18px;right:0;animation-delay:1s;">
                        <div class="stat-dot" style="background:#f59e0b;"></div>
                        <span>★ 4.9 Rating</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>