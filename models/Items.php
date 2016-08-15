<?php

require_once __DIR__ . '/Model.php';

class Items extends Model {

	protected static $table = 'items';

	// save the id of the user who is logged in posting the item

	public function addTags($array)
	{	
		$insert = 'INSERT INTO items_tags (item_id, tag_id) VALUES (:item_id, :tag_id)';
		$stmt = self::$dbc->prepare($insert);
		foreach($array as $tag) {
			$stmt->bindValue(':item_id', $this->id, PDO::PARAM_INT);
			$stmt->bindValue(':tag_id', $tag->id, PDO::PARAM_INT);
			$stmt->execute();
		}
	}
	public static function featuredItems()
	{
			 // Get connection to the database
<<<<<<< HEAD
		self::dbConnect();

			//Create select statement using prepared statements
		$query = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';

		$stmt = self::$dbc->prepare($query);
		$stmt->execute();

			//Store the resultset in a variable named $result
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			// The following code will set the attributes on the calling object based on the result variable's contents

		$instance = null;

		if ( $result )
		{

			$instance = new static;
			$instance->attributes = $result;
		}

		return $instance;
	}
	
	public function user()
    {
    	return User::find($this->user_id);
    }

	public static function findAllWithUserId($id)
=======
      self::dbConnect();

      //Create select statement using prepared statements
      $query = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';

      $stmt = self::$dbc->prepare($query);
      $stmt->execute();

      //Store the resultset in a variable named $result
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // The following code will set the attributes on the calling object based on the result variable's contents

      $instance = null;

      if ( $result )
      {

          $instance = new static;
          $instance->attributes = $result;
      }

      return $instance;
	}
	public static function itemUser($itemId)
>>>>>>> 23c1ab9ad63a3394e028d08938dde2c76f06171e
	{
		self::dbConnect();
		$query = 'SELECT * FROM ' . static::$table . ' WHERE user_id = :user_id ORDER BY id desc';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':user_id', $id, PDO::PARAM_INT);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$instance = null;
		if ( $results )
		{
			$instance = new static;
			$instance->attributes = $results;
		}
		return $instance;
	}
<<<<<<< HEAD
=======
	public static function findAllWithUserId($id)
    {
        self::dbConnect();
        $query = 'SELECT * FROM ' . static::$table . ' WHERE user_id = :user_id ORDER BY id desc';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':user_id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $instance = null;
        if ( $results )
        {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }
    
>>>>>>> 23c1ab9ad63a3394e028d08938dde2c76f06171e
}



