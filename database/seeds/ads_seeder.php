<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->user_id = '1';
$ad->date_listed = '2016-05-25';
$ad->title = 'Motorcycle';
$ad->description = 'Yamaha Verago 250cc';
$ad->price = '5000';
$ad->img_ulr = "https://upload.wikimedia.org/wikipedia/commons/f/f1/Xv250.JPG";
$ad->category = "vehicles";
$ad->tags = "things that are red";
$ad->save();

