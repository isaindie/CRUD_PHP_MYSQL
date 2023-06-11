<?php
    $id=$_GET['id'];
    include("db.php");

    $sql="delete from proveedores where ID_Proveedor='".$id."'";
    $resultado=mysqli_query($conn,$sql);
    
    if($resultado){
        echo "<script lenguage='JavaScript'>
            alert('Los datos fueron eliminados');
            location.assign('provedores.php');
            </script>";
    }else{
        echo "<script lenguage='JavaScript'>
            alert('ERROR: Los datos No fueron eliminados');
            location.assign('provedores.php');
            </script>";
    }
?>