<?php

// Bucle While

/**
 * Un bucle es una estructura de control la cual se ejecuta repetidas veces como sea necesario
 *  Hasta que se le indique que se detenga 
 */

$numero = 0;
while ($numero <= 100) {
    echo "$numero";

    if ($numero != 100) {
        echo ", ";
    }
    // echo '<br>';
    $numero++;
}


if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<br>";

// var_dump($numero);

echo "<br>";
echo "<h1>Tabla de multiplicar del Numero $numero</h1>";

$contador = 0;
while ($contador <= 10) {
    echo "$numero X $contador = " . $numero * $contador;
    echo "<br>";
    $contador++;
}

echo "<br>";
//Do while

$edad = 17;
$contador = 1;

do {
    echo "Tienes acceso al locar privado $contador";
    $contador++;
    echo "<br>";
} while ($edad >= 18 && $contador <= 10);