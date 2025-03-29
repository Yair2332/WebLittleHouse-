-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2025 a las 04:46:53
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wlh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `ID_admin` varchar(30) NOT NULL,
  `Clave_admin` varchar(20) NOT NULL,
  `Contraseña_ad` varchar(200) NOT NULL,
  `email_ad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`ID_admin`, `Clave_admin`, `Contraseña_ad`, `email_ad`) VALUES
('Elias2332', 'Insert_Admin_Proyect', 'LittleHouseProyecto', 'eliaaaaas11@gmail.com'),
('Franco2332', 'Insert_Admin_Proyect', 'LittleHouseProyecto', 'pichiuinca101@gmail.com'),
('Pilar2332', 'Insert_Admin_Proyect', 'LittleHouseProyecto', 'victoriapili011@gmail.com'),
('Sami2332', 'Insert_Admin_Proyect', 'LittleHouseProyecto', 'samiraaguilar015@gmail.com'),
('Yair2332', 'Insert_Admin_Proyect', 'LittleHouseProyecto', 'yairlezcano4@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentarios` int(11) NOT NULL,
  `ID_usuario1` varchar(50) NOT NULL,
  `Comentario_tex` varchar(500) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentarios`, `ID_usuario1`, `Comentario_tex`, `tipo`) VALUES
(37, 'Yair2332', 'Deja tu comentario', 2),
(38, 'Yair2332', 'Sirven para sumar idear y mejorar el proyecto\r\n', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_pregunta` int(1) NOT NULL,
  `Conocernos` varchar(200) NOT NULL,
  `Viviendas` varchar(200) NOT NULL,
  `Animales` varchar(200) NOT NULL,
  `Nombre_adoptar` varchar(200) NOT NULL,
  `Razon` varchar(200) NOT NULL,
  `Alternativa` varchar(200) NOT NULL,
  `Nom_apellido1` varchar(200) NOT NULL,
  `Edad1_form` int(200) NOT NULL,
  `DNI_form` int(200) NOT NULL,
  `Telefono_form1` int(200) NOT NULL,
  `Correo_form1` varchar(200) NOT NULL,
  `Facebook_form1` varchar(200) DEFAULT NULL,
  `Instagram_form1` varchar(200) DEFAULT NULL,
  `Dirrecion_form1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_pregunta`, `Conocernos`, `Viviendas`, `Animales`, `Nombre_adoptar`, `Razon`, `Alternativa`, `Nom_apellido1`, `Edad1_form`, `DNI_form`, `Telefono_form1`, `Correo_form1`, `Facebook_form1`, `Instagram_form1`, `Dirrecion_form1`) VALUES
