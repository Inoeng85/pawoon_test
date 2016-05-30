/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : pawoon_test

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-05-31 04:28:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `uuid` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text,
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('037a8f749f990fd51edd27f9bae8d36c:df', 'ibnu', 'jl.ultraviolet jakarta kelapa gading');
INSERT INTO `tbl_users` VALUES ('037a8f749f990fd51edd27f9bae8d36c:d3', 'hajar', 'kelapa gading timur, jakarta');
INSERT INTO `tbl_users` VALUES ('037a8f749f990fd51edd27f9bae8d36c:dd', 'inoeng', 'tanbora,jakarta selatan');
