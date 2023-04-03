<?php
class Personnage {
  // Properties
  public $name;
  public $armor;
  public $life;
  public $degat;

  function __construct($name,$armor,$life,$degat){
    $this->name=$name;
    $this->armor=$armor;
    $this->life=$life;
    $this->degat=$degat;
    

  }

  // Methods
  public function set_name($name) {
    $this->name = $name;
  }
  public function get_name() {
    return $this->name;
  }
  public function set_armor($armor) {
    $this->armor = $armor;
  }
  public function get_armor($armor) {
    $this->armor = $armor;
  }
  public function set_life($life) {
    $this->life = $life;
  }
  public function get_life($life) {
    $this->life = $life;
  }
  public function set_degat($degat) {
    $this->degat = $degat;
  }
  public function get_degat($degat) {
    $this->degat = $degat;
  }
}


$hero = new Personnage('Link', 20, 200, 15);
$minion = new Personnage('Mokoblin','',10,10);
$lieutenantMinion = new Personnage('Lézalfos','',30,30);
$chefMinion = new Personnage('Moblin','',100,100);



echo $hero->get_name();
echo "<br>";
echo $minion->get_name();
echo "<br>";
echo $lieutenantMinion->get_name();
echo "<br>";
echo $chefMinion->get_name();

?>