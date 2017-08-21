<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');
    if ($get_pos !== false)
    {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {
        $request = $_SERVER['REQUEST_URI'];
    }
      // get the part of the request after the domain name
    // $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        // TODO: put routes here
        case '/':   
            $data['items'] = Item::featured();
            $main_view = '../views/home.php';
            break;
        case '/login':
            redirectIfLoggedIn();
            processLoginInputIfExists();
            $main_view = '../views/users/login.php';
            break;
        case '/signup': 
            processSignupInputIfExisits();
            $main_view = '../views/users/signup.php';
            break;
        case '/users/account': 
            redirectIfNotLoggedIn();
            checkIfUserIdGiven();
            $data['user'] = User::find(Input::get('id'));
            $data['items'] = $data['user']->items();
            $main_view = '../views/users/account.php';
            break;
        case '/users/account/edit': 
            redirectIfNotLoggedIn();
            checkIfUserIdGiven();
            processAccountEditInputIfExisits();
            $data['user'] = User::find(Input::get('id'));
            $main_view = '../views/users/edit.php';
            break;
        case '/logout': 
            runLogout();
            break;
        case '/items':  
            $data['items'] = Item::all();
            $main_view = '../views/items/index.php';
            break;
        case '/items/create':  
            redirectIfNotLoggedIn();
            processNewItemInputIfExists();
            $main_view = '../views/items/create.php';
            break;
        case '/items/edit':     
            redirectIfNotLoggedIn();
            updateItemWithInputIfExists();
            $data['item'] = Item::find(Input::get('id'));
            $main_view = '../views/items/edit.php';
            break;
        case '/items/show':     
            $data['item'] = Item::find(Input::get('id'));
            $main_view = '../views/items/show.php';
            break;
        case '/items/delete':   
            redirectIfNotLoggedIn();
            processDeleteOfItem();
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());