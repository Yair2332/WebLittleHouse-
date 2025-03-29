<?php
        include("conexion.php");
        $nombre_perro=$_POST['nom_perro'];
        $descripcion_perro=$_POST['descripcion_agregar'];
        $img='';

        $foto_perro=$_FILES['foto'];
        $ruta_primaria= $foto_perro['tmp_name'];
        $nombre=$foto_perro['name'];
        $carpeta="../fotos_perros/";

        $src= $carpeta.$nombre;
        move_uploaded_file($ruta_primaria, $src);
        $img="../fotos_perros/".$nombre;

        $consulta="INSERT INTO `perros`(`Nombre`, `Descricion_G`, `Foto`) VALUES ('$nombre_perro','$descripcion_perro','$img')";

        $resultado=mysqli_query($conexion,$consulta);

        
        if ($resultado) {
            echo "<script> alert('Registro Exitoso'); window.location='../html/adopcion.php'</script>";
         }
?>