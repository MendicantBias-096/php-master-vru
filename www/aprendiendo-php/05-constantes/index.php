<?php

// Constantes
// Es un contenedor de infotrmación que no puede variar

define('nombre', 'Victor Robles');
define('web', 'victorroblesweb.es');

$web = 'victorroblesweb.es/academy';

echo '<h1>' . nombre . '</h1>';
echo '<h1>' . web . '</h1>';

$web = 'victorroblesweb.es/cursos';

echo '<h1>' . $web . '</h1>';

//Constantes Predefinidas

echo PHP_OS;
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo PHP_EXTENSION_DIR;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';

function holaMundo()
{
    echo __FUNCTION__;
    echo '<br>';
}

holaMundo();