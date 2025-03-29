<?php
    include("../php/conexion.php");
    session_start();
    error_reporting(0);
    $necesario=$_SESSION['Usuario'];
    $id=$_SESSION['id'];

    if ($necesario==null||$necesario=="") {
        echo "<script> alert('Inicia Session para ver esta pagina'); window.location='../index.php'</script>";
    };
        

    $consulta="SELECT * FROM `perros`;";

    $nombres= mysqli_query($conexion,$consulta);



    $comentario="SELECT * FROM `comentarios` WHERE tipo='2';";
    $resul=mysqli_query($conexion,$comentario);
    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebLittleHouse - Adopcion</title>
    <link rel="stylesheet" href="../css/comentarios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../css/corriendo.css">    
    <link rel="stylesheet" href="../css/adopcion.css">
    <link rel="shortcut icon" href="../img/logo/icon.png" type="image/x-icon">
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


    <article id="adopcion" class="estilos_info info">
        <div class="content">
            <div class="informacion" id="tituloadopcion">
                <h3>Adopcion</h3>
                <h5>Little House</h5>
                <img src="../img/adopcion/patitas.png" alt="">
            </div>
            <div class="informacion" id="info2">
                <p>
                    Si estas interesado/a en adoptar a alguno<br>
                    de los perritos que rescatamos <br>
                    haz click en ver mas
                </p>
                <form action="#main"><button>Ver mas</button></form>
            </div>
    
        </div>
    </article>
    
    <section id="ventana_emergente" class="estilos_info info" >
        

        <div id="ventana">

            <div id="perfil">
                <h2 id="nombre_perfil"></h2>
                <div id="img_emergente">
                    <img src="../img/banner/imgbanner.png" alt="" id="img_perfil">
                </div>
            </div>

            <div id="descripcion">
                <div id="texto">
                    <p id="equis" onclick="ventanaEmergente()">x</p>
                    <p id="descripcion_perfil"></p>
                    <button id="boton_formulario">Formulario de adopcion</button>
                </div>
            </div>

        </div>


</section>

    <main id="main" class="estilos_info info" >
        <div class="cabecera">
            <h2>Adopcion</h2>
        </div>
        <div class="texto">
            <p>¿Estás buscando un nuevo amigo?<br>
