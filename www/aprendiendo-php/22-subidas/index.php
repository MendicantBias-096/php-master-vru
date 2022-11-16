<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos PHP</title>
</head>

<body>

    <h1>Subir Archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" id="" />
        <br />
        <br />
        <input type="submit" value="Enviar Archivo" />
    </form>

    <h1>Listado de Imagenes</h1>
    <?php

    $gestor = opendir('./images');

    if ($gestor) :
        while (($image = readdir($gestor)) !== false) :
            if ($image != '.' && $image != '..') :
                echo "<img src='images/$image' alt='' width='200px'>";
            endif;
        endwhile;
    endif;
    ?>

    <!-- <img src="images/41CYZQbQUUL._AC_SY1000_.jpg" alt=""> -->

</body>



</html>