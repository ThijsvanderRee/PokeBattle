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

  public function fight($move, $target) {

    // get stats of current pokemon
    $thisType = $this->energyType;
    $thisWeaknessType = $this->weakness->type;
    $thisWeaknessMultiplier = $this->weakness->multiplier;
    $thisResistanceType = $this->resistance->type;
    $thisResistanceMultiplier = $this->resistance->multiplier;

    // Get stats of target pokemon
    $targetType = $target->energyType;
    $targetWeaknessType = $target->weakness->type;
    $targetWeaknessMultiplier = $target->weakness->multiplier;
    $targetResistanceType = $target->resistance->type;
    $targetResistanceMultiplier = $target->resistance->multiplier;

    // show stats
    echo $thisType . '<br>';
    echo $thisWeaknessType . '<br>';
    echo $thisWeaknessMultiplier . '<br>';
    echo $thisResistanceType . '<br>';
    echo $thisResistanceMultiplier . '<br><br>';

    echo $targetType . '<br>';
    echo $targetWeaknessType . '<br>';
    echo $targetWeaknessMultiplier . '<br>';
    echo $targetResistanceType . '<br>';
    echo $targetResistanceMultiplier . '<br><br>';

    // Attack
    $getMove = array_search($move, array_column($this->attacks, 'move'));
    $doDamage = $this->attacks[$getMove]->damage;
    $reducedhealth = $target->hitPoints - $doDamage;

    // Show what happens
    echo $this->name . ' used ' . $move . '!<br>';
    echo $target->name . ' got hit for ' . $doDamage . '! <br>';
    echo $target->name . ' has ' . $reducedhealth . 'HP left! <br>';

  }
}

?>
