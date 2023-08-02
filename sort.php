<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

for ($x= 0; $x < count($numbers); $x++  ){
  echo  $numbers[$x];
  echo "<br>";
  
}
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l");
?>