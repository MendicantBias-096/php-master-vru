<?php

/**
 * EJERCICIO 4
 * 
 * Crear un programa en PHP que tenga 4 variables
 *  - Una de tipo array
 *  - Otra de tipo string
 *  - Otra int
 *  - Otra boleana
 *  Y que se imprima un mensaje segun el tipo de variable que sea
 */


$coleccion = array(
    // Variable array
    $varArray = array(1, 2, 3, 4, 5),
    // Variable string
    $varString = 'string',
    // Variable int
    $varInt = 5,
    // Variable boleana
    $varBool = TRUE,
);

$indice = 0;

foreach ($coleccion as $elemento) {

    switch ($elemento) {
        case is_array($elemento):
            echo "El elemento ";
            print_r($elemento);
            echo "es de tipo [ARRAY] y esta en la posicion $indice de la coleccion";
            echo '<hr>';
            break;
        case is_string($elemento):
            echo "El elemento $elemento es de tipo [STRING] y esta en la posicion $indice de la coleccion";
            echo '<hr>';
            break;
        case is_int($elemento):
            echo "El elemento $elemento es de tipo [INT] y esta en la posicion $indice de la coleccion";
            echo '<hr>';
            break;
        case is_bool($elemento):
            echo "El elemento $elemento es de tipo [BOOL] y esta en la posicion $indice de la coleccion";
            echo '<hr>';
            break;
        default:
            echo "Este elemento no coincide con ninguno de los esperados";
            break;
    }
    $indice++;
}