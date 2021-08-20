<?php 
include("conexion.php");
$con = conectar();

$sql = "select*from empleados";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CRUD</title>
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-lg p-4 shadow-lg p-3 mb-5 bg-body" style="margin-top: 5%;">
            <div class="container-sm">
                <h1 class="text-success text-center">Formulario</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="cargo" placeholder="Cargo">
                    <input type="text" class="form-control mb-3" name="apellido_p" placeholder="Apellido paterno">
                    <input type="text" class="form-control mb-3" name="apellido_m" placeholder="Apellido materno">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                    <input type="number" class="form-control mb-3" name="edad" placeholder="Edad">
                    <input type="text" class="form-control mb-3" name="domicilio" placeholder="Domicilio">
                    <input type="number" class="form-control mb-3" name="sueldo" placeholder="Sueldo">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="container-sm mt-5">
                <h1 class="text-warning text-center">Registros</h1>
                <table class="table table-responsive">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Cargo</th>
                            <th>Ap paterno</th>
                            <th>Ap materno</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Domicilio</th>
                            <th>Sueldo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['codigo_empleado'] ?></th>
                                <th><?php echo $row['cargo'] ?></th>
                                <th><?php echo $row['apellido_p'] ?></th>
                                <th><?php echo $row['apellido_m'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['edad'] ?></th>
                                <th><?php echo $row['domicilio'] ?></th>
                                <th><?php echo $row['sueldo'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['codigo_empleado']?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['codigo_empleado']?>" class="btn btn-danger">Borrar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
        </body>

</html>