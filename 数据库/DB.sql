/*
Navicat MySQL Data Transfer

Source Server         : shen2019
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : db

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-03-01 17:25:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for arc
-- ----------------------------
DROP TABLE IF EXISTS `arc`;
CREATE TABLE `arc` (
  `arc_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `rq` date DEFAULT NULL,
  PRIMARY KEY (`arc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of arc
-- ----------------------------
INSERT INTO `arc` VALUES ('45', '社区爱心义卖系统建设完成', '社区爱心义卖系统建设完成社区爱心义卖系统建设完成社区爱心义卖系统建设完成社区爱心义卖系统建设完成', '2019-03-01');
INSERT INTO `arc` VALUES ('46', '新闻测试新闻测试新闻测试新闻测试', '新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试', '2019-03-01');
INSERT INTO `arc` VALUES ('47', '义卖活动开始义卖活动开始义卖活动开始', '义卖活动开始义卖活动开始义卖活动开始义卖活动开始', '2019-03-01');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) CHARACTER SET gb2312 DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=gb2312 COLLATE=gb2312_bin;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('124', '自行车');
INSERT INTO `category` VALUES ('114', '手机');
INSERT INTO `category` VALUES ('115', '笔记本');
INSERT INTO `category` VALUES ('116', '台式机');
INSERT INTO `category` VALUES ('117', '耳机');
INSERT INTO `category` VALUES ('118', '相机');
INSERT INTO `category` VALUES ('119', '台灯');
INSERT INTO `category` VALUES ('127', '运动类');
INSERT INTO `category` VALUES ('125', '电脑桌椅');

-- ----------------------------
-- Table structure for depart
-- ----------------------------
DROP TABLE IF EXISTS `depart`;
CREATE TABLE `depart` (
  `depart_id` int(4) NOT NULL AUTO_INCREMENT,
  `depart` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`depart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of depart
-- ----------------------------
INSERT INTO `depart` VALUES ('9', '胜利社区');
INSERT INTO `depart` VALUES ('10', '国庆社区');
INSERT INTO `depart` VALUES ('11', '大江社区');

-- ----------------------------
-- Table structure for hy
-- ----------------------------
DROP TABLE IF EXISTS `hy`;
CREATE TABLE `hy` (
  `hy_id` int(4) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `hy_type` varchar(100) NOT NULL,
  `je` int(4) NOT NULL DEFAULT '0',
  `post_address` varchar(100) NOT NULL DEFAULT '未认证',
  `depart` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`hy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of hy
-- ----------------------------
INSERT INTO `hy` VALUES ('33', '1001', '1001', null, '2016-12-02', '郑岩', '男', '1354140555', '', '0', '1号楼2202', '胜利社区');
INSERT INTO `hy` VALUES ('35', 'z1001', 'z1001', null, '2016-12-02', '何琳', '女', '024-32891818', '', '0', '3号楼2212室', '胜利社区');
INSERT INTO `hy` VALUES ('41', 'jg201501', 'jg201501', null, '2016-12-02', '刘溪', '女', '15922119392', '', '0', '二号楼2202室', '胜利社区');
INSERT INTO `hy` VALUES ('45', 'st1111', 'st1111', null, '2016-12-10', '唐涛', '男', '1590255235', '', '0', '1号楼2202', '胜利社区');
INSERT INTO `hy` VALUES ('43', 'st1101', 'st1101', null, '2016-12-02', '章子怡', '女', '13598550122', '', '0', '1号楼2011', '胜利社区');
INSERT INTO `hy` VALUES ('46', 'st2222', 'st2222', null, '2016-12-10', '李可', '男', '1590233256', '', '0', '2楼3010', '胜利社区');
INSERT INTO `hy` VALUES ('47', '123321', '123321', null, '2019-03-01', '晴子', '男', '13776681759', '', '0', '北京453', '胜利社区');
INSERT INTO `hy` VALUES ('48', '123456', '123456', null, '2019-03-01', '杨涵宇', '男', '15236222222', '', '0', '北京453', '胜利社区');
INSERT INTO `hy` VALUES ('49', '1233211', '1233211', null, '2019-03-01', '晴子', '男', '13451800235', '', '0', '9栋302', '胜利社区');

-- ----------------------------
-- Table structure for lyb
-- ----------------------------
DROP TABLE IF EXISTS `lyb`;
CREATE TABLE `lyb` (
  `book_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `content` text,
  `remark` text,
  `title` varchar(200) CHARACTER SET gb2312 DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of lyb
-- ----------------------------
INSERT INTO `lyb` VALUES ('1', '1001', '2019-02-17', 'tetete', '好的', null);
INSERT INTO `lyb` VALUES ('2', '1001', '2019-02-17', '一定多注意不良卖家，保护买家权利', '一定会的', null);
INSERT INTO `lyb` VALUES ('3', 'st2222', '2019-02-17', '53453534', '不要乱发', null);
INSERT INTO `lyb` VALUES ('4', '123456', '2019-03-01', '543', '111', null);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(4) NOT NULL AUTO_INCREMENT,
  `rent_id` int(4) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `hy_id` int(4) DEFAULT NULL,
  `sh_id` int(4) DEFAULT NULL,
  `state` varchar(20) DEFAULT '待确认',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('3', '3', '床铺出租', '1200', 'st1101', '章子怡', '女', '13598550122', '43', '33', '确认');
INSERT INTO `orders` VALUES ('4', '4', '小天鹅电动车', '100', 'st2222', '李可', '男', '1590233256', '46', '45', '确认');

-- ----------------------------
-- Table structure for pl
-- ----------------------------
DROP TABLE IF EXISTS `pl`;
CREATE TABLE `pl` (
  `pl_id` int(4) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `product_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`pl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of pl
-- ----------------------------
INSERT INTO `pl` VALUES ('1', '1001', 'fff', '74');
INSERT INTO `pl` VALUES ('2', '1001', '手机还在吗', '77');
INSERT INTO `pl` VALUES ('3', '123456', '111', '76');
INSERT INTO `pl` VALUES ('4', '123456', '2332', '79');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(4) NOT NULL AUTO_INCREMENT,
  `price` decimal(9,2) DEFAULT NULL,
  `content` mediumtext,
  `c_id` int(4) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tj` tinyint(2) DEFAULT '0',
  `sh_id` int(4) DEFAULT '0',
  `level` varchar(100) DEFAULT NULL,
  `buy_way` varchar(100) DEFAULT NULL,
  `old_price` int(4) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('70', '100.00', '智能无线耳机，国际最新流行款式，做工精细，可以到天猫搜一下看具体情况，刚买来半年，无损耗', '117', 'upload/1453825068.jpg', 'QCYQY7尖叫无线耳机', '0', '1', '很新', '见面', '250');
INSERT INTO `product` VALUES ('75', '150.00', '车子保养非常好，有想要的同学和我联系            ', '124', 'upload/1456482777.jpg', '新式山地车', '0', '42', '8成新', '见面交易', '1000');
INSERT INTO `product` VALUES ('71', '100.00', '这款耳机就不说了，国产大牌子，头戴式的，学英语没说的', '117', 'upload/1453825183.png', '宾果FB600', '0', '1', '很新', '见面', '160');
INSERT INTO `product` VALUES ('72', '500.00', '这款机子是华为荣耀今年新出的8核手机，非常适合年轻学生！要的尽快，只此一台            ', '114', 'upload/1453825797.jpg', '荣耀畅玩4c', '0', '3', '使用半年', '见面', '990');
INSERT INTO `product` VALUES ('74', '100.00', 'yty                        ', '114', 'upload/1456468011.jpg', '酷派大神F1', '0', '33', '9成新', '见面', '100');
INSERT INTO `product` VALUES ('76', '120.00', '电脑桌带椅子，非常好用            ', '125', 'upload/1459520983.jpg', '白色电脑桌', '0', '43', '9成新', '见面交易', '200');
INSERT INTO `product` VALUES ('78', '900.00', '东西很新，刚买的，有意者联系            ', '114', 'upload/1481385249.jpg', '红米NOTE4', '0', '45', '9成新', '购买', '1100');
INSERT INTO `product` VALUES ('79', '2000.00', '苹果6', '114', 'upload/1551427521.jpg', '苹果6', '0', '49', '九成新', '购买', '3000');

-- ----------------------------
-- Table structure for shop_order
-- ----------------------------
DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE `shop_order` (
  `order_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `telephone` varchar(200) DEFAULT NULL,
  `post_address` varchar(200) DEFAULT NULL,
  `ordertime` date DEFAULT NULL,
  `hy_id` int(4) DEFAULT NULL,
  `order_number` varchar(100) DEFAULT NULL,
  `order_state` varchar(100) NOT NULL DEFAULT '未处理',
  `order_num` int(4) NOT NULL DEFAULT '0',
  `order_price` int(4) NOT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `product_id` int(4) NOT NULL,
  `sh_id` int(4) NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of shop_order
-- ----------------------------
INSERT INTO `shop_order` VALUES ('24', '李可', '1590233256', '2楼3010', '2019-02-17', '46', '201612102358221593', '发货', '1', '900', '红米NOTE4', '78', '45', '尽快发货');
INSERT INTO `shop_order` VALUES ('25', '杨涵宇', '15236222222', '北京453', '2019-03-01', '48', '201903011533241676', '发货', '1', '120', '白色电脑桌', '76', '43', '111');
INSERT INTO `shop_order` VALUES ('26', '杨涵宇', '15236222222', '北京453', '2019-03-01', '48', '201903011606151192', '发货', '1', '2000', '苹果6', '79', '49', '1111');

-- ----------------------------
-- Table structure for ts
-- ----------------------------
DROP TABLE IF EXISTS `ts`;
CREATE TABLE `ts` (
  `ts_id` int(4) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(100) DEFAULT NULL,
  `order_id` int(4) DEFAULT NULL,
  `buyer` varchar(100) DEFAULT NULL,
  `seller` varchar(100) DEFAULT NULL,
  `hy_id` int(4) DEFAULT NULL,
  `sh_id` int(4) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`ts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of ts
-- ----------------------------
INSERT INTO `ts` VALUES ('2', '201612080325491514', '23', '郑岩', '李园', '33', '44', '商品说的是红米4A，结果是红米3，这太夸张了');
INSERT INTO `ts` VALUES ('3', '201612102358221593', '24', '李可', '唐涛', '46', '45', '货不对板');
INSERT INTO `ts` VALUES ('4', '201903011606151192', '26', '杨涵宇', '晴子', '48', '49', '111');

-- ----------------------------
-- Table structure for web_admin
-- ----------------------------
DROP TABLE IF EXISTS `web_admin`;
CREATE TABLE `web_admin` (
  `admin_id` int(4) NOT NULL AUTO_INCREMENT,
  `web_admin` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of web_admin
-- ----------------------------
INSERT INTO `web_admin` VALUES ('2', 'admin', 'admin');
