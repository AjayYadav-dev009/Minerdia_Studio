<?php
$steps = [
    ['Strategy Planning', 'We start by understanding your business goals and target audience. We then create a media strategy that is just right for your brand.'],
    ['Content Creation', 'Our team makes posts, reels and videos that reflect your brand. These attract the people.'],
    ['Scheduling & Publishing', 'We Schedule content at the right time. This helps maximize reach and engagement.'],
    ['Community Management', 'We manage your media interactions. We respond to comments and messages. This helps build trust and loyalty.'],
    ['Performance Tracking & Optimization', 'We analyze data and optimize strategies. This helps us get results.'],
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',
    'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana',
    'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands', 'Chandigarh',
    'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-smfeatures">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Lato:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-smfeatures,
        .ms-smfeatures * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise the sticky form stops working */
        .ms-smfeatures {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-smfeatures-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr);
            gap: 31px;
            align-items: start;
        }

        /* ---------- Left ---------- */
        .ms-smfeatures-label {
            display: block;
            margin: 0 0 8px;
            font-family: 'Lato', Arial, sans-serif;
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-smfeatures-title {
            margin: 0 0 14px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-smfeatures-intro {
            margin: 0 0 30px;
            max-width: 500px;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 300;
            color: #222;
        }

        .ms-smfeat-list {
            display: grid;
            gap: 19px;
        }

        .ms-smfeat-card {
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

        .ms-smfeat-card:hover {
            transform: translateY(-4px);
        }

        .ms-smfeat-icon {
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

        .ms-smfeat-card h3 {
            margin: 0 0 6px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-smfeat-card p {
            margin: 0;
            font-size: 15.5px;
            line-height: 1.6;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right: sticky form ---------- */
        /* Sticky is handled by JS at the bottom of this file (works even if a parent has overflow:hidden) */
        .ms-smfeatures-form-col {
            align-self: start;
            will-change: transform;
        }

        .ms-smform-card {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-smform-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-smform-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-smform-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-smform-field input,
        .ms-smform-field select {
            width: 100%;
            height: 38px;
            padding: 0 16px;
            border-radius: 50px;
            border: 1px solid #dcdcdc;
            background: #efefef;
            font-family: 'Inter', Arial, sans-serif;
            font-size: 13px;
            color: #444;
            outline: none;
            transition: .25s ease;
        }

        .ms-smform-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-smform-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-smform-field input:focus,
        .ms-smform-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-smform-submit {
            display: block;
            margin: 22px auto 0;
            padding: 0 22px;
            height: 42px;
            border-radius: 50px;
            border: 1px solid #3d1f7a;
            background: var(--purple);
            color: #fff;
            font-family: 'Lato', Arial, sans-serif;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s ease;
        }

        .ms-smform-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-smfeatures-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-smfeatures-form-col {
                position: static;
            }

            .ms-smfeatures-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-smfeatures {
                padding: 35px 14px 45px;
            }

            .ms-smfeatures-title {
                font-size: 26px;
            }

            .ms-smfeatures-intro {
                font-size: 15px;
            }

            .ms-smfeat-card {
                padding: 16px 16px 14px 10px;
            }

            .ms-smfeat-card h3 {
                font-size: 18px;
            }

            .ms-smfeat-card p {
                font-size: 14.5px;
            }

            .ms-smform-card {
                padding: 22px 18px;
            }

            .ms-smform-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-smfeatures-wrap">

        <div class="ms-smfeatures-left">
            <span class="ms-smfeatures-label">Features</span>
            <h2 class="ms-smfeatures-title">Social Media Management Process</h2>
            <p class="ms-smfeatures-intro">
                We have a process to manage media. This helps your brand grow on Instagram, Facebook and YouTube. We make content that's engaging and creative. This helps your brand do well.<br>
                We use strategies and data to keep your brand active and relevant. This helps you stay ahead of your competitors.
            </p>

            <div class="ms-smfeat-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-smfeat-card">
                        <div class="ms-smfeat-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-smfeatures-form-col">
            <form class="ms-smform-card" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <input type="hidden" name="source_page" value="Social Media Management">
                <div class="ms-smform-grid">
                    <div class="ms-smform-field">
                        <label for="ms-smf-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-smf-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-smform-field">
                        <label for="ms-smf-email">Email <span>*</span></label>
                        <input type="email" id="ms-smf-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-smform-field">
                        <label for="ms-smf-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-smf-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-smform-field">
                        <label for="ms-smf-state">States <span>*</span></label>
                        <select id="ms-smf-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="ms-smform-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-smfeatures-wrap');
            var col = document.querySelector('.ms-smfeatures-form-col');
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