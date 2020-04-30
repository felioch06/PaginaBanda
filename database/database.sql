-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 18:06:59
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Coordinador'),
(2, 'Instructor'),
(3, 'Supervisor de Recursos Humanos'),
(4, 'Auxiliar de recursos humanos'),
(5, 'Secretaria'),
(6, 'Tecnico de mantenimiento de equipos'),
(7, 'Auxiliar de mantenimiento de equipos'),
(8, 'Plomero'),
(9, 'Albañil'),
(10, 'Celador'),
(11, 'Jefe de Bodega'),
(12, 'Auxliar de Bodega'),
(13, 'Analista de salarios'),
(14, 'Analista estudio del trabajo'),
(15, 'Analista gestión humana'),
(16, 'Coordinador capacitación'),
(17, 'Consultor recursos humanos'),
(18, 'Coordinador bienestar social'),
(19, 'Coordinador personal'),
(20, 'Analista administrativo'),
(21, 'Asesor, organización y métodos'),
(22, 'Asesor, publicidad '),
(23, 'Asesor, empresas'),
(24, 'Analista ocupacional '),
(25, 'Analista organizacional '),
(26, 'Consultor organizacional'),
(27, 'Analista, organización y métodos '),
(28, 'Jefe,captaciones '),
(29, 'Jefe Atención al Cliente'),
(30, ' Ejecutivo Cuenta'),
(31, 'Gestor Interno'),
(32, ' Gerente de Cuenta '),
(33, ' Coordinador, información y estadística'),
(34, ' Coordinador, call center '),
(35, 'Coordinador, servicio al cliente'),
(36, ' Coordinador, encuestadores '),
(37, ' Supervisor, empleados de información'),
(38, ' Supervisor, call center'),
(39, 'Administrador, bodega '),
(40, 'Coordinador, distribución '),
(41, 'Almacenista '),
(42, ' Jefe, despachos'),
(43, 'Jefe, recepción de mercancías '),
(44, 'Jefe, control de inventarios '),
(45, ' Coordinador, bodega '),
(46, ' Coordinador, rampa'),
(47, ' Supervisor, programadores - rutas y tripulac'),
(48, ' Supervisor, control de tráfico '),
(49, 'Supervisor, almacenamiento'),
(50, 'Supervisor, logística'),
(51, 'Supervisor, servicio de rampa - aeropuerto'),
(52, 'Asistentes de Operaciones '),
(53, 'Auditores de Servicio de Vigilancia '),
(54, 'Auxiliar Centro de Operaciones '),
(55, 'Auxiliar de Investigación '),
(56, 'Auxiliar ambientación '),
(57, 'Auxiliar control de operaciones'),
(58, 'Auxiliar de farmacos'),
(59, 'Ingeniero, análisis y diseño de sistemas'),
(60, 'Ingeniero, sistemas programación'),
(61, 'Ingeniero, sistemas redes y comunicación de d'),
(62, 'Ingeniero, sistemas análisis y diseño Auditor'),
(63, 'Ingeniero, sistemas y computación'),
(64, 'Ingeniero, sistemas e informática'),
(65, 'Ingeniero, desarrollo software'),
(66, 'Ingeniero de sistemas'),
(67, ' Coordinador, proyecto, informático '),
(68, ' Ingeniero, soporte computación'),
(69, 'Analista de sistemas de informacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre_ciudad` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre_ciudad`) VALUES
(5, 'Bogota'),
(6, 'Medellin'),
(7, 'Barranquilla'),
(8, 'Cali'),
(9, 'Cartagena'),
(10, 'Manizales'),
(11, 'Santa Marta'),
(12, 'Cúcuta'),
(13, 'Bucaramanga'),
(14, 'Pereira'),
(15, 'Popayán'),
(16, 'Pasto'),
(17, 'Monteria'),
(18, 'Ibagué'),
(19, 'Armenia'),
(20, 'Valledupar'),
(21, 'Tunja'),
(22, 'Villavicencio'),
(23, 'Neiva'),
(24, 'Riohacha'),
(25, 'Sincelejo'),
(26, 'Buenaventura'),
(27, 'Quibdó'),
(28, 'Barrancabermeja'),
(29, 'Florencia'),
(30, 'Soledad'),
(31, 'Soacha'),
(32, 'Leticia'),
(33, 'Ipiales'),
(34, 'Jamundí'),
(35, 'Zipaquirá'),
(36, 'Yopal'),
(37, 'Girardot');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(11) NOT NULL,
  `id_tipo_contrato` int(11) NOT NULL,
  `id_objeto_contrato` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_tipo_contrato`, `id_objeto_contrato`, `id_institucion`, `id_usuario`) VALUES
(1, 13, 6, 34, 7),
(3, 7, 2, 16, 8),
(4, 11, 3, 12, 9),
(5, 9, 6, 25, 12),
(6, 8, 3, 32, 13),
(7, 7, 6, 9, 14),
(8, 11, 5, 32, 15),
(2, 13, 6, 28, 16),
(9, 10, 2, 28, 17),
(10, 11, 2, 33, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firma_digital`
--

CREATE TABLE `firma_digital` (
  `id_firma_digital` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firma_digital` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `firma_digital`
--

INSERT INTO `firma_digital` (`id_firma_digital`, `nombres`, `apellidos`, `firma_digital`) VALUES
(1, 'Enrique Alberto', 'Quijada Vereti', '/img/firma.png'),
(2, 'Manuel', 'Vazquez Lozano', '/img/firma2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre_genero`) VALUES
(5, 'Masculino'),
(6, 'Femenino'),
(7, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL,
  `nombre_institucion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nit` int(11) DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_institucion`, `nombre_institucion`, `nit`, `telefono`, `direccion`) VALUES
(5, 'Subdirección Regional Centro para la Biodiver', 2147483647, '3510799', 'Calle 12 No 10 - 60 '),
(6, 'Dirección regional Complejo Central Edificio ', 2147483647, '3510799', 'Calle 51 57-70 Medellín '),
(7, 'Complejo sur Centro de Nacional de la Madera ', 2147483647, '3510799', 'Calle 63 58B-03 Barrio Itagüí '),
(8, 'Complejo Norte Centro de Tecnología de la de ', 2147483647, '3510799', 'Calle 104 69-120 Barrio Pedregal '),
(9, 'Centro de los Recursos Naturales Renovables l', 2147483647, '3510799', 'Km.6 Vía Caldas La Pintada'),
(10, 'Centro de la Innovación la Industria y el Tur', 2147483647, '3510799', 'Carrera 48 No. 49-62 Rionegro '),
(11, 'Complejo Tecnológico Agroindustrial Apartado', 2147483647, '3510799', 'Km.1 Salida a Turbo- '),
(12, 'Complejo Norte Centro Nacional Textil Móvil ', 2147483647, '3510799', 'Calle 104 69-120 Barrio Pedregal '),
(13, 'Subdirección Regional Centro de Gestión y Des', 2147483647, '3510799', 'Carrera 20 No. 28 – 163 '),
(14, 'Dirección Regional Centro de Atención Sector ', 2147483647, '3510799', 'Carrera 43- 42-40 '),
(15, ' Centro Nacional Colombo Alemán', 2147483647, '3510799', 'Calle 30 No. 3E-164 '),
(16, 'Casa del Marques ', 2147483647, '3510799', 'Plaza de la Aduana'),
(17, 'Centro Agroempresarial y Minero ', 2147483647, '3510799', 'Ternera, vía a Turbaco Km 1'),
(18, 'Centro para la Industria Petroquímica ', 2147483647, '3510799', 'Av. Pedro de Heredia, sector Tesca'),
(19, 'Centro Náutico Acuícola y Pesquero', 2147483647, '3510799', 'Mamonal Km 5 '),
(20, 'Dirección Regional Centro Industrial de Mante', 2147483647, '3510799', 'Carrera 12 No 55 A-51 '),
(21, 'Centro de Desarrollo Agropecuario y Agroindus', 2147483647, '3510799', 'KM 1 Vía Duitama - Pantano de Vargas Sogamoso'),
(22, 'Centro Minero ', 2147483647, '3510799', 'Vereda Morca Sogamoso'),
(23, 'Centro de Gestión Administrativa y Fortalecim', 2147483647, '3510799', 'Calle 19 No 12 – 29 Tunja '),
(24, 'Dirección Regional Manizales ', 2147483647, '3510799', 'Km. 10 Vía al Magdalena Regional'),
(25, 'Dirección Regional Florencia ', 2147483647, '3510799', 'Kilómetro 3 Vía Aeropuerto – Florencia '),
(26, 'Subdirección Regional Yopal ', 2147483647, '3510799', 'Cra. 19 No.36-68 Yopal '),
(27, 'Dirección Regional Popayán ', 2147483647, '3510799', 'Calle 4 No.2-80 '),
(28, 'Centro Industrial ', 2147483647, '3510799', 'Carrera 9 No. 69-00 Alto Cauca '),
(29, ' Dirección regional Valledupar ', 2147483647, '3510799', 'Carrera 19 entre calle 14 y 15 '),
(30, ' Dirección Regional Quibdó', 2147483647, '3510799', 'Cra. 1 No. 28 - 71 '),
(31, 'Dirección Regional Montería ', 2147483647, '3510799', 'Av. Circunvalar Cls. 24 y 27'),
(32, ' Dirección Regional ', 2147483647, '3510799', 'Diagonal 45 D No 19-72 '),
(33, 'Centro del Desarrollo Agroindustrial y Empres', 2147483647, '3510799', 'Calle 2 No.13-03 Barrio San Rafael '),
(34, 'Sena Sede Colombia', 12454795, '35471111', 'Calle 69 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_contrato`
--

CREATE TABLE `objeto_contrato` (
  `idobjeto_contrato` int(11) NOT NULL,
  `nombre_objeto_contrato` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `objeto_contrato`
--

INSERT INTO `objeto_contrato` (`idobjeto_contrato`, `nombre_objeto_contrato`) VALUES
(1, ' Prestaciones negativas(de no hacer)\r\n'),
(2, 'Prestaciones Positivas(de dar y hacer)'),
(3, 'prestaciones de resultado'),
(4, 'prestaciones por parte del deudor por actividad o conducta positiva'),
(5, 'prestaciones que tienen por objeto la transmisión de un derecho al acreedor|'),
(6, 'prestaciones de medio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obligaciones`
--

CREATE TABLE `obligaciones` (
  `id_obligaciones` int(11) NOT NULL,
  `nombre_obligaciones` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_obligaciones_id_tipo_obligaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `obligaciones`
--

INSERT INTO `obligaciones` (`id_obligaciones`, `nombre_obligaciones`, `tipo_obligaciones_id_tipo_obligaciones`) VALUES
(1, 'Cumplir la legislación vigente y los acuerdos en vigor.\r\n', 1),
(2, 'Tratar al trabajador de forma igualitaria, con independencia del origen, las creencias, el género, la edad o la adscripción política de éste.\r\n', 1),
(3, 'Velar por la seguridad y la salud laboral del trabajador.\r\n', 1),
(4, 'Facilitarle al trabajador información escrita sobre los condicionantes fundamentales del trabajo.\r\n', 1),
(5, 'Favorecer una buena atmósfera de trabajo y el logro de los cometidos del trabajador, así como su desarrollo profesional.\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(5, 'Administrador'),
(6, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `fecha_solicitud` datetime DEFAULT NULL,
  `verificacion` int(11) DEFAULT NULL,
  `usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `fecha_solicitud`, `verificacion`, `usuario_id_usuario`) VALUES
(1, '2019-12-02 04:00:00', 2, 7),
(2, '2019-12-02 16:00:00', 2, 8),
(5, '2019-12-02 04:00:00', 2, 9),
(6, '2019-12-02 16:00:00', 1, 12),
(7, '2019-12-03 13:00:00', 2, 13),
(8, '2019-12-01 02:00:00', 1, 14),
(9, '2019-11-18 07:00:00', 1, 15),
(10, '2019-12-01 01:00:00', 1, 17),
(11, '2019-12-02 02:00:00', 2, 18),
(12, '2019-12-01 11:00:00', 2, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `id_contratos` int(11) NOT NULL,
  `nombre_contrato` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_contrato`
--

INSERT INTO `tipo_contrato` (`id_contratos`, `nombre_contrato`) VALUES
(6, 'Contrato indefinido'),
(7, 'Contrato temporal'),
(8, ' Por obra o servicio'),
(9, 'Eventual'),
(10, 'De interinidad'),
(11, 'De relevo'),
(12, 'De formación y aprendizaje'),
(13, 'Contrato de prácticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `nombre_documento` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `nombre_documento`) VALUES
(5, 'C.C'),
(6, 'C.E'),
(7, 'PA'),
(8, 'RC'),
(9, 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_obligaciones`
--

CREATE TABLE `tipo_obligaciones` (
  `id_tipo_obligaciones` int(11) NOT NULL,
  `tipo_nombre_obligaciones` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_obligaciones`
--

INSERT INTO `tipo_obligaciones` (`id_tipo_obligaciones`, `tipo_nombre_obligaciones`) VALUES
(1, 'Empleador '),
(2, 'Contratador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salario` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad_id_ciudad` int(11) NOT NULL,
  `rol_id_rol` int(11) NOT NULL,
  `cargo_id_cargo` int(11) NOT NULL,
  `genero_id_genero` int(11) NOT NULL,
  `tipo_documento_id_tipo_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres`, `apellidos`, `correo`, `direccion`, `telefono`, `documento`, `salario`, `ciudad_id_ciudad`, `rol_id_rol`, `cargo_id_cargo`, `genero_id_genero`, `tipo_documento_id_tipo_documento`) VALUES
(7, 'David Andres ', 'Hernandez Juajinoy', 'davidjuajinoy@hotmail.com', 'Calle 74 a sur n88 D36', '3507756127', '1000323929', '414000', 5, 6, 24, 5, 9),
(8, 'Alberto', 'Trujillo', 'Alber@gmail.com', 'Calle 86 ', '312456781', '123456771', '1200000', 5, 6, 10, 5, 5),
(9, 'Sandra ', 'Cubillos ', 'sandra@gmail.com', 'Calle 90', '3541237144', '1012561274', '3000000', 8, 6, 22, 6, 5),
(12, 'Enrique', 'Gabiria Nuñes', 'enriquenuñes@gmail.com', 'calle 2', '3012561274', '1234544444', '1200000', 36, 6, 17, 5, 5),
(13, 'Gilberman', 'Gutierrez Muñoz', 'gilbersito@gmail.com', 'calle 5e', '3102561274', '0124077775', '3000000', 37, 5, 27, 5, 5),
(14, 'Yesid', 'Anden Leres', 'Leresandes@gmail.cp,', 'Calle 26 T', '3002561274', '1111666664', '1200000', 35, 6, 6, 5, 5),
(15, 'Juan', 'Aguja Hilo', 'hiloaguja@gmail.com', 'Calle 2 T/A', '3018561274', '1444455552', '3000000', 16, 6, 15, 5, 5),
(16, 'Ana Maria', 'Ortiz Vega', 'anan@gmai.com', 'Cra 88 Av 1', '3012221274', '2524561274', '400000', 9, 6, 13, 5, 9),
(17, 'Rafael', 'Bom zuñiga', 'bumbom@gmail.com', 'Calle 211 n 2', '318561274', '123459874', '1200000', 5, 6, 8, 5, 5),
(18, 'Andrea ', 'Camargo Uribe', 'andreitauroi@gmail.com', 'Calle 11 B88', '3506685127', '6666601240', '8000000', 7, 6, 32, 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion`
--

CREATE TABLE `verificacion` (
  `id_verificacion` int(11) NOT NULL,
  `Estado_verificacion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `verificacion`
--

INSERT INTO `verificacion` (`id_verificacion`, `Estado_verificacion`) VALUES
(1, 'Verficado'),
(2, 'En proceso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`,`id_tipo_contrato`,`id_objeto_contrato`,`id_institucion`),
  ADD KEY `fk_contrato_tipo_contrato1_idx` (`id_tipo_contrato`),
  ADD KEY `fk_contrato_objeto_contrato1_idx` (`id_objeto_contrato`),
  ADD KEY `fk_contrato_institucion1_idx` (`id_institucion`),
  ADD KEY `fk_contrato_usuario1` (`id_usuario`);

--
-- Indices de la tabla `firma_digital`
--
ALTER TABLE `firma_digital`
  ADD PRIMARY KEY (`id_firma_digital`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_institucion`);

--
-- Indices de la tabla `objeto_contrato`
--
ALTER TABLE `objeto_contrato`
  ADD PRIMARY KEY (`idobjeto_contrato`) USING BTREE;

--
-- Indices de la tabla `obligaciones`
--
ALTER TABLE `obligaciones`
  ADD PRIMARY KEY (`id_obligaciones`,`tipo_obligaciones_id_tipo_obligaciones`),
  ADD KEY `fk_obligaciones_tipo_obligaciones1_idx` (`tipo_obligaciones_id_tipo_obligaciones`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`,`usuario_id_usuario`),
  ADD KEY `fk_solicitud_usuario1_idx` (`usuario_id_usuario`),
  ADD KEY `verificacion` (`verificacion`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`id_contratos`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_obligaciones`
--
ALTER TABLE `tipo_obligaciones`
  ADD PRIMARY KEY (`id_tipo_obligaciones`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`,`ciudad_id_ciudad`,`rol_id_rol`,`cargo_id_cargo`,`genero_id_genero`,`tipo_documento_id_tipo_documento`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `fk_usuario_ciudad_idx` (`ciudad_id_ciudad`),
  ADD KEY `fk_usuario_rol1_idx` (`rol_id_rol`),
  ADD KEY `fk_usuario_cargo1_idx` (`cargo_id_cargo`),
  ADD KEY `fk_usuario_genero1_idx` (`genero_id_genero`),
  ADD KEY `fk_usuario_tipo_documento1_idx` (`tipo_documento_id_tipo_documento`);

--
-- Indices de la tabla `verificacion`
--
ALTER TABLE `verificacion`
  ADD PRIMARY KEY (`id_verificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `firma_digital`
--
ALTER TABLE `firma_digital`
  MODIFY `id_firma_digital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `obligaciones`
--
ALTER TABLE `obligaciones`
  MODIFY `id_obligaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  MODIFY `id_contratos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `verificacion`
--
ALTER TABLE `verificacion`
  MODIFY `id_verificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_contrato_institucion1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id_institucion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contrato_objeto_contrato1` FOREIGN KEY (`id_objeto_contrato`) REFERENCES `objeto_contrato` (`idobjeto_contrato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contrato_tipo_contrato1` FOREIGN KEY (`id_tipo_contrato`) REFERENCES `tipo_contrato` (`id_contratos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contrato_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `obligaciones`
--
ALTER TABLE `obligaciones`
  ADD CONSTRAINT `fk_obligaciones_tipo_obligaciones1` FOREIGN KEY (`tipo_obligaciones_id_tipo_obligaciones`) REFERENCES `tipo_obligaciones` (`id_tipo_obligaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `fk_solicitud_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`verificacion`) REFERENCES `verificacion` (`id_verificacion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_cargo1` FOREIGN KEY (`cargo_id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_ciudad` FOREIGN KEY (`ciudad_id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_genero1` FOREIGN KEY (`genero_id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipo_documento1` FOREIGN KEY (`tipo_documento_id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
