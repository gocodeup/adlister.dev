<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items_tags');

$query = 'CREATE TABLE items_tags (
	item_id INT UNSIGNED NOT NULL,
	tag_id INT UNSIGNED NOT NULL,
	FOREIGN KEY (item_id) REFERENCES items(id),
	FOREIGN KEY (tag_id) REFERENCES tags(id)
)';

$dbc->exec($query);