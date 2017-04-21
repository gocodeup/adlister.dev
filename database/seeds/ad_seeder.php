<?php 

require_once __DIR__ . '/../../models/Ad.php';
require_once '../db_connect.php';

$dbc->exec('DELETE FROM ads');

$ads = new Ad;
$ads->title = 'Finn Mertens';
$ads->price = 1.00;
$ads->user_id = 1;
$ads->description = 'product description';
$ads->image = "/images/pic07.jpg";
$ads->save();

$ads = new Ad;
$ads->title = 'Jake';
$ads->price = 4.00;
$ads->user_id = 2;
$ads->description = 'product description';
$ads->image = "/images/pic08.jpg";
$ads->save();

$ads = new Ad;
$ads->title = 'Simon Petrikov';
$ads->price = 5.00;
$ads->user_id = 3;
$ads->description = 'product description';
$ads->image = "/images/download.jpeg";
$ads->save();

$ads = new Ad;
$ads->title = 'Marceline Abadeer';
$ads->price = 8.00;
$ads->user_id = 4;
$ads->description = 'product description';
$ads->image = "/images/medal.jpeg";
$ads->save();
	 
 ?>