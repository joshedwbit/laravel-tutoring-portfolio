import AOS from "aos";
import { navDropdown } from "./navbar";
import Swiper from 'swiper/bundle';
import { Navigation, Pagination } from 'swiper/modules';
import $ from 'jquery';
window.$ = window.jQuery = $;

const documentHeader = document.querySelector('.js-header')
const scrollHeaderThreshold = 50;

window.addEventListener('scroll', function(e) {
    let scrollPosition= window.scrollY;

    if (scrollPosition > scrollHeaderThreshold) {
        documentHeader.classList.add('header--fixed')
    } else {
        documentHeader.classList.remove('header--fixed')
    }
})

// AOS not needed on every page so *could* go into its own file and imported as and when
AOS.init({
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    anchorPlacement: 'bottom-bottom', // defines which position of the element regarding to window should trigger the animation
    offset: 100, // offset (in px) from the original trigger point
    //delay: 1000, // values from 0 to 3000, with step 50ms
    duration: 500, // values from 0 to 3000, with step 50ms
    easing: 'ease-in', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: true, // whether elements should animate out while scrolling past them
});

navDropdown();

const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    loop: true,
    centeredSlides: true,
    // spaceBetween: 100,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: "progressbar",
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});