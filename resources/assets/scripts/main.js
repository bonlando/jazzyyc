// import external dependencies
import 'jquery';
// import 'custom-event-polyfill/polyfill.js';
// import 'jquery-match-height/jquery.matchHeight.js';
// fontawesome stuff

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faClock } from '@fortawesome/free-regular-svg-icons';
import { faEnvelope, faCalendarPlus, faSignInAlt, faCalendarAlt, faTicketAlt, faAngleDown, faShoppingCart, faCalendarCheck, faGlobe, faPhoneSquare, faTimes } from '@fortawesome/free-solid-svg-icons';
import { faPlayCircle } from '@fortawesome/pro-duotone-svg-icons';
// import the Facebook and Twitter icons
import { faFacebook, faTwitter, faInstagram, faYoutube } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faPhoneSquare, faEnvelope, faPlayCircle, faGlobe, faCalendarCheck, faSignInAlt, faTwitter, faInstagram, faCalendarPlus, faAngleDown, faClock, faTicketAlt, faCalendarAlt, faTimes, faShoppingCart, faEnvelope, faYoutube);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
