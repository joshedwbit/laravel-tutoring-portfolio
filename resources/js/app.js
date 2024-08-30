import { navDropdown } from "./navbar";
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel';

navDropdown();

$(document).ready(function(){
    $('.your-carousel-class').slick({
        // Slick carousel options
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
    });
});