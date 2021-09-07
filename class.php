<?php

class Fruit {
  // Properties
  public $name;
  public $color;
  public $price;
  // Methods
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function set_price($price) {
  	$this->price = $price;
  }


  function get_price() {
    return $this->price;
  }

}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_price('10');
$banana->set_price('2');

echo $apple->get_name();
echo "<br> \n";
echo $banana->get_name();
echo "<br> \n";


echo $apple->get_name()." = ".$apple->get_price();
echo "<br> \n";
echo $banana->get_name()." = ".$banana->get_price();





class User {
  // Properties
  public $name;
  public $age;
  public $address;
  private $mobile;
  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}


?>