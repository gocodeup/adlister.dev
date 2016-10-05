<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];

    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':
            $main_view = __DIR__.'/../views/home.php';
            break;

    //ads pages
        case '/ads':
            $main_view = __DIR__.'/../views/ads/index.php';
            break;
        case '/ads/create':
            $main_view = __DIR__.'/../views/ads/create.php';
            break;
        case '/ads/show':
            $main_view = __DIR__.'/../views/ads/show.php';
            break;
        case '/ads/edit':
            $main_view = __DIR__.'/../views/ads/edit.php';
            break;

    //users pages
        case '/login':
            $main_view = __DIR__.'/../views/users/login.php';
            break;
        case '/signup':
            $main_view = __DIR__.'/../views/users/signup.php';
            break;
        case 'users/account':
            $main_view = __DIR__.'/../views/users/account.php';
            break;
        case 'users/account/update':
            $main_view = __DIR__.'/../views/users/edit.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = __DIR__.'/../views/404.php';
            break;

    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());