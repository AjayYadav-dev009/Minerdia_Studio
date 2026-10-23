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

$e = function ($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};
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
            padding: 60px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
            overflow: hidden;
        }

        .ms-cf-wrap {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 520px) minmax(0, 340px);
            justify-content: center;
            align-items: center;
            gap: 70px;
        }

        /* ---------- form card ---------- */
        .ms-cf-card {
            position: relative;
            padding: 28px 26px 30px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 4px 22px rgba(0, 0, 0, .10);
        }

        /* purple sphere, top-left corner */
        .ms-cf-sphere {
            position: absolute;
            top: -26px;
            left: -26px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: radial-gradient(circle at 32% 28%, #d9ccf7 0%, #9b78e0 38%, #6a3dc4 68%, #4a2392 100%);
            box-shadow: 0 6px 12px rgba(74, 35, 146, .35);
            pointer-events: none;
        }

        /* glass cube, bottom-right corner */
        .ms-cf-cube {
            position: absolute;
            right: -18px;
            bottom: -34px;
            width: 62px;
            height: 62px;
            transform: rotate(-10deg);
            pointer-events: none;
            filter: drop-shadow(0 6px 8px rgba(0, 0, 0, .12));
        }

        .ms-cf-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 12px;
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
            height: 38px;
            padding: 0 16px;
            border: 1px solid transparent;
            border-radius: 50px;
            background: #ececec;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .08);
            font-family: var(--font-body);
            font-size: 12px;
            font-weight: 400;
            color: #222;
            outline: none;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .ms-cf select {
            appearance: none;
            -webkit-appearance: none;
            padding-right: 34px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23111' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 13px center;
            background-size: 12px;
            cursor: pointer;
        }

        .ms-cf input::placeholder {
            color: #3a3a3a;
            opacity: 1;
        }

        .ms-cf input:focus,
        .ms-cf select:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 3px rgba(90, 46, 166, .15);
        }

        .ms-cf-terms {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 18px 0 20px 2px;
            font-size: 12px;
            line-height: 1.6;
            color: #000;
            cursor: pointer;
        }

        .ms-cf-terms input {
            flex: 0 0 auto;
            width: 14px;
            height: 14px;
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
            padding: 11px 30px;
            border: 0;
            border-radius: 50px;
            background: var(--purple-dark);
            color: #fff;
            font-family: var(--font-head);
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 6px 14px rgba(74, 35, 146, .30);
            transition: background .2s ease, transform .2s ease;
        }

        .ms-cf-btn:hover {
            background: #3b1e6d;
            transform: translateY(-1px);
        }

        .ms-cf-msg {
            margin-bottom: 16px;
            padding: 12px 16px;
            border-radius: 14px;
            font-size: 12.5px;
            line-height: 1.6;
        }

        .ms-cf-msg--ok {
            background: #e6f6ef;
            color: #14683f;
        }

        .ms-cf-msg--err {
            background: #fdecec;
            color: #9b1c1c;
        }

        .ms-cf-msg ul {
            margin: 0;
            padding-left: 18px;
        }

        .ms-cf-hp {
            position: absolute;
            left: -9999px;
            height: 0;
            overflow: hidden;
        }

        /* ---------- image (cut-out PNG, shown as-is) ---------- */
        .ms-cf-image img {
            display: block;
            width: 100%;
            height: auto;
        }

        @media (max-width: 1000px) {
            .ms-cf-wrap {
                grid-template-columns: minmax(0, 500px) minmax(0, 280px);
                gap: 50px;
            }
        }

        @media (max-width: 860px) {
            .ms-cf-wrap {
                grid-template-columns: minmax(0, 560px);
            }

            .ms-cf-image {
                display: none;
                /* image hidden on tablet/mobile, like the original */
            }
        }

        @media (max-width: 767px) {
            .ms-cf {
                padding: 45px 18px 55px;
            }

            .ms-cf-card {
                padding: 22px 16px 24px;
            }

            .ms-cf-row {
                grid-template-columns: 1fr;
                gap: 10px;
                margin-bottom: 10px;
            }

            .ms-cf-sphere {
                top: -18px;
                left: -10px;
                width: 32px;
                height: 32px;
            }

            .ms-cf-cube {
                right: -8px;
                bottom: -28px;
                width: 52px;
                height: 52px;
            }
        }
    </style>

    <div class="ms-cf-wrap">
        <div class="ms-cf-card">
            <span class="ms-cf-sphere" aria-hidden="true"></span>

            <svg class="ms-cf-cube" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <defs>
                    <linearGradient id="ms-cf-top" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0" stop-color="#ffffff" stop-opacity=".95" />
                        <stop offset="1" stop-color="#cfe0ea" stop-opacity=".55" />
                    </linearGradient>
                    <linearGradient id="ms-cf-left" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0" stop-color="#e3edf3" stop-opacity=".75" />
                        <stop offset="1" stop-color="#9fb4c2" stop-opacity=".45" />
                    </linearGradient>
                    <linearGradient id="ms-cf-right" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0" stop-color="#bccddb" stop-opacity=".6" />
                        <stop offset="1" stop-color="#7f95a6" stop-opacity=".5" />
                    </linearGradient>
                </defs>
                <polygon points="10,30 50,50 50,92 10,70" fill="url(#ms-cf-left)" stroke="#8fa1ae" stroke-width="1.6" stroke-linejoin="round" />
                <polygon points="50,50 90,30 90,70 50,92" fill="url(#ms-cf-right)" stroke="#8fa1ae" stroke-width="1.6" stroke-linejoin="round" />
                <polygon points="50,10 90,30 50,50 10,30" fill="url(#ms-cf-top)" stroke="#8fa1ae" stroke-width="1.6" stroke-linejoin="round" />
                <!-- inner glass edges -->
                <polyline points="50,50 50,92" fill="none" stroke="#ffffff" stroke-opacity=".8" stroke-width="1.2" />
                <polyline points="22,36 50,50 78,36" fill="none" stroke="#ffffff" stroke-opacity=".7" stroke-width="1.2" />
                <polyline points="22,44 22,64" fill="none" stroke="#ffffff" stroke-opacity=".6" stroke-width="1.2" />
            </svg>

            <form id="ms-cf-form" method="POST" action="<?php echo BASE; ?>home-page/submit-contact.php" novalidate>
                <div class="ms-cf-hp" aria-hidden="true">
                    <label>Leave this field empty <input type="text" name="website_hp" tabindex="-1" autocomplete="off"></label>
                </div>

                <div class="ms-cf-row">
                    <div class="ms-cf-field">
                        <label class="ms-cf-sr" for="ms-cf-name">Name</label>
                        <input type="text" id="ms-cf-name" name="name" placeholder="Enter Your Full Name" aria-required="true" required>
                    </div>
                    <div class="ms-cf-field">
                        <label class="ms-cf-sr" for="ms-cf-business">Business Name</label>
                        <input type="text" id="ms-cf-business" name="business_name" placeholder="Business Name" aria-required="true" required>
                    </div>
                </div>

                <div class="ms-cf-row">
                    <div class="ms-cf-field">
                        <label class="ms-cf-sr" for="ms-cf-phone">Phone Number</label>
                        <input type="tel" id="ms-cf-phone" name="phone" inputmode="tel" placeholder="Phone Number" aria-required="true" required>
                    </div>
                    <div class="ms-cf-field">
                        <label class="ms-cf-sr" for="ms-cf-email">Email</label>
                        <input type="email" id="ms-cf-email" name="email" placeholder="Email Address" aria-required="true" required>
                    </div>
                </div>

                <div class="ms-cf-row">
                    <div class="ms-cf-field">
                        <label class="ms-cf-sr" for="ms-cf-url">Website Url</label>
                        <input type="url" id="ms-cf-url" name="website" placeholder="Website Url">
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
                <div id="ms-cf-msg" class="ms-cf-msg" role="status" hidden style="margin:16px 0 0"></div>
            </form>
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
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(function(r) {
                        return r.json();
                    })
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