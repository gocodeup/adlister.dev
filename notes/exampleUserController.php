<?php

	// require usermodel

	class UserController {

		createUser($user){
			//Validate user

			// Create user in db
			$stmt = self::$dbc->prepare('INSERT INTO users (name, email, password, items) VALUES (:name, :email, :password, :items)');
		}

		updateUser($user){
			//Verify the id exists
			//Update the db
		}

		deleteUser($user){
			//Verify the user exists
			//Delete from the db
		}

		getUserById($id){
			//Get the User from the db
			//Return the user
		}

		getUserByName($name){

		}

		getUserByEmail($email){

		}




	}

?>