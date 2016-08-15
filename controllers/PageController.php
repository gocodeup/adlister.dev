<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

	// defines array to be returned and extracted for view
	$data = [];
	$itemId = Input::get('id');
	// finds position for ? in url so we can look at the url minus the get variables
	$get_pos = strpos($_SERVER['REQUEST_URI'], '?');

	// if a ? was found, cuts off get variables if not just gives full url
	if ($get_pos !== false)
	{

		$request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
	}
	else
	{

		$request = $_SERVER['REQUEST_URI'];
	}

	// switch that will run functions and setup variables dependent on what route was accessed
	switch ($request) {
		case '/':
			$main_view = '../views/home.php';
			$data['items'] = Items::featuredItems();
			break;
		case '/ads/create':
			$main_view = '../views/ads/create.php';
			if($_POST) {
				itemsSave();
			}
			break;
		case '/ads/edit':
			$main_view = '../views/ads/edit.php';
			if($_POST) {
				itemsSave();
			}
			break;
		case '/ads':
			$main_view = '../views/ads/index.php';
			$data['items'] = Items::all();
			break;
		case "/ads/show/":
			$main_view = '../views/ads/show.php';
			$data['items'] = Items::find($itemId);
			$data['user'] = Items::itemUser($itemId);
			break;
		case "/account/":
			redirectIfNotLoggedIn();
			checkIfUserIdGiven();
			$data['user'] = User::find(Input::get('id'));
			$data['items'] = $data['user']->items();
			$main_view = '../views/users/account.php';
			break;
		case '/account/edit/':
			$main_view = '../views/users/edit.php';
			redirectIfNotLoggedIn();
			checkIfUserIdGiven();
			editAccount();
			$data['user'] = User::find(Input::get('id'));
			break;
		case '/account/login':
			redirectIfLoggedIn();
			login();
			$main_view = "../views/users/login.php";
			break;
		case '/account/signup':
			$main_view = '../views/users/signup.php';
			saveUser();
			break;
		case '/logout':
			runLogout();
			break;
		default:    // displays 404 if route not specified above
		$main_view = '../views/404.php';
		break;
	}
	//be able to post to differing tables based on the page they post from
	// temporarily define variables to call table info here, then put them into a helper function once thgey work
	// $data['ad'] = Items::find(8);

	$data['main_view'] = $main_view;

	return $data;
}
extract(pageController());
var_dump($_SESSION);