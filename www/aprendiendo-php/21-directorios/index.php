<?php

// if (!is_dir('mi carpeta')) {
//     mkdir('mi carpeta', 0777) or die('No se puede Crear la Carpeta');
// } else {
//     echo 'La carpeta ya existe';
// }

// if (is_dir('mi carpeta')) {
//     rmdir('mi carpeta');
// } else {
//     echo 'La carpeta que intenta eliminar no existe';
// }

if ($gestor = opendir('./mi carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..') {
            echo $archivo . "<br>";
        }
    }
}