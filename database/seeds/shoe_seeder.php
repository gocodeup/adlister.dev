<?php

require_once __DIR__ . '/../../models/User.php';
require_once __DIR__ . '/../../models/Shoes.php';

$shoe = new Shoe;
$shoe->title = 'MAN SHOES 4 SALE';
$shoe->price = 20.00;
$shoe->msrp = 40.00;
$shoe->color = "Black";
$shoe->style = 'Loafer';
$shoe->size = 12.5;
$shoe->location = "Scranton, PA";
$shoe->brand = "L.L. Bean";
$shoe->shoe_condition = 'New';
$shoe->contact_name = 'Michael';
$shoe->contact_number = "210-234-5678";
$shoe->image_location = " ";
$shoe->user_id = '1';
$shoe->save();
