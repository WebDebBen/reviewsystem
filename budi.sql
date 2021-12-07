/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : budi

 Target Server Type    : MySQL
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 07/12/2021 07:59:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (4, 'Cleaning');
INSERT INTO `categories` VALUES (6, 'Shopping');
INSERT INTO `categories` VALUES (7, 'Washing Room');
INSERT INTO `categories` VALUES (9, 'Hotels');
INSERT INTO `categories` VALUES (10, 'Wonder');

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `trade_id` int(11) NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reviews
-- ----------------------------
INSERT INTO `reviews` VALUES (1, '4', 'arang@gmail.com', 3, 'Arang', 1);
INSERT INTO `reviews` VALUES (2, '5', 'kirin@gmail.com', 4, 'Kirin', 1);
INSERT INTO `reviews` VALUES (3, '5', 'botom@gmail.com', 3, 'Botom', 1);
INSERT INTO `reviews` VALUES (8, '3', 'dfe', 2, 'abc', 2);

-- ----------------------------
-- Table structure for susers
-- ----------------------------
DROP TABLE IF EXISTS `susers`;
CREATE TABLE `susers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useremail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` int(255) NULL DEFAULT 2,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of susers
-- ----------------------------
INSERT INTO `susers` VALUES (1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, 'admin');
INSERT INTO `susers` VALUES (3, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 2, 'blushup.png', 'user');

-- ----------------------------
-- Table structure for trades
-- ----------------------------
DROP TABLE IF EXISTS `trades`;
CREATE TABLE `trades`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phonenumber` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trades
-- ----------------------------
INSERT INTO `trades` VALUES (2, 'Shopping Trade12', 'Shopping Site11', '192029391', 'shoping1.co', 'jim@shop.com', 'this is for shop com', 6);
INSERT INTO `trades` VALUES (3, 'Shopping Trade23', 'Shopping Site2', '292818232', 'shoping2.co', 'jim2@shop.com', 'this is for shop com1', 6);
INSERT INTO `trades` VALUES (4, 'hotel trade1', 'hotel company1', '1902938102', 'hotel.compa', 'jim@hotel.com', 'this is hotel12', 9);
INSERT INTO `trades` VALUES (5, 'hotel trade2', 'hotel company2', '1902938102', 'hotel.compa', 'jim@hotel.com', 'this is hotel2', 9);
INSERT INTO `trades` VALUES (6, 'hotel trade3', 'hotel company3', '1902938103', 'hotel.compa', 'jim@hotel.com3', 'this is hotel3', 9);
INSERT INTO `trades` VALUES (7, 'hotel trade4', 'hotel company4', '1902938103', 'hotel.compa', 'jim@hotel.com4', 'this is hotel4', 9);
INSERT INTO `trades` VALUES (8, 'hotel trade5', 'hotel company5', '1902938103', 'hotel.compa', 'jim@hotel.com5', 'this is hotel5', 9);
INSERT INTO `trades` VALUES (10, 'washing room trade1', 'washing room company1', '1902938103', 'washing roo', 'jim@hotwashing.com1', 'this is washing room1', 7);
INSERT INTO `trades` VALUES (11, 'washing room trade2', 'washing room company2', '1902938103', 'washing roo', 'jim@hotwashing.com2', 'this is washing room2', 7);
INSERT INTO `trades` VALUES (12, 'washing room trade3', 'washing room company3', '1902938103', 'washing roo', 'jim@hotwashing.com3', 'this is washing room3', 7);
INSERT INTO `trades` VALUES (13, 'washing room trade4', 'washing room company4', '1902938103', 'washing roo', 'jim@hotwashing.com4', 'this is washing room4', 7);
INSERT INTO `trades` VALUES (14, 'wonder trade1', 'wonder company1', '1902938103', 'wonder.comp', 'jim@wonder.com1', 'this is wonder room1', 10);
INSERT INTO `trades` VALUES (15, 'wonder trade2', 'wonder company2', '1902938103', 'wonder.comp', 'jim@wonder.com2', 'this is wonder room2', 10);
INSERT INTO `trades` VALUES (16, 'wonder trade3', 'wonder company3', '1902938103', 'wonder.comp', 'jim@wonder.com3', 'this is wonder room3', 10);
INSERT INTO `trades` VALUES (17, 'wonder trade4', 'wonder company4', '1902938103', 'wonder.comp', 'jim@wonder.com4', 'this is wonder room4', 10);
INSERT INTO `trades` VALUES (18, 'wonder trade5', 'wonder company5', '1902938103', 'wonder.comp', 'jim@wonder.com5', 'this is wonder room5', 10);
INSERT INTO `trades` VALUES (19, 'wonder trade1', 'wonder company1', '1902938103', 'wonder.comp', 'jim@wonder.com1', 'this is wonder room1', 10);
INSERT INTO `trades` VALUES (20, 'wonder trade2', 'wonder company2', '1902938103', 'wonder.comp', 'jim@wonder.com2', 'this is wonder room2', 10);
INSERT INTO `trades` VALUES (21, 'wonder trade3', 'wonder company3', '1902938103', 'wonder.comp', 'jim@wonder.com3', 'this is wonder room3', 10);
INSERT INTO `trades` VALUES (22, 'wonder trade4', 'wonder company4', '1902938103', 'wonder.comp', 'jim@wonder.com4', 'this is wonder room4', 10);
INSERT INTO `trades` VALUES (23, 'wonder trade5', 'wonder company5', '1902938103', 'wonder.comp', 'jim@wonder.com5', 'this is wonder room5', 10);
INSERT INTO `trades` VALUES (24, 'wonder trade6', 'wonder company6', '1902938103', 'wonder.comp', 'jim@wonder.com6', 'this is wonder room6', 10);
INSERT INTO `trades` VALUES (25, 'wonder trade7', 'wonder company7', '1902938103', 'wonder.comp', 'jim@wonder.com7', 'this is wonder room7', 10);

SET FOREIGN_KEY_CHECKS = 1;
