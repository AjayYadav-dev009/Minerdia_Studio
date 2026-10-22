<section class="ms-yt-section" id="msYTShorts">

    <style>
        /* =====================================================
       FULLY SCOPED — OTHER WEBSITE SECTIONS SAFE
        ====================================================== */

        .ms-yt-section,
        .ms-yt-section * {
            box-sizing: border-box;
        }

        .ms-yt-section {
            --purple: #5A2EA6;
            --purple-dark: #3E207B;
            --teal: #2FA8A1;
            --black: #111111;
            --text: #3F3F3F;

            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 26px 0 12px;
            background: #ffffff;
            font-family: var(--font-body);
        }

        /* =====================================================
       HEADING AREA
        ====================================================== */

        .ms-yt-heading {
            position: relative;
            z-index: 5;
            width: min(100%, 1180px);
            margin: 0 auto 26px;
            padding: 0 20px;
            text-align: center;
        }

        /* Liquid Glass Subtitle */
        .ms-yt-subtitle-card {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 13px !important;
            width: max-content;
            max-width: 100%;
            min-height: 44px;
            margin: 0 auto 16px !important;
            padding: 9px 23px 9px 17px !important;
            overflow: visible;
            border: 1px solid rgba(90, 46, 166, 0.14);
            border-radius: 999px;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.98),
                    rgba(255, 255, 255, 0.80));
            box-shadow:
                0 10px 28px rgba(51, 37, 92, 0.09),
                inset 1px 1px 0 #ffffff,
                inset -1px -1px 0 rgba(90, 46, 166, 0.035);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        .ms-yt-subtitle-card p {
            display: block;
            margin: 0 !important;
            padding: 0 !important;
            color: var(--black);
            font-family: var(--font-body);
            font-size: 15px;
            line-height: 1.35;
            font-weight: 600;
            text-align: center;
            white-space: nowrap;
        }

        /* Blinking Gradient Dot */
        .ms-yt-subtitle-dot {
            position: relative;
            display: block;
            flex: 0 0 9px;
            width: 9px;
            height: 9px;
            min-width: 9px;
            min-height: 9px;
            margin: 0;
            border-radius: 50%;
            background: linear-gradient(135deg,
                    var(--purple),
                    var(--teal));
            box-shadow: 0 0 12px rgba(47, 168, 161, 0.50);
            animation: msYTdotBlink 2.2s ease-in-out infinite;
            pointer-events: none;
        }

        .ms-yt-subtitle-dot::after {
            content: "";
            position: absolute;
            inset: -4px;
            border: 1px solid rgba(90, 46, 166, 0.18);
            border-radius: 50%;
            animation: msYTdotRing 2.2s ease-out infinite;
        }

        /* Main H2 — Character Cutting Fixed */
        .ms-yt-heading h2 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: nowrap;
            gap: 10px;
            width: 100%;
            margin: 0;
            padding: 2px 0 7px;
            overflow: visible !important;
            color: var(--black);
            font-family: var(--font-head);
            font-size: clamp(42px, 4vw, 60px);
            line-height: 1.12;
            font-weight: 800;
            letter-spacing: -2px;
            text-align: center;
            white-space: nowrap;
        }

        .ms-yt-heading-black,
        .ms-yt-heading-gradient {
            display: inline-block;
            padding: 0 1px 5px;
            overflow: visible !important;
            line-height: 1.12;
        }

        .ms-yt-heading-black {
            color: var(--black);
        }

        .ms-yt-heading-gradient {
            color: transparent;
            background: linear-gradient(120deg,
                    var(--purple) 0%,
                    var(--purple-dark) 34%,
                    var(--teal) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-yt-description {
            width: min(100%, 1120px);
            margin: 14px auto 0;
            color: var(--text);
            font-family: var(--font-body);
            font-size: 17px;
            line-height: 1.62;
            font-weight: 400;
            text-align: center;
        }

        .ms-yt-description strong {
            color: var(--black);
            font-weight: 700;
        }

        /* =====================================================
       SLIDER
        ====================================================== */

        .ms-yt-wrap {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 8px 42px;
        }

        .ms-yt-track {
            display: flex;
            gap: 18px;
            width: max-content;
            transition: transform 0.45s ease;
            will-change: transform;
            touch-action: pan-y;
        }

        .ms-yt-card {
            position: relative;
            flex: 0 0 215px;
            width: 215px;
            height: 380px;
            overflow: hidden;
            border-radius: 22px;
            background: #111111;
            cursor: pointer;
            text-decoration: none !important;
            -webkit-tap-highlight-color: transparent;
        }

        .ms-yt-card::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 4;
            padding: 2px;
            border-radius: 22px;
            pointer-events: none;
            background: linear-gradient(120deg,
                    var(--purple),
                    var(--teal),
                    var(--purple));
            background-size: 300% 300%;
            animation: msBorderMove 4s linear infinite;
            -webkit-mask:
                linear-gradient(#ffffff 0 0) content-box,
                linear-gradient(#ffffff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .ms-yt-inner {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 22px;
            background: #111111;
        }

        .ms-yt-thumb {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: #111111;
            transition:
                transform 0.4s ease,
                opacity 0.4s ease;
        }

        .ms-yt-card:hover .ms-yt-thumb {
            opacity: 0.86;
            transform: scale(1.04);
        }

        .ms-yt-overlay {
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.45),
                    rgba(0, 0, 0, 0.04));
        }

        .ms-yt-play {
            position: absolute;
            right: 10px;
            bottom: 10px;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border: 1px solid rgba(255, 255, 255, 0.75);
            border-radius: 50%;
            color: #ffffff;
            background: rgba(0, 0, 0, 0.68);
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition:
                transform 0.3s ease,
                background 0.3s ease;
        }

        .ms-yt-card:hover .ms-yt-play {
            transform: scale(1.08);
            background: linear-gradient(135deg,
                    var(--purple),
                    var(--teal));
        }

        .ms-yt-play svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }

        /* Slider Arrows */
        .ms-yt-arrow {
            position: absolute;
            top: 50%;
            z-index: 30;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            min-width: 34px;
            min-height: 34px;
            padding: 0;
            border: 1px solid rgba(82, 68, 165, 0.25);
            border-radius: 999px;
            color: #111111;
            background: #ffffff;
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.16);
            cursor: pointer;
            transform: translateY(-50%);
            transition:
                color 0.25s ease,
                background 0.25s ease,
                transform 0.25s ease;
        }

        .ms-yt-arrow:hover {
            color: #ffffff;
            background: linear-gradient(135deg,
                    var(--purple),
                    var(--teal));
            transform: translateY(-50%) scale(1.08);
        }

        .ms-yt-prev {
            left: 8px;
        }

        .ms-yt-next {
            right: 8px;
        }

        .ms-yt-arrow svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.7;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* =====================================================
       SCROLL REVEAL
        ====================================================== */

        .ms-yt-reveal {
            opacity: 0;
            transform: translateY(28px);
            transition:
                opacity 0.75s ease var(--ms-delay, 0s),
                transform 0.75s cubic-bezier(.2, .75, .25, 1) var(--ms-delay, 0s);
        }

        .ms-yt-reveal.ms-yt-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* =====================================================
       ANIMATIONS
        ====================================================== */

        @keyframes msBorderMove {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 300% 50%;
            }
        }

        @keyframes msYTdotBlink {

            0%,
            100% {
                opacity: 0.68;
                transform: scale(0.86);
            }

            50% {
                opacity: 1;
                transform: scale(1.14);
            }
        }

        @keyframes msYTdotRing {
            0% {
                opacity: 0.55;
                transform: scale(0.72);
            }

            75%,
            100% {
                opacity: 0;
                transform: scale(1.55);
            }
        }

        /* =====================================================
       TABLET
        ====================================================== */

        @media (max-width: 1024px) {
            .ms-yt-section {
                padding: 24px 0 10px;
            }

            .ms-yt-heading {
                width: min(100%, 900px);
                margin-bottom: 23px;
            }

            .ms-yt-subtitle-card {
                gap: 12px !important;
                min-height: 42px;
                margin-bottom: 14px !important;
                padding: 8px 21px 8px 16px !important;
            }

            .ms-yt-subtitle-card p {
                font-size: 14px;
            }

            .ms-yt-heading h2 {
                gap: 9px;
                font-size: clamp(39px, 6vw, 54px);
                line-height: 1.12;
            }

            .ms-yt-description {
                width: min(100%, 860px);
                margin-top: 13px;
                font-size: 16px;
            }

            .ms-yt-card {
                flex-basis: 205px;
                width: 205px;
                height: 360px;
            }
        }

        /* =====================================================
       MOBILE
        ====================================================== */

        @media (max-width: 767px) {
            .ms-yt-section {
                padding: 21px 0 8px;
            }

            .ms-yt-heading {
                margin-bottom: 19px;
                padding: 0 14px;
            }

            .ms-yt-subtitle-card {
                gap: 10px !important;
                min-height: 38px;
                margin-bottom: 12px !important;
                padding: 7px 16px 7px 13px !important;
            }

            .ms-yt-subtitle-card p {
                font-size: 12px;
                line-height: 1.35;
                white-space: normal;
            }

            .ms-yt-subtitle-dot {
                flex-basis: 8px;
                width: 8px;
                height: 8px;
                min-width: 8px;
                min-height: 8px;
            }

            .ms-yt-heading h2 {
                flex-wrap: wrap;
                gap: 4px 6px;
                padding-bottom: 7px;
                font-size: clamp(31px, 9.5vw, 42px);
                line-height: 1.12;
                letter-spacing: -1.3px;
                white-space: normal;
            }

            .ms-yt-heading-black,
            .ms-yt-heading-gradient {
                padding-bottom: 4px;
            }

            .ms-yt-description {
                margin-top: 12px;
                font-size: 14.5px;
                line-height: 1.62;
            }

            .ms-yt-wrap {
                padding: 8px 36px;
            }

            .ms-yt-track {
                gap: 14px;
            }

            .ms-yt-card {
                flex-basis: 185px;
                width: 185px;
                height: 330px;
                border-radius: 18px;
            }

            .ms-yt-card::before,
            .ms-yt-inner {
                border-radius: 18px;
            }

            .ms-yt-arrow {
                width: 30px;
                height: 30px;
                min-width: 30px;
                min-height: 30px;
            }

            .ms-yt-arrow svg {
                width: 16px;
                height: 16px;
            }

            .ms-yt-prev {
                left: 3px;
            }

            .ms-yt-next {
                right: 3px;
            }
        }

        @media (max-width: 430px) {
            .ms-yt-heading h2 {
                font-size: 29px;
                line-height: 1.12;
                letter-spacing: -1px;
            }

            .ms-yt-description {
                font-size: 14px;
            }

            .ms-yt-wrap {
                padding-right: 32px;
                padding-left: 32px;
            }

            .ms-yt-card {
                flex-basis: 175px;
                width: 175px;
                height: 312px;
            }
        }

        @media (max-width: 360px) {
            .ms-yt-heading h2 {
                font-size: 26px;
            }

            .ms-yt-subtitle-card p {
                font-size: 11px;
            }

            .ms-yt-card {
                flex-basis: 168px;
                width: 168px;
                height: 300px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .ms-yt-section *,
            .ms-yt-section *::before,
            .ms-yt-section *::after {
                animation: none !important;
                transition: none !important;
            }

            .ms-yt-reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>

    <!-- =====================================================
       HEADING CONTENT
  ====================================================== -->

    <div class="ms-yt-heading">

        <!-- Liquid Glass Subtitle -->
        <div class="ms-yt-subtitle-card ms-yt-reveal">
            <span class="ms-yt-subtitle-dot" aria-hidden="true"></span>
            <p>Creative Portfolio</p>
        </div>

        <!-- H2 Heading -->
        <h2 class="ms-yt-reveal" style="--ms-delay:.08s;">
            <span class="ms-yt-heading-black">Our</span>
            <span class="ms-yt-heading-gradient">Creative Range</span>
        </h2>

        <p class="ms-yt-description ms-yt-reveal" style="--ms-delay:.16s;">
            As a <strong>Digital Marketing Agency in Delhi</strong>, we create content
            that reflects every brand’s unique identity and business goals. From product
            shoots and social media creatives to ad campaigns, reels, podcasts, and brand
            films, our creative range is designed to capture attention and build trust.
            Explore impactful visuals crafted to engage audiences, strengthen brand
            presence, and drive real business growth.
        </p>

    </div>

    <!-- =====================================================
       YOUTUBE SHORTS SLIDER
  ====================================================== -->

    <div class="ms-yt-wrap ms-yt-reveal" style="--ms-delay:.24s;">

        <button
            class="ms-yt-arrow ms-yt-prev"
            type="button"
            aria-label="Previous portfolio video">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M15 18l-6-6 6-6"></path>
            </svg>
        </button>

        <div class="ms-yt-track" id="msYTTrack"></div>

        <button
            class="ms-yt-arrow ms-yt-next"
            type="button"
            aria-label="Next portfolio video">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M9 18l6-6-6-6"></path>
            </svg>
        </button>

    </div>

    <script>
        (function() {
            function initMsYTShorts() {
                var root = document.getElementById("msYTShorts");

                if (!root || root.getAttribute("data-msyt-ready") === "true") {
                    return;
                }

                root.setAttribute("data-msyt-ready", "true");

                var track = root.querySelector("#msYTTrack");
                var prev = root.querySelector(".ms-yt-prev");
                var next = root.querySelector(".ms-yt-next");

                var shorts = [
                    "https://youtube.com/shorts/zdEhQw6HuPs",
                    "https://youtube.com/shorts/2iAoiMR52RA",
                    "https://youtube.com/shorts/pfiOdXvzIr8",
                    "https://youtube.com/shorts/DL8I-9bk2wo",
                    "https://youtube.com/shorts/1oj65IKLT_U",
                    "https://youtube.com/shorts/2LW871L6WZ4",
                    "https://youtube.com/shorts/wJM_lSNtia0",
                    "https://youtube.com/shorts/3tw5D8zo3EM",
                    "https://youtube.com/shorts/avIEl27iIQk",
                    "https://youtube.com/shorts/RaKNL6gC54o",
                    "https://youtube.com/shorts/CQ439JXqpm0",
                    "https://youtube.com/shorts/NDRjCUcgstw"
                ];

                function getId(url) {
                    if (url.indexOf("/shorts/") > -1) {
                        return url
                            .split("/shorts/")[1]
                            .split("?")[0]
                            .split("&")[0]
                            .split("/")[0];
                    }

                    if (url.indexOf("youtu.be/") > -1) {
                        return url
                            .split("youtu.be/")[1]
                            .split("?")[0]
                            .split("&")[0]
                            .split("/")[0];
                    }

                    if (url.indexOf("watch?v=") > -1) {
                        return url
                            .split("watch?v=")[1]
                            .split("&")[0];
                    }

                    return "";
                }

                function getThumb(id) {
                    return "https://i.ytimg.com/vi/" + id + "/oar2.jpg";
                }

                var playIcon =
                    '<svg viewBox="0 0 24 24" aria-hidden="true">' +
                    '<path d="M8 5v14l11-7z"></path>' +
                    '</svg>';

                function createCard(url, index) {
                    var id = getId(url);
                    var card = document.createElement("a");

                    card.href = url;
                    card.target = "_blank";
                    card.rel = "noopener noreferrer";
                    card.className = "ms-yt-card";
                    card.setAttribute(
                        "aria-label",
                        "View Minerdia Studio portfolio video " + (index + 1)
                    );

                    card.innerHTML =
                        '<div class="ms-yt-inner">' +
                        '<img ' +
                        'class="ms-yt-thumb" ' +
                        'src="' + getThumb(id) + '" ' +
                        'loading="lazy" ' +
                        'decoding="async" ' +
                        'alt="Digital Marketing Agency in Delhi YouTube Shorts portfolio video ' + (index + 1) + '"' +
                        '>' +
                        '<div class="ms-yt-overlay"></div>' +
                        '<span class="ms-yt-play">' + playIcon + '</span>' +
                        '</div>';

                    return card;
                }

                var loopList = shorts.concat(shorts, shorts);

                loopList.forEach(function(url, index) {
                    track.appendChild(createCard(url, index));
                });

                var originalLength = shorts.length;
                var currentIndex = originalLength;

                function getGap() {
                    return window.innerWidth <= 767 ? 14 : 18;
                }

                function getStep() {
                    var card = track.querySelector(".ms-yt-card");

                    if (!card) {
                        return 233;
                    }

                    return card.getBoundingClientRect().width + getGap();
                }

                function setPosition(animate) {
                    track.style.transition = animate ?
                        "transform .45s ease" :
                        "none";

                    track.style.transform =
                        "translate3d(" +
                        (-currentIndex * getStep()) +
                        "px,0,0)";
                }

                function nextSlide() {
                    currentIndex++;
                    setPosition(true);
                }

                function previousSlide() {
                    currentIndex--;
                    setPosition(true);
                }

                track.addEventListener("transitionend", function() {
                    if (currentIndex >= originalLength * 2) {
                        currentIndex = originalLength;
                        setPosition(false);
                    }

                    if (currentIndex < originalLength) {
                        currentIndex = originalLength * 2 - 1;
                        setPosition(false);
                    }
                });

                next.addEventListener("click", nextSlide);
                prev.addEventListener("click", previousSlide);

                window.addEventListener("resize", function() {
                    setPosition(false);
                });

                var startX = 0;
                var isDragging = false;

                track.addEventListener("pointerdown", function(event) {
                    isDragging = true;
                    startX = event.clientX;
                });

                track.addEventListener("pointerup", function(event) {
                    if (!isDragging) {
                        return;
                    }

                    isDragging = false;

                    var difference = event.clientX - startX;

                    if (difference < -40) {
                        nextSlide();
                    } else if (difference > 40) {
                        previousSlide();
                    }
                });

                track.addEventListener("pointercancel", function() {
                    isDragging = false;
                });

                track.addEventListener("pointerleave", function() {
                    isDragging = false;
                });

                setTimeout(function() {
                    setPosition(false);
                }, 120);

                /* Repeating Scroll Reveal */
                var revealItems = root.querySelectorAll(".ms-yt-reveal");

                if (!("IntersectionObserver" in window)) {
                    revealItems.forEach(function(item) {
                        item.classList.add("ms-yt-visible");
                    });

                    return;
                }

                var observer = new IntersectionObserver(
                    function(entries) {
                        entries.forEach(function(entry) {
                            entry.target.classList.toggle(
                                "ms-yt-visible",
                                entry.isIntersecting
                            );
                        });
                    }, {
                        threshold: 0.12,
                        rootMargin: "0px 0px -30px 0px"
                    }
                );

                revealItems.forEach(function(item) {
                    observer.observe(item);
                });
            }

            if (document.readyState === "loading") {
                document.addEventListener(
                    "DOMContentLoaded",
                    initMsYTShorts
                );
            } else {
                initMsYTShorts();
            }

            window.addEventListener("elementor/frontend/init", function() {
                setTimeout(initMsYTShorts, 250);
            });
        })();
    </script>

</section>