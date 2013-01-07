
(function ($) {

  $('.map').craftmap({
    image: {
      width: 1375,
      height: 903
    },
    map: {
      position: 'center'
    }
  });

  $("#toggle-button").toggle(function(){
    $('.map').animate({height:155},700);
  },function(){
    $('.map').animate({height:580},700);
  });

})(jQuery);
