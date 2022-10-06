<?php

/**
 * Condicionales
 * 
 * IF:
 * if(condicion){
 *      instrucciones
 * }else{
 *      otras instrucciones
 * }
 * 
 * OPERADORES DE COMPARACIÓN
 * 
 *  ==  -> igual
 *  === -> identico
 *  !=  -> Diferente
 *  <>  -> Diferente
 *  !== -> No Identico
 *  <   -> Menor que
 *  >   -> Mayor que
 *  <=  -> Menor igual que
 *  >=  -> Mayor igual que
 * 
 * OPERADORES LOGICOS
 * && -> and
 * || -> or
 * !  -> not
 * 
 * 
 */

$color = 'verde';

if ($color == 'rojo') {
    echo "El Color SI es Rojo";
} else {
    echo 'El Color NO es Rojo';
}

echo '<br>';

$year = 2011;

if ($year >= 2019) {
    echo 'El año es 2019 o superior';
} else {
    echo 'El año es anterior a 2019';
}

echo '<br>';

$nombre = 'David Extremadura';
$ciudad = 'Madrid';
$continente = 'Europa';
$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad </h1>";

    if ($continente == 'Europa') {
        echo "<h1>Y es de $ciudad </h1>";
    } else {
        echo "<h1> Y es no es Europeo </h1>";
    }
} else {
    echo "<h1>$nombre es menor de edad</h1>";
}

echo '<br>';

$dia = 1;

if ($dia == 1) {
    echo "Es Lunes";
} else {
    if ($dia == 2) {
        echo "Es Martes";
    } else {
        if ($dia == 3) {
            echo "Es Miercoles";
        } else {
            if ($dia == 4) {
                echo "Es Jueves";
            } else {
                if ($dia == 5) {
                    echo "Es Viernes";
                } else {
                    echo "Fin de Semana";
                }
            }
        }
    }
}

echo '<br>';

if ($dia == 1) {
    echo "Es Lunes";
} elseif ($dia == 2) {
    echo "Es Martes";
} elseif ($dia == 3) {
    echo "Es Miercoles";
} elseif ($dia == 4) {
    echo "Es Jueves";
} elseif ($dia == 5) {
    echo "Es Viernes";
} else {
    echo "Fin de Semana";
}

echo '<br>';

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 65;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Esta en edad de Trabajar";
} else {
    echo "No Puede Trabajar";
}

echo '<br>';

$pais = 'Mexico';

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    # code...
    echo "En este pais se habla español";
} else {
    # code...
    echo "En este pais no se habla español";
}

echo '<br>';

//Switch
$dia = 2;
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Fin de Semana";
        break;
}

echo '<br>';

// GOTO
goto ejecuta_aqui;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";

ejecuta_aqui:
echo "Me he saltado 4 echos";