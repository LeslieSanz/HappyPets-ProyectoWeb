-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 00:56:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_happypets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `cod_ado` char(5) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cod_usu` char(4) NOT NULL,
  `cod_aniAdo` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adopcion`
--

INSERT INTO `adopcion` (`cod_ado`, `fecha_solicitud`, `estado`, `cod_usu`, `cod_aniAdo`) VALUES
('AD001', '2023-11-05', 'pendiente', 'U004', 'AA005'),
('AD002', '2023-11-05', 'pendiente', 'U004', 'AA002');

--
-- Disparadores `adopcion`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_adopcion` BEFORE INSERT ON `adopcion` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(5);
    DECLARE new_code CHAR(5);

    -- Obtener el último código de cita de la tabla
    SELECT cod_ado INTO last_code
    FROM adopcion
    ORDER BY cod_ado DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'AD001'; -- Si no hay registros, el nuevo código es 'AD001'
    ELSE
        SET new_code = CONCAT('AD', LPAD(CAST(SUBSTRING(last_code, 3) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.cod_ado = new_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal_adopta`
--

CREATE TABLE `animal_adopta` (
  `cod_aniAdo` char(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `especie` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` varchar(15) NOT NULL,
  `tamano` varchar(10) NOT NULL,
  `caracteristicas` text NOT NULL,
  `razon` text NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animal_adopta`
--

INSERT INTO `animal_adopta` (`cod_aniAdo`, `nombre`, `especie`, `sexo`, `edad`, `tamano`, `caracteristicas`, `razon`, `foto`) VALUES
('AA001', 'Balto', 'Canino', 'Macho', '0-6 meses', 'pequeño', 'Balto es un cachorro travieso y juguetón de 3 meses de edad. Tiene un pelaje suave y esponjoso, y sus ojos curiosos están llenos de energía. ', 'Fue rescatado junto con sus hermanos de un ambiente difícil. A pesar de su pasado, Balto tiene un espíritu valiente y está listo para ser parte de una familia cariñosa que le brinde amor, seguridad y la oportunidad de crecer en un hogar lleno de alegría.', 0x62616c746f2e706e67),
('AA002', 'Oliver', 'Canino', 'Macho', '6-12 meses', 'mediano', 'Oliver tiene 10 meses, es inteligente, obediente y está entrenado para hacer sus necesidades afuera. Es un excelente compañero para actividades al aire libre.', 'Fue entregado al refugio debido a circunstancias familiares. Es leal y cariñoso, y está buscando un hogar donde pueda ser parte de la familia y recibir el amor que se merece.', 0x6f6c697665722e706e67),
('AA003', 'Madonna', 'Canino', 'Hembra', '1-2 años', 'mediano', 'Madonna es una perrita de 1 año con un pelaje suave y brillante. Tiene ojos expresivos y es conocida por su dulzura y afectuosidad. Es tranquila, amorosa y se lleva bien con personas de todas las edades.', 'Fue encontrada abandonada y ahora está lista para encontrar un hogar donde pueda ser apreciada por su naturaleza cariñosa. Está buscando una familia que la ame y cuide para siempre.', 0x6d61646f6e6e612e706e67),
('AA004', 'Oreo', 'Felino', 'Macho', '2-4 años', 'mediano', 'Oreo es un gato activo y curioso de 3 años de edad. .Es juguetón, inteligente y le encanta explorar su entorno. Oreo también disfruta de la compañía de otros gatos y perros.', 'Oreo es un gato lleno de energía y entusiasmo, perfecto para una familia activa que esté dispuesta a jugar y darle mucha atención. Su naturaleza amistosa lo convierte en un compañero adorable para personas de todas las edades.', 0x6f72656f2e6a7067),
('AA005', 'Merlina', 'Felino', 'Hembra', '1-2 años', 'mediano', 'Merlina es una gata de 2 años con un pelaje suave y brillante. Es cariñosa y tiene una personalidad encantadora. Le gusta rascar en su poste para gatos. Merlina es curiosa y siempre está explorando su entorno con gran interés.', 'Merlina fue encontrada vagando por las calles, abandonada y desorientada. A pesar de su difícil pasado, ella ha demostrado ser una gata dulce y amorosa. Está en busca de un hogar cálido y seguro donde pueda dejar atrás su pasado de abandono y ser parte de una familia amorosa. ', 0x6d65726c696e612e6a7067),
('AA006', 'Cleopatra', 'Felino', 'Hembra', '0-6 meses', 'pequeño', ' Cleopatra es una gatita siamesa de 4 meses, con ojos azules hipnotizantes y un pelaje suave y sedoso en tonos de crema y marrón. Es juguetona, curiosa y llena de energía. Su naturaleza activa la convierte en una compañera divertida que adora explorar y jugar con juguetes interactivos. Cleopatra es cariñosa y disfruta de las caricias y el afecto de las personas.', 'Cleopatra fue encontrada abandonada junto a sus hermanos cuando eran solo unos días de edad. Fue cuidada con amor por rescatistas dedicados y ha crecido siendo una gatita amorosa y juguetona. Darle un hogar sería brindarle la oportunidad de vivir una vida feliz y plena como parte de tu familia.', 0x636c656f70617472612e6a7067),
('AA007', 'Copito', 'Canino', 'Macho', '2-4 años', 'mediano', 'Copito es un valiente sobreviviente, de 4 años, con un pelaje rizado y ojos llenos de determinación. Su espíritu es increíblemente fuerte, su mirada refleja la gratitud por la segunda oportunidad que la vida le ha dado.', 'Adoptar a Copito significa ofrecerle un hogar lleno de amor y esperanza después de haber superado innumerables desafíos. Fue rescatado en condiciones desgarradoras, luchó valientemente contra el cáncer y, con una fuerza inquebrantable, venció la enfermedad. Su historia es un testimonio de resiliencia y determinación, y al darle un hogar, estás siendo parte de su milagrosa transformación.', 0x636f7069746f2e706e67),
('AA008', 'Maximus', 'Canino', 'Macho', 'Más de 4 años', 'grande', 'Maximus, con más de 4 años de edad, posee una presencia imponente y un corazón gentil. Sus ojos reflejan la sabiduría adquirida a lo largo de los años. Es tranquilo, leal y está en busca de un hogar amoroso donde pueda compartir su amor y experiencia.', 'Adoptar a Maximus significa brindarle la oportunidad de disfrutar sus años de oro en un hogar donde sea amado y valorado. Además, adoptar a un perro adulto tiene ventajas, ya que generalmente son más calmados y agradecidos, y pueden adaptarse fácilmente a la rutina de un hogar estable.', 0x6d6178696d75732e706e67);

--
-- Disparadores `animal_adopta`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_animal_adopta` BEFORE INSERT ON `animal_adopta` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(5);
    DECLARE new_code CHAR(5);

    -- Obtener el último código de cita de la tabla
    SELECT cod_aniAdo INTO last_code
    FROM animal_adopta
    ORDER BY cod_aniAdo DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'AA001'; -- Si no hay registros, el nuevo código es 'AA001'
    ELSE
        SET new_code = CONCAT('AA', LPAD(CAST(SUBSTRING(last_code, 3) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.cod_aniAdo = new_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal_reporta`
--

CREATE TABLE `animal_reporta` (
  `cod_ani` char(4) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `tamano` varchar(20) DEFAULT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animal_reporta`
--

INSERT INTO `animal_reporta` (`cod_ani`, `especie`, `edad`, `tamano`, `foto`) VALUES
('A001', 'gato', NULL, NULL, 0x332e6a7067),
('A002', 'perro', NULL, NULL, 0x352e6a7067),
('A003', 'perro', NULL, NULL, 0x576861747341707020496d61676520323032332d31302d323920617420382e33352e333420504d2e6a706567);

--
-- Disparadores `animal_reporta`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_animal` BEFORE INSERT ON `animal_reporta` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(4);
    DECLARE new_code CHAR(4);

    -- Obtener el último código de cita de la tabla
    SELECT cod_ani INTO last_code
    FROM animal_reporta
    ORDER BY cod_ani DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'A001'; -- Si no hay registros, el nuevo código es 'A001'
    ELSE
        SET new_code = CONCAT('A', LPAD(CAST(SUBSTRING(last_code, 2) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.cod_ani = new_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `cod_com` char(4) NOT NULL,
  `fecha_publi` date NOT NULL,
  `contenido` text NOT NULL,
  `cod_usu` char(4) NOT NULL,
  `cod_post` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`cod_com`, `fecha_publi`, `contenido`, `cod_usu`, `cod_post`) VALUES
('C001', '2023-11-07', 'fafafafafafa', 'U003', NULL),
('C002', '2023-11-07', 'rqrqrqrrqrqr', 'U003', NULL),
('C003', '2023-11-07', 'aafafafa', 'U001', NULL);

--
-- Disparadores `comentario`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_comentario` BEFORE INSERT ON `comentario` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(4);
    DECLARE new_code CHAR(4);

    -- Obtener el último código de cita de la tabla
    SELECT cod_com INTO last_code
    FROM comentario
    ORDER BY cod_com DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'C001'; -- Si no hay registros, el nuevo código es 'C001'
    ELSE
        SET new_code = CONCAT('C', LPAD(CAST(SUBSTRING(last_code, 2) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.COD_COM = new_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `cod_cont` char(4) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` char(9) NOT NULL,
  `asunto` varchar(30) NOT NULL,
  `mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`cod_cont`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`) VALUES
('S001', 'dada', 'u21308391@utp.edu.pe', '963029682', 'saddasddssssssssssssssss', 'dadad');

--
-- Disparadores `contacto`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_contacto` BEFORE INSERT ON `contacto` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(4);
    DECLARE new_code CHAR(4);

    -- Obtener el último código de cita de la tabla
    SELECT cod_cont INTO last_code
    FROM contacto
    ORDER BY cod_cont DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'S001'; -- Si no hay registros, el nuevo código es 'S001'
    ELSE
        SET new_code = CONCAT('S', LPAD(CAST(SUBSTRING(last_code, 2) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.cod_cont = new_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `cod_don` char(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `monto` double(8,1) NOT NULL,
  `descripcion` text NOT NULL,
  `cod_usu` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `cod_post` char(4) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `cod_rep` char(4) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `info_adicional` varchar(200) NOT NULL,
  `cod_usu` char(4) NOT NULL,
  `cod_ani` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`cod_rep`, `distrito`, `referencia`, `direccion`, `info_adicional`, `cod_usu`, `cod_ani`) VALUES
('R001', 'Cercado de Lima', 'utp', 'Av arequipa 256', 'tiene una correita', 'U003', 'A001'),
('R002', 'Surco', 'crda 3 ', 'Francisco de Toledo', 'asasdsdas', 'U004', 'A002');

--
-- Disparadores `reporte`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_reporte` BEFORE INSERT ON `reporte` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(4);
    DECLARE new_code CHAR(4);

    -- Obtener el último código de cita de la tabla
    SELECT cod_rep INTO last_code
    FROM reporte
    ORDER BY cod_rep DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'R001'; -- Si no hay registros, el nuevo código es 'R001'
    ELSE
        SET new_code = CONCAT('R', LPAD(CAST(SUBSTRING(last_code, 2) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.cod_rep = new_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `cod_resp` char(4) NOT NULL,
  `contenido` text NOT NULL,
  `fecha_resp` date NOT NULL,
  `Usuario_cod_usu` char(4) NOT NULL,
  `Comentario_cod_com` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usu` char(4) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `celular` char(9) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `dni` char(8) NOT NULL,
  `edad` int(11) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usu`, `nombre`, `email`, `password`, `celular`, `tipo`, `dni`, `edad`, `distrito`, `foto`) VALUES
('U001', 'Adrian', 'a@', 'a', '', '', '', 0, '', ''),
('U002', 'Domenik', 'dominik@gmail.com', 'd', '', '', '', 0, '', ''),
('U003', 'pepito', 'c08234@gmail.com', '1234567', '', '', '', 0, '', ''),
('U004', 'leslie', 'leslie@gmail.com', '123', '999999999', '', 'ds', 0, 'sdfghjkasd', '');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `trg_generar_codigo_usuario` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
    DECLARE last_code CHAR(4);
    DECLARE new_code CHAR(4);

    -- Obtener el último código de cita de la tabla
    SELECT cod_usu INTO last_code
    FROM usuario
    ORDER BY cod_usu DESC
    LIMIT 1;

    -- Verificar si hay registros en la tabla
    IF last_code IS NULL THEN
        SET new_code = 'U001'; -- Si no hay registros, el nuevo código es 'U001'
    ELSE
        SET new_code = CONCAT('U', LPAD(CAST(SUBSTRING(last_code, 2) AS INT) + 1, 3, '0'));
        -- Generar el nuevo código incrementando en 1 el último código existente
    END IF;

    -- Asignar el nuevo código de cita al nuevo registro
    SET NEW.cod_usu = new_code;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`cod_ado`),
  ADD KEY `Adopcion_Animal` (`cod_aniAdo`),
  ADD KEY `Adopcion_Usuario` (`cod_usu`),
  ADD KEY `cod_aniAdo` (`cod_aniAdo`);

--
-- Indices de la tabla `animal_adopta`
--
ALTER TABLE `animal_adopta`
  ADD PRIMARY KEY (`cod_aniAdo`);

--
-- Indices de la tabla `animal_reporta`
--
ALTER TABLE `animal_reporta`
  ADD PRIMARY KEY (`cod_ani`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`cod_com`),
  ADD KEY `Comentario_Post` (`cod_post`),
  ADD KEY `Comentario_Usuario` (`cod_usu`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`cod_cont`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`cod_don`),
  ADD KEY `Donacion_Usuario` (`cod_usu`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`cod_post`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`cod_rep`),
  ADD KEY `Reporte_Animal` (`cod_ani`),
  ADD KEY `Reporte_Usuario` (`cod_usu`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`cod_resp`),
  ADD KEY `Respuesta_Comentario` (`Comentario_cod_com`),
  ADD KEY `Respuesta_Usuario` (`Usuario_cod_usu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usu`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `Adopcion_Usuario` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`cod_usu`),
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`cod_aniAdo`) REFERENCES `animal_adopta` (`cod_aniAdo`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `Comentario_Post` FOREIGN KEY (`cod_post`) REFERENCES `post` (`cod_post`),
  ADD CONSTRAINT `Comentario_Usuario` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`cod_usu`);

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `Donacion_Usuario` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`cod_usu`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `Reporte_Animal` FOREIGN KEY (`cod_ani`) REFERENCES `animal_reporta` (`cod_ani`),
  ADD CONSTRAINT `Reporte_Usuario` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`cod_usu`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `Respuesta_Comentario` FOREIGN KEY (`Comentario_cod_com`) REFERENCES `comentario` (`cod_com`),
  ADD CONSTRAINT `Respuesta_Usuario` FOREIGN KEY (`Usuario_cod_usu`) REFERENCES `usuario` (`cod_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
