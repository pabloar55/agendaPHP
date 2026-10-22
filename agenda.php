<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>

<body>
    <?php

    if (!isset($_SESSION["agenda"])) {
        $_SESSION["agenda"] = [];
        echo "sesion iniciada";
    }

    if (isset($_POST["enviar"])) {
        $_SESSION["agenda"][$_POST["nombre"]] = $_POST["telefono"];
        echo "Datos: ";
        foreach ($_SESSION["agenda"] as $nombre => $cantidad) {
            echo $nombre . " " . $cantidad;
        }
    }
    ?>
    <main>
        <h1>Agenda</h1>
        <div>
            <form action="datosAgenda.php" method="get">

            </form>
            <form action="" method="POST" title="Nuevo Contacto" name="nuevoContacto">
                <label for="nombreID">Nombre:</label>
                <input type="text" id="nombreID" name="nombre">
                <label for="telID">Teléfono:</label>
                <input type="tel" name="telefono" id="telID">
                <input type="submit" value="Enviar" name="enviar">
            </form>

            <form action="vaciarAgenda.php" method="get"></form>
        </div>
    </main>
</body>

</html>