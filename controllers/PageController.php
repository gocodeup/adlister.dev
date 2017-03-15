<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {


        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());