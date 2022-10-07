<?php

/** Ejercicio 4
 * 
 * Recoger 2 numeros por la URL [GET] y Hacer todas las operaciones basicas de una calculadora
 * Suma Resta Multiplicacion Division
 */

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if (isset($numero1, $numero2)) {
    echo "Suma: $numero1 + $numero2 = " . $numero1 + $numero2 . '<br>';
    echo "Resta: $numero1 - $numero2 = " . $numero1 - $numero2 . '<br>';
    echo "Multiplicacion: $numero1 * $numero2 = " . $numero1 * $numero2 . '<br>';
    echo "Division: $numero1 / $numero2 = " . $numero1 / $numero2 . '<br>';
}