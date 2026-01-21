document.addEventListener("DOMContentLoaded", () => {
  const track = document.querySelector("[data-demo-track]");
  const dotsWrap = document.querySelector("[data-demo-dots]");
  const prevBtn = document.querySelector("[data-demo-prev]");
  const nextBtn = document.querySelector("[data-demo-next]");
  const slider = document.querySelector(".demo-slider");

  if (!track || !dotsWrap || !prevBtn || !nextBtn || !slider) return;

  const slides = Array.from(track.querySelectorAll(".demo-slide"));
  let index = slides.findIndex(s => s.classList.contains("is-active"));
  if (index < 0) index = 0;

  function renderDots() {
    dotsWrap.innerHTML = "";
    slides.forEach((_, i) => {
      const dot = document.createElement("span");
      dot.className = "demo-dot" + (i === index ? " is-active" : "");
      dot.addEventListener("click", () => {
        goTo(i);
        resetAuto();
      });
      dotsWrap.appendChild(dot);
    });
  }

  function goTo(i) {
    slides[index].classList.remove("is-active");
    index = (i + slides.length) % slides.length;
    slides[index].classList.add("is-active");
    renderDots();
  }

  // 🔁 AUTOPLAY
  let auto = setInterval(() => goTo(index + 1), 3000);

  function resetAuto() {
    clearInterval(auto);
    auto = setInterval(() => goTo(index + 1), 3000);
  }

  // arrows
  prevBtn.addEventListener("click", () => {
    goTo(index - 1);
    resetAuto();
  });

  nextBtn.addEventListener("click", () => {
    goTo(index + 1);
    resetAuto();
  });

  // pause on hover
  slider.addEventListener("mouseenter", () => clearInterval(auto));
  slider.addEventListener("mouseleave", () => resetAuto());

  renderDots();
});
document.addEventListener("DOMContentLoaded", () => {
  const acc = document.getElementById("flowAcc");
  if (!acc) return;

  const items = Array.from(acc.querySelectorAll(".flow-item"));

  function isMobile(){
    return window.matchMedia("(max-width: 1100px)").matches;
  }

  function openItem(item){
    items.forEach(x => x.classList.remove("active"));
    item.classList.add("active");
  }

  function closeAll(){
    items.forEach(x => x.classList.remove("active"));
  }

  // click only on tab (better UX)
  items.forEach(item => {
    const tab = item.querySelector(".flow-tab");
    tab.addEventListener("click", (e) => {
      e.stopPropagation();

      if (isMobile()){
        // mobile: toggle open
        const alreadyOpen = item.classList.contains("active");
        closeAll();
        if (!alreadyOpen) item.classList.add("active");
      } else {
        // desktop: always open clicked
        openItem(item);
      }
    });
  });

  // prevent inside link click from toggling
  acc.querySelectorAll("a, button").forEach(el => {
    el.addEventListener("click", (e) => e.stopPropagation());
  });

  // initial state
  if (isMobile()) closeAll();     // ✅ mobile: show only tabs
  else openItem(items[0]);        // ✅ desktop: first open

  // on resize: keep behavior correct
  window.addEventListener("resize", () => {
    if (isMobile()) closeAll();
    else openItem(items[0]);
  });
});

