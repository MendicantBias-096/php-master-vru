<?php


//Sumar toos los numeros del 1 al 100

for ($i = 0, $j = 0; $i <= 100; $i++) {
    $j += $i;
}

echo "El resultado de sumar todos los numeros del 1 al 100 de forma consecutiva es $j";

// Tabla de multiplciar

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<br>";
echo "<h1>Tabla de multiplicar del Numero $numero</h1>";

for ($i = 0; $i <= 10; $i++) {

    if ($numero == 40) {
        echo "El numero no es valido para la tabla";
        break;
    }
    echo "$numero X $i = " . $numero * $i;
    echo "<br>";
}