/*
 Navicat Premium Data Transfer

 Source Server         : mysql-Local
 Source Server Type    : MySQL
 Source Server Version : 50715
 Source Host           : localhost:3306
 Source Schema         : beta

 Target Server Type    : MySQL
 Target Server Version : 50715
 File Encoding         : 65001

 Date: 24/02/2020 13:32:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for datos
-- ----------------------------
DROP TABLE IF EXISTS `datos`;
CREATE TABLE `datos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ap_paterno` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ap_materno` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `fecha_nac` date NULL DEFAULT NULL,
  `edad` int(255) NULL DEFAULT NULL,
  `correo` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `curp` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `fecha_registro` date NULL DEFAULT NULL,
  `hora_registro` time(0) NULL DEFAULT NULL,
  `activo` bit(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of datos
-- ----------------------------
INSERT INTO `datos` VALUES (1, 'Pablo', 'Perez', 'Briseño', '1984-03-05', 35, 'papb100@hotmail.com', 'PEBP840305HNLRRB08', '2020-02-24', '13:15:48', b'1');
INSERT INTO `datos` VALUES (2, 'Silvia', 'Muñiz', 'Tienda', '1983-06-20', 36, 'stienda@hotmail.com', 'MUTS032015HNLMTH0', '2020-02-24', '13:15:48', b'1');
INSERT INTO `datos` VALUES (3, 'Juan', 'Alvardo', 'García', '1969-12-31', 44, 'juan@edu.com', 'JUANPBPP789542', '2020-02-24', '13:15:47', b'1');
INSERT INTO `datos` VALUES (4, 'Juan', 'Alvardo', 'García', '1969-12-31', 44, 'juan@edu.com', 'JUANPBPP789542', '2020-02-24', '13:15:47', b'1');
INSERT INTO `datos` VALUES (5, 'Esteban', 'Solis', 'Martinez', '1969-12-31', 35, 'juan@edu.com', 'PEBP840305HNLRRB08', '2020-02-24', '13:15:46', b'1');
INSERT INTO `datos` VALUES (6, 'Natividad', 'Gonzalez', 'Paras', '1969-12-31', 3, 'juan@edu.com', 'JUANPBPP789542', '2020-02-24', '13:15:41', b'1');
INSERT INTO `datos` VALUES (7, 'Juan José', 'Gonzalez', 'García', '1969-12-31', 0, 'juan@edu.com', 'JUANPBPP789542', '2020-02-24', '13:15:41', b'1');
INSERT INTO `datos` VALUES (8, 'Juan Jose Maria', 'Ramos', 'Carza', '1969-12-31', 16, 'juan@edu.com', 'JUANPBPP789542', '2020-02-24', '13:24:32', b'1');
INSERT INTO `datos` VALUES (9, 'Oscar', 'Sanchez', 'Martinez', '1969-12-31', 12, 'FFSFD@DSFDS.COM', 'peed', '2020-02-24', '13:24:32', b'1');
INSERT INTO `datos` VALUES (10, 'José Manuel', 'Rsales', 'Bravo', '1969-12-31', 37, 'juan@edu.com', 'JUANPBPP789542', '2020-02-24', '13:24:33', b'1');
INSERT INTO `datos` VALUES (11, 'Vicor', 'Hugo', 'Perez', '1969-12-31', 0, 'sad', 'sadas', '2020-02-24', '13:32:11', b'1');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `fecha_registro` date NULL DEFAULT NULL,
  `hora_registro` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_log`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES (1, 'Usuario inserto registro', '2020-02-24', '13:31:29');
INSERT INTO `log` VALUES (2, 'Usuario modifico registro', '2020-02-24', '13:32:00');
INSERT INTO `log` VALUES (3, 'Usuario desactivo registro', '2020-02-24', '13:32:03');
INSERT INTO `log` VALUES (4, 'Usuario activo registro', '2020-02-24', '13:32:11');

SET FOREIGN_KEY_CHECKS = 1;
