<section class="ms-gdve-page" id="graphic-designing-video-editing-services">
    <style>
        .ms-gdve-page,
        .ms-gdve-page * {
            box-sizing: border-box;
        }

        .ms-gdve-page {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #5f5b70;
            font-family: var(--font-body);
            background: #fff;
            color: var(--dark);
            overflow: hidden;
        }

        .ms-gdve-wrap {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .ms-gdve-gradient {
            background: linear-gradient(135deg, var(--purple), #744bd6, var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-gdve-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            border-radius: 50px;
            background: #fff;
            color: var(--purple);
            font-size: 12px;
            font-weight: 800;
            box-shadow: 0 10px 28px rgba(23, 20, 43, .08);
            margin-bottom: 16px;
        }

        .ms-gdve-label:before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple), var(--teal));
            animation: msDot 1.5s infinite ease-in-out;
        }

        .ms-gdve-head {
            max-width: 860px;
            margin: 0 auto 34px;
            text-align: center;
        }

        .ms-gdve-head h2 {
            margin: 0 0 12px;
            font-size: 33px;
            line-height: 1.2;
            font-weight: 900;
            letter-spacing: -.6px;
        }

        .ms-gdve-head p {
            margin: 0;
            font-size: 15px;
            line-height: 1.75;
            color: var(--text);
        }

        .ms-gdve-bg {
            background: linear-gradient(135deg, #fff 0%, #fbf8ff 55%, #effafa 100%);
        }

        .ms-gdve-white {
            background: #fff;
        }

        .ms-gdve-page strong {
            font-weight: 700;
            color: #31245f;
        }

        @keyframes msDot {

            0%,
            100% {
                opacity: .45;
                transform: scale(.85);
            }

            50% {
                opacity: 1;
                transform: scale(1.25);
            }
        }

        @keyframes msFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        /* HERO */
        .ms-gdve-intro {
            padding: 56px 0;
            background:
                radial-gradient(circle at 2% 22%, rgba(90, 46, 166, .34), transparent 7%),
                radial-gradient(circle at 98% 80%, rgba(90, 46, 166, .34), transparent 8%),
                radial-gradient(circle at 88% 12%, rgba(47, 168, 161, .14), transparent 28%),
                linear-gradient(135deg, #fff 0%, #fbf8ff 55%, #eefafa 100%);
        }

        .ms-gdve-grid {
            display: grid;
            grid-template-columns: 1fr .92fr;
            gap: 48px;
            align-items: center;
        }

        .ms-gdve-intro h2 {
            margin: 0 0 20px;
            font-size: 38px;
            line-height: 1.22;
            font-weight: 900;
            letter-spacing: -.8px;
        }

        .ms-gdve-intro p,
        .ms-gdve-text p {
            margin: 0 0 16px;
            font-size: 15.5px;
            line-height: 1.75;
            color: var(--text);
            text-align: justify;
        }

        .ms-gdve-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 28px;
            max-width: 570px;
        }

        .ms-gdve-stat {
            padding: 18px 16px;
            border-radius: 18px;
            background: rgba(255, 255, 255, .88);
            border: 1px solid rgba(90, 46, 166, .12);
            box-shadow: 0 14px 36px rgba(23, 20, 43, .06);
            transition: .35s ease;
        }

        .ms-gdve-stat:hover {
            transform: translateY(-6px);
        }

        .ms-gdve-stat strong {
            display: block;
            font-size: 25px;
            color: var(--purple);
            font-weight: 900;
            margin-bottom: 6px;
        }

        .ms-gdve-stat span {
            display: block;
            font-size: 12.5px;
            color: #5f5b70;
            font-weight: 700;
        }

        .ms-gdve-visual {
            min-height: 360px;
            border-radius: 30px;
            padding: 18px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .12), rgba(47, 168, 161, .12));
            border: 1px solid rgba(255, 255, 255, .9);
            box-shadow: 0 28px 70px rgba(23, 20, 43, .10);
            animation: msFloat 5s infinite ease-in-out;
            overflow: hidden;
        }

        .ms-gdve-visual img {
            width: 100%;
            height: 100%;
            min-height: 324px;
            display: block;
            object-fit: cover;
            border-radius: 24px;
        }

        /* SECTIONS */
        .ms-gdve-main-services,
        .ms-gdve-assets,
        .ms-gdve-split,
        .ms-gdve-process,
        .ms-gdve-portfolio,
        .ms-gdve-industries {
            padding: 58px 0;
        }

        /* MAIN SERVICE */
        .ms-gdve-two-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .ms-gdve-main-card {
            border-radius: 28px;
            overflow: hidden;
            background: #fff;
            border: 1px solid rgba(90, 46, 166, .12);
            box-shadow: 0 24px 60px rgba(23, 20, 43, .08);
            transition: .35s ease;
        }

        .ms-gdve-main-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 32px 78px rgba(90, 46, 166, .14);
        }

        .ms-gdve-img {
            width: 100%;
            height: 260px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .08), rgba(47, 168, 161, .10));
            overflow: hidden;
        }

        .ms-gdve-img img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .ms-gdve-main-body {
            padding: 26px 24px 28px;
        }

        .ms-gdve-main-body h3 {
            margin: 0 0 12px;
            font-size: 24px;
            line-height: 1.25;
            font-weight: 900;
        }

        .ms-gdve-main-body p {
            margin: 0 0 17px;
            font-size: 15px;
            line-height: 1.75;
            color: var(--text);
            text-align: justify;
        }

        .ms-gdve-points {
            display: grid;
            gap: 10px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .ms-gdve-points li {
            font-size: 14.5px;
            line-height: 1.55;
            color: #28233a;
            display: flex;
            gap: 9px;
        }

        .ms-gdve-points li:before {
            content: "✓";
            color: var(--teal);
            font-weight: 900;
        }

        /* ASSETS */
        .ms-gdve-assets-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .ms-gdve-asset-card {
            background: #fff;
            border: 1px solid rgba(90, 46, 166, .12);
            border-radius: 26px;
            padding: 22px;
            box-shadow: 0 18px 50px rgba(23, 20, 43, .06);
            transition: .35s ease;
            overflow: hidden;
        }

        .ms-gdve-asset-card:hover {
            transform: translateY(-8px);
            border-color: rgba(47, 168, 161, .35);
            box-shadow: 0 28px 70px rgba(90, 46, 166, .12);
        }

        .ms-gdve-asset-icon {
            width: 52px;
            height: 52px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #fff;
            background: linear-gradient(135deg, var(--purple), #744bd6, var(--teal));
            margin-bottom: 18px;
            animation: msFloat 3s infinite ease-in-out;
        }

        .ms-gdve-asset-card h3 {
            margin: 0 0 12px;
            font-size: 18px;
            line-height: 1.35;
            font-weight: 900;
        }

        .ms-gdve-asset-card p {
            margin: 0;
            font-size: 14.5px;
            line-height: 1.8;
            color: var(--text);
        }

        /* SPLIT */
        .ms-gdve-split-grid {
            display: grid;
            grid-template-columns: .92fr 1fr;
            gap: 44px;
            align-items: center;
        }

        .ms-gdve-split-grid.reverse {
            grid-template-columns: 1fr .92fr;
        }

        .ms-gdve-split-img {
            min-height: 300px;
            padding: 16px;
            border-radius: 28px;
            background: linear-gradient(135deg, rgba(90, 46, 166, .14), rgba(47, 168, 161, .13));
            border: 1px solid rgba(255, 255, 255, .9);
            box-shadow: 0 28px 70px rgba(23, 20, 43, .10);
            overflow: hidden;
            animation: msFloat 5s infinite ease-in-out;
        }

        .ms-gdve-split-img img {
            width: 100%;
            height: 100%;
            min-height: 268px;
            display: block;
            object-fit: cover;
            border-radius: 22px;
        }

        .ms-gdve-text h2 {
            margin: 0 0 14px;
            font-size: 31px;
            line-height: 1.2;
            font-weight: 900;
        }

        .ms-gdve-mini-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 20px;
        }

        .ms-gdve-mini-list span {
            padding: 14px 16px;
            border-radius: 14px;
            background: #fff;
            border: 1px solid rgba(90, 46, 166, .12);
            box-shadow: 0 12px 30px rgba(23, 20, 43, .06);
            font-size: 13.5px;
            font-weight: 900;
            color: var(--dark);
            transition: .35s ease;
        }

        .ms-gdve-mini-list span:hover {
            transform: translateY(-5px);
            color: var(--purple);
            border-color: rgba(47, 168, 161, .35);
        }

        /* PROCESS */
        .ms-gdve-process-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
        }

        .ms-gdve-step {
            min-height: 214px;
            padding: 24px 18px;
            border-radius: 24px;
            background: #fff;
            border: 1px solid rgba(90, 46, 166, .14);
            box-shadow: 0 18px 45px rgba(23, 20, 43, .06);
            text-align: center;
            transition: .35s ease;
            overflow: hidden;
        }

        .ms-gdve-step:hover {
            transform: translateY(-7px);
            box-shadow: 0 28px 65px rgba(90, 46, 166, .12);
            border-color: rgba(47, 168, 161, .35);
        }

        .ms-gdve-step-num {
            width: 55px;
            height: 55px;
            margin: 0 auto 16px;
            border-radius: 18px;
            background: linear-gradient(135deg, var(--purple), #744bd6, var(--teal));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 900;
            animation: msFloat 3s infinite ease-in-out;
        }

        .ms-gdve-step h3 {
            margin: 0 0 10px;
            font-size: 17px;
            font-weight: 900;
        }

        .ms-gdve-step p {
            margin: 0;
            font-size: 14px;
            line-height: 1.65;
            color: var(--text);
        }

        /* PORTFOLIO */
        .ms-slider-wrap {
            overflow: hidden;
            position: relative;
            width: 100%;
            cursor: pointer;
            padding: 18px 0 28px;
        }

        .ms-slider-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: msPortfolioMove 40s linear infinite;
            will-change: transform;
        }

        .ms-slider-wrap.paused .ms-slider-track {
            animation-play-state: paused;
        }

        .ms-portfolio-card {
            width: 280px;
            flex: 0 0 280px;
            background: #fff;
            border: 1px solid rgba(90, 46, 166, .12);
            border-radius: 26px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(23, 20, 43, .07);
            transition: .35s ease;
        }

        .ms-portfolio-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 28px 65px rgba(90, 46, 166, .12);
        }

        .ms-card-image {
            height: 300px;
            overflow: hidden;
            background: #f7f7f7;
        }

        .ms-card-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: .6s ease;
        }

        .ms-portfolio-card:hover img {
            transform: scale(1.05);
        }

        .ms-card-content {
            padding: 20px;
        }

        .ms-card-content h3 {
            margin: 0 0 10px;
            font-size: 17px;
            font-weight: 900;
        }

        .ms-card-content p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            color: var(--text);
        }

        @keyframes msPortfolioMove {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* INDUSTRIES */
        .ms-gdve-ind-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .ms-gdve-ind {
            padding: 18px 16px;
            border-radius: 18px;
            background: #fff;
            border: 1px solid rgba(90, 46, 166, .14);
            box-shadow: 0 16px 38px rgba(23, 20, 43, .05);
            text-align: center;
            font-size: 15px;
            font-weight: 900;
            transition: .35s ease;
        }

        .ms-gdve-ind:hover {
            transform: translateY(-6px);
            color: var(--purple);
            border-color: rgba(47, 168, 161, .35);
            box-shadow: 0 24px 60px rgba(90, 46, 166, .11);
        }

        /* TABLET */
        @media(max-width:991px) {

            .ms-gdve-grid,
            .ms-gdve-two-grid,
            .ms-gdve-split-grid,
            .ms-gdve-split-grid.reverse {
                grid-template-columns: 1fr;
            }

            .ms-gdve-assets-grid,
            .ms-gdve-process-grid,
            .ms-gdve-ind-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ms-gdve-head h2 {
                font-size: 29px;
            }

            .ms-gdve-intro h2 {
                font-size: 32px;
            }

            .ms-gdve-text h2 {
                font-size: 28px;
            }

            .ms-gdve-content,
            .ms-gdve-text {
                text-align: center;
            }

            .ms-gdve-stats {
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* MOBILE FIX */
        @media(max-width:767px) {
            .ms-gdve-wrap {
                padding: 0 16px;
            }

            .ms-gdve-intro,
            .ms-gdve-main-services,
            .ms-gdve-assets,
            .ms-gdve-split,
            .ms-gdve-process,
            .ms-gdve-portfolio,
            .ms-gdve-industries {
                padding: 42px 0;
            }

            .ms-gdve-intro h2 {
                font-size: 27px;
                text-align: center;
            }

            .ms-gdve-head h2 {
                font-size: 25px;
            }

            .ms-gdve-text h2 {
                font-size: 24px;
            }

            .ms-gdve-intro p,
            .ms-gdve-text p {
                font-size: 14.7px;
                text-align: justify;
            }

            .ms-gdve-stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 8px;
                max-width: 100%;
            }

            .ms-gdve-stat {
                padding: 13px 7px;
                text-align: center;
            }

            .ms-gdve-stat strong {
                font-size: 20px;
            }

            .ms-gdve-stat span {
                font-size: 10px;
            }

            .ms-gdve-assets-grid,
            .ms-gdve-mini-list,
            .ms-gdve-process-grid,
            .ms-gdve-ind-grid {
                grid-template-columns: 1fr;
            }

            .ms-gdve-img {
                height: auto;
                padding: 10px;
                border-radius: 24px;
                background: linear-gradient(135deg, rgba(90, 46, 166, .12), rgba(47, 168, 161, .12));
            }

            .ms-gdve-img img {
                height: auto;
                object-fit: contain;
                border-radius: 18px;
            }

            .ms-gdve-visual,
            .ms-gdve-split-img {
                min-height: auto !important;
                height: auto !important;
                padding: 10px !important;
                border-radius: 26px !important;
                overflow: visible !important;
                background: linear-gradient(135deg, rgba(90, 46, 166, .12), rgba(47, 168, 161, .12)) !important;
                border: 1px solid rgba(255, 255, 255, .9) !important;
                box-shadow: 0 22px 55px rgba(23, 20, 43, .10) !important;
            }

            .ms-gdve-visual img,
            .ms-gdve-split-img img {
                width: 100% !important;
                height: auto !important;
                min-height: 0 !important;
                max-height: none !important;
                object-fit: contain !important;
                border-radius: 20px !important;
                display: block !important;
            }

            .ms-gdve-grid,
            .ms-gdve-split-grid,
            .ms-gdve-split-grid.reverse {
                gap: 28px !important;
            }

            .ms-portfolio-card {
                width: 220px;
                flex: 0 0 220px;
            }

            .ms-card-image {
                height: 240px;
            }
        }
    </style>

    <section class="ms-gdve-intro">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-grid">

                <div class="ms-gdve-content">
                    <span class="ms-gdve-label">Designing and Video Editing Services</span>

                    <h2>
                        <span class="ms-gdve-gradient">Designing and Video Editing Services</span> in India

                    </h2>

                    <p>
                        <strong>Designing and Video Editing Services</strong> by Minerdia Studio help businesses create professional graphics, engaging videos, and high-converting visual content for every platform.
                    </p>

                    <p>
                        From Reels, YouTube thumbnails and podcast clips to ad creatives, campaign graphics and brand visuals, our team turns your ideas into content people remember.
                    </p>

                    <p>
                        Every creative is planned with clear messaging, clean design, strong hooks and platform-ready execution for Instagram, YouTube, Facebook, LinkedIn, websites and paid ads.
                    </p>

                    <div class="ms-gdve-stats">
                        <div class="ms-gdve-stat"><strong>900+</strong><span>Projects Delivered</span></div>
                        <div class="ms-gdve-stat"><strong>98%</strong><span>Client Satisfaction</span></div>
                        <div class="ms-gdve-stat"><strong>6+</strong><span>Years Experience</span></div>
                    </div>
                </div>

                <div class="ms-gdve-visual">
                    <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/Graphic-Designing-Video-Editing-Services-in-Delhi.png" alt="Professional Designing and Video Editing" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <section class="ms-gdve-main-services ms-gdve-bg">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-head">
                <span class="ms-gdve-label">Why It Matters</span>
                <h2>
                    Designing and Video Editing Services That
                    <span class="ms-gdve-gradient">Grow Your Brand</span>
                </h2>
                <p>In a crowded feed, design and editing are not decoration. They shape your first impression, your brand trust and your sales message.</p>
            </div>

            <div class="ms-gdve-two-grid">

                <div class="ms-gdve-main-card">
                    <div class="ms-gdve-img">
                        <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/398d56e3-22de-49cf-8660-4f1ae278b9de.png" alt="Professional Graphic Designing Services in India" loading="lazy">
                    </div>
                    <div class="ms-gdve-main-body">
                        <h3>Graphic Designing Services</h3>
                        <p>
                            Our <strong>graphic designing services in Delhi</strong> help your brand look clean, confident and consistent across social media, websites, ads and print material.
                        </p>
                        <ul class="ms-gdve-points">
                            <li>Social media posts, carousels and campaign creatives</li>
                            <li>High-CTR thumbnails for YouTube, Reels and Shorts</li>
                            <li>Branding, logo design, colour systems and brand kits</li>
                            <li>Brochures, flyers, banners and print-ready designs</li>
                        </ul>
                    </div>
                </div>

                <div class="ms-gdve-main-card">
                    <div class="ms-gdve-img">
                        <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/8b709e95-f356-456b-9a62-0b2f2c571d39.png" alt="Professional Video Editing Services in India" loading="lazy">
                    </div>
                    <div class="ms-gdve-main-body">
                        <h3>Video Editing Services</h3>
                        <p>
                            Our <strong>video editing services in Delhi</strong> turn raw clips into smooth, story-driven content with captions, B-roll, sound design and retention-focused pacing.
                        </p>
                        <ul class="ms-gdve-points">
                            <li>Reels, YouTube Shorts and hook-first edits</li>
                            <li>Long-form YouTube editing with B-roll and cuts</li>
                            <li>Podcast editing, multi-cam edits and audiogram clips</li>
                            <li>Performance ad creatives for Meta and Google Ads</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ms-gdve-assets ms-gdve-white">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-head">
                <span class="ms-gdve-label">What We Offer</span>
                <h2>
                    Complete
                    <span class="ms-gdve-gradient">Designing and Video Editing Services</span>
                    For Every Business
                </h2>
                <p>We create complete design and editing assets that support visibility, engagement, trust and business growth.</p>
            </div>

            <div class="ms-gdve-assets-grid">
                <div class="ms-gdve-asset-card">
                    <div class="ms-gdve-asset-icon">🎨</div>
                    <h3>Social Media Creatives</h3>
                    <p>Posts, carousels, festive creatives and product visuals designed to stop the scroll and stay on-brand.</p>
                </div>
                <div class="ms-gdve-asset-card">
                    <div class="ms-gdve-asset-icon">🖼️</div>
                    <h3>Thumbnail Design</h3>
                    <p>High-click thumbnails with bold layout, readable text and clear visual hierarchy for better clicks.</p>
                </div>
                <div class="ms-gdve-asset-card">
                    <div class="ms-gdve-asset-icon">🎯</div>
                    <h3>Branding & Logo Design</h3>
                    <p>Logo design, colours, fonts and brand kits for a consistent identity across every platform.</p>
                </div>
                <div class="ms-gdve-asset-card">
                    <div class="ms-gdve-asset-icon">📢</div>
                    <h3>Ad & Campaign Graphics</h3>
                    <p>Offer creatives, launch announcements and paid ad visuals built for attention and conversion.</p>
                </div>
                <div class="ms-gdve-asset-card">
                    <div class="ms-gdve-asset-icon">🎬</div>
                    <h3>Reels & Shorts Editing</h3>
                    <p>Fast-paced short-form edits with captions, hooks, trending pacing and clean finishing.</p>
                </div>
                <div class="ms-gdve-asset-card">
                    <div class="ms-gdve-asset-icon">✨</div>
                    <h3>Motion & Animation</h3>
                    <p>Motion graphics, animated text, logo stings and subtle effects for premium content output.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ms-gdve-split ms-gdve-bg">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-split-grid">

                <div class="ms-gdve-split-img">
                    <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/856f17b6-5add-4490-a7b5-faf8eeeb3537.png" alt="Graphic Design Services" loading="lazy">
                </div>

                <div class="ms-gdve-text">
                    <span class="ms-gdve-label">Graphic Designing</span>
                    <h2>Graphic Designing Services Included In Our <span class="ms-gdve-gradient">Designing and Video Editing Services</span>
                    </h2>
                    <p>
                        A weak design loses trust before your message is understood. We create <strong>professional graphic design</strong> with clean layouts, sharp spacing, strong typography and brand-first visuals.
                    </p>
                    <p>
                        Every creative is made to stop the scroll, explain your offer clearly and move users toward the next action.
                    </p>
                    <div class="ms-gdve-mini-list">
                        <span>Social Media Posts</span>
                        <span>Brand Kits</span>
                        <span>Ad Creatives</span>
                        <span>Marketing Collateral</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ms-gdve-split ms-gdve-bg">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-split-grid reverse">

                <div class="ms-gdve-text">
                    <span class="ms-gdve-label">Video Editing</span>
                    <h2>Professional Video Editing As Part Of Our
                        <span class="ms-gdve-gradient">Designing and Video Editing Services</span>
                    </h2>
                    <p>
                        A slow edit loses viewers. Our <strong>professional video editing</strong> keeps your audience engaged with clean cuts, captions, music, B-roll, lower-thirds and retention-focused pacing.
                    </p>
                    <p>
                        We edit short-form videos, YouTube content, podcast clips and ad creatives that look premium and perform better online.
                    </p>
                    <div class="ms-gdve-mini-list">
                        <span>Reels Editing</span>
                        <span>YouTube Editing</span>
                        <span>Podcast Clips</span>
                        <span>Ad Videos</span>
                    </div>
                </div>

                <div class="ms-gdve-split-img">
                    <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/53e85ec8-6850-447a-9e9f-2fa5268586db.png" alt="Professional Video Editing" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <section class="ms-gdve-process ms-gdve-bg">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-head">
                <span class="ms-gdve-label">How We Work</span>
                <h2>
                    Our <span class="ms-gdve-gradient">Designing and Video Editing Service</span> Process</h2>
                <p>Our workflow keeps your design and editing project clear, structured and easy from brief to delivery.</p>
            </div>

            <div class="ms-gdve-process-grid">
                <div class="ms-gdve-step">
                    <div class="ms-gdve-step-num">01</div>
                    <h3>Discovery & Brief</h3>
                    <p>We understand your brand, goal, audience and the visual style you want.</p>
                </div>
                <div class="ms-gdve-step">
                    <div class="ms-gdve-step-num">02</div>
                    <h3>Strategy & Direction</h3>
                    <p>We plan formats, hooks, layouts and editing direction for better output.</p>
                </div>
                <div class="ms-gdve-step">
                    <div class="ms-gdve-step-num">03</div>
                    <h3>Design & Edit</h3>
                    <p>Our team creates on-brand, platform-ready design and video content.</p>
                </div>
                <div class="ms-gdve-step">
                    <div class="ms-gdve-step-num">04</div>
                    <h3>Review & Refine</h3>
                    <p>You review, we revise and polish the final creative with clear feedback.</p>
                </div>
                <div class="ms-gdve-step">
                    <div class="ms-gdve-step-num">05</div>
                    <h3>Delivery</h3>
                    <p>You receive final files ready for social media, YouTube, ads and websites.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ms-gdve-portfolio ms-gdve-bg" id="msPortfolioSlider">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-head">
                <span class="ms-gdve-label">Creative Portfolio</span>
                <h2>Showcase Your Brand With <span class="ms-gdve-gradient">Premium Visual Content</span></h2>
                <p>Explore our creative samples, including brand videos, Instagram creatives, Reels editing and thumbnail design.</p>
            </div>

            <div class="ms-slider-wrap" id="msSliderWrap">
                <div class="ms-slider-track">
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/1as.png" alt="Brand Video"></div>
                        <div class="ms-card-content">
                            <h3>Brand Videos</h3>
                            <p>Professional video edits for campaigns, promotions and marketing content.</p>
                        </div>
                    </div>
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/2as.png" alt="Instagram Creative"></div>
                        <div class="ms-card-content">
                            <h3>Instagram Creatives</h3>
                            <p>Clean social media designs made for engagement, branding and trust.</p>
                        </div>
                    </div>
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/3as.png" alt="Reels Editing"></div>
                        <div class="ms-card-content">
                            <h3>Reels Editing</h3>
                            <p>Short-form videos edited with captions, hooks and smooth pacing.</p>
                        </div>
                    </div>
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/4as.png" alt="Thumbnail Design"></div>
                        <div class="ms-card-content">
                            <h3>Thumbnail Design</h3>
                            <p>Clickable thumbnails with contrast, clarity and strong visual focus.</p>
                        </div>
                    </div>

                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/1as.png" alt="Brand Video"></div>
                        <div class="ms-card-content">
                            <h3>Brand Videos</h3>
                            <p>Professional video edits for campaigns, promotions and marketing content.</p>
                        </div>
                    </div>
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/2as.png" alt="Instagram Creative"></div>
                        <div class="ms-card-content">
                            <h3>Instagram Creatives</h3>
                            <p>Clean social media designs made for engagement, branding and trust.</p>
                        </div>
                    </div>
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/3as.png" alt="Reels Editing"></div>
                        <div class="ms-card-content">
                            <h3>Reels Editing</h3>
                            <p>Short-form videos edited with captions, hooks and smooth pacing.</p>
                        </div>
                    </div>
                    <div class="ms-portfolio-card">
                        <div class="ms-card-image"><img src="https://minerdiastudio.com/wp-content/uploads/2026/06/4as.png" alt="Thumbnail Design"></div>
                        <div class="ms-card-content">
                            <h3>Thumbnail Design</h3>
                            <p>Clickable thumbnails with contrast, clarity and strong visual focus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ms-gdve-industries ms-gdve-white">
        <div class="ms-gdve-wrap">
            <div class="ms-gdve-head">
                <span class="ms-gdve-label">Industries We Serve</span>
                <h2>Creative That Works Across <span class="ms-gdve-gradient">Every Business Niche</span></h2>
                <p>We adapt design tone, editing pace and messaging style for every industry while keeping your brand identity consistent.</p>
            </div>

            <div class="ms-gdve-ind-grid">
                <div class="ms-gdve-ind">Real Estate</div>
                <div class="ms-gdve-ind">Healthcare</div>
                <div class="ms-gdve-ind">Travel & Hospitality</div>
                <div class="ms-gdve-ind">Personal Brands</div>
                <div class="ms-gdve-ind">Education & EdTech</div>
                <div class="ms-gdve-ind">E-commerce</div>
                <div class="ms-gdve-ind">Finance & Insurance</div>
                <div class="ms-gdve-ind">Fitness & Wellness</div>
                <div class="ms-gdve-ind">Restaurants & Cafes</div>
                <div class="ms-gdve-ind">Beauty Artists</div>
                <div class="ms-gdve-ind">Spiritual Brands</div>
                <div class="ms-gdve-ind">Creators</div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            const slider = document.getElementById("msSliderWrap");
            if (!slider) return;

            slider.addEventListener("click", function() {
                slider.classList.toggle("paused");
            });
        })();
    </script>
</section>