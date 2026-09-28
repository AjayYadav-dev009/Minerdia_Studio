<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    .minerdia-growth-section {
        --violet: #5A2EA6;
        --violet2: #7A49D6;
        --teal: #2FA8A1;
        --text: #17142b;
        --muted: #6d6985;
        --gradient: linear-gradient(120deg, #5A2EA6 0%, #7A49D6 40%, #2FA8A1 100%);
        --desktop-top-space: 130px;
        --mobile-top-space: 150px;
        font-family: 'Hanken Grotesk', sans-serif;
        color: var(--text);
        background: radial-gradient(circle at top left, rgba(47, 168, 161, .10), transparent 40%), radial-gradient(circle at top right, rgba(90, 46, 166, .12), transparent 40%), #fff;
        overflow: hidden;
    }

    .minerdia-growth-section,
    .minerdia-growth-section * {
        box-sizing: border-box;
    }

    .elementor-widget-html,
    .elementor-widget-container {
        margin: 0 !important;
        padding: 0 !important;
    }

    .minerdia-container {
        max-width: 1240px;
        margin: auto;
        padding: var(--desktop-top-space) 24px 55px;
    }

    .minerdia-hero {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 410px;
        gap: 46px;
        align-items: start;
    }

    .minerdia-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: .18em;
        font-size: 12px;
        font-weight: 700;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 18px;
    }

    .minerdia-eyebrow::before {
        content: '';
        width: 28px;
        height: 2px;
        background: var(--gradient);
    }

    .minerdia-content h1 {
        font-family: 'Fraunces', serif;
        font-size: 52px;
        line-height: 1.18;
        font-weight: 500;
        letter-spacing: -1.5px;
        margin: 0 0 18px;
        overflow: visible;
    }

    .minerdia-changing-wrap {
        display: inline-block;
        position: relative;
        min-width: 590px;
        height: 1.55em;
        margin-left: 12px;
        padding-right: 35px;
        vertical-align: baseline;
        white-space: nowrap;
        overflow: visible;
    }

    .minerdia-changing-word {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        font-style: italic;
        white-space: nowrap;
        line-height: 1.35;
        padding-right: 35px;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: minerdiaWordLoop 10s infinite;
        overflow: visible;
    }

    .minerdia-changing-word:nth-child(1) {
        animation-delay: 0s;
    }

    .minerdia-changing-word:nth-child(2) {
        animation-delay: 2s;
    }

    .minerdia-changing-word:nth-child(3) {
        animation-delay: 4s;
    }

    .minerdia-changing-word:nth-child(4) {
        animation-delay: 6s;
    }

    .minerdia-changing-word:nth-child(5) {
        animation-delay: 8s;
    }

    @keyframes minerdiaWordLoop {
        0% {
            opacity: 0;
            transform: translateY(12px);
        }

        8% {
            opacity: 1;
            transform: translateY(0);
        }

        18% {
            opacity: 1;
            transform: translateY(0);
        }

        25% {
            opacity: 0;
            transform: translateY(-12px);
        }

        100% {
            opacity: 0;
        }
    }

    .minerdia-content p {
        font-size: 17px;
        line-height: 1.7;
        color: var(--muted);
        margin: 0 0 14px;
        max-width: 680px;
    }

    .minerdia-features {
        list-style: none;
        margin: 24px 0 0;
        padding: 0;
    }

    .minerdia-features li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 14px;
        font-size: 16px;
        line-height: 1.5;
    }

    .minerdia-check {
        width: 22px;
        height: 22px;
        min-width: 22px;
        border-radius: 50%;
        background: var(--gradient);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        margin-top: 1px;
    }

    .minerdia-card {
        background: #fff;
        border-radius: 24px;
        padding: 22px 20px;
        border: 1px solid rgba(90, 46, 166, .18);
        box-shadow: 0 16px 35px rgba(90, 46, 166, .10), 0 8px 20px rgba(47, 168, 161, .06);
        position: relative;
        max-width: 410px;
        width: 100%;
        margin-left: auto;
    }

    .minerdia-card h2 {
        font-family: 'Fraunces', serif;
        font-size: 24px;
        line-height: 1.1;
        margin: 0 0 6px;
    }

    .minerdia-card h2 span {
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .minerdia-card p {
        color: var(--muted);
        margin: 0 0 12px;
        font-size: 13px;
        line-height: 1.5;
    }

    .minerdia-card .fluentform,
    .minerdia-card form {
        width: 100% !important;
    }

    .minerdia-card .ff-el-group {
        margin-bottom: 14px !important;
    }

    .minerdia-card label,
    .minerdia-card .ff-el-input--label label {
        font-size: 12px !important;
        font-weight: 700 !important;
        color: var(--text) !important;
    }

    .minerdia-card input,
    .minerdia-card select,
    .minerdia-card textarea {
        width: 100% !important;
        border-radius: 12px !important;
        background: #f7f6fb !important;
        border: 1px solid #ddd !important;
        min-height: 42px !important;
        padding: 10px 14px !important;
        font-size: 14px !important;
    }

    .minerdia-card .ff-btn-submit,
    .minerdia-card button[type="submit"],
    .minerdia-card input[type="submit"] {
        width: 100% !important;
        border: none !important;
        border-radius: 12px !important;
        background: linear-gradient(135deg, #5A2EA6 0%, #2FA8A1 100%) !important;
        color: #fff !important;
        font-size: 15px !important;
        font-weight: 700 !important;
        padding: 13px !important;
        cursor: pointer !important;
    }

    @media(max-width:767px) {
        .minerdia-container {
            padding: var(--mobile-top-space) 20px 45px;
        }

        .minerdia-hero {
            display: flex;
            flex-direction: column;
        }

        .minerdia-content {
            text-align: center;
        }

        .minerdia-content h1 {
            font-size: 34px;
        }

        .minerdia-changing-wrap {
            min-width: 100%;
            width: 100%;
            display: block;
            margin-left: 0;
            margin-top: 12px;
            padding-right: 0;
            height: 1.55em;
        }

        .minerdia-changing-word {
            left: 0;
            right: 0;
            text-align: center;
            padding-right: 0;
        }

        .minerdia-card {
            width: 100%;
            max-width: 100%;
            margin: 22px auto;
            padding: 18px;
        }
    }
</style>

<section class="minerdia-growth-section">
    <div class="minerdia-container">
        <div class="minerdia-hero">

            <div class="minerdia-content">
                <div class="minerdia-eyebrow">Free 15 Minute Growth Audit</div>

                <h1>
                    Struggling to Grow with
                    <span class="minerdia-changing-wrap">
                        <span class="minerdia-changing-word">Social Media?</span>
                        <span class="minerdia-changing-word">Podcasts?</span>
                        <span class="minerdia-changing-word">Facebook Ads?</span>
                        <span class="minerdia-changing-word">Google Ads?</span>
                        <span class="minerdia-changing-word">Website Design?</span>
                    </span>
                </h1>

                <p>Most businesses don't have a marketing problem — they have a growth system problem. In just 15 minutes, we'll show you exactly where opportunities are being missed and how to fix them.</p>

                <ul class="minerdia-features">
                    <li><span class="minerdia-check">✓</span>A complete audit of your Social Media, Ads, Website & Content Strategy</li>
                    <li><span class="minerdia-check">✓</span>Actionable recommendations to improve reach, engagement, leads, and conversions</li>
                    <li><span class="minerdia-check">✓</span>Expert insights on Facebook Ads, Google Ads, Podcast Growth & Content Performance</li>
                    <li><span class="minerdia-check">✓</span>The 3 highest-impact improvements you can implement this week</li>
                </ul>
            </div>

            <div class="minerdia-card">
                <h2>Get your <span>free audit</span></h2>
                <p>Answer a few quick questions. We reply on WhatsApp within minutes.</p>
                [fluentform id="10"]
            </div>

        </div>
    </div>
</section>


<section class="minerdia-next-section">

    <style>
        .minerdia-next-section {
            padding: 30px 0 50px;
            background: #ffffff;
            overflow: hidden;
        }

        .minerdia-next-container {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .minerdia-next-title {
            text-align: center;
            font-family: 'Fraunces', serif;
            font-size: 52px;
            font-weight: 500;
            color: #17142b;
            margin-bottom: 70px;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .minerdia-next-title em {
            font-style: italic;
            background: linear-gradient(120deg, #5A2EA6 0%, #7A49D6 40%, #2FA8A1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .minerdia-next-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .minerdia-next-card {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            padding: 32px;
            background:
                linear-gradient(145deg, rgba(255, 255, 255, .94), rgba(255, 255, 255, .58)),
                radial-gradient(circle at 15% 10%, rgba(255, 255, 255, .95), transparent 35%),
                radial-gradient(circle at 90% 90%, rgba(47, 168, 161, .12), transparent 42%);
            border: 1px solid rgba(90, 46, 166, .14);
            backdrop-filter: blur(22px) saturate(160%);
            -webkit-backdrop-filter: blur(22px) saturate(160%);
            transition: .35s ease;
        }

        .minerdia-next-card .border-line {
            position: absolute;
            background: linear-gradient(90deg, #5A2EA6, #7A49D6, #2FA8A1);
            z-index: 5;
            pointer-events: none;
        }

        .minerdia-next-card .line-top {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            animation: lineTop 8s linear infinite;
        }

        .minerdia-next-card .line-right {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, #5A2EA6, #7A49D6, #2FA8A1);
            animation: lineRight 8s linear infinite;
            animation-delay: 2s;
        }

        .minerdia-next-card .line-bottom {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            animation: lineBottom 8s linear infinite;
            animation-delay: 4s;
        }

        .minerdia-next-card .line-left {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, #5A2EA6, #7A49D6, #2FA8A1);
            animation: lineLeft 8s linear infinite;
            animation-delay: 6s;
        }

        .minerdia-next-card::after {
            content: "";
            position: absolute;
            top: -90%;
            left: -90%;
            width: 38%;
            height: 270%;
            background: linear-gradient(120deg,
                    transparent 0%,
                    rgba(255, 255, 255, .06) 30%,
                    rgba(255, 255, 255, .42) 50%,
                    rgba(255, 255, 255, .08) 70%,
                    transparent 100%);
            transform: rotate(25deg);
            animation: minerdiaNextShine 6s ease-in-out infinite;
            pointer-events: none;
            z-index: 3;
        }

        .minerdia-next-card:hover {
            transform: translateY(-6px);
        }

        .minerdia-next-number,
        .minerdia-next-card h3,
        .minerdia-next-card p {
            position: relative;
            z-index: 4;
        }

        .minerdia-next-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 22px;
            background: linear-gradient(120deg, #5A2EA6 0%, #7A49D6 40%, #2FA8A1 100%);
        }

        .minerdia-next-card h3 {
            font-size: 18px;
            font-weight: 600;
            color: #17142b;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .minerdia-next-card p {
            color: #6d6985;
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
        }

        @keyframes lineTop {
            0% {
                left: -100%;
            }

            25%,
            100% {
                left: 100%;
            }
        }

        @keyframes lineRight {
            0% {
                top: -100%;
            }

            25%,
            100% {
                top: 100%;
            }
        }

        @keyframes lineBottom {
            0% {
                right: -100%;
            }

            25%,
            100% {
                right: 100%;
            }
        }

        @keyframes lineLeft {
            0% {
                bottom: -100%;
            }

            25%,
            100% {
                bottom: 100%;
            }
        }

        @keyframes minerdiaNextShine {
            0% {
                left: -90%;
                opacity: 0;
            }

            25% {
                opacity: .42;
            }

            60% {
                left: 125%;
                opacity: .42;
            }

            100% {
                left: 125%;
                opacity: 0;
            }
        }

        @media(max-width:991px) {
            .minerdia-next-title {
                font-size: 40px;
                margin-bottom: 50px;
            }

            .minerdia-next-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:576px) {
            .minerdia-next-section {
                padding: 70px 0;
            }

            .minerdia-next-title {
                font-size: 32px;
            }

            .minerdia-next-card {
                padding: 25px;
            }
        }
    </style>

    <div class="minerdia-next-container">

        <h2 class="minerdia-next-title">
            What happens <em>next</em>
        </h2>

        <div class="minerdia-next-grid">

            <div class="minerdia-next-card">
                <span class="border-line line-top"></span>
                <span class="border-line line-right"></span>
                <span class="border-line line-bottom"></span>
                <span class="border-line line-left"></span>

                <div class="minerdia-next-number">1</div>
                <h3>You tap submit</h3>
                <p>Your answers open WhatsApp pre-filled. One tap and you're in our chat — no forms to re-type.</p>
            </div>

            <div class="minerdia-next-card">
                <span class="border-line line-top"></span>
                <span class="border-line line-right"></span>
                <span class="border-line line-bottom"></span>
                <span class="border-line line-left"></span>

                <div class="minerdia-next-number">2</div>
                <h3>We review your funnel</h3>
                <p>We look at your page, content and ads, and pin down exactly why the right leads aren't coming through.</p>
            </div>

            <div class="minerdia-next-card">
                <span class="border-line line-top"></span>
                <span class="border-line line-right"></span>
                <span class="border-line line-bottom"></span>
                <span class="border-line line-left"></span>

                <div class="minerdia-next-number">3</div>
                <h3>You get your 3 fixes</h3>
                <p>On a free 15-minute call we walk you through the highest-impact changes. Use them yourself, or let us run it.</p>
            </div>

        </div>

    </div>

</section>