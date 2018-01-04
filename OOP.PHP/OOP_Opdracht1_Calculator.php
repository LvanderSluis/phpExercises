<?php

class Calculator {
  private $som1 , $som2;

  public function __construct($var1, $var2){
    $this->som1 = $var1;
    $this->som2 = $var2;
  }

  public function add(){
    return $this->som1 + $this->som2;
  }
  public function multiply(){
    return $this->som1 * $this->som2;
  }
}

$calc = new Calculator(12,6);
echo "<p>12 + 6 = ".$calc->add(). "</p>";
echo "<p>12 * 6 = ".$calc->multiply(). "</p>";


 ?>
