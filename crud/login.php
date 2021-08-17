<?php 
include("conexion.php");
$con = conectar();

$sql = "select*from login";
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
    <script src="../proyecto/Js-bootstrap/Js-bootstrap.js"></script>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Formulario</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="e_mail" placeholder="E-mail">
                    <input type="text" class="form-control mb-3" name="username" placeholder="Username">
                    <input type="text" class="form-control mb-3" name="AP" placeholder="Apellido paterno">
                    <input type="text" class="form-control mb-3" name="AM" placeholder="Apellido materno">
                    <input type="text" class="form-control mb-3" name="NOM" placeholder="Nombres">
                    <input type="password" class="form-control mb-3" name="pass" placeholder="Password">
                    <input type="password" class="form-control mb-3" name="pass_c" placeholder="Password">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-responsive">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>E_mail</th>
                            <th>User</th>
                            <th>Ap paterno</th>
                            <th>Ap materno</th>
                            <th>Nombre</th>
                            <th>Password</th>
                            <th>Confirm pass</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['e_mail'] ?></th>
                                <th><?php echo $row['username'] ?></th>
                                <th><?php echo $row['AP'] ?></th>
                                <th><?php echo $row['AM'] ?></th>
                                <th><?php echo $row['NOM'] ?></th>
                                <th><?php echo $row['pass'] ?></th>
                                <th><?php echo $row['pass_c'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['e_mail']?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['e_mail']?>" class="btn btn-danger">Borrar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>