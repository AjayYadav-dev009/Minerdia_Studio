<?php
$title = 'Smart Content Strategy for Video Growth';

$paragraphs = [
    'The best way to grow <strong>video content</strong> is to post regularly, and it matters even more to have a clear plan for what you make. Minerdia Studio, a <strong>video production company</strong>, helps businesses and individuals plan their video content so it keeps growing over time.',
    'We study popular videos, look at what people like to watch, see how videos perform as a result, and write scripts that viewers actually want to watch. This leads to videos people come back to again and again, which builds trust and makes every video stronger.',
    'Our goal is simple. We create scripts that can make your video take off, without any tricks, and make people want to keep watching.',
];

$image = 'assets/image/services/script-4.webp';
$alt   = 'Video Content Strategy';
?>
<section class="ms-vcs">

    <style>
        .ms-vcs,
        .ms-vcs * {
            box-sizing: border-box;
        }

        .ms-vcs {
            --purple: #5A2EA6;
            width: 100%;
            padding: 20px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-vcs-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        .ms-vcs-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        /* ---------- Image (left) ---------- */
        .ms-vcs-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-vcs-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-vcs-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- Text (right) ---------- */
        .ms-vcs-title {
            margin: 0 0 18px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-vcs-text p {
            margin: 0 0 12px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-vcs-text p:last-child {
            margin-bottom: 0;
        }

        .ms-vcs-text strong {
            font-weight: 600;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-vcs-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-vcs-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-vcs {
                padding: 10px 16px 45px;
            }

            .ms-vcs-title {
                font-size: 26px;
                text-align: center;
            }
        }
    </style>

    <div class="ms-vcs-wrap">
        <div class="ms-vcs-grid">

            <div class="ms-vcs-img">
                <img src="<?php echo BASE . htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($alt); ?>" width="1536" height="1024" loading="lazy">
            </div>

            <div class="ms-vcs-text">
                <h2 class="ms-vcs-title"><?php echo htmlspecialchars($title); ?></h2>
                <?php foreach ($paragraphs as $para) : ?>
                    <p><?php echo $para; ?></p>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>