
(function ($) {

  // Init map ///////////////////////////////////////////////////////
  if($.cookie("ehl-forum") == null){
    var $mapHeight = 580;
  }else if($.cookie("ehl-forum") == 580){
    $(document).ready(function() {
      setTimeout(function(){ 
        $('#india-marker').trigger('click');
      }, 800);
    });
  }

  $.cookie("ehl-forum", $mapHeight);

  $('.map').height($.cookie("ehl-forum"));

  // Set craftmap ////////////////////////////////////////////////////
  $('.map').craftmap({
    image: {
      width: 1375,
      height: 903
    },
    map: {
      position: 'center'
    }
  });

  // Set slide up/down on map ////////////////////////////////////////
  $("#toggle-button").toggle(function(){
    $mapHeight = 155;
    $.cookie("ehl-forum", $mapHeight);
    $('.map').animate({height:$.cookie("ehl-forum")},700);
  },function(){
    $mapHeight = 580;
    $.cookie("ehl-forum", $mapHeight);
    $('.map').animate({height:$.cookie("ehl-forum")},700);
  });

})(jQuery);
