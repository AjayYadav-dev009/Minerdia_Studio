<section class="ms-grow">

    <style>
        .ms-grow,
        .ms-grow * {
            box-sizing: border-box;
        }

        .ms-grow {
            --purple: #5A2EA6;
            --sticky-top: 50px; /* raise this if your header is fixed/taller */
            width: 100%;
            padding: 35px 18px 50px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-grow-wrap {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 550fr) minmax(0, 527fr);
            gap: 32px;
            align-items: start; /* required for sticky inside a grid */
        }

        /* ---------- Left ---------- */
        .ms-grow-title {
            margin: 0 0 18px;
            font-size: 38px;
            line-height: 1.4;
            font-weight: 600;
            color: #000;
        }

        .ms-grow-intro {
            margin: 0 0 22px;
            font-size: 16px;
            line-height: 25px;
            font-weight: 400;
            color: #111;
            text-align: justify;
        }

        .ms-grow-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .ms-grow-card {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 14px 12px 10px;
            border-radius: 26px;
            background:
                radial-gradient(circle at 0% 100%, #e4dcf2 0%, rgba(247, 247, 247, 0) 48%),
                #f7f7f7;
            box-shadow: 0 6px 12px rgba(0, 0, 0, .22);
        }

        .ms-grow-icon {
            flex: 0 0 44px;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--purple);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ms-grow-icon svg {
            width: 24px;
            height: 24px;
            fill: none;
            stroke: #fff;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-grow-card h3 {
            margin: 0 0 3px;
            font-size: 20px;
            line-height: 1.4;
            font-weight: 500;
            color: #000;
        }

        .ms-grow-card p {
            margin: 0;
            font-size: 16px;
            line-height: 25px;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Right (sticky form) ---------- */
        .ms-grow-formcol {
            position: -webkit-sticky;
            position: sticky;
            top: var(--sticky-top);
            align-self: start;
        }

        .ms-grow-form {
            padding: 34px 30px 22px;
            border-radius: 22px;
            background: #f7f7f7;
            border: 1px solid #eee;
            box-shadow: 0 6px 14px rgba(0, 0, 0, .15);
        }

        .ms-grow-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 26px;
        }

        .ms-grow-field label {
            display: block;
            margin: 0 0 8px;
            font-size: 15px;
            line-height: 1.3;
            font-weight: 400;
            color: #000;
        }

        .ms-grow-field label span {
            color: #f04b4b;
            margin-left: 4px;
        }

        .ms-grow-field input,
        .ms-grow-field select {
            width: 100%;
            height: 38px;
            padding: 0 16px;
            border: 1px solid #dcdcdc;
            border-radius: 20px;
            background: #efefef;
            font-family: var(--font-body);
            font-size: 13px;
            color: #444;
            outline: none;
            transition: border-color .2s, background .2s;
        }

        .ms-grow-field input::placeholder {
            color: #777;
            opacity: 1;
        }

        .ms-grow-field select {
            -webkit-appearance: menulist;
            appearance: menulist;
            padding: 0 10px 0 20px;
            color: #555;
        }

        .ms-grow-field input:focus,
        .ms-grow-field select:focus {
            border-color: var(--purple);
            background-color: #fff;
        }

        .ms-grow-btnwrap {
            margin-top: -4px;
            text-align: center;
        }

        .ms-grow-btn {
            display: inline-block;
            width: 135px;
            height: 42px;
            border: 1px solid #3f1d80;
            border-radius: 30px;
            background: var(--purple);
            font-family: var(--font-head);
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            cursor: pointer;
            transition: transform .2s, box-shadow .2s;
        }

        .ms-grow-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 14px rgba(90, 46, 166, .4);
        }

        /* ---------- Terms & Privacy consent ---------- */
        .ms-grow .ms-consent {
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

        .ms-grow .ms-consent input[type="checkbox"] {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            margin: 1px 0 0;
            padding: 0;
            accent-color: var(--purple);
            cursor: pointer;
        }

        .ms-grow .ms-consent a {
            color: var(--purple);
            font-weight: 700;
            text-decoration: underline;
        }

        .ms-grow .ms-consent a:hover {
            opacity: .8;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-grow-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-grow-formcol {
                position: static; /* sticky off when stacked */
            }

            .ms-grow-title {
                font-size: 32px;
            }
        }

        @media (max-width: 575px) {
            .ms-grow {
                padding: 30px 14px 40px;
            }

            .ms-grow-title {
                font-size: 26px;
            }

            .ms-grow-intro,
            .ms-grow-card p {
                font-size: 15px;
                line-height: 1.6;
            }

            .ms-grow-card h3 {
                font-size: 18px;
            }

            .ms-grow-row {
                grid-template-columns: 1fr;
                gap: 18px;
                margin-bottom: 18px;
            }

            .ms-grow-form {
                padding: 26px 18px 22px;
            }
        }
    </style>

    <?php
    $ms_grow_items = [
        ['Clear Communication', 'We value honesty and clarity.'],
        ['Content Creation', 'Our creative team develops engaging scripts and content tailored to your brand\'s voice. We ensure each episode adds value and maintains consistency.'],
        ['Business-Focused Strategy', 'We formulate SEO strategies with your business aims and target audience in mind.'],
        ['Consistent Growth', 'We seek to achieve improvements, for your website over time.'],
        ['Ongoing Support', 'We provide assistance. This. Improves your websites performance.'],
    ];
    ?>

    <div class="ms-grow-wrap">
        <!-- LEFT -->
        <div class="ms-grow-content">
            <h2 class="ms-grow-title">Grow Your Business with the Right SEO Strategy</h2>

            <p class="ms-grow-intro">A search engine optimization strategy is the bedrock of an online presence. With Minerdia Studios expert SEO services we aim to elevate your visibility. We attract customers and generate consistent business growth. Our strategies are focused on your business goals. These may be increased traffic, better search engine rankings or generating leads. We provide transparency throughout the process. You are always aware of your websites performance. Let us develop an SEO strategy for your business growth.</p>

            <div class="ms-grow-list">
                <?php foreach ($ms_grow_items as $item): ?>
                    <div class="ms-grow-card">
                        <span class="ms-grow-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path d="M3 11h4v9H3zM7 11l3.5-7a2 2 0 0 1 2 2v3.5h5.7a2 2 0 0 1 2 2.3l-1.2 6.5a2 2 0 0 1-2 1.7H7"/></svg>
                        </span>
                        <div>
                            <h3><?= htmlspecialchars($item[0]) ?></h3>
                            <p><?= htmlspecialchars($item[1]) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- RIGHT: sticky form -->
        <div class="ms-grow-formcol">
            <form class="ms-grow-form" method="post" action="<?php echo BASE; ?>submit-form.php" data-lead-form>
                <input type="hidden" name="source_page" value="SEO">
                <input type="text" name="website_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0">
                <div class="ms-grow-row">
                    <div class="ms-grow-field">
                        <label for="ms-grow-name">Full Name <span>*</span></label>
                        <input type="text" id="ms-grow-name" name="full_name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="ms-grow-field">
                        <label for="ms-grow-email">Email <span>*</span></label>
                        <input type="email" id="ms-grow-email" name="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="ms-grow-row">
                    <div class="ms-grow-field">
                        <label for="ms-grow-phone">Phone Number <span>*</span></label>
                        <input type="tel" id="ms-grow-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="ms-grow-field">
                        <label for="ms-grow-state">States <span>*</span></label>
                        <select id="ms-grow-state" name="state" required>
                            <option value="">- Select -</option>
                            <option>Alabama</option>
                            <option>California</option>
                            <option>Florida</option>
                            <option>New York</option>
                            <option>Texas</option>
                        </select>
                    </div>
                </div>

                <label class="ms-consent" for="ms-grow-consent">
                    <input type="checkbox" id="ms-grow-consent" name="consent" value="yes" required>
                    <span>I have read and agree to the
                        <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                        and
                        <a href="<?php echo BASE; ?>privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                </label>

                <div class="ms-grow-btnwrap">
                    <button type="submit" class="ms-grow-btn">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        /* Sticky needs every ancestor to have overflow: visible (or clip).
           Themes often set overflow hidden/auto on a wrapper, body or html, which silently kills it. */
        (function () {
            var col = document.querySelector('.ms-grow-formcol');
            if (!col) return;
            var el = col.parentElement;
            while (el) {
                var cs = getComputedStyle(el);
                var bad = /(hidden|auto|scroll)/.test(cs.overflowX + ' ' + cs.overflowY);
                if (bad) {
                    if (el === document.body || el === document.documentElement) {
                        el.style.setProperty('overflow-x', 'clip', 'important');
                        el.style.setProperty('overflow-y', 'visible', 'important');
                    } else {
                        el.style.setProperty('overflow', 'visible', 'important');
                    }
                }
                el = el.parentElement;
            }
        })();
    </script>
</section>