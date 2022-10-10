<?php


$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alejandro Fernandez'];
$numeros = [1, 2, 5, 8, 3, 4];

// Ordena por orden alfabetico de forma asendente
asort($cantantes);
// Ordena por orden alfabetico de forma descendente
arsort($cantantes);
// Ordena por orden numerico (y alfabetico) de forma ascendente
sort($numeros);
// Ordena por orden numerico (y alfabetico) de forma descendente
rsort($numeros);

// Añadir elementos a un array
$cantantes[] = 'El Chombo';
array_push($cantantes, 'Shakira');

//Eliminar o sacar el ultimo elemento del array
array_pop($cantantes);

//Eliminar o sacar un elemento en concreto del array
unset($cantantes[2]);

//Msotrarun elemento del array de forma aleatorea
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo '<br>';

//Voltear un array
var_dump(array_reverse($numeros));
echo '<br>';

//Buscar un elemento en el array
var_dump(array_search('Drake', $cantantes));
echo '<br>';

//Contar el numero de elementos del array
echo count($cantantes);
echo '<br>';
echo sizeof($cantantes);
echo '<br>';







var_dump($cantantes);
echo '<br>';
var_dump($numeros);