import "./bootstrap";
import "./eventi.js";
import * as bootstrap from "bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

import Swiper from "swiper/bundle";
import "swiper/css/bundle";
window.Swiper = Swiper;
AOS.init();

const navbar = document.getElementById("navbar");
const navbarOffcanvas = document.getElementById("navbarOffcanvas");
const navbarRight = document.querySelector('.navbar-right');

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});

let _lastScrollY = 0;

if (navbar && navbarOffcanvas) {
    navbarOffcanvas.addEventListener("shown.bs.offcanvas", () => {
        // visual class
        navbar.classList.add("navbar-offcanvas-open");

        // accessibility
        if (navbarRight) {
            navbarRight.setAttribute('aria-hidden', 'true');
        }

        // lock body scroll while preserving position
        _lastScrollY = window.scrollY || window.pageYOffset;
        document.body.style.position = 'fixed';
        document.body.style.top = `-${_lastScrollY}px`;
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';
    });

    navbarOffcanvas.addEventListener("hidden.bs.offcanvas", () => {
        navbar.classList.remove("navbar-offcanvas-open");

        if (navbarRight) {
            navbarRight.removeAttribute('aria-hidden');
        }

        // restore body scroll
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';

        // restore previous scroll position
        window.scrollTo(0, _lastScrollY);
        _lastScrollY = 0;
    });
}

document.addEventListener("DOMContentLoaded", () => {
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

    const editorInput = document.querySelector("#content");
    const editorElement = document.querySelector("#content-editor");

    if (editorInput && editorElement) {
        ClassicEditor.create(editorElement, {
            toolbar: [
                "heading",
                "|",
                "bold",
                "italic",
                "link",
                "bulletedList",
                "numberedList",
                "blockQuote",
                "undo",
                "redo",
            ],
        })
            .then((editor) => {
                editor.setData(editorInput.value || "");
                editor.model.document.on("change:data", () => {
                    editorInput.value = editor.getData();
                });
            })
            .catch((error) => {
                console.error("CKEditor initialization failed", error);
            });
    }
});

// CAROSELLO STANZE

var swiperVerticale1 = new Swiper("#sezione-carosello-1 .swiper-verticale-1", {
    direction: "vertical",
    spaceBetween: 0,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    speed: 1300,

    pagination: {
        el: "#sezione-carosello-1 .pag-verticale-1",
        clickable: true,
    },
});

document.addEventListener("DOMContentLoaded", function () {
    // --- LOGICA PER PASSWORD ---
    const togglePassword = document.querySelector("#togglePassword");
    const passwordInput = document.querySelector("#password");
    const eyeIcon = document.querySelector("#eyeIcon");

    if (togglePassword && passwordInput && eyeIcon) {
        togglePassword.addEventListener("click", function () {
            const type =
                passwordInput.getAttribute("type") === "password"
                    ? "text"
                    : "password";
            passwordInput.setAttribute("type", type);
            // Cambia l'icona FontAwesome
            eyeIcon.classList.toggle("fa-eye");
            eyeIcon.classList.toggle("fa-eye-slash");
        });
    }

    // --- LOGICA PER CONFERMA PASSWORD ---
    const toggleConfirmPassword = document.querySelector(
        "#toggleConfirmPassword",
    );
    const confirmPasswordInput = document.querySelector(
        "#password_confirmation",
    );
    const eyeIconConfirm = document.querySelector("#eyeIconConfirm");

    if (toggleConfirmPassword && confirmPasswordInput && eyeIconConfirm) {
        toggleConfirmPassword.addEventListener("click", function () {
            const type =
                confirmPasswordInput.getAttribute("type") === "password"
                    ? "text"
                    : "password";
            confirmPasswordInput.setAttribute("type", type);
            // Cambia l'icona FontAwesome
            eyeIconConfirm.classList.toggle("fa-eye");
            eyeIconConfirm.classList.toggle("fa-eye-slash");
        });
    }
});
