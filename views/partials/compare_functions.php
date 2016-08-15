<?php
//this is an old set of functions that is being redeployed to put the "comparison" page onto our adlister

function compare($side) {
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

function createPokemon($side) {
  $side = compare($side);
  $query = Pokemon::createQuery($side['searchBy'], $side['pokemonId']);
  $result = Pokemon::executeQuery($query);
  $pokemon = selectStats($result[0]);
  return $pokemon;
}



function selectStats($pokemon) {
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

function selectName(&$pokemon) {
  $name = $pokemon['Name'];
  array_shift($pokemon);
  return $name;
}

function selectPokedex(&$pokemon) {
  $pokedex = $pokemon['Pokedex'];
  array_shift($pokemon);
  return $pokedex;
}

function selectTotal(&$pokemon) {
  $total = $pokemon['Total'];
  array_shift($pokemon);
  return $total;
}

function compareTotals(&$leftPokemon, &$rightPokemon) {
  $leftTotal = selectTotal($leftPokemon);
  $rightTotal = selectTotal($rightPokemon);
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

function compareController()
{
  $leftPokemon = createPokemon('left');
  $rightPokemon = createPokemon('right');

  return [
      'leftName' => selectName($leftPokemon),
      'rightName' => selectName($rightPokemon),
      'status' => compareTotals($leftPokemon, $rightPokemon),
      'leftPokedex' => selectPokedex($leftPokemon),
      'rightPokedex' => selectPokedex($rightPokemon),
      'leftPokemon' => $leftPokemon,
      'rightPokemon' => $rightPokemon,
  ];
}

extract(compareController());
?>