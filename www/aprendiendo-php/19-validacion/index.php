<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>

<body>
    <h1>Validar formularios en PHP</h1>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];


        switch ($error) {
            case 'faltan_valores':
                echo '<strong style="color:red">Faltan Valores en el Formulario</strong>';
                break;
            case 'nombre':
                echo '<strong style="color:red">El campo ' . $error . ' debe contener solo letras</strong>';
                break;
            case 'apellidos':
                echo '<strong style="color:red">El campo ' . $error . ' debe contener solo letras</strong>';
                break;
            case 'edad':
                echo '<strong style="color:red">El campo ' . $error . ' debe ser un entero</strong>';
                break;
            case 'correo':
                echo '<strong style="color:red">El campo ' . $error . ' debe contener el formato de un correo electronico</strong>';
                break;
            case 'password':
                echo '<strong style="color:red">El campo ' . $error . ' debe ser mayor a 5 caracteres</strong>';
                break;
        }
    }
    ?>

    <form action="procesar_formulario.php" method="POST">

        <p>
            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" name="nombre" id="" pattern="[a-zA-z]+" required>
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <br>
            <input type="text" name="apellidos" id="" pattern="[a-zA-z]+" required>
        </p>

        <p>
            <label for="edad">Edad</label>
            <br>
            <input type="number" name="edad" id="" pattern="[0-9]+" required>
        </p>

        <p>
            <label for="correo">Email</label>
            <br>
            <input type="email" name="correo" id="" required>
        </p>

        <p>
            <label for="contraseña">Contraseña</label>
            <br>
            <input type="password" name="contraseña" id="" required>
        </p>

        <input type="submit" name="" id="" value="Enviar">


    </form>
</body>

</html>