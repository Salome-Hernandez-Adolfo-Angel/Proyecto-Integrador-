<?php
include("conexion.php");
$con=conectar();

$e_mail=$_POST['e_mail'];
$username=$_POST['username'];
$AP=$_POST['AP'];
$AM=$_POST['AM'];
$NOM=$_POST['NOM'];
$pass=$_POST['pass'];
$pass_c=$_POST['pass_c'];

$sql="UPDATE login SET e_mail='$e_mail',username='$username',AP='$AP',AM='$AM',NOM='$NOM',pass='$pass',pass_c='$pass_c' WHERE e_mail='$e_mail'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location:login.php");
}else{
    die("falló: " . mysqli_connect_error());
}
?>