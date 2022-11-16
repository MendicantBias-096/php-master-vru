<?php

/**
 * Funciones
 * 
 * Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden 
 * reutilizarse solamente invocada a la funcion tantas veces como queramos
 * 
 */

// Ejemplo 1

// function muestraNombres()
// {

//     echo "<p>Mario Bros</p>";
//     echo "<p>Juan Perez</p>";
//     echo "<p>Lois Grifin</p>";
//     echo "<p>Homero Simpson</p>";
//     echo '<hr>';
// }

// muestraNombres();
// muestraNombres();
// muestraNombres();
// muestraNombres();

// Ejemplo 2

// function tabla($numero)
// {
//     echo "<h1>Tabla del $numero</h1>";

//     for ($i = 1; $i <= 10; $i++) {
//         echo "$numero x $i =" . $numero * $i . '<br>';
//     }
// }

// if (isset($_GET['numero'])) {
//     tabla($_GET['numero']);
// } else {
//     echo "No Hay Parametro, Ingrese por URL";
// }

// for ($i = 1; $i <= 10; $i++) {
//     tabla($i);
// }


// Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false)
{
    $cadena_texto = "";

    $cadena_texto .= "<h1> Calculadora Basica </h1>";
    $cadena_texto .= "<p>Suma: $numero1 + $numero2 = " . $numero1 + $numero2 . '</p>';
    $cadena_texto .= "<p>Resta: $numero1 - $numero2 = " . $numero1 - $numero2 . '</p>';
    $cadena_texto .= "<p>Miltiplicacion: $numero1 x $numero2 = " . $numero1 * $numero2 . '</p>';
    $cadena_texto .= "<p>Division: $numero1 / $numero2 = " . $numero1 / $numero2 . '</p>';

    if ($negrita) {
        $cadena_texto .= "<h1> Parametro Opcional Activado </h1>";
    }

    return $cadena_texto;
}

echo calculadora(10, 30);

// Ejemplo 4

// function devuelveNombre($nombre)
// {
//     return "El nombre es: $nombre";
// }

// echo devuelveNombre("Victor Robles");

// Ejemplo 5

function getNombre($nombre)
{
    $nombretxt = "El nombre es " . $nombre;
    return $nombretxt;
}

function getApellido($apellido)
{
    $apellidotxt = "El apellido es " . $apellido;
    return $apellidotxt;
}

function devuelveNombre($nombreParam, $apellidoParam)
{
    $nombre = getNombre($nombreParam);
    $apellido = getApellido($apellidoParam);

    return  $nombre . '<br>' . $apellido;
}

echo devuelveNombre('Victor', 'Robles');