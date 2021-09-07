<?php
class Fruit {
  public $name;
  public $color;
  private $price;

  function __construct($name) {
    echo "constructor called  ......... \n";
    $this->name = $name;
    $this->price = 30;
  }


  function get_name() {
    return $this->name;
  }

  function get_price() {
    return $this->price;
  }
}

$apple = new Fruit("Apple"); // object of class fruit is being created here
echo $apple->get_name(); // accessing the properties of class fruit using function
echo "\n";
echo $apple->name; // since the variable declared is public we can access the value directly by object
// echo $apple->price; this value cannot be access using object
echo $apple->get_price();

?>


class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");