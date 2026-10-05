//============================
//BANNER SLIDE
//============================
$(function () {
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeight: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    adaptiveHeight: true
                }
            }
        ]
    });
});

//============================
//MENU SLIDE
//============================
const menuButtons = document.querySelectorAll('.hamburger');
const sidebar = document.querySelector('.sidebar');

menuButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const isOpen = document.body.classList.contains('menu-open');

        setMenuOpen(!isOpen);
    });
});

document.addEventListener('click', (event) => {
    const clickedSidebar = sidebar.contains(event.target);
    const clickedMenuButton = event.target.closest('.hamburger');

    if (!clickedSidebar && !clickedMenuButton) {
        setMenuOpen(false);
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && document.body.classList.contains('menu-open')) {
        setMenuOpen(false);
    }
});

function setMenuOpen(isOpen) {
    document.body.classList.toggle('menu-open', isOpen);

    menuButtons.forEach((button) => {
        button.setAttribute('aria-expanded', String(isOpen));
        button.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
    });
}

//============================
//STICKY HEADER
//============================
const headerWrapper = document.querySelector('.header-wrapper');
const headerResizeObserver = new ResizeObserver(() => {
    const headerHeight = headerWrapper.offsetHeight;

    headerWrapper.style.setProperty(
        '--header-height',
        `${headerHeight}px`
    );
});

headerResizeObserver.observe(headerWrapper);

let previousScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;

    if (currentScrollY < previousScrollY) {
        headerWrapper.classList.add('is-visible');
    } else if (currentScrollY > previousScrollY) {
        headerWrapper.classList.remove('is-visible');
    }

    previousScrollY = currentScrollY
});

//============================
//COOKIE POP UP
//============================
const acceptButton = document.querySelector('.accept-btn');
const cookieApp = document.querySelector('.cookie-app');

acceptButton.addEventListener('click', () =>{
    cookieApp.classList.add('is-hidden');
    localStorage.setItem('cookiesAccepted', 'true');
});

const savedConsent = localStorage.getItem('cookiesAccepted');

if (savedConsent !== 'true') {
    cookieApp.classList.remove('is-hidden');
}

//============================
//PARTNER & CASE STUDY CAROUSEL
//============================
$(document).ready(function () {
    $('.partners-slider, .case-studies-slider').slick({
        rows: 0,
        variableWidth: true,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        pauseOnHover: true
    });
});
