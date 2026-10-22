<section class="msa-about" id="msa-about-section">
    <div class="msa-wrap">

        <!-- Decorative background text:
         kept out of the HTML text/accessibility tree to avoid contrast errors -->
        <div
            class="msa-background-title msa-bg-reveal"
            aria-hidden="true"
            data-text="ABOUT US">
        </div>

        <!-- Main H2 Heading -->
        <div class="msa-heading msa-reveal">
            <h2>
                <span class="msa-heading-black">MINERDIA</span>
                <span class="msa-heading-gradient">STUDIO</span>
            </h2>
        </div>

        <!-- Content -->
        <div class="msa-content msa-reveal" style="--msa-delay:.10s;">

            <p>
                <a href="https://minerdiastudio.com/" aria-label="Visit Minerdia Studio homepage">
                    Minerdia Studio
                </a>
                is a leading Digital Marketing Agency in Delhi, helping businesses scale revenue,
                build lasting brand authority, and achieve measurable growth. As a results-driven
                digital growth partner, we craft customized marketing strategies that go far beyond
                basic content posting—delivering real business outcomes through innovation,
                creativity, and performance.
            </p>

            <p>
                From high-end content production (Reels, YouTube, podcasts) to performance marketing
                (Meta &amp; Google Ads), SEO, website development, branding, and strategic social media
                management, our
                <strong>Digital Marketing Agency in Delhi</strong>
                provides end-to-end solutions designed for impact. With a strong focus on quality,
                strategy, and results, we don’t just offer services—we build scalable systems that
                generate consistent leads, drive sales, and fuel long-term business growth.
            </p>

        </div>

    </div>

    <style>
        /* =========================================================
       RESET + VARIABLES
        ========================================================== */
        .msa-about,
        .msa-about *,
        .msa-about *::before,
        .msa-about *::after {
            box-sizing: border-box;
        }

        .msa-about {
            /* Accessible brand shades */
            --msa-purple: #5A2EA6;
            --msa-purple-dark: #3E207B;
            --msa-teal: #007A74;
            --msa-teal-hover: #5A2EA6;
            --msa-black: #111111;
            --msa-text: #3F3F3F;

            position: relative;
            isolation: isolate;
            width: 100%;
            overflow: hidden;
            padding: 34px 20px 42px;
            background: #FFFFFF !important;
            color: var(--msa-text);
            font-family: var(--font-body);
        }

        .msa-wrap {
            position: relative;
            width: min(100%, 1280px);
            margin: 0 auto;
            text-align: center;
        }

        /* =========================================================
       DECORATIVE BACKGROUND TITLE
       Generated through CSS, so Lighthouse does not treat it
       as meaningful low-contrast page content.
        ========================================================== */
        .msa-background-title {
            position: absolute;
            top: -4px;
            left: 50%;
            z-index: 0;
            width: 100%;
            transform: translateX(-50%);
            pointer-events: none;
            user-select: none;
        }

        .msa-background-title::before {
            content: attr(data-text);
            display: block;
            color: rgba(17, 17, 17, 0.045);
            font-family: var(--font-head);
            font-size: clamp(84px, 9vw, 132px);
            line-height: 1;
            font-weight: 800;
            letter-spacing: -5px;
            white-space: nowrap;
            text-align: center;
        }

        /* =========================================================
       MAIN HEADING
        ========================================================== */
        .msa-heading {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
            padding-top: 24px;
            text-align: center;
        }

        .msa-heading h2 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 0;
            color: var(--msa-black);
            font-family: var(--font-head);
            font-size: clamp(42px, 4vw, 60px);
            line-height: 1.05;
            font-weight: 800;
            letter-spacing: -2px;
            white-space: nowrap;
            text-align: center;
        }

        .msa-heading-black {
            color: var(--msa-black);
        }

        .msa-heading-gradient {
            display: inline-block;
            color: var(--msa-purple-dark);
            background: linear-gradient(120deg,
                    var(--msa-purple) 0%,
                    var(--msa-purple-dark) 38%,
                    var(--msa-teal) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Fallback for browsers that do not support gradient text */
        @supports not ((-webkit-background-clip: text) or (background-clip: text)) {
            .msa-heading-gradient {
                color: var(--msa-purple-dark);
                background: none;
                -webkit-text-fill-color: currentColor;
            }
        }

        /* =========================================================
       CONTENT
        ========================================================== */
        .msa-content {
            position: relative;
            z-index: 2;
            width: min(100%, 1080px);
            margin: 34px auto 0;
        }

        .msa-content p {
            margin: 0 auto 20px;
            color: var(--msa-text) !important;
            font-family: var(--font-body);
            font-size: 17px;
            line-height: 1.62;
            font-weight: 400;
            letter-spacing: 0;
            text-align: center;
        }

        .msa-content p:last-child {
            margin-bottom: 0;
        }

        /* Fixed: darker teal gives sufficient contrast on white */
        .msa-content a,
        .msa-content a:visited {
            color: var(--msa-teal) !important;
            font-weight: 700;
            text-decoration: underline !important;
            text-decoration-color: currentColor !important;
            text-decoration-thickness: 1.5px !important;
            text-underline-offset: 3px;
            transition:
                color .25s ease,
                text-decoration-thickness .25s ease;
        }

        .msa-content a:hover,
        .msa-content a:focus-visible {
            color: var(--msa-teal-hover) !important;
            text-decoration-thickness: 2px !important;
        }

        .msa-content a:focus-visible {
            outline: 3px solid rgba(90, 46, 166, 0.32);
            outline-offset: 4px;
            border-radius: 2px;
        }

        .msa-content strong {
            color: var(--msa-black) !important;
            font-weight: 700;
        }

        /* =========================================================
       SCROLL ANIMATION
        ========================================================== */
        .msa-reveal,
        .msa-bg-reveal {
            opacity: 0;
            will-change: opacity, transform;
        }

        .msa-bg-reveal {
            transform: translate(-50%, -20px) scale(.96);
            transition:
                opacity .9s ease,
                transform .9s cubic-bezier(.2, .75, .25, 1);
        }

        .msa-reveal {
            transform: translateY(28px);
            transition:
                opacity .75s ease var(--msa-delay, 0s),
                transform .75s cubic-bezier(.2, .75, .25, 1) var(--msa-delay, 0s);
        }

        .msa-bg-reveal.msa-show {
            opacity: 1;
            transform: translate(-50%, 0) scale(1);
        }

        .msa-reveal.msa-show {
            opacity: 1;
            transform: translateY(0);
        }

        /* =========================================================
       TABLET
        ========================================================== */
        @media (max-width: 1024px) {
            .msa-about {
                padding: 30px 20px 36px;
            }

            .msa-wrap {
                width: min(100%, 940px);
            }

            .msa-background-title {
                top: 2px;
            }

            .msa-background-title::before {
                font-size: clamp(76px, 11vw, 112px);
                letter-spacing: -4px;
            }

            .msa-heading {
                padding-top: 26px;
            }

            .msa-heading h2 {
                gap: 9px;
                font-size: clamp(39px, 6vw, 54px);
            }

            .msa-content {
                width: min(100%, 860px);
                margin-top: 30px;
            }

            .msa-content p {
                font-size: 16px;
                line-height: 1.62;
            }
        }

        /* =========================================================
       MOBILE
        ========================================================== */
        @media (max-width: 767px) {
            .msa-about {
                padding: 27px 15px 30px;
            }

            .msa-background-title {
                top: 8px;
            }

            .msa-background-title::before {
                font-size: clamp(60px, 18vw, 86px);
                letter-spacing: -3px;
            }

            .msa-heading {
                padding-top: 29px;
            }

            .msa-heading h2 {
                gap: 6px;
                font-size: clamp(31px, 9.5vw, 42px);
                letter-spacing: -1.3px;
            }

            .msa-content {
                width: min(100%, 620px);
                margin-top: 27px;
            }

            .msa-content p {
                margin-bottom: 18px;
                font-size: 14.5px;
                line-height: 1.66;
            }
        }

        /* =========================================================
       SMALL MOBILE
        ========================================================== */
        @media (max-width: 430px) {
            .msa-about {
                padding: 24px 13px 28px;
            }

            .msa-background-title {
                top: 10px;
            }

            .msa-background-title::before {
                font-size: 57px;
                letter-spacing: -2px;
            }

            .msa-heading {
                padding-top: 28px;
            }

            .msa-heading h2 {
                gap: 5px;
                font-size: 29px;
                letter-spacing: -1px;
            }

            .msa-content {
                margin-top: 24px;
            }

            .msa-content p {
                font-size: 14px;
                line-height: 1.64;
            }
        }

        @media (max-width: 360px) {
            .msa-heading h2 {
                font-size: 26px;
            }

            .msa-background-title::before {
                font-size: 51px;
            }

            .msa-content p {
                font-size: 13.5px;
            }
        }

        /* =========================================================
       REDUCED MOTION ACCESSIBILITY
        ========================================================== */
        @media (prefers-reduced-motion: reduce) {

            .msa-about *,
            .msa-about *::before,
            .msa-about *::after {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }

            .msa-reveal,
            .msa-bg-reveal {
                opacity: 1;
                transform: none;
            }

            .msa-bg-reveal {
                transform: translateX(-50%);
            }
        }
    </style>

    <script>
        (function() {
            function initMsaAbout() {
                var section = document.getElementById("msa-about-section");

                if (!section || section.getAttribute("data-msa-ready") === "true") {
                    return;
                }

                section.setAttribute("data-msa-ready", "true");

                var items = section.querySelectorAll(
                    ".msa-reveal, .msa-bg-reveal"
                );

                if (!("IntersectionObserver" in window)) {
                    items.forEach(function(item) {
                        item.classList.add("msa-show");
                    });
                    return;
                }

                var observer = new IntersectionObserver(
                    function(entries) {
                        entries.forEach(function(entry) {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("msa-show");
                            } else {
                                entry.target.classList.remove("msa-show");
                            }
                        });
                    }, {
                        threshold: 0.14,
                        rootMargin: "0px 0px -30px 0px"
                    }
                );

                items.forEach(function(item) {
                    observer.observe(item);
                });
            }

            if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", initMsaAbout);
            } else {
                initMsaAbout();
            }

            window.addEventListener("elementor/frontend/init", function() {
                setTimeout(initMsaAbout, 250);
            });
        })();
    </script>
</section>