<?php
// Edit the content here.
$eyebrow  = 'Performance Marketing Services by Minerdia Studio';
$title    = 'High-Converting';
$accent   = 'Paid Ads';
$subtitle = 'Scale your business across the world\'s most powerful advertising platforms — we manage every click, every campaign.';

/*
 * Logos: put the 5 PNGs (720x720) in assets/image/services/ads/ with the file names below.
 * Until a local file exists, the page automatically uses the old WordPress URL (the 'remote' value).
 * 'link' is where the arrow button goes.
 */
$wp = '';
$platforms = [
    [
        'name'   => 'YouTube Ads',
        'text'   => 'Skippable, bumper & in-feed video ads that convert.',
        'stat'   => '2.7',
        'unit'   => 'B',
        'label'  => 'Active users',
        'link'   => '#',
        'local'  => 'assets/image/logo/youtube-ads.png',
        'remote' => $wp . 'youtube-adss.png',
    ],
    [
        'name'   => 'Facebook Ads',
        'text'   => 'Precision targeting across feeds, reels & marketplace.',
        'stat'   => '3',
        'unit'   => 'B',
        'label'  => 'Active users',
        'link'   => '#',
        'local'  => 'assets/image/logo/facebook-ads.png',
        'remote' => $wp . 'facebook-ads.png',
    ],
    [
        'name'   => 'Instagram Ads',
        'text'   => 'Stop-the-scroll reels, stories & shopping ads that sell.',
        'stat'   => '2',
        'unit'   => 'B',
        'label'  => 'Active users',
        'link'   => '#',
        'local'  => 'assets/image/logo/instagram-ads.png',
        'remote' => $wp . 'instagram-ads.png',
    ],
    [
        'name'   => 'Google Ads',
        'text'   => 'Stop-the-scroll reels, stories & shopping ads that sell.',
        'stat'   => '2.7',
        'unit'   => 'B',
        'label'  => 'Active users',
        'link'   => '#',
        'local'  => 'assets/image/logo/google-ads.png',
        'remote' => $wp . 'google-ads.png',
    ],
    [
        'name'   => 'Linkedin Ads',
        'text'   => 'Stop-the-scroll reels, stories & shopping ads that sell.',
        'stat'   => '465',
        'unit'   => 'M',
        'label'  => 'Active users',
        'link'   => '#',
        'local'  => 'assets/image/logo/linkedin-ads.png',
        'remote' => $wp . 'linkedin-ads.png',
    ],
];

