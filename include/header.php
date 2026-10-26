<?php
require_once __DIR__ . '/../config.php';

$page_title       = $page_title       ?? SITE_NAME;
$page_description = $page_description ?? DEFAULT_DESC;
$page_keywords    = $page_keywords    ?? '';
$page_noindex     = $page_noindex     ?? (SITE_ENV === 'local');     // local/dev copies are never indexed

// canonical = live domain + this page's path (auto), unless the page sets its own
if (!isset($page_canonical)) {
    $__path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $__path = preg_replace('#index\.php$#', '', (string) $__path);
    if (BASE !== '/' && strpos($__path, BASE) === 0) {
        $__path = substr($__path, strlen(BASE));
    }
    $page_canonical = LIVE_BASE . ltrim($__path, '/');
}

$__share = logo_url(LOGO_SHARE) ? LIVE_BASE . 'assets/image/logo/' . LOGO_SHARE : 'https://minerdiastudio.com/wp-content/uploads/2026/03/mendria-logo-2.png';
$page_image = $page_image ?? $__share;
$__logo_header = logo_url(LOGO_HEADER, 'https://minerdiastudio.com/wp-content/uploads/2026/03/mendria-logo-2.png');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Self-hosted fonts: Poppins (headings, buttons, links) + Inter (body) -->
    <link rel="preload" href="<?php echo BASE; ?>assets/fonts/inter-variable.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo BASE; ?>assets/fonts/poppins-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/fonts.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/lenis.css">
    <title><?php echo e($page_title); ?></title>
    <meta name="description" content="<?php echo e($page_description); ?>">
    <?php if ($page_keywords): ?><meta name="keywords" content="<?php echo e($page_keywords); ?>"><?php endif; ?>

    <meta name="robots" content="<?php echo $page_noindex ? 'noindex, nofollow' : 'index, follow'; ?>">
    <link rel="canonical" href="<?php echo e($page_canonical); ?>">

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME); ?>">
    <meta property="og:title" content="<?php echo e($page_title); ?>">
    <meta property="og:description" content="<?php echo e($page_description); ?>">
    <meta property="og:url" content="<?php echo e($page_canonical); ?>">
    <meta property="og:image" content="<?php echo e($page_image); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($page_title); ?>">
    <meta name="twitter:description" content="<?php echo e($page_description); ?>">
    <meta name="twitter:image" content="<?php echo e($page_image); ?>">

    <!-- Organization schema -->
    <script type="application/ld+json">
    <?php echo json_encode([
        '@context'  => 'https://schema.org',
        '@type'     => 'Organization',
        'name'      => SITE_NAME,
        'url'       => LIVE_BASE,
        'logo'      => $page_image,
        'email'     => EMAIL,
        'telephone' => PHONE,
        'address'   => ADDRESS,
        'sameAs'    => [FACEBOOK, PINTEREST, INSTAGRAM, LINKEDIN, YOUTUBE],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

    </script>
<script>
/* Service-page lead forms (form[data-lead-form]) -> submit-form.php, no page reload */
document.addEventListener('submit', function (ev) {
    var form = ev.target;
    if (!form.matches || !form.matches('form[data-lead-form]')) return;
    ev.preventDefault();

    var btn = form.querySelector('button[type="submit"]');
    var msg = form.querySelector('.ms-lead-msg');
    if (!msg) {
        msg = document.createElement('p');
        msg.className = 'ms-lead-msg';
        msg.setAttribute('role', 'status');
        msg.style.cssText = 'margin:12px 0 0;font-size:14px;font-weight:600;text-align:center';
        form.appendChild(msg);
    }
    var label = btn ? btn.textContent : '';
    if (btn) { btn.disabled = true; btn.textContent = 'Sending...'; }
    msg.style.color = '#3f3b50';
    msg.textContent = '';

    fetch(form.action, { method: 'POST', body: new FormData(form), headers: { 'Accept': 'application/json' } })
        .then(function (r) { return r.json(); })
        .then(function (d) {
            msg.style.color = d.ok ? '#1c8a57' : '#c0392b';
            msg.textContent = d.message;
            if (d.ok) form.reset();
        })
        .catch(function () {
            msg.style.color = '#c0392b';
            msg.textContent = 'Network error. Please try again.';
        })
        .then(function () { if (btn) { btn.disabled = false; btn.textContent = label; } });
});
</script>
</head>

<body>
       <?php include __DIR__ . '/preloader.php'; ?>
    <style>
        /* Hero must start at the very top; the header floats over it */
        body {
            margin: 0;
        }

        /* ==========================================
                    MINERDIA STUDIO HEADER
        ========================================== */

        .minerdia-header,
        .minerdia-header * {
            box-sizing: border-box;
        }

        .minerdia-header {
            --mh-purple: #6421d8;
            --mh-dark-purple: #42109d;
            --mh-blue: #2475d5;
            --mh-cyan: #22a5ae;
            --mh-text: #17131e;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            pointer-events: none;

            width: 100%;
            padding: 12px 18px 0;

            font-family: var(--font-body);
        }

        .minerdia-header-container {
            position: relative;
            pointer-events: auto;

            width: min(1120px, 100%);
            min-height: 66px;

            margin: 0 auto;
            padding: 5px 12px 5px 18px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;

            overflow: visible;

            border: 1px solid rgba(255, 255, 255, 0.72);
            border-radius: 36px;

            /* Light white liquid-glass background */
            background:
                linear-gradient(120deg,
                    rgba(255, 255, 255, 0.64),
                    rgba(255, 255, 255, 0.48));

            -webkit-backdrop-filter: blur(18px) saturate(145%);
            backdrop-filter: blur(18px) saturate(145%);

            box-shadow:
                0 12px 30px rgba(51, 14, 122, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.86),
                inset 0 -1px 0 rgba(255, 255, 255, 0.22);
        }

        /* Remove extra inner lines */
        .minerdia-header-container::before,
        .minerdia-header-container::after {
            display: none !important;
        }

        /* ==========================================
                            LOGO
        ========================================== */

        .minerdia-logo {
            position: relative;
            z-index: 5;

            width: 82px;
            height: 54px;

            flex: 0 0 auto;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;
        }

        .minerdia-logo img {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: contain;

            transition: transform 0.3s ease;
        }

        .minerdia-logo:hover img {
            transform: scale(1.04);
        }

        /* ==========================================
                    NAVIGATION
        ========================================== */

        .minerdia-nav {
            position: relative;
            z-index: 10;

            display: flex;
            align-items: center;
            justify-content: center;

            gap: clamp(22px, 2.7vw, 42px);
            margin-left: auto;
        }

        .minerdia-nav-link {
            position: relative;

            min-height: 42px;
            padding: 10px 0;

            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;

            border: 0 !important;
            border-radius: 0 !important;
            outline: 0 !important;

            background: transparent !important;
            background-color: transparent !important;
            background-image: none !important;

            color: var(--mh-text) !important;

            font: inherit;
            font-size: 14px;
            font-weight: 600;
            line-height: 1;

            text-decoration: none !important;
            white-space: nowrap;

            box-shadow: none !important;

            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;

            transition:
                color 0.25s ease,
                opacity 0.25s ease;
        }

        .minerdia-nav-link::after {
            content: "";

            position: absolute;
            left: 50%;
            bottom: 3px;

            width: 0;
            height: 2px;

            border-radius: 20px;

            background: linear-gradient(90deg,
                    var(--mh-purple),
                    var(--mh-cyan));

            transform: translateX(-50%);

            transition: width 0.25s ease;
        }

        .minerdia-nav-link:hover,
        .minerdia-nav-link:focus,
        .minerdia-nav-link:focus-visible,
        .minerdia-nav-link:active,
        .minerdia-dropdown.is-open .minerdia-dropdown-toggle {
            border: 0 !important;
            outline: 0 !important;

            background: transparent !important;
            background-color: transparent !important;
            background-image: none !important;

            color: var(--mh-purple) !important;

            box-shadow: none !important;
        }

        .minerdia-nav-link:hover::after,
        .minerdia-nav-link:focus-visible::after,
        .minerdia-dropdown.is-open .minerdia-dropdown-toggle::after {
            width: 100%;
        }

        .minerdia-dropdown-toggle::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        .minerdia-nav-link svg {
            width: 14px;
            height: 14px;

            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;

            transition: transform 0.25s ease;
        }

        /* ==========================================
                    DROPDOWN
        ========================================== */

        .minerdia-dropdown {
            position: relative;
        }

        .minerdia-dropdown-menu {
            position: absolute;

            top: calc(100% + 12px);
            left: 50%;

            width: 280px;
            padding: 9px;

            overflow: hidden;

            border: 1px solid rgba(104, 54, 183, 0.12);
            border-radius: 18px;

            background: rgba(255, 255, 255, 0.98);

            -webkit-backdrop-filter: blur(18px) saturate(145%);
            backdrop-filter: blur(18px) saturate(145%);

            box-shadow:
                0 18px 45px rgba(40, 13, 84, 0.18),
                inset 0 1px 0 rgba(255, 255, 255, 0.95);

            opacity: 0;
            visibility: hidden;
            pointer-events: none;

            transform: translate(-50%, 9px);

            transition:
                opacity 0.23s ease,
                visibility 0.23s ease,
                transform 0.23s ease;
        }

        /* Invisible hover bridge */
        .minerdia-dropdown-menu::before {
            content: "";

            position: absolute;
            top: -15px;
            left: 0;
            right: 0;

            height: 16px;
        }

        .minerdia-company-menu {
            width: 190px;
        }

        .minerdia-dropdown-menu a {
            width: 100%;
            min-height: 40px;
            padding: 9px 12px;

            display: flex;
            align-items: center;

            border: 0 !important;
            border-radius: 10px;
            outline: 0 !important;

            background: transparent !important;

            color: #18131f !important;

            font-size: 13px;
            font-weight: 600;
            line-height: 1.35;

            text-decoration: none !important;

            box-shadow: none !important;

            transition:
                color 0.22s ease,
                background-color 0.22s ease,
                transform 0.22s ease;
        }

        .minerdia-dropdown-menu a:hover,
        .minerdia-dropdown-menu a:focus,
        .minerdia-dropdown-menu a:active {
            color: var(--mh-purple) !important;

            background: rgba(100, 33, 216, 0.075) !important;

            outline: 0 !important;
            box-shadow: none !important;

            transform: translateX(3px);
        }

        .minerdia-dropdown:hover .minerdia-dropdown-menu,
        .minerdia-dropdown.is-open .minerdia-dropdown-menu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;

            transform: translate(-50%, 0);
        }

        .minerdia-dropdown:hover .minerdia-dropdown-toggle svg,
        .minerdia-dropdown.is-open .minerdia-dropdown-toggle svg {
            transform: rotate(180deg);
        }

        /* ==========================================
                    FREE AUDIT BUTTON
        ========================================== */

        .minerdia-audit-btn {
            position: relative;
            z-index: 6;

            min-width: 128px;
            min-height: 44px;
            padding: 11px 19px;

            flex: 0 0 auto;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;

            border: 0 !important;
            border-radius: 999px;

            background: linear-gradient(120deg,
                    #4c13aa 0%,
                    #7228df 48%,
                    #227bd4 100%);

            color: #ffffff !important;

            font-size: 13px;
            font-weight: 700;
            line-height: 1;

            text-decoration: none !important;
            white-space: nowrap;

            box-shadow:
                0 8px 22px rgba(67, 21, 153, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.25);

            animation: minerdiaButtonPulse 3.2s ease-in-out infinite;

            transition:
                transform 0.28s ease,
                box-shadow 0.28s ease,
                filter 0.28s ease;
        }

        .minerdia-audit-btn span {
            position: relative;
            z-index: 2;
        }

        .minerdia-audit-btn::before,
        .minerdia-audit-btn::after {
            display: none !important;
        }

        .minerdia-audit-btn:hover,
        .minerdia-audit-btn:focus,
        .minerdia-audit-btn:active {
            border: 0 !important;
            outline: 0 !important;

            color: #ffffff !important;

            filter: brightness(1.08);
            transform: translateY(-2px);

            box-shadow:
                0 13px 28px rgba(67, 21, 153, 0.34),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        @keyframes minerdiaButtonPulse {

            0%,
            100% {
                opacity: 1;
                filter: brightness(1);
                transform: scale(1);

                box-shadow:
                    0 8px 22px rgba(67, 21, 153, 0.24),
                    inset 0 1px 0 rgba(255, 255, 255, 0.24);
            }

            50% {
                opacity: 0.88;
                filter: brightness(1.1);
                transform: scale(1.018);

                box-shadow:
                    0 10px 27px rgba(67, 21, 153, 0.31),
                    inset 0 1px 0 rgba(255, 255, 255, 0.28);
            }
        }

        /* ==========================================
                    MOBILE MENU ICON
        ========================================== */

        .minerdia-menu-btn {
            position: relative;
            z-index: 12;

            width: 42px;
            height: 42px;
            padding: 0;

            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 4px;

            border: 1px solid rgba(255, 255, 255, 0.68);
            border-radius: 50%;

            background: rgba(255, 255, 255, 0.42);

            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);

            box-shadow:
                0 7px 18px rgba(47, 12, 111, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.7);

            cursor: pointer;
        }

        .minerdia-menu-btn span {
            width: 18px;
            height: 2px;

            display: block;

            border-radius: 20px;

            background: #25132d;

            transition:
                transform 0.28s ease,
                opacity 0.28s ease;
        }

        .minerdia-menu-btn.is-active span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }

        .minerdia-menu-btn.is-active span:nth-child(2) {
            opacity: 0;
        }

        .minerdia-menu-btn.is-active span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }

        /* ==========================================
                    TABLET
        ========================================== */

        @media (max-width: 980px) {
            .minerdia-header {
                padding: 11px 14px 0;
            }

            .minerdia-header-container {
                width: min(920px, 100%);
                min-height: 63px;

                padding: 4px 9px 4px 15px;
                gap: 12px;
            }

            .minerdia-logo {
                width: 74px;
                height: 49px;
            }

            .minerdia-nav {
                gap: 18px;
            }

            .minerdia-nav-link {
                min-height: 40px;
                font-size: 13px;
            }

            .minerdia-audit-btn {
                min-width: 112px;
                min-height: 41px;

                padding: 10px 15px;

                font-size: 12px;
            }
        }

        /* ==========================================
                    MOBILE
        ========================================== */

        @media (max-width: 820px) {
            .minerdia-header {
                padding: 9px 10px 0;
            }

            .minerdia-header-container {
                min-height: 60px;

                padding: 4px 7px 4px 12px;
                gap: 8px;

                border-radius: 31px;

                background: linear-gradient(120deg,
                        rgba(255, 255, 255, 0.7),
                        rgba(255, 255, 255, 0.54));
            }

            .minerdia-logo {
                width: 68px;
                height: 45px;
            }

            .minerdia-menu-btn {
                display: flex;
            }

            .minerdia-audit-btn {
                min-width: auto;
                min-height: 39px;

                margin-left: auto;
                padding: 10px 14px;

                font-size: 11px;
            }

            .minerdia-nav {
                position: absolute;

                top: calc(100% + 9px);
                left: 0;
                right: 0;

                width: 100%;
                max-height: 0;

                margin: 0;
                padding: 0 10px;

                display: block;
                overflow: hidden;

                border: 1px solid transparent;
                border-radius: 22px;

                background: rgba(255, 255, 255, 0);

                -webkit-backdrop-filter: blur(20px) saturate(150%);
                backdrop-filter: blur(20px) saturate(150%);

                opacity: 0;
                visibility: hidden;

                transform: translateY(-7px);

                transition:
                    max-height 0.35s ease,
                    padding 0.3s ease,
                    opacity 0.25s ease,
                    visibility 0.25s ease,
                    transform 0.25s ease,
                    background 0.25s ease;
            }

            .minerdia-nav.is-open {
                max-height: 650px;
                padding: 10px;

                overflow-y: auto;

                border-color: rgba(255, 255, 255, 0.75);

                background: rgba(255, 255, 255, 0.96);

                box-shadow:
                    0 20px 42px rgba(42, 10, 99, 0.18),
                    inset 0 1px 0 rgba(255, 255, 255, 0.95);

                opacity: 1;
                visibility: visible;

                transform: translateY(0);
            }

            .minerdia-nav-link {
                width: 100%;
                min-height: 43px;

                padding: 11px 10px;

                justify-content: space-between;

                font-size: 14px;
            }

            .minerdia-nav-link::after {
                display: none;
            }

            .minerdia-nav-link:hover,
            .minerdia-nav-link:focus,
            .minerdia-nav-link:active,
            .minerdia-dropdown.is-open .minerdia-dropdown-toggle {
                background: transparent !important;
                background-color: transparent !important;
            }

            .minerdia-dropdown {
                width: 100%;
            }

            .minerdia-dropdown-menu,
            .minerdia-services-menu,
            .minerdia-company-menu {
                position: static;

                width: 100%;
                max-height: 0;

                margin: 0;
                padding: 0 6px;

                overflow: hidden;

                border: 0;
                border-radius: 14px;

                background: #ffffff;

                -webkit-backdrop-filter: none;
                backdrop-filter: none;

                box-shadow: none;

                opacity: 1;
                visibility: visible;
                pointer-events: auto;

                transform: none;

                transition:
                    max-height 0.3s ease,
                    padding 0.3s ease,
                    margin 0.3s ease;
            }

            .minerdia-dropdown-menu::before {
                display: none;
            }

            .minerdia-dropdown.is-open .minerdia-dropdown-menu {
                max-height: 470px;

                margin: 2px 0 6px;
                padding: 6px;

                transform: none;
            }

            .minerdia-dropdown-menu a {
                min-height: 37px;

                padding: 8px 9px;

                font-size: 12px;
            }
        }

        /* ==========================================
                    SMALL MOBILE
        ========================================== */

        @media (max-width: 430px) {
            .minerdia-header-container {
                min-height: 57px;
                padding-left: 10px;
            }

            .minerdia-logo {
                width: 64px;
                height: 43px;
            }

            .minerdia-audit-btn {
                min-height: 36px;

                padding: 9px 11px;

                font-size: 10px;
            }

            .minerdia-menu-btn {
                width: 39px;
                height: 39px;
            }

            .minerdia-menu-btn span {
                width: 17px;
            }
        }

        /* ==========================================
                    REDUCED MOTION
        ========================================== */

        @media (prefers-reduced-motion: reduce) {

            .minerdia-header *,
            .minerdia-header *::before,
            .minerdia-header *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>

    <header class="minerdia-header" id="minerdiaHeader">

        <div class="minerdia-header-container">

            <!-- LOGO -->
            <a href="<?php echo BASE; ?>" class="minerdia-logo" aria-label="Minerdia Studio Home">
                <img src="<?php echo e($__logo_header); ?>" alt="Minerdia Studio" width="82" height="54">
            </a>

            <!-- NAVIGATION -->
            <nav class="minerdia-nav" aria-label="Main Navigation">

                <a href="<?php echo BASE; ?>" class="minerdia-nav-link">Home</a>

                <!-- SERVICES DROPDOWN -->
                <div class="minerdia-dropdown">

                    <button type="button" class="minerdia-nav-link minerdia-dropdown-toggle" aria-expanded="false">
                        <span>Services</span>

                        <svg viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5 7.5L10 12.5L15 7.5"></path>
                        </svg>
                    </button>

                    <div class="minerdia-dropdown-menu minerdia-services-menu">
                        <a href="<?php echo BASE; ?>podcast-services/">Podcast Services</a>
                        <a href="<?php echo BASE; ?>professional-designing-and-video-editing/">Designing &amp; Video Editing</a>
                        <a href="<?php echo BASE; ?>seo-services/">SEO Services</a>
                        <a href="<?php echo BASE; ?>social-media-management-services/">Social Media Management</a>
                        <a href="<?php echo BASE; ?>paid-ads-services/">Paid Ads Services</a>
                        <a href="<?php echo BASE; ?>website-development-services/">Website Development</a>
                        <a href="<?php echo BASE; ?>script-writing-services/">Script Writing Services</a>
                        <a href="<?php echo BASE; ?>email-marketing-services/">Email Marketing Services</a>
                    </div>
                </div>

                <!-- COMPANY DROPDOWN -->
                <div class="minerdia-dropdown">

                    <button type="button" class="minerdia-nav-link minerdia-dropdown-toggle" aria-expanded="false">
                        <span>Company</span>

                        <svg viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5 7.5L10 12.5L15 7.5"></path>
                        </svg>
                    </button>

                    <div class="minerdia-dropdown-menu minerdia-company-menu">
                        <a href="<?php echo BASE; ?>about-us/">About Us</a>
                        <a href="<?php echo BASE; ?>creative-gallery/">Gallery</a>
                        <!-- <a href="<?php //echo BASE; ?>contact-us/">Contact Us</a> -->
                    </div>
                </div>

                <a href="<?php echo BASE; ?>contact-us/" class="minerdia-nav-link">Contact Us</a>

            </nav>

            <!-- FREE AUDIT BUTTON -->
            <a href="<?php echo BASE; ?>free-digital-marketing-audit/" class="minerdia-audit-btn">
                <span>Free Audit</span>
            </a>

            <!-- MOBILE MENU BUTTON -->
            <button type="button" class="minerdia-menu-btn" aria-label="Open navigation menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.querySelector("#minerdiaHeader");

            if (!header) return;

            const menuButton = header.querySelector(".minerdia-menu-btn");
            const navigation = header.querySelector(".minerdia-nav");
            const dropdowns = header.querySelectorAll(".minerdia-dropdown");

            function closeDropdowns(exceptDropdown) {
                dropdowns.forEach(function(dropdown) {
                    if (dropdown !== exceptDropdown) {
                        dropdown.classList.remove("is-open");

                        const toggle = dropdown.querySelector(
                            ".minerdia-dropdown-toggle"
                        );

                        if (toggle) {
                            toggle.setAttribute("aria-expanded", "false");
                        }
                    }
                });
            }

            function closeMobileMenu() {
                navigation.classList.remove("is-open");
                menuButton.classList.remove("is-active");
                menuButton.setAttribute("aria-expanded", "false");
            }

            menuButton.addEventListener("click", function(event) {
                event.stopPropagation();

                const isOpen = navigation.classList.toggle("is-open");

                menuButton.classList.toggle("is-active", isOpen);
                menuButton.setAttribute("aria-expanded", String(isOpen));
            });

            dropdowns.forEach(function(dropdown) {
                const toggle = dropdown.querySelector(
                    ".minerdia-dropdown-toggle"
                );

                if (!toggle) return;

                toggle.addEventListener("click", function(event) {
                    event.preventDefault();
                    event.stopPropagation();

                    const shouldOpen = !dropdown.classList.contains("is-open");

                    closeDropdowns(dropdown);

                    dropdown.classList.toggle("is-open", shouldOpen);
                    toggle.setAttribute("aria-expanded", String(shouldOpen));
                });
            });

            document.addEventListener("click", function(event) {
                if (!header.contains(event.target)) {
                    closeDropdowns();
                    closeMobileMenu();
                }
            });

            navigation.querySelectorAll("a").forEach(function(link) {
                link.addEventListener("click", function() {
                    if (window.innerWidth <= 820) {
                        closeMobileMenu();
                        closeDropdowns();
                    }
                });
            });

            window.addEventListener("resize", function() {
                if (window.innerWidth > 820) {
                    closeMobileMenu();
                    closeDropdowns();
                }
            });
        });
    </script>