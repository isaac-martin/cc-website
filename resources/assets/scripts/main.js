// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import gallery from './routes/gallery';
import aboutUs from './routes/about';
import single from './routes/portfolio';



/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Gallery
  gallery,
  // Single Port -
  single,
});

//Owl Carousel
import 'owl.carousel/dist/owl.carousel.min.js';
import 'slick-carousel/slick/slick.min';


// Load Events
jQuery(document).ready(() => routes.loadEvents());

// Trigger Owl Carousel
