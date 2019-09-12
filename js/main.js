function init() {
  $('body').removeClass('fade-out');
}
window.onload = init();

$(document).ready(function () {
  // ADD FADE IN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeIn();
  });

  // ADD FADE OUT ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeOut();
  });

  // MAIN SLIDER
  $('.main-slider').slick({
    infinite: true,
    dots: true,
    accessibility: false,
    slidesToShow: 1,
    lazyLoad: 'ondemand',
    slidesToScroll: 1,
    prevArrow: $('.main-slider-container .btn-prev'),
    nextArrow: $('.main-slider-container .btn-next'),
    appendArrows: '.main-slider-container .slider-nav-arrows'
  });
});