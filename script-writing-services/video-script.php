<?php
$title = 'SEO-Friendly Video Script Writing';

$paragraphs = [
    'All our scripts are written for both human viewers and search engines. We add the right keywords and topics so your video performs better online and has a real chance of showing up on <strong>YouTube and Google</strong>.',
    'The content still reads naturally and is easy to follow. Viewers stay engaged, and search engines understand exactly what your video is about, which helps with ranking on both platforms.',
];

$chips = [
    'Audience Retention',
    'Keyword Placement',
    'Engaging Hooks',
    'Clear Storytelling',
    'Natural Language',
    'High-Engagement',
];
?>
<section class="ms-vsw">

    <style>
        .ms-vsw,
        .ms-vsw * {
            box-sizing: border-box;
        }

        .ms-vsw {
            --purple: #5A2EA6;
            --purple-soft: #F3EEFB;
            width: 100%;
            padding: 60px 20px 70px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-vsw-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        .ms-vsw-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        /* ---------- Text ---------- */
        .ms-vsw-title {
            margin: 0 0 18px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-vsw-text p {
            margin: 0 0 10px;
            font-size: 15px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-vsw-text p:last-child {
            margin-bottom: 0;
        }

        .ms-vsw-text strong {
            font-weight: 600;
        }

        /* ---------- Chips ---------- */
        .ms-vsw-chips {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 26px;
        }

        .ms-vsw-chip {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 10px 14px;
            border: 1px solid rgba(90, 46, 166, .25);
            border-radius: 12px;
            background: var(--purple-soft);
            text-align: center;
            font-size: 14px;
            line-height: 1.3;
            font-weight: 500;
            color: var(--purple);
            transition: transform .3s ease, background .3s ease, color .3s ease, box-shadow .3s ease;
        }

        .ms-vsw-chip:hover {
            transform: translateY(-4px);
            background: var(--purple);
            color: #fff;
            box-shadow: 0 10px 24px rgba(90, 46, 166, .25);
        }

        /* ---------- Image ---------- */
        .ms-vsw-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-vsw-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-vsw-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-vsw-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-vsw-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-vsw {
                padding: 35px 16px 45px;
            }

            .ms-vsw-title {
                font-size: 26px;
                text-align: center;
            }

            .ms-vsw-chips {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .ms-vsw-chip {
                min-height: 48px;
                font-size: 13px;
            }
        }
    </style>

    <div class="ms-vsw-wrap">
        <div class="ms-vsw-grid">

            <div class="ms-vsw-text">
                <h2 class="ms-vsw-title"><?php echo htmlspecialchars($title); ?></h2>
                <?php foreach ($paragraphs as $para) : ?>
                    <p><?php echo $para; ?></p>
                <?php endforeach; ?>

                <div class="ms-vsw-chips">
                    <?php foreach ($chips as $chip) : ?>
                        <div class="ms-vsw-chip"><?php echo htmlspecialchars($chip); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="ms-vsw-img">
                <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/SEO-Friendly-Video-Script-Writing.png" alt="SEO Script Writing" width="1536" height="1024" loading="lazy">
            </div>

        </div>
    </div>
</section>