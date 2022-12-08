-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 08-12-2022 a las 15:56:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dieleclab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `id_equipo` int(99) NOT NULL,
  `marca_equipo` varchar(255) NOT NULL,
  `ano_equipo` int(99) NOT NULL,
  `serie_equipo` varchar(255) NOT NULL,
  `volat_equipo` varchar(255) NOT NULL,
  `volbt_equipo` varchar(255) NOT NULL,
  `volter_equipo` varchar(255) NOT NULL,
  `pote1_equipo` varchar(255) NOT NULL,
  `pote2_equipo` varchar(255) NOT NULL,
  `pote3_equipo` varchar(255) NOT NULL,
  `refrig_equipo` varchar(45) NOT NULL,
  `fluido_equipo` varchar(45) NOT NULL,
  `marcfluid_equipo` varchar(45) NOT NULL,
  `cliente_equipo` varchar(45) NOT NULL,
  `num_informe_quimico` int(99) NOT NULL,
  `num_informe_gases` int(99) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date NOT NULL,
  `nota_pedido` int(50) NOT NULL,
  `num_neutralizacion` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `densidad` varchar(45) NOT NULL,
  `factor_potencia_cien` decimal(45,0) NOT NULL,
  `resistividad_vol` decimal(45,0) NOT NULL,
  `rigidez1816` decimal(45,0) NOT NULL,
  `rigidez877` decimal(45,0) NOT NULL,
  `rigidez0370` decimal(45,0) NOT NULL,
  `examen_visual` decimal(45,0) NOT NULL,
  `nitrogeno` decimal(45,0) NOT NULL,
  `oxigeno` decimal(45,0) NOT NULL,
  `dioxido_co` decimal(45,0) NOT NULL,
  `monoxido_co` decimal(45,0) NOT NULL,
  `hidrogeno` decimal(45,0) NOT NULL,
  `metano` decimal(45,0) NOT NULL,
  `etano` decimal(45,0) NOT NULL,
  `etileno` decimal(45,0) NOT NULL,
  `acetilico` decimal(45,0) NOT NULL,
  `propano` decimal(45,0) NOT NULL,
  `propileno` decimal(45,0) NOT NULL,
  `total_gs_combustibles` decimal(45,0) NOT NULL,
  `total_gases` decimal(45,0) NOT NULL,
  `denominacion` varchar(45) NOT NULL,
  `pcbs` varchar(45) NOT NULL,
  `azufre1275` varchar(45) NOT NULL,
  `azufre62535` varchar(45) NOT NULL,
  `azufre_papel` varchar(45) NOT NULL,
  `dbds` varchar(10) NOT NULL,
  `viscosidad_40` decimal(30,0) NOT NULL,
  `viscosidad_100` decimal(30,0) NOT NULL,
  `furano` varchar(45) NOT NULL,
  `particulas` varchar(45) NOT NULL,
  `id_analisis` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(99) NOT NULL,
  `marca_equipo` varchar(255) NOT NULL,
  `ano_equipo` int(99) NOT NULL,
  `serie_equipo` varchar(255) NOT NULL,
  `volat_equipo` varchar(255) NOT NULL,
  `volbt_equipo` varchar(255) NOT NULL,
  `volter_equipo` varchar(255) NOT NULL,
  `pote1_equipo` varchar(255) NOT NULL,
  `pote2_equipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `marca_equipo`, `ano_equipo`, `serie_equipo`, `volat_equipo`, `volbt_equipo`, `volter_equipo`, `pote1_equipo`, `pote2_equipo`) VALUES
(1, 'Vasile', 2004, '19196', '44000/12000', '-', '-', '1500', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `direccion` varchar(99) NOT NULL,
  `num_fiscal` int(99) NOT NULL,
  `mail` varchar(99) NOT NULL,
  `user_registro` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
