-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2023 a las 18:47:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Creación de la base de datos: `rolegame`
CREATE TABLE `creature` (
  `idCreature` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `attackPower` int(11) NOT NULL,
  `lifeLevel` int(11) NOT NULL,
  `weapon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `creature` (`idCreature`, `name`, `description`, `avatar`, `attackPower`, `lifeLevel`, `weapon`) VALUES
(1, 'Orco miedoso', 'Un orco pequeño y miedoso que normalmente escapa del combate. No es de fiar.', 'https://i.blogs.es/ebcd56/el-senor-de-los-anillos-orco/840_560.jpeg', 15, 20, 'Navaja'),
(2, 'Padrino mágico', 'No tiene nada que ver con este juego pero ni sé qué juego es. Es un padrino mágico, gran serie de la infancia', 'https://www.geekmi.news/__export/1628085855734/sites/debate/img/2021/08/04/los-padrinos-magicos-1.jpg_423682103.jpg', 150, 700, 'Varita mágica'),
(5, 'Centaurus', 'Un centauro que encontré en google imágenes, no hay mucho más que añadir sobre esta criatura. En un zoo no sé si pagaría entrada o le darían de comer.', 'https://4.bp.blogspot.com/-yX-I_F7NtXo/V4aKYwwWxdI/AAAAAAAAGgk/Wb8ftQoAkHAL2d3Jdx4z7_xhnDP_T-t4QCLcB/s1600/Centuar_WB_F5_CentaurSideOn_Illust_100615_Port.jpg', 187, 345, 'Sus pezuñas');

ALTER TABLE `creature`
  ADD PRIMARY KEY (`idCreature`);
ALTER TABLE `creature`
  MODIFY `idCreature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
