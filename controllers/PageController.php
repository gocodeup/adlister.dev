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
            $ads = new Ads();
            //Outputs Most Recent three results
            $data['results'] = ($ads::latest());
            break;

        case '/create' :
            $mainView = '../views/ads/create.php';
            break;

        case '/edit' :
            $mainView = '../views/ads/edit.php';
            break;

        case '/show' :
            $mainView = '../views/ads/show.php';
            //need to output: info on the topic, choose by id from database,
            if (Input::has("id")){
                $data['id'] = Input::get("id");
            }

            $ads = new Ads();
            //Grab specific Ad by ID
            $data["results"] = $ads::find($data['id']);
            break;

        case '/items' :
            $mainView = '../views/ads/index.php';
            $data['page'] = 1;
            $data['cat'] = "";

            if (Input::has("cat")){
                $value = Input::get("cat");
                $data['cat'] = " WHERE category = '$value'";

            }

            if (Input::has("page")) {
                $data['page'] = Input::get("page");
            }else{
                $data['page'] = 1;
            }

            $ads = new Ads();
            //Outputs Results 
            $data['results'] = ($ads::paginate($data['page'], $data['cat']));
            //Total Count of avaliable records
            $data['totalResults'] = ($ads::count());

            //Calculate total # of pages
            $data['total'] = $ads::count();
            $data['pages'] = ceil($data['total'] / 10);

            //Prevents overflow of pages
            if ($data['page'] >= $data['pages']) {
                $data['page'] = $data['pages'];
            }
            break;

        case '/account' :
            $mainView = '../views/users/account.php';
            break;

        case '/edit-user' :
            $mainView = '../views/users/edit.php';
            break;

        case '/login' :
            $mainView = '../views/users/login.php';
            $user = new User;

            if(Input::has("email_user")) {
                $attempt = $user::attempt(Input::get("email_user"), Input::get("password"));

                if($attempt === true) {
                    echo("YAY");
                }else{
                    echo("NOOO");
                }
                if($user::check()){
                    header("Location: http://adlister.dev"); 
                    die();
                }
            }
            break;

        case '/signup' :
            $mainView = '../views/users/signup.php';
            break;

        case '/logout' :
            $user = new User;
            $user::logout();
            header("Location: http://adlister.dev/");


            break;

        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;


    return $data;
}

extract(pageController());
