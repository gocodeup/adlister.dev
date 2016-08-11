CREATE TABLE IF NOT EXISTS pokedex (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT,
 Pokedex INT NOT NULL,
 Pokemon VARCHAR(100) NOT NULL,
 Mega_evolution VARCHAR(100) NOT NULL,
 Total INT NOT NULL,
 Hp INT NOT NULL,
 Attack INT NOT NULL,
 Defense INT NOT NULL,
 SpAtt INT NOT NULL,
 SpDef INT NOT NULL,
 Speed INT NOT NULL,
 Image VARCHAR(100) NOT NULL,
 PRIMARY KEY (id)
); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('001', 'Bulbasaur', 'N/A', '318', '45', '49', '49', '65', '65', '45', 'assets/sugimori/1.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('002', 'Ivysaur', 'N/A', '405', '60', '62', '63', '80', '80', '60', 'assets/sugimori/2.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('003', 'Venusaur', 'N/A', '525', '80', '82', '83', '100', '100', '80', 'assets/sugimori/3.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('003', 'Venusaur', 'Mega Venusaur', '625', '80', '100', '123', '122', '120', '80', 'assets/sugimori/3-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('004', 'Charmander', 'N/A', '309', '39', '52', '43', '60', '50', '65', 'assets/sugimori/4.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('005', 'Charmeleon', 'N/A', '405', '58', '64', '58', '80', '65', '80', 'assets/sugimori/5.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('006', 'Charizard', 'N/A', '534', '78', '84', '78', '109', '85', '100', 'assets/sugimori/6.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('006', 'Charizard', 'Mega Charizard X', '634', '78', '130', '111', '130', '85', '100', 'assets/sugimori/6-mega-x.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('006', 'Charizard', 'Mega Charizard Y', '634', '78', '104', '78', '159', '115', '100', 'assets/sugimori/6-mega-y.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('007', 'Squirtle', 'N/A', '314', '44', '48', '65', '50', '64', '43', 'assets/sugimori/7.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('008', 'Wartortle', 'N/A', '405', '59', '63', '80', '65', '80', '58', 'assets/sugimori/8.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('009', 'Blastoise', 'N/A', '530', '79', '83', '100', '85', '105', '78', 'assets/sugimori/9.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('009', 'Blastoise', 'Mega Blastoise', '630', '79', '103', '120', '135', '115', '78', 'assets/sugimori/9-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('010', 'Caterpie', 'N/A', '195', '45', '30', '35', '20', '20', '45', 'assets/sugimori/10.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('011', 'Metapod', 'N/A', '205', '50', '20', '55', '25', '25', '30', 'assets/sugimori/11.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('012', 'Butterfree', 'N/A', '395', '60', '45', '50', '90', '80', '70', 'assets/sugimori/12.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('013', 'Weedle', 'N/A', '195', '40', '35', '30', '20', '20', '50', 'assets/sugimori/13.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('014', 'Kakuna', 'N/A', '205', '45', '25', '50', '25', '25', '35', 'assets/sugimori/14.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('015', 'Beedrill', 'N/A', '395', '65', '90', '40', '45', '80', '75', 'assets/sugimori/15.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('015', 'Beedrill', 'Mega Beedrill', '495', '65', '150', '40', '15', '80', '145', 'assets/sugimori/15-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('016', 'Pidgey', 'N/A', '251', '40', '45', '40', '35', '35', '56', 'assets/sugimori/16.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('017', 'Pidgeotto', 'N/A', '349', '63', '60', '55', '50', '50', '71', 'assets/sugimori/17.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('018', 'Pidgeot', 'N/A', '479', '83', '80', '75', '70', '70', '101', 'assets/sugimori/18.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('018', 'Pidgeot', 'Mega Pidgeot', '579', '83', '80', '80', '135', '80', '121', 'assets/sugimori/18-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('019', 'Rattata', 'N/A', '253', '30', '56', '35', '25', '35', '72', 'assets/sugimori/19.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('020', 'Raticate', 'N/A', '413', '55', '81', '60', '50', '70', '97', 'assets/sugimori/20.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('021', 'Spearow', 'N/A', '262', '40', '60', '30', '31', '31', '70', 'assets/sugimori/21.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('022', 'Fearow', 'N/A', '442', '65', '90', '65', '61', '61', '100', 'assets/sugimori/22.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('023', 'Ekans', 'N/A', '288', '35', '60', '44', '40', '54', '55', 'assets/sugimori/23.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('024', 'Arbok', 'N/A', '438', '60', '85', '69', '65', '79', '80', 'assets/sugimori/24.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('025', 'Pikachu', 'N/A', '320', '35', '55', '40', '50', '50', '90', 'assets/sugimori/25.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('026', 'Raichu', 'N/A', '485', '60', '90', '55', '90', '80', '110', 'assets/sugimori/26.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('027', 'Sandshrew', 'N/A', '300', '50', '75', '85', '20', '30', '40', 'assets/sugimori/27.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('028', 'Sandslash', 'N/A', '450', '75', '100', '110', '45', '55', '65', 'assets/sugimori/28.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('029', 'Nidoran♀', 'N/A', '275', '55', '47', '52', '40', '40', '41', 'assets/sugimori/29.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('030', 'Nidorina', 'N/A', '365', '70', '62', '67', '55', '55', '56', 'assets/sugimori/30.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('031', 'Nidoqueen', 'N/A', '505', '90', '92', '87', '75', '85', '76', 'assets/sugimori/31.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('032', 'Nidoran♂', 'N/A', '273', '46', '57', '40', '40', '40', '50', 'assets/sugimori/32.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('033', 'Nidorino', 'N/A', '365', '61', '72', '57', '55', '55', '65', 'assets/sugimori/33.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('034', 'Nidoking', 'N/A', '505', '81', '102', '77', '85', '75', '85', 'assets/sugimori/34.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('035', 'Clefairy', 'N/A', '323', '70', '45', '48', '60', '65', '35', 'assets/sugimori/35.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('036', 'Clefable', 'N/A', '483', '95', '70', '73', '95', '90', '60', 'assets/sugimori/36.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('037', 'Vulpix', 'N/A', '299', '38', '41', '40', '50', '65', '65', 'assets/sugimori/37.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('038', 'Ninetales', 'N/A', '505', '73', '76', '75', '81', '100', '100', 'assets/sugimori/38.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('039', 'Jigglypuff', 'N/A', '270', '115', '45', '20', '45', '25', '20', 'assets/sugimori/39.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('040', 'Wigglytuff', 'N/A', '435', '140', '70', '45', '85', '50', '45', 'assets/sugimori/40.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('041', 'Zubat', 'N/A', '245', '40', '45', '35', '30', '40', '55', 'assets/sugimori/41.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('042', 'Golbat', 'N/A', '455', '75', '80', '70', '65', '75', '90', 'assets/sugimori/42.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('043', 'Oddish', 'N/A', '320', '45', '50', '55', '75', '65', '30', 'assets/sugimori/43.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('044', 'Gloom', 'N/A', '395', '60', '65', '70', '85', '75', '40', 'assets/sugimori/44.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('045', 'Vileplume', 'N/A', '490', '75', '80', '85', '110', '90', '50', 'assets/sugimori/45.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('046', 'Paras', 'N/A', '285', '35', '70', '55', '45', '55', '25', 'assets/sugimori/46.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('047', 'Parasect', 'N/A', '405', '60', '95', '80', '60', '80', '30', 'assets/sugimori/47.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('048', 'Venonat', 'N/A', '305', '60', '55', '50', '40', '55', '45', 'assets/sugimori/48.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('049', 'Venomoth', 'N/A', '450', '70', '65', '60', '90', '75', '90', 'assets/sugimori/49.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('050', 'Diglett', 'N/A', '265', '10', '55', '25', '35', '45', '95', 'assets/sugimori/50.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('051', 'Dugtrio', 'N/A', '405', '35', '80', '50', '50', '70', '120', 'assets/sugimori/51.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('052', 'Meowth', 'N/A', '290', '40', '45', '35', '40', '40', '90', 'assets/sugimori/52.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('053', 'Persian', 'N/A', '440', '65', '70', '60', '65', '65', '115', 'assets/sugimori/53.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('054', 'Psyduck', 'N/A', '320', '50', '52', '48', '65', '50', '55', 'assets/sugimori/54.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('055', 'Golduck', 'N/A', '500', '80', '82', '78', '95', '80', '85', 'assets/sugimori/55.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('056', 'Mankey', 'N/A', '305', '40', '80', '35', '35', '45', '70', 'assets/sugimori/56.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('057', 'Primeape', 'N/A', '455', '65', '105', '60', '60', '70', '95', 'assets/sugimori/57.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('058', 'Growlithe', 'N/A', '350', '55', '70', '45', '70', '50', '60', 'assets/sugimori/58.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('059', 'Arcanine', 'N/A', '555', '90', '110', '80', '100', '80', '95', 'assets/sugimori/59.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('060', 'Poliwag', 'N/A', '300', '40', '50', '40', '40', '40', '90', 'assets/sugimori/60.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('061', 'Poliwhirl', 'N/A', '385', '65', '65', '65', '50', '50', '90', 'assets/sugimori/61.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('062', 'Poliwrath', 'N/A', '510', '90', '95', '95', '70', '90', '70', 'assets/sugimori/62.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('063', 'Abra', 'N/A', '310', '25', '20', '15', '105', '55', '90', 'assets/sugimori/63.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('064', 'Kadabra', 'N/A', '400', '40', '35', '30', '120', '70', '105', 'assets/sugimori/64.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('065', 'Alakazam', 'N/A', '500', '55', '50', '45', '135', '95', '120', 'assets/sugimori/65.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('065', 'Alakazam', 'Mega Alakazam', '590', '55', '50', '65', '175', '95', '150', 'assets/sugimori/65-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('066', 'Machop', 'N/A', '305', '70', '80', '50', '35', '35', '35', 'assets/sugimori/66.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('067', 'Machoke', 'N/A', '405', '80', '100', '70', '50', '60', '45', 'assets/sugimori/67.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('068', 'Machamp', 'N/A', '505', '90', '130', '80', '65', '85', '55', 'assets/sugimori/68.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('069', 'Bellsprout', 'N/A', '300', '50', '75', '35', '70', '30', '40', 'assets/sugimori/69.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('070', 'Weepinbell', 'N/A', '390', '65', '90', '50', '85', '45', '55', 'assets/sugimori/70.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('071', 'Victreebel', 'N/A', '490', '80', '105', '65', '100', '70', '70', 'assets/sugimori/71.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('072', 'Tentacool', 'N/A', '335', '40', '40', '35', '50', '100', '70', 'assets/sugimori/72.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('073', 'Tentacruel', 'N/A', '515', '80', '70', '65', '80', '120', '100', 'assets/sugimori/73.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('074', 'Geodude', 'N/A', '300', '40', '80', '100', '30', '30', '20', 'assets/sugimori/74.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('075', 'Graveler', 'N/A', '390', '55', '95', '115', '45', '45', '35', 'assets/sugimori/75.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('076', 'Golem', 'N/A', '495', '80', '120', '130', '55', '65', '45', 'assets/sugimori/76.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('077', 'Ponyta', 'N/A', '410', '50', '85', '55', '65', '65', '90', 'assets/sugimori/77.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('078', 'Rapidash', 'N/A', '500', '65', '100', '70', '80', '80', '105', 'assets/sugimori/78.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('079', 'Slowpoke', 'N/A', '315', '90', '65', '65', '40', '40', '15', 'assets/sugimori/79.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('080', 'Slowbro', 'N/A', '490', '95', '75', '110', '100', '80', '30', 'assets/sugimori/80.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('080', 'Slowbro', 'Mega Slowbro', '590', '95', '75', '180', '130', '80', '30', 'assets/sugimori/80-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('081', 'Magnemite', 'N/A', '325', '25', '35', '70', '95', '55', '45', 'assets/sugimori/81.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('082', 'Magneton', 'N/A', '465', '50', '60', '95', '120', '70', '70', 'assets/sugimori/82.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('083', 'Farfetch\'d', 'N/A', '352', '52', '65', '55', '58', '62', '60', 'assets/sugimori/83.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('084', 'Doduo', 'N/A', '310', '35', '85', '45', '35', '35', '75', 'assets/sugimori/84.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('085', 'Dodrio', 'N/A', '460', '60', '110', '70', '60', '60', '100', 'assets/sugimori/85.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('086', 'Seel', 'N/A', '325', '65', '45', '55', '45', '70', '45', 'assets/sugimori/86.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('087', 'Dewgong', 'N/A', '475', '90', '70', '80', '70', '95', '70', 'assets/sugimori/87.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('088', 'Grimer', 'N/A', '325', '80', '80', '50', '40', '50', '25', 'assets/sugimori/88.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('089', 'Muk', 'N/A', '500', '105', '105', '75', '65', '100', '50', 'assets/sugimori/89.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('090', 'Shellder', 'N/A', '305', '30', '65', '100', '45', '25', '40', 'assets/sugimori/90.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('091', 'Cloyster', 'N/A', '525', '50', '95', '180', '85', '45', '70', 'assets/sugimori/91.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('092', 'Gastly', 'N/A', '310', '30', '35', '30', '100', '35', '80', 'assets/sugimori/92.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('093', 'Haunter', 'N/A', '405', '45', '50', '45', '115', '55', '95', 'assets/sugimori/93.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('094', 'Gengar', 'N/A', '500', '60', '65', '60', '130', '75', '110', 'assets/sugimori/94.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('094', 'Gengar', 'Mega Gengar', '600', '60', '65', '80', '170', '95', '130', 'assets/sugimori/94-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('095', 'Onix', 'N/A', '385', '35', '45', '160', '30', '45', '70', 'assets/sugimori/95.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('096', 'Drowzee', 'N/A', '328', '60', '48', '45', '43', '90', '42', 'assets/sugimori/96.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('097', 'Hypno', 'N/A', '483', '85', '73', '70', '73', '115', '67', 'assets/sugimori/97.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('098', 'Krabby', 'N/A', '325', '30', '105', '90', '25', '25', '50', 'assets/sugimori/98.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('099', 'Kingler', 'N/A', '475', '55', '130', '115', '50', '50', '75', 'assets/sugimori/99.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('100', 'Voltorb', 'N/A', '330', '40', '30', '50', '55', '55', '100', 'assets/sugimori/100.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('101', 'Electrode', 'N/A', '480', '60', '50', '70', '80', '80', '140', 'assets/sugimori/101.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('102', 'Exeggcute', 'N/A', '325', '60', '40', '80', '60', '45', '40', 'assets/sugimori/102.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('103', 'Exeggutor', 'N/A', '520', '95', '95', '85', '125', '65', '55', 'assets/sugimori/103.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('104', 'Cubone', 'N/A', '320', '50', '50', '95', '40', '50', '35', 'assets/sugimori/104.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('105', 'Marowak', 'N/A', '425', '60', '80', '110', '50', '80', '45', 'assets/sugimori/105.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('106', 'Hitmonlee', 'N/A', '455', '50', '120', '53', '35', '110', '87', 'assets/sugimori/106.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('107', 'Hitmonchan', 'N/A', '455', '50', '105', '79', '35', '110', '76', 'assets/sugimori/107.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('108', 'Lickitung', 'N/A', '385', '90', '55', '75', '60', '75', '30', 'assets/sugimori/108.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('109', 'Koffing', 'N/A', '340', '40', '65', '95', '60', '45', '35', 'assets/sugimori/109.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('110', 'Weezing', 'N/A', '490', '65', '90', '120', '85', '70', '60', 'assets/sugimori/110.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('111', 'Rhyhorn', 'N/A', '345', '80', '85', '95', '30', '30', '25', 'assets/sugimori/111.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('112', 'Rhydon', 'N/A', '485', '105', '130', '120', '45', '45', '40', 'assets/sugimori/112.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('113', 'Chansey', 'N/A', '450', '250', '5', '5', '35', '105', '50', 'assets/sugimori/113.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('114', 'Tangela', 'N/A', '435', '65', '55', '115', '100', '40', '60', 'assets/sugimori/114.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('115', 'Kangaskhan', 'N/A', '490', '105', '95', '80', '40', '80', '90', 'assets/sugimori/115.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('115', 'Kangaskhan', 'Mega Kangaskhan', '590', '105', '125', '100', '60', '100', '100', 'assets/sugimori/115-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('116', 'Horsea', 'N/A', '295', '30', '40', '70', '70', '25', '60', 'assets/sugimori/116.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('117', 'Seadra', 'N/A', '440', '55', '65', '95', '95', '45', '85', 'assets/sugimori/117.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('118', 'Goldeen', 'N/A', '320', '45', '67', '60', '35', '50', '63', 'assets/sugimori/118.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('119', 'Seaking', 'N/A', '450', '80', '92', '65', '65', '80', '68', 'assets/sugimori/119.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('120', 'Staryu', 'N/A', '340', '30', '45', '55', '70', '55', '85', 'assets/sugimori/120.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('121', 'Starmie', 'N/A', '520', '60', '75', '85', '100', '85', '115', 'assets/sugimori/121.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('122', 'Mr. Mime', 'N/A', '460', '40', '45', '65', '100', '120', '90', 'assets/sugimori/122.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('123', 'Scyther', 'N/A', '500', '70', '110', '80', '55', '80', '105', 'assets/sugimori/123.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('124', 'Jynx', 'N/A', '455', '65', '50', '35', '115', '95', '95', 'assets/sugimori/124.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('125', 'Electabuzz', 'N/A', '490', '65', '83', '57', '95', '85', '105', 'assets/sugimori/125.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('126', 'Magmar', 'N/A', '495', '65', '95', '57', '100', '85', '93', 'assets/sugimori/126.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('127', 'Pinsir', 'N/A', '500', '65', '125', '100', '55', '70', '85', 'assets/sugimori/127.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('127', 'Pinsir', 'Mega Pinsir', '600', '65', '155', '120', '65', '90', '105', 'assets/sugimori/127-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('128', 'Tauros', 'N/A', '490', '75', '100', '95', '40', '70', '110', 'assets/sugimori/128.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('129', 'Magikarp', 'N/A', '200', '20', '10', '55', '15', '20', '80', 'assets/sugimori/129.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('130', 'Gyarados', 'N/A', '540', '95', '125', '79', '60', '100', '81', 'assets/sugimori/130.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('130', 'Gyarados', 'Mega Gyarados', '640', '95', '155', '109', '70', '130', '81', 'assets/sugimori/130-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('131', 'Lapras', 'N/A', '535', '130', '85', '80', '85', '95', '60', 'assets/sugimori/131.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('132', 'Ditto', 'N/A', '288', '48', '48', '48', '48', '48', '48', 'assets/sugimori/132.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('133', 'Eevee', 'N/A', '325', '55', '55', '50', '45', '65', '55', 'assets/sugimori/133.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('134', 'Vaporeon', 'N/A', '525', '130', '65', '60', '110', '95', '65', 'assets/sugimori/134.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('135', 'Jolteon', 'N/A', '525', '65', '65', '60', '110', '95', '130', 'assets/sugimori/135.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('136', 'Flareon', 'N/A', '525', '65', '130', '60', '95', '110', '65', 'assets/sugimori/136.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('137', 'Porygon', 'N/A', '395', '65', '60', '70', '85', '75', '40', 'assets/sugimori/137.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('138', 'Omanyte', 'N/A', '355', '35', '40', '100', '90', '55', '35', 'assets/sugimori/138.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('139', 'Omastar', 'N/A', '495', '70', '60', '125', '115', '70', '55', 'assets/sugimori/139.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('140', 'Kabuto', 'N/A', '355', '30', '80', '90', '55', '45', '55', 'assets/sugimori/140.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('141', 'Kabutops', 'N/A', '495', '60', '115', '105', '65', '70', '80', 'assets/sugimori/141.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('142', 'Aerodactyl', 'N/A', '515', '80', '105', '65', '60', '75', '130', 'assets/sugimori/142.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('142', 'Aerodactyl', 'Mega Aerodactyl', '615', '80', '135', '85', '70', '95', '150', 'assets/sugimori/142-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('143', 'Snorlax', 'N/A', '540', '160', '110', '65', '65', '110', '30', 'assets/sugimori/143.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('144', 'Articuno', 'N/A', '580', '90', '85', '100', '95', '125', '85', 'assets/sugimori/144.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('145', 'Zapdos', 'N/A', '580', '90', '90', '85', '125', '90', '100', 'assets/sugimori/145.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('146', 'Moltres', 'N/A', '580', '90', '100', '90', '125', '85', '90', 'assets/sugimori/146.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('147', 'Dratini', 'N/A', '300', '41', '64', '45', '50', '50', '50', 'assets/sugimori/147.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('148', 'Dragonair', 'N/A', '420', '61', '84', '65', '70', '70', '70', 'assets/sugimori/148.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('149', 'Dragonite', 'N/A', '600', '91', '134', '95', '100', '100', '80', 'assets/sugimori/149.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('150', 'Mewtwo', 'N/A', '680', '106', '110', '90', '154', '90', '130', 'assets/sugimori/150.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('150', 'Mewtwo', 'Mega Mewtwo X', '780', '106', '190', '100', '154', '100', '130', 'assets/sugimori/150-mega-x.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('150', 'Mewtwo', 'Mega Mewtwo Y', '780', '106', '150', '70', '194', '120', '140', 'assets/sugimori/150-mega-y.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('151', 'Mew', 'N/A', '600', '100', '100', '100', '100', '100', '100', 'assets/sugimori/151.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('152', 'Chikorita', 'N/A', '318', '45', '49', '65', '49', '65', '45', 'assets/sugimori/152.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('153', 'Bayleef', 'N/A', '405', '60', '62', '80', '63', '80', '60', 'assets/sugimori/153.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('154', 'Meganium', 'N/A', '525', '80', '82', '100', '83', '100', '80', 'assets/sugimori/154.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('155', 'Cyndaquil', 'N/A', '309', '39', '52', '43', '60', '50', '65', 'assets/sugimori/155.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('156', 'Quilava', 'N/A', '405', '58', '64', '58', '80', '65', '80', 'assets/sugimori/156.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('157', 'Typhlosion', 'N/A', '534', '78', '84', '78', '109', '85', '100', 'assets/sugimori/157.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('158', 'Totodile', 'N/A', '314', '50', '65', '64', '44', '48', '43', 'assets/sugimori/158.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('159', 'Croconaw', 'N/A', '405', '65', '80', '80', '59', '63', '58', 'assets/sugimori/159.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('160', 'Feraligatr', 'N/A', '530', '85', '105', '100', '79', '83', '78', 'assets/sugimori/160.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('161', 'Sentret', 'N/A', '215', '35', '46', '34', '35', '45', '20', 'assets/sugimori/161.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('162', 'Furret', 'N/A', '415', '85', '76', '64', '45', '55', '90', 'assets/sugimori/162.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('163', 'Hoothoot', 'N/A', '262', '60', '30', '30', '36', '56', '50', 'assets/sugimori/163.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('164', 'Noctowl', 'N/A', '442', '100', '50', '50', '76', '96', '70', 'assets/sugimori/164.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('165', 'Ledyba', 'N/A', '265', '40', '20', '30', '40', '80', '55', 'assets/sugimori/165.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('166', 'Ledian', 'N/A', '390', '55', '35', '50', '55', '110', '85', 'assets/sugimori/166.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('167', 'Spinarak', 'N/A', '250', '40', '60', '40', '40', '40', '30', 'assets/sugimori/167.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('168', 'Ariados', 'N/A', '390', '70', '90', '70', '60', '60', '40', 'assets/sugimori/168.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('169', 'Crobat', 'N/A', '535', '85', '90', '80', '70', '80', '130', 'assets/sugimori/169.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('170', 'Chinchou', 'N/A', '330', '75', '38', '38', '56', '56', '67', 'assets/sugimori/170.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('171', 'Lanturn', 'N/A', '460', '125', '58', '58', '76', '76', '67', 'assets/sugimori/171.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('172', 'Pichu', 'N/A', '205', '20', '40', '15', '35', '35', '60', 'assets/sugimori/172.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('173', 'Cleffa', 'N/A', '218', '50', '25', '28', '45', '55', '15', 'assets/sugimori/173.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('174', 'Igglybuff', 'N/A', '210', '90', '30', '15', '40', '20', '15', 'assets/sugimori/174.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('175', 'Togepi', 'N/A', '245', '35', '20', '65', '40', '65', '20', 'assets/sugimori/175.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('176', 'Togetic', 'N/A', '405', '55', '40', '85', '80', '105', '40', 'assets/sugimori/176.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('177', 'Natu', 'N/A', '320', '40', '50', '45', '70', '45', '70', 'assets/sugimori/177.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('178', 'Xatu', 'N/A', '470', '65', '75', '70', '95', '70', '95', 'assets/sugimori/178.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('179', 'Mareep', 'N/A', '280', '55', '40', '40', '65', '45', '35', 'assets/sugimori/179.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('180', 'Flaaffy', 'N/A', '365', '70', '55', '55', '80', '60', '45', 'assets/sugimori/180.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('181', 'Ampharos', 'N/A', '510', '90', '75', '85', '115', '90', '55', 'assets/sugimori/181.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('181', 'Ampharos', 'Mega Ampharos', '610', '90', '95', '105', '165', '110', '45', 'assets/sugimori/181-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('182', 'Bellossom', 'N/A', '490', '75', '80', '95', '90', '100', '50', 'assets/sugimori/182.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('183', 'Marill', 'N/A', '250', '70', '20', '50', '20', '50', '40', 'assets/sugimori/183.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('184', 'Azumarill', 'N/A', '420', '100', '50', '80', '60', '80', '50', 'assets/sugimori/184.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('185', 'Sudowoodo', 'N/A', '410', '70', '100', '115', '30', '65', '30', 'assets/sugimori/185.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('186', 'Politoed', 'N/A', '500', '90', '75', '75', '90', '100', '70', 'assets/sugimori/186.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('187', 'Hoppip', 'N/A', '250', '35', '35', '40', '35', '55', '50', 'assets/sugimori/187.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('188', 'Skiploom', 'N/A', '340', '55', '45', '50', '45', '65', '80', 'assets/sugimori/188.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('189', 'Jumpluff', 'N/A', '460', '75', '55', '70', '55', '95', '110', 'assets/sugimori/189.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('190', 'Aipom', 'N/A', '360', '55', '70', '55', '40', '55', '85', 'assets/sugimori/190.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('191', 'Sunkern', 'N/A', '180', '30', '30', '30', '30', '30', '30', 'assets/sugimori/191.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('192', 'Sunflora', 'N/A', '425', '75', '75', '55', '105', '85', '30', 'assets/sugimori/192.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('193', 'Yanma', 'N/A', '390', '65', '65', '45', '75', '45', '95', 'assets/sugimori/193.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('194', 'Wooper', 'N/A', '210', '55', '45', '45', '25', '25', '15', 'assets/sugimori/194.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('195', 'Quagsire', 'N/A', '430', '95', '85', '85', '65', '65', '35', 'assets/sugimori/195.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('196', 'Espeon', 'N/A', '525', '65', '65', '60', '130', '95', '110', 'assets/sugimori/196.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('197', 'Umbreon', 'N/A', '525', '95', '65', '110', '60', '130', '65', 'assets/sugimori/197.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('198', 'Murkrow', 'N/A', '405', '60', '85', '42', '85', '42', '91', 'assets/sugimori/198.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('199', 'Slowking', 'N/A', '490', '95', '75', '80', '100', '110', '30', 'assets/sugimori/199.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('200', 'Misdreavus', 'N/A', '435', '60', '60', '60', '85', '85', '85', 'assets/sugimori/200.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('201', 'Unown', 'N/A', '336', '48', '72', '48', '72', '48', '48', 'assets/sugimori/201.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('202', 'Wobbuffet', 'N/A', '405', '190', '33', '58', '33', '58', '33', 'assets/sugimori/202.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('203', 'Girafarig', 'N/A', '455', '70', '80', '65', '90', '65', '85', 'assets/sugimori/203.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('204', 'Pineco', 'N/A', '290', '50', '65', '90', '35', '35', '15', 'assets/sugimori/204.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('205', 'Forretress', 'N/A', '465', '75', '90', '140', '60', '60', '40', 'assets/sugimori/205.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('206', 'Dunsparce', 'N/A', '415', '100', '70', '70', '65', '65', '45', 'assets/sugimori/206.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('207', 'Gligar', 'N/A', '430', '65', '75', '105', '35', '65', '85', 'assets/sugimori/207.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('208', 'Steelix', 'N/A', '510', '75', '85', '200', '55', '65', '30', 'assets/sugimori/208.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('208', 'Steelix', 'Mega Steelix', '610', '75', '125', '230', '55', '95', '30', 'assets/sugimori/208-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('209', 'Snubbull', 'N/A', '300', '60', '80', '50', '40', '40', '30', 'assets/sugimori/209.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('210', 'Granbull', 'N/A', '450', '90', '120', '75', '60', '60', '45', 'assets/sugimori/210.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('211', 'Qwilfish', 'N/A', '430', '65', '95', '75', '55', '55', '85', 'assets/sugimori/211.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('212', 'Scizor', 'N/A', '500', '70', '130', '100', '55', '80', '65', 'assets/sugimori/212.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('212', 'Scizor', 'Mega Scizor', '600', '70', '150', '140', '65', '100', '75', 'assets/sugimori/212-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('213', 'Shuckle', 'N/A', '505', '20', '10', '230', '10', '230', '5', 'assets/sugimori/213.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('214', 'Heracross', 'N/A', '500', '80', '125', '75', '40', '95', '85', 'assets/sugimori/214.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('214', 'Heracross', 'Mega Heracross', '600', '80', '185', '115', '40', '105', '75', 'assets/sugimori/214-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('215', 'Sneasel', 'N/A', '430', '55', '95', '55', '35', '75', '115', 'assets/sugimori/215.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('216', 'Teddiursa', 'N/A', '330', '60', '80', '50', '50', '50', '40', 'assets/sugimori/216.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('217', 'Ursaring', 'N/A', '500', '90', '130', '75', '75', '75', '55', 'assets/sugimori/217.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('218', 'Slugma', 'N/A', '250', '40', '40', '40', '70', '40', '20', 'assets/sugimori/218.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('219', 'Magcargo', 'N/A', '410', '50', '50', '120', '80', '80', '30', 'assets/sugimori/219.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('220', 'Swinub', 'N/A', '250', '50', '50', '40', '30', '30', '50', 'assets/sugimori/220.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('221', 'Piloswine', 'N/A', '450', '100', '100', '80', '60', '60', '50', 'assets/sugimori/221.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('222', 'Corsola', 'N/A', '380', '55', '55', '85', '65', '85', '35', 'assets/sugimori/222.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('223', 'Remoraid', 'N/A', '300', '35', '65', '35', '65', '35', '65', 'assets/sugimori/223.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('224', 'Octillery', 'N/A', '480', '75', '105', '75', '105', '75', '45', 'assets/sugimori/224.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('225', 'Delibird', 'N/A', '330', '45', '55', '45', '65', '45', '75', 'assets/sugimori/225.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('226', 'Mantine', 'N/A', '465', '65', '40', '70', '80', '140', '70', 'assets/sugimori/226.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('227', 'Skarmory', 'N/A', '465', '65', '80', '140', '40', '70', '70', 'assets/sugimori/227.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('228', 'Houndour', 'N/A', '330', '45', '60', '30', '80', '50', '65', 'assets/sugimori/228.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('229', 'Houndoom', 'N/A', '500', '75', '90', '50', '110', '80', '95', 'assets/sugimori/229.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('229', 'Houndoom', 'Mega Houndoom', '600', '75', '90', '90', '140', '90', '115', 'assets/sugimori/229-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('230', 'Kingdra', 'N/A', '540', '75', '95', '95', '95', '95', '85', 'assets/sugimori/230.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('231', 'Phanpy', 'N/A', '330', '90', '60', '60', '40', '40', '40', 'assets/sugimori/231.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('232', 'Donphan', 'N/A', '500', '90', '120', '120', '60', '60', '50', 'assets/sugimori/232.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('233', 'Porygon2', 'N/A', '515', '85', '80', '90', '105', '95', '60', 'assets/sugimori/233.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('234', 'Stantler', 'N/A', '465', '73', '95', '62', '85', '65', '85', 'assets/sugimori/234.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('235', 'Smeargle', 'N/A', '250', '55', '20', '35', '20', '45', '75', 'assets/sugimori/235.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('236', 'Tyrogue', 'N/A', '210', '35', '35', '35', '35', '35', '35', 'assets/sugimori/236.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('237', 'Hitmontop', 'N/A', '455', '50', '95', '95', '35', '110', '70', 'assets/sugimori/237.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('238', 'Smoochum', 'N/A', '305', '45', '30', '15', '85', '65', '65', 'assets/sugimori/238.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('239', 'Elekid', 'N/A', '360', '45', '63', '37', '65', '55', '95', 'assets/sugimori/239.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('240', 'Magby', 'N/A', '365', '45', '75', '37', '70', '55', '83', 'assets/sugimori/240.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('241', 'Miltank', 'N/A', '490', '95', '80', '105', '40', '70', '100', 'assets/sugimori/241.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('242', 'Blissey', 'N/A', '540', '255', '10', '10', '75', '135', '55', 'assets/sugimori/242.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('243', 'Raikou', 'N/A', '580', '90', '85', '75', '115', '100', '115', 'assets/sugimori/243.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('244', 'Entei', 'N/A', '580', '115', '115', '85', '90', '75', '100', 'assets/sugimori/244.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('245', 'Suicune', 'N/A', '580', '100', '75', '115', '90', '115', '85', 'assets/sugimori/245.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('246', 'Larvitar', 'N/A', '300', '50', '64', '50', '45', '50', '41', 'assets/sugimori/246.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('247', 'Pupitar', 'N/A', '410', '70', '84', '70', '65', '70', '51', 'assets/sugimori/247.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('248', 'Tyranitar', 'N/A', '600', '100', '134', '110', '95', '100', '61', 'assets/sugimori/248.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('248', 'Tyranitar', 'Mega Tyranitar', '700', '100', '164', '150', '95', '120', '71', 'assets/sugimori/248-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('249', 'Lugia', 'N/A', '680', '106', '90', '130', '90', '154', '110', 'assets/sugimori/249.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('250', 'Ho-oh', 'N/A', '680', '106', '130', '90', '110', '154', '90', 'assets/sugimori/250.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('251', 'Celebi', 'N/A', '600', '100', '100', '100', '100', '100', '100', 'assets/sugimori/251.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('252', 'Treecko', 'N/A', '310', '40', '45', '35', '65', '55', '70', 'assets/sugimori/252.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('253', 'Grovyle', 'N/A', '405', '50', '65', '45', '85', '65', '95', 'assets/sugimori/253.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('254', 'Sceptile', 'N/A', '530', '70', '85', '65', '105', '85', '120', 'assets/sugimori/254.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('254', 'Sceptile', 'Mega Sceptile', '630', '70', '110', '75', '145', '85', '145', 'assets/sugimori/254-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('255', 'Torchic', 'N/A', '310', '45', '60', '40', '70', '50', '45', 'assets/sugimori/255.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('256', 'Combusken', 'N/A', '405', '60', '85', '60', '85', '60', '55', 'assets/sugimori/256.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('257', 'Blaziken', 'N/A', '530', '80', '120', '70', '110', '70', '80', 'assets/sugimori/257.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('257', 'Blaziken', 'Mega Blaziken', '630', '80', '160', '80', '130', '80', '100', 'assets/sugimori/257-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('258', 'Mudkip', 'N/A', '310', '50', '70', '50', '50', '50', '40', 'assets/sugimori/258.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('259', 'Marshtomp', 'N/A', '405', '70', '85', '70', '60', '70', '50', 'assets/sugimori/259.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('260', 'Swampert', 'N/A', '535', '100', '110', '90', '85', '90', '60', 'assets/sugimori/260.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('260', 'Swampert', 'Mega Swampert', '635', '100', '150', '110', '95', '110', '70', 'assets/sugimori/260-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('261', 'Poochyena', 'N/A', '220', '35', '55', '35', '30', '30', '35', 'assets/sugimori/261.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('262', 'Mightyena', 'N/A', '420', '70', '90', '70', '60', '60', '70', 'assets/sugimori/262.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('263', 'Zigzagoon', 'N/A', '240', '38', '30', '41', '30', '41', '60', 'assets/sugimori/263.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('264', 'Linoone', 'N/A', '420', '78', '70', '61', '50', '61', '100', 'assets/sugimori/264.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('265', 'Wurmple', 'N/A', '195', '45', '45', '35', '20', '30', '20', 'assets/sugimori/265.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('266', 'Silcoon', 'N/A', '205', '50', '35', '55', '25', '25', '15', 'assets/sugimori/266.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('267', 'Beautifly', 'N/A', '395', '60', '70', '50', '100', '50', '65', 'assets/sugimori/267.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('268', 'Cascoon', 'N/A', '205', '50', '35', '55', '25', '25', '15', 'assets/sugimori/268.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('269', 'Dustox', 'N/A', '385', '60', '50', '70', '50', '90', '65', 'assets/sugimori/269.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('270', 'Lotad', 'N/A', '220', '40', '30', '30', '40', '50', '30', 'assets/sugimori/270.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('271', 'Lombre', 'N/A', '340', '60', '50', '50', '60', '70', '50', 'assets/sugimori/271.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('272', 'Ludicolo', 'N/A', '480', '80', '70', '70', '90', '100', '70', 'assets/sugimori/272.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('273', 'Seedot', 'N/A', '220', '40', '40', '50', '30', '30', '30', 'assets/sugimori/273.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('274', 'Nuzleaf', 'N/A', '340', '70', '70', '40', '60', '40', '60', 'assets/sugimori/274.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('275', 'Shiftry', 'N/A', '480', '90', '100', '60', '90', '60', '80', 'assets/sugimori/275.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('276', 'Taillow', 'N/A', '270', '40', '55', '30', '30', '30', '85', 'assets/sugimori/276.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('277', 'Swellow', 'N/A', '430', '60', '85', '60', '50', '50', '125', 'assets/sugimori/277.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('278', 'Wingull', 'N/A', '270', '40', '30', '30', '55', '30', '85', 'assets/sugimori/278.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('279', 'Pelipper', 'N/A', '430', '60', '50', '100', '85', '70', '65', 'assets/sugimori/279.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('280', 'Ralts', 'N/A', '198', '28', '25', '25', '45', '35', '40', 'assets/sugimori/280.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('281', 'Kirlia', 'N/A', '278', '38', '35', '35', '65', '55', '50', 'assets/sugimori/281.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('282', 'Gardevoir', 'N/A', '518', '68', '65', '65', '125', '115', '80', 'assets/sugimori/282.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('282', 'Gardevoir', 'Mega Gardevoir', '618', '68', '85', '65', '165', '135', '100', 'assets/sugimori/282-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('283', 'Surskit', 'N/A', '269', '40', '30', '32', '50', '52', '65', 'assets/sugimori/283.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('284', 'Masquerain', 'N/A', '414', '70', '60', '62', '80', '82', '60', 'assets/sugimori/284.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('285', 'Shroomish', 'N/A', '295', '60', '40', '60', '40', '60', '35', 'assets/sugimori/285.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('286', 'Breloom', 'N/A', '460', '60', '130', '80', '60', '60', '70', 'assets/sugimori/286.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('287', 'Slakoth', 'N/A', '280', '60', '60', '60', '35', '35', '30', 'assets/sugimori/287.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('288', 'Vigoroth', 'N/A', '440', '80', '80', '80', '55', '55', '90', 'assets/sugimori/288.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('289', 'Slaking', 'N/A', '670', '150', '160', '100', '95', '65', '100', 'assets/sugimori/289.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('290', 'Nincada', 'N/A', '266', '31', '45', '90', '30', '30', '40', 'assets/sugimori/290.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('291', 'Ninjask', 'N/A', '456', '61', '90', '45', '50', '50', '160', 'assets/sugimori/291.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('292', 'Shedinja', 'N/A', '236', '1', '90', '45', '30', '30', '40', 'assets/sugimori/292.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('293', 'Whismur', 'N/A', '240', '64', '51', '23', '51', '23', '28', 'assets/sugimori/293.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('294', 'Loudred', 'N/A', '360', '84', '71', '43', '71', '43', '48', 'assets/sugimori/294.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('295', 'Exploud', 'N/A', '490', '104', '91', '63', '91', '73', '68', 'assets/sugimori/295.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('296', 'Makuhita', 'N/A', '237', '72', '60', '30', '20', '30', '25', 'assets/sugimori/296.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('297', 'Hariyama', 'N/A', '474', '144', '120', '60', '40', '60', '50', 'assets/sugimori/297.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('298', 'Azurill', 'N/A', '190', '50', '20', '40', '20', '40', '20', 'assets/sugimori/298.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('299', 'Nosepass', 'N/A', '375', '30', '45', '135', '45', '90', '30', 'assets/sugimori/299.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('300', 'Skitty', 'N/A', '260', '50', '45', '45', '35', '35', '50', 'assets/sugimori/300.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('301', 'Delcatty', 'N/A', '380', '70', '65', '65', '55', '55', '70', 'assets/sugimori/301.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('302', 'Sableye', 'N/A', '380', '50', '75', '75', '65', '65', '50', 'assets/sugimori/302.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('302', 'Sableye', 'Mega Sableye', '480', '50', '85', '125', '85', '115', '20', 'assets/sugimori/302-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('303', 'Mawile', 'N/A', '380', '50', '85', '85', '55', '55', '50', 'assets/sugimori/303.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('303', 'Mawile', 'Mega Mawile', '480', '50', '105', '125', '55', '95', '50', 'assets/sugimori/303-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('304', 'Aron', 'N/A', '330', '50', '70', '100', '40', '40', '30', 'assets/sugimori/304.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('305', 'Lairon', 'N/A', '430', '60', '90', '140', '50', '50', '40', 'assets/sugimori/305.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('306', 'Aggron', 'N/A', '530', '70', '110', '180', '60', '60', '50', 'assets/sugimori/306.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('306', 'Aggron', 'Mega Aggron', '630', '70', '140', '230', '60', '80', '50', 'assets/sugimori/306-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('307', 'Meditite', 'N/A', '280', '30', '40', '55', '40', '55', '60', 'assets/sugimori/307.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('308', 'Medicham', 'N/A', '410', '60', '60', '75', '60', '75', '80', 'assets/sugimori/308.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('308', 'Medicham', 'Mega Medicham', '510', '60', '100', '85', '80', '85', '100', 'assets/sugimori/308-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('309', 'Electrike', 'N/A', '295', '40', '45', '40', '65', '40', '65', 'assets/sugimori/309.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('310', 'Manectric', 'N/A', '475', '70', '75', '60', '105', '60', '105', 'assets/sugimori/310.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('310', 'Manectric', 'Mega Manectric', '575', '70', '75', '80', '135', '80', '135', 'assets/sugimori/310-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('311', 'Plusle', 'N/A', '405', '60', '50', '40', '85', '75', '95', 'assets/sugimori/311.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('312', 'Minun', 'N/A', '405', '60', '40', '50', '75', '85', '95', 'assets/sugimori/312.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('313', 'Volbeat', 'N/A', '400', '65', '73', '55', '47', '75', '85', 'assets/sugimori/313.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('314', 'Illumise', 'N/A', '400', '65', '47', '55', '73', '75', '85', 'assets/sugimori/314.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('315', 'Roselia', 'N/A', '400', '50', '60', '45', '100', '80', '65', 'assets/sugimori/315.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('316', 'Gulpin', 'N/A', '302', '70', '43', '53', '43', '53', '40', 'assets/sugimori/316.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('317', 'Swalot', 'N/A', '467', '100', '73', '83', '73', '83', '55', 'assets/sugimori/317.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('318', 'Carvanha', 'N/A', '305', '45', '90', '20', '65', '20', '65', 'assets/sugimori/318.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('319', 'Sharpedo', 'N/A', '460', '70', '120', '40', '95', '40', '95', 'assets/sugimori/319.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('319', 'Sharpedo', 'Mega Sharpedo', '560', '70', '140', '70', '110', '65', '105', 'assets/sugimori/319-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('320', 'Wailmer', 'N/A', '400', '130', '70', '35', '70', '35', '60', 'assets/sugimori/320.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('321', 'Wailord', 'N/A', '500', '170', '90', '45', '90', '45', '60', 'assets/sugimori/321.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('322', 'Numel', 'N/A', '305', '60', '60', '40', '65', '45', '35', 'assets/sugimori/322.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('323', 'Camerupt', 'N/A', '460', '70', '100', '70', '105', '75', '40', 'assets/sugimori/323.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('323', 'Camerupt', 'Mega Camerupt', '560', '70', '120', '100', '145', '105', '20', 'assets/sugimori/323-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('324', 'Torkoal', 'N/A', '470', '70', '85', '140', '85', '70', '20', 'assets/sugimori/324.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('325', 'Spoink', 'N/A', '330', '60', '25', '35', '70', '80', '60', 'assets/sugimori/325.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('326', 'Grumpig', 'N/A', '470', '80', '45', '65', '90', '110', '80', 'assets/sugimori/326.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('327', 'Spinda', 'N/A', '360', '60', '60', '60', '60', '60', '60', 'assets/sugimori/327.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('328', 'Trapinch', 'N/A', '290', '45', '100', '45', '45', '45', '10', 'assets/sugimori/328.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('329', 'Vibrava', 'N/A', '340', '50', '70', '50', '50', '50', '70', 'assets/sugimori/329.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('330', 'Flygon', 'N/A', '520', '80', '100', '80', '80', '80', '100', 'assets/sugimori/330.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('331', 'Cacnea', 'N/A', '335', '50', '85', '40', '85', '40', '35', 'assets/sugimori/331.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('332', 'Cacturne', 'N/A', '475', '70', '115', '60', '115', '60', '55', 'assets/sugimori/332.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('333', 'Swablu', 'N/A', '310', '45', '40', '60', '40', '75', '50', 'assets/sugimori/333.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('334', 'Altaria', 'N/A', '490', '75', '70', '90', '70', '105', '80', 'assets/sugimori/334.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('334', 'Altaria', 'Mega Altaria', '590', '75', '110', '110', '110', '105', '80', 'assets/sugimori/334-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('335', 'Zangoose', 'N/A', '458', '73', '115', '60', '60', '60', '90', 'assets/sugimori/335.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('336', 'Seviper', 'N/A', '458', '73', '100', '60', '100', '60', '65', 'assets/sugimori/336.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('337', 'Lunatone', 'N/A', '440', '70', '55', '65', '95', '85', '70', 'assets/sugimori/337.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('338', 'Solrock', 'N/A', '440', '70', '95', '85', '55', '65', '70', 'assets/sugimori/338.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('339', 'Barboach', 'N/A', '288', '50', '48', '43', '46', '41', '60', 'assets/sugimori/339.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('340', 'Whiscash', 'N/A', '468', '110', '78', '73', '76', '71', '60', 'assets/sugimori/340.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('341', 'Corphish', 'N/A', '308', '43', '80', '65', '50', '35', '35', 'assets/sugimori/341.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('342', 'Crawdaunt', 'N/A', '468', '63', '120', '85', '90', '55', '55', 'assets/sugimori/342.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('343', 'Baltoy', 'N/A', '300', '40', '40', '55', '40', '70', '55', 'assets/sugimori/343.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('344', 'Claydol', 'N/A', '500', '60', '70', '105', '70', '120', '75', 'assets/sugimori/344.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('345', 'Lileep', 'N/A', '355', '66', '41', '77', '61', '87', '23', 'assets/sugimori/345.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('346', 'Cradily', 'N/A', '495', '86', '81', '97', '81', '107', '43', 'assets/sugimori/346.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('347', 'Anorith', 'N/A', '355', '45', '95', '50', '40', '50', '75', 'assets/sugimori/347.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('348', 'Armaldo', 'N/A', '495', '75', '125', '100', '70', '80', '45', 'assets/sugimori/348.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('349', 'Feebas', 'N/A', '200', '20', '15', '20', '10', '55', '80', 'assets/sugimori/349.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('350', 'Milotic', 'N/A', '540', '95', '60', '79', '100', '125', '81', 'assets/sugimori/350.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('351', 'Castform', 'N/A', '420', '70', '70', '70', '70', '70', '70', 'assets/sugimori/351.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('352', 'Kecleon', 'N/A', '440', '60', '90', '70', '60', '120', '40', 'assets/sugimori/352.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('353', 'Shuppet', 'N/A', '295', '44', '75', '35', '63', '33', '45', 'assets/sugimori/353.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('354', 'Banette', 'N/A', '455', '64', '115', '65', '83', '63', '65', 'assets/sugimori/354.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('354', 'Banette', 'Mega Banette', '555', '64', '165', '75', '93', '83', '75', 'assets/sugimori/354-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('355', 'Duskull', 'N/A', '295', '20', '40', '90', '30', '90', '25', 'assets/sugimori/355.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('356', 'Dusclops', 'N/A', '455', '40', '70', '130', '60', '130', '25', 'assets/sugimori/356.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('357', 'Tropius', 'N/A', '460', '99', '68', '83', '72', '87', '51', 'assets/sugimori/357.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('358', 'Chimecho', 'N/A', '425', '65', '50', '70', '95', '80', '65', 'assets/sugimori/358.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('359', 'Absol', 'N/A', '465', '65', '130', '60', '75', '60', '75', 'assets/sugimori/359.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('359', 'Absol', 'Mega Absol', '565', '65', '150', '60', '115', '60', '115', 'assets/sugimori/359-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('360', 'Wynaut', 'N/A', '260', '95', '23', '48', '23', '48', '23', 'assets/sugimori/360.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('361', 'Snorunt', 'N/A', '300', '50', '50', '50', '50', '50', '50', 'assets/sugimori/361.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('362', 'Glalie', 'N/A', '480', '80', '80', '80', '80', '80', '80', 'assets/sugimori/362.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('362', 'Glalie', 'Mega Glalie', '580', '80', '120', '80', '120', '80', '100', 'assets/sugimori/362-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('363', 'Spheal', 'N/A', '290', '70', '40', '50', '55', '50', '25', 'assets/sugimori/363.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('364', 'Sealeo', 'N/A', '410', '90', '60', '70', '75', '70', '45', 'assets/sugimori/364.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('365', 'Walrein', 'N/A', '530', '110', '80', '90', '95', '90', '65', 'assets/sugimori/365.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('366', 'Clamperl', 'N/A', '345', '35', '64', '85', '74', '55', '32', 'assets/sugimori/366.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('367', 'Huntail', 'N/A', '485', '55', '104', '105', '94', '75', '52', 'assets/sugimori/367.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('368', 'Gorebyss', 'N/A', '485', '55', '84', '105', '114', '75', '52', 'assets/sugimori/368.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('369', 'Relicanth', 'N/A', '485', '100', '90', '130', '45', '65', '55', 'assets/sugimori/369.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('370', 'Luvdisc', 'N/A', '330', '43', '30', '55', '40', '65', '97', 'assets/sugimori/370.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('371', 'Bagon', 'N/A', '300', '45', '75', '60', '40', '30', '50', 'assets/sugimori/371.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('372', 'Shelgon', 'N/A', '420', '65', '95', '100', '60', '50', '50', 'assets/sugimori/372.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('373', 'Salamence', 'N/A', '600', '95', '135', '80', '110', '80', '100', 'assets/sugimori/373.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('373', 'Salamence', 'Mega Salamence', '700', '95', '145', '130', '120', '90', '120', 'assets/sugimori/373-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('374', 'Beldum', 'N/A', '300', '40', '55', '80', '35', '60', '30', 'assets/sugimori/374.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('375', 'Metang', 'N/A', '420', '60', '75', '100', '55', '80', '50', 'assets/sugimori/375.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('376', 'Metagross', 'N/A', '600', '80', '135', '130', '95', '90', '70', 'assets/sugimori/376.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('376', 'Metagross', 'Mega Metagross', '700', '80', '145', '150', '105', '110', '110', 'assets/sugimori/376-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('377', 'Regirock', 'N/A', '580', '80', '100', '200', '50', '100', '50', 'assets/sugimori/377.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('378', 'Regice', 'N/A', '580', '80', '50', '100', '100', '200', '50', 'assets/sugimori/378.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('379', 'Registeel', 'N/A', '580', '80', '75', '150', '75', '150', '50', 'assets/sugimori/379.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('380', 'Latias', 'N/A', '600', '80', '80', '90', '110', '130', '110', 'assets/sugimori/380.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('380', 'Latias', 'Mega Latias', '700', '80', '100', '120', '140', '150', '110', 'assets/sugimori/380-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('381', 'Latios', 'N/A', '600', '80', '90', '80', '130', '110', '110', 'assets/sugimori/381.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('381', 'Latios', 'Mega Latios', '700', '80', '130', '100', '160', '120', '110', 'assets/sugimori/381-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('382', 'Kyogre', 'N/A', '670', '100', '100', '90', '150', '140', '90', 'assets/sugimori/382.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('382', 'Kyogre', 'Primal Kyogre', '770', '100', '150', '90', '180', '160', '90', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('383', 'Groudon', 'N/A', '670', '100', '150', '140', '100', '90', '90', 'assets/sugimori/383.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('383', 'Groudon', 'Primal Groudon', '770', '100', '180', '160', '150', '90', '90', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('384', 'Rayquaza', 'N/A', '680', '105', '150', '90', '150', '90', '95', 'assets/sugimori/384.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('384', 'Rayquaza', 'Mega Rayquaza', '780', '105', '180', '100', '180', '100', '115', 'assets/sugimori/384-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('385', 'Jirachi', 'N/A', '600', '100', '100', '100', '100', '100', '100', 'assets/sugimori/385.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('386', 'Deoxys', 'Normal Forme', '600', '50', '150', '50', '150', '50', '150', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('386', 'Deoxys', 'Attack Forme', '600', '50', '180', '20', '180', '20', '150', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('386', 'Deoxys', 'Defense Forme', '600', '50', '70', '160', '70', '160', '90', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('386', 'Deoxys', 'Speed Forme', '600', '50', '95', '90', '95', '90', '180', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('387', 'Turtwig', 'N/A', '318', '55', '68', '64', '45', '55', '31', 'assets/sugimori/387.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('388', 'Grotle', 'N/A', '405', '75', '89', '85', '55', '65', '36', 'assets/sugimori/388.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('389', 'Torterra', 'N/A', '525', '95', '109', '105', '75', '85', '56', 'assets/sugimori/389.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('390', 'Chimchar', 'N/A', '309', '44', '58', '44', '58', '44', '61', 'assets/sugimori/390.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('391', 'Monferno', 'N/A', '405', '64', '78', '52', '78', '52', '81', 'assets/sugimori/391.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('392', 'Infernape', 'N/A', '534', '76', '104', '71', '104', '71', '108', 'assets/sugimori/392.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('393', 'Piplup', 'N/A', '314', '53', '51', '53', '61', '56', '40', 'assets/sugimori/393.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('394', 'Prinplup', 'N/A', '405', '64', '66', '68', '81', '76', '50', 'assets/sugimori/394.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('395', 'Empoleon', 'N/A', '530', '84', '86', '88', '111', '101', '60', 'assets/sugimori/395.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('396', 'Starly', 'N/A', '245', '40', '55', '30', '30', '30', '60', 'assets/sugimori/396.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('397', 'Staravia', 'N/A', '340', '55', '75', '50', '40', '40', '80', 'assets/sugimori/397.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('398', 'Staraptor', 'N/A', '485', '85', '120', '70', '50', '60', '100', 'assets/sugimori/398.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('399', 'Bidoof', 'N/A', '250', '59', '45', '40', '35', '40', '31', 'assets/sugimori/399.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('400', 'Bibarel', 'N/A', '410', '79', '85', '60', '55', '60', '71', 'assets/sugimori/400.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('401', 'Kricketot', 'N/A', '194', '37', '25', '41', '25', '41', '25', 'assets/sugimori/401.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('402', 'Kricketune', 'N/A', '384', '77', '85', '51', '55', '51', '65', 'assets/sugimori/402.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('403', 'Shinx', 'N/A', '263', '45', '65', '34', '40', '34', '45', 'assets/sugimori/403.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('404', 'Luxio', 'N/A', '363', '60', '85', '49', '60', '49', '60', 'assets/sugimori/404.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('405', 'Luxray', 'N/A', '523', '80', '120', '79', '95', '79', '70', 'assets/sugimori/405.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('406', 'Budew', 'N/A', '280', '40', '30', '35', '50', '70', '55', 'assets/sugimori/406.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('407', 'Roserade', 'N/A', '515', '60', '70', '65', '125', '105', '90', 'assets/sugimori/407.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('408', 'Cranidos', 'N/A', '350', '67', '125', '40', '30', '30', '58', 'assets/sugimori/408.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('409', 'Rampardos', 'N/A', '495', '97', '165', '60', '65', '50', '58', 'assets/sugimori/409.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('410', 'Shieldon', 'N/A', '350', '30', '42', '118', '42', '88', '30', 'assets/sugimori/410.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('411', 'Bastiodon', 'N/A', '495', '60', '52', '168', '47', '138', '30', 'assets/sugimori/411.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('412', 'Burmy', 'N/A', '224', '40', '29', '45', '29', '45', '36', 'assets/sugimori/412.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('413', 'Wormadam', 'Plant Cloak', '424', '60', '59', '85', '79', '105', '36', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('413', 'Wormadam', 'Sandy Cloak', '424', '60', '79', '105', '59', '85', '36', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('413', 'Wormadam', 'Trash Cloak', '424', '60', '69', '95', '69', '95', '36', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('414', 'Mothim', 'N/A', '424', '70', '94', '50', '94', '50', '66', 'assets/sugimori/414.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('415', 'Combee', 'N/A', '244', '30', '30', '42', '30', '42', '70', 'assets/sugimori/415.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('416', 'Vespiquen', 'N/A', '474', '70', '80', '102', '80', '102', '40', 'assets/sugimori/416.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('417', 'Pachirisu', 'N/A', '405', '60', '45', '70', '45', '90', '95', 'assets/sugimori/417.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('418', 'Buizel', 'N/A', '330', '55', '65', '35', '60', '30', '85', 'assets/sugimori/418.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('419', 'Floatzel', 'N/A', '495', '85', '105', '55', '85', '50', '115', 'assets/sugimori/419.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('420', 'Cherubi', 'N/A', '275', '45', '35', '45', '62', '53', '35', 'assets/sugimori/420.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('421', 'Cherrim', 'N/A', '450', '70', '60', '70', '87', '78', '85', 'assets/sugimori/421.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('422', 'Shellos', 'N/A', '325', '76', '48', '48', '57', '62', '34', 'assets/sugimori/422.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('423', 'Gastrodon', 'N/A', '475', '111', '83', '68', '92', '82', '39', 'assets/sugimori/423.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('424', 'Ambipom', 'N/A', '482', '75', '100', '66', '60', '66', '115', 'assets/sugimori/424.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('425', 'Drifloon', 'N/A', '348', '90', '50', '34', '60', '44', '70', 'assets/sugimori/425.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('426', 'Drifblim', 'N/A', '498', '150', '80', '44', '90', '54', '80', 'assets/sugimori/426.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('427', 'Buneary', 'N/A', '350', '55', '66', '44', '44', '56', '85', 'assets/sugimori/427.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('428', 'Lopunny', 'N/A', '480', '65', '76', '84', '54', '96', '105', 'assets/sugimori/428.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('428', 'Lopunny', 'Mega Lopunny', '580', '65', '136', '94', '54', '96', '135', 'assets/sugimori/428-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('429', 'Mismagius', 'N/A', '495', '60', '60', '60', '105', '105', '105', 'assets/sugimori/429.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('430', 'Honchkrow', 'N/A', '505', '100', '125', '52', '105', '52', '71', 'assets/sugimori/430.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('431', 'Glameow', 'N/A', '310', '49', '55', '42', '42', '37', '85', 'assets/sugimori/431.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('432', 'Purugly', 'N/A', '452', '71', '82', '64', '64', '59', '112', 'assets/sugimori/432.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('433', 'Chingling', 'N/A', '285', '45', '30', '50', '65', '50', '45', 'assets/sugimori/433.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('434', 'Stunky', 'N/A', '329', '63', '63', '47', '41', '41', '74', 'assets/sugimori/434.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('435', 'Skuntank', 'N/A', '479', '103', '93', '67', '71', '61', '84', 'assets/sugimori/435.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('436', 'Bronzor', 'N/A', '300', '57', '24', '86', '24', '86', '23', 'assets/sugimori/436.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('437', 'Bronzong', 'N/A', '500', '67', '89', '116', '79', '116', '33', 'assets/sugimori/437.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('438', 'Bonsly', 'N/A', '290', '50', '80', '95', '10', '45', '10', 'assets/sugimori/438.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('439', 'Mime Jr.', 'N/A', '310', '20', '25', '45', '70', '90', '60', 'assets/sugimori/439.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('440', 'Happiny', 'N/A', '220', '100', '5', '5', '15', '65', '30', 'assets/sugimori/440.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('441', 'Chatot', 'N/A', '411', '76', '65', '45', '92', '42', '91', 'assets/sugimori/441.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('442', 'Spiritomb', 'N/A', '485', '50', '92', '108', '92', '108', '35', 'assets/sugimori/442.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('443', 'Gible', 'N/A', '300', '58', '70', '45', '40', '45', '42', 'assets/sugimori/443.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('444', 'Gabite', 'N/A', '410', '68', '90', '65', '50', '55', '82', 'assets/sugimori/444.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('445', 'Garchomp', 'N/A', '600', '108', '130', '95', '80', '85', '102', 'assets/sugimori/445.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('445', 'Garchomp', 'Mega Garchomp', '700', '108', '170', '115', '120', '95', '92', 'assets/sugimori/445-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('446', 'Munchlax', 'N/A', '390', '135', '85', '40', '40', '85', '5', 'assets/sugimori/446.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('447', 'Riolu', 'N/A', '285', '40', '70', '40', '35', '40', '60', 'assets/sugimori/447.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('448', 'Lucario', 'N/A', '525', '70', '110', '70', '115', '70', '90', 'assets/sugimori/448.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('448', 'Lucario', 'Mega Lucario', '625', '70', '145', '88', '140', '70', '112', 'assets/sugimori/448-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('449', 'Hippopotas', 'N/A', '330', '68', '72', '78', '38', '42', '32', 'assets/sugimori/449.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('450', 'Hippowdon', 'N/A', '525', '108', '112', '118', '68', '72', '47', 'assets/sugimori/450.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('451', 'Skorupi', 'N/A', '330', '40', '50', '90', '30', '55', '65', 'assets/sugimori/451.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('452', 'Drapion', 'N/A', '500', '70', '90', '110', '60', '75', '95', 'assets/sugimori/452.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('453', 'Croagunk', 'N/A', '300', '48', '61', '40', '61', '40', '50', 'assets/sugimori/453.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('454', 'Toxicroak', 'N/A', '490', '83', '106', '65', '86', '65', '85', 'assets/sugimori/454.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('455', 'Carnivine', 'N/A', '454', '74', '100', '72', '90', '72', '46', 'assets/sugimori/455.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('456', 'Finneon', 'N/A', '330', '49', '49', '56', '49', '61', '66', 'assets/sugimori/456.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('457', 'Lumineon', 'N/A', '460', '69', '69', '76', '69', '86', '91', 'assets/sugimori/457.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('458', 'Mantyke', 'N/A', '345', '45', '20', '50', '60', '120', '50', 'assets/sugimori/458.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('459', 'Snover', 'N/A', '334', '60', '62', '50', '62', '60', '40', 'assets/sugimori/459.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('460', 'Abomasnow', 'N/A', '494', '90', '92', '75', '92', '85', '60', 'assets/sugimori/460.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('460', 'Abomasnow', 'Mega Abomasnow', '594', '90', '132', '105', '132', '105', '30', 'assets/sugimori/460-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('461', 'Weavile', 'N/A', '510', '70', '120', '65', '45', '85', '125', 'assets/sugimori/461.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('462', 'Magnezone', 'N/A', '535', '70', '70', '115', '130', '90', '60', 'assets/sugimori/462.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('463', 'Lickilicky', 'N/A', '515', '110', '85', '95', '80', '95', '50', 'assets/sugimori/463.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('464', 'Rhyperior', 'N/A', '535', '115', '140', '130', '55', '55', '40', 'assets/sugimori/464.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('465', 'Tangrowth', 'N/A', '535', '100', '100', '125', '110', '50', '50', 'assets/sugimori/465.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('466', 'Electivire', 'N/A', '540', '75', '123', '67', '95', '85', '95', 'assets/sugimori/466.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('467', 'Magmortar', 'N/A', '540', '75', '95', '67', '125', '95', '83', 'assets/sugimori/467.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('468', 'Togekiss', 'N/A', '545', '85', '50', '95', '120', '115', '80', 'assets/sugimori/468.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('469', 'Yanmega', 'N/A', '515', '86', '76', '86', '116', '56', '95', 'assets/sugimori/469.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('470', 'Leafeon', 'N/A', '525', '65', '110', '130', '60', '65', '95', 'assets/sugimori/470.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('471', 'Glaceon', 'N/A', '525', '65', '60', '110', '130', '95', '65', 'assets/sugimori/471.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('472', 'Gliscor', 'N/A', '510', '75', '95', '125', '45', '75', '95', 'assets/sugimori/472.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('473', 'Mamoswine', 'N/A', '530', '110', '130', '80', '70', '60', '80', 'assets/sugimori/473.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('474', 'Porygon-Z', 'N/A', '535', '85', '80', '70', '135', '75', '90', 'assets/sugimori/474.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('475', 'Gallade', 'N/A', '518', '68', '125', '65', '65', '115', '80', 'assets/sugimori/475.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('475', 'Gallade', 'Mega Gallade', '618', '68', '165', '95', '65', '115', '110', 'assets/sugimori/475-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('476', 'Probopass', 'N/A', '525', '60', '55', '145', '75', '150', '40', 'assets/sugimori/476.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('477', 'Dusknoir', 'N/A', '525', '45', '100', '135', '65', '135', '45', 'assets/sugimori/477.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('478', 'Froslass', 'N/A', '480', '70', '80', '70', '80', '70', '110', 'assets/sugimori/478.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('479', 'Rotom', 'N/A', '440', '50', '50', '77', '95', '77', '91', 'assets/sugimori/479.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('479', 'Rotom', 'Heat Rotom', '520', '50', '65', '107', '105', '107', '86', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('479', 'Rotom', 'Wash Rotom', '520', '50', '65', '107', '105', '107', '86', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('479', 'Rotom', 'Frost Rotom', '520', '50', '65', '107', '105', '107', '86', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('479', 'Rotom', 'Fan Rotom', '520', '50', '65', '107', '105', '107', '86', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('479', 'Rotom', 'Mow Rotom', '520', '50', '65', '107', '105', '107', '86', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('480', 'Uxie', 'N/A', '580', '75', '75', '130', '75', '130', '95', 'assets/sugimori/480.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('481', 'Mesprit', 'N/A', '580', '80', '105', '105', '105', '105', '80', 'assets/sugimori/481.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('482', 'Azelf', 'N/A', '580', '75', '125', '70', '125', '70', '115', 'assets/sugimori/482.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('483', 'Dialga', 'N/A', '680', '100', '120', '120', '150', '100', '90', 'assets/sugimori/483.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('484', 'Palkia', 'N/A', '680', '90', '120', '100', '150', '120', '100', 'assets/sugimori/484.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('485', 'Heatran', 'N/A', '600', '91', '90', '106', '130', '106', '77', 'assets/sugimori/485.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('486', 'Regigigas', 'N/A', '670', '110', '160', '110', '80', '110', '100', 'assets/sugimori/486.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('487', 'Giratina', 'Altered Forme', '680', '150', '100', '120', '100', '120', '90', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('487', 'Giratina', 'Origin Forme', '680', '150', '120', '100', '120', '100', '90', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('488', 'Cresselia', 'N/A', '600', '120', '70', '120', '75', '130', '85', 'assets/sugimori/488.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('489', 'Phione', 'N/A', '480', '80', '80', '80', '80', '80', '80', 'assets/sugimori/489.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('490', 'Manaphy', 'N/A', '600', '100', '100', '100', '100', '100', '100', 'assets/sugimori/490.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('491', 'Darkrai', 'N/A', '600', '70', '90', '90', '135', '90', '125', 'assets/sugimori/491.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('492', 'Shaymin', 'Land Forme', '600', '100', '100', '100', '100', '100', '100', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('492', 'Shaymin', 'Sky Forme', '600', '100', '103', '75', '120', '75', '127', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('493', 'Arceus', 'N/A', '720', '120', '120', '120', '120', '120', '120', 'assets/sugimori/493.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('494', 'Victini', 'N/A', '600', '100', '100', '100', '100', '100', '100', 'assets/sugimori/494.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('495', 'Snivy', 'N/A', '308', '45', '45', '55', '45', '55', '63', 'assets/sugimori/495.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('496', 'Servine', 'N/A', '413', '60', '60', '75', '60', '75', '83', 'assets/sugimori/496.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('497', 'Serperior', 'N/A', '528', '75', '75', '95', '75', '95', '113', 'assets/sugimori/497.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('498', 'Tepig', 'N/A', '308', '65', '63', '45', '45', '45', '45', 'assets/sugimori/498.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('499', 'Pignite', 'N/A', '418', '90', '93', '55', '70', '55', '55', 'assets/sugimori/499.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('500', 'Emboar', 'N/A', '528', '110', '123', '65', '100', '65', '65', 'assets/sugimori/500.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('501', 'Oshawott', 'N/A', '308', '55', '55', '45', '63', '45', '45', 'assets/sugimori/501.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('502', 'Dewott', 'N/A', '413', '75', '75', '60', '83', '60', '60', 'assets/sugimori/502.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('503', 'Samurott', 'N/A', '528', '95', '100', '85', '108', '70', '70', 'assets/sugimori/503.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('504', 'Patrat', 'N/A', '255', '45', '55', '39', '35', '39', '42', 'assets/sugimori/504.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('505', 'Watchog', 'N/A', '420', '60', '85', '69', '60', '69', '77', 'assets/sugimori/505.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('506', 'Lillipup', 'N/A', '275', '45', '60', '45', '25', '45', '55', 'assets/sugimori/506.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('507', 'Herdier', 'N/A', '370', '65', '80', '65', '35', '65', '60', 'assets/sugimori/507.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('508', 'Stoutland', 'N/A', '500', '85', '110', '90', '45', '90', '80', 'assets/sugimori/508.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('509', 'Purrloin', 'N/A', '281', '41', '50', '37', '50', '37', '66', 'assets/sugimori/509.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('510', 'Liepard', 'N/A', '446', '64', '88', '50', '88', '50', '106', 'assets/sugimori/510.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('511', 'Pansage', 'N/A', '316', '50', '53', '48', '53', '48', '64', 'assets/sugimori/511.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('512', 'Simisage', 'N/A', '498', '75', '98', '63', '98', '63', '101', 'assets/sugimori/512.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('513', 'Pansear', 'N/A', '316', '50', '53', '48', '53', '48', '64', 'assets/sugimori/513.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('514', 'Simisear', 'N/A', '498', '75', '98', '63', '98', '63', '101', 'assets/sugimori/514.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('515', 'Panpour', 'N/A', '316', '50', '53', '48', '53', '48', '64', 'assets/sugimori/515.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('516', 'Simipour', 'N/A', '498', '75', '98', '63', '98', '63', '101', 'assets/sugimori/516.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('517', 'Munna', 'N/A', '292', '76', '25', '45', '67', '55', '24', 'assets/sugimori/517.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('518', 'Musharna', 'N/A', '487', '116', '55', '85', '107', '95', '29', 'assets/sugimori/518.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('519', 'Pidove', 'N/A', '264', '50', '55', '50', '36', '30', '43', 'assets/sugimori/519.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('520', 'Tranquill', 'N/A', '358', '62', '77', '62', '50', '42', '65', 'assets/sugimori/520.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('521', 'Unfezant', 'N/A', '488', '80', '115', '80', '65', '55', '93', 'assets/sugimori/521.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('522', 'Blitzle', 'N/A', '295', '45', '60', '32', '50', '32', '76', 'assets/sugimori/522.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('523', 'Zebstrika', 'N/A', '497', '75', '100', '63', '80', '63', '116', 'assets/sugimori/523.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('524', 'Roggenrola', 'N/A', '280', '55', '75', '85', '25', '25', '15', 'assets/sugimori/524.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('525', 'Boldore', 'N/A', '390', '70', '105', '105', '50', '40', '20', 'assets/sugimori/525.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('526', 'Gigalith', 'N/A', '515', '85', '135', '130', '60', '80', '25', 'assets/sugimori/526.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('527', 'Woobat', 'N/A', '313', '55', '45', '43', '55', '43', '72', 'assets/sugimori/527.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('528', 'Swoobat', 'N/A', '425', '67', '57', '55', '77', '55', '114', 'assets/sugimori/528.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('529', 'Drilbur', 'N/A', '328', '60', '85', '40', '30', '45', '68', 'assets/sugimori/529.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('530', 'Excadrill', 'N/A', '508', '110', '135', '60', '50', '65', '88', 'assets/sugimori/530.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('531', 'Audino', 'N/A', '445', '103', '60', '86', '60', '86', '50', 'assets/sugimori/531.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('531', 'Audino', 'Mega Audino', '545', '103', '60', '126', '80', '126', '50', 'assets/sugimori/531-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('532', 'Timburr', 'N/A', '305', '75', '80', '55', '25', '35', '35', 'assets/sugimori/532.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('533', 'Gurdurr', 'N/A', '405', '85', '105', '85', '40', '50', '40', 'assets/sugimori/533.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('534', 'Conkeldurr', 'N/A', '505', '105', '140', '95', '55', '65', '45', 'assets/sugimori/534.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('535', 'Tympole', 'N/A', '294', '50', '50', '40', '50', '40', '64', 'assets/sugimori/535.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('536', 'Palpitoad', 'N/A', '384', '75', '65', '55', '65', '55', '69', 'assets/sugimori/536.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('537', 'Seismitoad', 'N/A', '509', '105', '95', '75', '85', '75', '74', 'assets/sugimori/537.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('538', 'Throh', 'N/A', '465', '120', '100', '85', '30', '85', '45', 'assets/sugimori/538.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('539', 'Sawk', 'N/A', '465', '75', '125', '75', '30', '75', '85', 'assets/sugimori/539.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('540', 'Sewaddle', 'N/A', '310', '45', '53', '70', '40', '60', '42', 'assets/sugimori/540.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('541', 'Swadloon', 'N/A', '380', '55', '63', '90', '50', '80', '42', 'assets/sugimori/541.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('542', 'Leavanny', 'N/A', '500', '75', '103', '80', '70', '80', '92', 'assets/sugimori/542.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('543', 'Venipede', 'N/A', '260', '30', '45', '59', '30', '39', '57', 'assets/sugimori/543.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('544', 'Whirlipede', 'N/A', '360', '40', '55', '99', '40', '79', '47', 'assets/sugimori/544.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('545', 'Scolipede', 'N/A', '485', '60', '100', '89', '55', '69', '112', 'assets/sugimori/545.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('546', 'Cottonee', 'N/A', '280', '40', '27', '60', '37', '50', '66', 'assets/sugimori/546.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('547', 'Whimsicott', 'N/A', '480', '60', '67', '85', '77', '75', '116', 'assets/sugimori/547.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('548', 'Petilil', 'N/A', '280', '45', '35', '50', '70', '50', '30', 'assets/sugimori/548.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('549', 'Lilligant', 'N/A', '480', '70', '60', '75', '110', '75', '90', 'assets/sugimori/549.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('550', 'Basculin', 'N/A', '460', '70', '92', '65', '80', '55', '98', 'assets/sugimori/550.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('551', 'Sandile', 'N/A', '292', '50', '72', '35', '35', '35', '65', 'assets/sugimori/551.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('552', 'Krokorok', 'N/A', '351', '60', '82', '45', '45', '45', '74', 'assets/sugimori/552.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('553', 'Krookodile', 'N/A', '519', '95', '117', '80', '65', '70', '92', 'assets/sugimori/553.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('554', 'Darumaka', 'N/A', '315', '70', '90', '45', '15', '45', '50', 'assets/sugimori/554.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('555', 'Darmanitan', 'Standard Mode', '480', '105', '140', '55', '30', '55', '95', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('555', 'Darmanitan', 'Zen Mode', '540', '105', '30', '105', '140', '105', '55', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('556', 'Maractus', 'N/A', '461', '75', '86', '67', '106', '67', '60', 'assets/sugimori/556.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('557', 'Dwebble', 'N/A', '325', '50', '65', '85', '35', '35', '55', 'assets/sugimori/557.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('558', 'Crustle', 'N/A', '475', '70', '95', '125', '65', '75', '45', 'assets/sugimori/558.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('559', 'Scraggy', 'N/A', '348', '50', '75', '70', '35', '70', '48', 'assets/sugimori/559.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('560', 'Scrafty', 'N/A', '488', '65', '90', '115', '45', '115', '58', 'assets/sugimori/560.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('561', 'Sigilyph', 'N/A', '490', '72', '58', '80', '103', '80', '97', 'assets/sugimori/561.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('562', 'Yamask', 'N/A', '303', '38', '30', '85', '55', '65', '30', 'assets/sugimori/562.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('563', 'Cofagrigus', 'N/A', '483', '58', '50', '145', '95', '105', '30', 'assets/sugimori/563.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('564', 'Tirtouga', 'N/A', '355', '54', '78', '103', '53', '45', '22', 'assets/sugimori/564.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('565', 'Carracosta', 'N/A', '495', '74', '108', '133', '83', '65', '32', 'assets/sugimori/565.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('566', 'Archen', 'N/A', '401', '55', '112', '45', '74', '45', '70', 'assets/sugimori/566.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('567', 'Archeops', 'N/A', '567', '75', '140', '65', '112', '65', '110', 'assets/sugimori/567.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('568', 'Trubbish', 'N/A', '329', '50', '50', '62', '40', '62', '65', 'assets/sugimori/568.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('569', 'Garbodor', 'N/A', '474', '80', '95', '82', '60', '82', '75', 'assets/sugimori/569.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('570', 'Zorua', 'N/A', '330', '40', '65', '40', '80', '40', '65', 'assets/sugimori/570.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('571', 'Zoroark', 'N/A', '510', '60', '105', '60', '120', '60', '105', 'assets/sugimori/571.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('572', 'Minccino', 'N/A', '300', '55', '50', '40', '40', '40', '75', 'assets/sugimori/572.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('573', 'Cinccino', 'N/A', '470', '75', '95', '60', '65', '60', '115', 'assets/sugimori/573.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('574', 'Gothita', 'N/A', '290', '45', '30', '50', '55', '65', '45', 'assets/sugimori/574.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('575', 'Gothorita', 'N/A', '390', '60', '45', '70', '75', '85', '55', 'assets/sugimori/575.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('576', 'Gothitelle', 'N/A', '490', '70', '55', '95', '95', '110', '65', 'assets/sugimori/576.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('577', 'Solosis', 'N/A', '290', '45', '30', '40', '105', '50', '20', 'assets/sugimori/577.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('578', 'Duosion', 'N/A', '370', '65', '40', '50', '125', '60', '30', 'assets/sugimori/578.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('579', 'Reuniclus', 'N/A', '490', '110', '65', '75', '125', '85', '30', 'assets/sugimori/579.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('580', 'Ducklett', 'N/A', '305', '62', '44', '50', '44', '50', '55', 'assets/sugimori/580.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('581', 'Swanna', 'N/A', '473', '75', '87', '63', '87', '63', '98', 'assets/sugimori/581.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('582', 'Vanillite', 'N/A', '305', '36', '50', '50', '65', '60', '44', 'assets/sugimori/582.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('583', 'Vanillish', 'N/A', '395', '51', '65', '65', '80', '75', '59', 'assets/sugimori/583.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('584', 'Vanilluxe', 'N/A', '535', '71', '95', '85', '110', '95', '79', 'assets/sugimori/584.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('585', 'Deerling', 'N/A', '335', '60', '60', '50', '40', '50', '75', 'assets/sugimori/585.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('586', 'Sawsbuck', 'N/A', '475', '80', '100', '70', '60', '70', '95', 'assets/sugimori/586.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('587', 'Emolga', 'N/A', '428', '55', '75', '60', '75', '60', '103', 'assets/sugimori/587.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('588', 'Karrablast', 'N/A', '315', '50', '75', '45', '40', '45', '60', 'assets/sugimori/588.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('589', 'Escavalier', 'N/A', '495', '70', '135', '105', '60', '105', '20', 'assets/sugimori/589.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('590', 'Foongus', 'N/A', '294', '69', '55', '45', '55', '55', '15', 'assets/sugimori/590.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('591', 'Amoonguss', 'N/A', '464', '114', '85', '70', '85', '80', '30', 'assets/sugimori/591.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('592', 'Frillish', 'N/A', '335', '55', '40', '50', '65', '85', '40', 'assets/sugimori/592.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('593', 'Jellicent', 'N/A', '480', '100', '60', '70', '85', '105', '60', 'assets/sugimori/593.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('594', 'Alomomola', 'N/A', '470', '165', '75', '80', '40', '45', '65', 'assets/sugimori/594.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('595', 'Joltik', 'N/A', '319', '50', '47', '50', '57', '50', '65', 'assets/sugimori/595.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('596', 'Galvantula', 'N/A', '472', '70', '77', '60', '97', '60', '108', 'assets/sugimori/596.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('597', 'Ferroseed', 'N/A', '305', '44', '50', '91', '24', '86', '10', 'assets/sugimori/597.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('598', 'Ferrothorn', 'N/A', '489', '74', '94', '131', '54', '116', '20', 'assets/sugimori/598.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('599', 'Klink', 'N/A', '300', '40', '55', '70', '45', '60', '30', 'assets/sugimori/599.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('600', 'Klang', 'N/A', '440', '60', '80', '95', '70', '85', '50', 'assets/sugimori/600.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('601', 'Klinklang', 'N/A', '520', '60', '100', '115', '70', '85', '90', 'assets/sugimori/601.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('602', 'Tynamo', 'N/A', '275', '35', '55', '40', '45', '40', '60', 'assets/sugimori/602.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('603', 'Eelektrik', 'N/A', '405', '65', '85', '70', '75', '70', '40', 'assets/sugimori/603.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('604', 'Eelektross', 'N/A', '515', '85', '115', '80', '105', '80', '50', 'assets/sugimori/604.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('605', 'Elgyem', 'N/A', '335', '55', '55', '55', '85', '55', '30', 'assets/sugimori/605.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('606', 'Beheeyem', 'N/A', '485', '75', '75', '75', '125', '95', '40', 'assets/sugimori/606.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('607', 'Litwick', 'N/A', '275', '50', '30', '55', '65', '55', '20', 'assets/sugimori/607.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('608', 'Lampent', 'N/A', '370', '60', '40', '60', '95', '60', '55', 'assets/sugimori/608.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('609', 'Chandelure', 'N/A', '520', '60', '55', '90', '145', '90', '80', 'assets/sugimori/609.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('610', 'Axew', 'N/A', '320', '46', '87', '60', '30', '40', '57', 'assets/sugimori/610.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('611', 'Fraxure', 'N/A', '410', '66', '117', '70', '40', '50', '67', 'assets/sugimori/611.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('612', 'Haxorus', 'N/A', '540', '76', '147', '90', '60', '70', '97', 'assets/sugimori/612.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('613', 'Cubchoo', 'N/A', '305', '55', '70', '40', '60', '40', '40', 'assets/sugimori/613.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('614', 'Beartic', 'N/A', '485', '95', '110', '80', '70', '80', '50', 'assets/sugimori/614.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('615', 'Cryogonal', 'N/A', '485', '70', '50', '30', '95', '135', '105', 'assets/sugimori/615.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('616', 'Shelmet', 'N/A', '305', '50', '40', '85', '40', '65', '25', 'assets/sugimori/616.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('617', 'Accelgor', 'N/A', '495', '80', '70', '40', '100', '60', '145', 'assets/sugimori/617.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('618', 'Stunfisk', 'N/A', '471', '109', '66', '84', '81', '99', '32', 'assets/sugimori/618.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('619', 'Mienfoo', 'N/A', '350', '45', '85', '50', '55', '50', '65', 'assets/sugimori/619.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('620', 'Mienshao', 'N/A', '510', '65', '125', '60', '95', '60', '105', 'assets/sugimori/620.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('621', 'Druddigon', 'N/A', '485', '77', '120', '90', '60', '90', '48', 'assets/sugimori/621.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('622', 'Golett', 'N/A', '303', '59', '74', '50', '35', '50', '35', 'assets/sugimori/622.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('623', 'Golurk', 'N/A', '483', '89', '124', '80', '55', '80', '55', 'assets/sugimori/623.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('624', 'Pawniard', 'N/A', '340', '45', '85', '70', '40', '40', '60', 'assets/sugimori/624.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('625', 'Bisharp', 'N/A', '490', '65', '125', '100', '60', '70', '70', 'assets/sugimori/625.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('626', 'Bouffalant', 'N/A', '490', '95', '110', '95', '40', '95', '55', 'assets/sugimori/626.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('627', 'Rufflet', 'N/A', '350', '70', '83', '50', '37', '50', '60', 'assets/sugimori/627.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('628', 'Braviary', 'N/A', '510', '100', '123', '75', '57', '75', '80', 'assets/sugimori/628.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('629', 'Vullaby', 'N/A', '370', '70', '55', '75', '45', '65', '60', 'assets/sugimori/629.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('630', 'Mandibuzz', 'N/A', '510', '110', '65', '105', '55', '95', '80', 'assets/sugimori/630.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('631', 'Heatmor', 'N/A', '484', '85', '97', '66', '105', '66', '65', 'assets/sugimori/631.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('632', 'Durant', 'N/A', '484', '58', '109', '112', '48', '48', '109', 'assets/sugimori/632.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('633', 'Deino', 'N/A', '300', '52', '65', '50', '45', '50', '38', 'assets/sugimori/633.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('634', 'Zweilous', 'N/A', '420', '72', '85', '70', '65', '70', '58', 'assets/sugimori/634.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('635', 'Hydreigon', 'N/A', '600', '92', '105', '90', '125', '90', '98', 'assets/sugimori/635.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('636', 'Larvesta', 'N/A', '360', '55', '85', '55', '50', '55', '60', 'assets/sugimori/636.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('637', 'Volcarona', 'N/A', '550', '85', '60', '65', '135', '105', '100', 'assets/sugimori/637.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('638', 'Cobalion', 'N/A', '580', '91', '90', '129', '90', '72', '108', 'assets/sugimori/638.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('639', 'Terrakion', 'N/A', '580', '91', '129', '90', '72', '90', '108', 'assets/sugimori/639.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('640', 'Virizion', 'N/A', '580', '91', '90', '72', '90', '129', '108', 'assets/sugimori/640.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('641', 'Tornadus', 'Incarnate Forme', '580', '79', '115', '70', '125', '80', '111', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('641', 'Tornadus', 'Therian Forme', '580', '79', '100', '80', '110', '90', '121', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('642', 'Thundurus', 'Incarnate Forme', '580', '79', '115', '70', '125', '80', '111', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('642', 'Thundurus', 'Therian Forme', '580', '79', '105', '70', '145', '80', '101', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('643', 'Reshiram', 'N/A', '680', '100', '120', '100', '150', '120', '90', 'assets/sugimori/643.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('644', 'Zekrom', 'N/A', '680', '100', '150', '120', '120', '100', '90', 'assets/sugimori/644.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('645', 'Landorus', 'Incarnate Forme', '600', '89', '125', '90', '115', '80', '101', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('645', 'Landorus', 'Therian Forme', '600', '89', '145', '90', '105', '80', '91', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('646', 'Kyurem', 'N/A', '660', '125', '130', '90', '130', '90', '95', 'assets/sugimori/646.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('646', 'Kyurem', 'Black Kyurem', '700', '125', '170', '100', '120', '90', '95', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('646', 'Kyurem', 'White Kyurem', '700', '125', '120', '90', '170', '100', '95', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('647', 'Keldeo', 'Ordinary Forme', '580', '91', '72', '90', '129', '90', '108', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('647', 'Keldeo', 'Resolute Forme', '580', '91', '72', '90', '129', '90', '108', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('648', 'Meloetta', 'Aria Forme', '600', '100', '77', '77', '128', '128', '90', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('648', 'Meloetta', 'Pirouette Forme', '600', '100', '128', '90', '77', '77', '128', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('649', 'Genesect', 'N/A', '600', '71', '120', '95', '120', '95', '99', 'assets/sugimori/649.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('650', 'Chespin', 'N/A', '313', '56', '61', '65', '48', '45', '38', 'assets/sugimori/650.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('651', 'Quilladin', 'N/A', '405', '61', '78', '95', '56', '58', '57', 'assets/sugimori/651.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('652', 'Chesnaught', 'N/A', '530', '88', '107', '122', '74', '75', '64', 'assets/sugimori/652.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('653', 'Fennekin', 'N/A', '307', '40', '45', '40', '62', '60', '60', 'assets/sugimori/653.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('654', 'Braixen', 'N/A', '409', '59', '59', '58', '90', '70', '73', 'assets/sugimori/654.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('655', 'Delphox', 'N/A', '534', '75', '69', '72', '114', '100', '104', 'assets/sugimori/655.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('656', 'Froakie', 'N/A', '314', '41', '56', '40', '62', '44', '71', 'assets/sugimori/656.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('657', 'Frogadier', 'N/A', '405', '54', '63', '52', '83', '56', '97', 'assets/sugimori/657.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('658', 'Greninja', 'N/A', '530', '72', '95', '67', '103', '71', '122', 'assets/sugimori/658.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('659', 'Bunnelby', 'N/A', '237', '38', '36', '38', '32', '36', '57', 'assets/sugimori/659.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('660', 'Diggersby', 'N/A', '423', '85', '56', '77', '50', '77', '78', 'assets/sugimori/660.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('661', 'Fletchling', 'N/A', '278', '45', '50', '43', '40', '38', '62', 'assets/sugimori/661.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('662', 'Fletchinder', 'N/A', '382', '62', '73', '55', '56', '52', '84', 'assets/sugimori/662.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('663', 'Talonflame', 'N/A', '499', '78', '81', '71', '74', '69', '126', 'assets/sugimori/663.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('664', 'Scatterbug', 'N/A', '200', '38', '35', '40', '27', '25', '35', 'assets/sugimori/664.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('665', 'Spewpa', 'N/A', '213', '45', '22', '60', '27', '30', '29', 'assets/sugimori/665.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('666', 'Vivillon', 'N/A', '411', '80', '52', '50', '90', '50', '89', 'assets/sugimori/666.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('667', 'Litleo', 'N/A', '369', '62', '50', '58', '73', '54', '72', 'assets/sugimori/667.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('668', 'Pyroar', 'N/A', '507', '86', '68', '72', '109', '66', '106', 'assets/sugimori/668.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('669', 'Flabébé', 'N/A', '303', '44', '38', '39', '61', '79', '42', 'assets/sugimori/669.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('670', 'Floette', 'N/A', '371', '54', '45', '47', '75', '98', '52', 'assets/sugimori/670.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('671', 'Florges', 'N/A', '552', '78', '65', '68', '112', '154', '75', 'assets/sugimori/671.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('672', 'Skiddo', 'N/A', '350', '66', '65', '48', '62', '57', '52', 'assets/sugimori/672.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('673', 'Gogoat', 'N/A', '531', '123', '100', '62', '97', '81', '68', 'assets/sugimori/673.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('674', 'Pancham', 'N/A', '348', '67', '82', '62', '46', '48', '43', 'assets/sugimori/674.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('675', 'Pangoro', 'N/A', '495', '95', '124', '78', '69', '71', '58', 'assets/sugimori/675.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('676', 'Furfrou', 'N/A', '472', '75', '80', '60', '65', '90', '102', 'assets/sugimori/676.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('677', 'Espurr', 'N/A', '355', '62', '48', '54', '63', '60', '68', 'assets/sugimori/677.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('678', 'Meowstic', 'Male', '466', '74', '48', '76', '83', '81', '104', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('678', 'Meowstic', 'Female', '466', '74', '48', '76', '83', '81', '104', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('679', 'Honedge', 'N/A', '325', '45', '80', '100', '35', '37', '28', 'assets/sugimori/679.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('680', 'Doublade', 'N/A', '448', '59', '110', '150', '45', '49', '35', 'assets/sugimori/680.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('681', 'Aegislash', 'Blade Forme', '520', '60', '150', '50', '150', '50', '60', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('681', 'Aegislash', 'Shield Forme', '520', '60', '50', '150', '50', '150', '60', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('682', 'Spritzee', 'N/A', '341', '78', '52', '60', '63', '65', '23', 'assets/sugimori/682.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('683', 'Aromatisse', 'N/A', '462', '101', '72', '72', '99', '89', '29', 'assets/sugimori/683.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('684', 'Swirlix', 'N/A', '341', '62', '48', '66', '59', '57', '49', 'assets/sugimori/684.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('685', 'Slurpuff', 'N/A', '480', '82', '80', '86', '85', '75', '72', 'assets/sugimori/685.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('686', 'Inkay', 'N/A', '288', '53', '54', '53', '37', '46', '45', 'assets/sugimori/686.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('687', 'Malamar', 'N/A', '482', '86', '92', '88', '68', '75', '73', 'assets/sugimori/687.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('688', 'Binacle', 'N/A', '306', '42', '52', '67', '39', '56', '50', 'assets/sugimori/688.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('689', 'Barbaracle', 'N/A', '500', '72', '105', '115', '54', '86', '68', 'assets/sugimori/689.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('690', 'Skrelp', 'N/A', '320', '50', '60', '60', '60', '60', '30', 'assets/sugimori/690.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('691', 'Dragalge', 'N/A', '494', '65', '75', '90', '97', '123', '44', 'assets/sugimori/691.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('692', 'Clauncher', 'N/A', '330', '50', '53', '62', '58', '63', '44', 'assets/sugimori/692.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('693', 'Clawitzer', 'N/A', '500', '71', '73', '88', '120', '89', '59', 'assets/sugimori/693.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('694', 'Helioptile', 'N/A', '289', '44', '38', '33', '61', '43', '70', 'assets/sugimori/694.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('695', 'Heliolisk', 'N/A', '481', '62', '55', '52', '109', '94', '109', 'assets/sugimori/695.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('696', 'Tyrunt', 'N/A', '362', '58', '89', '77', '45', '45', '48', 'assets/sugimori/696.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('697', 'Tyrantrum', 'N/A', '521', '82', '121', '119', '69', '59', '71', 'assets/sugimori/697.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('698', 'Amaura', 'N/A', '362', '77', '59', '50', '67', '63', '46', 'assets/sugimori/698.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('699', 'Aurorus', 'N/A', '521', '123', '77', '72', '99', '92', '58', 'assets/sugimori/699.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('700', 'Sylveon', 'N/A', '525', '95', '65', '65', '110', '130', '60', 'assets/sugimori/700.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('701', 'Hawlucha', 'N/A', '500', '78', '92', '75', '74', '63', '118', 'assets/sugimori/701.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('702', 'Dedenne', 'N/A', '431', '67', '58', '57', '81', '67', '101', 'assets/sugimori/702.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('703', 'Carbink', 'N/A', '500', '50', '50', '150', '50', '150', '50', 'assets/sugimori/703.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('704', 'Goomy', 'N/A', '300', '45', '50', '35', '55', '75', '40', 'assets/sugimori/704.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('705', 'Sliggoo', 'N/A', '452', '68', '75', '53', '83', '113', '60', 'assets/sugimori/705.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('706', 'Goodra', 'N/A', '600', '90', '100', '70', '110', '150', '80', 'assets/sugimori/706.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('707', 'Klefki', 'N/A', '470', '57', '80', '91', '80', '87', '75', 'assets/sugimori/707.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('708', 'Phantump', 'N/A', '309', '43', '70', '48', '50', '60', '38', 'assets/sugimori/708.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('709', 'Trevenant', 'N/A', '474', '85', '110', '76', '65', '82', '56', 'assets/sugimori/709.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('710', 'Pumpkaboo', 'Average Size', '335', '49', '66', '70', '44', '55', '51', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('710', 'Pumpkaboo', 'Small Size', '335', '44', '66', '70', '44', '55', '56', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('710', 'Pumpkaboo', 'Large Size', '335', '54', '66', '70', '44', '55', '46', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('710', 'Pumpkaboo', 'Super Size', '335', '59', '66', '70', '44', '55', '41', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('711', 'Gourgeist', 'Average Size', '494', '65', '90', '122', '58', '75', '84', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('711', 'Gourgeist', 'Small Size', '494', '55', '85', '122', '58', '75', '99', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('711', 'Gourgeist', 'Large Size', '494', '75', '95', '122', '58', '75', '69', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('711', 'Gourgeist', 'Super Size', '494', '85', '100', '122', '58', '75', '54', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('712', 'Bergmite', 'N/A', '304', '55', '69', '85', '32', '35', '28', 'assets/sugimori/712.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('713', 'Avalugg', 'N/A', '514', '95', '117', '184', '44', '46', '28', 'assets/sugimori/713.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('714', 'Noibat', 'N/A', '245', '40', '30', '35', '45', '40', '55', 'assets/sugimori/714.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('715', 'Noivern', 'N/A', '535', '85', '70', '80', '97', '80', '123', 'assets/sugimori/715.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('716', 'Xerneas', 'N/A', '680', '126', '131', '95', '131', '98', '99', 'assets/sugimori/716.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('717', 'Yveltal', 'N/A', '680', '126', '131', '95', '131', '98', '99', 'assets/sugimori/717.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('718', 'Zygarde', '50% Forme', '600', '108', '100', '121', '81', '95', '95', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('719', 'Diancie', 'N/A', '600', '50', '100', '150', '100', '150', '50', 'assets/sugimori/719.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('719', 'Diancie', 'Mega Diancie', '700', '50', '160', '110', '160', '110', '110', 'assets/sugimori/719-mega.png'); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('720', 'Hoopa', 'Hoopa Confined', '600', '80', '110', '60', '150', '130', '70', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('720', 'Hoopa', 'Hoopa Unbound', '680', '80', '160', '60', '170', '130', '80', ''); 
INSERT pokedex (Pokedex, Pokemon, Mega_evolution, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed, Image) 
 VALUES ('721', 'Volcanion', 'N/A', '600', '80', '110', '120', '130', '90', '70', 'assets/sugimori/721.png'); 
