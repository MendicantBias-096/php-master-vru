<?php
/*
 * Ejercicio 2. 
 * Escribir un script en PHP que nos muestre por pantalla todos los numeros pares que hay del 1 al 100
 */

$i = 1;
$par = 0;

do {

    if (($i % 2) == 0) {
        echo '[' . $i . '] ';
    }

    $i++;
} while ($i <= 100);