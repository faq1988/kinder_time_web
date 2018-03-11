DROP TABLE IF EXISTS alumno;
CREATE TABLE alumno(
  `tipo_doc` tinyint(1) unsigned not null default 0,
  `doc` int(11) unsigned not null default 0,
  `st` tinyint(1) unsigned not null default 0,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tipo_doc`,`doc`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into alumno values(0,23141242,1,sysdate()),(0,32123123,1,sysdate()),(0,32432234,1,sysdate()),(0,12314342,1,sysdate());

      | id | tipo         | nombre     | apellido | edad | nacimiento | dni      | email              | direccion   | ciudad       | id_establecimiento |
      +----+--------------+------------+----------+------+------------+----------+--------------------+-------------+--------------+--------------------+
      |  1 | SUPERUSUARIO | admin      | admin    |    0 | 2017-12-15 | 12345678 | asd@asd.com        | asd 123     | nada         |               NULL |
      |  2 | ALUMNO       | asf        | asdfa    |   12 | NULL       | 23141242 | asd                | das         | asd          |                  1 |
      |  3 | ALUMNO       | asdfsafd   | asdfafd  |   12 | NULL       | 32123123 | facasdc            | asdfa 25    | fasdfa       |                  1 |
      |  4 | ALUMNO       | alfredo    | uno      |   14 | NULL       | 32432234 | asd@asd.com        | calle 1     | bahia blanca |                  1 |
      |  5 | MAESTRO      | alfredo    | perez    |   34 | NULL       | 12123123 | asd@asd.com        | algo 123    | bahia blanca |                  1 |
      |  6 | TUTOR        | juan       | lopez    |   33 | 2017-12-13 | 31212323 | fdsfsadfds         | fdsfsad 123 | bahia blanca |                  1 |
      |  7 | ALUMNO       | jose maria | rodario  |   23 | NULL       | 12314342 | adsasdasd@mail.com | direccion 2 | ciudadina    |               NULL |



DROP TABLE IF EXISTS persona;
CREATE TABLE `persona` (
  `tipo_doc` tinyint(1) unsigned not null default 0,
  `doc` int(11) unsigned not null default 0,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `edad` tinyint(3) unsigned not null DEFAULT 1,
  `nacimiento` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `id_establecimiento` int DEFAULT NULL,
  `st` tinyint(1) unsigned not null DEFAULT 1,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tipo_doc`,`doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into persona values(0,12345678, trim('admin     ') , trim('admin  '),  0 , '2017-12-15' , trim('asd@asd.com       '),trim('asd 123    '),trim('nada        '),null,0,sysdate());
insert into persona values(0,23141242, trim('asf       ') , trim('asdfa  '), 12 , NULL       ,  trim('asd               '),trim('das        '),trim('asd         '),1,0,sysdate());
insert into persona values(0,32123123, trim('asdfsafd  ') , trim('asdfafd'), 12 , NULL       ,  trim('facasdc           '),trim('asdfa 25   '),trim('fasdfa      '),1,0,sysdate());
insert into persona values(0,32432234, trim('alfredo   ') , trim('uno    '), 14 , NULL       ,  trim('asd@asd.com       '),trim('calle 1    '),trim('bahia blanca'),1,0,sysdate());
insert into persona values(0,12123123, trim('alfredo   ') , trim('perez  '), 34 , NULL       ,  trim('asd@asd.com       '),trim('algo 123   '),trim('bahia blanca'),1,0,sysdate());
insert into persona values(0,31212323, trim('juan      ') , trim('lopez  '), 33 , '2017-12-13'  ,trim('fdsfsadfds        '),trim('fdsfsad 123'),trim('bahia blanca'),1,0,sysdate());
insert into persona values(0,12314342, trim('jose maria') , trim('rodario'), 23 , NULL        ,trim('adsasdasd@mail.com'),trim('direccion 2'),trim('ciudadina   '),null,0,sysdate());

DROP TABLE IF EXISTS usuario;
  CREATE TABLE `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipo_doc` tinyint(1) unsigned default null,
  `doc` int(11) unsigned default null,
  `rol` varchar(50) DEFAULT NULL,
  `id_establecimiento` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

insert into usuario values(1,trim(' admin')           , 'fe01ce2a7fbac8fafaed7c982a04e229',null, NULL,trim(' SUPERUSER'),     NULL, NULL, '2017-12-12 22:21:36 ');
insert into usuario values(2,trim(' padre')           , 'fe01ce2a7fbac8fafaed7c982a04e229',0,     31212323,trim('TUTOR'),         NULL, NULL, '2017-12-12 22:21:36 ');
insert into usuario values(3,trim(' establecimiento') , 'fe01ce2a7fbac8fafaed7c982a04e229',null, NULL,trim(' ESTABLECIMIENTO'),  1, NULL, '2017-12-12 22:21:36 ');
insert into usuario values(4,trim(' maestro')         , 'fe01ce2a7fbac8fafaed7c982a04e229',0,    12123123,trim(' MAESTRO'),       NULL, NULL, '2017-12-12 22:21:36 ');

DROP TABLE IF EXISTS mensajes_alumnos;
CREATE TABLE IF NOT EXISTS `mensajes_alumnos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_doc` tinyint(1) unsigned not null default 0,
  `doc` int(11) unsigned not null default 0,
  `mensaje` varchar(200) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `fechahora` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `mensajes_alumnos` (`id`, `tipo_doc`,`doc`, `mensaje`, `asunto`, `fechahora`) VALUES
	(1, 0,12345678, 'algo pasa con su hijo', 'suceso extraño', '2017-11-01 16:36:10'),
	(2,0, 12345678, 'deberia tener mas cuidado con el niño, es muy peligroso', 'peligro al volante', '2017-11-02 16:52:53'),
	(3, 0,12345678, 'el niño se porta muy mal, no puedo controlarlo todo el tiempo', 'mala conducta', '2017-11-02 16:53:54'),
	(4, 0,12345678, 'vengan urgente al colegio, ha sufrido un accidente muy grave', 'urgencia', '2017-11-02 16:54:59');

DROP TABLE IF EXISTS inasistencias;
CREATE TABLE IF NOT EXISTS `inasistencias` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` timestamp DEFAULT CURRENT_TIMESTAMP,
  `tipo_doc` tinyint(1) unsigned not null default 0,
  `doc` int(11) unsigned not null default 0,
  `descripcion` varchar(50) DEFAULT NULL,
  `visto` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `inasistencias` (`id`, `fechahora`, `tipo_doc`, `doc`,`descripcion`, `visto`) VALUES
	(1, '2017-12-15 15:02:51',0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(2, '2017-12-15 15:02:51',0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(3, '2017-12-15 15:02:51',0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(4, '2017-12-15 15:02:51',0, 23141242, 'ha faltado a la clase de hoy', b'1'),
	(5, '2017-12-15 15:02:51',0, 23141242, 'ha faltado a la clase de hoy', b'1');

DROP TABLE IF EXISTS hijos_por_tutores;
  CREATE TABLE IF NOT EXISTS `hijos_por_tutores` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `tipo_doc_tutor` tinyint(1) unsigned not null default 0,
    `doc_tutor` int(11) unsigned not null default 0,
    `tipo_doc_alumno` tinyint(1) unsigned not null default 0,
    `doc_alumno` int(11) unsigned not null default 0,
    `vinculo` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

  INSERT INTO `hijos_por_tutores` (`id`, `tipo_doc_tutor`,`doc_tutor`, `tipo_doc_alumno`,`doc_alumno`, `vinculo`) VALUES
  	(1, 0,31212323, 0,32432234, 'PADRE');

DROP TABLE IF EXISTS evento;
    CREATE TABLE IF NOT EXISTS `evento` (
      `id` bigint(20) NOT NULL AUTO_INCREMENT,
      `fechahora` timestamp DEFAULT CURRENT_TIMESTAMP,
      `accion` varchar(50) DEFAULT NULL,
      `descripcion` varchar(200) DEFAULT NULL,
      `tipo_doc_alumno` tinyint(1) unsigned not null default 0,
      `doc_alumno` int(11) unsigned not null default 0,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

    INSERT INTO `evento` (`id`, `fechahora`, `accion`, `descripcion`, `tipo_doc_alumno`,`doc_alumno`) VALUES
    	(1, '2017-10-23 21:16:59', 'Comer', 'Comio bien',0, 23141242),
    	(2, '2017-10-23 21:31:57', 'Dormir', 'Durmio mal',0, 32123123),
    	(4, '2017-10-23 22:43:17', 'Comer', NULL, 0,23141242),
    	(5, '2017-10-23 22:43:17', 'Comer', NULL,0, 32123123),
    	(6, '2017-10-23 22:43:17', 'Comer', NULL,0, 32432234),
    	(7, '2017-10-23 22:53:25', 'Comer', NULL,0, 32123123),
    	(8, '2017-10-23 22:53:39', 'Dormir', NULL, 0,23141242),
    	(9, '2017-10-23 22:53:39', 'Dormir', NULL,0, 32123123),
    	(10, '2017-10-24 10:09:42', 'Comer', 'Comio bien todo el dia', 0,23141242);

DROP TABLE IF EXISTS deberes;
      CREATE TABLE IF NOT EXISTS `deberes` (
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        `tipo_doc_alumno` tinyint(1) unsigned not null default 0,
        `doc_alumno` int(11) unsigned not null default 0,
        `tipo_doc_maestro` tinyint(1) unsigned not null default 0,
        `doc_maestro` int(11) unsigned not null default 0,
        `fechahora` timestamp DEFAULT CURRENT_TIMESTAMP,
        `materia` varchar(50) DEFAULT NULL,
        `descripcion` varchar(200) DEFAULT NULL,
        `fecha_entrega` date DEFAULT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

      INSERT INTO `deberes` (`id`, `tipo_doc_alumno`,`doc_alumno`, `tipo_doc_maestro`,`doc_maestro`, `fechahora`, `materia`, `descripcion`, `fecha_entrega`) VALUES
      	(1,0,23141242, 0,12123123, '2018-01-03 16:14:50', 'matematicas', 'hacer ejercicios', '2018-01-03');

DROP TABLE IF EXISTS autorizaciones;
        CREATE TABLE IF NOT EXISTS `autorizaciones` (
          `id` bigint(20) NOT NULL AUTO_INCREMENT,
          `tipo_doc_tutor` tinyint(1) unsigned not null default 0,
          `doc_tutor` int(11) unsigned not null default 0,
          `tipo_doc_alumno` tinyint(1) unsigned not null default 0,
          `doc_alumno` int(11) unsigned not null default 0,
          `fechahora` timestamp DEFAULT CURRENT_TIMESTAMP,
          `asunto` varchar(50) DEFAULT NULL,
          `descripcion` varchar(200) DEFAULT NULL,
          `leido` bit(1) DEFAULT NULL,
          `estado` varchar(50) DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

        INSERT INTO `autorizaciones` (`id`, `tipo_doc_tutor`,`doc_tutor`, `tipo_doc_alumno`,`doc_alumno`, `fechahora`, `asunto`, `descripcion`, `leido`, `estado`) VALUES
        	(1, 0,31212323, 0,32432234, '2017-12-02 20:30:14', 'Comida', 'Solicito autorización para comer papas fritas', b'0', 'RECHAZADO');

DROP TABLE IF EXISTS alumnos_por_clase;
          CREATE TABLE IF NOT EXISTS `alumnos_por_clase` (
            `id` bigint(20) NOT NULL AUTO_INCREMENT,
            `id_clase` bigint(20) DEFAULT NULL,
            `tipo_doc_alumno` tinyint(1) unsigned not null default 0,
            `doc_alumno` int(11) unsigned not null default 0,
            `fecha_hora` timestamp DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

          INSERT INTO `alumnos_por_clase` (`id`, `id_clase`, `tipo_doc_alumno`,`doc_alumno`, `fecha_hora`) VALUES
          	(1, 2, 0,23141242, '2017-12-15 15:21:17'),
          	(2, 3, 0,32432234, '2018-02-26 17:30:30');
