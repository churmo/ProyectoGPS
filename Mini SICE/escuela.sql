-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2018 a las 21:50:03
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `ApellidoPaterno` varchar(30) NOT NULL,
  `ApellidoMaterno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`) VALUES
(1, 'Juan Carlos', 'Hurtado', 'Morales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumnos` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido Paterno` varchar(20) NOT NULL,
  `Apellido Materno` varchar(20) NOT NULL,
  `Fecha_De_Nacimiento` date NOT NULL,
  `CicloEscolar` varchar(9) DEFAULT NULL,
  `Grado` varchar(7) NOT NULL,
  `Grupo` varchar(1) NOT NULL,
  `CURP` varchar(17) DEFAULT NULL,
  `Domicilio` varchar(35) NOT NULL,
  `Localidad` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `CodigoPostal` varchar(5) NOT NULL,
  `numeroTelefono` varchar(15) DEFAULT NULL,
  `CorreoElectronico` varchar(80) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `Estatus` enum('Activo','Baja','Egresado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumnos`, `Nombre`, `Apellido Paterno`, `Apellido Materno`, `Fecha_De_Nacimiento`, `CicloEscolar`, `Grado`, `Grupo`, `CURP`, `Domicilio`, `Localidad`, `Municipio`, `CodigoPostal`, `numeroTelefono`, `CorreoElectronico`, `FechaInicio`, `Estatus`) VALUES
(1, 'roberto', 'almanza', 'vergara', '1993-10-17', '2013-2034', 'Primero', 'b', 'n', 'Calle domingo', 'El bordo', 'Moroleon', '38800', '47634', 'lol@hotmail.com', '2013-03-03', 'Activo'),
(2, 'Efrain Jared', 'Ramirez', 'Diaz', '1996-09-17', '2013-2034', 'Primero', 'b', '', 'Calle domingo', 'El bordo', 'Moroleon', '38800', '45709750', 'jaredefrain@hola.com', '2013-03-03', 'Activo'),
(4, 'Cristian', 'almanza', 'vergara', '0000-00-00', '2013-2034', 'primero', 'b', '', 'Calle domingo ', 'El bordo', 'Moroleon', '38800', '', 'nel', '2013-03-03', 'Activo'),
(5, 'Jose', 'Nub', 'juarez', '0000-00-00', '2013-2034', 'Primero', 'a', 'no tiene', 'Calle domingo', 'El bordo', 'Moroleon', '38800', '349587394857', '', '2013-03-03', 'Activo'),
(7, 'Mario', 'Marelos', 'Pito', '0000-00-00', '2013-2035', 'segundo', 'a', '', 'calle lunes ', 'Liz', 'Moroleon', '38800', '3', '', '2013-03-03', 'Activo'),
(8, 'Juan', 'Perez', 'Lopez', '1998-10-20', '2013-2035', 'primero', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(9, 'Mariana ', 'Paniagua', 'Perez', '1998-10-20', '2013-2035', 'primero', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(11, 'Nuzeth', 'Lopez', 'Romero', '1998-10-20', '2013-2035', 'primero', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(12, 'Paloma', 'Lopez', 'Romero', '1998-10-20', '2013-2035', 'primero', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(14, 'Guadalupe', 'Perez', 'Perez', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(15, 'Nancy', 'Quintana', 'Quintana', '1998-10-20', '2013-2035', 'primero', 'a', '', 'calle pipila', 'Centro', 'Moroleon', '38800', '', '', '2013-03-03', 'Activo'),
(16, 'Jorge', 'Guzman', 'Ramos', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(17, 'Pedro', 'Lopez', 'Perez', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(18, 'Yudith', 'abonce', 'Martinez', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(19, 'Carina', 'Lopez', 'Garcia', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(20, 'Efrain Jared', 'Garcia', 'Nava', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', 'dos', NULL, '2013-03-03', 'Activo'),
(21, 'Luisa', 'Gutierrez ', 'Navarro', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(22, 'Jose', 'Lopez', 'Acosta', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(23, 'Chispa', 'Rivera', 'Alcantar', '1998-10-20', '2013-2035', 'primero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(24, 'Cruz', 'Tapia', 'Tapioca', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(26, 'Cristian', 'Ramirez', 'Lopez', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(27, 'Yudith', 'almanza', 'Martinez', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(28, 'Juan', 'Rojas', 'almanza', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(29, 'Yudith', 'Rivera', 'Alcantar', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(30, 'Jesus', 'Jaime', 'Perez', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(31, 'Cristian', 'Ramirez', 'Azul', '1998-10-20', '2013-2035', 'primero', 'c', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(32, 'Fernando', 'Diaz', 'Rojo', '1998-10-20', '2013-2035', 'segundo', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(33, 'Paloma', 'Noches', 'Ariza', '1998-10-20', '2013-2035', 'segundo', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(34, 'roberto', 'Araiza', 'Guerrero', '1998-10-20', '2013-2035', 'segundo', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(35, 'Francisco', 'Gerrero', 'Romero', '1998-10-20', '2013-2035', 'segundo', 'a', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(36, 'Yudith', 'Romero', 'Gutierrez', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(37, 'Jose', 'Ramirez', 'almanza', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(38, 'Armando', 'Gutierrez', 'Naranja', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(39, 'Zahyra', 'Sandoval ', 'Aguado', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(40, 'Jazmin', 'Fernandez', 'Perez', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(41, 'roberto', 'Jaime', 'Fernandes', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(42, 'Alejandro', 'Rivera', 'Ruiz', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(43, 'Alejandra', 'Ruiz', 'Martinez', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(44, 'Cristian', 'Ramirez', 'Quintana', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(45, 'Martin', 'Ariza', 'almanza', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(46, 'Mario', 'Calderon', 'Garcia', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(47, 'roberto', 'Alvarez', 'Ariza', '1998-10-20', '2013-2035', 'segundo', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(48, 'Yudith', 'Ramirez', 'Nuñez', '1998-10-20', '2013-2035', 'tercero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(49, 'Cristian', 'Rivera', 'Nuñez', '1998-10-20', '2013-2035', 'tercero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(50, 'roberto', 'Muñez', 'almanza', '1998-10-20', '2013-2035', 'tercero', 'b', NULL, 'calle pipila #12', 'Centro', 'Moroleon', '38800', NULL, NULL, '2013-03-03', 'Activo'),
(51, '', 'w', '', '0000-00-00', '2018-2024', 'Primero', 'a', '', '', '', '', 'codig', '', '', '2018-11-06', 'Activo'),
(52, '', 'd', '', '0000-00-00', '2018-2024', 'Primero', 'a', '', '', '', '', 'codig', '', '', '2018-11-06', 'Activo'),
(53, 'Nuzeth', 'Lopez', 'Romero', '0000-00-00', '2018-2024', 'primero', 'a', '', 'calle pipila #12', 'Centro', 'Moroleon', 'codig', '88787', '', '2018-11-06', 'Activo'),
(54, 'roberto', 'almanza', 'vergara', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '88787', '', '2018-11-06', 'Activo'),
(55, 'roberto', 'almanza', 'vergara', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '33333', '', '2018-11-06', 'Activo'),
(56, 'roberto', 'almanza', 'vergara', '0000-00-00', '2018-2024', '', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '', '', '2018-11-06', 'Activo'),
(57, 'Efrain Jared', 'Ramirez', 'Diaz', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '4570975', '', '2018-11-06', 'Activo'),
(58, 'roberto', 'almanzar', 'vergara', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '', '', '2018-11-06', 'Activo'),
(59, 'Jose', 'Nub', 'juarez', '0000-00-00', '2018-2024', 'segundo', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', 'ddfsdf', '', '2018-11-06', 'Activo'),
(60, 'Efrain Jared', 'Ramirez', 'Diaz', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '34', '', '2018-11-06', 'Activo'),
(61, 'Efrain Jared', 'Ramirez', 'Diaz', '0000-00-00', '2018-2024', '', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '', '', '2018-11-06', 'Activo'),
(62, 'Efrain Jared', 'Ramirez', 'Diaz', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '', '', '2018-11-06', 'Activo'),
(63, 'Efrain Jared', 'Ramirez', 'Diaz', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '', '', '2018-11-06', 'Activo'),
(64, 'roberto', 'almanza', 'vergara', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '34', '', '2018-11-06', 'Activo'),
(65, 'Efrain Jared', 'Ramirez', 'Diaz', '0000-00-00', '2018-2024', 'primero', 'a', '', 'Calle domingo #293', 'El bordo', 'Moroleon', 'codig', '4570975', '', '2018-11-06', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `idCalificaciones` int(11) NOT NULL,
  `Calificacion` float NOT NULL,
  `Bimestre` varchar(1) NOT NULL,
  `Fecha_De_Registro` date NOT NULL,
  `idAlumnos` int(11) NOT NULL,
  `idMaterias` int(11) NOT NULL,
  `idMaestros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`idCalificaciones`, `Calificacion`, `Bimestre`, `Fecha_De_Registro`, `idAlumnos`, `idMaterias`, `idMaestros`) VALUES
(1, 10, '1', '2014-10-10', 1, 1, 1),
(2, 10, '2', '2014-10-10', 1, 1, 1),
(3, 7, '3', '2014-10-10', 1, 1, 1),
(5, 10, '4', '2014-10-10', 1, 1, 1),
(6, 7, '5', '2014-10-10', 1, 1, 1),
(7, 10, '1', '2017-01-01', 2, 1, 1),
(8, 9, '2', '2017-05-30', 2, 1, 1),
(9, 10, '5', '2017-10-10', 2, 1, 1),
(10, 7, '4', '2017-05-30', 2, 1, 1),
(11, 10, '3', '2017-10-10', 2, 1, 1),
(12, 10, '1', '2017-05-30', 1, 1, 1),
(13, 1, '1', '2017-05-30', 18, 1, 1),
(14, 2, '2', '2017-05-30', 18, 1, 1),
(15, 10, '3', '2017-05-30', 18, 1, 1),
(16, 4, '4', '2017-05-30', 18, 1, 1),
(17, 5, '5', '2017-05-30', 18, 1, 1),
(30, 5, '2', '2017-00-00', 17, 4, 1),
(31, 10, '1', '2017-00-00', 1, 1, 1),
(32, 5, '1', '2017-00-00', 1, 2, 1),
(33, 4, '1', '2017-00-00', 1, 3, 1),
(34, 8, '1', '2017-00-00', 1, 4, 1),
(35, 6, '1', '2017-00-00', 1, 5, 1),
(36, 9, '2', '2017-00-00', 1, 1, 1),
(37, 6, '2', '2017-00-00', 1, 2, 1),
(38, 7, '2', '2017-00-00', 1, 3, 1),
(39, 9, '2', '2017-00-00', 1, 4, 1),
(40, 5, '2', '2017-00-00', 1, 5, 1),
(41, 7, '3', '2017-00-00', 1, 1, 1),
(42, 8, '3', '2017-00-00', 1, 2, 1),
(43, 7, '3', '2017-00-00', 1, 3, 1),
(44, 5, '3', '2017-00-00', 1, 4, 1),
(45, 9, '3', '2017-00-00', 1, 5, 1),
(46, 10, '4', '2017-00-00', 1, 1, 1),
(47, 9, '4', '2017-00-00', 1, 2, 1),
(48, 8, '4', '2017-00-00', 1, 3, 1),
(49, 6, '4', '2017-00-00', 1, 4, 1),
(50, 10, '4', '2017-00-00', 1, 5, 1),
(51, 4, '5', '2017-00-00', 1, 1, 1),
(52, 5, '5', '2017-00-00', 1, 2, 1),
(53, 3, '5', '2017-00-00', 1, 3, 1),
(54, 2, '5', '2017-00-00', 1, 4, 1),
(55, 1, '5', '2017-00-00', 1, 5, 1),
(56, 10, '1', '2017-00-00', 32, 6, 2),
(57, 7, '1', '2017-00-00', 32, 7, 2),
(58, 1, '1', '2017-00-00', 32, 8, 2),
(59, 5, '1', '2017-00-00', 32, 9, 2),
(60, 10, '1', '2017-00-00', 32, 10, 2),
(61, 9, '2', '2017-00-00', 32, 6, 2),
(62, 6, '2', '2017-00-00', 32, 7, 2),
(63, 2, '2', '2017-00-00', 32, 8, 2),
(64, 6, '2', '2017-00-00', 32, 9, 2),
(65, 9, '2', '2017-00-00', 32, 10, 2),
(66, 8, '3', '2017-00-00', 32, 6, 2),
(67, 7, '3', '2017-00-00', 32, 7, 2),
(68, 6, '3', '2017-00-00', 32, 8, 2),
(69, 7, '3', '2017-00-00', 32, 9, 2),
(70, 0, '3', '2017-00-00', 32, 10, 2),
(71, 10, '4', '2017-00-00', 32, 6, 2),
(72, 10, '4', '2017-00-00', 32, 7, 2),
(73, 10, '4', '2017-00-00', 32, 8, 2),
(74, 10, '4', '2017-00-00', 32, 9, 2),
(75, 10, '4', '2017-00-00', 32, 10, 2),
(76, 0, '5', '2017-00-00', 32, 6, 2),
(77, 3, '5', '2017-00-00', 32, 7, 2),
(78, 4, '5', '2017-00-00', 32, 8, 2),
(79, 5, '5', '2017-00-00', 32, 9, 2),
(80, 5, '5', '2017-00-00', 32, 10, 2),
(81, 6, '1', '2017-00-00', 50, 11, 3),
(82, 8, '1', '2017-00-00', 50, 12, 3),
(83, 10, '1', '2017-00-00', 50, 13, 3),
(84, 10, '1', '2017-00-00', 50, 14, 3),
(85, 3, '1', '2017-00-00', 50, 15, 3),
(86, 7, '2', '2017-00-00', 50, 11, 3),
(87, 9, '2', '2017-00-00', 50, 12, 3),
(88, 8, '2', '2017-00-00', 50, 13, 3),
(89, 7, '2', '2017-00-00', 50, 14, 3),
(90, 10, '2', '2017-00-00', 50, 15, 3),
(91, 4, '3', '2017-00-00', 50, 11, 3),
(92, 3, '3', '2017-00-00', 50, 12, 3),
(93, 4, '3', '2017-00-00', 50, 13, 3),
(94, 9, '3', '2017-00-00', 50, 14, 3),
(95, 8, '3', '2017-00-00', 50, 15, 3),
(96, 9, '4', '2017-00-00', 50, 11, 3),
(97, 8, '4', '2017-00-00', 50, 12, 3),
(98, 7, '4', '2017-00-00', 50, 13, 3),
(99, 9, '4', '2017-00-00', 50, 14, 3),
(100, 9, '4', '2017-00-00', 50, 15, 3),
(101, 10, '5', '2017-00-00', 50, 11, 3),
(102, 10, '5', '2017-00-00', 50, 12, 3),
(103, 10, '5', '2017-00-00', 50, 13, 3),
(104, 10, '5', '2017-00-00', 50, 14, 3),
(105, 10, '5', '2017-00-00', 50, 15, 3),
(106, 9, '1', '2017-00-00', 2, 1, 1),
(107, 7, '1', '2017-00-00', 2, 2, 1),
(108, 8, '1', '2017-00-00', 2, 3, 1),
(109, 7, '1', '2017-00-00', 2, 4, 1),
(110, 6, '1', '2017-00-00', 2, 5, 1),
(111, 6, '2', '2017-00-00', 2, 1, 1),
(112, 5, '2', '2017-00-00', 2, 2, 1),
(113, 9, '2', '2017-00-00', 2, 3, 1),
(114, 9, '2', '2017-00-00', 2, 4, 1),
(115, 8, '2', '2017-00-00', 2, 5, 1),
(116, 6, '3', '2017-00-00', 2, 1, 1),
(117, 8, '3', '2017-00-00', 2, 2, 1),
(118, 9, '3', '2017-00-00', 2, 3, 1),
(119, 7, '3', '2017-00-00', 2, 4, 1),
(120, 10, '3', '2017-00-00', 2, 5, 1),
(121, 9, '4', '2017-00-00', 2, 1, 1),
(122, 9, '4', '2017-00-00', 2, 2, 1),
(123, 8, '4', '2017-00-00', 2, 3, 1),
(124, 8, '4', '2017-00-00', 2, 4, 1),
(125, 7, '4', '2017-00-00', 2, 5, 1),
(126, 10, '5', '2017-00-00', 2, 1, 1),
(127, 10, '5', '2017-00-00', 2, 2, 1),
(128, 9, '5', '2017-00-00', 2, 3, 1),
(129, 9, '5', '2017-00-00', 2, 4, 1),
(130, 9, '5', '2017-00-00', 2, 5, 1),
(131, 6, '1', '2017-00-00', 4, 1, 1),
(132, 7, '1', '2017-00-00', 4, 2, 1),
(133, 8, '1', '2017-00-00', 4, 3, 1),
(134, 9, '1', '2017-00-00', 4, 4, 1),
(135, 10, '1', '2017-00-00', 4, 5, 1),
(136, 10, '2', '2017-00-00', 4, 1, 1),
(137, 9, '2', '2017-00-00', 4, 2, 1),
(138, 8, '2', '2017-00-00', 4, 3, 1),
(139, 7, '2', '2017-00-00', 4, 4, 1),
(140, 6, '2', '2017-00-00', 4, 5, 1),
(141, 10, '3', '2017-00-00', 4, 1, 1),
(142, 9, '3', '2017-00-00', 4, 2, 1),
(143, 10, '3', '2017-00-00', 4, 3, 1),
(144, 9, '3', '2017-00-00', 4, 4, 1),
(145, 10, '3', '2017-00-00', 4, 5, 1),
(146, 6, '4', '2017-00-00', 4, 1, 1),
(147, 5, '4', '2017-00-00', 4, 2, 1),
(148, 7, '4', '2017-00-00', 4, 3, 1),
(149, 8, '4', '2017-00-00', 4, 4, 1),
(150, 9, '4', '2017-00-00', 4, 5, 1),
(151, 7, '5', '2017-00-00', 4, 1, 1),
(152, 8, '5', '2017-00-00', 4, 2, 1),
(153, 9, '5', '2017-00-00', 4, 3, 1),
(154, 7, '5', '2017-00-00', 4, 4, 1),
(155, 6, '5', '2017-00-00', 4, 5, 1),
(156, 5, '1', '2017-00-00', 33, 6, 2),
(157, 6, '1', '2017-00-00', 33, 7, 2),
(158, 5, '1', '2017-00-00', 33, 8, 2),
(159, 0, '1', '2017-00-00', 33, 9, 2),
(160, 7, '1', '2017-00-00', 33, 10, 2),
(161, 6, '2', '2017-00-00', 33, 6, 2),
(162, 7, '2', '2017-00-00', 33, 7, 2),
(163, 6, '2', '2017-00-00', 33, 8, 2),
(164, 6, '2', '2017-00-00', 33, 9, 2),
(165, 5, '2', '2017-00-00', 33, 10, 2),
(166, 5, '3', '2017-00-00', 33, 6, 2),
(167, 6, '3', '2017-00-00', 33, 7, 2),
(168, 6, '3', '2017-00-00', 33, 8, 2),
(169, 6, '3', '2017-00-00', 33, 9, 2),
(170, 5, '3', '2017-00-00', 33, 10, 2),
(171, 7, '4', '2017-00-00', 33, 6, 2),
(172, 5, '4', '2017-00-00', 33, 7, 2),
(173, 6, '4', '2017-00-00', 33, 8, 2),
(174, 7, '4', '2017-00-00', 33, 9, 2),
(175, 7, '4', '2017-00-00', 33, 10, 2),
(176, 8, '5', '2017-00-00', 33, 6, 2),
(177, 7, '5', '2017-00-00', 33, 7, 2),
(178, 7, '5', '2017-00-00', 33, 8, 2),
(179, 8, '5', '2017-00-00', 33, 9, 2),
(180, 6, '5', '2017-00-00', 33, 10, 2),
(181, 10, '1', '2017-00-00', 34, 6, 2),
(182, 8, '1', '2017-00-00', 34, 7, 2),
(183, 10, '1', '2017-00-00', 34, 8, 2),
(184, 10, '1', '2017-00-00', 34, 9, 2),
(185, 10, '1', '2017-00-00', 34, 10, 2),
(186, 10, '2', '2017-00-00', 34, 6, 2),
(187, 9, '2', '2017-00-00', 34, 7, 2),
(188, 10, '2', '2017-00-00', 34, 8, 2),
(189, 9, '2', '2017-00-00', 34, 9, 2),
(190, 10, '2', '2017-00-00', 34, 10, 2),
(191, 10, '3', '2017-00-00', 34, 6, 2),
(192, 10, '3', '2017-00-00', 34, 7, 2),
(193, 10, '3', '2017-00-00', 34, 8, 2),
(194, 10, '3', '2017-00-00', 34, 9, 2),
(195, 10, '3', '2017-00-00', 34, 10, 2),
(196, 10, '4', '2017-00-00', 34, 6, 2),
(197, 9, '4', '2017-00-00', 34, 7, 2),
(198, 10, '4', '2017-00-00', 34, 8, 2),
(199, 10, '4', '2017-00-00', 34, 9, 2),
(200, 10, '4', '2017-00-00', 34, 10, 2),
(201, 10, '5', '2017-00-00', 34, 6, 2),
(202, 10, '5', '2017-00-00', 34, 7, 2),
(203, 10, '5', '2017-00-00', 34, 8, 2),
(204, 10, '5', '2017-00-00', 34, 9, 2),
(205, 10, '5', '2017-00-00', 34, 10, 2),
(206, 10, '1', '2017-00-00', 34, 6, 2),
(207, 8, '1', '2017-00-00', 34, 7, 2),
(208, 10, '1', '2017-00-00', 34, 8, 2),
(209, 10, '1', '2017-00-00', 34, 9, 2),
(210, 10, '1', '2017-00-00', 34, 10, 2),
(211, 10, '2', '2017-00-00', 34, 6, 2),
(212, 9, '2', '2017-00-00', 34, 7, 2),
(213, 10, '2', '2017-00-00', 34, 8, 2),
(214, 9, '2', '2017-00-00', 34, 9, 2),
(215, 10, '2', '2017-00-00', 34, 10, 2),
(216, 10, '3', '2017-00-00', 34, 6, 2),
(217, 10, '3', '2017-00-00', 34, 7, 2),
(218, 10, '3', '2017-00-00', 34, 8, 2),
(219, 10, '3', '2017-00-00', 34, 9, 2),
(220, 10, '3', '2017-00-00', 34, 10, 2),
(221, 10, '4', '2017-00-00', 34, 6, 2),
(222, 9, '4', '2017-00-00', 34, 7, 2),
(223, 10, '4', '2017-00-00', 34, 8, 2),
(224, 10, '4', '2017-00-00', 34, 9, 2),
(225, 10, '4', '2017-00-00', 34, 10, 2),
(226, 10, '5', '2017-00-00', 34, 6, 2),
(227, 10, '5', '2017-00-00', 34, 7, 2),
(228, 10, '5', '2017-00-00', 34, 8, 2),
(229, 10, '5', '2017-00-00', 34, 9, 2),
(230, 10, '5', '2017-00-00', 34, 10, 2),
(231, 10, '1', '2017-00-00', 48, 11, 3),
(232, 10, '1', '2017-00-00', 48, 12, 3),
(233, 10, '1', '2017-00-00', 48, 13, 3),
(234, 10, '1', '2017-00-00', 48, 14, 3),
(235, 10, '1', '2017-00-00', 48, 15, 3),
(236, 10, '2', '2017-00-00', 48, 11, 3),
(237, 10, '2', '2017-00-00', 48, 12, 3),
(238, 10, '2', '2017-00-00', 48, 13, 3),
(239, 10, '2', '2017-00-00', 48, 14, 3),
(240, 10, '2', '2017-00-00', 48, 15, 3),
(241, 10, '3', '2017-00-00', 48, 11, 3),
(242, 10, '3', '2017-00-00', 48, 12, 3),
(243, 10, '3', '2017-00-00', 48, 13, 3),
(244, 10, '3', '2017-00-00', 48, 14, 3),
(245, 10, '3', '2017-00-00', 48, 15, 3),
(246, 10, '4', '2017-00-00', 48, 11, 3),
(247, 9, '4', '2017-00-00', 48, 12, 3),
(248, 10, '4', '2017-00-00', 48, 13, 3),
(249, 10, '4', '2017-00-00', 48, 14, 3),
(250, 10, '4', '2017-00-00', 48, 15, 3),
(251, 9, '5', '2017-00-00', 48, 11, 3),
(252, 10, '5', '2017-00-00', 48, 12, 3),
(253, 9, '5', '2017-00-00', 48, 13, 3),
(254, 9, '5', '2017-00-00', 48, 14, 3),
(255, 9, '5', '2017-00-00', 48, 15, 3),
(256, 8, '1', '2017-00-00', 49, 11, 3),
(257, 7, '1', '2017-00-00', 49, 12, 3),
(258, 9, '1', '2017-00-00', 49, 13, 3),
(259, 10, '1', '2017-00-00', 49, 14, 3),
(260, 10, '1', '2017-00-00', 49, 15, 3),
(261, 9, '2', '2017-00-00', 49, 11, 3),
(262, 8, '2', '2017-00-00', 49, 12, 3),
(263, 7, '2', '2017-00-00', 49, 13, 3),
(264, 10, '2', '2017-00-00', 49, 14, 3),
(265, 10, '2', '2017-00-00', 49, 15, 3),
(266, 8, '3', '2017-00-00', 49, 11, 3),
(267, 8, '3', '2017-00-00', 49, 12, 3),
(268, 8, '3', '2017-00-00', 49, 13, 3),
(269, 9, '3', '2017-00-00', 49, 14, 3),
(270, 10, '3', '2017-00-00', 49, 15, 3),
(271, 9, '4', '2017-00-00', 49, 11, 3),
(272, 9, '4', '2017-00-00', 49, 12, 3),
(273, 8, '4', '2017-00-00', 49, 13, 3),
(274, 10, '4', '2017-00-00', 49, 14, 3),
(275, 10, '4', '2017-00-00', 49, 15, 3),
(276, 10, '5', '2017-00-00', 49, 11, 3),
(277, 10, '5', '2017-00-00', 49, 12, 3),
(278, 10, '5', '2017-00-00', 49, 13, 3),
(279, 10, '5', '2017-00-00', 49, 14, 3),
(280, 10, '5', '2017-00-00', 49, 15, 3),
(281, 9, '2', '2017-00-00', 18, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparten`
--

CREATE TABLE `imparten` (
  `Anio` varchar(4) NOT NULL,
  `Grupo` varchar(1) DEFAULT NULL,
  `idMaterias` int(11) NOT NULL,
  `idMaestros` int(11) NOT NULL,
  `idImparten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imparten`
--

INSERT INTO `imparten` (`Anio`, `Grupo`, `idMaterias`, `idMaestros`, `idImparten`) VALUES
('2017', 'b', 1, 1, 1),
('2014', 'a', 2, 1, 2),
('2012', 'b', 4, 1, 3),
('2011', 'c', 2, 1, 4),
('2017', 'b', 3, 1, 10),
('2017', 'b', 2, 1, 11),
('2017', 'b', 4, 1, 12),
('2017', 'b', 5, 1, 13),
('2017', 'a', 6, 2, 14),
('2017', 'a', 7, 2, 15),
('2017', 'a', 8, 2, 16),
('2017', 'a', 9, 2, 17),
('2017', 'a', 10, 2, 18),
('2017', 'b', 11, 3, 19),
('2017', 'b', 12, 3, 20),
('2017', 'b', 13, 3, 21),
('2017', 'b', 14, 3, 22),
('2017', 'b', 15, 3, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `idMaestros` int(11) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `ApellidoMaterno` varchar(30) NOT NULL,
  `ApellidoPaterno` varchar(30) NOT NULL,
  `NumeroHoras` int(11) NOT NULL,
  `NivelEstudios` varchar(50) NOT NULL,
  `Domicilio` varchar(60) NOT NULL,
  `numeroTelefono` varchar(20) DEFAULT NULL,
  `CorreoElectronico` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`idMaestros`, `Sexo`, `FechaNacimiento`, `Nombre`, `ApellidoMaterno`, `ApellidoPaterno`, `NumeroHoras`, `NivelEstudios`, `Domicilio`, `numeroTelefono`, `CorreoElectronico`) VALUES
(1, 'Masculino', '1976-10-09', 'Juan Armando', 'Perez', 'Delta', 19, 'ingeniero en sistemas', 'calle Honduras #43', '4451278833', NULL),
(2, 'Masculino', '1977-10-09', 'Marcelo', 'pan', 'vino', 19, 'ingeniero en sistemas', 'calle Honduras #43', '4451278833', NULL),
(3, 'Masculino', '1977-10-09', 'Luis', 'Lobillo', 'perez', 19, 'ingeniero en sistemas', 'calle Honduras #43', '4451278833', NULL),
(4, 'Femenino', '1977-10-09', 'Liz', 'Garcia', 'Garcia', 19, 'ingeniero en sistemas', 'calle Honduras #43', '4451278833', NULL),
(5, 'Masculino', '1990-10-10', 'Carlos', 'Hurtado', 'Morales', 0, 'Secundaria', 'Calle San miguel num 2', '922 392929', 'notiene@gmail.com'),
(8, 'Masculino', '1990-10-10', 'Jose', 'vergara', 'Ramirez', 0, 'Bachillerato', 'Calle domingo ', '33333', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `idMaterias` int(11) NOT NULL,
  `Grado` varchar(7) NOT NULL,
  `NombreDeMateria` varchar(20) NOT NULL,
  `TipoDeMateria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMaterias`, `Grado`, `NombreDeMateria`, `TipoDeMateria`) VALUES
(1, 'Primero', 'Español 1', 'Normal'),
(2, 'Primero', 'Matematicas 1', 'Normal'),
(3, 'Primero', 'Geografia 1', 'Normal'),
(4, 'Primero', 'Historia 1', 'Normal'),
(5, 'Primero', 'Biologia 1', 'Normal'),
(6, 'Segundo', 'Español 2', 'Normal'),
(7, 'Segundo', 'Matematicas 2', 'Normal'),
(8, 'Segundo', 'Geografia 2', 'Normal'),
(9, 'Segundo', 'Biologia 2', 'Normal'),
(10, 'Segundo', 'Historia 2', 'Normal'),
(11, 'Tercero', 'Español 3', 'Normal'),
(12, 'Tercero', 'Matematicas 3', 'Normal'),
(13, 'Tercero', 'Geografia 3', 'Normal'),
(14, 'Tercero', 'Historia 3', 'Normal'),
(15, 'Tercero', 'Biologia 3', 'Normal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumnos`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`idCalificaciones`),
  ADD KEY `fk_calificaciones_alumnos1_idx` (`idAlumnos`),
  ADD KEY `fk_calificaciones_materias1_idx` (`idMaterias`),
  ADD KEY `fk_calificaciones_maestros1_idx` (`idMaestros`);

--
-- Indices de la tabla `imparten`
--
ALTER TABLE `imparten`
  ADD PRIMARY KEY (`idImparten`),
  ADD KEY `fk_imparten_materias1_idx` (`idMaterias`),
  ADD KEY `fk_imparten_maestros1_idx` (`idMaestros`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`idMaestros`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMaterias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `idCalificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT de la tabla `imparten`
--
ALTER TABLE `imparten`
  MODIFY `idImparten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `idMaestros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMaterias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_calificaciones_alumnos1` FOREIGN KEY (`idAlumnos`) REFERENCES `alumnos` (`idAlumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_maestros1` FOREIGN KEY (`idMaestros`) REFERENCES `maestros` (`idMaestros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_materias1` FOREIGN KEY (`idMaterias`) REFERENCES `materias` (`idMaterias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `imparten`
--
ALTER TABLE `imparten`
  ADD CONSTRAINT `fk_imparten_maestros1` FOREIGN KEY (`idMaestros`) REFERENCES `maestros` (`idMaestros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_imparten_materias1` FOREIGN KEY (`idMaterias`) REFERENCES `materias` (`idMaterias`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
