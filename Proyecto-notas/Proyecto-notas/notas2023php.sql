-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2023 a las 02:13:19
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
-- Base de datos: `notas2023php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `ID_DOCENTE` int(15) NOT NULL,
  `NOMBRED` varchar(60) NOT NULL,
  `APELLIDOD` varchar(60) NOT NULL,
  `DOCUMENTOD` varchar(12) NOT NULL,
  `CORREOD` varchar(40) NOT NULL,
  `MATERIAD` varchar(30) NOT NULL,
  `PERFILD` varchar(50) NOT NULL,
  `ESTADOD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`ID_DOCENTE`, `NOMBRED`, `APELLIDOD`, `DOCUMENTOD`, `CORREOD`, `MATERIAD`, `PERFILD`, `ESTADOD`) VALUES
(2, 'Juan', 'Bandera', '1203129312', 'Jbandera@gmail.com', 'Español', 'Administrador', 'Activo'),
(3, 'asdadad', 'asdasda', '1231231', 'asdasdads@qweqwe', 'Ingles', 'Docente', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_ESTUDIANTE` int(15) NOT NULL,
  `NOMBREE` varchar(60) NOT NULL,
  `APELLIDOE` varchar(60) NOT NULL,
  `DOCUMENTOE` varchar(12) NOT NULL,
  `CORREOE` varchar(60) NOT NULL,
  `MATERIAE` varchar(30) NOT NULL,
  `DOCENTE` varchar(60) NOT NULL,
  `PROMEDIO` int(3) NOT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID_MATERIA` int(15) NOT NULL,
  `MATERIA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID_MATERIA`, `MATERIA`) VALUES
(6, 'Ingles'),
(7, 'asdasdasdadasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_estudiante`
--

CREATE TABLE `notas_estudiante` (
  `ID` int(11) NOT NULL,
  `ID_ESTUDIANTESS` int(15) NOT NULL,
  `ID_MATERIASS` int(15) NOT NULL,
  `ID_DOCENTESS` int(15) NOT NULL,
  `PUNTAJE` decimal(5,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIOS` int(11) NOT NULL,
  `NOMBREUSU` varchar(60) NOT NULL,
  `APELLIDOUSU` varchar(60) NOT NULL,
  `USUARIO` varchar(40) NOT NULL,
  `PASSWORDU` varchar(80) NOT NULL,
  `PERFIL` varchar(30) NOT NULL,
  `ESTADO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIOS`, `NOMBREUSU`, `APELLIDOUSU`, `USUARIO`, `PASSWORDU`, `PERFIL`, `ESTADO`) VALUES
(14, 'asdasda', 'asdasd', 'asdads', 'asdasdad', 'Administrador', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`ID_DOCENTE`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID_MATERIA`);

--
-- Indices de la tabla `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_ESTUDIANTESS` (`ID_ESTUDIANTESS`),
  ADD KEY `ID_MATERIASS` (`ID_MATERIASS`),
  ADD KEY `ID_DOCENTESS` (`ID_DOCENTESS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIOS`),
  ADD UNIQUE KEY `USUARIO` (`USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `ID_DOCENTE` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `ID_ESTUDIANTE` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID_MATERIA` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
  ADD CONSTRAINT `notas_estudiante_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTESS`) REFERENCES `estudiantes` (`ID_ESTUDIANTE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiante_ibfk_2` FOREIGN KEY (`ID_MATERIASS`) REFERENCES `materias` (`ID_MATERIA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiante_ibfk_3` FOREIGN KEY (`ID_DOCENTESS`) REFERENCES `docentes` (`ID_DOCENTE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
