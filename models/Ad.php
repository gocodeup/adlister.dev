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

    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $stmt = self::$dbc->prepare('SELECT * FROM ads WHERE id = :id');
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);

        // @TODO: Store the result in a variable named $result
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    public static function findAdByUserId($user_id, $limit)
    {
        self::dbConnect();

        $ads = [];
        $query = 'SELECT * FROM ads WHERE user_id = :user_id LIMIT :limit';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->execute(); 
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $ads;
    }

    public static function getAds($limit)
    {
        self::dbConnect();

        $ads = [];
        $stmt = self::$dbc->prepare("SELECT * FROM ads LIMIT :limit");
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->execute();
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $ads;
    }

    public static function deleteAd($id)
    {
        self::dbConnect();

        $ads = [];
        $stmt = self::$dbc->prepare("DELETE FROM ads WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        ?>
        <script type="text/javascript">
        window.location.href = '/users/account';
        </script>
        <?php
        exit();
        // $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // return $ads;
    }
}

?>