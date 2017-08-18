<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE weapons");

$contents = file_get_contents("weapons.csv");

$weapons = explode("\n", trim($contents));

array_shift($weapons);

$weapons = array_map("trim", $weapons);

$statement = "INSERT INTO weapons (user_id, name, sub_category) VALUES (:user_id, :name, :sub_category)";

$preparedStatement = $connection->prepare($statement);

foreach ($weapons as $weapon) {
	$weapon = explode(",", $weapon);

	$newWeapon = new weapon();
	$newWeapon->name = $weapon[0];
	$newWeapon->location = $weapon[1];
	$newWeapon->dateEstablished = $weapon[2];
	$newWeapon->areaInAcres = $weapon[3];
	$newWeapon->description = $weapon[4];
	$newWeapon->insert();
}

echo "values added".PHP_EOL;