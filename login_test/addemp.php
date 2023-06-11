<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>Agregar</title>
	</head>
	<body>
	<?php	
		if(isset($_POST['enviar'])){
			$nombre=$_POST['nombre'];
			$cargo=$_POST['cargo'];
			$salario=$_POST['salario'];
			$fecha=$_POST['fecha'];

			include("db.php");
			$sql="insert into empleados(nombre, cargo, salario, fechaContratacion)
			values('".$nombre."','".$cargo."','".$salario."','".$fecha."')";
			$resultado=mysqli_query($conn,$sql);

			if($resultado){
				echo "<script lenguage='JavaScript'>
						alert('Los datos fueron agregados');
						location.assign('empleados.php');
						</script>";
				
			}else{
				echo "<script lenguage='JavaScript'>
						alert('ERROR: Los datos No fueron guardados');
						location.assign('empleados.php');
						</script>";		
			}
			mysqli_close($conn);

		}else{

		
	?>
	<h1>Agregar Empleado</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Nombre</label>
		<input type="text"	name="nombre"><br>
		<label>Cargo</label>
		<input type="text"	name="cargo"><br>
		<label>Salario</label>
		<input type="text" name="salario"><br>
		<label>Fecha Contratacion</label>
		<input type="date"	name="fecha"><br>
		<input type="submit" name="enviar" value="ENVIAR">
		<a href='empleados.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
	</form>
		<?php
		}
		?>
	</body>
</html>