<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion </title>
    <link rel="stylesheet" href="./Style/menu.css">
</head>
<body>
    <form action="menu.php" method="POST">
        <h2>Bienvenido elige el plato que deseas</h2>
        
        <label for="nombre">Nombre plato:</label>
        <select name="nombre" id="nombre">
            <option value="Bandeja paisa $12000">Bandeja paisa $12000</option>
            <option value="Cubios $ 10000">Cubios $ 10000</option>
            <option value="Consome $ 7000">Consome $ 7000</option>
            <option value="Ajiaco $ 7000">Ajiaco $ 7000</option>
            <option value="Lentejas $ 10000">Lentejas $ 10000</option>
            <option value="Garbanzos $ 10000">Garbanzos $ 10000</option>
            <option value="Sudado pollo $">Sudado pollo $ 120000</option>
            <option value="Sudado carne $">Sudado carne $ 12000</option>
            <option value="Mojarra $ 15000">Mojarra $ 15000</option>
            <option value="Churrasco $ 15000">Churrasco $ 15000 </option>
        </select>

        <button type="submit">Pedir</button>
    </form>
    <table style="margin: auto; width: 800px; border-collapse: separarte; border-spacing: 10px 5px">
  <thead>
    <th>Id pedido</th>
    <th>Nombre de plato</th>    
  </thead>
    <?php
    include_once "Conexion/conexion.php";
    $Plato = $_POST['nombre'];
    $Insertar = "INSERT INTO carta(nombre) values ('$Plato')";
    $resultado = mysqli_query($conectar,$Insertar);

    $consultarplato = "SELECT * FROM carta";
    $resultadoplato = $conectar -> query($consultarplato) or die (mysqli_error($conectar));
    while ($fila=$resultadoplato->fetch_assoc()) {
      echo "<tr>";
      echo "<td>"; echo $fila['id']; echo "</td>";
      echo "<td>"; echo $fila['nombre']; echo "</td>";
    }
    ?>
    </table>
</body>
</html>