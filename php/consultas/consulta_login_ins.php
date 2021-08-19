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

$sql="INSERT INTO login VALUES('$e_mail','$username','$AP','$AM','$NOM','$pass','$pass_c')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:../login.php");
}else{
    echo "<script>alert('Algún dato erroneo');</script>";
}
?>