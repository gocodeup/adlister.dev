<?php

require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');
$dbc->exec('DROP TABLE IF EXISTS users');

require_once __DIR__ . '/user_migration.php';
require_once __DIR__ . '/ads_migration.php';