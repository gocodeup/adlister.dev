<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case "/":
            $main_view= '../views/home.php';
            break;
        case "/login":
            $main_view= '../views/users/login.php';
            break;
        //not done
        case "/signup":
            $main_view= '../views/users/signup.php';
            break;
        case "/signup":
            $main_view= '../views/users/signup.php';
            break;
        case "/signup":
            $main_view= '../views/users/signup.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());