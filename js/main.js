function init() {
  $('body').removeClass('fade-out');
}
window.onload = init();

$(document).ready(function () {
  // SCROLL ANIMATION
  var $animationElements = $('.animate-element');
  var $window = $(window);
  function checkIfInView() {
    var windowHeight = $window.height();
    var windowTopPosition = $window.scrollTop();
    var windowBottomPosition = (windowTopPosition + windowHeight);
    $.each($animationElements, function() {
      var $element = $(this);
      var elementHeight = $element.outerHeight();
      var elementTopPosition = $element.offset().top;
      var elementBottomPosition = (elementTopPosition + elementHeight);
      //check to see if this current container is within viewport
      if ((elementBottomPosition >= windowTopPosition) &&
          (elementTopPosition <= windowBottomPosition)) {
        $element.addClass('in-view');
      } else {
        $element.removeClass('in-view');
      }
    });
  }
  $window.on('scroll resize', checkIfInView);
  $window.trigger('scroll');
  // ADD CLASS TO HEADER ON SCROLL
  $(function () {
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        $('#scrollTop').html(top_offset);
        if (top_offset == 0) {
            $('body')
            .removeClass('is-scrolling')
        } else {
            $('body').addClass('is-scrolling');
        }
    })
});
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