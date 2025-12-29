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

    /* ================= PROGRAMS CAROUSEL ================= */
    const track = document.querySelector('.carousel-track');
    if (track) {
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.carousel-nav.next');
        const prevButton = document.querySelector('.carousel-nav.prev');

        let currentIndex = 0;

        function updateSlidePosition() {
            const slideWidth = slides[0].getBoundingClientRect().width;
            track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        nextButton?.addEventListener('click', () => {
            if (currentIndex < slides.length - 1) currentIndex++;
            else currentIndex = 0;
            updateSlidePosition();
        });

        prevButton?.addEventListener('click', () => {
            if (currentIndex > 0) currentIndex--;
            else currentIndex = slides.length - 1;
            updateSlidePosition();
        });

        window.addEventListener('resize', updateSlidePosition);

        // Optional: autoplay every 5 seconds
        setInterval(() => {
            if (currentIndex < slides.length - 1) currentIndex++;
            else currentIndex = 0;
            updateSlidePosition();
        }, 5000);
    }
});
