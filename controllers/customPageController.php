<?php
function pageController(){
	$data=[];
	$data['login'] = logInFunction();




	return $data;
}




extract(pageController());
?>