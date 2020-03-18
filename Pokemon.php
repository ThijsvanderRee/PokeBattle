<?php


class Pokemon
{

  public $name;
  public $energyType;
  public $hitPoints;
  public $attacks = [];
  public $weakness;
  public $resistance;

  public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance) {
    $this->name = $name;
    $this->energyType = $energyType;
    $this->hitPoints = $hitPoints;
    $this->attacks = $attacks;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
  }

  public function __toString() {
    return json_encode($this);
  }

  // public function showEnergyType()
  // {
  //   echo '<h2>' . $this->energyType . '</h2>';
  // }

  public function fight($move, $target) {
    echo $target->name . ' got hit for ';

    $getMove = array_search($move, array_column($this->attacks, 'move'));
    $doDamage = $this->attacks[$getMove]->damage;
    echo $doDamage . '! <br>';

    echo $target->hitPoints;


  }
}

?>
