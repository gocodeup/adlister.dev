<?php
// Get new instance of PDO object
$dbc = new PDO('mysql:host=' . $_ENV['127.0.0.1'] . ';dbname=' . $_ENV['adlister_db'], $_ENV['chloedavid_user'], $_ENV['password123']);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>