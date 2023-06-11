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
		$precio=$_POST['precio'];
		$descripcion=$_POST['descripcion'];
		$categoria=$_POST['categoria'];

        $sql="update productos set Nombre='".$nombre."', Precio='".$precio."', Descripcion='".$descripcion."',
        Categoria='".$categoria."' where idProducto='".$id."'";
        $resultado=mysqli_query($conn,$sql);

        if($resultado){
            echo "<script lenguage='JavaScript'>
                alert('Los datos fueron actualizados');
                location.assign('productos.php');
                </script>";
        }else{
            echo "<script lenguage='JavaScript'>
                alert('ERROR: Los datos No fueron actualizados');
                location.assign('productos.php');
                </script>";
        }
        mysqli_close($conn);

    }else{
        $id=$_GET['id'];
        $sql="select * from productos where idProducto='".$id."'";
        $resultado=mysqli_query($conn,$sql);
        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila["Nombre"];
		$precio=$fila["Precio"];
		$descripcion=$fila["Descripcion"];
		$categoria=$fila["Categoria"];
        mysqli_close($conn);
    ?>
    <h1>Editar productos</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>Nombre</label>
        <label>Nombre</label>
		<input type="text"	name="nombre" value="=<?php echo $nombre;?>"><br>

        <label>precio</label>
        <input type="text"	name="precio" value="=<?php echo $precio;?>"><br>
        
        <label>descripcion</label>
        <input type="text"	name="descripcion" value="=<?php echo $descripcion;?>"><br>

        <label>categoria</label>
        <input type="text"	name="categoria" value="=<?php echo $categoria;?>"><br>


        <input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" name="enviar" value="ACTUALIZAR">
		<a href='productos.php' class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
    </form>
    <?php 
    }
    ?>
</body>

</html>