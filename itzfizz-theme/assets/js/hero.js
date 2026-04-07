(function () {
  'use strict';

  gsap.registerPlugin(ScrollTrigger);


  const cur  = document.getElementById('cur');
  const ring = document.getElementById('cur-ring');

  if (cur && ring) {
    let mx = 0, my = 0, rx = 0, ry = 0;

    window.addEventListener('mousemove', function (e) {
      mx = e.clientX; my = e.clientY;
      gsap.set(cur, { x: mx, y: my });
    });

    (function ringLoop() {
      rx += (mx - rx) * 0.12;
      ry += (my - ry) * 0.12;
      gsap.set(ring, { x: rx, y: ry });
      requestAnimationFrame(ringLoop);
    })();

    document.querySelectorAll('a, .sc').forEach(function (el) {
      el.addEventListener('mouseenter', function () {
        gsap.to(cur,  { width: 20, height: 20, duration: 0.2 });
        gsap.to(ring, { width: 56, height: 56, borderColor: 'rgba(200,245,96,.8)', duration: 0.2 });
      });
      el.addEventListener('mouseleave', function () {
        gsap.to(cur,  { width: 8,  height: 8,  duration: 0.2 });
        gsap.to(ring, { width: 32, height: 32, borderColor: 'rgba(200,245,96,.4)', duration: 0.2 });
      });
    });
  }

 
  gsap.timeline({ defaults: { ease: 'power3.out' } })
    .to('#nav',    { opacity: 1, duration: 0.9 }, 0.3)
    .to('.ctag',   { opacity: 1, duration: 0.6, stagger: 0.1 }, 0.6)
    .to('#ticker', { opacity: 1, duration: 0.6 }, 0.8)
    .to('#scue',   { opacity: 1, duration: 0.6 }, 1.2);


  const prog     = document.getElementById('prog');
  const car      = document.getElementById('car');
  const carGlow  = document.getElementById('car-glow');
  const beams    = document.getElementById('beams');
  const headline = document.getElementById('headline');
  const stats    = document.getElementById('stats');
  const scue     = document.getElementById('scue');
  const sc       = document.getElementById('sc');
  const ctagBr   = document.getElementById('ctag-br');

  if (!car || !sc) return;

  function lerp(a, b, t)  { return a + (b - a) * t; }
  function clamp(v, a, b) { return Math.max(a, Math.min(b, v)); }
  function easeOut3(t)    { return 1 - Math.pow(1 - t, 3); }
  function easeOut4(t)    { return 1 - Math.pow(1 - t, 4); }
  function easeIn2(t)     { return t * t; }
  function easeIn3(t)     { return t * t * t; }

  var target = 0, current = 0, rafActive = false;

  function getProgress() {
    var h = sc.offsetHeight - window.innerHeight;
    return h > 0 ? clamp(window.scrollY / h, 0, 1) : 0;
  }

  function render(p) {
 
    var cy;
    if      (p < 0.28) cy = lerp(115, 0,    easeOut4(p / 0.28));
    else if (p < 0.70) cy = 0;
    else               cy = lerp(0,   -130,  easeIn3((p - 0.70) / 0.30));
    gsap.set(car, { yPercent: cy, transformOrigin: 'center center' });

 
    var gl = 0;
    if      (p >= 0.14 && p < 0.70) gl = clamp((p - 0.14) / 0.14, 0, 1);
    else if (p >= 0.70)             gl = clamp(1 - (p - 0.70) / 0.30, 0, 1);
    gsap.set(carGlow, { opacity: gl * 0.9 });
    if (beams) gsap.set(beams, { opacity: gl * 0.7, yPercent: cy });


    var ho = 0, hy = -28;
    if      (p >= 0.20 && p < 0.50) { var t1 = easeOut3(clamp((p-0.20)/0.30,0,1)); ho=t1; hy=lerp(-28,0,t1); }
    else if (p >= 0.50 && p < 0.70) { ho=1; hy=0; }
    else if (p >= 0.70)             { var t2 = easeIn2(clamp((p-0.70)/0.30,0,1)); ho=1-t2; hy=lerp(0,-28,t2); }
    if (headline) gsap.set(headline, { opacity: ho, y: hy });


    var so = 0, sy = 30;
    if      (p >= 0.27 && p < 0.53) { var t3 = easeOut3(clamp((p-0.27)/0.26,0,1)); so=t3; sy=lerp(30,0,t3); }
    else if (p >= 0.53 && p < 0.70) { so=1; sy=0; }
    else if (p >= 0.70)             { var t4 = easeIn2(clamp((p-0.70)/0.30,0,1)); so=1-t4; sy=lerp(0,30,t4); }
    if (stats) gsap.set(stats, { opacity: so, y: sy });

    
    if (ctagBr) {
      ctagBr.textContent = p > 0.70 ? 'Fading out' : p > 0.28 ? 'Arrived' : 'Scroll to reveal';
    }

 
    if (prog) prog.style.width = (p * 100) + '%';

  
    if (p > 0.03 && scue) gsap.set(scue, { opacity: 0 });
  }

  window.addEventListener('scroll', function () {
    target = getProgress();
    if (!rafActive) { rafActive = true; requestAnimationFrame(loop); }
  }, { passive: true });

  function loop() {
    current += (target - current) * 0.08;
    render(current);
    if (Math.abs(target - current) > 0.0003) {
      requestAnimationFrame(loop);
    } else {
      current = target;
      render(current);
      rafActive = false;
    }
  }

  render(0);

})();
