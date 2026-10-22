<?php
// Edit questions and answers here.
$faqs = [
    ['What are social media marketing services?', 'Social media marketing services help your brand grow on platforms like Instagram, Facebook, YouTube and LinkedIn. They cover strategy, content creation, posting, community management and performance tracking.'],
    ['Why does my business need social media marketing in Delhi?', 'Delhi is a highly competitive market and most of your customers are already active on social media. Consistent, well-planned content helps you get noticed, build trust and reach local buyers before your competitors do.'],
    ['Which platforms do you manage?', 'We manage Instagram, Facebook, YouTube and LinkedIn. We help you pick the platforms where your audience spends the most time.'],
    ['Do you provide content creation services?', 'Yes. Our team creates posts, reels, videos, thumbnails and ad creatives that match your brand style and are sized for each platform.'],
    ['What is included in your social media marketing services?', 'Our services include strategy planning, content creation, scheduling and publishing, community management, and monthly performance tracking and optimization.'],
    ['How do you increase engagement on social media?', 'We post at the right times, use strong hooks and clear messaging, follow current design and video trends, and respond to comments and messages quickly to keep your audience active.'],
    ['Do you offer influencer marketing services?', 'Yes. We can help you find suitable influencers, plan collaborations and track the results so your budget goes to partners who fit your brand.'],
    ['Can social media marketing generate leads for my business?', 'Yes. With the right content, targeted ads and clear calls to action, social media can bring in enquiries, calls and sign-ups for your business.'],
    ['How long does it take to see results from social media marketing?', 'Most brands see better engagement within the first 4 to 8 weeks. Steady lead growth usually takes around 3 to 6 months of consistent work.'],
    ['Do you provide reports and performance tracking?', 'Yes. We share regular reports covering reach, engagement, follower growth and leads, along with suggestions to improve the next month.'],
];
?>
<section class="ms-faq">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-faq,
        .ms-faq * {
            box-sizing: border-box;
        }

        .ms-faq {
            --green: #22A87B;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-faq-wrap {
            max-width: 70vw;
            margin: 0 auto;
        }

        .ms-faq-head {
            text-align: center;
            margin-bottom: 18px;
        }

        .ms-faq-badge {
            display: inline-block;
            margin: 0;
            padding: 8px 28px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.3;
            box-shadow: 0 6px 14px rgba(34, 168, 123, .35);
        }

        .ms-faq-list {
            display: grid;
            gap: 16px;
        }

        .ms-faq-item {
            border-radius: 50px;
            background: #f6f6f6;
            box-shadow: 0 3px 8px rgba(0, 0, 0, .12);
            transition: border-radius .25s ease;
        }

        .ms-faq-item.is-open {
            border-radius: 26px;
        }

        .ms-faq-q {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            width: 100%;
            padding: 10px 24px 10px 17px;
            border: 0;
            background: transparent;
            font-family: inherit;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.5;
            text-align: left;
            color: #000;
            cursor: pointer;
        }

        .ms-faq-q:focus-visible {
            outline: 2px solid var(--green);
            outline-offset: 2px;
            border-radius: 50px;
        }

        .ms-faq-icon {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
            transition: transform .25s ease;
        }

        .ms-faq-item.is-open .ms-faq-icon {
            transform: rotate(180deg);
        }

        .ms-faq-a {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows .3s ease;
        }

        .ms-faq-item.is-open .ms-faq-a {
            grid-template-rows: 1fr;
        }

        .ms-faq-a-inner {
            overflow: hidden;
        }

        .ms-faq-a p {
            margin: 0;
            padding: 0 24px 16px 17px;
            font-size: 13px;
            line-height: 1.7;
            font-weight: 400;
            color: #333;
        }

        @media (max-width: 575px) {
            .ms-faq {
                padding: 24px 14px 40px;
            }

            .ms-faq-badge {
                font-size: 15px;
            }

            .ms-faq-q {
                padding: 12px 18px 12px 16px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .ms-faq-item,
            .ms-faq-icon,
            .ms-faq-a {
                transition: none;
            }
        }
    </style>

    <div class="ms-faq-wrap">

        <div class="ms-faq-head">
            <h2 class="ms-faq-badge">FAQ Question</h2>
        </div>

        <div class="ms-faq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-faq-item">
                    <button type="button" class="ms-faq-q" aria-expanded="false" aria-controls="ms-faq-a-<?php echo $i; ?>" id="ms-faq-q-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg class="ms-faq-icon" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="8 10.5 12 14.5 16 10.5"></polyline>
                        </svg>
                    </button>
                    <div class="ms-faq-a" id="ms-faq-a-<?php echo $i; ?>" role="region" aria-labelledby="ms-faq-q-<?php echo $i; ?>">
                        <div class="ms-faq-a-inner">
                            <p><?php echo htmlspecialchars($faq[1]); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-faq-item');

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-faq-q');
                btn.addEventListener('click', function() {
                    var open = item.classList.contains('is-open');

                    // Close the others (only one open at a time)
                    items.forEach(function(other) {
                        other.classList.remove('is-open');
                        other.querySelector('.ms-faq-q').setAttribute('aria-expanded', 'false');
                    });

                    if (!open) {
                        item.classList.add('is-open');
                        btn.setAttribute('aria-expanded', 'true');
                    }
                });
            });
        })();
    </script>
</section>