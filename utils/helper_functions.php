<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

require_once 'Auth.php';
require_once '../controllers/PageController.php';
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
				$image_url = '/img/uploads' . $input_name;
				move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
				return $image_url;
		}

	}
	return null;
}

//input functions

 $username = Input::has('email_user') ? Input::get('email_user') : null;
 $password = Input::has('password') ? Input::get('password') : null;

 //first time page load
if($username == null && $password == null){
	return null;
}


if(Auth::check()){
	$request = '/login-successful';

}

if (Auth::attempt($username, $password)){

	$request = '/login-successful';	

} else {
	$request = '/login';
} 
var_dump($_SESSION);


if (Auth::logout()){
	$request = '/login';
}