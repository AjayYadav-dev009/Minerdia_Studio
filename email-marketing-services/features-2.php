<?php
$intro = 'A good email campaign can help your business stay in touch with customers, get them more involved and make sales. At Minerdia Studio, we make email campaigns that fit your business goals and what your customers like. We think email marketing should be helpful and feel natural, not like someone is trying to sell to you all the time. That is why our team makes <strong>email content</strong> that customers like to read and interact with. Our Email Marketing Services are made to help businesses talk to customers better, get more people interested and build long-term customer loyalty with smart campaigns and automation. If you want more people to visit your website, keep customers coming back or sell more, our team helps you make email campaigns that really help your business grow.';

$steps = [
    ['Clear Communication', 'We make everything easy to understand so you always know how your email campaigns are doing.'],
    ['Business-Focused Strategy', 'Our email marketing plans are made for your business, your customers and your industry.'],
    ['Consistent Optimization', 'We keep improving our email campaigns by trying new things, tracking results and looking at what customers do.'],
    ['Ongoing Support', 'Our team is always here to help and make your email campaigns better over time.'],
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Delhi', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra',
    'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
    'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands',
    'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-emg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-emg,
        .ms-emg * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise the sticky form stops working */
        .ms-emg {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-emg-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-emg-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-emg-title {
            margin: 0 0 18px;
            max-width: 430px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-emg-intro {
            margin: 0 0 24px;
            font-size: 14px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-emg-list {
            display: grid;
            gap: 19px;
        }

        .ms-emg-card {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 20px 15px 12px;
            border-radius: 26px;
            background: #f6f6f6;
            box-shadow:
                0 6px 16px rgba(0, 0, 0, .22),
                0 12px 30px rgba(90, 46, 166, .16),
                -10px 10px 26px rgba(90, 46, 166, .20);
            transition: .3s ease;
        }

        .ms-emg-card:hover {
            transform: translateY(-4px);
        }

        .ms-emg-icon {
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
        }

        .ms-emg-card h3 {
            margin: 0 0 4px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-emg-card p {
            margin: 0;
            font-size: 15px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-emg-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-emg-form {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-emg-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-emg-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-emg-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-emg-field input,
        .ms-emg-field select {
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

        .ms-emg-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-emg-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-emg-field input:focus,
        .ms-emg-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-emg-submit {
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

        .ms-emg-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Terms & Privacy consent ---------- */
        .ms-emg .ms-consent {
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

        .ms-emg .ms-consent input[type="checkbox"] {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            margin: 1px 0 0;
            padding: 0;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-emg .ms-consent a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-emg .ms-consent a:hover {
            opacity: .8;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-emg-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-emg-title {
                max-width: none;
                font-size: 30px;
            }

            .ms-emg-form-col {
                position: static;
            }
        }

        @media (max-width: 575px) {
            .ms-emg {
                padding: 35px 14px 45px;
            }

            .ms-emg-label {
                font-size: 16px;
                text-align: center;
            }

            .ms-emg-title {
                font-size: 26px;
                text-align: center;
            }

            .ms-emg-intro {
                font-size: 14px;
            }

            .ms-emg-card {
                padding: 14px 16px 13px 10px;
                gap: 12px;
                border-radius: 22px;
            }

            .ms-emg-icon {
                width: 38px;
                height: 38px;
                flex-basis: 38px;
                font-size: 16px;
            }

            .ms-emg-card h3 {
                font-size: 17px;
            }

            .ms-emg-card p {
                font-size: 14px;
            }

            .ms-emg-form {
                padding: 22px 18px;
            }

            .ms-emg-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-emg-wrap">

        <div class="ms-emg-left">
            <span class="ms-emg-label">Features</span>
            <h2 class="ms-emg-title">Grow Your Business with Email Marketing</h2>
            <p class="ms-emg-intro"><?php echo $intro; ?></p>

            <div class="ms-emg-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-emg-card">
                        <div class="ms-emg-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-emg-form-col">
            <form class="ms-emg-form" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <input type="hidden" name="source_page" value="Email Marketing">
                <div class="ms-emg-grid">
                    <div class="ms-emg-field">
                        <label for="ms-emg-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-emg-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-emg-field">
                        <label for="ms-emg-email">Email <span>*</span></label>
                        <input type="email" id="ms-emg-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-emg-field">
                        <label for="ms-emg-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-emg-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-emg-field">
                        <label for="ms-emg-state">States <span>*</span></label>
                        <select id="ms-emg-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <label class="ms-consent" for="ms-emg-consent">
                    <input type="checkbox" id="ms-emg-consent" name="consent" value="yes" required>
                    <span>I have read and agree to the
                        <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                        and
                        <a href="<?php echo BASE; ?>privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                </label>

                <button type="submit" class="ms-emg-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-emg-wrap');
            var col = document.querySelector('.ms-emg-form-col');
            if (!wrap || !col) return;

            var TOP = 150; // same as the original Elementor sticky offset (150px)
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