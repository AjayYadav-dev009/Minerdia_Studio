<?php
/* Replace each image with the real URL from your uploads folder */
$ms_plat_base = 'https://minerdiastudio.com/wp-content/uploads/2026/06/';
$ms_platforms = [
    ['Youtube',   $ms_plat_base . 'social-media-youtube-service.png',   'YouTube marketing services'],
    ['Facebook',  $ms_plat_base . 'social-media-facebook-service.png',  'Facebook marketing services'],
    ['Instagram', $ms_plat_base . 'social-media-instagram-service.png', 'Instagram marketing services'],
    ['Pintrest',  $ms_plat_base . 'Social-Media-pintrest-service.png', 'Pinterest marketing services'],
];
?>
<section class="ms-plat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-plat,
        .ms-plat * {
            box-sizing: border-box;
        }

        .ms-plat {
            width: 100%;
            padding: 50px 20px 50px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-plat-grid {
            max-width: 1140px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
        }

        .ms-plat-card {
            border-radius: 30px;
            background: #f6f6f6;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .16);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-plat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 28px rgba(0, 0, 0, .22);
        }

        .ms-plat-img {
            line-height: 0;
            background: #e9e9e9;
        }

        .ms-plat-img img {
            display: block;
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }

        .ms-plat-name {
            margin: 0;
            padding: 27px 10px 26px;
            font-size: 18px;
            line-height: 1.3;
            font-weight: 500;
            color: #000;
            text-align: center;
        }

        @media (max-width: 991px) {
            .ms-plat-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 24px;
                max-width: 600px;
            }
        }

        @media (max-width: 575px) {
            .ms-plat {
                padding: 35px 14px 35px;
            }

            .ms-plat-grid {
                gap: 14px;
            }

            .ms-plat-card {
                border-radius: 22px;
            }

            .ms-plat-name {
                font-size: 15px;
                padding: 18px 8px 17px;
            }
        }
    </style>

    <div class="ms-plat-grid">
        <?php foreach ($ms_platforms as $p): ?>
            <div class="ms-plat-card">
                <div class="ms-plat-img">
                    <img src="<?= htmlspecialchars($p[1]) ?>" alt="<?= htmlspecialchars($p[2]) ?>" loading="lazy">
                </div>
                <h3 class="ms-plat-name"><?= htmlspecialchars($p[0]) ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
</section>