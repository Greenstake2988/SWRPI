-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-12-2021 a las 21:26:57
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_swrpi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, NULL, NULL, NULL, 1639607266, 1639607266);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

DROP TABLE IF EXISTS `colaborador`;
CREATE TABLE IF NOT EXISTS `colaborador` (
  `iddocente` int NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `tiempocompleto` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Si, No',
  `nivelSNI` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'si\\\\r\\\\nno',
  `perfilpromep` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Si, No',
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`iddocente`),
  KEY `fk_docente_proyectosinternos1_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronogramadeactividades`
--

DROP TABLE IF EXISTS `cronogramadeactividades`;
CREATE TABLE IF NOT EXISTS `cronogramadeactividades` (
  `idcronogramadeactividades` int NOT NULL AUTO_INCREMENT,
  `actividad` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_de_realizacion` date NOT NULL,
  `entregables` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`idcronogramadeactividades`),
  KEY `fk_cronogramadeactividades_proyectosinternos1_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregablemeta`
--

DROP TABLE IF EXISTS `entregablemeta`;
CREATE TABLE IF NOT EXISTS `entregablemeta` (
  `identregablemeta` int NOT NULL AUTO_INCREMENT,
  `tipo_entregable` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT '1. academico \\\\\\\\\\\\\\\\n2. humano',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Integración de alumnos de licenciatura al proyecto\\\\\\\\\\\\\\\\nParticipación de alumnos residentes\\\\\\\\\\\\\\\\nParticipación de estudiantes de servicio social\\\\\\\\\\\\\\\\nParticipación de estudiantes por créditos complementarios\\\\\\\\\\\\\\\\nArtículos científicos en revista arbitrada \\\\\\\\\\\\\\\\nArtículos científicos en revista indizadas\\\\\\\\\\\\\\\\nTesis de maestría a desarrollar (indicar en observaciones nombre del tesista, título y anexar programa de trabajo sintético)\\\\\\\\\\\\\\\\nLibros\\\\\\\\\\\\\\\\nCapítulos de libros\\\\\\\\\\\\\\\\nRegistro de Propiedad Intelectual e Industrial\\\\\\\\\\\\\\\\nPrototipos\\\\\\\\\\\\\\\\nPaquetes tecnológicos\\\\\\\\\\\\\\\\nInformes técnicos a empresas o instituciones\\\\\\\\\\\\\\\\nOtros (especifique)',
  `fecha_entrega` date NOT NULL,
  `observacion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evidencia` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'subir documento de evidencia\\\\\\\\\\\\\\\\n(documento)',
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`identregablemeta`),
  KEY `fk_entregablemeta_proyectosinternos1_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechadeproyecto`
--

DROP TABLE IF EXISTS `fechadeproyecto`;
CREATE TABLE IF NOT EXISTS `fechadeproyecto` (
  `idfechadeproyecto` int NOT NULL AUTO_INCREMENT,
  `fecha_registro` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_terminacion` date NOT NULL,
  PRIMARY KEY (`idfechadeproyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

DROP TABLE IF EXISTS `formatos`;
CREATE TABLE IF NOT EXISTS `formatos` (
  `idformatos` int NOT NULL AUTO_INCREMENT,
  `primer_reporte` text COLLATE utf8_unicode_ci,
  `segundo_reporte` text COLLATE utf8_unicode_ci,
  `tercer_reporte` text COLLATE utf8_unicode_ci,
  `protocolo` text COLLATE utf8_unicode_ci,
  `concentrador` text COLLATE utf8_unicode_ci,
  `registro_plantrabajo` text COLLATE utf8_unicode_ci,
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`idformatos`),
  KEY `fk_formatos_proyectosinternos1_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gradoacademico`
--

DROP TABLE IF EXISTS `gradoacademico`;
CREATE TABLE IF NOT EXISTS `gradoacademico` (
  `idgradoacademico` int NOT NULL,
  `nombre_de_grado` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sigla_de_grado` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idgradoacademico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gradoacademico`
--

INSERT INTO `gradoacademico` (`idgradoacademico`, `nombre_de_grado`, `sigla_de_grado`) VALUES
(1, 'Ingeniero en Sistemas Computacionales', 'ISC.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenciaturainvolucrada`
--

DROP TABLE IF EXISTS `licenciaturainvolucrada`;
CREATE TABLE IF NOT EXISTS `licenciaturainvolucrada` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clave_licenciatura` int NOT NULL,
  `nombre_licenciatura` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT '1.Administracion\\\\\\\\\\\\\\\\n2.Ambiental\\\\\\\\\\\\\\\\n3.Civil\\\\\\\\\\\\\\\\n4.Gestionempresarial\\\\\\\\\\\\\\\\n5.Industrial\\\\\\\\\\\\\\\\n6.Sistemas',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineadeinvestigacion`
--

DROP TABLE IF EXISTS `lineadeinvestigacion`;
CREATE TABLE IF NOT EXISTS `lineadeinvestigacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clave_linea` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_linea` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membretes`
--

DROP TABLE IF EXISTS `membretes`;
CREATE TABLE IF NOT EXISTS `membretes` (
  `idmembretes` int NOT NULL AUTO_INCREMENT,
  `superior_membrete` longblob NOT NULL,
  `inferior_membrete` longblob NOT NULL,
  PRIMARY KEY (`idmembretes`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `membretes`
--

INSERT INTO `membretes` (`idmembretes`, `superior_membrete`, `inferior_membrete`) VALUES
(1, 0x75706c6f6164732f313633393235323832375f6361626563657261323031392e706e67, 0x75706c6f6164732f313633393235323832375f73777270692e706e67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int NOT NULL AUTO_INCREMENT,
  `nombre_perfil` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_perfil` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `genero_perfil` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT '1.profesora\\\\\\\\\\\\\\\\n2.profesor',
  `ingenieria_perfil` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sistemas\\\\\\\\\\\\\\\\nambiental\\\\\\\\\\\\\\\\ngestion\\\\\\\\\\\\\\\\nindistrial\\\\\\\\\\\\\\\\ncivil\\\\\\\\\\\\\\\\nadmon',
  `SNI` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nivel de sistema nacional de investigadores ',
  `promep_perfil` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tc_perfil` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Si\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\nNo',
  `idgradoacademico` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`idperfil`),
  KEY `fk_perfiles_gradoacademico1_idx` (`idgradoacademico`),
  KEY `fk_perfil_user1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

DROP TABLE IF EXISTS `periodos`;
CREATE TABLE IF NOT EXISTS `periodos` (
  `idperiodos` int NOT NULL AUTO_INCREMENT,
  `fechadeproyecto_idfechadeproyecto` int NOT NULL,
  PRIMARY KEY (`idperiodos`),
  KEY `fk_periodos_fechadeproyecto1_idx` (`fechadeproyecto_idfechadeproyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosexternos`
--

DROP TABLE IF EXISTS `proyectosexternos`;
CREATE TABLE IF NOT EXISTS `proyectosexternos` (
  `idproyectosexternos` int NOT NULL AUTO_INCREMENT,
  `nombre_proyectos_externos` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `evidencia` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`idproyectosexternos`),
  KEY `fk_proyectosexternos_user1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosinternos`
--

DROP TABLE IF EXISTS `proyectosinternos`;
CREATE TABLE IF NOT EXISTS `proyectosinternos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo_proyecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_investigacion_proyecto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1. basica\\\\\\\\\\\\\\\\n2.aplicada\\\\\\\\\\\\\\\\n3.desarrollo tecnologico\\\\\\\\\\\\\\\\n4.educativa',
  `area_de_desarrollo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1.Ciencias Químicas\\\\\\\\\\\\\\\\n2.Ingeniería Industrial, Administrativa y Desarrollo Regional\\\\\\\\\\\\\\\\n3.Ciencias Biológicas\\\\\\\\\\\\\\\\n4.Ciencias de la Educación\\\\\\\\\\\\\\\\n5.Ciencias de la Tierra y del Medio Ambiente\\\\\\\\\\\\\\\\n6.Ciencias del Mar\\\\\\\\\\\\\\\\n7.Ingeniería Eléctrica, Electrónica\\\\\\\\\\\\\\\\n8.Ciencias Agrícolas y Forestales\\\\\\\\\\\\\\\\n9.Ingeniería Química, Bioquímica, Alimentos, Biotecnología\\\\\\\\\\\\\\\\n10.Ingeniería Mecánica, Mecatrónica\\\\\\\\\\\\\\\\n11.Ciencias de los Materiales, Polímeros\\\\\\\\\\\\\\\\n12.Ciencias de la Computación, Sistemas Computacionales, Informática',
  `descripcion_proyecto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `duracion_proyecto` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT '1.6meses\\\\\\\\\\\\\\\\n2.12meses',
  `institucion_apoyoeconomico` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1.TecnmValladolid\\\\\\\\\\\\\\\\ndescribir financiamiento y monto total',
  `resumen_proyecto` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `introduccion_proyecto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `estado_arte_proyecto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `objetivo_general_proyecto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `objetivo_especifico_proyecto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `periodos_idperiodos` int NOT NULL,
  `membretes_idmembretes` int NOT NULL,
  `impactos_proyecto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `metodologia_proyecto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `vinculacion_sector_proyecto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `referencias_proyecto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lugar_desarrollo_proyecto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `infraestructura_proyecto` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_proyectosinternos_periodos1_idx` (`periodos_idperiodos`),
  KEY `fk_proyectosinternos_membretes1_idx` (`membretes_idmembretes`),
  KEY `fk_proyectosinternos_user1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosinternos_has_licenciaturainvolucrada`
--

DROP TABLE IF EXISTS `proyectosinternos_has_licenciaturainvolucrada`;
CREATE TABLE IF NOT EXISTS `proyectosinternos_has_licenciaturainvolucrada` (
  `id` int NOT NULL AUTO_INCREMENT,
  `licenciaturainvolucrada_idlicenciaturainvolucrada` int NOT NULL,
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_proyectosinternos_has_licenciaturainvolucrada_licenciatu_idx` (`licenciaturainvolucrada_idlicenciaturainvolucrada`),
  KEY `fk_proyectosinternos_has_licenciaturainvolucrada_proyectosi_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectosinternos_has_lineadeinvestigacion`
--

DROP TABLE IF EXISTS `proyectosinternos_has_lineadeinvestigacion`;
CREATE TABLE IF NOT EXISTS `proyectosinternos_has_lineadeinvestigacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lineadeinvestigacion_idlineadeinvestigacion` int NOT NULL,
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_proyectosinternos_has_lineadeinvestigacion_lineadeinvest_idx` (`lineadeinvestigacion_idlineadeinvestigacion`),
  KEY `fk_proyectosinternos_has_lineadeinvestigacion_proyectosinte_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

DROP TABLE IF EXISTS `reportes`;
CREATE TABLE IF NOT EXISTS `reportes` (
  `idreportes` int NOT NULL AUTO_INCREMENT,
  `avance_reporte` int NOT NULL,
  `actividad_reporte` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `anexo_reporte` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `conclusion_reporte` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `observacion_reporte` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `proyectosinternos_id` int NOT NULL,
  PRIMARY KEY (`idreportes`),
  KEY `fk_reportes_proyectosinternos2_idx` (`proyectosinternos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_rol` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT '1.Administrador\\\\\\\\\\\\\\\\n2.Lider\\\\\\\\\\\\\\\\n',
  `nivel_rol` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT '1\\\\\\\\\\\\\\\\n2\\\\\\\\\\\\\\\\n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `tipo_rol`, `nivel_rol`) VALUES
(1, 'user', '1'),
(2, 'admin', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol_id` int DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`) USING BTREE,
  UNIQUE KEY `password_reset_token` (`password_reset_token`),
  KEY `fk_user_rol1_idx` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `auth_key`, `password_hash`, `password_reset_token`, `status`, `created_at`, `updated_at`, `verification_token`, `rol_id`) VALUES
(1, '17070004', 'omar.chicanche@itsva.edu.mx', 'pvg-nyrvIKPqU-O29mgL3LA6U_p53LoF', '$2y$13$T0ppoIwBJo8yt5cQVWarHe6nB6nAFo3ALWRrZgh5JBtSCwd7bK.t.', NULL, 10, 1639245830, 1639245830, NULL, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `fk_docente_proyectosinternos1` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `cronogramadeactividades`
--
ALTER TABLE `cronogramadeactividades`
  ADD CONSTRAINT `fk_cronogramadeactividades_proyectosinternos1` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `entregablemeta`
--
ALTER TABLE `entregablemeta`
  ADD CONSTRAINT `fk_entregablemeta_proyectosinternos1` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `formatos`
--
ALTER TABLE `formatos`
  ADD CONSTRAINT `fk_formatos_proyectosinternos1` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `fk_perfil_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_perfiles_gradoacademico1` FOREIGN KEY (`idgradoacademico`) REFERENCES `gradoacademico` (`idgradoacademico`);

--
-- Filtros para la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD CONSTRAINT `fk_periodos_fechadeproyecto1` FOREIGN KEY (`fechadeproyecto_idfechadeproyecto`) REFERENCES `fechadeproyecto` (`idfechadeproyecto`);

--
-- Filtros para la tabla `proyectosexternos`
--
ALTER TABLE `proyectosexternos`
  ADD CONSTRAINT `fk_proyectosexternos_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `proyectosinternos`
--
ALTER TABLE `proyectosinternos`
  ADD CONSTRAINT `fk_proyectosinternos_membretes1` FOREIGN KEY (`membretes_idmembretes`) REFERENCES `membretes` (`idmembretes`),
  ADD CONSTRAINT `fk_proyectosinternos_periodos1` FOREIGN KEY (`periodos_idperiodos`) REFERENCES `periodos` (`idperiodos`),
  ADD CONSTRAINT `fk_proyectosinternos_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `proyectosinternos_has_licenciaturainvolucrada`
--
ALTER TABLE `proyectosinternos_has_licenciaturainvolucrada`
  ADD CONSTRAINT `fk_proyectosinternos_has_licenciaturainvolucrada_licenciatura1` FOREIGN KEY (`licenciaturainvolucrada_idlicenciaturainvolucrada`) REFERENCES `licenciaturainvolucrada` (`id`),
  ADD CONSTRAINT `fk_proyectosinternos_has_licenciaturainvolucrada_proyectosint1` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `proyectosinternos_has_lineadeinvestigacion`
--
ALTER TABLE `proyectosinternos_has_lineadeinvestigacion`
  ADD CONSTRAINT `fk_proyectosinternos_has_lineadeinvestigacion_lineadeinvestig1` FOREIGN KEY (`lineadeinvestigacion_idlineadeinvestigacion`) REFERENCES `lineadeinvestigacion` (`id`),
  ADD CONSTRAINT `fk_proyectosinternos_has_lineadeinvestigacion_proyectosintern1` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reportes_proyectosinternos2` FOREIGN KEY (`proyectosinternos_id`) REFERENCES `proyectosinternos` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_rol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
