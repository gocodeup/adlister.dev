<?php 

require_once __DIR__ . '/Model.php';

class Ad extends Model 
{
	protected static $table = 'ads';
    
    public static function newest()
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //Store the result set in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $models = [];

        foreach($results as $result) {
            $ad = new Ad();
            $ad->id =$result['id'];
            $ad->title = $result['title'];
            $ad->price = $result['price'];
            $ad->description = $result['description'];
            $ad->user_id = $result['user_id'];
            $ad->image = $result['image'];
            $ad->id = $result['id'];
            array_push($models, $ad);
  
        }

        // turn each associative array into an instance of the model subclass
        return $models;
    }

}

 ?>