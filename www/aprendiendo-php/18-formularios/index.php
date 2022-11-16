<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido">
        </p>

        <p>
            <label for="apellido">Boton:</label>
            <input type="button" name="boton" value="Clickeame">
        </p>

        <p>
            <label for="sexo">Sexo:</label>
        <p>
            <label for="">Hombre</label>
            <input type="checkbox" name="sexo" value="Hombre">
            <label for="">Mujer</label>
            <input type="checkbox" name="sexo" value="Muejer" checked>
        </p>

        </p>

        <p>
            <label for="apellido">Color:</label>
        <p>
            <input type="color" name="color">
        </p>
        </p>

        <p>
            <label for="fecha">Fecha:</label>
        <p>
            <input type="date" name="fecha">
        </p>
        </p>

        <p>
            <label for="correo">Correo:</label>
        <p>
            <input type="email" name="correo">
        </p>
        </p>

        <p>
            <label for="archivo">Archivo:</label>
        <p>
            <input type="file" name="archivo">
        </p>
        </p>

        <p>
            <label for="numero">Numero:</label>
        <p>
            <input type="number" name="number">
        </p>
        </p>

        <p>
            <label for="contraseña">Contraseña:</label>
        <p>
            <input type="password" name="contraseña">
        </p>
        </p>

        <p>
            <label for="continente">Continente:</label>
        <p>
            <label for="">Europa</label>
            <input type="radio" name="continente" value="Europa">
            <label for="">America</label>
            <input type="radio" name="continente" value="America">
            <label for="">Asia</label>
            <input type="radio" name="continente" value="Asia">
        </p>
        </p>

        <p>
            <label for="enlace">URL:</label>
        <p>
            <input type="url" name="enlace">
        </p>
        </p>

        <p>
            <label for="areaTxt">Text Area:</label>
        <p>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </p>
        </p>

        <p>
            <label for="pelicula">Pelicúla:</label>
        <p>
            <select name="pelicula" id="">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="La Jungla de Cristal">La Jungla de Cristal</option>
                <option value="Gran Torino">Gran Torino</option>
            </select>
        </p>
        </p>



        <input type="submit" value="Enviar">
    </form>
</body>

</html>