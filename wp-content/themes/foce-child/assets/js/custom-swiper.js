const swiper = new Swiper(".swiper-container", {
    loop: true, // Activer le défilement infini
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 70,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 3000, // délai entre chaque slide en mode autoplay
    }
});
