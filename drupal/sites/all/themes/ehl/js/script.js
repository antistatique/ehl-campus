
(function ($) {

  var $maxHeight = 580;
  var $minHeight = 155;

  // Set craftmap ////////////////////////////////////////////////////
  
  function craftMap(){
    $('.map').craftmap({
      image: {
        width: 1375,
        height: 903
      },
      map: {
        position: 'center'
      }
    });
  }

  craftMap();

  // Init map ///////////////////////////////////////////////////////

  function openTooltip(){
    setTimeout(function(){ 
      $('#india-marker').trigger('click');
    }, 700);
  };

  if($.cookie("ehl-forum") == null){
    var $mapHeight = $maxHeight;
  }else if($.cookie("ehl-forum") == $maxHeight){
    $(document).ready(function() {
      openTooltip();
    });
  }

  $.cookie("ehl-forum", $mapHeight);

  $('.map').height($.cookie("ehl-forum"));

  // Set slide up/down on map ////////////////////////////////////////
  function animationHeight(){
    $('.map').animate({height:$.cookie("ehl-forum")},700);
  }

  if($.cookie("ehl-forum") == $maxHeight){
    $("#toggle-button").toggle(function(){
      $mapHeight = $minHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
    },function(){
      $mapHeight = $maxHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
      openTooltip();
    });
  }else {
    $("#toggle-button").toggle(function(){
      $mapHeight = $maxHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
      openTooltip();
    },function(){
      $mapHeight = $minHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
    });
  }

})(jQuery);
