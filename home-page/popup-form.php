<?php

$form_action = BASE . 'home-page/submit-audit.php';

/* ---- EDIT: services shown in the first dropdown ---- */
$services = [
    'Google Ads',
    'Social Media Management',
    'Podcast Production & Strategy',
    'Script Writing & Content Creation',
    'Paid Advertising',
    'Designing & Video Editing',
    'Website Development',
    'Email Marketing',
    'Search Engine Optimization',
];

$budgets = [
    'Google Ads' => ['Google Ads Price'],
    'default'    => ['Select budget'],
];
?>
<div
    class="ms-popup-overlay"
    id="msPopup"
    aria-hidden="true"
    hidden>
    <div
        class="ms-popup-box"
        role="dialog"
        aria-modal="true"
        aria-labelledby="msPopupTitle">

        <button
            class="ms-popup-close"
            type="button"
            aria-label="Close popup">
            <span aria-hidden="true">×</span>
        </button>

        <div class="ms-popup-content">

            <span class="ms-popup-label">
                Minerdia Studio
            </span>

            <h2 id="msPopupTitle">
                Get Your Free Audit
            </h2>

            <p class="ms-popup-subtitle">
                Share your details and our team will review your digital presence.
            </p>

            <div class="ms-popup-form">

                <form class="fluentform frm-fluent-form" id="msAuditForm" method="post" action="<?php echo htmlspecialchars($form_action); ?>" novalidate>

                    <!-- honeypot (spam trap) -->
                    <div style="position:absolute;left:-9999px" aria-hidden="true">
                        <input type="text" name="website_hp" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="ff-t-container">
                        <div class="ff-t-cell">
                            <div class="ff-el-group ff-el-is-required">
                                <div class="ff-el-input--label"><label for="ms_name">Your Name</label></div>
                                <div class="ff-el-input--content">
                                    <input type="text" id="ms_name" name="name" placeholder="Enter Your Full Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="ff-t-cell">
                            <div class="ff-el-group ff-el-is-required">
                                <div class="ff-el-input--label"><label for="ms_business">Business name</label></div>
                                <div class="ff-el-input--content">
                                    <input type="text" id="ms_business" name="business" placeholder="Business name" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ff-t-container">
                        <div class="ff-t-cell">
                            <div class="ff-el-group">
                                <div class="ff-el-input--label"><label for="ms_url">Website Url</label></div>
                                <div class="ff-el-input--content">
                                    <input type="url" id="ms_url" name="website" placeholder="Website Url">
                                </div>
                            </div>
                        </div>
                        <div class="ff-t-cell">
                            <div class="ff-el-group ff-el-is-required">
                                <div class="ff-el-input--label"><label for="ms_phone">Phone Number</label></div>
                                <div class="ff-el-input--content">
                                    <input type="tel" id="ms_phone" name="phone" placeholder="Mobile Number" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ff-t-container">
                        <div class="ff-t-cell">
                            <div class="ff-el-group ff-el-is-required">
                                <div class="ff-el-input--label"><label for="ms_service">Which service are you interested in?</label></div>
                                <div class="ff-el-input--content">
                                    <select id="ms_service" name="service" required>
                                        <?php foreach ($services as $s): ?>
                                            <option value="<?php echo htmlspecialchars($s); ?>"><?php echo htmlspecialchars($s); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="ff-t-cell">
                            <div class="ff-el-group ff-el-is-required">
                                <div class="ff-el-input--label"><label for="ms_budget">Monthly marketing budget</label></div>
                                <div class="ff-el-input--content">
                                    <select id="ms_budget" name="budget" required>
                                        <?php
                                        $first = $services[0];
                                        $initial = isset($budgets[$first]) ? $budgets[$first] : $budgets['default'];
                                        foreach ($initial as $b): ?>
                                            <option value="<?php echo htmlspecialchars($b); ?>"><?php echo htmlspecialchars($b); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ff-el-group ms-consent-group">
                        <label class="ms-consent" for="ms_consent">
                            <input type="checkbox" id="ms_consent" name="consent" value="yes" required>
                            <span>I have read and agree to the
                                <a href="<?php echo BASE; ?>terms-and-conditions/" target="_blank" rel="noopener">Terms &amp; Conditions</a>
                                and
                                <a href="<?php echo BASE; ?>privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</span>
                        </label>
                    </div>

                    <div class="ff_submit_btn_wrapper">
                        <button type="submit" class="ff-btn ff-btn-submit" disabled>Submit Form</button>
                    </div>

                    <div class="ff-message-success" id="msFormMsg" hidden></div>
                </form>

            </div>

        </div>
    </div>
