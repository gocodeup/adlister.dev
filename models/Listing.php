<?php

require_once __DIR__ . '/Model.php';

class Listing extends Model {

    protected static $table = 'listing';
   
    // Model contains "INSERT INTO" for the insertion of data into the database. Don't try and mess with it on your own. 

    // finds and returns instance of user based on email or username
    public static function findByItem($itemName)
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . ' WHERE $itemName = :$itemName';

    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':itemName', $item_name, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }


    // Need to speak with Cam on why he put this here. 
    // public function user()
    // {
    //     return User::find($this->user_id);
    // }

    // public function findItemsByUser($user_id)
    // {
        // do query to find all items with the user_id
    }


}

?>