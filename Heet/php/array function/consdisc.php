<?php
class Fruit {
  public $name;
  public $color;

  function abc() {
    echo "The fruit is heet and the color is {$this->color}.<br>";
  }
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
  }
}

$apple = new Fruit("Pineapple", "yellow");
echo $apple->abc();
?>