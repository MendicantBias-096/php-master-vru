<?php

/**
 * Ejercicio 3. hacer una interfaz de usuario (formulario con 2 inputs y 4 botones
 * sumar restar dividir y multiplicar
 * Mostrar resultado en pantalla
 */

if (!empty($_POST['numero1']) && !empty($_POST['numero2']) || $_POST['numero1'] == 0 || $_POST['numero2'] == 0) {

    $resultado = true;
    $operacion;

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (isset($_POST['sumar'])) {
        $operacion = $numero1 + $numero2;
    }

    if (isset($_POST['restar'])) {
        $operacion = $numero1 - $numero2;
    }

    if (isset($_POST['multiplicar'])) {
        $operacion = $numero1 * $numero2;
    }

    if (isset($_POST['dividir'])) {
        if ($numero2 == 0) {
            $operacion = "Indeterminado";
        } else {
            $operacion = $numero1 / $numero2;
        }
    }
} else {
    $resultado = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Calculadora Basica PHP</h1>

    <form action="" method="POST">
        <p>
            <label for="numero1">Primera Variable</label>
            <br>
            <input type="number" name="numero1" id="" pattern="[0-9]+">
        </p>

        <p>
            <label for="numero2">Segunda Variable</label>
            <br>
            <input type="number" name="numero2" id="" pattern="[0-9]+">
        </p>

        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">

    </form>


    <?php
    if ($resultado) {
        echo "El resultado de la opercion es: $operacion";
    } else {
        echo "Hacen falta valores para poder calcular";
    }
    ?>



</body>

</html>