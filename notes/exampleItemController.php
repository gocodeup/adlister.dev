<?php


			$stmt = self::$dbc->prepare('INSERT INTO users (name, email, password, items) VALUES (:name, :email, :password, :items)');
=======
			$stmt = self::$dbc->prepare('INSERT INTO items (name, description, price, url, email) VALUES (:name, :description, :price, :url, :email)');

       	 // iterate through all the attributes to build the prepared query
			foreach ($this->attributes as $column => $value) {
            	$stmt->bindValue(':' . $column, $value, PDO::PARAM_STR);
        	}

		// After the insert, add the id back to the attributes array so the object properly represents a DB record
			$this->attributes['id'] = self::$dbc->lastInsertId();
>>>>>>> 1ef31548aa1c20cffbeb69347e769f68fe19b238

		}

		updateItem($item)
		{
			//Verify the id exists
			//Update the db

        	$query = "UPDATE table SET ";
        	$first_value = true;

        	foreach ($this->attributes as $key => $value)
        	{

           		if ( $key == 'id')
            	{

                	continue;
            	}

            	if ( $first_value )
            	{

                	$first_value = false;
                	$query .= $key . ' = :' . $key;
            	}
            	else
            	{

                	$query .= ', ' . $key . ' = :' . $key;
           		}
        }

        $query .= ' WHERE id = :id';

        $stmt = self::$dbc->prepare($query);

        foreach ($this->attributes as $key => $value)
        {

            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }

        $stmt->execute();
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