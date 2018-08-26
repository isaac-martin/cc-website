export default {
  init() {
  },
  finalize() {
    // $('.js-gal-carousel').owlCarousel({
    //   margin: 10,
    //   loop: true,
    //   autoWidth: true,
    //   items: 4,
    // });
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
