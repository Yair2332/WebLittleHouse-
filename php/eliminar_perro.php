<?php
        include("conexion.php");

        $id=$_GET['id'];
        
        $eliminar_perro="DELETE FROM `perros` WHERE id_perro='$id'";


        $eliminar=mysqli_query($conexion,$eliminar_perro);

        if ($eliminar) {
           echo "<script> alert('Eliminacion Exitosa'); window.location='../html/adopcion.php'</script>";
        }
        
?>