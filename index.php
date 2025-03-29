<?php
    include("php/conexion.php");
    session_start();
    error_reporting(0);
    $necesario=$_SESSION['Usuario'];
    $id=$_SESSION['id'];



    $comentario="SELECT * FROM `comentarios` WHERE tipo='1';";
    $resul=mysqli_query($conexion,$comentario);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebLittleHouse</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/corriendo.css">
    <link rel="stylesheet" href="css/comentarios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/logo/icon.png" type="image/x-icon">
</head>
<body>
    <header>
        <img src="img/banner/logo.png" alt="">
        <nav>

            
            <label for="hamburguesa"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" name="hamburguesa" id="hamburguesa" checked>
            
            <ul id="navgrande">
                <?php
                if ($necesario!=null||$necesario!="") {
                ?>
                    <li><a href="php/cerrarsession.php">Cerrar Sesion</a></li>
                    <li><a href="index.php#comentarios">Comentarios</a></li>
                <?php
                }else{
                ?>
                    <li><a href="html/iniciosession.html">Inicio Sesion</a></li>
                    <li><a href="html/registro.html">Registro</a></li>
                <?php
                }
                ?>
                <li><a href="html/adopcion.php">Adopcion</a></li>
                <li><a href="html/sobre_nosotros.html">Informacion</a></li>
                <li><a href="html/ubicaciones.php">Ubicacion</a></li>
                <li><a href="html/construccion.html">Construccion</a></li>
                <li><a href="html/tienda.php">Ayudanos</a></li>
            </ul>
            
        </nav>
    </header>

    <section id="banner">
        <div class="content">
            <div class="principal">
                <div>
                    <h1>Little</h1>
                    <h1 class="derecha">House</h1>
                </div>
                <div class="imgbanner">
                    <img src="img/banner/imgbanner.png" alt="">
                </div>
            </div>

            <div class="btn_comenzar">
                <form action="#somos"><button>Comenzar</button></form>
            </div>
        </div>
    </section>

    

    <article id="somos" class="estilos_info info">
        <div class="content">
            <div class="img_dec">
                <img class="img_decoracion" src="img/imgs_decoracion/perroenciuda.jpeg" alt="">
            </div>
            <div class="informacion">
                <h3>Little House<br>Quienes Somos???</h3>
                <br>
                <p>
                    Somos una asociación de personas, que buscamos la protección 
                    de los animales callejeros, aportando nuestro granito de arena 
                    realizando el proyecto “Little House”, el cual lo realizamos sin fines 
                    de lucro.
                </p>
                <p>
                   El proyecto se basa principalmente en la construcción de una casa 
                    y la distribución de la misma por distintos puntos de Buenos Aires
                </p>
                <form action="html/sobre_nosotros.html" method="post"><button>Saber mas</button></form>
            </div>
        </div>
    </article>


    <article id="construccion" class="estilos_info info">
        <div class="content">
            <div class="informacion">
                <h3>Little House<br>Nuestras Construcciones</h3>
                <br>
                <p>
                  Nuestra idea, sera brindar hogar a los perros en situacion de calle, para eso generaremos casas ecologicas y comodas
                </p>
                <p>
                   Contamos con una seccion de ubicaciones, donde los usuarios podran agregar ubicaciones de lugares donde necesiten estas construcciones
                </p>
                <form action="html/construccion.html" method="post"><button>Saber mas</button></form>
            </div>
            <div class="img_dec">
                <img class="img_decoracion" src="img/imgs_decoracion/casaperrito.jpg" alt="">
            </div>
        </div>
    </article>

    <section id="tienda">
        <div class="content">
            <h3>Tienda <br>Little House</h3>
            <a href="html/tienda.php" class="productos">
                
                <div class="producto">
                    <div class="x">
                        <img src="img/imgs_decoracion/mas.png" alt="">
                    </div>
                    <div class="img_prod">
                        <img src="img/productos/bocadillos.jpg" alt="">
                    </div>
                    <h4>Juguete</h4>
                </div>

                <div class="producto">
                    <div class="x">
                        <img src="img/imgs_decoracion/mas.png" alt="">
                    </div>
                    <div class="img_prod">
                        <img src="img/productos/hueso.png" alt="">
                    </div>
                    <h4>Juguete</h4>
                </div>

                <div class="producto">
                    <div class="x">
                        <img src="img/imgs_decoracion/mas.png" alt="">
                    </div>
                    <div class="img_prod">
                        <img src="img/productos/juguete.png" alt="">
                    </div>
                    <h4>Juguete</h4>
                </div>

                <div class="producto">
                    <div class="x">
                        <img src="img/imgs_decoracion/mas.png" alt="">
                    </div>
                    <div class="img_prod">
                        <img src="img/productos/llavero.png" alt="">
                    </div>
                    <h4>Juguete</h4>
                </div>

                <div class="producto">
                    <div class="x">
                        <img src="img/imgs_decoracion/mas.png" alt="">
                    </div>
                    <div class="img_prod">
                        <img src="img/productos/palitos.png" alt="">
                    </div>
                    <h4>Juguete</h4>
                </div>

                <div class="producto">
                    <div class="x">
                        <img src="img/imgs_decoracion/mas.png" alt="">
                    </div>
                    <div class="img_prod">
                        <img src="img/productos/pelotita.png" alt="">
                    </div>
                    <h4>Juguete</h4>
                </div>


            </a>
        </div>

    </section>

    <article id="qr" class="estilos_info info">
        <div class="content">
            <div class="img_dec">
                <img class="img_decoracion" src="img/imgs_decoracion/qr.png" alt="">
            </div>
            <div class="informacion">
                <h3>Little House<br>Quienes Somos???</h3>
                <br>
                <p>
                    Ayúdanos a hacer nuestro proyecto realidad,
                    existen distintas formas de ayudarnos a llevar a cabo 
                    el proyecto, una de ellas es generando una donación, 
                    ya sea económica o proporcionando materiales para la 
                    ejecución de las casas. 
                </p>
                <a href="html/tienda.php"><img id="qrs" src="img/imgs_decoracion/qrs.png" alt=""></a>
            </div>
        </div>
    </article>

    <?php
    if ($necesario!=null||$necesario!="") {
    ?>
    <section id="comentarios" class="section_coment">
        <div class="comentarios_cont">
            <div class="separacion comentario_nuevo">
                <div class="titulo_descripcion">
                    <h3>Little House<br>Comentarios!!!</h3>
                    <p>Ayúdanos a hacer nuestro proyecto realidad.<br>Comparte tus pensamientos de como avanzar con este proyecto, <br>cualquier idea que tengas nos es de mucha ayuda, muchas gracias!!!</p>
                </div>
                <form action="php/añadir_comentario_home.php" method="post" class="agregar_coment">
                    <input type="text" name="tipo" class="tipo" value="1">
                    <input readonly type="text" value="<?php echo $necesario;?>" name="usuario" id="" placeholder="<?php echo $necesario;?>">
                    <textarea name="comentario" id="" cols="40" rows="10" placeholder="Escribir..."></textarea>
                    <button>Enviar</button>
                </form>
                <div class="img_comen">
                    <img src="img/comentarios/comunicacion.png" alt="">
                    <img src="img/comentarios/perro-pastor.png" alt="">
                </div>
            </div>

        <div class="separacion comentarios_total">

            <?php while ($resultado= mysqli_fetch_array($resul)) {
            ?>

            <div class="comentario">
                    <?php
                        if($resultado['ID_usuario1']==$necesario||$_SESSION['id']=="admin"){
                            ?><a href="php/eliminar_comentario.php?id=<?php echo $resultado['ID_usuario1'];?>&tipo=1&id_coment=<?php echo $resultado['id_comentarios'];?>"><i class="fa-solid fa-trash"></i></a><?php
                        }
                    ?>

                    <p class="usuarios"><?php echo $resultado['ID_usuario1']?></p> 
                    <p class="comentario_text"><?php echo $resultado['Comentario_tex']?></p>
            </div>

            <?php
            };
            ?>

            </div>

        </div>

    </section>
    <?php
    }
    ?>

<a href="html/rompe.html"><img src="img/gifs/perrito_corriendo.gif" alt="" class="perrito_gif"></a>
    

    <footer>
        <div class="redes">
            <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=little.house.tec11@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            <!--<a href=""><i class="fa-brands fa-facebook"></i></a>-->
            <a href="https://www.instagram.com/little_house.011/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/541127246695?text=¡Hola%20somos%20LittleHouse,%20Como%20estas??%20Gracias%20por%20contactarnos,%20Puedes%20realizar%20cualquier%20consulta%20...%20"><i class="fa-solid fa-phone"></i></a>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
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
