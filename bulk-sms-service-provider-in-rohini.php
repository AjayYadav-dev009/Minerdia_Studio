<!-- KING DIGITAL | SERVICE PAGE HERO -->
<style>
    /* ==========================================
   KING DIGITAL | RESPONSIVE SERVICE HERO
    ========================================== */

    .king-service-banner,
    .king-service-banner * {
        box-sizing: border-box;
    }

    .king-service-banner {
        --king-orange: #ff6500;

        position: relative;
        isolation: isolate;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        min-height: 235px;
        padding: 35px 24px;
        overflow: hidden;

        background:
            radial-gradient(ellipse at 50% 40%,
                rgba(31, 57, 94, 0.65) 0%,
                transparent 62%),
            linear-gradient(115deg,
                #071326 0%,
                #102440 48%,
                #07152b 100%);

        font-family: Inter, Arial, Helvetica, sans-serif;
        text-align: center;
    }

    /* Subtle background glow */
    .king-banner-glow {
        position: absolute;
        z-index: -1;
        top: -100px;
        left: 22%;
        width: 56%;
        height: 360px;
        border-radius: 50%;
        background: rgba(60, 87, 128, 0.16);
        filter: blur(65px);
        pointer-events: none;
    }

    /* Diagonal background details */
    .king-banner-shape {
        position: absolute;
        z-index: -1;
        width: 172px;
        height: 575px;
        background: rgba(255, 255, 255, 0.018);
        transform: rotate(42deg);
        pointer-events: none;
    }

    .king-banner-shape-one {
        top: -145px;
        left: 10%;
    }

    .king-banner-shape-two {
        right: 8%;
        bottom: -240px;
        background: rgba(255, 255, 255, 0.025);
    }

    /* Main content */
    .king-banner-inner {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Liquid glass subtitle pill */
    .king-banner-subtitle-pill {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        max-width: 100%;
        margin: 0 0 18px;
        padding: 10px 19px;

        border: 1px solid rgba(255, 255, 255, 0.22);
        border-radius: 50px;

        background: linear-gradient(135deg,
                rgba(255, 255, 255, 0.15),
                rgba(255, 255, 255, 0.045));

        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, 0.13),
            0 5px 20px rgba(0, 0, 0, 0.12);

        -webkit-backdrop-filter: blur(14px) saturate(145%);
        backdrop-filter: blur(14px) saturate(145%);
    }

    /* Blinking orange dot */
    .king-banner-status-dot {
        position: relative;
        display: inline-block;
        flex: 0 0 8px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--king-orange);
        box-shadow: 0 0 9px rgba(255, 101, 0, 0.7);
        animation: king-status-blink 1.8s ease-in-out infinite;
    }

    .king-banner-status-dot::after {
        position: absolute;
        inset: -5px;
        content: "";
        border: 1px solid rgba(255, 101, 0, 0.42);
        border-radius: 50%;
        animation: king-status-pulse 1.8s ease-out infinite;
    }

    /* Subtitle text */
    .king-service-banner .king-banner-subtitle {
        margin: 0;
        padding: 0;
        color: #f0f4fc;
        font-family: inherit;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.5;
        letter-spacing: 0.1px;
        text-align: left;
    }

    /* Main SEO H1 */
    .king-service-banner h1 {
        width: 100%;
        max-width: 1150px;
        margin: 0;
        padding: 0;

        color: #ffffff;
        font-family: inherit;
        font-size: clamp(32px, 4.1vw, 49px);
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -1.3px;
        text-align: center;

        overflow-wrap: anywhere;
    }

    /* Orange heading highlight */
    .king-service-banner .king-title-highlight {
        color: var(--king-orange);
    }

    /* Tablet */
    @media (max-width: 1024px) {
        .king-service-banner {
            min-height: 215px;
            padding: 32px 24px;
        }

        .king-service-banner h1 {
            font-size: clamp(30px, 4.5vw, 42px);
            letter-spacing: -0.8px;
        }

        .king-banner-subtitle-pill {
            margin-bottom: 16px;
        }
    }

    /* Mobile */
    @media (max-width: 767px) {
        .king-service-banner {
            min-height: 0;
            padding: 34px 18px;
        }

        .king-service-banner h1 {
            max-width: 570px;
            font-size: clamp(28px, 6.5vw, 38px);
            line-height: 1.24;
            letter-spacing: -0.65px;
            overflow-wrap: normal;
            word-break: normal;
        }

        .king-banner-subtitle-pill {
            gap: 9px;
            margin-bottom: 15px;
            padding: 9px 15px;
        }

        .king-service-banner .king-banner-subtitle {
            font-size: 13px;
        }

        .king-banner-status-dot {
            flex-basis: 7px;
            width: 7px;
            height: 7px;
        }

        .king-banner-status-dot::after {
            inset: -4px;
        }

        .king-banner-shape-one {
            left: -85px;
        }

        .king-banner-shape-two {
            right: -100px;
        }
    }

    /* Small mobile */
    @media (max-width: 380px) {
        .king-service-banner {
            padding: 29px 14px;
        }

        .king-banner-subtitle-pill {
            gap: 8px;
            margin-bottom: 13px;
            padding: 8px 12px;
        }

        .king-service-banner .king-banner-subtitle {
            font-size: 12px;
        }

        .king-service-banner h1 {
            font-size: 26px;
            line-height: 1.25;
            letter-spacing: -0.45px;
        }
    }

    /* Very narrow mobile */
    @media (max-width: 320px) {
        .king-service-banner {
            padding-right: 10px;
            padding-left: 10px;
        }

        .king-service-banner h1 {
            font-size: 24px;
        }

        .king-banner-subtitle-pill {
            gap: 7px;
            padding-right: 10px;
            padding-left: 10px;
        }

        .king-service-banner .king-banner-subtitle {
            font-size: 11px;
        }
    }

    /* Animations */
    @keyframes king-status-blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.42;
        }
    }

    @keyframes king-status-pulse {
        0% {
            opacity: 0.65;
            transform: scale(0.75);
        }

        100% {
            opacity: 0;
            transform: scale(1.8);
        }
    }

    /* Accessibility */
    @media (prefers-reduced-motion: reduce) {

        .king-banner-status-dot,
        .king-banner-status-dot::after {
            animation: none;
        }
    }
