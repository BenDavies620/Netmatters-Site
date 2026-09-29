//============================
//BANNER SLIDE
//============================
$(function () {
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000
    });
});

//============================
//MENU SLIDE
//============================
const menuButtons = document.querySelectorAll('.hamburger');
const sidebar = document.querySelector('.sidebar');

menuButtons.forEach((button) => {
    button.addEventListener('click', () => {
        document.body.classList.toggle('menu-open');
    });
});

document.addEventListener('click', (event) => {
    const clickedSidebar = sidebar.contains(event.target);
    const clickedMenuButton = event.target.closest('.hamburger');

    if (!clickedSidebar && !clickedMenuButton) {
        document.body.classList.remove('menu-open');
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && document.body.classList.contains('menu-open')) {
        document.body.classList.toggle('menu-open');
    }
});