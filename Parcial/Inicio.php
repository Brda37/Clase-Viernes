<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion </title>
    <link rel="stylesheet" href="./Style/inicio.css">
</head>
<body>
    <form action="Conexion/sesion.php" method="POST">
        <h2>Inicio sesion</h2>
        
        <label for="documento">Numero de documento:</label>
        <input type="number" id="documento" name="documento" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <button type="submit">Ingresar</button>

    </form>
</body>
</html>