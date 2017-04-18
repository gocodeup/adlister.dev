<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        // TODO: put routes here
        default:    // displays 404 if route not specified above
            $mainView = '../views/home.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());