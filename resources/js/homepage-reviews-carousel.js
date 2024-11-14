import Swiper from 'swiper/bundle';
import { Navigation, Pagination } from 'swiper/modules';

const swiper = new Swiper('.reviews-swiper', {
    slidesPerView: 3,
    loop: false,
    // centeredSlides: true,
    // autoHeight: true,
    spaceBetween: 10,
    grabCursor: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        555: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});