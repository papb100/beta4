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

 Date: 21/02/2020 19:05:46
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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of datos
-- ----------------------------
INSERT INTO `datos` VALUES (1, 'Pablo', 'Perez', 'Briseño', '1984-03-05', 35, 'papb100@hotmail.com', 'PEBP840305HNLRRB08', NULL, NULL);
INSERT INTO `datos` VALUES (2, 'Silvia', 'Muñiz', 'Tienda', '1983-06-20', 36, 'stienda@hotmail.com', 'MUTS032015HNLMTH0', NULL, NULL);
INSERT INTO `datos` VALUES (3, 'Juan', 'Alvardo', 'García', '1969-12-31', 44, 'juan@edu.com', 'JUANPBPP789542', '2020-02-21', '09:03:56');
INSERT INTO `datos` VALUES (4, 'Juan', 'Alvardo', 'García', '1969-12-31', 44, 'juan@edu.com', 'JUANPBPP789542', '2020-02-21', '09:05:24');
INSERT INTO `datos` VALUES (5, 'Esteban', 'Solis', 'Martinez', '1969-12-31', 35, 'juan@edu.com', 'PEBP840305HNLRRB08', '2020-02-21', '09:06:38');
INSERT INTO `datos` VALUES (6, 'NAtividad', 'Gonzalez', 'Paras', '1969-12-31', 3, 'juan@edu.com', 'JUANPBPP789542', '2020-02-21', '09:07:56');
INSERT INTO `datos` VALUES (7, 'Juan', 'Gonzalez', 'García', '1969-12-31', 0, 'juan@edu.com', 'JUANPBPP789542', '2020-02-21', '09:08:50');

SET FOREIGN_KEY_CHECKS = 1;
