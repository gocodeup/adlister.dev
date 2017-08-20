<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function addNewUser()
{
    if(Input::get('name')!="" && Input::get('password')!="" && Input::get('email')!="" && Input::get('username')!=""){

        if((User::findByUsernameOrEmail(Input::get('username'))== null ) && (User::findByUsernameOrEmail(Input::get('email'))==null)){
            $user = new User();
            $user->name = Input::get('name');
            $user->password = Input::get('password');
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            
            $user->save();
            // die();
            header("Location:/Users/Login");
        } else {
            echo "Username or email exists!!";
        }
    }
}


//work on adding new add function
function addNewAd()
{
    if(Input::get('title')!="" && Input::get('description')!="" && Input::get('img')!="" && Input::get('categories')!=""){

        if(Ad::findByTitle(Input::get('title'))== null){
            $ad = new Ad();
            $ad->title = Input::get('title');
            $ad->description = Input::get('description');
            $ad->img = Input::get('img');
            $ad->categories = Input::get('categories');
            $ad->username = $_SESSION['IS_LOGGED_IN'];
            $ad->date_create = date("Y-m-d H-i-s");
            $ad->save();
            // die();
            header("Location:/Ads/Show");
        } else {
            echo "Title for ad already exists!!";
        }
    }
}

function pageController()
{
    $allUsers = User::all();
    $allAds = Ad::all();
    $allUsersAds = User::usersAds();

    var_dump($allUsersAds);


    addNewUser();
    addNewAd();
    
    if(Auth::attempt(Input::get('email_user'), Input::get('password'))){
        $sessionId = session_id();
        var_dump($_SESSION);
        // var_dump($sessionId);
    };

    if(Input::has('logout')){
        Auth::logout();
        var_dump($_SESSION);
    };

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    //defining all users and ads in db

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