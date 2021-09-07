<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    echo "constructor is called .... \n";
    $this->name = $name;
    echo "name is set .... \n";
  }
  
  function __destruct() {
    echo "destructor  is called .... \n";
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple"); // object is created
?>