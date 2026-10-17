<?php
$title = 'Email Marketing Process';
$text  = 'At Minerdia Studio, we create targeted email campaigns tailored to your business goals and audience, helping you increase engagement, strengthen customer relationships, and drive growth.';

// [title, text]
$steps = [
    ['Email Strategy Planning', 'We start by understanding your business, your target audience, and the goals you want to achieve through email marketing. Next, we create an email marketing strategy that\'s perfect for your business.'],
    ['Audience Segmentation', 'We segment your audience based on their interests, behavior, and activity to deliver more relevant emails. This helps improve engagement and creates a more personalized experience for every subscriber.'],
    ['Email Content & Design', 'Our team creates professional email content and visually appealing designs that capture attention, communicate your message clearly, and encourage higher engagement from your audience.'],
    ['Automation & Campaign Setup', 'We set up your email campaigns and automated sequences, such as welcome emails, follow-ups, and reminders, so the right message reaches the right person at the right time without extra manual effort.'],
    ['Performance Monitoring', 'We closely monitor how your campaigns perform, watching how many people open the emails, click on them, and respond, so that the next email marketing campaign is even better.'],
];
?>
<section class="ms-emp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-emp,
        .ms-emp * {
            box-sizing: border-box;
        }

        .ms-emp {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 70px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-emp-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
            gap: 40px;
            align-items: center;
        }

        /* ---------- Left ---------- */
        .ms-emp-title {
            margin: 0 0 16px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-emp-desc {
            margin: 0;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Carousel ---------- */
        .ms-emp-carousel {
            min-width: 0;
        }

        .ms-emp-viewport {
            overflow: hidden;
            padding: 12px 0 18px;
        }

        .ms-emp-track {
            --pv: 2; /* slides per view */
            display: flex;
            gap: 10px;
            will-change: transform;
        }

        .ms-emp-slide {
            flex: 0 0 calc((100% - (var(--pv) - 1) * 10px) / var(--pv));
            display: flex;
        }

        .ms-emp-card {
            flex: 1;
            padding: 28px 24px 30px;
            border: 1px solid rgba(90, 46, 166, .15);
            border-radius: 22px;
            background: linear-gradient(145deg, #FFFFFF 0%, #F3EDFC 55%, #E6DBF8 100%);
            box-shadow: 0 8px 22px rgba(90, 46, 166, .14);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-emp-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(90, 46, 166, .22);
        }

        .ms-emp-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin-bottom: 16px;
            border-radius: 50%;
            background: var(--purple);
            font-size: 15px;
            font-weight: 600;
            color: #fff;
        }

        .ms-emp-card h3 {
            margin: 0 0 10px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 600;
            color: var(--purple);
        }

        .ms-emp-card p {
            margin: 0;
            font-size: 14.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Bullets ---------- */
        .ms-emp-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 8px;
        }

        .ms-emp-dot {
            width: 10px;
            height: 10px;
            padding: 0;
            border: 0;
            border-radius: 10px;
            background: rgba(90, 46, 166, .25);
            cursor: pointer;
            transition: width .3s ease, background .3s ease;
        }

        .ms-emp-dot.is-active {
            width: 26px;
            background: var(--purple);
        }

        .ms-emp-dot:focus-visible {
            outline: 2px solid var(--purple);
            outline-offset: 2px;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emp-wrap {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .ms-emp-track {
                --pv: 1;
            }

            .ms-emp-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-emp {
                padding: 20px 16px 45px;
            }

            .ms-emp-title {
                font-size: 26px;
                text-align: center;
            }

            .ms-emp-desc {
                font-size: 14px;
                text-align: center;
            }

            .ms-emp-card {
                padding: 24px 20px 26px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-emp-track {
                transition: none !important;
            }
        }
    </style>

    <div class="ms-emp-wrap">

        <div class="ms-emp-left">
            <h2 class="ms-emp-title"><?php echo htmlspecialchars($title); ?></h2>
            <p class="ms-emp-desc"><?php echo htmlspecialchars($text); ?></p>
        </div>

        <div class="ms-emp-carousel" role="region" aria-roledescription="carousel" aria-label="Email marketing process">
            <div class="ms-emp-viewport">
                <div class="ms-emp-track">
                    <?php foreach ($steps as $i => $step) : ?>
                        <div class="ms-emp-slide">
                            <div class="ms-emp-card">
                                <span class="ms-emp-num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                                <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                                <p><?php echo htmlspecialchars($step[1]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="ms-emp-dots"></div>
        </div>

    </div>

    <script>
        (function() {
            var root = document.querySelector('.ms-emp');
            if (!root) return;

            var carousel = root.querySelector('.ms-emp-carousel');
            var track = root.querySelector('.ms-emp-track');
            var dotsBox = root.querySelector('.ms-emp-dots');
            var originals = Array.prototype.slice.call(track.children);
            var total = originals.length;

            var GAP = 10;      // px between slides
            var SPEED = 500;   // slide transition (ms)
            var DELAY = 5000;  // autoplay delay (ms)

            var perView = 2, clones = 2, index = 0, busy = false, timer = null, fallback = null;
            var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // bullets
            var dots = [];
            for (var d = 0; d < total; d++) {
                (function(n) {
                    var b = document.createElement('button');
                    b.type = 'button';
                    b.className = 'ms-emp-dot';
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

            function getPerView() {
                return window.innerWidth <= 991 ? 1 : 2;
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