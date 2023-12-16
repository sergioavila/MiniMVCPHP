-- Adminer 4.8.1 MySQL 10.11.4-MariaDB-1~deb12u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  UNIQUE KEY `candidates_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `candidates` (`id`, `name`) VALUES
(1,	'Carla Natalia Allendes Soza'),
(2,	'Marco Antonio Núñez Lozano'),
(3,	'Jazmín Murillo Jorquera'),
(4,	'Manuel Armando Tobar Leiva'),
(5,	'Darma Odette López Torres'),
(6,	'Christian Andrés Inostroza Cabrera'),
(7,	'María Soledad Pardo Vergara'),
(8,	'Aldo Valle Acevedo'),
(9,	'Valeria Angélica Cárcamo Vidal'),
(10,	'Marcelo Schilling Rodríguez'),
(11,	'Carolina Patricia Fernández Quezada'),
(12,	'Gonzalo Andrés Vega Moreno'),
(13,	'María de los Ángeles López Porfiri'),
(14,	'Antonio Barchiesi Chávez'),
(15,	'Tatiana Paola Bernal Parra'),
(16,	'Raimundo Jesús Palamara Stewart'),
(17,	'Chantal Robert de la Mahotiere Flottes'),
(18,	'Pedro Rodolfo Schwedelbach Puga'),
(19,	'Leslie Briones Rojo'),
(20,	'Gonzalo Ibáñez Santa María'),
(21,	'Luigina Pruzzo Guerra'),
(22,	'Gonzalo Yuseff Quirós'),
(23,	'Viviana Núñez Carrasco'),
(24,	'Edmundo Eluchans Urenda'),
(25,	'Carla Natalia Allendes Soza'),
(26,	'Marco Antonio Núñez Lozano'),
(27,	'Jazmín Murillo Jorquera'),
(28,	'Manuel Armando Tobar Leiva'),
(29,	'Darma Odette López Torres'),
(30,	'Christian Andrés Inostroza Cabrera'),
(31,	'María Soledad Pardo Vergara'),
(32,	'Aldo Valle Acevedo'),
(33,	'Valeria Angélica Cárcamo Vidal'),
(34,	'Marcelo Schilling Rodríguez'),
(35,	'Carolina Patricia Fernández Quezada'),
(36,	'Gonzalo Andrés Vega Moreno'),
(37,	'María de los Ángeles López Porfiri'),
(38,	'Antonio Barchiesi Chávez'),
(39,	'Tatiana Paola Bernal Parra'),
(40,	'Raimundo Jesús Palamara Stewart'),
(41,	'Chantal Robert de la Mahotiere Flottes'),
(42,	'Pedro Rodolfo Schwedelbach Puga'),
(43,	'Leslie Briones Rojo'),
(44,	'Gonzalo Ibáñez Santa María'),
(45,	'Luigina Pruzzo Guerra'),
(46,	'Gonzalo Yuseff Quirós'),
(47,	'Viviana Núñez Carrasco'),
(48,	'Edmundo Eluchans Urenda');

DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `name` text NOT NULL,
  UNIQUE KEY `cities_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cities` (`id`, `state_id`, `name`) VALUES
(1,	1,	'ARICA'),
(2,	1,	'PARINACOTA'),
(3,	2,	'IQUIQUE'),
(4,	2,	'TAMARUGAL'),
(5,	3,	'ANTOFAGASTA'),
(6,	3,	'EL LOA'),
(7,	3,	'TOCOPILLA'),
(8,	4,	'COPIAPÓ'),
(9,	4,	'CHAÑARAL'),
(10,	4,	'HUASCO'),
(11,	5,	'ELQUI'),
(12,	5,	'CHOAPA'),
(13,	5,	'LIMARÍ'),
(14,	6,	'VALPARAÍSO'),
(15,	6,	'ISLA DE PASCUA'),
(16,	6,	'LOS ANDES'),
(17,	6,	'PETORCA'),
(18,	6,	'QUILLOTA'),
(19,	6,	'SAN ANTONIO'),
(20,	6,	'SAN FELIPE DE ACONCAGUA'),
(21,	6,	'MARGA MARGA'),
(22,	7,	'CACHAPOAL'),
(23,	7,	'CARDENAL CARO'),
(24,	7,	'COLCHAGUA'),
(25,	8,	'TALCA'),
(26,	8,	'CAUQUENES'),
(27,	8,	'CURICÓ'),
(28,	8,	'LINARES'),
(29,	9,	'CONCEPCIÓN'),
(30,	9,	'ARAUCO'),
(31,	9,	'BIOBÍO'),
(32,	9,	'ÑUBLE'),
(33,	10,	'CAUTÍN'),
(34,	10,	'MALLECO'),
(35,	11,	'VALDIVIA'),
(36,	11,	'RANCO'),
(37,	12,	'LLANQUIHUE'),
(38,	12,	'CHILOÉ'),
(39,	12,	'OSORNO'),
(40,	12,	'PALENA'),
(41,	13,	'COIHAIQUE'),
(42,	13,	'AISÉN'),
(43,	13,	'CAPITÁN PRAT'),
(44,	13,	'GENERAL CARRERA'),
(45,	14,	'MAGALLANES'),
(46,	14,	'ANTÁRTICA CHILENA'),
(47,	14,	'TIERRA DEL FUEGO'),
(48,	14,	'ULTIMA ESPERANZA'),
(49,	15,	'SANTIAGO'),
(50,	15,	'CORDILLERA'),
(51,	15,	'CHACABUCO'),
(52,	15,	'MAIPO'),
(53,	15,	'MELIPILLA'),
(54,	15,	'TALAGANTE');

DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  KEY `states_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `states` (`id`, `name`) VALUES
(1,	'ARICA Y PARINACOTA'),
(2,	'TARAPACÁ'),
(3,	'ANTOFAGASTA'),
(4,	'ATACAMA '),
(5,	'COQUIMBO '),
(6,	'VALPARAÍSO '),
(7,	'DEL LIBERTADOR GRAL. BERNARDO O\'HIGGINS '),
(8,	'DEL MAULE'),
(9,	'DEL BIOBÍO '),
(10,	'DE LA ARAUCANÍA'),
(11,	'DE LOS RÍOS'),
(12,	'DE LOS LAGOS'),
(13,	'AISÉN DEL GRAL. CARLOS IBAÑEZ DEL CAMPO '),
(14,	'MAGALLANES Y DE LA ANTÁRTICA CHILENA'),
(15,	'METROPOLITANA DE SANTIAGO');

DROP TABLE IF EXISTS `votes`;
CREATE TABLE `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `nickname` text NOT NULL,
  `rut` text NOT NULL,
  `email` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `option_web` tinyint(1) DEFAULT 0,
  `option_tv` tinyint(1) DEFAULT 0,
  `option_socialmedia` tinyint(1) DEFAULT 0,
  `option_referral` tinyint(1) DEFAULT 0,
  `ip` text NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  UNIQUE KEY `votes_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2023-12-16 14:38:06
