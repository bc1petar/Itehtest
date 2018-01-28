/*
 Navicat Premium Data Transfer

 Source Server         : Projekat
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : ispit3

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 28/01/2018 23:51:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for racun
-- ----------------------------
DROP TABLE IF EXISTS `racun`;
CREATE TABLE `racun`  (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Vlasnik_JMBG` int(13) UNSIGNED NOT NULL,
  `Stanje` int(255) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `vlasnik`(`Vlasnik_JMBG`) USING BTREE,
  CONSTRAINT `vlasnik` FOREIGN KEY (`Vlasnik_JMBG`) REFERENCES `ispit3`.`vlasnik` (`JMBG`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_croatian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for vlasnik
-- ----------------------------
DROP TABLE IF EXISTS `vlasnik`;
CREATE TABLE `vlasnik`  (
  `JMBG` int(13) UNSIGNED NOT NULL,
  `Ime` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Prezime` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Adresa` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`JMBG`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_croatian_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
