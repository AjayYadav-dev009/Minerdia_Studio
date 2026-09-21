<section class="mff-contact" id="mffContactSection">

    <div class="mff-contact__container">

        <!-- LEFT: FORM -->
        <div class="mff-contact__form-side mff-reveal">

            <div class="mff-contact__glass">

                <div class="mff-contact__intro">

                    <div class="mff-contact__badge">
                        <span class="mff-contact__dot" aria-hidden="true"></span>
                        <span>Let’s Grow Your Brand</span>
                    </div>

                    <h2>
                        <span>Start Your</span>
                        <strong>Growth Journey</strong>
                    </h2>

                    <p>
                        Share your requirements with us and our team will connect with you
                        to discuss the right digital growth strategy for your business.
                    </p>

                </div>

                <!-- FLUENT FORM SHORTCODE -->
                <div class="mff-contact__form-slot">
                    [fluentform id="3"]
                </div>

            </div>

        </div>

        <!-- DECORATIVE ORBS -->
        <div class="mff-contact__orbs" aria-hidden="true">
            <span class="mff-contact__orb mff-contact__orb--purple"></span>
            <span class="mff-contact__orb mff-contact__orb--teal"></span>
        </div>

        <!-- RIGHT: IMAGE -->
        <div
            class="mff-contact__image-side mff-reveal"
            style="--mff-delay:.12s;">
            <div class="mff-contact__image-wrap">

                <img
                    src="https://minerdiastudio.com/wp-content/uploads/2026/07/minerdia-studio11-1.png"
                    alt="Minerdia Studio digital marketing consultant presenting business growth services"
                    loading="lazy"
                    decoding="async">

            </div>
        </div>

    </div>

    <style>
        /* =====================================================
                            FULLY SCOPED RESET
        ====================================================== */

        .mff-contact,
        .mff-contact *,
        .mff-contact *::before,
        .mff-contact *::after {
            box-sizing: border-box;
        }

        .mff-contact {
            --mff-purple: #5a2ea6;
            --mff-purple-dark: #3e207b;
            --mff-blue: #385c9d;
            --mff-teal: #2fa8a1;
            --mff-black: #111111;
            --mff-text: #4b4b4b;

            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 22px 18px 26px;
            background: #ffffff !important;
            font-family: Arial, sans-serif;
        }

        .mff-contact__container {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 570px) minmax(300px, 430px);
            align-items: center;
            justify-content: center;
            gap: 68px;
            width: min(100%, 1100px);
            margin: 0 auto;
        }

        /* =====================================================
                            LIQUID GLASS CARD
        ====================================================== */

        .mff-contact__form-side {
            position: relative;
            z-index: 4;
            width: 100%;
            min-width: 0;
        }

        .mff-contact__glass {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 20px 22px 22px;
            border: 1px solid rgba(90, 46, 166, 0.19);
            border-radius: 23px;

            background:
                linear-gradient(145deg,
                    rgba(255, 255, 255, 0.80),
                    rgba(247, 245, 253, 0.56) 52%,
                    rgba(232, 250, 248, 0.45));

            box-shadow:
                0 16px 38px rgba(48, 36, 86, 0.10),
                inset 1px 1px 0 rgba(255, 255, 255, 0.98),
                inset -1px -1px 0 rgba(90, 46, 166, 0.06);

            backdrop-filter: blur(20px) saturate(135%);
            -webkit-backdrop-filter: blur(20px) saturate(135%);
        }

        .mff-contact__glass::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 0;
            padding: 1.3px;
            border-radius: inherit;
            pointer-events: none;

            background:
                linear-gradient(120deg,
                    rgba(255, 255, 255, 0.96),
                    rgba(90, 46, 166, 0.27),
                    rgba(47, 168, 161, 0.25),
                    rgba(255, 255, 255, 0.94));

            background-size: 280% 280%;
            animation: mffGlassFlow 9s ease-in-out infinite;

            -webkit-mask:
                linear-gradient(#ffffff 0 0) content-box,
                linear-gradient(#ffffff 0 0);

            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .mff-contact__glass::after {
            content: "";
            position: absolute;
            top: -120px;
            right: -100px;
            z-index: 0;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            pointer-events: none;

            background:
                radial-gradient(circle,
                    rgba(90, 46, 166, 0.12),
                    rgba(47, 168, 161, 0.07) 52%,
                    transparent 72%);

            filter: blur(15px);
        }

        .mff-contact__intro,
        .mff-contact__form-slot {
            position: relative;
            z-index: 2;
        }

        /* =====================================================
                            INTRO
        ====================================================== */

        .mff-contact__intro {
            margin-bottom: 16px;
            text-align: left;
        }

        .mff-contact__badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            min-height: 33px;
            margin-bottom: 10px;
            padding: 6px 13px 6px 10px;
            border: 1px solid rgba(255, 255, 255, 0.84);
            border-radius: 999px;
            color: var(--mff-black);

            background:
                linear-gradient(135deg,
                    rgba(255, 255, 255, 0.82),
                    rgba(255, 255, 255, 0.50));

            box-shadow:
                0 7px 17px rgba(48, 36, 88, 0.07),
                inset 1px 1px 0 rgba(255, 255, 255, 0.98);

            backdrop-filter: blur(11px);
            -webkit-backdrop-filter: blur(11px);

            font-size: 12px;
            line-height: 1.3;
            font-weight: 600;
        }

        .mff-contact__dot {
            position: relative;
            display: block;
            flex: 0 0 8px;
            width: 8px;
            height: 8px;
            border-radius: 50%;

            background:
                linear-gradient(135deg,
                    var(--mff-purple),
                    var(--mff-teal));

            box-shadow: 0 0 11px rgba(47, 168, 161, 0.5);
            animation: mffDotPulse 2.3s ease-in-out infinite;
        }

        .mff-contact__dot::after {
            content: "";
            position: absolute;
            inset: -4px;
            border: 1px solid rgba(90, 46, 166, 0.18);
            border-radius: 50%;
            animation: mffDotRing 2.3s ease-out infinite;
        }

        .mff-contact__intro h2 {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 7px;
            width: 100%;
            margin: 0;
            padding: 1px 0 3px;
            overflow: visible;
            color: var(--mff-black);
            font-family: Arial, sans-serif;
            font-size: clamp(27px, 2.4vw, 35px);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -1.2px;
            white-space: nowrap;
        }

        .mff-contact__intro h2 strong {
            display: inline-block;
            padding: 0 1px 3px;
            color: transparent;
            font: inherit;

            background:
                linear-gradient(110deg,
                    var(--mff-purple) 0%,
                    var(--mff-purple-dark) 32%,
                    var(--mff-blue) 66%,
                    var(--mff-teal) 100%);

            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .mff-contact__intro p {
            max-width: 500px;
            margin: 7px 0 0;
            color: var(--mff-text);
            font-family: Arial, sans-serif;
            font-size: 13px;
            line-height: 1.48;
            font-weight: 400;
        }

        /* =====================================================
                            FLUENT FORM RESET
        ====================================================== */

        .mff-contact__form-slot,
        .mff-contact .fluentform,
        .mff-contact .fluentform_wrapper,
        .mff-contact #fluentform_3 {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
            background: transparent !important;
        }

        .mff-contact #fluentform_3 .ff-el-group {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin: 0 0 11px !important;
            padding: 0 !important;
        }

        /* Desktop: two equal columns */
        .mff-contact #fluentform_3 .ff-t-container {
            display: grid !important;
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            column-gap: 13px !important;
            row-gap: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .mff-contact #fluentform_3 .ff-t-cell {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
            flex: none !important;
        }

        /* Labels */
        .mff-contact #fluentform_3 .ff-el-input--label {
            display: block !important;
            width: 100% !important;
            margin: 0 0 5px !important;
            padding: 0 !important;
        }

        .mff-contact #fluentform_3 label {
            margin: 0 !important;
            padding: 0 !important;
            color: var(--mff-black) !important;
            font-family: Arial, sans-serif !important;
            font-size: 12px !important;
            line-height: 1.3 !important;
            font-weight: 600 !important;
        }

        /* All internal wrappers */
        .mff-contact #fluentform_3 .ff-el-input--content,
        .mff-contact #fluentform_3 .ff-el-form-content,
        .mff-contact #fluentform_3 .ff-el-input--content .iti,
        .mff-contact #fluentform_3 .ff-el-input--content .iti--allow-dropdown,
        .mff-contact #fluentform_3 .ff-el-input--content .iti--separate-dial-code {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin: 0 !important;
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        /* =====================================================
                            ALL EDITABLE FIELDS — SAME DESIGN
        ====================================================== */

        .mff-contact #fluentform_3 input[type="text"],
        .mff-contact #fluentform_3 input[type="email"],
        .mff-contact #fluentform_3 input[type="tel"],
        .mff-contact #fluentform_3 input[type="url"],
        .mff-contact #fluentform_3 input[type="number"],
        .mff-contact #fluentform_3 input[type="password"],
        .mff-contact #fluentform_3 input:not([type]),
        .mff-contact #fluentform_3 select {
            display: block !important;
            float: none !important;
            box-sizing: border-box !important;

            width: 100% !important;
            max-width: 100% !important;
            min-width: 100% !important;

            height: 48px !important;
            min-height: 48px !important;
            max-height: 48px !important;

            margin: 0 !important;
            padding: 11px 15px !important;

            border: 1px solid rgba(255, 255, 255, 0.90) !important;
            border-radius: 999px !important;
            outline: none !important;

            color: var(--mff-black) !important;

            background:
                linear-gradient(135deg,
                    rgba(255, 255, 255, 0.80),
                    rgba(246, 244, 252, 0.54)) !important;

            box-shadow:
                0 7px 16px rgba(35, 27, 70, 0.065),
                inset 1px 1px 0 rgba(255, 255, 255, 0.98),
                inset -1px -1px 0 rgba(90, 46, 166, 0.045) !important;

            backdrop-filter: blur(11px) !important;
            -webkit-backdrop-filter: blur(11px) !important;

            font-family: Arial, sans-serif !important;
            font-size: 12.5px !important;
            line-height: 1.35 !important;
            font-weight: 400 !important;

            appearance: none !important;
            -webkit-appearance: none !important;
        }

        /* JavaScript-added classes */
        .mff-contact #fluentform_3 .mff-width-group,
        .mff-contact #fluentform_3 .mff-width-content,
        .mff-contact #fluentform_3 .mff-width-parent {
            display: block !important;
            float: none !important;
            box-sizing: border-box !important;

            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;

            margin-right: 0 !important;
            margin-left: 0 !important;
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .mff-contact #fluentform_3 input.mff-width-input {
            display: block !important;
            float: none !important;
            box-sizing: border-box !important;

            width: 100% !important;
            min-width: 100% !important;
            max-width: 100% !important;

            inline-size: 100% !important;
            min-inline-size: 100% !important;
            max-inline-size: 100% !important;

            height: 48px !important;
            min-height: 48px !important;
            max-height: 48px !important;

            margin: 0 !important;
            transform: none !important;
        }

        /* Select arrow */
        .mff-contact #fluentform_3 select {
            padding-right: 40px !important;
            cursor: pointer;

            background-image:
                linear-gradient(45deg,
                    transparent 50%,
                    #111111 50%),
                linear-gradient(135deg,
                    #111111 50%,
                    transparent 50%),
                linear-gradient(135deg,
                    rgba(255, 255, 255, 0.80),
                    rgba(246, 244, 252, 0.54)) !important;

            background-position:
                calc(100% - 18px) 20px,
                calc(100% - 13px) 20px,
                center !important;

            background-size:
                5px 5px,
                5px 5px,
                100% 100% !important;

            background-repeat: no-repeat !important;
        }

        .mff-contact #fluentform_3 input::placeholder {
            color: #7d8792 !important;
            opacity: 1 !important;
        }

        .mff-contact #fluentform_3 input:focus,
        .mff-contact #fluentform_3 select:focus {
            border-color: rgba(90, 46, 166, 0.38) !important;

            box-shadow:
                0 9px 21px rgba(90, 46, 166, 0.10),
                0 0 0 3px rgba(47, 168, 161, 0.07),
                inset 1px 1px 0 #ffffff !important;
        }

        /* =====================================================
                            CHECKBOX
        ====================================================== */

        .mff-contact #fluentform_3 .ff-el-form-check {
            display: flex !important;
            align-items: flex-start !important;
            gap: 8px !important;
            width: 100% !important;
        }

        .mff-contact #fluentform_3 input[type="checkbox"] {
            display: block !important;
            flex: 0 0 17px !important;

            width: 17px !important;
            min-width: 17px !important;
            max-width: 17px !important;

            height: 17px !important;
            min-height: 17px !important;
            max-height: 17px !important;

            margin: 1px 0 0 !important;
            padding: 0 !important;

            accent-color: var(--mff-purple);
            cursor: pointer;
        }

        .mff-contact #fluentform_3 .ff-el-form-check-label,
        .mff-contact #fluentform_3 .ff-el-form-check-label span {
            color: var(--mff-black) !important;
            font-family: Arial, sans-serif !important;
            font-size: 11.5px !important;
            line-height: 1.4 !important;
            font-weight: 500 !important;
        }

        .mff-contact #fluentform_3 a {
            color: var(--mff-purple) !important;
            font-weight: 700 !important;
            text-decoration: underline !important;
            text-underline-offset: 2px;
        }

        /* =====================================================
                            SUBMIT BUTTON
        ====================================================== */

        .mff-contact #fluentform_3 .ff_submit_btn_wrapper {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            margin: 16px 0 0 !important;
            text-align: center !important;
        }

        .mff-contact #fluentform_3 button.ff-btn-submit,
        .mff-contact #fluentform_3 .ff-btn-submit,
        .mff-contact #fluentform_3 input[type="submit"] {
            position: relative !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;

            width: auto !important;
            max-width: none !important;
            min-width: 175px !important;
            min-height: 46px !important;

            margin: 0 auto !important;
            padding: 11px 27px !important;
            overflow: hidden !important;

            border: 0 !important;
            border-radius: 999px !important;
            color: #ffffff !important;

            background:
                linear-gradient(110deg,
                    var(--mff-purple),
                    var(--mff-purple-dark),
                    var(--mff-blue),
                    var(--mff-teal),
                    var(--mff-purple)) !important;

            background-size: 320% 320% !important;

            box-shadow:
                0 11px 25px rgba(90, 46, 166, 0.27),
                inset 0 1px 0 rgba(255, 255, 255, 0.28) !important;

            font-family: Arial, sans-serif !important;
            font-size: 13.5px !important;
            line-height: 1.2 !important;
            font-weight: 700 !important;
            cursor: pointer !important;

            animation: mffButtonGradient 8s ease-in-out infinite !important;

            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease !important;
        }

        .mff-contact #fluentform_3 button.ff-btn-submit:hover,
        .mff-contact #fluentform_3 .ff-btn-submit:hover,
        .mff-contact #fluentform_3 input[type="submit"]:hover {
            color: #ffffff !important;
            transform: translateY(-3px) scale(1.02) !important;

            box-shadow:
                0 16px 32px rgba(90, 46, 166, 0.34),
                inset 0 1px 0 rgba(255, 255, 255, 0.30) !important;
        }

        .mff-contact #fluentform_3 button.ff-btn-submit::before,
        .mff-contact #fluentform_3 .ff-btn-submit::before {
            content: "";
            position: absolute;
            top: -38%;
            left: -90%;
            width: 38%;
            height: 176%;
            pointer-events: none;
            transform: rotate(20deg);

            background:
                linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.88),
                    transparent);

            animation: mffButtonShine 6.8s ease-in-out infinite;
        }

        /* =====================================================
                            ORBS
        ====================================================== */

        .mff-contact__orbs {
            position: absolute;
            top: 50%;
            left: 59%;
            z-index: 2;
            width: 115px;
            height: 115px;
            pointer-events: none;
            transform: translate(-50%, -50%);
        }

        .mff-contact__orb {
            position: absolute;
            display: block;
            border-radius: 50%;
        }

        .mff-contact__orb--purple {
            top: 3px;
            right: 0;
            width: 67px;
            height: 67px;

            background:
                radial-gradient(circle at 35% 30%,
                    rgba(255, 255, 255, 0.76),
                    transparent 22%),
                linear-gradient(135deg,
                    var(--mff-purple),
                    var(--mff-blue));

            box-shadow: 0 14px 30px rgba(90, 46, 166, 0.24);
            animation: mffOrbOne 6s ease-in-out infinite;
        }

        .mff-contact__orb--teal {
            bottom: 2px;
            left: 0;
            width: 60px;
            height: 60px;

            background:
                radial-gradient(circle at 35% 30%,
                    rgba(255, 255, 255, 0.72),
                    transparent 22%),
                linear-gradient(135deg,
                    #64d3cb,
                    var(--mff-teal));

            box-shadow: 0 14px 30px rgba(47, 168, 161, 0.23);
            animation: mffOrbTwo 6.8s ease-in-out infinite;
        }

        /* =====================================================
                            IMAGE
        ====================================================== */

        .mff-contact__image-side {
            position: relative;
            z-index: 3;
            min-width: 0;
        }

        .mff-contact__image-wrap {
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            width: 100%;
            min-height: 470px;
            overflow: visible;
        }

        .mff-contact__image-wrap img {
            position: relative;
            z-index: 2;
            display: block;
            width: auto;
            max-width: 100%;
            height: 465px;
            margin: 0 auto;
            object-fit: contain;
            object-position: center bottom;
            filter: none !important;
            box-shadow: none !important;
        }

        /* =====================================================
                            REVEAL
        ====================================================== */

        .mff-reveal {
            opacity: 0;
            transform: translateY(28px);

            transition:
                opacity 0.8s ease var(--mff-delay, 0s),
                transform 0.8s cubic-bezier(.2, .75, .25, 1) var(--mff-delay, 0s);
        }

        .mff-reveal.mff-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* =====================================================
                            ANIMATIONS
        ====================================================== */

        @keyframes mffGlassFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes mffDotPulse {

            0%,
            100% {
                opacity: 0.7;
                transform: scale(0.88);
            }

            50% {
                opacity: 1;
                transform: scale(1.12);
            }
        }

        @keyframes mffDotRing {
            0% {
                opacity: 0.55;
                transform: scale(0.72);
            }

            75%,
            100% {
                opacity: 0;
                transform: scale(1.55);
            }
        }

        @keyframes mffButtonGradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes mffButtonShine {

            0%,
            27% {
                left: -90%;
                opacity: 0;
            }

            40% {
                opacity: 0.95;
            }

            60% {
                left: 145%;
                opacity: 0;
            }

            100% {
                left: 145%;
                opacity: 0;
            }
        }

        @keyframes mffOrbOne {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-7px, -9px);
            }
        }

        @keyframes mffOrbTwo {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(8px, 8px);
            }
        }

        /* =====================================================
                            TABLET
        ====================================================== */

        @media (max-width: 1024px) {
            .mff-contact__container {
                grid-template-columns: minmax(0, 530px) minmax(270px, 360px);
                gap: 38px;
                width: min(100%, 940px);
            }

            .mff-contact__glass {
                padding: 19px 19px 21px;
            }

            .mff-contact__intro h2 {
                gap: 6px;
                font-size: clamp(25px, 3.4vw, 32px);
            }

            .mff-contact #fluentform_3 .ff-t-container {
                column-gap: 11px !important;
            }

            .mff-contact__image-wrap {
                min-height: 425px;
            }

            .mff-contact__image-wrap img {
                height: 420px;
            }

            .mff-contact__orbs {
                left: 60%;
                transform: translate(-50%, -50%) scale(0.82);
            }
        }

        /* =====================================================
                            MOBILE
        ====================================================== */

        @media (max-width: 767px) {
            .mff-contact {
                padding: 20px 10px 23px;
            }

            .mff-contact__container {
                display: flex;
                flex-direction: column;
                gap: 16px;
                width: min(100%, 570px);
            }

            .mff-contact__form-side {
                order: 1;
                width: 100%;
            }

            .mff-contact__image-side {
                order: 2;
                width: 100%;
            }

            .mff-contact__glass {
                padding: 18px 14px 20px;
                border-radius: 21px;
            }

            .mff-contact__intro {
                margin-bottom: 15px;
                text-align: center;
            }

            .mff-contact__intro h2 {
                justify-content: center;
                gap: 5px;
                font-size: clamp(22px, 6.6vw, 30px);
                letter-spacing: -1px;
                white-space: nowrap;
            }

            .mff-contact__intro p {
                margin-right: auto;
                margin-left: auto;
                font-size: 12px;
            }

            .mff-contact #fluentform_3 .ff-t-container {
                display: block !important;
            }

            .mff-contact #fluentform_3 .ff-t-cell {
                width: 100% !important;
                margin-bottom: 10px !important;
            }

            .mff-contact #fluentform_3 .ff-t-cell:last-child {
                margin-bottom: 0 !important;
            }

            .mff-contact__orbs {
                display: none;
            }

            .mff-contact__image-wrap {
                min-height: 385px;
                height: 385px;
            }

            .mff-contact__image-wrap img {
                height: 380px;
            }
        }

        @media (max-width: 430px) {
            .mff-contact {
                padding-right: 7px;
                padding-left: 7px;
            }

            .mff-contact__glass {
                padding: 17px 11px 19px;
            }

            .mff-contact__intro h2 {
                gap: 4px;
                font-size: clamp(19px, 6vw, 25px);
            }

            .mff-contact__image-wrap {
                min-height: 345px;
                height: 345px;
            }

            .mff-contact__image-wrap img {
                height: 340px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .mff-contact *,
            .mff-contact *::before,
            .mff-contact *::after {
                animation: none !important;
                transition: none !important;
            }

            .mff-reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>

    <script>
        (function() {
            var sectionId = "mffContactSection";
            var formSelector = "#fluentform_3";
            var resizeTimer = null;
            var formObserver = null;
            var pollingTimer = null;

            function getSection() {
                return document.getElementById(sectionId);
            }

            function cleanText(value) {
                return String(value || "")
                    .replace(/\*/g, "")
                    .replace(/\s+/g, " ")
                    .trim()
                    .toLowerCase();
            }

            function getGroupLabel(group) {
                if (!group) {
                    return "";
                }

                var label = group.querySelector(
                    ".ff-el-input--label label, .ff-el-input--label, label"
                );

                return label ? cleanText(label.textContent) : "";
            }

            function getFieldFromGroup(group) {
                if (!group) {
                    return null;
                }

                return group.querySelector(
                    'input[type="text"],' +
                    'input[type="email"],' +
                    'input[type="tel"],' +
                    'input[type="url"],' +
                    'input[type="number"],' +
                    'input:not([type]),' +
                    'select'
                );
            }

            function findGroupByLabel(form, searchText) {
                var groups = form.querySelectorAll(".ff-el-group");
                var found = null;

                groups.forEach(function(group) {
                    if (found) {
                        return;
                    }

                    var label = getGroupLabel(group);

                    if (
                        label === searchText ||
                        label.indexOf(searchText) !== -1
                    ) {
                        found = group;
                    }
                });

                return found;
            }

            function forceParentWidths(input, group, form) {
                if (!input || !group) {
                    return;
                }

                group.classList.add("mff-width-group");

                group.style.setProperty("width", "100%", "important");
                group.style.setProperty("max-width", "100%", "important");
                group.style.setProperty("min-width", "0", "important");

                var content = group.querySelector(".ff-el-input--content");

                if (content) {
                    content.classList.add("mff-width-content");

                    content.style.setProperty("display", "block", "important");
                    content.style.setProperty("width", "100%", "important");
                    content.style.setProperty("max-width", "100%", "important");
                    content.style.setProperty("min-width", "0", "important");
                    content.style.setProperty("margin", "0", "important");
                    content.style.setProperty("padding", "0", "important");
                }

                var current = input.parentElement;
                var guard = 0;

                while (
                    current &&
                    current !== group &&
                    current !== form &&
                    guard < 12
                ) {
                    current.classList.add("mff-width-parent");

                    current.style.setProperty("display", "block", "important");
                    current.style.setProperty("float", "none", "important");
                    current.style.setProperty("width", "100%", "important");
                    current.style.setProperty("max-width", "100%", "important");
                    current.style.setProperty("min-width", "0", "important");
                    current.style.setProperty("margin-left", "0", "important");
                    current.style.setProperty("margin-right", "0", "important");
                    current.style.setProperty("padding-left", "0", "important");
                    current.style.setProperty("padding-right", "0", "important");

                    current = current.parentElement;
                    guard++;
                }
            }

            function applyExactSize(input, width, sourceStyles) {
                if (!input || !width || width < 50) {
                    return;
                }

                input.classList.add("mff-width-input");

                input.removeAttribute("size");
                input.removeAttribute("width");

                input.style.setProperty("display", "block", "important");
                input.style.setProperty("float", "none", "important");
                input.style.setProperty("box-sizing", "border-box", "important");

                /*
                 * Exact rendered width copied from Phone Number.
                 * This is the main fix.
                 */
                input.style.setProperty(
                    "width",
                    width + "px",
                    "important"
                );

                input.style.setProperty(
                    "min-width",
                    width + "px",
                    "important"
                );

                input.style.setProperty(
                    "max-width",
                    width + "px",
                    "important"
                );

                input.style.setProperty(
                    "inline-size",
                    width + "px",
                    "important"
                );

                input.style.setProperty(
                    "min-inline-size",
                    width + "px",
                    "important"
                );

                input.style.setProperty(
                    "max-inline-size",
                    width + "px",
                    "important"
                );

                input.style.setProperty("height", "48px", "important");
                input.style.setProperty("min-height", "48px", "important");
                input.style.setProperty("max-height", "48px", "important");
                input.style.setProperty("margin", "0", "important");
                input.style.setProperty("transform", "none", "important");

                if (sourceStyles) {
                    input.style.setProperty(
                        "border-radius",
                        sourceStyles.borderRadius || "999px",
                        "important"
                    );

                    input.style.setProperty(
                        "padding-top",
                        sourceStyles.paddingTop || "11px",
                        "important"
                    );

                    input.style.setProperty(
                        "padding-right",
                        sourceStyles.paddingRight || "15px",
                        "important"
                    );

                    input.style.setProperty(
                        "padding-bottom",
                        sourceStyles.paddingBottom || "11px",
                        "important"
                    );

                    input.style.setProperty(
                        "padding-left",
                        sourceStyles.paddingLeft || "15px",
                        "important"
                    );

                    input.style.setProperty(
                        "font-size",
                        sourceStyles.fontSize || "12.5px",
                        "important"
                    );
                }
            }

            function resetMobileExplicitWidths(form) {
                var fields = form.querySelectorAll(".mff-width-input");

                fields.forEach(function(field) {
                    field.style.setProperty("width", "100%", "important");
                    field.style.setProperty("min-width", "100%", "important");
                    field.style.setProperty("max-width", "100%", "important");
                    field.style.setProperty("inline-size", "100%", "important");
                    field.style.setProperty("min-inline-size", "100%", "important");
                    field.style.setProperty("max-inline-size", "100%", "important");
                });
            }

            function synchronizeFluentFields() {
                var section = getSection();

                if (!section) {
                    return false;
                }

                var form = section.querySelector(formSelector);

                if (!form) {
                    return false;
                }

                var phoneGroup = findGroupByLabel(form, "phone number");
                var nameGroup = findGroupByLabel(form, "name");
                var businessGroup = findGroupByLabel(form, "business name");

                /*
                 * Avoid selecting Business Name as normal Name.
                 */
                if (
                    nameGroup &&
                    getGroupLabel(nameGroup).indexOf("business name") !== -1
                ) {
                    nameGroup = null;

                    var groups = form.querySelectorAll(".ff-el-group");

                    groups.forEach(function(group) {
                        if (
                            !nameGroup &&
                            getGroupLabel(group) === "name"
                        ) {
                            nameGroup = group;
                        }
                    });
                }

                var phoneInput = getFieldFromGroup(phoneGroup);
                var nameInput = getFieldFromGroup(nameGroup);
                var businessInput = getFieldFromGroup(businessGroup);

                if (!phoneInput) {
                    return false;
                }

                forceParentWidths(nameInput, nameGroup, form);
                forceParentWidths(businessInput, businessGroup, form);

                if (window.innerWidth <= 767) {
                    resetMobileExplicitWidths(form);
                    return true;
                }

                /*
                 * Get actual Phone Number field width after browser rendering.
                 */
                var phoneRect = phoneInput.getBoundingClientRect();
                var phoneWidth = Math.round(phoneRect.width);
                var phoneStyles = window.getComputedStyle(phoneInput);

                if (phoneWidth < 100) {
                    return false;
                }

                /*
                 * Copy exact Phone field width to Name and Business Name.
                 */
                applyExactSize(nameInput, phoneWidth, phoneStyles);
                applyExactSize(businessInput, phoneWidth, phoneStyles);

                /*
                 * Ensure their containing columns can show the complete input.
                 */
                [nameGroup, businessGroup].forEach(function(group) {
                    if (!group) {
                        return;
                    }

                    var cell = group.closest(".ff-t-cell");

                    if (cell) {
                        cell.style.setProperty("min-width", "0", "important");
                        cell.style.setProperty("width", "100%", "important");
                        cell.style.setProperty("max-width", "100%", "important");
                        cell.style.setProperty("overflow", "visible", "important");
                    }
                });

                return true;
            }

            function runRepeatedly() {
                var attempts = 0;

                if (pollingTimer) {
                    clearInterval(pollingTimer);
                }

                pollingTimer = setInterval(function() {
                    attempts++;
                    synchronizeFluentFields();

                    if (attempts >= 80) {
                        clearInterval(pollingTimer);
                        pollingTimer = null;
                    }
                }, 200);
            }

            function startMutationObserver() {
                var section = getSection();

                if (!section || formObserver) {
                    return;
                }

                var queued = false;

                formObserver = new MutationObserver(function(mutations) {
                    var changed = mutations.some(function(mutation) {
                        return mutation.type === "childList";
                    });

                    if (!changed || queued) {
                        return;
                    }

                    queued = true;

                    requestAnimationFrame(function() {
                        queued = false;
                        synchronizeFluentFields();
                    });
                });

                formObserver.observe(section, {
                    childList: true,
                    subtree: true
                });
            }

            function initReveal() {
                var section = getSection();

                if (
                    !section ||
                    section.getAttribute("data-mff-reveal") === "true"
                ) {
                    return;
                }

                section.setAttribute("data-mff-reveal", "true");

                var items = section.querySelectorAll(".mff-reveal");

                if (!("IntersectionObserver" in window)) {
                    items.forEach(function(item) {
                        item.classList.add("mff-visible");
                    });

                    return;
                }

                var observer = new IntersectionObserver(
                    function(entries) {
                        entries.forEach(function(entry) {
                            entry.target.classList.toggle(
                                "mff-visible",
                                entry.isIntersecting
                            );
                        });
                    }, {
                        threshold: 0.12,
                        rootMargin: "0px 0px -30px 0px"
                    }
                );

                items.forEach(function(item) {
                    observer.observe(item);
                });
            }

            function initializeMffContact() {
                synchronizeFluentFields();
                runRepeatedly();
                startMutationObserver();
                initReveal();

                setTimeout(synchronizeFluentFields, 100);
                setTimeout(synchronizeFluentFields, 350);
                setTimeout(synchronizeFluentFields, 700);
                setTimeout(synchronizeFluentFields, 1200);
                setTimeout(synchronizeFluentFields, 2000);
                setTimeout(synchronizeFluentFields, 3500);
                setTimeout(synchronizeFluentFields, 6000);
                setTimeout(synchronizeFluentFields, 10000);
            }

            if (document.readyState === "loading") {
                document.addEventListener(
                    "DOMContentLoaded",
                    initializeMffContact
                );
            } else {
                initializeMffContact();
            }

            window.addEventListener("load", initializeMffContact);

            window.addEventListener("resize", function() {
                clearTimeout(resizeTimer);

                resizeTimer = setTimeout(function() {
                    synchronizeFluentFields();
                }, 180);
            });

            window.addEventListener(
                "elementor/frontend/init",
                function() {
                    setTimeout(initializeMffContact, 250);
                    setTimeout(synchronizeFluentFields, 1000);
                }
            );
        })();
    </script>

</section>