function initHeader() {
  const body = document.body;
  const menuToggle = document.getElementById("menuToggle");
  const menuClose = document.getElementById("menuClose");
  const mobileMenu = document.getElementById("mobileMenu");
  const mobileOverlay = document.getElementById("mobileOverlay");
  const mobileDropdown = document.querySelector(".mobile-dropdown");
  const mobileDropdownToggle = document.getElementById("mobileDropdownToggle");
  const desktopDropdown = document.querySelector(".dropdown");
  const desktopDropdownToggle = document.querySelector(".dropdown-toggle");

  if (!menuToggle || !mobileMenu || !mobileOverlay) {
    console.log("Header elements not found");
    return;
  }

  if (menuToggle.dataset.bound === "true") return;
  menuToggle.dataset.bound = "true";

  function openMobileMenu() {
    mobileMenu.classList.add("is-open");
    mobileOverlay.classList.add("is-open");
    body.classList.add("menu-open");
    menuToggle.setAttribute("aria-expanded", "true");
    mobileMenu.setAttribute("aria-hidden", "false");
  }

  function closeMobileMenu() {
    mobileMenu.classList.remove("is-open");
    mobileOverlay.classList.remove("is-open");
    body.classList.remove("menu-open");
    menuToggle.setAttribute("aria-expanded", "false");
    mobileMenu.setAttribute("aria-hidden", "true");
  }

  menuToggle.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    if (mobileMenu.classList.contains("is-open")) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  if (menuClose) {
    menuClose.addEventListener("click", closeMobileMenu);
  }

  mobileOverlay.addEventListener("click", closeMobileMenu);

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeMobileMenu();

      if (desktopDropdown) {
        desktopDropdown.classList.remove("open");
      }

      if (desktopDropdownToggle) {
        desktopDropdownToggle.setAttribute("aria-expanded", "false");
      }
    }
  });

  if (mobileDropdown && mobileDropdownToggle) {
    mobileDropdownToggle.addEventListener("click", function () {
      const isOpen = mobileDropdown.classList.toggle("open");
      mobileDropdownToggle.setAttribute("aria-expanded", String(isOpen));
    });
  }

  if (desktopDropdown && desktopDropdownToggle) {
    desktopDropdownToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      const isOpen = desktopDropdown.classList.toggle("open");
      desktopDropdownToggle.setAttribute("aria-expanded", String(isOpen));
    });

    document.addEventListener("click", function (e) {
      if (!desktopDropdown.contains(e.target)) {
        desktopDropdown.classList.remove("open");
        desktopDropdownToggle.setAttribute("aria-expanded", "false");
      }
    });
  }

  const mobileLinks = document.querySelectorAll(".mobile-menu a");
  mobileLinks.forEach((link) => {
    link.addEventListener("click", closeMobileMenu);
  });
}