<?php
    $id=$_GET['id'];
    include("db.php");

    $sql="delete from empleados where idEmpleado='".$id."'";
    $resultado=mysqli_query($conn,$sql);
    
    if($resultado){
        echo "<script lenguage='JavaScript'>
            alert('Los datos fueron eliminados');
            location.assign('empleados.php');
            </script>";
    }else{
        echo "<script lenguage='JavaScript'>
            alert('ERROR: Los datos No fueron eliminados');
            location.assign('empleados.php');
            </script>";
    }
?>