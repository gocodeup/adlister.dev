<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/youtube-autoresizer.js"></script>
<script src="/js/form-validation.min.js"></script>
<script src="https://static.filestackapi.com/v3/filestack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#delete-item').on('click', function(e) {
			e.preventDefault();
			$('#delete-item-form').submit();
		});
		setTimeout(function() {
			$('.alert').slideUp(1500);
		}, 5000);
	})

/////////////////////////////////////////////////////////////////////////////////
//////////.                     Navigation Bar                   ///////////////
/////////////////////////////////////////////////////////////////////////////////
/*Mobile Responsive Nav Bar */ -->
(function(){
  "use strict";
  /* Toggle between adding and removing the "responsive" class to main menu when mobile menu icon is clicked */
    function responsiveMenu() {
    var x = document.getElementById("desktopMenu");
    if (x.className === "desktop-menu") {
      x.className += " responsive";
    } else {
      x.className = "desktop-menu";
    }
  }

  /* Toggle between adding and removing the "caretDropdown" class to mobile menu links when caret link are clicked */
  function caretDropdownOne() {
    var caretDropdown1 = document.getElementById("caretDropdownOne");
    if (caretDropdown1.className === "dropdown-menu") {
      caretDropdown1.className += " caretDropdown";
    } else {
      caretDropdown1.className = "dropdown-menu";
    }
  }

  function caretDropdownTwo() {
    var caretDropdown2 = document.getElementById("caretDropdownTwo");
    if (caretDropdown2.className === "dropdown-menu") {
      caretDropdown2.className += " caretDropdown";
    } else {
      caretDropdown2.className = "dropdown-menu";
    }
  }

  function caretDropdownThree() {
    var caretDropdown3 = document.getElementById("caretDropdownThree");
    if (caretDropdown3.className === "dropdown-menu") {
      caretDropdown3.className += " caretDropdown";
    } else {
      caretDropdown3.className = "dropdown-menu";
    }
  }

  function caretDropdownFour() {
    var caretDropdown4 = document.getElementById("caretDropdownFour");
    if (caretDropdown4.className === "dropdown-menu") {
      caretDropdown4.className += " caretDropdown";
    } else {
      caretDropdown4.className = "dropdown-menu";
    }
  }

  function caretDropdownFive() {
    var caretDropdown5 = document.getElementById("caretDropdownFive");
    if (caretDropdown5.className === "dropdown-menu") {
      caretDropdown5.className += " caretDropdown";
    } else {
      caretDropdown5.className = "dropdown-menu";
    }
  }
})();

/////////////////////////////////////////////////////////////////////////////////
///////////////////////////.   Home Page.  /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

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

/////////////////////////////////////////////////////////////////////////////////
                             //Filestack API//
/////////////////////////////////////////////////////////////////////////////////




<script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('AvR20ato7SFq4hVXmJvnuz');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded))
        });
    }



