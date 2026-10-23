<style>
    .ms-gallery-page,
    .ms-gallery-page * {
        box-sizing: border-box;
    }

    .ms-gallery-page {
        --purple: #5A2EA6;
        --teal: #2FA8A1;
        --dark: #17142b;
        --text: #4f4f5d;
        font-family: var(--font-body);
        background: #fff;
        color: var(--dark);
        overflow: hidden;
        width: 100%;
    }

    .ms-gallery-wrap {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .ms-gradient-text {
        background: linear-gradient(135deg, var(--purple), var(--teal));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ms-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 16px;
        border-radius: 50px;
        background: #fff;
        color: var(--purple);
        font-size: 13px;
        font-weight: 800;
        box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
        margin-bottom: 16px;
    }

    .ms-label::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--purple), var(--teal));
        animation: msGalleryDot 1.5s ease-in-out infinite;
    }

    .ms-section-head {
        text-align: center;
        max-width: 920px;
        margin: 0 auto 34px;
    }

    .ms-section-head h2 {
        margin: 0 0 14px;
        font-size: 42px;
        line-height: 1.15;
        letter-spacing: -1.1px;
        font-weight: 900;
        color: var(--dark);
    }

    .ms-section-head p {
        margin: 0 auto;
        font-size: 16px;
        line-height: 1.75;
        color: var(--text);
    }

    .ms-gallery-intro {
        padding: 50px 0 38px;
        background:
            radial-gradient(circle at 10% 10%, rgba(90, 46, 166, .08), transparent 28%),
            radial-gradient(circle at 90% 14%, rgba(47, 168, 161, .12), transparent 30%),
            #fff;
        text-align: center;
    }

    .ms-gallery-intro h2 {
        margin: 0 0 14px;
        font-size: 42px;
        line-height: 1.15;
        letter-spacing: -1.1px;
        font-weight: 900;
        color: var(--dark);
    }

    .ms-gallery-intro p {
        max-width: 860px;
        margin: 0 auto;
        font-size: 17px;
        line-height: 1.75;
        color: var(--text);
    }

    .ms-instagram-section {
        padding: 46px 0;
        background: #fff;
    }

    .ms-post-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
    }

    .ms-post-card {
        aspect-ratio: 1/1;
        border-radius: 26px;
        overflow: hidden;
        position: relative;
        background: #f5f3fb;
        box-shadow: 0 18px 42px rgba(23, 20, 43, .08);
        cursor: pointer;
        transition: .35s ease;
        display: block;
    }

    .ms-post-card:hover {
        transform: translateY(-6px);
    }

    .ms-post-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: .45s ease;
    }

    .ms-post-card:hover img {
        transform: scale(1.06);
    }

    /* New Video Slider Section */
    .ms-video-showcase-section {
        --purple: #5244A5;
        --teal: #32A0A2;
        padding: 50px 0;
        background:
            radial-gradient(circle at 12% 20%, rgba(90, 46, 166, .08), transparent 28%),
            radial-gradient(circle at 90% 20%, rgba(47, 168, 161, .12), transparent 30%),
            linear-gradient(135deg, #ffffff 0%, #fbf8ff 48%, #effafa 100%);
        overflow: hidden;
    }

    .ms-video-slider-wrap {
        width: 100%;
        overflow: hidden;
        padding: 6px 0;
    }

    .ms-video-slider-track {
        display: flex;
        gap: 18px;
        width: max-content;
        animation: msVideoSlide 55s linear infinite;
        will-change: transform;
    }

    .ms-video-showcase-section.is-paused .ms-video-slider-track {
        animation-play-state: paused;
    }

    .ms-video-card {
        flex: 0 0 215px;
        height: 380px;
        border-radius: 22px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        background: #111;
    }

    .ms-video-card:before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 2px;
        border-radius: 22px;
        background: linear-gradient(120deg, var(--purple), var(--teal), var(--purple));
        background-size: 300% 300%;
        animation: msMovingBorder 4s linear infinite;
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
        z-index: 4;
    }

    .ms-video-inner {
        width: 100%;
        height: 100%;
        border-radius: 22px;
        overflow: hidden;
        background: #111;
        position: relative;
    }

    .ms-video-card video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        pointer-events: none;
        background: #111;
    }

    .ms-video-mute-btn {
        position: absolute;
        right: 10px;
        bottom: 10px;
        width: 34px;
        height: 34px;
        min-width: 34px;
        min-height: 34px;
        max-width: 34px;
        max-height: 34px;
        padding: 0;
        margin: 0;
        border-radius: 50% !important;
        border: 1px solid rgba(255, 255, 255, .75);
        background: rgba(0, 0, 0, .68);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        line-height: 1;
        appearance: none;
        -webkit-appearance: none;
        box-shadow: 0 6px 18px rgba(0, 0, 0, .35);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        transition: .25s ease;
    }

    .ms-video-mute-btn svg {
        width: 17px;
        height: 17px;
        display: block;
        fill: none;
        stroke: #fff;
        stroke-width: 2.4;
        stroke-linecap: round;
        stroke-linejoin: round;
        pointer-events: none;
    }

    .ms-video-mute-btn:hover {
        background: linear-gradient(135deg, var(--purple), var(--teal));
        transform: scale(1.08);
    }

    .ms-thumbnail-section {
        padding: 50px 0;
        background: #fff;
    }

    .ms-thumb-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .ms-thumb-card {
        aspect-ratio: 16/9;
        border-radius: 26px;
        overflow: hidden;
        background: #f5f3fb;
        box-shadow: 0 18px 42px rgba(23, 20, 43, .08);
        transition: .35s ease;
        display: block;
    }

    .ms-thumb-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 26px 58px rgba(23, 20, 43, .13);
    }

    .ms-thumb-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .ms-process-section {
        padding: 50px 0 60px;
        background: #fff;
    }

    .ms-process-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    .ms-process-card {
        padding: 22px 20px;
        border-radius: 26px;
        background: #fff;
        border: 1px solid rgba(90, 46, 166, .10);
        box-shadow: 0 18px 45px rgba(23, 20, 43, .07);
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 16px;
        font-weight: 800;
        color: var(--dark);
        transition: .35s ease;
    }

    .ms-process-card:hover {
        transform: translateY(-5px);
    }

    .ms-process-card span {
        width: 32px;
        height: 32px;
        min-width: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--purple), var(--teal));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ms-lightbox {
        position: fixed;
        inset: 0;
        z-index: 999999;
        background: rgba(0, 0, 0, .78);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .ms-lightbox.active {
        display: flex;
    }

    .ms-lightbox img,
    .ms-lightbox video {
        max-width: 92vw;
        max-height: 88vh;
        border-radius: 22px;
        box-shadow: 0 20px 70px rgba(0, 0, 0, .35);
        background: #000;
    }

    .ms-lightbox-close {
        position: absolute;
        top: 20px;
        right: 24px;

        width: 46px !important;
        height: 46px !important;
        min-width: 46px !important;
        min-height: 46px !important;
        max-width: 46px !important;
        max-height: 46px !important;

        padding: 0 !important;
        margin: 0 !important;
        border: 0;
        border-radius: 50% !important;
        aspect-ratio: 1 / 1;

        background: linear-gradient(135deg, var(--purple), #7b3fe4);
        color: #fff;

        display: flex !important;
        align-items: center !important;
        justify-content: center !important;

        font-size: 0;
        line-height: 1;
        cursor: pointer;
        z-index: 10;

        appearance: none;
        -webkit-appearance: none;

        box-shadow: 0 10px 30px rgba(90, 46, 166, .38);
        transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
    }

    .ms-lightbox-close::before,
    .ms-lightbox-close::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        width: 18px;
        height: 2.5px;
        border-radius: 999px;
        background: #fff;
        transform-origin: center;
        pointer-events: none;
    }

    .ms-lightbox-close::before {
        transform: translate(-50%, -50%) rotate(45deg);
    }

    .ms-lightbox-close::after {
        transform: translate(-50%, -50%) rotate(-45deg);
    }

    .ms-lightbox-close:hover {
        transform: rotate(90deg) scale(1.06);
        box-shadow: 0 14px 36px rgba(90, 46, 166, .48);
    }

    .ms-lightbox-close:focus-visible {
        outline: 3px solid rgba(255, 255, 255, .9);
        outline-offset: 4px;
    }

    @media(max-width:767px) {
        .ms-lightbox-close {
            top: 14px;
            right: 14px;
            width: 42px !important;
            height: 42px !important;
            min-width: 42px !important;
            min-height: 42px !important;
            max-width: 42px !important;
            max-height: 42px !important;
        }

        .ms-lightbox-close::before,
        .ms-lightbox-close::after {
            width: 16px;
        }
    }

    @keyframes msVideoSlide {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    @keyframes msMovingBorder {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 300% 50%;
        }
    }

    @keyframes msGalleryDot {

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

        .ms-gallery-intro h2,
        .ms-section-head h2 {
            font-size: 34px;
        }

        .ms-post-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .ms-thumb-grid,
        .ms-process-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:767px) {
        .ms-gallery-wrap {
            padding: 0 16px;
        }

        .ms-gallery-intro,
        .ms-instagram-section,
        .ms-video-showcase-section,
        .ms-thumbnail-section,
        .ms-process-section {
            padding: 34px 0;
        }

        .ms-gallery-intro h2,
        .ms-section-head h2 {
            font-size: 30px;
        }

        .ms-gallery-intro p,
        .ms-section-head p {
            font-size: 15px;
        }

        .ms-post-grid,
        .ms-thumb-grid,
        .ms-process-grid {
            grid-template-columns: 1fr;
        }

        .ms-video-slider-track {
            gap: 14px;
            animation-duration: 45s;
        }

        .ms-video-card {
            flex-basis: 180px;
            height: 320px;
            border-radius: 18px;
        }

        .ms-video-card:before,
        .ms-video-inner {
            border-radius: 18px;
        }

        .ms-video-mute-btn {
            width: 30px;
            height: 30px;
            min-width: 30px;
            min-height: 30px;
            max-width: 30px;
            max-height: 30px;
            right: 9px;
            bottom: 9px;
        }

        .ms-video-mute-btn svg {
            width: 15px;
            height: 15px;
        }
    }
</style>

<section class="ms-gallery-page">
    <section class="ms-gallery-intro">
        <div class="ms-gallery-wrap">
            <span class="ms-label">Minerdia Studio Gallery</span>
            <h2>Our <span class="ms-gradient-text">Creative Gallery</span></h2>
            <p>
                Explore a collection of content created by Minerdia Studio. From high-performing social media posts and engaging reels to eye-catching YouTube thumbnails, every project reflects our commitment to creativity, strategy, and quality execution.
            </p>
        </div>
    </section>

    <section class="ms-instagram-section">
        <div class="ms-gallery-wrap">
            <div class="ms-section-head">
                <span class="ms-label">Social Media Designs</span>
                <h2>Instagram Posts That <span class="ms-gradient-text">Capture Attention</span></h2>
                <p>
                    Our social media creatives are designed to increase engagement, strengthen brand identity, and help businesses stand out in crowded feeds.
                </p>
            </div>

            <div class="ms-post-grid">
                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-1.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-1.webp" alt="Podcast Studio Creative Design">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-2.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-2.webp" alt="Event Promotion Social Media Design">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-3.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-3.webp" alt="Healthcare Product Social Media Design">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-4.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-4.webp" alt="Podcast Studio Branding Design">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-5.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-5.webp" alt="Podcast Marketing Creative Design">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-6.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-6.webp" alt="Voice Over Service Promotion">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-7.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-7.webp" alt="Eid Festival Social Media Creative">
                </a>

                <a class="ms-post-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-8.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-8.webp" alt="Professional Dubbing Service Design">
                </a>
            </div>
        </div>
    </section>

    <section class="ms-video-showcase-section" id="msVideoSlider">
        <div class="ms-gallery-wrap">
            <div class="ms-section-head">
                <span class="ms-label">Video Content</span>
                <h2>Reels That Drive <span class="ms-gradient-text">Reach & Engagement</span></h2>
                <p>
                    Short-form content is one of the most powerful ways to grow online. Our reels are created with strategic storytelling, professional editing, motion graphics, and audience-focused visuals.
                </p>
            </div>
        </div>

        <div class="ms-video-slider-wrap">
            <div class="ms-video-slider-track" id="msVideoTrack"></div>
        </div>
    </section>

    <section class="ms-thumbnail-section">
        <div class="ms-gallery-wrap">
            <div class="ms-section-head">
                <span class="ms-label">Thumbnail Design</span>
                <h2>High-Converting <span class="ms-gradient-text">Thumbnail Designs</span></h2>
                <p>
                    A great thumbnail can dramatically improve click-through rates. Our thumbnail designs are created to attract attention instantly while maintaining brand consistency.
                </p>
            </div>

            <div class="ms-thumb-grid">
                <a class="ms-thumb-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-9.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-9.webp" alt="Executive Assistant Podcast Thumbnail">
                </a>

                <a class="ms-thumb-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-10.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-10.webp" alt="Tony Kakkar Reaction Thumbnail">
                </a>

                <a class="ms-thumb-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-11.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-11.webp" alt="Podcast Debate YouTube Thumbnail">
                </a>

                <a class="ms-thumb-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-12.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-12.webp" alt="Guru Randhawa Reaction Thumbnail">
                </a>

                <a class="ms-thumb-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-13.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-13.webp" alt="Motivational Podcast Thumbnail">
                </a>

                <a class="ms-thumb-card" href="<?php echo BASE; ?>assets/image/gallery/gallery-14.webp">
                    <img src="<?php echo BASE; ?>assets/image/gallery/gallery-14.webp" alt="2026 Numerology Prediction Thumbnail">
                </a>
            </div>
        </div>
    </section>

    <section class="ms-process-section">
        <div class="ms-gallery-wrap">
            <div class="ms-section-head">
                <span class="ms-label">Behind The Scenes</span>
                <h2>Creativity Meets <span class="ms-gradient-text">Strategy</span></h2>
                <p>
                    Every design, reel, and visual asset goes through a structured creative process that combines research, planning, execution, and optimization.
                </p>
            </div>

            <div class="ms-process-grid">
                <div class="ms-process-card"><span>✓</span>Creative Strategy</div>
                <div class="ms-process-card"><span>✓</span>Professional Editing</div>
                <div class="ms-process-card"><span>✓</span>Premium Design Quality</div>
                <div class="ms-process-card"><span>✓</span>Brand Consistency</div>
                <div class="ms-process-card"><span>✓</span>Fast Delivery</div>
                <div class="ms-process-card"><span>✓</span>Audience Focused Content</div>
            </div>
        </div>
    </section>

    <div class="ms-lightbox" id="msGalleryLightbox">
        <button class="ms-lightbox-close" type="button" aria-label="Close Gallery"></button>
        <div class="ms-lightbox-content"></div>
    </div>
</section>

<script>
    (function() {
        var gallery = document.querySelector(".ms-gallery-page");
        var section = document.getElementById("msVideoSlider");
        var track = document.getElementById("msVideoTrack");
        var lightbox = document.getElementById("msGalleryLightbox");
        var content = lightbox ? lightbox.querySelector(".ms-lightbox-content") : null;
        var closeBtn = lightbox ? lightbox.querySelector(".ms-lightbox-close") : null;

        if (!gallery || !section || !track || !lightbox || !content || !closeBtn) return;

        var videos = [
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Alpha-Auto-1-720-1.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Alpha_Auto-2.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/M3M-2.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Prashant-Voice-Artist-15.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Podcast-1.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/M3M-3.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Mansha-Reel-2.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Lennore.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Sofia-Reel.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/M3M.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Mansha-Reel-3.mp4",
            "https://minerdiastudio.com/wp-content/uploads/2026/06/Lennore-2.mp4"
        ];

        var mutedIcon =
            '<svg viewBox="0 0 24 24" aria-hidden="true">' +
            '<path d="M4 9v6h4l5 4V5L8 9H4z"></path>' +
            '<path d="M18 9l4 4"></path>' +
            '<path d="M22 9l-4 4"></path>' +
            '</svg>';

        var soundIcon =
            '<svg viewBox="0 0 24 24" aria-hidden="true">' +
            '<path d="M4 9v6h4l5 4V5L8 9H4z"></path>' +
            '<path d="M16 8a5 5 0 0 1 0 8"></path>' +
            '<path d="M18.5 5.5a9 9 0 0 1 0 13"></path>' +
            '</svg>';

        videos.concat(videos).forEach(function(src) {
            var card = document.createElement("div");
            card.className = "ms-video-card";

            card.innerHTML =
                '<div class="ms-video-inner">' +
                '<video src="' + src + '" autoplay muted loop playsinline preload="metadata"></video>' +
                '<button class="ms-video-mute-btn" type="button" aria-label="Unmute Video">' + mutedIcon + '</button>' +
                '</div>';

            card.addEventListener("click", function(e) {
                if (e.target.closest(".ms-video-mute-btn")) return;
                section.classList.toggle("is-paused");
            });

            track.appendChild(card);
        });

        var allVideos = section.querySelectorAll("video");
        var allButtons = section.querySelectorAll(".ms-video-mute-btn");

        allVideos.forEach(function(video) {
            video.muted = true;
            video.playsInline = true;
            video.play().catch(function() {});
        });

        allButtons.forEach(function(btn) {
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();

                var currentVideo = btn.closest(".ms-video-card").querySelector("video");
                var willUnmute = currentVideo.muted;

                allVideos.forEach(function(video) {
                    video.muted = true;
                });

                allButtons.forEach(function(button) {
                    button.innerHTML = mutedIcon;
                    button.setAttribute("aria-label", "Unmute Video");
                });

                currentVideo.muted = willUnmute ? false : true;
                btn.innerHTML = currentVideo.muted ? mutedIcon : soundIcon;
                btn.setAttribute("aria-label", currentVideo.muted ? "Unmute Video" : "Mute Video");

                currentVideo.play().catch(function() {});
            });
        });

        gallery.querySelectorAll(".ms-post-card, .ms-thumb-card").forEach(function(card) {
            card.addEventListener("click", function(e) {
                e.preventDefault();

                var img = card.querySelector("img");
                if (!img) return;

                content.innerHTML = '<img src="' + card.href + '" alt="' + (img.alt || "Gallery Image") + '">';
                lightbox.classList.add("active");
            });
        });

        function closeLightbox() {
            lightbox.classList.remove("active");
            content.innerHTML = "";
        }

        closeBtn.addEventListener("click", closeLightbox);

        lightbox.addEventListener("click", function(e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
    })();
</script>