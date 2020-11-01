(function ($) {
  "use strict";
  
  jQuery(window).on('scroll', function() {
    if ($(this).scrollTop() > 45) {
      $('#navigation').addClass("sticky");
    } else {
      $('#navigation').removeClass("sticky");
    }
  });

})(jQuery);