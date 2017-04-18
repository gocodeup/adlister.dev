<?php

require_once __DIR__ . '/../utils/helper_functions.php';
// // $id = "SELECT `id` FROM `users` WHERE `username` = '" $loggedInUsername . "'";

// // $postID = "SELECT p.post_id from posts p
// --             INNER JOIN users u ON u.id = p.post_userid
// --             WHERE `p.post_userid` = '" . $id;

function parseRequest($request)
{
    $matches = [];

    switch (preg_match('#(?i:(?<uri>^(?:\/\w+)*\/(?:ads|user)(?:\/edit)?))\/(?<id>\d+)\b#', $request, $matches)) {
        case '0':
            $matches['uri'] = $request;
            $matches['id'] = '';
            break;
        case '1':
            $matches['id'] = '?id=' . $matches['id'];
            break;
        case false:
            throw new Exception('Error processing request.');
            break;
    }

    $matches['uri'] .= substr($matches['uri'], -1) === '/' ? '' : '/';

    return $matches;
}

function pageController()
{
    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    extract(parseRequest($request));

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($uri) {
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
            $mainView = '../views/ads/edit.php';
            break;
        case '/user/':
            if (empty($id)) {
                $id = isset($_SESSION['logged_in_user_id']) ? $_SESSION['logged_in_user_id'] : '?id=0';
            }
            $mainView = '../views/users/account.php';
            break;
        case '/user/edit/':
            if (isset($_SESSION['logged_in_user_id'])) {
                $mainView = '../views/users/edit.php' .  $_SESSION['logged_in_user_id'];
            } else {
                $mainView = '';    // need to display "not logged in" page
            }
            break;
        case '/login/':
            if (!isset($_SESSION['logged_in_user_id'])) {
                $mainView = '../views/users/login.php';
            } else {
                header('adlister.dev');
            }
            break;
        case '/signup/':
            if (!isset($_SESSION['logged_in_user_id'])) {
                $mainView = '../views/users/signup.php';
            } else {
                header('adlister.dev');
            }
            break;
        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    $data['query'] = $id;

    return $data;
}

extract(pageController());