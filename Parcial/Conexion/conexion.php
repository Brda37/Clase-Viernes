<?php
$LOCALHOST = "localhost";
$USERNAME = "root";
$BDPASWORD = "";
$BDNAME = "Parcial";

$conectar = mysqli_connect($LOCALHOST , $USERNAME, $BDPASWORD, $BDNAME);

if (!$conectar) {
    die("Error al conectar la base de datos: " . mysqli_connect_error());
}
?>