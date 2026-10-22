<?php
$intro = 'If you need a company to make a website in India Minerdia Studio can do that for you. A good website can really help you on the internet get the right people to look at it and make your business bigger. Tell Minerdia Studio what you want and the people who work there will show you the way to make a website that does what you want it to do. We Communicate Clearly We make everything simple and easy. This way you always know what is happening. Solutions That Help Your Business We give ideas and features that work best for your business. Fast and Easy to Use Your website will be fast. It will be easy to use. It will help you get results. Support After Launch We are here to help even after we finish your website.';

$steps = [
    ['We Communicate Clearly', 'We make everything simple and easy. This way you always know what is happening.'],
    ['Solutions That Help Your Business', 'We give ideas and features that work best for your business.'],
    ['Fast and Easy to Use', 'Your website will be fast. It will be easy to use. It will help you get results.'],
    ['Support After Launch', 'We are here to help even after we finish your website.'],
];

$states = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Delhi', 'Goa', 'Gujarat', 'Haryana',
    'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra',
    'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
    'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands',
    'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Ladakh', 'Lakshadweep', 'Puducherry',
];
?>
<section class="ms-wdp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Lato:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-wdp,
        .ms-wdp * {
            box-sizing: border-box;
        }

        /* NOTE: no overflow:hidden on this section or any parent, otherwise the sticky form stops working */
        .ms-wdp {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
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
        .ms-wdp-title {
            margin: 0 0 18px;
            max-width: 430px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-wdp-intro {
            margin: 0 0 24px;
            font-size: 14px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-wdp-list {
            display: grid;
            gap: 19px;
        }

        .ms-wdp-card {
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

        .ms-wdp-card:hover {
            transform: translateY(-4px);
        }

        .ms-wdp-icon {
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

        .ms-wdp-card h3 {
            margin: 0 0 4px;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-wdp-card p {
            margin: 0;
            font-size: 15px;
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

        .ms-wdp-form {
            padding: 28px 30px 28px;
            border-radius: 22px;
            background: #f6f6f6;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .12);
        }

        .ms-wdp-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px 15px;
        }

        .ms-wdp-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 14.5px;
            font-weight: 400;
            color: #111;
        }

        .ms-wdp-field label span {
            color: #e03131;
            margin-left: 3px;
        }

        .ms-wdp-field input,
        .ms-wdp-field select {
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

        .ms-wdp-field select {
            padding: 0 12px;
            cursor: pointer;
        }

        .ms-wdp-field input::placeholder {
            color: #8a8a8a;
        }

        .ms-wdp-field input:focus,
        .ms-wdp-field select:focus {
            border-color: var(--purple);
            background: #fff;
        }

        .ms-wdp-submit {
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

        .ms-wdp-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .3);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-wdp-wrap {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .ms-wdp-title {
                max-width: none;
                font-size: 30px;
            }

            .ms-wdp-form-col {
                position: static;
            }
        }

        @media (max-width: 575px) {
            .ms-wdp {
                padding: 35px 14px 45px;
            }

            .ms-wdp-title {
                font-size: 26px;
                text-align: center;
            }

            .ms-wdp-intro {
                font-size: 14px;
            }

            .ms-wdp-card {
                padding: 14px 16px 13px 10px;
                gap: 12px;
                border-radius: 22px;
            }

            .ms-wdp-icon {
                width: 38px;
                height: 38px;
                flex-basis: 38px;
                font-size: 16px;
            }

            .ms-wdp-card h3 {
                font-size: 17px;
            }

            .ms-wdp-card p {
                font-size: 14px;
            }

            .ms-wdp-form {
                padding: 22px 18px;
            }

            .ms-wdp-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>

    <div class="ms-wdp-wrap">

        <div class="ms-wdp-left">
            <h2 class="ms-wdp-title">Start Your Website Project Today</h2>
            <p class="ms-wdp-intro"><?php echo htmlspecialchars($intro); ?></p>

            <div class="ms-wdp-list">
                <?php foreach ($steps as $step) : ?>
                    <div class="ms-wdp-card">
                        <div class="ms-wdp-icon"><i class="fa-regular fa-hand-point-right"></i></div>
                        <div>
                            <h3><?php echo htmlspecialchars($step[0]); ?></h3>
                            <p><?php echo htmlspecialchars($step[1]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ms-wdp-form-col">
            <form class="ms-wdp-form" action="<?php echo BASE; ?>submit-form.php" method="post" data-lead-form>
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <input type="hidden" name="source_page" value="Website Development">
                <div class="ms-wdp-grid">
                    <div class="ms-wdp-field">
                        <label for="ms-wdp-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-wdp-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-wdp-field">
                        <label for="ms-wdp-email">Email <span>*</span></label>
                        <input type="email" id="ms-wdp-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="ms-wdp-field">
                        <label for="ms-wdp-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-wdp-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-wdp-field">
                        <label for="ms-wdp-state">States <span>*</span></label>
                        <select id="ms-wdp-state" name="state" required>
                            <option value="">- Select -</option>
                            <?php foreach ($states as $st) : ?>
                                <option value="<?php echo htmlspecialchars($st); ?>"><?php echo htmlspecialchars($st); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="ms-wdp-submit">Submit Form</button>
            </form>
        </div>

    </div>

    <script>
        (function() {
            var wrap = document.querySelector('.ms-wdp-wrap');
            var col = document.querySelector('.ms-wdp-form-col');
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