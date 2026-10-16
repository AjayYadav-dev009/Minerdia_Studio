<?php
$intro = 'Our website development process is very simple to follow, it\'s all about getting results. We begin by determining what you need and planning how your website will be configured. Then we create a design for your website that is modern and user-friendly. This design will show what your brand is about. When you are happy with the design our team will start building your website using the tools. We check your website to make sure it is fast and works well on all devices. When we are sure everything is working perfectly we make your website available to everyone. At our website development agency we want to make sure you are happy with your website, for a time. So we keep helping you with your website even after it\'s live to make sure it keeps working well.';

$cards = [
    ['fa-solid fa-briefcase', 'Business Website Development', 'We help companies make a business website to get customers and be seen online. Business website development is what we do to make this happen for our clients. Our goal with business website development is to get people to notice our clients.'],
    ['fa-solid fa-cart-shopping', 'E-commerce Website', 'We build e-commerce websites that are secure for payments and easy to manage products. This ensures smooth shopping for users. We focus on UI/UX design to create clean, user-friendly layouts that are easy to navigate and understand.'],
    ['fa-solid fa-sliders', 'Website Setup & Customization', 'We can set up. Customize a WordPress website for you. We do this based on what you need for your WordPress website customization.'],
    ['fa-solid fa-mobile-screen-button', 'Mobile-Friendly Development', 'We make sure our websites work well on all phones and computers. This is called friendly development and it means our websites work on every device'],
    ['fa-solid fa-screwdriver-wrench', 'Website Fixing & Support', 'We do also. Take care of websites to make sure they are safe and working well. Our website maintenance services keep your website up to date. Free from problems. We do this so your website keeps working and people can always see it.'],
    ['fa-solid fa-bug', 'WordPress Bug Fixes', 'Our dedicated team of experts focus their time on providing you with the best software development solutions.'],
];
?>
<section class="ms-hww">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .ms-hww,
        .ms-hww * {
            box-sizing: border-box;
        }

        .ms-hww {
            --purple: #5A2EA6;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-hww-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        .ms-hww-title {
            margin: 0 0 18px;
            text-align: center;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-hww-title span {
            color: var(--purple);
        }

        .ms-hww-intro {
            margin: 0 auto 55px;
            max-width: 1000px;
            text-align: center;
            font-size: 11px;
            line-height: 1.7;
            font-weight: 400;
            color: #111;
        }

        .ms-hww-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px 12px;
        }

        .ms-hww-card {
            padding: 22px 26px 24px;
            border-radius: 18px;
            border: 1px solid #ececec;
            background: #f6f6f6;
            text-align: center;
            transition: .3s ease;
        }

        .ms-hww-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(90, 46, 166, .15);
        }

        .ms-hww-icon {
            width: 36px;
            height: 36px;
            margin: 0 auto 12px;
            border-radius: 50%;
            border: 1.5px solid #111;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #111;
        }

        .ms-hww-card h3 {
            margin: 0 0 12px;
            font-size: 14px;
            line-height: 1.35;
            font-weight: 600;
            color: #000;
        }

        .ms-hww-card p {
            margin: 0;
            font-size: 10.5px;
            line-height: 1.85;
            font-weight: 400;
            color: #222;
        }

        @media (max-width: 991px) {
            .ms-hww-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575px) {
            .ms-hww {
                padding: 24px 14px 40px;
            }

            .ms-hww-title {
                font-size: 28px;
            }

            .ms-hww-intro {
                font-size: 13px;
                margin-bottom: 30px;
            }

            .ms-hww-grid {
                grid-template-columns: 1fr;
            }

            .ms-hww-card h3 {
                font-size: 16px;
            }

            .ms-hww-card p {
                font-size: 13px;
            }
        }
    </style>

    <div class="ms-hww-wrap">
        <h2 class="ms-hww-title">How We <span>Work</span></h2>
        <p class="ms-hww-intro"><?php echo htmlspecialchars($intro); ?></p>

        <div class="ms-hww-grid">
            <?php foreach ($cards as $card) : ?>
                <div class="ms-hww-card">
                    <div class="ms-hww-icon"><i class="<?php echo htmlspecialchars($card[0]); ?>"></i></div>
                    <h3><?php echo htmlspecialchars($card[1]); ?></h3>
                    <p><?php echo htmlspecialchars($card[2]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>