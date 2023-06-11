<?php
    include("db.php");
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>EDITAR</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])){

        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
		$cargo=$_POST['cargo'];
		$salario=$_POST['salario'];
		$fecha=$_POST['fecha'];

        $sql="update empleados set Nombre='".$nombre."', Cargo='".$cargo."', Salario='".$salario."',
        FechaContratacion='".$fecha."' where idEmpleado='".$id."'";
        $resultado=mysqli_query($conn,$sql);

        if($resultado){
            echo "<script lenguage='JavaScript'>
                alert('Los datos fueron actualizados');
                location.assign('empleados.php');
                </script>";
        }else{
            echo "<script lenguage='JavaScript'>
                alert('ERROR: Los datos No fueron actualizados');
                location.assign('empleados.php');
                </script>";
        }
        mysqli_close($conn);

    }else{
        $id=$_GET['id'];
        $sql="select * from empleados where idEmpleado='".$id."'";
        $resultado=mysqli_query($conn,$sql);
        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila["Nombre"];
		$cargo=$fila["Cargo"];
		$salario=$fila["Salario"];
		$fecha=$fila["FechaContratacion"];
        mysqli_close($conn);
    ?>
    <h1>Editar empleado</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>Nombre</label>
        <label>Nombre</label>
		<input type="text"	name="nombre" value="=<?php echo $nombre;?>"><br>

        <label>cargo</label>
        <input type="text"	name="cargo" value="=<?php echo $cargo;?>"><br>
        
        <label>salario</label>
        <input type="text"	name="salario" value="=<?php echo $salario;?>"><br>

        <label>fecha</label>
        <input type="date"	name="fecha" value="=<?php echo $fecha;?>"><br>


        <input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" name="enviar" value="ACTUALIZAR">
		<a href='empleados.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
    </form>
    <?php 
    }
    ?>
</body>

</html>