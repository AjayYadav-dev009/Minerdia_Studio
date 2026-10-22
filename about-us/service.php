<style>

    .ms-services-safe-section {
        --ms-purple: #5A2EA6;
        --ms-teal: #2FA8A1;
        --ms-dark: #17142b;
        --ms-text: #57576a;
        font-family: var(--font-body);
        padding: 50px 20px;
        background: linear-gradient(135deg, #ffffff 0%, #fbf8ff 50%, #effafa 100%);
        overflow: hidden;
        width: 100%;
        position: relative;
        z-index: 1;
    }

    .ms-services-safe-wrap {
        max-width: 1180px;
        margin: 0 auto;
        width: 100%;
    }

    .ms-services-safe-head {
        max-width: 900px;
        margin: 0 auto 34px;
        text-align: center;
    }

    .ms-services-safe-label {
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

    .ms-services-safe-label:before {
        content: "";
        width: 8px;
        height: 8px;
        flex: 0 0 8px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
        animation: msServicesSafeDot 1.5s ease-in-out infinite;
    }

    .ms-services-safe-head h2 {
        margin: 0 0 14px;
        font-size: 42px;
        line-height: 1.15;
        font-weight: 900;
        letter-spacing: -1px;
        color: var(--ms-dark);
    }

    .ms-services-safe-gradient {
        background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .ms-services-safe-head p {
        margin: 0;
        font-size: 16px;
        line-height: 1.75;
        color: var(--ms-text);
    }

    .ms-services-safe-slider {
        overflow: hidden;
        padding: 18px 0 20px;
        width: 100%;
    }

    .ms-services-safe-track {
        display: flex;
        gap: 20px;
        width: max-content;
        animation: msServicesSafeSlide 32s linear infinite;
        will-change: transform;
    }

    .ms-services-safe-track.is-paused {
        animation-play-state: paused !important;
    }

    .ms-services-safe-card {
        position: relative;
        width: 285px;
        min-height: 250px;
        flex: 0 0 285px;
        padding: 24px;
        border-radius: 30px;
        cursor: pointer;
        user-select: none;
        overflow: hidden;
        background:
            linear-gradient(135deg, rgba(255, 255, 255, .74), rgba(255, 255, 255, .38)),
            radial-gradient(circle at 12% 10%, rgba(90, 46, 166, .10), transparent 34%),
            radial-gradient(circle at 90% 90%, rgba(47, 168, 161, .12), transparent 36%);
        border: 1px solid rgba(255, 255, 255, .88);
        backdrop-filter: blur(26px) saturate(180%);
        -webkit-backdrop-filter: blur(26px) saturate(180%);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .98),
            inset 0 -1px 0 rgba(255, 255, 255, .35),
            0 22px 60px rgba(23, 20, 43, .10);
        transition: .35s ease;
    }

    .ms-services-safe-card:hover {
        transform: translateY(-6px);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .98),
            inset 0 -1px 0 rgba(255, 255, 255, .35),
            0 30px 78px rgba(23, 20, 43, .14);
    }

    .ms-services-safe-card:before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 30px;
        padding: 1.6px;
        background: linear-gradient(120deg,
                transparent 0%,
                rgba(90, 46, 166, .14) 18%,
                var(--ms-purple) 38%,
                var(--ms-teal) 55%,
                rgba(47, 168, 161, .14) 78%,
                transparent 100%);
        background-size: 300% 300%;
        animation: msServicesSafeBorderMove 4s linear infinite;
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
        z-index: 3;
    }

    .ms-services-safe-card:after {
        content: "";
        position: absolute;
        top: -95%;
        left: -80%;
        width: 48%;
        height: 270%;
        background: linear-gradient(120deg,
                transparent,
                rgba(255, 255, 255, .95),
                rgba(255, 255, 255, .50),
                transparent);
        transform: rotate(24deg);
        animation: msServicesSafeShine 4.8s ease-in-out infinite;
        pointer-events: none;
        z-index: 1;
    }

    .ms-services-safe-icon {
        position: relative;
        z-index: 2;
        width: 58px;
        height: 58px;
        border-radius: 18px;
        background: linear-gradient(135deg, var(--ms-purple), var(--ms-teal));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 16px;
        box-shadow: 0 14px 32px rgba(90, 46, 166, .22);
    }

    .ms-services-safe-card h3 {
        position: relative;
        z-index: 2;
        margin: 0 0 10px;
        font-size: 20px;
        font-weight: 900;
        color: var(--ms-dark);
    }

    .ms-services-safe-card p {
        position: relative;
        z-index: 2;
        margin: 0;
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--ms-text);
    }

    @keyframes msServicesSafeDot {

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

    @keyframes msServicesSafeSlide {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    @keyframes msServicesSafeBorderMove {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 300% 50%;
        }
    }

    @keyframes msServicesSafeShine {
        0% {
            left: -80%;
            opacity: 0;
        }

        35% {
            opacity: .85;
        }

        65% {
            left: 135%;
            opacity: 0;
        }

        100% {
            left: 135%;
            opacity: 0;
        }
    }

    @media(max-width:991px) {
        .ms-services-safe-head h2 {
            font-size: 34px;
        }
    }

    @media(max-width:767px) {
        .ms-services-safe-section {
            padding: 38px 16px;
        }

        .ms-services-safe-head h2 {
            font-size: 29px;
        }

        .ms-services-safe-head p {
            font-size: 15px;
        }

        .ms-services-safe-card {
            width: 250px;
            flex-basis: 250px;
            min-height: 245px;
        }
    }
</style>

<section class="ms-services-safe-section">
    <div class="ms-services-safe-wrap">
        <div class="ms-services-safe-head">
            <span class="ms-services-safe-label">What We Do</span>
            <h2>Creative Services For <span class="ms-services-safe-gradient">Modern Brands</span></h2>
            <p>From idea to final delivery, Minerdia Studio creates content and campaigns that help brands look premium, communicate better and grow faster.</p>
        </div>

        <div class="ms-services-safe-slider">
            <div class="ms-services-safe-track">

                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">🎙️</div>
                    <h3>Podcast Production</h3>
                    <p>Professional podcast setup, recording, editing and final delivery for creators and brands.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">🎬</div>
                    <h3>Video Editing</h3>
                    <p>Clean, engaging and platform-ready video edits for reels, YouTube and brand campaigns.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">🎨</div>
                    <h3>Graphic Design</h3>
                    <p>Social media creatives, thumbnails, banners and brand visuals that capture attention.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">📢</div>
                    <h3>Paid Ads</h3>
                    <p>Performance marketing campaigns focused on leads, sales, traffic and measurable growth.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">💻</div>
                    <h3>Website Design</h3>
                    <p>Professional websites designed for trust, speed, conversion and brand presentation.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">📱</div>
                    <h3>Social Media</h3>
                    <p>Content planning, posting creatives and social media growth support for businesses.</p>
                </div>

                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">🎙️</div>
                    <h3>Podcast Production</h3>
                    <p>Professional podcast setup, recording, editing and final delivery for creators and brands.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">🎬</div>
                    <h3>Video Editing</h3>
                    <p>Clean, engaging and platform-ready video edits for reels, YouTube and brand campaigns.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">🎨</div>
                    <h3>Graphic Design</h3>
                    <p>Social media creatives, thumbnails, banners and brand visuals that capture attention.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">📢</div>
                    <h3>Paid Ads</h3>
                    <p>Performance marketing campaigns focused on leads, sales, traffic and measurable growth.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">💻</div>
                    <h3>Website Design</h3>
                    <p>Professional websites designed for trust, speed, conversion and brand presentation.</p>
                </div>
                <div class="ms-services-safe-card">
                    <div class="ms-services-safe-icon">📱</div>
                    <h3>Social Media</h3>
                    <p>Content planning, posting creatives and social media growth support for businesses.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        var sections = document.querySelectorAll('.ms-services-safe-section');

        sections.forEach(function(section) {
            var track = section.querySelector('.ms-services-safe-track');
            var cards = section.querySelectorAll('.ms-services-safe-card');

            if (!track || !cards.length) return;

            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    track.classList.toggle('is-paused');
                });
            });
        });
    })();
</script>