</style>
<section class="king-service-banner" aria-labelledby="king-service-title">

    <!-- Background effects -->
    <div class="king-banner-glow" aria-hidden="true"></div>
    <div class="king-banner-shape king-banner-shape-one" aria-hidden="true"></div>
    <div class="king-banner-shape king-banner-shape-two" aria-hidden="true"></div>

    <div class="king-banner-inner">

        <!-- Liquid glass subtitle ABOVE the H1 -->
        <div class="king-banner-subtitle-pill">
            <span class="king-banner-status-dot" aria-hidden="true"></span>
            <p class="king-banner-subtitle">
                Reliable Bulk SMS Service Provider
            </p>
        </div>

        <!-- Single SEO H1 -->
        <h1 id="king-service-title">
            <span class="king-title-highlight">Bulk SMS</span>
            Company in Rohini
        </h1>

    </div>
</section>







<!-- KING DIGITAL | BULK SMS INTRODUCTION SECTION -->
<style>
    .kd-sms-intro,
    .kd-sms-intro * {
        box-sizing: border-box;
    }

    .kd-sms-intro {
        --kd-orange: #ff6500;
        --kd-navy: #0b1930;
        --kd-text: #505c6d;

        width: 100%;
        margin: 0;
        padding: 54px 28px 20px;
        background: #fff;
        font-family: Inter, Arial, Helvetica, sans-serif;
    }

    .kd-sms-intro-container {
        width: 100%;
        max-width: 1240px;
        margin: 0 auto;
        text-align: center;
    }

    .kd-sms-intro-label {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        margin: 0 0 15px;
        color: var(--kd-orange);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.6px;
        line-height: 1.5;
        text-transform: uppercase;
    }

    .kd-sms-intro-dot {
        width: 8px;
        height: 8px;
        flex: 0 0 8px;
        border-radius: 50%;
        background: var(--kd-orange);
    }

    .kd-sms-intro h2 {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto 22px;
        padding: 0;
        color: var(--kd-navy);
        font-family: inherit;
        font-size: clamp(30px, 3.2vw, 42px);
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: -0.8px;
        text-align: center;
    }

    .kd-sms-intro-content {
        width: 100%;
        max-width: 1160px;
        margin: 0 auto;
    }

    .kd-sms-intro-content p {
        width: 100%;
        margin: 0 0 15px;
        padding: 0;
        color: var(--kd-text);
        font-size: 16px;
        font-weight: 400;
        line-height: 1.85;
        text-align: center;
        overflow-wrap: normal;
        word-break: normal;
    }

    .kd-sms-intro-content p:last-child {
        margin: 22px 0 0;
        color: var(--kd-navy);
        font-weight: 700;
    }

    .kd-sms-intro-accent {
        width: 44px;
        height: 3px;
        margin: 25px auto 0;
        border-radius: 10px;
        background: var(--kd-orange);
    }

    @media (max-width: 768px) {
        .kd-sms-intro {
            padding: 43px 24px 18px;
        }

        .kd-sms-intro-container {
            max-width: 100%;
        }

        .kd-sms-intro h2 {
            margin-bottom: 19px;
            font-size: clamp(27px, 4.5vw, 34px);
            letter-spacing: -0.5px;
        }

        .kd-sms-intro-content p {
            font-size: 15px;
            line-height: 1.8;
        }
    }

    @media (max-width: 480px) {
        .kd-sms-intro {
            padding: 34px 18px 14px;
        }

        .kd-sms-intro-label {
            margin-bottom: 12px;
            font-size: 10px;
            letter-spacing: 1.2px;
        }

        .kd-sms-intro h2 {
            margin-bottom: 17px;
            font-size: 27px;
            line-height: 1.3;
            letter-spacing: -0.45px;
        }

        .kd-sms-intro-content p {
            margin-bottom: 14px;
            font-size: 14px;
            line-height: 1.8;
        }

        .kd-sms-intro-content p:last-child {
            margin-top: 18px;
        }

        .kd-sms-intro-accent {
            margin-top: 18px;
        }
    }
