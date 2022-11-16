<?php

/**
 * Sesión: almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador
 */

// iniciar la Sesion

session_start();

$variable_normal = 'Soy una cadena de texto';

$_SESSION['variable_persistente'] = 'Hola soy una sesion activa';

echo $variable_normal;
echo '<br>';

echo $_SESSION['variable_persistente'];