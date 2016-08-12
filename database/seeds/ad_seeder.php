s<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->user_id = 1;
$ad->title = "Pokemon Go";
$ad->description = "Mobile game app where people stare at their phones and stand in people's way. The goal is to capture imaginary pocket monsters. Occasionally players walk into traffic or off cliffs.";
$ad->date_created = '2016-07-01';
$ad->save();


$ad = new Ad;
$ad->user_id = 2;
$ad->title = "Y.O.L.O.";
$ad->description = "An acronym for 'You Only Live Once.' For Milennials, justifying poor lifestyle choices became a lot easier with this 2011 fad.";
$ad->date_created = '2011-01-01';
$ad->save();  

$ad = new Ad;
$ad->user_id = 3;
$ad->title = "Planking";
$ad->description = "Involved lying face-down in random places with arms to one's side and legs straight out.";
$ad->date_created = '2011-05-25';
$ad->save(); 



