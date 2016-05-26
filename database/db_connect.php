<?php

// I had to comment this line out to run the migration file, this will need to be fixed
$_ENV = include __DIR__ .'/../.env.php';

// Get new instance of PDO object
$dbc = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>