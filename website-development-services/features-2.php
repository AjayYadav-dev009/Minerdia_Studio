<?php
$intro = 'If you need a company to make a website in India Minerdia Studio can do that for you. A good website can really help you on the internet get the right people to look at it and make your business bigger. Tell Minerdia Studio what you want and the people who work there will show you the way to make a website that does what you want it to do. We Communicate Clearly We make everything simple and easy. This way you always know what is happening. Solutions That Help Your Business We give ideas and features that work best for your business. Fast and Easy to Use Your website will be fast. It will be easy to use. It will help you get results. Support After Launch We are here to help even after we finish your website.';

$steps = [
    ['We Communicate Clearly', 'We make everything simple and easy. This way you always know what is happening.'],
    ['Solutions That Help Your Business', 'We give ideas and features that work best for your business.'],
    ['Fast and Easy to Use', 'Your website will be fast. It will be easy to use. It will help you get results.'],
    ['Support After Launch', 'We are here to help even after we finish your website.'],
];

$states = [
    'Andhra Pradesh',
    'Arunachal Pradesh',
    'Assam',
    'Bihar',
    'Chhattisgarh',
    'Goa',
    'Gujarat',
    'Haryana',
    'Himachal Pradesh',
    'Jharkhand',
    'Karnataka',
    'Kerala',
    'Madhya Pradesh',
    'Maharashtra',
    'Manipur',
    'Meghalaya',
    'Mizoram',
    'Nagaland',
    'Odisha',
    'Punjab',
    'Rajasthan',
    'Sikkim',
    'Tamil Nadu',
    'Telangana',
    'Tripura',
    'Uttar Pradesh',
    'Uttarakhand',
    'West Bengal',
    'Andaman and Nicobar Islands',
    'Chandigarh',
    'Dadra and Nagar Haveli and Daman and Diu',
    'Delhi',
    'Jammu and Kashmir',
    'Ladakh',
    'Lakshadweep',
    'Puducherry',
];
?>
<section class="ms-wdp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-wdp,
        .ms-wdp * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise position:sticky stops working */
        .ms-wdp {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-wdp-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-wdp-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-wdp-title {
            margin: 0 0 14px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-wdp-title span {
            color: var(--purple);
        }

        .ms-wdp-intro {
            margin: 0 0 30px;
            max-width: none;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 300;
            color: #222;
        }

        .ms-wdp-step-list {
            display: grid;
            gap: 19px;
        }

        .ms-wdp-step-card {
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

        .ms-wdp-step-card:hover {
            transform: translateY(-4px);
        }

        .ms-wdp-step-icon {
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

        .ms-wdp-step-card h3 {
            margin: 0 0 6px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-wdp-step-card p {
            margin: 0;
            font-size: 15.5px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-wdp-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-wdp-form-card {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-wdp-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-wdp-form-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-wdp-form-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-wdp-form-field input,
        .ms-wdp-form-field select {
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

        .ms-wdp-form-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-wdp-form-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-wdp-form-field input:focus,
        .ms-wdp-form-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-wdp-form-submit {
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

        .ms-wdp-form-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Terms & Privacy consent ---------- */
        .ms-wdp .ms-wdp-consent {
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

        .ms-wdp .ms-wdp-consent input[type="checkbox"] {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            margin: 1px 0 0;
            padding: 0;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-wdp .ms-wdp-consent a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-wdp .ms-wdp-consent a:hover {
            opacity: .8;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-wdp-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-wdp-form-col {
                position: static;
            }

            .ms-wdp-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-wdp {
                padding: 35px 14px 45px;
            }

            .ms-wdp-title {
                font-size: 26px;
            }

            .ms-wdp-intro {
                font-size: 15px;
            }

            .ms-wdp-step-card {
                padding: 16px 16px 14px 10px;
            }

            .ms-wdp-step-card h3 {
                font-size: 18px;
            }

            .ms-wdp-step-card p {
                font-size: 14.5px;
            }

            .ms-wdp-form-card {
                padding: 22px 18px;
            }

            .ms-wdp-form-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-wdp-wrap">

        <div class="ms-wdp-left">
            <h2 class="ms-wdp-title">Start Your Website Project Today</h2>
            <p class="ms-wdp-intro"><?php echo htmlspecialchars($intro); ?></p>

            <div class="ms-wdp-step-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-wdp-step-card">
                        <div class="ms-wdp-step-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-wdp-form-col">
            <form class="ms-wdp-form-card" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="hidden" name="source_page" value="Website Development">
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <div class="ms-wdp-form-grid">
                    <div class="ms-wdp-form-field">
                        <label for="ms-wdp-f-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-wdp-f-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-wdp-form-field">
                        <label for="ms-wdp-f-email">Email <span>*</span></label>
                        <input type="email" id="ms-wdp-f-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-wdp-form-field">
                        <label for="ms-wdp-f-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-wdp-f-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-wdp-form-field">
                        <label for="ms-wdp-f-state">States <span>*</span></label>
                        <select id="ms-wdp-f-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <label class="ms-wdp-consent" for="ms-wdp-f-consent">
                    <input type="checkbox" id="ms-wdp-f-consent" name="consent" value="yes" required>
                    <span>I have read and agree to the
                        <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                        and
                        <a href="<?php echo BASE; ?>privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                </label>

                <button type="submit" class="ms-wdp-form-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-wdp-wrap');
            var col = document.querySelector('.ms-wdp-form-col');
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