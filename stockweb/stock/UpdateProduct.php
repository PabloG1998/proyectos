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
    $nuevaCantidad = $_POST['cantidadProducto'];

    // Actualizar la cantidad del producto en la tabla stock
    $query = "UPDATE products SET product_quantity = $nuevaCantidad WHERE product_name = '$nombreProducto'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Cantidad actualizada correctamente
        header("Location: /proyectosweb/project/00/stockweb/stock/stock.php?update=succesful");

        exit();
         echo "<script>alert('Producto actualizado con Exito!')</script";
    } else {
        // Mensaje de error o manejo de la actualización fallida
        echo "<script>alert('Error al actualizar la cantidad del producto');</script>";
    }
}
?>
