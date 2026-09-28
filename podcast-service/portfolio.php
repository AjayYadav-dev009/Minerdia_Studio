<section class="ms-social-video-section">
    <style>
        .ms-social-video-section,
        .ms-social-video-section * {
            box-sizing: border-box;
        }

        .ms-social-video-section {
            --purple: #5A2EA6;
            --teal: #2FA8A1;
            --dark: #17142b;
            --text: #4f4f5d;
            font-family: Arial, sans-serif;
            padding: 42px 20px 46px;
            background:
                radial-gradient(circle at 8% 10%, rgba(90, 46, 166, .08), transparent 28%),
                radial-gradient(circle at 92% 18%, rgba(47, 168, 161, .12), transparent 30%),
                linear-gradient(135deg, #ffffff 0%, #fbf8ff 48%, #effafa 100%);
            overflow: hidden;
        }

        .ms-social-wrap {
            max-width: 1180px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: .9fr 1.45fr;
            gap: 42px;
            align-items: center;
        }

        .ms-social-content small {
            display: inline-flex;
            padding: 9px 16px;
            border-radius: 50px;
            background: #fff;
            color: var(--purple);
            font-size: 13px;
            font-weight: 800;
            box-shadow: 0 10px 30px rgba(23, 20, 43, .08);
            margin-bottom: 16px;
        }

        .ms-social-content h2 {
            margin: 0 0 18px;
            font-size: 28px;
            line-height: 1.28;
            color: var(--dark);
            font-weight: 900;
            max-width: 410px;
        }

        .ms-social-content h2 span {
            background: linear-gradient(135deg, var(--purple), var(--teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ms-social-content p {
            margin: 0;
            max-width: 410px;
            font-size: 16px;
            line-height: 1.65;
            color: var(--text);
        }

        .ms-video-slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 8px 0;
        }

        .ms-video-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: msVideoSlide 34s linear infinite;
            will-change: transform;
        }

        .ms-video-track.ms-slider-paused {
            animation-play-state: paused;
        }

        .ms-video-card {
            width: 225px;
            height: 400px;
            flex: 0 0 225px;
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            background: #111;
            box-shadow: 0 16px 38px rgba(23, 20, 43, .16);
            cursor: pointer;
        }

        .ms-video-card video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 24px;
            background: #111;
            pointer-events: none;
        }

        @keyframes msVideoSlide {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @media(max-width:991px) {
            .ms-social-video-section {
                padding: 36px 18px 40px;
            }

            .ms-social-wrap {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .ms-social-content {
                text-align: center;
            }

            .ms-social-content h2,
            .ms-social-content p {
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media(max-width:767px) {
            .ms-social-video-section {
                padding: 32px 16px 36px;
            }

            .ms-social-content h2 {
                font-size: 25px;
            }

            .ms-social-content p {
                font-size: 15.5px;
            }

            .ms-video-card {
                width: 190px;
                height: 340px;
                flex-basis: 190px;
            }
        }
    </style>

    <div class="ms-social-wrap">
        <div class="ms-social-content">
            <small>Social Media Content Creation</small>

            <h2>
                Top Social Media Marketing Agency with
                <span>In-house Studio &amp; 35+ Talented Content Creators</span>
            </h2>

            <p>
                As a forward-thinking agency, we’ve curated an in-house studio setup that serves as the epicenter of our content creation prowess.
            </p>
        </div>

        <div class="ms-video-slider">
            <div class="ms-video-track" id="msVideoTrack">

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Sofia-Reel.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Mansha-Reel-3.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Podcast-1.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/M3M-3.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Alpha-Auto-1-720-1.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <!-- Duplicate Videos For Smooth Loop -->

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Sofia-Reel.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Mansha-Reel-3.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Podcast-1.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/M3M-3.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

                <div class="ms-video-card">
                    <video src="https://minerdiastudio.com/wp-content/uploads/2026/06/Alpha-Auto-1-720-1.mp4" autoplay muted loop playsinline preload="metadata"></video>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const track = document.getElementById("msVideoTrack");
            if (!track) return;

            const cards = track.querySelectorAll(".ms-video-card");

            cards.forEach(function(card) {
                card.addEventListener("click", function() {
                    track.classList.toggle("ms-slider-paused");
                });
            });

            track.querySelectorAll("video").forEach(function(video) {
                video.muted = true;
                video.playsInline = true;
                video.play().catch(function() {});
            });
        });
    </script>
</section>