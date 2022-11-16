<?php

/**
 * EJERCICIO 5
 * 
 * Crear un array con el contenido de la tabla
 * ACCION   AVENTURA    DEPORTES
 * GTA      ASSASINS    FIFA 19
 * COD      CRASH       PES 19
 * PUBG     PRINCE OF   MOTO GP 19
 *          PERSIA
 * 
 * Mostrar la tabla
 * Cada columna debe ir en un fichero separado
 */

$tabla = array(
    "ACCION" => array('GTA', 'COD', 'PUGB'),
    "AVENTURA" => array('ASSASINS', 'CRASH', 'PRINCE OF PERSIA'),
    "DEPORTES" => array('FIFA 19', 'PES 19', 'MOTO GP 19'),
);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php include_once 'includes/encabezado.php' ?>
    <tbody>
        <?php include_once 'includes/fila_1.php' ?>
        <?php include_once 'includes/fila_2.php' ?>
        <?php include_once 'includes/fila_3.php' ?>
    </tbody>
</table>