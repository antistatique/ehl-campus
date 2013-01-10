(function ($) {

  var $mapHeight = [ 580, 155 ];
  var newHeight = 0;

  var $mapBlock = $('.map');
  var $toggleButton = $("#toggle-button");

  $(document).ready(function(){
    craftMap();
    defineHeight();
    toggleButton();
  });

  /**
   * init craftmap.js
   */
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


  /**
   * Define de height of the map's wrapper
   */
  function defineHeight(){
    if($.cookie("ehl-forum") == null){
      $.cookie("ehl-forum", "1");
      $mapBlock.height($mapHeight[0]);
      openTooltip();
    }else if($.cookie("ehl-forum") == "1"){
      openTooltip();
      $mapBlock.height($mapHeight[0]);
    }else {
      $toggleButton.addClass('top');
      $mapBlock.height($mapHeight[1]);
    }
  }


  /**
   * Open the tooltip who's set
   */
  function openTooltip(){
    setTimeout(function(){ 
      $('#southkorea-marker').trigger('click');
    }, 700);
  };


  /**
   * Set slide up/down on map
   */
  function animationHeight(){
    $mapBlock.animate({height:$newHeight},700);
  }


  /**
   * Toggle button for opening/closing the map
   */
  function toggleButton(){
    if($.cookie("ehl-forum") == "1"){
      $toggleButton.toggle(function(){
        $newHeight = $mapHeight[1];
        animationHeight();
        $(this).addClass('top');
        $.cookie("ehl-forum", "0");
      },function(){
        $newHeight = $mapHeight[0];
        animationHeight();
        openTooltip();
        $(this).removeClass('top');
        $.cookie("ehl-forum", "1");
      });
    }else {
      $toggleButton.toggle(function(){
        $newHeight = $mapHeight[0];
        animationHeight();
        openTooltip();
        $(this).removeClass('top');
        $.cookie("ehl-forum", "1");
      },function(){
        $newHeight = $mapHeight[1];
        animationHeight();
        $(this).addClass('top');
        $.cookie("ehl-forum", "0");
      });
    }
  }

})(jQuery);
