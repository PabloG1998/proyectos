<?php 

//Crea la conexion a la base de datos Stock
$servername = "localhost";
$username = "root";
$password = "";
$database = "stock";

$connection = mysqli_connect($servername, $username, $password, $database);

if(!$connection) 
{
	die("Connection failed: " . $connection->connect_error);
}else 
{
	echo '<script>alert("Conexion exitosa");</script>';
}

//Consulta de prueba
