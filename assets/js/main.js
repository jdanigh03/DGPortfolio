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

/* ========================================
   LANGUAGE SWITCH LOGIC
======================================== */
const languageToggle = document.getElementById('language-toggle');
const body = document.body;

// Function to set language
function setLanguage(lang) {
    if (lang === 'en') {
        body.classList.add('lang-en');
        body.classList.remove('lang-es');
        if (languageToggle) languageToggle.checked = true;
    } else {
        body.classList.add('lang-es');
        body.classList.remove('lang-en');
        if (languageToggle) languageToggle.checked = false;
    }
    // Save to localStorage
    localStorage.setItem('selected-language', lang);
}

// Check local storage on load
const savedLanguage = localStorage.getItem('selected-language');
if (savedLanguage) {
    setLanguage(savedLanguage);
} else {
    // Default to Spanish
    setLanguage('es');
}

// Event Listener for Toggle
if (languageToggle) {
    languageToggle.addEventListener('change', () => {
        if (languageToggle.checked) {
            setLanguage('en');
        } else {
            setLanguage('es');
        }
    });
}


