<?php
// require_once '../db_connect.php';
require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->image = '/img/finn_mertens.jpg'
$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->image = '/img/jake.jpg'
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->image = '/img/simon_petrikov.jpg'
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->image = '/img/marceline_abadeer.png'
$user->save();

$user = new User;
$user->name = 'test';
$user->email = 'test';
$user->username = 'test';
$user->password = 'test';
$user->save();

