<?php

for($i=1; $i <= 100; $i++)
{
  if($i % 3 == 0 && $i % 5 == 0){
    echo "<font style='background-color:red' font size='28px'>WoofMeow</font><br />";
  }
  else if($i % 3 == 0){
    echo "<font style='background-color:#2ecc71'>Woof</font><br />";
  }
  else if($i % 5 == 0){
    echo "<font style='background-color:#f39c12'>Meow</font><br/>";
  }
  else {
    echo $i."<br />";
  }
}

// for ($i = 1; $i <= 100; $i++)
//
//    {
//      $woof = $i % 3 == 0 ? 'Woof' : '';
//      $meow = $i % 5 == 0 ? 'Meow' : '';
//      $result = $woof || $meow ? $woof . $meow : $i;
//
//      echo $result . "<br>";
//    }

 ?>
