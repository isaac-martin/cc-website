export default {
  init() {
  },
  finalize() {
    $('.js-gal-carousel').slick({
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      dots: false,
      autoplay: true,
      // centerMode: true,
      variableWidth: true,
    });
  },
};
