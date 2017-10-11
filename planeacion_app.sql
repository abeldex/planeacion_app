-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2017 a las 23:26:06
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planeacion_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`) VALUES
(1, 'Planeación y Proyectos Estrategicos'),
(2, 'Centro de Cómputo'),
(3, 'Secretaría Académica'),
(4, 'Secretaría Administrativa'),
(5, 'Dirección'),
(6, 'Tutorías y Proyectos Institucionales'),
(7, 'Vinculación y Difusión'),
(8, 'Control Escolar'),
(9, 'Posgrado'),
(10, 'Servicio Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id_meta` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `año` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `departamento` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `departamento`, `Nombre`, `correo`, `telefono`) VALUES
(1, 'planeacion', 'planeacion', 1, 'José Carlos Beltrán González', 'correo@correo.com', 'telefono'),
(2, 'computo', 'computo', 2, 'Jesús Abel Cota Dimas', 'abelcota@uas.edu.mx', '6674686649'),
(5, 'mario', 'mario', 2, 'José Mario Mario Rojo Navarro', 'marionavarro@uas.edu.mx', '6671974652'),
(6, 'sec_academica', 'sec_academica', 3, 'Anibal Israel Arana Medina', 'anibal.arana@uas.edu.mx', '6679963904'),
(7, 'sec_administrativa', 'sec_administrativa', 4, 'Roberto Kishan Singh Cebreros', 'robertokishan@uas.edu.mx', '6671837859'),
(8, 'direccion', 'direccion', 5, 'Wenseslao Plata Rocha', 'wenses@uas.edu.mx', '6673037849'),
(9, 'tutorias', 'tutorias', 6, 'Dalia Delgado Damas', 'daliadelgado@uas.edu.mx', '6671675491'),
(10, 'vinculacion', 'vinculacion', 7, 'Adelina Escobar Acevedo', 'adelina.escobar@uas.edu.mx', '6671028438'),
(11, 'control_escolar', 'control_escolar', 8, 'Ana Lucía Salazar Villa', 'anasalazar@uas.edu.mx', '-'),
(12, 'posgrado', 'posgrado', 9, 'Thania Félix González', 'thaniafelix@uas.edu.mx', '6671311974'),
(16, 'ssocial', 'ssocial', 10, 'Iván Escalante Mondaca', 'ivanescalante@uas.edu.mx', '6672170263');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
