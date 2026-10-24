<?php
$ms_inf_items = [
    [
        'YouTube Influencer Marketing',
        'We team up with YouTube creators. They make videos that help people know about your brand. These videos build trust. Keep people engaged for a long time.',
        BASE . 'assets/image/services/ssm-10.webp',
        'YouTube Influencer Marketing Provider',
    ],
    [
        'Regional Influencer Marketing',
        'We work with influencers across Delhi and India to reach your audience, helping your brand gain visibility, recognition, and presence in different markets.',
        BASE . 'assets/image/services/ssm-8.webp',
    ],
    [
        'Instagram Influencer Marketing',
        'We partner with Instagram influencers. They create posts and stories that make your brand popular. This increases visibility and engagement for your brand.',
        BASE . 'assets/image/services/ssm-7.webp',
    ],
    [
        'Brand Collaboration Campaigns',
        'We design campaigns where many creators work together to promote your brand. This has an impact and helps many people know about your brand.',
        BASE . 'assets/image/services/ssm-6.webp',
    ],
    [
        'Performance-Based Influencer Marketing',
        'We track how well our campaigns do. We look at engagement reach and conversions. This helps us know if our campaigns are really working.',
        BASE . 'assets/image/services/ssm-9.webp',
    ],
];
?>
<section class="ms-inf">

    <style>
        .ms-inf {
            --purple: #5A2EA6;
            --gap: 12px;
            width: 100%;
            padding: 50px 20px 50px;
            background: #fff;
            font-family: var(--font-body);
        }

        /* ---------- Heading ---------- */
        .ms-inf-head {
            max-width: 1150px;
            margin: 0 auto 40px;
            text-align: center;
        }

        .ms-inf-title {
            margin: 0 0 26px;
            font-size: 52px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-inf-title span {
            color: var(--purple);
        }

        .ms-inf-text {
            max-width: 1120px;
            margin: 0 auto;
            font-size: 16px;
            line-height: 28px;
            font-weight: 300;
            color: #1b1b1b;
        }

        .ms-inf-text strong {
            font-weight: 600;
            color: #000;
        }

        .ms-inf,
        .ms-inf *,
        .ms-inf *::before,
        .ms-inf *::after {
            box-sizing: border-box;
        }

        /* ---------- Carousel ---------- */
        .ms-inf-carousel {
            --per: 3;
            /* cards visible: desktop 3 / tablet 1 / mobile 1 */
            --arrow-top: 40%;
            /* JS sets this to the vertical centre of the card image */
            position: relative;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .ms-inf-viewport {
            overflow: hidden;
            touch-action: pan-y;
        }

        .ms-inf-track {
            display: flex;
            align-items: stretch;
            gap: var(--gap);
            padding: 2px 0 6px;
            will-change: transform;
            cursor: grab;
            user-select: none;
            -webkit-user-select: none;
        }

        .ms-inf-track.is-dragging {
            cursor: grabbing;
        }

        .ms-inf-card {
            flex: 0 0 calc((100% - (var(--gap) * (var(--per) - 1))) / var(--per));
            min-width: 0;
            border: 1px solid #e6e6e6;
            border-radius: 22px;
            background: #f7f7f7;
            overflow: hidden;
            font-family: var(--font-body);
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .ms-inf-card-img {
            line-height: 0;
        }

        .ms-inf-card-img img {
            display: block;
            width: 100%;
            height: auto;
            aspect-ratio: 3 / 2;
            object-fit: cover;
            -webkit-user-drag: none;
            pointer-events: none;
        }

        .ms-inf-card-body {
            padding: 14px 26px 28px;
        }

        .ms-inf-card h3 {
            min-height: 2.6em; /* reserves 2 lines so every paragraph starts at the same height */
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0 24px;
            font-size: 18px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-inf-card p {
            margin: 0;
            font-size: 16px;
            line-height: 26px;
            font-weight: 400;
            color: #555;
        }

        /* ---------- Arrows ---------- */
        .ms-inf-arrow {
            position: absolute;
            top: var(--arrow-top);
            z-index: 2;
            width: 30px;
            height: 30px;
            padding: 0;
            border: 2px solid var(--purple);
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background .2s;
        }

        .ms-inf-arrow svg {
            width: 14px;
            height: 14px;
            fill: none;
            stroke: var(--purple);
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: stroke .2s;
        }

        .ms-inf-arrow:hover,
        .ms-inf-arrow:focus-visible {
            background: var(--purple);
        }

        .ms-inf-arrow:hover svg,
        .ms-inf-arrow:focus-visible svg {
            stroke: #fff;
        }

        .ms-inf-prev {
            left: 0;
        }

        .ms-inf-next {
            right: 0;
        }

        .ms-inf-carousel.no-scroll .ms-inf-arrow {
            display: none;
        }

        .ms-inf-carousel.no-scroll .ms-inf-track {
            cursor: default;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 1024px) {
            .ms-inf-carousel {
                --per: 1;
            }
        }

        @media (max-width: 991px) {
            .ms-inf-title {
                font-size: 40px;
            }
        }

        @media (max-width: 575px) {
            .ms-inf {
                padding: 35px 14px 40px;
            }

            .ms-inf-head {
                margin-bottom: 26px;
            }

            .ms-inf-title {
                font-size: 29px;
                margin-bottom: 16px;
            }

            .ms-inf-text {
                font-size: 15px;
                line-height: 1.7;
            }

            .ms-inf-carousel {
                padding: 0 14px;
            }

            .ms-inf-card-body {
                padding: 12px 20px 24px;
            }

            .ms-inf-card h3 {
                min-height: 0;
                margin-bottom: 14px;
            }
        }
    </style>

    <div class="ms-inf-head">
        <h2 class="ms-inf-title">Types of <span>Influencer Marketing</span> Services</h2>
        <p class="ms-inf-text">We provide <strong>influencer marketing services in Delhi</strong>. This includes YouTube, Instagram and regional influencer campaigns. We work with influencers to help your brand.</p>
    </div>

    <div class="ms-inf-carousel" id="msInfCarousel" role="region" aria-roledescription="carousel" aria-label="Influencer marketing services">
        <button class="ms-inf-arrow ms-inf-prev" type="button" aria-label="Previous slide">
            <svg viewBox="0 0 24 24">
                <polyline points="15 5 8 12 15 19" />
            </svg>
        </button>

        <div class="ms-inf-viewport">
            <div class="ms-inf-track">
                <?php foreach ($ms_inf_items as $i => $item): ?>
                    <article class="ms-inf-card" role="group" aria-roledescription="slide" aria-label="<?= ($i + 1) . ' / ' . count($ms_inf_items) ?>">
                        <div class="ms-inf-card-img">
                            <img src="<?= htmlspecialchars($item[2]) ?>"
                                alt="<?= htmlspecialchars($item[3] ?? $item[0]) ?>"
                                width="1536" height="1024" loading="lazy" decoding="async" draggable="false">
                        </div>
                        <div class="ms-inf-card-body">
                            <h3><?= htmlspecialchars($item[0]) ?></h3>
                            <p><?= htmlspecialchars($item[1]) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <button class="ms-inf-arrow ms-inf-next" type="button" aria-label="Next slide">
            <svg viewBox="0 0 24 24">
                <polyline points="9 5 16 12 9 19" />
            </svg>
        </button>
    </div>

    <script>
        (function() {
            var root = document.getElementById('msInfCarousel');
            if (!root) return;

            /* Settings (same as the Elementor carousel) */
            var AUTOPLAY_DELAY = 2000; /* ms between slides */
            var SPEED = 500; /* ms slide transition */
            var RESUME_AFTER = 6000; /* ms of inactivity before autoplay resumes after a click/swipe */

            var track = root.querySelector('.ms-inf-track');
            var prev = root.querySelector('.ms-inf-prev');
            var next = root.querySelector('.ms-inf-next');
            var originals = Array.prototype.slice.call(track.children);
            var n = originals.length;

            var per = 1,
                idx = 0,
                infinite = false,
                busy = false;
            var hovering = false,
                userPaused = false;
            var settleT = null,
                resumeT = null,
                autoT = null,
                resizeT = null;
            var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function getPer() {
                var v = parseInt(getComputedStyle(root).getPropertyValue('--per'), 10);
                return v > 0 ? v : 1;
            }

            function makeClone(el) {
                var c = el.cloneNode(true);
                c.classList.add('is-clone');
                c.setAttribute('aria-hidden', 'true');
                c.setAttribute('inert', '');
                return c;
            }

            function stepPx() {
                var card = track.querySelector('.ms-inf-card');
                var gap = parseFloat(getComputedStyle(track).columnGap) || 12;
                return card ? card.getBoundingClientRect().width + gap : 0;
            }

            function position(animate) {
                track.style.transition = animate ? 'transform ' + SPEED + 'ms ease' : 'none';
                track.style.transform = 'translate3d(' + (-idx * stepPx()) + 'px,0,0)';
                if (!animate) void track.offsetWidth; /* flush so the next animated move starts clean */
            }

            function updateArrows() {
                var img = track.querySelector('.ms-inf-card-img');
                if (img && img.offsetHeight) {
                    root.style.setProperty('--arrow-top', (img.offsetHeight / 2 - 15 + 2) + 'px');
                }
            }

            /* Build clones for the infinite loop */
            function build() {
                Array.prototype.slice.call(track.querySelectorAll('.is-clone')).forEach(function(c) {
                    c.remove();
                });
                busy = false;
                clearTimeout(settleT);

                per = Math.min(getPer(), n);
                infinite = n > per;
                root.classList.toggle('no-scroll', !infinite);

                if (infinite) {
                    var first = track.firstElementChild;
                    originals.slice(n - per).forEach(function(el) {
                        track.insertBefore(makeClone(el), first);
                    });
                    originals.slice(0, per).forEach(function(el) {
                        track.appendChild(makeClone(el));
                    });
                }
                idx = infinite ? per : 0;
                position(false);
                updateArrows();
            }

            /* After an animated move, jump back into the real range without animation */
            function settle() {
                if (!busy) return;
                clearTimeout(settleT);
                busy = false;
                if (idx >= per + n) idx -= n;
                else if (idx < per) idx += n;
                position(false);
            }

            function go(dir) {
                if (!infinite || busy) return;
                busy = true;
                idx += dir;
                position(true);
                settleT = setTimeout(settle, SPEED + 80); /* fallback if transitionend doesn't fire */
            }

            track.addEventListener('transitionend', function(e) {
                if (e.target === track) settle();
            });

            /* Autoplay: pauses on hover, and after any user interaction */
            function startAuto() {
                clearInterval(autoT);
                if (reduceMotion) return;
                autoT = setInterval(function() {
                    if (!hovering && !userPaused && !document.hidden) go(1);
                }, AUTOPLAY_DELAY);
            }

            function interacted() {
                userPaused = true;
                clearTimeout(resumeT);
                resumeT = setTimeout(function() {
                    userPaused = false;
                }, RESUME_AFTER);
            }

            root.addEventListener('mouseenter', function() {
                hovering = true;
            });
            root.addEventListener('mouseleave', function() {
                hovering = false;
            });
            root.addEventListener('focusin', function() {
                hovering = true;
            });
            root.addEventListener('focusout', function() {
                hovering = false;
            });

            prev.addEventListener('click', function() {
                interacted();
                go(-1);
            });
            next.addEventListener('click', function() {
                interacted();
                go(1);
            });

            /* Swipe / drag */
            var startX = null,
                dragged = false;
            track.addEventListener('pointerdown', function(e) {
                if (!infinite || (e.pointerType === 'mouse' && e.button !== 0)) return;
                startX = e.clientX;
                dragged = false;
            });
            track.addEventListener('pointermove', function(e) {
                if (startX === null) return;
                if (Math.abs(e.clientX - startX) > 8) {
                    dragged = true;
                    track.classList.add('is-dragging');
                }
            });

            function endDrag(e) {
                if (startX === null) return;
                var dx = e.clientX - startX;
                startX = null;
                track.classList.remove('is-dragging');
                if (dragged && Math.abs(dx) > 50) {
                    interacted();
                    go(dx < 0 ? 1 : -1);
                }
            }
            track.addEventListener('pointerup', endDrag);
            track.addEventListener('pointercancel', function() {
                startX = null;
                track.classList.remove('is-dragging');
            });
            track.addEventListener('pointerleave', endDrag);

            /* Resize: rebuild when the number of visible cards changes, otherwise just re-position */
            window.addEventListener('resize', function() {
                clearTimeout(resizeT);
                resizeT = setTimeout(function() {
                    if (getPer() !== per) build();
                    else {
                        position(false);
                        updateArrows();
                    }
                }, 120);
            });

            track.addEventListener('load', updateArrows, true); /* images finished loading */
            window.addEventListener('load', function() {
                position(false);
                updateArrows();
            });

            build();
            startAuto();
        })();
    </script>
</section>