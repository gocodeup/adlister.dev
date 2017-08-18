<?php

require_once '../../models/Ad.php';

$ad = new Ad;
$ad->name = "Finn's old shoes";
$ad->description = "Just some old shoes";
$ad->seller_id = 1;
$ad->save();


 ?>
