<?php

require_once __DIR__ . '/Model.php';

class Ads extends Model {

    protected static $table = 'ads';

    // finds and returns ad based on ad_name
    public static function findByAdName($ad_name)
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE ad_name = :ad_name';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':ad_name', $ad_name, PDO::PARAM_STR);
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


}

?>