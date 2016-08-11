<?php

require_once '../db_connect.php';

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

$query = 'CREATE TABLE IF NOT EXISTS teams (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    team_name VARCHAR(20) NOT NULL,
    logo VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)';

$dbc->exec($query);

$query = 'CREATE TABLE IF NOT EXISTS team_members (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    team_id INT UNSIGNED NOT NULL,
    pokedex_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (team_id) REFERENCES teams (id),
    FOREIGN KEY (pokedex_id) REFERENCES pokedex (id)
)';

$dbc->exec($query);

$query = file_get_contents('../seeds/pokedex_seeder.sql');

$dbc->exec($query);

$query = file_get_contents('../seeds/types_seeder.sql');

$dbc->exec($query);

$query = file_get_contents('../seeds/pivot_seeder.sql');

$dbc->exec($query);
