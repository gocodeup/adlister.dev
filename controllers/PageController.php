<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // // switch that will run functions and setup variables dependent on what route was accessed

    switch ($request) {
    // TODO: put routes here

        case '/':
            if (!empty($_GET['search'])) {
                header("Location: /results?search=". $_GET['search']);
            }
            $mainView = '../views/home.php';
            break;

        case '/users/edit':
            $mainView = '../views/users/edit.php';
            break;

            case '/users/account':
                if (!empty($_GET['search'])) {
                    header("Location: /results?search=". $_GET['search']);
                }
                if (isset($_SESSION['IS_LOGGED_IN'])) {
                    $mainView = '../views/users/account.php';

                } else {
                    $mainView = '../views/home.php';
                }
                if (!empty($_POST['deleteListing'])) {
                    Ads::deleteAd($_POST['deleteListing']);
                    header("Location: /users/account");
                }
                break;

            case '/results':
                $mainView = '../views/ads/index.php';
                break;

            case '/login':
                if (!empty($_GET['search'])) {
                    header("Location: /results?search=". $_GET['search']);
                }
                $mainView = '../views/users/login.php';
                $data['message'] = '';
                if(
                    !empty($_POST['username']) &&
                    !empty($_POST['password']) &&
                    empty($_POST['username']) &&
                    empty($_POST['name']) 	&&
                    empty($_POST['email']) 	&&
                    empty($_POST['password']) &&
                    !empty(User::findByUsernameOrEmail($_POST['username'])) &&
                    password_verify($_POST['password'], User::findByUsernameOrEmail($_POST['username'])->password)
                    ) {
                    $usernameOrEmail = Input::get('username');
                    $password = Input::get('password');
                    Auth::attempt($usernameOrEmail, $password);
                    $_SESSION['IS_LOGGED_IN'] = $usernameOrEmail;
                    var_dump(User::findByUsernameOrEmail($usernameOrEmail));
                    // header("Location: /users/account");

                } elseif (!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] === $_POST['password'] && empty($_POST['username']) && empty($_POST['password'])) {
                    $_SESSION['IS_LOGGED_IN'] = $_POST['username'];
                    User::insertUser();
                    $usernameOrEmail = $_POST['username'];
                    $password = $_POST['password'];
                    Auth::attempt($usernameOrEmail, $password);
                    header("Location: /users/account");

                } else if (
                    (!empty($_POST['username']) ||
                    !empty($_POST['password'])) &&
                    (empty(User::findByUsernameOrEmail($_POST['username'])) ||
                    !password_verify($_POST['password'], User::findByUsernameOrEmail($_POST['username'])->password))
                    ) {
                    $data['message'] = "Invalid username or password.";
                }
                break;

            case '/create':
                if (!empty($_GET['search'])) {
                    header("Location: /results?search=". $_GET['search']);
                }
                $mainView = '../views/ads/create.php';

                if (!empty($_POST['category'])
                    && !empty($_POST['product_name'])
                    && !empty($_POST['price'])
                    && !empty($_POST['description'])
                    && !empty($_POST['sub_category'])
                    && !empty($_POST['username'])
                    && !empty($_POST['availability_status'])
                    && !empty($_POST['pick_up_location'])
                    && !empty($_POST['location_city'])
                    && !empty($_POST['location_state'])
                    && !empty($_POST['contact_info'])) {
                        Ads::insertAd();
                        header("Location: /users/account");
                }
                break;

            case '/edit':
                $mainView = '../views/ads/edit.php';
                break;

            case '/logout':
                Auth::logout();
                header("Location: /");
                break;

            default:    // displays 404 if route not specified above
                $mainView = '../views/404.php';
                break;
        }

    $data['mainView'] = $mainView;
    return $data;
}

    extract(pageController());
