<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenido al Panel del Cliente</h1>
        <p>Hola, <?php echo $_SESSION['usuario']['nombre']; ?>.</p>

        <!-- Aquí puedes mostrar información adicional del panel del cliente -->

        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <footer class="bg-light text-center p-3 mt-5">
        Derechos de autor © 2023 Servicio Técnico
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>