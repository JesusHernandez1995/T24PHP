<?php 

// int
$x_int = 4;
$y_int = 7;

// double
$n_double = 4.1;
$m_double = 7.1;

echo "valor de x: $x_int <br /> valor de y: $y_int <br /> valor de n: $n_double <br /> valor de $m_double <br />";
$suma = $x_int + $y_int;
$resta = $x_int - $y_int;
$producto = $x_int * $y_int;
$division = $x_int / $y_int;
$resto = $x_int % $y_int;
echo "la suma de x + y: $suma <br /> la resta de x - y: $resta <br /> el producto de x * y: $producto <br /> la division de x / y: $division <br /> el resto de x % y: $resto <br />";
$suma = $n_double + $m_double;
$resta = $n_double - $m_double;
$producto = $n_double * $m_double;
$division = $n_double / $m_double;
$resto = $n_double % $m_double;
echo "la suma de m + n: $suma <br /> la resta de m - n: $resta <br /> el producto de m * n: $producto <br /> la division de m / n: $division <br /> el resto de m % n: $resto <br />";
$suma = $x_int + $n_double;
$division = $y_int / $m_double;
$resto = $y_int % $m_double;
$doblex = $x_int*2;
$dobley = $y_int*2;
$doblem = $m_double*2;
$doblen = $n_double*2;
$sumtotal = $x_int + $y_int + $n_double + $m_double;
$productototal = $x_int * $y_int * $n_double * $m_double;
echo "la suma de x + n: $suma <br /> la division de y / n: $division <br /> el resto de y % m: $resto <br />";
echo "el doble de cada variable: $doblex, $dobley, $doblem, $doblen <br />";
echo "la suma total y el producto total de cada variable: $sumtotal, $productototal";
?>