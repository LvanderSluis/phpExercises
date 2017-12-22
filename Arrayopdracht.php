<?php

$array1 = array(5,6,7,8,9,10,11,12,13,14);
$array2 = array(0,2,4,6,8,10,12,14,16,18);
$array3 = totalSum($array1, $array2);

function totalSum($array1, $array2){
  $array3 = array();
for($i=0; $i < count($array1); $i++){
  $array3[$i] = $array1[$i] + $array2[$i];
}
return $array3;
}

print "<pre>";
print_r($array3);
print "</pre>";



?>
