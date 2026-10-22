<?php
/* Replace image paths with the real files from your uploads folder.
   Add more cards here and the carousel (and arrows) will handle them. */
$ms_inf_base = 'https://minerdiastudio.com/wp-content/uploads/2026/06/';
$ms_inf_items = [
    [
        'Regional Influencer Marketing',
        'We work with influencers across Delhi and India to reach your audience, helping your brand gain visibility, recognition, and presence in different markets.',
        $ms_inf_base . 'regional-influencer-marketing.png',
    ],
    [
        'Instagram Influencer Marketing',
        'We partner with Instagram influencers. They create posts and stories that make your brand popular. This increases visibility and engagement for your brand.',
        $ms_inf_base . 'instagram-influencer-marketing.png',
    ],
    [
        'Brand Collaboration Campaigns',
        'We design campaigns where many creators work together to promote your brand. This has an impact and helps many people know about your brand.',
        $ms_inf_base . 'brand-collaboration-campaigns.png',
    ],
];
?>
<section class="ms-inf">

    <style>
        .ms-inf,
        .ms-inf * {
            box-sizing: border-box;
        }

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

        /* ---------- Carousel ---------- */
        .ms-inf-carousel {
            position: relative;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .ms-inf-track {
            display: flex;
            align-items: flex-start;
            gap: var(--gap);
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding: 2px 0 6px;
            -webkit-overflow-scrolling: touch;
        }

        .ms-inf-track::-webkit-scrollbar {
            display: none;
        }

        .ms-inf-card {
            flex: 0 0 calc((100% - (var(--gap) * 2)) / 3);
            scroll-snap-align: start;
            border: 1px solid #e6e6e6;
            border-radius: 22px;
            background: #f7f7f7;
            overflow: hidden;
            font-family: var(--font-body);
            text-align: center;
        }

        .ms-inf-card-img {
            line-height: 0;
        }

        .ms-inf-card-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        .ms-inf-card-body {
            padding: 14px 26px 28px;
        }

        .ms-inf-card h3 {
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
            top: 228px;
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
            transition: background .2s, opacity .2s;
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

        .ms-inf-arrow:hover {
            background: var(--purple);
        }

        .ms-inf-arrow:hover svg {
            stroke: #fff;
        }

        .ms-inf-arrow[disabled] {
            opacity: .35;
            cursor: default;
            pointer-events: none;
        }

        .ms-inf-prev { left: 0; }
        .ms-inf-next { right: 0; }

        .ms-inf-carousel.no-scroll .ms-inf-arrow {
            display: none;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-inf-title {
                font-size: 40px;
            }

            .ms-inf-card {
                flex-basis: calc((100% - var(--gap)) / 2);
            }

            .ms-inf-arrow {
                top: 180px;
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

            .ms-inf-card {
                flex-basis: 100%;
            }

            .ms-inf-card-body {
                padding: 12px 20px 24px;
            }

            .ms-inf-card h3 {
                margin-bottom: 14px;
            }

            .ms-inf-arrow {
                top: 40%;
            }
        }
    </style>

    <div class="ms-inf-head">
        <h2 class="ms-inf-title">Types of <span>Influencer Marketing</span> Services</h2>
        <p class="ms-inf-text">We provide <strong>influencer marketing services in Delhi</strong>. This includes YouTube, Instagram and regional influencer campaigns. We work with influencers to help your brand.</p>
    </div>

    <div class="ms-inf-carousel" id="msInfCarousel">
        <button class="ms-inf-arrow ms-inf-prev" type="button" aria-label="Previous">
            <svg viewBox="0 0 24 24"><polyline points="15 5 8 12 15 19"/></svg>
        </button>

        <div class="ms-inf-track">
            <?php foreach ($ms_inf_items as $item): ?>
                <article class="ms-inf-card">
                    <div class="ms-inf-card-img">
                        <img src="<?= htmlspecialchars($item[2]) ?>" alt="<?= htmlspecialchars($item[0]) ?>" loading="lazy">
                    </div>
                    <div class="ms-inf-card-body">
                        <h3><?= htmlspecialchars($item[0]) ?></h3>
                        <p><?= htmlspecialchars($item[1]) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <button class="ms-inf-arrow ms-inf-next" type="button" aria-label="Next">
            <svg viewBox="0 0 24 24"><polyline points="9 5 16 12 9 19"/></svg>
        </button>
    </div>

    <script>
        (function () {
            var root  = document.getElementById('msInfCarousel');
            if (!root) return;
            var track = root.querySelector('.ms-inf-track');
            var prev  = root.querySelector('.ms-inf-prev');
            var next  = root.querySelector('.ms-inf-next');

            function step() {
                var card = track.querySelector('.ms-inf-card');
                var gap  = parseFloat(getComputedStyle(track).columnGap) || 12;
                return card ? card.offsetWidth + gap : track.clientWidth;
            }

            function update() {
                var max = track.scrollWidth - track.clientWidth;
                root.classList.toggle('no-scroll', max <= 2); /* hide arrows if everything fits */
                prev.disabled = track.scrollLeft <= 2;
                next.disabled = track.scrollLeft >= max - 2;
            }

            prev.addEventListener('click', function () { track.scrollBy({ left: -step(), behavior: 'smooth' }); });
            next.addEventListener('click', function () { track.scrollBy({ left:  step(), behavior: 'smooth' }); });
            track.addEventListener('scroll', update, { passive: true });
            window.addEventListener('resize', update);
            window.addEventListener('load', update);
            update();
        })();
    </script>
</section>