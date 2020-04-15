<?php

require 'Pokemon.php';

// Create pokemon

$pikachu = new Pikachu(
  'Pikachu1'
);

$charmeleon = new Charmeleon(
  'Charmeleon1'
);

// Battle

$pikachu->fight('Electric Ring', $charmeleon);
echo '<br>';
$charmeleon->fight('Flare', $pikachu);
echo '<br>';
$pikachu->fight('Pika Punch', $charmeleon);
echo '<br>';
$charmeleon->fight('Head butt', $pikachu);
echo '<br>';
$pikachu->fight('Electric Ring', $charmeleon);

?>
