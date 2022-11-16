<?php

/** Ejercicio 6
 * 
 *  Imprimir las tablas de multiplicar del 1 al 10 en una tabla de HTML
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <caption>Tablas de Multiplicar</caption>

        <thead>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th> Tabla del $i </th>";
            }
            ?>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>$j x $i = " . $j * $i . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>