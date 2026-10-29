<!-- =====================================================
 MINERDIA STUDIO - VIDEO PORTFOLIO HERO
 COMPLETE FINAL CODE - WITHOUT VIDEO FILTER BUTTONS
 WORDPRESS / ELEMENTOR READY
 ===================================================== -->

<section id="minerdia-video-hero">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        #minerdia-video-hero {
            --mvh-p: #58349a;
            --mvh-p2: #7a55c0;
            --mvh-teal: #329da1;
            --mvh-ink: #1c1838;
            --mvh-mute: #5e5c7a;
            --mvh-line: #e2e0f0;
            --mvh-grad: linear-gradient(135deg,
                    #58349a 0%,
                    #4a63a0 52%,
                    #329da1 100%);

            position: relative;
            isolation: isolate;
            display: block;
            width: 100%;
            padding: 100px 20px 65px;
            margin: 0;
            overflow: hidden;
            background: #ffffff;
            color: var(--mvh-ink);
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            text-align: center;
        }

        #minerdia-video-hero *,
        #minerdia-video-hero *::before,
        #minerdia-video-hero *::after {
            box-sizing: border-box;
        }

        #minerdia-video-hero h1,
        #minerdia-video-hero p {
            margin: 0;
            padding: 0;
        }

        /* ================= BACKGROUND ================= */

        #minerdia-video-hero .mvh-bg {
            position: absolute;
            inset: 0;
            z-index: -1;
            pointer-events: none;
        }

        #minerdia-video-hero .mvh-mesh {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(480px 360px at 6% 6%,
                    rgba(88, 52, 154, .20),
                    transparent 70%),
                radial-gradient(440px 340px at 96% 10%,
                    rgba(50, 157, 161, .16),
                    transparent 70%),
                radial-gradient(520px 380px at 94% 100%,
                    rgba(50, 157, 161, .20),
                    transparent 70%),
                radial-gradient(480px 340px at 4% 100%,
                    rgba(88, 52, 154, .12),
                    transparent 70%);
        }

        #minerdia-video-hero .mvh-grid-bg {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(88, 52, 154, .07) 1px,
                    transparent 1px),
                linear-gradient(90deg,
                    rgba(88, 52, 154, .07) 1px,
                    transparent 1px);
            background-size: 48px 48px;

            -webkit-mask-image: radial-gradient(ellipse 70% 80% at 50% 45%,
                    #000 20%,
                    transparent 78%);

            mask-image: radial-gradient(ellipse 70% 80% at 50% 45%,
                    #000 20%,
                    transparent 78%);
        }

        #minerdia-video-hero .mvh-beam {
            position: absolute;
            left: 50%;
            top: -20%;
            width: 900px;
            height: 440px;
            transform: translateX(-50%);
            background: radial-gradient(ellipse at center,
                    rgba(122, 85, 192, .14),
                    rgba(50, 157, 161, .08) 45%,
                    transparent 70%);
            filter: blur(10px);
        }

        #minerdia-video-hero .mvh-ring {
            position: absolute;
            border-radius: 50%;
            border: 1.5px dashed var(--mvh-teal);
            opacity: .4;
            animation: mvh-spin 40s linear infinite;
        }

        #minerdia-video-hero .mvh-ring-one {
            width: 230px;
            height: 230px;
            right: -70px;
            bottom: -70px;
            border-color: var(--mvh-p2);
            animation-direction: reverse;
        }

        #minerdia-video-hero .mvh-ring-two {
            width: 80px;
            height: 80px;
            left: 14%;
            top: 34px;
            border-style: solid;
            border-color: var(--mvh-p);
            opacity: .18;
        }

        #minerdia-video-hero .mvh-strip {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 5px;
            background: var(--mvh-grad);
        }

        #minerdia-video-hero .mvh-strip::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -12px;
            height: 7px;
            background: repeating-linear-gradient(90deg,
                    rgba(88, 52, 154, .22) 0 16px,
                    transparent 16px 32px);

            -webkit-mask-image: linear-gradient(90deg,
                    transparent,
                    #000 25%,
                    #000 75%,
                    transparent);

            mask-image: linear-gradient(90deg,
                    transparent,
                    #000 25%,
                    #000 75%,
                    transparent);
        }

        /* ================= ANIMATIONS ================= */

        @keyframes mvh-spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes mvh-rise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes mvh-ping {
            0% {
                box-shadow: 0 0 0 0 rgba(50, 157, 161, .6);
            }

            100% {
                box-shadow: 0 0 0 10px rgba(50, 157, 161, 0);
            }
        }

        @keyframes mvh-shine {

            0%,
            55% {
                left: -60%;
            }

            100% {
                left: 130%;
            }
        }

        /* ================= CONTENT ================= */

        #minerdia-video-hero .mvh-inner {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 880px;
            margin: 0 auto;
        }

        #minerdia-video-hero .mvh-inner>* {
            animation: mvh-rise .8s both;
        }

        /* ================= TOP BADGE ================= */

        #minerdia-video-hero .mvh-tag {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 7px 18px;
            margin-bottom: 16px;
            border: 1px solid var(--mvh-line);
            border-radius: 50px;
            background: rgba(255, 255, 255, .85);
            color: var(--mvh-p);
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 10px 24px rgba(88, 52, 154, .12);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        #minerdia-video-hero .mvh-tag-dot {
            display: block;
            flex-shrink: 0;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--mvh-teal);
            animation: mvh-ping 2s infinite;
        }

        /* ================= HEADING ================= */

        #minerdia-video-hero .mvh-title {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(30px, 5.4vw, 58px);
            font-weight: 800;
            line-height: 1.12;
            letter-spacing: -1.3px;
            color: var(--mvh-ink);
            animation-delay: .1s;
        }

        #minerdia-video-hero .mvh-title span {
            background: var(--mvh-grad);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #minerdia-video-hero .mvh-lead {
            max-width: 600px;
            margin: 14px auto 24px;
            color: var(--mvh-mute);
            font-size: clamp(14.5px, 1.9vw, 17px);
            line-height: 1.8;
            animation-delay: .2s;
        }

        /* ================= BUTTON CONTAINER ================= */

        #minerdia-video-hero .mvh-cta {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            animation-delay: .3s;
        }

        #minerdia-video-hero .mvh-cta::before,
        #minerdia-video-hero .mvh-cta::after {
            content: "";
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            filter: blur(18px);
            pointer-events: none;
        }

        #minerdia-video-hero .mvh-cta::before {
            width: 100px;
            height: 60px;
            left: calc(50% - 10px);
            top: -4px;
            background: radial-gradient(circle,
                    rgba(50, 157, 161, .35),
                    transparent 70%);
        }

        #minerdia-video-hero .mvh-cta::after {
            width: 90px;
            height: 60px;
            left: calc(50% + 90px);
            bottom: -8px;
            background: radial-gradient(circle,
                    rgba(88, 52, 154, .25),
                    transparent 70%);
        }

        /* ================= SHARED BUTTON STYLE ================= */

        #minerdia-video-hero a.mvh-btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            padding: 14px 32px;
            border: 0;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 600;
            line-height: 1.4;
            text-decoration: none !important;
            cursor: pointer;
            transition:
                transform .35s cubic-bezier(.2, .8, .2, 1),
                box-shadow .35s cubic-bezier(.2, .8, .2, 1);
        }

        /* ================= PRIMARY BUTTON ================= */

        #minerdia-video-hero a.mvh-btn-main,
        #minerdia-video-hero a.mvh-btn-main:hover,
        #minerdia-video-hero a.mvh-btn-main:focus,
        #minerdia-video-hero a.mvh-btn-main:active,
        #minerdia-video-hero a.mvh-btn-main:visited {
            color: #ffffff !important;
            -webkit-text-fill-color: #ffffff !important;
            text-decoration: none !important;
            background: var(--mvh-grad) !important;
        }

        #minerdia-video-hero a.mvh-btn-main {
            box-shadow: 0 14px 30px rgba(88, 52, 154, .38);
        }

        #minerdia-video-hero a.mvh-btn-main:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(88, 52, 154, .45);
        }

        #minerdia-video-hero .mvh-arrow {
            display: inline-block;
            color: #ffffff !important;
            transition: transform .3s;
        }

        #minerdia-video-hero .mvh-btn-main:hover .mvh-arrow {
            transform: translateX(5px);
        }

        /* ================= LIQUID GLASS WHATSAPP ================= */

        #minerdia-video-hero a.mvh-btn-glass {
            overflow: hidden;
            color: #0c5559 !important;
            -webkit-text-fill-color: #0c5559 !important;
            font-weight: 700;

            background: linear-gradient(135deg,
                    rgba(255, 255, 255, .92),
                    rgba(50, 157, 161, .30) 60%,
                    rgba(255, 255, 255, .85)) !important;

            border: 1px solid rgba(255, 255, 255, .95);

            backdrop-filter: blur(6px) saturate(130%);
            -webkit-backdrop-filter: blur(6px) saturate(130%);

            box-shadow:
                0 10px 24px rgba(50, 157, 161, .22),
                inset 0 1.5px 1px rgba(255, 255, 255, .95),
                inset 0 -6px 12px rgba(50, 157, 161, .16),
                inset 0 0 0 1px rgba(50, 157, 161, .22);

            text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
        }

        #minerdia-video-hero a.mvh-btn-glass:hover,
        #minerdia-video-hero a.mvh-btn-glass:focus,
        #minerdia-video-hero a.mvh-btn-glass:visited {
            color: #0c5559 !important;
            -webkit-text-fill-color: #0c5559 !important;
        }

        #minerdia-video-hero a.mvh-btn-glass::before {
            content: "";
            position: absolute;
            left: 8%;
            right: 8%;
            top: 2px;
            height: 46%;
            border-radius: 50px;

            background: linear-gradient(180deg,
                    rgba(255, 255, 255, .85),
                    rgba(255, 255, 255, 0));

            opacity: .55;
            pointer-events: none;
        }

        #minerdia-video-hero a.mvh-btn-glass::after {
            content: "";
            position: absolute;
            top: -20%;
            bottom: -20%;
            width: 38%;
            left: -60%;
            transform: skewX(-22deg);

            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, .55),
                    transparent);

            animation: mvh-shine 4.5s ease-in-out infinite;
            pointer-events: none;
        }

        #minerdia-video-hero a.mvh-btn-glass:hover {
            transform: translateY(-4px) scale(1.03);

            box-shadow:
                0 16px 34px rgba(50, 157, 161, .32),
                inset 0 1.5px 1px #ffffff,
                inset 0 -6px 14px rgba(50, 157, 161, .22),
                inset 0 0 0 1px rgba(50, 157, 161, .28);
        }

        #minerdia-video-hero .mvh-glass-text {
            position: relative;
            z-index: 1;
            white-space: nowrap;
        }

        /* ================= TABLET ================= */

        @media(max-width:900px) {

            #minerdia-video-hero .mvh-ring-two {
                display: none;
            }

        }

        /* ================= MOBILE ================= */

        @media(max-width:600px) {

            #minerdia-video-hero {
                padding: 85px 15px 48px;
            }

            #minerdia-video-hero .mvh-title {
                font-size: clamp(29px, 7vw, 40px);
                letter-spacing: -.8px;
            }

            #minerdia-video-hero .mvh-lead {
                font-size: 13px;
                margin: 14px auto 23px;
            }

            #minerdia-video-hero .mvh-tag {
                font-size: 10px;
                padding: 7px 12px;
            }

            /* TWO BUTTONS IN ONE ROW */

            #minerdia-video-hero .mvh-cta {
                display: grid;
                grid-template-columns:
                    minmax(0, 1fr) minmax(0, 1fr);
                gap: 10px;
                width: 100%;
            }

            #minerdia-video-hero a.mvh-btn {
                width: 100%;
                min-width: 0;
                min-height: 47px;
                padding: 12px 8px;
                font-size: 12px;
                gap: 5px;
                white-space: nowrap;
            }

        }

        @media(max-width:360px) {

            #minerdia-video-hero a.mvh-btn {
                font-size: 11px;
                padding: 11px 5px;
            }

        }

        /* ================= REDUCED MOTION ================= */

        @media(prefers-reduced-motion:reduce) {

            #minerdia-video-hero *,
            #minerdia-video-hero *::before,
            #minerdia-video-hero *::after {
                animation: none !important;
                transition: none !important;
            }

        }
    </style>

    <!-- ================= DECORATIVE BACKGROUND ================= -->

    <div class="mvh-bg" aria-hidden="true">

        <div class="mvh-mesh"></div>

        <div class="mvh-grid-bg"></div>

        <div class="mvh-beam"></div>

        <div class="mvh-ring mvh-ring-one"></div>

        <div class="mvh-ring mvh-ring-two"></div>

        <div class="mvh-strip"></div>

    </div>

    <!-- ================= HERO CONTENT ================= -->

    <div class="mvh-inner">

        <!-- TOP BADGE -->

        <div class="mvh-tag">

            <span class="mvh-tag-dot"></span>

            Video Production · Podcast · UGC

        </div>

        <!-- MAIN HEADING -->

        <h1 class="mvh-title">

            Our Video Work &amp;

            <span>Estimated Pricing</span>

        </h1>

        <!-- DESCRIPTION -->

        <p class="mvh-lead">

            Watch real samples of every video type we create,
            see the starting price, and contact us directly
            for the one you like.

        </p>

        <!-- ================= TWO CTA BUTTONS ================= -->

        <div class="mvh-cta">

            <!-- BUTTON 01 -->

            <a
                class="mvh-btn mvh-btn-main"
                href="#rates">

                View Rate List

                <span class="mvh-arrow">→</span>

            </a>

            <!-- BUTTON 02 -->

            <a
                class="mvh-btn mvh-btn-glass"
                href="https://wa.me/919711555223?text=Hi%20Minerdia%20Studio%2C%20I%20want%20to%20make%20a%20video."
                target="_blank"
                rel="noopener noreferrer">

                <span class="mvh-glass-text">
                    WhatsApp Us
                </span>

            </a>

        </div>

    </div>

</section>

<!-- END MINERDIA VIDEO PORTFOLIO HERO -->