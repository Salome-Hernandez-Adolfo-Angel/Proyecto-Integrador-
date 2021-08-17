<?php 
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM login WHERE e_mail='$id'";
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
    <link rel="stylesheet" href="../proyecto/Css-bootstrap/Bootstrap.css">
    <script src="../proyecto/Js-bootstrap/Js-bootstrap.js"></script>
</head>
<body>
    <div class="container-md mt-5">
    <form action="update.php" method="POST">

    <input type="hidden" name="e_mail" value="<?php echo $row['e_mail']?>">
    <h1 class="text-success text-center">Actualizar campos</h1>
    <input type="text" class="form-control mb-3" name="e_mail" placeholder="E_mail" value="<?php echo $row['e_mail'] ?>">
    <input type="text" class="form-control mb-3" name="username" placeholder="Nombre de usuario" value="<?php echo $row['username'] ?>">
    <input type="text" class="form-control mb-3" name="AP" placeholder="Apellido paterno" value="<?php echo $row['AP'] ?>">
    <input type="text" class="form-control mb-3" name="AM" placeholder="Apellido materno" value="<?php echo $row['AM'] ?>">
    <input type="text" class="form-control mb-3" name="NOM" placeholder="Nombre(s)" value="<?php echo $row['NOM'] ?>">
    <input type="text" class="form-control mb-3" name="pass" placeholder="Password" value="<?php echo $row['pass'] ?>">
    <input type="text" class="form-control mb-3" name="pass_c" placeholder="Confirmación de password" value="<?php echo $row['pass_c'] ?>">

    <input type="submit" class="btn btn-primary" value="Actualizar">
    
    </form>
    </div>
</body>
</html>