<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.
require __DIR__ . '/../database/db_connect.php';
require_once __DIR__ . '/../utils/Input.php';


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{

	$valid = true;

	// checks if $input_name is in the files super global
	if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
	{

		// checks if there are any errors on the upload from the submission
		if(!$_FILES[$input_name]['error'])
		{

			$tempFile = $_FILES[$input_name]['tmp_name'];
			$extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
			$newName = substr($tempFile, 4);
			$image_url = '/img/uploads' . $newName . '.' . $extension;
			move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
			return $image_url;
		}

	}
	return null;
}

function checkIfUserIdGiven()
{
	if (!Input::has('id'))
	{
		$_SESSION['ERROR_MESSAGE'] = 'User account not found. Please try again.';
		header('Location: /ads');
		exit();
	}
}
function redirectIfNotLoggedIn()
{
	if (!Auth::check())
	{
		header('Location: /account/login');
	}
}
function redirectIfLoggedIn()
{
	if (Auth::check())
	{
		header('Location: /account');
	}
}
function login()
{
    // checks if data is in POST and processes it to login
	if (hasInput('POST') && Auth::attempt(Input::get('email_user'), Input::get('password')))
	{
		header('Location: /');
		exit();
	}
}

//make function for saving user
//Can aso have the post active at the top of the function if requested.
function saveUser()
{
	if (hasInput('POST'))
	{
		$user = new User();
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->save();
		if (Auth::attempt(Input::get('email'), Input::get('password')))
		{
			header('Location: /account/?id=' . $user->id);
			exit();
		}
		else
		{
			$_SESSION['ERROR_MESSAGE'] = 'Failed to login user after signup. Please login with the form below.';
			header('Location: /login');
			exit();
		}
	}

}
function editAccount()
{
    // checks for POST information and if user can edit specified account
    if (hasInput('POST') && Input::get('id') == Auth::id())
    {
        $user = User::find(Input::get('id'));
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->save();
        $_SESSION['SUCCESS_MESSAGE'] = 'Account successfully updated';
        header('Location: /account/edit/?id=' . $user->id);
        exit();
    }
}
function runLogout()
{
    Auth::logout();
    header('Location: account/login');
    exit();
}

function itemsSave()
{
	$gavin = new Items();
	$gavin->name = Input::get('name');
	$gavin->description = Input::get('description');
	$gavin->price = Input::get('price');
	$gavin->image = saveUploadedImage('image');
	$gavin->user_id = Auth::id();

	$gavin->save();

	$tags = Input::get('tag');
	$names = explode(',', $tags);
	$tags = [];
	foreach ($names as $name) {
		$tags[] = tagSave($name);
	}

	$gavin->addTags($tags);
}

function tagSave($name)
{
	$tag = new Tag();
	$tag->name = trim($name);
	//change me later!//
	
	$tag->save();

	return $tag;
}
function getId()
{
	if(Input::has('id')){
		$id = Input::get('id');
	} else {
		$id = null;
	}
	return $id;
}
function hasInput($request_type = 'ALL')
{
	if ($request_type == 'ALL')
	{
		return !empty(Input::all());
	}
	else if ($request_type == 'POST')
	{
		return !empty($_POST);
	}
	else
	{
		return !empty($_GET);
	}
}

// the following functions will be used to display items on the page