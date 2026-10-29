<!-- MINERDIA STUDIO | PREMIUM RATE LIST | NO BOTTOM NOTE -->
<section id="minerdia-rates-v2">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        #minerdia-rates-v2 {
            --purple: #58349a;
            --teal: #329da1;
            --ink: #201a3e;
            --muted: #77728d;
            --line: #e8e4f1;
            --gradient: linear-gradient(110deg, #58349a 0%, #5867aa 52%, #329da1 100%);
            position: relative;
            isolation: isolate;
            width: 100%;
            padding: 65px 20px 45px;
            overflow: hidden;
            background:
                radial-gradient(ellipse 470px 330px at 0% 12%, rgba(88, 52, 154, .07), transparent 75%),
                radial-gradient(ellipse 470px 350px at 100% 95%, rgba(50, 157, 161, .08), transparent 75%),
                #fff;
            font-family: 'Poppins', sans-serif;
            color: var(--ink);
        }

        #minerdia-rates-v2 *,
        #minerdia-rates-v2 *::before,
        #minerdia-rates-v2 *::after {
            box-sizing: border-box;
        }

        #minerdia-rates-v2 h2,
        #minerdia-rates-v2 p {
            margin: 0;
            padding: 0;
        }

        #minerdia-rates-v2 a {
            text-decoration: none !important;
        }

        #minerdia-rates-v2 .mr-container {
            max-width: 1120px;
            margin: 0 auto;
        }

        /* HEADING */

        #minerdia-rates-v2 .mr-heading {
            text-align: center;
            margin-bottom: 36px;
        }

        #minerdia-rates-v2 .mr-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 19px;
            border: 1px solid #e6dff3;
            border-radius: 50px;
            background: rgba(88, 52, 154, .055);
            color: var(--purple);
            font-size: 12px;
            font-weight: 700;
        }

        #minerdia-rates-v2 .mr-badge::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--teal);
            box-shadow: 0 0 0 4px rgba(50, 157, 161, .12);
        }

        #minerdia-rates-v2 .mr-title {
            margin-top: 17px;
            color: var(--ink);
            font-size: clamp(31px, 4.5vw, 48px);
            font-weight: 800;
            line-height: 1.18;
            letter-spacing: -1.5px;
        }

        #minerdia-rates-v2 .mr-title span {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #minerdia-rates-v2 .mr-subtitle {
            max-width: 590px;
            margin: 12px auto 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        /* TABLE */

        #minerdia-rates-v2 .mr-table {
            position: relative;
            border: 1px solid rgba(88, 52, 154, .12);
            border-radius: 24px;
            overflow: hidden;
            background: #fff;
            box-shadow:
                0 25px 65px rgba(45, 32, 88, .10),
                0 3px 15px rgba(45, 32, 88, .035);
        }

        #minerdia-rates-v2 .mr-table::before {
            content: "";
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient);
        }

        #minerdia-rates-v2 .mr-table-head {
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(0, 1fr) 155px;
            align-items: center;
            gap: 18px;
            padding: 23px 28px;
            background: var(--gradient);
            color: #fff;
            font-size: 13px;
            font-weight: 700;
        }

        #minerdia-rates-v2 .mr-table-head span:last-child {
            text-align: right;
        }

        /* ROW */

        #minerdia-rates-v2 .mr-row {
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(0, 1fr) 155px;
            align-items: center;
            gap: 18px;
            min-height: 86px;
            padding: 16px 28px;
            border-bottom: 1px solid var(--line);
            background: #fff;
            transition: background .25s;
        }

        #minerdia-rates-v2 .mr-row:last-child {
            border-bottom: 0;
        }

        #minerdia-rates-v2 .mr-row:hover {
            background: linear-gradient(95deg,
                    rgba(88, 52, 154, .045),
                    rgba(50, 157, 161, .04));
        }

        #minerdia-rates-v2 .mr-service {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: 0;
        }

        #minerdia-rates-v2 .mr-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            min-width: 44px;
            border: 1px solid rgba(88, 52, 154, .10);
            border-radius: 14px;
            background: linear-gradient(140deg,
                    rgba(88, 52, 154, .10),
                    rgba(50, 157, 161, .09));
            color: var(--purple);
            transition: transform .25s;
        }

        #minerdia-rates-v2 .mr-row:hover .mr-icon {
            transform: translateY(-2px);
        }

        #minerdia-rates-v2 .mr-icon svg {
            width: 21px;
            height: 21px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        #minerdia-rates-v2 .mr-service-copy {
            min-width: 0;
        }

        #minerdia-rates-v2 .mr-service-name {
            display: block;
            color: var(--ink);
            font-size: 13px;
            font-weight: 700;
            line-height: 1.5;
        }

        #minerdia-rates-v2 .mr-service-detail {
            display: block;
            margin-top: 3px;
            color: var(--muted);
            font-size: 10px;
            line-height: 1.5;
        }

        #minerdia-rates-v2 .mr-price {
            color: var(--purple);
            font-size: 14px;
            font-weight: 800;
            line-height: 1.5;
        }

        #minerdia-rates-v2 .mr-price small {
            display: block;
            margin-top: 2px;
            color: var(--muted);
            font-size: 10px;
            font-weight: 500;
        }

        /* BUTTON */

        #minerdia-rates-v2 .mr-action {
            display: flex;
            justify-content: flex-end;
        }

        #minerdia-rates-v2 a.mr-enquire {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 40px;
            padding: 10px 15px;
            border: 1px solid rgba(88, 52, 154, .16);
            border-radius: 50px;
            background: rgba(255, 255, 255, .9);
            color: var(--purple) !important;
            font-family: inherit;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
            transition:
                background .25s,
                color .25s,
                box-shadow .25s,
                transform .25s;
        }

        #minerdia-rates-v2 a.mr-enquire:hover,
        #minerdia-rates-v2 a.mr-enquire:focus-visible {
            color: #fff !important;
            background: var(--gradient);
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(88, 52, 154, .20);
        }

        #minerdia-rates-v2 .mr-enquire svg {
            width: 15px;
            height: 15px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
        }

        /* TABLET */

        @media(max-width:900px) {

            #minerdia-rates-v2 .mr-table-head,
            #minerdia-rates-v2 .mr-row {
                grid-template-columns: minmax(0, 1.3fr) minmax(0, 1fr) 125px;
                gap: 12px;
                padding-left: 18px;
                padding-right: 18px;
            }

            #minerdia-rates-v2 .mr-service {
                gap: 10px;
            }

            #minerdia-rates-v2 .mr-icon {
                width: 38px;
                height: 38px;
                min-width: 38px;
            }

            #minerdia-rates-v2 .mr-service-name {
                font-size: 12px;
            }

            #minerdia-rates-v2 .mr-price {
                font-size: 12px;
            }

            #minerdia-rates-v2 a.mr-enquire {
                padding: 9px 11px;
                font-size: 10px;
            }
        }

        /* MOBILE */

        @media(max-width:650px) {

            #minerdia-rates-v2 {
                padding: 42px 13px 30px;
            }

            #minerdia-rates-v2 .mr-heading {
                margin-bottom: 25px;
            }

            #minerdia-rates-v2 .mr-title {
                font-size: 32px;
                letter-spacing: -.9px;
            }

            #minerdia-rates-v2 .mr-subtitle {
                font-size: 11px;
            }

            #minerdia-rates-v2 .mr-table {
                border-radius: 19px;
            }

            #minerdia-rates-v2 .mr-table-head {
                grid-template-columns: 1fr auto;
                padding: 16px;
                font-size: 11px;
            }

            #minerdia-rates-v2 .mr-table-head span:last-child {
                display: none;
            }

            #minerdia-rates-v2 .mr-row {
                grid-template-columns: minmax(0, 1fr) auto;
                gap: 10px 12px;
                min-height: 0;
                padding: 16px 14px;
            }

            #minerdia-rates-v2 .mr-service {
                grid-column: 1/-1;
            }

            #minerdia-rates-v2 .mr-icon {
                width: 39px;
                height: 39px;
                min-width: 39px;
            }

            #minerdia-rates-v2 .mr-service-name {
                font-size: 12px;
            }

            #minerdia-rates-v2 .mr-service-detail {
                font-size: 10px;
            }

            #minerdia-rates-v2 .mr-price {
                padding-left: 49px;
                font-size: 13px;
            }

            #minerdia-rates-v2 a.mr-enquire {
                min-height: 36px;
                padding: 8px 12px;
                font-size: 10px;
            }
        }

        @media(prefers-reduced-motion:reduce) {
            #minerdia-rates-v2 * {
                transition: none !important;
            }
        }
    </style>

    <div class="mr-container">

        <div class="mr-heading">
            <span class="mr-badge">Quick Rate List</span>

            <h2 class="mr-title">
                All Prices <span>At a Glance</span>
            </h2>

            <p class="mr-subtitle">
                Explore our video production packages and choose the right
                creative solution for your brand.
            </p>
        </div>

        <div class="mr-table" id="rates">

            <div class="mr-table-head">
                <span>Video Production Services</span>
                <span>Estimated Price</span>
                <span>Get a Quote</span>
            </div>

            <!-- 01 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="5" width="14" height="14" rx="3" />
                            <path d="m17 10 4-3v10l-4-3" />
                            <path d="m9 9 4 3-4 3z" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">Testimonial Video</span>
                        <span class="mr-service-detail">Authentic customer stories & experiences</span>
                    </div>
                </div>

                <div class="mr-price">₹4,000 – ₹7,000</div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="Testimonial Video"
                        data-price="₹4,000 – ₹7,000"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 02 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="m3 7 9-4 9 4-9 4-9-4z" />
                            <path d="M3 7v10l9 4 9-4V7" />
                            <path d="M12 11v10" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">Product Promotion Video</span>
                        <span class="mr-service-detail">High-impact product marketing creatives</span>
                    </div>
                </div>

                <div class="mr-price">₹8,000 – ₹9,500</div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="Product Promotion Video"
                        data-price="₹8,000 – ₹9,500"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 03 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 3v18M3 12h18" />
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">Doctor & Expert Videos</span>
                        <span class="mr-service-detail">Professional educational & expert content</span>
                    </div>
                </div>

                <div class="mr-price">₹6,000 – ₹6,500</div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="Doctor & Expert Videos"
                        data-price="₹6,000 – ₹6,500"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 04 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="9" y="2" width="6" height="13" rx="3" />
                            <path d="M5 11a7 7 0 0 0 14 0M12 18v4M8 22h8" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">Podcast & Reel Videos</span>
                        <span class="mr-service-detail">Podcast production & engaging short-form edits</span>
                    </div>
                </div>

                <div class="mr-price">₹9,500 – ₹10,500</div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="Podcast & Reel Videos"
                        data-price="₹9,500 – ₹10,500"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 05 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="7" y="2" width="10" height="20" rx="3" />
                            <path d="M11 18h2m-3-12 6 4-6 4z" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">UGC Ad Videos</span>
                        <span class="mr-service-detail">Creator-style ad content · Pack of 6</span>
                    </div>
                </div>

                <div class="mr-price">
                    ₹45,000 – ₹60,000
                    <small>Pack of 6 Videos</small>
                </div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="UGC Ad Videos (Pack of 6)"
                        data-price="₹45,000 – ₹60,000"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 06 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 4C10 4 5 9 5 16a4 4 0 0 0 4 4c7 0 12-6 11-16z" />
                            <path d="M4 21c3-7 7-10 12-13" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">Ayurveda Doctor–Patient Video</span>
                        <span class="mr-service-detail">Healthcare storytelling & awareness production</span>
                    </div>
                </div>

                <div class="mr-price">₹10,000 – ₹11,000</div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="Ayurveda Doctor–Patient Video"
                        data-price="₹10,000 – ₹11,000"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 07 -->
            <div class="mr-row">
                <div class="mr-service">
                    <div class="mr-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="m12 2 3 7 7 3-7 3-3 7-3-7-7-3 7-3 3-7z" />
                        </svg>
                    </div>
                    <div class="mr-service-copy">
                        <span class="mr-service-name">High-Quality Premium Production</span>
                        <span class="mr-service-detail">Cinematic production & premium brand films</span>
                    </div>
                </div>

                <div class="mr-price">₹25,000+</div>

                <div class="mr-action">
                    <a class="mr-enquire"
                        data-service="High-Quality Premium Production"
                        data-price="Starting from ₹25,000"
                        href="https://wa.me/919711555223"
                        target="_blank" rel="noopener noreferrer">
                        Enquire Now
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- BOTTOM NOTE AND INFO ICON COMPLETELY REMOVED -->

    </div>

    <script>
        (function() {

            const root = document.getElementById('minerdia-rates-v2');

            if (!root || root.dataset.ready === '1') return;

            root.dataset.ready = '1';

            const number = '919711555223';

            root.querySelectorAll('.mr-enquire').forEach(function(button) {

                const service = button.dataset.service;
                const price = button.dataset.price;

                const message =
                    'Hello Minerdia Studio!\n\n' +
                    'I am interested in your video production service.\n\n' +
                    '*Service:* ' + service + '\n' +
                    '*Estimated Price:* ' + price + '\n\n' +
                    'Please share the package details, production process and availability.\n\n' +
                    'Thank you!';

                button.href =
                    'https://wa.me/' + number +
                    '?text=' + encodeURIComponent(message);

            });

        })();
    </script>

</section>
<!-- END PREMIUM RATE LIST -->