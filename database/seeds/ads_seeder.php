<?php

require_once __DIR__ . '/../../models/User.php';

$ads = new AD;
$ads->ad_name = 'Finn Mertens';
$ads->ad_desc = 'finn@fansofbilly.com';
$ads->price= "finn_the_human";
$ads->phone = $_ENV['USER_PASS'];
$ads->email = "finn_the_human";
$ads->location = "finn_the_human";
$ads->img_url = "finn_the_human";
$ads->save();
