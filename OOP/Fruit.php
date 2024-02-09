<?php
 class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit();
  $apple->set_name('Apple');
  $apple->set_color('Red');
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " .  $apple->get_color();

  echo "<br>";

  $apple2 = new Fruit();
  $apple2->set_name('Apple');
  $apple2->set_color('Green');
  echo "Name: " . $apple2->get_name();
  echo "<br>";
  echo "Color: " .  $apple2->get_color();
  ?>