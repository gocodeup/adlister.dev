<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/Auth.php';

function pageController()
{


    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        
        case '/':
            $mainView = '../views/home.php';
            break;

        case '/login': 
            $mainView = '../views/users/login.php';
            $data['message'] = "";
<<<<<<< HEAD
<<<<<<< HEAD
            
            if(!empty($_POST)) {
                if (Input::has('email_user') && Input::has('password')) {
                    Auth::attempt(Input::get('email_user'), Input::get('password'));
                    $data['message'] = "Either username/email or password were incorrect";
                } else if (Auth::check()) {
                    header("Location: /account");
=======
=======
            
>>>>>>> edf96c20b6e6caf7d28f123674b1381a622769f2
            if (Auth::check()) {
                    header("Location: /");
>>>>>>> a1977dc13cf6307a611ff7a5d0aaec41b50e9cfd
                    exit;
            }

            if(!empty($_POST)) {
                if (Auth::attempt(Input::get('email_user'), Input::get('password'))){
                    header("Location: /account");
                } else {
                    $data['message'] = "Either username/email or password were incorrect";
                }
            }
            break;

        case '/logout':
            $mainView = '/';
            Auth::logout();
            break;

        case '/signup':
            $mainView = '../views/users/signup.php';
            break;

        case '/account':
            $mainView = '../views/users/account.php';
            break;

        case '/account/edit':
            $mainView = '../views/users/edit.php';
            if(!Auth::check()) {
                header('Location: /login');
                exit;
            }
            break;

        case '/ads':
            $mainView = '../views/ads/index.php';
            break;

        case '/ads?id={n}':
            $mainView = '../views/ads/show.php';
            break;

        case '/ads/create':
            $mainView = '../views/ads/create.php';
            if(!Auth::check()) {
                header('Location: /login');
                exit;
            }
            break;

        case '/ads/edit?id={n}':
            $mainView = '../views/ads/edit.php';
            if(!Auth::check()) {
                header('Location: /login');
                exit;
            }   
            break;

        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());