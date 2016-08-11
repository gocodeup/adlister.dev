<?php  
require_once __DIR__ . '/../utils/Input.php';
class Tag extends Model
{
    public $id;
    public $name;
    
    public function __construct($id, $name)
    {
        $this->id  = $id;
        $this->name = $name;
    }

    public function searchTag()
    {
        $name = Input::get('name');
        $searchTag = <<<SEARCHTAG
        SELECT i.name
        FROM items as i
        JOIN item_tags AS it
        ON it.item_id = i.id
        JOIN tags as t
        ON t.id = it.tag_id
        WHERE t.name LIKE "%$name%"; 
SEARCHTAG;
        return $searchTag;
    }
    public function assignTag()
    {

    }



}
?>