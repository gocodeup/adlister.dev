(function(){
  "use strict";

/////////////////////////
//////// Gallery JS//////
////////////////////////

$(function(){
  // find all slides
  var slides = $('.main-slide');
  // starting index
  var i = 0;
  // click listener
  $('#main-slider-next').click(function(){
    // find next index
    // i + 1 or 0 if end of slides
    i = ++i % slides.length;
    // scroll to that index
    $('.slider-wrapper').animate(
      {'left' : -(slides.eq(i).position().left)},
      600
    );
  });
});
  /////////////////
  ///Testimonials
  ////////////////
(function(){
  
  $.fn.fitHeights = function() {
    
    var items = $(this);
    function setHeights() {
      
      var currentTallest = 0;
  
      items.css({ 'min-height' : currentTallest });  
      
      items.each(function(){
        
        if( $(this).height() > currentTallest ) { currentTallest = $(this).height(); }
      });
      items.css({ 'min-height' : currentTallest });
    
    }

    
    setHeights();
    $(window).on('resize', setHeights);
    return this;
  };
})(jQuery);
$(window).load(function(){
  /* $(groupOfItems).fitHeights(); */
  $('.grid-testimonials p').fitHeights();
});

})();
           