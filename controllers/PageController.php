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
            $main_view = '../views/home.php';
            break;
        case '/ads/create':
            $main_view = '../views/ads/create.php';
            break;
        case '/ads/edit':
            $main_view = '../views/ads/edit.php';
            break;
        case '/ads/index':
            $main_view = '../views/ads/index.php';
            break;
        case '/ads/show':
            $main_view = '../views/ads/show.php';
            break;
        case '/users/account':
            $main_view = '../views/users/account.php';
            break;
        case '/users/edit':
            $main_view = '../views/users/edit.php';
            break;
        case '/users/login':
            $main_view = '../views/users/login.php';
            break;
        case '/users/signup':
            $main_view = '../views/users/signup.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    function newUser(){
        $user = new User();
        $user->name = Input::get('name');
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $data['user->name'] = $user->name;
        $data['user->username'] = $user->username;
        $data['user->email'] = $user->email;
    }

    $data['ads'] = Ad::all();
    // var_dump($data);


    $data['main_view'] = $main_view;
    return $data;
}

extract(pageController());