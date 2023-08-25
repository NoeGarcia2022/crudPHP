<!-- CODIGO PHP PARA REGISTRAR UN CLIENTE -->

<?php
include_once("../config/conexion.php");

$dui = $_POST['dui'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO tb_cliente (dui,nombre,apellido,correo,telefono) 
            VALUE ('$dui','$nombre','$apellido','$correo','$telefono')";

$query = mysqli_query($conexion, $sql);

if ($query === TRUE) {
    header("Location:../index.php");
}

// FIN DE CODIGO PHP
