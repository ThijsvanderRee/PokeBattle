<?php

require 'Pokemon.php';

// Create pokemon

$pikachu1 = new Pikachu(
  'Pikachu1'
);

$charmeleon1 = new Charmeleon(
  'Charmeleon1'
);

// Battle

$pikachu1->fight('Electric Ring', $charmeleon1);
echo '<br>';
$charmeleon1->fight('Flare', $pikachu1);
echo '<br>';
$pikachu1->fight('Pika Punch', $charmeleon1);
echo '<br>';
$charmeleon1->fight('Head butt', $pikachu1);
echo '<br>';
$pikachu1->fight('Electric Ring', $charmeleon1);

?>
