<?php

/**
 * Variables locales: son las que se definen dentro de la funcion y no pueden utilizarse fuera de ella
 * Variables locales: son las que se definen fuera de cualquier funcion y pueden utilizarse dentro y fuera de las funciones definidas
 * 
 * 
 */

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";
echo $frase;

function holaMundo()
{
    global $frase;

    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();

// Funciones Variables

function buenasDias()
{
    return "Hola, Buenos Días";
}

function buenasTardes()
{
    return "Hey!! ¿Qué tal la comida?";
}

function buenasNoches()
{
    return "A mimirs";
}



if (isset($_GET['horario'])) {

    $horario = $_GET['horario'];

    $funcion = "buenas" . $horario;

    echo '<br>';
    echo $funcion();
}