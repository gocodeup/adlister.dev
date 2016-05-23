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

    // switch that will run funcitons and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':   // home route, displayes 3 most recent items
            $data['items'] = Item::featured();
            $main_view = '../views/home.php';
            break;
        case '/login':  // GET: show login form / POST: handle login form submission
            redirectIfLoggedIn();
            processLoginInputIfExists();
            $main_view = '../views/users/login.php';
            break;
        case '/signup': // GET: show signup form / POST: create new user with submission info
            processSignupInputIfExisits();
            $main_view = '../views/users/signup.php';
            break;
        case '/users/account':  // user profile page
            redirectIfNotLoggedIn();
            checkIfUserIdGiven();
            $data['user'] = User::find(Input::get('id'));
            $data['items'] = $data['user']->items();
            $main_view = '../views/users/account.php';
            break;
        case '/users/account/edit': // GET: edit account form / POST: update account with submission info
            redirectIfNotLoggedIn();
            checkIfUserIdGiven();
            processAccountEditInputIfExisits();
            $data['user'] = User::find(Input::get('id'));
            $main_view = '../views/users/edit.php';
            break;
        case '/logout': // logs out user and redirects
            runLogout();
            break;
        case '/items':  // lists all items currently in DB
            $data['items'] = Item::all();
            $main_view = '../views/items/index.php';
            break;
        case '/items/create':   // GET: show item create form / POST: create new item with submission info
            redirectIfNotLoggedIn();
            processNewItemInputIfExists();
            $main_view = '../views/items/create.php';
            break;
        case '/items/edit':     // GET: show item edit form / POST: update item with submission info
            redirectIfNotLoggedIn();
            updateItemWithInputIfExists();
            $data['item'] = Item::find(Input::get('id'));
            $main_view = '../views/items/edit.php';
            break;
        case '/items/show':     // shows full information for specified item
            $data['item'] = Item::find(Input::get('id'));
            $main_view = '../views/items/show.php';
            break;
        case '/items/delete':   // deletes item if owned by logged in user and redirects
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