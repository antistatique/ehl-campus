
(function ($) {

  var $maxHeight = 580;
  var $minHeight = 155;

  var $mapBlock = $('.map');
  var $toggleButton = $("#toggle-button");

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
      $('#southkorea-marker').trigger('click');
    }, 700);
  };

  if($.cookie("ehl-forum") == null){
    var $mapHeight = $maxHeight;
  }else if($.cookie("ehl-forum") == $maxHeight){
    $(document).ready(function() {
      openTooltip();
    });
  }else {
    $toggleButton.addClass('top');
  }

  $.cookie("ehl-forum", $mapHeight);

  $mapBlock.height($.cookie("ehl-forum"));

  // Set slide up/down on map ////////////////////////////////////////
  function animationHeight(){
    $mapBlock.animate({height:$.cookie("ehl-forum")},700);
  }

  if($.cookie("ehl-forum") == $maxHeight){
    $toggleButton.toggle(function(){
      $mapHeight = $minHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
      $(this).addClass('top');
    },function(){
      $mapHeight = $maxHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
      openTooltip();
      $(this).removeClass('top');
    });
  }else {
    $toggleButton.toggle(function(){
      $mapHeight = $maxHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
      openTooltip();
      $(this).removeClass('top');
    },function(){
      $mapHeight = $minHeight;
      $.cookie("ehl-forum", $mapHeight);
      animationHeight();
      $(this).addClass('top');
    });
  }

})(jQuery);
