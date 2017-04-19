<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once '../models/Ads.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
		case "/": $mainView = '../views/home.php';
		break;
		case "/index": $mainView = '../views/home.php';
		break;
        case "/items": $data['adListings'] = Ads::all();
            $mainView = '../views/partials/items.php';
            break;
		case "/login": $mainView = '../views/users/login.php';
        break;
		case "/signup": $mainView = '../views/users/signup.php';
        break;
        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;
    return $data;
}

extract(pageController());