(1, 'sadsadasd', 'casa', 'sdasdsadsad', 'Jupiter', 'sadsadasd', 'sadsadsad', 'dsadsa', 3434, 3434, 34343, 'yair@gmial.com', 'sada', 'sadasd', 'sadsadasd'),
(2, 'dsadsad', 'casa', 'sadasdsadas', 'Julian', 'sadsadsadas', 'dsadasdas', 'asfasf', 2343, 43434, 3434, '34343@gmail.com', '43434', '343434', '343434'),
(3, 'sadsadas', 'casa', 'asdasd', 'Jupiter', 'sadsad', 'asdsadsa', 'sadsadsad3', 334, 3434, 343434, 'yair@gmail.com', 'sadasasdsadasdass', 'sadsa', 'sadsd'),
(4, 'sadsadas', 'casa', 'asdasd', 'Jupiter', 'sadsad', 'asdsadsa', 'sadsadsad3', 334, 3434, 343434, 'yair@gmail.com', 'sadasasdsadasdass', 'sadsa', 'sadsd'),
(5, 'asdasdsa', 'casa', 'sadasd', 'Jupiter', 'safasdas', 'asdasdas', 'sdas', 242, 24242, 323232, 'yair@gmail.com', 'sadasd', 'sadasd', 'sadasdsa'),
(6, 'por instagram', 'casa', 'si, tengo 2 gatos y 1 perro', 'Jupiter', 'porque quiero otro perro para tener mas amor', 'con mi hermano', 'samira aguilar', 18, 46196551, 1138087728, 'samiraaguilar015@gmail.com', '', '', 'rio cuarto 6048'),
(7, 'Lo vi por una pagina', 'casa', 'Cuento con una sola mascota', 'Jupiter', 'Porque pinto', 'My mom', 'Yair Lezcano', 19, 45615187, 1123912486, 'yairlezcano4@gmail.com', 'No tengo', 'No tengo', 'Rocamora 4086');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE `perros` (
  `id_perro` int(200) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `EN_adopcion` tinyint(1) NOT NULL DEFAULT 1,
  `Descricion_G` varchar(450) NOT NULL,
  `Foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`id_perro`, `Nombre`, `EN_adopcion`, `Descricion_G`, `Foto`) VALUES
(16, 'Tobi', 1, 'Tobi es un perrito bastante bueno que le gusta jugar bastante', '../fotos_perros/tobi.jpg'),
(17, 'Bolt ', 1, 'Bolt es un torbellino de energía. Siempre está listo para correr, jugar y aprender trucos nuevos. Es ideal para alguien activo que disfrute de largas caminatas, juegos al aire libre y desafíos de inteligencia. Aunque a veces su energía lo mete en travesuras, es un perro leal que estará a tu lado en todas las aventuras. Busca una familia que lo mantenga en movimiento y lo llene de cariño.', '../fotos_perros/Vista_perro-900x743-c-center.jpg'),
(18, 'Luna ', 1, 'Luna es el equilibrio perfecto entre amor y tranquilidad. Le encanta acompañarte en todo momento, ya sea en paseos relajados o simplemente descansando a tu lado. Es sociable y cariñosa, ideal para familias o personas que buscan un compañero fiel y atento. Su felicidad es verte feliz, y si necesitas un abrazo peludo, siempre estará ahí para ti.', '../fotos_perros/perro-jugando-con-palo-istock-tetiana-garkusha_46d0ac5d_240723190448_800x800.jpg'),
(19, 'Rocky ', 1, 'Rocky es tranquilo y relajado, un amante de las siestas y la buena comida. Disfruta de los momentos de calma y prefiere una familia que valore su ritmo pausado. Aunque parece perezoso, cuando se trata de proteger a los suyos, no hay quien lo detenga. Ideal para quienes buscan un compañero leal y cariñoso, que siempre estará dispuesto a compartir momentos de descanso y diversión.', '../fotos_perros/Y-si-tu-perro-pudiera-vivir-cien-anos.jpg'),
(20, 'Shadow ', 1, 'Shadow es un perro inteligente y observador. No es el más efusivo, pero cuando confía en alguien, se convierte en un amigo incondicional. Le encanta explorar y disfrutar de la naturaleza. Busca una familia paciente que respete su espacio y le dé tiempo para adaptarse, pero que también esté dispuesta a vivir grandes aventuras con él.', '../fotos_perros/images.jpg'),
(21, 'Chispa ', 1, 'Chispa es pura diversión. Siempre está en movimiento, saltando y explorando. Es ideal para familias activas o personas que disfruten de jugar y mantenerlo entretenido. Si buscas un compañero con el que nunca te aburras, él es el indicado. Eso sí, ¡prepárate para largas sesiones de juegos y carreras sin fin!', '../fotos_perros/Diez-razas-de-perros-toy.jpg'),
(22, 'Bruno ', 1, 'Bruno es el perro perfecto para quienes buscan un compañero fiel y protector. Siempre está atento a su familia y le gusta sentirse útil. Aprende rápido y disfruta de los entrenamientos y juegos de búsqueda. Es cariñoso, pero también sabe cuándo es momento de estar alerta. Ideal para una familia que quiera un perro inteligente, equilibrado y leal.', '../fotos_perros/16456899624763.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `Id_compra` int(11) NOT NULL,
  `precio_produc` int(20) NOT NULL,
  `cantidad_produc` varchar(60) NOT NULL,
  `producto` varchar(120) NOT NULL,
  `ID_usuario2` varchar(30) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `tel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`Id_compra`, `precio_produc`, `cantidad_produc`, `producto`, `ID_usuario2`, `direccion`, `tel`) VALUES
