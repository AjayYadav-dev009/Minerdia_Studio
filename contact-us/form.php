<?php
// ---------------------------------------------------------------
// CONFIG
// Submissions go to home-page/submit-contact.php -> Google Sheets
// ("Home Contact" tab, the Page column shows /contact-us/).
// ---------------------------------------------------------------
$image_src   = 'https://minerdiastudio.com/wp-content/uploads/2026/07/sdfgdg.png';
$image_alt   = 'Digital Marketing Consultation Services in India';
$terms_url   = BASE . 'terms-and-conditions/';
$privacy_url = BASE . 'privacy-policies/';

// Must match $ALLOWED_SERVICES in home-page/submit-contact.php
$services = [
    'Social Media Management',
    'Podcast',
    'Google Ads',
    'Facebook Ads',
    'Email Marketing',
    'Scriptwriting',
    'Video Editing',
    'Graphic Designing',
    'Search Engine Optimization (SEO)',
];

$e = function ($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); };
?>
<section class="ms-cf" id="ms-cf">

    <style>
        .ms-cf,
        .ms-cf * {
            box-sizing: border-box;
        }

        .ms-cf {
            --purple: #5a2ea6;
            --purple-dark: #4a2392;
            width: 100%;
            padding: 90px 24px 100px;
            background: #fff;
            font-family: var(--font-body);
            overflow: hidden;
        }

        /* ---------- two columns: form | image ---------- */
        .ms-cf-wrap {
            max-width: 1240px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(0, 1fr);
            align-items: center;
            gap: 40px;
        }

        .ms-cf-formcol {
            display: flex;
            justify-content: flex-end;
            padding-right: 10px;
        }

        /* stage: soft colour glows behind the glass so the blur has something to show */
        .ms-cf-stage {
            position: relative;
            width: 100%;
            max-width: 580px;
            isolation: isolate;
        }

        .ms-cf-stage::before,
        .ms-cf-stage::after {
            content: "";
            position: absolute;
            z-index: -2;
            border-radius: 50%;
            filter: blur(46px);
            pointer-events: none;
        }

        .ms-cf-stage::before {
            width: 300px;
            height: 300px;
            top: -60px;
            left: -70px;
            background: radial-gradient(circle, rgba(124, 82, 224, .55), rgba(124, 82, 224, 0) 70%);
        }

        .ms-cf-stage::after {
            width: 320px;
            height: 320px;
            right: -70px;
            bottom: -80px;
            background: radial-gradient(circle, rgba(34, 165, 174, .45), rgba(34, 165, 174, 0) 70%);
        }

        /* ---------- form card ---------- */
        .ms-cf-card {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 38px 36px 40px;
            border-radius: 30px;
            /* glassmorphism */
            background: linear-gradient(135deg, rgba(255, 255, 255, .34), rgba(255, 255, 255, .10));
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, .6);
            box-shadow:
                0 18px 50px rgba(74, 35, 146, .18),
                inset 0 1px 0 rgba(255, 255, 255, .9),
                inset 0 -1px 0 rgba(255, 255, 255, .25);
        }

        @supports not ((backdrop-filter: blur(1px)) or (-webkit-backdrop-filter: blur(1px))) {
            .ms-cf-card {
                background: rgba(246, 244, 252, .96);
            }
        }

        .ms-cf-sphere {
            position: absolute;
            top: -54px;
            left: -58px;
            width: 100px;
            height: auto;
            z-index: 0;
            pointer-events: none;
            user-select: none;
        }

        .ms-cf-cube {
            position: absolute;
            right: -68px;
            bottom: -68px;
            width: 124px;
            height: auto;
            z-index: 0;
            pointer-events: none;
            user-select: none;
        }

        .ms-cf-head {
            margin: 0 0 22px;
        }

        .ms-cf-head h2 {
            margin: 0 0 8px;
            font-family: var(--font-head);
            font-size: 26px;
            line-height: 1.2;
            font-weight: 700;
            color: #17131e;
        }

        .ms-cf-head h2 span {
            color: var(--purple);
        }

        .ms-cf-head p {
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
            color: #4b4658;
        }

        .ms-cf-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 14px;
        }

        .ms-cf-field {
            min-width: 0;
        }

        .ms-cf-sr {
            position: absolute;
            width: 1px;
            height: 1px;
            overflow: hidden;
            clip: rect(0 0 0 0);
            white-space: nowrap;
        }

        .ms-cf input[type="text"],
        .ms-cf input[type="tel"],
        .ms-cf input[type="email"],
        .ms-cf input[type="url"],
        .ms-cf select {
            width: 100%;
            height: 48px;
            padding: 0 20px;
            border: 1px solid rgba(255, 255, 255, .7);
            border-radius: 50px;
            background: rgba(255, 255, 255, .32);
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            box-shadow: 0 4px 14px rgba(74, 35, 146, .08), inset 0 1px 0 rgba(255, 255, 255, .8);
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 400;
            color: #222;
            outline: none;
            transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
        }

        .ms-cf select {
            appearance: none;
            -webkit-appearance: none;
            padding-right: 46px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23111' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 14px;
            cursor: pointer;
        }

        .ms-cf input::placeholder {
            color: #5a5470;
            opacity: 1;
        }

        .ms-cf input:focus,
        .ms-cf select:focus {
            background: rgba(255, 255, 255, .6);
            border-color: var(--purple);
            box-shadow: 0 0 0 4px rgba(90, 46, 166, .15);
        }

        .ms-cf-terms {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 20px 0 22px 4px;
            font-size: 13px;
            line-height: 1.6;
            color: #000;
            cursor: pointer;
        }

        .ms-cf-terms input {
            flex: 0 0 auto;
            width: 18px;
            height: 18px;
            margin-top: 3px;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-cf-terms a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-cf-btnwrap {
            text-align: center;
        }

        .ms-cf-btn {
            min-width: 200px;
            padding: 13px 36px;
            border: 0;
            border-radius: 50px;
            background: var(--purple-dark);
            color: #fff;
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(74, 35, 146, .32);
            transition: background .2s ease, transform .2s ease;
        }

        .ms-cf-btn:hover {
            background: #3b1e6d;
            transform: translateY(-2px);
        }

        .ms-cf-btn:disabled {
            opacity: .7;
            cursor: wait;
        }

        .ms-cf-msg {
            padding: 14px 18px;
            border-radius: 14px;
            font-size: 14px;
            line-height: 1.6;
            text-align: center;
        }

        .ms-cf-msg--ok {
            background: #e6f6ef;
            color: #14683f;
        }

        .ms-cf-msg--err {
            background: #fdecec;
            color: #9b1c1c;
        }

        .ms-cf-hp {
            position: absolute;
            left: -9999px;
            height: 0;
            overflow: hidden;
        }

        /* ---------- image ---------- */
        .ms-cf-image {
            align-self: end;
            max-width: 520px;
        }

        .ms-cf-image img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- laptop ---------- */
        @media (max-width: 1100px) {
            .ms-cf-wrap {
                grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
                gap: 24px;
            }

            .ms-cf-card {
                padding: 32px 28px 34px;
            }

            .ms-cf-head h2 {
                font-size: 24px;
            }
        }

        /* ---------- tablet / mobile: image hidden, form centred ---------- */
        @media (max-width: 900px) {
            .ms-cf-wrap {
                grid-template-columns: minmax(0, 640px);
                justify-content: center;
            }

            .ms-cf-formcol {
                padding-right: 0;
                justify-content: center;
            }

            .ms-cf-image {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .ms-cf {
                padding: 60px 18px 70px;
            }

            .ms-cf-card {
                padding: 30px 20px 32px;
                border-radius: 22px;
            }

            .ms-cf-head h2 {
                font-size: 23px;
            }

            .ms-cf-row {
                grid-template-columns: 1fr;
                gap: 14px;
                margin-bottom: 14px;
            }

            .ms-cf input[type="text"],
            .ms-cf input[type="tel"],
            .ms-cf input[type="email"],
            .ms-cf input[type="url"],
            .ms-cf select {
                height: 50px;
                font-size: 14.5px;
            }

            .ms-cf-sphere {
                top: -30px;
                left: -12px;
                width: 76px;
            }

            .ms-cf-cube {
                right: -10px;
                bottom: -40px;
                width: 90px;
            }

            .ms-cf-btn {
                width: 100%;
            }
        }
    </style>

    <div class="ms-cf-wrap">
        <div class="ms-cf-formcol">
            <div class="ms-cf-stage">
                <img class="ms-cf-sphere" src="<?php echo BASE; ?>assets/image/contact/sphere.webp" alt="" aria-hidden="true" width="112" height="113">
                <img class="ms-cf-cube" src="<?php echo BASE; ?>assets/image/contact/cube.webp" alt="" aria-hidden="true" width="140" height="154">
            <div class="ms-cf-card">

                <div class="ms-cf-head">
                    <h2>Let&rsquo;s Talk About <span>Your Growth</span></h2>
                    <p>Fill in the form and our team will get back to you shortly.</p>
                </div>

                <form id="ms-cf-form" method="POST" action="<?php echo BASE; ?>home-page/submit-contact.php" novalidate>
                    <div class="ms-cf-hp" aria-hidden="true">
                        <label>Leave this field empty <input type="text" name="website_hp" tabindex="-1" autocomplete="off"></label>
                    </div>

                    <div class="ms-cf-row">
                        <div class="ms-cf-field">
                            <label class="ms-cf-sr" for="ms-cf-name">Name</label>
                            <input type="text" id="ms-cf-name" name="name" placeholder="Enter Your Full Name" autocomplete="name" aria-required="true" required>
                        </div>
                        <div class="ms-cf-field">
                            <label class="ms-cf-sr" for="ms-cf-business">Business Name</label>
                            <input type="text" id="ms-cf-business" name="business_name" placeholder="Business Name" autocomplete="organization" aria-required="true" required>
                        </div>
                    </div>

                    <div class="ms-cf-row">
                        <div class="ms-cf-field">
                            <label class="ms-cf-sr" for="ms-cf-phone">Phone Number</label>
                            <input type="tel" id="ms-cf-phone" name="phone" inputmode="tel" placeholder="Phone Number" autocomplete="tel" aria-required="true" required>
                        </div>
                        <div class="ms-cf-field">
                            <label class="ms-cf-sr" for="ms-cf-email">Email</label>
                            <input type="email" id="ms-cf-email" name="email" placeholder="Email Address" autocomplete="email" aria-required="true" required>
                        </div>
                    </div>

                    <div class="ms-cf-row">
                        <div class="ms-cf-field">
                            <label class="ms-cf-sr" for="ms-cf-url">Website Url</label>
                            <input type="url" id="ms-cf-url" name="website" placeholder="Website Url" autocomplete="url">
                        </div>
                        <div class="ms-cf-field">
                            <label class="ms-cf-sr" for="ms-cf-service">Services</label>
                            <select id="ms-cf-service" name="services" aria-required="true" required>
                                <option value="">Select Services</option>
                                <?php foreach ($services as $service) : ?>
                                    <option value="<?php echo $e($service); ?>"><?php echo $e($service); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <label class="ms-cf-terms">
                        <input type="checkbox" name="terms" value="on" required>
                        <span>I have read and agree to the <a href="<?php echo $e($terms_url); ?>" target="_blank" rel="noopener">Terms and Conditions</a> and <a href="<?php echo $e($privacy_url); ?>" target="_blank" rel="noopener">Privacy Policy</a></span>
                    </label>

                    <div class="ms-cf-btnwrap">
                        <button type="submit" class="ms-cf-btn">Submit Form</button>
                    </div>
                    <div id="ms-cf-msg" class="ms-cf-msg" role="status" hidden style="margin:18px 0 0"></div>
                </form>
            </div>
            </div>
        </div>

        <div class="ms-cf-image">
            <img src="<?php echo $e($image_src); ?>" width="1080" height="1350" alt="<?php echo $e($image_alt); ?>" loading="lazy" decoding="async">
        </div>
    </div>

    <script>
        (function() {
            var form = document.getElementById('ms-cf-form');
            var msg = document.getElementById('ms-cf-msg');
            if (!form) return;

            form.addEventListener('submit', function(ev) {
                ev.preventDefault();
                var btn = form.querySelector('button[type="submit"]');
                var label = btn.textContent;

                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }

                btn.disabled = true;
                btn.textContent = 'Sending...';
                msg.hidden = true;

                fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        headers: { 'Accept': 'application/json' }
                    })
                    .then(function(r) { return r.json(); })
                    .then(function(res) {
                        msg.className = 'ms-cf-msg ' + (res.ok ? 'ms-cf-msg--ok' : 'ms-cf-msg--err');
                        msg.textContent = res.message;
                        msg.hidden = false;
                        if (res.ok) form.reset();
                    })
                    .catch(function() {
                        msg.className = 'ms-cf-msg ms-cf-msg--err';
                        msg.textContent = 'Network error. Please try again.';
                        msg.hidden = false;
                    })
                    .then(function() {
                        btn.disabled = false;
                        btn.textContent = label;
                    });
            });
        })();
    </script>
</section>