<?php

require_once __DIR__ . '/Model.php';

class Ad extends Model {

    protected static $table = 'ads';

    public static function findAdByTitle($title_or_price)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE title = :title OR price = :price';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':title', $title_or_price, PDO::PARAM_STR);
        $stmt->bindValue(':price', $title_or_price, PDO::PARAM_INT);
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

    public static function get3Ads()
    {
        self::dbConnect();

        $adLimit = 3;

        $ads = [];
            $stmt = self::$dbc->prepare("SELECT * FROM ads LIMIT :adLimit");
            $stmt->bindValue(":adLimit", $adLimit, PDO::PARAM_INT);
            $stmt->execute();
            $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $ads;
    }
}

?>