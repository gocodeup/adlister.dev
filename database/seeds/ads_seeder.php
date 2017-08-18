<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->title = 'Dinsaur Breath';
$ad->description = 'Box of Dinosaur breath';
$ad->username = "finn_the_human";
$ad->date_create = date("Y-m-d H-i-s") ;
$ad->img = "imagehere.png";
$ad->categories = "technology,entertainment";
$ad->save();

$ad = new Ad;
$ad->title = 'Stick Write';
$ad->description = 'window sticky to write on with dry erase';
$ad->username = "finn_the_human";
$ad->date_create = date("Y-m-d H-i-s");
$ad->img = "imagehere.png";
$ad->categories = "technology,entertainment";
$ad->save();

$ad = new Ad;
$ad->title = 'Codester';
$ad->description = 'a cody doll';
$ad->username = "finn_the_human";
$ad->date_create = date("Y-m-d H-i-s");
$ad->img = "imagehere.png";
$ad->categories = "technology,comedy";
$ad->save();