</style>
<section class="kd-sms-intro" aria-labelledby="kd-sms-intro-title">
    <div class="kd-sms-intro-container">

        <div class="kd-sms-intro-label">
            <span class="kd-sms-intro-dot"></span>
            <span>Reliable SMS Communication</span>
        </div>

        <h2 id="kd-sms-intro-title">Reliable Bulk SMS Service Provider</h2>

        <div class="kd-sms-intro-content">
            <p>Looking for a reliable Bulk SMS Company in Rohini to enhance your business marketing, reach out to your customers, and broadcast important updates immediately? King Digital offers bulk SMS solutions that can help organisations to reach their target audience through promotional SMS, transactional SMS, OTP SMS and automated notifications.</p>

            <p>Business growth needs to hit target audiences at the right time in today’s competitive business environment. Whether you are running a retail store, educational institute, hospital, real estate company, e-commerce business or a service based organization, SMS marketing can help you speak directly to your customers on their mobile phones.</p>

            <p>King Digital Provides Bulk SMS Solutions For Businesses In Rohini And Delhi At Large.</p>
        </div>

        <div class="kd-sms-intro-accent" aria-hidden="true"></div>

    </div>
</section>





<!-- KING DIGITAL | WHY CHOOSE OUR BULK SMS SERVICE -->
<section class="kd-sms-choose-section" aria-labelledby="kd-sms-choose-heading">
    <style>
        .kd-sms-choose-section,
        .kd-sms-choose-section * {
            box-sizing: border-box;
        }

        .kd-sms-choose-section {
            --kd-sms-orange: #ff6500;
            --kd-sms-navy: #0b1930;
            --kd-sms-body: #586477;

            width: 100%;
            margin: 0;
            padding: 0 18px 48px;
            background: #ffffff;
            color: var(--kd-sms-navy);
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Arial, sans-serif;
            overflow: hidden;
        }

        .kd-sms-choose-section .kd-sms-choose-container {
            width: 100%;
            max-width: 1360px;
            margin: 0 auto;
        }

        .kd-sms-choose-section .kd-sms-choose-grid {
            display: grid;
            grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.08fr);
            align-items: center;
            gap: 44px;
        }

        /* IMAGE */
        .kd-sms-choose-section .kd-sms-choose-visual {
            position: relative;
            min-width: 0;
            padding-bottom: 18px;
        }

        .kd-sms-choose-section .kd-sms-choose-image-wrap {
            width: 100%;
            height: 440px;
            overflow: hidden;
            border-radius: 13px;
            background: #f0f3f7;
        }

        .kd-sms-choose-section .kd-sms-choose-image {
            display: block;
            width: 100%;
            height: 100%;
            max-width: none;
            margin: 0;
            object-fit: cover;
            object-position: center;
            border: 0;
            outline: none;
            box-shadow: none;
        }

        /* IMAGE CAPTION */
        .kd-sms-choose-section .kd-sms-choose-image-note {
            position: absolute;
            left: 15px;
            right: -10px;
            bottom: 0;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 17px;
            background: #ffffff;
            border: 1px solid #edf0f5;
            border-radius: 10px;
            box-shadow: 0 7px 24px rgba(11, 25, 48, 0.10);
        }

        .kd-sms-choose-section .kd-sms-choose-note-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            color: var(--kd-sms-orange);
            background: #fff1e7;
            border-radius: 9px;
        }

        .kd-sms-choose-section .kd-sms-choose-note-icon svg {
            display: block;
            width: 23px;
            height: 23px;
        }

        .kd-sms-choose-section .kd-sms-choose-note-text {
            display: flex;
            flex-direction: column;
            min-width: 0;
            gap: 4px;
        }

        .kd-sms-choose-section .kd-sms-choose-note-text strong {
            color: var(--kd-sms-navy);
            font-size: 14px;
            font-weight: 750;
            line-height: 1.4;
        }

        .kd-sms-choose-section .kd-sms-choose-note-text small {
            color: var(--kd-sms-body);
            font-size: 12px;
            line-height: 1.5;
        }

        /* CONTENT */
        .kd-sms-choose-section .kd-sms-choose-content {
            min-width: 0;
        }

        .kd-sms-choose-section .kd-sms-choose-eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 14px;
            color: var(--kd-sms-orange);
            font-size: 11px;
            font-weight: 800;
            line-height: 1.5;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .kd-sms-choose-section .kd-sms-choose-eyebrow-line {
            width: 27px;
            height: 2px;
            flex: 0 0 27px;
            background: var(--kd-sms-orange);
        }

        .kd-sms-choose-section .kd-sms-choose-heading {
            margin: 0 0 18px;
            padding: 0;
            color: var(--kd-sms-navy);
            font-size: clamp(28px, 2.7vw, 39px);
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.8px;
            overflow-wrap: break-word;
        }

        .kd-sms-choose-section .kd-sms-choose-heading span {
            color: var(--kd-sms-orange);
        }

        .kd-sms-choose-section .kd-sms-choose-copy {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .kd-sms-choose-section .kd-sms-choose-copy p {
            margin: 0;
            padding: 0;
            color: var(--kd-sms-body);
            font-size: 14.5px;
            font-weight: 400;
            line-height: 1.85;
        }

        .kd-sms-choose-section .kd-sms-choose-intro {
            margin: 17px 0 12px;
            padding: 0;
            color: var(--kd-sms-navy);
            font-size: 14.5px;
            font-weight: 650;
            line-height: 1.75;
        }

        /* FEATURE CARD */
        .kd-sms-choose-section .kd-sms-choose-feature {
            position: relative;
            display: grid;
            grid-template-columns: 46px minmax(0, 1fr);
            align-items: center;
            gap: 14px;
            min-width: 0;
            padding: 18px;
            background: #f7f9fc;
            border: 1px solid #e9edf3;
            border-radius: 11px;
            box-shadow: 0 4px 16px rgba(11, 25, 48, 0.035);
        }

        .kd-sms-choose-section .kd-sms-choose-feature-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            color: #ffffff;
            background: var(--kd-sms-orange);
            border-radius: 9px;
        }

        .kd-sms-choose-section .kd-sms-choose-feature-icon svg {
            display: block;
            width: 25px;
            height: 25px;
        }

        .kd-sms-choose-section .kd-sms-choose-feature-content {
            min-width: 0;
        }

        .kd-sms-choose-section .kd-sms-choose-feature-category {
            display: block;
            margin: 0 0 5px;
            color: var(--kd-sms-orange);
            font-size: 10px;
            font-weight: 800;
            line-height: 1.5;
            letter-spacing: 1.25px;
        }

        .kd-sms-choose-section .kd-sms-choose-feature-content h3 {
            margin: 0 0 5px;
            padding: 0;
            color: var(--kd-sms-navy);
            font-size: 17px;
            font-weight: 750;
            line-height: 1.45;
        }

        .kd-sms-choose-section .kd-sms-choose-feature-content p {
            margin: 0;
            padding: 0;
            color: var(--kd-sms-body);
            font-size: 13.5px;
            font-weight: 400;
            line-height: 1.75;
        }

        .kd-sms-choose-section .kd-sms-choose-feature-accent {
            position: absolute;
            top: 14px;
            bottom: 14px;
            left: 0;
            width: 3px;
            background: var(--kd-sms-orange);
            border-radius: 0 3px 3px 0;
        }

        /* TABLET */
        @media (max-width: 1024px) {
            .kd-sms-choose-section {
                padding: 0 16px 40px;
            }

            .kd-sms-choose-section .kd-sms-choose-grid {
                gap: 28px;
            }

            .kd-sms-choose-section .kd-sms-choose-image-wrap {
                height: 400px;
            }

            .kd-sms-choose-section .kd-sms-choose-image-note {
                left: 10px;
                right: -7px;
                padding: 13px;
            }

            .kd-sms-choose-section .kd-sms-choose-heading {
                font-size: 30px;
            }

            .kd-sms-choose-section .kd-sms-choose-copy p {
                font-size: 14px;
            }
        }

        /* MOBILE */
        @media (max-width: 767px) {
            .kd-sms-choose-section {
                padding: 0 16px 34px;
            }

            .kd-sms-choose-section .kd-sms-choose-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 25px;
            }

            .kd-sms-choose-section .kd-sms-choose-visual {
                width: 100%;
                padding-bottom: 15px;
            }

            .kd-sms-choose-section .kd-sms-choose-image-wrap {
                height: auto;
                aspect-ratio: 4 / 3;
                max-height: 390px;
                border-radius: 11px;
            }

            .kd-sms-choose-section .kd-sms-choose-image-note {
                left: 12px;
                right: 12px;
                gap: 10px;
                padding: 11px 12px;
                border-radius: 9px;
            }

            .kd-sms-choose-section .kd-sms-choose-note-icon {
                width: 37px;
                height: 37px;
                flex-basis: 37px;
            }

            .kd-sms-choose-section .kd-sms-choose-note-text strong {
                font-size: 13px;
            }

            .kd-sms-choose-section .kd-sms-choose-note-text small {
                font-size: 11px;
            }

            .kd-sms-choose-section .kd-sms-choose-eyebrow {
                margin-bottom: 11px;
                font-size: 10px;
            }

            .kd-sms-choose-section .kd-sms-choose-heading {
                margin-bottom: 15px;
                font-size: clamp(26px, 6.5vw, 33px);
                line-height: 1.3;
                letter-spacing: -0.5px;
            }

            .kd-sms-choose-section .kd-sms-choose-copy {
                gap: 11px;
            }

            .kd-sms-choose-section .kd-sms-choose-copy p {
                font-size: 14px;
                line-height: 1.8;
            }

            .kd-sms-choose-section .kd-sms-choose-intro {
                margin-top: 16px;
                font-size: 14px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature {
                grid-template-columns: 42px minmax(0, 1fr);
                gap: 12px;
                padding: 15px 13px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature-icon {
                width: 42px;
                height: 42px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature-content h3 {
                font-size: 16px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature-content p {
                font-size: 13px;
                line-height: 1.75;
            }
        }

        @media (max-width: 380px) {
            .kd-sms-choose-section {
                padding-right: 12px;
                padding-left: 12px;
            }

            .kd-sms-choose-section .kd-sms-choose-heading {
                font-size: 26px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature {
                grid-template-columns: 37px minmax(0, 1fr);
                gap: 10px;
                padding: 13px 11px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature-icon {
                width: 37px;
                height: 37px;
            }

            .kd-sms-choose-section .kd-sms-choose-feature-icon svg {
                width: 22px;
                height: 22px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .kd-sms-choose-section *,
            .kd-sms-choose-section *::before,
            .kd-sms-choose-section *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>

    <div class="kd-sms-choose-container">
        <div class="kd-sms-choose-grid">

            <!-- LEFT IMAGE -->
            <div class="kd-sms-choose-visual">
                <div class="kd-sms-choose-image-wrap">
                    <img
                        class="kd-sms-choose-image"
                        src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1100&q=85"
                        alt="Business professionals discussing communication solutions"
                        loading="lazy"
                        decoding="async">
                </div>

                <div class="kd-sms-choose-image-note">
                    <span class="kd-sms-choose-note-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="5" width="18" height="14" rx="2.5"
                                stroke="currentColor" stroke-width="1.7" />
                            <path d="m4 7 8 6 8-6"
                                stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                    <span class="kd-sms-choose-note-text">
                        <strong>Business Communication</strong>
                        <small>Solutions designed around your needs</small>
                    </span>
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="kd-sms-choose-content">

                <div class="kd-sms-choose-eyebrow">
                    <span class="kd-sms-choose-eyebrow-line"></span>
                    <span>WHY CHOOSE KING DIGITAL</span>
                </div>

                <h2 id="kd-sms-choose-heading" class="kd-sms-choose-heading">
                    Why Should You Choose King Digital As Your
                    <span>Bulk SMS Company In Rohini?</span>
                </h2>

                <div class="kd-sms-choose-copy">
                    <p>
                        Choosing the right SMS partner is crucial for managing customer communication efficiently. A professional SMS service needs to offer suitable messaging options, campaign management capabilities, technical support and clear pricing.
                    </p>

                    <p>
                        King Digital Pvt Ltd helps businesses improve their customer reach with digital communication solutions. Drawing on our experience in bulk messaging and other digital services, we help businesses choose solutions that meet their communication needs.
                    </p>
                </div>

                <p class="kd-sms-choose-intro">
                    Here’s why businesses can consider King Digital for their Bulk SMS services:
                </p>

                <!-- SMS SOLUTIONS FEATURE -->
                <div class="kd-sms-choose-feature">
                    <div class="kd-sms-choose-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M5 5.75A2.75 2.75 0 0 1 7.75 3h8.5A2.75 2.75 0 0 1 19 5.75v7.5A2.75 2.75 0 0 1 16.25 16h-4.7L7 19v-3h.75A2.75 2.75 0 0 1 5 13.25v-7.5Z"
                                stroke="currentColor" stroke-width="1.7"
                                stroke-linejoin="round" />
                            <path d="M8 7.5h8M8 11h5"
                                stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" />
                        </svg>
                    </div>

                    <div class="kd-sms-choose-feature-content">
                        <span class="kd-sms-choose-feature-category">
                            SMS SOLUTIONS
                        </span>
                        <h3>Multiple SMS Solutions</h3>
                        <p>
                            Choose from promotional SMS, transactional SMS, OTP messaging, and other communication services.
                        </p>
                    </div>

                    <span class="kd-sms-choose-feature-accent" aria-hidden="true"></span>
                </div>

            </div>
        </div>
    </div>
</section>






<!-- KING DIGITAL | BULK SMS BUSINESS DEVELOPMENT -->
<style>
    /* KING DIGITAL - BULK SMS BUSINESS DEVELOPMENT */

    .kd-sms-choose-business,
    .kd-sms-choose-business * {
        box-sizing: border-box;
    }

    .kd-sms-choose-business {
        --kd-sms-business-orange: #ff6500;
        --kd-sms-business-navy: #0b1930;
        --kd-sms-business-text: #566174;

        width: 100%;
        padding: 0 24px 58px;
        margin: 0;
        background: #ffffff;
        color: var(--kd-sms-business-navy);
        font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, Arial, sans-serif;
        overflow: hidden;
    }

    .kd-sms-choose-business__container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
    }

    .kd-sms-choose-business__grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr);
        align-items: center;
        gap: 0;
    }

    .kd-sms-choose-business__content {
        min-width: 0;
    }

    .kd-sms-choose-business__heading {
        position: relative;
        margin: 0 0 23px;
        padding: 0 0 0 19px;
        border: 0;
        color: var(--kd-sms-business-navy);
        font-size: clamp(29px, 3vw, 39px);
        font-weight: 750;
        line-height: 1.3;
        letter-spacing: -0.8px;
        overflow-wrap: break-word;
    }

    .kd-sms-choose-business__heading::before {
        content: "";
        position: absolute;
        top: 5px;
        bottom: 5px;
        left: 0;
        width: 4px;
        background: var(--kd-sms-business-orange);
        border-radius: 3px;
    }

    .kd-sms-choose-business__heading span {
        display: inline;
        color: var(--kd-sms-business-orange);
    }

    .kd-sms-choose-business__paragraph {
        margin: 0 0 16px;
        padding: 0;
        color: var(--kd-sms-business-text);
        font-size: 15px;
        font-weight: 400;
        line-height: 1.9;
    }

    .kd-sms-choose-business__paragraph:last-child {
        margin-bottom: 0;
    }

    /* IMAGE */

    .kd-sms-choose-business__visual {
        width: 100%;
        min-width: 0;
    }

    .kd-sms-choose-business__image-wrap {
        width: 100%;
        height: 410px;
        overflow: hidden;
        background: #f1f4f8;
        border-radius: 12px;
    }

    .kd-sms-choose-business__image {
        display: block;
        width: 100%;
        height: 100%;
        max-width: none;
        margin: 0;
        object-fit: cover;
        object-position: center center;
        border: 0;
        outline: none;
        box-shadow: none;
    }

    /* TABLET */

    @media (max-width: 1024px) {
        .kd-sms-choose-business {
            padding: 0 22px 48px;
        }

        .kd-sms-choose-business__grid {
            gap: 32px;
        }

        .kd-sms-choose-business__heading {
            font-size: 31px;
        }

        .kd-sms-choose-business__paragraph {
            font-size: 14px;
            line-height: 1.85;
        }

        .kd-sms-choose-business__image-wrap {
            height: 370px;
        }
    }

    /* MOBILE */

    @media (max-width: 767px) {
        .kd-sms-choose-business {
            padding: 0 18px 40px;
        }

        .kd-sms-choose-business__grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 24px;
        }

        .kd-sms-choose-business__heading {
            margin-bottom: 18px;
            padding-left: 15px;
            font-size: clamp(26px, 6.5vw, 33px);
            line-height: 1.32;
            letter-spacing: -0.55px;
        }

        .kd-sms-choose-business__heading::before {
            width: 3px;
            top: 3px;
            bottom: 3px;
        }

        .kd-sms-choose-business__paragraph {
            margin-bottom: 14px;
            font-size: 14px;
            line-height: 1.85;
        }

        .kd-sms-choose-business__image-wrap {
            height: auto;
            aspect-ratio: 4 / 3;
            max-height: 380px;
            border-radius: 10px;
        }

        .kd-sms-choose-business__image {
            object-position: center center;
        }
    }

    /* SMALL MOBILE */

    @media (max-width: 380px) {
        .kd-sms-choose-business {
            padding-right: 15px;
            padding-left: 15px;
        }

        .kd-sms-choose-business__heading {
            font-size: 26px;
        }

        .kd-sms-choose-business__paragraph {
            font-size: 13.5px;
        }
    }
</style>
<section class="kd-sms-choose-business" aria-labelledby="kd-sms-choose-business-title">
    <div class="kd-sms-choose-business__container">

        <div class="kd-sms-choose-business__grid">

            <div class="kd-sms-choose-business__content">

                <h2 id="kd-sms-choose-business-title"
                    class="kd-sms-choose-business__heading">
                    Bulk SMS Service in Rohini for
                    <span>Business Development</span>
                </h2>

                <p class="kd-sms-choose-business__paragraph">
                    Bulk SMS marketing is the process of sending messages to a large number of people using an SMS platform. It is good for sharing time sensitive information, announcing special offers, promoting services and sending updates to customers who have agreed to receive relevant communications.
                </p>

                <p class="kd-sms-choose-business__paragraph">
                    SMS is a communication channel that sends messages directly to your customers’ mobile messaging inbox (assuming they are in range of a network and other conditions for delivery are met), rather than requiring them to open a particular application.
                </p>

            </div>

        </div>
    </div>
</section>








<section class="kd-sms-industries" aria-labelledby="kd-sms-industries-title">
    <style>
        .kd-sms-industries {
            --ksi-orange: #ff6500;
            --ksi-navy: #0b1930;
            --ksi-text: #586477;
            --ksi-border: #e5eaf0;

            width: 100%;
            margin: 0;
            padding: 0 12px 52px;
            background: #fff;
            color: var(--ksi-navy);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            box-sizing: border-box;
        }

        .kd-sms-industries *,
        .kd-sms-industries *::before,
        .kd-sms-industries *::after {
            box-sizing: border-box;
        }

        .kd-sms-industries .ksi-container {
            width: 100%;
            max-width: 1360px;
            margin: 0 auto;
        }

        .kd-sms-industries .ksi-header {
            max-width: 900px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .kd-sms-industries .ksi-eyebrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin: 0 0 11px;
            color: var(--ksi-orange);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
            line-height: 1.5;
            text-transform: uppercase;
        }

        .kd-sms-industries .ksi-eyebrow::before,
        .kd-sms-industries .ksi-eyebrow::after {
            content: "";
            width: 22px;
            height: 2px;
            flex: 0 0 22px;
            background: var(--ksi-orange);
            border-radius: 2px;
        }

        .kd-sms-industries .ksi-title {
            margin: 0 0 14px;
            color: var(--ksi-navy);
            font-size: clamp(29px, 3vw, 41px);
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.23;
        }

        .kd-sms-industries .ksi-title span {
            color: var(--ksi-orange);
        }

        .kd-sms-industries .ksi-intro {
            max-width: 850px;
            margin: 0 auto;
            color: var(--ksi-text);
            font-size: 15.5px;
            line-height: 1.85;
        }

        /* Balanced industry grid */
        .kd-sms-industries .ksi-grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 20px;
            align-items: stretch;
        }

        .kd-sms-industries .ksi-card {
            position: relative;
            display: flex;
            flex-direction: column;
            grid-column: span 2;
            min-width: 0;
            padding: 26px 25px 27px;
            background: #fff;
            border: 1px solid var(--ksi-border);
            border-radius: 13px;
            box-shadow: 0 5px 22px rgba(11, 25, 48, 0.045);
            overflow-wrap: anywhere;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        /* Last two cards centered in row two */
        .kd-sms-industries .ksi-card:nth-child(4) {
            grid-column: 2 / span 2;
        }

        .kd-sms-industries .ksi-card::before {
            content: "";
            position: absolute;
            top: -1px;
            left: 25px;
            width: 45px;
            height: 3px;
            background: var(--ksi-orange);
            border-radius: 0 0 3px 3px;
        }

        .kd-sms-industries .ksi-card:hover {
            border-color: #ffd0b4;
            box-shadow: 0 9px 26px rgba(11, 25, 48, 0.075);
        }

        .kd-sms-industries .ksi-card-top {
            display: grid;
            grid-template-columns: 46px minmax(0, 1fr);
            align-items: center;
            gap: 13px;
            min-height: 58px;
            margin-bottom: 16px;
        }

        .kd-sms-industries .ksi-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            color: var(--ksi-orange);
            background: #fff1e8;
            border: 1px solid #ffe0cd;
            border-radius: 11px;
        }

        .kd-sms-industries .ksi-icon svg {
            display: block;
            width: 23px;
            height: 23px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .kd-sms-industries .ksi-card-title {
            margin: 0;
            color: var(--ksi-navy);
            font-size: 19px;
            font-weight: 750;
            letter-spacing: -0.3px;
            line-height: 1.4;
        }

        .kd-sms-industries .ksi-card p {
            margin: 0;
            color: var(--ksi-text);
            font-size: 14px;
            line-height: 1.85;
        }

        /* Tablet: two equally sized cards per row */
        @media (max-width: 950px) {
            .kd-sms-industries {
                padding: 0 14px 42px;
            }

            .kd-sms-industries .ksi-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 17px;
            }

            .kd-sms-industries .ksi-card,
            .kd-sms-industries .ksi-card:nth-child(4) {
                grid-column: auto;
            }

            .kd-sms-industries .ksi-card {
                padding: 24px 22px 25px;
            }

            .kd-sms-industries .ksi-card::before {
                left: 22px;
            }

            .kd-sms-industries .ksi-card-title {
                font-size: 19px;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {
            .kd-sms-industries {
                padding: 0 12px 34px;
            }

            .kd-sms-industries .ksi-header {
                margin-bottom: 23px;
            }

            .kd-sms-industries .ksi-title {
                font-size: 29px;
                letter-spacing: -0.6px;
            }

            .kd-sms-industries .ksi-intro {
                font-size: 14px;
                line-height: 1.8;
            }

            .kd-sms-industries .ksi-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 15px;
            }

            .kd-sms-industries .ksi-card,
            .kd-sms-industries .ksi-card:nth-child(4) {
                grid-column: auto;
                padding: 23px 20px 24px;
                border-radius: 12px;
            }

            .kd-sms-industries .ksi-card::before {
                left: 20px;
            }

            .kd-sms-industries .ksi-card-top {
                grid-template-columns: 43px minmax(0, 1fr);
                gap: 12px;
                min-height: 43px;
                margin-bottom: 13px;
            }

            .kd-sms-industries .ksi-icon {
                width: 43px;
                height: 43px;
            }

            .kd-sms-industries .ksi-icon svg {
                width: 21px;
                height: 21px;
            }

            .kd-sms-industries .ksi-card-title {
                font-size: 18px;
            }

            .kd-sms-industries .ksi-card p {
                font-size: 14px;
                line-height: 1.8;
            }
        }

        @media (max-width: 360px) {
            .kd-sms-industries .ksi-card {
                padding-right: 16px;
                padding-left: 16px;
            }

            .kd-sms-industries .ksi-card::before {
                left: 16px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .kd-sms-industries .ksi-card {
                transition: none;
            }
        }
    </style>

    <div class="ksi-container">
        <header class="ksi-header">
            <div class="ksi-eyebrow">Business Communication Solutions</div>
            <h2 class="ksi-title" id="kd-sms-industries-title">
                Industries That Can Benefit from <span>Bulk SMS in Rohini</span>
            </h2>
            <p class="ksi-intro">
                Bulk messaging can help companies communicate with their customers in different fields. How well it works depends on how relevant the message's if the person has agreed to receive it how the campaign is planned and how good the list of phone numbers is.
            </p>
        </header>

        <div class="ksi-grid">

            <!-- Industry 1 -->
            <article class="ksi-card">
                <div class="ksi-card-top">
                    <div class="ksi-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 9l1.5-5h15L21 9"></path>
                            <path d="M4 9v11h16V9"></path>
                            <path d="M3 9a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 6 0"></path>
                            <path d="M9 20v-6h6v6"></path>
                        </svg>
                    </div>
                    <h3 class="ksi-card-title">Retail Shops and Local Businesses</h3>
                </div>
                <p>
                    Retailers can let people who have signed up know about new products, special sales, store news and other deals. Good offers can make people who are interested come back to the store or check out items.
                </p>
            </article>

            <!-- Industry 2 -->
            <article class="ksi-card">
                <div class="ksi-card-top">
                    <div class="ksi-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V7l7-4 7 4v14"></path>
                            <path d="M9 10h.01M15 10h.01M9 14h.01M15 14h.01"></path>
                            <path d="M10 21v-4h4v4"></path>
                        </svg>
                    </div>
                    <h3 class="ksi-card-title">Educational Institutes and Coaching Centres</h3>
                </div>
                <p>
                    Schools, colleges and training centers can use text messages to send class schedules, exam reminders, admission news, event details and other important information, to the people.
                </p>
            </article>

            <!-- Industry 3 -->
            <article class="ksi-card">
                <div class="ksi-card-top">
                    <div class="ksi-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V5h14v16"></path>
                            <path d="M9 9h2M13 9h2M9 13h2M13 13h2"></path>
                            <path d="M10 21v-4h4v4"></path>
                            <path d="M12 3v3"></path>
                        </svg>
                    </div>
                    <h3 class="ksi-card-title">Hospitals and Healthcare Centres</h3>
                </div>
                <p>
                    Hospitals and Healthcare Centres can use approved messaging services to send appointment reminders booking confirmations and administrative notifications. These messages must keep privacy safe and must not reveal sensitive details that are not needed.
                </p>
            </article>

            <!-- Industry 4 -->
            <article class="ksi-card">
                <div class="ksi-card-top">
                    <div class="ksi-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 11l9-8 9 8"></path>
                            <path d="M5 10v10h14V10"></path>
                            <path d="M9 20v-6h6v6"></path>
                            <path d="M16 5h3v3"></path>
                        </svg>
                    </div>
                    <h3 class="ksi-card-title">Real Estate Companies</h3>
                </div>
                <p>
                    Real Estate Companies can send project announcements, site visit confirmations, appointment reminders and updates to prospects who have agreed to receive these messages.
                </p>
            </article>

            <!-- Industry 5 -->
            <article class="ksi-card">
                <div class="ksi-card-top">
                    <div class="ksi-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 3h2l2.2 11.5a2 2 0 0 0 2 1.5h8.9a2 2 0 0 0 2-1.6L22 7H6"></path>
                            <circle cx="10" cy="20" r="1.3"></circle>
                            <circle cx="18" cy="20" r="1.3"></circle>
                            <path d="M12 10h5M14.5 7.5v5"></path>
                        </svg>
                    </div>
                    <h3 class="ksi-card-title">E-commerce and Online Businesses</h3>
                </div>
                <p>
                    E-commerce and Online Businesses can use messaging to send order confirmations, dispatch notifications, delivery updates and other useful customer communications.
                </p>
            </article>

        </div>
    </div>
</section>