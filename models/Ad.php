<?php

require_once 'Model.php';

class Ad extends Model
{
	protected static $table = 'ads';

	protected static $ads;

	public static function getAds()

    {
       
        self::dbConnect();
	
	if (! empty($_GET)) {

		$search = strip_tags($_GET['query']);

		$query = "SELECT * from ". "ads " ."WHERE name like ". "\"%$search%\"" . " or description like " . "\"%$search%\"";
		$stmt = self::$dbc->query($query);
 		
 		$ads = $stmt->fetchAll(PDO::FETCH_OBJ);

 	} else {
		
		$ads = Ad::all();
 }

 		return $ads;

}
}
?>


