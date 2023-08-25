<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD MYSQLI</title>
</head>

<body>

    <h1 class="bg-warning p-2 text-white text-center">CRUD MYSQLI</h1>


    <div class="container mb-3 mt-3">
        <a href="./Forms/agregarCliente.php" class="btn btn-danger">Agregar cliente</a>
    </div>

    <div class="container mb-3 bg-light p-3 border border-dark rounded">
        <h1>Lista de clientes</h1>
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th sco pe="col">DUI</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Codigo PHP para cargar los datos en mi tabla por medio de Mysqli -->
                    <?php
                    include("./config/conexion.php");

                    $sql = "SELECT * FROM tb_cliente";
                    $query = mysqli_query($conexion, $sql);

                    while ($fila = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="">
                            <td scope="row"><?php echo $fila['id'] ?></td>
                            <td scope="row"><?php echo $fila['dui'] ?></td>
                            <td scope="row"><?php echo $fila['nombre'] ?></td>
                            <td scope="row"><?php echo $fila['apellido'] ?></td>
                            <td scope="row"><?php echo $fila['correo'] ?></td>
                            <td scope="row"><?php echo $fila['telefono'] ?></td>
                            <th>
                                <a href="Forms/editarCliente.php?id=<?php echo $fila['id'] ?>" class="btn btn-outline-success">Editar</a>
                                <a href="CRUD/eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-outline-danger">Eliminar</a>
                            </th>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-- FIN DE CODIGO PHP -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>