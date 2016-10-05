<?php

require_once __DIR__ . '/../../models/User.php';
//1
$user = new User;
$user->name = "Liz Peacock";
$user->email = "liz@kitchen.com";
$user->username = "liz_the_kitchenqueen";
$user->password = $_ENV['USER_PASS'];
$user->role_id = 1;
$user->save();
//2
$user = new User;
$user->name = "Jessica Sattler";
$user->email = "jessi@kitchen.com";
$user->username = "jessi_the_kitchenmaster";
$user->password = $_ENV['USER_PASS'];
$user->role_id = 1;
$user->save();
//3
$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->role_id = 2;
$user->save();
//4
$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->role_id = 2;
$user->save();
//5
$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->role_id = 2;
$user->save();
//6
$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->role_id = 2;
$user->save();
//7
$user = new User;
$user->name = "Bob Belcher";
$user->email = "bob@bobsburgers.com";
$user->username = "burger_bob";
$user->password = $_ENV['USER_PASS'];
$user->role_id =2;
$user->save();
//8
$user = new User;
$user->name = "Linda Belcher";
$user->email = "linda@bobsburgers.com";
$user->username = "mrs_burger_bob";
$user->password = $_ENV['USER_PASS'];
$user->role_id =2;
$user->save();
//9
$user = new User;
$user->name = "Sam Winchester";
$user->email = "sammy@supernatural.com";
$user->username = "ghost_hunter";
$user->password = $_ENV['USER_PASS'];
$user->role_id =2;
$user->save();
//10
$user = new User;
$user->name = "Dean Winchester";
$user->email = "dean@supernatural.com";
$user->username = "better_than_sam";
$user->password = $_ENV['USER_PASS'];
$user->role_id =2;
$user->save();
//11
$user = new User;
$user->name = "Whitney Sattler";
$user->email = "whitney@bobsburgers.com";
$user->username = "whitless_wonderer";
$user->password = $_ENV['USER_PASS'];
$user->role_id =2;
$user->save();
//12
$user = new User;
$user->name = "Fabiana Smith";
$user->email = "fabi@kitty.com";
$user->username = "precious";
$user->password = $_ENV['USER_PASS'];
$user->role_id =2;
$user->save();



