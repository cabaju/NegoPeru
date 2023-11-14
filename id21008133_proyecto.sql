-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-10-2023 a las 05:52:18
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21008133_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1622688038, 340066300, 'hola man'),
(2, 340066300, 1622688038, 'bien'),
(3, 1622688038, 340066300, 'hola'),
(4, 340066300, 1622688038, 'hola'),
(5, 440971576, 1622688038, 'hola pedro, necesito tu ayuda'),
(6, 1622688038, 440971576, 'hola Mauricio, claro, dime !!'),
(7, 440971576, 684451344, 'hola'),
(8, 440971576, 684451344, 'milton como estas'),
(9, 340066300, 684451344, 'como le va '),
(10, 684451344, 440971576, 'hola'),
(11, 684451344, 440971576, 'estoy estresado'),
(12, 684451344, 440971576, 'buenas tardes estimados doctores'),
(13, 440971576, 684451344, '123'),
(14, 440971576, 684451344, '12345'),
(15, 440971576, 684451344, 'hola milton soy pedro el administrador '),
(16, 684451344, 440971576, 'holaaaaa'),
(17, 684451344, 440971576, 'a'),
(18, 684451344, 440971576, 'a'),
(19, 684451344, 440971576, 'a'),
(20, 684451344, 440971576, 'a'),
(21, 684451344, 440971576, 'a'),
(22, 684451344, 440971576, 'a'),
(23, 684451344, 440971576, 'a'),
(24, 684451344, 440971576, 'a'),
(25, 684451344, 440971576, 'a'),
(26, 684451344, 440971576, 'a'),
(27, 684451344, 440971576, 'a'),
(28, 684451344, 440971576, 'a'),
(29, 684451344, 440971576, 'a'),
(30, 684451344, 440971576, 'a'),
(31, 684451344, 440971576, 'a'),
(32, 684451344, 440971576, 'a'),
(33, 684451344, 440971576, 'quien eres'),
(34, 684451344, 440971576, 'hola milton peña queria saber como vas en tu proyecto'),
(35, 684451344, 837953472, 'hola soy bob sponja estoy ofreciendo las ricas cangre burger'),
(36, 837953472, 684451344, 'señor bob sponja usted me llega al ubuntu vete a ofrecer sus cangre burger al Dr Risco el si tiene plata'),
(37, 684451344, 837953472, 'también contamos con arroz chaufa para sus compañeros y aeropuerto '),
(38, 684451344, 837953472, 'no se anima'),
(39, 837953472, 684451344, 'no'),
(40, 837953472, 684451344, 'he dicho que no tengo plata '),
(41, 684451344, 837953472, 'ok señor ya no lo molesto'),
(42, 440971576, 684451344, 'ffff'),
(43, 440971576, 684451344, 'qqqqqqq'),
(44, 684451344, 1622688038, 'milton sabes algo de jose luis ???? no responde'),
(45, 1622688038, 684451344, 'parece que no desea pasar el bendito aguila'),
(46, 684451344, 1622688038, '.'),
(47, 684451344, 1622688038, '.'),
(48, 684451344, 1622688038, '.'),
(49, 684451344, 1622688038, '.'),
(50, 684451344, 1622688038, '.'),
(51, 684451344, 1622688038, '.'),
(52, 684451344, 1622688038, '.'),
(53, 684451344, 1622688038, '.'),
(54, 684451344, 1622688038, '.'),
(55, 684451344, 1622688038, '.'),
(56, 684451344, 1622688038, '.'),
(57, 684451344, 1622688038, '..'),
(58, 684451344, 1622688038, 'Buenas Tardes Señores de NEGOPERU'),
(59, 1622688038, 684451344, 'Buenas señor Mauricio Sevilla, gracias por comunicarte con NEGOPERU'),
(60, 1622688038, 684451344, 'En que le podemos ayudar'),
(61, 1622688038, 684451344, 'estamos a su disposición'),
(62, 1622688038, 684451344, 'ddddddd'),
(63, 684451344, 1622688038, 'sssss'),
(64, 1515663237, 684451344, 'hola ya es tarde'),
(65, 684451344, 1515663237, 'dame un gaaa'),
(66, 1514237680, 684451344, 'kratos tengo hambre'),
(67, 1276523835, 684451344, 'Buenas noches.'),
(68, 1276523835, 684451344, 'Quiero saber sobre el examen del curso '),
(69, 684451344, 1276523835, 'Gracias por comunicarte '),
(70, 684451344, 1276523835, 'le saluda tu asesor de NEGOPERU'),
(71, 1276523835, 1390608616, 'Hola '),
(72, 1390608616, 1276523835, 'Bienvenidos a NEGOPERU'),
(73, 1390608616, 1276523835, 'Gabriel '),
(74, 1390608616, 1276523835, 'en que te podemos ayudar'),
(75, 1276523835, 1390608616, 'Quería saber en cuanto a sus productos '),
(76, 1390608616, 1276523835, 'desea saber información de algun producto en especial'),
(77, 1276523835, 1390608616, 'Arroz rompe olla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(4, 684451344, 'Milton', 'Peña Curitima', 'mpena13@autonoma.edu.pe', '218b9828acd159d713484c4e37eaf3b4', '1687125512carnet universitario.jpg', 'Offline now'),
(15, 1169856165, 'Gabriel', 'Mayhua Morales', 'gabriel@autonoma.edu.pe', '647431b5ca55b04fdf3c2fce31ef1915', '16893663971688757691gabriel.jpg', 'Offline now'),
(16, 1110934246, 'Administrador', 'NEGOPERU', 'admin@autonoma.edu.pe', '21232f297a57a5a743894a0e4a801fc3', '16893664771688745071logogroup.png', 'Disponible');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
