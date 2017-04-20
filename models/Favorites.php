<?php 

require_once __DIR__ . '/Model.php';

class Favorites extends Model 
{
	 protected static $table = 'favorites';

	 public static function getFavorites($user_id) {
	 	self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE account_id = :account_id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':account_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }
}

 ?>