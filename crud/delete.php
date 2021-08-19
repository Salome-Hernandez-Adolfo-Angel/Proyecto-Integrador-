<?php 
include("conexion.php");
$con=conectar();

$cod_e=$_GET['id'];

$sql="DELETE FROM empleados WHERE codigo_empleado='$cod_e'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location:login.php");
}
?>