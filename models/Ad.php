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

			$query = "SELECT ads.*, users.email, users.username
					  from ". "ads " .
					 "join users on users.id = ads.seller_id " .
					 "WHERE ads.name like :search or ads.description like :search";
			$stmt = self::$dbc->prepare($query);
			$stmt->bindValue(":search", "%$search%");
			$stmt->execute();
	 		$results = $stmt->fetchAll(PDO::FETCH_OBJ);
	 	} else {
			$query = "SELECT ads.*, users.email, users.username
					  from ". "ads " .
					 "join users on users.id = ads.seller_id ";

			$stmt = self::$dbc->query($query);

			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		return array_map(function($result) {
			$instance = new static;
			$instance->attributes = $result;
			return $instance;
		}, $results);
	}

	public static function findAd($id)
	{
		// Get connection to the database
		self::dbConnect();

		//Create select statement using prepared statements
		$query = "SELECT ads.*, users.email, users.username
				  FROM ads
				  JOIN users ON users.id = ads.seller_id
				  WHERE ads.id = :id";

		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		//Store the resultset in a variable named $result
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$instance = null;
		// if we have a result, create a new instance
		if ($result) {
			$instance = new static;
			$instance->attributes = $result;
		}

		// return either the found instance or null
		return $instance;
	}

}
}
?>


