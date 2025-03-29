<?php
        include("conexion.php");
        session_start();

        $id=$_SESSION['id'];
        $usu=$_SESSION['Usuario'];
        $usuario=$_POST['Usuario'];
        $Nombre=$_POST['Producto'];
        $precio=$_POST['precio_produc'];
        $direccion=$_POST['direccion'];
        $tel=$_POST['tel'];

        if ($usu==$usuario) {
            $agregar_producto= "INSERT INTO `tienda`(`precio_produc`, `cantidad_produc`, `producto`, `ID_usuario2`, `direccion`, `tel`) VALUES ('$precio','1','$Nombre','$id', '$direccion','$tel')";

            $enviar=mysqli_query($conexion,$agregar_producto);

            if ($enviar) {
           echo "<script> alert('Pedido exitoso'); window.location='../html/tienda.php'</script>";
            }
        }
        else{
            echo "<script> alert('Para realizar pedidos es necesario iniciar sesion'); window.location='../html/iniciosession.html'</script>";
        }

        

        
?>