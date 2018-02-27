-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for institucion_educativa
CREATE DATABASE IF NOT EXISTS `institucion_educativa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `institucion_educativa`;

-- Dumping structure for table institucion_educativa.alumnos_por_clase
CREATE TABLE IF NOT EXISTS `alumnos_por_clase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_clase` bigint(20) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.alumnos_por_clase: ~0 rows (approximately)
/*!40000 ALTER TABLE `alumnos_por_clase` DISABLE KEYS */;
INSERT INTO `alumnos_por_clase` (`id`, `id_clase`, `id_alumno`, `fecha_hora`) VALUES
	(1, 2, 2, '2017-12-15 15:21:17'),
	(2, 3, 10, '2018-02-26 17:30:30');
/*!40000 ALTER TABLE `alumnos_por_clase` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.aula
CREATE TABLE IF NOT EXISTS `aula` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `capacidad` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.aula: ~2 rows (approximately)
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` (`id`, `nombre`, `capacidad`) VALUES
	(10, 'uno', 10),
	(11, 'dos', 20),
	(12, 'tres', 30),
	(13, 'cuatro', 40);
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.autorizaciones
CREATE TABLE IF NOT EXISTS `autorizaciones` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tutor` bigint(20) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `asunto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `leido` bit(1) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.autorizaciones: ~0 rows (approximately)
/*!40000 ALTER TABLE `autorizaciones` DISABLE KEYS */;
INSERT INTO `autorizaciones` (`id`, `id_tutor`, `id_alumno`, `fechahora`, `asunto`, `descripcion`, `leido`, `estado`) VALUES
	(1, 6, 4, '2017-12-02 20:30:14', 'Comida', 'Solicito autorización para comer papas fritas', b'0', 'RECHAZADO');
/*!40000 ALTER TABLE `autorizaciones` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.circulares
CREATE TABLE IF NOT EXISTS `circulares` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario_origen` bigint(20) DEFAULT NULL,
  `usuario_destino` bigint(20) DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `mensaje` varchar(2000) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.circulares: ~0 rows (approximately)
/*!40000 ALTER TABLE `circulares` DISABLE KEYS */;
INSERT INTO `circulares` (`id`, `usuario_origen`, `usuario_destino`, `asunto`, `mensaje`, `fechahora`) VALUES
	(1, 1, 2, 'asunto de prueba', 'mensaje de prueba', '2018-02-26 10:18:52');
/*!40000 ALTER TABLE `circulares` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.clase
CREATE TABLE IF NOT EXISTS `clase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.clase: ~0 rows (approximately)
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.contacto: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `comentario`, `fechahora`) VALUES
	(5, 'facundo', 'carignano', 'facu_carignano@hotmail.com', '2914391353', 'comentario de prueba', '2018-02-21 10:29:53');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.deberes
CREATE TABLE IF NOT EXISTS `deberes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_alumno` bigint(20) DEFAULT NULL,
  `id_maestro` bigint(20) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `materia` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.deberes: ~0 rows (approximately)
/*!40000 ALTER TABLE `deberes` DISABLE KEYS */;
INSERT INTO `deberes` (`id`, `id_alumno`, `id_maestro`, `fechahora`, `materia`, `descripcion`, `fecha_entrega`) VALUES
	(1, 4, 5, '2018-01-03 16:14:50', 'matematicas', 'hacer ejercicios', '2018-01-03');
/*!40000 ALTER TABLE `deberes` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.evento: ~9 rows (approximately)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `fechahora`, `accion`, `descripcion`, `id_alumno`) VALUES
	(1, '2017-10-23 21:16:59', 'Comer', 'Comio bien', 2),
	(2, '2017-10-23 21:31:57', 'Dormir', 'Durmio mal', 3),
	(4, '2017-10-23 22:43:17', 'Comer', NULL, 2),
	(5, '2017-10-23 22:43:17', 'Comer', NULL, 3),
	(6, '2017-10-23 22:43:17', 'Comer', NULL, 4),
	(7, '2017-10-23 22:53:25', 'Comer', NULL, 3),
	(8, '2017-10-23 22:53:39', 'Dormir', NULL, 2),
	(9, '2017-10-23 22:53:39', 'Dormir', NULL, 3),
	(10, '2017-10-24 10:09:42', 'Comer', 'Comio bien todo el dia', 2);
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.hijos_por_tutores
CREATE TABLE IF NOT EXISTS `hijos_por_tutores` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tutor` bigint(20) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  `vinculo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.hijos_por_tutores: ~2 rows (approximately)
/*!40000 ALTER TABLE `hijos_por_tutores` DISABLE KEYS */;
INSERT INTO `hijos_por_tutores` (`id`, `id_tutor`, `id_alumno`, `vinculo`) VALUES
	(1, 6, 4, 'PADRE'),
	(2, 8, 4, 'MADRE');
/*!40000 ALTER TABLE `hijos_por_tutores` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.inasistencias
CREATE TABLE IF NOT EXISTS `inasistencias` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_alumno` bigint(20) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `visto` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.inasistencias: ~5 rows (approximately)
/*!40000 ALTER TABLE `inasistencias` DISABLE KEYS */;
INSERT INTO `inasistencias` (`id`, `fechahora`, `id_alumno`, `descripcion`, `visto`) VALUES
	(1, '2017-12-15 15:02:51', 2, 'ha faltado a la clase de hoy', b'1'),
	(2, '2017-12-15 15:02:51', 2, 'ha faltado a la clase de hoy', b'1'),
	(3, '2017-12-15 15:02:51', 2, 'ha faltado a la clase de hoy', b'1'),
	(4, '2017-12-15 15:02:51', 2, 'ha faltado a la clase de hoy', b'1'),
	(5, '2017-12-15 15:02:51', 2, 'ha faltado a la clase de hoy', b'1');
