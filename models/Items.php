<?php

require_once __DIR__ . '/Model.php';

class Items extends Model {

	protected static $table = 'items';

	// save the id of the user who is logged in posting the item

	public function addTags($array)
	{	
		$insert = 'INSERT INTO items_tags (item_id, tag_id) VALUES (:item_id, :tag_id)';
		$stmt = self::$dbc->prepare($insert);
		foreach($array as $tag) {
			$stmt->bindValue(':item_id', $this->id, PDO::PARAM_INT);
			$stmt->bindValue(':tag_id', $tag->id, PDO::PARAM_INT);
			$stmt->execute();
		}
	}

}