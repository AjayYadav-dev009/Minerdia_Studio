<?php
$title_plain  = 'Smart Email Marketing';
$title_accent = 'Solutions';
$description  = 'We make email marketing plans that help businesses talk to customers better, get people involved and turn them into customers. We do this by planning campaigns and finding the right people to send them to.';

// [icon class (Font Awesome), title, text]
$cards = [
    ['fa-regular fa-envelope', 'Email Marketing Solutions', 'We create email campaigns that boost engagement, generate leads, and strengthen customer connections.'],
    ['fa-solid fa-bullseye', 'Audience', 'We find the right people for your campaigns. This means your emails go to people who really care about your business and what you offer.'],
    ['fa-solid fa-pen-ruler', 'Creative Email Design', 'Our team creates visually appealing emails that are clean, easy to read, and fully optimized for both mobile phones and desktop devices.'],
    ['fa-solid fa-gears', 'Email Automation', 'We automate email campaigns to save time, improve communication, and keep audiences engaged with follow-ups and marketing emails.'],
    ['fa-solid fa-chart-line', 'Analytics & Reporting', 'We track email performance to understand results and improve campaigns through opens, clicks, and audience engagement insights.'],
];
?>
<section class="ms-emc">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-emc,
        .ms-emc * {
            box-sizing: border-box;
        }

        .ms-emc {
            --purple: #5A2EA6;
            --purple-soft: #F3EEFB;
            width: 100%;
            padding: 30px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-emc-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-emc-head {
            max-width: 820px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .ms-emc-title {
            margin: 0 0 14px;
            font-size: 36px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-emc-title span {
            color: var(--purple);
        }

        .ms-emc-desc {
            margin: 0;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Carousel ---------- */
        .ms-emc-carousel {
            position: relative;
            padding: 0 58px; /* gutters for the outside arrows */
        }

        .ms-emc-viewport {
            overflow: hidden;
            padding: 14px 0 34px;
        }

        .ms-emc-track {
            --pv: 3; /* slides per view */
            display: flex;
            gap: 10px;
            will-change: transform;
        }

        .ms-emc-slide {
            flex: 0 0 calc((100% - (var(--pv) - 1) * 10px) / var(--pv));
            display: flex;
        }

        .ms-emc-card {
            flex: 1;
            padding: 34px 26px 32px;
            border-radius: 22px;
            background: #f6f6f6;
            text-align: center;
            box-shadow: 0 6px 16px rgba(0, 0, 0, .12), 0 12px 28px rgba(90, 46, 166, .14);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-emc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .14), 0 16px 34px rgba(90, 46, 166, .22);
        }

        .ms-emc-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--purple);
            border-radius: 50%;
            background: #fff;
            color: var(--purple);
            font-size: 24px;
            transition: background .3s ease, color .3s ease;
        }

        .ms-emc-card:hover .ms-emc-icon {
            background: var(--purple);
            color: #fff;
        }

        .ms-emc-card h3 {
            margin: 0 0 10px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-emc-card p {
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Arrows ---------- */
        .ms-emc-arrow {
            position: absolute;
            top: 50%;
            width: 40px;
            height: 40px;
            margin-top: -26px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(90, 46, 166, .35);
            border-radius: 50%;
            background: #fff;
            color: var(--purple);
            cursor: pointer;
            transition: background .25s ease, color .25s ease, transform .25s ease;
        }

        .ms-emc-arrow:hover {
            background: var(--purple);
            color: #fff;
        }

        .ms-emc-arrow svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        .ms-emc-prev {
            left: 0;
        }

        .ms-emc-next {
            right: 0;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emc-track {
                --pv: 2;
            }

            .ms-emc-title {
                font-size: 31px;
            }
        }

        @media (max-width: 575px) {
            .ms-emc {
                padding: 20px 14px 45px;
            }

            .ms-emc-track {
                --pv: 1;
            }

            .ms-emc-title {
                font-size: 26px;
            }

            .ms-emc-desc {
                font-size: 14px;
            }

            .ms-emc-carousel {
                padding: 0 40px;
            }

            .ms-emc-arrow {
                width: 34px;
                height: 34px;
                margin-top: -22px;
            }

            .ms-emc-card {
                padding: 28px 20px 26px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-emc-track {
                transition: none !important;
            }
        }
    </style>

    <div class="ms-emc-wrap">

        <div class="ms-emc-head">
            <h2 class="ms-emc-title"><?php echo htmlspecialchars($title_plain); ?> <span><?php echo htmlspecialchars($title_accent); ?></span></h2>
            <p class="ms-emc-desc"><?php echo htmlspecialchars($description); ?></p>
        </div>

        <div class="ms-emc-carousel" role="region" aria-roledescription="carousel" aria-label="Email marketing solutions">
            <button type="button" class="ms-emc-arrow ms-emc-prev" aria-label="Previous slide">
                <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"/></svg>
            </button>

            <div class="ms-emc-viewport">
                <div class="ms-emc-track">
                    <?php foreach ($cards as $card) : ?>
                        <div class="ms-emc-slide">
                            <div class="ms-emc-card">
                                <div class="ms-emc-icon"><i class="<?php echo htmlspecialchars($card[0]); ?>" aria-hidden="true"></i></div>
                                <h3><?php echo htmlspecialchars($card[1]); ?></h3>
                                <p><?php echo htmlspecialchars($card[2]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button type="button" class="ms-emc-arrow ms-emc-next" aria-label="Next slide">
                <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"/></svg>
            </button>
        </div>

    </div>

    <script>
        (function() {
            var root = document.querySelector('.ms-emc');
            if (!root) return;

            var carousel = root.querySelector('.ms-emc-carousel');
            var track = root.querySelector('.ms-emc-track');
            var prevBtn = root.querySelector('.ms-emc-prev');
            var nextBtn = root.querySelector('.ms-emc-next');
            var originals = Array.prototype.slice.call(track.children);
            var total = originals.length;

            var GAP = 10;      // px between slides
            var SPEED = 700;   // slide transition (ms)
            var DELAY = 2000;  // autoplay delay (ms)

            var perView = 3, clones = 3, index = 0, busy = false, timer = null, fallback = null;
            var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function getPerView() {
                var w = window.innerWidth;
                return w <= 575 ? 1 : (w <= 991 ? 2 : 3);
            }

            function stepSize() {
                return track.children[0].getBoundingClientRect().width + GAP;
            }

            function position(animate) {
                track.style.transition = animate ? 'transform ' + SPEED + 'ms ease' : 'none';
                track.style.transform = 'translate3d(' + (-(index + clones) * stepSize()) + 'px,0,0)';
            }

            function build() {
                Array.prototype.slice.call(track.querySelectorAll('.is-clone')).forEach(function(c) {
                    c.parentNode.removeChild(c);
                });

                perView = getPerView();
                clones = perView;
                var i, c;

                // clones of the last slides go in front (so "previous" can loop)
                for (i = total - 1; i >= total - clones; i--) {
                    c = originals[i].cloneNode(true);
                    c.classList.add('is-clone');
                    c.setAttribute('aria-hidden', 'true');
                    track.insertBefore(c, track.firstChild);
                }
                // clones of the first slides go at the end (so "next" can loop)
                for (i = 0; i < clones; i++) {
                    c = originals[i].cloneNode(true);
                    c.classList.add('is-clone');
                    c.setAttribute('aria-hidden', 'true');
                    track.appendChild(c);
                }

                index = 0;
                busy = false;
                position(false);
            }

            function settle() {
                clearTimeout(fallback);
                if (index >= total) index -= total;
                if (index < 0) index += total;
                position(false);
                busy = false;
            }

            function move(dir) {
                if (busy) return;
                busy = true;
                index += dir;
                position(true);
                clearTimeout(fallback);
                fallback = setTimeout(settle, SPEED + 80); // safety net if transitionend doesn't fire
            }

            track.addEventListener('transitionend', function(e) {
                if (e.target === track && e.propertyName === 'transform') settle();
            });

            function stop() {
                clearInterval(timer);
                timer = null;
            }

            function start() {
                if (reduceMotion) return;
                stop();
                timer = setInterval(function() {
                    move(1);
                }, DELAY);
            }

            prevBtn.addEventListener('click', function() {
                move(-1);
                start();
            });

            nextBtn.addEventListener('click', function() {
                move(1);
                start();
            });

            // pause on hover / keyboard focus
            carousel.addEventListener('mouseenter', stop);
            carousel.addEventListener('mouseleave', start);
            carousel.addEventListener('focusin', stop);
            carousel.addEventListener('focusout', start);

            // swipe on touch screens
            var startX = null;
            carousel.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
                stop();
            }, {passive: true});
            carousel.addEventListener('touchend', function(e) {
                if (startX !== null) {
                    var dx = e.changedTouches[0].clientX - startX;
                    if (Math.abs(dx) > 40) move(dx < 0 ? 1 : -1);
                }
                startX = null;
                start();
            }, {passive: true});

            // rebuild when the number of visible slides changes
            var resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (getPerView() !== perView) {
                        build();
                    } else {
                        position(false);
                    }
                }, 150);
            });

            window.addEventListener('load', function() {
                position(false);
            });

            build();
            start();
        })();
    </script>
</section>