<?php
$steps = [
    ['Creative Consultation & Planning', 'We understand your brand, target audience, content goal and platform requirement. This helps us plan the right design style, video format, hook and creative direction.'],
    ['Design & Content Creation', 'Our team creates scroll-stopping social media creatives, thumbnails, ad graphics and brand visuals with clean layout, readable text and strong visual appeal.'],
    ['Video Editing & Production', 'We edit Reels, YouTube videos, podcast clips and ad videos with smooth cuts, captions, transitions, sound balancing, B-roll and platform-ready export.'],
    ['Review, Delivery & Support', 'We review every creative for quality, branding and clarity. Final files are delivered in the right size and format for Instagram, Facebook, YouTube, LinkedIn and ads.'],
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',
    'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana',
    'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands', 'Chandigarh',
    'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-dfeatures">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-dfeatures,
        .ms-dfeatures * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise position:sticky stops working */
        .ms-dfeatures {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-dfeatures-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-dfeatures-label {
            display: block;
            margin: 0 0 8px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-dfeatures-title {
            margin: 0 0 14px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-dfeatures-title span {
            color: var(--purple);
        }

        .ms-dfeatures-intro {
            margin: 0 0 30px;
            max-width: 500px;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 300;
            color: #222;
        }

        .ms-dfeat-list {
            display: grid;
            gap: 19px;
        }

        .ms-dfeat-card {
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

        .ms-dfeat-card:hover {
            transform: translateY(-4px);
        }

        .ms-dfeat-icon {
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

        .ms-dfeat-card h3 {
            margin: 0 0 6px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-dfeat-card p {
            margin: 0;
            font-size: 15.5px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-dfeatures-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-dform-card {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-dform-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-dform-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-dform-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-dform-field input,
        .ms-dform-field select {
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

        .ms-dform-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-dform-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-dform-field input:focus,
        .ms-dform-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-dform-submit {
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

        .ms-dform-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-dfeatures-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-dfeatures-form-col {
                position: static;
            }

            .ms-dfeatures-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-dfeatures {
                padding: 35px 14px 45px;
            }

            .ms-dfeatures-title {
                font-size: 26px;
            }

            .ms-dfeatures-intro {
                font-size: 15px;
            }

            .ms-dfeat-card {
                padding: 16px 16px 14px 10px;
            }

            .ms-dfeat-card h3 {
                font-size: 18px;
            }

            .ms-dfeat-card p {
                font-size: 14.5px;
            }

            .ms-dform-card {
                padding: 22px 18px;
            }

            .ms-dform-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-dfeatures-wrap">

        <div class="ms-dfeatures-left">
            <span class="ms-dfeatures-label">Features</span>
            <h2 class="ms-dfeatures-title">Creative Design &amp; Editing Process</h2>
            <p class="ms-dfeatures-intro">We follow a clear creative workflow so every design and video looks premium, stays on-brand and performs better across social media, YouTube, ads and websites.</p>

            <div class="ms-dfeat-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-dfeat-card">
                        <div class="ms-dfeat-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-dfeatures-form-col">
            <form class="ms-dform-card" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <input type="hidden" name="source_page" value="Designing &amp; Video Editing">
                <div class="ms-dform-grid">
                    <div class="ms-dform-field">
                        <label for="ms-df-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-df-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-dform-field">
                        <label for="ms-df-email">Email <span>*</span></label>
                        <input type="email" id="ms-df-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-dform-field">
                        <label for="ms-df-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-df-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-dform-field">
                        <label for="ms-df-state">States <span>*</span></label>
                        <select id="ms-df-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="ms-dform-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-dfeatures-wrap');
            var col = document.querySelector('.ms-dfeatures-form-col');
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