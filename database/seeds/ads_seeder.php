<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->name = "Finn's old shoes";
$ad->description = "Just some old shoes";
$ad->seller_id = 1;
$ad->image = 'img/uploads/old_shoes.jpg';
$ad->save();

$ad = new Ad;
$ad->name = "Jakes's old shirt";
$ad->description = "Just an old shirt";
$ad->seller_id = 2;
$ad->image = 'img/uploads/jakes_Old_shirt.jpg';
$ad->save();

$ad = new Ad;
$ad->name = "Simon's old simon game";
$ad->description = "Just a simple simon game";
$ad->seller_id = 3;
$ad->image = 'img/uploads/simon_says.jpg';
$ad->save();

$ad = new Ad;
$ad->name = "Finn's old wooden sword";
$ad->description = "Just an old wooden sword";
$ad->seller_id = 1;
$ad->image = 'img/uploads/old_wooden_sword.jpg';
$ad->save();

$ad = new Ad;
$ad->name = "Marceline's old guitar";
$ad->description = "Just an old guitar";
$ad->seller_id = 4;
$ad->image = 'img/uploads/old_guitar.jpg';
$ad->save();

 ?>
