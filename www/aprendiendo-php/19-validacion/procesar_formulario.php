<?php

foreach ($_POST as $nombre_campo => $valor) {

    if (!empty($valor)) {

        $error = 'ok';
        $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
        eval($asignacion);
    } else {
        $error = 'faltan_valores';
        break;
    }
}

if ($error == 'ok') {
    //Validamos si nombre tiene el formato correcto
    if (!is_string($nombre) || !preg_match("/[a-zA-z]/", $nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = 'nombre';
    }

    //Validamos si apellido tiene el formato correcto
    if (!is_string($apellidos) || !preg_match("/[a-zA-z]+/", $apellidos) || preg_match("/[0-9]/", $apellidos)) {
        $error = 'apellidos';
    }

    //Validamos si edad tiene el formato correcto
    if ($edad) {
        (int) $edad;
    }

    if (!is_numeric($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }

    //Validamos si email tiene el formato correcto
    if (!is_string($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = 'correo';
    }

    //Validamos si contraseña tiene el formato correcto
    if (strlen($contraseña) < 5) {
        $error = 'password';
    }
}

if ($error != 'ok') {
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios en PHP</title>
</head>

<body>

    <? if ($error == 'ok') : ?>
    <h1>Datos Validados Correctamente</h1>
    <p><?= $nombre ?></p>
    <p><?= $apellidos ?></p>
    <p><?= $edad ?></p>
    <p><?= $correo ?></p>
    <? endif ?>

</body>

</html>

<?php


?>