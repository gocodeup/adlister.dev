<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../models/Ads.php';

function pageController()
{

	// defines array to be returned and extracted for view
	$data = [];

	// get the part of the request after the domain name
	$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	// switch that will run functions and setup variables dependent on what route was accessed
	switch ($request) {
		case "/": 
			$data['selectThree'] = Ads::selectThree();
			$mainView = '../views/home.php';
			break;
		case "/index": 
			$data['selectThree'] = Ads::selectThree();
			$mainView = '../views/home.php';
			break;
		case "/items": 
			$data['adListings'] = Ads::all();
			foreach($data['adListings'] as $ad) {
				// var_dump($ad->image);
			}
			$mainView = '../views/ads/items.php';
			break;
		case "/login": 
			if(!empty($_POST)) {
				if(Auth::attempt(input::get('email_user'), input::get('password')) == true) {
					header("location: /index");
					die();
				} 
			}
			$mainView = '../views/users/login.php';
			break;
		case "/signup": 
			Ads::signUp();
			$mainView = '../views/users/signup.php';
			break;
		case "/account": 
			$user = User::find(Auth::id());
			$data['adListings'] = Ads::userPosts($user->id);
			$mainView = '../views/users/account.php';
			break;
		case "/search": 
			$data['adListings'] = Ads::search($_GET['search']);
			$mainView = '../views/ads/items.php';
			break;
		case "/logout": 
			Auth::logout(); 
			$data['selectThree'] = Ads::selectThree();
			$mainView = '../views/home.php';
			break;
		case "/create": 
			$mainView = '../views/ads/create.php';
			break;
		case "/show": 
			$a = Ads::find(Input::get('id'));
			if(!empty($_POST)) {
				$existingPost = Ads::find(Input::get('id')); 
				$existingPost->title = Input::get('title');
				$existingPost->location = Input::get('location');
				$existingPost->price = Input::get('price');
				$existingPost->description = Input::get('description');
					header("location: /items");
				$existingPost->save();
				die();
			}
			$ad = Ads::find(Input::get('id')); 
			$data['showItem'] = $ad;
			$data['user'] = user::find($ad->user_id);
			$mainView = '../views/ads/show.php';
			break;
		case "/update": 
			if(!empty($_POST)) {
				$existingUser = User::find(Auth::id());
				$existingUser->name = Input::get('name');
				$existingUser->email = Input::get('email');
				$existingUser->username = Input::get('username');
				$existingUser->password = Input::get('password');
					header("location: /show");
				$existingUser->save();
			}
			$mainView = '../views/users/edit.php';
			break;
		case "/delete": 
			$mainView = '../views/users/account.php';
			break;
		case "/edit": 
			$mainView = '../views/ads/edit.php';
			break;
		default:    // displays 404 if route not specified above
			$mainView = '../views/404.php';
			break;
	}

	$data['mainView'] = $mainView;
	return $data;
}

extract(pageController());
