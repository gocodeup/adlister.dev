<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    $allAds = Ad::all();

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':
            $mainView = '../views/home.php';
        break;
        case '/Users':
            $mainView = '../views/users/account.php';
        break;
        case '/Users/Login':
            $mainView = '../views/users/login.php';
        break;
        case '/Users/Signup':
            $mainView = '../views/users/signup.php';
        break;
        case '/Users/Edit':
            $mainView = '../views/users/edit.php';
        break;
        case '/Ads':
            $mainView = '../views/ads/index.php';
        break;
        case '/Ads/Create':
            $mainView = '../views/ads/create.php';
        break;
        case '/Ads/Edit':
            $mainView = '../views/ads/edit.php';
        break;
        case '/Ads/Show':
            $mainView = '../views/ads/show.php';
        break;
        // TODO: put routes here
        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;
    $data['allAds'] = $allAds;

    return $data;
}

extract(pageController());