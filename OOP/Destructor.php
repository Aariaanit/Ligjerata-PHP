<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
  }
}

$apple = new Fruit("Apple", "red");

$apple2 = new Fruit("Apple", "green");
?>