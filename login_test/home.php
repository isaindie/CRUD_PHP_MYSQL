<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!--PAGE-->  
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="stylemain.css" rel="stylesheet" type="text/css">
	</head>

	<body>
    <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ventas.php">Ventas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="empleados.php">Empleados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="provedores.php">Proveedores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar Sesion</a>
                  </li>
                </ul>
              </div>
            </div>
    </nav>
    <section>

    </section>
      <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/ITO.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/RE.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/TOTK.jpg" class="d-block w-100" alt="...">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
      </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
      </button>
</div>

    <footer>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-2 d-none d-lg-block">
      <span>Contactanos atraves de nuetras redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f">facebook</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter">twitter</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google">google</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram">instagram</i>
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
            <i class="fas fa-gem me-3"></i>GEEKCENTER
          </h6>
          <p>
            Aqui encontraras variedad de productos de colecion como Comics, Mangas, Videjuegos y Figuras de Coleccion
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> YURIRIA, GTO 98542, MX</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Geekcenter@GCenter.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 52 875 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 52 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </footer>

  
	</body>
</html>