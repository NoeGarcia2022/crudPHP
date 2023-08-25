<?php
include_once("../config/conexion.php");

$id = $_POST['id'];
$dui = $_POST['dui'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE tb_cliente 
            SET dui='$dui', 
                nombre='$nombre', 
                apellido='$apellido', 
                correo='$correo',
                telefono='$telefono' WHERE id='$id'";

$query = mysqli_query($conexion, $sql);

if ($query === TRUE) {
    header("Location:../index.php");
}
