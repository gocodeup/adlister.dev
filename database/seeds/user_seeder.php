<?php

require_once __DIR__ . '/../../models/User.php';
require_once __DIR__ . '/../../models/Listing.php';


$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->save();

// //////////////////////////////////////////////////////
// LISTING DATA BEGINS HERE
// /////////////////////////////////////////////

$listing = new Listing();
$listing->item_name = 'Nintendo';
$listing->item_description = 'Retro Game Console';
$listing->item_price = '100.00';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->item_image = 'http://cdn2.bigcommerce.com/n-pktq5q/ymgqt/products/31167/images/27500/NES_Mario123Acc_Quad__43099.1430492763.500.500.jpg?c=2';
$listing->user_id = 1;
$listing->save();

$listing = new Listing;
$listing->item_name = '1967 Ford Thunderbird';
$listing->item_description = 'The car received a dual-stage repaint in the correct Light Green Metallic. The interior looks beautiful in the photos.The factory air conditioning works as it should and blows cold.';
$listing->item_price = '24000.00';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->item_image = 'https://cdn.classiccars.com/wp-content/uploads/2016/10/unnamed-4-1024x698.jpg?1e17bc';
$listing->user_id = 2;
$listing->save();

$listing = new Listing;
$listing->item_name = 'Little Red Tractor';
$listing->item_description = 'Tractor would make a super cute gift for the little one in your life. This ad will be deleted when sold. Don\'t wait or it may be too late! Please email me with any questions that you may have. Also available for pick up in Round Rock and Austin.';
$listing->item_price = '100.00';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->item_image = 'https://images.craigslist.org/00R0R_iWcNSU37qAa_600x450.jpg';
$listing->user_id = 4;
$listing->save();

$listing = new Listing;
$listing->item_name = 'Tag Heuer Formula 1 Grand Date';
$listing->item_description = 'Great everyday Tag Heuer watch.  Swiss made with a sporty rubber strap. Watch retails at $1,295.00 asking $650 or best offer.';
$listing->item_price = '650.00';
$listing->item_location_city ='Austin';
$listing->item_location_state ='TX';
$listing->item_image = 'https://images.craigslist.org/00z0z_249PLujTxP4_600x450.jpg';
$listing->user_id = 3;
$listing->save();

$listing = new Listing;
$listing->item_name = 'DC Comics';
$listing->item_description = 'Hot DC Comics for Sale!  Green Arrow: The Longbow Hunters (1987) #1-3 First Print $15 for the set
	DC Green Arrow (1987, 1st Series) #1, 1st print. $10
	Wonder Woman #1 - (1987) $25
	Suicide Squad #1 (1987) -$25
	Batman The Killing Joke First Print $45
	Batman The Dark Knight Returns #1-4 1 - 2nd print 2 to 4 1st print $125
	The Flash #1 1987 $20
';
$listing->item_price = '250.00';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->item_image = 'https://images.craigslist.org/01717_ijhwzfi4zwy_50x50c.jpg';
$listing->user_id = 1;
$listing->save();

$listing = new Listing;
$listing->item_name = 'Tonka Mighty Dump Truck';
$listing->item_description = 'Tonka Steel Toughest Mighty Dump Truck..built Tonka tough and to built to last. New condition.';
$listing->item_price = '30';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->item_image = 'https://images.craigslist.org/00e0e_jm8RTLUIan9_600x450.jpg';
$listing->user_id = 4;
$listing->save();

$listing = new Listing;
$listing->item_name = '2008 Honda CBR 600';
$listing->item_description = '2008 Honda CBR 600, 15k miles Very well maintained, Garage kept, 2nd owner, Just registered. New front tire just put on and a Yoshimura Exhaust';
$listing->item_price = '5300';
$listing->item_location_city ='San Antonio';
$listing->item_location_state ='TX';
$listing->item_image = 'https://images.craigslist.org/00707_2euMN95xyEi_600x450.jpg';
$listing->user_id = 2;
$listing->save();
