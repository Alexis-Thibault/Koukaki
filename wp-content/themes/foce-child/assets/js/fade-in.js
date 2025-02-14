// Animation de Fade in des sections
jQuery(document).ready(($) => {
    // Fonction pour faire apparaître les autres sections
    const fadeInSections = () => {
        $('.site-main > section:not(.banner)').each(function () {
            const section = $(this);
            $(window).on('scroll', () => {
                const scrollPosition = $(window).scrollTop() + $(window).height();
                const sectionTop = section.offset().top;
                if (scrollPosition > sectionTop + 100) {
                    section.animate({ 'opacity': '1', 'bottom': '0' }, 1500);
                }
            });
        });
    };

    // Fonction pour faire apparaître la bannière dès le chargement de la page
    const fadeInBanner = () => {
        $('.banner').animate({ 'opacity': '1', 'top': '0' }, 1500);
    };

    // Fonction pour faire apparaître le titre
    const fadeInTitle = () => {
        $('.overlay-image').animate({ 'opacity': '1', 'top': '0' }, 1500);
    };

    // Appliquer l'opacité initiale à 0 pour les autres sections
    $('.site-main > section:not(.banner)').css({ 'opacity': '0', 'bottom': '-150px' });

    // Appliquer l'opacité initiale à 0 pour la bannière
    $('.banner').css({ 'opacity': '0', 'top': '-150px' });

    // Appliquer l'opacité initiale à 0 pour le titre
    $('.overlay-image').css({ 'opacity': '0', 'top': '1000px' });

    // Appeler les fonctions lorsque le document est prêt
    fadeInSections();
    fadeInBanner();
    fadeInTitle();
});

// Animation des titres h2, h3
document.addEventListener('DOMContentLoaded', function () {
    // Fonction pour vérifier si un élément est dans la zone visible de la fenêtre
    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    // Fonction pour ajouter la classe 'show' aux éléments visibles dans la fenêtre
    const handleScroll = () => {
        const spans = document.querySelectorAll('h2 span, h3 span');
        spans.forEach((span) => {
            if (isElementInViewport(span)) {
                span.classList.add('show');
            }
        });
    };

    // Écouter les événements de défilement
    window.addEventListener('scroll', handleScroll);

    // Déclencher la fonction une fois au chargement de la page
    handleScroll();
});


// Parallaxe

jQuery(document).ready(function ($) {
    // Fonction pour mettre à jour la position de l'image en fonction du défilement
    const updateParallax = () => {
        // Récupération de la position de défilement actuelle
        const scrollTop = $(window).scrollTop();

        // Calcul de la position de la section .banner par rapport au document
        const bannerTop = $('.banner').offset().top;

        // Calcul de la position de l'image par rapport à la section .banner
        const imageTop = scrollTop - bannerTop;

        // Limite inférieure et supérieure pour l'effet de parallaxe
        const minTop = 0;
        const maxTop = $('.banner').height() - $('.banner .overlay-image').height();

        // Ajustement de la position de l'image en fonction du défilement
        if (imageTop >= minTop && imageTop <= maxTop) {
            $('.banner .overlay-image').css('top', imageTop / 1.7 + 'px');
        }
    };

    // Appel initial de la fonction de parallaxe au chargement de la page
    updateParallax();

    // Mise à jour de la position de l'image lors du défilement de la page
    $(window).on('scroll', function () {
        updateParallax();
    });
});

// Animation des nuages

document.addEventListener('DOMContentLoaded', function () {
    const bigCloud = document.querySelector('.big-cloud');
    const littleCloud = document.querySelector('.little-cloud');
    const placeSection = document.getElementById('place');

    const onScroll = () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const placeOffsetTop = placeSection.offsetTop;
        const placeHeight = placeSection.offsetHeight;

        // Vérifiez si le défilement est dans la section "place"
        if (scrollTop >= placeOffsetTop && scrollTop <= placeOffsetTop + placeHeight) {
            const scrollWithinSection = scrollTop - placeOffsetTop;

            const bigCloudMovement = scrollWithinSection * 0.3; // Vitesse de déplacement du gros nuage
            const littleCloudMovement = scrollWithinSection * 0.3; // Vitesse de déplacement du petit nuage

            // Limitez le déplacement à 300px
            bigCloud.style.transform = `translateX(${-Math.min(bigCloudMovement, 300)}px)`;
            littleCloud.style.transform = `translateX(${-Math.min(littleCloudMovement, 300)}px)`;
        }
    };

    window.addEventListener('scroll', onScroll);
});

// Menu burger

document.addEventListener('DOMContentLoaded', function() {
    const menuBurger = document.querySelector('.menu_burger');
    const dropdownMenu = document.querySelector('.dropdown_menu');

    menuBurger.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show');
        menuBurger.classList.toggle('active');
    });

    // Optionnel: fermer le menu si on clique en dehors du menu
    document.addEventListener('click', function(event) {
        if (!menuBurger.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
            menuBurger.classList.remove('active');
        }
    });
});
