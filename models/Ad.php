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

public static function pagination($dbc, $page)
    {
        // Get connection to the database
        self::dbConnect();

        $data = [];

        $offset = ($page - 1) * 3;

        $stmt = $dbc->prepare('SELECT * FROM ads LIMIT 3 OFFSET :offset');

        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $data['ads'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

}

