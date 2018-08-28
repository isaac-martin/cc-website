export default {
  init() {
  },
  finalize() {
    var $count = $('.slideCount');
    var $projSlider = $('.js-proj-car');

    $projSlider.on('init reInit afterChange', function (event, slick, currentSlide) {
      var i = (currentSlide ? currentSlide : 0) + 1;
      $count.text(i + '/' + slick.slideCount);
    });

    $projSlider.slick({
      infinite: true,
      speed: 500,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      slidesToShow: 1,
      // centerMode: true,
      variableWidth: true,
    });


    $(".next").click(function () {
      $projSlider.slick("slickNext");
      $projSlider.slick("slickPause");
    });

    $(".prev").click(function () {
      $projSlider.slick("slickPrev");
      $projSlider.slick("slickPause");
    });

  },
};
