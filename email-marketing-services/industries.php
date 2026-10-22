<?php
// [title, text]
$cards = [
    ['Industries We Serve', 'We support businesses in the area of email marketing. We work with many types of businesses, and each type has its own customers. We create email campaigns aligned with each business\'s goals and customer behavior.'],
    ['E-commerce Businesses', 'We help online businesses sell more products. We send email reminders for abandoned shopping carts and help stores keep in touch with customers, so the online store can boost its sales and encourage repeat customers.'],
    ['Local Businesses', 'We help local businesses stay in touch with customers. We create email campaigns that let businesses share news and updates, which helps them build lasting relationships with their local customers.'],
    ['Service-Based Businesses', 'We assist companies that provide services. We develop email marketing campaigns that attract customers and help companies connect with them. We also help businesses follow up with their customers automatically.'],
    ['Startups & Small Businesses', 'We assist startups and small businesses. We design email campaigns that help them build relationships with customers and build a brand. Our email marketing is cost-effective, so small businesses can compete against larger ones.'],
];
?>
<section class="ms-emind">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-emind,
        .ms-emind * {
            box-sizing: border-box;
        }

        .ms-emind {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 70px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-emind-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        .ms-emind-viewport {
            overflow: hidden;
            padding: 12px 0 18px;
        }

        .ms-emind-track {
            --pv: 4; /* slides per view */
            display: flex;
            gap: 10px;
            will-change: transform;
        }

        .ms-emind-slide {
            flex: 0 0 calc((100% - (var(--pv) - 1) * 10px) / var(--pv));
            display: flex;
        }

        .ms-emind-card {
            flex: 1;
            padding: 26px 22px 28px;
            border: 1px solid rgba(90, 46, 166, .15);
            border-radius: 22px;
            background: linear-gradient(145deg, #FFFFFF 0%, #F3EDFC 55%, #E6DBF8 100%);
            box-shadow: 0 8px 22px rgba(90, 46, 166, .14);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-emind-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(90, 46, 166, .22);
        }

        .ms-emind-card h3 {
            margin: 0 0 10px;
            font-size: 19px;
            line-height: 1.3;
            font-weight: 600;
            color: var(--purple);
        }

        .ms-emind-card p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Bullets ---------- */
        .ms-emind-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 8px;
        }

        .ms-emind-dot {
            width: 10px;
            height: 10px;
            padding: 0;
            border: 0;
            border-radius: 10px;
            background: rgba(90, 46, 166, .25);
            cursor: pointer;
            transition: width .3s ease, background .3s ease;
        }

        .ms-emind-dot.is-active {
            width: 26px;
            background: var(--purple);
        }

        .ms-emind-dot:focus-visible {
            outline: 2px solid var(--purple);
            outline-offset: 2px;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emind-track {
                --pv: 3;
            }
        }

        @media (max-width: 767px) {
            .ms-emind-track {
                --pv: 2;
            }
        }

        @media (max-width: 575px) {
            .ms-emind {
                padding: 20px 16px 45px;
            }

            .ms-emind-track {
                --pv: 1;
            }

            .ms-emind-card {
                padding: 24px 20px 26px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-emind-track {
                transition: none !important;
            }
        }
    </style>

    <div class="ms-emind-wrap">
        <div class="ms-emind-carousel" role="region" aria-roledescription="carousel" aria-label="Industries we serve">
            <div class="ms-emind-viewport">
                <div class="ms-emind-track">
                    <?php foreach ($cards as $card) : ?>
                        <div class="ms-emind-slide">
                            <div class="ms-emind-card">
                                <h3><?php echo htmlspecialchars($card[0]); ?></h3>
                                <p><?php echo htmlspecialchars($card[1]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="ms-emind-dots"></div>
        </div>
    </div>

    <script>
        (function() {
            var root = document.querySelector('.ms-emind');
            if (!root) return;

            var carousel = root.querySelector('.ms-emind-carousel');
            var track = root.querySelector('.ms-emind-track');
            var dotsBox = root.querySelector('.ms-emind-dots');
            var originals = Array.prototype.slice.call(track.children);
            var total = originals.length;

            var GAP = 10;      // px between slides
            var SPEED = 500;   // slide transition (ms)
            var DELAY = 5000;  // autoplay delay (ms)

            var perView = 4, clones = 4, index = 0, busy = false, timer = null, fallback = null;
            var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // bullets
            var dots = [];
            for (var d = 0; d < total; d++) {
                (function(n) {
                    var b = document.createElement('button');
                    b.type = 'button';
                    b.className = 'ms-emind-dot';
                    b.setAttribute('aria-label', 'Go to slide ' + (n + 1));
                    b.addEventListener('click', function() {
                        goTo(n);
                        start();
                    });
                    dotsBox.appendChild(b);
                    dots.push(b);
                })(d);
            }

            function updateDots() {
                var active = ((index % total) + total) % total;
                dots.forEach(function(b, n) {
                    b.classList.toggle('is-active', n === active);
                    if (n === active) b.setAttribute('aria-current', 'true');
                    else b.removeAttribute('aria-current');
                });
            }

            // same breakpoints as the CSS above
            function getPerView() {
                var w = window.innerWidth;
                if (w <= 575) return 1;
                if (w <= 767) return 2;
                if (w <= 991) return 3;
                return 4;
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
                clones = Math.min(perView, total);
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
                updateDots();
            }

            function settle() {
                clearTimeout(fallback);
                if (index >= total) index -= total;
                if (index < 0) index += total;
                position(false);
                updateDots();
                busy = false;
            }

            function goTo(target) {
                if (busy) return;
                busy = true;
                index = target;
                position(true);
                updateDots();
                clearTimeout(fallback);
                fallback = setTimeout(settle, SPEED + 80); // safety net if transitionend doesn't fire
            }

            function move(dir) {
                goTo(index + dir);
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

            // pause on hover / keyboard focus / touch
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