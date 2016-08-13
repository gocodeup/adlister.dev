<?php

require_once __DIR__ . '/Model.php';

class Pokemon extends Model {

	protected static $table = 'pokedex';

    public static function findByNameOrNumber($side) {
	  if (Input::has($side)) {
	    $pokemonId = Input::get($side);
	    if (is_numeric($pokemonId)) {
	      $searchBy = "Pokedex";
	    } else {
	      $searchBy = "Pokemon";
	      $pokemonId = "'%" . Input::get($side) . "%'";
	      if ($pokemonId === "'%%'") {
	        $pokemonId = '1';
	        $searchBy = "Pokedex";
	      }
	    }
	  } else {
	    $pokemonId = '1';
	    $searchBy = "Pokedex";
	  }
	  return [
	    'pokemonId' => $pokemonId,
	    'searchBy' => $searchBy
	  ];
	}

	public static function searchForPokemon($searchBy, $pokemonId) {
  $sql = <<<SELECTION
SELECT * FROM pokedex 
WHERE pokedex.$searchBy LIKE $pokemonId 
ORDER BY pokedex.$searchBy;
SELECTION;
	  return $sql;
	}

	public static function createPokemon($side) {
	  $side = compare($side);
	  $query = createQuery($side['searchBy'], $side['pokemonId']);
	  $result = Pokemon::executeQuery($query);
	  $pokemon = selectStats($result['result']);
	  return $pokemon;
	}

	public static function selectStats($pokemon) {
	  $stats = [
	    'Name' => $pokemon['Pokemon'],
	    'Total' => $pokemon['Total'],
	    'Pokedex' => $pokemon['Pokedex'],
	    '0' => $pokemon['Hp'],
	    '1' => $pokemon['Attack'],
	    '2' => $pokemon['Defense'],
	    '3' => $pokemon['SpAtt'],
	    '4' => $pokemon['SpDef'],
	    '5' => $pokemon['Speed']
	  ];
	  return $stats;
	}

	function compareTotals($leftPokemon, $rightPokemon) {
	  $leftTotal = $leftPokemon['Total'];
	  $rightTotal = $rightPokemon['Total'];
	  if ($leftTotal > $rightTotal) {
	    $leftStatus = "Higher Total Stats";
	    $rightStatus = "Lower Total Stats";
	  } else if ($leftTotal === $rightTotal) {
	    $leftStatus = "Identical Total";
	    $rightStatus = "Identical Total";
	  } else {
	    $leftStatus = "Lower Total Stats";
	    $rightStatus = "Higher Total Stats";
	  }
	  return [
	    'left' => $leftStatus,
	    'right' => $rightStatus
	  ];
	}

