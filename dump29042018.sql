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

-- Dumping structure for table institucion_educativa.alumno
CREATE TABLE IF NOT EXISTS `alumno` (
  `tipo_doc` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc` int(11) unsigned NOT NULL DEFAULT '0',
  `st` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tipo_doc`,`doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.alumno: ~4 rows (approximately)
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` (`tipo_doc`, `doc`, `st`, `ts`) VALUES
	(0, 12314342, 1, '2018-03-12 15:44:53'),
	(0, 23141242, 1, '2018-03-12 15:44:53'),
	(0, 32123123, 1, '2018-03-12 15:44:53'),
	(0, 32432234, 1, '2018-03-12 15:44:53');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.alumnos_por_clase
CREATE TABLE IF NOT EXISTS `alumnos_por_clase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_clase` bigint(20) DEFAULT NULL,
  `tipo_doc_alumno` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_alumno` int(11) unsigned NOT NULL DEFAULT '0',
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.alumnos_por_clase: ~2 rows (approximately)
/*!40000 ALTER TABLE `alumnos_por_clase` DISABLE KEYS */;
INSERT INTO `alumnos_por_clase` (`id`, `id_clase`, `tipo_doc_alumno`, `doc_alumno`, `fecha_hora`) VALUES
	(1, 1, 0, 23141242, '2017-12-15 15:21:17'),
	(2, 1, 0, 32432234, '2018-02-26 17:30:30');
/*!40000 ALTER TABLE `alumnos_por_clase` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.aula
CREATE TABLE IF NOT EXISTS `aula` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `capacidad` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.aula: ~5 rows (approximately)
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` (`id`, `nombre`, `capacidad`) VALUES
	(11, 'dos', 20),
	(12, 'tres', 30),
	(15, 'Salita uno', 25),
	(16, 'aula nueva', 15),
	(17, 'aula segura', 20);
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.autorizaciones
CREATE TABLE IF NOT EXISTS `autorizaciones` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_doc_tutor` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_tutor` int(11) unsigned NOT NULL DEFAULT '0',
  `tipo_doc_alumno` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_alumno` int(11) unsigned NOT NULL DEFAULT '0',
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `asunto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `leido` bit(1) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.autorizaciones: ~0 rows (approximately)
/*!40000 ALTER TABLE `autorizaciones` DISABLE KEYS */;
INSERT INTO `autorizaciones` (`id`, `tipo_doc_tutor`, `doc_tutor`, `tipo_doc_alumno`, `doc_alumno`, `fechahora`, `asunto`, `descripcion`, `leido`, `estado`) VALUES
	(1, 0, 31212323, 0, 32432234, '2017-12-02 20:30:14', 'Comida', 'Solicito autorización para comer papas fritas', b'0', 'RECHAZADO');
/*!40000 ALTER TABLE `autorizaciones` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.circulares
CREATE TABLE IF NOT EXISTS `circulares` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_doc_destino` tinyint(4) DEFAULT NULL,
  `doc_destino` int(11) DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `mensaje` varchar(2000) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.circulares: ~2 rows (approximately)
/*!40000 ALTER TABLE `circulares` DISABLE KEYS */;
INSERT INTO `circulares` (`id`, `tipo_doc_destino`, `doc_destino`, `asunto`, `mensaje`, `fechahora`) VALUES
	(20, 0, 32123123, 'asunto prueba', 'adsfadf', '2018-04-24 22:52:48'),
	(21, 0, 23141242, 'adsf', 'asdf', '2018-04-24 22:56:48'),
	(22, 0, 32432234, 'adsf', 'asdf', '2018-04-24 22:56:48');
/*!40000 ALTER TABLE `circulares` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.clase
CREATE TABLE IF NOT EXISTS `clase` (
  `id_clase` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  `dias` char(7) NOT NULL DEFAULT '0000000',
  `hr_entrada` time DEFAULT NULL,
  `hr_salida` time DEFAULT NULL,
  `establecimiento` bigint(20) DEFAULT NULL,
  `st` tinyint(2) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_clase`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.clase: ~1 rows (approximately)
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
INSERT INTO `clase` (`id_clase`, `descripcion`, `dias`, `hr_entrada`, `hr_salida`, `establecimiento`, `st`, `ts`) VALUES
	(1, 'clase de mañana', '1010100', '09:00:00', '14:00:00', 1, 1, '2018-03-26 16:19:16');
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.clase_aula
CREATE TABLE IF NOT EXISTS `clase_aula` (
  `id_clase` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `st` tinyint(2) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_clase`,`id_aula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.clase_aula: ~0 rows (approximately)
/*!40000 ALTER TABLE `clase_aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `clase_aula` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.contacto: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `comentario`, `fechahora`) VALUES
	(5, 'facundo', 'carignano', 'facu_carignano@hotmail.com', '2914391353', 'comentario de prueba', '2018-02-21 10:29:53'),
	(6, 'facundo', 'carignano', 'facu_carignano@hotmail.com', '2914391353', 'probando', '2018-04-23 17:14:10');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.deberes
CREATE TABLE IF NOT EXISTS `deberes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_doc_alumno` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_alumno` int(11) unsigned NOT NULL DEFAULT '0',
  `tipo_doc_maestro` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_maestro` int(11) unsigned NOT NULL DEFAULT '0',
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `materia` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.deberes: ~5 rows (approximately)
/*!40000 ALTER TABLE `deberes` DISABLE KEYS */;
INSERT INTO `deberes` (`id`, `tipo_doc_alumno`, `doc_alumno`, `tipo_doc_maestro`, `doc_maestro`, `fechahora`, `materia`, `descripcion`, `fecha_entrega`) VALUES
	(1, 0, 32432234, 0, 12123123, '2018-01-03 16:14:50', 'matematicas', 'hacer ejercicios', '2018-01-03'),
	(2, 0, 0, 0, 0, '2018-03-12 16:23:04', 'Matematicas', 'afdasdfasdf', '2018-03-13'),
	(3, 0, 0, 0, 0, '2018-03-14 16:10:25', 'Historia', 'lalalalala', '2018-03-08'),
	(4, 0, 0, 0, 0, '2018-04-16 17:12:19', 'Historia', 'Investigar la muerte de Perón', '2018-04-18'),
	(5, 0, 0, 0, 12123123, '2018-04-16 17:19:06', 'Ingles', 'asdfasdfasdf', '2018-04-27');
/*!40000 ALTER TABLE `deberes` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `tipo_doc_alumno` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_alumno` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.evento: ~9 rows (approximately)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `fechahora`, `accion`, `descripcion`, `tipo_doc_alumno`, `doc_alumno`) VALUES
	(1, '2017-10-23 21:16:59', 'Comer', 'Comio bien', 0, 23141242),
	(2, '2017-10-23 21:31:57', 'Dormir', 'Durmio mal', 0, 32123123),
	(4, '2017-10-23 22:43:17', 'Comer', NULL, 0, 23141242),
	(5, '2017-10-23 22:43:17', 'Comer', NULL, 0, 32123123),
	(6, '2017-10-23 22:43:17', 'Comer', NULL, 0, 32432234),
	(7, '2017-10-23 22:53:25', 'Comer', NULL, 0, 32123123),
	(8, '2017-10-23 22:53:39', 'Dormir', NULL, 0, 23141242),
	(9, '2017-10-23 22:53:39', 'Dormir', NULL, 0, 32123123),
	(10, '2017-10-24 10:09:42', 'Comer', 'Comio bien todo el dia', 0, 23141242);
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.hijos_por_tutores
CREATE TABLE IF NOT EXISTS `hijos_por_tutores` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_doc_tutor` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_tutor` int(11) unsigned NOT NULL DEFAULT '0',
  `tipo_doc_hijo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc_hijo` int(11) unsigned NOT NULL DEFAULT '0',
  `vinculo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.hijos_por_tutores: ~0 rows (approximately)
/*!40000 ALTER TABLE `hijos_por_tutores` DISABLE KEYS */;
INSERT INTO `hijos_por_tutores` (`id`, `tipo_doc_tutor`, `doc_tutor`, `tipo_doc_hijo`, `doc_hijo`, `vinculo`) VALUES
	(1, 0, 31212323, 0, 32432234, 'PADRE');
/*!40000 ALTER TABLE `hijos_por_tutores` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.inasistencias
CREATE TABLE IF NOT EXISTS `inasistencias` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_doc` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc` int(11) unsigned NOT NULL DEFAULT '0',
  `descripcion` varchar(50) DEFAULT NULL,
  `visto` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.inasistencias: ~5 rows (approximately)
/*!40000 ALTER TABLE `inasistencias` DISABLE KEYS */;
INSERT INTO `inasistencias` (`id`, `fechahora`, `tipo_doc`, `doc`, `descripcion`, `visto`) VALUES
	(1, '2017-12-15 15:02:51', 0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(2, '2017-12-15 15:02:51', 0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(3, '2017-12-15 15:02:51', 0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(4, '2017-12-15 15:02:51', 0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(5, '2017-12-15 15:02:51', 0, 23141242, 'ha faltado a la clase de hoy', b'1');
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

-- Dumping data for table institucion_educativa.institucion: ~2 rows (approximately)
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` (`id`, `nombre`, `domicilio`, `ciudad`, `pais`, `telefono`, `mail`) VALUES
	(1, 'Establecimiento uno', 'calle y numero', 'Bahia Blanca', 'Argentina', '123456', 'asd@asd.com'),
	(6, 'Sagrado corazón de jesús', 'Las moras 54', 'Buenos aires', 'Argentina', '0351-123456', 'asd@asd.com');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.maestro_clase
CREATE TABLE IF NOT EXISTS `maestro_clase` (
  `tipo_doc` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc` int(10) unsigned NOT NULL,
  `id_clase` int(11) NOT NULL,
  `desde` datetime DEFAULT NULL,
  `st` tinyint(2) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tipo_doc`,`doc`,`id_clase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.maestro_clase: ~0 rows (approximately)
/*!40000 ALTER TABLE `maestro_clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestro_clase` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.mensajes_alumnos
CREATE TABLE IF NOT EXISTS `mensajes_alumnos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_doc` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc` int(11) unsigned NOT NULL DEFAULT '0',
  `mensaje` varchar(200) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.mensajes_alumnos: ~4 rows (approximately)
/*!40000 ALTER TABLE `mensajes_alumnos` DISABLE KEYS */;
INSERT INTO `mensajes_alumnos` (`id`, `tipo_doc`, `doc`, `mensaje`, `asunto`, `fechahora`) VALUES
	(1, 0, 31212323, 'algo pasa con su hijo', 'suceso extraño', '2017-11-01 16:36:10'),
	(2, 0, 31212323, 'deberia tener mas cuidado con el niño, es muy peligroso', 'peligro al volante', '2017-11-02 16:52:53'),
	(3, 0, 31212323, 'el niño se porta muy mal, no puedo controlarlo todo el tiempo', 'mala conducta', '2017-11-02 16:53:54'),
	(4, 0, 31212323, 'vengan urgente al colegio, ha sufrido un accidente muy grave', 'urgencia', '2017-11-02 16:54:59');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.menu_semanal: ~3 rows (approximately)
/*!40000 ALTER TABLE `menu_semanal` DISABLE KEYS */;
INSERT INTO `menu_semanal` (`id`, `fecha`, `desayuno`, `almuerzo`, `merienda`, `cena`) VALUES
	(1, '2018-02-19', 'cafe con leche y medialunas', 'arroz con pollo', 'te con masitas', 'fideos con manteca'),
	(2, '2018-02-19', 'te con pan', 'bife con pure', 'jugo con torta', 'verduras'),
	(4, '2017-12-15', 'te con leche', 'milanesas', 'cafe', 'asado'),
	(5, '2017-12-14', 'huevos', 'carne', 'leche', 'zapallo'),
	(6, '2018-01-03', 'te con leche', 'milanesas', 'cafe', 'asado'),
	(7, '2018-02-28', 'te con tostadas', 'milanesa con pure', 'cafe con leche y torta fritas', 'tallarines con salsa'),
	(8, '0000-00-00', NULL, NULL, NULL, NULL),
	(9, '2018-03-06', 'te con tostadas', 'milanesa con pure', 'cafe', 'tallarines con salsa');
/*!40000 ALTER TABLE `menu_semanal` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `tipo_doc` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `doc` int(11) unsigned NOT NULL DEFAULT '0',
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `edad` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `nacimiento` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `id_establecimiento` int(11) DEFAULT NULL,
  `st` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tipo_doc`,`doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.persona: ~7 rows (approximately)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`tipo_doc`, `doc`, `nombre`, `apellido`, `edad`, `nacimiento`, `email`, `direccion`, `ciudad`, `id_establecimiento`, `st`, `ts`) VALUES
	(0, 12123123, 'alfredo', 'perez', 34, NULL, 'asd@asd.com', 'algo 123', 'bahia blanca', 1, 1, '2018-03-12 15:45:15'),
	(0, 12314342, 'jose maria', 'rodario', 23, NULL, 'adsasdasd@mail.com', 'direccion 2', 'ciudadina', 2, 1, '2018-03-12 15:45:15'),
	(0, 12345678, 'admin', 'admin', 0, '2017-12-15', 'asd@asd.com', 'asd 123', 'nada', 1, 1, '2018-03-12 15:45:15'),
	(0, 23141242, 'asf', 'asdfa', 12, NULL, 'asd', 'das', 'asd', 1, 1, '2018-03-12 15:45:15'),
	(0, 31212323, 'juan', 'lopez', 33, '2017-12-13', 'fdsfsadfds', 'fdsfsad 123', 'bahia blanca', 1, 1, '2018-03-12 15:45:15'),
	(0, 32123123, 'asdfsafd', 'asdfafd', 12, NULL, 'facasdc', 'asdfa 25', 'fasdfa', 1, 1, '2018-03-12 15:45:15'),
	(0, 32432234, 'alfredo', 'uno', 14, NULL, 'asd@asd.com', 'calle 1', 'bahia blanca', 1, 1, '2018-03-12 15:45:15');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apellido` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipo_doc` tinyint(1) unsigned DEFAULT NULL,
  `doc` int(11) unsigned DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `id_establecimiento` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.usuario: ~4 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `username`, `password`, `tipo_doc`, `doc`, `rol`, `id_establecimiento`, `email`, `fechahora`) VALUES
	(1, 'admin', 'admin', 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL, NULL, 'SUPERUSER', 1, NULL, '2017-12-12 22:21:36'),
	(2, 'padre', 'padre', 'padre', 'fe01ce2a7fbac8fafaed7c982a04e229', 0, 31212323, 'TUTOR', 1, NULL, '2017-12-12 22:21:36'),
	(3, 'establecimiento', 'establecimiento', 'establecimiento', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL, NULL, 'ESTABLECIMIENTO', 1, NULL, '2017-12-12 22:21:36'),
	(4, 'maestro', 'maestro', 'maestro', 'fe01ce2a7fbac8fafaed7c982a04e229', 0, 12123123, 'MAESTRO', 1, NULL, '2017-12-12 22:21:36');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
