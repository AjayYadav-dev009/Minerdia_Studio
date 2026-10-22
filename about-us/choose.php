<style>

    .ms-values-section {
        --ms-purple: #5A2EA6;
        --ms-teal: #2FA8A1;
        --ms-dark: #17142b;
        --ms-text: #57576a;
        font-family: var(--font-body);
        padding: 54px 20px;
        background: linear-gradient(135deg, #ffffff 0%, #fbf8ff 50%, #effafa 100%);
        overflow: hidden;
        width: 100%;
        position: relative;
        z-index: 1;
    }

    .ms-values-wrap {
        max-width: 1140px;
        margin: 0 auto;
        width: 100%;
    }

    .ms-values-head {
        max-width: 900px;
        margin: 0 auto 36px;
        text-align: center;
    }

    .ms-values-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 16px;
        border-radius: 50px;
        background: rgba(255, 255, 255, .86);
        color: var(--ms-purple);
        font-size: 13px;
        font-weight: 800;
        box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
        margin-bottom: 16px;
        line-height: 1;
    }

    .ms-values-label:before {
        content: "";
        width: 8px;
        height: 8px;
        flex: 0 0 8px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
        animation: msValuesDot 1.5s ease-in-out infinite;
    }

    .ms-values-head h2 {
        margin: 0 0 14px;
        font-size: 42px;
        line-height: 1.15;
        font-weight: 900;
        letter-spacing: -1px;
        color: var(--ms-dark);
    }

    .ms-values-gradient-text {
        background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .ms-values-head p {
        margin: 0;
        font-size: 16px;
        line-height: 1.75;
        color: var(--ms-text);
    }

    .ms-values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .ms-values-card {
        position: relative;
        overflow: hidden;
        padding: 30px 28px;
        min-height: 170px;
        border-radius: 28px;
        background:
            linear-gradient(135deg, rgba(255, 255, 255, .76), rgba(255, 255, 255, .42)),
            radial-gradient(circle at 15% 10%, rgba(90, 46, 166, .08), transparent 35%),
            radial-gradient(circle at 85% 90%, rgba(47, 168, 161, .10), transparent 38%);
        border: 1px solid rgba(255, 255, 255, .88);
        backdrop-filter: blur(24px) saturate(180%);
        -webkit-backdrop-filter: blur(24px) saturate(180%);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .98),
            0 24px 60px rgba(23, 20, 43, .08);
        transition: .35s ease;
    }

    .ms-values-card:hover {
        transform: translateY(-8px);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .98),
            0 34px 80px rgba(23, 20, 43, .12);
    }

    .ms-values-card:before {
        content: "";
        position: absolute;
        top: -90%;
        left: -75%;
        width: 45%;
        height: 250%;
        background: linear-gradient(120deg,
                transparent,
                rgba(255, 255, 255, .95),
                rgba(255, 255, 255, .45),
                transparent);
        transform: rotate(25deg);
        animation: msValuesShine 5s ease-in-out infinite;
        pointer-events: none;
        z-index: 1;
    }

    .ms-values-card:after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 28px;
        padding: 1px;
        background: linear-gradient(120deg,
                transparent,
                rgba(90, 46, 166, .30),
                var(--ms-purple),
                var(--ms-teal),
                rgba(47, 168, 161, .30),
                transparent);
        background-size: 300% 300%;
        animation: msValuesBorderMove 4.5s linear infinite;
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
        z-index: 2;
    }

    .ms-values-card h3 {
        position: relative;
        z-index: 3;
        margin: 0 0 12px;
        font-size: 23px;
        line-height: 1.25;
        font-weight: 900;
        color: var(--ms-dark);
    }

    .ms-values-card p {
        position: relative;
        z-index: 3;
        margin: 0;
        font-size: 15px;
        line-height: 1.75;
        color: var(--ms-text);
    }

    @keyframes msValuesDot {

        0%,
        100% {
            opacity: .45;
            transform: scale(.85);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }
    }

    @keyframes msValuesShine {
        0% {
            left: -75%;
            opacity: 0;
        }

        35% {
            opacity: .8;
        }

        65% {
            left: 130%;
            opacity: 0;
        }

        100% {
            left: 130%;
            opacity: 0;
        }
    }

    @keyframes msValuesBorderMove {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 300% 50%;
        }
    }

    @media(max-width:991px) {
        .ms-values-head h2 {
            font-size: 34px;
        }

        .ms-values-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width:767px) {
        .ms-values-section {
            padding: 38px 16px;
        }

        .ms-values-head h2 {
            font-size: 29px;
        }

        .ms-values-head p {
            font-size: 15px;
        }

        .ms-values-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .ms-values-card {
            padding: 26px 22px;
            border-radius: 24px;
        }

        .ms-values-card:after {
            border-radius: 24px;
        }

        .ms-values-card h3 {
            font-size: 21px;
        }
    }
</style>

<section class="ms-values-section">
    <div class="ms-values-wrap">
        <div class="ms-values-head">
            <span class="ms-values-label">Why Choose Us</span>
            <h2>Built On Quality, Creativity & <span class="ms-values-gradient-text">Consistency</span></h2>
            <p>We keep our work clean, strategic and practical so every brand gets content that feels premium and purposeful.</p>
        </div>

        <div class="ms-values-grid">
            <div class="ms-values-card">
                <h3>Creative Thinking</h3>
                <p>We focus on ideas that make your brand look different, memorable and more professional.</p>
            </div>

            <div class="ms-values-card">
                <h3>Premium Execution</h3>
                <p>From design to video editing, every output is created with detail, clarity and quality.</p>
            </div>

            <div class="ms-values-card">
                <h3>Growth Focused</h3>
                <p>Our goal is not only to make content look good, but also to help it support business growth.</p>
            </div>
        </div>
    </div>
</section>