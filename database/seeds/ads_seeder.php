<?php 

require '../db_connect.php';

require_once __DIR__ . '/../../models/Ads.php';

$query = 'delete from ads';

$dbc->exec($query);

$ad = new Ads;
$ad->title = 'Rubber Ducky';
$ad->location = 'San Antonio';
$ad->price = '10';
$ad->description = 'Rubber ducky with codeup logo';
$ad->user_id = '1';
$ad->image = 'img/uploads/rubber_ducky.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Water Bottle';
$ad->location = 'San Antonio';
$ad->price = '5';
$ad->description = 'Blue water bottle - super cool';
$ad->user_id = '2';
$ad->image = 'img/uploads/water_bottle.png';
$ad->save();

$ad = new Ads;
$ad->title = 'The Alamo';
$ad->location = 'San Antonio';
$ad->price = '3.50';
$ad->description = 'The Alamo is for sale';
$ad->user_id = '3';
$ad->image = 'img/uploads/alamo.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Codeup';
$ad->location = 'San Antonio';
$ad->price = '17500';
$ad->description = 'Become a web developer';
$ad->user_id = '4';
$ad->image = 'img/uploads/codeup.png';
$ad->save();

