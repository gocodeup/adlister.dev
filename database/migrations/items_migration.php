<?php

$query = 'CREATE TABLE items (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    name VARCHAR(240) NOT NULL,
    image VARCHAR(240) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)';

$dbc->exec($query);