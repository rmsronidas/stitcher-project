function initHeaderMenu() {
  const icon = document.querySelector('.icon-table');
  const menu = document.getElementById('quickMenu');

  if (!icon || !menu || icon.dataset.bound) return;

  icon.dataset.bound = "true";

  icon.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('is-open');
    document.body.classList.toggle('menu-open');
  });

  menu.addEventListener('click', (e) => {
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    menu.classList.remove('is-open');
    document.body.classList.remove('menu-open');
  });
}

/* ✅ AUTO INIT WHEN header.html OPENED DIRECTLY */
document.addEventListener('DOMContentLoaded', () => {
  initHeaderMenu();
});
