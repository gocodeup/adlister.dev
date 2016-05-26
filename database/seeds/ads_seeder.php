<?php

require_once __DIR__ . '/../../models/Ads.php';

$ads = new Ads;
$ads->ad_name = 'Finn Mertens';
$ads->description = 'finn@fansofbilly.com';
$ads->price = "finn_the_human";
$ads->phone = $_ENV['USER_PASS'];
$ads->email = "finn_the_human";
$ads->username = "finn_the_human";
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Jake';
$ads->email = 'jake@fansofbilly.com';
$ads->username = "jake_the_dog";
$ads->password = $_ENV['USER_PASS'];
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Simon Petrikov';
$ads->email = 'iceking@princessaholicanonymous.com';
$ads->username = "ice_king";
$ads->password = $_ENV['USER_PASS'];
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Marceline Abadeer';
$ads->email = 'marceline@vampirequeen.com';
$ads->username = "marceline_abadeer";
$ads->password = $_ENV['USER_PASS'];
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Marceline Abadeer';
$ads->email = 'marceline@vampirequeen.com';
$ads->username = "marceline_abadeer";
$ads->password = $_ENV['USER_PASS'];
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Marceline Abadeer';
$ads->email = 'marceline@vampirequeen.com';
$ads->username = "marceline_abadeer";
$ads->password = $_ENV['USER_PASS'];
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Marceline Abadeer';
$ads->email = 'marceline@vampirequeen.com';
$ads->username = "marceline_abadeer";
$ads->password = $_ENV['USER_PASS'];
$ads->save();