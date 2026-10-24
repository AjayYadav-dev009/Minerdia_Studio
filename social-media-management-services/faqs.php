<?php
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

// FAQPage schema for Google (same data as the visible FAQs)
$schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
        ];
    }, $faqs),
];
?>
<section class="ms-smfaq">

    <style>
        .ms-smfaq,
        .ms-smfaq * {
            box-sizing: border-box;
        }

        .ms-smfaq {
            --green: #21a67a;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-smfaq-wrap {
            max-width: 1000px;
            margin: 0 auto;
        }

        .ms-smfaq-badge {
            display: table;
            margin: 0 auto 30px;
            padding: 12px 52px;
            border-radius: 50px;
            background: var(--green);
            color: #fff;
            font-family: var(--font-head);
            font-size: 24px;
            line-height: 1.2;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(33, 166, 122, .35);
        }

        .ms-smfaq-list {
            display: grid;
            gap: 18px;
        }

        .ms-smfaq-item {
            border-radius: 40px;
            background: #f6f6f6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06);
            transition: .25s ease;
        }

        .ms-smfaq-item.is-open {
            background: #f1f1f1;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
            border-radius: 28px;
        }

        .ms-smfaq-q {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 22px 34px 22px 32px;
            border: 0;
            background: transparent;
            text-align: left;
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
            color: #000;
            cursor: pointer;
        }

        .ms-smfaq-q:hover {
            color: #5A2EA6;
        }

        .ms-smfaq-q svg {
            flex: 0 0 auto;
            width: 24px;
            height: 24px;
            fill: #111;
            transition: transform .3s ease;
        }

        .ms-smfaq-q:hover svg {
            color: #5A2EA6;
        }

        .ms-smfaq-item.is-open .ms-smfaq-q svg {
            transform: rotate(180deg);
        }

        .ms-smfaq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .ms-smfaq-a p {
            margin: 0;
            padding: 0 34px 24px 32px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 767px) {
            .ms-smfaq {
                padding: 35px 14px 45px;
            }

            .ms-smfaq-badge {
                font-size: 20px;
                padding: 10px 36px;
                margin-bottom: 24px;
            }

            .ms-smfaq-list {
                gap: 14px;
            }

            .ms-smfaq-q {
                font-size: 14.5px;
                padding: 16px 20px 16px 20px;
            }

            .ms-smfaq-q svg {
                width: 22px;
                height: 22px;
            }

            .ms-smfaq-a p {
                font-size: 14px;
                padding: 0 20px 18px 20px;
            }
        }
    </style>

    <div class="ms-smfaq-wrap">
        <h3 class="ms-smfaq-badge">FAQ Question</h3>

        <div class="ms-smfaq-list">
            <?php foreach ($faqs as $i => $faq) : ?>
                <div class="ms-smfaq-item">
                    <button type="button" class="ms-smfaq-q" aria-expanded="false" aria-controls="ms-smfaq-a-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($faq[0]); ?></span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M25.948 27.548c2.871-2.871 4.452-6.688 4.452-10.748s-1.581-7.877-4.452-10.748-6.688-4.452-10.748-4.452-7.877 1.581-10.748 4.452-4.452 6.688-4.452 10.748 1.581 7.877 4.452 10.748 6.688 4.452 10.748 4.452 7.877-1.581 10.748-4.452zM1.6 16.8c0-7.499 6.101-13.6 13.6-13.6s13.6 6.101 13.6 13.6c0 7.499-6.101 13.6-13.6 13.6s-13.6-6.101-13.6-13.6zM6.4 14.4c0-0.205 0.078-0.409 0.234-0.566 0.312-0.312 0.819-0.312 1.131 0l7.434 7.434 7.434-7.434c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-8 8c-0.312 0.312-0.819 0.312-1.131 0l-8-8c-0.156-0.156-0.234-0.361-0.234-0.566z"></path>
                        </svg>
                    </button>
                    <div class="ms-smfaq-a" id="ms-smfaq-a-<?php echo $i; ?>" role="region">
                        <p><?php echo htmlspecialchars($faq[1]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script type="application/ld+json">
        <?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?>
    </script>

    <script>
        (function() {
            var items = document.querySelectorAll('.ms-smfaq-item');

            function close(item) {
                item.classList.remove('is-open');
                item.querySelector('.ms-smfaq-q').setAttribute('aria-expanded', 'false');
                item.querySelector('.ms-smfaq-a').style.maxHeight = null;
            }

            items.forEach(function(item) {
                var btn = item.querySelector('.ms-smfaq-q');
                var ans = item.querySelector('.ms-smfaq-a');

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

            // keep the open answer sized correctly if the window is resized
            window.addEventListener('resize', function() {
                var open = document.querySelector('.ms-smfaq-item.is-open .ms-smfaq-a');
                if (open) open.style.maxHeight = open.scrollHeight + 'px';
            });
        })();
    </script>
</section>