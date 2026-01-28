/* Main JS */
console.log("Portfolio Loaded");

/* Menu Toggle Logic */
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close');

/* Validate if constants exist */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
    });
}

if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    });
}

/* Remove Menu Mobile on Link Click */
const navLink = document.querySelectorAll('.nav-link');

function linkAction() {
    /* When we click on each nav__link, we remove the show-menu class */
    navMenu.classList.remove('show-menu');
}
navLink.forEach(n => n.addEventListener('click', linkAction));
