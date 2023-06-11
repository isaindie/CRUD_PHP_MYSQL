<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>Agregar</title>
	</head>
	<body>
	<?php	
		if(isset($_POST['enviar'])){
			$nombre=$_POST['nombre'];
			$precio=$_POST['precio'];
			$descripcion=$_POST['descripcion'];
			$categoria=$_POST['categoria'];

			include("db.php");
			$sql="insert into productos(nombre, precio, descripcion, categoria)
			values('".$nombre."','".$precio."','".$descripcion."','".$categoria."')";
			$resultado=mysqli_query($conn,$sql);

			if($resultado){
				echo "<script lenguage='JavaScript'>
						alert('Los datos fueron agregados');
						location.assign('productos.php');
						</script>";
				
			}else{
				echo "<script lenguage='JavaScript'>
						alert('ERROR: Los datos No fueron guardados');
						location.assign('productos.php');
						</script>";		
			}
			mysqli_close($conn);

		}else{

		
	?>
	<h1>Agregar Producto</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Nombre</label>
		<input type="text"	name="nombre"><br>
		<label>Descripcion</label>
		<input type="text"	name="descripcion"><br>
		<label>Precio</label>
		<input type="text" name="precio"><br>
		<label>Categoria</label>
		<input type="text"	name="categoria"><br>
		<input type="submit" name="enviar" value="ENVIAR">
		<a href='productos.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
	</form>
		<?php
		}
		?>
	</body>
</html>