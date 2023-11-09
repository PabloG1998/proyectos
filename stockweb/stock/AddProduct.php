<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "stock_control_system";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombreProducto = $_POST['nombreProducto'];
    $cantidadProducto = $_POST['cantidadProducto'];
    

    // Insertar datos en la tabla stock
    $query = "INSERT INTO products (product_name, product_quantity) VALUES ('$nombreProducto', $cantidadProducto)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Producto añadido correctamente
        header("Location: /stock/stock.php");
        exit();
    } else {
        // Mensaje de error o manejo de la inserción fallida
        echo "<script>alert('Error al añadir el producto');</script>";
    }
}
?>