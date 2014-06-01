/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : focus

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-06-02 01:16:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fcs_post
-- ----------------------------
DROP TABLE IF EXISTS `fcs_post`;
CREATE TABLE `fcs_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `createTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `authorId` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fcs_post
-- ----------------------------
INSERT INTO `fcs_post` VALUES ('1', 'asf', 'fgd', '0000-00-00 00:00:00', '1');
INSERT INTO `fcs_post` VALUES ('2', 'gfddfsh', 'ashg', '0000-00-00 00:00:00', '1');

-- ----------------------------
-- Table structure for fcs_user
-- ----------------------------
DROP TABLE IF EXISTS `fcs_user`;
CREATE TABLE `fcs_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fcs_user
-- ----------------------------
INSERT INTO `fcs_user` VALUES ('1', 'focus', '$2y$10$SpJe3u78Q4VijuXFPw8iMeJ/MOl/rjsbdlvwdRJVB4RtSUL/ROP7G', '6r8gnMsGJaBw01mBLSQ9uroZBh58gv9YMb9UI2u3SgilAtl0ndkoGRVL6Y8E', '2014-06-01 00:56:28');
