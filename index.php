class png {
    // Properties
    public $name;
    public $armor;
    public $life;


    // Methods
    function set_name($name) {
    $this -> name = $name;
}
function get_name() {
    return $this -> name;
}
function set_armor($armor) {
    $this -> armor = $armor;
}
function get_armor($armor) {
    $this -> armor = $armor;
}
function set_life($life) {
    $this -> life = $life;
}
function get_life($life) {
    $this -> life = $life;
}
  }

$hero = new Hero();
$minion = new Minion();
$lieutenantMinion = new LieutenantMinion();
$chefMinion = new ChefMinion();

$hero -> set_name('Link');
$hero -> set_armor('20');
  
  
  echo $apple -> get_name();
  echo "<br>";
  echo $banana -> get_name();
  ?>