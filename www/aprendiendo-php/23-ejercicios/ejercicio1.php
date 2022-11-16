<?php

/*
 * Crear una sesion que aumente sesion que aumente su calor en uno o disminuya en uno
 * en funcion de si el parametro get counter está en uno o a cero
*/

session_start();

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero'] += 1;
}


if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero'] -= 1;
}


?>

<h1>El valor de la sesión numero es: <?= $_SESSION['numero'] ?></h1>

<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<br>
<a href="ejercicio1.php?counter=0">Disminuair el valor</a>