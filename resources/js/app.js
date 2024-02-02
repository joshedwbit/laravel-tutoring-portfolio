import AOS from "aos";
import 'aos/dist/aos.css';
import { navDropdown } from "./navbar";
import { twitterDropdown } from "./twitter-dropdown";

AOS.init();
navDropdown();
twitterDropdown();