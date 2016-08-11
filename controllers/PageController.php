<?php

require_once __DIR__ . '/../utils/helper_functions.php';

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
            $main_view = '../views/home.php';
            break;
        case '/ads/create.php':
            $main_view = '../views/ads/create.php';
            break;
        case '/ads/edit.php':
            $main_view = '../views/ads/edit.php';
            break;
        case '/ads/index.php':
            $main_view = '../views/ads/index.php';
            break;
        case '/ads/show.php':
            $main_view = '../views/ads/show.php';
            break;
        case '/users/account.php':
            $main_view = '../views/users/account.php';
            break;
        case '/users/edit.php':
            $main_view = '../views/users/edit.php';
            break;
        case '/users/login.php':
            $main_view = '../views/users/login.php';
            break;
        case '/users/signup.php':
            $main_view = '../views/users/signup.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }
    $data['main_view'] = $main_view;
    return $data;
}

extract(pageController());