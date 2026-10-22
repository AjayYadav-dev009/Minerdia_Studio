<?php
// Edit the content here.
$title    = 'Our Paid Ads';
$accent   = 'Strategies';
$subtitle = '6 performance marketing pillars that generate qualified leads and improve ROAS Every single strategy has been battle tested in thousands of campaigns.';

// 'icon' is inline SVG (trusted markup, not escaped). 'score' is the progress bar value in %.
$strategies = [
    [
        'title' => 'Google Ads Mastery',
        'text'  => 'Search, Display, and Shopping campaigns optimised for maximum ROI and lead generation.',
        'items' => ['Search intent targeting', 'Intelligent bidding strategies', 'Negative keywords optimisation', 'Ad extensions optimisation'],
        'score' => 94,
        'icon'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="21" cy="21" r="12"/><circle cx="21" cy="21" r="6"/><path d="M30 30l11 11" stroke-width="5"/><path d="M17 19c1-2 3-3 5-3"/></svg>',
    ],
    [
        'title' => 'Facebook & Instagram Ads',
        'text'  => 'Target the right people on Meta platforms, turning strangers into paying customers.',
        'items' => ['Custom audiences creation', 'Scaling lookalike audiences', 'Creative testing & optimization', 'Instagram story ads'],
        'score' => 97,
        'icon'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="7" y="7" width="34" height="34" rx="8"/><path d="M29 41V26h5l1-6h-6v-3c0-2 1-3 3-3h3v-5h-4c-5 0-7 3-7 7v4h-5v6h5v15"/></svg>',
    ],
    [
        'title' => 'LinkedIn B2B Advertising',
        'text'  => 'Target decision-makers and generate high-quality B2B leads using LinkedIn’s professional network.',
        'items' => ['Job Title and Industry Targeting', 'Sponsored InMail Campaigns', 'Thought Leadership Content', 'Account-Based Marketing'],
        'score' => 92,
        'icon'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="7" y="7" width="34" height="34" rx="6"/><path d="M15 21v13M15 14.5v.5M22 34V21m0 6c0-4 3-6 6-6s5 2 5 6v7"/></svg>',
    ],
    [
        'title' => 'Strategic Retargeting',
        'text'  => 'Re-engage visitors through precise re-targeting so they return to complete their purchases.',
        'items' => ['Dynamic Product Re-targeting', 'Cart Abandonment Campaigns', 'Cross-Platform Re-marketing', 'Sequential Messaging'],
        'score' => 96,
        'icon'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M38 17a16 16 0 0 0-28 2M10 31a16 16 0 0 0 28-2"/><path d="M10 11v8h8M38 37v-8h-8"/><circle cx="24" cy="21" r="4"/><path d="M17 33c1-5 4-7 7-7s6 2 7 7"/></svg>',
    ],
    [
        'title' => 'Conversion Tracking & Analytics',
        'text'  => 'Track every touchpoint and optimize for the actions that matter most to your bottom line.',
        'items' => ['Enhanced Conversion Tracking', 'Multi-Touch Attribution', 'Funnel Analysis', 'Revenue Attribution Modeling'],
        'score' => 98,
        'icon'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="11" cy="24" r="4"/><path d="M15 24h8m0-12v24m0-24h6m-6 12h6m-6 12h6"/><rect x="29" y="8" width="9" height="8" rx="1.5"/><rect x="29" y="20" width="9" height="8" rx="1.5"/><rect x="29" y="32" width="9" height="8" rx="1.5"/></svg>',
    ],
    [
        'title' => 'Continuous A/B Testing',
        'text'  => 'Data-driven testing that systematically measures campaign performance over time Improve it.',
        'items' => ['Different forms of advertising copy', 'landing page testing', 'Audience segment testing', 'Big Strategy Optimization'],
        'score' => 95,
        'icon'  => '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="5" y="12" width="15" height="24" rx="3"/><rect x="28" y="12" width="15" height="24" rx="3"/><path d="M10 29l3-9 3 9m-5-3h4M32 20h4a2.5 2.5 0 0 1 0 5h-4h5a2.5 2.5 0 0 1 0 5h-5z"/><path d="M22 24h4m-2-2l2 2-2 2"/></svg>',
    ],
];
?>
<section class="ms-strat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .ms-strat,
        .ms-strat * {
            box-sizing: border-box;
        }

        .ms-strat {
            --purple: #5A2EA6;
            --teal: #2fa89a;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-strat-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-strat-head {
            text-align: center;
            margin-bottom: 38px;
        }

        .ms-strat-title {
            margin: 0 0 12px;
            font-size: 38px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-strat-title span {
            color: var(--purple);
        }

        .ms-strat-sub {
            max-width: 640px;
            margin: 0 auto;
            font-size: 11.5px;
            line-height: 1.65;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Grid ---------- */
        .ms-strat-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .ms-strat-card {
            display: flex;
            flex-direction: column;
            padding: 14px 12px 12px;
            border: 1.5px solid var(--purple);
            border-radius: 12px;
            background: linear-gradient(180deg, #ffffff 0%, #ece6f6 55%, #e3daf2 100%);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-strat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .22);
        }

        .ms-strat-icon {
            width: 52px;
            height: 52px;
            margin-bottom: 14px;
            border-radius: 12px;
            background: #f4f1f9;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .08);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ms-strat-icon svg {
            width: 28px;
            height: 28px;
            fill: none;
            stroke: #111;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-strat-card h3 {
            margin: 0 0 6px;
            font-size: 12px;
            line-height: 1.35;
            font-weight: 600;
            color: #000;
        }

        .ms-strat-card p {
            margin: 0 0 10px;
            font-size: 10.5px;
            line-height: 1.5;
            font-weight: 400;
            text-align: justify;
            color: #222;
        }

        .ms-strat-list {
            list-style: none;
            margin: 0 0 12px;
            padding: 0;
            display: grid;
            gap: 7px;
        }

        .ms-strat-list li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 10.5px;
            line-height: 1.4;
            font-weight: 400;
            color: #111;
        }

        .ms-strat-list svg {
            flex: 0 0 11px;
            width: 11px;
            height: 11px;
            fill: none;
            stroke: #111;
            stroke-width: 3.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* ---------- Progress ---------- */
        .ms-strat-bar {
            position: relative;
            height: 11px;
            margin-top: auto;
            border-radius: 20px;
            background: #fff;
            border: 1px solid #d8d0e8;
            overflow: hidden;
        }

        .ms-strat-fill {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 0;
            height: 100%;
            border-radius: 20px;
            background: var(--teal);
            color: #fff;
            font-size: 7px;
            font-weight: 700;
            line-height: 1;
            transition: width 1.1s ease;
        }

        .ms-strat-card.is-in .ms-strat-fill {
            width: var(--w);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-strat-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ms-strat-title {
                font-size: 32px;
            }
        }

        @media (max-width: 575px) {
            .ms-strat {
                padding: 24px 14px 40px;
            }

            .ms-strat-title {
                font-size: 26px;
            }

            .ms-strat-grid {
                grid-template-columns: 1fr;
            }

            .ms-strat-card h3 {
                font-size: 14px;
            }

            .ms-strat-card p,
            .ms-strat-list li {
                font-size: 12.5px;
            }

            .ms-strat-bar {
                height: 13px;
            }

            .ms-strat-fill {
                font-size: 8px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-strat-fill {
                transition: none;
            }
        }
    </style>

    <div class="ms-strat-wrap">

        <div class="ms-strat-head">
            <h2 class="ms-strat-title"><?php echo htmlspecialchars($title); ?> <span><?php echo htmlspecialchars($accent); ?></span></h2>
            <p class="ms-strat-sub"><?php echo htmlspecialchars($subtitle); ?></p>
        </div>

        <div class="ms-strat-grid">
            <?php foreach ($strategies as $s) : ?>
                <article class="ms-strat-card" style="--w: <?php echo (int) $s['score']; ?>%;">
                    <div class="ms-strat-icon"><?php echo $s['icon']; ?></div>
                    <h3><?php echo htmlspecialchars($s['title']); ?></h3>
                    <p><?php echo htmlspecialchars($s['text']); ?></p>
                    <ul class="ms-strat-list">
                        <?php foreach ($s['items'] as $item) : ?>
                            <li>
                                <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="4 12.5 9.5 18 20 6"></polyline></svg>
                                <?php echo htmlspecialchars($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="ms-strat-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php echo (int) $s['score']; ?>">
                        <div class="ms-strat-fill"><?php echo (int) $s['score']; ?>%</div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>

    <script>
        (function() {
            var cards = document.querySelectorAll('.ms-strat-card');
            if (!cards.length) return;

            // Fill the progress bars when each card scrolls into view
            if (!('IntersectionObserver' in window)) {
                cards.forEach(function(c) { c.classList.add('is-in'); });
                return;
            }

            var io = new IntersectionObserver(function(entries) {
                entries.forEach(function(e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('is-in');
                        io.unobserve(e.target);
                    }
                });
            }, { threshold: 0.3 });

            cards.forEach(function(c) { io.observe(c); });
        })();
    </script>
</section>