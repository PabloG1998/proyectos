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
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- JS PROPIOS -->
	<script type="text/javascript" src="js/vendor/main_projects.js"></script>
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

<!-- LOGIN FORM -->

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Inicio de Sesion</h2>
              <p class="text-white-50 mb-5">Ingrese su Email y Contraseña</p>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-outline form-white mb-4">
                  <input type="email" name="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="password" name="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Contraseña</label>
                </div>
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Recuperar contraseña</a></p>
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar Sesión</button>
              </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </div>
            <div>
              <p class="mb-0">¿No tiene cuenta? <a href="CreateAccount.php" class="text-white-50 fw-bold">Registrarme</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
 
 </body>
 </html>