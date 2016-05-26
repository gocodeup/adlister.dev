<?php

require_once __DIR__ . '/../../models/Ads.php';

$ad = new Ads;
$ad->name = 'SNES',
$ad->description = 'Plays like new! Includes Mario Kart.',
$ad->price = 150.00,
$ad->image_url = 'img/uploads/100.png',
$ad->save();


?>