/** local file if it exists, otherwise the WordPress URL */
$logo_for = function (array $p) {
    return is_file(__DIR__ . '/../' . $p['local']) ? BASE . $p['local'] : $p['remote'];
};
?>
<section class="ms-ad-slider">

    <style>
        .ms-ad-slider,
        .ms-ad-slider * {
            box-sizing: border-box;
        }

        .ms-ad-slider {
            --purple: #5A2EA6;
            --gap: 20px;
            width: 100%;
            padding: 64px 20px 76px;
            background: linear-gradient(180deg, #f1edf8 0%, #cbbbe6 28%, #9a78d0 62%, #6a35b5 100%);
            font-family: var(--font-body);
            overflow: hidden;
        }

        .ms-ad-slider-wrap {
            max-width: 1290px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-ad-slider-head {
            text-align: center;
            margin-bottom: 44px;
        }

        .ms-ad-slider-eyebrow {
            margin: 0 0 6px;
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 500;
            color: #111;
        }

        .ms-ad-slider-title {
            margin: 0 0 16px;
            font-family: var(--font-head);
            font-size: 48px;
            line-height: 1.15;
            font-weight: 600;
            color: #000;
        }

        .ms-ad-slider-title span {
            color: var(--purple);
        }

        .ms-ad-slider-sub {
            margin: 0 auto;
            max-width: 1000px;
            font-size: 17px;
            line-height: 1.6;
            font-weight: 400;
            color: #1a1a1a;
        }

        /* ---------- Slider ---------- */
        .ms-ad-slider-stage {
            position: relative;
            padding: 0 46px;
        }

        .ms-ad-slider-track {
            display: flex;
            gap: var(--gap);
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding: 6px 2px 14px;
        }

        .ms-ad-slider-track::-webkit-scrollbar {
            display: none;
        }

        .ms-ad-slider-card {
            flex: 0 0 calc((100% - (3 * var(--gap))) / 4);
            min-height: 307px;
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
            padding: 28px 12px 18px;
            border-radius: 28px;
            background: rgba(255, 255, 255, .34);
            border: 1px solid rgba(255, 255, 255, .6);
            box-shadow: 0 10px 28px rgba(60, 20, 120, .16);
            -webkit-backdrop-filter: blur(8px);
            backdrop-filter: blur(8px);
            text-align: center;
        }

        .ms-ad-slider-logo {
            width: 76px;
            height: 76px;
            margin: 0 auto 14px;
        }

        .ms-ad-slider-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .ms-ad-slider-card h3 {
            margin: 0 0 8px;
            font-family: var(--font-head);
            font-size: 22px;
            line-height: 1.25;
            font-weight: 500;
            color: #000;
        }

        .ms-ad-slider-card p {
            margin: 0 0 18px;
            padding: 0 10px;
            font-size: 15.5px;
            line-height: 1.55;
            font-weight: 400;
            color: #1f1f1f;
        }

        .ms-ad-slider-foot {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-top: auto;
            padding: 14px 4px 0;
            border-top: 2px solid rgba(90, 46, 166, .16);
            text-align: left;
        }

        .ms-ad-slider-stat {
            display: block;
            font-family: var(--font-head);
            font-size: 24px;
            line-height: 1.2;
            font-weight: 500;
            color: #f00000;
        }

        .ms-ad-slider-label {
            display: block;
            margin-top: 4px;
            font-size: 14.5px;
            font-weight: 400;
            color: #222;
        }

        .ms-ad-slider-go {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            margin-right: 6px;
            border-radius: 50%;
            background: #f3c9d8;
            color: #f00000;
            transition: .25s ease;
        }

        .ms-ad-slider-go:hover {
            background: #fff;
            transform: translateX(3px);
        }

        .ms-ad-slider-go svg {
            width: 16px;
            height: 16px;
        }

        /* ---------- Arrows (outside the cards) ---------- */
        .ms-ad-slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            padding: 0;
            border: 2px solid #fff;
            border-radius: 50%;
            background: transparent;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .25s ease;
        }

        .ms-ad-slider-arrow:hover:not(:disabled) {
            background: #fff;
            color: var(--purple);
        }

        .ms-ad-slider-arrow:disabled {
            opacity: .5;
            cursor: default;
        }

        .ms-ad-slider-arrow:focus-visible {
            outline: 2px solid #fff;
            outline-offset: 2px;
        }

        .ms-ad-slider-arrow svg {
            width: 14px;
            height: 14px;
        }

        .ms-ad-slider-prev {
            left: 4px;
        }

        .ms-ad-slider-next {
            right: 4px;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 1100px) {
            .ms-ad-slider-title {
                font-size: 40px;
            }

            .ms-ad-slider-card {
                flex-basis: calc((100% - var(--gap)) / 2);
            }
        }

        @media (max-width: 767px) {
            .ms-ad-slider {
                padding: 44px 14px 54px;
            }

            .ms-ad-slider-head {
                margin-bottom: 30px;
            }

            .ms-ad-slider-title {
                font-size: 31px;
            }

            .ms-ad-slider-eyebrow {
                font-size: 14px;
            }

            .ms-ad-slider-sub {
                font-size: 15px;
            }

            .ms-ad-slider-stage {
                padding: 0 34px;
            }

            .ms-ad-slider-card {
                flex-basis: 100%;
            }

            .ms-ad-slider-card h3 {
                font-size: 20px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-ad-slider-track {
                scroll-behavior: auto;
            }
        }
    </style>

    <div class="ms-ad-slider-wrap">

        <div class="ms-ad-slider-head">
            <p class="ms-ad-slider-eyebrow"><?php echo htmlspecialchars($eyebrow); ?></p>
            <h2 class="ms-ad-slider-title"><?php echo htmlspecialchars($title); ?> <span><?php echo htmlspecialchars($accent); ?></span></h2>
            <p class="ms-ad-slider-sub"><?php echo htmlspecialchars($subtitle); ?></p>
        </div>

        <div class="ms-ad-slider-stage">
            <button type="button" class="ms-ad-slider-arrow ms-ad-slider-prev" aria-label="Previous">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="15 5 8 12 15 19"></polyline>
                </svg>
            </button>

            <div class="ms-ad-slider-track">
                <?php foreach ($platforms as $p) : ?>
                    <article class="ms-ad-slider-card">
                        <div class="ms-ad-slider-logo">
                            <img src="<?php echo htmlspecialchars($logo_for($p)); ?>" width="720" height="720" alt="<?php echo htmlspecialchars($p['name']); ?>" loading="lazy" decoding="async">
                        </div>
                        <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                        <p><?php echo htmlspecialchars($p['text']); ?></p>
                        <div class="ms-ad-slider-foot">
                            <div>
                                <span class="ms-ad-slider-stat"><?php echo htmlspecialchars($p['stat'] . ' ' . $p['unit']); ?></span>
                                <span class="ms-ad-slider-label"><?php echo htmlspecialchars($p['label']); ?></span>
                            </div>
                            <a class="ms-ad-slider-go" href="<?php echo htmlspecialchars($p['link']); ?>" aria-label="<?php echo htmlspecialchars($p['name']); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <line x1="4" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <button type="button" class="ms-ad-slider-arrow ms-ad-slider-next" aria-label="Next">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="9 5 16 12 9 19"></polyline>
                </svg>
            </button>
        </div>

    </div>

    <script>
        (function() {
            var stage = document.querySelector('.ms-ad-slider-stage');
            if (!stage) return;

            var track = stage.querySelector('.ms-ad-slider-track');
            var prev = stage.querySelector('.ms-ad-slider-prev');
            var next = stage.querySelector('.ms-ad-slider-next');
            var paused = false;
            var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function step() {
                var card = track.querySelector('.ms-ad-slider-card');
                if (!card) return 0;
                return card.getBoundingClientRect().width + (parseFloat(getComputedStyle(track).columnGap) || 20);
            }

            function maxScroll() {
                return track.scrollWidth - track.clientWidth - 2;
            }

            function update() {
                prev.disabled = track.scrollLeft <= 2;
                next.disabled = track.scrollLeft >= maxScroll();
            }

            prev.addEventListener('click', function() {
                track.scrollBy({
                    left: -step(),
                    behavior: 'smooth'
                });
            });
            next.addEventListener('click', function() {
                track.scrollBy({
                    left: step(),
                    behavior: 'smooth'
                });
            });

            track.addEventListener('scroll', update, {
                passive: true
            });
            window.addEventListener('resize', update);
            window.addEventListener('load', update);
            update();

            /* autoplay every 5s, back to the first card at the end; pauses on hover / focus / touch */
            if (!reduce) {
                ['mouseenter', 'focusin', 'touchstart'].forEach(function(ev) {
                    stage.addEventListener(ev, function() {
                        paused = true;
                    }, {
                        passive: true
                    });
                });
                ['mouseleave', 'focusout', 'touchend'].forEach(function(ev) {
                    stage.addEventListener(ev, function() {
                        paused = false;
                    }, {
                        passive: true
                    });
                });

                setInterval(function() {
                    if (paused || document.hidden) return;
                    if (track.scrollLeft >= maxScroll()) {
                        track.scrollTo({
                            left: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        track.scrollBy({
                            left: step(),
                            behavior: 'smooth'
                        });
                    }
                }, 5000);
            }
        })();
    </script>
</section>