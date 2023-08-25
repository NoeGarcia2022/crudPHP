<?php
include_once("../config/conexion.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM tb_cliente 
            WHERE id='$id'";

$query = mysqli_query($conexion, $sql);

if ($query) {
    header("Location:../index.php");
}
