<?php
//function that checks for the user log in
function logInFunction(){
	
	$username = Input::get('email');	
	$password = Input::get('password');

	// $location = "/authorized.php";
	// $errorMessage="";
	if(Auth::attempt($username, $password)){
		if(Auth::check()){
			return true;
		}
		die;

	}
	else if(Input::has('username') || Input::has('password')){
		return  false;
	}
}

?>