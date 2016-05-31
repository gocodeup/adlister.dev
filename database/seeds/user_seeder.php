<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Administrator';
$user->email = 'admin@peddlerscorner.com';
$user->username = "admin";
$user->location = 'San Antonio, TX';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->location = 'Dallas, TX';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->location = 'San Antonio, TX';
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->location = 'Austin, TX';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->location = 'Fredericksburg, TX';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Elvis Presley';
$user->email = 'elvis@peanutbutter.com';
$user->username = "the_king";
$user->location = 'Nashville, TN';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Marty Robbins';
$user->email = 'marty@countryaddicts.com';
$user->username = "countryMan";
$user->location = 'El Paso, TX';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Jack White';
$user->email = 'jack@thirdmanrecords.com';
$user->username = "ThirdMan";
$user->location = 'Nashville, TN';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Bilbo Baggins';
$user->email = 'bilbo@theshire.com';
$user->username = "2ndBreakfast";
$user->location = 'The Shire, TX';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Luke Skywalker';
$user->email = 'luke@skywalker.com';
$user->username = "JediLuke";
$user->location = 'Billings, MT';
$user->password = $_ENV['USER_PASS'];
$user->save();