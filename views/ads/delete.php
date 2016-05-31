<?php 

require_once __DIR__ . '/../../utils/Input.php';
require_once __DIR__ . "../../../models/Ad.php";

//get current id of the ad.
$id = Input::get('id');

//find the ad using the id.
$ad = Ad::find($id);

//delete current ad.
$ad->delete(); 

//redirect to main ads page. 
header('Location: ../account');
exit();


 ?>