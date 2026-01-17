import './bootstrap'; // Se usi Laravel
import 'bootstrap';    // Importa il JS di bootstrap

const navbar = document.getElementById("navbar");

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});