export default {
  init() {
    $('.js-home-carousel').owlCarousel({
      loop: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 3500,
      animateOut: 'fadeOut',
    });
  },
  finalize() {

  },
};
