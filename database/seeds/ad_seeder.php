<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->user_id = 1;
$ad->name = "Compy Breath";
$ad->price = 19.99;
$ad->description = "A bag of compy breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 2;
$ad->name = "Raptor Breath";
$ad->price = 54.99;
$ad->description = "A bag of raptor breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 1;
$ad->name = "T-Rex Breath";
$ad->price = 99.99;
$ad->description = "A bag of t-rex breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 3;
$ad->name = "Sabertooth Breath";
$ad->price = 9.99;
$ad->description = "A bag of sabertooth tiger breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 3;
$ad->name = "Lion Breath";
$ad->price = 5.99;
$ad->description = "A bag of sabertooth tiger breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 3;
$ad->name = "Brontosaurus Breath";
$ad->price = 33.99;
$ad->description = "A bag of brontosaurus breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 1;
$ad->name = "Pug Breath";
$ad->price = 2.99;
$ad->description = "A bag of pug breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();

$ad = new Ad;
$ad->user_id = 4;
$ad->name = "Mammoth Breath";
$ad->price = 15.99;
$ad->description = "A bag of wooly mammoth breath...";
$ad->created_at = date('Y-m-d h:m:s', time());
$ad->updated_at = date('Y-m-d h:m:s', time());
$ad->save();
