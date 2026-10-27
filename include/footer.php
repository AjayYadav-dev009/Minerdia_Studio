<?php require_once __DIR__ . '/../config.php'; ?>
<footer class="ms-footer">
    <style>
        .ms-footer,
        .ms-footer * {
            box-sizing: border-box
        }

        .ms-footer {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #3f3b50;
            width: 100%;
            padding: 32px 20px 28px;
            font-family: var(--font-body);
            background:
                radial-gradient(circle at 8% 18%, rgba(90, 46, 166, .12), transparent 28%),
                radial-gradient(circle at 92% 20%, rgba(47, 168, 161, .13), transparent 28%),
                linear-gradient(135deg, #fbf8ff 0%, #eee8fb 48%, #eaf8f8 100%);
            color: var(--text);
            overflow: hidden;
        }

        .ms-footer-wrap {
            max-width: 1220px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.25fr .75fr 1fr 1fr;
            gap: 34px;
            align-items: flex-start;
        }

        .ms-footer-logo {
            width: 78px;
            display: inline-block;
            margin-bottom: 14px;
            line-height: 0;
        }

        .ms-footer-logo img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: contain;
            filter: drop-shadow(0 8px 14px rgba(23, 20, 43, .12));
        }

        .ms-footer-about {
            margin: 0 0 16px;
            max-width: 370px;
            font-size: 14.4px;
            line-height: 1.62;
            color: var(--text);
            text-align: justify;
        }

        .ms-footer-contact {
            display: grid;
            gap: 11px;
        }

        .ms-contact-item {
            display: grid;
            grid-template-columns: 24px 1fr;
            gap: 10px;
            align-items: flex-start;
            font-size: 13.8px;
            line-height: 1.52;
            color: var(--text);
        }

        .ms-contact-item a {
            color: var(--text);
            text-decoration: none;
            transition: .3s ease;
        }

        .ms-contact-item a:hover {
            color: var(--purple)
        }

        .ms-contact-icon {
            width: 24px;
            height: 24px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            font-size: 12px;
            flex: 0 0 24px;
        }

        .ms-footer-title {
            margin: 0 0 15px;
            font-size: 21px;
            line-height: 1.2;
            font-weight: 900;
            color: #111;
        }

        .ms-footer-links {
            display: grid;
            gap: 10px;
        }

        .ms-footer-links a {
            color: #242033;
            text-decoration: none;
            font-size: 14.4px;
            line-height: 1.35;
            transition: .3s ease;
        }

        .ms-footer-links a:hover {
            color: var(--purple);
            padding-left: 5px;
        }

        .ms-news-text {
            margin: 0 0 14px;
            font-size: 14px;
            line-height: 1.55;
            color: var(--text);
        }

        .ms-news-form {
            margin: 0 0 18px
        }

        .ms-news-form input,
        .ms-news-form .ff-el-form-control {
            min-height: 40px !important;
            border-radius: 50px !important;
            border: 1px solid rgba(90, 46, 166, .12) !important;
            background: #fff !important;
            box-shadow: none !important;
            font-size: 14px !important;
        }

        .ms-news-form button,
        .ms-news-form .ff-btn-submit {
            min-height: 40px !important;
            border-radius: 50px !important;
            padding: 0 22px !important;
            background: linear-gradient(135deg, var(--purple), var(--teal)) !important;
            color: #fff !important;
            border: 0 !important;
            font-weight: 800 !important;
            box-shadow: 0 12px 28px rgba(90, 46, 166, .18) !important;
        }

        /* Static newsletter form (replaces the WordPress Fluent Form shortcode) */
        .ms-news-form-static {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .ms-news-label {
            font-size: 14px;
            color: var(--text);
            margin-bottom: 8px;
        }

        .ms-news-label span {
            color: #e03131;
        }

        .ms-news-form-static input {
            width: 100%;
            padding: 0 18px;
            margin-bottom: 20px;
            outline: none;
            font-family: inherit;
            color: var(--text);
        }

        .ms-news-form-static button {
            cursor: pointer;
            font-family: inherit;
            font-size: 15px;
            transition: .3s ease;
        }

        .ms-news-form-static button:hover {
            transform: translateY(-2px);
        }

        .ms-social {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            align-items: center;
        }

        /* Black copyright bar */
        .ms-copyright {
            /* width: 100%; */
            background: #000;
            color: #fff;
            font-family: var(--font-body);
            padding: 12px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px 20px;
            font-size: 15px;
            font-weight: 700;
            overflow: hidden;
        }

        .ms-copyright .ms-brand {
            color: var(--teal, #2FA8A1);
        }

        .ms-copyright-links {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .ms-copyright-links a {
            color: #fff;
            text-decoration: none;
        }

        .ms-copyright-links a:hover {
            color: #2FA8A1;
        }

        @media(max-width:767px) {
            .ms-copyright {
                justify-content: center;
                text-align: center;
                font-size: 13px;
                padding: 12px;
            }
        }

        .ms-social a {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            transition: .35s ease;
            box-shadow: 0 10px 22px rgba(23, 20, 43, .12);
        }

        .ms-social a:hover {
            transform: translateY(-5px) scale(1.05)
        }

        .ms-facebook {
            background: #1877F2
        }

        .ms-pinterest {
            background: #E60023
        }

        .ms-instagram {
            background: linear-gradient(135deg, #f58529, #dd2a7b, #8134af, #515bd4)
        }

        .ms-linkedin {
            background: #0077B5
        }

        .ms-youtube {
            background: #FF0000
        }

        @media(min-width:768px) and (max-width:1024px) {
            .ms-footer-wrap {
                grid-template-columns: repeat(2, 1fr);
                gap: 28px 34px;
            }

            .ms-footer-col:nth-child(1) {
                grid-column: 1 / 2;
                grid-row: 1
            }

            .ms-footer-col:nth-child(2) {
                grid-column: 2 / 3;
                grid-row: 1
            }

            .ms-footer-col:nth-child(3) {
                grid-column: 1 / 2;
                grid-row: 2
            }

            .ms-footer-col:nth-child(4) {
                grid-column: 2 / 3;
                grid-row: 2
            }

            .ms-footer-logo {
                width: 72px
            }

            .ms-footer-about {
                max-width: 100%
            }
        }

        @media(max-width:767px) {
            .ms-footer {
                padding: 30px 12px 26px
            }

            .ms-footer-wrap {
                grid-template-columns: .78fr 1.22fr;
                gap: 24px 22px;
                text-align: left;
            }

            .ms-footer-col:nth-child(1) {
                grid-column: 1 / 3;
                text-align: center;
            }

            .ms-footer-col:nth-child(2) {
                grid-column: 1 / 2;
                grid-row: 2;
            }

            .ms-footer-col:nth-child(3) {
                grid-column: 2 / 3;
                grid-row: 2;
                margin-left: 0;
            }

            .ms-footer-col:nth-child(4) {
                grid-column: 1 / 3;
                grid-row: 3;
                text-align: center;
            }

            .ms-footer-logo {
                width: 70px;
                margin: 0 auto 12px;
            }

            .ms-footer-about {
                max-width: 100%;
                text-align: center;
                font-size: 14px;
            }

            .ms-contact-item:first-child {
                grid-template-columns: 1fr;
                justify-items: center;
                gap: 7px;
                text-align: center;
            }

            .ms-contact-item:nth-child(2),
            .ms-contact-item:nth-child(3) {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                white-space: nowrap;
            }

            .ms-contact-item:nth-child(2) a,
            .ms-contact-item:nth-child(3) a {
                white-space: nowrap;
                font-size: 14px;
            }

            .ms-footer-title {
                font-size: 17px;
                margin-bottom: 10px;
                white-space: nowrap;
            }

            .ms-footer-links {
                gap: 9px;
            }

            .ms-footer-links a,
            .ms-footer-col:nth-child(3) .ms-footer-links a {
                font-size: 13px;
                line-height: 1.35;
                white-space: nowrap;
                letter-spacing: 0;
            }

            .ms-social {
                justify-content: center;
            }
        }

        @media(max-width:380px) {
            .ms-footer-wrap {
                gap: 24px 16px;
            }

            .ms-footer-title {
                font-size: 16px;
            }

            .ms-footer-links a,
            .ms-footer-col:nth-child(3) .ms-footer-links a {
                font-size: 12.5px;
                letter-spacing: -.25px;
            }

            .ms-contact-item:nth-child(2) a,
            .ms-contact-item:nth-child(3) a {
                font-size: 13.2px;
            }
        }
    </style>

    <div class="ms-footer-wrap">

        <div class="ms-footer-col">
            <a class="ms-footer-logo" href="<?php echo BASE; ?>" aria-label="Minerdia Studio Home">

                <img src="<?php echo e(logo_url(LOGO_FOOTER, LIVE_BASE . 'assets/image/logo/' . LOGO_FOOTER)); ?>" alt="Minerdia Studio Logo">

            </a>

            <p class="ms-footer-about">
                Minerdia Studio is a leading Digital Marketing Agency in India, delivering SEO, website development, branding, social media marketing, and performance-driven digital solutions that help businesses grow.
            </p>

            <div class="ms-footer-contact">
                <div class="ms-contact-item">
                    <span class="ms-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                    <a href="<?php echo e(MAP_URL); ?>" target="_blank" rel="noopener"><?php echo e(ADDRESS); ?></a>
                </div>

                <div class="ms-contact-item">
                    <span class="ms-contact-icon"><i class="fa-solid fa-envelope"></i></span>
                    <a href="mailto:<?php echo e(EMAIL); ?>"><?php echo e(EMAIL); ?></a>
                </div>

                <div class="ms-contact-item">
                    <span class="ms-contact-icon"><i class="fa-solid fa-envelope"></i></span>
                    <a href="mailto:<?php echo e(EMAIL2); ?>"><?php echo e(EMAIL2); ?></a>
                </div>

                <div class="ms-contact-item">
                    <span class="ms-contact-icon"><i class="fa-solid fa-phone"></i></span>
                    <a href="tel:<?php echo e(PHONE); ?>"><?php echo e(PHONE_TXT); ?></a>
                </div>
            </div>
        </div>

        <div class="ms-footer-col">
            <h3 class="ms-footer-title">Quick Links</h3>
            <div class="ms-footer-links">
                <a href="<?php echo BASE; ?>">Home</a>
                <a href="<?php echo BASE; ?>about-us/">About Us</a>
                <a href="<?php echo BASE; ?>creative-gallery/">Gallery</a>
                <a href="<?php echo BASE; ?>contact-us/">Contact Us</a>
            </div>
        </div>

        <div class="ms-footer-col">
            <h3 class="ms-footer-title">Services</h3>
            <div class="ms-footer-links">
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

        <div class="ms-footer-col">
            <h3 class="ms-footer-title">Newsletter</h3>

            <p class="ms-news-text">
                Subscribe to our newsletter and get updates about creative content, marketing trends and business growth strategies.
            </p>

            <form class="ms-news-form ms-news-form-static" action="<?php echo BASE; ?>subscribe.php" method="post">
                <label for="ms-news-email" class="ms-news-label">Email <span>*</span></label>
                <input type="email" id="ms-news-email" name="email" placeholder="Email Address" required>
                <button type="submit">Submit Form</button>
            </form>

            <div class="ms-social">
                <a class="ms-facebook" href="<?php echo e(FACEBOOK); ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="ms-pinterest" href="<?php echo e(PINTEREST); ?>" target="_blank" rel="noopener" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a class="ms-instagram" href="<?php echo e(INSTAGRAM); ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a class="ms-linkedin" href="<?php echo e(LINKEDIN); ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a class="ms-youtube" href="<?php echo e(YOUTUBE); ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</footer>

<div class="ms-copyright">
    <div>Copyright @<?php echo date('Y'); ?> <span class="ms-brand">Minerdia Studio</span> | All Right Reserved</div>
    <div class="ms-copyright-links">
        <a href="<?php echo BASE; ?>terms-and-conditions/">Terms &amp; Conditions</a>
        <span>|</span>
        <a href="<?php echo BASE; ?>privacy-policy/">Privacy Policy</a>
    </div>
</div>

<!-- ===== FLOATING WHATSAPP BUTTON (settings in config.php) ===== -->
<style>
    .ms-whatsapp {
        position: fixed;
        left: 22px;
        bottom: 25px;
        z-index: 9998;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #25d366;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 22px rgba(0, 0, 0, .25);
        transition: transform .2s ease, box-shadow .2s ease;
        text-decoration: none;
    }

    .ms-whatsapp::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background: #25d366;
        opacity: .5;
        z-index: -1;
        animation: ms-wa-pulse 2.2s ease-out infinite;
    }

    .ms-whatsapp:hover {
        transform: scale(1.08);
        box-shadow: 0 12px 28px rgba(0, 0, 0, .3);
    }

    .ms-whatsapp img,
    .ms-whatsapp svg {
        width: 45px;
        height: 45px;
        object-fit: contain;
        display: block;
    }

    @keyframes ms-wa-pulse {
        0% {
            transform: scale(1);
            opacity: .5;
        }

        100% {
            transform: scale(1.7);
            opacity: 0;
        }
    }

    @media (max-width: 600px) {
        .ms-whatsapp {
            right: 16px;
            bottom: 16px;
            width: 54px;
            height: 54px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ms-whatsapp::before {
            animation: none;
        }
    }
</style>

<?php $__wa_icon = logo_url(LOGO_WHATSAPP); ?>
<a class="ms-whatsapp" href="https://wa.me/<?php echo e(WHATSAPP_NUMBER); ?>?text=<?php echo rawurlencode(WHATSAPP_MESSAGE); ?>" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
    <?php if ($__wa_icon): ?>
        <img src="<?php echo e($__wa_icon); ?>" alt="WhatsApp">
    <?php else: ?>
        <svg viewBox="0 0 32 32" fill="#fff" aria-hidden="true">
            <path d="M16.04 3C9 3 3.3 8.7 3.3 15.7c0 2.25.6 4.45 1.73 6.38L3 29l7.12-1.87a12.7 12.7 0 0 0 5.92 1.5h.01c7.04 0 12.75-5.7 12.75-12.7C28.8 8.9 23.08 3 16.04 3Zm0 23.4h-.01a10.6 10.6 0 0 1-5.4-1.48l-.39-.23-4.23 1.1 1.13-4.12-.25-.42a10.5 10.5 0 0 1-1.62-5.55c0-5.83 4.76-10.57 10.62-10.57 5.84 0 10.6 4.74 10.6 10.57 0 5.83-4.77 10.7-10.45 10.7Zm5.82-7.92c-.32-.16-1.89-.93-2.18-1.04-.29-.1-.5-.16-.72.16-.21.32-.82 1.04-1 1.25-.19.21-.37.24-.69.08-.32-.16-1.35-.5-2.57-1.58-.95-.85-1.59-1.9-1.77-2.22-.19-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.19.21-.32.32-.53.1-.21.05-.4-.03-.56-.08-.16-.72-1.73-.98-2.37-.26-.62-.52-.54-.72-.55h-.61c-.21 0-.56.08-.85.4-.29.32-1.12 1.1-1.12 2.67s1.15 3.1 1.31 3.32c.16.21 2.26 3.45 5.47 4.84.76.33 1.36.53 1.82.68.77.24 1.46.21 2.01.13.61-.09 1.89-.77 2.15-1.52.27-.75.27-1.39.19-1.52-.08-.13-.29-.21-.61-.37Z" />
        </svg>
    <?php endif; ?>
</a>

<script src="<?php echo BASE; ?>assets/js/lenis.min.js"></script>
<script src="<?php echo BASE; ?>assets/js/smooth-scroll.js"></script>

</body>

</html>