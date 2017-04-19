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
$ad->username = 'finn_the_human';
$ad->image = 'rubber_ducky.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Water Bottle';
$ad->location = 'San Antonio';
$ad->price = '5';
$ad->description = 'Blue water bottle - super cool';
$ad->username = 'jake_the_dog';
$ad->image = 'water_bottle.png';
$ad->save();

$ad = new Ads;
$ad->title = 'The Alamo';
$ad->location = 'San Antonio';
$ad->price = '3.50';
$ad->description = 'The Alamo is for sale';
$ad->username = 'ice_king';
$ad->image = 'alamo.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Codeup';
$ad->location = 'San Antonio';
$ad->price = '17500';
$ad->description = 'Become a web developer';
$ad->username = 'marceline_abadeer';
$ad->image = 'codeup.png';
$ad->save();

