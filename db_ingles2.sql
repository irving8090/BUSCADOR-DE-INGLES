-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2024 a las 08:46:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ingles2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `matricula` varchar(30) NOT NULL,
  `nombre` text NOT NULL,
  `nivel` text NOT NULL,
  `espacio` text NOT NULL,
  `grupo` text NOT NULL,
  `cuatrimestre` text NOT NULL,
  `profesor` text NOT NULL,
  `classroom` text NOT NULL,
  `oxford` text NOT NULL,
  `estatus` text NOT NULL,
  `horario` text NOT NULL,
  `tutor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `matricula`, `nombre`, `nivel`, `espacio`, `grupo`, `cuatrimestre`, `profesor`, `classroom`, `oxford`, `estatus`, `horario`, `tutor`) VALUES
(1, '2521360021', 'IRVING', 'ELEMENTARY', 'ZB-02', '1IN11', 'PRIMERO', 'KARLA', 'HGFHLD', '45864615', 'REGULAR', 'MAR Y MIE 14:00', 'CARLOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_admin` int(11) NOT NULL,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_admin`, `nombre`, `email`, `password`) VALUES
(1, 'AdminCi', 'AdminCi', '12345'),
(2, 'Admin', 'AdminCi@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
