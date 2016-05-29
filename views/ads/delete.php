<?php 
require_once __DIR__ . '/../../utils/Input.php';
require_once __DIR__ . "../../../models/Ad.php";


	$id = Input::get('id');
	$ad = Ad::find($id);
	$ad->delete(); 

	header('Location: ../ads');
	exit();

 ?>