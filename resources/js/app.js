import './bootstrap'; // Se usi Laravel
import 'bootstrap';    // Importa il JS di bootstrap

const navbar = document.querySelector(".navbar");
const collapseElement = document.getElementById('navbarNav');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // Meglio un valore > 0 per evitare micro-scroll
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
        
        // Se il menu era aperto, lo chiudiamo quando torniamo in cima (opzionale)
        if(collapseElement.classList.contains('show')) {
             // Usa l'API di Bootstrap per chiuderlo correttamente se possibile
             collapseElement.classList.remove('show');
        }
    }
});