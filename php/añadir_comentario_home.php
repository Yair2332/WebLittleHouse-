<?php
        include("conexion.php");
        session_start();

        $ID_usuario1=$_POST['usuario'];
        $Comentario_tex=$_POST['comentario'];
        $tipo=$_POST['tipo'];

        
        $agregar_comentario="INSERT INTO `comentarios`(`ID_usuario1`, `Comentario_tex`, `tipo`) VALUES ('$ID_usuario1','$Comentario_tex','$tipo');";


        $enviar=mysqli_query($conexion,$agregar_comentario);

        if ($enviar&&$tipo==1) {
           echo "<script> window.location='../index.php#comentarios'</script>";
        }
        else if($enviar&&$tipo==2){
        echo "<script> window.location='../html/adopcion.php#comentarios'</script>";
        }
?>