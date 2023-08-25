<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_cliente";

$conexion;
try {
    // Crear una conexión
    $conexion = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        throw new Exception("Error de conexión: " . $conexion->connect_error);
    }

    // Mensaje de conexión exitosa
    //echo "Conexión exitosa a la base de datos.";
} catch (Exception $e) {
    echo "Error de conexión: " . $e->getMessage();
}
