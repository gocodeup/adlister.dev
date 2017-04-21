<?php

$_ENV = include '../../env.php';
require_once '../db_connect.php';

$query = "CREATE TABLE `posts` (
  `id` SMALLINT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(10) UNSIGNED NOT NULL,
  `product_name` VARCHAR(70) NOT NULL,
  `category` VARCHAR(70) NOT NULL,
  `description` VARCHAR(600) NOT NULL,
  `price` INT(10) NOT NULL,
  `phone` VARCHAR(12) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `date_added` TIMESTAMP NOT NULL,
  `image_filename` VARCHAR(100),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=INNODB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8";

$dbc->exec($query);