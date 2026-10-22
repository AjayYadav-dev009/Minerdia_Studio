<section class="ms-seores">

    <style>
        .ms-seores,
        .ms-seores * {
            box-sizing: border-box;
        }

        .ms-seores {
            --purple: #5A2EA6;
            width: 100%;
            padding: 55px 20px 55px;
            background: #fff;
            font-family: var(--font-body);
        }

        .ms-seores-wrap {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
        }

        .ms-seores-label {
            display: block;
            margin: 0 0 10px;
            font-family: var(--font-body);
            font-size: 18px;
            font-weight: 400;
            text-transform: uppercase;
            color: var(--purple);
        }

        .ms-seores-title {
            margin: 0 0 24px;
            font-size: 32px;
            line-height: 1.25;
            font-weight: 600;
            color: #000;
        }

        .ms-seores-text p {
            margin: 0;
            font-size: 16px;
            line-height: 1.55;
            font-weight: 300;
            color: #1b1b1b;
            text-align: justify;
        }

        .ms-seores-img {
            border-radius: 30px;
            border: 3px solid #e2e2e2;
            overflow: hidden;
            line-height: 0;
            background: #f3f3f3;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .25);
        }

        .ms-seores-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        @media (max-width: 991px) {
            .ms-seores-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-seores-title {
                font-size: 28px;
            }
        }

        @media (max-width: 575px) {
            .ms-seores {
                padding: 35px 14px 40px;
            }

            .ms-seores-title {
                font-size: 25px;
                margin-bottom: 16px;
            }

            .ms-seores-text p {
                font-size: 15px;
            }

            .ms-seores-img {
                border-radius: 22px;
            }
        }
    </style>

    <div class="ms-seores-wrap">
        <div class="ms-seores-text">
            <span class="ms-seores-label">Features</span>
            <h2 class="ms-seores-title">Results-Driven SEO</h2>

            <p>As a SEO firm we develop effective SEO strategies. Our goal is to make your website perform at its best. We focus on more than search engine positions.</p>
            <p>We ensure your website provides the experience for visitors. We make sure it is highly search engine friendly. Our methods help quality traffic find your site easily. They are more likely to stay on your site leading to conversions.</p>
            <p>Our ultimate aim is to increase your visibility and website traffic. We want to convert them into your clients.</p>
        </div>

        <div class="ms-seores-img">
            <img src="https://minerdiastudio.com/wp-content/uploads/2026/06/seo-Results-Driven-SEO.png" alt="SEO Optimization Services" loading="lazy">
        </div>
    </div>
</section>