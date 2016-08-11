<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

	// defines array to be returned and extracted for view
	$data = [];

	// finds position for ? in url so we can look at the url minus the get variables
	$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	// switch that will run functions and setup variables dependent on what route was accessed
	switch ($request) {

		case '/': 
			$main_view = '../views/home.php';
			break;

		case '/login-successful':
			$main_view = '../views/users/account.php';
			break;
		case '/inventory': 
			$main_view = '../views/ads/index.php';
			break;
		case '/create_ad': 
			$main_view = '../views/ads/create.php';
			break;
		case '/signup': 
			$main_view = '../views/users/signup.php';
			//create user function
			break;
		case '/login': 
			$main_view = '../views/users/login.php';
			break;
		case '/item': 
			$main_view = '../views/ads/show.php';
			break;
		case '/pleaseloveme!': 
			$main_view = '../views/ads/missed_connections.php';
			break;
		default:    // displays 404 if route not specified above
			$main_view = '../views/404.php';
			break;

	}

	$data['main_view'] = $main_view;

	return $data;
}

extract(pageController());