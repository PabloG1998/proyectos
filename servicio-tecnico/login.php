<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos del formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Aquí deberías realizar la validación de datos y la comprobación en la base de datos.
    // Asegúrate de usar consultas preparadas para proteger contra SQL injection.

    // Si la autenticación es exitosa, establece una sesión y redirige al panel del cliente.
    if (/* validación y comprobación exitosas */) {
        session_start();
        $_SESSION['usuario'] = $usuarioInfo; // Debes obtener la información del usuario desde la base de datos.
        header("Location: panel.php");
    } else {
        // En caso de autenticación fallida, puedes mostrar un mensaje de error.
        // También puedes redirigir de nuevo a la página de inicio de sesión.
        // Por ejemplo: header("Location: login.php?error=1");
    }
}