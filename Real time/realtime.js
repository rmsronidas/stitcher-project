document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.getElementById('menu-icon');
    const navMenu = document.getElementById('nav-menu');

    if (menuIcon && navMenu) {
        menuIcon.addEventListener('click', function() {
            // We use 'show' to match the CSS block below
            navMenu.classList.toggle('show');
            console.log("Menu toggled!"); 
        });
    }

    // Close menu when clicking a link
    const navLinks = document.querySelectorAll('.pill');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('show');
        });
    });
});