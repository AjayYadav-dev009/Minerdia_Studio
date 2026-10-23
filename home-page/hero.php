<style>
    .banner-root {
        font-family: var(--font-body);
        position: relative;
        width: 100%;
        max-width: 100%;
        min-height: 600px;
        overflow: hidden;
        background: linear-gradient(90deg, #b8a6ff 0%, #8d58ff 45%, #5e21d3 100%);
        margin: 0;
    }

    .grid-overlay {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
        background-size: 64px 64px;
        pointer-events: none;
    }

    .noise-overlay {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 18% 30%, rgba(255, 255, 255, 0.14) 0%, transparent 34%),
            radial-gradient(circle at 70% 42%, rgba(255, 255, 255, 0.08) 0%, transparent 30%);
        pointer-events: none;
    }

    .hero {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 28px;
        /* width: 100%; */
        /* max-width: 100%; */
        /* min-height: 600px; */
        padding: 96px 42px 20px;
    }

    .hero-left {
        flex: 1 1 52%;
        max-width: 700px;
        min-width: 0;
        margin-top: 0;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 22px;
        margin-bottom: 16px;
        border-radius: 999px;
        position: relative;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.10);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border: 1px solid rgba(255, 255, 255, 0.22);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.24),
            0 8px 30px rgba(35, 12, 88, 0.18);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        max-width: 100%;
        transition: box-shadow 0.35s ease, background 0.35s ease, border-color 0.35s ease, transform 0.35s ease;
    }

    .badge::before {
        content: "";
        position: absolute;
        top: 0;
        left: -70%;
        width: 38%;
        height: 100%;
        background: linear-gradient(120deg,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 0.38),
                rgba(255, 255, 255, 0));
        transform: skewX(-22deg);
        transition: left 2.45s cubic-bezier(0.19, 1, 0.22, 1);
        pointer-events: none;
    }

    .badge:hover {
        background: rgba(255, 255, 255, 0.14);
        border-color: rgba(255, 255, 255, 0.30);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.32),
            0 12px 34px rgba(35, 12, 88, 0.24);
    }

    .badge:hover::before {
        left: 140%;
    }

    .badge-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #2FA8A1;
        flex-shrink: 0;
        animation: badgePulse 1.8s infinite;
        box-shadow: 0 0 10px rgba(47, 168, 161, 0.60);
    }

    .badge-text {
        display: inline-block;
        background: linear-gradient(90deg,
                #c8fffc 0%,
                #ffffff 25%,
                #c8fffc 50%,
                #ffffff 75%,
                #c8fffc 100%);
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

    @keyframes badgePulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.45;
            transform: scale(0.85);
        }
    }

    .hero-title {
        margin: 0 0 14px;
        color: #ffffff;
        font-size: clamp(34px, 5vw, 64px);
        font-weight: 700;
        line-height: 0.96;
        letter-spacing: -0.05em;
        max-width: 100%;
    }

    .hero-title .top-line,
    .hero-title .bottom-line {
        display: block;
    }

    .hero-title .top-line {
        display: flex;
        align-items: baseline;
        flex-wrap: wrap;
        gap: 10px;
    }

    .static-text {
        color: #ffffff;
    }

    .type-text {
        color: #000000;
        font-weight: 700;
        min-width: 4.4em;
        display: inline-block;
    }

    .hero-sub {
        margin: 0 0 22px;
        max-width: 640px;
        color: rgba(255, 255, 255, 0.88);
        font-size: 16px;
        line-height: 1.5;
        font-weight: 500;
    }

    .hero-btns {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
        margin-bottom: 14px;
    }

    .btn-primary,
    .btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none !important;
        border: none;
        border-radius: 999px;
        padding: 13px 30px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        isolation: isolate;
        transition: transform 0.3s ease, box-shadow 0.35s ease, filter 0.35s ease;
    }

    .btn-primary::before,
    .btn-secondary::before {
        content: "";
        position: absolute;
        top: 0;
        left: -70%;
        width: 38%;
        height: 100%;
        background: linear-gradient(120deg,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 0.19),
                rgba(255, 255, 255, 0));
        transform: skewX(-22deg);
        transition: left 1.45s cubic-bezier(0.19, 1, 0.22, 1);
        pointer-events: none;
        z-index: 1;
    }

    .btn-primary:hover::before,
    .btn-secondary:hover::before {
        left: 140%;
    }

    .btn-primary:hover,
    .btn-secondary:hover {
        transform: translateY(-2px);
    }

    .btn-primary,
    .btn-primary:visited,
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background: #5b22c7;
        color: #ffffff !important;
        text-decoration: none !important;
        box-shadow: 0 10px 24px rgba(91, 34, 199, 0.28);
    }

    .btn-primary:hover {
        box-shadow: 0 14px 32px rgba(91, 34, 199, 0.36);
        filter: brightness(1.03);
    }

    .btn-secondary,
    .btn-secondary:visited,
    .btn-secondary:hover,
    .btn-secondary:focus,
    .btn-secondary:active {
        background: #ffffff;
        color: #5b22c7 !important;
        text-decoration: none !important;
        box-shadow: 0 10px 24px rgba(255, 255, 255, 0.18);
    }

    .btn-secondary:hover {
        box-shadow: 0 14px 32px rgba(255, 255, 255, 0.24);
        filter: brightness(1.02);
    }

    .hero-stats {
        display: flex;
        align-items: stretch;
        gap: 22px;
        flex-wrap: wrap;
    }

    .hero-stat {
        display: flex;
        flex-direction: column;
        gap: 4px;
        min-width: 118px;
    }

    .hero-stat-num {
        color: #ffffff;
        font-size: 21px;
        font-weight: 750;
        line-height: 1;
        letter-spacing: -0.03em;
    }

    .hero-stat-label {
        color: rgba(255, 255, 255, 0.55);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        line-height: 1.15;
    }

    .hero-stat-divider {
        width: 1px;
        background: rgba(255, 255, 255, 0.14);
    }

    .hero-right {
        position: relative;
        flex: 1 1 48%;
        min-width: 320px;
        max-width: 540px;
        height: 470px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ring-wrap {
        position: relative;
        width: min(100%, 470px);
        height: min(100%, 470px);
    }

    .ring {
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        border: 2px solid rgba(255, 255, 255, 0.10);
    }

    .ring-1 {
        width: 270px;
        height: 270px;
    }

    .ring-2 {
        width: 344px;
        height: 344px;
    }

    .orb {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 244px;
        height: 244px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle at 35% 35%, rgba(181, 145, 255, 0.95), rgba(129, 72, 245, 0.95));
        box-shadow:
            0 0 0 2px rgba(255, 255, 255, 0.05),
            0 30px 100px rgba(36, 10, 89, 0.28);
        animation: floatOrb 4.2s ease-in-out infinite;
    }

    .orb-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 146px;
        height: 146px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle at 35% 35%, #e8b15b 0%, #d78eab 100%);
    }

    @keyframes floatOrb {

        0%,
        100% {
            transform: translate(-50%, -50%) translateY(0);
        }

        50% {
            transform: translate(-50%, -50%) translateY(-12px);
        }
    }

    .orbit {
        position: absolute;
        top: 50%;
        left: 50%;
        transform-origin: center center;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    .orbit-1 {
        width: 270px;
        height: 270px;
        margin-left: -135px;
        margin-top: -135px;
        animation: spinClockwise 10s linear infinite;
    }

    .orbit-2 {
        width: 344px;
        height: 344px;
        margin-left: -172px;
        margin-top: -172px;
        animation: spinAnti 14s linear infinite;
    }

    .orbit-dot {
        position: absolute;
        top: 50%;
        left: 100%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        box-shadow: 0 0 18px rgba(255, 255, 255, 0.14);
    }

    .dot-yellow {
        width: 17px;
        height: 17px;
        background: #f4bf24;
    }

    .dot-pink {
        width: 16px;
        height: 16px;
        background: #f472b6;
    }

    @keyframes spinClockwise {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spinAnti {
        from {
            transform: rotate(360deg);
        }

        to {
            transform: rotate(0deg);
        }
    }

    @media (max-width: 1200px) {
        .banner-root {
            min-height: 540px;
        }

        .hero {
            padding: 88px 28px 16px;
            min-height: 540px;
            gap: 20px;
        }

        .hero-right {
            height: 390px;
            max-width: 430px;
        }

        .ring-wrap {
            width: 390px;
            height: 390px;
        }

        .ring-1 {
            width: 230px;
            height: 230px;
        }

        .ring-2 {
            width: 288px;
            height: 288px;
        }

        .orbit-1 {
            width: 230px;
            height: 230px;
            margin-left: -115px;
            margin-top: -115px;
        }

        .orbit-2 {
            width: 288px;
            height: 288px;
            margin-left: -144px;
            margin-top: -144px;
        }

        .orb {
            width: 206px;
            height: 206px;
        }

        .orb-inner {
            width: 122px;
            height: 122px;
        }
    }

    @media (max-width: 1024px) {
        .banner-root {
            min-height: 390px;
        }

        .hero {
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
            padding: 50px 20px 0px;
            gap: 14px;
            min-height: 300px;
        }

        .hero-left {
            flex: 0 0 56%;
            max-width: 56%;
            min-width: 0;
            padding-top: 0;
            margin-top: 40px;
        }

        .badge {
            padding: 8px 14px;
            font-size: 8px;
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .badge-dot {
            width: 6px;
            height: 6px;
        }

        .hero-title {
            font-size: 27px;
            margin-bottom: 10px;
            margin-top: 12px;
            line-height: 0.95;
            letter-spacing: -0.04em;
        }

        .hero-title .top-line {
            gap: 3px;
            align-items: baseline;
        }

        .type-text {
            min-width: 2.7em;
        }

        .hero-sub {
            font-size: 11px;
            line-height: 1.42;
            margin-bottom: 10px;
            max-width: 100%;
        }

        .hero-btns {
            gap: 10px;
            margin-bottom: 8px;
        }

        .btn-primary,
        .btn-secondary {
            padding: 8px 16px;
            font-size: 10px;
            min-width: 94px;
        }

        .hero-stats {
            gap: 10px;
            flex-wrap: nowrap;
        }

        .hero-stat {
            min-width: 52px;
            gap: 2px;
        }

        .hero-stat-num {
            font-size: 12px;
        }

        .hero-stat-label {
            font-size: 7px;
            line-height: 1.05;
        }

        .hero-stat-divider {
            height: 28px;
            align-self: flex-end;
        }

        .hero-right {
            flex: 0 0 44%;
            max-width: 44%;
            min-width: 0;
            height: 200px;
            align-self: flex-start;
            justify-content: flex-start;
            margin-top: 18px;
            margin-bottom: 0;
        }

        .ring-wrap {
            width: 250px;
            height: 250px;
            margin-left: 0;
            margin-right: auto;
        }

        .ring-1 {
            width: 118px;
            height: 118px;
        }

        .ring-2 {
            width: 150px;
            height: 150px;
        }

        .orbit-1 {
            width: 118px;
            height: 118px;
            margin-left: -59px;
            margin-top: -59px;
        }

        .orbit-2 {
            width: 150px;
            height: 150px;
            margin-left: -75px;
            margin-top: -75px;
        }

        .orb {
            width: 120px;
            height: 120px;
        }

        .orb-inner {
            width: 70px;
            height: 70px;
        }

        .dot-yellow {
            width: 9px;
            height: 9px;
        }

        .dot-pink {
            width: 9px;
            height: 9px;
        }
    }

    @media (max-width: 767px) {
        .banner-root {
            min-height: auto !important;
        }

        .hero {
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            gap: 14px;
            min-height: auto !important;
            padding: 90px 16px 35px !important;
            text-align: center;
        }

        .hero-left,
        .hero-right {
            width: 100%;
            max-width: 100%;
            min-width: 100%;
        }

        .hero-left {
            margin-top: 80px !important;
            padding-top: 0 !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .badge {
            padding: 8px 14px;
            font-size: 9px;
            margin-bottom: 10px;
            justify-content: center;
        }

        .hero-title {
            font-size: 32px;
            line-height: 0.98;
            margin-bottom: 10px;
            letter-spacing: -0.04em;
            text-align: center;
        }

        .hero-title .top-line {
            justify-content: center;
            gap: 4px;
        }

        .hero-title .bottom-line {
            text-align: center;
        }

        .type-text {
            min-width: 2.9em;
        }

        .hero-sub {
            font-size: 13px;
            line-height: 1.45;
            margin-bottom: 14px;
            max-width: 100%;
            text-align: center;
        }

        .hero-btns {
            gap: 10px;
            margin-bottom: 12px;
            width: 100%;
            justify-content: center;
        }

        .btn-primary,
        .btn-secondary {
            padding: 10px 18px;
            font-size: 12px;
            min-width: 110px;
        }

        .hero-stats {
            gap: 12px;
            width: 100%;
            flex-wrap: nowrap;
            justify-content: center;
            margin-bottom: 0 !important;
        }

        .hero-stat {
            min-width: 70px;
            gap: 2px;
            align-items: center;
            text-align: center;
        }

        .hero-stat-num {
            font-size: 16px;
        }

        .hero-stat-label {
            font-size: 8px;
            line-height: 1.08;
            text-align: center;
        }

        .hero-stat-divider {
            height: 34px;
            align-self: center;
            display: block;
        }

        .hero-right {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .banner-root {
            min-height: auto !important;
        }

        .hero {
            min-height: auto !important;
            padding: 10px 14px 20px !important;
            gap: 12px;
        }

        .badge {
            font-size: 8px;
            padding: 7px 12px;
            margin-bottom: 8px;
        }

        .hero-title {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .hero-sub {
            font-size: 11px;
            line-height: 1.4;
            margin-bottom: 12px;
        }

        .hero-btns {
            gap: 10px;
            margin-bottom: 10px;
        }

        .btn-primary,
        .btn-secondary {
            min-width: 100px;
            padding: 9px 16px;
            font-size: 11px;
        }

        .hero-stats {
            gap: 10px;
            margin-bottom: 0 !important;
        }

        .hero-stat {
            min-width: 62px;
        }

        .hero-stat-num {
            font-size: 15px;
        }

        .hero-stat-label {
            font-size: 7px;
        }

        .hero-stat-divider {
            height: 30px;
        }
    }
</style>

<div class="banner-root">
    <div class="grid-overlay"></div>
    <div class="noise-overlay"></div>

    <div class="hero">
        <div class="hero-left">
            <div class="badge">
                <span class="badge-dot"></span>
                <span class="badge-text">Scale-Your-Brand</span>
            </div>

            <h1 class="hero-title">
                <span class="top-line">
                    <span class="static-text">We Build</span>
                    <span id="type-text" class="type-text"></span>
                </span>
                <span class="bottom-line">Digital Success</span>
            </h1>

            <p class="hero-sub">
                Minerdia Studio is a leading Digital Marketing Agency in Delhi helping businesses grow with SEO, website development, social media marketing, branding, content creation and performance marketing that delivers measurable results.
            </p>

            <div class="hero-btns">
                <a href="https://minerdiastudio.com/about-us" class="btn-primary">Know More</a>
                <a href="tel:+919711555223" class="btn-secondary">Call Now</a>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-num">1000+</span>
                    <span class="hero-stat-label">Projects</span>
                </div>

                <div class="hero-stat-divider"></div>

                <div class="hero-stat">
                    <span class="hero-stat-num">98%</span>
                    <span class="hero-stat-label">Satisfaction</span>
                </div>

                <div class="hero-stat-divider"></div>

                <div class="hero-stat">
                    <span class="hero-stat-num">8 yrs</span>
                    <span class="hero-stat-label">Experience</span>
                </div>
            </div>
        </div>

        <div class="hero-right">
            <div class="ring-wrap">
                <div class="ring ring-2"></div>
                <div class="ring ring-1"></div>

                <div class="orbit orbit-1">
                    <span class="orbit-dot dot-yellow"></span>
                </div>

                <div class="orbit orbit-2">
                    <span class="orbit-dot dot-pink"></span>
                </div>

                <div class="orb">
                    <div class="orb-inner"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        const words = ["Powerful", "Scalable", "Impactful", "Strong"];
        const el = document.getElementById("type-text");

        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeLoop() {
            const currentWord = words[wordIndex];

            if (!isDeleting) {
                charIndex++;
                el.textContent = currentWord.slice(0, charIndex);

                if (charIndex === currentWord.length) {
                    isDeleting = true;
                    setTimeout(typeLoop, 1200);
                    return;
                }

                setTimeout(typeLoop, 110);
            } else {
                charIndex--;
                el.textContent = currentWord.slice(0, charIndex);

                if (charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    setTimeout(typeLoop, 280);
                    return;
                }

                setTimeout(typeLoop, 55);
            }
        }

        typeLoop();
    })();
</script>