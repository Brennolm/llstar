import '@tabler/core/dist/js/tabler.min.js';
import AOS from 'aos';
import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', () => {

    AOS.init({ duration: 800, once: true });

    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });

    new Swiper('.clients-slider', {
        modules: [Autoplay],
        loop: true,
        autoplay: { delay: 2500, disableOnInteraction: false },
        slidesPerView: 2,
        spaceBetween: 30,
        breakpoints: {
            768: { slidesPerView: 4 },
            1200: { slidesPerView: 6 },
        },
    });

    const navbar = document.getElementById('navbar');
    const navToggle = document.querySelector('.mobile-nav-toggle');

    navToggle?.addEventListener('click', () => {
        navbar.classList.toggle('navbar-mobile');
        navToggle.classList.toggle('ti-menu-2');
        navToggle.classList.toggle('ti-x');
    });

    document.querySelectorAll('#navbar a[href^="#"], .footer-links a[href^="#"]').forEach((link) => {
        link.addEventListener('click', function (event) {
            const target = document.querySelector(this.getAttribute('href'));

            if (! target) {
                return;
            }

            event.preventDefault();
            navbar?.classList.remove('navbar-mobile');

            const headerOffset = document.getElementById('header')?.offsetHeight ?? 0;
            const top = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;

            window.scrollTo({ top, behavior: 'smooth' });
        });
    });

    const backToTop = document.querySelector('.back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            backToTop?.classList.add('active');
        } else {
            backToTop?.classList.remove('active');
        }
    });

});