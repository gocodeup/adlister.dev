<?php

require_once 'Model.php';

class Item extends Model {

    protected static $table = 'items';

    // relation to user from item
    public function user()
    {

    	return User::find($this->user_id);
    }

    // finds all items that belong to the user with the id passed
    // returns values in an instance of item
    public static function findAllWithUserId($id)
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . static::$table . ' WHERE user_id = :user_id ORDER BY id desc';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':user_id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // @TODO: Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

    // gets 3 most recently added items and returns them in an instance of item
    public static function featured($num = 3)
    {

    	self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
        // @TODO: Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table . ' ORDER BY id desc LIMIT ' . $num;

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        // @TODO: Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

}

?>