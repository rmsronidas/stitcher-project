// ===== Welcome modal (one-per-session) =====
(function () {
  const modal = document.getElementById('welcomeModal');
  if (!modal) return;

  const CLOSE_ATTR = 'data-dismiss';
  const DONT_SHOW_KEY = 'stitcher_welcome_dont_show';
  const SEEN_KEY = 'stitcher_welcome_seen_session';

  const dontShowCheckbox = document.getElementById('welcomeDontShow');

  function openModal() {
    if (sessionStorage.getItem(SEEN_KEY)) return;        // already shown this tab
    if (localStorage.getItem(DONT_SHOW_KEY) === '1') return; // user opted out

    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    // trap focus on open
    setTimeout(() => modal.querySelector('.btn,button,[data-dismiss]')?.focus(), 30);
    sessionStorage.setItem(SEEN_KEY, '1');
  }

  function closeModal() {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    if (dontShowCheckbox?.checked) localStorage.setItem(DONT_SHOW_KEY, '1');
  }

  // Clicks on overlay or close button
  modal.addEventListener('click', (e) => {
    if (e.target.hasAttribute(CLOSE_ATTR)) closeModal();
  });

  // Esc to close
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal();
  });

  // Show a moment after load for a nicer feel
  window.addEventListener('load', () => setTimeout(openModal, 600));
})();










// Circular window slider: 4/2/1 visible, shift by 1, wrap on both sides
const track = document.getElementById('track');
const prev = document.querySelector('.slider-btn.prev');
const next = document.querySelector('.slider-btn.next');
const dots = document.getElementById('dots');

let idx = 0; // index of the first visible card

function cardsPerView(){ return window.innerWidth<=560 ? 1 : (window.innerWidth<=1024 ? 2 : 6); }
function positionsCount(){
  const total = track.children.length;
  const per = cardsPerView();
  return Math.max(1, total - per + 1);
}
function stepSize(){
  const card = track.querySelector('.card');
  if(!card) return 0;
  const rect = card.getBoundingClientRect();
  const gap = parseFloat(getComputedStyle(track).columnGap || 12);
  return rect.width + (isNaN(gap) ? 12 : gap);
}
function goto(i){
  const count = positionsCount();
  // circular wrap-around both directions
  idx = (i % count + count) % count;

  const step = stepSize();
  if(!step) return;
  const offset = step * idx;
  track.style.transform = `translateX(${-offset}px)`;

  // update dots
  if (dots) {
    [...dots.children].forEach((d, n)=> d.setAttribute('aria-current', n===idx ? 'true':'false'));
  }
}
function buildDots(){
  if(!dots) return;
  dots.innerHTML = '';
  for(let i=0;i<positionsCount();i++){
    const b=document.createElement('button');
    b.type='button'; b.addEventListener('click',()=>goto(i));
    if(i===idx) b.setAttribute('aria-current','true');
    dots.appendChild(b);
  }
}

// init
buildDots(); goto(0);

// events
addEventListener('resize', ()=>{ buildDots(); goto(idx); });
prev.addEventListener('click', ()=> goto(idx-1));
next.addEventListener('click', ()=> goto(idx+1));

// keyboard support
const sliderEl = document.querySelector('.slider');
if (sliderEl) {
  sliderEl.addEventListener('keydown',(e)=>{
    if(e.key==='ArrowLeft') goto(idx-1);
    if(e.key==='ArrowRight') goto(idx+1);
  });
}

// footer year
const yearEl = document.getElementById('year');
if (yearEl) yearEl.textContent = new Date().getFullYear();