/*!40000 ALTER TABLE `inasistencias` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.institucion
CREATE TABLE IF NOT EXISTS `institucion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL,
  `ciudad` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.institucion: ~3 rows (approximately)
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` (`id`, `nombre`, `domicilio`, `ciudad`, `pais`, `telefono`, `mail`) VALUES
	(1, 'Establecimiento uno', 'calle y numero', 'Bahia Blanca', 'Argentina', '123456', 'asd@asd.com'),
	(6, 'Sagrado corazón de jesús', 'Las moras 54', 'Buenos aires', 'Argentina', '0351-123456', 'asd@asd.com');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.mensajes_alumnos
CREATE TABLE IF NOT EXISTS `mensajes_alumnos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tutor` bigint(20) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.mensajes_alumnos: ~3 rows (approximately)
/*!40000 ALTER TABLE `mensajes_alumnos` DISABLE KEYS */;
INSERT INTO `mensajes_alumnos` (`id`, `id_tutor`, `mensaje`, `asunto`, `fechahora`) VALUES
	(1, 1, 'algo pasa con su hijo', 'suceso extraño', '2017-11-01 16:36:10'),
	(2, 1, 'deberia tener mas cuidado con el niño, es muy peligroso', 'peligro al volante', '2017-11-02 16:52:53'),
	(3, 1, 'el niño se porta muy mal, no puedo controlarlo todo el tiempo', 'mala conducta', '2017-11-02 16:53:54'),
	(4, 1, 'vengan urgente al colegio, ha sufrido un accidente muy grave', 'urgencia', '2017-11-02 16:54:59');
/*!40000 ALTER TABLE `mensajes_alumnos` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.menu_semanal
CREATE TABLE IF NOT EXISTS `menu_semanal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `desayuno` varchar(100) DEFAULT NULL,
  `almuerzo` varchar(100) DEFAULT NULL,
  `merienda` varchar(100) DEFAULT NULL,
  `cena` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.menu_semanal: ~3 rows (approximately)
/*!40000 ALTER TABLE `menu_semanal` DISABLE KEYS */;
INSERT INTO `menu_semanal` (`id`, `fecha`, `desayuno`, `almuerzo`, `merienda`, `cena`) VALUES
	(1, '2018-02-19', 'cafe con leche y medialunas', 'arroz con pollo', 'te con masitas', 'fideos con manteca'),
	(2, '2018-02-19', 'te con pan', 'bife con pure', 'jugo con torta', 'verduras'),
	(4, '2017-12-15', 'te con leche', 'milanesas', 'cafe', 'asado'),
	(5, '2017-12-14', 'huevos', 'carne', 'leche', 'zapallo'),
	(6, '2018-01-03', 'te con leche', 'milanesas', 'cafe', 'asado'),
	(7, '2018-02-28', 'te con tostadas', 'milanesa con pure', 'cafe con leche y torta fritas', 'tallarines con salsa');
/*!40000 ALTER TABLE `menu_semanal` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `id_establecimiento` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.persona: ~8 rows (approximately)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id`, `tipo`, `nombre`, `apellido`, `edad`, `nacimiento`, `dni`, `email`, `direccion`, `ciudad`, `id_establecimiento`) VALUES
	(1, 'SUPERUSUARIO', 'admin', 'admin', 0, '2017-12-15', '12345678', 'asd@asd.com', 'asd 123', 'nada', NULL),
	(4, 'ALUMNO', 'roberto', 'carlos', 10, NULL, '32432234', 'asd@asd.com', 'calle 1', 'bahia blanca', 1),
	(5, 'MAESTRO', 'alfredo', 'perez', 34, NULL, '12123123', 'asd@asd.com', 'algo 123', 'bahia blanca', 1),
	(6, 'TUTOR', 'juan', 'lopez', 33, '2017-12-13', '31212323', 'fdsfsadfds', 'fdsfsad 123', 'bahia blanca', 1),
	(7, 'ALUMNO', 'alumno', 'dos', 4, NULL, '12123142', 'asd@asd.com', 'algo 123', 'bahia blanca', NULL),
	(8, 'TUTOR', 'ana', 'perez', 33, '2017-12-13', '31212323', 'fdsfsadfds', 'fdsfsad 123', 'bahia blanca', 1),
	(9, 'ALUMNO', 'luciano', 'pereyra', 12, NULL, '12345678', 'asd@asd.com', 'luis agote 123', 'bahia blanca', NULL),
	(10, 'ALUMNO', 'Ricardo', 'Fort', 11, NULL, '32165478', 'asd@asd.com', 'Alem 321', 'Buenos aires', NULL);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_persona` bigint(20) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `id_establecimiento` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.usuario: ~6 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `username`, `password`, `id_persona`, `rol`, `id_establecimiento`, `email`, `fechahora`) VALUES
	(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 1, 'SUPERUSER', NULL, 'asd@asd.com', '2017-12-12 22:21:36'),
	(2, 'padre', 'fe01ce2a7fbac8fafaed7c982a04e229', 6, 'TUTOR', NULL, 'asd@asd.com', '2017-12-12 22:21:36'),
	(3, 'establecimiento', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL, 'ESTABLECIMIENTO', 1, 'asd@asd.com', '2017-12-12 22:21:36'),
	(4, 'maestro', 'fe01ce2a7fbac8fafaed7c982a04e229', 5, 'MAESTRO', NULL, 'asd@asd.com', '2017-12-12 22:21:36'),
	(5, 'madre', 'fe01ce2a7fbac8fafaed7c982a04e229', 8, 'TUTOR', NULL, 'asd@asd.com', '2017-12-12 22:21:36');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
