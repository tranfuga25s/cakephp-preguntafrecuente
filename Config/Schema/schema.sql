USE `turnera`;
DROP TABLE IF EXISTS `pregunta`;
DROP TABLE IF EXISTS `comentarios`;
DROP TABLE IF EXISTS `categorias`;


CREATE TABLE `pregunta` (
	`id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
	`pregunta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`respuesta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,
	`publicado` tinyint(1) NOT NULL,
	`categoria_id` int(11) NOT NULL,
	`leido` int(11) DEFAULT 0 NOT NULL,
	`util` int(11) DEFAULT 0 NOT NULL,	PRIMARY KEY  (`id_pregunta`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;

CREATE TABLE `comentarios` (
	`id_comentario` int(11) NOT NULL AUTO_INCREMENT,
	`pregunta_id` int(11) NOT NULL,
	`usuario` text CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
	`comentario` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,
	`aprobado` tinyint(1) DEFAULT '0' NOT NULL,	PRIMARY KEY  (`id_comentario`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;

CREATE TABLE `categorias` (
	`id_categoria` int(11) NOT NULL AUTO_INCREMENT,
	`nombre` text NOT NULL,
	`parent_id` int(11) DEFAULT NULL,
	`lft` int(11) NOT NULL,
	`rght` int(11) NOT NULL,
	`publicada` tinyint(1) DEFAULT '0' NOT NULL,
	`descripcion` text NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id_categoria`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;

