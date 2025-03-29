<?php
        include("conexion.php");
        
        $mail=$_POST['Correo_usu_inicio'];
        $usuario=$_POST['usuario_usu_inicio'];
        $contraseña_usuario=$_POST['contrasenia_usu_inicio'];

        
        $verificar_usuario="SELECT * FROM `usuario` WHERE  Email_usuario='$mail' and Usuario='$usuario' and Contraseña_usuario='$contraseña_usuario';";
        $verificar=mysqli_query($conexion,$verificar_usuario);
        $resultado=mysqli_fetch_array($verificar);



        $filas=mysqli_num_rows($verificar);

        if ($filas>0) {
           session_start();
           $_SESSION['Usuario']=$usuario;
           $_SESSION['id']=$resultado['id_usuario'];
           echo "<script> alert('Inicio Exitoso'); window.location='../index.php'</script>";
        }
        else{
            echo "<script> alert('Datos Invalidos'); window.location='../html/registro.html'</script>";
        }
        
?>