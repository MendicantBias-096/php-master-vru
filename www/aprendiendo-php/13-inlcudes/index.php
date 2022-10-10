<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>

<body>

    <?php
    // include 'includes/cabecera.php';
    // include_once 'includes/cabecera.php';
    // require 'includes/cabecera.php';
    require_once 'includes/cabecera.php';
    ?>

    <!-- Contenido -->
    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la pagina de inicio</p>
    </div>

    <?php var_dump($nombre); ?>

    <hr>

    <?php
    include 'includes/footer.php';
    ?>


</body>

</html>