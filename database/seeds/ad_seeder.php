<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->name = 'placeHolder';
$ad->description = 'placeHolder';
$ad->price = 100.00;
$ad->url = "";
$ad->image_url = "https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/cat-adult-landing-hero.ashx";
$ad->featured = 1;
$ad->user_id = 1;
$ad->save();

$ad = new Ad;
$ad->name = 'placeHolder';
$ad->description = 'placeHolder';
$ad->price = 100.00;
$ad->url = "";
$ad->image_url = "https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/cat-adult-landing-hero.ashx";
$ad->featured = 1;
$ad->user_id = 2;
$ad->save();


$ad = new Ad;
$ad->name = 'placeHolder';
$ad->description = 'placeHolder';
$ad->price = 100.00;
$ad->url = "";
$ad->image_url = "https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/cat-adult-landing-hero.ashx";
$ad->featured = 1;
$ad->user_id = 3;
$ad->save();


$ad = new Ad;
$ad->name = 'placeHolder';
$ad->description = 'placeHolder';
$ad->price = 100.00;
$ad->url = "";
$ad->image_url = "https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/cat-adult-landing-hero.ashx";
$ad->featured = 0;
$ad->user_id = 4;
$ad->save();
