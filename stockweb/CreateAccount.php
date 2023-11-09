<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "stock_control_system";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "<script>alert('Conectado');</script>";
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Stock Web</title>
 </head>
 <body>
  <!-- ... (Tu código HTML sigue aquí) ... -->

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

<div id="CONTENT"></div>
    <!-- Register FORM -->
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Crear Cuenta</h2>

                  <form action="create_user.php" method="POST">

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username" />
                      <label class="form-label" for="form3Example1cg">Nombre de Usuario</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                      <label class="form-label" for="form3Example3cg">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                      <label class="form-label" for="form3Example4cg">Contraseña</label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onclick="alert('Usuario creado con Exito');";>Registrarme!</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Ya tiene cuenta? <a href="index.php" class="fw-bold text-body"><u>Iniciar Sesión</u></a></p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ... (El resto de tu código HTML sigue aquí) ... -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- JS PROPIOS -->
  <script type="text/javascript" src="js/vendor/main_projects.js"></script>
 </body>

 </html>