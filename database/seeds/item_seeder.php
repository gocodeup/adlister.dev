<?php

require_once __DIR__ . '/../../models/Item.php';

$item = new Item;
$item->user_id = 1;
$item->name = "Enchiridion";
$item->description = "Ancient book with codes of conduct, guidelines, and other helpful information for heroes.";
$item->price = 50000;
$item->image_url = "/img/uploads/enchiridion.png";
$item->save();

$item = new Item;
$item->user_id = 1;
$item->name = "Scarlet";
$item->description = "Scarlet is one of my earlier swords and also known as the golden sword of battle. Its is algebraic!! Very used and beat up but still great for kicking bad guys buns!";
$item->price = 2000;
$item->image_url = "/img/uploads/golden_sword.png";
$item->save();

$item = new Item;
$item->user_id = 2;
$item->name = "Bacon Pancakes";
$item->description = "Bacon pancakes, makin' bacon pancakes, Take some bacon and I'll put it in a pancake, Bacon pancakes, that's what it's gonna make, Bacon pancaaake!!!!<br><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cUYSGojUuAU?rel=0\" frameborder=\"0\" allowfullscreen></iframe>";
$item->price = 9.95;
$item->image_url = "/img/uploads/bacon_pancakes.jpg";
$item->save();

$item = new Item;
$item->user_id = 3;
$item->name = "Gunter";
$item->description = "Free to good princess. Must pickup from my Ice Castle in the Ice Kingdom.";
$item->price = 0;
$item->image_url = "/img/uploads/gunter.png";
$item->save();

$item = new Item;
$item->user_id = 4;
$item->name = "Gray Apple";
$item->description = "Since I only eat the color red, I am finished with this apple so someone else can eat it.";
$item->price = 5;
$item->image_url = "/img/uploads/apple.png";
$item->save();
