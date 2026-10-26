/* Minerdia Studio - smooth scrolling (Lenis).
   Tune the feel with the 3 numbers below. */
(function () {
    'use strict';

    if (typeof Lenis === 'undefined') { return; }
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) { return; }

    var lenis = new Lenis({
        lerp: 0.075,          // smoothness: lower = smoother / slower glide (0.05 - 0.12)
        wheelMultiplier: 0.75, // scroll distance per wheel notch: lower = slower (0.5 - 1)
        smoothWheel: true,
        anchors: true         // #links glide too
    });
    window.minerdiaLenis = lenis;

    function raf(t) { lenis.raf(t); requestAnimationFrame(raf); }
    requestAnimationFrame(raf);

    /* Scrollable boxes inside the page keep their own normal scrolling. */
    ['.ms-popup-overlay', '.ms-popup-box', '.minerdia-nav', '.ms-lightbox', '[class*="lightbox"]']
        .forEach(function (sel) {
            document.querySelectorAll(sel).forEach(function (el) {
                el.setAttribute('data-lenis-prevent', '');
            });
        });

    /* Pause smooth scroll while the page itself is locked
       (preloader, popup form, gallery lightbox, mobile menu). */
    function locked() {
        var h = document.documentElement, b = document.body;
        return getComputedStyle(h).overflow === 'hidden' ||
               getComputedStyle(b).overflow === 'hidden' ||
               h.classList.contains('ms-pl-lock');
    }
    function sync() { locked() ? lenis.stop() : lenis.start(); }
    var mo = new MutationObserver(sync);
    mo.observe(document.documentElement, { attributes: true, attributeFilter: ['class', 'style'] });
    mo.observe(document.body, { attributes: true, attributeFilter: ['class', 'style'] });
    sync();
})();
