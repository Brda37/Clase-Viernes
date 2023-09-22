<?php
include_once "conexion.php";

$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Documento = $_POST['documento'];
$Contrasena = $_POST['contrasena'];
$Contrasena2 = $_POST['contrasena2'];
$Genero = $_POST['genero'];
$Nacimiento = $_POST['nacimiento'];
$Correo = $_POST['correo'];

$validar_documento = "SELECT * FROM Parcial WHERE documento = '$Documento'";

$resultadoDuplicado = mysqli_query($conectar,$validar_documento);

$numeroregistros = mysqli_num_rows($resultadoDuplicado);

if ($numeroregistros>0) {
    echo '<script> alert("El cliente ya esta registrado");  window.location.href = "../index.php"</script>';
}else{

    if ($Contrasena != $Contrasena) {
        echo '<script> alert("No coincide la contraseña");  window.location.href = "../index.php" </script>';
    }else{
    $Insertar = "INSERT INTO Parcial (nombre, apellido, documento, contrasena, genero, nacimiento, correo) VALUES ('$Nombre', '$Apellido', '$Documento', '$Contrasena', '$Genero', '$Nacimiento', '$Correo')";    
    
    $resultado = mysqli_query($conectar,$Insertar);

if (!$resultado) {
    echo '<script> alert("Error al Registrar: ' . mysqli_error($conectar) . '") </script>';
}else{
    echo  '<script> alert("Registro exitoso");  window.location.href = "../inicio.php" </script>';
}
    }
}
?>