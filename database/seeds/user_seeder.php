<?php

require '../db_connect.php';

require_once __DIR__ . '/../../models/User.php';

$query = 'delete from ads';

$dbc->exec($query);

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
$user->name = 'Bill';
$user->email = 'bill@codeup.com';
$user->username = "billy_the_kid";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Bob';
$user->email = 'bob@codeup.com';
$user->username = "Bobbyyyy";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Joe';
$user->email = 'joe@codeup.com';
$user->username = "Joe_E";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Mark';
$user->email = 'mark@codeup.com';
$user->username = "Mountain_DEW";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Johnny';
$user->email = 'johnny@codeup.com';
$user->username = "Johnny_Boy";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Red';
$user->email = 'red@codeup.com';
$user->username = "Big_Red";
$user->password = $_ENV['USER_PASS'];
$user->save();