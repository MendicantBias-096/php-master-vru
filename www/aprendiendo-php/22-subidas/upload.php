<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];


// echo ('<pre>');
// var_dump($archivo);
// echo ('</pre>');


if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {

    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre);
    header("Refresh: 5; URL=index.php");
    echo 'Imagen subida correctamente ✔';
} else {
    header("Refresh: 5; URL=index.php");
    echo "El tipo de archivo que se intenta subir no cincide con el formato solicitado";
}



// echo '<br>';
// print_r($archivo);
// die();