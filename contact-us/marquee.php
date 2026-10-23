<?php
// ---------------------------------------------------------------
// Logo marquee: edit the logos here
// The list is shown twice automatically so the loop is seamless.
// ---------------------------------------------------------------
$logo_src = (SITE_ENV === 'local' ? BASE : LIVE_BASE) . 'assets/image/logo/header-logo-2.webp';

$logos = [
    ['src' => $logo_src, 'alt' => 'Minerdia Studio'],
    ['src' => $logo_src, 'alt' => 'Minerdia Studio'],
    ['src' => $logo_src, 'alt' => 'Minerdia Studio'],
    ['src' => $logo_src, 'alt' => 'Minerdia Studio'],
    ['src' => $logo_src, 'alt' => 'Minerdia Studio'],
];

$scroll_seconds = 20; // time for one full loop (higher = slower)

$e = function ($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); };
?>
<section class="ms-logos">
    <style>
        .ms-logos-section {
            width: 100%;
            overflow: hidden;
            padding: 35px 0;
            position: relative;
        }

        .ms-logos-section::before,
        .ms-logos-section::after {
            content: "";
            position: absolute;
            top: 0;
            width: 80px;
            height: 100%;
            z-index: 3;
            pointer-events: none;
        }

        .ms-logos-section::before {
            left: 0;
            background: linear-gradient(to right, #ffffff, transparent);
        }

        .ms-logos-section::after {
            right: 0;
            background: linear-gradient(to left, #ffffff, transparent);
        }

        .ms-logos-track {
            display: flex;
            gap: 20px;
            padding-right: 20px; /* keeps the loop exactly seamless */
            width: max-content;
            animation: ms-logos-scroll <?php echo (int)$scroll_seconds; ?>s linear infinite;
            align-items: center;
        }

        .ms-logos-card {
            min-width: 180px;
            width: 180px;
            height: 95px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: rgb(255 255 255 / .25);
            backdrop-filter: blur(25px) saturate(180%);
            -webkit-backdrop-filter: blur(25px) saturate(180%);
            border: 1px solid rgb(255 255 255 / .7);
            box-shadow: 0 15px 30px rgb(0 0 0 / .1), 0 5px 10px rgb(0 0 0 / .05), inset 0 1px 0 rgb(255 255 255 / .9), inset 0 -1px 0 rgb(255 255 255 / .2);
            transform: perspective(1000px) translateY(0);
            transition: all 0.4s ease;
        }

        .ms-logos-card:hover {
            transform: perspective(1000px) translateY(-10px) scale(1.03);
        }

        .ms-logos-card::before {
            content: "";
            position: absolute;
            top: -40%;
            left: -20%;
            width: 140%;
            height: 140%;
            background: linear-gradient(120deg, rgb(255 255 255 / .6), rgb(255 255 255 / .05), transparent);
            transform: rotate(25deg);
            pointer-events: none;
        }

        .ms-logos-card::after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            top: -50px;
            left: -30px;
            background: radial-gradient(circle, rgb(255 255 255 / .5), transparent);
            pointer-events: none;
        }

        .ms-logos-card img {
            display: block;
            width: auto;
            height: auto;
            max-width: 140px;
            max-height: 60px;
            object-fit: contain;
            object-position: center;
            z-index: 2;
            position: relative;
        }

        .ms-logos-card img.is-broken {
            opacity: 0;
        }

        @keyframes ms-logos-scroll {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @media (max-width: 767px) {
            .ms-logos-card {
                min-width: 140px;
                width: 140px;
                height: 75px;
            }

            .ms-logos-card img {
                max-width: 105px;
                max-height: 42px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-logos-track {
                animation: none;
            }
        }
    </style>

    <div class="ms-logos-section" aria-label="Logos">
        <div class="ms-logos-track">
            <?php for ($copy = 0; $copy < 2; $copy++) : ?>
                <?php foreach ($logos as $n => $logo) : ?>
                    <div class="ms-logos-card"<?php echo $copy === 1 ? ' aria-hidden="true"' : ''; ?>>
                        <img src="<?php echo $e($logo['src']); ?>"
                             alt="<?php echo $copy === 1 ? '' : $e($logo['alt']); ?>"
                             loading="<?php echo ($copy === 0 && $n === 0) ? 'eager' : 'lazy'; ?>"
                             decoding="async"
                             referrerpolicy="no-referrer"
                             onerror="this.classList.add('is-broken')">
                    </div>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>