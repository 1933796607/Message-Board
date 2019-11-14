/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 80012
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 80012
File Encoding         : 65001

Date: 2019-11-14 11:49:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '名称',
  `status` tinyint(2) DEFAULT '0' COMMENT '状态',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `create_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('0000000001', 'aaa', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000003', 'aaa', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000004', 'aaa', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000006', 'bbb', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000007', 'ccc', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000009', 'test', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000010', 'test', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000011', 'test', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000012', 'test', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000013', 'test', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000014', 'test2', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000015', 'test3', '1', '', '', '0', '0');
INSERT INTO `user` VALUES ('0000000022', null, '0', 'php', 'thinkphp', '1573526224', null);
INSERT INTO `user` VALUES ('0000000023', null, '0', 'php', 'thinkphp', '1573526738', null);
INSERT INTO `user` VALUES ('0000000024', null, '0', 'php', 'thinkphp', '1573526751', null);
INSERT INTO `user` VALUES ('0000000025', null, '0', '333', '545234423', '1573526759', null);
INSERT INTO `user` VALUES ('0000000026', null, '0', '333', '545234423', '1573526787', null);
INSERT INTO `user` VALUES ('0000000027', null, '0', 'php', 'thinkphp', '1573526887', null);
INSERT INTO `user` VALUES ('0000000028', null, '0', 'php', 'thinkphp', '1573526920', null);
INSERT INTO `user` VALUES ('0000000029', null, '0', '333', 'QERQWERQWER', '1573527043', null);
INSERT INTO `user` VALUES ('0000000030', null, '0', 'php', 'RWERWE', '1573527119', null);
INSERT INTO `user` VALUES ('0000000031', null, '0', 'php', 'dfsdgadfgs', '1573702612', null);
INSERT INTO `user` VALUES ('0000000032', null, '0', 'php', 'vfdsgsfadg', '1573702746', null);
INSERT INTO `user` VALUES ('0000000033', null, '0', 'redftsdaf', 'wertwerfasdfas', '1573702812', null);
INSERT INTO `user` VALUES ('0000000034', null, '0', 'FSADFSAD', 'FSDAFSADFSAD', '1573703152', null);
SET FOREIGN_KEY_CHECKS=1;
