<?php 

require '../db_connect.php';

require_once __DIR__ . '/../../models/Ads.php';

$query = 'delete from ads';

$dbc->exec($query);

$ad = new Ads;
$ad->title = 'Rubber Ducky';
$ad->location = 'San Antonio';
$ad->price = '10';
$ad->description = 'Rubber ducky with codeup logo';
$ad->user_id = '1';
$ad->image = 'img/uploads/rubber_ducky.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Water Bottle';
$ad->location = 'San Antonio';
$ad->price = '5';
$ad->description = 'Blue water bottle - super cool';
$ad->user_id = '2';
$ad->image = 'img/uploads/water_bottle.png';
$ad->save();

$ad = new Ads;
$ad->title = 'The Alamo';
$ad->location = 'San Antonio';
$ad->price = '3.50';
$ad->description = 'The Alamo is for sale';
$ad->user_id = '3';
$ad->image = 'img/uploads/alamo.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Codeup';
$ad->location = 'San Antonio';
$ad->price = '17500';
$ad->description = 'Become a web developer';
$ad->user_id = '4';
$ad->image = 'img/uploads/codeup.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Fender Stratocaster YJM';
$ad->location = 'San Antonio';
$ad->price = '850';
$ad->description = 'Very early first edition 1988 Yngwie Malmsteen Signature Series USA Fender Stratocaster. This and the Eric Clapton were the first Signature Models ever made by Fender.';
$ad->user_id = '5';
$ad->image = 'img/uploads/guitar.png';
$ad->save();

$ad = new Ads;
$ad->title = 'hammond m-3';
$ad->location = 'Austin';
$ad->price = '300';
$ad->description = 'classic lil hammond --commonly know as the lil B-3--$300 calls @';
$ad->user_id = '6';
$ad->image = 'img/uploads/piano.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Apple iPhone 6 UNLOCKED 64gb';
$ad->location = 'San Antonio';
$ad->price = '325';
$ad->description = 'Great condition iPhone 6 unlocked ready for cricket, metro, t-mobile or AT&T, 64gb storage, 8.mp camera, No icloud locked and clean imei, charger included, $325 final price serious buyers, text ';
$ad->user_id = '7';
$ad->image = 'img/uploads/iphone.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Sofa and love seat';
$ad->location = 'San Antonio';
$ad->price = '250';
$ad->description = 'Used sofa & love seat - $250.00
	Please let me know if interested.';
$ad->user_id = '8';
$ad->image = 'img/uploads/couch.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Custom Welding & Fabrication';
$ad->location = 'San Antonio';
$ad->price = '5000';
$ad->description = 'Custom Welding and Fabrication';
$ad->user_id = '9';
$ad->image = 'img/uploads/custom.png';
$ad->save();

$ad = new Ads;
$ad->title = '2005 Ford Explorer clean title';
$ad->location = 'San Antonio';
$ad->price = '3800';
$ad->description = 'Excellent running and driving condition it has 138k miles 
	Great tires , power locks and windows , alarm ,, very nice and clean interior !! Clean title , everything works great 
	Se habla español 
	Call or text for more info ';
$ad->user_id = '10';
$ad->image = 'img/uploads/explorer.png';
$ad->save();

$ad = new Ads;
$ad->title = '2005 Toyota Tacoma PreRunner';
$ad->location = 'San Antonio';
$ad->price = '12995';
$ad->description = '2005 Toyota Tacoma PreRunner';
$ad->user_id = '1';
$ad->image = 'img/uploads/toyota.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Candle holder centerpiece ';
$ad->location = 'San Antonio';
$ad->price = '40';
$ad->description = '5 piece candle holder 
	Color: chocolate brown';
$ad->user_id = '2';
$ad->image = 'img/uploads/candle.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Folding Nesting Tables';
$ad->location = 'New Braunfels';
$ad->price = '60';
$ad->description = 'Like New Nesting Tables. Perfect for classrooms, churches and events. No scratches, very sturdy. This is not cheap 	Ikea style materials. Heavy wood surface with metal legs. Need gone asap.';
$ad->user_id = '3';
$ad->image = 'img/uploads/table.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Trailer Ramps';
$ad->location = 'San Antonio';
$ad->price = '50';
$ad->description = 'Brand new ramps by rwmcountry. 15" wide with 12" track.';
$ad->user_id = '4';
$ad->image = 'img/uploads/ramps.png';
$ad->save();

$ad = new Ads;
$ad->title = '2012 Kawasaki Ex250 ninja';
$ad->location = 'San Antonio';
$ad->price = '2995';
$ad->description = '2012 kawasaki ninja 250 great starter bike, crash bar for extra protection, light wieght easy to ride, carbon fiber exhaust ';
$ad->user_id = '5';
$ad->image = 'img/uploads/kawasaki.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Carved Wood Mirror';
$ad->location = 'San Antonio';
$ad->price = '75';
$ad->description = '34" X 36"
	Will hang veticaly or horizontally.
	Good condition';
$ad->user_id = '6';
$ad->image = 'img/uploads/mirror.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Kirby vacuum & attachments';
$ad->location = 'San Antonio';
$ad->price = '125';
$ad->description = 'I\'m sellieng a clean and good working KIRBY G6 vacuum and attachments. Comes with 1bag, 2 belts, manual, and everything you see in picture. Kirby has been cleaned and serviced for top performance. It can be used to vacuum all carpets and is also design to vacuum bare floors like, tile, wood, laminate without scratching your floors . Priced at 125.00 firm, no low ballers please, cash only, local buyers only. Test it out before you buy it, and if you have questions, call me at the above number, click on the reply button....thanks';
$ad->user_id = '7';
$ad->image = 'img/uploads/vacuum.png';
$ad->save();

$ad = new Ads;
$ad->title = '1967 Chevelle 12 bolt rear end ';
$ad->location = 'San Antonio';
$ad->price = '2600';
$ad->description = 'Original 1967 12 bolt posi rear end w/Disc brakes.';
$ad->user_id = '8';
$ad->image = 'img/uploads/chevelle.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Ironkids swingset';
$ad->location = 'Boerne';
$ad->price = '75';
$ad->description = 'IronKids Swingset for sale. $75.00. Pick up only.';
$ad->user_id = '9';
$ad->image = 'img/uploads/swing.png';
$ad->save();

$ad = new Ads;
$ad->title = 'Miniature bulls';
$ad->location = 'Blanco';
$ad->price = '1600';
$ad->description = 'Two mini bulls. Super cute and gentle! Can be used as breed bulls, bucking bulls, or just yard ornaments! $1600 for the pair. Text or call ';
$ad->user_id = '10';
$ad->image = 'img/uploads/bulls.png';
$ad->save();

