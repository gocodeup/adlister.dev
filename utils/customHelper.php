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


function getPhotos(){
	$i=0;
	$posts = new Post();
	$arrayOfPosts = $posts->getAllPosts();
	
	$content = '<table class="table">';
	$content .= "<tr>";
	foreach ($arrayOfPosts as $posts) {
		
		if($i % 3 == 0 && $i != 0){
			$content .= "</tr>";
			$content .= "<tr>";
		}
		$content .= "<td>". $posts['name'] ." ";
		$content .=  $posts['image_url'] ." ";
		$content .= $posts['description'];
		$content .= $posts['price'] ."</td>";


		
		$i++;
	
	}


	$content .= '</table>';
	var_dump($content);
	return $content;
}

?>