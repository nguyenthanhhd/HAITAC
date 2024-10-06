/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : web

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-03-21 02:24:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户唯一ID，自增字段',
  `name` varchar(64) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `Scode` varchar(255) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `logintime` datetime DEFAULT NULL,
  `createip` varchar(255) DEFAULT NULL,
  `loginip` varchar(255) DEFAULT NULL,
  `dj` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `AK_Key_account` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19558 DEFAULT CHARSET=utf8 COMMENT='玩家的角色表';

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('19557', 'a123456', '123456', '123456', '2017-03-19 00:07:58', '2017-03-21 01:26:32', '192.168.199.8', '127.0.0.1', '1000');

-- ----------------------------
-- Table structure for server
-- ----------------------------
DROP TABLE IF EXISTS `server`;
CREATE TABLE `server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `jieshao` varchar(255) DEFAULT NULL,
  `fqid` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `duankou` varchar(255) DEFAULT NULL,
  `zy` varchar(255) DEFAULT NULL,
  `assets` varchar(255) DEFAULT NULL,
  `fcm` varchar(11) DEFAULT NULL,
  `opentime` varchar(255) DEFAULT NULL,
  `v` varchar(255) DEFAULT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `zxsid` varchar(255) DEFAULT NULL,
  `mysql_ip` varchar(255) DEFAULT NULL,
  `mysql_port` int(20) DEFAULT NULL,
  `mysql_root` varchar(255) DEFAULT NULL,
  `mysql_passwd` varchar(255) DEFAULT NULL,
  `mysql_name` varchar(255) DEFAULT NULL,
  `mysql_name2` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of server
-- ----------------------------
INSERT INTO `server` VALUES ('1', '双线1区', '今天刚开', '1', '127.0.0.1', '7100', 'http://127.0.0.1', 'http://127.0.0.1/res', '1', '1332137600', '50568.548024399905', '1', '1', '127.0.0.1', '3306', 'root', '123456', 'db_game_ngame_0001', '', 'zeen_SPm75Dvo3BzZ0NToXNT6fAqsUlrOeuF', 'ngame_0001');
