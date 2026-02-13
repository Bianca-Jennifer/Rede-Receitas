document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.receitas-swiper', {
        slidesPerView: 4,
        spaceBetween: 24,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1200: { slidesPerView: 4 },
            992:  { slidesPerView: 3 },
            768:  { slidesPerView: 2 },
            0:    { slidesPerView: 1.50,centeredSlides: true, centeredSlidesBounds: true, },
        }
    });
      
});

