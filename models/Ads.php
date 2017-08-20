<?php

$_ENV = require __DIR__. '/../Model.php';

class Ads extends Model
{
    protected static $table = 'ads';

    public static function all()
    {
		self::dbConnect();
		$ads = self::$connection->query('SELECT * FROM ' . self::$table);
		$adArray = [];

		foreach ($ads as $ad) {
			$singleAd = new Ads();
			$singleAd->id = $ad['id'];
            $singleAd->user_id = $ad['user_id'];
            $singleAd->username = $ad['username'];
			$singleAd->date_posted = $ad['date_posted'];
			$singleAd->product_name= $ad['product_name'];
			$singleAd->category = $ad['category'];
            $singleAd->sub_category = $ad['sub_category'];
			$singleAd->price = $ad['price'];
			$singleAd->description = $ad['description'];
			$singleAd->availability_status = $ad['availability_status'];
            $singleAd->pick_up_location = $ad['pick_up_location'];
            $singleAd->location_city = $ad['location_city'];
            $singleAd->location_state = $ad['location_state'];
            $singleAd->date_sold = $ad['date_sold'];
            $singleAd->contact_info = $ad['contact_info'];
			$singleAd->image = $ad['image'];
			array_push($adsArray, $singleAd);

		}

		return $adArray;

	}

    public static function findAdByKeyword($keyword){
		self::dbConnect();
		$query = 'SELECT * FROM ' . self::$table . ' WHERE product_name LIKE %:product_name%';
		$stmt = self::$connection->prepare($query);
		$stmt->bindValue(':item', $keyword, PDO::PARAM_STR);
		$stmt->execute();
		$results = $stmt->fetch(PDO::FETCH_ASSOC);
		$instance = null;
		if($results) {
			$instance = new static;
			$instance->attributes = $results;
		}
		return $instance;
	}

    public static function findAdByCategory($category) {
		self::dbConnect();
		$ads = self::$connection->query('SELECT * FROM ' . self::$table . ' WHERE category LIKE \'%' . $category . '%\' OR item LIKE \'%' . $category . '%\' OR sub_category LIKE \'%' . $category . '%\' OR description LIKE \'%' . $category . '%\'');
		$adsArray = [];
		foreach ($ads as $ad) {
            $singleAd = new Ads();
			$singleAd->id = $ad['id'];
            $singleAd->user_id = $ad['user_id'];
            $singleAd->username = $ad['username'];
			$singleAd->date_posted = $ad['date_posted'];
			$singleAd->product_name= $ad['product_name'];
			$singleAd->category = $ad['category'];
            $singleAd->sub_category = $ad['sub_category'];
			$singleAd->price = $ad['price'];
			$singleAd->description = $ad['description'];
			$singleAd->availability_status = $ad['availability_status'];
            $singleAd->pick_up_location = $ad['pick_up_location'];
            $singleAd->location_city = $ad['location_city'];
            $singleAd->location_state = $ad['location_state'];
            $singleAd->date_sold = $ad['date_sold'];
            $singleAd->contact_info = $ad['contact_info'];
			$singleAd->image = $ad['image'];
			array_push($adsArray, $singleAd);

		}

		return $adsArray;
	}

    public static function findAdByUser($user_id) {
		self::dbConnect();
		$ads = self::$connection->query('SELECT * FROM ' . self::$table . ' WHERE user_id = ' . $user_id);
		$adsArray = [];
		foreach ($ads as $ad) {
            $singleAd = new Ads();
            $singleAd->id = $ad['id'];
            $singleAd->user_id = $ad['user_id'];
            $singleAd->username = $ad['username'];
            $singleAd->date_posted = $ad['date_posted'];
            $singleAd->product_name= $ad['product_name'];
            $singleAd->category = $ad['category'];
            $singleAd->sub_category = $ad['sub_category'];
            $singleAd->price = $ad['price'];
            $singleAd->description = $ad['description'];
            $singleAd->availability_status = $ad['availability_status'];
            $singleAd->pick_up_location = $ad['pick_up_location'];
            $singleAd->location_city = $ad['location_city'];
            $singleAd->location_state = $ad['location_state'];
            $singleAd->date_sold = $ad['date_sold'];
            $singleAd->contact_info = $ad['contact_info'];
            $singleAd->image = $ad['image'];
			array_push($adsArray, $singleAd);

		}
		return $adsArray;
	}

    public static function insertAd() {
		self::dbConnect();
		$stmt = self::$connection->prepare('INSERT INTO ads (user_id, username, date_posted, product_name, category, sub_category, price, description, availability_status, pick_up_location, location_city, location_state, contact_info) VALUES (:user_id, :username, :date_posted, :product_name,  :category, :sub_category, :price, :description, :availability_status, :pick_up_location, :location_city, :location_state, :contact_info)');
    	$stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
        $stmt->bindValue(':username', $_SESSION['username'], PDO::PARAM_STR);
        $stmt->bindValue(':date_posted', date("Y-m-d"), PDO::PARAM_STR);
		$stmt->bindValue(':category', Input::sanitize($_POST['category']), PDO::PARAM_STR);
        $stmt->bindValue(':sub_category', Input::sanitize($_POST['sub_category']), PDO::PARAM_STR);
		$stmt->bindValue(':price', Input::sanitize($_POST['price']), PDO::PARAM_INT);
		$stmt->bindValue(':description', Input::sanitize($_POST['description']), PDO::PARAM_STR);
		$stmt->bindValue(':availability_status', Input::sanitize($_POST['availability_status']), PDO::PARAM_STR);
        $stmt->bindValue(':pick_up_location', Input::sanitize($_POST['pick_up_location']), PDO::PARAM_STR);
        $stmt->bindValue(':location_city', Input::sanitize($_POST['location_city']), PDO::PARAM_STR);
        $stmt->bindValue(':location_state', Input::sanitize($_POST['location_state']), PDO::PARAM_STR);
        $stmt->bindValue(':contact_info', Input::sanitize($_POST['contact_info']), PDO::PARAM_STR);
		$stmt->execute();

	}

    public static function deleteAd($input) {
		self::dbConnect();
		$query = 'DELETE FROM ' . self::$table . ' WHERE id = ' . $input;
		$stmt = self::$connection->prepare($query);
		$stmt->execute();
	}



}
