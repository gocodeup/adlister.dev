
USE adlister_db;
DROP TABLE IF EXISTS listing;
CREATE TABLE listing (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(240) NOT NULL,
    item_description VARCHAR(500) NOT NULL,
    item_price INT(100) NOT NULL,
    item_location_city VARCHAR(255) NOT NULL,
    item_location_state VARCHAR(2) NOT NULL,
 	PRIMARY KEY (id)
);
