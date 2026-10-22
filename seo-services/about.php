<section class="ms-seoabout">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .ms-seoabout,
        .ms-seoabout * {
            box-sizing: border-box;
        }

        .ms-seoabout {
            --purple: #5A2EA6;
            width: 100%;
            padding: 50px 20px 40px;
            background: #fff;
            font-family: 'Poppins', Arial, sans-serif;
            text-align: center;
            overflow: hidden;
        }

        /* Heading + faded watermark */
        .ms-seoabout-head {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1100px;
            margin: 0 auto 26px;
            min-height: 110px;
        }

        .ms-seoabout-watermark {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 110px;
            font-weight: 800;
            line-height: 1;
            letter-spacing: 1px;
            color: #f0f0f0;
            text-transform: uppercase;
            white-space: nowrap;
            user-select: none;
            pointer-events: none;
            z-index: 0;
        }

        .ms-seoabout-title {
            position: relative;
            z-index: 1;
            margin: 0;
            font-size: 54px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-seoabout-title span {
            color: var(--purple);
            font-weight: 700;
        }

        /* Paragraph */
        .ms-seoabout-text {
            max-width: 1120px;
            margin: 0 auto;
            font-size: 16px;
            line-height: 1.62;
            font-weight: 400;
            color: #2b2b2b;
        }

        .ms-seoabout-text strong {
            font-weight: 700;
            color: #000;
        }

        /* Tablet */
        @media (max-width: 1024px) {
            .ms-seoabout-watermark {
                font-size: 84px;
            }

            .ms-seoabout-title {
                font-size: 44px;
            }

            .ms-seoabout-head {
                min-height: 90px;
            }
        }

        /* Mobile */
        @media (max-width: 767px) {
            .ms-seoabout {
                padding: 35px 14px 30px;
            }

            .ms-seoabout-watermark {
                font-size: 44px;
            }

            .ms-seoabout-title {
                font-size: 30px;
            }

            .ms-seoabout-head {
                min-height: 60px;
                margin-bottom: 18px;
            }

            .ms-seoabout-text {
                font-size: 14px;
                line-height: 1.75;
            }
        }
    </style>

    <div class="ms-seoabout-head">
        <span class="ms-seoabout-watermark" aria-hidden="true">Minerdia Studio</span>
        <h2 class="ms-seoabout-title">SEO <span>Services</span> in Delhi</h2>
    </div>

    <p class="ms-seoabout-text">
        <strong>Minerdia Studio</strong> is an SEO company in Delhi. We help you grow through methods. Our goal is to make your website visible in search results. We want to drive the amount of targeted visitors to your site. Our aim is to convert visits into customers. We believe in driving traffic at the moment for your business. We do everything from keyword research to site optimization. We ensure fast loading speeds, a user-friendly experience and a structure that keeps users engaged. Our goal is to make users take action and become customers. We implement a plan for long-term SEO results. This helps your business grow.
    </p>
</section>