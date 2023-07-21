-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-07-2023 a las 17:09:16
-- Versión del servidor: 8.0.30-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pun2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accions`
--

CREATE TABLE `accions` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `denominacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `representativa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acumulable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `um_accion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cant_ene` int DEFAULT NULL,
  `cant_feb` int DEFAULT NULL,
  `cant_mar` int DEFAULT NULL,
  `cant_abr` int DEFAULT NULL,
  `cant_may` int DEFAULT NULL,
  `cant_jun` int DEFAULT NULL,
  `cant_jul` int DEFAULT NULL,
  `cant_ago` int DEFAULT NULL,
  `cant_set` int DEFAULT NULL,
  `cant_oct` int DEFAULT NULL,
  `cant_nov` int DEFAULT NULL,
  `cant_dic` int DEFAULT NULL,
  `total_eje` int DEFAULT NULL,
  `eje_ene` int DEFAULT NULL,
  `eje_feb` int DEFAULT NULL,
  `eje_mar` int DEFAULT NULL,
  `eje_abr` int DEFAULT NULL,
  `eje_may` int DEFAULT NULL,
  `eje_jun` int DEFAULT NULL,
  `eje_jul` int DEFAULT NULL,
  `eje_ago` int DEFAULT NULL,
  `eje_set` int DEFAULT NULL,
  `eje_oct` int DEFAULT NULL,
  `eje_nov` int DEFAULT NULL,
  `eje_dic` int DEFAULT NULL,
  `id_tarea` bigint UNSIGNED NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividads`
--

CREATE TABLE `actividads` (
  `id` bigint UNSIGNED NOT NULL,
  `cod_ugel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad_medida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fisica` decimal(9,2) DEFAULT NULL,
  `financiera` decimal(9,2) DEFAULT NULL,
  `acumulable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `um_accion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cant_ene` int DEFAULT NULL,
  `cant_feb` int DEFAULT NULL,
  `cant_mar` int DEFAULT NULL,
  `cant_abr` int DEFAULT NULL,
  `cant_may` int DEFAULT NULL,
  `cant_jun` int DEFAULT NULL,
  `cant_jul` int DEFAULT NULL,
  `cant_ago` int DEFAULT NULL,
  `cant_set` int DEFAULT NULL,
  `cant_oct` int DEFAULT NULL,
  `cant_nov` int DEFAULT NULL,
  `cant_dic` int DEFAULT NULL,
  `id_area` bigint UNSIGNED NOT NULL,
  `fecha_aprobacion` datetime DEFAULT NULL,
  `observacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` bigint DEFAULT NULL,
  `aprobado` bigint UNSIGNED NOT NULL DEFAULT '1' COMMENT '1:creado 2:aprobado 3:denegado',
  `apm` decimal(9,2) DEFAULT NULL,
  `da` decimal(9,2) DEFAULT NULL,
  `necesidad_total` decimal(9,2) DEFAULT NULL,
  `denominacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `implementacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `id_cadena` bigint UNSIGNED NOT NULL,
  `id_objetivo` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_politica` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `cod_ugel`, `cc`, `descripcion`, `unidad_medida`, `fisica`, `financiera`, `acumulable`, `um_accion`, `total_prog`, `cant_ene`, `cant_feb`, `cant_mar`, `cant_abr`, `cant_may`, `cant_jun`, `cant_jul`, `cant_ago`, `cant_set`, `cant_oct`, `cant_nov`, `cant_dic`, `id_area`, `fecha_aprobacion`, `observacion`, `fase`, `id_admin`, `aprobado`, `apm`, `da`, `necesidad_total`, `denominacion`, `localizacion`, `implementacion`, `created_at`, `updated_at`, `estado`, `id_cadena`, `id_objetivo`, `id_politica`) VALUES
