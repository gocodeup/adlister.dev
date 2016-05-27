<?php

require_once __DIR__ . '/../../models/Ads.php';

$ads = new Ads;
$ads->ad_name = 'Lamp';
$ads->ad_description = 'this is a beautiful lamp that was crafted by a monk in china';
$ads->price= "300";
$ads->phone = '210-555-5555';
$ads->email = "monklamps@yahoo.com";
$ads->location = "San Antonio, TX";
$ads->img_url = "http://static.dudeiwantthat.com/img/entertainment/movie-props/A-Christmas-Story-Leg-Lamp-1615.jpg";
$ads->user_id = "3";
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Dinosaur Tent';
$ads->ad_description = 'Dinosaur tent that was bought for my son but was flooded out while camping. Mint condition';
$ads->price= "98";
$ads->phone = '210-444-4444';
$ads->email = "dinotent@gmail.com";
$ads->location = "Boerne, TX";
$ads->img_url = "http://www.thelocal.es/userdata/images/article/w468/c4f025006b5229b42842b597f7812454d8614de0f99f43986ee6d492eaacd9e5.jpg";
$ads->user_id = "2";
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Car Hood';
$ads->ad_description = 'Have a vintage buggy car hood looking to get rid of. Will trade if interested';
$ads->price= "120";
$ads->phone = '210-333-3333';
$ads->email = "buggyhood@hotmail.com";
$ads->location = "Kerrville";
$ads->img_url = "http://media.liveauctiongroup.net/i/5736/8633086_1.jpg?v=8CE71410914F540";
$ads->user_id = "2";
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Codeup Mug';
$ads->ad_description = 'Top of the line mug that I received during my time at Codeup';
$ads->price= "4";
$ads->phone = '210-222-2222';
$ads->email = "coolmug@codeup.com";
$ads->location = "San Antonio";
$ads->img_url = 'http://www.recyclethis.co.uk/wp-content/uploads/2009/05/broken_mug.jpg';
$ads->user_id = "4";
$ads->save();

$ads = new Ads;
$ads->ad_name = 'Codeup Hoodie';
$ads->ad_description = 'This is a gently used hoddie that I received at Codeup. Very Soft.';
$ads->price= "20";
$ads->phone = "210-888-8888";
$ads->email = "softhoodie@aol.com";
$ads->location = "San Antonio";
$ads->img_url = "https://alexadp.files.wordpress.com/2010/09/it-is-a-hoodie.jpg";
$ads->user_id = "3";
$ads->save();


$ads = new Ads;
$ads->ad_name = 'Macbook';
$ads->ad_description = 'Macbook needs a home for a developer';
$ads->price= "600";
$ads->phone = "210-999-9999";
$ads->email = "buymymac@icloud.com";
$ads->location = "Alamo Heights";
$ads->img_url = "http://i.ebayimg.com/00/s/MjI1WDMwMA==/z/Ba4AAOSwQItUADCb/\$_35.JPG?set_id=2";
$ads->user_id = "1";
$ads->save();

