<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    var_dump($request);
    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        // TODO: put routes here
        case ('/'):
            $mainView = '../views/home.php';
            break;
        case ('/create'):
            $mainView = '../views/ads/create.php';
            break;
        case ('/edit_ads'):
            $mainView = '../views/ads/edit.php';
            break;
        case ('/index'):
            $mainView = '../views/ads/index.php';
            break;
        case ('/show'):
            $mainView = '../views/ads/show.php';
            break;
        case ('/account'):
            $mainView = '../views/users/account.php';
            break;
        case ('/edit_users'):
            $mainView = '../views/users/edit.php';
            break;
        case ('/login'):
            $mainView = '../views/users/login.php';
            break;
        case ('/signup'):
            $mainView = '../views/users/signup.php';
            signUp($_POST);
            break;
        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());
