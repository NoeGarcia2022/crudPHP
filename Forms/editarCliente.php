<?php
include_once("../config/conexion.php");
$id = $_REQUEST['id'];

$sql = "SELECT * FROM tb_cliente WHERE id='$id'";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<body>
    <h1 class="bg-warning p-2 text-white text-center">EDITAR CLIENTE</h1>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">EDITAR CLIENTE</h5>
                        <hr>
                        <!-- Action es la Ruta DE FORM para poder editar registros -->
                        <form action="../CRUD/editar.php" method="post">
                            <input type="hidden" value="<?php echo $fila['id'] ?>" name="id" id="id">
                            <div class="mb-1">
                                <label for="dui" class="form-label">Dui</label>
                                <input type="text" class="form-control" value="<?php echo $fila['dui'] ?>" id="dui" name="dui" required placeholder="Ingrese su numero de DUI">
                            </div>
                            <div class="mb-1">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" value="<?php echo $fila['nombre'] ?>" id="nombre" name="nombre" required placeholder="Ingrese su nombre">
                            </div>
                            <div class="mb-1">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" value="<?php echo $fila['apellido'] ?>" id="apellido" name="apellido" required placeholder="Ingrese su apellido">
                            </div>
                            <div class="mb-1">
                                <label for="correo" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" value="<?php echo $fila['correo'] ?>" id="correo" name="correo" required placeholder="Ingrese su correo electronico">
                            </div>
                            <div class="mb-1">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" value="<?php echo $fila['telefono'] ?>" id="telefono" name="telefono" required placeholder="Ingrese su numero de telefono">
                            </div>
                            <div class="mb-1 mt-3">
                                <a href="../index.php" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/bootstrap.min.js"></script>

</body>

</html>