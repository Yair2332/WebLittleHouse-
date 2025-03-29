<?php
        include("conexion.php");
        
        $admin=$_POST['admin'];
        $Clave_admin=$_POST['Clave_admin'];
        $contraseña_admin=$_POST['Contraseña_ad'];
        $mail=$_POST['email_ad'];

        
        $verificar_admin="SELECT * FROM `admin` WHERE  Clave_admin='$Clave_admin' AND Contraseña_ad='$contraseña_admin' AND email_ad='$mail';";
        $verificar_si_admins=mysqli_query($conexion,$verificar_admin);
        $fila=mysqli_num_rows($verificar_si_admins);

        if ($fila>0) {
           session_start();
           $_SESSION['Usuario']=$admin;
           $_SESSION['id']="admin";
           echo "<script> alert('Inicio Exitoso'); window.location='../index.php'</script>";
        }
        else{
            echo "<script> alert('Datos Invalidos'); window.location='../html/registro.html'</script>";
        }
        
?>