<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Registro clientes </title>
    <link rel="stylesheet" href="./Style/index.css">
</head>
<body>
    <form action="./Conexion/registro.php" method = "post">
        <h2>Registro clientes</h2>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <label for="contrasena">Repite contraseña:</label>
        <input type="password" id="contrasena2" name="contrasena2" required>
        
        <label for="documento">Numero de documento:</label>
        <input type="number" id="documento" name="documento" required>
        
        <label for="genero">Genero:</label>
        <select name="genero" id="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="No_especificado">No especificado</option>
        </select>

        <label for="nacimiento">Nacimiento:</label>
        <input type="date" id="nacimiento" name="nacimiento" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
        
        <button type="submit">Registrar</button>

    </form>
</body>
</html>