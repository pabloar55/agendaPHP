<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>

<body>
    <?php
    $agenda = [];
    
    if (isset($_POST["enviar"])) {
        if (exists)
        echo "el nombre es: " . $_POST["nombre"];
        echo "el telefono es: " . $_POST["telefono"];
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