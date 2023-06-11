<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>Agregar Cliente</title>
	</head>
	<body>
	<?php	
		if(isset($_POST['enviar'])){
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];

			include("db.php");
			$sql="insert into proveedores(nombre, direccion, telefono, correoelectronico)
			values('".$nombre."','".$direccion."','".$telefono."','".$correo."')";
			$resultado=mysqli_query($conn,$sql);

			if($resultado){
				echo "<script lenguage='JavaScript'>
						alert('Los datos fueron agregados');
						location.assign('provedores.php');
						</script>";
				
			}else{
				echo "<script lenguage='JavaScript'>
						alert('ERROR: Los datos No fueron guardados');
						location.assign('provedores.php');
						</script>";		
			}
			mysqli_close($conn);

		}else{

		
	?>
	<h1>Agregar Cliente</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Nombre</label>
		<input type="text"	name="nombre"><br>
		<label>Direccion</label>
		<input type="text"	name="direccion"><br>
		<label>telefono</label>
		<input type="text" name="telefono"><br>
		<label>Correo</label>
		<input type="text"	name="correo"><br>
		<input type="submit" name="enviar" value="ENVIAR">
		<a href='provedores.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
	</form>
		<?php
		}
		?>
	</body>
</html>