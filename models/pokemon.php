<?php

require_once __DIR__ . '/Model.php';

class Pokemon extends Model {

	protected static $table = 'pokedex';

    public function __construct()
    {
        self::dbConnect();

    }

	public static function getPokemon($inputField) 
	{
		self::dbConnect();
		$pokemonSearch = self::findByNameOrNumber($inputField);
		$query = self::createQuery($pokemonSearch['searchBy'], $pokemonSearch['pokemonId']);
		return self::$dbc->query($query)->fetch(PDO::FETCH_ASSOC);
	}

    protected static function findByNameOrNumber($input) 
    {
	    $pokemonId = $input;
	    if (is_numeric($input))
	    {
	      $searchBy = "Pokedex";
	    } else 
	    {
	      $searchBy = "Pokemon";
	      $pokemonId = "'%" . $input . "%'";
	      if ($pokemonId === "'%%'") 
	      {
	        $pokemonId = '1';
	        $searchBy = "Pokedex";
	      }
	    }
	  return [
	    'pokemonId' => $pokemonId,
	    'searchBy' => $searchBy
	  ];
	}

	public static function createTable()
	{
	  return self::$dbc->query("SELECT Pokedex, Pokemon, Total, Hp, Attack, Defense, SpAtt, SpDef, Speed FROM pokedex GROUP BY pokedex.pokedex")->fetchAll(PDO::FETCH_ASSOC);
	}

	protected static function createQuery($searchBy, $pokemonId) 
	{
  		$sql = <<<SELECTION
SELECT * FROM pokedex 
WHERE pokedex.$searchBy LIKE $pokemonId 
ORDER BY pokedex.$searchBy;
SELECTION;
		return $sql;
	}

	public static function selectStats($pokemon) 
	{
	  return [
	    'Hp' => $pokemon['Hp'],
	    'Attack' => $pokemon['Attack'],
	    'Defense' => $pokemon['Defense'],
	    'SpAtt' => $pokemon['SpAtt'],
	    'SpDef' => $pokemon['SpDef'],
	    'Speed' => $pokemon['Speed']
	  ];
	}

	public static function compareTotals($leftTotal, $rightTotal) 
	{
	  if ($leftTotal > $rightTotal) 
	  {
	    $leftStatus = "Higher Total Stats";
	    $rightStatus = "Lower Total Stats";
	  } else if ($leftTotal === $rightTotal) 
	  {
	    $leftStatus = "Identical Total";
	    $rightStatus = "Identical Total";
	  } else 
	  {
	    $leftStatus = "Lower Total Stats";
	    $rightStatus = "Higher Total Stats";
	  }
	  return [
	    'left' => $leftStatus,
	    'right' => $rightStatus
	  ];
	}
}

