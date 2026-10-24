<?php
/*
 * Put your YouTube video IDs here (the part after "v=" in the video URL).
 * Example: https://www.youtube.com/watch?v=AbCdEfGhIjK  ->  'AbCdEfGhIjK'
 * The live site's IDs are loaded by a JS widget, so I could not read them - replace the placeholders below.
 */
$episodes = [
    'XdlG5dijVrg',
    't2mhmLMTi5A',
    'MPJ35tv1SdQ',
    '9cO3OA9wHx8',
    'XxVDJmR2r70',
    '65E_FMC1f5o',
];
?>
<section class="ms-episodes">

    <style>
        .ms-episodes {
            --purple: #5A2EA6;
            --gap: 30px;
            width: 100%;
            padding: 30px 20px 50px;
            background: #fff;
            font-family: var(--font-body);
            text-align: center;
        }

        .ms-episodes-title {
            margin: 0 0 30px;
            font-size: 54px;
            line-height: 1.2;
            font-weight: 600;
            color: #000;
        }

        .ms-episodes-title span {
            color: var(--purple);
        }

        .ms-episodes-text {
            max-width: 1120px;
            margin: 0 auto 50px;
            font-size: 16px;
            line-height: 1.62;
            font-weight: 400;
            color: #222;
        }

        .ms-episodes-text strong {
            font-weight: 700;
            color: #000;
        }

        /* ---------- Slider ---------- */
        .ms-ep-slider {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .ms-ep-viewport {
            flex: 1 1 auto;
            min-width: 0;
            overflow: hidden;
            padding: 8px 4px 14px;
        }

        .ms-ep-viewport::-webkit-scrollbar {
            display: none;
        }

        .ms-ep-track {
            display: flex;
            gap: var(--gap);
            will-change: transform;
        }

        .ms-ep-card {
            flex: 0 0 calc((100% - (var(--gap) * 2)) / 3);
            scroll-snap-align: start;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            overflow: hidden;
            background: #000;
            box-shadow: 0 4px 14px rgba(0, 0, 0, .28);
        }

        .ms-ep-card {
            position: relative;
        }

        .ms-ep-card iframe {
            width: 100%;
            height: 100%;
            border: 0;
            display: block;
        }

        /* Sits on top of the video: hover still works, clicks go nowhere */
        .ms-ep-shield {
            position: absolute;
            inset: 0;
            z-index: 2;
            background: transparent;
            cursor: default;
        }

        .ms-ep-arrow {
            flex: 0 0 32px;
            width: 32px;
            height: 32px;
            padding: 0;
            border-radius: 50%;
            border: 2px solid var(--purple);
            background: #fff;
            color: var(--purple);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .3s ease;
        }

        .ms-ep-arrow svg {
            width: 16px;
            height: 16px;
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .ms-ep-arrow:hover {
            background: var(--purple);
            color: #fff;
            transform: scale(1.08);
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 1024px) {
            .ms-episodes-title {
                font-size: 42px;
            }

            .ms-ep-card {
                flex: 0 0 calc((100% - var(--gap)) / 2);
            }
        }

        @media (max-width: 767px) {
            .ms-episodes {
                --gap: 16px;
                padding: 25px 12px 40px;
            }

            .ms-episodes-title {
                font-size: 30px;
                margin-bottom: 18px;
            }

            .ms-episodes-text {
                font-size: 14.5px;
                margin-bottom: 30px;
            }

            .ms-ep-slider {
                gap: 8px;
            }

            .ms-ep-arrow {
                flex-basis: 28px;
                width: 28px;
                height: 28px;
            }

            .ms-ep-card {
                flex: 0 0 100%;
            }
        }
    </style>

    <h2 class="ms-episodes-title">Watch Our Podcast <span>Episodes</span></h2>

    <p class="ms-episodes-text">
        Explore real conversations, expert insights, inspiring success stories, and thought-provoking discussions through the <strong>Minerdia Studio Podcast Series</strong>. From business growth and entrepreneurship to wellness, personal development, industry trends, and life experiences, our podcasts bring valuable perspectives from professionals, creators, and industry leaders. Watch engaging episodes produced in our professional <strong>podcast studio in Delhi</strong> and discover conversations that inform, inspire, and create meaningful impact.
    </p>

    <div class="ms-ep-slider">
        <button type="button" class="ms-ep-arrow" id="msEpPrev" aria-label="Previous episodes">
            <svg viewBox="0 0 24 24"><path d="M15 5l-7 7 7 7"/></svg>
        </button>

        <div class="ms-ep-viewport" id="msEpViewport">
            <div class="ms-ep-track">
                <?php /* first 3 videos are repeated at the end so the slide can loop seamlessly */ ?>
                <?php foreach (array_merge($episodes, array_slice($episodes, 0, 3)) as $i => $id) : ?>
                    <div class="ms-ep-card">
                        <iframe
                            src="https://www.youtube.com/embed/<?php echo htmlspecialchars($id); ?>?enablejsapi=1&amp;controls=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1&amp;mute=1&amp;fs=0&amp;disablekb=1&amp;iv_load_policy=3&amp;origin=<?php echo urlencode((!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost')); ?>"
                            title="Podcast episode <?php echo $i + 1; ?>"
                            loading="lazy"
                            tabindex="-1"
                            allow="autoplay; encrypted-media; picture-in-picture"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        <!-- Transparent shield: catches hover/click so nothing inside the YouTube player can open or redirect -->
                        <div class="ms-ep-shield" aria-hidden="true"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <button type="button" class="ms-ep-arrow" id="msEpNext" aria-label="Next episodes">
            <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
        </button>
    </div>

    <script>
        (function() {
            var slider = document.querySelector('.ms-ep-slider');
            var vp = document.getElementById('msEpViewport');
            var prev = document.getElementById('msEpPrev');
            var next = document.getElementById('msEpNext');
            if (!slider || !vp || !prev || !next) return;

            var track = vp.querySelector('.ms-ep-track');
            var cards = track.querySelectorAll('.ms-ep-card');
            var total = <?php echo count($episodes); ?>; // real videos (the rest are loop copies)
            if (total < 1) return;

            var DELAY = 3500; // ms between automatic slides
            var SPEED = 600; // ms slide animation
            var index = 0;
            var busy = false;
            var hovering = false;
            var timer = null;

            function stepSize() {
                var gap = parseFloat(getComputedStyle(track).columnGap) || 0;
                return cards[0].offsetWidth + gap;
            }

            function setPos(i, animate) {
                track.style.transition = animate ? 'transform ' + SPEED + 'ms ease' : 'none';
                track.style.transform = 'translateX(' + (-i * stepSize()) + 'px)';
            }

            function unlock() {
                busy = false;
            }

            function goNext() {
                if (busy) return;
                busy = true;
                index++;
                setPos(index, true);
                setTimeout(function() {
                    // reached the copies at the end -> jump back to the real start without animation
                    if (index >= total) {
                        index = 0;
                        setPos(0, false);
                    }
                    unlock();
                }, SPEED + 40);
            }

            function goPrev() {
                if (busy) return;
                busy = true;
                if (index === 0) {
                    index = total;
                    setPos(index, false);
                    void track.offsetWidth; // force reflow so the next move animates
                }
                index--;
                setPos(index, true);
                setTimeout(unlock, SPEED + 40);
            }

            function restart() {
                clearInterval(timer);
                timer = setInterval(function() {
                    var videoPlaying = slider.querySelector('.ms-ep-card.is-playing');
                    if (hovering || videoPlaying || document.hidden) return;
                    goNext();
                }, DELAY);
            }

            next.addEventListener('click', function() {
                goNext();
                restart();
            });

            prev.addEventListener('click', function() {
                goPrev();
                restart();
            });

            // Stop sliding while the mouse is over the slider (so a hovered video keeps playing)
            slider.addEventListener('mouseenter', function() {
                hovering = true;
            });

            slider.addEventListener('mouseleave', function() {
                hovering = false;
            });

            window.addEventListener('resize', function() {
                setPos(index, false);
            });

            setPos(0, false);
            restart();
        })();
    </script>

    <script>
        /* Hover = play (muted), leave = pause. Click does nothing and never opens/redirects to YouTube. */
        (function() {
            var cards = document.querySelectorAll('.ms-ep-card');
            var isTouch = window.matchMedia('(hover: none)').matches;

            function send(frame, payload) {
                if (frame && frame.contentWindow) {
                    frame.contentWindow.postMessage(JSON.stringify(payload), '*');
                }
            }

            function listen(frame) {
                send(frame, { event: 'listening', id: 1, channel: 'widget' });
            }

            function command(frame, func) {
                send(frame, { event: 'command', func: func, args: [] });
            }

            function play(frame) {
                listen(frame);
                command(frame, 'mute');
                command(frame, 'playVideo');
            }

            function pause(frame) {
                command(frame, 'pauseVideo');
            }

            cards.forEach(function(card) {
                var frame = card.querySelector('iframe');
                var shield = card.querySelector('.ms-ep-shield');
                var playing = false;
                if (!frame || !shield) return;

                frame.addEventListener('load', function() {
                    listen(frame);
                });

                shield.addEventListener('mouseenter', function() {
                    if (isTouch) return;
                    play(frame);
                });

                shield.addEventListener('mouseleave', function() {
                    if (isTouch) return;
                    pause(frame);
                });

                // Click never reaches YouTube. On touch screens (no hover) a tap toggles play/pause instead.
                shield.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if (!isTouch) return;
                    playing = !playing;
                    card.classList.toggle('is-playing', playing);
                    if (playing) {
                        play(frame);
                    } else {
                        pause(frame);
                    }
                });

                shield.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                });
            });
        })();
    </script>
</section>