</div>


<style>
    /* =========================================================
   MINERDIA STUDIO
   PERFORMANCE OPTIMIZED POPUP
   ========================================================= */

    #msPopup,
    #msPopup * {
        box-sizing: border-box;
    }


    /* =========================================================
   FONT  (EDIT: put the exact font used on your production site)
   ========================================================= */

    #msPopup,
    #msPopup * {
        font-family: var(--font-body);
    }

    #msPopup input,
    #msPopup textarea,
    #msPopup select,
    #msPopup button {
        font-family: inherit !important;
    }


    /* =========================================================
   OVERLAY
   ========================================================= */

    #msPopup {
        --ms-purple: #5A2EA6;
        --ms-purple-mid: #7449C8;
        --ms-purple-light: #9A72EC;
        --ms-teal: #2FA8A1;

        position: fixed;
        inset: 0;

        z-index: 999999;

        align-items: center;
        justify-content: center;

        width: 100%;
        height: 100%;

        padding: 18px;

        background: rgba(255, 255, 255, .18);

        /* Blurred page behind the popup (matches production screenshot).
           Remove these two lines if you prefer maximum performance. */
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);

        overflow-x: hidden;
        overflow-y: auto;

        opacity: 0;

        transition: opacity .22s ease;
    }


    #msPopup[hidden] {
        display: none !important;
    }


    #msPopup.ms-visible {
        display: flex;
    }


    #msPopup.active {
        opacity: 1;
    }


    /* =========================================================
   POPUP BOX
   ========================================================= */

    #msPopup .ms-popup-box {

        position: relative;

        width: min(100%, 430px);

        margin: auto;

        padding: 23px 23px 21px;

        border: 1px solid rgba(90, 46, 166, .12);
        border-radius: 24px;

        background:
            radial-gradient(circle at 0% 0%,
                rgba(154, 114, 236, .07),
                transparent 32%),
            radial-gradient(circle at 100% 100%,
                rgba(47, 168, 161, .05),
                transparent 34%),
            #FFFFFF;

        box-shadow:
            0 20px 50px rgba(42, 25, 78, .14),
            0 5px 16px rgba(90, 46, 166, .05);

        transform: translateY(12px) scale(.985);

        opacity: 0;

        transition:
            transform .28s cubic-bezier(.2, .8, .2, 1),
            opacity .22s ease;
    }


    #msPopup.active .ms-popup-box {
        transform: translateY(0) scale(1);
        opacity: 1;
    }


    #msPopup .ms-popup-box::before {
        content: "";

        position: absolute;

        top: 0;
        left: 15%;
        right: 15%;

        height: 1px;

        pointer-events: none;

        background: linear-gradient(90deg,
                transparent,
                rgba(116, 73, 200, .32),
                transparent);
    }


    #msPopup .ms-popup-content {
        position: relative;
        z-index: 2;
    }


    /* =========================================================
   CLOSE BUTTON
   ========================================================= */

    #msPopup .ms-popup-close {

        position: absolute;

        top: 13px;
        right: 14px;

        z-index: 10;

        width: 34px;
        height: 34px;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 0 !important;

        border: 1px solid rgba(90, 46, 166, .14) !important;
        border-radius: 50% !important;

        background: #FFFFFF !important;

        color: #4D3A6E !important;

        font-size: 25px !important;
        font-weight: 300 !important;
        line-height: 1 !important;

        cursor: pointer;

        box-shadow:
            0 5px 15px rgba(54, 31, 96, .08);

        transition:
            transform .2s ease,
            background-color .2s ease,
            color .2s ease;
    }


    #msPopup .ms-popup-close:hover {

        transform: rotate(90deg);

        background: var(--ms-purple) !important;

        color: #FFFFFF !important;
    }


    #msPopup .ms-popup-close:focus-visible {

        outline: 2px solid rgba(90, 46, 166, .45);
        outline-offset: 3px;
    }


    /* =========================================================
   LABEL
   ========================================================= */

    #msPopup .ms-popup-label {

        display: inline-flex;

        margin: 0 42px 12px 0;

        padding: 7px 13px;

        border: 1px solid rgba(90, 46, 166, .14);
        border-radius: 999px;

        background: #FAF8FE;

        color: #4B376C;

        font-size: 11.5px;
        line-height: 1;

        font-weight: 700;
        letter-spacing: .02em;
    }


    /* =========================================================
   HEADING
   ========================================================= */

    #msPopup h2 {

        margin: 0;

        color: #281E3D;

        font-size: 28px;
        line-height: 1.12;

        letter-spacing: -.035em;
        font-weight: 800;
    }


    #msPopup h2::after {

        content: "";

        display: block;

        width: 58px;
        height: 3px;

        margin-top: 9px;

        border-radius: 999px;

        background: linear-gradient(90deg,
                var(--ms-purple-light),
                var(--ms-teal));
    }


    /* =========================================================
   SUBTITLE
   ========================================================= */

    #msPopup .ms-popup-subtitle {

        max-width: 345px;

        margin: 10px 0 16px;

        color: rgba(40, 30, 61, .66);

        font-size: 12.5px;
        line-height: 1.5;

        font-weight: 400;
    }


    /* =========================================================
   FORM LAYOUT
   (previously supplied by the Fluent Forms stylesheet)
   ========================================================= */

    #msPopup .ms-popup-form .ff-t-container {
        display: flex;
        gap: 15px;
    }

    #msPopup .ms-popup-form .ff-t-cell {
        flex: 1 1 0;
        min-width: 0;
    }

    #msPopup .ms-popup-form .ff-el-input--content {
        width: 100%;
    }

    #msPopup .ms-popup-form .ff-el-is-required .ff-el-input--label label::after {
        content: " *";
        color: #F56C6C;
    }

    #msPopup .ms-popup-form select {
        -webkit-appearance: menulist;
        appearance: menulist;
    }

    #msPopup .ms-popup-form [hidden] {
        display: none !important;
    }


    /* =========================================================
   FLUENT FORM STYLES (unchanged)
   ========================================================= */

    #msPopup .ms-popup-form,
    #msPopup .ms-popup-form .fluentform,
    #msPopup .ms-popup-form form {

        width: 100% !important;

        margin: 0 !important;

        max-height: none !important;
        overflow: visible !important;
    }


    #msPopup .ms-popup-form .ff-el-group {

        margin-bottom: 9px !important;
    }


    #msPopup .ms-popup-form .ff-el-input--label {

        margin-bottom: 4px !important;
    }


    #msPopup .ms-popup-form label,
    #msPopup .ms-popup-form .ff-el-input--label label {
        margin: 0 0 4px !important;
        color: rgba(40, 30, 61, .88) !important;
        font-size: 13px !important;
        line-height: 1.28 !important;
        font-weight: 600 !important;
    }


    /* =========================================================
   INPUT FIELDS
   ========================================================= */

    #msPopup .ms-popup-form input:not([type="checkbox"]):not([type="radio"]):not([type="submit"]),

    #msPopup .ms-popup-form textarea,

    #msPopup .ms-popup-form select {

        width: 100% !important;

        min-height: 41px !important;

        margin: 0 !important;

        padding: 8px 11px !important;

        border: 1px solid rgba(90, 46, 166, .16) !important;

        border-radius: 11px !important;

        background: #FFFFFF !important;

        color: #211B35 !important;

        caret-color: #5A2EA6 !important;

        font-size: 12.5px !important;
        line-height: 1.35 !important;

        font-weight: 400 !important;

        outline: none !important;

        box-shadow:
            0 4px 12px rgba(20, 12, 35, .045) !important;

        transition:
            border-color .2s ease,
            box-shadow .2s ease !important;
    }


    #msPopup .ms-popup-form textarea {

        min-height: 68px !important;
        max-height: 95px !important;

        resize: none !important;
    }


    #msPopup .ms-popup-form select {

        cursor: pointer;
    }


    #msPopup .ms-popup-form select option {

        background: #FFFFFF !important;
        color: #211B35 !important;
    }


    #msPopup .ms-popup-form input::placeholder,
    #msPopup .ms-popup-form textarea::placeholder {

        color: rgba(33, 27, 53, .43) !important;
        opacity: 1 !important;
    }


    /* =========================================================
   INPUT FOCUS
   ========================================================= */

    #msPopup .ms-popup-form input:not([type="checkbox"]):not([type="radio"]):not([type="submit"]):focus,

    #msPopup .ms-popup-form textarea:focus,

    #msPopup .ms-popup-form select:focus {

        border-color: rgba(154, 114, 236, .75) !important;

        box-shadow:
            0 0 0 3px rgba(154, 114, 236, .11) !important;
    }


    /* =========================================================
   CHECKBOX + RADIO
   ========================================================= */

    #msPopup .ms-popup-form input[type="checkbox"],
    #msPopup .ms-popup-form input[type="radio"] {

        accent-color: var(--ms-purple) !important;
    }


    #msPopup .ms-popup-form .ff-el-form-check-label,
    #msPopup .ms-popup-form .ff-el-form-check-label span {

        color: rgba(40, 30, 61, .72) !important;

        font-size: 11px !important;
    }


    /* =========================================================
   CONSENT CHECKBOX
   ========================================================= */

    #msPopup .ms-popup-form .ms-consent {
        display: flex !important;
        align-items: flex-start;
        gap: 9px;
        margin: 2px 0 0 !important;
        cursor: pointer;
        color: rgba(40, 30, 61, .72) !important;
        font-size: 11.5px !important;
        line-height: 1.5 !important;
        font-weight: 400 !important;
    }

    #msPopup .ms-popup-form .ms-consent input[type="checkbox"] {
        width: 16px !important;
        height: 16px !important;
        min-width: 16px !important;
        min-height: 16px !important;
        margin: 2px 0 0 !important;
        padding: 0 !important;
        flex-shrink: 0;
        cursor: pointer;
        box-shadow: none !important;
    }

    #msPopup .ms-popup-form .ms-consent a {
        color: var(--ms-purple) !important;
        font-weight: 700;
        text-decoration: underline;
    }

    #msPopup .ms-popup-form .ms-consent a:hover {
        color: var(--ms-teal) !important;
    }

    #msPopup .ms-popup-form .ff-btn-submit:disabled:not(.ff-btn-processing) {
        opacity: .5 !important;
        cursor: not-allowed !important;
        transform: none !important;
        box-shadow: none !important;
    }


    /* =========================================================
   VALIDATION ERROR
   ========================================================= */

    #msPopup .ms-popup-form .text-danger,
    #msPopup .ms-popup-form .error,
    #msPopup .ms-popup-form .ff-el-is-error .text-danger {

        color: #C83F62 !important;

        font-size: 10px !important;
    }


    #msPopup .ms-popup-form .ff-el-is-error input,
    #msPopup .ms-popup-form .ff-el-is-error textarea,
    #msPopup .ms-popup-form .ff-el-is-error select {

        border-color: rgba(200, 63, 98, .55) !important;
    }


    /* =========================================================
   SUBMIT BUTTON
   ========================================================= */

    #msPopup .ms-popup-form .ff_submit_btn_wrapper {

        width: 100% !important;

        margin: 11px 0 0 !important;

        padding: 0 !important;
    }


    #msPopup .ms-popup-form .ff-btn-submit,
    #msPopup .ms-popup-form button[type="submit"],
    #msPopup .ms-popup-form input[type="submit"] {

        width: 100% !important;

        min-width: 100% !important;

        height: 47px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        margin: 0 !important;

        padding: 0 18px !important;

        border: 0 !important;

        border-radius: 11px !important;

        background: #5A2EA6 !important;

        background-image: linear-gradient(90deg,
                #5A2EA6,
                #7449C8 52%,
                #2FA8A1) !important;

        color: #FFFFFF !important;

        font-size: 13.5px !important;
        line-height: 1 !important;

        font-weight: 800 !important;

        letter-spacing: .01em !important;

        opacity: 1 !important;

        cursor: pointer !important;

        box-shadow:
            0 10px 22px rgba(54, 31, 96, .18) !important;

        transition:
            transform .2s ease,
            box-shadow .2s ease !important;
    }


    #msPopup .ms-popup-form .ff-btn-submit:hover,
    #msPopup .ms-popup-form button[type="submit"]:hover,
    #msPopup .ms-popup-form input[type="submit"]:hover {

        transform: translateY(-2px) !important;

        box-shadow:
            0 14px 28px rgba(54, 31, 96, .24) !important;
    }


    #msPopup .ms-popup-form .ff-btn-submit:active,
    #msPopup .ms-popup-form button[type="submit"]:active,
    #msPopup .ms-popup-form input[type="submit"]:active {

        transform: translateY(0) !important;
    }


    #msPopup .ms-popup-form .ff-btn-submit:disabled,
    #msPopup .ms-popup-form button[type="submit"]:disabled,
    #msPopup .ms-popup-form input[type="submit"]:disabled,
    #msPopup .ms-popup-form .ff-btn-processing {

        background-image: linear-gradient(90deg,
                #5A2EA6,
                #7449C8,
                #2FA8A1) !important;

        color: #FFFFFF !important;

        opacity: .8 !important;

        cursor: wait !important;
    }


    /* =========================================================
   SUCCESS MESSAGE
   ========================================================= */

    #msPopup .ms-popup-form .ff-message-success {

        margin: 12px 0 0 !important;

        padding: 12px 13px !important;

        border: 1px solid rgba(47, 168, 161, .20) !important;

        border-radius: 11px !important;

        background: #F2FFFC !important;

        color: #216B64 !important;

        font-size: 12px !important;
        line-height: 1.5 !important;
    }


    /* =========================================================
   PREVENT INNER FORM SCROLL
   ========================================================= */

    #msPopup .ms-popup-form .fluentform,
    #msPopup .ms-popup-form .frm-fluent-form,
    #msPopup .ms-popup-form .ff-el-form-top,
    #msPopup .ms-popup-form .ff-el-form-bottom,
    #msPopup .ms-popup-form .ff-t-container,
    #msPopup .ms-popup-form .ff-t-cell {

        max-height: none !important;
        overflow: visible !important;
    }


    /* =========================================================
   MOBILE
   ========================================================= */

    @media(max-width:600px) {

        #msPopup {

            align-items: flex-start;

            padding: 14px;

            background: rgba(255, 255, 255, .12);
        }


        #msPopup .ms-popup-box {

            width: min(100%, 390px);

            margin: auto;

            padding: 20px 17px 18px;

            border-radius: 21px;
        }


        #msPopup h2 {

            font-size: 24px;
        }


        #msPopup .ms-popup-subtitle {

            margin-bottom: 14px;

            font-size: 11.75px;
        }


        #msPopup .ms-popup-close {

            top: 10px;
            right: 10px;

            width: 32px;
            height: 32px;

            font-size: 23px !important;
        }


        #msPopup .ms-popup-label {

            margin-bottom: 10px;

            padding: 6px 11px;

            font-size: 10.75px;
        }


        #msPopup .ms-popup-form .ff-el-group {

            margin-bottom: 8px !important;
        }


        #msPopup .ms-popup-form input:not([type="checkbox"]):not([type="radio"]):not([type="submit"]),

        #msPopup .ms-popup-form textarea,

        #msPopup .ms-popup-form select {

            min-height: 40px !important;

            padding: 8px 10px !important;

            border-radius: 10px !important;
        }


        #msPopup .ms-popup-form textarea {

            min-height: 62px !important;
        }


        #msPopup .ms-popup-form .ff-btn-submit,
        #msPopup .ms-popup-form button[type="submit"],
        #msPopup .ms-popup-form input[type="submit"] {

            height: 45px !important;

            border-radius: 10px !important;
        }

    }


    /* Stack the two-column rows on very small phones */
    @media(max-width:480px) {

        #msPopup .ms-popup-form .ff-t-container {
            flex-direction: column;
            gap: 0;
        }

    }


    /* =========================================================
   SHORT SCREEN
   ========================================================= */

    @media(max-height:720px) {

        #msPopup {

            align-items: flex-start;
        }


        #msPopup .ms-popup-box {

            margin: 14px auto;
        }

    }


    /* =========================================================
   REDUCED MOTION
   ========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #msPopup,
        #msPopup .ms-popup-box,
        #msPopup .ms-popup-close,
        #msPopup input,
        #msPopup textarea,
        #msPopup select,
        #msPopup button {

            transition: none !important;
            animation: none !important;
        }

    }
</style>


<script>
    (function() {

        "use strict";

        /* Budget options per service (generated from the PHP array above) */
        var MS_BUDGETS = <?php echo json_encode($budgets, JSON_UNESCAPED_UNICODE); ?>;


        function initMinerdiaPopup() {

            var popup = document.getElementById("msPopup");

            if (!popup) {
                return;
            }


            if (popup.dataset.initialized === "true") {
                return;
            }

            popup.dataset.initialized = "true";


            var closeButton =
                popup.querySelector(".ms-popup-close");

            var popupBox =
                popup.querySelector(".ms-popup-box");


            var lastFocusedElement = null;

            var previousBodyOverflow = "";


            function getFocusableElements() {

                return Array.prototype.slice.call(

                    popup.querySelectorAll(

                        'a[href],' +
                        'button:not([disabled]),' +
                        'textarea:not([disabled]),' +
                        'input:not([disabled]):not([type="hidden"]),' +
                        'select:not([disabled]),' +
                        '[tabindex]:not([tabindex="-1"])'

                    )

                );

            }


            /* =====================================================
               OPEN POPUP
               ===================================================== */

            function openPopup() {

                if (popup.classList.contains("active")) {
                    return;
                }


                lastFocusedElement =
                    document.activeElement;


                previousBodyOverflow =
                    document.body.style.overflow;


                popup.hidden = false;

                popup.classList.add("ms-visible");

                popup.setAttribute(
                    "aria-hidden",
                    "false"
                );


                document.body.style.overflow =
                    "hidden";


                requestAnimationFrame(function() {

                    requestAnimationFrame(function() {

                        popup.classList.add("active");

                    });

                });


                window.setTimeout(function() {

                    var firstField =
                        popup.querySelector(
                            '.ms-popup-form input:not([type="hidden"]):not([type="submit"]),' +
                            '.ms-popup-form textarea,' +
                            '.ms-popup-form select'
                        );


                    if (firstField) {

                        try {

                            firstField.focus({
                                preventScroll: true
                            });

                        } catch (error) {

                            firstField.focus();

                        }

                    }

                }, 300);

            }


            /* =====================================================
               CLOSE POPUP
               ===================================================== */

            function closePopup() {

                if (!popup.classList.contains("active")) {
                    return;
                }


                popup.classList.remove("active");

                popup.setAttribute(
                    "aria-hidden",
                    "true"
                );


                document.body.style.overflow =
                    previousBodyOverflow;


                window.setTimeout(function() {

                    popup.classList.remove("ms-visible");

                    popup.hidden = true;

                }, 230);


                if (
                    lastFocusedElement &&
                    typeof lastFocusedElement.focus === "function"
                ) {

                    window.setTimeout(function() {

                        try {

                            lastFocusedElement.focus({
                                preventScroll: true
                            });

                        } catch (error) {

                            lastFocusedElement.focus();

                        }

                    }, 250);

                }

            }


            /* =====================================================
               CLOSE BUTTON
               ===================================================== */

            if (closeButton) {

                closeButton.addEventListener(
                    "click",
                    closePopup, {
                        passive: true
                    }
                );

            }


            /* =====================================================
               CLICK OUTSIDE
               ===================================================== */

            popup.addEventListener(
                "click",
                function(event) {

                    if (event.target === popup) {

                        closePopup();

                    }

                }
            );


            if (popupBox) {

                popupBox.addEventListener(
                    "click",
                    function(event) {

                        event.stopPropagation();

                    }
                );

            }


            /* =====================================================
               ESC + FOCUS TRAP
               ===================================================== */

            document.addEventListener(
                "keydown",
                function(event) {

                    if (
                        !popup.classList.contains("active")
                    ) {
                        return;
                    }


                    if (event.key === "Escape") {

                        closePopup();

                        return;

                    }


                    if (event.key !== "Tab") {
                        return;
                    }


                    var focusable =
                        getFocusableElements();


                    if (!focusable.length) {
                        return;
                    }


                    var first =
                        focusable[0];


                    var last =
                        focusable[
                            focusable.length - 1
                        ];


                    if (
                        event.shiftKey &&
                        document.activeElement === first
                    ) {

                        event.preventDefault();

                        last.focus();

                    } else if (
                        !event.shiftKey &&
                        document.activeElement === last
                    ) {

                        event.preventDefault();

                        first.focus();

                    }

                }
            );


            /* =====================================================
               MANUAL POPUP TRIGGERS
               ===================================================== */

            document.addEventListener(
                "click",
                function(event) {

                    var trigger =
                        event.target.closest(
                            '.ms-open-popup,' +
                            'a[href="#msPopupOpen"],' +
                            'button[data-popup="msPopupOpen"],' +
                            '[data-ms-popup-open]'
                        );


                    if (!trigger) {
                        return;
                    }


                    event.preventDefault();

                    openPopup();

                }
            );


            /* =====================================================
               AUTO OPEN IMMEDIATELY WHEN THE SITE LOADS

               Set MS_SHOW_ONCE_PER_SESSION to true if you only want
               it to appear once per visit (not on every page).
               ===================================================== */

            var MS_SHOW_ONCE_PER_SESSION = false;

            var alreadyShown = false;

            if (MS_SHOW_ONCE_PER_SESSION) {

                try {
                    alreadyShown = sessionStorage.getItem("msPopupShown") === "1";
                    sessionStorage.setItem("msPopupShown", "1");
                } catch (error) {}

            }

            if (!alreadyShown) {

                openPopup();

            }


            /* =====================================================
               SERVICE -> BUDGET OPTIONS
               ===================================================== */

            var serviceSelect = document.getElementById("ms_service");
            var budgetSelect = document.getElementById("ms_budget");

            if (serviceSelect && budgetSelect) {

                serviceSelect.addEventListener("change", function() {

                    var list = MS_BUDGETS[serviceSelect.value] || MS_BUDGETS["default"] || [];

                    budgetSelect.innerHTML = "";

                    list.forEach(function(text) {

                        var opt = document.createElement("option");

                        opt.value = text;
                        opt.textContent = text;

                        budgetSelect.appendChild(opt);

                    });

                });

            }


            /* =====================================================
               FORM SUBMIT (AJAX -> submit-audit.php)
               ===================================================== */

            var form = document.getElementById("msAuditForm");

            if (form) {

                var consentBox = document.getElementById("ms_consent");
                var submitBtn = form.querySelector(".ff-btn-submit");

                /* Submit stays disabled until Terms & Privacy are accepted */
                function syncSubmit() {
                    if (submitBtn && consentBox) {
                        submitBtn.disabled = !consentBox.checked;
                    }
                }

                if (consentBox) {
                    consentBox.addEventListener("change", syncSubmit);
                }

                form.addEventListener("submit", function(e) {

                    e.preventDefault();

                    var btn = form.querySelector(".ff-btn-submit");
                    var msg = document.getElementById("msFormMsg");

                    if (!form.checkValidity()) {
                        form.reportValidity();
                        return;
                    }

                    btn.disabled = true;
                    btn.classList.add("ff-btn-processing");

                    fetch(form.action, {
                            method: "POST",
                            body: new FormData(form),
                            headers: { "Accept": "application/json" }
                        })
                        .then(function(r) {
                            return r.json();
                        })
                        .then(function(res) {

                            msg.textContent = res.message;
                            msg.hidden = false;

                            if (res.ok) {
                                form.reset();
                            }

                        })
                        .catch(function() {

                            msg.textContent = "Network error. Please try again.";
                            msg.hidden = false;

                        })
                        .finally(function() {

                            btn.classList.remove("ff-btn-processing");
                            syncSubmit();

                        });

                });

            }


            window.openMinerdiaPopup =
                openPopup;


            window.closeMinerdiaPopup =
                closePopup;

        }


        if (document.readyState === "loading") {

            document.addEventListener(
                "DOMContentLoaded",
                initMinerdiaPopup, {
                    once: true
                }
            );

        } else {

            initMinerdiaPopup();

        }

    })();
</script>