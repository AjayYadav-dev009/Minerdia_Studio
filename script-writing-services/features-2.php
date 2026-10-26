<?php
$intro = 'If you need scriptwriters in India, you can count on Minerdia Studio. We write scripts that people enjoy and easily understand. These scripts help companies and creators make videos and shows. You can get scripts for YouTube, ads, short videos, podcasts or promotions from us. Our team helps you create content that feels genuine and experienced, and that connects with your audience. Minerdia Studio makes sure your content sounds good.';

$steps = [
    ['Clear Communication', 'We present ideas in an easy-to-follow way and communicate them clearly.'],
    ['Audience-Focused Writing', 'Scripts are written around the interests of your audience and the purpose of the content.'],
    ['Engaging Storytelling', 'Our scripts are created with audience retention and engagement in mind.'],
    ['Ongoing Support', 'We help you improve and optimize your content strategy over time.'],
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Delhi', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra',
    'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
    'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands',
    'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-swp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-swp,
        .ms-swp * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise the sticky form stops working */
        .ms-swp {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-swp-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-swp-title {
            margin: 0 0 18px;
            max-width: 430px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-swp-intro {
            margin: 0 0 24px;
            font-size: 14px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-swp-list {
            display: grid;
            gap: 19px;
        }

        .ms-swp-card {
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

        .ms-swp-card:hover {
            transform: translateY(-4px);
        }

        .ms-swp-icon {
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

        .ms-swp-card h3 {
            margin: 0 0 4px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-swp-card p {
            margin: 0;
            font-size: 15px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-swp-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-swp-form {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-swp-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-swp-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-swp-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-swp-field input,
        .ms-swp-field select {
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

        .ms-swp-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-swp-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-swp-field input:focus,
        .ms-swp-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-swp-submit {
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

        .ms-swp-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Terms & Privacy consent ---------- */
        .ms-swp .ms-consent {
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

        .ms-swp .ms-consent input[type="checkbox"] {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            margin: 1px 0 0;
            padding: 0;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-swp .ms-consent a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-swp .ms-consent a:hover {
            opacity: .8;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-swp-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-swp-title {
                max-width: none;
                font-size: 30px;
            }

            .ms-swp-form-col {
                position: static;
            }
        }

        @media (max-width: 575px) {
            .ms-swp {
                padding: 35px 14px 45px;
            }

            .ms-swp-title {
                font-size: 26px;
                text-align: center;
            }

            .ms-swp-intro {
                font-size: 14px;
            }

            .ms-swp-card {
                padding: 14px 16px 13px 10px;
                gap: 12px;
                border-radius: 22px;
            }

            .ms-swp-icon {
                width: 38px;
                height: 38px;
                flex-basis: 38px;
                font-size: 16px;
            }

            .ms-swp-card h3 {
                font-size: 17px;
            }

            .ms-swp-card p {
                font-size: 14px;
            }

            .ms-swp-form {
                padding: 22px 18px;
            }

            .ms-swp-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-swp-wrap">

        <div class="ms-swp-left">
            <h2 class="ms-swp-title">Get your scriptwriting project going today</h2>
            <p class="ms-swp-intro"><?php echo htmlspecialchars($intro); ?></p>

            <div class="ms-swp-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-swp-card">
                        <div class="ms-swp-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-swp-form-col">
            <form class="ms-swp-form" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <input type="hidden" name="source_page" value="Script Writing">
                <div class="ms-swp-grid">
                    <div class="ms-swp-field">
                        <label for="ms-swp-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-swp-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-swp-field">
                        <label for="ms-swp-email">Email <span>*</span></label>
                        <input type="email" id="ms-swp-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-swp-field">
                        <label for="ms-swp-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-swp-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-swp-field">
                        <label for="ms-swp-state">States <span>*</span></label>
                        <select id="ms-swp-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <label class="ms-consent" for="ms-swp-consent">
                    <input type="checkbox" id="ms-swp-consent" name="consent" value="yes" required>
                    <span>I have read and agree to the
                        <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                        and
                        <a href="<?php echo BASE; ?>privacy-policies/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                </label>

                <button type="submit" class="ms-swp-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-swp-wrap');
            var col = document.querySelector('.ms-swp-form-col');
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