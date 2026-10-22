<?php
$faqs = [
    ['Is PPC Advertising Right for My Business and Goals?', 'PPC works well for almost any business that wants fast, measurable results, whether that means leads, calls, sales or app installs. We review your goals, budget and market first, then tell you honestly if PPC is the right fit or if another channel should come first.'],
    ['Why Should I Hire a PPC Management Company for My Campaigns?', 'Running ads without experience often wastes budget on the wrong keywords and audiences. A dedicated team handles research, ad copy, bidding, tracking and constant optimisation, so every rupee works harder and you can focus on running your business.'],
    ['What Sets Your PPC Service Agency Apart from Others?', 'We combine more than 15 years of digital marketing experience with transparent reporting, clear pricing and a performance-first approach. You always know where your budget is going and what results it is bringing.'],
    ['How Long Does It Take to See Results from a PPC Campaign?', 'You can start getting clicks and enquiries within days of launch. Most campaigns take 4 to 8 weeks of testing and optimisation to reach a stable, profitable performance.'],
    ['How Do I Choose the Right PPC Service Agency for My Business?', 'Look for proven case studies, transparent reporting, certified experts and clear communication. Avoid agencies that promise guaranteed rankings or hide their pricing and ad account access.'],
    ['What common PPC mistakes do businesses make?', 'Common mistakes include targeting broad keywords, ignoring negative keywords, sending traffic to weak landing pages, skipping conversion tracking and not reviewing campaigns regularly.'],
    ['What is the difference between PPC and organic marketing?', 'PPC gives you instant visibility by paying for each click, while organic marketing such as SEO builds long-term traffic without per-click costs but takes more time. The best results usually come from using both together.'],
];
?>
<section class="ms-faq">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-faq,
        .ms-faq * {
            box-sizing: border-box;
        }

        .ms-faq {
            --green: #21a67a;
            width: 100%;
            padding: 40px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-faq-wrap {
            max-width: 800px;
            margin: 0 auto;
        }

        .ms-faq-badge {
            display: table;
            margin: 0 auto 22px;
            padding: 9px 36px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 18px;
            font-weight: 700;
            box-shadow: 0 6px 14px rgba(33, 166, 122, .35);
        }

        .ms-faq-list {
            display: grid;
            gap: 14px;
        }

        .ms-faq-item {
            border-radius: 30px;
            background: #f6f6f6;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .05);
            transition: .25s ease;
        }

        .ms-faq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 6px 16px rgba(0, 0, 0, .10);
        }

        .ms-faq-q {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 15px 24px 15px 16px;
            border: 0;
            background: transparent;
            text-align: left;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;
            line-height: 1.4;
            color: #000;
            cursor: pointer;
        }

        .ms-faq-q i {
            flex: 0 0 auto;
            font-size: 18px;
            color: #222;
            transition: transform .3s ease;
        }

        .ms-faq-item.is-open .ms-faq-q i {
            transform: rotate(180deg);
        }

        .ms-faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-faq-a p {
            margin: 0;
            padding: 0 24px 18px 16px;
            font-size: 12.5px;
            line-height: 1.7;
            font-weight: 400;
            color: #333;
        }

        @media (max-width: 575px) {
            .ms-faq {
                padding: 30px 14px 40px;
            }

            .ms-faq-badge {
                font-size: 16px;
                padding: 8px 28px;
            }

            .ms-faq-q {
                font-size: 12.5px;
                padding: 14px 18px 14px 14px;
            }
        }
    </style>

    <div class="ms-faq-wrap">
        <span class="ms-faq-badge">FAQ Question</span>

        <div class="ms-faq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-faq-item">
                    <button type="button" class="ms-faq-q" aria-expanded="false" aria-controls="ms-faq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <i class="fa-regular fa-circle-down"></i>
                    </button>
                    <div class="ms-faq-a" id="ms-faq-a-<?php echo $i; ?>">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-faq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-faq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-faq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-faq-q');
                var ans = item.querySelector('.ms-faq-a');

                btn.addEventListener('click', function() {
                    var wasOpen = item.classList.contains('is-open');
                    items.forEach(close); // only one open at a time
                    if (!wasOpen) {
                        item.classList.add('is-open');
                        btn.setAttribute('aria-expanded', 'true');
                        ans.style.maxHeight = ans.scrollHeight + 'px';
                    }
                });
            });
        })();
    </script>
</section>