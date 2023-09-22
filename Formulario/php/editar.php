<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/index.css">
    <title>Formulario </title>
</head>
<body>
    <form action="./php/registro.php" method = "post">
        <h2>Editar Informacion</h2>
        <?php
        include_once 'Conexion.php';

        $TraerDocumento = $_GET['documento'];
        $Nombre = "SELECT `nombre` FROM `registro` WHERE `documento` = '$Documento'";
        echo "<label for='nombre'>Nombre:</label>";
        echo '<input type="text" id="nombre" name="nombre" values="'$Nombre'" required>';
        
        echo '<label for="apellido">Apellido:</label>';
        echo '<input type="text" id="apellido" name="apellido" required>';
        
        echo '<label for="documento">Documento de identidad:</label>';
        echo '<input type="documento" id="documento" name="documento" required>';
        
        echo '<label for="contrasena">Contraseña:</label>';
        echo '<input type="password" id="contrasena" name="contrasena" required>';
        
        echo '<label for="contrasena2">Repite Contraseña:</label>';
        echo '<input type="password" id="contrasena2" name="contrasena2" required>';

        echo '<label for="fecha">Fecha de Nacimiento:</label>';
        echo '<input type="date" id="fecha" name="fecha">';
        
        echo '<label for="telefono">Teléfono:</label>';
        echo '<input type="tel" id="telefono" name="telefono">';
        
        echo '<button type="submit">Enviar</button>';
    echo '</form>
        ?>
</body>
</html>';

