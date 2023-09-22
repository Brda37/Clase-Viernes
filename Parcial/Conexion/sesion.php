<?php
session_start();

include_once "conexion.php";

$Documento_sesion = $_POST['documento'];
$Contrasena_sesion = $_POST['contrasena'];

$validar_inicio = "SELECT count(*) as contar FROM Parcial WHERE documento = '$Documento_sesion' and contrasena = '$Contrasena_sesion'";

$resultado = mysqli_query($conectar, $validar_inicio);

$array = mysqli_fetch_array($resultado);

if($array['contar']>0){
    header("location: ../menu.php");
    $_SESSION['documento'] = $Documento_sesion;
}else{
    echo '<script> alert("Contraseña incorrecta"); window.location.href = "../inicio.php" </script>';
    
}
?>
