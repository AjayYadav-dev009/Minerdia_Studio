<section class="ms-seoabout">

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
            font-family: var(--font-body);
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
            font-size: 100px;
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
        <h2 class="ms-seoabout-title">Contact <span>Us</span></h2>
    </div>

    <p class="ms-seoabout-text">
        At <strong>Minerdia Studio</strong> we help businesses grow online with digital and creative services. We offer video editing and podcast production services. Our SEO services and paid advertising solutions are also available. Our team works hard to deliver solutions that fit your business goals. We provide website development services. Our team also manages media and creates high-quality content, for businesses. We support businesses at every stage.
    </p>
</section>