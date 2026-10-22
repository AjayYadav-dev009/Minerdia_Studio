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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-agency,
        .ms-agency * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise the sticky form stops working */
        .ms-agency {
            --purple: #5A2EA6;
            width: 100%;
            padding: 40px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-agency-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-agency-title {
            margin: 0 0 22px;
            max-width: 470px;
            font-size: 24px;
            line-height: 1.35;
            font-weight: 600;
            color: #000;
        }

        .ms-agency-list {
            display: grid;
            gap: 19px;
        }

        .ms-agency-card {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 16px 20px 14px 10px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow:
                0 6px 16px rgba(0, 0, 0, .18),
                0 10px 26px rgba(90, 46, 166, .14),
                -10px 10px 24px rgba(90, 46, 166, .18);
            transition: .3s ease;
        }

        .ms-agency-card:hover {
            transform: translateY(-4px);
        }

        .ms-agency-icon {
            width: 36px;
            height: 36px;
            flex: 0 0 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--purple);
            color: #fff;
            font-size: 15px;
            margin-top: 2px;
        }

        .ms-agency-card h3 {
            margin: 0 0 4px;
            font-size: 16px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-agency-card p {
            margin: 0;
            font-size: 12.5px;
            line-height: 1.6;
            font-weight: 300;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-agency-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-aform-card {
            padding: 22px 16px 22px;
            border-radius: 10px;
            background: #f6f6f6;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .10);
        }

        .ms-aform-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px 10px;
        }

        .ms-aform-field.is-full {
            grid-column: 1 / -1;
        }

        .ms-aform-field label {
            display: block;
            margin-bottom: 6px;
            font-size: 11px;
            font-weight: 400;
            color: #111;
        }

        .ms-aform-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-aform-field input,
        .ms-aform-field select {
            width: 100%;
            height: 32px;
            padding: 0 14px;
            border-radius: 50px;
            border: 1px solid #dcdcdc;
            background: #efefef;
            font-family: var(--font-body);
            font-size: 10.5px;
            color: #444;
            outline: none;
            transition: .25s ease;
        }

        .ms-aform-field select {
            padding: 0 10px;
            cursor: pointer;
        }

        .ms-aform-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-aform-field input:focus,
        .ms-aform-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-aform-submit {
            display: block;
            margin: 16px auto 0;
            padding: 0 22px;
            height: 34px;
            border-radius: 50px;
            border: 1px solid #3d1f7a;
            background: var(--purple);
            color: #fff;
            font-family: var(--font-body);
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s ease;
        }

        .ms-aform-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-agency-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-agency-title {
                max-width: none;
            }
        }

        @media (max-width: 575px) {
            .ms-agency {
                padding: 30px 14px 45px;
            }

            .ms-agency-title {
                font-size: 21px;
            }

            .ms-aform-card {
                padding: 20px 16px;
            }

            .ms-aform-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }

            .ms-aform-field label {
                font-size: 12.5px;
            }

            .ms-aform-field input,
            .ms-aform-field select {
                height: 38px;
                font-size: 13px;
            }
        }
    </style>

    <div class="ms-agency-wrap">

        <div class="ms-agency-left">
            <h2 class="ms-agency-title">Are you ready to work with the last paid advertising agency you will ever need?</h2>

            <div class="ms-agency-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-agency-card">
                        <div class="ms-agency-icon"><i class="fa-regular fa-hand-point-right"></i></div>
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
                <button type="submit" class="ms-aform-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-agency-wrap');
            var col = document.querySelector('.ms-agency-form-col');
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