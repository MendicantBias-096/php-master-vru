<?php

/*
    // Abrir Archivo
    $archivo = fopen("fichero_texto.txt", "a+");

    while (!feof($archivo)) {
        $contenido = fgets($archivo);
        // Mostrar contenido del archivo de texto
        echo $contenido . '<br>';
    }

    // Escribir dentro de un archivo
    fwrite($archivo, "Soy un texto metido desde php");

    // Abrir cerrar archivo
    fclose($archivo);
*/

// Copiar un archivo
copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');
// Renombrar un fichero 
rename('fichero_copiado.txt', 'archivo_renombrado.txt');
// Eliminar un archivo
unlink('archivo_renombrado.txt') or die('Error al borrar archivo');

if (file_exists('fichero_texto.txt')) {
    echo "El archivo fichero_texto.txt existe";
}