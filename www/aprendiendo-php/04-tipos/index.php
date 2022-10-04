<?php

/**
 * TIPOS DE DATOS
 * Entero [int / integer] ej. 99
 * Coma | Flotante | Decimales [float / double ] ej. 3.1416
 * Cadenas de caracteres [string] ej. "Hola yo soy un string"
 * Boleano [bool] ej. TRUE FALSE
 * Vacio [null]
 * Coleccion de Datos [array]
 * Objetos
 */

$numero = 100;
$decimal = 27.9;
$texto = "Soy un Texto $numero";
$verdadero = true;
$nula = null;

echo $texto;
echo '<br>';
// echo gettype($nula);

// Debugear
$mi_nombre[] = "Víctor Robles";
$mi_nombre[] = "Víctor Robles";

var_dump($mi_nombre);
