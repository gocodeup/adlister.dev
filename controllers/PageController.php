<?php

require_once __DIR__ . '/../utils/helper_functions.php';
// // $id = "SELECT `id` FROM `users` WHERE `username` = '" $loggedInUsername . "'";

// // $postID = "SELECT p.post_id from posts p
// --             INNER JOIN users u ON u.id = p.post_userid
// --             WHERE `p.post_userid` = '" . $id;

function pageController()
{
    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $adId = 'potato';
    $userId = 'hippopotomonstrosesquippedaliophobia';

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':
            $mainView = '../views/home.php';
            break;
        case '/ads/':
            $mainView = '../views/ads/index.php';
            break;
        case '/ads/create/':
            $mainView = '../views/ads/create.php';
            break;
        case '/ads/edit/':
            $mainView = '../views/ads/edit.php'; // TODO: set up to work with query string
            break;
        case '/ads/show/':
            $mainView = '../views/ads/show.php'; // TODO: set up to work with query string
            break;
        case '/user/':
            $mainView = '../views/users/account.php'; // TODO: set up to work with query string
            break;
        case '/user/edit/':
            $mainView = '../views/users/edit.php'; // TODO: set up to work with query string
            break;
        case '/login/':
            $mainView = '../views/users/login.php';
            break;
        case '/signup/':
            $mainView = '../views/users/signup.php';
            break;
        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());