<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->user_id = '1';
$ad->date_listed = '2016-05-25';
$ad->title = 'Motorcycle';
$ad->description = 'Yamaha Verago 250cc';
$ad->price = '5000';
$ad->img_url = "https://upload.wikimedia.org/wikipedia/commons/f/f1/Xv250.JPG";
$ad->category = "vehicles";
$ad->tags = "things that are red";
$ad->save();

$ad = new Ad;
$ad->user_id = '2';
$ad->date_listed = '2016-03-20';
$ad->title = 'Camera';
$ad->description = 'Cannon 350';
$ad->price = '1000';
$ad->img_url = "http://2.static.img-dpreview.com/files/p/articles/2420029039/Images/frontview-001.jpeg";
$ad->category = "Cameras";
$ad->tags = "goes click";
$ad->save();

$ad = new Ad;
$ad->user_id = '3';
$ad->date_listed = '2016-01-02';
$ad->title = 'Live Chicken';
$ad->description = 'makes loads of eggs and wakes you up in the morning';
$ad->price = '5.99';
$ad->img_url = "http://diablitoscantina.com/wp-content/uploads/2015/03/chicken_with_a_sombrero_by_muffinzor-d870ti4.png";
$ad->category = "live stock";
$ad->tags = "poltry"; 
$ad->save();

