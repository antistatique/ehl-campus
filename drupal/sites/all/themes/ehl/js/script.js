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
      var $markerContainer = $(this).children().find('.marker-container');
      var $markerUrl = $(this).children().find('.marker-tooltip');
      var $markerTitle = $(this).children().find('.marker-tooltip h4');

      if($firstPost === $markerSchool) {
        openMarker = $(this).attr('id');
      }

      var $firstSchoolPost = $('.node-post[data-school="' + $markerSchool + '"]:first-child');
      if($firstSchoolPost.length) {

        var $postSchool = $firstSchoolPost.data('school');
        var $postSchoolId = $firstSchoolPost.data('school-nid');

        var $postAuthor = $firstSchoolPost.children().find('.author').html();
        $postAuthor = $postAuthor.replace("by ", "");

        var $postUrl = $firstSchoolPost.children().find('.icon-comment + a').attr('href');
        $postUrl = $postUrl.split('#');
        $postUrl = $postUrl[0];

        var $capSchool = $postSchool.charAt(0).toUpperCase() + $postSchool.slice(1);
        if($capSchool === 'Southkorea'){$capSchool = $capSchool.replace("hk", "h K");}

        if( $markerSchool === $postSchool) {
          $markerUrl.attr('href', $postUrl);
          $markerTitle.text('New Post');
          $markerContainer.html('' + $postAuthor + ' from <a href="/projects?univeristy=' + $postSchoolId + '">' + $capSchool + '</a> just posted a <a href="' + $postUrl + '">message</a>');
        }
      }
    });

  }


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
  }


  /**
   * Set slide up/down on map
   */
  function animationHeight(param){
    $mapBlock.animate({height:param},700);
  }


  /**
   * Toggle button for opening/closing the map
   */
  function toggleButton(){
    if($.cookie("ehl-forum") === "1"){
      $toggleButton.toggle(function(){
        var newHeight = $mapHeight[1];
        animationHeight(newHeight);
        $(this).addClass('top');
        $.cookie("ehl-forum", "0");
      },function(){
        var newHeight = $mapHeight[0];
        animationHeight(newHeight);
        openTooltip();
        $(this).removeClass('top');
        $.cookie("ehl-forum", "1");
      });
    }else {
      $toggleButton.toggle(function(){
        var newHeight = $mapHeight[0];
        animationHeight(newHeight);
        openTooltip();
        $(this).removeClass('top');
        $.cookie("ehl-forum", "1");
      },function(){
        var newHeight = $mapHeight[1];
        animationHeight(newHeight);
        $(this).addClass('top');
        $.cookie("ehl-forum", "0");
      });
    }
  }


  /**
  * Add class on all 4 item and change the select method
  */

  function projectPage(){

    // @TODO rethink that
    $(".page-projects .view-project-list .view-filters + .span3, .page-projects .view-project-list .span3:nth-child(4n+2)").addClass("no-margin");

    $('#edit-submit-project-list').hide();

    $('#edit-univeristy').change(function(){
      $(this).parents('form').submit();
    });
  }

})(jQuery);
