<?php
    include("../php/conexion.php");
    session_start();
    error_reporting(0);
    $necesario=$_SESSION['Usuario'];
    $id=$_SESSION['id'];
        

    $consulta="SELECT * FROM `tienda` WHERE ID_usuario2='$id';";

    $productos= mysqli_query($conexion,$consulta);

    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../css/tienda.css">
    <link rel="stylesheet" href="../css/ubicaciones.css">
    <title>LittleHouse - Tienda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/corriendo.css">
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

    <section class="pag_tienda_main">
        <div class="contenedor_pag_tienda">

            <div class="productos_tienda">
                <h3>Little House<br>Tienda</h3>
                <div class="lista_productos">
                    <div class="producto" onclick="pago(1, 'Bocadillo', 900)">
                        <div class="x">
                            <img src="../img/imgs_decoracion/mas.png" alt="">
                        </div>
                        <div class="img_prod">
                            <img src="../img/productos/bocadillos.jpg" alt="">
                        </div>
                        <h4>$900<br>Bocadillo</h4>
                    </div>
    
                    <div class="producto" onclick="pago(2, 'Hueso', 500)">
                        <div class="x">
                            <img src="../img/imgs_decoracion/mas.png" alt="">
                        </div>
                        <div class="img_prod">
                            <img src="../img/productos/hueso.png" alt="">
                        </div>
                        <h4>$500<br>Hueso</h4>
                    </div>
    
                    <div class="producto" onclick="pago(3, 'Juguete', 1500)">
                        <div class="x">
                            <img src="../img/imgs_decoracion/mas.png" alt="">
                        </div>
                        <div class="img_prod">
                            <img src="../img/productos/juguete.png" alt="">
                        </div>
                        <h4>$1500<br>Juguete</h4>
                    </div>
    
                    <div class="producto" onclick="pago(4, 'Llavero', 800)">
                        <div class="x">
                            <img src="../img/imgs_decoracion/mas.png" alt="">
                        </div>
                        <div class="img_prod">
                            <img src="../img/productos/llavero.png" alt="">
                        </div>
                        <h4>$800<br>Collar</h4>
                    </div>
    
                    <div class="producto" onclick="pago(5, 'Barita', 300)">
                        <div class="x">
                            <img src="../img/imgs_decoracion/mas.png" alt="">
                        </div>
                        <div class="img_prod">
                            <img src="../img/productos/palitos.png" alt="">
                        </div>
                        <h4>$300<br>Barita</h4>
                    </div>
    
                    <div class="producto" onclick="pago(6, 'Juguete', 1000)">
                        <div class="x">
                            <img src="../img/imgs_decoracion/mas.png" alt="">
                        </div>
                        <div class="img_prod">
                            <img src="../img/productos/pelotita.png" alt="">
                        </div>
                        <h4>$1000<br>Juguete</h4>
                    </div>
                </div>

            </div>

            <div class="lista">

                <div class="contenedor_lista">
                    <h5>PRODUCTOS</h5>

                    <?php while ($resultado= mysqli_fetch_array($productos)) {
                    ?>

                    <div class="prod_lis">
                        <img class="img_prod_list" src="<?php echo $resultado['producto'];?>" alt="">
                        <input type="text" name="" id="" readonly value="$<?php echo $resultado['precio_produc'];?>">
                    </div>
                    

                    <?php
                    };
                    ?>

                </div>
                <h5>COMPRAS</h5>

                
                

            </div> 
        </div>
    </section>


    <section id="formulario_compra">
        <div class="contenedor_pago">
            <p class="x_pago" onclick="x()">x</p>
            <div class="divicion" id="produc">
                <img src="../img/productos/bocadillos.jpg" id="img_pago">
                <p class="name_producto" id="name_p"></p>
                <p class="precio_producto" id="name_pre"></p>
            </div>
            <div class="divicion">
                <h3>Formulario de compra</h3>
                <form action="../php/agregar_producto.php" method="post">
                    <input type="text" name="Usuario" id="Usuario" placeholder="Usuario" required>
                    <input type="email" name="" id="" placeholder="Gmail" required>
                    <input type="password" name="" id="" placeholder="Contraseña" required>
                    <input type="text" name="direccion" placeholder="Direccion" required>
                    <input type="number" name="tel" id="" placeholder="Telefono" required>
                    <input type="text" name="Producto" id="Producto" value="Producto" readonly>
                    <input type="text" name="precio_produc" id="precio_produc" value="" readonly>
                    <button>Agregar a pedidos</button>
                </form>
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
    
    <a href="../html/rompe.html"><img src="../img/gifs/perrito_corriendo.gif" alt="" class="perrito_gif"></a>
    <script src="../js/tienda.js"></script>
</body>
</html>