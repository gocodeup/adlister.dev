<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function parseRequest($request)
{
    $matches = [];

    switch (preg_match('#(?i:(?<uri>^.*(?:\/(?!\d*(?:\W*|\W{2,}.*)$)\w+)+\/?))(?:\b(?<id>\d+)\b)?#', $request, $matches)) {
        case '0':
            $matches['uri'] = $request;
        case '1':
            $matches['id'] = isset($matches['id']) ? '?id=' . $matches['id'] : '';
            break;
        case false:
            throw new Exception('Error processing request.');
            break;
    }

    $matches['uri'] = preg_replace('#([^\/])$#', '$1/', $matches['uri']);

    $requestTest = preg_replace('#([^\/])$#', '$1/', $matches['uri'] . $matches['id']);

    if ($requestTest !== $request) {
        header("Location: $requestTest");
    }

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
            if(isset($_POST['submit_ad'])) {
                $post = new Post();
                $post->user_id = Auth::id();
                $errors = [];
                try {
                    $post->category = Input::getString('category');
                } catch (Exception $e) {
                    $errors['category'] = $e->getMessage();
                }
                try {
                    $post->product_name = Input::getString('product_name');
                } catch (Exception $e) {
                    $errors['product_name'] = $e->getMessage();
                }
                try {
                    $post->description = Input::getString('description');
                } catch (Exception $e) {
                    $errors['description'] = $e->getMessage();
                }
                try {
                    $post->price = Input::getNumber('price');
                } catch (Exception $e) {
                    $errors['price'] = $e->getMessage();
                }
                try {
                    $post->phone = Input::getString('phone');
                } catch (Exception $e) {
                    $errors['phone'] = $e->getMessage();
                }
                try {
                    $post->email = Input::getString('email');
                } catch (Exception $e) {
                    $errors['email'] = $e->getMessage();
                }
                $_SESSION['errors'] = $errors;
                if(empty($_SESSION['errors'])) {
                    $post->save();
                }
            }
            $mainView = '../views/ads/create.php';
            break;
        case '/ads/edit/':
            $mainView = '../views/ads/edit.php';
            break;
        case '/user':
            header('Location: /user/');
            break;
        case '/user/':
            if (empty($id)) {
                $id = isset($_SESSION['logged_in_user_id']) ? $_SESSION['logged_in_user_id'] : '?id=0';
            }
            $mainView = '../views/users/account.php';
            break;
        case '/user/edit':
            if (isset($_SESSION['logged_in_user_id'])) {
                $mainView = '../views/users/edit.php' .  $_SESSION['logged_in_user_id'];
            } else {
                $mainView = '';    // need to display "not logged in" page
            }
            break;
        case '/login':
            if (!isset($_SESSION['logged_in_user_id'])) {
                $mainView = '../views/users/login.php';
            } else {
                header('adlister.dev');
            }
            break;
        case '/signup':
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