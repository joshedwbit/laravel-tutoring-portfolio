import AOS from "aos";
import { navDropdown } from "./navbar";

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

fetch('https://api.unsplash.com/photos/random?client_id=K7eFADKP4CeSbBMdw6LlzxNlJcRgYEq1nPc45XLRtIg')
  .then(response => response.json())
  .then(data => {
    console.log(data);
    document.querySelector('#unsplash-image').src= data.urls.regular;
  })
  .catch(error => console.log('Error:', error));
