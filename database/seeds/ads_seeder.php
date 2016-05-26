<?php 

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->title = 'Vintage Lawn Chair';
$ad->image_url = 'artisanChair.jpg';
$ad->description = 'Beautiful handmade lawn chair';
$ad->price = 75.00;
$ad->user_id = 1;
$ad->save();


$ad = new Ad;
$ad->title = 'Mason Jar Cakes';
$ad->image_url = 'cakeInAJar.jpg';
$ad->description = 'Portable cakes.  Eat cake on a bench in a park.';
$ad->price = 5.00;
$ad->user_id = 2;
$ad->save();

$ad = new Ad;
$ad->title = 'Homemade Nail Polish';
$ad->image_url = 'homemadePolish.jpg';
$ad->description = 'I made this polish with non-toxic chemicals in my bathroom.';
$ad->price = 15.00;
$ad->user_id = 3;
$ad->save();

$ad = new Ad;
$ad->title = 'Organic Car Seat';
$ad->image_url = 'organicCarSeat.jpg';
$ad->description = 'Who needs an expensive car seat when you can have one made out of a pumpkin!';
$ad->price = 35.00;
$ad->user_id = 4;
$ad->save();

$ad = new Ad;
$ad->title = 'Deer Skull Wall Art';
$ad->image_url = 'deerWallSculpture.jpg';
$ad->description = 'Skeleton of a deer found in my backyard.  Mounted on a repurposed panel from my grandad\'s house.  The perfect item for the hipster household.';
$ad->price = 95.00;
$ad->user_id = 1;
$ad->save();



