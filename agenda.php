<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agenda.css">
    <title>Agenda</title>
</head>

<body>
    <main>
        <h1>Agenda</h1>
        <fieldset>
            <legend>Datos Agenda</legend>
            <?php

            if (!isset($_SESSION["agenda"])) {
                $_SESSION["agenda"] = [];
                echo "sesion iniciada";
            }
            if (isset($_POST["enviar"])) {
                if (trim($_POST["nombre"]) === "") {
                    echo "El nombre no puede estar vacío";
                } else {
                    $_SESSION["agenda"][$_POST["nombre"]] = $_POST["telefono"];
                }
            }

            foreach ($_SESSION["agenda"] as $nombre => $cantidad) {
                echo $nombre, " " . $cantidad . "<br>";

            }
            ?>
        </fieldset>
        <form action="" method="POST" title="Nuevo Contacto" name="nuevoContacto">
            <fieldset id="fieldsetNuevoContacto">
                <legend>Nuevo Contacto</legend>
                <div>
                <label for="nombreID">Nombre:</label>
                <input type="text" id="nombreID" name="nombre">
                </div>
                <div>
                <label for="telID">Teléfono:</label>
                <input type="tel" name="telefono" id="telID">
                </div>
                <input type="submit" value="Enviar" name="enviar" id="enviar">
            </fieldset>
        </form>
    </main>
</body>

</html>