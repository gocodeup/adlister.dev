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
            break;
        case '/ads/':
            if (isset($pageId)) {
                $mainView = '../views/ads/show.php';
            } else {
                $mainView = '../views/ads/index.php';
            }
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

            if (isset($_POST['login']) and !empty($_POST) and Auth::attempt($username, $password)) {
                header('Location: /');
                die;
            }
            break;
        case '/logout/':
            $data['title'] .= 'Log Out';
            $mainView = '../views/users/logout.php';
            header("Location: /login/");
            break;
        case '/signup/':
            $data['title'] .= 'Sign Up';
            if (isset($_SESSION['LOGGED_IN_ID'])) {
                header('Location: /');
                die;
            }

            if(!empty($_POST)) {
                $user = new User();
                $errors = [];
                try {
                    $user->name = Input::getString('name');
                } catch (Exception $e) {
                    $errors['name'] = $e->getMessage();
                }
                try {
                    $user->email = Input::getString('email');
                    $emailFound = User::findByUsernameOrEmail($user->email);
                    if($emailFound) {
                        throw new Exception("That email is already in use.");
                    }
                } catch (Exception $e) {
                    $errors['email'] = $e->getMessage();
                }
                try {
                    $user->username = Input::getString('username');
                    $usernameFound = User::findByUsernameOrEmail($user->username);
                    if($usernameFound) {
                        throw new Exception("That username is already in use.");
                    }
                } catch (Exception $e) {
                    $errors['username'] = $e->getMessage();
                }
                try {
                    $user->password = Input::getString('password');
                } catch (Exception $e) {
                    $errors['password'] = $e->getMessage();
                }
                foreach($_REQUEST as $key => $value) {
                    if(($value === "" || $value == null) && $key != 'submit') {
                        $errors[$key] = "Please fill in your " . str_replace('_', ' ', $key);
                    }
                }
                $_SESSION['signup_errors'] = $errors;
                if(empty($_SESSION['signup_errors']))
                {
                    $user->insert();
                    echo "Inserted!";
                }
            }

            $mainView = '../views/users/signup.php';
            // $data['requiredJS'][] = './js/signup_js.php';
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