(1, 0, '1', 'Id Producto: ../img/productos/bocadillos.jpg', '11', 'Rocamora 4086', 1126912486),
(2, 900, '1', 'Id Producto: ../img/productos/bocadillos.jpg', '11', 'asdas', 4757),
(3, 900, '1', '../img/productos/bocadillos.jpg', '11', 'sadasd', 1515151),
(4, 900, '1', '../img/productos/bocadillos.jpg', '11', 'asdasd', 448454845),
(5, 500, '1', '../img/productos/hueso.png', '11', 'asdasd', 26565),
(6, 900, '1', '../img/productos/bocadillos.jpg', '11', 'sadsad', 454654);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones_casa`
--

CREATE TABLE `ubicaciones_casa` (
  `id_ubicacion` int(11) NOT NULL,
  `ID_usuario4` varchar(30) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Domicilio_de_usuario` varchar(100) NOT NULL,
  `Calle_de_ubicacion_pedida` varchar(100) NOT NULL,
  `Numero_de_calle` int(20) NOT NULL,
  `Localidad_de_calle_pedida` varchar(100) NOT NULL,
  `Numero_de_contacto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicaciones_casa`
--

INSERT INTO `ubicaciones_casa` (`id_ubicacion`, `ID_usuario4`, `Nombre`, `Apellido`, `Correo`, `Domicilio_de_usuario`, `Calle_de_ubicacion_pedida`, `Numero_de_calle`, `Localidad_de_calle_pedida`, `Numero_de_contacto`) VALUES
(1, '0', 'yair', 'lezcano', 'yairlezcano4@gmail.com', 'Rocamora 4086', 'Icalma', 4556, 'Gregorio de Laferrere', 1126912486),
(2, '11', 'yair', 'lezcano', 'yairlezcano4@gmail.com', 'Rocamora 4086', 'Icalma', 4556, 'Gregorio de Laferrere', 1126912486),
(3, '0', 'yair', 'lezcano', 'yairlezcano4@gmail.com', 'rocamora', 'sadas', 2354, 'dasdsad', 121545),
(4, '0', 'yair', 'lezcano', 'yairlezcano4@gmail.com', 'rocamora', 'sadas', 2354, 'dasdsad', 121545),
(5, '0', 'yair', 'lezcano', 'yairlezcano4@gmail.com', 'rocamora', 'sadas', 2354, 'dasdsad', 121545),
(6, '0', 'Yair', 'Lezcano', '', '', '', 0, '', 0),
(7, '11', 'aysdyas', 'sadasd', 'asdasd@gmail.com', 'sadasd', 'sadsadasd', 44454, 'sadsadsa', 454512);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `Nombre_usuario` varchar(30) NOT NULL,
  `Apellido_usuario` varchar(30) NOT NULL,
  `Email_usuario` varchar(60) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  `Contraseña_usuario` varchar(120) NOT NULL,
  `Contacto_usuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombre_usuario`, `Apellido_usuario`, `Email_usuario`, `Usuario`, `Contraseña_usuario`, `Contacto_usuario`) VALUES
(9, 'asdsad', 'sadasd', 'sadas@gmail.com', 'dasdas', '0', 121345),
(10, 'safas', 'fasfasf', 'fsafas@gmail.com', 'sadasd', 'asdasdas', 21545),
(11, 'yair', 'lezcano', 'yairlezcano4@gmail.com', 'yair2332', '12345', 1126912486),
(12, '1', '1', '1@gmail.com', '1', '1', 1),
(13, 'ab', 'ab', 'ab@gmail.com', 'ab', 'ab', 12341);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`),
  ADD KEY `ID_usuario1` (`ID_usuario1`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id_perro`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`Id_compra`),
  ADD KEY `ID_usuario2` (`ID_usuario2`);

--
-- Indices de la tabla `ubicaciones_casa`
--
ALTER TABLE `ubicaciones_casa`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `ID_usuario4` (`ID_usuario4`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `Usuario` (`Usuario`),
  ADD UNIQUE KEY `Email_usuario` (`Email_usuario`),
  ADD KEY `Contraseña_usuario` (`Contacto_usuario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_pregunta` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `id_perro` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `Id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ubicaciones_casa`
--
ALTER TABLE `ubicaciones_casa`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
