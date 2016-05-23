<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

// require migrations in the order they need to be added to the db
require_once 'user_migration.php';
require_once 'item_migration.php';