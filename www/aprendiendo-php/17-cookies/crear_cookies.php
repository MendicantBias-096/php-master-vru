<?php

/**
 * Una cookie es un fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar datos o rasterar el comportamiento del mismo en la wer
 */

// Crear cookie

// setcookie('nombre','valor que solo puede ser texto',caducidad,ruta,dominio);

// Cookie básica
setcookie('micookie', 'Valor de mi galleta');

// Cookie con expiración
setcookie('unyear', 'Valor de mi cookie de 365 dias', time() + (60 * 60 * 24 * 365));

header('Location: ver_cookies.php');

header('Location: ver_cookies.php');