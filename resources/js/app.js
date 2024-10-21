import AOS from "aos";
import { navDropdown } from "./navbar";
import $ from 'jquery';
import scrollama from "scrollama";
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


// instantiate the scrollama
const scroller = scrollama();

// setup the instance, pass callback functions
// scroller
//   .setup({
//     step: ".step",
//     offset: 0.5,   // 50% of viewport height
//     debug: true,   // Adds visual debugging
//   })
//   .onStepEnter((response) => {
//     // { element, index, direction }
//     response.element.classList.add("is-active");
//   })
//   .onStepExit((response) => {
//     // { element, index, direction }
//     response.element.classList.remove("is-active");
//   });

scroller
      .setup({
        step: ".step", // Step elements
        offset: 0.5,   // 50% of viewport height
        // debug: true,   // Adds visual debugging
      })
      .onStepEnter(response => {
        console.log('enter');
        console.log(response);
        // Add active class to the current step
        response.element.classList.add("is-active");

        // Update the graphic text to show the current step number
        document.getElementById("graphic").innerText = `Step ${response.index + 1}`;
      })
      .onStepExit(response => {
        console.log('exit');
        console.log(response);
        // Remove active class when exiting
        response.element.classList.remove("is-active");
      });