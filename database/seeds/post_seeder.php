<?php

require_once __DIR__ . '/../../models/Post.php';
//ads array
$ads = [
		[
        'user_id' => 1,
        'name' => 'Picture 1',
        'image_url' => '/img/placeholder-small.png',
        'description' => 'Plays like new! Includes mario kart.', 
        'price' => 150.00,
        'date_posted'=>'1999-12-12'
    	],
    	[
        'user_id' => 2,
        'name' => 'Picture 2',
        'image_url' => '/img/placeholder-small.png',
        'description' => 'Beaten up but does the trick! ;).', 
        'price' => 50.00,
        'date_posted'=>'2004-12-12'
    	],
    	[
        'user_id' => 3,
        'name' => 'Picture 3',
        'image_url' => '/img/placeholder-small.png',
        'description' => 'Fully functional.', 
        'price' => 70.00,
        'date_posted'=>'2007-08-11'
    	],
    	[
        'user_id' => 4,
        'name' => 'Picture 4',
        'image_url' => '/img/placeholder-small.png',
        'description' => 'In original package working.', 
        'price' => 60.00,
        'date_posted'=>'2004-12-12'
    	],
    	[
        'user_id' => 1,
        'name' => 'Picture 5',
        'image_url' => '/img/placeholder-small.png',
        'description' => 'Beaten up.', 
        'price' => 350.00,
        'date_posted'=>'2004-12-12'
    	]
    ];

//for each to set the values from ads
foreach ($ads as $ad) {
	$post = new Post;
	foreach ($ad as $name => $value) {
		$post->$name = $value;
	}
	$post->save();
}



