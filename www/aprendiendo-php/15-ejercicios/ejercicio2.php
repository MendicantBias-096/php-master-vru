<?php

/**EJERCICIO 2
 * 
 *  Un programa en PHP que añada valores a un ARRAY mientras que su longitud sea menor a 120 y mostrarlo por pantalla
 * 
 */

$coleccion = array();

for ($i = 0; $i <= 120; $i++) {
    $elementos = rand(0, 500);
    array_push($coleccion, $elementos);
}

foreach ($coleccion as $elemento) {
    echo '[' . $elemento . ']';
}