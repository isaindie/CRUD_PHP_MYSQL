<?php
    $id=$_GET['id'];
    include("db.php");

    $sql="delete from productos where idProducto='".$id."'";
    $resultado=mysqli_query($conn,$sql);
    
    if($resultado){
        echo "<script lenguage='JavaScript'>
            alert('Los datos fueron eliminados');
            location.assign('productos.php');
            </script>";
    }else{
        echo "<script lenguage='JavaScript'>
            alert('ERROR: Los datos No fueron eliminados');
            location.assign('productos.php');
            </script>";
    }
?>