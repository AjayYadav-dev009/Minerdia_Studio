<?php
$intro = 'We create scripts at Minerdia Studio to help people such as businesses and creators say what they want to say in a way. Time is taken to prepare every script for the viewer or listener to be interested and for your content to be interesting and effective. All of our scripts are designed to enhance your content and get your message across to others.';

// Each tab: button label + panel text (<b> is allowed in the text)
$tabs = [
    ['YouTube Script Writing', 'Develop compelling <b>YouTube video scripts</b> that capture viewers attention through strong hooks, storytelling techniques, and retention strategies that encourage longer viewing.'],
    ['Advertisement Script Writing', 'Our <b>advertising scripts</b> are clear and persuasive and are used to assist brands in promoting their products and services in a professional and engaging manner.'],
    ['Instagram Reel Scripts', 'We write content for short-form videos, such as videos for Instagram Reels, which catch the attention of the viewers and get them to interact with the content.'],
    ['Brand Storytelling', 'Our scripts are designed to tell brands\' stories in a natural and relatable way that encourages viewers to trust the brand.'],
    ['Podcast Script Writing', 'We create well-structured podcasts that ensure conversations are well organised, informative and easy to follow.'],
    ['Explainer Video Scripts', 'We write simple and easy to understand scripts for explainer videos, which can aid the businesses to explain their products and services clearly.'],
];
?>
<section class="ms-swtabs">

    <style>
        .ms-swtabs,
        .ms-swtabs * {
            box-sizing: border-box;
        }

        .ms-swtabs {
            --purple: #5A2EA6;
            --green: #5fd068;
            width: 100%;
            padding: 60px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-swtabs-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-swtabs-title {
            margin: 0 0 18px;
            text-align: center;
            font-size: 44px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-swtabs-title span {
            color: var(--purple);
        }

        .ms-swtabs-intro {
            margin: 0 auto 45px;
            max-width: 900px;
            text-align: center;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        /* ---------- Tabs box (purple gradient) ---------- */
        .ms-swtabs-box {
            padding: 36px 30px 40px;
            border-radius: 30px;
            background: linear-gradient(135deg, #cdbdf0 0%, #e4d9f7 45%, #b9a2ea 100%);
        }

        .ms-swtabs-nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            margin: 0 0 28px;
            padding: 0;
            list-style: none;
        }

        .ms-swtabs-btn {
            padding: 11px 24px;
            border-radius: 50px;
            border: 1px solid var(--purple);
            background: linear-gradient(180deg, #fff 0%, #ece4fa 100%);
            color: #222;
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 400;
            line-height: 1.3;
            cursor: pointer;
            box-shadow: 0 3px 8px rgba(90, 46, 166, .18);
            transition: .25s ease;
        }

        .ms-swtabs-btn:hover {
            transform: translateY(-2px);
        }

        .ms-swtabs-btn:focus-visible {
            outline: 2px solid var(--purple);
            outline-offset: 2px;
        }

        .ms-swtabs-btn.is-active {
            background: var(--green);
            border-color: #3fae4a;
            color: #111;
            font-weight: 500;
        }

        /* ---------- Panels ---------- */
        .ms-swtabs-panel {
            display: none;
            max-width: 860px;
            margin: 0 auto;
            padding: 34px 40px;
            border-radius: 24px;
            background: rgba(255, 255, 255, .45);
            border: 1px solid rgba(255, 255, 255, .7);
            box-shadow: 0 10px 30px rgba(90, 46, 166, .15);
            text-align: center;
        }

        .ms-swtabs-panel.is-active {
            display: block;
            animation: msSwFade .35s ease;
        }

        @keyframes msSwFade {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .ms-swtabs-panel p {
            margin: 0;
            font-size: 18px;
            line-height: 1.75;
            font-weight: 400;
            color: #111;
        }

        .ms-swtabs-panel b {
            font-weight: 600;
            color: #000;
        }

        /* ---------- Tablet ---------- */
        @media (max-width: 991px) {
            .ms-swtabs-title {
                font-size: 36px;
            }

            .ms-swtabs-nav {
                gap: 12px;
            }

            .ms-swtabs-btn {
                font-size: 14px;
                padding: 10px 20px;
            }
        }

        /* ---------- Mobile ---------- */
        @media (max-width: 575px) {
            .ms-swtabs {
                padding: 35px 14px 45px;
            }

            .ms-swtabs-title {
                font-size: 28px;
            }

            .ms-swtabs-intro {
                font-size: 14.5px;
                margin-bottom: 28px;
            }

            .ms-swtabs-box {
                padding: 22px 14px 24px;
                border-radius: 22px;
            }

            .ms-swtabs-nav {
                gap: 10px;
                margin-bottom: 20px;
            }

            .ms-swtabs-btn {
                font-size: 13px;
                padding: 9px 16px;
            }

            .ms-swtabs-panel {
                padding: 22px 18px;
                border-radius: 18px;
            }

            .ms-swtabs-panel p {
                font-size: 15.5px;
            }
        }
    </style>

    <div class="ms-swtabs-wrap">
        <h2 class="ms-swtabs-title">High-Converting Script Writing <span>Solutions</span></h2>
        <p class="ms-swtabs-intro"><?php echo htmlspecialchars($intro); ?></p>

        <div class="ms-swtabs-box">
            <ul class="ms-swtabs-nav" role="tablist">
                <?php foreach ($tabs as $i => $tab) : ?>
                    <li role="presentation">
                        <button type="button"
                                class="ms-swtabs-btn<?php echo $i === 0 ? ' is-active' : ''; ?>"
                                role="tab"
                                id="ms-swtab-btn-<?php echo $i; ?>"
                                aria-controls="ms-swtab-<?php echo $i; ?>"
                                aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                                tabindex="<?php echo $i === 0 ? '0' : '-1'; ?>">
                            <?php echo htmlspecialchars($tab[0]); ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>

            <?php foreach ($tabs as $i => $tab) : ?>
                <div class="ms-swtabs-panel<?php echo $i === 0 ? ' is-active' : ''; ?>"
                     id="ms-swtab-<?php echo $i; ?>"
                     role="tabpanel"
                     aria-labelledby="ms-swtab-btn-<?php echo $i; ?>">
                    <p><?php echo $tab[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        (function() {
            var root = document.querySelector('.ms-swtabs');
            if (!root) return;
            var btns = Array.prototype.slice.call(root.querySelectorAll('.ms-swtabs-btn'));
            var panels = root.querySelectorAll('.ms-swtabs-panel');

            function show(index, focus) {
                btns.forEach(function(b, i) {
                    var on = i === index;
                    b.classList.toggle('is-active', on);
                    b.setAttribute('aria-selected', on ? 'true' : 'false');
                    b.setAttribute('tabindex', on ? '0' : '-1');
                });
                panels.forEach(function(p, i) {
                    p.classList.toggle('is-active', i === index);
                });
                if (focus) btns[index].focus();
            }

            btns.forEach(function(btn, i) {
                btn.addEventListener('click', function() { show(i, false); });

                // arrow keys move between tabs (same as the Elementor tabs)
                btn.addEventListener('keydown', function(e) {
                    if (e.key === 'ArrowRight') { e.preventDefault(); show((i + 1) % btns.length, true); }
                    if (e.key === 'ArrowLeft')  { e.preventDefault(); show((i - 1 + btns.length) % btns.length, true); }
                });
            });
        })();
    </script>
</section>