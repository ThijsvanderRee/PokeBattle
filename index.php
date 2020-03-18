<?php

require 'Pokemon.php';

// ----------

$pikachu =  new pokemon(
  'Pikachu',
  'Lightning',
  '60',
  [(object)array('move'=>'Electric Ring', 'damage'=> 50), (object)array('move'=>'Pika Punch', 'damage'=> 20)],
  (object)array('type'=>'Fire', 'mulitplier' => 1.5),
  (object)array('type' => 'Fighting', 'mulitplier' => 20)
);

$charmeleon = new pokemon(
  'Charmeleon',
  'fire',
  '60',
  [(object)array('move'=>'Head Butt', 'damage'=> 10), (object)array('move'=>'Flare', 'damage'=> 30)],
  (object)array('type'=>'Water', 'mulitplier' => 2),
  (object)array('type'=>'Lightning', 'mulitplier' => 10)
);

$pikachu->fight('Electric Ring', $charmeleon);
?>
