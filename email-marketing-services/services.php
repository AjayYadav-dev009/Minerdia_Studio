<?php
$title_plain  = 'Our Email Marketing';
$title_accent = 'Services';
$description  = 'We provide <strong>businesses in India</strong> with email marketing services that allow them to communicate with customers easily and drive sales.';

// [tab title, panel text]
$tabs = [
    ['Newsletter Campaigns', 'We create newsletters that inform your audience about your business. They share your offers, services and latest news in an engaging way. Our newsletters keep you in touch with your audience.'],
    ['Promotional Email Campaigns', 'Our <strong>promotional emails</strong> help businesses sell more and bring their products to the customer\'s attention. We build them to stay out of spam folders.'],
    ['Email Automation', 'We set up email automation that reminds customers about abandoned carts, follows up on leads, and keeps customers engaged.'],
    ['Lead Nurturing Campaigns', 'We help businesses gain the trust of customers. We develop a series of emails that lead them to take action. This helps turn leads into customers.'],
    ['Customer Retention Emails', 'We develop email campaigns that keep your customers engaged. We make sure they feel special and want to keep doing business with you.'],
    ['Email Performance Optimization', 'We look at how your email campaigns are doing. We test approaches, learn about your audience, and measure engagement. This helps us improve your email performance over time.'],
];
?>
<section class="ms-ems">

    <style>
        .ms-ems,
        .ms-ems * {
            box-sizing: border-box;
        }

        .ms-ems {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-ems-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-ems-head {
            max-width: 760px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .ms-ems-title {
            margin: 0 0 12px;
            font-size: 36px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-ems-title span {
            color: var(--purple);
        }

        .ms-ems-desc {
            margin: 0;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-ems-desc strong {
            font-weight: 600;
        }

        /* ---------- Tabs ---------- */
        .ms-ems-tablist {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 26px;
        }

        .ms-ems-tab {
            padding: 11px 22px;
            border: 1px solid rgba(90, 46, 166, .3);
            border-radius: 50px;
            background: #F3EEFB;
            font-family: var(--font-head);
            font-size: 14.5px;
            font-weight: 500;
            line-height: 1.3;
            color: var(--purple);
            cursor: pointer;
            transition: background .25s ease, color .25s ease, transform .25s ease, box-shadow .25s ease;
        }

        .ms-ems-tab:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(90, 46, 166, .18);
        }

        .ms-ems-tab[aria-selected="true"] {
            border-color: var(--purple);
            background: var(--purple);
            color: #fff;
            box-shadow: 0 8px 20px rgba(90, 46, 166, .30);
        }

        .ms-ems-tab:focus-visible {
            outline: 2px solid var(--purple);
            outline-offset: 3px;
        }

        /* ---------- Panel ---------- */
        .ms-ems-panel {
            padding: 38px 44px;
            border: 1px solid rgba(90, 46, 166, .15);
            border-radius: 24px;
            background: linear-gradient(145deg, #FFFFFF 0%, #F3EDFC 55%, #E6DBF8 100%);
            box-shadow: 0 10px 28px rgba(90, 46, 166, .15);
            text-align: center;
            animation: ms-ems-fade .35s ease;
        }

        .ms-ems-panel[hidden] {
            display: none;
        }

        .ms-ems-panel p {
            max-width: 780px;
            margin: 0 auto;
            font-size: 16px;
            line-height: 1.8;
            font-weight: 400;
            color: #222;
        }

        .ms-ems-panel strong {
            font-weight: 600;
        }

        @keyframes ms-ems-fade {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-ems-title {
                font-size: 31px;
            }
        }

        @media (max-width: 575px) {
            .ms-ems {
                padding: 20px 16px 45px;
            }

            .ms-ems-title {
                font-size: 26px;
            }

            .ms-ems-desc {
                font-size: 14px;
            }

            .ms-ems-tablist {
                gap: 8px;
            }

            .ms-ems-tab {
                padding: 10px 16px;
                font-size: 13px;
            }

            .ms-ems-panel {
                padding: 26px 20px;
                border-radius: 18px;
            }

            .ms-ems-panel p {
                font-size: 14.5px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-ems-panel {
                animation: none;
            }
        }
    </style>

    <div class="ms-ems-wrap">

        <div class="ms-ems-head">
            <h2 class="ms-ems-title"><?php echo htmlspecialchars($title_plain); ?> <span><?php echo htmlspecialchars($title_accent); ?></span></h2>
            <p class="ms-ems-desc"><?php echo $description; ?></p>
        </div>

        <div class="ms-ems-tabs">
            <div class="ms-ems-tablist" role="tablist" aria-label="Email marketing services">
                <?php foreach ($tabs as $i => $tab) : ?>
                    <button type="button" class="ms-ems-tab" role="tab" id="ms-ems-tab-<?php echo $i; ?>" aria-controls="ms-ems-panel-<?php echo $i; ?>" aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>" tabindex="<?php echo $i === 0 ? '0' : '-1'; ?>"><?php echo htmlspecialchars($tab[0]); ?></button>
                <?php endforeach; ?>
            </div>

            <?php foreach ($tabs as $i => $tab) : ?>
                <div class="ms-ems-panel" role="tabpanel" id="ms-ems-panel-<?php echo $i; ?>" aria-labelledby="ms-ems-tab-<?php echo $i; ?>"<?php echo $i === 0 ? '' : ' hidden'; ?>>
                    <p><?php echo $tab[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <script>
        (function() {
            var root = document.querySelector('.ms-ems');
            if (!root) return;

            var tabs = Array.prototype.slice.call(root.querySelectorAll('.ms-ems-tab'));
            var panels = Array.prototype.slice.call(root.querySelectorAll('.ms-ems-panel'));

            function select(i, focus) {
                tabs.forEach(function(tab, n) {
                    var on = n === i;
                    tab.setAttribute('aria-selected', on ? 'true' : 'false');
                    tab.setAttribute('tabindex', on ? '0' : '-1');
                    if (on && focus) tab.focus();
                });
                panels.forEach(function(panel, n) {
                    if (n === i) panel.removeAttribute('hidden');
                    else panel.setAttribute('hidden', '');
                });
            }

            tabs.forEach(function(tab, i) {
                tab.addEventListener('click', function() {
                    select(i, false);
                });

                // arrow keys / Home / End move between tabs
                tab.addEventListener('keydown', function(e) {
                    var next = null;
                    if (e.key === 'ArrowRight' || e.key === 'ArrowDown') next = (i + 1) % tabs.length;
                    else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') next = (i - 1 + tabs.length) % tabs.length;
                    else if (e.key === 'Home') next = 0;
                    else if (e.key === 'End') next = tabs.length - 1;
                    if (next !== null) {
                        e.preventDefault();
                        select(next, true);
                    }
                });
            });
        })();
    </script>
</section>