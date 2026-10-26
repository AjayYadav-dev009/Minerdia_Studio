<?php
/* =========================================================
   MINERDIA STUDIO – 404 PAGE (standalone, no WordPress)
   Served by Apache through:  ErrorDocument 404 /404.php
   (see the .htaccess file). Uses config.php for BASE / SITE_NAME.
   ========================================================= */
require_once __DIR__ . '/config.php';

// Proper 404 response + never cache it
http_response_code(404);
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

$home_url = BASE;   // works on localhost sub-folders and on the live domain
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - <?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="robots" content="noindex, follow">

    <!-- Self-hosted fonts (same as the rest of the site) -->
    <link rel="preload" href="<?php echo BASE; ?>assets/fonts/poppins-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/fonts.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #0b0b16;
        }

        .ms-404-banner {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                radial-gradient(circle at 18% 25%, rgba(47, 168, 161, 0.18), transparent 28%),
                radial-gradient(circle at 82% 30%, rgba(90, 46, 166, 0.22), transparent 34%),
                radial-gradient(circle at 50% 78%, rgba(255, 255, 255, 0.06), transparent 26%),
                linear-gradient(135deg, #120c24 0%, #5A2EA6 48%, #2FA8A1 100%);
        }

        .ms-404-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
            background-size: 64px 64px;
            pointer-events: none;
            z-index: 1;
        }

        .ms-404-banner::after {
            content: "";
            position: absolute;
            width: 760px;
            height: 760px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, rgba(255, 255, 255, 0.12), transparent 60%);
            filter: blur(28px);
            animation: msPulseGlow 4s ease-in-out infinite;
            z-index: 1;
            pointer-events: none;
        }

        .ms-noise {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.08) 0%, transparent 32%),
                radial-gradient(circle at 70% 40%, rgba(255, 255, 255, 0.06) 0%, transparent 28%);
            pointer-events: none;
            z-index: 1;
        }

        .ms-particles {
            position: absolute;
            inset: 0;
            z-index: 1;
            overflow: hidden;
            pointer-events: none;
        }

        .ms-particles span {
            position: absolute;
            display: block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.72);
            box-shadow: 0 0 14px rgba(255, 255, 255, 0.45);
            animation: msParticlesMove linear infinite;
        }

        .ms-particles span:nth-child(1) {
            left: 8%;
            top: 92%;
            animation-duration: 14s;
            animation-delay: 0s;
        }

        .ms-particles span:nth-child(2) {
            left: 18%;
            top: 100%;
            animation-duration: 12s;
            animation-delay: 2s;
            width: 4px;
            height: 4px;
        }

        .ms-particles span:nth-child(3) {
            left: 33%;
            top: 95%;
            animation-duration: 16s;
            animation-delay: 1s;
        }

        .ms-particles span:nth-child(4) {
            left: 48%;
            top: 100%;
            animation-duration: 11s;
            animation-delay: 3s;
            width: 5px;
            height: 5px;
        }

        .ms-particles span:nth-child(5) {
            left: 62%;
            top: 94%;
            animation-duration: 15s;
            animation-delay: 4s;
        }

        .ms-particles span:nth-child(6) {
            left: 77%;
            top: 100%;
            animation-duration: 13s;
            animation-delay: 2s;
            width: 7px;
            height: 7px;
        }

        .ms-particles span:nth-child(7) {
            left: 90%;
            top: 96%;
            animation-duration: 17s;
            animation-delay: 1s;
        }

        .ms-particles span:nth-child(8) {
            left: 4%;
            top: 100%;
            animation-duration: 18s;
            animation-delay: 5s;
            width: 4px;
            height: 4px;
        }

        .ms-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(10px);
            opacity: .55;
            z-index: 1;
            pointer-events: none;
            animation: msFloatOrb linear infinite;
        }

        .ms-orb1 {
            width: 180px;
            height: 180px;
            top: 12%;
            left: 10%;
            background: rgba(47, 168, 161, 0.26);
            animation-duration: 10s;
        }

        .ms-orb2 {
            width: 220px;
            height: 220px;
            right: 10%;
            bottom: 10%;
            background: rgba(90, 46, 166, 0.30);
            animation-duration: 13s;
        }

        .ms-orb3 {
            width: 110px;
            height: 110px;
            top: 18%;
            right: 18%;
            background: rgba(255, 255, 255, 0.12);
            animation-duration: 8s;
        }

        .ms-glitch-line {
            position: absolute;
            left: -20%;
            width: 140%;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.7), transparent);
            opacity: .28;
            z-index: 1;
            animation: msScanLine 4s linear infinite;
            pointer-events: none;
        }

        .ms-glitch-line.line1 {
            top: 28%;
            animation-delay: 0s;
        }

        .ms-glitch-line.line2 {
            top: 58%;
            animation-delay: 2s;
        }

        .ms-hero {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 90px 20px 40px;
            text-align: center;
        }

        .ms-content {
            width: 100%;
            max-width: 980px;
            margin: 0 auto;
        }

        .ms-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 22px;
            margin-bottom: 16px;
            border-radius: 999px;
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.22);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.24), 0 8px 30px rgba(10, 10, 30, 0.18);
            color: rgba(255, 255, 255, 0.96);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .03em;
            text-transform: uppercase;
        }

        .ms-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.45);
            animation: msPulseDot 1.8s infinite;
            flex-shrink: 0;
        }

        .ms-404-code {
            margin: 0 0 10px;
            font-size: clamp(90px, 18vw, 220px);
            line-height: .92;
            font-weight: 700;
            /* heaviest self-hosted Poppins weight */
            letter-spacing: -0.06em;
            background: linear-gradient(90deg, #ffffff, #2FA8A1, #ffffff, #5A2EA6, #ffffff);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: msGradientMove 6s ease infinite, msFloat404 3s ease-in-out infinite;
            text-shadow: 0 0 30px rgba(255, 255, 255, 0.14);
        }

        .ms-subtext {
            margin: 0 0 14px;
            color: #ffffff;
            font-size: clamp(30px, 5vw, 64px);
            font-weight: 700;
            line-height: .98;
            letter-spacing: -0.05em;
            animation: msFadeUp 1.1s ease;
        }

        .ms-desc {
            margin: 0 auto 24px;
            max-width: 700px;
            color: rgba(255, 255, 255, 0.86);
            font-size: 16px;
            line-height: 1.55;
            font-weight: 500;
            animation: msFadeUp 1.4s ease;
        }

        .ms-btn-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 6px;
            animation: msFadeUp 1.7s ease;
        }

        .ms-btn-home {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
            border: none;
            border-radius: 999px;
            padding: 14px 30px;
            min-width: 190px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            isolation: isolate;
            color: #ffffff !important;
            background: linear-gradient(90deg, #2FA8A1 0%, #5A2EA6 100%);
            box-shadow: 0 10px 24px rgba(47, 168, 161, 0.18), 0 10px 28px rgba(90, 46, 166, 0.25);
            transition: transform .3s ease, box-shadow .35s ease, filter .35s ease;
        }

        .ms-btn-home::before {
            content: "";
            position: absolute;
            top: 0;
            left: -70%;
            width: 38%;
            height: 100%;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.26), rgba(255, 255, 255, 0));
            transform: skewX(-22deg);
            transition: left 1.45s cubic-bezier(0.19, 1, 0.22, 1);
            z-index: 1;
            pointer-events: none;
        }

        .ms-btn-home:hover::before {
            left: 140%;
        }

        .ms-btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 32px rgba(47, 168, 161, 0.22), 0 14px 36px rgba(90, 46, 166, 0.32);
            filter: brightness(1.04);
        }

        .ms-btn-home span {
            position: relative;
            z-index: 2;
        }

        @keyframes msGradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes msFloat404 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes msPulseGlow {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: .75;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.12);
                opacity: 1;
            }
        }

        @keyframes msFadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes msFloatOrb {
            0% {
                transform: translateY(0) translateX(0);
            }

            25% {
                transform: translateY(-18px) translateX(12px);
            }

            50% {
                transform: translateY(8px) translateX(-10px);
            }

            75% {
                transform: translateY(-12px) translateX(8px);
            }

            100% {
                transform: translateY(0) translateX(0);
            }
        }

        @keyframes msParticlesMove {
            0% {
                transform: translateY(0) scale(.8);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            100% {
                transform: translateY(-110vh) scale(1.2);
                opacity: 0;
            }
        }

        @keyframes msScanLine {
            0% {
                transform: translateX(-10%) scaleX(.7);
                opacity: 0;
            }

            20% {
                opacity: .30;
            }

            50% {
                opacity: .65;
            }

            100% {
                transform: translateX(10%) scaleX(1.1);
                opacity: 0;
            }
        }

        @keyframes msPulseDot {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .45;
                transform: scale(.85);
            }
        }

        @media (max-width:1024px) {
            .ms-hero {
                padding: 90px 20px 40px;
            }

            .ms-badge {
                padding: 8px 14px;
                font-size: 8px;
                margin-bottom: 8px;
            }

            .ms-subtext {
                font-size: 27px;
                margin-bottom: 10px;
            }

            .ms-desc {
                font-size: 11px;
                line-height: 1.42;
                margin-bottom: 14px;
                max-width: 100%;
            }

            .ms-btn-home {
                padding: 10px 20px;
                font-size: 12px;
                min-width: 150px;
            }
        }

        @media (max-width:767px) {
            .ms-hero {
                padding: 90px 16px 35px !important;
            }

            .ms-badge {
                padding: 8px 14px;
                font-size: 9px;
                margin-bottom: 10px;
            }

            .ms-404-code {
                font-size: clamp(78px, 22vw, 130px);
            }

            .ms-subtext {
                font-size: 32px;
                line-height: .98;
                margin-bottom: 10px;
            }

            .ms-desc {
                font-size: 13px;
                line-height: 1.45;
                margin-bottom: 16px;
            }

            .ms-btn-home {
                width: 100%;
                max-width: 260px;
                padding: 12px 18px;
                font-size: 13px;
            }

            .ms-orb1,
            .ms-orb2,
            .ms-orb3 {
                filter: blur(12px);
            }
        }

        @media (max-width:480px) {
            .ms-hero {
                padding: 72px 14px 20px !important;
            }

            .ms-badge {
                font-size: 8px;
                padding: 7px 12px;
                margin-bottom: 8px;
            }

            .ms-subtext {
                font-size: 28px;
            }

            .ms-desc {
                font-size: 11px;
                line-height: 1.4;
                margin-bottom: 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <section class="ms-404-banner">
        <div class="ms-noise"></div>

        <div class="ms-orb ms-orb1"></div>
        <div class="ms-orb ms-orb2"></div>
        <div class="ms-orb ms-orb3"></div>

        <div class="ms-glitch-line line1"></div>
        <div class="ms-glitch-line line2"></div>

        <div class="ms-particles">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>

        <div class="ms-hero">
            <div class="ms-content">

                <div class="ms-badge">
                    <span class="ms-badge-dot"></span>
                    Minerdia Studio
                </div>

                <div class="ms-404-code">404</div>

                <h1 class="ms-subtext">Oops! Page Not Found</h1>

                <p class="ms-desc">
                    The page you are looking for might have been removed, renamed, or the link may be incorrect.
                    Let’s get you back to the homepage.
                </p>

                <div class="ms-btn-wrap">
                    <a href="<?php echo htmlspecialchars($home_url, ENT_QUOTES, 'UTF-8'); ?>" class="ms-btn-home">
                        <span>Go To Home Page</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

</body>

</html>