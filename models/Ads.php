<?php

require_once __DIR__ . '/Model.php';

class Ads extends Model {
    protected static $table = 'ads';

    public static function count() {
        self::dbConnect();
        $query = self::$dbc->query("SELECT COUNT(*) FROM " . static::$table)->fetchColumn();

        return $query;
    }

    public static function paginate($pageNo, $cat, $resultsPerPage = 10) {
        self::dbConnect();
        $limit = $resultsPerPage;
        $offset = ($pageNo * $limit) - $limit;

        $stmt = self::$dbc->prepare("SELECT * FROM " . static::$table . $cat . " LIMIT :limit OFFSET :offset");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return($results);
    }

    public static function latest() {
        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM " . static::$table . " ORDER BY id DESC LIMIT 3");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return($results);
    }

}