import Swiper from 'swiper/bundle';
import { Navigation, Pagination } from 'swiper/modules';

const swiper = new Swiper('.reviews-swiper', {
    slidesPerView: 1,
    loop: false,
    // centeredSlides: true,
    // autoHeight: true,
    spaceBetween: 10,
    grabCursor: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },

    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        555: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
});