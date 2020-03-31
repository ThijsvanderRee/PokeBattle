<?php

require 'Pokemon.php';

// ----------

$pikachu =  new pokemon(
  'Pikachu',
  'Lightning',
  '60',
  [(object)array('move' => 'Electric Ring', 'damage' => 50), (object)array('move' =>'Pika Punch', 'damage' => 20)],
  (object)array('type' => 'Fire', 'multiplier' => 1.5),
  (object)array('type' => 'Fighting', 'multiplier' => 20)
);

$charmeleon = new pokemon(
  'Charmeleon',
  'Fire',
  '60',
  [(object)array('move' => 'Head Butt', 'damage' => 10), (object)array('move' => 'Flare', 'damage' => 30)],
  (object)array('type' => 'Water', 'multiplier' => 2),
  (object)array('type' => 'Lightning', 'multiplier' => 10)
);

$pikachu->fight('Electric Ring', $charmeleon);
echo '<br>';
$charmeleon->fight('Flare', $pikachu);
echo '<br>';
$pikachu->fight('Electric Ring', $charmeleon);
echo '<br>';
$charmeleon->fight('Flare', $pikachu);
echo '<br>';
$pikachu->fight('Electric Ring', $charmeleon);
echo '<br>';
// $charmeleon->fight('Flare', $pikachu);
?>
