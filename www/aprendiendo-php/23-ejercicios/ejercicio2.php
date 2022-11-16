<?php

/**
 * Una funcion
 * La funcion debe validar un email con filter var
 * Recoger una variable por get y validarla
 * Mostrar el resultado
 */

function validarEmail($email)
{
    $estado = 'No valido';

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $estado = 'valido';
    }

    return $estado;
}

if (!empty($_GET['email'])) {
    $email = $_GET['email'];
}

if (!empty($email)) {
    echo validarEmail($email);
} else {
    echo "Pasa un email por GET por la URL";
}