<section class="msp-process" id="mspProcessSection">

    <div class="msp-process__container">

        <!-- Liquid Glass Subtitle -->
        <div class="msp-process__badge msp-process__reveal">
            <span class="msp-process__badge-dot" aria-hidden="true"></span>
            <span>Why Brands Choose Minerdia.</span>
        </div>

        <!-- Main Heading -->
        <h2
            class="msp-process__heading msp-process__reveal"
            style="--msp-delay:.08s;">
            <span>What Sets Us </span>
            <strong>Apart</strong>
        </h2>

        <!-- Description -->
        <p
            class="msp-process__description msp-process__reveal"
            style="--msp-delay:.14s;">
            Our approach is shaped by four core principles that guide every project, from strategy to execution, ensuring consistent quality and measurable outcomes.
        </p>

        <!-- Process Cards -->
        <div class="msp-process__grid">

            <!-- Step 01 -->
            <article
                class="msp-process__card msp-process__reveal"
                style="--msp-delay:.20s;">
                <div class="msp-process__icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="10.5" cy="10.5" r="5.5"></circle>
                        <path d="M15 15l4.5 4.5"></path>
                        <path d="M8 10.5h5"></path>
                        <path d="M10.5 8v5"></path>
                    </svg>
                </div>

                <span class="msp-process__step">Step 01</span>

                <h3>Strategic Clarity</h3>

                <p>
                    We do not create content for the sake of content. Every decision is grounded in research, audience insight, and a clear understanding of your business goals.
                </p>
            </article>

            <!-- Step 02 -->
            <article
                class="msp-process__card msp-process__reveal"
                style="--msp-delay:.27s;">
                <div class="msp-process__icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 19V10"></path>
                        <path d="M10 19V5"></path>
                        <path d="M16 19v-7"></path>
                        <path d="M22 19V3"></path>
                        <path d="M2 19h21"></path>
                    </svg>
                </div>

                <span class="msp-process__step">Step 02</span>

                <h3>Creative Precision</h3>

                <p>
                    Our team combines strong design sensibility with disciplined execution, ensuring every asset reflects your brand identity with consistency and quality.
                </p>
            </article>

            <!-- Step 03 -->
            <article
                class="msp-process__card msp-process__reveal"
                style="--msp-delay:.34s;">
                <div class="msp-process__icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 20h4l10-10-4-4L4 16v4z"></path>
                        <path d="M12.5 7.5l4 4"></path>
                        <path d="M15 5l2-2 4 4-2 2"></path>
                    </svg>
                </div>

                <span class="msp-process__step">Step 03</span>

                <h3>Data-Backed Decisions</h3>

                <p>
                    Performance is tracked continuously, and strategies are refined based on real results rather than assumptions, keeping your growth measurable and accountable.
                </p>
            </article>

            <!-- Step 04 -->
            <article
                class="msp-process__card msp-process__reveal"
                style="--msp-delay:.41s;">
                <div class="msp-process__icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 17l5-5 4 4 7-8"></path>
                        <path d="M15 8h5v5"></path>
                        <path d="M4 21h16"></path>
                    </svg>
                </div>

                <span class="msp-process__step">Step 04</span>

                <h3>Long-Term Partnership</h3>

                <p>
                    We view our client relationships as ongoing collaborations, not one-off projects, and remain invested in your brand's growth well beyond the initial launch.
                </p>
            </article>

        </div>

    </div>

    <style>
        /* =====================================================
                        SCOPED RESET
        ====================================================== */

        .msp-process,
        .msp-process *,
        .msp-process *::before,
        .msp-process *::after {
            box-sizing: border-box;
        }

        .msp-process {
            --msp-purple: #5a2ea6;
            --msp-purple-dark: #3e207b;
            --msp-blue: #385c9d;
            --msp-teal: #2fa8a1;
            --msp-black: #111111;
            --msp-text: #3f3f3f;

            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 32px 20px 52px;
            background: #ffffff !important;
            font-family: Arial, sans-serif;
        }

        .msp-process__container {
            position: relative;
            width: min(100%, 1180px);
            margin: 0 auto;
            padding: 0 0 12px;
            overflow: visible;
            text-align: center;
        }

        /* =====================================================
                        LIQUID GLASS BADGE
        ====================================================== */

        .msp-process__badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            min-height: 42px;
            margin: 0 auto 14px;
            padding: 8px 19px 8px 13px;

            border: 1px solid rgba(90, 46, 166, 0.13);
            border-radius: 999px;

            color: var(--msp-black);

            background:
                linear-gradient(135deg,
                    rgba(255, 255, 255, 0.98),
                    rgba(247, 245, 253, 0.82),
                    rgba(237, 250, 249, 0.74));

            box-shadow:
                0 9px 24px rgba(51, 37, 92, 0.075),
                inset 1px 1px 0 #ffffff;

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            font-size: 14px;
            line-height: 1.35;
            font-weight: 600;
            white-space: nowrap;
        }

        .msp-process__badge-dot {
            position: relative;
            display: block;
            flex: 0 0 9px;

            width: 9px;
            height: 9px;
            border-radius: 50%;

            background:
                linear-gradient(135deg,
                    var(--msp-purple),
                    var(--msp-blue),
                    var(--msp-teal));

            box-shadow: 0 0 11px rgba(47, 168, 161, 0.48);
            animation: mspProcessDot 2.4s ease-in-out infinite;
        }

        .msp-process__badge-dot::after {
            content: "";
            position: absolute;
            inset: -4px;

            border: 1px solid rgba(90, 46, 166, 0.18);
            border-radius: 50%;

            animation: mspProcessDotRing 2.4s ease-out infinite;
        }

        /* =====================================================
                        HEADING
        ====================================================== */

        .msp-process__heading {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            width: 100%;
            margin: 0;
            padding: 2px 0 5px;

            overflow: visible;

            color: var(--msp-black);
            font-family: Arial, sans-serif;
            font-size: clamp(42px, 4vw, 60px);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -2px;
            white-space: nowrap;
        }

        .msp-process__heading span {
            color: var(--msp-black);
        }

        .msp-process__heading strong {
            display: inline-block;
            padding: 0 2px 4px;

            color: transparent;
            font: inherit;
            line-height: inherit;

            background:
                linear-gradient(110deg,
                    var(--msp-purple) 0%,
                    var(--msp-purple-dark) 30%,
                    var(--msp-blue) 65%,
                    var(--msp-teal) 100%);

            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .msp-process__description {
            width: min(100%, 820px);
            margin: 14px auto 0;

            color: var(--msp-text);
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.58;
            font-weight: 400;
            text-align: center;
        }

        /* =====================================================
                        PROCESS GRID — BACKGROUND LINE REMOVED
        ====================================================== */

        .msp-process__grid {
            position: relative;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;

            width: 100%;
            margin-top: 34px;
            padding: 8px 2px 16px;

            overflow: visible;
            isolation: isolate;
        }

        /* =====================================================
                        COMPACT LIQUID GLASS CARDS
        ====================================================== */

        .msp-process__card {
            position: relative;
            z-index: 2;

            display: flex;
            flex-direction: column;
            align-items: center;

            min-width: 0;
            min-height: 225px;
            overflow: hidden;

            padding: 20px 16px 18px;

            border: 1px solid rgba(90, 46, 166, 0.13);
            border-radius: 21px;

            background:
                linear-gradient(145deg,
                    rgba(255, 255, 255, 0.97),
                    rgba(248, 247, 252, 0.83),
                    rgba(239, 250, 249, 0.68));

            box-shadow:
                0 11px 26px rgba(39, 30, 72, 0.075),
                inset 1px 1px 0 rgba(255, 255, 255, 1);

            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            transition:
                transform 0.35s ease,
                border-color 0.35s ease,
                box-shadow 0.35s ease,
                background 0.35s ease;
        }

        /* Animated liquid border */
        .msp-process__card::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 0;

            padding: 1.2px;
            border-radius: inherit;
            pointer-events: none;

            background:
                linear-gradient(125deg,
                    rgba(90, 46, 166, 0.20),
                    rgba(56, 92, 157, 0.15),
                    rgba(47, 168, 161, 0.20),
                    rgba(90, 46, 166, 0.20));

            background-size: 280% 280%;
            animation: mspProcessBorder 9s ease-in-out infinite;

            -webkit-mask:
                linear-gradient(#ffffff 0 0) content-box,
                linear-gradient(#ffffff 0 0);

            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        /* Soft internal liquid glow */
        .msp-process__card::after {
            content: "";
            position: absolute;
            top: -85px;
            right: -85px;
            z-index: 0;

            width: 175px;
            height: 175px;
            border-radius: 50%;

            pointer-events: none;

            background:
                radial-gradient(circle,
                    rgba(90, 46, 166, 0.09),
                    rgba(47, 168, 161, 0.045) 52%,
                    transparent 72%);

            transition: transform 0.45s ease;
        }

        .msp-process__card:hover {
            transform: translateY(-4px);
            border-color: rgba(90, 46, 166, 0.22);

            background:
                linear-gradient(145deg,
                    rgba(255, 255, 255, 1),
                    rgba(247, 245, 253, 0.90),
                    rgba(236, 250, 248, 0.76));

            box-shadow:
                0 16px 32px rgba(39, 30, 72, 0.11),
                inset 1px 1px 0 rgba(255, 255, 255, 1);
        }

        .msp-process__card:hover::after {
            transform: scale(1.12) translate(-5px, 5px);
        }

        /* =====================================================
                        ICON
        ====================================================== */

        .msp-process__icon {
            position: relative;
            z-index: 2;

            display: grid;
            place-items: center;

            flex: 0 0 52px;
            width: 52px;
            height: 52px;
            margin: 0 auto 13px;

            overflow: hidden;

            border: 1px solid rgba(90, 46, 166, 0.13);
            border-radius: 17px;

            color: var(--msp-purple);

            background:
                linear-gradient(135deg,
                    rgba(255, 255, 255, 0.94),
                    rgba(235, 228, 251, 0.84),
                    rgba(223, 248, 245, 0.78));

            background-size: 220% 220%;

            box-shadow:
                0 9px 22px rgba(68, 47, 122, 0.12),
                inset 1px 1px 0 rgba(255, 255, 255, 1);

            animation: mspProcessIconFlow 7s ease-in-out infinite;

            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease;
        }

        .msp-process__icon::before {
            content: "";
            position: absolute;
            top: -35%;
            left: -90%;

            width: 38%;
            height: 175%;

            pointer-events: none;
            transform: rotate(20deg);

            background:
                linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.88),
                    transparent);

            animation: mspProcessIconShine 7s ease-in-out infinite;
        }

        .msp-process__card:hover .msp-process__icon {
            transform: translateY(-2px) scale(1.04);

            box-shadow:
                0 12px 25px rgba(68, 47, 122, 0.16),
                inset 1px 1px 0 rgba(255, 255, 255, 1);
        }

        .msp-process__icon svg {
            position: relative;
            z-index: 2;

            width: 25px;
            height: 25px;

            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* =====================================================
                        CARD CONTENT
        ====================================================== */

        .msp-process__step {
            position: relative;
            z-index: 2;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-height: 25px;
            margin-bottom: 8px;
            padding: 4px 10px;

            border-radius: 999px;

            color: var(--msp-purple-dark);
            background: rgba(90, 46, 166, 0.075);

            font-size: 10px;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: 0.35px;
            text-transform: uppercase;
        }

        .msp-process__card h3 {
            position: relative;
            z-index: 2;

            margin: 0;

            color: var(--msp-black);
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.25;
            font-weight: 700;
            letter-spacing: -0.35px;
            text-align: center;
        }

        .msp-process__card p {
            position: relative;
            z-index: 2;

            margin: 9px 0 0;

            color: var(--msp-text);
            font-family: Arial, sans-serif;
            font-size: 13px;
            line-height: 1.52;
            font-weight: 400;
            text-align: center;
        }

        /* =====================================================
                        SCROLL REVEAL
        ====================================================== */

        .msp-process__reveal {
            opacity: 0;
            transform: translateY(25px);

            transition:
                opacity 0.72s ease var(--msp-delay, 0s),
                transform 0.72s cubic-bezier(.2, .75, .25, 1) var(--msp-delay, 0s);
        }

        .msp-process__reveal.msp-process__visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* =====================================================
                        ANIMATIONS
        ====================================================== */

        @keyframes mspProcessBorder {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes mspProcessIconFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes mspProcessIconShine {

            0%,
            30% {
                left: -90%;
                opacity: 0;
            }

            41% {
                opacity: 0.9;
            }

            58% {
                left: 145%;
                opacity: 0;
            }

            100% {
                left: 145%;
                opacity: 0;
            }
        }

        @keyframes mspProcessDot {

            0%,
            100% {
                opacity: 0.7;
                transform: scale(0.88);
            }

            50% {
                opacity: 1;
                transform: scale(1.13);
            }
        }

        @keyframes mspProcessDotRing {
            0% {
                opacity: 0.55;
                transform: scale(0.72);
            }

            75%,
            100% {
                opacity: 0;
                transform: scale(1.58);
            }
        }

        /* =====================================================
                        TABLET
        ====================================================== */

        @media (max-width: 1024px) {
            .msp-process {
                padding: 30px 18px 46px;
            }

            .msp-process__container {
                width: min(100%, 920px);
            }

            .msp-process__heading {
                font-size: clamp(39px, 6vw, 54px);
            }

            .msp-process__description {
                width: min(100%, 760px);
                font-size: 15px;
            }

            .msp-process__grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 14px;

                width: min(100%, 700px);
                margin: 30px auto 0;
                padding-bottom: 14px;
            }

            .msp-process__card {
                min-height: 210px;
            }
        }

        /* =====================================================
                        MOBILE
        ====================================================== */

        @media (max-width: 767px) {
            .msp-process {
                padding: 26px 12px 38px;
            }

            .msp-process__container {
                padding-bottom: 6px;
            }

            .msp-process__badge {
                gap: 8px;
                min-height: 38px;
                margin-bottom: 12px;
                padding: 7px 14px 7px 10px;

                font-size: 12px;
                white-space: normal;
            }

            .msp-process__heading {
                flex-wrap: wrap;
                gap: 3px 6px;

                font-size: clamp(31px, 9.5vw, 42px);
                line-height: 1.1;
                letter-spacing: -1.3px;
                white-space: normal;
            }

            .msp-process__description {
                margin-top: 12px;
                font-size: 14px;
                line-height: 1.6;
            }

            .msp-process__grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;

                width: 100%;
                margin-top: 24px;
                padding: 4px 0 12px;
            }

            .msp-process__card {
                min-height: 210px;
                padding: 16px 10px 15px;
                border-radius: 18px;
            }

            .msp-process__icon {
                flex-basis: 45px;
                width: 45px;
                height: 45px;
                margin-bottom: 11px;
                border-radius: 14px;
            }

            .msp-process__icon svg {
                width: 22px;
                height: 22px;
            }

            .msp-process__step {
                min-height: 22px;
                margin-bottom: 7px;
                padding: 4px 7px;
                font-size: 8.5px;
            }

            .msp-process__card h3 {
                font-size: 14.5px;
                line-height: 1.25;
            }

            .msp-process__card p {
                margin-top: 7px;
                font-size: 10.8px;
                line-height: 1.48;
            }
        }

        @media (max-width: 430px) {
            .msp-process__heading {
                font-size: 29px;
                letter-spacing: -1px;
            }

            .msp-process__description {
                font-size: 13.5px;
            }

            .msp-process__grid {
                gap: 8px;
            }

            .msp-process__card {
                min-height: 203px;
                padding: 15px 8px 14px;
            }

            .msp-process__card h3 {
                font-size: 13.5px;
            }

            .msp-process__card p {
                font-size: 10.2px;
            }
        }

        @media (max-width: 350px) {
            .msp-process__grid {
                grid-template-columns: 1fr;
                width: min(100%, 280px);
            }

            .msp-process__card {
                min-height: auto;
            }
        }

        /* =====================================================
                        REDUCED MOTION
        ====================================================== */

        @media (prefers-reduced-motion: reduce) {

            .msp-process *,
            .msp-process *::before,
            .msp-process *::after {
                animation: none !important;
                transition: none !important;
            }

            .msp-process__reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>

    <script>
        (function() {
            function initMspProcessSection() {
                var section = document.getElementById("mspProcessSection");

                if (
                    !section ||
                    section.getAttribute("data-msp-ready") === "true"
                ) {
                    return;
                }

                section.setAttribute("data-msp-ready", "true");

                var items = section.querySelectorAll(
                    ".msp-process__reveal"
                );

                if (!("IntersectionObserver" in window)) {
                    items.forEach(function(item) {
                        item.classList.add("msp-process__visible");
                    });

                    return;
                }

                var observer = new IntersectionObserver(
                    function(entries) {
                        entries.forEach(function(entry) {
                            entry.target.classList.toggle(
                                "msp-process__visible",
                                entry.isIntersecting
                            );
                        });
                    }, {
                        threshold: 0.13,
                        rootMargin: "0px 0px -25px 0px"
                    }
                );

                items.forEach(function(item) {
                    observer.observe(item);
                });
            }

            if (document.readyState === "loading") {
                document.addEventListener(
                    "DOMContentLoaded",
                    initMspProcessSection
                );
            } else {
                initMspProcessSection();
            }

            window.addEventListener(
                "elementor/frontend/init",
                function() {
                    setTimeout(initMspProcessSection, 250);
                }
            );
        })();
    </script>

</section>