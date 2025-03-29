<?php
        include("conexion.php");
        session_start();



        $id=$_SESSION['id'];
        $Nombre=$_POST['Nombre'];
        $Apellido=$_POST['Apellido'];
        $Correo=$_POST['Correo'];
        $Domicilio_de_usuario=$_POST['Domicilio_de_usuario'];
        $Calle_de_ubicacion_pedida=$_POST['Calle_de_ubicacion_pedida'];
        $Numero_de_calle=$_POST['Numero_de_calle'];
        $Localidad_de_calle_pedida=$_POST['Localidad_de_calle_pedida'];
        $Numero_de_contacto=$_POST['Numero_de_contacto'];

        
        $agregar_ubicacion="INSERT INTO `ubicaciones_casa`( `ID_usuario4`, `Nombre`, `Apellido`, `Correo`, `Domicilio_de_usuario`, `Calle_de_ubicacion_pedida`, `Numero_de_calle`, `Localidad_de_calle_pedida`, `Numero_de_contacto`) VALUES ('$id', '$Nombre','$Apellido','$Correo','$Domicilio_de_usuario','$Calle_de_ubicacion_pedida','$Numero_de_calle','$Localidad_de_calle_pedida','$Numero_de_contacto');";


        $enviar=mysqli_query($conexion,$agregar_ubicacion);

        if ($enviar) {
           echo "<script> alert('Registro Exitoso, Inicia Session'); window.location='../html/ubicaciones.php'</script>";
        }
        
?>