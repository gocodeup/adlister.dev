<?php

require_once __DIR__ . '/../../models/User.php';
require_once '../db_connect.php';

$dbc->exec('DELETE FROM users');

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

$user = new User;
$user->name = 'Thomas Hayes';
$user->email = 'thomashayes@boldbrush.com';
$user->username = "thomas_hayes";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Todd Hendricks';
$user->email = 'toddhendricks@boldbrush.com';
$user->username = "todd_hendricks";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Sophia Kurihara';
$user->email = 'sophiakurihara@boldbrush.com';
$user->username = "sophia_kurihara";
$user->password = $_ENV['USER_PASS'];
$user->save();
