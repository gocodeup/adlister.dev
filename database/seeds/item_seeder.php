<?php

require_once __DIR__ . '/../../models/item.php';

$item = new Item;
$item->item = 'Carrots';
$item->user_id = 'finn@fansofbilly.com';
$item->quantity = "100";
$item->description = $_ENV['USER_PASS'];
$item->save();

$item = new Item;
$item->item = 'Honey';
$item->user_id = 'jake@fansofbilly.com';
$item->quantity = "100";
$item->description = $_ENV['USER_PASS'];
$item->save();

$item = new Item;
$item->item = 'Jelly';
$item->user_id = 'iceking@princessaholicanonymous.com';
$item->quantity = "100";
$item->description = $_ENV['USER_PASS'];
$item->save();

$item = new Item;
$item->item = 'Apples';
$item->user_id = 'marceline@vampirequeen.com';
$item->quantity = "100";
$item->description = $_ENV['USER_PASS'];
$item->save();

$item = new Item;
$item->item = 'Turnips';
$item->user_id = 'marceline@vampirequeen.com';
$item->quantity = "100";
$item->description = $_ENV['USER_PASS'];
$item->save();

$item = new Item;
$item->item = 'Lavender';
$item->user_id = 'marceline@vampirequeen.com';
$item->quantity = "100";
$item->description = $_ENV['USER_PASS'];
$item->save();