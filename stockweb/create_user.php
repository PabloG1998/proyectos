<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "stock_control_system";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Obtener datos del formulario
  $nombreUsuario = $_POST['username'];
  $email = $_POST['email'];
  $contrasena = $_POST['password'];

  // Crear la consulta SQL para la inserción
  $sql = "INSERT INTO users (username, email, password) VALUES ('$nombreUsuario', '$email', '$contrasena')";

  // Ejecutar la consulta
  if (mysqli_query($conn, $sql)) {
    // Muestra SweetAlert
    echo "<script>
            Swal.fire({
              title: 'Registro exitoso',
              text: '¡Tu cuenta ha sido creada!',
              icon: 'success',
              confirmButtonText: 'OK'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = 'index.php';
              }
            });
          </script>";
  } else {
    // Si hay un error, muestra SweetAlert de error
    echo "<script>
            Swal.fire({
              title: 'Error',
              text: 'Hubo un error al crear la cuenta',
              icon: 'error',
              confirmButtonText: 'OK'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = 'index.php';
              }
            });
          </script>";
  }

  // Cerrar la conexión
  header('location: index.php');
  mysqli_close($conn);
?>
