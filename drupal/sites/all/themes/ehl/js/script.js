
(function ($) {
  var $newsWrapper = $('.page-news .item-list ul');

  // Masonry for the news page *************************************************
  $newsWrapper.masonry({
    itemSelector : 'li'
  });

  // Homepage slider  **********************************************************
  var $slidesHomepage = $("#block-views-homepage-news-block-1");

  $slidesHomepage.scrollable({
    keyboard: true,
    circular: true,
    speed: 450
  }).navigator(".navi");

})(jQuery);
