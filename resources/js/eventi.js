/**
 * Script specifico per la pagina Eventi de Il Ciliegio dell'Etna
 * Utilizza ID univoci per evitare conflitti con altri script Swiper nella stessa SPA o sito.
 */

document.addEventListener("DOMContentLoaded", function () {
    // 1. Inizializzazione AOS con impostazioni protette
    if (typeof AOS !== "undefined") {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
        });
    }

    // 2. Inizializzazione Swiper tramite ID univoco
    // Verifichiamo che l'elemento esista prima di inizializzare
    const eventiSwiperElement = document.getElementById(
        "ciliegio-ev-swiper-container",
    );

    if (eventiSwiperElement) {
        const ciliegioEventiSwiper = new Swiper(
            "#ciliegio-ev-swiper-container",
            {
                // Parametri fondamentali
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,

                // Autoplay delicato
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },

                // Navigazione catturata tramite ID univoci
                navigation: {
                    nextEl: "#ciliegio-ev-swiper-next",
                    prevEl: "#ciliegio-ev-swiper-prev",
                },

                // Paginazione catturata tramite ID univoco
                pagination: {
                    el: "#ciliegio-ev-swiper-pagination",
                    clickable: true,
                },

                // Responsive
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            },
        );
    }

    // Esempio di cattura click su card tramite ID (se volessi aggiungere logica specifica)
    const cardLaurea = document.getElementById("ciliegio-ev-card-graduation");
    if (cardLaurea) {
        cardLaurea.addEventListener("click", function () {
            console.log("Interessato a evento Laurea");
        });
    }
});
