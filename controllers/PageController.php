<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // get the part of the request after the domain name
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/' :
            $mainView = '../views/home.php';
            break;
        case '/create' :
            $mainView = '../views/ads/create.php';
            break;
        case '/edit' :
            $mainView = '../views/ads/edit.php';
            break;
        case '/show' :
            $mainView = '../views/ads/show.php';
            break;
        case '/items' :
            $mainView = '../views/ads/index.php';
            $data['page'] = 1;

            if (Input::has("page")) {
                $data['page'] = Input::get("page");
            }else{
                $data['page'] = 1;
            }

            $ads = new Ads();
            //Outputs Results 
            $data['results'] = ($ads::paginate($data['page']));
            //Total Count of avaliable records
            $data['totalResults'] = ($ads::count());

            //Calculate total # of pages
            $data['total'] = $ads::count();
            $data['pages'] = ceil($data['total'] / 10);

            //Prevents overflow of pages
            if ($data['page'] >= $data['pages']) {
                $data['page'] = $data['pages'];
            }

            var_dump($data['results']);


            break;
        case '/account' :
            $mainView = '../views/users/account.php';
            break;
        case '/edit-user' :
            $mainView = '../views/users/edit.php';
            break;
        case '/login' :
            $mainView = '../views/users/login.php';
            break;
        case '/signup' :
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
