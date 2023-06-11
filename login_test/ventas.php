<?php include 'db.php'; 
    $sql="select * from ventas";
    $resultado=mysqli_query($conn,$sql);
    $cliente = "SELECT * FROM clientes";
    $producto = "SELECT * FROM productos";
  ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="stylemain.css" rel="stylesheet" type="text/css">
    <title>Ventas</title>
	</head>
	<body>
 
<!--NAVBAR-->
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
    <div>
  <br></br>
  </div>

  <div class="tablap">
        <table class="table">
          <h3>Ventas</h3>
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Cliente</th>  
            <th scope="col">Productos<th>  
          
          </tr>
        </thead>
        <tbody>
          <?php
          while($filas=mysqli_fetch_assoc($resultado)){
          ?>
          <tr>
            <th scope="row"></th>
            <td><?php echo $filas['idVenta']?></td>
            <td><?php echo $filas['FechaVenta']?></td>
            <td><?php echo $filas['Cantidad']?></td>
            <td><?php echo $filas['Precio']?></td>
            <td><?php echo $filas['idCliente']?></td>
            <td><?php echo $filas['idProducto']?></td>
            <td>
            <a href='addventa.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Agregar</a>
            </td>
          </tr>
        <?php 
          }
        ?>
        </tbody>
      </table>
      <?php 
        mysqli_close($conn);
        ?>
  </div>

	</body>
</html>