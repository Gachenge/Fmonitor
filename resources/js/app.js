import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    /* ================= BACK TO TOP ================= */
    const backToTop = document.getElementById('backToTop');

    if (backToTop) {
        window.addEventListener('scroll', () => {
            backToTop.style.display = window.scrollY > 300 ? 'flex' : 'none';
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ================= MOBILE NAV ================= */
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('header nav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('open');
        });
    }

});
