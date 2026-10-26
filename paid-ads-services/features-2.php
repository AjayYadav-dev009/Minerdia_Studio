<?php
$steps = [
    ['Consultation and Planning', 'We begin with a thorough consultation to understand your objectives and audience. Our team collaborates with you to plan the podcast\'s format, themes, and schedule.'],
    ['Content Creation', 'Our creative team develops engaging scripts and content tailored to your brand\'s voice. We ensure each episode adds value and maintains consistency.'],
    ['Recording and Production', 'Utilising our advanced studio facilities, we manage the recording sessions, ensuring optimal sound quality. Our skilled producers handle the editing process, adding music, sound effects, and final touches.'],
    ['Ongoing Support', 'We provide ongoing support and guidance, helping you navigate the podcasting landscape. From new episode planning to audience feedback, we are with you every step of the way.'],
];

$services = [
    'Google Ads', 'Facebook Ads', 'Instagram Ads', 'Youtube Ads', 'Linkedin Ads',
    'Social Media Marketing', 'SEO', 'Designing & Video Editing', 'Website Development', 'Podcast Production',
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',
    'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana',
    'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands', 'Chandigarh',
    'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-agency">
    <style>
        .ms-agency {
            --purple: #5A2EA6;
            width: 100%;
            padding: 64px 20px 90px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-agency-wrap {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 1fr);
            gap: 44px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-agency-title {
            margin: 0 0 34px;
            max-width: 600px;
            font-family: var(--font-head);
            font-size: 28px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-agency-list {
            display: grid;
            gap: 24px;
        }

        .ms-agency-card {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 26px 28px 26px 22px;
            border-radius: 24px;
            background: #f6f6f6;
            box-shadow:
                0 6px 16px rgba(0, 0, 0, .14),
                0 10px 26px rgba(90, 46, 166, .12),
                -10px 10px 24px rgba(90, 46, 166, .16);
            transition: .3s ease;
        }

        .ms-agency-card:hover {
            transform: translateY(-4px);
        }

        .ms-agency-icon {
            width: 52px;
            height: 52px;
            flex: 0 0 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--purple);
            color: #fff;
        }

        .ms-agency-icon svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        .ms-agency-card h3 {
            margin: 0 0 8px;
            font-family: var(--font-head);
            font-size: 20px;
            line-height: 1.3;
            font-weight: 600;
            color: #000;
        }

        .ms-agency-card p {
            margin: 0;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-agency-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-aform-card {
            padding: 36px 32px 36px;
            border-radius: 20px;
            background: #f6f6f6;
            box-shadow: 0 8px 26px rgba(0, 0, 0, .12);
        }

        .ms-aform-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 16px;
        }

        .ms-aform-field.is-full {
            grid-column: 1 / -1;
        }

        .ms-aform-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 500;
            color: #111;
        }

        .ms-aform-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-aform-field input,
        .ms-aform-field select {
            width: 100%;
            height: 50px;
            padding: 0 20px;
            border-radius: 50px;
            border: 1px solid #dcdcdc;
            background: #efefef;
            font-family: var(--font-body);
            font-size: 14.5px;
            color: #333;
            outline: none;
            transition: .25s ease;
        }

        .ms-aform-field select {
            padding: 0 16px;
            cursor: pointer;
        }

        .ms-aform-field input::placeholder {
            color: #7d7d7d;
        }

        .ms-aform-field input:focus,
        .ms-aform-field select:focus {
            border-color: var(--purple);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(90, 46, 166, .14);
        }

        .ms-aform-submit {
            display: block;
            margin: 28px auto 0;
            padding: 0 40px;
            height: 50px;
            border-radius: 50px;
            border: 1px solid #3d1f7a;
            background: var(--purple);
            color: #fff;
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s ease;
        }

        .ms-aform-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Terms & Privacy consent ---------- */
        .ms-agency .ms-consent {
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

        .ms-agency .ms-consent input[type="checkbox"] {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            margin: 1px 0 0;
            padding: 0;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-agency .ms-consent a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-agency .ms-consent a:hover {
            opacity: .8;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 1100px) {
            .ms-agency-title {
                font-size: 32px;
            }
        }

        @media (max-width: 991px) {
            .ms-agency-wrap {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .ms-agency-title {
                max-width: none;
            }
        }

        @media (max-width: 575px) {
            .ms-agency {
                padding: 40px 14px 56px;
            }

            .ms-agency-title {
                font-size: 26px;
                margin-bottom: 24px;
            }

            .ms-agency-card {
                padding: 20px 18px;
                gap: 14px;
            }

            .ms-agency-icon {
                width: 44px;
                height: 44px;
                flex-basis: 44px;
            }

            .ms-agency-card h3 {
                font-size: 19px;
            }

            .ms-aform-card {
                padding: 26px 18px;
            }

            .ms-aform-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .ms-aform-submit {
                width: 100%;
            }
        }
    </style>

    <div class="ms-agency-wrap">

        <div class="ms-agency-left">
            <h2 class="ms-agency-title">Are you ready to work with the last paid advertising agency you will ever need?</h2>

            <div class="ms-agency-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-agency-card">
                        <div class="ms-agency-icon"><svg viewBox="0 0 512 512" aria-hidden="true"><path d="M428.8 137.6h-86.177a115.52 115.52 0 0 0 2.176-22.4c0-47.914-35.072-83.2-92-83.2-45.314 0-57.002 48.537-75.707 78.784-7.735 12.413-16.994 23.317-25.851 33.253l-.131.146-.129.148C135.662 161.807 127.764 168 120.8 168h-2.679c-5.747-4.952-13.536-8-22.12-8H32c-17.673 0-32 12.894-32 28.8v230.4C0 435.106 14.327 448 32 448h64c8.584 0 16.373-3.048 22.12-8h2.679c28.688 0 67.137 40 127.2 40h21.299c62.542 0 98.8-38.658 99.94-91.145 12.482-17.813 18.491-40.785 15.985-62.791A93.148 93.148 0 0 0 393.152 304H428.8c45.435 0 83.2-37.584 83.2-83.2 0-45.099-38.101-83.2-83.2-83.2zm0 118.4h-91.026c12.837 14.669 14.415 42.825-4.95 61.05 11.227 19.646 1.687 45.624-12.925 53.625 6.524 39.128-10.076 61.325-50.6 61.325H248c-45.491 0-77.21-35.913-120-39.676V215.571c25.239-2.964 42.966-21.222 59.075-39.596 11.275-12.65 21.725-25.3 30.799-39.875C232.355 112.712 244.006 80 252.8 80c23.375 0 44 8.8 44 35.2 0 35.2-26.4 53.075-26.4 70.4h158.4c18.425 0 35.2 16.5 35.2 35.2 0 18.975-16.225 35.2-35.2 35.2zM88 384c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z"></path></svg></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-agency-form-col">
            <form class="ms-aform-card" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <input type="hidden" name="source_page" value="Paid Advertising">
                <div class="ms-aform-grid">
                    <div class="ms-aform-field">
                        <label for="ms-af-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-af-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-aform-field">
                        <label for="ms-af-email">Email <span>*</span></label>
                        <input type="email" id="ms-af-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-aform-field">
                        <label for="ms-af-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-af-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-aform-field">
                        <label for="ms-af-state">States <span>*</span></label>
                        <select id="ms-af-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="ms-aform-field is-full">
                        <label for="ms-af-service">Services <span>*</span></label>
                        <select id="ms-af-service" name="service" required>
                            <option value="">- Select -</option>
                            <?php foreach ($services as $sv) : ?>
                                <option value="<?php echo htmlspecialchars($sv); ?>"><?php echo htmlspecialchars($sv); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <label class="ms-consent" for="ms-af-consent">
                    <input type="checkbox" id="ms-af-consent" name="consent" value="yes" required>
                    <span>I have read and agree to the
                        <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                        and
                        <a href="<?php echo BASE; ?>privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                </label>

                <button type="submit" class="ms-aform-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-agency-wrap');
            var col = document.querySelector('.ms-agency-form-col');
            if (!wrap || !col) return;

            var TOP = 130; // distance from top of screen (px) - increase if you have a fixed header
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