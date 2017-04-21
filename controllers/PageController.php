<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/Auth.php';
require_once __DIR__ . '/../models/Ad.php';
require_once __DIR__ . '/../models/Favorites.php';

function getLastPage($limit) {
    $count = Ad::count(); // to get the count
    $lastPage = ceil($count / $limit);
    return $lastPage;
}

function handleOutOfRangeRequests($page, $lastPage) {
    // protect from looking at negative pages, too high pages, and non-numeric pages
    if($page < 1 || !is_numeric($page)) {
        header("location: ?page=1");
        die;
    } else if($page > $lastPage) {
        header("location: ?page=$lastPage");
        die;
    }
}

function pageController()
{


    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        
        case '/':
            $data['ads'] = Ad::newest();
            // $data['favorites'] = Favorites::getFavorites(Auth::id());
            $mainView = '../views/home.php';
            break;

        case '/login': 
            $mainView = '../views/users/login.php';
            $data['message'] = "";

            if (Auth::check()) {
                    header("Location: /");
                    exit;
            }

            // login logic
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

            // Signup Logic
            $data['errors'] = [];

            if(!empty($_POST)) {
                $user = new User();

                try {
                    $user->name = Input::getString('name');
                } catch (Exception $e) {
                    $data['errors']['name'] = $e->getMessage();
                }
                try {
                    $user->email = Input::getString('email');
                } catch (Exception $e) {
                    $data['errors']['email'] = $e->getMessage();
                }
                try {
                    $user->username = Input::getString('username');
                } catch (Exception $e) {
                    $data['errors']['username'] = $e->getMessage();
                }

                try {
                    $user->password = Input::getString('password');
                } catch (Exception $e) {
                    $data['errors']['password'] = $e->getMessage();
                }
                if(Input::get('password') !== Input::get('passwordConfirm')) {
                    $data['errors']['passwordConfirm'] = "Password does not match.";
                }
                
                if(User::findByUsernameOrEmail($user->username) !== null) {
                    $data['errors']['username'] = "Username is already taken";
                }

                if(User::findByUsernameOrEmail($user->email) !== null) {
                    $data['errors']['email'] = "Email is already taken";
                }

                if(empty($data['errors'])) {
                    $user->save();
                    Auth::attempt($user->username, Input::get('password'));
                    header('Location: /');
                }
            }

            break;

        case '/account':
            $mainView = '../views/users/account.php';
            $user = User::find(Auth::id());
            $data['user'] = $user;
            break;

        case '/account/edit':
            $mainView = '../views/users/edit.php';
            if(!Auth::check()) {
                header('Location: /login');
                exit;
            }
            break;

        case '/ads':
            $limit = 6;
            $page = Input::get('page', 1);
            $lastPage = getLastPage($limit);
            handleOutOfRangeRequests($page, $lastPage);
            $data['adListings'] = Ad::paginate($page, $limit);
            $data['page'] = $page;
            $data['lastPage'] = $lastPage;
            $mainView = '../views/ads/index.php';
            break;

        case '/ads/show':
            $mainView = '../views/ads/show.php';
            $id = Input::get('id');
            $data['ad'] = Ad::find($id);
            break;

        case '/ads/create':
            $mainView = '../views/ads/create.php';
            if(!Auth::check()) {
                header('Location: /login');
                exit;
            }
            break;

        // user can edit posted ads. redirected if not logged in.
        case '/ads/edit?id={n}':
            $mainView = '../views/ads/edit.php';
            if(!Auth::check()) {
                header('Location: /login');
                exit;
            }   
            break;

        case '/ads/delete':
            $ad = Ad::find(Input::get('id'));
                if ($ad->user_id === Auth::id()){
                $ad->delete();
                header('Location: /ads');
                exit;
            } else {
                header('Location: /ads');
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