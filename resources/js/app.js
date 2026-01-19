import "./bootstrap"; // Se usi Laravel
import "bootstrap"; // Importa il JS di bootstrap
import AOS from "aos";
import "aos/dist/aos.css";

import Swiper from "swiper/bundle";
import "swiper/css/bundle";
window.Swiper = Swiper;
AOS.init();

const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        centeredSlides: false,
        spaceBetween: 30,
        grabCursor: true,

        // Freemode per scorrimento fluido
        freeMode: true,

        // Quante slide vedere
        slidesPerView: 1,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
});
