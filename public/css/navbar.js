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