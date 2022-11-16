<?php

/*
 *EJERCICIO 3
 * 
 * Un programa en PHP que compruebe si una variable esta vacia y ss esta vacia rellenarla con texto en minusculas
 * Luego msotrarlo en mayusculas ye en negrita
 * 
*/

$variable;

if (empty($variable)) {

    $variable = 'Texto de prueba';
    $variableMayus = strtoupper($variable);

    echo '<strong>' . $variableMayus . '</strong>';
} else {
    "Esta Variable ya tiene contenido";
}