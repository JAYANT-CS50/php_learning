<?php
function add_five(&$value) {
  $value += 8;
}

$num = 2;
add_five($num);
echo $num;
?>