<?php 
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE codigo_empleado='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-md mt-5">
    <form action="update.php" method="POST">

    <input type="hidden" name="codigo_empleado" value="<?php echo $row['codigo_empleado']?>">
    <h1 class="text-success text-center">Actualizar campos</h1>
    <input type="text" class="form-control mb-3" name="cargo" placeholder="Cargo" value="<?php echo $row['cargo'] ?>">
    <input type="text" class="form-control mb-3" name="apellido_p" placeholder="Apellido paterno" value="<?php echo $row['apellido_p'] ?>">
    <input type="text" class="form-control mb-3" name="apellido_m" placeholder="Apellido materno" value="<?php echo $row['apellido_m'] ?>">
    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre(s)" value="<?php echo $row['nombre'] ?>">
    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad'] ?>">
    <input type="text" class="form-control mb-3" name="domicilio" placeholder="Domicilio" value="<?php echo $row['domicilio'] ?>">
    <input type="number" class="form-control mb-3" name="sueldo" placeholder="Sueldo" value="<?php echo $row['sueldo'] ?>">

    <input type="submit" class="btn btn-primary" value="Actualizar">
    
    </form>
    </div>
</body>
</html>