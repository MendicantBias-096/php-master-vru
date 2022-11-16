<?php

// Operadores Aritmeticos

$numero1 = 65;
$numero2 = 33;

echo 'Suma: ' . $numero1 . ' + ' . $numero2 . ' = ' . $numero1 + $numero2;
echo '<br>';
echo 'Resta: ' . $numero1 . ' - ' . $numero2 . ' = ' . $numero1 - $numero2;
echo '<br>';
echo 'Multiplicacion | Producto: ' . $numero1 . ' * ' . $numero2 . ' = ' . $numero1 * $numero2;
echo '<br>';
echo 'Division | Cociente: ' . $numero1 . ' / ' . $numero2 . ' = ' . $numero1 / $numero2;
echo '<br>';
echo 'Modulo | Resto: ' . $numero1 . ' % ' . $numero2 . ' = ' . $numero1 % $numero2;
echo '<br>';

//Operadores Incremento  y Decremento

$year = 2019;

// Incremento
// $year = $year + 1;
$year++;

// Decremento
// $year = $year - 1;
$year--;

// Pre-Incremento
// $year = 1 + $year;
++$year;

// Pre-Decremento
// $year = 1 - $year;
--$year;

echo "<h1>$year</h1>";

//Operadores de Asignacion

$edad = 55;

echo $edad . '<br>';

// $edad = $edad + 5
echo ($edad += 5) . '<br>';
// $edad = $edad - 5
echo ($edad -= 5) . '<br>';
// $edad = $edad * 5
echo ($edad *= 5) . '<br>';
// $edad = $edad / 5
echo ($edad /= 5) . '<br>';