(1, '03', '0011', 'dddd2', '1', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'ddddd', 'Lima', 'dddd3', '2023-07-19 09:07:31', '2023-07-19 09:07:31', '1', 8, '1802', '2002'),
(2, '03', '0011', 'agebre2', '457', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'agebre', 'Lima', 'agebvre implementacion', '2023-07-19 09:07:40', '2023-07-19 09:07:40', '1', 2, '1206', '1902');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cadenafuncionales`
--

CREATE TABLE `cadenafuncionales` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `funcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div_fun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gru_fun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cadenafuncionales`
--

INSERT INTO `cadenafuncionales` (`id`, `created_at`, `updated_at`, `funcion`, `div_fun`, `gru_fun`, `categoria`, `programa`, `prod`, `act`, `finalidad`, `meta`, `area`, `estado`) VALUES
(2, '2023-05-25 14:21:01', '2023-05-25 14:21:01', '22', '047', '0103', '', '0090', '3000385', '5005628', '0161001', '0001', 'app', '1'),
(3, '2023-05-25 14:21:02', '2023-05-25 14:21:02', '22', '047', '0103', '', '0090', '3000385', '5005628', '0161001', '0002', 'app', '1'),
(4, '2023-05-25 14:21:03', '2023-05-25 14:21:03', '22', '047', '0103', '', '0090', '3000385', '5005628', '0267929', '0003', 'app', '1'),
(5, '2023-05-25 14:21:04', '2023-05-25 14:21:04', '22', '047', '0104', '', '0090', '3000385', '5005628', '0161001', '0004', 'app', '1'),
(6, '2023-05-25 14:21:05', '2023-05-25 14:21:05', '22', '047', '0104', '', '0090', '3000385', '5005628', '0267929', '0005', 'app', '1'),
(7, '2023-05-25 14:21:06', '2023-05-25 14:21:06', '22', '047', '0104', '', '0090', '3000385', '5005628', '0303595', '0006', 'app', '1'),
(8, '2023-05-25 14:21:07', '2023-05-25 14:21:07', '22', '047', '0104', '', '0090', '3000385', '5005628', '0303596', '0007', 'app', '1'),
(9, '2023-05-25 14:21:08', '2023-05-25 14:21:08', '22', '047', '0105', '', '0090', '3000385', '5005628', '0161001', '0008', 'app', '1'),
(10, '2023-05-25 14:21:09', '2023-05-25 14:21:09', '22', '047', '0105', '', '0090', '3000385', '5005628', '0267929', '0009', 'app', '1'),
(11, '2023-05-25 14:21:10', '2023-05-25 14:21:10', '22', '047', '0105', '', '0090', '3000385', '5005628', '0303596', '0010', 'app', '1'),
(12, '2023-05-25 14:21:11', '2023-05-25 14:21:11', '22', '047', '0103', '', '0090', '3000385', '5005629', '0161002', '0011', 'app', '1'),
(13, '2023-05-25 14:21:12', '2023-05-25 14:21:12', '22', '047', '0104', '', '0090', '3000385', '5005629', '0161002', '0012', 'app', '1'),
(14, '2023-05-25 14:21:13', '2023-05-25 14:21:13', '22', '047', '0105', '', '0090', '3000385', '5005629', '0161002', '0013', 'app', '1'),
(15, '2023-05-25 14:21:14', '2023-05-25 14:21:14', '22', '047', '0103', '', '0090', '3000385', '5005943', '0188339', '0014', 'app', '1'),
(16, '2023-05-25 14:21:15', '2023-05-25 14:21:15', '22', '047', '0104', '', '0090', '3000385', '5005943', '0188339', '0015', 'app', '1'),
(17, '2023-05-25 14:21:16', '2023-05-25 14:21:16', '22', '047', '0105', '', '0090', '3000385', '5005943', '0188339', '0016', 'app', '1'),
(18, '2023-05-25 14:21:17', '2023-05-25 14:21:17', '22', '047', '0103', '', '0090', '3000387', '5005642', '0161015', '0017', 'app', '1'),
(19, '2023-05-25 14:21:18', '2023-05-25 14:21:18', '22', '047', '0104', '', '0090', '3000387', '5005642', '0161015', '0018', 'app', '1'),
(20, '2023-05-25 14:21:19', '2023-05-25 14:21:19', '22', '047', '0105', '', '0090', '3000387', '5005642', '0161015', '0019', 'app', '1'),
(21, '2023-05-25 14:21:20', '2023-05-25 14:21:20', '22', '047', '0104', '', '0090', '3000387', '5005644', '0161017', '0020', 'app', '1'),
(22, '2023-05-25 14:21:21', '2023-05-25 14:21:21', '22', '047', '0107', '', '0106', '3000790', '5004308', '0188124', '0021', 'app', '1'),
(23, '2023-05-25 14:21:22', '2023-05-25 14:21:22', '22', '047', '0107', '', '0106', '3000790', '5005877', '0188123', '0022', 'app', '1'),
(24, '2023-05-25 14:21:23', '2023-05-25 14:21:23', '22', '047', '0107', '', '0106', '3000790', '5005877', '0267929', '0023', 'app', '1'),
(25, '2023-05-25 14:21:24', '2023-05-25 14:21:24', '22', '004', '0005', '', '9001', '3999999', '5000001', '0007979', '0024', 'app', '1'),
(26, '2023-05-25 14:21:25', '2023-05-25 14:21:25', '22', '006', '0007', '', '9001', '3999999', '5000002', '0039103', '0025', 'app', '1'),
(27, '2023-05-25 14:21:26', '2023-05-25 14:21:26', '22', '006', '0008', '', '9001', '3999999', '5000003', '0053123', '0026', 'app', '1'),
(28, '2023-05-25 14:21:27', '2023-05-25 14:21:27', '22', '006', '0008', '', '9001', '3999999', '5000003', '0267929', '0027', 'app', '1'),
(29, '2023-05-25 14:21:28', '2023-05-25 14:21:28', '22', '006', '0008', '', '9001', '3999999', '5000004', '0039096', '0028', 'app', '1'),
(30, '2023-05-25 14:21:29', '2023-05-25 14:21:29', '22', '006', '0011', '', '9001', '3999999', '5000005', '0053154', '0029', 'app', '1'),
(31, '2023-05-25 14:21:30', '2023-05-25 14:21:30', '22', '006', '0012', '', '9001', '3999999', '5000006', '0000870', '0030', 'app', '1'),
(32, '2023-05-25 14:21:31', '2023-05-25 14:21:31', '22', '049', '0112', '', '9002', '3999999', '5000661', '0000305', '0031', 'app', '1'),
(33, '2023-05-25 14:21:32', '2023-05-25 14:21:32', '22', '049', '0112', '', '9002', '3999999', '5000661', '0267929', '0032', 'app', '1'),
(34, '2023-05-25 14:21:33', '2023-05-25 14:21:33', '22', '047', '0106', '', '9002', '3999999', '5000683', '0000308', '0033', 'app', '1'),
(35, '2023-05-25 14:21:34', '2023-05-25 14:21:34', '22', '047', '0104', '', '9002', '3999999', '5001227', '0259565', '0034', 'app', '1'),
(36, '2023-05-25 14:21:35', '2023-05-25 14:21:35', '22', '047', '0104', '', '9002', '3999999', '5001227', '0259566', '0035', 'app', '1'),
(37, '2023-05-25 14:21:36', '2023-05-25 14:21:36', '22', '049', '0112', '', '9002', '3999999', '5001227', '0259567', '0036', 'app', '1'),
(38, '2023-05-25 14:21:37', '2023-05-25 14:21:37', '22', '047', '0106', '', '9002', '3999999', '5000681', '0000310', '0037', 'app', '1'),
(39, '2023-05-25 14:21:38', '2023-05-25 14:21:38', '22', '047', '0104', '', '0090', '3000743', '5003128', '0077322', '0038', 'app', '1'),
(40, '2023-05-25 14:21:39', '2023-05-25 14:21:39', '22', '047', '0107', '', '0106', '3000789', '5003164', '0077358', '0039', 'app', '1'),
(41, '2023-05-25 14:21:40', '2023-05-25 14:21:40', '22', '047', '0107', '', '0106', '3000789', '5003166', '0077360', '0040', 'app', '1'),
(42, '2023-05-25 14:21:41', '2023-05-25 14:21:41', '22', '047', '0107', '', '0106', '3000789', '5003169', '0077363', '0041', 'app', '1'),
(43, '2023-05-25 14:21:42', '2023-05-25 14:21:42', '22', '047', '0107', '', '0106', '3000791', '5005882', '0188129', '0042', 'app', '1'),
(44, '2023-05-25 14:21:43', '2023-05-25 14:21:43', '22', '047', '0107', '', '0106', '3000792', '5003165', '0077359', '0043', 'app', '1'),
(45, '2023-05-25 14:21:44', '2023-05-25 14:21:44', '22', '047', '0107', '', '0106', '3000792', '5003168', '0077362', '0044', 'app', '1'),
(46, '2023-05-25 14:21:45', '2023-05-25 14:21:45', '22', '047', '0107', '', '0106', '3000793', '5004307', '0106965', '0045', 'app', '1'),
(47, '2023-05-25 14:21:46', '2023-05-25 14:21:46', '22', '047', '0107', '', '0106', '3000793', '5005875', '0188132', '0046', 'app', '1'),
(48, '2023-05-25 14:21:47', '2023-05-25 14:21:47', '22', '047', '0105', '', '9002', '3999999', '5005692', '0000607', '0047', 'app', '1'),
(49, '2023-05-25 14:21:48', '2023-05-25 14:21:48', '22', '047', '0104', '', '0090', '3000387', '5005644', '0161017', '0048', 'app', '1'),
(50, '2023-05-25 14:21:49', '2023-05-25 14:21:49', '22', '006', '0008', '', '9002', '3999999', '5003934', '0260416', '0049', 'app', '1'),
(51, '2023-05-25 14:21:50', '2023-05-25 14:21:50', '22', '047', '0104', '', '0090', '3000385', '5005629', '0291045', '0050', 'app', '1'),
(52, '2023-05-25 14:21:51', '2023-05-25 14:21:51', '22', '006', '0008', '', '9001', '3999999', '5000003', '0334300', '0051', 'app', '1'),
(53, '2023-05-25 14:21:52', '2023-05-25 14:21:52', '24', '052', '0116', '', '9002', '3999999', '5000991', '0000305', '0052', 'app', '1'),
(54, '2023-05-25 14:21:53', '2023-05-25 14:21:53', '24', '052', '0116', '', '9002', '3999999', '5000991', '0001153', '0053', 'app', '1'),
(55, '2023-05-25 14:21:54', '2023-05-25 14:21:54', '22', '047', '0104', '', '9002', '3999999', '5001933', '0005546', '0054', 'app', '1'),
(56, '2023-05-25 14:21:55', '2023-05-25 14:21:55', '22', '047', '0103', '', '0090', '3000385', '5005628', '0334300', '0055', 'app', '1'),
(57, '2023-05-25 14:21:56', '2023-05-25 14:21:56', '22', '047', '0104', '', '0090', '3000385', '5005628', '0334300', '0056', 'app', '1'),
(58, '2023-05-25 14:21:57', '2023-05-25 14:21:57', '22', '047', '0104', '', '9002', '3999999', '5006374', '0342470', '0057', 'app', '1'),
(59, '2023-05-25 14:21:58', '2023-05-25 14:21:58', '22', '047', '0103', '', '0090', '3000385', '5005629', '0161002', '0058', 'app', '1'),
(60, '2023-05-25 14:21:59', '2023-05-25 14:21:59', '22', '047', '0104', '', '0090', '3000385', '5005629', '0161002', '0059', 'app', '1'),
(61, '2023-05-25 14:21:00', '2023-05-25 14:21:00', '22', '047', '0105', '', '0090', '3000385', '5005629', '0161002', '0060', 'app', '1'),
(62, '2023-05-26 14:21:00', '2023-05-26 14:21:00', '22', '047', '0107', '', '0106', '3000790', '5004308', '0188124', '0061', 'app', '1'),
(63, '2023-05-27 14:21:00', '2023-05-27 14:21:00', '22', '047', '0106', '', '9002', '3999999', '5000681', '0267929', '0062', 'app', '1'),
(64, '2023-05-28 14:21:00', '2023-05-28 14:21:00', '24', '052', '0116', '', '9002', '3999999', '5000991', '0001153', '0063', 'app', '1'),
(65, '2023-05-29 14:21:00', '2023-05-29 14:21:00', '22', '047', '0106', '', '9002', '3999999', '5001924', '0106960', '0064', 'app', '1'),
(66, '2023-05-30 14:21:00', '2023-05-30 14:21:00', '22', '006', '0008', '', '9002', '3999999', '5006267', '0000870', '0065', 'app', '1'),
(67, '2023-05-31 14:21:00', '2023-05-31 14:21:00', '22', '047', '0105', '', '0090', '3000385', '5005628', '0334300', '0066', 'app', '1'),
(68, '2023-06-01 14:21:00', '2023-06-01 14:21:00', '22', '047', '0107', '', '0106', '3000790', '5005877', '0334300', '0067', 'app', '1'),
(69, '2023-06-02 14:21:00', '2023-06-02 14:21:00', '22', '047', '0103', '', '0090', '3000385', '5005628', '0161001', '0068', 'app', '1'),
(70, '2023-06-03 14:21:00', '2023-06-03 14:21:00', '22', '047', '0107', '', '0106', '3000790', '5005877', '0188123', '0069', 'app', '1'),
(71, '2023-06-04 14:21:00', '2023-06-04 14:21:00', '22', '049', '0112', '', '9002', '3999999', '5000661', '0334300', '0070', 'app', '1'),
(72, '2023-06-05 14:21:00', '2023-06-05 14:21:00', '22', '047', '0106', '', '9002', '3999999', '5000681', '0334300', '0071', 'app', '1'),
(73, '2023-06-06 14:21:00', '2023-06-06 14:21:00', '22', '006', '0008', '', '9001', '3999999', '5000003', '0000009', '0072', 'app', '1'),
(74, '2023-06-07 14:21:00', '2023-06-07 14:21:00', '22', '047', '0105', '', '0090', '3000385', '5005943', '0348747', '0073', 'app', '1'),
(75, '2023-06-08 14:21:00', '2023-06-08 14:21:00', '22', '006', '0008', '', '9001', '3999999', '5000003', '0291045', '0074', 'app', '1'),
(76, '2023-06-09 14:21:00', '2023-06-09 14:21:00', '22', '047', '0104', '', '9002', '3999999', '5001227', '0291045', '0075', 'app', '1'),
(77, '2023-06-10 14:21:00', '2023-06-10 14:21:00', '22', '047', '0104', '', '9002', '3999999', '5001227', '0291045', '0076', 'app', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_accions`
--

