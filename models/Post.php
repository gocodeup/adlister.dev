<?php
require_once __DIR__ . '/Model.php';

class Post extends Model {
    protected static $table = 'posts';

    public static function findRow($row)
    {
        self::dbConnect();

        $query = 'SELECT ' . $row . ' FROM ' . self::$table;
        $statement = self::$dbc->prepare($query);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($rows) {
            $instance = new static;
            $instance->attributes = $rows;
        }
        return $instance;
    }

    public static function allRows($limit)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' LIMIT ' . $limit;
        $statement = self::$dbc->prepare($query);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($rows) {
            $instance = new static;
            $instance->attributes = $rows;
        }
        return $instance;
    }
}