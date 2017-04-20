<?php 

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS favorites');

$favorites = 'CREATE TABLE IF NOT EXISTS favorites (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_id INT UNSIGNED NOT NULL,
    ad_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES users(id),
    FOREIGN KEY (ad_id) REFERENCES ads(id)
)';

$dbc->exec($favorites);

 ?>