/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : tp_mvc

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 07/05/2024 22:09:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `id_member` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_membership` int NOT NULL,
  `join` date NOT NULL,
  PRIMARY KEY (`id_member`) USING BTREE,
  INDEX `membership`(`id_membership` ASC) USING BTREE,
  CONSTRAINT `membership` FOREIGN KEY (`id_membership`) REFERENCES `membership` (`id_membership`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES (1, 'John Doe', 'johndoe@email.com', '08987457123', 2, '2024-05-02');
INSERT INTO `member` VALUES (2, 'Jane Smith', 'janesmith@email.com', '08997259584', 1, '2024-05-03');
INSERT INTO `member` VALUES (4, 'Jake Bryan', 'bryanjake@email.com', '08682423856', 15, '2024-05-10');
INSERT INTO `member` VALUES (14, 'Tio Ariyanto', 'tio.ariyanto313@upi.com', '081280113808', 15, '2024-05-08');

-- ----------------------------
-- Table structure for membership
-- ----------------------------
DROP TABLE IF EXISTS `membership`;
CREATE TABLE `membership`  (
  `id_membership` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_membership`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of membership
-- ----------------------------
INSERT INTO `membership` VALUES (1, 'Basic', 10000, 'Mendapatkan konten dengan resolusi 1080p');
INSERT INTO `membership` VALUES (2, 'Standart', 75000, 'Mendapatkan konten dengan resolusi hingga 4K serta memberikan voting');
INSERT INTO `membership` VALUES (15, 'Spesial', 250000, 'Mendapatkan semua konten tier sebelumnya ditambah bisa join discord server privat');

SET FOREIGN_KEY_CHECKS = 1;
