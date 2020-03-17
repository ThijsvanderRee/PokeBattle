<?php

require 'Pokemon.php';

// ----------

$pikachu =  new pokemon('Pikachu',
                        'electric',
                        '60',
                        [(object)array('move'=>'Electric Ring', 'damage'=> 50), (object)array('move'=>'Pika Punch', 'damage'=> 20) ],
                        (object)array('type'=>'Fire', 'mulitplier' => 1.5), (object)array('type' => 'Fighting', 'mulitplier' => 20));

echo $pikachu->__toString() . '<br>';

// $pikachu->showEnergyType();

echo $pikachu->hitPoints . '<br>';
echo $pikachu->energyType;
?>
