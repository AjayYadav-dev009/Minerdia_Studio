<!-- MINERDIA STUDIO | UGC SLIDER V8 -->
<section id="minerdia-ugc-v8">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        #minerdia-ugc-v8 {
            --purple: #a994ff;
            --teal: #7ce2df;
            --muted: #c5c5df;
            position: relative;
            isolation: isolate;
            width: 100vw;
            max-width: 100vw;
            margin-left: calc(50% - 50vw);
            padding: 34px 22px 48px;
            overflow: hidden;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(ellipse 700px 490px at -8% -12%, rgba(131, 91, 233, .52), transparent 72%),
                radial-gradient(ellipse 670px 500px at 110% 105%, rgba(43, 190, 190, .35), transparent 75%),
                linear-gradient(125deg, #21173e 0%, #17172f 48%, #102d37 100%);
        }

        #minerdia-ugc-v8 *,
        #minerdia-ugc-v8 *::before,
        #minerdia-ugc-v8 *::after {
            box-sizing: border-box;
        }

        #minerdia-ugc-v8 h2,
        #minerdia-ugc-v8 p {
            margin: 0;
        }

        #minerdia-ugc-v8 button {
            font-family: inherit;
            -webkit-tap-highlight-color: transparent;
        }

        #minerdia-ugc-v8 .ug-container {
            max-width: 1200px;
            margin: auto;
        }

        /* HEADING */

        #minerdia-ugc-v8 .ug-heading {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: center;
            gap: 25px;
            margin-bottom: 24px;
        }

        #minerdia-ugc-v8 .ug-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 10px;
            color: var(--teal);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.7px;
            text-transform: uppercase;
        }

        #minerdia-ugc-v8 .ug-kicker::before {
            content: "";
            width: 24px;
            height: 2px;
            background: var(--teal);
        }

        #minerdia-ugc-v8 .ug-title {
            color: #fff !important;
            font-size: clamp(30px, 4vw, 47px);
            line-height: 1.16;
            letter-spacing: -1.3px;
            font-weight: 800;
        }

        #minerdia-ugc-v8 .ug-title span {
            background: linear-gradient(90deg, #c6b5ff, #7ce2df);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #minerdia-ugc-v8 .ug-description {
            max-width: 680px;
            margin-top: 10px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.85;
        }

        /* LIQUID GLASS */

        #minerdia-ugc-v8 .ug-glass {
            border: 1px solid rgba(255, 255, 255, .23);
            background: linear-gradient(145deg,
                    rgba(255, 255, 255, .16),
                    rgba(255, 255, 255, .035) 52%,
                    rgba(255, 255, 255, .08));
            -webkit-backdrop-filter: blur(18px) saturate(155%);
            backdrop-filter: blur(18px) saturate(155%);
            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, .30),
                0 16px 38px rgba(0, 0, 0, .15);
        }

        #minerdia-ugc-v8 .ug-price {
            min-width: 245px;
            padding: 18px 22px;
            border-radius: 20px;
        }

        #minerdia-ugc-v8 .ug-price small {
            display: block;
            color: #c9c6e1;
            font-size: 10px;
        }

        #minerdia-ugc-v8 .ug-price strong {
            display: block;
            margin-top: 5px;
            color: #fff;
            font-size: 23px;
            font-weight: 800;
            white-space: nowrap;
        }

        #minerdia-ugc-v8 .ug-price span {
            display: block;
            margin-top: 3px;
            color: var(--teal);
            font-size: 10px;
            font-weight: 600;
        }

        /* SLIDER PANEL */

        #minerdia-ugc-v8 .ug-panel {
            padding: 22px 21px 16px;
            border-radius: 26px;
        }

        #minerdia-ugc-v8 .ug-panel-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 17px;
        }

        #minerdia-ugc-v8 .ug-panel-title {
            display: flex;
            align-items: center;
            gap: 9px;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
        }

        #minerdia-ugc-v8 .ug-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #75f3dc;
            box-shadow: 0 0 0 5px rgba(117, 243, 220, .13);
        }

        #minerdia-ugc-v8 .ug-panel-note {
            color: #bcb9d5;
            font-size: 10px;
        }

        /* SCROLL */

        #minerdia-ugc-v8 .ug-viewport {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch;
            overscroll-behavior-x: contain;
        }

        #minerdia-ugc-v8 .ug-viewport::-webkit-scrollbar {
            display: none;
        }

        #minerdia-ugc-v8 .ug-track {
            display: flex;
            gap: 16px;
            padding: 3px 2px 16px;
        }

        /* REEL CARDS */

        #minerdia-ugc-v8 .ug-reel {
            position: relative;
            flex: 0 0 calc((100% - 48px)/4);
            min-width: 0;
            aspect-ratio: 9/16;
            max-height: 430px;
            padding: 6px;
            border-radius: 23px;
            scroll-snap-align: start;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, .32);
            background: linear-gradient(145deg,
                    rgba(255, 255, 255, .27),
                    rgba(255, 255, 255, .05) 48%,
                    rgba(255, 255, 255, .16));
            -webkit-backdrop-filter: blur(14px) saturate(160%);
            backdrop-filter: blur(14px) saturate(160%);
            box-shadow: 0 13px 30px rgba(0, 0, 0, .22);
            transition: transform .3s;
        }

        #minerdia-ugc-v8 .ug-reel:hover {
            transform: translateY(-4px);
        }

        #minerdia-ugc-v8 .ug-reel-inner {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 17px;
            background: linear-gradient(155deg, #6750a5, #284c66, #123d43);
            cursor: pointer;
        }

        /* THUMBNAIL IMAGE */

        #minerdia-ugc-v8 .ug-thumb {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 1;
            transition: opacity .3s;
        }

        #minerdia-ugc-v8 .ug-thumb.ug-hidden {
            opacity: 0;
        }

        /* VIDEO PREVIEW */

        #minerdia-ugc-v8 .ug-preview {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: transparent;
            pointer-events: none;
            opacity: 0;
        }

        #minerdia-ugc-v8 .ug-preview.ug-ready {
            opacity: 1;
        }

        #minerdia-ugc-v8 .ug-reel-inner::after {
            content: "";
            position: absolute;
            inset: auto 0 0;
            height: 30%;
            background: linear-gradient(transparent, rgba(0, 0, 0, .64));
            pointer-events: none;
        }

        /* LABELS */

        #minerdia-ugc-v8 .ug-number {
            position: absolute;
            z-index: 2;
            left: 12px;
            top: 12px;
            padding: 6px 10px;
            border: 1px solid rgba(255, 255, 255, .28);
            border-radius: 40px;
            background: rgba(20, 20, 40, .35);
            backdrop-filter: blur(12px);
            color: #fff;
            font-size: 9px;
            font-weight: 700;
        }

        #minerdia-ugc-v8 .ug-reel-title {
            position: absolute;
            z-index: 2;
            left: 13px;
            right: 13px;
            bottom: 14px;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(0, 0, 0, .5);
        }

        /* PLAY BUTTON */

        #minerdia-ugc-v8 .ug-play {
            position: absolute;
            z-index: 3;
            left: 50%;
            top: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            padding: 0;
            border: 1px solid rgba(255, 255, 255, .85);
            border-radius: 50%;
            background: rgba(255, 255, 255, .93);
            color: #58349a;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .22);
            cursor: pointer;
            transform: translate(-50%, -50%);
            transition: transform .25s;
        }

        #minerdia-ugc-v8 .ug-play:hover {
            transform: translate(-50%, -50%) scale(1.08);
        }

        #minerdia-ugc-v8 .ug-play svg {
            width: 23px;
            height: 23px;
            margin-left: 3px;
            fill: currentColor;
        }

        /* CONTROLS */

        #minerdia-ugc-v8 .ug-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            margin-top: 2px;
        }

        #minerdia-ugc-v8 .ug-status {
            color: #c7c3df;
            font-size: 10px;
        }

        #minerdia-ugc-v8 .ug-nav {
            display: flex;
            gap: 8px;
        }

        #minerdia-ugc-v8 .ug-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 37px;
            height: 37px;
            padding: 0;
            border: 1px solid rgba(255, 255, 255, .28);
            border-radius: 50%;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            cursor: pointer;
        }

        #minerdia-ugc-v8 .ug-arrow:hover {
            background: rgba(255, 255, 255, .25);
        }

        #minerdia-ugc-v8 .ug-arrow svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.5;
        }

        /* POPUP: STYLES ALSO WORK WHEN MOVED TO BODY */

        #ug-video-modal-v8 {
            position: fixed !important;
            inset: 0 !important;
            z-index: 2147483647 !important;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 16px;
            background: rgba(8, 7, 17, .97);
            -webkit-backdrop-filter: blur(15px);
            backdrop-filter: blur(15px);
        }

        #ug-video-modal-v8.ug-open {
            display: flex !important;
        }

        #ug-video-modal-v8 .ug-modal-frame {
            position: relative;
            width: min(calc((100dvh - 32px)*9/16), calc(100vw - 32px));
            height: min(calc(100dvh - 32px), calc((100vw - 32px)*16/9));
            max-width: 100%;
            max-height: 100%;
            aspect-ratio: 9/16;
            border-radius: 15px;
            overflow: hidden;
            background: #000;
            box-shadow: 0 20px 80px rgba(0, 0, 0, .6);
        }

        #ug-video-modal-v8 .ug-modal-video {
            display: block !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: contain !important;
            background: #000 !important;
        }

        #ug-video-modal-v8 .ug-close {
            position: absolute !important;
            z-index: 10 !important;
            top: 12px !important;
            right: 12px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 44px !important;
            height: 44px !important;
            min-width: 44px !important;
            min-height: 44px !important;
            padding: 0 !important;
            margin: 0 !important;
            border: 0 !important;
            border-radius: 50% !important;
            background: #fff !important;
            color: #201a3e !important;
            font-size: 28px !important;
            line-height: 1 !important;
            cursor: pointer !important;
        }

        /* TABLET */

        @media(max-width:1024px) {
            #minerdia-ugc-v8 .ug-reel {
                flex-basis: calc((100% - 32px)/3);
            }
        }

        /* MOBILE CENTER ALIGN */

        @media(max-width:767px) {

            #minerdia-ugc-v8 {
                padding: 25px 12px 35px;
            }

            #minerdia-ugc-v8 .ug-heading {
                grid-template-columns: 1fr;
                justify-items: center;
                gap: 15px;
                margin-bottom: 22px;
                text-align: center;
            }

            #minerdia-ugc-v8 .ug-heading>div:first-child {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            #minerdia-ugc-v8 .ug-kicker {
                justify-content: center;
                font-size: 9px;
                letter-spacing: 1.1px;
            }

            #minerdia-ugc-v8 .ug-kicker::before {
                display: none;
            }

            #minerdia-ugc-v8 .ug-title {
                font-size: 32px;
                text-align: center;
            }

            #minerdia-ugc-v8 .ug-description {
                max-width: 340px;
                margin: 10px auto 0;
                text-align: center;
                font-size: 11px;
                line-height: 1.8;
            }

            #minerdia-ugc-v8 .ug-price {
                width: min(100%, 310px);
                min-width: 0;
                padding: 15px 18px;
                text-align: center;
            }

            #minerdia-ugc-v8 .ug-price strong {
                font-size: 20px;
            }

            #minerdia-ugc-v8 .ug-panel {
                padding: 16px 10px 13px;
                border-radius: 19px;
            }

            #minerdia-ugc-v8 .ug-panel-top {
                justify-content: center;
                text-align: center;
            }

            #minerdia-ugc-v8 .ug-panel-title {
                justify-content: center;
            }

            #minerdia-ugc-v8 .ug-panel-note {
                display: none;
            }

            #minerdia-ugc-v8 .ug-track {
                gap: 11px;
            }

            #minerdia-ugc-v8 .ug-reel {
                flex: 0 0 68%;
                max-height: none;
                padding: 5px;
                border-radius: 19px;
            }

            #minerdia-ugc-v8 .ug-reel-inner {
                border-radius: 14px;
            }

            #minerdia-ugc-v8 .ug-controls {
                flex-direction: column;
                justify-content: center;
                gap: 12px;
                text-align: center;
            }

            #minerdia-ugc-v8 .ug-status {
                text-align: center;
                font-size: 9px;
            }

            #minerdia-ugc-v8 .ug-nav {
                justify-content: center;
            }

            #ug-video-modal-v8 {
                padding: 10px !important;
            }

            #ug-video-modal-v8 .ug-modal-frame {
                width: min(calc((100dvh - 20px)*9/16), calc(100vw - 20px));
                height: min(calc(100dvh - 20px), calc((100vw - 20px)*16/9));
                border-radius: 12px;
            }
        }

        @media(prefers-reduced-motion:reduce) {
            #minerdia-ugc-v8 * {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>

    <div class="ug-container">

        <!-- HEADING -->
        <div class="ug-heading">

            <div>
                <span class="ug-kicker">Creator-Led Video Production</span>

                <h2 class="ug-title">
                    UGC Ad <span>Videos.</span>
                </h2>

                <p class="ug-description">
                    Real creators. Authentic stories. Scroll-stopping ad creatives
                    designed to make your brand stand out.
                </p>
            </div>

            <div class="ug-price ug-glass">
                <small>UGC Video Production Package</small>
                <strong>₹45,000 – ₹60,000</strong>
                <span>Pack of 6 Videos · Reel 9:16</span>
            </div>

        </div>

        <!-- GLASS SLIDER -->
        <div class="ug-panel ug-glass">

            <div class="ug-panel-top">
                <div class="ug-panel-title">
                    <span class="ug-dot"></span>
                    UGC Creative Showcase
                </div>

                <span class="ug-panel-note">
                    Swipe to explore our creative work
                </span>
            </div>

            <div class="ug-viewport">
                <div class="ug-track">

                    <!-- REEL 01 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/M3M-2.mp4">
                        <div class="ug-reel-inner">
                            <img class="ug-thumb"
                                src="<?php echo BASE; ?>assets/videos/M3M-2.mp4"
                                alt="" style="display:none">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/M3M-2.mp4#t=0.5"></video>
                            <span class="ug-number">01 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 1">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 01</span>
                        </div>
                    </article>

                    <!-- REEL 02 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/M3M-3.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/M3M-3.mp4#t=0.5"></video>
                            <span class="ug-number">02 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 2">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 02</span>
                        </div>
                    </article>

                    <!-- REEL 03 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/alpha-auto.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/alpha-auto.mp4#t=0.5"></video>
                            <span class="ug-number">03 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 3">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 03</span>
                        </div>
                    </article>

                    <!-- REEL 04 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/alpha-auto-2.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/alpha-auto-2.mp4#t=0.5"></video>
                            <span class="ug-number">04 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 4">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 04</span>
                        </div>
                    </article>

                    <!-- REEL 05 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/M3M-2.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/M3M-2.mp4#t=0.5"></video>
                            <span class="ug-number">05 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 5">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 05</span>
                        </div>
                    </article>

                    <!-- REEL 06 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/M3M-3.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/M3M-3.mp4#t=0.5"></video>
                            <span class="ug-number">06 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 6">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 06</span>
                        </div>
                    </article>

                    <!-- REEL 07 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/alpha-auto.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/alpha-auto.mp4#t=0.5"></video>
                            <span class="ug-number">07 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 7">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 07</span>
                        </div>
                    </article>

                    <!-- REEL 08 -->
                    <article class="ug-reel"
                        data-video="<?php echo BASE; ?>assets/videos/alpha-auto-2.mp4">
                        <div class="ug-reel-inner">
                            <video class="ug-preview" muted playsinline
                                preload="auto"
                                src="<?php echo BASE; ?>assets/videos/alpha-auto-2.mp4#t=0.5"></video>
                            <span class="ug-number">08 / UGC</span>
                            <button class="ug-play" type="button" aria-label="Play UGC reel 8">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 4v16l13-8z" />
                                </svg>
                            </button>
                            <span class="ug-reel-title">UGC Creative 08</span>
                        </div>
                    </article>

                </div>
            </div>

            <!-- CONTROLS -->
            <div class="ug-controls">
                <span class="ug-status">
                    Auto sliding · Tap to watch · Swipe on mobile
                </span>

                <div class="ug-nav">
                    <button class="ug-arrow ug-prev" type="button" aria-label="Previous">
                        <svg viewBox="0 0 24 24">
                            <path d="M15 18l-6-6 6-6" />
                        </svg>
                    </button>
                    <button class="ug-arrow ug-next" type="button" aria-label="Next">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 6l6 6-6 6" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </div>

    <!-- VIDEO MODAL; JS MOVES IT OUTSIDE ELEMENTOR CONTAINER -->
    <div id="ug-video-modal-v8" aria-hidden="true">
        <div class="ug-modal-frame" role="dialog" aria-modal="true" aria-label="UGC video player">
            <video class="ug-modal-video" controls playsinline preload="auto"></video>
            <button class="ug-close" type="button" aria-label="Close video">×</button>
        </div>
    </div>

    <script>
        (function() {

            const root = document.getElementById('minerdia-ugc-v8');
            if (!root || root.dataset.ready === '1') return;
            root.dataset.ready = '1';

            const viewport = root.querySelector('.ug-viewport');
            const cards = [...root.querySelectorAll('.ug-reel')];
            const prev = root.querySelector('.ug-prev');
            const next = root.querySelector('.ug-next');

            const modal = document.getElementById('ug-video-modal-v8');
            document.body.appendChild(modal);

            const player = modal.querySelector('.ug-modal-video');
            const closeBtn = modal.querySelector('.ug-close');

            let timer = null;
            let hovering = false;
            let touching = false;
            let viewerOpen = false;
            let previousOverflow = '';
            let previousFocus = null;

            const reducedMotion = window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;

            /* LOAD VISIBLE THUMBNAIL FRAMES */

            const previews = cards.map(card => card.querySelector('.ug-preview'));

            function revealFrame(video) {
                if (video.readyState >= 2) {
                    video.classList.add('ug-ready');
                }
            }

            previews.forEach(function(video) {

                video.addEventListener('loadeddata', function() {
                    revealFrame(video);
                });

                video.addEventListener('seeked', function() {
                    revealFrame(video);
                });

                video.addEventListener('canplay', function() {
                    revealFrame(video);
                });

                if (video.readyState >= 2) {
                    revealFrame(video);
                }

                /* Load actual video data so mobile can render a frame */
                video.load();

            });

            /* For browsers that delay video thumbnails:
               request first frames when section enters viewport. */

            if ('IntersectionObserver' in window) {

                const observer = new IntersectionObserver(function(entries) {

                    entries.forEach(function(entry) {

                        if (!entry.isIntersecting) return;

                        const video = entry.target;

                        if (video.readyState < 2) {
                            video.preload = 'auto';
                            video.load();
                        }

                        observer.unobserve(video);

                    });

                }, {
                    rootMargin: '400px 0px'
                });

                previews.forEach(video => observer.observe(video));

            }

            /* SLIDER */

            function stop() {
                if (timer) {
                    clearInterval(timer);
                    timer = null;
                }
            }

            function getStep() {
                if (cards.length < 2) return viewport.clientWidth;
                return cards[1].offsetLeft - cards[0].offsetLeft;
            }

            function move(direction) {

                const max = Math.max(
                    0,
                    viewport.scrollWidth - viewport.clientWidth
                );

                let target = viewport.scrollLeft + direction * getStep();

                if (target > max - 3) target = 0;
                if (target < 0) target = max;

                viewport.scrollTo({
                    left: target,
                    behavior: reducedMotion ? 'auto' : 'smooth'
                });

            }

            function start() {

                stop();

                if (
                    reducedMotion ||
                    hovering ||
                    touching ||
                    viewerOpen ||
                    document.hidden
                ) return;

                timer = setInterval(function() {
                    move(1);
                }, 4000);

            }

            /* MODAL */

            function openVideo(card) {

                const url = card.dataset.video;
                if (!url) return;

                previousFocus = document.activeElement;
                previousOverflow = document.body.style.overflow;

                viewerOpen = true;
                stop();

                document.body.style.overflow = 'hidden';

                player.pause();
                player.src = url;
                player.currentTime = 0;
                player.muted = false;

                modal.classList.add('ug-open');
                modal.setAttribute('aria-hidden', 'false');

                closeBtn.focus({
                    preventScroll: true
                });

                player.play().catch(function() {
                    /* Native controls remain available */
                });

            }

            function closeVideo() {

                if (!viewerOpen) return;

                viewerOpen = false;

                player.pause();
                player.removeAttribute('src');
                player.load();

                modal.classList.remove('ug-open');
                modal.setAttribute('aria-hidden', 'true');

                document.body.style.overflow = previousOverflow;

                if (previousFocus && previousFocus.isConnected) {
                    previousFocus.focus({
                        preventScroll: true
                    });
                }

                start();

            }

            cards.forEach(function(card) {

                const button = card.querySelector('.ug-play');

                button.addEventListener('click', function(event) {
                    event.stopPropagation();
                    openVideo(card);
                });

                card.querySelector('.ug-reel-inner')
                    .addEventListener('click', function(event) {

                        if (event.target.closest('.ug-play')) return;
                        openVideo(card);

                    });

            });

            closeBtn.addEventListener('click', closeVideo);

            modal.addEventListener('click', function(event) {
                if (event.target === modal) closeVideo();
            });

            document.addEventListener('keydown', function(event) {
                if (viewerOpen && event.key === 'Escape') {
                    closeVideo();
                }
            });

            /* BUTTONS */

            prev.addEventListener('click', function() {
                move(-1);
                start();
            });

            next.addEventListener('click', function() {
                move(1);
                start();
            });

            /* AUTO PAUSE / RESUME */

            root.addEventListener('mouseenter', function() {
                hovering = true;
                stop();
            });

            root.addEventListener('mouseleave', function() {
                hovering = false;
                start();
            });

            viewport.addEventListener('touchstart', function() {
                touching = true;
                stop();
            }, {
                passive: true
            });

            viewport.addEventListener('touchend', function() {
                touching = false;
                start();
            }, {
                passive: true
            });

            viewport.addEventListener('touchcancel', function() {
                touching = false;
                start();
            }, {
                passive: true
            });

            document.addEventListener('visibilitychange', function() {
                if (document.hidden) stop();
                else start();
            });

            start();

        })();
    </script>

</section>
<!-- END MINERDIA UGC SLIDER V8 -->