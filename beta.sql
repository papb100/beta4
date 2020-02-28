/*
Navicat MySQL Data Transfer

Source Server         : informatica
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : beta

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2020-02-28 07:18:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for datos
-- ----------------------------
DROP TABLE IF EXISTS `datos`;
CREATE TABLE `datos` (
  `id` int(11) NOT NULL auto_increment,
  `clave` int(255) default NULL,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `fecha_nac` date default NULL,
  `edad` int(255) default NULL,
  `correo` text,
  `curp` text,
  `domicilio` text,
  `sexo` text,
  `ecivil` tinytext,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of datos
-- ----------------------------
INSERT INTO `datos` VALUES ('1', '321', 'Pablo', 'Perez', 'Briseño', '0000-00-00', '35', 'papb100@hotmail.com', 'PEBP840305HNLRRB08', null, null, null, '2020-02-26', '07:22:20', '1');
INSERT INTO `datos` VALUES ('2', '546', 'Silvia', 'Muñiz', 'Tienda', '1983-06-20', '36', 'stienda@hotmail.com', 'MUTS032015HNLMTH0', null, null, null, '2020-02-24', '13:15:48', '1');
INSERT INTO `datos` VALUES ('3', null, 'Juan', 'Alvardo', 'García', '1969-12-31', '44', 'juan@edu.com', 'JUANPBPP789542', null, null, null, '2020-02-24', '13:15:47', '1');
INSERT INTO `datos` VALUES ('4', null, 'Juan', 'Alvardo', 'García', '1969-12-31', '44', 'juan@edu.com', 'JUANPBPP789542', null, null, null, '2020-02-24', '13:15:47', '1');
INSERT INTO `datos` VALUES ('5', null, 'Esteban', 'Solis', 'Martinez', '1969-12-31', '35', 'juan@edu.com', 'PEBP840305HNLRRB08', null, null, null, '2020-02-24', '13:15:46', '1');
INSERT INTO `datos` VALUES ('6', null, 'Natividad', 'Gonzalez', 'Paras', '1969-12-31', '3', 'juan@edu.com', 'JUANPBPP789542', null, null, null, '2020-02-24', '13:15:41', '1');
INSERT INTO `datos` VALUES ('7', null, 'Juan José', 'Gonzalez', 'García', '1969-12-31', '0', 'juan@edu.com', 'JUANPBPP789542', null, null, null, '2020-02-24', '13:15:41', '1');
INSERT INTO `datos` VALUES ('8', null, 'Juan Jose Maria', 'Ramos', 'Carza', '1969-12-31', '16', 'juan@edu.com', 'JUANPBPP789542', null, null, null, '2020-02-24', '13:24:32', '1');
INSERT INTO `datos` VALUES ('9', null, 'Oscar', 'Sanchez', 'Martinez', '1969-12-31', '12', 'FFSFD@DSFDS.COM', 'peed', null, null, null, '2020-02-24', '13:24:32', '1');
INSERT INTO `datos` VALUES ('10', null, 'José Manuel', 'Rsales', 'Bravo', '1969-12-31', '37', 'juan@edu.com', 'JUANPBPP789542', null, null, null, '2020-02-24', '13:24:33', '1');
INSERT INTO `datos` VALUES ('11', '12', 'Vicor Hugo', 'Perez', 'Briseño', '0000-00-00', '36', 'sad', 'sadas', null, null, null, '2020-02-26', '09:54:21', '1');
INSERT INTO `datos` VALUES ('12', '103', 'Zitlaly', 'De la Cerda', 'Quevedo', '1999-02-26', '21', 'zitaly@hotmail.com', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'Femenino', '2', '2020-02-26', '10:34:05', '1');
INSERT INTO `datos` VALUES ('13', '102', 'Oscar', 'Sanche', 'Gomez', '1987-02-26', '33', 'oscar@saludnl.gob.mx', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'Femenino', '2', '2020-02-26', '10:36:59', '1');
INSERT INTO `datos` VALUES ('14', '105', 'Maria', 'Perez', 'Solis', '2007-02-25', '13', 'soli@saludn.lgob.mx', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'Femenino', '2', '2020-02-26', '10:38:25', '1');
INSERT INTO `datos` VALUES ('15', '568', 'Ramiro', 'Galindo', 'Obregon', '2002-02-26', '18', 'zitaly@hotmail.com', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'Masculino', '2', '2020-02-26', '10:42:02', '1');
INSERT INTO `datos` VALUES ('16', '12', 'd', 'd', 'd', '2020-02-26', '0', 'zitaly@hotmail.com', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'Masculino', '1', '2020-02-26', '10:49:10', '1');
INSERT INTO `datos` VALUES ('17', '223', 'fd', 'De la Cerda', 'García', '0000-00-00', '0', 'zitaly@hotmail.com', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'M', '', '2020-02-26', '11:29:07', '1');
INSERT INTO `datos` VALUES ('18', '34', 'PABLO ADRIAN', 'De la Cerda', 'BRISEÑO', '0000-00-00', '0', 'juan@edu.com', 'PEBP840305HNLRRB00', 'Calle naranjo # 100 , Fomerrey', 'F', '1', '2020-02-26', '13:09:51', '1');
INSERT INTO `datos` VALUES ('19', '109', 'Jose Leobardo', 'Puente', 'Hernandez', '0000-00-00', '55', 'leobardo@hotmail.com', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'F', '2', '2020-02-26', '13:17:46', '0');
INSERT INTO `datos` VALUES ('20', '33', '33', '33', 'BRISEÑO', '2020-02-26', '0', 'FFSFD@DSFDS.COM', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Fomerrey', 'M', '1', '2020-02-26', '13:10:08', '1');
INSERT INTO `datos` VALUES ('21', '444', 'PABLO ADRIAN', 'PEREZ', 'BRISEÑO', '0000-00-00', '0', 'juan@edu.com', 'JUANPBPP789542', 'Calle naranjo # 100 , Fomerrey', 'F', '2', '2020-02-26', '13:17:28', '1');
INSERT INTO `datos` VALUES ('22', '125', 'PABLO ADRIAN', 'De la Cerda', 'García', '0000-00-00', '7', 'juan@edu.com', 'PEBP840305HNLRRB08', 'Calle naranjo # 100 , Foii', 'F', '2', '2020-02-26', '13:29:22', '1');

-- ----------------------------
-- Table structure for ecivil
-- ----------------------------
DROP TABLE IF EXISTS `ecivil`;
CREATE TABLE `ecivil` (
  `id_ecivil` int(11) NOT NULL auto_increment,
  `descripcion` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` tinyint(4) default NULL,
  PRIMARY KEY  (`id_ecivil`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecivil
-- ----------------------------
INSERT INTO `ecivil` VALUES ('1', 'Solter@', '2020-02-26', '10:04:05', '1');
INSERT INTO `ecivil` VALUES ('2', 'Casad@', '2020-02-26', '10:04:24', '1');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id_log` int(11) NOT NULL auto_increment,
  `actividad` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  PRIMARY KEY  (`id_log`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('1', 'Usuario inserto registro', '2020-02-24', '13:31:29');
INSERT INTO `log` VALUES ('2', 'Usuario modifico registro', '2020-02-24', '13:32:00');
INSERT INTO `log` VALUES ('3', 'Usuario desactivo registro', '2020-02-24', '13:32:03');
INSERT INTO `log` VALUES ('4', 'Usuario activo registro', '2020-02-24', '13:32:11');
INSERT INTO `log` VALUES ('5', 'Usuario desactivo registro', '2020-02-25', '07:41:34');
INSERT INTO `log` VALUES ('6', 'Usuario activo registro', '2020-02-25', '07:41:41');
INSERT INTO `log` VALUES ('7', 'Usuario modifico registro', '2020-02-25', '07:41:46');
INSERT INTO `log` VALUES ('8', 'Usuario modifico registro', '2020-02-25', '07:42:03');
INSERT INTO `log` VALUES ('9', 'Usuario modifico registro', '2020-02-25', '07:42:34');
INSERT INTO `log` VALUES ('10', 'Usuario modifico registro', '2020-02-25', '08:27:29');
INSERT INTO `log` VALUES ('11', 'Usuario modifico registro', '2020-02-26', '07:21:59');
INSERT INTO `log` VALUES ('12', 'Usuario modifico registro', '2020-02-26', '09:54:21');
INSERT INTO `log` VALUES ('13', 'Usuario inserto registro', '2020-02-26', '10:32:36');
INSERT INTO `log` VALUES ('14', 'Usuario inserto registro', '2020-02-26', '10:34:05');
INSERT INTO `log` VALUES ('15', 'Usuario inserto registro', '2020-02-26', '10:36:59');
INSERT INTO `log` VALUES ('16', 'Usuario inserto registro', '2020-02-26', '10:38:25');
INSERT INTO `log` VALUES ('17', 'Usuario inserto registro', '2020-02-26', '10:42:03');
INSERT INTO `log` VALUES ('18', 'Usuario inserto registro', '2020-02-26', '10:49:10');
INSERT INTO `log` VALUES ('19', 'Usuario inserto registro', '2020-02-26', '11:00:55');
INSERT INTO `log` VALUES ('20', 'Usuario inserto registro', '2020-02-26', '11:10:58');
INSERT INTO `log` VALUES ('21', 'Usuario inserto registro', '2020-02-26', '11:26:15');
INSERT INTO `log` VALUES ('22', 'Usuario modifico registro', '2020-02-26', '11:26:27');
INSERT INTO `log` VALUES ('23', 'Usuario modifico registro', '2020-02-26', '11:27:53');
INSERT INTO `log` VALUES ('24', 'Usuario modifico registro', '2020-02-26', '11:29:07');
INSERT INTO `log` VALUES ('25', 'Usuario modifico registro', '2020-02-26', '11:33:51');
INSERT INTO `log` VALUES ('26', 'Usuario modifico registro', '2020-02-26', '13:08:11');
INSERT INTO `log` VALUES ('27', 'Usuario modifico registro', '2020-02-26', '13:08:25');
INSERT INTO `log` VALUES ('28', 'Usuario modifico registro', '2020-02-26', '13:09:38');
INSERT INTO `log` VALUES ('29', 'Usuario modifico registro', '2020-02-26', '13:09:51');
INSERT INTO `log` VALUES ('30', 'Usuario inserto registro', '2020-02-26', '13:10:08');
INSERT INTO `log` VALUES ('31', 'Usuario inserto registro', '2020-02-26', '13:10:46');
INSERT INTO `log` VALUES ('32', 'Usuario modifico registro', '2020-02-26', '13:12:53');
INSERT INTO `log` VALUES ('33', 'Usuario modifico registro', '2020-02-26', '13:17:23');
INSERT INTO `log` VALUES ('34', 'Usuario modifico registro', '2020-02-26', '13:17:28');
INSERT INTO `log` VALUES ('35', 'Usuario inserto registro', '2020-02-26', '13:29:00');
INSERT INTO `log` VALUES ('36', 'Usuario modifico registro', '2020-02-26', '13:29:22');
