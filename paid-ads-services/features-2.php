<?php
$steps = [
    ['Consultation and Planning', 'We begin with a thorough consultation to understand your objectives and audience. Our team collaborates with you to plan the podcast\'s format, themes, and schedule.'],
    ['Content Creation', 'Our creative team develops engaging scripts and content tailored to your brand\'s voice. We ensure each episode adds value and maintains consistency.'],
    ['Recording and Production', 'Utilising our advanced studio facilities, we manage the recording sessions, ensuring optimal sound quality. Our skilled producers handle the editing process, adding music, sound effects, and final touches.'],
    ['Ongoing Support', 'We provide ongoing support and guidance, helping you navigate the podcasting landscape. From new episode planning to audience feedback, we are with you every step of the way.'],
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',
    'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana',
    'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands', 'Chandigarh',
    'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-features">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-features,
        .ms-features * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise position:sticky stops working */
        .ms-features {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-features-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-features-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-features-title {
            margin: 0 0 28px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-features-title span {
            color: var(--purple);
        }

        .ms-features-intro {
            margin: 0 0 30px;
            max-width: 500px;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 300;
            color: #222;
        }

        .ms-step-list {
            display: grid;
            gap: 19px;
        }

        .ms-step-card {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 18px 20px 16px 10px;
            border-radius: 26px;
            background: #f6f6f6;
            box-shadow:
                0 6px 16px rgba(0, 0, 0, .22),
                0 12px 30px rgba(90, 46, 166, .16),
                -10px 10px 26px rgba(90, 46, 166, .20) !important;
            transition: .3s ease;
        }

        .ms-step-card:hover {
            transform: translateY(-4px);
        }

        .ms-step-icon {
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--purple);
            color: #fff;
            font-size: 19px;
            margin-top: 4px;
        }

        .ms-step-card h3 {
            margin: 0 0 6px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-step-card p {
            margin: 0;
            font-size: 15.5px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-features-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-form-card {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-form-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-form-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-form-field input,
        .ms-form-field select {
            width: 100%;
            height: 38px;
            padding: 0 16px;
            border-radius: 50px;
            border: 1px solid #dcdcdc;
            background: #efefef;
            font-family: var(--font-body);
            font-size: 13px;
            color: #444;
            outline: none;
            transition: .25s ease;
        }

        .ms-form-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-form-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-form-field input:focus,
        .ms-form-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-form-submit {
            display: block;
            margin: 22px auto 0;
            padding: 0 22px;
            height: 42px;
            border-radius: 50px;
            border: 1px solid #3d1f7a;
            background: var(--purple);
            color: #fff;
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s ease;
        }

        .ms-form-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Terms & Privacy consent ---------- */
        .ms-features .ms-consent {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 20px 0 0;
            font-size: 13px;
            line-height: 1.5;
            font-weight: 400;
            color: #222;
            cursor: pointer;
        }

        .ms-features .ms-consent input[type="checkbox"] {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            margin: 1px 0 0;
            padding: 0;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-features .ms-consent a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-features .ms-consent a:hover {
            opacity: .8;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-features-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-features-form-col {
                position: static;
            }

            .ms-features-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-features {
                padding: 35px 14px 45px;
            }

            .ms-features-title {
                font-size: 26px;
            }

            .ms-features-intro {
                font-size: 15px;
            }

            .ms-step-card {
                padding: 16px 16px 14px 10px;
            }

            .ms-step-card h3 {
                font-size: 18px;
            }

            .ms-step-card p {
                font-size: 14.5px;
            }

            .ms-form-card {
                padding: 22px 18px;
            }

            .ms-form-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-features-wrap">

        <div class="ms-features-left">
            <h2 class="ms-features-title">Are you ready to work with the last paid advertising agency you will ever need?</h2>

            <div class="ms-step-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-step-card">
                        <div class="ms-step-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-features-form-col">
            <form class="ms-form-card" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="hidden" name="source_page" value="Paid Advertising">
                <input type="text" name="ms_trap_q7" value="" tabindex="-1" autocomplete="nope" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <div class="ms-form-grid">
                    <div class="ms-form-field">
                        <label for="ms-f-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-f-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-form-field">
                        <label for="ms-f-email">Email <span>*</span></label>
                        <input type="email" id="ms-f-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-form-field">
                        <label for="ms-f-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-f-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-form-field">
                        <label for="ms-f-state">States <span>*</span></label>
                        <select id="ms-f-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <label class="ms-consent" for="ms-f-consent">
                    <input type="checkbox" id="ms-f-consent" name="consent" value="yes" required>
                    <span>I have read and agree to the
                        <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                        and
                        <a href="<?php echo BASE; ?>privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                </label>

                <button type="submit" class="ms-form-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-features-wrap');
            var col = document.querySelector('.ms-features-form-col');
            if (!wrap || !col) return;

            var TOP = 100; // distance from top of screen (px) - increase if you have a fixed header
            var ticking = false;

            function update() {
                ticking = false;
                if (window.innerWidth <= 991) {
                    col.style.transform = '';
                    return;
                }
                var w = wrap.getBoundingClientRect();
                var max = wrap.offsetHeight - col.offsetHeight;
                var shift = Math.max(0, Math.min(TOP - w.top, max));
                col.style.transform = 'translate3d(0,' + shift + 'px,0)';
            }

            function request() {
                if (!ticking) {
                    ticking = true;
                    requestAnimationFrame(update);
                }
            }

            window.addEventListener('scroll', request, true);
            window.addEventListener('resize', request);
            window.addEventListener('load', request);
            update();
        })();
    </script>
</section>