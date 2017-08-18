<?php

require_once __DIR__ . '/../../models/User.php';

$user = new id;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->save();