<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos de email y contraseña están presentes en el formulario
    if (isset($_POST['typeEmailX']) && isset($_POST['typePasswordX'])) {
        
        // Verificar las credenciales (esto es un ejemplo básico, asegúrate de mejorar la seguridad)
        $email = $_POST['typeEmailX'];
        $contrasena = $_POST['typePasswordX'];

        // Conectar a la base de datos y realizar la verificación (reemplaza con tus detalles de conexión)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "tu_base_de_datos";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Consulta para verificar las credenciales (¡mejora esto con consultas preparadas!)
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$contrasena'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            // Inicio de sesión exitoso
            $_SESSION['username'] = $email;

            // Redirigir al usuario a la página de stock
            header("Location: /stock/stock.php");
            exit();
        } else {
            // Credenciales incorrectas, puedes mostrar un mensaje de error o redirigir a otra página
            echo "Credenciales incorrectas";
        }

        mysqli_close($conn);
    } else {
        // No se enviaron los campos necesarios, muestra un mensaje de error o redirige
        echo "Campos de email y contraseña requeridos";
    }
}
?>