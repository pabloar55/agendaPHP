<?php session_start();
$mensajeError = "";
if (isset($_POST["vaciar"]) || !isset($_SESSION["agenda"])) {
    $_SESSION["agenda"] = [];
}
if (isset($_POST["enviar"])) {
    if (trim($_POST["nombre"]) === "") {
        $mensajeError = "El nombre no puede estar vacío";
    } else if (trim($_POST["telefono"]) === "" && isset($_SESSION["agenda"][$_POST["nombre"]])) {
        unset($_SESSION["agenda"][$_POST["nombre"]]);
    } else if (trim($_POST["telefono"]) === "") {
        $mensajeError = "El teléfono no puede estar vacío";
    } else {
        $_SESSION["agenda"][$_POST["nombre"]] = $_POST["telefono"];
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agenda.css">
    <title>Agenda</title>
</head>

<body>
    <main>
        <h1>Agenda</h1>
        <?php
        if (!empty($_SESSION["agenda"])) {
            echo '<fieldset>
            <legend>Datos Agenda</legend>';

            foreach ($_SESSION["agenda"] as $nombre => $telefono) {
                echo $nombre . " " . $telefono . "<br>";

            }
            echo "</fieldset>";
        }
        ?>
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
                <div>
                    <input type="submit" value="Guardar" name="enviar" id="enviar">
                    <button type="reset">Limpiar</button>
                </div>
            </fieldset>
        </form>
        <?php
        if (!empty($_SESSION["agenda"])) {
            echo '<form action="" method="post">
            <fieldset>
                <legend>Vaciar Agenda</legend>
                <input type="submit" value="Vaciar" name="vaciar">
            </fieldset>
        </form>';
        }
        ?>
    </main>
</body>

</html>