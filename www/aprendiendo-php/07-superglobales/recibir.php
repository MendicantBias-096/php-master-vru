<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo '<h1>' . 'Recibi: ' . $nombre . ' & ' . $apellidos . '</h1>';

var_dump($_GET);

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

echo '<h1>' . 'Recibi: ' . $nombre . ' & ' . $apellidos . '</h1>';

var_dump($_POST);