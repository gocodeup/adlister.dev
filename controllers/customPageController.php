<?php
function pageController(){
	$data=[];
	$data['login'] = logInFunction();
	var_dump($data['login']);




	return $data;
}




extract(pageController());
?>