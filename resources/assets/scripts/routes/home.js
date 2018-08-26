export default {
  init() {
    $('.js-home-carousel').slick({
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 2500,
      dots: false,
      arrows: false,
      fade: true,
      cssEase: 'linear',
    });
  },
  finalize() {

  },
};
