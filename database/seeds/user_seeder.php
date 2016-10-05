<?php

require_once __DIR__ . '/../../models/User.php';
require_once __DIR__ . '/../../models/Listing.php';


$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->save();


$listing = new Listing;
$listing->item_name = 'Nintendo';
$listing->item_description = 'Retro Game Console';
$listing->item_price = '100.00';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->user_id = 1;
$listing->save();