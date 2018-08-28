export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    $(".js-nav-trigger").click(function () {
      $(this).toggleClass("open");
      $('#site-nav').toggleClass("open");
    });
  },
};
