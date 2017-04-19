<?php

require_once __DIR__ . '/Model.php';

class Ads extends Model {
    protected static $table = 'ads';
   
    public static function findByTitle($title) {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE title = :title';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $title, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

    public static function count() {
        $connection = self::dbConnect();
        $query = "SELECT count(*) FROM ads";
        $statement = $connection->prepare($query);
        $statement->execute();
        $count = $statement->fetchColumn();
        return $count;
    }
    public static function all() {
        $connection = self::dbConnect();
        $query = "SELECT * FROM ads";
        $statement = $connection->prepare($query);
        $statement->execute();
        $allRows = $statement->fetchAll(PDO::FETCH_ASSOC);
        $array = [];

        foreach($allRows as $row) {
            $ad = new Ads();
            $ad->id = $row['id'];
            $ad->title = $row['title'];
            $ad->location = $row['location'];
            $ad->price = $row['price'];
            $ad->description = $row['description'];
            $ad->username = $row['username'];
            $ad->username = $row['image'];
            array_push($array, $ad);
        }
        return $array;
    }

    public static function getPageNumber() {
        $data = [];
        $data['page'] = (isset($_GET['page'])) ? $_GET['page'] : 1;
        return $data;
    }

    public static function getLastPage($limit) {
        // establish database connection
        $connection = self::dbConnect();
        // get the total number of columns
        $getTotal = "SELECT count(*) FROM ads";
        $statement = $connection->prepare($getTotal);
        $statement->execute();
        $total = $statement->fetchColumn();
        $lastPage = ceil($total / $limit);
        return $lastPage;
    }

    public static function returnResults($limit) {

        // establish connection, offset and page number we are on
        $connection = self::dbConnect();
        extract(self::getPageNumber());
        $offset = ($page - 1) * $limit;
        if($page < 1) {
            $offset = 0;
        }

        // query the database to select the tables and fetch as an associative array
        $query = "SELECT * FROM ads LIMIT " . $limit . " OFFSET " . $offset;
        $result = $connection->prepare($query);
        $result->execute();
        $adsArray = $result->fetchAll(PDO::FETCH_ASSOC);
        $array = [];

        // create a new object for each result and push them to a new array
        foreach($adsArray as $row) {
            $ad = new Ads();
            $ad->id = $row['id'];
            $ad->title = $row['title'];
            $ad->location = $row['location'];
            $ad->price = $row['price'];
            $ad->description = $row['description'];
            $ad->username = $row['username'];
            $ad->image = $row['image'];
            array_push($array, $ad);
        }
        return $array;
    }

}