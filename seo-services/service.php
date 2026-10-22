<?php
// Edit / add / remove cards here. 'icon' picks one of the SVG icons defined below.
$services = [
    ['keyword',  'Keyword Research', 'We define the keywords your audience searches for. This increases your traffic.'],
    ['onpage',   'On-Page SEO',      'We optimize your web content, meta-tags and site structure. This is for user experience and improved search engine results.'],
    ['technical', 'Technical SEO',   'We identify and fix website issues like speed problems and errors. This guarantees your site works effectively.'],
    ['link',     'Link Building',    'We generate high-quality backlinks. These enhance your websites reputation and authority.'],
    ['local',    'Local SEO',        'We utilise \'near me\' search optimization methods. This improves your businesss visibility.'],
    ['analytics', 'SEO Analytics',   'We measure your website traffic and performance. This consistently. Improves your strategy.'],
];

$icons = [
    // document + magnifier
    'keyword' => '<rect x="5" y="4" width="10" height="13" rx="1.5"></rect><path d="M8 8h4M8 11h2"></path><circle cx="15" cy="15" r="3"></circle><path d="M17.2 17.2L20 20"></path>',
    // connected nodes
    'onpage' => '<circle cx="6" cy="12" r="2"></circle><circle cx="18" cy="6" r="2"></circle><circle cx="18" cy="18" r="2"></circle><circle cx="12" cy="12" r="1.5"></circle><path d="M8 12h2.5M13.3 11l3-3.3M13.3 13l3 3.3"></path>',
    // gears
    'technical' => '<circle cx="9" cy="10" r="2.5"></circle><path d="M9 4.5v2M9 13.5v2M3.5 10h2M12.5 10h2M5.2 6.2l1.4 1.4M11.4 12.4l1.4 1.4M5.2 13.8l1.4-1.4M11.4 7.6l1.4-1.4"></path><circle cx="16.5" cy="16.5" r="2"></circle><path d="M16.5 12.8v1.2M16.5 19v1.2M12.8 16.5H14M19 16.5h1.2"></path>',
    // chain link
    'link' => '<path d="M10 14l4-4"></path><path d="M8.5 11.5l-2 2a3 3 0 004.2 4.2l2-2"></path><path d="M15.5 12.5l2-2a3 3 0 00-4.2-4.2l-2 2"></path>',
    // map pin
    'local' => '<path d="M12 21s-6-5.6-6-10.5a6 6 0 0112 0C18 15.4 12 21 12 21z"></path><circle cx="12" cy="10.5" r="2.2"></circle>',
    // bar chart
    'analytics' => '<path d="M4 20h16"></path><rect x="5.5" y="12" width="3" height="8"></rect><rect x="10.5" y="7" width="3" height="13"></rect><rect x="15.5" y="10" width="3" height="10"></rect>',
];
?>
<section class="ms-seosvc">

    <style>
        .ms-seosvc,
        .ms-seosvc * {
            box-sizing: border-box;
        }

        .ms-seosvc {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: var(--font-body);
            text-align: center;
        }

        .ms-seosvc-title {
            margin: 0 0 20px;
            font-size: 54px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-seosvc-title span {
            color: var(--purple);
            font-weight: 700;
        }

        .ms-seosvc-text {
            max-width: 1100px;
            margin: 0 auto 38px;
            font-size: 16px;
            line-height: 1.62;
            font-weight: 300;
            color: #1b1b1b;
        }

        .ms-seosvc-grid {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .ms-seosvc-card {
            padding: 20px 26px 24px;
            border-radius: 26px;
            background: #f6f6f6;
            border: 1px solid #ececec;
            transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
        }

        .ms-seosvc-card:hover {
            transform: translateY(-5px);
            border-color: rgba(90, 46, 166, .25);
            box-shadow: 0 12px 26px rgba(90, 46, 166, .14);
        }

        .ms-seosvc-icon {
            width: 34px;
            height: 34px;
            margin: 0 auto 12px;
            border-radius: 50%;
            border: 1px solid #111;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ms-seosvc-icon svg {
            width: 19px;
            height: 19px;
            fill: none;
            stroke: #111;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-seosvc-card h3 {
            margin: 0 0 12px;
            font-size: 18px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
        }

        .ms-seosvc-card p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            font-weight: 400;
            color: #777;
        }

        @media (max-width: 991px) {
            .ms-seosvc-title {
                font-size: 42px;
            }

            .ms-seosvc-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575px) {
            .ms-seosvc {
                padding: 25px 14px 40px;
            }

            .ms-seosvc-title {
                font-size: 30px;
                margin-bottom: 14px;
            }

            .ms-seosvc-text {
                font-size: 14.5px;
                margin-bottom: 26px;
            }

            .ms-seosvc-grid {
                grid-template-columns: 1fr;
            }

            .ms-seosvc-card {
                padding: 18px 20px 22px;
            }
        }
    </style>

    <h2 class="ms-seosvc-title">Our <span>SEO Services</span></h2>

    <p class="ms-seosvc-text">
        We offer a range of SEO services. They are designed to increase your website rankings and traffic. We also generate business growth in India. Our method is all-inclusive from research to implementation. We ensure your website excels in Google search results. Reaches your ideal customer.
    </p>

    <div class="ms-seosvc-grid">
        <?php foreach ($services as $s) : ?>
            <div class="ms-seosvc-card">
                <span class="ms-seosvc-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><?php echo $icons[$s[0]]; ?></svg>
                </span>
                <h3><?php echo htmlspecialchars($s[1]); ?></h3>
                <p><?php echo htmlspecialchars($s[2]); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>