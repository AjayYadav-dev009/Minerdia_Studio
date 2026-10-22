<?php
// Edit the content here.
$eyebrow  = 'Performance Marketing Services by Minerdia Studio';
$title    = 'High-Converting';
$accent   = 'Paid Ads';
$subtitle = 'Scale your business across the world’s most powerful advertising platforms — we manage every click, every campaign.';

// 'logo' is inline SVG (trusted markup, not escaped). 'link' is where the arrow button goes.
$platforms = [
    [
        'name'  => 'Instagram Ads',
        'text'  => 'Stop-the-scroll reels, stories & shopping ads that sell.',
        'stat'  => '2 B',
        'label' => 'Active users',
        'link'  => '#',
        'logo'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><defs><linearGradient id="ms-ig-g" x1="0" y1="1" x2="1" y2="0"><stop offset="0" stop-color="#FEDA75"/><stop offset=".3" stop-color="#FA7E1E"/><stop offset=".55" stop-color="#D62976"/><stop offset=".8" stop-color="#962FBF"/><stop offset="1" stop-color="#4F5BD5"/></linearGradient></defs><rect width="48" height="48" rx="11" fill="url(#ms-ig-g)"/><rect x="10" y="10" width="28" height="28" rx="8" fill="none" stroke="#fff" stroke-width="3"/><circle cx="24" cy="24" r="6.5" fill="none" stroke="#fff" stroke-width="3"/><circle cx="31.5" cy="16.5" r="2" fill="#fff"/></svg>',
    ],
    [
        'name'  => 'Google Ads',
        'text'  => 'Stop-the-scroll reels, stories & shopping ads that sell.',
        'stat'  => '2.7 B',
        'label' => 'Active users',
        'link'  => '#',
        'logo'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="19" y="3" width="11" height="34" rx="5.5" transform="rotate(30 24.5 20)" fill="#4285F4"/><rect x="6" y="3" width="11" height="34" rx="5.5" transform="rotate(-30 11.5 20)" fill="#FBBC04" transform-origin="center"/><circle cx="10" cy="38" r="6" fill="#34A853"/></svg>',
    ],
    [
        'name'  => 'Linkedin Ads',
        'text'  => 'Stop-the-scroll reels, stories & shopping ads that sell.',
        'stat'  => '465 M',
        'label' => 'Active users',
        'link'  => '#',
        'logo'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect width="48" height="48" rx="4" fill="#0A66C2"/><rect x="9" y="19" width="6.5" height="20" fill="#fff"/><circle cx="12.25" cy="12.5" r="3.8" fill="#fff"/><path d="M20 19h6.2v2.8c.9-1.8 3.1-3.3 6.3-3.3 6 0 7.5 3.8 7.5 8.7V39h-6.5v-10c0-2.4-.1-4.6-3-4.6s-3.5 2.1-3.5 4.5V39H20z" fill="#fff"/></svg>',
    ],
    [
        'name'  => 'YouTube Ads',
        'text'  => 'Skippable, bumper & in-feed video ads that convert.',
        'stat'  => '2.7 B',
        'label' => 'Active users',
        'link'  => '#',
        'logo'  => '<svg viewBox="0 0 64 48" aria-hidden="true"><rect x="0" y="4" width="64" height="40" rx="12" fill="#FF0000"/><path d="M26 15l16 9-16 9z" fill="#fff"/></svg>',
    ],
];
?>
<section class="ms-ad-slider">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-ad-slider,
        .ms-ad-slider * {
            box-sizing: border-box;
        }

        .ms-ad-slider {
            --purple: #5A2EA6;
            width: 100%;
            padding: 36px 20px 48px;
            background: linear-gradient(180deg, #f1edf8 0%, #cbbbe6 30%, #9a78d0 65%, #6a35b5 100%);
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-ad-slider-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-ad-slider-head {
            text-align: center;
            margin-bottom: 26px;
        }

        .ms-ad-slider-eyebrow {
            margin: 0 0 4px;
            font-size: 14px;
            font-weight: 600;
            color: #111;
        }

        .ms-ad-slider-title {
            margin: 0 0 12px;
            font-size: 38px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-ad-slider-title span {
            color: var(--purple);
        }

        .ms-ad-slider-sub {
            margin: 0;
            font-size: 11.5px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Slider ---------- */
        .ms-ad-slider-stage {
            position: relative;
            padding: 0 36px;
        }

        .ms-ad-slider-track {
            display: flex;
            gap: 14px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding: 4px 2px 8px;
        }

        .ms-ad-slider-track::-webkit-scrollbar {
            display: none;
        }

        .ms-ad-slider-card {
            flex: 0 0 calc((100% - 42px) / 4);
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
            padding: 24px 16px 14px;
            border-radius: 18px;
            background: rgba(255, 255, 255, .42);
            border: 1px solid rgba(255, 255, 255, .55);
            box-shadow: 0 8px 22px rgba(60, 20, 120, .18);
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            text-align: center;
        }

        .ms-ad-slider-logo {
            height: 42px;
            margin: 0 auto 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ms-ad-slider-logo svg {
            height: 100%;
            width: auto;
            display: block;
        }

        .ms-ad-slider-card h3 {
            margin: 0 0 8px;
            font-size: 14px;
            line-height: 1.3;
            font-weight: 600;
            color: #000;
        }

        .ms-ad-slider-card p {
            margin: 0 0 16px;
            font-size: 11px;
            line-height: 1.55;
            font-weight: 400;
            color: #222;
        }

        .ms-ad-slider-foot {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-top: auto;
            padding-top: 10px;
            border-top: 1px solid rgba(255, 255, 255, .7);
            text-align: left;
        }

        .ms-ad-slider-stat {
            display: block;
            font-size: 15px;
            line-height: 1.2;
            font-weight: 700;
            color: #e8171f;
        }

        .ms-ad-slider-label {
            display: block;
            margin-top: 2px;
            font-size: 10px;
            font-weight: 400;
            color: #222;
        }

        .ms-ad-slider-go {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .85);
            color: #e8171f;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .15);
            transition: .25s ease;
        }

        .ms-ad-slider-go:hover {
            background: #fff;
            transform: translateX(2px);
        }

        .ms-ad-slider-go svg {
            width: 12px;
            height: 12px;
        }

        /* ---------- Arrows ---------- */
        .ms-ad-slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 26px;
            height: 26px;
            padding: 0;
            border: 1.5px solid #fff;
            border-radius: 50%;
            background: rgba(255, 255, 255, .15);
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
            width: 12px;
            height: 12px;
        }

        .ms-ad-slider-prev {
            left: 0;
        }

        .ms-ad-slider-next {
            right: 0;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-ad-slider-title {
                font-size: 32px;
            }

            .ms-ad-slider-card {
                flex-basis: calc((100% - 14px) / 2);
            }
        }

        @media (max-width: 575px) {
            .ms-ad-slider {
                padding: 28px 14px 40px;
            }

            .ms-ad-slider-title {
                font-size: 26px;
            }

            .ms-ad-slider-stage {
                padding: 0 30px;
            }

            .ms-ad-slider-card {
                flex-basis: 100%;
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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 5 8 12 15 19"></polyline></svg>
            </button>

            <div class="ms-ad-slider-track">
                <?php foreach ($platforms as $p) : ?>
                    <article class="ms-ad-slider-card">
                        <div class="ms-ad-slider-logo"><?php echo $p['logo']; ?></div>
                        <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                        <p><?php echo htmlspecialchars($p['text']); ?></p>
                        <div class="ms-ad-slider-foot">
                            <div>
                                <span class="ms-ad-slider-stat"><?php echo htmlspecialchars($p['stat']); ?></span>
                                <span class="ms-ad-slider-label"><?php echo htmlspecialchars($p['label']); ?></span>
                            </div>
                            <a class="ms-ad-slider-go" href="<?php echo htmlspecialchars($p['link']); ?>" aria-label="<?php echo htmlspecialchars($p['name']); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="4" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <button type="button" class="ms-ad-slider-arrow ms-ad-slider-next" aria-label="Next">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 5 16 12 9 19"></polyline></svg>
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

            function step() {
                var card = track.querySelector('.ms-ad-slider-card');
                if (!card) return 0;
                return card.getBoundingClientRect().width + 14;
            }

            function update() {
                var max = track.scrollWidth - track.clientWidth - 2;
                prev.disabled = track.scrollLeft <= 2;
                next.disabled = track.scrollLeft >= max;
            }

            prev.addEventListener('click', function() {
                track.scrollBy({ left: -step(), behavior: 'smooth' });
            });
            next.addEventListener('click', function() {
                track.scrollBy({ left: step(), behavior: 'smooth' });
            });

            track.addEventListener('scroll', update, { passive: true });
            window.addEventListener('resize', update);
            window.addEventListener('load', update);
            update();
        })();
    </script>
</section>