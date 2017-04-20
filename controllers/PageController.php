<?php

require_once '../utils/helper_functions.php';

function parseRequest($request)
{
    $parts = [];

    if (preg_match('#(?i:(?<uri>^.*(?:\/(?!\d*(?:\W*|\W{2,}.*)$)\w+)+\/?))\b(?<pageId>\d+\b)?#', $request, $parts) === false) {
            throw new Exception('Error processing request.');
    }

    if (!isset($parts['uri'])) {
        $parts['uri'] = $request;
    }

    if (!isset($parts['pageId'])) {
        $parts['pageId'] = NULL;
    }

    $parts['uri'] = preg_replace('#([^\/])$#', '$1/', $parts['uri']);

    $requestTest = preg_replace('#([^\/])$#', '$1/', $parts['uri'] . $parts['pageId']);

    if ($requestTest !== $request) {
        header("Location: $requestTest");
        die;
    }

    return $parts;
}

function pageController()
{
    // defines array to be returned and extracted for view
    $data = [];

    $data['requiredJS'] = [];

    $data['title'] = 'Adlister - ';

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    extract(parseRequest($request));

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($uri) {
        case '/':
            $mainView = '../views/home.php';
            $data['title'] .= 'Home';
            $data['requiredJS'][] = './js/responsiveCarousel.min.js';
            break;
        case '/ads/':
            if (isset($pageId)) {
                $mainView = '../views/ads/show.php';
            } else {
                $mainView = '../views/ads/index.php';
            }
            break;
        case '/ads/create/':
            $data['title'] .= 'Create Ad';
            $mainView = '../views/ads/create.php';
            break;
        case '/ads/edit/':
            $data['title'] .= 'Edit Ad';
            $mainView = '../views/ads/edit.php';
            break;
        case '/user/':
            $data['title'] .= 'User Profile';
            if (!isset($pageId)) {
                if (isset($_SESSION['LOGGED_IN_ID'])) {
                    header("Location: /user/{$_SESSION['LOGGED_IN_ID']}/");
                    die;
                } else {
                    // TODO: display "user not found" page
                    die;
                }
            }

            $data['title'] .= "- $pageId";

            $data['user'] = User::find($pageId);

            if (is_null($data['user'])) {
                // TODO: display "user not found" page
                break;
            }

            $mainView = '../views/users/account.php';

            break;
        case '/user/edit/':
            $data['title'] .= 'Edit Profile';
            if (!isset($_SESSION['LOGGED_IN_ID'])) {
                // TODO: display "not logged in" page
                die;
            }

            if (!isset($pageId)) {
                header("Location: /user/{$_SESSION['LOGGED_IN_ID']}/");
                die;
            }

            if ($_SESSION['LOGGED_IN_ID'] !== $pageId and $_SESSION['LOGGED_IN_ID'] !== 'ADMIN ID HERE') {
                // TODO: display "access denied" page
                die;
            }

            $data['title'] .= "- $pageId";

            $data['user'] = User::find($pageId);

            $mainView = '../views/users/edit.php';
        case '/login/':
            $data['title'] .= 'Log In';
            if (isset($_SESSION['LOGGED_IN_ID'])) {
                header('Location: /');
                die;
            }

            $mainView = '../views/users/login.php';
            $username = Input::get('username');
            $password = Input::get('password');
            
            if (!empty($_POST) and Auth::attempt($username, $password)) {
                header('Location: /');
                die;
            }

            break;
        case '/signup/':
            $data['title'] .= 'Sign Up';
            if (isset($_SESSION['LOGGED_IN_ID'])) {
                header('Location: /');
                die;
            }

            $newUser = new User();
            $newUser->name = Input::get('name');
            $newUser->email = Input::get('email');
            $newUser->username = Input::get('username');
            $newUser->password = Input::get('password');

            if ($newUser->save()) {
                unset($_SESSION['ERROR_MESSAGES']);
                header('Location: /login/');    // TODO: change this to a page displaying a simple message that the account was created successfully
                die;
            }

            $mainView = '../views/users/signup.php';

            $data['requiredJS'][] = './js/signup_js.php';

            break;
        default:    // displays 404 if route not specified above
            $data['title'] .= 'Not Found';
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;

    return $data;
}

extract(pageController());