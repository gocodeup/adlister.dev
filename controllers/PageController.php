<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/Input.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Ad.php';

function pageController()
{
    // defines array to be returned and extracted for view
    $data = [];
    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?'); //this checks for a query string
    // if a ? (query string) was found, cuts off to get variables if not just gives full url
    if ($get_pos !== false)
    {   
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos); //sets request = to query string
    }
    else
    {
        $request = $_SERVER['REQUEST_URI'];
    }


    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':
            $data['ads'] = callAllAds();
            $main_view = '../views/home.php';
            break;
        case '/ads/create':
            $data = createAd();
            $main_view = '../views/ads/create.php';
            break;
        case '/ads/edit':
            $main_view = '../views/ads/edit.php';
            break;
        case '/ads/index':
            $data['ads'] = callAllAds();
            $main_view = '../views/ads/index.php';
            break;
        case '/ads/show':
            $main_view = '../views/ads/show.php';
            break;
        case '/users/account':
            $main_view = '../views/users/account.php';
            $data['user'] = Auth::user();
            break;
        case '/users/edit':
            $main_view = '../views/users/edit.php';
            break;
        case '/users/login':
            $main_view = '../views/users/login.php';
            loginUserWithInputIfExists();
            break;
        case '/users/signup':
            $data = newUser();  
            $main_view = '../views/users/signup.php';
            break;
        case '/users/logout':
            $main_view = '../views/users/logout.php';
        break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    

    

   
    $data['main_view'] = $main_view;
    return $data;
}

extract(pageController());