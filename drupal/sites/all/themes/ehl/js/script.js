(function ($) {

  var $mapHeight = [ 580, 155 ];

  var $mapBlock = $('.map');
  var $toggleButton = $("#toggle-button");
  var openMarker = $('.map .marker:first-child').attr('id');

  $(document).ready(function(){
    if($('.front').length) {
      craftMap();
      tooltipContent();
      defineHeight();
      toggleButton();
    }else if($('.page-projects').length) {
      projectPage();
    }
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
   * Define the marker tooltip's content
   */
  function tooltipContent(){
    var $firstPost = $('.view-live-feed .node-post:first-child').data('school');

    $('.marker').each( function() {
      var $markerSchool = $(this).data('school');
      var $markerField = $(this).children().find('.marker-tooltip .map-post-data');
      var $markerContainer = $(this).children().find('.marker-container');
      var $markerUrl = $(this).children().find('.marker-tooltip');
      if($firstPost === $markerSchool) {
        openMarker = $(this).attr('id');
      }
      $('.node-post').each( function() {
        var $postSchool = $(this).data('school');
        var $postAuthor = $(this).children().find('.author .username').html();
        var $postUrl = $(this).children().find('.icon-comment + a').attr('href');
        $postUrl = $postUrl.split('#');
        $postUrl = $postUrl[0];
        if( $markerSchool === $postSchool) {
          $markerField.html($postAuthor);
          $markerUrl.attr('href', $postUrl);
          return false;
        }
      });
    });

  };


  /**
   * Define the height of the map's wrapper
   */
  function defineHeight(){
    if($.cookie("ehl-forum") === null){
      $.cookie("ehl-forum", "1");
      $mapBlock.height($mapHeight[0]);
      openTooltip();
    }else if($.cookie("ehl-forum") === "1"){
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
      $('#' + openMarker).trigger('click');
    }, 700);
  };


  /**
   * Set slide up/down on map
   */
  function animationHeight(){
    $mapBlock.animate({height:newHeight},700);
  }


  /**
   * Toggle button for opening/closing the map
   */
  function toggleButton(){
    if($.cookie("ehl-forum") === "1"){
      $toggleButton.toggle(function(){
        newHeight = $mapHeight[1];
        animationHeight();
        $(this).addClass('top');
        $.cookie("ehl-forum", "0");
      },function(){
        newHeight = $mapHeight[0];
        animationHeight();
        openTooltip();
        $(this).removeClass('top');
        $.cookie("ehl-forum", "1");
      });
    }else {
      $toggleButton.toggle(function(){
        newHeight = $mapHeight[0];
        animationHeight();
        openTooltip();
        $(this).removeClass('top');
        $.cookie("ehl-forum", "1");
      },function(){
        newHeight = $mapHeight[1];
        animationHeight();
        $(this).addClass('top');
        $.cookie("ehl-forum", "0");
      });
    }
  }


  /**
  * Add class on all 4 item and change the select method
  */

  function projectPage(){

    //@TODO rethink that
    $(".page-projects .view-project-list .view-filters + .span3, .page-projects .view-project-list .span3:nth-child(4n+2)").addClass("no-margin");

    $('#edit-submit-project-list').hide();

    $('#edit-univeristy').change(function(){
      $(this).parents('form').submit();
    });
  }

})(jQuery);
