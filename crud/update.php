<?php
include("conexion.php");
$con=conectar();

$cod=$_POST['codigo_empleado'];
$cargo=$_POST['cargo'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$domicilio=$_POST['domicilio'];
$sueldo=$_POST['sueldo'];

$sql="UPDATE empleados SET cargo='$cargo',apellido_p='$apellido_p',apellido_m='$apellido_m',nombre='$nombre',edad='$edad',domicilio='$domicilio',sueldo='$sueldo' WHERE codigo_empleado='$cod'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location:login.php");
}else{
    die("falló: " . mysqli_connect_error());
}
?>