<?php 

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->title = 'Vintage Lawn Chair';
$ad->image_url = '/../../img/artisanChair.jpg';
$ad->description = 'Beautiful handmade lawn chair, authentic weathering. Serious offers only.';
$ad->price = 75.00;
$ad->user_id = 5;
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
$ad->user_id = 5;
$ad->save();

$ad = new Ad;
$ad->title = 'Bear Encounter';
$ad->image_url = '/../../img/bears.jpg';
$ad->description = 'Everyone does dolphin encounters, but you want true adventure! Our guides will take you deep into the woods to interact with real, wild bears. Make sure to bring your cameras to this one-of-a-kind experience! Safety not guaranteed. Must sign waiver to attend.';
$ad->price = 300.00;
$ad->user_id = 2;
$ad->save();

$ad = new Ad;
$ad->title = 'Seasonal Cthulhu Cookies';
$ad->image_url = '/../../img/scarySanta.jpg';
$ad->description = 'Homemade cookies, custom made for you. Christmas cookies are shown, but all holidays are available (Halloween, Easter, Arbor Day, etc). Cookies are sold in full Baker\'s dozen only. Please allow one week for delivery. No P.O. boxes.';
$ad->price = 66.00;
$ad->user_id = 4;
$ad->save();

$ad = new Ad;
$ad->title = 'Natural Candles';
$ad->image_url = '/../../img/naturalCandles.jpg';
$ad->description = 'Natural beeswax candles made with beeswax gathered from my own, personal apiary. You can be assured that these candles are of the highest quality, since the bees have very expensive flowers to get pollen from in my backyard.';
$ad->price = 29.00;
$ad->user_id = 3;
$ad->save();

$ad = new Ad;
$ad->title = 'Unique Vehicle';
$ad->image_url = '/../../img/dogVan.jpg';
$ad->description = 'My wife said it was her or the van. I thought long and hard but came to the decision that, as much as I love this vehicle, I loved her more. My kids would choose the van. Dumber than dumb and dumber! Make this facinating ultra custom, vehicle work for you! It has more bells and whistles than a clown factory with the comfort and reliability of an easy chair.';
$ad->price = 1000.00;
$ad->user_id = 4;
$ad->save();

$ad = new Ad;
$ad->title = 'Mobile Home';
$ad->image_url = '/../../img/mobileHome.jpg';
$ad->description = '197? Chrysler motor home. I bought this from a sketchy car lot in Nevada. I believe it used to be my mother\'s. She owned it years ago while volunteering for the humane society in Vegas. I bought it right away for $10,000 because it\'s kind of sentimental to us, but I need money for my kid\'s private school so I have to sell it now.';
$ad->price = 69.00;
$ad->user_id = 7;
$ad->save();

$ad = new Ad;
$ad->title = 'WANTED: COMMMITTED CAT LOVERS IN MALHEUR!!!';
$ad->image_url = '/../../img/catRanch.jpg';
$ad->description = 'We will seize illegally held land and use it to establish a herd of free range cats from which to harvest wool. Malheur is the purrfect site for cat ranching the way God intended. It has an abundance of natural food, water, and a mild climate. Birds are plentiful. Catnip should thrive. We will develop a new breed: the Harney County ranch cat. We need hardy breeding stock such as Maine Coon, Manx, \'merican Bobtail, and Persian (natural born only). No hairless cats unless neutered/spayed. A few lions would be useful for defensive purposes.';
$ad->price = 1.00;
$ad->user_id = 8;
$ad->save();


$ad = new Ad;
$ad->title = '6 TOP RAMEN CHICKEN FLAVOR PACKETS';
$ad->image_url = '/../../img/noodlePack.jpg';
$ad->description = 'I recently finished a 6 pack of Top Ramen Chicken Flavor noodles that someone gave me. I don\'t eat meat, so I just made vegetarian stock and cooked the noodles in that. I didn\'t want to throw the flavor packets away because what if someone out there (someone like you!) really loves the Chicken Flavor packets and has always wished for some extra that they didn\'t have to use to flavor their noodles.';
$ad->price = 39.00;
$ad->user_id = 9;
$ad->save();

$ad = new Ad;
$ad->title = 'Human Sized Steel Cage';
$ad->image_url = '/../../img/steelCage.jpg';
$ad->description = 'Whoever responds with the best potential use for this cage will get it free of charge. It is 6\'1\' tall by 4x4 base, welded steel, approx 200 Lbs (2 people can easily move it). Pick up Saturday or Sunday in Jack London Area';
$ad->price = 29.00;
$ad->user_id = 10;
$ad->save();

$ad = new Ad;
$ad->title = 'Baby visiting for the holidays? I GOT YOU COVERED.';
$ad->image_url = '/../../img/babyStuff.jpg';
$ad->description = 'Everything was used only part time and is relatively clean, from our smoke free, pet free home. (That\'s only kind of a lie- my brother smokes but as far as I know he only did it in his girlfriend\'s car. Also, we do have a turtle, but she was only on the booster chair one time and it was for a "turtle birthday party" which was my brother\'s bright idea. He\'s no longer invited here, which is why it only happened that one time before I got home from work. I have thoroughly washed the booster chair since then.)';
$ad->price = 4.20;
$ad->user_id = 8;
$ad->save();

$ad = new Ad;
$ad->title = 'Free thumbs up!';
$ad->image_url = '/../../img/thumbCat.jpg';
$ad->description = 'Here\'s a free thumbs up for anyone that needs it! (And a kitty too)';
$ad->price = 1.01;
$ad->user_id = 7;
$ad->save();

$ad = new Ad;
$ad->title = 'Sofa Sleeper Couch Looking For A New Best Friend';
$ad->image_url = '/../../img/couch.jpg';
$ad->description = 'Hey there... so yeah, my worst fears have been realized. I was kicked out by my best friend this weekend. Him and his girlfriend are moving in together. He broke the news to me over the weekend. She couldn\'t "bear to part with her couch", so I\'m the one that has to move out. I KNEW she felt threatened by me... I could tell the first time she sat on me. So, I\'m looking for a new room mate and potential best friend... someone that appreciates what I have to offer and won\'t drop me just because their girl tells them to.';
$ad->price = 19.99;
$ad->user_id = 8;
$ad->save();

$ad = new Ad;
$ad->title = '1995 Jeep Grand Cherokee 134k miles';
$ad->image_url = '/../../img/jeep.jpg';
$ad->description = '1995 Jeep Grand Cherokee Special Edition. 5.2 V8. 134k miles. Runs great with tons of features like a non-working stereo, so you can spend quality time talking to your passenger and a non-working AC/Heater so you can roll down your windows and enjoy the outdoors. Lights! The lights work. I think that\'s pretty standard amongst most cars but I thought I should mention it anyway.';
$ad->price = 299.01;
$ad->user_id = 6;
$ad->save();

$ad = new Ad;
$ad->title = 'Free semi chewed up chair';
$ad->image_url = '/../../img/dogChair.jpg';
$ad->description = 'My dog ate part of my chair and he doesn\'t seem sorry about it. The chair works fine if you throw a blanket over the hole. Naughty dog not included';
$ad->price = 0.01;
$ad->user_id = 7;
$ad->save();





