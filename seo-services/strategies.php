<?php
// Edit / add / remove cards here. (The first 3 are repeated at the end automatically for the endless loop.)
$cards = [
    ['Competitor Analysis', 'We analyze your competitors to find their weaknesses and the opportunities you can use to rank higher in search results.'],
    ['Technical SEO Audit', 'We review your website speed, errors and structure so your site performs well and stays visible in search engines.'],
    ['Keyword Research & Selection', 'We Identify keywords used by the right audience. We improve their presence in search engines with respect to your business.'],
    ['On-Page & Off-Page SEO', 'We optimize your websites content and meta tags. We implement a link building strategy to improve your sites authority, position in SERPs.'],
    ['Content Strategy', 'We optimize content that visitors want to read. This improves site engagement brings traffic and increases the sites ranking.'],
    ['Local SEO Optimization', 'We optimize your business for "near me" searches to improve local visibility and attract nearby clients.'],
];
?>
<section class="ms-seostrat">

    <style>
        .ms-seostrat,
        .ms-seostrat * {
            box-sizing: border-box;
        }

        .ms-seostrat {
            --purple: #5A2EA6;
            --gap: 30px;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: var(--font-body);
            text-align: center;
        }

        .ms-seostrat-title {
            margin: 0 0 22px;
            font-size: 54px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-seostrat-title span {
            color: var(--purple);
            font-weight: 700;
        }

        .ms-seostrat-text {
            max-width: 1100px;
            margin: 0 auto 55px;
            font-size: 16px;
            line-height: 1.62;
            font-weight: 300;
            color: #1b1b1b;
        }

        /* ---------- Slider ---------- */
        .ms-seostrat-slider {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .ms-seostrat-viewport {
            flex: 1 1 auto;
            min-width: 0;
            overflow: hidden;
            padding: 8px 4px 16px;
        }

        .ms-seostrat-track {
            display: flex;
            align-items: flex-start;
            gap: var(--gap);
            will-change: transform;
        }

        .ms-seostrat-card {
            flex: 0 0 calc((100% - (var(--gap) * 2)) / 3);
            padding: 22px 18px 20px;
            background: #fafafa;
            border-radius: 10px;
            border-bottom: 3px solid var(--purple);
            box-shadow: 0 2px 9px rgba(0, 0, 0, .28);
        }

        .ms-seostrat-icon {
            width: 54px;
            height: 54px;
            margin: 0 auto 10px;
            display: block;
        }

        .ms-seostrat-icon svg {
            width: 100%;
            height: 100%;
            display: block;
            fill: none;
            stroke: #000;
            stroke-width: 2.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-seostrat-card h3 {
            margin: 0 0 8px;
            font-size: 22px;
            line-height: 1.3;
            font-weight: 600;
            color: #111;
        }

        .ms-seostrat-card p {
            margin: 0;
            font-size: 15.5px;
            line-height: 1.6;
            font-weight: 400;
            color: #444;
            text-align: justify;
        }

        .ms-seostrat-arrow {
            flex: 0 0 28px;
            width: 28px;
            height: 28px;
            padding: 0;
            border-radius: 50%;
            border: 2px solid var(--purple);
            background: #fff;
            color: var(--purple);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .3s ease;
        }

        .ms-seostrat-arrow svg {
            width: 15px;
            height: 15px;
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-seostrat-arrow:hover {
            background: var(--purple);
            color: #fff;
            transform: scale(1.08);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 1024px) {
            .ms-seostrat-title {
                font-size: 42px;
            }

            .ms-seostrat-card {
                flex: 0 0 calc((100% - var(--gap)) / 2);
            }
        }

        @media (max-width: 767px) {
            .ms-seostrat {
                --gap: 16px;
                padding: 25px 12px 40px;
            }

            .ms-seostrat-title {
                font-size: 30px;
                margin-bottom: 16px;
            }

            .ms-seostrat-text {
                font-size: 14.5px;
                margin-bottom: 30px;
            }

            .ms-seostrat-slider {
                gap: 8px;
            }

            .ms-seostrat-card {
                flex: 0 0 100%;
            }

            .ms-seostrat-card h3 {
                font-size: 19px;
            }

            .ms-seostrat-card p {
                font-size: 14.5px;
            }
        }
    </style>

    <h2 class="ms-seostrat-title">High-Converting <span>SEO Strategies</span></h2>

    <p class="ms-seostrat-text">
        At Minerdia Studio we implement SEO strategies that focus on results. We drive traffic to your website from people in your services and products. Our services improve your websites rankings, traffic and lead generation. We combine SEO with content and link building. This creates a system for consistent business growth.
    </p>

    <div class="ms-seostrat-slider" id="msSeoStratSlider">
        <button type="button" class="ms-seostrat-arrow" id="msSeoStratPrev" aria-label="Previous">
            <svg viewBox="0 0 24 24"><path d="M15 5l-7 7 7 7"/></svg>
        </button>

        <div class="ms-seostrat-viewport" id="msSeoStratViewport">
            <div class="ms-seostrat-track">
                <?php foreach (array_merge($cards, array_slice($cards, 0, 3)) as $c) : ?>
                    <div class="ms-seostrat-card">
                        <span class="ms-seostrat-icon" aria-hidden="true">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="22.5"></circle>
                                <path d="M15.5 28.5l8 8.5 16.5-19"></path>
                                <path d="M19 27.5l6 6.5 15-17" stroke-width="1.6"></path>
                            </svg>
                        </span>
                        <h3><?php echo htmlspecialchars($c[0]); ?></h3>
                        <p><?php echo htmlspecialchars($c[1]); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <button type="button" class="ms-seostrat-arrow" id="msSeoStratNext" aria-label="Next">
            <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
        </button>
    </div>

    <script>
        (function() {
            var slider = document.getElementById('msSeoStratSlider');
            var vp = document.getElementById('msSeoStratViewport');
            var prev = document.getElementById('msSeoStratPrev');
            var next = document.getElementById('msSeoStratNext');
            if (!slider || !vp || !prev || !next) return;

            var track = vp.querySelector('.ms-seostrat-track');
            var cards = track.querySelectorAll('.ms-seostrat-card');
            var total = <?php echo count($cards); ?>; // real cards (the rest are loop copies)
            if (total < 1) return;

            var DELAY = 3500; // ms between automatic slides
            var SPEED = 600; // ms slide animation
            var index = 0;
            var busy = false;
            var hovering = false;
            var timer = null;

            function stepSize() {
                var gap = parseFloat(getComputedStyle(track).columnGap) || 0;
                return cards[0].offsetWidth + gap;
            }

            function setPos(i, animate) {
                track.style.transition = animate ? 'transform ' + SPEED + 'ms ease' : 'none';
                track.style.transform = 'translateX(' + (-i * stepSize()) + 'px)';
            }

            function goNext() {
                if (busy) return;
                busy = true;
                index++;
                setPos(index, true);
                setTimeout(function() {
                    if (index >= total) { // reached the copies -> jump back to the real start
                        index = 0;
                        setPos(0, false);
                    }
                    busy = false;
                }, SPEED + 40);
            }

            function goPrev() {
                if (busy) return;
                busy = true;
                if (index === 0) {
                    index = total;
                    setPos(index, false);
                    void track.offsetWidth;
                }
                index--;
                setPos(index, true);
                setTimeout(function() {
                    busy = false;
                }, SPEED + 40);
            }

            function restart() {
                clearInterval(timer);
                timer = setInterval(function() {
                    if (hovering || document.hidden) return;
                    goNext();
                }, DELAY);
            }

            next.addEventListener('click', function() {
                goNext();
                restart();
            });

            prev.addEventListener('click', function() {
                goPrev();
                restart();
            });

            slider.addEventListener('mouseenter', function() {
                hovering = true;
            });

            slider.addEventListener('mouseleave', function() {
                hovering = false;
            });

            window.addEventListener('resize', function() {
                setPos(index, false);
            });

            setPos(0, false);
            restart();
        })();
    </script>
</section>