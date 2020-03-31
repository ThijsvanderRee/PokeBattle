<?php

class Pokemon {

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

  private function takeDamage($target, $damageDone) {
    $target->hitpoints - $damageDone;
  }

  public function fight($move, $target) {
    if ($this->hitPoints <= 0) {
      echo $this->name . ' is no longer able to fight! <br>';
    } else {
      if ($target->hitPoints <= 0) {
        echo $target->name . ' is no longer able to fight! <br>';
      }
        else {

        // Attack
        $getMove = array_search($move, array_column($this->attacks, 'move'));
        $doDamage = $this->attacks[$getMove]->damage;

        if ($this->energyType == $target->weakness->type) {
          $damageDone = $doDamage * $target->weakness->multiplier;
          $this->takeDamage($target, $damageDone);
        } else if ($this->energyType == $target->resistance->type) {
          $damageDone = $doDamage / $target->resistance->multiplier;
          $this->takeDamage($target, $damageDone);
        } else {
          $damageDone = $doDamage;
          $this->takeDamage($target, $damageDone);
        }

        if ($damageDone >= $target->hitPoints) {
          $reducedhealth = 0;
        } else {
          $reducedhealth = $target->hitPoints - $damageDone;
        }

        // Show what happens
        echo $this->name . ' used ' . $move . '!<br>';
        echo $target->name . ' got hit for ' . $damageDone . '! <br>';

        if ($reducedhealth <= 0) {
          echo $target->name . ' fainted! <br>';
        } else {
          echo $target->name . ' has ' . $reducedhealth . 'HP left! <br>';
        }
        $target->hitPoints = $reducedhealth;
      }
    }
  }
}

?>
