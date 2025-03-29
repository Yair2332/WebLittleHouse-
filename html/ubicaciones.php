<?php
    include("../php/conexion.php");
    session_start();
    error_reporting(0);
    $necesario=$_SESSION['Usuario'];


    if ($necesario==null||$necesario=="") {
        echo "<script> alert('Inicia Session para ver esta pagina'); window.location='../index.php'</script>";
    };
        
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LittleHouse - Ubicacion</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../css/ubicaciones.css">
    <link rel="stylesheet" href="../css/corriendo.css">
    <link rel="shortcut icon" href="../img/logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <img src="../img/banner/logo.png" alt="">
        <nav>

            
            <label for="hamburguesa"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" name="hamburguesa" id="hamburguesa" checked>
            
            <ul id="navgrande">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../html/adopcion.php">Adopcion</a></li>
                <li><a href="../html/sobre_nosotros.html">Informacion</a></li>
                <li><a href="../html/ubicaciones.php">Ubicacion</a></li>
                <li><a href="../html/construccion.html">Construccion</a></li>
                <li><a href="../html/tienda.php">Ayudanos</a></li>
                
                
            </ul>
            
        </nav>
    </header>



    <article id="banner_ubicaciones" class="estilos_info info">
        <div class="content">
            <div class="informacion">
                <h3>Ubicacion<br>Little House</h3>
                <p>Contará con un mapa para que 
                    puedan ingresar localidades en las 
                    que se encuentren animales en 
                    situación de calle </p>
                <button>Empezar</button>
            </div>
            <div class="img_dec">
                <img class="img_decoracion" src="../img/Ubicacion/celular.gif" alt="">
            </div>
        </div>
    </article>


    <article id="ubicaciones_agregar" class="estilos_info info">
        <div class="content">
            <div class="img_dec">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13124.376984108845!2d-58.571991053907645!3d-34.67757077064171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc62f15b25517%3A0xee3484353498e798!2sLa%20Matanza%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1691681040897!5m2!1ses!2sar" width="90%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="informacion">
                <form action="../php/agregar_ubicacion.php" id="agregar_ubicacion" method="post">
                    <input type="text" name="Nombre" id="Nombre" placeholder="Nombre" require>
                    <input type="text" name="Apellido" id="Apellido" placeholder="Apellido" require>
                    <input type="email" name="Correo" id="Correo" placeholder="Correo" require>
                    <input type="text" name="Domicilio_de_usuario" id="Domicilio_de_usuario" placeholder="Domicilio de usuario" require>
                    <input type="text" name="Calle_de_ubicacion_pedida" id="Calle_de_ubicacion_pedida" placeholder="Calle de ubicacion pedida" require>
                    <input type="number" name="Numero_de_calle" id="Numero_de_calle" placeholder="Numero de calle" require>
                    <input type="text" name="Localidad_de_calle_pedida" id="Localidad_de_calle_pedida" placeholder="Localidad de calle pedida" require>
                    <input type="number" name="Numero_de_contacto" id="Numero_de_contacto" placeholder="Numero de contacto" require>
                    
                    <div>
                        <button>Agregar</button>
                        <button type="reset">Borrar</button>
                    </div>
                </form>
            </div>
        </div>
    </article>


    <footer>
        <div class="redes">
            <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=little.house.tec11@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            <!--<a href=""><i class="fa-brands fa-facebook"></i></a>-->
            <a href="https://www.instagram.com/little_house.011/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/541127246695?text=¡Hola%20somos%20LittleHouse,%20Como%20estas??%20Gracias%20por%20contactarnos,%20Puedes%20realizar%20cualquier%20consulta%20...%20"><i class="fa-solid fa-phone"></i></a>
            <a href="../index.php"><i class="fa-solid fa-house"></i></a>
        </div>
        <p class="titu_footer">LittleHouse</p>
        <p class="titu_footer">&copy;WebLittleHouse</p>
        <div class="foot">
            <p id="grax">Muchas gracias por tu ayuda</p>
            <p>Seguimos mejorando dia a dia</p>
        </div>
    </footer>


</body>
</html>