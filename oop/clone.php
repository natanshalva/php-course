<?php

class one {
  var $t; 
}

$one = new one;
$one->t = "tea";
echo $one->t;
// lets just mack new refrence as usual 
echo "<br /> ----------<br />";
$two = $one;
echo "<br>";
$two->t = "coffie";
echo $two->t;
echo "<br /> ----------<br />";
//let's  clone the attrbute
$three = clone $one;
$three->t = "water";
echo $three->t;


?>
