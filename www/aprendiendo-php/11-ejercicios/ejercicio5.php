<?php

/** Ejericio 5
 * 
 * Mostrar todos los numeros entres dos numeros que lelguen por la URL[GET]
 */


$aux = 0;

if (isset($_GET['numero1'], $_GET['numero2'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 > $numero2) {
        $aux = $numero1;
        $numero1 = $numero2;
        $numero2 = $aux;
    }

    for ($i = $numero1 + 1, $j = $numero2; $i < $j; $i++) {
        echo "[$i]";
    }
} else {
    echo "Numeros por URL por favor";
}