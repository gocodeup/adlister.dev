<?php 

require_once __DIR__ . '/../../models/Ad.php';

// $dbc->exec('TRUNCATE ads');

$ad = new Ad;
$ad->title = 'Vintage Lawn Chair';
$ad->image_url = '/../../img/artisanChair.jpg';
$ad->description = 'Beautiful handmade lawn chair, authentic weathering. Serious offers only.';
$ad->price = 75.00;
$ad->user_id = 1;
$ad->save();


$ad = new Ad;
$ad->title = 'Mason Jar Cakes';
$ad->image_url = '/../../img/cakeInAJar.jpg';
$ad->description = 'Portable cakes.  Eat cake on a bench in a park. Three flavors available: chocolate, strawberry, and vanilla (shown).';
$ad->price = 5.00;
$ad->user_id = 2;
$ad->save();

$ad = new Ad;
$ad->title = 'Homemade Nail Polish';
$ad->image_url = '/../../img/homemadePolish.jpg';
$ad->description = 'I made this polish with non-toxic chemicals in my bathroom.';
$ad->price = 15.00;
$ad->user_id = 3;
$ad->save();

$ad = new Ad;
$ad->title = 'Organic Car Seat';
$ad->image_url = '/../../img/organicCarSeat.jpg';
$ad->description = 'Who needs an expensive car seat when you can have one made out of a pumpkin! Baby not included.';
$ad->price = 35.00;
$ad->user_id = 4;
$ad->save();

$ad = new Ad;
$ad->title = 'Deer Skull Wall Art';
$ad->image_url = '/../../img/deerWallSculpture.jpg';
$ad->description = 'Skeleton of a deer found in my backyard.  Mounted on a repurposed panel from my grandad\'s house.  The perfect item for the hipster household.';
$ad->price = 95.00;
$ad->user_id = 1;
$ad->save();



