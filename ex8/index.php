<?php 

$a = 1;
$b = 2;
$c = 3;
$d = 4;

echo "valores iniciales de a, b, c y d: $a, $b, $c, $d <br />";

$b = $c;
$c = $a;
$a = $d;
$d = $b; 

echo "valores cambiados de a, b, c y d: $a, $b, $c, $d <br />";

?>