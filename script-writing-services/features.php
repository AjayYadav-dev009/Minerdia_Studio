<?php
$label = 'Features';
$title = 'High Converting Script Writing';
$image = 'https://minerdiastudio.com/wp-content/uploads/2026/06/scriptwriting-company.png';
$alt   = 'Professional Script Writing';

// <b> is allowed in these paragraphs
$paras = [
    'The art of keeping viewers engaged with your work. Creative tricks to keep viewers engaged. Our scripts at Minerdia Studio are designed to optimize the interaction, retention of viewers and the performance of the content. We make sure that your content is easy to follow, is professional and includes strong story, structure and clear messaging. Before writing a script, our <b>scriptwriting company</b> takes the time to grasp your niche, your audience and your goals. This can help us create content that is relevant and resonates with the audience. <b>Scripts are developed for:</b> YouTube Videos, Instagram Reels, Advertisement Videos, Brand Promotions, Podcast Content, Explainer Videos, Corporate Videos, Short Form Video Content',
    'We also optimize scripts for audience attention span, content flow and engagement strategy to get your videos to perform better on platforms such as YouTube, Instagram and Facebook.',
];
?>
<section class="ms-swfeat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        .ms-swfeat,
        .ms-swfeat * {
            box-sizing: border-box;
        }

        .ms-swfeat {
            --purple: #5A2EA6;
            width: 100%;
            padding: 60px 20px 70px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .ms-swfeat-wrap {
            max-width: 1110px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        .ms-swfeat-label {
            display: block;
            margin: 0 0 8px;
            font-family: 'Lato', Arial, sans-serif;
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-swfeat-title {
            margin: 0 0 18px;
            max-width: 480px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-swfeat-text p {
            margin: 0 0 12px;
            font-size: 15px;
            line-height: 1.75;
            font-weight: 400;
            color: #222;
        }

        .ms-swfeat-text p:last-child {
            margin-bottom: 0;
        }

        .ms-swfeat-text b {
            font-weight: 600;
            color: #000;
        }

        .ms-swfeat-img {
            border-radius: 36px;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 10px 30px rgba(90, 46, 166, .25), 0 0 0 1px rgba(90, 46, 166, .15);
            transition: transform .3s ease;
        }

        .ms-swfeat-img:hover {
            transform: translateY(-8px); /* same "float" hover as Elementor */
        }

        .ms-swfeat-img img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ---------- Tablet ---------- */
        @media (max-width: 991px) {
            .ms-swfeat-wrap {
                gap: 28px;
            }

            .ms-swfeat-title {
                max-width: none;
                font-size: 28px;
            }
        }

        /* ---------- Mobile: stack, image on top, heading centered ---------- */
        @media (max-width: 767px) {
            .ms-swfeat {
                padding: 35px 16px 45px;
            }

            .ms-swfeat-wrap {
                grid-template-columns: 1fr;
            }

            .ms-swfeat-img {
                order: -1;
            }

            .ms-swfeat-label,
            .ms-swfeat-title {
                text-align: center;
            }

            .ms-swfeat-label {
                font-size: 16px;
            }

            .ms-swfeat-title {
                font-size: 26px;
            }

            .ms-swfeat-text p {
                font-size: 14.5px;
            }
        }
    </style>

    <div class="ms-swfeat-wrap">
        <div class="ms-swfeat-text">
            <span class="ms-swfeat-label"><?php echo htmlspecialchars($label); ?></span>
            <h2 class="ms-swfeat-title"><?php echo htmlspecialchars($title); ?></h2>
            <?php foreach ($paras as $para) : ?>
                <p><?php echo $para; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="ms-swfeat-img">
            <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($alt); ?>" width="1536" height="1024" loading="lazy">
        </div>
    </div>
</section>