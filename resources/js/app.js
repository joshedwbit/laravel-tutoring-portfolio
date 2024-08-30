import AOS from "aos";
import 'aos/dist/aos.css';
import { navDropdown } from "./navbar";
import $ from 'jquery';
window.$ = window.jQuery = $;


AOS.init();
navDropdown();