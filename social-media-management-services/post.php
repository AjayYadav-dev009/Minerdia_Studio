<?php
// Add / remove posts here. 'img' is the image path, 'alt' is the alt text.
// Put your images in the /images/posts/ folder (or change the path below).
$posts = [
    ['img' => 'images/posts/podcast-studio.jpg',    'alt' => 'Podcast Studio Design'],
    ['img' => 'images/posts/rcs-reality.jpg',       'alt' => 'RCS Messaging Social Media Design'],
    ['img' => 'images/posts/food-social.jpg',       'alt' => 'Food Social Media Design'],
    ['img' => 'images/posts/saas-social.jpg',       'alt' => 'SaaS Social Media Design'],
    ['img' => 'images/posts/product-ad.jpg',        'alt' => 'Product Advertisement Design'],
    ['img' => 'images/posts/food-branding.jpg',     'alt' => 'Food Product Branding'],
    ['img' => 'images/posts/whatsapp-api.jpg',      'alt' => 'WhatsApp API Social Media Design'],
    ['img' => 'images/posts/festival-social.jpg',   'alt' => 'Festival Social Media Design'],
];
?>
<section class="ms-posts">

    <style>
        .ms-posts,
        .ms-posts * {
            box-sizing: border-box;
        }

        .ms-posts {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 60px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-posts-wrap {
            max-width: 1110px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        .ms-posts-head {
            text-align: center;
            margin-bottom: 30px;
        }

        .ms-posts-title {
            margin: 0 0 16px;
            font-size: 34px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-posts-title span {
            color: var(--purple);
        }

        .ms-posts-text {
            max-width: 900px;
            margin: 0 auto 12px;
            font-size: 12px;
            line-height: 1.7;
            font-weight: 400;
            color: #222;
        }

        .ms-posts-text:last-child {
            margin-bottom: 0;
        }

        /* ---------- Grid ---------- */
        .ms-posts-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .ms-post-card {
            aspect-ratio: 1 / 1;
            border-radius: 20px;
            overflow: hidden;
            background: #fff;
            border: 1px solid #ececec;
            box-shadow: 0 4px 10px rgba(0, 0, 0, .25);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ms-post-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(90, 46, 166, .28);
        }

        .ms-post-card img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            font-size: 12px;
            color: #444;
            text-align: center;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 991px) {
            .ms-posts-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ms-posts-title {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .ms-posts {
                padding: 35px 14px 45px;
            }

            .ms-posts-title {
                font-size: 26px;
            }

            .ms-posts-grid {
                gap: 12px;
            }

            .ms-post-card {
                border-radius: 16px;
            }
        }
    </style>

    <div class="ms-posts-wrap">

        <div class="ms-posts-head">
            <h2 class="ms-posts-title">Creative Social Media <span>Posts</span></h2>
            <p class="ms-posts-text">We make media posts that are high-quality and engaging. These help your brand capture attention and build an online presence. Every design is created to improve visibility and increase engagement.</p>
            <p class="ms-posts-text">We focus on design trends and clear messaging. This helps every post connect with your target audience.</p>
        </div>

        <div class="ms-posts-grid">
            <?php foreach ($posts as $post) : ?>
                <div class="ms-post-card">
                    <img src="<?php echo htmlspecialchars($post['img']); ?>"
                         alt="<?php echo htmlspecialchars($post['alt']); ?>"
                         loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>