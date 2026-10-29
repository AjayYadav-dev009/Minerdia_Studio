<!-- =====================================================
 MINERDIA STUDIO - BRAND TESTIMONIAL VIDEO SHOWCASE
 MOBILE CENTER ALIGNED | RESPONSIVE | FINAL
 ===================================================== -->

<section id="ms-video-showcase-final">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        #ms-video-showcase-final {
            --purple: #58349a;
            --teal: #329da1;
            --ink: #1c1838;
            --muted: #696780;
            --gradient: linear-gradient(135deg, #58349a, #5366a7 55%, #329da1);

            position: relative;
            isolation: isolate;
            width: 100%;
            padding: 65px 20px 75px;
            background:
                radial-gradient(ellipse at 100% 0%, rgba(88, 52, 154, .09), transparent 42%),
                radial-gradient(ellipse at 0% 100%, rgba(50, 157, 161, .09), transparent 45%),
                #f8f9fd;
            color: var(--ink);
            font-family: 'Poppins', sans-serif;
        }

        #ms-video-showcase-final *,
        #ms-video-showcase-final *::before,
        #ms-video-showcase-final *::after {
            box-sizing: border-box;
        }

        #ms-video-showcase-final h2,
        #ms-video-showcase-final p {
            margin: 0;
            padding: 0;
        }

        #ms-video-showcase-final .ms-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* SECTION HEADER */

        #ms-video-showcase-final .ms-header {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: end;
            gap: 28px;
            margin-bottom: 30px;
        }

        #ms-video-showcase-final .ms-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 14px;
            color: var(--purple);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.6px;
            text-transform: uppercase;
        }

        #ms-video-showcase-final .ms-eyebrow::before {
            content: "";
            width: 25px;
            height: 2px;
            background: var(--teal);
        }

        #ms-video-showcase-final .ms-title {
            color: var(--ink);
            font-family: 'Poppins', sans-serif;
            font-size: clamp(28px, 3.8vw, 46px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1.2px;
        }

        #ms-video-showcase-final .ms-title span {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #ms-video-showcase-final .ms-description {
            max-width: 660px;
            margin-top: 12px;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.85;
        }

        /* PRICE CARD */

        #ms-video-showcase-final .ms-price {
            position: relative;
            min-width: 225px;
            padding: 18px 22px;
            overflow: hidden;
            border: 1px solid #e7e1f1;
            border-radius: 17px;
            background: #fff;
            box-shadow: 0 12px 30px rgba(33, 28, 75, .06);
        }

        #ms-video-showcase-final .ms-price::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        #ms-video-showcase-final .ms-price small {
            display: block;
            color: var(--muted);
            font-size: 11px;
            font-weight: 600;
        }

        #ms-video-showcase-final .ms-price strong {
            display: block;
            margin-top: 4px;
            color: var(--ink);
            font-size: 25px;
            font-weight: 800;
            white-space: nowrap;
        }

        #ms-video-showcase-final .ms-price span {
            display: block;
            margin-top: 3px;
            color: var(--teal);
            font-size: 10px;
            font-weight: 600;
        }

        /* MAIN VIDEO LAYOUT */

        #ms-video-showcase-final .ms-showcase {
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(0, 1fr);
            align-items: center;
            gap: 20px;
        }

        /* LEFT FEATURED VIDEO */

        #ms-video-showcase-final .ms-featured {
            min-width: 0;
            overflow: hidden;
            border: 1px solid rgba(88, 52, 154, .15);
            border-radius: 19px;
            background: #0a0a12;
            box-shadow: 0 18px 45px rgba(36, 26, 75, .12);
        }

        /* RIGHT FOUR VIDEOS */

        #ms-video-showcase-final .ms-side {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            align-content: center;
            align-items: center;
            gap: 15px;
            min-width: 0;
        }

        #ms-video-showcase-final .ms-video-item {
            min-width: 0;
            overflow: hidden;
            border: 1px solid rgba(88, 52, 154, .14);
            border-radius: 15px;
            background: #0a0a12;
            box-shadow: 0 12px 28px rgba(36, 26, 75, .09);
            transition: transform .3s, box-shadow .3s;
        }

        #ms-video-showcase-final .ms-video-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 38px rgba(36, 26, 75, .16);
        }

        /* EXACT YOUTUBE 16:9 RATIO */

        #ms-video-showcase-final .ms-player {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            overflow: hidden;
            background: #090910;
        }

        #ms-video-showcase-final .ms-player iframe {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            border: 0;
            background: #090910;
        }

        /* TABLET */

        @media(max-width:1024px) {

            #ms-video-showcase-final .ms-showcase {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            #ms-video-showcase-final .ms-side {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 15px;
            }
        }

        /* MOBILE - ALL CONTENT CENTER ALIGNED */

        @media(max-width:767px) {

            #ms-video-showcase-final {
                padding: 38px 14px 48px;
            }

            #ms-video-showcase-final .ms-container {
                width: 100%;
                margin: 0 auto;
            }

            #ms-video-showcase-final .ms-header {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 19px;
                margin-bottom: 25px;
                text-align: center;
            }

            #ms-video-showcase-final .ms-header>div:first-child {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                text-align: center;
            }

            #ms-video-showcase-final .ms-eyebrow {
                justify-content: center;
                gap: 0;
                margin: 0 auto 12px;
                font-size: 9px;
                letter-spacing: 1px;
                text-align: center;
            }

            #ms-video-showcase-final .ms-eyebrow::before {
                display: none;
            }

            #ms-video-showcase-final .ms-title {
                width: 100%;
                max-width: 440px;
                margin: 0 auto;
                color: var(--ink);
                font-size: clamp(27px, 7vw, 35px);
                line-height: 1.25;
                letter-spacing: -.7px;
                text-align: center;
            }

            #ms-video-showcase-final .ms-title span {
                display: inline;
            }

            #ms-video-showcase-final .ms-description {
                width: 100%;
                max-width: 355px;
                margin: 13px auto 0;
                font-size: 12px;
                line-height: 1.85;
                text-align: center;
            }

            /* CENTERED PRICE CARD */

            #ms-video-showcase-final .ms-price {
                width: min(100%, 300px);
                min-width: 0;
                margin: 0 auto;
                padding: 16px 18px;
                border-radius: 16px;
                text-align: center;
            }

            #ms-video-showcase-final .ms-price small {
                font-size: 10px;
                text-align: center;
            }

            #ms-video-showcase-final .ms-price strong {
                margin-top: 6px;
                font-size: 23px;
                text-align: center;
            }

            #ms-video-showcase-final .ms-price span {
                margin-top: 5px;
                font-size: 10px;
                text-align: center;
            }

            /* VIDEOS */

            #ms-video-showcase-final .ms-showcase {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 14px;
                width: 100%;
            }

            #ms-video-showcase-final .ms-featured {
                width: 100%;
                border-radius: 15px;
            }

            #ms-video-showcase-final .ms-side {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
                width: 100%;
                align-items: center;
                justify-items: center;
            }

            #ms-video-showcase-final .ms-video-item {
                width: 100%;
                border-radius: 11px;
            }

            #ms-video-showcase-final .ms-player {
                width: 100%;
                aspect-ratio: 16/9;
            }
        }

        /* SMALL MOBILE */

        @media(max-width:380px) {

            #ms-video-showcase-final {
                padding-left: 10px;
                padding-right: 10px;
            }

            #ms-video-showcase-final .ms-title {
                font-size: 27px;
            }

            #ms-video-showcase-final .ms-side {
                gap: 8px;
            }
        }

        @media(prefers-reduced-motion:reduce) {
            #ms-video-showcase-final * {
                transition: none !important;
            }
        }
    </style>

    <div class="ms-container">

        <!-- SECTION HEADING -->
        <div class="ms-header">

            <div>

                <span class="ms-eyebrow">
                    Creative Production / Studio Shoots
                </span>

                <h2 class="ms-title">
                    Brand Testimonial
                    <span>Creative Work.</span>
                </h2>

                <p class="ms-description">
                    From real customer stories to professional brand
                    testimonials, we create studio-shot videos that
                    bring your brand's message to life.
                </p>

            </div>

            <!-- PRICE -->
            <div class="ms-price">

                <small>Estimated Production Cost</small>

                <strong>₹6,000 – ₹7,000</strong>

                <span>Studio Shoot Brand Testimonial</span>

            </div>

        </div>

        <!-- VIDEO SHOWCASE -->
        <div class="ms-showcase">

            <!-- FEATURED AUTOPLAY MUTED -->
            <div class="ms-featured">

                <div class="ms-player">

                    <iframe
                        src="https://www.youtube.com/embed/XdlG5dijVrg?autoplay=1&mute=1&controls=1&playsinline=1&rel=0"
                        title="Featured Brand Testimonial"
                        loading="eager"
                        allow="autoplay; encrypted-media; picture-in-picture; fullscreen"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>

                </div>

            </div>

            <!-- FOUR YOUTUBE VIDEOS -->
            <div class="ms-side">

                <!-- VIDEO 02 -->
                <div class="ms-video-item">

                    <div class="ms-player">

                        <iframe
                            src="https://www.youtube.com/embed/-3rNIBQag2M?controls=1&playsinline=1&rel=0"
                            title="Customer Story Video 02"
                            loading="lazy"
                            allow="autoplay; encrypted-media; picture-in-picture; fullscreen"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

                <!-- VIDEO 03 -->
                <div class="ms-video-item">

                    <div class="ms-player">

                        <iframe
                            src="https://www.youtube.com/embed/--XZFGRr-ts?controls=1&playsinline=1&rel=0"
                            title="Brand Experience Video 03"
                            loading="lazy"
                            allow="autoplay; encrypted-media; picture-in-picture; fullscreen"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

                <!-- VIDEO 04 -->
                <div class="ms-video-item">

                    <div class="ms-player">

                        <iframe
                            src="https://www.youtube.com/embed/Ubzf9NWJwwQ?controls=1&playsinline=1&rel=0"
                            title="Client Testimonial Video 04"
                            loading="lazy"
                            allow="autoplay; encrypted-media; picture-in-picture; fullscreen"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

                <!-- VIDEO 05 -->
                <div class="ms-video-item">

                    <div class="ms-player">

                        <iframe
                            src="https://www.youtube.com/embed/--XZFGRr-ts?controls=1&playsinline=1&rel=0"
                            title="Creative Production Video 05"
                            loading="lazy"
                            allow="autoplay; encrypted-media; picture-in-picture; fullscreen"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- END MINERDIA BRAND TESTIMONIAL SHOWCASE -->