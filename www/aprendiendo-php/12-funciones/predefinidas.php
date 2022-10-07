<?php

//Debugear
$nombre = "Victor Robles";
var_dump($nombre);

//Fecha
echo '<br>';
echo date('d-m-Y');
echo '<br>';
echo time();
echo '<br>';

//Matematicas

echo "Raiz Cuadrada de 10: " . sqrt(10);
echo '<br>';
echo "Numero Aleatoreo: " . rand(10, 40);
echo '<br>';
echo "Numero pi: " . pi();
echo '<br>';
echo "Redondear: " . round(7.89123);

echo "<h1>Más</h1>";

echo '<br>';
echo gettype($nombre);

echo '<br>';
if (is_string($nombre)) {
    echo "Esta Varbiable es un String";
} else {
    echo "Esta Variable no es un String";
}

echo '<br>';
if (isset($edad)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

echo '<br>';
$frase = "   hola   ";
var_dump(trim($frase));

echo '<br>';
$year = 2020;
unset($year);

var_dump($year);

echo '<br>';
$texto = "";
if (empty($texto)) {
    echo "La variable Texto esta vacia";
} else {
    echo "La variable tiene contenido";
}

echo '<br>';
$cadena = "123456";

echo strlen($cadena);

echo '<br>';
$frase = "La vida es Bella";

echo strpos($frase, 'da');

$frase = str_replace("vida", "moto", $frase);
echo '<br>';
echo $frase;
echo '<br>';

echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);