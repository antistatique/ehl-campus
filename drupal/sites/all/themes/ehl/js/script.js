
(function ($) {

  $(document).ready(function() {
    setTimeout(function(){ 
      $('#india-marker').trigger('click');
    }, 500);
  });

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

  // Project //////////////////////////////////////////

  $(".page-projects .view-project-list .view-filters + .span3, .page-projects .view-project-list .span3:nth-child(4n+2)").addClass("no-margin");

})(jQuery);