Todos ellos están listos para su adopción, presiona sobre ellos para obtener más información sobre quienes son, su historia y descripción</p>
        </div>
        <section class="adopciones">



            <?php while ($resultado= mysqli_fetch_array($nombres)) {
            ?>

            
            <div class="carta" onclick="ventanaEmergente(<?php echo $resultado['id_perro'];?>)">
                <div class="contenedor_img"><img src="<?php echo $resultado['Foto'];?>" id="f<?php echo $resultado["id_perro"];?>" alt=""></div>
                <h4 id="n<?php echo $resultado["id_perro"];?>"><?php echo $resultado["Nombre"];?></h4>
                <p class="descripss" id="d<?php echo $resultado["id_perro"];?>"><?php echo $resultado["Descricion_G"];?></p>
            </div>
        
            <?php
            };
            ?>
            
        </section>


    </main>


    <section id="inicio_formulario" class="estilos_info info">
        <div class="cabecera">
            <h2>Formulario de adopcion</h2>
        </div>

        <div id="formulario_completo" class="forms">
            <div class="form_img_presentacion">
                <img id="primera_foto" src="../img/adopcion/adopciones-removebg-preview.png" alt="">
                <img id="segunda_foto" src="../img/adopcion/adopcion form.png" alt="">
            </div>

            <form action="../php/añadir_formulario_adopcion.php" method="post">
                <h2>Formulario de adopcion</h2>
                    <div id="primera_parte">
                        <p class="descripcion_form">En este formularia podras ingresar todos tus datos, para generar un solicitud de adopcion, al enviarlo tendras un tiempo de espera de 7 dias habiles</p>
                            <input type="text" name="nombre" placeholder="Nombre y Apellido" required><br>
                            <input type="number" name="edad" id="edad" placeholder="Edad" required><br>
                            <input type="number" name="dni" id="dni" placeholder="Numero de DNI" required><br>
                            <input type="number" name="telefono" id="telefono" placeholder="Numero de Telefono" require><br>
                            <input type="email" name="mail" id="mail" placeholder="Correo Electronico" required><br>
                            <input type="text" name="facebook" placeholder="Facebook"><br>
                            <input type="text" name="instagram" placeholder="Instagram"><br>
                            <input type="text" name="direccion" id="direccion" placeholder="Direccion"><br>
                            <p id="siguiente" onclick="formulario_movimiento()">Siguiente</p>
                        </div>
                        
                    <div id="segunda_parte">
                        <p class="descripcion_form">Preguntas personalizadas para saber un poco mas de vos</p>

                        <p>¿Cómo conociste Little House?</p>
                            <textarea name="conocernos" id="" cols="30" rows="5" placeholder="Escribir..." require></textarea>
                        
                        <p>¿Qué tipo de vivienda habitas?:</p>
                        <select name="viviendas" id="" require>
                            <option value="">Seleccionar</option>
                            <option value="casa">Casa</option>
                            <option value="departamento">Departamento</option>
                        </select>

                        <p>¿Tienes animales?¿Cuantos?</p>
                            <textarea name="animales" id="" cols="30" rows="5" placeholder="Escribir..." require></textarea>
                        
                        <p>Nombre del animal que desea adoptar:</p>
                        <select name="nombre_adoptar" id="" require>
                            <?php 
                            $opciones= mysqli_query($conexion,$consulta);
                            while ($res= mysqli_fetch_array($opciones)) {
                            ?>
                            <option value="<?php echo $res["Nombre"];?>"><?php echo $res["Nombre"];?></option>
                            <?php
                            };
                            ?>

                        </select>

                        <p>¿Por qué quieres adoptar a este perro?</p>
                            <textarea name="razon" id="" cols="30" rows="5" placeholder="Escribir..." require></textarea>
                        
                        <p>Si sales de vacaciones, ¿con quien dejarías al perro?</p>
                            <textarea name="alternativa" id="" cols="30" rows="5" placeholder="Escribir..." require></textarea>
                            <br><button type="button" onclick="formulario_movimiento()">Atras</button><button id="enviar">Enviar</button>
                    </div>

                    
            </form>
        </div>



    </section>

    <?php
        if ($_SESSION['id']=="admin") {
    ?>

    
    <section class="Formulario_de_agregar">
        
        <div class="Contenedor_agregar">
            <form class="agregar" action="../php/agregar_perro.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="nom_perro" placeholder="Nombre del perro" require>
                    <textarea name="descripcion_agregar" id="descripcion_agregar" cols="30" rows="5" placeholder="Escribir descripcion del perro..." require></textarea>
                    <input type="file" name="foto" id="foto" require>
                    <button>Agregar</button>
                </form>

            <div class="mostrar_perros">

                <?php 
                    $datos= mysqli_query($conexion,$consulta);
                    while ($res= mysqli_fetch_array($datos)) {
                ?>

                <div class="perro" id="<?php echo $res['id_perro'];?>">
                    <img class="foto_perro" src="<?php echo $res["Foto"];?>" alt="">
                    <p class="nombre_perro"><?php echo $res["Nombre"];?></p>
                    <a href="../php/eliminar_perro.php?id=<?php echo $res['id_perro'];?>">Borrar</a>
                </div>

                <?php
                    };
                ?>



            </div>
        </div>
            
    </section>

    <?php
        };
    ?>


    <section id="comentarios" class="section_coment">
        <div class="comentarios_cont">
            <div class="separacion comentario_nuevo">
                <div class="titulo_descripcion">
                    <h3>Little House<br>Comentarios!!!</h3>
                    <p>Ayúdanos a hacer nuestro proyecto realidad,.<br> Existen distintas formas de ayudarnos a llevar a cabo el proyecto</p>
                </div>
                <form action="../php/añadir_comentario_home.php" method="post" class="agregar_coment">
                    <input type="text" name="tipo" class="tipo" value="2">
                    <input readonly type="text" value="<?php echo $necesario;?>" name="usuario" require id="" placeholder="<?php echo $necesario;?>">
                    <textarea name="comentario" id="" cols="40" rows="10" placeholder="Escribir..." require></textarea>
                    <button>Enviar</button>
                </form>
                <div class="img_comen">
                    <img src="../img/comentarios/comentarios_adopcion.png" alt="">
                    <img src="../img/comentarios/perrito_adopcion.png" alt="">
                </div>
            </div>

        <div class="separacion comentarios_total">

            <?php while ($resultado= mysqli_fetch_array($resul)) {
            ?>

            <div class="comentario">

                    <?php
                        if($resultado['ID_usuario1']==$necesario||$_SESSION['id']=="admin"){
                            ?><a href="../php/eliminar_comentario.php?id=<?php echo $resultado['ID_usuario1'];?>&tipo=2&id_coment=<?php echo $resultado['id_comentarios'];?>"><i class="fa-solid fa-trash"></i></a><?php
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

    <img src="../img/gifs/perrito_corriendo.gif" alt="" class="perrito_gif">


    <script src="../js/adopcion.js"></script>

</body>
</html>


<?php



?>

