import Swiper from 'swiper/bundle';
import { Navigation, Pagination } from 'swiper/modules';

const swiper = new Swiper('.swiper--success-stories', {
    slidesPerView: 1,
    loop: true,
    // centeredSlides: true,
    // autoHeight: true,
    spaceBetween: 10,
    grabCursor: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
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
    }
});