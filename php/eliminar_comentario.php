<?php
        include("conexion.php");

        $id=$_GET['id'];
        $tipo=$_GET['tipo'];
        $id_coment=$_GET['id_coment'];
        
        $eliminar_comentario="DELETE FROM `comentarios` WHERE ID_usuario1='$id' AND id_comentarios='$id_coment';";


        $eliminar=mysqli_query($conexion,$eliminar_comentario);


        if ($eliminar&&$tipo==1) {
            echo "<script> window.location='../index.php#comentarios'</script>";
        }
        else if ($eliminar&&$tipo==2) {
           echo "<script> window.location='../html/adopcion.php#comentarios'</script>";
        }
        
?>