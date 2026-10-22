<style>

    .ms-podcast {
        --purple: #5A2EA6;
        --teal: #2FA8A1;
        width: 100%;
        margin: 30px auto 0;
        background: #fff;
        font-family: 'Poppins', Arial, sans-serif;
        text-align: center;
        overflow: hidden;
    }

    /* Heading + faded watermark */
    .ms-podcast-heading-wrap {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 1100px;
        margin: 0 auto;
        min-height: 110px;
    }

    .ms-podcast-watermark {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 90px;
        font-weight: 800;
        line-height: 1;
        /* letter-spacing: 1px; */
        color: #f0f0f0;
        text-transform: uppercase;
        white-space: nowrap;
        user-select: none;
        pointer-events: none;
        z-index: 0;
    }

    .ms-podcast-title {
        position: relative;
        z-index: 1;
        margin: 0;
        font-size: 54px;
        line-height: 1.2;
        font-weight: 600;
        color: #000;
    }

    .ms-podcast-title span {
        color: var(--purple);
        font-weight: 700;
    }

    /* Paragraph */
    .ms-about-podcast-text {
        max-width: 1120px;
        margin: 0 auto;
        font-size: 15px;
        line-height: 26px;
        font-weight: 400;
        color: #2b2b2b;
    }

    .ms-about-podcast-text a {
        color: var(--teal);
        font-weight: 700;
        text-decoration: underline;
        transition: .3s ease;
    }

    .ms-about-podcast-text a:hover {
        color: var(--purple);
    }

    .ms-about-podcast-text strong {
        font-weight: 700;
        color: #000;
    }

    /* Tablet */
    @media (max-width: 1024px) {
        .ms-podcast-watermark {
            font-size: 84px;
        }

        .ms-podcast-title {
            font-size: 44px;
        }

        .ms-podcast-heading-wrap {
            min-height: 90px;
        }
    }

    /* Mobile */
    @media (max-width: 767px) {
        .ms-podcast {
            padding: 40px 14px 30px;
        }

        .ms-podcast-watermark {
            font-size: 44px;
        }

        .ms-podcast-title {
            font-size: 30px;
        }

        .ms-podcast-heading-wrap {
            min-height: 60px;
            margin-bottom: 20px;
        }

        .ms-about-podcast-text {
            font-size: 14px;
            line-height: 1.85;
        }
    }
</style>

<section class="ms-podcast">

    <div class="ms-podcast-heading-wrap">
        <span class="ms-podcast-watermark" aria-hidden="true">Minerdia Studio</span>
        <h2 class="ms-podcast-title">Podcast <span>Studio</span></h2>
    </div>

    <p class="ms-about-podcast-text">
        Welcome to <a href="https://minerdiastudio.com/">Minerdia Studio</a>, the best place to record <strong>podcasts in Delhi</strong>. Our fully furnished studio provides your voice the quality it deserves, whether you're starting a brand podcast, conducting interviews, or creating audio material on a large scale. We take care of everything, from editing and post-production to soundproofing and acoustics, so you can concentrate entirely on your message.
    </p>
</section>