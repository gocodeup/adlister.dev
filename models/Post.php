<?php
require_once __DIR__ . '/Model.php';

class Post extends Model {
    protected static $table = 'posts';

    public static function findRow($row, $table)
    {
        self::dbConnect();

        $query = 'SELECT ' . $row . ' FROM ' . $table;
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