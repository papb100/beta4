/*
Navicat MySQL Data Transfer

Source Server         : informatica
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : beta

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2020-02-25 12:09:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for datos
-- ----------------------------
DROP TABLE IF EXISTS `datos`;
CREATE TABLE `datos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `fecha_nac` date default NULL,
  `edad` int(11) default NULL,
  `correo` text,
  `curp` text,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of datos
-- ----------------------------
INSERT INTO `datos` VALUES ('1', 'Pablo Adrian', 'Perez', 'Briseño', '1969-12-31', '9', 'pablo.perez@utl.edu.mx', 'PEB840305BT0', '2020-02-25', '12:09:15', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('1', 'Usuario inserto registro', '2020-02-24', '21:13:35');
INSERT INTO `log` VALUES ('2', 'Usuario desactivo registro', '2020-02-24', '21:13:42');
INSERT INTO `log` VALUES ('3', 'Usuario activo registro', '2020-02-24', '21:13:49');
INSERT INTO `log` VALUES ('4', 'Usuario activo registro', '2020-02-25', '12:06:44');
INSERT INTO `log` VALUES ('5', 'Usuario activo registro', '2020-02-25', '12:07:14');
INSERT INTO `log` VALUES ('6', 'Usuario activo registro', '2020-02-25', '12:07:25');
INSERT INTO `log` VALUES ('7', 'Usuario modifico registro', '2020-02-25', '12:08:01');
INSERT INTO `log` VALUES ('8', 'Usuario desactivo registro', '2020-02-25', '12:09:07');
INSERT INTO `log` VALUES ('9', 'Usuario activo registro', '2020-02-25', '12:09:15');
