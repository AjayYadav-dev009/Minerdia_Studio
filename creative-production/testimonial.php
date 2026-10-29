<!-- =========================================================
 MINERDIA STUDIO
 TESTIMONIAL VIDEO SECTION - COMPLETE FINAL CODE
 4 REELS | MOBILE 2 BUTTONS IN ONE ROW | VIDEO POPUP
 ========================================================= -->

<section id="minerdia-testimonial-v6">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        /* =============== SECTION =============== */

        #minerdia-testimonial-v6 {
            --tv-purple: #58349a;
            --tv-teal: #329da1;
            --tv-ink: #1c1838;
            --tv-muted: #5e5c7a;
            --tv-gradient: linear-gradient(135deg,
                    #58349a 0%,
                    #4a63a0 52%,
                    #329da1 100%);

            position: relative;
            display: block;
            width: 100%;
            margin: 0;
            padding: 25px 18px 60px;
            background:
                radial-gradient(ellipse at 0% 0%,
                    rgba(88, 52, 154, .10),
                    transparent 42%),
                radial-gradient(ellipse at 100% 100%,
                    rgba(50, 157, 161, .11),
                    transparent 42%),
                #ffffff;

            color: var(--tv-ink);
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }

        #minerdia-testimonial-v6 *,
        #minerdia-testimonial-v6 *::before,
        #minerdia-testimonial-v6 *::after,
        #minerdia-video-popup-v6 *,
        #minerdia-video-popup-v6 *::before,
        #minerdia-video-popup-v6 *::after {
            box-sizing: border-box;
        }

        #minerdia-testimonial-v6 h2,
        #minerdia-testimonial-v6 p {
            margin: 0;
            padding: 0;
        }

        #minerdia-testimonial-v6 .tv-container {
            width: 100%;
            max-width: 1180px;
            margin: 0 auto;
        }

        /* =============== HEADING =============== */

        #minerdia-testimonial-v6 .tv-heading {
            max-width: 750px;
            margin: 0 auto 32px;
            text-align: center;
        }

        #minerdia-testimonial-v6 .tv-eyebrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 7px 15px;
            margin-bottom: 13px;
            border: 1px solid #e6dcf5;
            border-radius: 50px;
            background: #f4effb;
            color: var(--tv-purple);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        #minerdia-testimonial-v6 .tv-eyebrow::before {
            content: "";
            width: 7px;
            height: 7px;
            flex-shrink: 0;
            border-radius: 50%;
            background: var(--tv-teal);
        }

        #minerdia-testimonial-v6 .tv-title {
            color: var(--tv-ink);
            font-family: 'Poppins', sans-serif;
            font-size: clamp(28px, 4vw, 43px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1px;
            text-align: center;
        }

        #minerdia-testimonial-v6 .tv-title span {
            background: var(--tv-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* =============== PRICE =============== */

        #minerdia-testimonial-v6 .tv-price {
            display: inline-flex;
            align-items: baseline;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            padding: 10px 24px;
            margin-top: 17px;
            border-radius: 50px;
            background: var(--tv-gradient);
            color: #ffffff;
            font-size: 19px;
            font-weight: 700;
            box-shadow: 0 12px 25px rgba(88, 52, 154, .20);
        }

        #minerdia-testimonial-v6 .tv-price small {
            color: #ffffff;
            font-size: 12px;
            font-weight: 500;
        }

        #minerdia-testimonial-v6 .tv-description {
            max-width: 630px;
            margin: 15px auto 0;
            color: var(--tv-muted);
            font-size: 14px;
            line-height: 1.85;
            text-align: center;
        }

        /* =============== TAGS =============== */

        #minerdia-testimonial-v6 .tv-tags {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 9px;
            margin-top: 18px;
        }

        #minerdia-testimonial-v6 .tv-tags span {
            display: inline-block;
            padding: 7px 14px;
            border: 1px solid #e2e0f0;
            border-radius: 50px;
            background: #ffffff;
            color: var(--tv-muted);
            font-size: 11px;
            font-weight: 500;
        }

        /* =============== VIDEO GRID =============== */

        #minerdia-testimonial-v6 .tv-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
            width: 100%;
        }

        #minerdia-testimonial-v6 button.tv-card {
            position: relative;
            display: block;
            width: 100%;
            min-width: 0;
            aspect-ratio: 9/16;
            padding: 0;
            margin: 0;
            overflow: hidden;
            border: 0;
            border-radius: 18px;
            background: linear-gradient(155deg,
                    #6b47a8,
                    #211a40);
            box-shadow: 0 15px 35px rgba(88, 52, 154, .16);
            text-align: left;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            transition:
                transform .3s ease,
                box-shadow .3s ease;
        }

        #minerdia-testimonial-v6 button.tv-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 22px 45px rgba(88, 52, 154, .25);
        }

        #minerdia-testimonial-v6 button.tv-card:focus-visible {
            outline: 3px solid var(--tv-teal);
            outline-offset: 3px;
        }

        /* VIDEO THUMBNAILS */

        #minerdia-testimonial-v6 .tv-thumb {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
        }

        #minerdia-testimonial-v6 .tv-card::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(180deg,
                    rgba(0, 0, 0, .08),
                    transparent 45%,
                    rgba(0, 0, 0, .73));
            pointer-events: none;
        }

        /* VIDEO BADGE */

        #minerdia-testimonial-v6 .tv-badge {
            position: absolute;
            z-index: 2;
            top: 13px;
            left: 13px;
            padding: 6px 12px;
            border-radius: 50px;
            background: rgba(255, 255, 255, .94);
            color: var(--tv-purple);
            font-size: 10px;
            font-weight: 700;
        }

        /* PLAY BUTTON */

        #minerdia-testimonial-v6 .tv-play {
            position: absolute;
            z-index: 2;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .96);
            color: var(--tv-purple);
            box-shadow: 0 10px 25px rgba(0, 0, 0, .20);
            pointer-events: none;
        }

        #minerdia-testimonial-v6 .tv-play svg {
            display: block;
            width: 22px;
            height: 22px;
            margin-left: 3px;
            fill: currentColor;
        }

        /* VIDEO LABEL */

        #minerdia-testimonial-v6 .tv-label {
            position: absolute;
            z-index: 2;
            bottom: 15px;
            left: 15px;
            right: 15px;
            color: #ffffff;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.5;
            pointer-events: none;
        }

        #minerdia-testimonial-v6 .tv-label small {
            display: block;
            margin-top: 3px;
            color: rgba(255, 255, 255, .85);
            font-size: 10px;
            font-weight: 400;
        }

        /* =============== CONTACT BUTTONS =============== */

        #minerdia-testimonial-v6 .tv-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: nowrap;
            gap: 13px;
            margin-top: 36px;
        }

        #minerdia-testimonial-v6 a.tv-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-width: 0;
            min-height: 46px;
            padding: 12px 27px;
            margin: 0;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.4;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            transition:
                transform .3s ease,
                background .3s ease,
                box-shadow .3s ease;
        }

        #minerdia-testimonial-v6 a.tv-btn-main,
        #minerdia-testimonial-v6 a.tv-btn-main:visited,
        #minerdia-testimonial-v6 a.tv-btn-main:hover,
        #minerdia-testimonial-v6 a.tv-btn-main:focus {
            background: var(--tv-gradient) !important;
            color: #ffffff !important;
        }

        #minerdia-testimonial-v6 a.tv-btn-main {
            box-shadow: 0 10px 25px rgba(88, 52, 154, .20);
        }

        #minerdia-testimonial-v6 a.tv-btn-main:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(88, 52, 154, .28);
        }

        #minerdia-testimonial-v6 a.tv-btn-outline,
        #minerdia-testimonial-v6 a.tv-btn-outline:visited {
            border: 1px solid var(--tv-purple);
            background: #ffffff;
            color: var(--tv-purple);
        }

        #minerdia-testimonial-v6 a.tv-btn-outline:hover {
            background: var(--tv-purple);
            color: #ffffff;
        }

        /* =============== POPUP =============== */

        #minerdia-video-popup-v6 {
            --tv-gradient: linear-gradient(135deg,
                    #58349a,
                    #4a63a0 52%,
                    #329da1);

            position: fixed !important;
            inset: 0 !important;
            z-index: 2147483640 !important;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 0 !important;
            background: rgba(15, 9, 31, .86);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        #minerdia-video-popup-v6.tv-open {
            display: flex !important;
        }

        #minerdia-video-popup-v6 .tv-modal-box {
            position: relative;
            display: flex;
            flex-direction: column;
            width: min(390px, 94vw);
            max-height: calc(100dvh - 40px);
            overflow: hidden;
            border-radius: 20px;
            background: #0b0813;
            box-shadow: 0 30px 80px rgba(0, 0, 0, .5);
        }

        #minerdia-video-popup-v6 .tv-screen {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 0;
            aspect-ratio: 9/16;
            max-height: calc(100dvh - 105px);
            overflow: hidden;
            background: #000000;
        }

        #minerdia-video-popup-v6 .tv-screen video {
            display: block;
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            background: #000000;
        }

        /* POPUP CLOSE BUTTON */

        #minerdia-video-popup-v6 button.tv-close,
        #minerdia-video-popup-v6 button.tv-close:hover,
        #minerdia-video-popup-v6 button.tv-close:focus {
            position: absolute !important;
            top: 12px !important;
            right: 12px !important;
            left: auto !important;
            bottom: auto !important;
            z-index: 60 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 40px !important;
            height: 40px !important;
            min-width: 40px !important;
            max-width: 40px !important;
            min-height: 40px !important;
            max-height: 40px !important;
            padding: 0 !important;
            margin: 0 !important;
            border: 0 !important;
            border-radius: 50% !important;
            background: #ffffff !important;
            color: #211634 !important;
            transform: none !important;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .25) !important;
            appearance: none !important;
            cursor: pointer !important;
        }

        #minerdia-video-popup-v6 .tv-close svg {
            display: block !important;
            width: 18px !important;
            height: 18px !important;
            stroke: #211634 !important;
            stroke-width: 2.6 !important;
            fill: none !important;
            pointer-events: none;
        }

        /* POPUP FOOTER */

        #minerdia-video-popup-v6 .tv-modal-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
            gap: 12px;
            padding: 13px 16px;
            background: linear-gradient(135deg,
                    #2a1b52,
                    #14323a);
        }

        #minerdia-video-popup-v6 .tv-modal-footer strong {
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
        }

        #minerdia-video-popup-v6 .tv-modal-footer a,
        #minerdia-video-popup-v6 .tv-modal-footer a:hover {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 9px 14px;
            border-radius: 50px;
            background: var(--tv-gradient);
            color: #ffffff !important;
            font-size: 11px;
            font-weight: 600;
            text-decoration: none;
            white-space: nowrap;
        }

        /* =============== TABLET =============== */

        @media(max-width:1024px) {

            #minerdia-testimonial-v6 .tv-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

        }

        /* =============== MOBILE =============== */

        @media(max-width:767px) {

            #minerdia-testimonial-v6 {
                padding: 20px 14px 55px;
            }

            #minerdia-testimonial-v6 .tv-heading {
                margin-bottom: 26px;
                text-align: center;
            }

            #minerdia-testimonial-v6 .tv-title {
                font-size: clamp(27px, 6vw, 35px);
                text-align: center;
            }

            #minerdia-testimonial-v6 .tv-price {
                font-size: 17px;
                padding: 10px 20px;
            }

            #minerdia-testimonial-v6 .tv-description {
                font-size: 13px;
                text-align: center;
            }

            #minerdia-testimonial-v6 .tv-tags {
                justify-content: center;
            }

            #minerdia-testimonial-v6 .tv-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 12px;
            }

            #minerdia-testimonial-v6 button.tv-card {
                border-radius: 14px;
            }

            #minerdia-testimonial-v6 .tv-play {
                width: 47px;
                height: 47px;
            }

            #minerdia-testimonial-v6 .tv-play svg {
                width: 18px;
                height: 18px;
            }

            #minerdia-testimonial-v6 .tv-label {
                left: 11px;
                right: 11px;
                bottom: 11px;
                font-size: 11px;
            }

            #minerdia-testimonial-v6 .tv-badge {
                top: 10px;
                left: 10px;
                padding: 5px 9px;
                font-size: 9px;
            }

            /* BOTH BUTTONS IN ONE ROW */

            #minerdia-testimonial-v6 .tv-actions {
                display: grid !important;
                grid-template-columns:
                    minmax(0, 1fr) minmax(0, 1fr) !important;
                align-items: center;
                justify-content: center;
                gap: 10px;
                width: 100%;
                max-width: 420px;
                margin: 28px auto 0;
            }

            #minerdia-testimonial-v6 a.tv-btn {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                width: 100% !important;
                min-width: 0 !important;
                min-height: 44px;
                padding: 11px 8px !important;
                margin: 0 !important;
                font-size: 11px !important;
                line-height: 1.35;
                text-align: center;
                white-space: nowrap;
            }

            /* POPUP BELOW STICKY HEADER */

            #minerdia-video-popup-v6 {
                --tv-header-offset: 110px;
                inset: var(--tv-header-offset) 0 0 0 !important;
                align-items: flex-start !important;
                justify-content: center !important;
                padding:
                    10px 12px max(14px, env(safe-area-inset-bottom)) !important;
                overflow-y: auto;
                overscroll-behavior: contain;
            }

            #minerdia-video-popup-v6 .tv-modal-box {
                width: min(340px,
                        calc(100vw - 28px),
                        calc((100dvh - var(--tv-header-offset) - 90px) * 9 / 16)) !important;

                max-width: 100% !important;
                max-height: calc(100dvh - var(--tv-header-offset) - 24px) !important;
                margin: 0 auto !important;
                border-radius: 17px;
            }

            #minerdia-video-popup-v6 .tv-screen {
                width: 100%;
                aspect-ratio: 9/16;
                max-height: calc(100dvh - var(--tv-header-offset) - 85px);
            }

            #minerdia-video-popup-v6 .tv-modal-footer {
                padding: 10px 12px;
            }

            #minerdia-video-popup-v6 button.tv-close,
            #minerdia-video-popup-v6 button.tv-close:hover,
            #minerdia-video-popup-v6 button.tv-close:focus {
                top: 10px !important;
                right: 10px !important;
                width: 36px !important;
                height: 36px !important;
                min-width: 36px !important;
                max-width: 36px !important;
                min-height: 36px !important;
                max-height: 36px !important;
            }

        }

        /* =============== SMALL MOBILE =============== */

        @media(max-width:420px) {

            #minerdia-testimonial-v6 .tv-actions {
                display: grid !important;
                grid-template-columns:
                    minmax(0, 1fr) minmax(0, 1fr) !important;
                flex-direction: row !important;
                gap: 9px !important;
            }

            #minerdia-testimonial-v6 a.tv-btn {
                width: 100% !important;
                padding: 11px 6px !important;
                font-size: 10.5px !important;
                white-space: nowrap;
            }

            #minerdia-video-popup-v6 .tv-modal-footer strong {
                font-size: 11px;
            }

            #minerdia-video-popup-v6 .tv-modal-footer a {
                padding: 8px 10px;
                font-size: 10px;
            }

        }

        @media(prefers-reduced-motion:reduce) {

            #minerdia-testimonial-v6 *,
            #minerdia-video-popup-v6 * {
                transition: none !important;
            }

        }
    </style>

    <div class="tv-container">

        <!-- =============== HEADING =============== -->

        <div class="tv-heading">

            <span class="tv-eyebrow">
                MINERDIA STUDIO PRODUCTION
            </span>

            <h2 class="tv-title">
                Testimonial <span>Video</span>
            </h2>

            <div class="tv-price">
                ₹4,000 – ₹7,000
                <small>per video</small>
            </div>

            <p class="tv-description">
                Real customer or client reviews shot in our studio
                with captions and branding.
            </p>

            <div class="tv-tags">
                <span>Studio shoot</span>
                <span>Captions included</span>
                <span>30–60 sec</span>
                <span>Reel 9:16</span>
            </div>

        </div>

        <!-- =============== VIDEO GRID =============== -->

        <div class="tv-grid">

            <!-- VIDEO 01 -->

            <button
                type="button"
                class="tv-card"
                data-video="<?php echo BASE; ?>assets/videos/M3M-2.mp4"
                data-title="M3M Video 1"
                aria-label="Play M3M Video 1">

                <video
                    class="tv-thumb"
                    src="<?php echo BASE; ?>assets/videos/M3M-2.mp4#t=0.5"
                    muted
                    playsinline
                    preload="metadata"
                    aria-hidden="true"></video>

                <span class="tv-badge">VIDEO</span>

                <span class="tv-play">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 4.5v15l13-7.5z" />
                    </svg>
                </span>

                <span class="tv-label">
                    M3M Video 1
                    <small>Watch Video</small>
                </span>
            </button>

            <!-- VIDEO 02 -->

            <button
                type="button"
                class="tv-card"
                data-video="<?php echo BASE; ?>assets/videos/M3M-3.mp4"
                data-title="M3M Video 2"
                aria-label="Play M3M Video 2">

                <video
                    class="tv-thumb"
                    src="<?php echo BASE; ?>assets/videos/M3M-3.mp4#t=0.5"
                    muted
                    playsinline
                    preload="metadata"
                    aria-hidden="true"></video>

                <span class="tv-badge">VIDEO</span>

                <span class="tv-play">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 4.5v15l13-7.5z" />
                    </svg>
                </span>

                <span class="tv-label">
                    M3M Video 2
                    <small>Watch Video</small>
                </span>

            </button>

            <!-- VIDEO 03 -->

            <button
                type="button"
                class="tv-card"
                data-video="<?php echo BASE; ?>assets/videos/alpha-auto.mp4"
                data-title="Alpha Auto"
                aria-label="Play Alpha Auto">

                <video
                    class="tv-thumb"
                    src="<?php echo BASE; ?>assets/videos/alpha-auto.mp4#t=0.5"
                    muted
                    playsinline
                    preload="metadata"
                    aria-hidden="true"></video>

                <span class="tv-badge">VIDEO</span>

                <span class="tv-play">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 4.5v15l13-7.5z" />
                    </svg>
                </span>

                <span class="tv-label">
                    Alpha Auto
                    <small>Watch Video</small>
                </span>

            </button>

            <!-- VIDEO 04 -->

            <button
                type="button"
                class="tv-card"
                data-video="<?php echo BASE; ?>assets/videos/alpha-auto-2.mp4"
                data-title="Script 5"
                aria-label="Play Script 5">

                <video
                    class="tv-thumb"
                    src="<?php echo BASE; ?>assets/videos/alpha-auto-2.mp4#t=0.5"
                    muted
                    playsinline
                    preload="metadata"
                    aria-hidden="true"></video>

                <span class="tv-badge">VIDEO</span>

                <span class="tv-play">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 4.5v15l13-7.5z" />
                    </svg>
                </span>

                <span class="tv-label">
                    Script 5
                    <small>Watch Video</small>
                </span>

            </button>

        </div>

        <!-- =============== TWO CONTACT BUTTONS =============== -->

        <div class="tv-actions">

            <a
                class="tv-btn tv-btn-main"
                href="https://wa.me/919711555223?text=Hi%20Minerdia%20Studio%2C%20I%20want%20to%20enquire%20about%20testimonial%20video%20production."
                target="_blank"
                rel="noopener noreferrer">
                Get This Video →
            </a>

            <a
                class="tv-btn tv-btn-outline"
                href="tel:+919711555223">
                Call Us
            </a>

        </div>

    </div>

    <!-- =============== VIDEO POPUP =============== -->

    <div
        id="minerdia-video-popup-v6"
        role="dialog"
        aria-modal="true"
        aria-label="Video player"
        aria-hidden="true">

        <div class="tv-modal-box">

            <button
                type="button"
                class="tv-close"
                aria-label="Close video">

                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 5L19 19M19 5L5 19" />
                </svg>

            </button>

            <div class="tv-screen">

                <video
                    controls
                    playsinline
                    preload="none"></video>

            </div>

            <div class="tv-modal-footer">

                <strong class="tv-popup-title">
                    Video
                </strong>

                <a
                    class="tv-popup-wa"
                    href="https://wa.me/919711555223"
                    target="_blank"
                    rel="noopener noreferrer">
                    Get This Video →
                </a>

            </div>

        </div>

    </div>

    <script>
        (function() {
            "use strict";

            function initMinerdiaTestimonialV6() {

                var root = document.getElementById(
                    "minerdia-testimonial-v6"
                );

                if (!root || root.dataset.tvReady === "1") {
                    return;
                }

                var modal = document.getElementById(
                    "minerdia-video-popup-v6"
                );

                if (!modal) {
                    return;
                }

                root.dataset.tvReady = "1";

                /*
                  MOVE POPUP TO BODY:
                  Avoid Elementor overflow, transforms
                  and sticky-header stacking conflicts.
                */

                if (modal.parentElement !== document.body) {
                    document.body.appendChild(modal);
                }

                var cards = root.querySelectorAll(".tv-card");

                var player = modal.querySelector(
                    ".tv-screen video"
                );

                var closeBtn = modal.querySelector(
                    ".tv-close"
                );

                var popupTitle = modal.querySelector(
                    ".tv-popup-title"
                );

                var popupWA = modal.querySelector(
                    ".tv-popup-wa"
                );

                var phone = "919711555223";

                var previousFocus = null;
                var previousOverflow = "";

                /* MOBILE STICKY HEADER DETECTION */

                function updateHeaderOffset() {

                    if (window.innerWidth > 767) {
                        modal.style.removeProperty(
                            "--tv-header-offset"
                        );
                        return;
                    }

                    var selectors = [
                        ".elementor-location-header",
                        "header.elementor",
                        ".site-header",
                        "#masthead",
                        ".elementor-sticky--active",
                        "header"
                    ];

                    var bottom = 0;

                    selectors.forEach(function(selector) {

                        document.querySelectorAll(selector)
                            .forEach(function(el) {

                                if (modal.contains(el)) {
                                    return;
                                }

                                var style = window.getComputedStyle(el);
                                var rect = el.getBoundingClientRect();

                                if (
                                    style.display === "none" ||
                                    style.visibility === "hidden" ||
                                    rect.height <= 0 ||
                                    rect.width <= 0
                                ) {
                                    return;
                                }

                                var isFixed =
                                    style.position === "fixed" ||
                                    style.position === "sticky" ||
                                    el.classList.contains(
                                        "elementor-sticky--active"
                                    );

                                if (
                                    isFixed &&
                                    rect.top < 120 &&
                                    rect.bottom > 0 &&
                                    rect.bottom < window.innerHeight * .5
                                ) {
                                    bottom = Math.max(
                                        bottom,
                                        rect.bottom
                                    );
                                }

                            });

                    });

                    var offset = Math.max(
                        90,
                        Math.ceil(bottom) + 12
                    );

                    offset = Math.min(
                        offset,
                        Math.round(window.innerHeight * .28)
                    );

                    modal.style.setProperty(
                        "--tv-header-offset",
                        offset + "px"
                    );

                }

                /* OPEN VIDEO */

                function openVideo(card) {

                    var videoURL = card.getAttribute(
                        "data-video"
                    );

                    var videoTitle = card.getAttribute(
                        "data-title"
                    ) || "Video";

                    if (!videoURL) {
                        return;
                    }

                    previousFocus = document.activeElement;
                    previousOverflow = document.body.style.overflow;

                    updateHeaderOffset();

                    popupTitle.textContent = videoTitle;

                    popupWA.href =
                        "https://wa.me/" +
                        phone +
                        "?text=" +
                        encodeURIComponent(
                            'Hi Minerdia Studio, I liked the "' +
                            videoTitle +
                            '" video. Please share production details.'
                        );

                    player.src = videoURL;
                    player.load();

                    modal.classList.add("tv-open");
                    modal.setAttribute(
                        "aria-hidden",
                        "false"
                    );

                    document.body.style.overflow = "hidden";

                    closeBtn.focus();

                    var playPromise = player.play();

                    if (
                        playPromise &&
                        typeof playPromise.catch === "function"
                    ) {
                        playPromise.catch(function() {
                            /* Browser may require manual play. */
                        });
                    }

                }

                /* CLOSE VIDEO */

                function closeVideo() {

                    if (!modal.classList.contains("tv-open")) {
                        return;
                    }

                    player.pause();

                    player.removeAttribute("src");
                    player.load();

                    modal.classList.remove("tv-open");

                    modal.setAttribute(
                        "aria-hidden",
                        "true"
                    );

                    document.body.style.overflow =
                        previousOverflow;

                    if (
                        previousFocus &&
                        typeof previousFocus.focus === "function"
                    ) {
                        previousFocus.focus();
                    }

                }

                /* CARD CLICKS */

                cards.forEach(function(card) {

                    card.addEventListener(
                        "click",
                        function() {
                            openVideo(card);
                        }
                    );

                });

                /* CLOSE BUTTON */

                closeBtn.addEventListener(
                    "click",
                    closeVideo
                );

                /* CLICK OUTSIDE */

                modal.addEventListener(
                    "click",
                    function(event) {

                        if (event.target === modal) {
                            closeVideo();
                        }

                    }
                );

                /* ESCAPE KEY + FOCUS TRAP */

                document.addEventListener(
                    "keydown",
                    function(event) {

                        if (!modal.classList.contains("tv-open")) {
                            return;
                        }

                        if (event.key === "Escape") {
                            closeVideo();
                            return;
                        }

                        if (event.key === "Tab") {

                            var focusables = Array.from(
                                modal.querySelectorAll(
                                    'button:not([disabled]),a[href],video[controls]'
                                )
                            );

                            if (!focusables.length) {
                                return;
                            }

                            var first = focusables[0];
                            var last = focusables[
                                focusables.length - 1
                            ];

                            if (
                                event.shiftKey &&
                                document.activeElement === first
                            ) {
                                event.preventDefault();
                                last.focus();
                            } else if (
                                !event.shiftKey &&
                                document.activeElement === last
                            ) {
                                event.preventDefault();
                                first.focus();
                            }

                        }

                    }
                );

                /* RESIZE / ORIENTATION */

                window.addEventListener(
                    "resize",
                    function() {

                        if (modal.classList.contains("tv-open")) {
                            updateHeaderOffset();
                        }

                    }
                );

                window.addEventListener(
                    "orientationchange",
                    function() {

                        if (modal.classList.contains("tv-open")) {
                            updateHeaderOffset();
                        }

                    }
                );

                /*
                  HELP MOBILE VIDEO THUMBNAILS:
                  Try seeking to the first frame when
                  metadata becomes available.
                */

                root.querySelectorAll(
                    ".tv-thumb"
                ).forEach(function(thumb) {

                    thumb.addEventListener(
                        "loadedmetadata",
                        function() {

                            try {
                                if (
                                    Number.isFinite(thumb.duration) &&
                                    thumb.duration > 0.3
                                ) {
                                    thumb.currentTime = 0.5;
                                }
                            } catch (error) {
                                /* Keep browser-rendered frame. */
                            }

                        }, {
                            once: true
                        }
                    );

                });

            }

            if (document.readyState === "loading") {

                document.addEventListener(
                    "DOMContentLoaded",
                    initMinerdiaTestimonialV6
                );

            } else {

                initMinerdiaTestimonialV6();

            }

        })();
    </script>

</section>

<!-- END MINERDIA TESTIMONIAL SECTION -->