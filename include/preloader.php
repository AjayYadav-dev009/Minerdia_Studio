<?php
/* =========================================================
   MINERDIA STUDIO – LOGO PRELOADER  (include/preloader.php)
   - Uses your logo (LOGO_HEADER in config.php) – no video needed.
   - Home page only, once per browser session.
   - Included from include/header.php, right after <body>.
   ========================================================= */

// Load the site settings (BASE, logo_url(), e()) even if this file is reached before/without header.php
require_once __DIR__ . '/../config.php';

$__pl_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$__pl_path = preg_replace('#/index\.php$#', '/', $__pl_path);
if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === basename(__FILE__) || rtrim($__pl_path, '/') !== rtrim(BASE, '/')) {
    return;   // not the home page -> output nothing
}

$__pl_logo = logo_url(LOGO_HEADER, BASE . 'assets/image/logo/logo-header.webp');
?>
<noscript><style>#ms-preloader{display:none !important}</style></noscript>

<div id="ms-preloader" role="status" aria-live="polite" aria-label="Loading Minerdia Studio">
    <div class="ms-pl-bg">
        <span class="ms-pl-blob ms-pl-blob1"></span>
        <span class="ms-pl-blob ms-pl-blob2"></span>
        <span class="ms-pl-dots"></span>

        <div class="ms-pl-stage">
            <div class="ms-pl-logo">
                <img class="ms-pl-img" src="<?php echo e($__pl_logo); ?>" alt="Minerdia Studio" width="400" height="400" decoding="async" fetchpriority="high">
                <span class="ms-pl-shine" style="-webkit-mask-image:url('<?php echo e($__pl_logo); ?>');mask-image:url('<?php echo e($__pl_logo); ?>')"></span>
            </div>

            <div class="ms-pl-bar"><span class="ms-pl-fill"></span></div>
            <div class="ms-pl-caption"><span class="ms-pl-word">Digital Marketing</span></div>
        </div>
    </div>
    <span class="ms-pl-edge"></span>
</div>

