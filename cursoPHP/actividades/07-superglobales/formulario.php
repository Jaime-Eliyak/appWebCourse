<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrulario</title>
</head>
<body>
    <h1>Formulario en PHP GET</h1>
    <form action="recibir.php" method="get">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        <br>
        <input type="submit" value="enviarDatos">
    </form>

    <h1>Formulario en PHP POST</h1>
    <form action="recibir.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        <br>
        <input type="submit" value="enviarDatos">
    </form>

</body>
</html>
<?php


?>