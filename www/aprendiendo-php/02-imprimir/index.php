<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>

<body>
    <h1>Master en PHP - victorrrobles.es</h1>

    <?= "Bienvenido al curso más grande de PHP" ?>

    <?php
    // Titular de la sección
    echo '<h3>Listado de videojuegos:</h3>';

    /**
     * Esta es una lista de
     * Videojuegos
     */
    echo '<ul>'
        . '<li>GTA</li>'
        . '<li>Fifa</li>'
        . '<li>Mario Bros</li>'
        . '</ul>';

    // Parrafo Explicativo
    echo '<p>Esta es toda' . '-' . 'lista de juegos</p>';

    ?>
</body>

</html>