<style>
    html.ms-pl-lock, html.ms-pl-lock body { overflow: hidden !important; }

    #ms-preloader {
        position: fixed;
        inset: 0;
        z-index: 999999;
        transition: transform .95s cubic-bezier(.76, 0, .18, 1);
        will-change: transform;
    }
    #ms-preloader.is-leaving { transform: translateY(-100%); }

    .ms-pl-bg {
        position: absolute;
        inset: 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
    }

    /* brand-gradient edge that leads the curtain when it lifts */
    .ms-pl-edge {
        position: absolute;
        left: 0; right: 0;
        bottom: -7px;
        height: 7px;
        background: linear-gradient(90deg, #2FA8A1 0%, #5A2EA6 100%);
    }

    /* soft brand glows */
    .ms-pl-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        pointer-events: none;
        animation: msPlBlob 7s ease-in-out infinite;
    }
    .ms-pl-blob1 { width: 46vmax; height: 46vmax; top: -18vmax; right: -14vmax; background: rgba(47, 168, 161, .20); }
    .ms-pl-blob2 { width: 50vmax; height: 50vmax; bottom: -22vmax; left: -16vmax; background: rgba(90, 46, 166, .18); animation-delay: -3.5s; }

    /* faint dot grid, fading toward the edges */
    .ms-pl-dots {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(90, 46, 166, .16) 1.2px, transparent 1.6px);
        background-size: 30px 30px;
        -webkit-mask-image: radial-gradient(circle at 50% 50%, #000 0%, transparent 62%);
        mask-image: radial-gradient(circle at 50% 50%, #000 0%, transparent 62%);
        pointer-events: none;
    }

    .ms-pl-stage {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        transition: opacity .35s ease, transform .6s cubic-bezier(.76, 0, .18, 1);
    }
    #ms-preloader.is-leaving .ms-pl-stage { opacity: 0; transform: translateY(-24px) scale(.97); }

    /* ---------- logo ---------- */
    .ms-pl-logo {
        position: relative;
        width: min(400px, 72vw);
        aspect-ratio: 1 / 1;
    }
    .ms-pl-img,
    .ms-pl-shine {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        display: block;
    }
    .ms-pl-img {
        object-fit: contain;
        opacity: 0;
        clip-path: inset(0 0 100% 0);
    }
    /* the white "gleam" only paints where the logo is (masked by the logo itself) */
    .ms-pl-shine {
        -webkit-mask-size: contain;
        mask-size: contain;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center;
        background: linear-gradient(105deg, transparent 44%, rgba(255, 255, 255, .9) 50%, transparent 56%);
        background-size: 300% 100%;
        background-position: 120% 0;
        opacity: 0;
        pointer-events: none;
    }

    #ms-preloader.is-ready .ms-pl-img {
        animation: msPlReveal 1.25s cubic-bezier(.22, 1, .36, 1) .1s forwards,
                   msPlBreath 3.2s ease-in-out 1.4s infinite;
    }
    #ms-preloader.is-ready .ms-pl-shine {
        animation: msPlShine 1.1s cubic-bezier(.4, 0, .2, 1) 1.05s forwards;
    }

    /* ---------- progress ---------- */
    .ms-pl-bar {
        width: 150px;
        height: 3px;
        margin-top: 6px;
        border-radius: 99px;
        background: rgba(90, 46, 166, .12);
        overflow: hidden;
        opacity: 0;
    }
    .ms-pl-fill {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: inherit;
        background: linear-gradient(90deg, #2FA8A1, #5A2EA6);
        transform: scaleX(0);
        transform-origin: left center;
    }
    #ms-preloader.is-ready .ms-pl-bar { animation: msPlFade .5s ease .7s forwards; }
    #ms-preloader.is-ready .ms-pl-fill { animation: msPlFill 2.3s cubic-bezier(.45, .05, .25, 1) .7s forwards; }
    #ms-preloader.is-done .ms-pl-fill { animation: none; transform: scaleX(1); transition: transform .3s ease; }

    /* ---------- rotating service words ---------- */
    .ms-pl-caption {
        height: 20px;
        margin-top: 16px;
        opacity: 0;
        font-family: var(--font-head, 'Poppins', system-ui, sans-serif);
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .32em;
        text-transform: uppercase;
        text-align: center;
        white-space: nowrap;
    }
    #ms-preloader.is-ready .ms-pl-caption { animation: msPlFade .5s ease .9s forwards; }
    .ms-pl-word {
        display: inline-block;
        padding-left: .32em; /* balances the trailing letter-spacing */
        background: linear-gradient(90deg, #2FA8A1, #5A2EA6);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .ms-pl-word.swap { animation: msPlWord .32s ease; }

    @keyframes msPlReveal {
        0%   { opacity: 0; clip-path: inset(0 0 100% 0); transform: translateY(14px) scale(.96); filter: blur(6px); }
        25%  { opacity: 1; }
        100% { opacity: 1; clip-path: inset(0 0 0 0);     transform: translateY(0) scale(1);       filter: blur(0); }
    }
    @keyframes msPlBreath { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.025); } }
    @keyframes msPlShine {
        0%   { opacity: 1; background-position: 120% 0; }
        100% { opacity: 1; background-position: -20% 0; }
    }
    @keyframes msPlFade  { to { opacity: 1; } }
    @keyframes msPlFill  { to { transform: scaleX(.92); } }
    @keyframes msPlWord  { from { opacity: 0; transform: translateY(6px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes msPlBlob  { 0%, 100% { transform: translate(0, 0) scale(1); } 50% { transform: translate(-3vmax, 3vmax) scale(1.08); } }

    @media (max-width: 480px) {
        .ms-pl-bar { width: 120px; }
        .ms-pl-caption { font-size: 10px; letter-spacing: .26em; }
    }
    @media (prefers-reduced-motion: reduce) {
        #ms-preloader { display: none !important; }
        html.ms-pl-lock, html.ms-pl-lock body { overflow: auto !important; }
    }
</style>

<script>
(function () {
    var el = document.getElementById("ms-preloader");
    if (!el) return;

    var root = document.documentElement;
    var reduce = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Show only once per session (storage can be blocked, so guard it)
    try {
        if (reduce || sessionStorage.getItem("msPreloaderShown")) { el.remove(); return; }
        sessionStorage.setItem("msPreloaderShown", "1");
    } catch (e) {
        if (reduce) { el.remove(); return; }
    }

    root.classList.add("ms-pl-lock");

    var MIN_TIME = 2400;   // logo animation always gets to play (ms)
    var HARD_STOP = 7000;  // never block the site longer than this (ms)
    var loaded = document.readyState === "complete";
    var minDone = false, finished = false, ticker = null;

    var img  = el.querySelector(".ms-pl-img");
    var word = el.querySelector(".ms-pl-word");
    var words = ["SEO", "Social Media", "Paid Ads", "Podcast", "Video Editing", "Web Development", "Email Marketing"];

    function cleanup() {
        root.classList.remove("ms-pl-lock");
        if (el && el.parentNode) el.parentNode.removeChild(el);
    }

    function leave() {
        if (finished) return;
        finished = true;
        clearInterval(ticker);
        el.classList.add("is-done");
        setTimeout(function () { el.classList.add("is-leaving"); }, 350);
        setTimeout(cleanup, 350 + 1100);
    }

    function tryLeave() { if (minDone && loaded) leave(); }

    function start() {
        if (el.classList.contains("is-ready")) return;
        el.classList.add("is-ready");
        setTimeout(function () { minDone = true; tryLeave(); }, MIN_TIME);

        var i = 0;
        ticker = setInterval(function () {
            i = (i + 1) % words.length;
            word.textContent = words[i];
            word.classList.remove("swap");
            void word.offsetWidth;          // restart the fade animation
            word.classList.add("swap");
        }, 420);
    }

    if (!loaded) window.addEventListener("load", function () { loaded = true; tryLeave(); });

    // start the animation once the logo is really on screen
    if (img.complete && img.naturalWidth) { start(); }
    else {
        img.addEventListener("load", start);
        img.addEventListener("error", function () { start(); leave(); });
    }

    setTimeout(leave, HARD_STOP);
})();
</script>