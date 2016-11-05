-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2016 a las 18:01:33
-- Versión del servidor: 10.1.18-MariaDB
-- Versión de PHP: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planillacloud`
--
CREATE DATABASE IF NOT EXISTS `planillacloud` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `planillacloud`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `tel_local` varchar(50) NOT NULL,
  `tel_personal` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `salario` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `fecha_contratacion`, `correo`, `cedula`, `nacionalidad`, `tel_local`, `tel_personal`, `cargo`, `salario`) VALUES
(1, 'Rodolfo', 'Lozano', '2016-10-27', '2016-10-27', 'skannt@gmail.com', '23712150', 'Venezolano', '23712150', '1231231213', 'programador', 5000.00),
(2, 'Pedro', 'Perez', '1992-02-19', '2016-10-28', 'skadasd@gmail.com', '31231812', 'Aleman', '2312321', '21312312', 'Vendedor', 50212.00),
(5, 'Juan', 'Garcia', '1990-06-26', '2016-11-05', 'juan_garcia@hotmail.com', '8-231-3124', 'Colombiana', '231-3123', '6739-2391', 'Contador', 1000.00),
(6, 'Maria Alejandra', 'Gonzales Garcia', '1984-02-21', '2016-11-05', 'maria@gmail.com', '23181239', 'Panama', '2313-2812', '6738-9212', 'Asesora', 3000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
