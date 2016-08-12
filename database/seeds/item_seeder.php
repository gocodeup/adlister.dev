<?php 
USE adlister_db;
require_once __DIR__ . '/../../models/Items.php';

$items= "INSERT INTO items (name, price, description, keywords, date_added, username, img_url, featured)
VALUES ('Thor\'s Hammer', 100, 'Thor\'s hammer makes thunder I guess?', 'weapons', '2016-08-11', 'finn_the_human', '/css/img/hammer.png', 1),
('Captain America\'s Shield', 200, '\'merica!', 'armor',  '2016-08-11', 'jake_the_dog', '/css/img/shield.png', 1),
('Loki\'s Helmet', 150, 'Weird horn things. Looks kinda cool.', 'armor', '2016-08-11', 'ice_king', '/css/img/lokis_helmet.png', 1)";
