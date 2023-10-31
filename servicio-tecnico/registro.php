<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Aquí deberías realizar la validación de datos y la inserción en la base de datos.
    // Asegúrate de usar consultas preparadas para proteger contra SQL injection.

    // Después del registro exitoso, puedes redirigir al usuario a la página de inicio o mostrar un mensaje de confirmación.
    header("Location: index.php");
}