CREATE TABLE `detalle_accions` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `accion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acumulable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `um_accion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_prog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cant_ene` int NOT NULL,
  `cant_feb` int NOT NULL,
  `cant_mar` int NOT NULL,
  `cant_abr` int NOT NULL,
  `cant_may` int NOT NULL,
  `cant_jun` int NOT NULL,
  `cant_jul` int NOT NULL,
  `cant_ago` int NOT NULL,
  `cant_set` int NOT NULL,
  `cant_oct` int NOT NULL,
  `cant_nov` int NOT NULL,
  `cant_dic` int NOT NULL,
  `total_eje` int NOT NULL,
  `eje_ene` int NOT NULL,
  `eje_feb` int NOT NULL,
  `eje_mar` int NOT NULL,
  `eje_abr` int NOT NULL,
  `eje_may` int NOT NULL,
  `eje_jun` int NOT NULL,
  `eje_jul` int NOT NULL,
  `eje_ago` int NOT NULL,
  `eje_set` int NOT NULL,
  `eje_oct` int NOT NULL,
  `eje_nov` int NOT NULL,
  `eje_dic` int NOT NULL,
  `id_accions` bigint UNSIGNED NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_recursos`
--

CREATE TABLE `detalle_recursos` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `recurso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clasificador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acumulable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `um_recurso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cant_ene` int NOT NULL,
  `cant_feb` int NOT NULL,
  `cant_mar` int NOT NULL,
  `cant_abr` int NOT NULL,
  `cant_may` int NOT NULL,
  `cant_jun` int NOT NULL,
  `cant_jul` int NOT NULL,
  `cant_ago` int NOT NULL,
  `cant_set` int NOT NULL,
  `cant_oct` int NOT NULL,
  `cant_nov` int NOT NULL,
  `cant_dic` int NOT NULL,
  `total_fisico` int NOT NULL,
  `cert_ene` int NOT NULL,
  `cert_feb` int NOT NULL,
  `cert_mar` int NOT NULL,
  `cert_abr` int NOT NULL,
  `cert_may` int NOT NULL,
  `cert_jun` int NOT NULL,
  `cert_jul` int NOT NULL,
  `cert_ago` int NOT NULL,
  `cert_set` int NOT NULL,
  `cert_oct` int NOT NULL,
  `cert_nov` int NOT NULL,
  `cert_dic` int NOT NULL,
  `total_cert_prog` int NOT NULL,
  `dev_ene` int NOT NULL,
  `dev_feb` int NOT NULL,
  `dev_mar` int NOT NULL,
  `dev_abr` int NOT NULL,
  `dev_may` int NOT NULL,
  `dev_jun` int NOT NULL,
  `dev_jul` int NOT NULL,
  `dev_ago` int NOT NULL,
  `dev_set` int NOT NULL,
  `dev_oct` int NOT NULL,
  `dev_nov` int NOT NULL,
  `dev_dic` int NOT NULL,
  `total_dev_prog` int NOT NULL,
  `eje_cert_ene` int NOT NULL,
  `eje_cert_feb` int NOT NULL,
  `eje_cert_mar` int NOT NULL,
  `eje_cert_abr` int NOT NULL,
  `eje_cert_may` int NOT NULL,
  `eje_cert_jun` int NOT NULL,
  `eje_cert_jul` int NOT NULL,
  `eje_cert_ago` int NOT NULL,
  `eje_cert_set` int NOT NULL,
  `eje_cert_oct` int NOT NULL,
  `eje_cert_nov` int NOT NULL,
  `eje_cert_dic` int NOT NULL,
  `total_eje_cert_prog` int NOT NULL,
  `eje_dev_ene` int NOT NULL,
  `eje_dev_feb` int NOT NULL,
  `eje_dev_mar` int NOT NULL,
  `eje_dev_abr` int NOT NULL,
  `eje_dev_may` int NOT NULL,
  `eje_dev_jun` int NOT NULL,
  `eje_dev_jul` int NOT NULL,
  `eje_dev_ago` int NOT NULL,
  `eje_dev_set` int NOT NULL,
  `eje_dev_oct` int NOT NULL,
  `eje_dev_nov` int NOT NULL,
  `eje_dev_dic` int NOT NULL,
  `total_eje_dev_prog` int NOT NULL,
  `id_recursos` bigint UNSIGNED NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `descripcion`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'formulación', '2023-07-19 21:38:22', '2023-07-19 21:38:22', '1'),
(2, 'ejecución', '2023-07-19 21:38:22', '2023-07-19 21:38:22', '1'),
(3, 'consistencia', '2023-07-19 21:38:22', '2023-07-19 21:38:22', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_03_201946_create_periodos_table', 1),
(6, '2023_05_03_210143_create_unidad_operativas_table', 1),
(7, '2023_05_03_211955_create_estados_table', 1),
(8, '2023_05_03_211956_create_objetivos_table', 1),
(9, '2023_05_03_211957_create_cadenafuncionales_table', 1),
(10, '2023_05_03_211958_create_politicas_table', 1),
(11, '2023_05_03_212627_create_actividads_table', 1),
(12, '2023_05_03_213613_create_tareas_table', 1),
(13, '2023_05_03_213619_create_accions_table', 1),
(14, '2023_05_03_213624_create_recursos_table', 1),
(15, '2023_05_03_213628_create_detalle_recursos_table', 1),
(16, '2023_05_03_213633_create_detalle_accions_table', 1),
(17, '2023_05_03_213637_create_registros_table', 1),
(18, '2023_05_25_162857_create_unidadmedidas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accion` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`id`, `objetivo`, `accion`, `estado`, `created_at`, `updated_at`) VALUES
('1100', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', '', '1', '2023-05-25 14:50:00', '2023-05-25 14:50:00'),
('1101', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', 'Estrategias efectivas para la implementación del Currículo Nacional de Educación Básica para la reducción de brechas en los aprendizajes de los estudiantes', '1', '2023-05-26 14:50:00', '2023-05-26 14:50:00'),
('1102', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', 'Formas de atención educativa efectivas para la reducción de brechas de aprendizaje de los estudiantes de Educación Básica', '1', '2023-05-27 14:50:00', '2023-05-27 14:50:00'),
('1103', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', 'Servicio educativo eficaz para estudiantes con desempeño sobresaliente y alto rendimiento en la Educación Básica', '1', '2023-05-28 14:50:00', '2023-05-28 14:50:00'),
('1104', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', 'Estrategias efectivas que incrementen la cobertura en la matrícula de los estudiantes de Educación Básica', '1', '2023-05-29 14:50:00', '2023-05-29 14:50:00'),
('1105', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', 'Sistema de evaluación integral de los aprendizajes de estudiantes de Educación Básica', '1', '2023-05-30 14:50:00', '2023-05-30 14:50:00'),
('1106', 'Fortalecer el desarrollo de aprendizajes de calidad según el Currículo Nacional para estudiantes de Educación Básica', 'Servicio de calidad en Educación Básica en II.EE. públicas de Lima Metropolitana', '1', '2023-05-31 14:50:00', '2023-05-31 14:50:00'),
('1200', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', '', '1', '2023-06-01 14:50:00', '2023-06-01 14:50:00'),
('1201', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Sistemas de información implementados en las instituciones de educación técnico-productiva y superior tecnológica, artística y universitaria', '1', '2023-06-02 14:50:00', '2023-06-02 14:50:00'),
('1202', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Programa de optimización de la oferta de Educación Superior Tecnológica para el aseguramiento de la calidad y la pertinencia', '1', '2023-06-03 14:50:00', '2023-06-03 14:50:00'),
('1203', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Programas de estudio de Educación técnico-productiva y superior tecnológica vinculados con el sector productivo', '1', '2023-06-04 14:50:00', '2023-06-04 14:50:00'),
('1204', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Programa de fortalecimiento de capacidades efectivo de docentes de educación técnico-productiva y superior tecnológica y artística', '1', '2023-06-05 14:50:00', '2023-06-05 14:50:00'),
('1205', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Programa de fortalecimiento de capacidades efectivo de directivos de educación técnico- productiva y superior tecnológica y artística', '1', '2023-06-06 14:50:00', '2023-06-06 14:50:00'),
('1206', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Institutos de Excelencia implementados según modelo en todos los departamentos del país', '1', '2023-06-07 14:50:00', '2023-06-07 14:50:00'),
('1207', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Marco normativo aprobado para el aseguramiento y la promoción de la calidad de la educación superior universitaria', '1', '2023-06-08 14:50:00', '2023-06-08 14:50:00'),
('1208', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior ', 'Mecanismos de fomento efectivos para la mejora continua de la calidad del servicio educativo universitario', '1', '2023-06-09 14:50:00', '2023-06-09 14:50:00'),
('1209', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior (tecnológica, artística y universitaria)', 'Programa de becas y crédito educativo efectivo para el acceso a educación técnicoproductiva y superior de calidad de jóvenes con alto rendimiento académico y de bajos o insuficientes recursos económicos', '1', '2023-06-10 14:50:00', '2023-06-10 14:50:00'),
('1210', 'Fortalecer el acceso a una formación de calidad con equidad en los estudiantes de la educación técnico-productiva y superior (tecnológica, artística y universitaria)', 'Servicio de Educación Técnico- Productiva y Superior Tecnológica de calidad en instituciones de Lima Metropolitana', '1', '2023-06-11 14:50:00', '2023-06-11 14:50:00'),
('1300', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', '', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
('1301', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', 'Estrategias efectivas para la práctica regular de la actividad física y el deporte de los estudiantes de Educación Básica', '1', '2023-06-13 14:50:00', '2023-06-13 14:50:00'),
('1302', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', 'Estrategias efectivas de acompañamiento socio afectivo para los estudiantes de Educación Básica', '1', '2023-06-14 14:50:00', '2023-06-14 14:50:00'),
('1303', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', 'Estrategias efectivas para la adopción de estilos de vida saludable (alimentación, higiene personal y ambiental) en estudiantes de Educación Básica', '1', '2023-06-15 14:50:00', '2023-06-15 14:50:00'),
('1304', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', 'Estrategias de fortalecimiento efectivo de capacidades de la comunidad educativa vinculadas a la promoción de la convivencia, la prevención y la atención de la violencia contra niñas, niños, adolescentes y jóvenes', '1', '2023-06-16 14:50:00', '2023-06-16 14:50:00'),
('1305', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', 'Estrategias efectivas para el  fortalecimiento de la enseñanza y el aprendizaje de Arte y la Cultura para los estudiantes de Educación Básica', '1', '2023-06-17 14:50:00', '2023-06-17 14:50:00'),
('1306', 'Fortalecer el desarrollo socioafectivo de los estudiantes a través de escuelas seguras y saludables ', 'Sistema de información y control eficaz que garanticen instituciones educativas libres de docentes y administrativos con incumplimiento muy grave de la Ley de la Reforma Magisterial y de la Ley N° 29988', '1', '2023-06-18 14:50:00', '2023-06-18 14:50:00'),
('1400', 'Fortalecer el desarrollo profesional docente', '', '1', '2023-06-19 14:50:00', '2023-06-19 14:50:00'),
('1401', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas que implementen la Política Integral de Desarrollo Profesional Docente', '1', '2023-06-20 14:50:00', '2023-06-20 14:50:00'),
('1402', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas que implementen los estándares profesionales de competencias docentes', '1', '2023-06-21 14:50:00', '2023-06-21 14:50:00'),
('1403', 'Fortalecer el desarrollo profesional docente', 'Sistema Integrado de Información docente implementado para uso de docentes, directores y\nespecialistas', '1', '2023-06-22 14:50:00', '2023-06-22 14:50:00'),
('1404', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas para la certificación de la calidad de la formación docente continua', '1', '2023-06-23 14:50:00', '2023-06-23 14:50:00'),
('1405', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas para la atracción de egresados de Educación Básica, con talento, a la carrera docente y docentes a la Carrera Pública Magisterial', '1', '2023-06-24 14:50:00', '2023-06-24 14:50:00'),
('1406', 'Fortalecer el desarrollo profesional docente', 'Servicio de formación Inicial Docente de calidad en Escuelas e Institutos Pedagógicos', '1', '2023-06-25 14:50:00', '2023-06-25 14:50:00'),
('1407', 'Fortalecer el desarrollo profesional docente', 'Programa de formación de calidad para docentes en servicio en sus diferentes roles y funciones', '1', '2023-06-26 14:50:00', '2023-06-26 14:50:00'),
('1408', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas para el reconocimiento docente', '1', '2023-06-27 14:50:00', '2023-06-27 14:50:00'),
('1409', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas para fomentar el bienestar docente', '1', '2023-06-28 14:50:00', '2023-06-28 14:50:00'),
('1410', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas que implementen la Carrera Pública Magisterial meritocrática para docentes\nnombrados', '1', '2023-06-29 14:50:00', '2023-06-29 14:50:00'),
('1411', 'Fortalecer el desarrollo profesional docente', 'Estrategias efectivas para incrementar la valoración social docente', '1', '2023-06-30 14:50:00', '2023-06-30 14:50:00'),
('1500', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', '', '1', '2023-07-01 14:50:00', '2023-07-01 14:50:00'),
('1501', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', 'Programa de dotación oportuna de recursos educativos para II.EE. públicas', '1', '2023-07-02 14:50:00', '2023-07-02 14:50:00'),
('1502', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', 'Intervenciones efectivas de infraestructura y equipamiento de los locales educativos en LM y en las regiones mediante convenio con Gobiernos Regionales', '1', '2023-07-03 14:50:00', '2023-07-03 14:50:00'),
('1503', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', 'Asistencia Técnica efectiva en la formulación y ejecución de Proyectos de Inversión Pública prioritarios para el cierre de brechas de la infraestructura educativa a los gobiernos subnacionales', '1', '2023-07-04 14:50:00', '2023-07-04 14:50:00'),
('1504', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', 'Programa efectivo de recursos educativos para  estudiantes de II.EE. públicas\nde Lima Metropolitana', '1', '2023-07-05 14:50:00', '2023-07-05 14:50:00'),
('1505', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', 'Programa de mantenimiento oportuno y adecuado de mobiliario, equipamiento e\ninfraestructura de II.EE. públicas de Lima Metropolitana', '1', '2023-07-06 14:50:00', '2023-07-06 14:50:00'),
('1506', 'Mejorar la provisión de calidad de recursos e infraestructura educativa para los estudiantes', 'Intervenciones efectivas de acondicionamiento de locales educativos', '1', '2023-07-07 14:50:00', '2023-07-07 14:50:00'),
('1600', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', '', '1', '2023-07-08 14:50:00', '2023-07-08 14:50:00'),
('1601', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategia efectiva de mejora de la eficiencia, integridad y transparencia en los procesos administrativos y legales del Ministerio de Educación', '1', '2023-07-09 14:50:00', '2023-07-09 14:50:00'),
('1602', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias para implementación de políticas de género y discapacidad con equidad en el Ministerio de Educación', '1', '2023-07-10 14:50:00', '2023-07-10 14:50:00'),
('1603', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias para la implementación articulada de la política nacional de juventudes', '1', '2023-07-11 14:50:00', '2023-07-11 14:50:00'),
('1604', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Gobierno Digital implementado en concordancia con las políticas del Sistema Nacional Informático para el Ministerio de Educación', '1', '2023-07-12 14:50:00', '2023-07-12 14:50:00'),
('1605', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para el desarrollo y la mejora del desempeño de los servidores\ny directivos del Ministerio de Educación', '1', '2023-07-13 14:50:00', '2023-07-13 14:50:00'),
('1606', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para la implementación de políticas y toma de decisiones con las instancias vinculadas al sector Educación', '1', '2023-07-14 14:50:00', '2023-07-14 14:50:00'),
('1607', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para la modernización en la gestión de las DRE-GRE, UGEL e IE\n(simplificación administrativa, gestión por procesos y organización institucional)', '1', '2023-07-15 14:50:00', '2023-07-15 14:50:00'),
('1608', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para mejorar el desempeño en la gestión de las II.EE en zonas rurales', '1', '2023-07-16 14:50:00', '2023-07-16 14:50:00'),
('1609', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para mejorar el ordenamiento territorial de las II.EE y servicios educativos', '1', '2023-07-17 14:50:00', '2023-07-17 14:50:00'),
('1610', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas de supervisión de las II.EE. privadas para el cumplimiento de la normativa\nvigente', '1', '2023-07-18 14:50:00', '2023-07-18 14:50:00'),
('1611', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para mejorar el desempeño en la gestión estratégica, operativa\ny presupuestal de las unidades orgánicas del Ministerio de Educación', '1', '2023-07-19 14:50:00', '2023-07-19 14:50:00'),
('1612', 'Modernizar la gestión y financiamiento institucional y del sistema educativo', 'Estrategias efectivas para mejorar la eficiencia y transparencia de los sistemas administrativos en las UGEL y DRE de Lima Metropolitana', '1', '2023-07-20 14:50:00', '2023-07-20 14:50:00'),
('1700', 'Implementar la gestión de riesgo de desastres en el Ministerio de Educación', '', '1', '2023-07-21 14:50:00', '2023-07-21 14:50:00'),
('1701', 'Implementar la gestión de riesgo de desastres en el Ministerio de Educación', 'Plan integral de gestión de riesgo de desastres en el Ministerio de Educación', '1', '2023-07-22 14:50:00', '2023-07-22 14:50:00'),
('1702', 'Implementar la gestión de riesgo de desastres en el Ministerio de Educación', 'Estrategias efectivas de gestión de riesgos en II.EE. públicas de Lima Metropolitana', '1', '2023-07-23 14:50:00', '2023-07-23 14:50:00'),
('1703', 'Implementar la gestión de riesgo de desastres en el Ministerio de Educación', 'Estrategias eficaces para la mitigación, reparación, rehabilitación y mejora de la infraestructura educativa en Lima Metropolitana, asegurando su sostenibilidad bajo un enfoque de reducción de riesgos', '1', '2023-07-24 14:50:00', '2023-07-24 14:50:00'),
('1800', 'Fortalecer el compromiso de los agentes sociales a favor de la educación de las niñas, niños, adolescentes, jóvenes y adultos', '', '1', '2023-07-25 14:50:00', '2023-07-25 14:50:00'),
('1801', 'Fortalecer el compromiso de los agentes sociales a favor de la educación de las niñas, niños, adolescentes, jóvenes y adultos', 'Estrategias efectivas para la generación de diálogo y concertación con agentes sociales por la educación', '1', '2023-07-26 14:50:00', '2023-07-26 14:50:00'),
('1802', 'Fortalecer el compromiso de los agentes sociales a favor de la educación de las niñas, niños, adolescentes, jóvenes y adultos', 'Alianzas estratégicas activadas con agentes mediáticos en favor de la educación de las niñas,\nniños, adolescentes, jóvenes y adultos', '1', '2023-07-27 14:50:00', '2023-07-27 14:50:00'),
('1803', 'Fortalecer el compromiso de los agentes sociales a favor de la educación de las niñas, niños, adolescentes, jóvenes y adultos', 'Alianzas estratégicas activadas con agentes económicos en favor de los estudiantes del sistema\neducativo', '1', '2023-07-28 14:50:00', '2023-07-28 14:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `multianual` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ejercicio` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obs` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `created_at`, `updated_at`, `multianual`, `ejercicio`, `obs`, `estado`) VALUES
(1000, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '2021-2023', '', '', '1'),
(1001, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2021', 'consistencia', '1'),
(1002, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2022', 'consistencia', '1'),
(1003, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2023', 'ejecución', '1'),
(1010, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '2022-2024', '', '', '1'),
(1011, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2022', 'consistencia', '1'),
(1012, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2023', 'ejecución', '1'),
(1013, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2024', 'formulación', '1'),
(1020, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '2023-2025', '', '', '1'),
(1021, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2023', 'ejecución', '1'),
(1022, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2024', 'formulación', '1'),
(1023, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2025', 'formulación', '1'),
(1030, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '2024-2026', '', '', '1'),
(1031, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2024', 'formulación', '1'),
(1032, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2025', 'formulación', '1'),
(1033, '2023-07-19 21:38:22', '2023-07-19 21:38:22', '', '2026', 'formulación', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `politica` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linea` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`id`, `politica`, `linea`, `estado`, `created_at`, `updated_at`) VALUES
('1100', 'Generación de bienestar y protección social con seguridad alimentaria.', '', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
('1101', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Fortalecer las acciones de lucha contra la pandemia por la COVID-19 adoptando medidas preventivas, de atención y de contención frente a nuevos escenarios de riesgo.', '1', '2023-06-13 14:50:00', '2023-06-13 14:50:00'),
('1102', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Preservar la vida y la salud.', '1', '2023-06-14 14:50:00', '2023-06-14 14:50:00'),
('1103', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Garantizar la protección social.', '1', '2023-06-15 14:50:00', '2023-06-15 14:50:00'),
('1104', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Asegurar la provisión de servicios básicos que mejoren las condiciones de vida de la población.', '1', '2023-06-16 14:50:00', '2023-06-16 14:50:00'),
('1105', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Asegurar el Desarrollo Infantil Temprano con un enfoque preventivo y de articulación intersectorial e intergubernamental en el territorio.', '1', '2023-06-17 14:50:00', '2023-06-17 14:50:00'),
('1106', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Promover la seguridad alimentaria para combatir el hambre y la desnutrición.', '1', '2023-06-18 14:50:00', '2023-06-18 14:50:00'),
('1107', 'Generación de bienestar y protección social con seguridad alimentaria.', 'Promover la inclusión financiera.', '1', '2023-06-19 14:50:00', '2023-06-19 14:50:00'),
('1200', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', '', '1', '2023-06-20 14:50:00', '2023-06-20 14:50:00'),
('1201', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Promover el empleo decente y la empleabilidad, contribuyendo a la productividad del país y el respeto de los derechos laborales con seguridad y salud en el trabajo.', '1', '2023-06-21 14:50:00', '2023-06-21 14:50:00'),
('1202', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Asegurar la sostenibilidad fiscal y ampliación de la base tributaria.', '1', '2023-06-22 14:50:00', '2023-06-22 14:50:00'),
('1203', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Fomentar la inversión pública y privada con enfoque territorial.', '1', '2023-06-23 14:50:00', '2023-06-23 14:50:00'),
('1204', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Promover la competitividad nacional mediante el desarrollo de los sectores productivos y de servicios para su integración a los mercados internacionales.', '1', '2023-06-24 14:50:00', '2023-06-24 14:50:00'),
('1205', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Mejorar las capacidades productivas y dinamización de economías regionales y locales.', '1', '2023-06-25 14:50:00', '2023-06-25 14:50:00'),
('1206', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Promover el desarrollo agrario y rural.', '1', '2023-06-26 14:50:00', '2023-06-26 14:50:00'),
('1207', 'Reactivación económica y de actividades productivas con desarrollo agrario y rural.', 'Promover y diversificar la oferta cultural y turística.', '1', '2023-06-27 14:50:00', '2023-06-27 14:50:00'),
('1300', 'Impulso de la ciencia, tecnología e innovación.', '', '1', '2023-06-28 14:50:00', '2023-06-28 14:50:00'),
('1301', 'Impulso de la ciencia, tecnología e innovación.', 'Impulsar la ciencia, tecnología e innovación como pilares del desarrollo.', '1', '2023-06-29 14:50:00', '2023-06-29 14:50:00'),
('1400', 'Fortalecimiento del sistema educativo y recuperación de los aprendizajes.', '', '1', '2023-06-30 14:50:00', '2023-06-30 14:50:00'),
('1401', 'Fortalecimiento del sistema educativo y recuperación de los aprendizajes.', 'Recuperar y consolidar los aprendizajes de la educación básica, superior y técnico-productiva con enfoque territorial.', '1', '2023-07-01 14:50:00', '2023-07-01 14:50:00'),
('1402', 'Fortalecimiento del sistema educativo y recuperación de los aprendizajes.', 'Revalorizar la carrera docente y el fortalecimiento de la formación inicial y en servicio.', '1', '2023-07-02 14:50:00', '2023-07-02 14:50:00'),
('1500', 'Descentralización, fortalecimiento institucional y del servicio civil.', '', '1', '2023-07-03 14:50:00', '2023-07-03 14:50:00'),
('1501', 'Descentralización, fortalecimiento institucional y del servicio civil.', 'Determinar acciones para el fortalecimiento del Ordenamiento Territorial en el Perú.', '1', '2023-07-04 14:50:00', '2023-07-04 14:50:00'),
('1502', 'Descentralización, fortalecimiento institucional y del servicio civil.', 'Fortalecer la descentralización e institucionalizar la articulación territorial de las políticas nacionales y sus mecanismos efectivos de diseño e implementación.', '1', '2023-07-05 14:50:00', '2023-07-05 14:50:00'),
('1503', 'Descentralización, fortalecimiento institucional y del servicio civil.', 'Fortalecer los sistemas de la administración pública y del servicio civil.', '1', '2023-07-06 14:50:00', '2023-07-06 14:50:00'),
('1600', 'Fortalecimiento del sistema democrático, seguridad ciudadana y lucha contra la corrupción, narcotráfico y terrorismo.', '', '1', '2023-07-07 14:50:00', '2023-07-07 14:50:00'),
('1601', 'Fortalecimiento del sistema democrático, seguridad ciudadana y lucha contra la corrupción, narcotráfico y terrorismo.', 'Fortalecer el sistema democrático.', '1', '2023-07-08 14:50:00', '2023-07-08 14:50:00'),
('1602', 'Fortalecimiento del sistema democrático, seguridad ciudadana y lucha contra la corrupción, narcotráfico y terrorismo.', 'Fortalecer la articulación e interoperabilidad para el combate del crimen organizado.', '1', '2023-07-09 14:50:00', '2023-07-09 14:50:00'),
('1603', 'Fortalecimiento del sistema democrático, seguridad ciudadana y lucha contra la corrupción, narcotráfico y terrorismo.', 'Fortalecer las capacidades operativas e institucionales de las Fuerzas Armadas y policiales.', '1', '2023-07-10 14:50:00', '2023-07-10 14:50:00'),
('1604', 'Fortalecimiento del sistema democrático, seguridad ciudadana y lucha contra la corrupción, narcotráfico y terrorismo.', 'Fortalecer la capacidad regulatoria y fiscalizadora del Estado.', '1', '2023-07-11 14:50:00', '2023-07-11 14:50:00'),
('1700', 'Gestión eficiente de riesgos y amenazas a los derechos de las personas y su entorno.', '', '1', '2023-07-12 14:50:00', '2023-07-12 14:50:00'),
('1701', 'Gestión eficiente de riesgos y amenazas a los derechos de las personas y su entorno.', 'Cuidado de nuestro entorno y de nuestra diversidad biológica.', '1', '2023-07-13 14:50:00', '2023-07-13 14:50:00'),
('1702', 'Gestión eficiente de riesgos y amenazas a los derechos de las personas y su entorno.', 'Fortalecer las acciones y medidas preventivas, de atención y contención frente a nuevos escenarios de riesgos naturales y/o antrópicos.', '1', '2023-07-14 14:50:00', '2023-07-14 14:50:00'),
('1800', 'Gobierno y transformación digital con equidad.', '', '1', '2023-07-15 14:50:00', '2023-07-15 14:50:00'),
('1801', 'Gobierno y transformación digital con equidad.', 'Garantizar el acceso inclusivo, seguro y de calidad al entorno digital y el aprovechamiento de las tecnologías digitales en todas las regiones del país para consolidar la ciudadanía digital considerando sus condiciones de vulnerabilidad y diversidad cultural.', '1', '2023-07-16 14:50:00', '2023-07-16 14:50:00'),
('1900', 'Conducción de una diplomacia nacional, autónoma, democrática, social y descentralizada.', '', '1', '2023-07-17 14:50:00', '2023-07-17 14:50:00'),
('1901', 'Conducción de una diplomacia nacional, autónoma, democrática, social y descentralizada.', 'Fortalecer las relaciones de amistad, diálogo político, cooperación para el desarrollo, confianza, integración económica y comercial con todos los países y, de manera particular, con los países vecinos.', '1', '2023-07-18 14:50:00', '2023-07-18 14:50:00'),
('1902', 'Conducción de una diplomacia nacional, autónoma, democrática, social y descentralizada.', 'Articular y coordinar la acción de la política general del gobierno, incluyendo a todos los sectores del Poder Ejecutivo, con el fin de proyectarla en el exterior.', '1', '2023-07-19 14:50:00', '2023-07-19 14:50:00'),
('1903', 'Conducción de una diplomacia nacional, autónoma, democrática, social y descentralizada.', 'Defender y promover la democracia y los derechos humanos en los foros globales, regionales y subregionales, y reducir la desigualdad y proteger los derechos y aspiraciones de todos, y en particular de la población vulnerable, las mujeres y los jóvenes.', '1', '2023-07-20 14:50:00', '2023-07-20 14:50:00'),
('1904', 'Conducción de una diplomacia nacional, autónoma, democrática, social y descentralizada.', 'Proteger, cautelar y promover la defensa de los derechos de los peruanos en el exterior.', '1', '2023-07-21 14:50:00', '2023-07-21 14:50:00'),
('1905', 'Conducción de una diplomacia nacional, autónoma, democrática, social y descentralizada.', 'Contribuir en la difusión y la proyección de la política cultural peruana en el exterior.', '1', '2023-07-22 14:50:00', '2023-07-22 14:50:00'),
('2000', 'Estado Intercultural para la promoción de la diversidad cultural.', '', '1', '2023-07-23 14:50:00', '2023-07-23 14:50:00'),
('2001', 'Estado Intercultural para la promoción de la diversidad cultural.', 'Garantizar los derechos de los pueblos indígenas u originarios y del pueblo afroperuano.', '1', '2023-07-24 14:50:00', '2023-07-24 14:50:00'),
('2002', 'Estado Intercultural para la promoción de la diversidad cultural.', 'Valorar la diversidad cultural y promover la gestión pública intercultural', '1', '2023-07-25 14:50:00', '2023-07-25 14:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE `recursos` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `denominacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clasificador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acumulable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `um_recurso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cant_ene` int NOT NULL,
  `cant_feb` int NOT NULL,
  `cant_mar` int NOT NULL,
  `cant_abr` int NOT NULL,
  `cant_may` int NOT NULL,
  `cant_jun` int NOT NULL,
  `cant_jul` int NOT NULL,
  `cant_ago` int NOT NULL,
  `cant_set` int NOT NULL,
  `cant_oct` int NOT NULL,
  `cant_nov` int NOT NULL,
  `cant_dic` int NOT NULL,
  `total_fisico` int NOT NULL,
  `cert_ene` int NOT NULL,
  `cert_feb` int NOT NULL,
  `cert_mar` int NOT NULL,
  `cert_abr` int NOT NULL,
  `cert_may` int NOT NULL,
  `cert_jun` int NOT NULL,
  `cert_jul` int NOT NULL,
  `cert_ago` int NOT NULL,
  `cert_set` int NOT NULL,
  `cert_oct` int NOT NULL,
  `cert_nov` int NOT NULL,
  `cert_dic` int NOT NULL,
  `total_cert_prog` int NOT NULL,
  `dev_ene` int NOT NULL,
  `dev_feb` int NOT NULL,
  `dev_mar` int NOT NULL,
  `dev_abr` int NOT NULL,
  `dev_may` int NOT NULL,
  `dev_jun` int NOT NULL,
  `dev_jul` int NOT NULL,
  `dev_ago` int NOT NULL,
  `dev_set` int NOT NULL,
  `dev_oct` int NOT NULL,
  `dev_nov` int NOT NULL,
  `dev_dic` int NOT NULL,
  `total_dev_prog` int NOT NULL,
  `eje_cert_ene` int NOT NULL,
  `eje_cert_feb` int NOT NULL,
  `eje_cert_mar` int NOT NULL,
  `eje_cert_abr` int NOT NULL,
  `eje_cert_may` int NOT NULL,
  `eje_cert_jun` int NOT NULL,
  `eje_cert_jul` int NOT NULL,
  `eje_cert_ago` int NOT NULL,
  `eje_cert_set` int NOT NULL,
  `eje_cert_oct` int NOT NULL,
  `eje_cert_nov` int NOT NULL,
  `eje_cert_dic` int NOT NULL,
  `total_eje_cert_prog` int NOT NULL,
  `eje_dev_ene` int NOT NULL,
  `eje_dev_feb` int NOT NULL,
  `eje_dev_mar` int NOT NULL,
  `eje_dev_abr` int NOT NULL,
  `eje_dev_may` int NOT NULL,
  `eje_dev_jun` int NOT NULL,
  `eje_dev_jul` int NOT NULL,
  `eje_dev_ago` int NOT NULL,
  `eje_dev_set` int NOT NULL,
  `eje_dev_oct` int NOT NULL,
  `eje_dev_nov` int NOT NULL,
  `eje_dev_dic` int NOT NULL,
  `total_eje_dev_prog` int NOT NULL,
  `id_actividads` bigint UNSIGNED NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `id_periodos` bigint UNSIGNED NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `um_tarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acumulable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `um_accion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cant_ene` int DEFAULT NULL,
  `cant_feb` int DEFAULT NULL,
  `cant_mar` int DEFAULT NULL,
  `cant_abr` int DEFAULT NULL,
  `cant_may` int DEFAULT NULL,
  `cant_jun` int DEFAULT NULL,
  `cant_jul` int DEFAULT NULL,
  `cant_ago` int DEFAULT NULL,
  `cant_set` int DEFAULT NULL,
  `cant_oct` int DEFAULT NULL,
  `cant_nov` int DEFAULT NULL,
  `cant_dic` int DEFAULT NULL,
  `id_actividads` bigint UNSIGNED NOT NULL,
  `representativa` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedidas`
--

CREATE TABLE `unidadmedidas` (
  `id` bigint UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `unidadmedidas`
--

INSERT INTO `unidadmedidas` (`id`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ACCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(3, 'ALUMNO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(6, 'ATENCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(7, 'AULA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(9, 'BECAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(10, 'BENEFICIARIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(12, 'CABEZA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(14, 'CAMPAÑA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(16, 'CASO TRATADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(18, 'CERTIFICADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(21, 'CONSULTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(22, 'CONTROL REALIZADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(23, 'CONVENIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(24, 'CREDITO OTORGADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(26, 'CUOTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(27, 'CURRICULA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(28, 'CURSO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(29, 'DIAGNOSTICO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(34, 'DOCENTE CAPACITADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(35, 'DOCUMENTO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(36, 'DOCUMENTO EMITIDO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(38, 'EDICION REALIZADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(40, 'EMPRESA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(41, 'EQUIPO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(42, 'ESTABLECIMIENTO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(45, 'ESTUDIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(46, 'EVALUACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(47, 'EVENTO CULTURAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(48, 'EVENTO DEPORTIVO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(50, 'EXPEDIENTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(51, 'EXPEDIENTE PROCESADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(53, 'EXPEDIENTE TECNICO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(54, 'EXPEDIENTE TRAMITADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(55, 'FAMILIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(59, 'INFORME', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(60, 'INMUEBLE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(62, 'INSPECCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(63, 'INSTALACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(64, 'INTERVENCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(67, 'LICENCIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(70, 'MANUAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(76, 'MODULO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(77, 'MUESTRA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(79, 'NORMA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(80, 'OBRA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(85, 'PERSONA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(86, 'PERSONA ATENDIDA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(87, 'PERSONA CAPACITADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(89, 'PERSONA EVALUADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(90, 'PLAN', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(95, 'PROYECTO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(96, 'PUBLICACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(102, 'REGISTRO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(104, 'RESOLUCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(105, 'SEMINARIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(106, 'SERVICIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(107, 'SISTEMA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(108, 'SUPERVISION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(109, 'TITULO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(111, 'UNIDAD', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(113, 'VACUNA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(114, 'VISITA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(116, 'EVENTOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(119, 'ENTIDAD', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(128, 'GRUPO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(131, 'SESION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(133, 'PROGRAMAS RADIALES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(135, 'PLANILLA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(138, 'HORAS LECTIVAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(139, 'INSCRIPCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(142, 'CONTRIBUYENTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(150, 'USUARIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(152, 'METRO LINEAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(153, 'PORCENTAJE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(160, 'NUEVOS SOLES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(164, 'CONTRATOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(174, 'PASAJEROS/DIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(175, 'TRANSFERENCIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(178, 'TRANSFERENCIAS FINANCIERAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(179, 'HORAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(180, 'LOCAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(181, 'ACCIONES DE AUDITORIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(192, 'ORGANIZACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(197, 'ALUMNO EVALUADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(198, 'DOCENTE EVALUADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(199, 'INFORME TECNICO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(200, 'NORMA ELABORADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(211, 'ESTUDIO DE PREINVERSION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(214, 'INSTANCIA INTERMEDIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(220, 'REPORTE TECNICO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(225, 'CAPACITACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(228, 'OFICINA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(231, 'BASE DE DATOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(232, 'SISTEMA APROBADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(233, 'PROGRAMA DISEÑADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(234, 'INSTITUCION EDUCATIVA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(235, 'DIRECTOR', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(238, 'DOCENTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(239, 'PROTOTIPO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(243, 'PARTICIPANTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(246, 'REPORTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(247, 'CHARLA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(248, 'PARTICIPACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(252, 'INFORMANTES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(262, 'RECIBOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(269, 'PROPUESTAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(283, 'SISTEMA DE GESTION IMPLEMENTADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(285, 'ASISTENCIA TECNICA IMPLEMENTADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(288, 'HECTAREA CONSERVADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(289, 'DOCENTE ESPECIALIZADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(290, 'ESPECIALISTA ASISTIDO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(291, 'DIRECTOR CAPACITADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(295, 'SERVICIOS SUPERVISADOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(298, 'USUARIOS CAPACITADOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(303, 'GALON', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(339, 'ESCENARIO MODELADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(341, 'PERSONA ACREDITADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(344, 'NOTIFICACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(345, 'PROTOCOLO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(348, 'DOCENTE ACOMPAÑADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(355, 'MANUAL DE PROCEDIMIENTOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(357, 'PROCESO IMPLEMENTADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(359, 'MATERIAL EDUCATIVO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(360, 'TALLER', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(361, 'PROMOCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(363, 'PEAJE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(387, 'CASOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(392, 'CONVOCATORIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(393, 'MONITOREO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(395, 'REGION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(398, 'COMITE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(400, 'DISTRITO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(404, 'BIEN', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(406, 'NOTA INFORMATIVA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(407, 'PROCESO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(408, 'TERRENO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(409, 'ASISTENCIA TECNICA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(410, 'LOCAL ESCOLAR', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(413, 'PILOTO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(418, 'CARRERA PROFESIONAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(419, 'DENUNCIA ATENDIDA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(420, 'MAQUINARIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(423, 'SIMULACRO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(446, 'ITEMS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(457, 'ACCION DE CONTROL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(458, 'CERTIFICACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(459, 'HERRAMIENTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(465, 'DENUNCIA RESUELTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(467, 'UNIDAD ESPECIALIZADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(470, 'ACTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(475, 'EQUIPO IMPLEMENTADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(481, 'DOCUMENTO TECNICO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(485, 'INFRAESTRUCTURA MOVIL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(486, 'KIT', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(488, 'PRODUCTO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(496, 'SUPERVISION REALIZADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(503, 'CAMPAÑA EJECUTADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(513, 'OPERADOR CAPACITADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(515, 'PERSONA ASISTIDA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(536, 'ALIMENTO CONTROLADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(553, 'ACTIVIDAD EFECTUADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(556, 'ENTIDAD INTERVENIDA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(558, 'EMPRESA INTERVENIDA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(565, 'PERSONA CON DISCAPACIDAD', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(587, 'DIRECCION AMBIENTAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(588, 'DOCENTE-PROMOTORA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(594, 'ESTUDIANTES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(598, 'PARTICIPANTE CERTIFICADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(600, 'INSTRUMENTOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(605, 'VEHICULOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(610, 'VERSIONES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(613, 'INSTITUCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(625, 'PROGRAMA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(634, 'MANTENIMIENTO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(636, 'ASESORIA TECNICA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(639, 'FICHA TECNICA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(642, 'ACCION DE DIFUSION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(643, 'ACUERDO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(644, 'ADQUISICION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(645, 'AGUINALDO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(646, 'ASESORIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(647, 'BECARIOS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(648, 'BONIFICACION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(649, 'CARGOS FINANCIEROS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(650, 'CAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(651, 'COMPRA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(652, 'CONSULTOR', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(653, 'CONSULTORIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(654, 'CREDITO EDUCATIVO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(655, 'DIFUSION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(656, 'DIPLOMADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(657, 'DOCENTE ASESORADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(658, 'EJEMPLAR', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(659, 'ENCARGO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(660, 'ESPECIALISTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(661, 'ESPECIALISTA CAPACITADO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(662, 'GUIA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(663, 'LOCADOR', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(664, 'LOTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(665, 'MATERIAL', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(666, 'MOBILIARIO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(667, 'MOVILIDAD', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(668, 'NORMA APROBADA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(669, 'PAGO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(670, 'PAQUETE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(671, 'PASAJE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(672, 'PRACTICANTE', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(673, 'PROPINA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(674, 'RED', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(675, 'REUNION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(676, 'SESIONES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(677, 'SOFTWARE EDUCATIVO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(678, 'SUBVENCION', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(679, 'SUMINISTRO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(680, 'TRANSPORTISTA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(681, 'UNIFORME', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(682, 'UTILES', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(683, 'UTILES DE OFICINA', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(684, 'VACACIONES TRUNCAS', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00'),
(685, 'VIATICO', '1', '2023-06-12 14:50:00', '2023-06-12 14:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_operativas`
--

CREATE TABLE `unidad_operativas` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_periodos` bigint UNSIGNED NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `marco` decimal(9,2) DEFAULT NULL,
  `apm` decimal(9,2) DEFAULT NULL,
  `da` decimal(9,2) DEFAULT NULL,
  `necesidad_total` decimal(9,2) DEFAULT NULL,
  `programado` decimal(9,2) DEFAULT NULL,
  `flg` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 liberado, 2 registrado',
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `unidad_operativas`
--

INSERT INTO `unidad_operativas` (`id`, `created_at`, `updated_at`, `id_periodos`, `id_users`, `marco`, `apm`, `da`, `necesidad_total`, `programado`, `flg`, `estado`) VALUES
(1, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 1, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(2, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 2, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(3, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 3, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(4, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 4, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(5, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 5, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(6, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 6, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(7, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 7, NULL, NULL, NULL, NULL, NULL, '1', '1'),
(8, '2023-07-19 21:38:37', '2023-07-19 21:38:37', 1001, 8, NULL, NULL, NULL, NULL, NULL, '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `dni`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'direccion', '00000001', 'direccion@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$nLtmrd/Ye8JGbnfTZdljHeyawNrGumV1tGMLUIvioSht2yKWmrFyq', '6n0YlHz3Ab', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(2, 'agebre', '00000002', 'agebre@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$RAtg.xj0ujzopi/2SwjQPuVzXZQeqsrLUAZdaHgDS6r7RYmYDV4f2', 'IQ8mL2GfgI', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(3, 'agebat', '00000003', 'agebat@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$UUiH/r03z5EqhVrQwIOkf.YYjLf2qqidJrjFfN6AwqwK4PuO4k6km', 'l9VOL1oMQQ', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(4, 'asgese', '00000004', 'asgese@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$mOkpxq99REUdAHaQ1QG9sOEVKTNNO94svQHi6l979Cg.vOa0OJOFy', '3nXbUBnRZo', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(5, 'arh', '00000005', 'arh@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$tusaGg4TvIkNX1f1Wa7QGePe.cwylhVE55nXUMHiV9tzZD9EZQK16', 'VPcPzHi8Of', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(6, 'aj', '00000006', 'aj@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$04qiVV44yF5o1UydcIzCZesXrdbgz6raMy2UQw5aa2HnUqHE5A8sq', 'RILSt5S6Cs', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(7, 'adm', '00000007', 'adm@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$hvx/uz7tf9qOBFkURa7YqOpC2982YC/8Z7aDjk1g5uGjnU.zA1o0K', '0rDIuA2ivP', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(8, 'app', '00000008', 'app@ugel03.gob.pe', '2023-05-03 21:08:07', '$2y$10$xRTBpM21nTzkdhDzwverl.jOXyX8NVtErm1sLqjN9jq/yJrFPtkxa', 'BqxxAqwYqp', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 0),
(9, 'nestor', '41844509', 'nestorricardo20@gmail.com', '2023-05-03 21:08:07', '$2y$10$TgnMuH6J.Gz.6oB60lZHP.UmIsl4SisdCaIBF8ZXMKSOQJ.sXzUIa', '5NguNe1Ze0', '2023-07-19 21:38:22', '2023-07-19 21:38:22', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accions`
--
ALTER TABLE `accions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accions_id_tarea_foreign` (`id_tarea`);

--
-- Indices de la tabla `actividads`
--
ALTER TABLE `actividads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actividads_id_area_foreign` (`id_area`),
  ADD KEY `actividads_id_cadena_foreign` (`id_cadena`),
  ADD KEY `actividads_id_objetivo_foreign` (`id_objetivo`),
  ADD KEY `actividads_id_politica_foreign` (`id_politica`);

--
-- Indices de la tabla `cadenafuncionales`
--
ALTER TABLE `cadenafuncionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_accions`
--
ALTER TABLE `detalle_accions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_accions_id_accions_foreign` (`id_accions`);

--
-- Indices de la tabla `detalle_recursos`
--
ALTER TABLE `detalle_recursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_recursos_id_recursos_foreign` (`id_recursos`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `politicas`
--
ALTER TABLE `politicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recursos_id_actividads_foreign` (`id_actividads`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registros_id_users_foreign` (`id_users`),
  ADD KEY `registros_id_periodos_foreign` (`id_periodos`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tareas_id_actividads_foreign` (`id_actividads`);

--
-- Indices de la tabla `unidadmedidas`
--
ALTER TABLE `unidadmedidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad_operativas`
--
ALTER TABLE `unidad_operativas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unidad_operativas_id_periodos_foreign` (`id_periodos`),
  ADD KEY `unidad_operativas_id_users_foreign` (`id_users`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_dni_unique` (`dni`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accions`
--
ALTER TABLE `accions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `actividads`
--
ALTER TABLE `actividads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cadenafuncionales`
--
ALTER TABLE `cadenafuncionales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `detalle_accions`
--
ALTER TABLE `detalle_accions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_recursos`
--
ALTER TABLE `detalle_recursos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1034;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidadmedidas`
--
ALTER TABLE `unidadmedidas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=686;

--
-- AUTO_INCREMENT de la tabla `unidad_operativas`
--
ALTER TABLE `unidad_operativas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accions`
--
ALTER TABLE `accions`
  ADD CONSTRAINT `accions_id_tarea_foreign` FOREIGN KEY (`id_tarea`) REFERENCES `tareas` (`id`);

--
-- Filtros para la tabla `actividads`
--
ALTER TABLE `actividads`
  ADD CONSTRAINT `actividads_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `unidad_operativas` (`id`),
  ADD CONSTRAINT `actividads_id_cadena_foreign` FOREIGN KEY (`id_cadena`) REFERENCES `cadenafuncionales` (`id`),
  ADD CONSTRAINT `actividads_id_objetivo_foreign` FOREIGN KEY (`id_objetivo`) REFERENCES `objetivos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actividads_id_politica_foreign` FOREIGN KEY (`id_politica`) REFERENCES `politicas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalle_accions`
--
ALTER TABLE `detalle_accions`
  ADD CONSTRAINT `detalle_accions_id_accions_foreign` FOREIGN KEY (`id_accions`) REFERENCES `tareas` (`id`);

--
-- Filtros para la tabla `detalle_recursos`
--
ALTER TABLE `detalle_recursos`
  ADD CONSTRAINT `detalle_recursos_id_recursos_foreign` FOREIGN KEY (`id_recursos`) REFERENCES `recursos` (`id`);

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_id_actividads_foreign` FOREIGN KEY (`id_actividads`) REFERENCES `actividads` (`id`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_id_periodos_foreign` FOREIGN KEY (`id_periodos`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `registros_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_id_actividads_foreign` FOREIGN KEY (`id_actividads`) REFERENCES `actividads` (`id`);

--
-- Filtros para la tabla `unidad_operativas`
--
ALTER TABLE `unidad_operativas`
  ADD CONSTRAINT `unidad_operativas_id_periodos_foreign` FOREIGN KEY (`id_periodos`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `unidad_operativas_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
