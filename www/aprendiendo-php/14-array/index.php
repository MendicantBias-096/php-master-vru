<?php

/* ARRAY
    Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre
    Para acceder a esos valores podemos usar un indice numero o alfanumerico    
*/

$pelicula = ' Batman';

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');

// var_dump($peliculas[2]);
// echo '<br>';

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

// var_dump($cantantes[2]);

echo $peliculas[0];
echo '<br>';
echo $cantantes[2];

// Recorrer todo el Array

//Con ciclo for
echo '<h2>Lista de Peliculas con Ciclo FOR</h2>';
echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) {
    echo '<li>';
    echo $peliculas[$i];
    echo '</li>';
}
echo '</ul>';


//Con ciclo foreach
echo '<h2>Lista de Peliculas con Ciclo FOR</h2>';

echo '<ul>';

foreach ($cantantes as $cantante) {
    echo '<li>';
    echo $cantante;
    echo '</li>';
}
echo '</ul>';


//Array Asociativo
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'victorrobelsweb.es',
);

echo $personas['apellidos'];

//Array Multidimensional
$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com',
    ),
    array(
        'nombre' => 'Jose',
        'email' => 'jose@jose.com',
    ),
    array(
        'nombre' => 'Josefa',
        'email' => 'josefa@josefa.com',
    ),
);

echo '<br>';

// var_dump($contactos[2]['nombre']);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}