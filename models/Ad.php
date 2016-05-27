<?php 

require_once __DIR__ . '/Model.php';

class Ad extends Model {
	protected static $table = 'ads';

public static function getUserAds($user_id)
    {


$query = 'SELECT * FROM ' . static::$table . " where user_id = $user_id";

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

return $results;

    }
}

