<?php

require_once '../models/User.php';

//what info?

$user = new User();

$username = Input::get('username');
$password = Input::get('password');

$user->name = $username;
$user->password = $password;

$user->save();