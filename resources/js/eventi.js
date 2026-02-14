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

document.addEventListener("DOMContentLoaded", function () {
    // Selettori iper-univoci tramite ID
    const eventiSectionId = document.getElementById(
        "eventi_section_coverflow_container",
    );
    const eventiSwiperId = document.getElementById("eventi_swiper_principale");

    if (eventiSectionId && eventiSwiperId) {
        // Inizializzazione AOS (se caricato nel progetto)
        if (typeof AOS !== "undefined") {
            AOS.init({
                duration: 1000,
                once: true,
            });
        }

        // Inizializzazione Swiper con parametri Coverflow
        const eventiCoverflowAttivazione = new Swiper(
            "#eventi_swiper_principale",
            {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true,
                coverflowEffect: {
                    rotate: 40,
                    stretch: 0,
                    depth: 150,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: "#eventi_paginazione_bullets",
                    clickable: true,
                },
                // Autoplay fluido
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
            },
        );

        // Debug log per conferma caricamento in console
        console.log("Galleria Eventi (8 foto) inizializzata con successo.");
    }
});
