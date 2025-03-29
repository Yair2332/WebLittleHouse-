<?php
        include("conexion.php");

        $nom=$_POST['nombre'];
        $edad=$_POST['edad'];
        $dni=$_POST['dni'];
        $tele=$_POST['telefono'];
        $mail=$_POST['mail'];
        $face=$_POST['facebook'];
        $insta=$_POST['instagram'];
        $dire=$_POST['direccion'];
        $con=$_POST['conocernos'];
        $vivi=$_POST['viviendas'];
        $ani=$_POST['animales'];
        $n_a=$_POST['nombre_adoptar'];
        $razon=$_POST['razon'];
        $alter=$_POST['alternativa'];


        
        $agregar_formulario="INSERT INTO `formulario`(`Conocernos`, `Viviendas`, `Animales`, `Nombre_adoptar`, `Razon`, `Alternativa`, `Nom_apellido1`, `Edad1_form`, `DNI_form`, `Telefono_form1`, `Correo_form1`, `Facebook_form1`, `Instagram_form1`, `Dirrecion_form1`) VALUES ('$con','$vivi','$ani','$n_a','$razon','$alter','$nom','$edad','$dni','$tele','$mail','$face','$insta','$dire');";


        $enviar=mysqli_query($conexion,$agregar_formulario);

        if ($enviar) {
           echo "<script> alert('Registro Exitoso'); window.location='../html/adopcion.php'</script>";
        }
        
?>