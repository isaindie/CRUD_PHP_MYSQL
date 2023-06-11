<?php
    include("db.php");
	$cliente = "SELECT * FROM clientes";
    $producto = "SELECT * FROM productos";
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>Agregar venta</title>
	</head>
	<body>
	<?php	
		if(isset($_POST['enviar'])){
			$fecha=$_POST['fecha'];
			$cantidad=$_POST['cantidad'];
			$precio=$_POST['precio'];
			$cliente=$_POST['cliente'];
			$producto=$_POST['producto'];

			$sql="insert into ventas(fechaVenta, cantidad, precio, idProducto, idCliente)
			values('".$fecha."','".$cantidad."','".$precio."','".$cliente."', '".$producto."')";
			$resultado=mysqli_query($conn,$sql);

			if($resultado){
				echo "<script lenguage='JavaScript'>
						alert('Los datos fueron agregados');
						location.assign('ventas.php');
						</script>";
				
			}else{
				echo "<script lenguage='JavaScript'>
						alert('ERROR: Los datos No fueron guardados');
						location.assign('ventas.php');
						</script>";		
			}
			mysqli_close($conn);

		}else{

		
	?>
	<h1>Agregar Venta</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Fecha</label>
		<input type="date"	name="fecha"><br>
		<label>Cantidad</label>
		<input type="text"	name="cantidad"><br>
		<label>Precio</label>
		<input type="text" name="precio"><br>
		<!--<label>cliente</label>
		<input type="text"	name="correo"><br>-->
		<label>cliente</label>
		<div class="form-group">
                            <span class="col-md-1 col-md-offset-2 glyphicon glyphicon-inbox text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
								<select  name="cliente">
									<?php $resultado = mysqli_query($conn, $cliente);
 									while($row = mysqli_fetch_assoc($resultado)) { ?>	
									<option value="<?php echo $row["idCliente"]; ?>"> <?php echo $row["Nombre"]; ?> </option>
									<?php } mysqli_free_result($resultado); ?>
								</select>
                            </div>
                        </div>

		<label>producto</label>
		<!--<input type="text"	name="correo"><br>-->
		<div class="form-group">
                            <span class="col-md-1 col-md-offset-2 glyphicon glyphicon-inbox text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
								<select  name="producto">
									<?php $resultado = mysqli_query($conn, $producto);
 									while($row = mysqli_fetch_assoc($resultado)) { ?>	
									<option value="<?php echo $row["idProducto"]; ?>"> <?php echo $row["Nombre"]; ?> </option>
									<?php } mysqli_free_result($resultado); ?>
								</select>
                            </div>
                        </div>

		
		<input type="submit" name="enviar" value="ENVIAR">
		<a href='ventas.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
	</form>
		<?php
		}
		?>
	</body>
</html>