<?php
$title = 'There are various merits of good scriptwriting, including the following:';
$image = 'https://minerdiastudio.com/wp-content/uploads/2026/06/good-scriptwriting.png';
$alt   = 'Creative Script Writing';

$paras = [
    'The right script can make all the difference in making people feel how you are feeling. It assists people in grasping what you\'re attempting to convey. It holds them in place till the end.',
    'Many videos are not very good because they don\'t make sense or they are difficult to follow. A good script would correct this issue and make it easy for everyone to follow along, from one thing to another.',
    'We believe it\'s crucial to write scripts that feel like someone is speaking with you at Minerdia Studio. We are not fond of using language of a machine. We instead attempt to create material that people can relate to. That feels real.',
    'This approach prolongs the time spent on watching our videos and increases engagement. It makes our content better as a whole.',
];
?>
<section class="ms-swmerits">

    <style>
        .ms-swmerits,
        .ms-swmerits * {
            box-sizing: border-box;
        }

        .ms-swmerits {
            --purple: #5A2EA6;
            width: 100%;
            padding: 60px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-swmerits-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        .ms-swmerits-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-swmerits-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-swmerits-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        .ms-swmerits-title {
            margin: 0 0 18px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-swmerits-text p {
            margin: 0 0 12px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-swmerits-text p:last-child {
            margin-bottom: 0;
        }

        /* ---------- Tablet ---------- */
        @media (max-width: 991px) {
            .ms-swmerits-wrap {
                gap: 28px;
            }

            .ms-swmerits-title {
                font-size: 28px;
            }
        }

        /* ---------- Mobile: stack, image on top, heading centered ---------- */
        @media (max-width: 767px) {
            .ms-swmerits {
                padding: 35px 16px 45px;
            }

            .ms-swmerits-wrap {
                grid-template-columns: 1fr;
            }

            .ms-swmerits-title {
                font-size: 24px;
                text-align: center;
            }

            .ms-swmerits-text p {
                font-size: 14.5px;
            }
        }
    </style>

    <div class="ms-swmerits-wrap">
        <div class="ms-swmerits-img">
            <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($alt); ?>" width="1536" height="1024" loading="lazy">
        </div>

        <div class="ms-swmerits-text">
            <h2 class="ms-swmerits-title"><?php echo htmlspecialchars($title); ?></h2>
            <?php foreach ($paras as $para) : ?>
                <p><?php echo htmlspecialchars($para); ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>