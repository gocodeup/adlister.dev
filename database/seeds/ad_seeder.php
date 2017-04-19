<?php 

require_once __DIR__ . '/../../models/Ad.php';

$ads = new Ad;
$ads->name = 'Finn Mertens';
$ads->description = 'product description';
$ads->user_id = 1;
$ads->save();

$ads = new Ad;
$ads->name = 'Jake';
$ads->description = 'product description';
$ads->user_id = 2;
$ads->save();

$ads = new Ad;
$ads->name = 'Simon Petrikov';
$ads->description = 'product description';
$ads->user_id = 3;
$ads->save();

$ads = new Ad;
$ads->name = 'Marceline Abadeer';
$ads->description = 'product description';
$ads->user_id = 4;
$ads->save();
	 
 ?>