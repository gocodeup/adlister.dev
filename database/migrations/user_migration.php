<?php

$_ENV = include '../../env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = <<<SQL
CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
SQL;

$dbc->exec('DROP TABLE IF EXISTS posts');

$query2 = <<<SQL
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `product_name` varchar(70) NOT NULL,
  `category` varchar(70) NOT NULL,
  `description` varchar(600) NOT NULL,
  `price` int(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
SQL;

$dbc->exec($query);
$dbc->exec($query2);