<?php

$query = 'CREATE TABLE tags (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);