document.addEventListener('DOMContentLoaded', function () {

    // Burger menu
    const menuToggle = document.querySelector('.menu-toggle');
    const overlayMenu = document.querySelector('.overlay-menu');

    menuToggle.addEventListener('click', function () {
        overlayMenu.classList.toggle('active');
        menuToggle.classList.toggle('open');
    });

});