<?php  
require_once __DIR__ . '/../utils/Input.php';
class Tag extends Model
{
    protected static $table = "tags";
    public function searchTag()
    {
        $name = Input::get('tag');
        $searchTag = <<<SEARCHTAG
        SELECT i.name
        FROM items as i
        JOIN item_tags AS it
        ON it.item_id = i.id
        JOIN tags as t
        ON t.id = it.tag_id
        WHERE t.name LIKE "%$tag%"; 
SEARCHTAG;
        return $searchTag;
    }
    public function assignTag()
    {

    }
}
?>