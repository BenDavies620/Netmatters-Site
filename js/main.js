//============================
//BANNER SLIDE
//============================
$(function () {
    $('.banner-slider, .partners-slider, .case-studies-slider')
    .attr('tabindex', '-1')
    .on('beforeChange afterChange', function () {
        const focusedElement = document.activeElement;
        const focusedSlide = focusedElement
            ? focusedElement.closest('.slick-slide')
            : null;

        if (focusedSlide && this.contains(focusedSlide)) {
            this.focus({ preventScroll: true });
        }
    });

    $('.banner-slider')
    .on('swipe', function () {
        $(this).slick('slickPlay');
    })
    .slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,

        pauseOnHover: true,
        pauseOnFocus: true,
        focusOnChange: false,

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

    headerWrapper.classList.toggle(
        'is-scrolled',
        currentScrollY >= headerWrapper.offsetHeight
    );

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

//==============================
//PARTNER & CASE STUDY CAROUSEL
//==============================
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
        pauseOnHover: true,
        draggable: false,
        swipe: false,
        touchMove: false
    });
});

//=======================
//OUT OF HOURS ACCORDION
//=======================
$(function () {
    const supportToggle = $('.support-toggle');
    const supportContent = $('#support-content');

    supportToggle.on('click', function () {
        const isExpanded =
            supportToggle.attr('aria-expanded') === 'true';

        supportToggle.attr('aria-expanded', String(!isExpanded));

        supportContent.stop(true, true).slideToggle(400);
    });
});

//============================
//CONTACT FORM VALIDATION
//============================
const contactForm = document.querySelector('#contact-form');

if (contactForm) {
    const fields = contactForm.querySelectorAll(
        'input[required], textarea[required]'
    );

    const emailRegex = /^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    function isFieldEmpty(field) {
        return !field.value.trim();
    }

    function showError(field) {
        field.classList.add('error');
        field.setAttribute('aria-invalid', 'true');
    }

    function clearError(field) {
        field.classList.remove('error');
        field.removeAttribute('aria-invalid');
    }

    contactForm.addEventListener('submit', function (event) {
        let formIsValid = true;

        for (let i = 0; i < fields.length; i++) {
            const field = fields[i];

            if (isFieldEmpty(field)) {
                showError(field);
                formIsValid = false;
            } else if (
                field.name === 'email' &&
                !emailRegex.test(field.value.trim())
            ) {
                showError(field);
                formIsValid = false;
            } else {
                clearError(field);
            }
        }

        if (!formIsValid) {
            event.preventDefault();
            contactForm.querySelector('.error').focus();
        }
    });

    fields.forEach(function (field) {
        field.addEventListener('input', function () {
            if (
                field.classList.contains('error') &&
                !isFieldEmpty(field)
            ) {
                if (field.name === 'email') {
                    if (emailRegex.test(field.value.trim())) {
                        clearError(field);
                    }
                } else {
                    clearError(field);
                }
            }
        });
    });
}