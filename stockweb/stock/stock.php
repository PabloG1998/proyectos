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
    // Verificar las credenciales del usuario (debes adaptar esto a tus necesidades)
    $email = $_POST['typeEmailX'];
    $password = $_POST['typePasswordX'];

    // Lógica para verificar las credenciales
    // (deberías utilizar funciones seguras para manejar las contraseñas, como password_hash)
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // El usuario ha iniciado sesión correctamente
        $_SESSION['username'] = $email; // Puedes utilizar el email como nombre de usuario

        // Redirigir al usuario a la página de stock
        header("Location: /proyectosweb/project/00/stockweb/stock/stock.php");
        exit();
    } else {
        // Mensaje de error o manejo de credenciales inválidas
        echo "<script>alert('Credenciales inválidas');</script>";
    }
}
?>

<!-- Web creada parcialmente con Inteligencia Artificial (openAI.com) -->


 <!DOCTYPE html>
 <html>
 <head>
  <script>
    // Verificar si la actualización fue exitosa
    const params = new URLSearchParams(window.location.search);
    const actualizacionExitosa = params.get('actualizacion');

    if (actualizacionExitosa === 'exitosa') {
        // Mostrar una alerta
        alert('Producto actualizado exitosamente.');
    }
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Stock Web</title>
  </head>
 <body>


    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proyectos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="project/00/stockweb">Stock Web</a></li>
            <li><a class="dropdown-item" href="project/00/bibliaonline">Biblia Online</a></li>
             <li><a class="dropdown-item" href="project/all">Mas Proyectos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tools">Herramientas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="CONTENT">

  <section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Añadir Producto</h2>
                        <form method="post" action="AddProduct.php">
                            <div class="mb-3">
                                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidadProducto" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantidadProducto" name="cantidadProducto" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Añadir Producto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



     <!-- Sección para mostrar productos en una tabla -->
  <section class="mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Lista de Productos</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Consulta para obtener la lista de productos desde la base de datos
                  $query = "SELECT * FROM products";
                  $result = mysqli_query($conn, $query);

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['product_name']}</td>";
                    echo "<td>{$row['product_quantity']}</td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Actualizar Cantidad de Producto</h2>
                        <form method="post" action="UpdateProduct.php">
                   <div class="mb-3">
                      <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                      <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" required>
                  </div>
                  <div class="mb-3">
                      <label for="cantidadProducto" class="form-label">Nueva Cantidad</label>
                      <input type="number" class="form-control" id="cantidadProducto" name="cantidadProducto" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Actualizar Cantidad</button>
              </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

  <br>
<br><br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            
          </h6>
          <p>
            <a href="https://github.com/PabloG1998?tab=repositories" target="__newtab" class="text-reset">GitHub</a>
          </p>
          <p>
            <a href="./doc" class="text-reset" target="__newtab">Documentacion</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
         <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        
      -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i>Int. Arnoldi 401, Edificio 10, Buenos Aires, Argentina</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            pablogarciag21@gmail.com
          </p>
          <!--<p><i class="fas fa-phone me-3"></i> + 54 9 11 2716 0753</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 
    <a class="text-reset fw-bold" href="#">Pablo Nicolás Garcia</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  <script type="text/javascript" src="js/vendor/jquery-3.7.1-dev.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  <!-- JS PROPIOS -->
  <script type="text/javascript" src="js/vendor/main_projects.js"></script>
 </body>
 </html>