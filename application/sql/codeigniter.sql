/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 50542
 Source Host           : localhost
 Source Database       : codeigniter

 Target Server Type    : MySQL
 Target Server Version : 50542
 File Encoding         : utf-8

 Date: 02/17/2017 22:07:45 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_biodata`
-- ----------------------------
DROP TABLE IF EXISTS `t_biodata`;
CREATE TABLE `t_biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `umur` int(2) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_biodata`
-- ----------------------------
BEGIN;
INSERT INTO `t_biodata` VALUES ('19', 'Riky Nurdiana', '29', '2017-02-17 09:51:15', '2017-02-17 09:51:15');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
