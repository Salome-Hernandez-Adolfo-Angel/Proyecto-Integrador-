<?php 
include("conexion.php");
$con=conectar();

$cargo=$_POST['cargo'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$domicilio=$_POST['domicilio'];
$sueldo=$_POST['sueldo'];

$sql="INSERT INTO empleados (cargo,apellido_p,apellido_m,nombre,edad,domicilio,sueldo) VALUES('$cargo','$apellido_p','$apellido_m','$nombre','$edad','$domicilio','$sueldo')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:login.php");
}else{
    echo "<script>alert('El Id ya se encuentra registrado, intente uno nuevo');</script>";
}
?>