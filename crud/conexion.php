<?php
function conectar(){
$servername = "localhost";
$database = "tienda";
$username = "root";
$password = "Ajstyles02";

$con = mysqli_connect($servername,$username,$password,$database,3306);
return $con;
}
?>