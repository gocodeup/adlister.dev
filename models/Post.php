<?php

require_once __DIR__ . '/Model.php';

class Post extends Model {

    protected static $table = 'posts';

    // create function that saves the user id and assings it to user_id table

    public static function getAllPosts()
    {

        self::dbConnect();

        //Learning from the previous method, return all the matching records
        //Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table;

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        //returning the array of all the posts
        return $results;
    }

}

?>