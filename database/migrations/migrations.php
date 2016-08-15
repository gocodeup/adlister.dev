<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items_tags');
$dbc->exec('DROP TABLE IF EXISTS tags');
$dbc->exec('DROP TABLE IF EXISTS items');
$dbc->exec('DROP TABLE IF EXISTS users');

require __DIR__ . '/user_migration.php';
require __DIR__ . '/items_migration.php';
require __DIR__ . '/tags_migration.php';
require __DIR__ . '/items_tags_migration.php';