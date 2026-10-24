<style>

    .ms-studio-section {
        --purple: #5A2EA6;
        --teal: #2FA8A1;
        --dark: #17142b;
        --text: #4f4f5d;
        width: 100%;
        padding: 58px 20px;
        overflow: hidden;
        font-family: var(--font-body);
        color: var(--dark);
        background:
            radial-gradient(circle at 10% 15%,
                rgba(90, 46, 166, .10),
                transparent 28%),
            radial-gradient(circle at 90% 20%,
                rgba(47, 168, 161, .16),
                transparent 30%),
            linear-gradient(135deg,
                #fbf8ff 0%,
                #ffffff 48%,
                #effafa 100%);
    }

    .ms-studio-wrap {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: .95fr 1fr;
        gap: 44px;
        align-items: center;
    }

    .ms-studio-image-card {
        position: relative;
        padding: 28px;
        overflow: hidden;
        border-radius: 34px;
        border: 1px solid rgba(255, 255, 255, .95);
        background: rgba(255, 255, 255, .68);
        backdrop-filter: blur(24px) saturate(150%);
        -webkit-backdrop-filter: blur(24px) saturate(150%);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .95),
            0 28px 70px rgba(23, 20, 43, .10);
        animation: msStudioFloat 5s ease-in-out infinite;
    }

    .ms-studio-image-card::before {
        content: "";
        position: absolute;
        top: -36px;
        right: -38px;
        width: 150px;
        height: 150px;
        border-radius: 34px;
        background: linear-gradient(135deg,
                rgba(90, 46, 166, .20),
                rgba(47, 168, 161, .18));
        animation: msStudioBlob 6s ease-in-out infinite;
    }

    .ms-studio-image-box {
        position: relative;
        z-index: 2;
        width: 100%;
        aspect-ratio: 1536 / 1024;
        overflow: hidden;
        border-radius: 26px;
        box-shadow: 0 24px 55px rgba(23, 20, 43, .18);
    }

    .ms-studio-image-box img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        object-position: center;
        border-radius: 26px;
        animation: msStudioZoom 8s ease-in-out infinite;
    }

    .ms-studio-content {
        width: 100%;
    }

    .ms-studio-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 22px;
        padding: 10px 17px;
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, .95);
        background: rgba(255, 255, 255, .86);
        color: var(--purple);
        font-size: 14px;
        font-weight: 800;
        box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
    }

    .ms-studio-badge::before {
        content: "";
        width: 9px;
        height: 9px;
        flex: 0 0 9px;
        border-radius: 50%;
        background: linear-gradient(135deg,
                var(--purple),
                var(--teal));
        animation: msStudioBlink 1.5s ease-in-out infinite;
    }

    .ms-studio-title {
        margin: 0 0 22px;
        color: var(--dark);
        font-size: 46px;
        line-height: 1.14;
        letter-spacing: -1.4px;
        font-weight: 900;
    }

    .ms-studio-title span {
        background: linear-gradient(135deg,
                var(--purple),
                var(--teal));
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    }

    .ms-studio-text {
        margin: 0 0 18px;
        color: var(--text);
        font-size: 17px;
        line-height: 1.85;
        text-align: justify;
    }

    .ms-studio-text:last-child {
        margin-bottom: 0;
    }

    @keyframes msStudioFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes msStudioZoom {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.035);
        }
    }

    @keyframes msStudioBlob {

        0%,
        100% {
            transform: translate(0, 0) rotate(0);
        }

        50% {
            transform: translate(-12px, 12px) rotate(8deg);
        }
    }

    @keyframes msStudioBlink {

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

    @media(max-width:991px) {
        .ms-studio-section {
            padding: 44px 18px;
        }

        .ms-studio-wrap {
            grid-template-columns: .95fr 1fr;
            gap: 28px;
        }

        .ms-studio-title {
            margin-bottom: 16px;
            font-size: 34px;
            line-height: 1.15;
        }

        .ms-studio-text {
            margin-bottom: 10px;
            font-size: 15px;
            line-height: 1.65;
        }

        .ms-studio-image-card {
            padding: 18px;
            border-radius: 28px;
        }

        .ms-studio-image-box,
        .ms-studio-image-box img {
            border-radius: 22px;
        }
    }

    @media(max-width:767px) {
        .ms-studio-section {
            padding: 38px 18px;
        }

        .ms-studio-wrap {
            grid-template-columns: 1fr;
            gap: 28px;
            text-align: center;
        }

        .ms-studio-content {
            order: 1;
        }

        .ms-studio-image-card {
            order: 2;
            padding: 18px;
        }

        .ms-studio-title {
            font-size: 30px;
            line-height: 1.18;
            letter-spacing: -.7px;
        }

        .ms-studio-text {
            font-size: 15.5px;
            line-height: 1.68;
            text-align: center;
        }
    }

    @media(prefers-reduced-motion:reduce) {

        .ms-studio-image-card,
        .ms-studio-image-card::before,
        .ms-studio-image-box img,
        .ms-studio-badge::before {
            animation: none;
        }
    }
</style>

<section class="ms-studio-section">
    <div class="ms-studio-wrap">

        <div class="ms-studio-image-card">
            <div class="ms-studio-image-box">
                <img
                    src="<?php echo BASE; ?>assets/image/services/pd-2.webp"
                    alt="Professional Podcast Studio in Delhi"
                    loading="lazy">
            </div>
        </div>

        <div class="ms-studio-content">

            <span class="ms-studio-badge">
                Professional Studio
            </span>

            <h2 class="ms-studio-title">
                Professional
                <span>Podcast Studio in Delhi</span>
            </h2>

            <p class="ms-studio-text">
                Looking for a professional Podcast Studio in Delhi for modern
                creators? You've come to the right place.
            </p>

            <p class="ms-studio-text">
                Producing a good podcast isn't that easy; it's about much more
                than just recording a conversation. How you present, light,
                edit, shoot and have the audience respond to your content is
                important.
            </p>

            <p class="ms-studio-text">
                We have equipped Minerdia Studio with professional podcast
                studio equipment in Delhi and created an ambience that is
                conducive to interesting conversations.
            </p>

        </div>

    </div>
</section>