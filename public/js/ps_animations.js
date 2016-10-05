"use strict";

    function animationInClick(clicker, element, animation){
        clicker = $(clicker)
        element = $(element);
        clicker.click(
            function() {
                element.addClass('animated ' + animation);        
                element.css('opacity', '1');
                window.setTimeout(function(){
                    element.removeClass('animated ' + animation);
                }, 1400);         
            });
    }

    function animationOutClick(clicker, element, animation){
        clicker = $(clicker)
        element = $(element);
        clicker.click(
            function() {
                element.addClass('animated ' + animation);        
                window.setTimeout(function(){
                    element.css('opacity', '0');
                    // element.css('display', 'none');
                    element.removeClass('animated ' + animation);
                }, 1400);         
            });
    }

    $('.showLogIn').click(function() {
        $('.logInParent').css('display', 'block');
        $('.logInParent').animate({
            opacity: '1',
            width: '300px'
        }, 600);
        setTimeout(function() {
            $('.logInExit').animate({
                opacity: '1'
            }, 400);  
        }, 600);
    });

    $('.logInExit').click(function() {
        $('.logInParent').animate({
            opacity: '0',
            width: '200px'
        }, 600);
        $('.logInExit').animate({
            opacity: '0'
        }, 300);
        setTimeout(function() {
            $('.logInParent').css('display', 'none');
        }, 600);
    });

    animationInClick('.in', '.main', 'flipInX');
    animationOutClick('.out', '.main', 'flipOutX');
    animationInClick('.signUpShow', '.signUp', 'flipInX');
    animationOutClick('.signUpShow', '.logIn', 'flipOutX');
    animationInClick('.logInShow', '.logIn', 'flipInX');
    animationOutClick('.logInShow', '.SignUp', 'flipOutX');
