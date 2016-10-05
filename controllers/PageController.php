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
    // var_dump($request); 
    // check request for url link.

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {

        case '/':
            $main_view = '../views/home.php';
            break;
        case '/items':
            $main_view = '../views/itemsPage.php';
            break;
        case '/show':
            $main_view = '../views/show.php';
            break;
        case '/userAccount':
            $main_view = '../views/userAccount.php';
            break;
        case '/signUp':
            $main_view = '../views/signUp.php';
            break;
        case '/login':
            $main_view = '../views/login.php';
            break;
        case '/createAd':
            $main_view = '../views/createAd.php';
            break;
        case '/editItem':
            $main_view = '../views/editItem.php';
            break;

        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());