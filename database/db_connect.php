<?php

define('DB_HOST', "127.0.0.1");
define('DB_NAME', "adlister_db");
define('DB_USER', "admin");
define('DB_PASS', "vagrant");

// Get new instance of PDO object
$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

// Tell PDO to throw exceptions on error
$connection = $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
