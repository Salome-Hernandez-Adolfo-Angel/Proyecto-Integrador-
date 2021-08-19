<?php
include ('conexion.php');
$con = conectar();

$username=$_POST['username'];
$password=$_POST['pass'];

$sql="select username, pass from login where username = '$username' and pass='$password'";
$query=mysqli_query($con,$sql);

if($row = mysqli_fetch_array($query)){
    echo "<script>alert('Bien');</script>";
    Header("Location:../panelusuario.php");
}
else{
    echo "<script>alert('Mal');</script>";
    Header("Location:../login.php");
}

?>