<style>

    .ms-counter-section {
        --ms-purple: #5A2EA6;
        --ms-teal: #2FA8A1;
        --ms-dark: #17142b;
        --ms-text: #4f4f5d;
        font-family: Arial, sans-serif;
        padding: 28px 20px 44px;
        background: #fff;
        overflow: hidden;
        width: 100%;
        position: relative;
        z-index: 1;
    }

    .ms-counter-wrap {
        max-width: 1140px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
        width: 100%;
    }

    .ms-counter-card {
        position: relative;
        overflow: hidden;
        text-align: center;
        padding: 30px 18px 24px;
        border-radius: 24px;
        background:
            linear-gradient(135deg, rgba(255, 255, 255, .76), rgba(255, 255, 255, .42)),
            radial-gradient(circle at 15% 10%, rgba(90, 46, 166, .08), transparent 34%),
            radial-gradient(circle at 85% 90%, rgba(47, 168, 161, .10), transparent 36%);
        border: 1px solid rgba(255, 255, 255, .88);
        backdrop-filter: blur(22px) saturate(160%);
        -webkit-backdrop-filter: blur(22px) saturate(160%);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .98),
            0 18px 45px rgba(23, 20, 43, .08);
        transition: .35s ease;
    }

    .ms-counter-card:hover {
        transform: translateY(-6px);
        box-shadow:
            inset 0 1px 1px rgba(255, 255, 255, .98),
            0 26px 60px rgba(23, 20, 43, .12);
    }

    .ms-counter-card:before {
        content: "";
        position: absolute;
        top: -85%;
        left: -75%;
        width: 45%;
        height: 250%;
        background: linear-gradient(120deg,
                transparent,
                rgba(255, 255, 255, .95),
                rgba(255, 255, 255, .45),
                transparent);
        transform: rotate(25deg);
        animation: msCounterShine 4.8s ease-in-out infinite;
        pointer-events: none;
        z-index: 1;
    }

    .ms-counter-card:after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 24px;
        padding: 1px;
        background: linear-gradient(120deg,
                transparent,
                rgba(90, 46, 166, .30),
                var(--ms-purple),
                var(--ms-teal),
                rgba(47, 168, 161, .30),
                transparent);
        background-size: 300% 300%;
        animation: msCounterBorderMove 4.5s linear infinite;
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
        z-index: 2;
    }

    .ms-counter-number {
        position: relative;
        z-index: 3;
        margin: 0 0 10px;
        font-size: 36px;
        line-height: 1;
        font-weight: 900;
        color: var(--ms-purple);
        letter-spacing: -1px;
    }

    .ms-counter-title {
        position: relative;
        z-index: 3;
        margin: 0;
        font-size: 14px;
        font-weight: 800;
        color: var(--ms-text);
    }

    @keyframes msCounterShine {
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

    @keyframes msCounterBorderMove {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 300% 50%;
        }
    }

    @media(max-width:991px) {
        .ms-counter-wrap {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:575px) {
        .ms-counter-section {
            padding: 24px 16px 34px;
        }

        .ms-counter-wrap {
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .ms-counter-card {
            padding: 26px 16px 22px;
            border-radius: 22px;
        }

        .ms-counter-card:after {
            border-radius: 22px;
        }

        .ms-counter-number {
            font-size: 34px;
        }
    }
</style>

<section class="ms-counter-section">
    <div class="ms-counter-wrap">
        <div class="ms-counter-card">
            <h3 class="ms-counter-number" data-count="1000" data-suffix="+">0+</h3>
            <p class="ms-counter-title">Projects Completed</p>
        </div>

        <div class="ms-counter-card">
            <h3 class="ms-counter-number" data-count="350" data-suffix="+">0+</h3>
            <p class="ms-counter-title">Creative Professionals</p>
        </div>

        <div class="ms-counter-card">
            <h3 class="ms-counter-number" data-count="8" data-suffix="+">0+</h3>
            <p class="ms-counter-title">Years Experience</p>
        </div>

        <div class="ms-counter-card">
            <h3 class="ms-counter-number" data-count="98" data-suffix="%">0%</h3>
            <p class="ms-counter-title">Client Satisfaction</p>
        </div>
    </div>
</section>

<script>
    (function() {
        const sections = document.querySelectorAll('.ms-counter-section');

        sections.forEach(function(section) {
            const counters = section.querySelectorAll('.ms-counter-number');
            let started = false;

            function runCounter() {
                if (started) return;
                started = true;

                counters.forEach(function(counter) {
                    const target = parseInt(counter.getAttribute('data-count'), 10);
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const duration = 1600;
                    const startTime = performance.now();

                    function update(now) {
                        const progress = Math.min((now - startTime) / duration, 1);
                        const ease = 1 - Math.pow(1 - progress, 3);
                        const value = Math.floor(ease * target);

                        counter.textContent = value + suffix;

                        if (progress < 1) {
                            requestAnimationFrame(update);
                        } else {
                            counter.textContent = target + suffix;
                        }
                    }

                    requestAnimationFrame(update);
                });
            }

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            runCounter();
                            observer.disconnect();
                        }
                    });
                }, {
                    threshold: 0.25
                });

                observer.observe(section);
            } else {
                runCounter();
            }
        });
    })();
</script>