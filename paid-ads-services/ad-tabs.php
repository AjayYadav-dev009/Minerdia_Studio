<?php
// Each tab: label, image path, list of goals (shown in 2 columns)
$tabs = [
    [
        'label' => 'Google Ads',
        'image' => 'images/google-ads.jpg',
        'items' => [
            'Awareness and Dissemination',
            'Product & Brand Considerations',
            'Lead',
            'App Promotion',
            'Local Store Visits and Promotions',
            'Website Traffic',
            'Video View',
            'Sales',
        ],
    ],
    [
        'label' => 'Facebook Ads',
        'image' => 'images/facebook-ads.jpg',
        'items' => [
            'Brand Awareness and Reach',
            'Lead Generation Forms',
            'Page Likes and Engagement',
            'App Installs',
            'Store Traffic and Offers',
            'Website Conversions',
            'Video Views',
            'Catalogue Sales',
        ],
    ],
    [
        'label' => 'Instagram Ads',
        'image' => 'images/instagram-ads.jpg',
        'items' => [
            'Reels and Story Awareness',
            'Influencer-style Creatives',
            'Lead Generation',
            'App Promotion',
            'Profile Visits and Followers',
            'Website Traffic',
            'Video Views',
            'Shopping and Sales',
        ],
    ],
    [
        'label' => 'Youtube Ads',
        'image' => 'images/youtube-ads.jpg',
        'items' => [
            'Brand Awareness and Reach',
            'Product Consideration',
            'Lead Generation',
            'App Promotion',
            'Local Store Visits',
            'Website Traffic',
            'Video Views and Subscribers',
            'Sales',
        ],
    ],
    [
        'label' => 'Linkedin Ads',
        'image' => 'images/linkedin-ads.jpg',
        'items' => [
            'B2B Brand Awareness',
            'Thought Leadership Content',
            'Lead Generation Forms',
            'Event Promotion',
            'Company Page Followers',
            'Website Traffic',
            'Video Views',
            'Job and Talent Promotion',
        ],
    ],
];
?>
<section class="ms-adtabs">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-adtabs,
        .ms-adtabs * {
            box-sizing: border-box;
        }

        .ms-adtabs {
            --purple: #5A2EA6;
            --green: #5fd068;
            width: 100%;
            padding: 40px 20px 50px;
            background: linear-gradient(135deg, #cdbdf0 0%, #e4d9f7 45%, #b9a2ea 100%);
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-adtabs-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Tab buttons ---------- */
        .ms-adtabs-nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
            margin: 0 0 30px;
            padding: 0;
            list-style: none;
        }

        .ms-adtabs-btn {
            padding: 9px 22px;
            border-radius: 50px;
            border: 1px solid var(--purple);
            background: linear-gradient(180deg, #fff 0%, #ece4fa 100%);
            color: #222;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 13px;
            font-weight: 400;
            cursor: pointer;
            box-shadow: 0 3px 8px rgba(90, 46, 166, .18);
            transition: .25s ease;
        }

        .ms-adtabs-btn:hover {
            transform: translateY(-2px);
        }

        .ms-adtabs-btn.is-active {
            background: var(--green);
            border-color: #3fae4a;
            color: #111;
            font-weight: 500;
        }

        /* ---------- Panel ---------- */
        .ms-adtabs-panel {
            display: none;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1.5fr);
            gap: 28px;
            align-items: center;
            padding: 20px;
            border-radius: 26px;
            background: rgba(255, 255, 255, .28);
            border: 1px solid rgba(255, 255, 255, .5);
            box-shadow: 0 10px 30px rgba(90, 46, 166, .15);
        }

        .ms-adtabs-panel.is-active {
            display: grid;
            animation: msAdFade .35s ease;
        }

        @keyframes msAdFade {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .ms-adtabs-img {
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 18px;
            overflow: hidden;
            border: 2px solid #fff;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .2);
            background: #ddd;
        }

        .ms-adtabs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .ms-adtabs-list {
            margin: 0;
            padding: 0;
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px 24px;
            align-content: center;
        }

        .ms-adtabs-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
            color: #111;
        }

        .ms-adtabs-list li i {
            margin-top: 4px;
            font-size: 12px;
            color: #000;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-adtabs-panel.is-active {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 575px) {
            .ms-adtabs {
                padding: 30px 14px 40px;
            }

            .ms-adtabs-nav {
                gap: 10px;
            }

            .ms-adtabs-btn {
                padding: 8px 16px;
                font-size: 12.5px;
            }

            .ms-adtabs-panel {
                padding: 14px;
                border-radius: 20px;
            }

            .ms-adtabs-list {
                grid-template-columns: 1fr;
                gap: 12px;
            }
        }
    </style>

    <div class="ms-adtabs-wrap">

        <ul class="ms-adtabs-nav" role="tablist">
            <?php foreach ($tabs as $i => $tab) : ?>
                <li>
                    <button type="button"
                            class="ms-adtabs-btn<?php echo $i === 0 ? ' is-active' : ''; ?>"
                            role="tab"
                            data-target="ms-adtab-<?php echo $i; ?>"
                            aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                        <?php echo htmlspecialchars($tab['label']); ?>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php foreach ($tabs as $i => $tab) : ?>
            <div class="ms-adtabs-panel<?php echo $i === 0 ? ' is-active' : ''; ?>"
                 id="ms-adtab-<?php echo $i; ?>" role="tabpanel">
                <div class="ms-adtabs-img">
                    <img src="<?php echo htmlspecialchars($tab['image']); ?>"
                         alt="<?php echo htmlspecialchars($tab['label']); ?>" loading="lazy">
                </div>
                <ul class="ms-adtabs-list">
                    <?php foreach ($tab['items'] as $item) : ?>
                        <li><i class="fa-solid fa-check"></i><span><?php echo htmlspecialchars($item); ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>

    </div>

    <script>
        (function() {
            var root = document.querySelector('.ms-adtabs');
            if (!root) return;
            var btns = root.querySelectorAll('.ms-adtabs-btn');
            var panels = root.querySelectorAll('.ms-adtabs-panel');

            btns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    btns.forEach(function(b) {
                        b.classList.remove('is-active');
                        b.setAttribute('aria-selected', 'false');
                    });
                    panels.forEach(function(p) { p.classList.remove('is-active'); });

                    btn.classList.add('is-active');
                    btn.setAttribute('aria-selected', 'true');
                    document.getElementById(btn.getAttribute('data-target')).classList.add('is-active');
                });
            });
        })();
    </script>
</section>