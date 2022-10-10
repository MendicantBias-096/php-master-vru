<?php

/** EJERCICIO 1
 * 
 * Relizar un programa en PHP que contenga un ARRAY con 8 numeros enteros y que haga lo siguiente:
 *  - Recorrelo y mostrarlo
 *  - Ordenarlo y mostrarlo
 *  - Mostrar su longitud
 *  - Buscar algun elemento (que llege por la URL)
 */

// Creamos el Array
$numeros = array(11, 44, 55, 77, 23, 9, 97, 67);

//Funcion para mostrar un array
function mostrarArray($numeros)
{
    $resultado = '';

    foreach ($numeros as $numero) {
        $resultado .= ' [' . $numero . '] ';
    }

    return $resultado;
}

// Recorrerlo y mostrarlo
echo '<h1>Recorrerlo y Mostrarlo</h1>';
echo mostrarArray($numeros);
echo '<hr>';

// Ordenarlo y mostrarlo
echo '<h1>Ordenarlo y Mostrarlo</h1>';
sort($numeros);
echo mostrarArray($numeros);

echo '<hr>';

// Msotrar su longitud
echo '<h1>Mostrar su longitud</h1>';
echo count($numeros);
echo '<hr>';

// Buscar algun elemento
echo '<h1>Buscar algun elemento</h1>';

if (isset($_GET['elemento']) && !empty($_GET['elemento'])) {
    $elementoBuscar = $_GET['elemento'];
    $indice = array_search($elementoBuscar, $numeros);

    if (!empty($indice)) {
        echo "El numero " . $numeros[$indice] . " se encuentra en la posicion " . $indice;
    } else {
        echo "El numero $elementoBuscar no existe dentro del array";
    }
} else {
    echo "Ingrese un elemento a buscar por la URL";
}