<?php

require_once __DIR__ "/exampleModel.php";

	class ItemController extends ItemModel {
		// static variable created to represent current table we wish to manipulate
		protected static $table = 'items';

		createItem($item){
			//Validate item
			// Create user in db
			$stmt = self::$dbc->prepare('INSERT INTO users (name, email, password, items) VALUES (:name, :email, :password, :items)');

		}

		updateItem($item){
			//Verify the id exists
			//Update the db
		}

		deleteItem($item){
			//Verify the user exists
			//Delete from the db
		}

		getItemById($id){
			//Get the User from the db
			//Return the user
		}

		getItemByName($name){
			//Get the Item from the db
			//Return the item

		}

		getUserForItem(){

		}
		// getItemByPrice(either price from itemmodel or price range){
			//Get the Item from db by price or price range
			//Return the item

		// }


?>