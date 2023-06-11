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
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];

        $sql="update clientes set Nombre='".$nombre."', Direccion='".$direccion."', Telefono='".$telefono."',
        CorreoElectronico='".$correo."' where idCliente='".$id."'";
        $resultado=mysqli_query($conn,$sql);

        if($resultado){
            echo "<script lenguage='JavaScript'>
                alert('Los datos fueron actualizados');
                location.assign('clientes.php');
                </script>";
        }else{
            echo "<script lenguage='JavaScript'>
                alert('ERROR: Los datos No fueron actualizados');
                location.assign('clientes.php');
                </script>";
        }
        mysqli_close($conn);

    }else{
        $id=$_GET['id'];
        $sql="select * from clientes where idCliente='".$id."'";
        $resultado=mysqli_query($conn,$sql);
        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila["Nombre"];
		$precio=$fila["Direccion"];
		$descripcion=$fila["Telefono"];
		$categoria=$fila["CorreoElectronico"];
        mysqli_close($conn);
    ?>
    <h1>Editar clientes</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>Nombre</label>
        <label>Nombre</label>
		<input type="text"	name="nombre" value="=<?php echo $nombre;?>"><br>

        <label>Direccion</label>
        <input type="text"	name="direccion" value="=<?php echo $precio;?>"><br>
        
        <label>telefono</label>
        <input type="text"	name="telefono" value="=<?php echo $descripcion;?>"><br>

        <label>correo</label>
        <input type="text"	name="correo" value="=<?php echo $categoria;?>"><br>


        <input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" name="enviar" value="ACTUALIZAR">
		<a href='clientes.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
    </form>
    <?php 
    }
    ?>
</body>

</html>