// --- Logos slider (auto-move) ---
(function(){
  const track = document.getElementById('logosTrack');
  const prev = document.querySelector('.logos-prev');
  const next = document.querySelector('.logos-next');
  const dots = document.getElementById('logosDots');
  if (!track) return;

  let idx = 0, timer = null;

  function perView(){
    const w = innerWidth;
    if (w <= 640) return 2;
    if (w <= 1200) return 4;
    return 6;
  }
  function positionsCount(){
    const total = track.children.length;
    const per = perView();
    return Math.max(1, total - per + 1);
  }
  function stepSize(){
    const card = track.querySelector('.logo-card');
    if (!card) return 0;
    const rect = card.getBoundingClientRect();
    const gap = parseFloat(getComputedStyle(track).columnGap || 10);
    return rect.width + (isNaN(gap) ? 10 : gap);
  }
  function goto(i){
    const count = positionsCount();
    idx = (i % count + count) % count;
    const step = stepSize();
    if (!step) return;
    track.style.transform = `translateX(${-step * idx}px)`;
    if (dots){
      [...dots.children].forEach((d, n)=> d.setAttribute('aria-current', n===idx ? 'true':'false'));
    }
  }
  function buildDots(){
    if (!dots) return;
    dots.innerHTML = '';
    for (let i=0;i<positionsCount();i++){
      const b=document.createElement('button');
      b.type='button'; b.addEventListener('click',()=>goto(i));
      if(i===idx) b.setAttribute('aria-current','true');
      dots.appendChild(b);
    }
  }
  function start(){
    stop();
    timer = setInterval(()=> goto(idx+1), 1500);
  }
  function stop(){
    if (timer) clearInterval(timer), timer=null;
  }

  // init
  buildDots(); goto(0); start();

  // events
  addEventListener('resize', ()=>{ buildDots(); goto(idx); });
  prev && prev.addEventListener('click', ()=>{ goto(idx-1); start(); });
  next && next.addEventListener('click', ()=>{ goto(idx+1); start(); });

  const slider = document.querySelector('.logo-slider');
  slider && slider.addEventListener('mouseenter', stop);
  slider && slider.addEventListener('mouseleave', start);
})();


// === Per-article 4-image rotator ===
// For every .card .protect that contains a single <img>, wrap it in .image-rotator
// and create a 4-image slider that advances automatically.
(function(){
  const cards = document.querySelectorAll('.card .protect');
  cards.forEach(protect => {
    const img = protect.querySelector('img');
    const guard = protect.querySelector('.guard');
    if (!img) return;

    // Skip if already upgraded
    if (protect.querySelector('.image-rotator')) return;

    // Create rotator wrapper
    const rot = document.createElement('div');
    rot.className = 'image-rotator';

    // Support optional data-gallery="url1, url2, url3, url4" on .protect or .card
    const sources = [];
    const galleryAttr = protect.getAttribute('data-gallery') || protect.closest('.card')?.getAttribute('data-gallery');
    if (galleryAttr){
      galleryAttr.split(',').map(s => s.trim()).filter(Boolean).forEach(s => sources.push(s));
    }

    // Ensure we have exactly 4 images;
    // If fewer provided, repeat; if none, clone the existing image 4 times.
    if (sources.length === 0) {
      const src = img.getAttribute('src');
      for (let i=0;i<4;i++) sources.push(src);
    } else if (sources.length < 4) {
      const need = 4 - sources.length;
      for (let i=0;i<need;i++) sources.push(sources[i % sources.length]);
    } else if (sources.length > 4) {
      sources.length = 4;
    }

    // Build slides
    const slides = sources.map((src, i) => {
      const im = img.cloneNode(false);
      im.removeAttribute('style'); // let CSS size it
      im.setAttribute('src', src);
      if (i === 0) im.classList.add('is-current');
      rot.appendChild(im);
      return im;
    });

    // Insert rotator in DOM (before guard overlay)
    protect.insertBefore(rot, guard || null);

    // Remove original img if it still exists outside rotator
    if (img && img.parentElement !== rot) {
      img.remove();
    }

    // Auto-advance
    let idx = 0;
    const advance = () => {
      const cur = slides[idx];
      const next = slides[(idx + 1) % slides.length];
      // prepare next (it should be off-right by default)
      // animate current to exit-left
      cur.classList.remove('is-current');
      cur.classList.add('is-exit');
      // bring next to center
      next.classList.add('is-current');
      // cleanup exit class after transition
      const clean = () => { cur.classList.remove('is-exit'); cur.removeEventListener('transitionend', clean); };
      cur.addEventListener('transitionend', clean);
      idx = (idx + 1) % slides.length;
    };

    // Slightly staggered start so all cards don't shift at once
    const delay = Math.floor(Math.random()*1000) + 1200;
    setTimeout(()=>{
      setInterval(advance, 2600);
    }, delay);
  });
})();
