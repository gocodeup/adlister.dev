<!--Page for an index of advertisements-->
<?php 
​$_ENV = include __DIR__ . '/../../.env.php';
      // will stop duplicate 
$truncate = 'TRUNCATE ads';
$dbc->exec($truncate);
​
$ads = [
    
        ['id' => 1, 'user_id' => 1, 'name' => 'Mattress','description' => 'Buy a mattress set here and get a free night stand for your room.', 'price'=> 150.00, 'image_url'=> '/img/1nightstand.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Gym Bag','description' => 'Brand new. Never used. Adidas gym bag', 'price'=> 150.00, 'image_url'=> '/img/adidasbag.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Helicopter','description' => 'Blackhawk CH-30 Russian Gunship Helicopter.', 'price'=> 150.00, 'image_url'=> '/img/blackhawk.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Classic BMW','description' => 'Yes, the same one Urcle had in Family Matters.', 'price'=> 150.00, 'image_url'=> '/img/bmwclassic.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Breakfast Buddy','description' => 'Cook it all at once! No seperate dishes or pans here.', 'price'=> 150.00, 'image_url'=> '/img/breakfast.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Breathe Fresh','description' => 'Try our breathe mints, you\'ll thank us.', 'price'=> 150.00, 'image_url'=> '/img/breathmints.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Chikuns','description' => 'Chikuns fur sell, cume an bye tu git yuo sem.', 'price'=> 150.00, 'image_url'=> '/img/chikuns.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Circumcision Trainer','description' => 'Like new, minimal use. Great for residents in this field.', 'price'=> 150.00, 'image_url'=> '/img/circumcisiontrainer.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Coach Purse','description' => 'Brand new. Never used. Coach purse.', 'price'=> 150.00, 'image_url'=> '/img/coachpurse.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Limited Edition Converse','description' => 'Limited Edition Converse Shoes, size 11.5 womens.', 'price'=> 150.00, 'image_url'=> '/img/coverselimited.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Desk Buddy','description' => 'Let desk buddy do all the dirty work for you.', 'price'=> 150.00, 'image_url'=> '/img/deskbuddy.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Restruant For Sale','description' => 'Dicks restruant for sale by owner.', 'price'=> 150.00, 'image_url'=> '/img/dickssale.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Building For Lease','description' => 'Building is for lease. 22,000 sq.ft.', 'price'=> 150.00, 'image_url'=> '/img/forlease.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Free DVDs','description' => 'Mom caught my Step Dad watching these, all must go today. FREE!', 'price'=> 150.00, 'image_url'=> '/img/freeporncollection.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Fixer-Upper','description' => 'Great Project car. Make offer.', 'price'=> 150.00, 'image_url'=> '/img/halfofcar.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Fat Wad','description' => 'Perfect for nutritionist to show clients the serious side of being obese. Make offer.', 'price'=> 150.00, 'image_url'=> '/img/humanfat.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Iphone','description' => 'Rarely used original IPHONE. No low ballers! Cash only!', 'price'=> 150.00, 'image_url'=> '/img/iphone.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Ipod Dock','description' => 'Now you can dock your device and jam while on your thrown.', 'price'=> 150.00, 'image_url'=> '/img/ipoddock.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Lake Front Property','description' => 'New lake front residential area. You will have the joys of living near the water and the comforts of the city.', 'price'=> 150.00, 'image_url'=> '/img/lakefrontproperty.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Laptop 4 Sale','description' => 'Slightly damaged laptop, running windows 98\'.', 'price'=> 150.00, 'image_url'=> '/img/laptop.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Louis Vuitton Wallet','description' => 'Great wallet for that special man in your life.', 'price'=> 150.00, 'image_url'=> '/img/louisvuittonwallet.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Drum of Lube','description' => 'Perfect for your dorm room, or frat house!', 'price'=> 150.00, 'image_url'=> '/img/lube.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Lucky the Dog','description' => 'Blind, 3 legged, and deaf dog seeks forever home.', 'price'=> 150.00, 'image_url'=> '/img/luckydog.png'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Macbook Pro','description' => 'Macbook Pro, running Windows NT, great starter PC.', 'price'=> 150.00, 'image_url'=> '/img/mac.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Need New Glasses','description' => 'Looks like you need a new prescription. Stop by Dr. Feilgud\'s today!', 'price'=> 150.00, 'image_url'=> '/img/needglasses.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Nintendo Wii','description' => 'Have a lot of Wii\'s im trying to unload. Make offer', 'price'=> 150.00, 'image_url'=> '/img/nintendowii.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Cute Pullover','description' => 'It\'s the panda pull over. Just great for that ugly sweater party.', 'price'=> 150.00, 'image_url'=> '/img/pandapullover.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Women\'s Underwear','description' => 'Like new, worn once(or twice) 1 pair is brand new.', 'price'=> 150.00, 'image_url'=> '/img/panties.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Playstation','description' => 'Selling my playstation, brand new in box. have some games too. hit me up.', 'price'=> 150.00, 'image_url'=> '/img/playstation.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Port-A-Chair','description' => 'Gently used Port-A-Chair, some stains remain near the seat area.', 'price'=> 150.00, 'image_url'=> '/img/portachair.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Playstation PSP','description' => 'Play your favorite PSP games with this new in box PSP by Playstation.', 'price'=> 150.00, 'image_url'=> '/img/pspplaystation.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Quick Sale','description' => 'Quick sale, Move in ready. Furniture included, make offer soon, because this house will not last long.', 'price'=> 150.00, 'image_url'=> '/img/quickmoveinsale.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Rabits','description' => 'Rabites four sails, ate um\' or kaep um\' yore choose.', 'price'=> 150.00, 'image_url'=> '/img/rabits.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Scooter the dog','description' => 'Scooter the dog looking for his forever home.', 'price'=> 150.00, 'image_url'=> '/img/scooterdog.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Free Snowmen','description' => 'Free snowmen, some assembly required.', 'price'=> 150.00, 'image_url'=> '/img/snowmen.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Multiplayer Tetris game','description' => 'Never be bored again on a rainy day.', 'price'=> 150.00, 'image_url'=> '/img/tetrisgame.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Tiny the dog','description' => 'Tiny the dog is looking for his forever home.', 'price'=> 150.00, 'image_url'=> '/img/tinythedog.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Classic Truck','description' => 'Classic, has very few number of parts missing. Great for person who wants to learn how to assymble a vehicle.', 'price'=> 150.00, 'image_url'=> '/img/truck.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => '32" TV 4 sale','description' => '32 in. TV for sale. Has great 420p resolution and comes with oem remote.', 'price'=> 150.00, 'image_url'=> '/img/tv.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Unicorn Meat','description' => 'Unique, one off exotic specialty canned meats. Every can comes with a letter of Authenticity.', 'price'=> 150.00, 'image_url'=> '/img/unicornmeat.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Uranium Ore','description' => 'For the nuclear physicist in your life.', 'price'=> 150.00, 'image_url'=> '/img/uraniumore.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Used Cows','description' => 'You read it right. These heffers were well taken care of and ready for sale.', 'price'=> 150.00, 'image_url'=> '/img/usedcows.jpg'],
        ['id' => 1, 'user_id' => 1, 'name' => 'Yard Gnomes','description' => 'Fraternity selling our yard gnomes. Buy one get 2 free!', 'price'=> 150.00, 'image_url'=> '/img/yardnomes.jpg'],      
        ['id' => 1, 'user_id' => 1, 'name' => 'Yard Sale','description' => 'Another one bites the dust. Come take advantage of these prices, they are to die for!', 'price'=> 150.00, 'image_url'=> '/img/yardsale.jpg'],             
];
​
$stmt = $dbc->prepare("INSERT INTO ads (id,user_id,name,description,price,image_url) VALUES (:id, :user_id, :name, :description, :price, :image_url)");
​
foreach ($ads as $ad)
{
    $stmt->bindvalue(':id', $ad['name'], PDO::PARAM_INT); 
    $stmt->bindvalue(':user_id', $ad['location'], PDO::PARAM_INT); 
    $stmt->bindvalue(':name', $ad['date_established'], PDO::PARAM_STR); 
    $stmt->bindvalue(':description', $ad['area_in_acres'], PDO::PARAM_INT);
    $stmt->bindvalue(':price', $ad['description'], PDO::PARAM_STR);
    $stmt->bindvalue(':image_url', $ad['image_url'], PDO::PARAM_STR);
​
    $stmt->execute();
}