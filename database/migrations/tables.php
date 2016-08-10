<?php


//fix dbc
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);


$dbc->exec('DROP TABLE IF EXISTS teams');

$query = 'CREATE TABLE teams (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    team_name VARCHAR(20) NOT NULL,
    logo VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)';

$dbc->exec($query);


$dbc->exec('DROP TABLE IF EXISTS team_members');

$query = 'CREATE TABLE team_members (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    team_id INT UNSIGNED NOT NULL,
    pokedex_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (team_id) REFERENCES teams (id),
    FOREIGN KEY (pokedex_id) REFERENCES pokedex (id)
)';

$dbc->exec($query);

