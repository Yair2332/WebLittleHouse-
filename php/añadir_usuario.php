<?php
        include("conexion.php");

        $nombre=$_POST['nombre_usuario'];
        $apellido=$_POST['apellido_usuario'];
        $mail=$_POST['correo_usuario'];
        $usuario=$_POST['usuario'];
        $contraseña_usuario=$_POST['contrasenia'];
        $contacto=$_POST['contacto'];

        
        $agregar_usuario="INSERT INTO `usuario`(`Nombre_usuario`, `Apellido_usuario`, `Email_usuario`, `Usuario`, `Contraseña_usuario`, `Contacto_usuario`) VALUES ('$nombre','$apellido','$mail','$usuario','$contraseña_usuario','$contacto');";


        $enviar=mysqli_query($conexion,$agregar_usuario);

        if ($enviar) {
           echo "<script> alert('Registro Exitoso, Inicia Session'); window.location='../html/iniciosession.html'</script>";
        }
        
?>