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

$ad = new Ad;
$ad->user_id = 1;
$ad->title = "The Polish Plait";
$ad->description = "This just goes to show you that white people with dreads have been a problem since forever. A Polish Plait is a hair disease/style/nightmare that’s like a long, terrifying unidread mass of keratin fibers cemented together with pus, dirt, dried blood, and old lice eggs.";
$ad->date_created = '1983-08-02';
$ad->save(); 

$ad = new Ad;
$ad->user_id = 2;
$ad->title = "Hunkerin’";
$ad->description = "Hunker down folks, and prepare to hear the tale of the most bland, pointless fad that ever was. Basically it was just squatting. Squatting for long periods of time. That is the whole tale.";
$ad->date_created = '2016-08-12';
$ad->save(); 

$ad = new Ad;
$ad->user_id = 4;
$ad->title = "The shake weight";
$ad->description = "Shaking up the way you work out, the Shake Weight is a revolution in strength training (and being a total asshat). Boasting a legion of devotees (consisiting primarily of overweight, divorced 40-50 year old males living by themselves in a one bedroom apt down by the river who think they are \"going to get back into the dating scene\" after watching - and crying to - a mid 90's romcom the night before) who enthusiastically confirm the Shake Weight's claim that it shapes and tones the upper body, this product is hard to ignore (and not coinicidentally, to ignore the fact you creep people out).";
$ad->date_created = '2011-05-25';
$ad->save(); 



