/*
 Navicat Premium Data Transfer

 Source Server         : 100nk
 Source Server Type    : MySQL
 Source Server Version : 50637
 Source Host           : 148.70.181.82:3306
 Source Schema         : celebration

 Target Server Type    : MySQL
 Target Server Version : 50637
 File Encoding         : 65001

 Date: 23/07/2019 11:27:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

create database celebration;
use celebration;
-- ----------------------------
-- Table structure for act_activity
-- ----------------------------
DROP TABLE IF EXISTS `act_activity`;
CREATE TABLE `act_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `holded_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sponsor` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '南开大学',
  `location` varchar(11) CHARACTER SET utf8 NOT NULL DEFAULT '见详情页',
  `date_filter` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_1` (`category_id`),
  CONSTRAINT `fk_1` FOREIGN KEY (`category_id`) REFERENCES `act_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of act_activity
-- ----------------------------
BEGIN;
INSERT INTO `act_activity` VALUES (1, '罗援少将：个人理想与国家', '南开公能讲坛——罗援少将：个人理想与国家\r\n罗援：十一届全国政协委员、中国战略文化促进会常务副会长兼秘书长，军事科学院世界军事研究部原副部长，博士生导师。罗援少将多年来一直从事军事战略和国际战略研究，兼任军事科学院国家高端智库学术委员会委员，中国国际战略学会高级顾问，海峡两岸关系研究中心、清华大学国际问题研究院特邀研究员，曾任驻丹麦副武官，在美国华盛顿大学做过访问学者。\r\n活动简介：罗援将军围绕“个人理想与国家”这个主题，从小时候一波三折的参军梦开始，以自己个人理想方面的感悟，引导大学生要一步一步扎扎实实地去做事，去实现自己目标。同时，罗将军通过许多为国家建设默默奉献的革命先烈、前辈们的事迹，引导大学生理性看待集体与个人、国家利益与个人利益、民族前途与个人前途等等关系，让大学生自觉认识到为国家、为民族，同样也是为个人、为自己，将个人理想与国家理想辩证的统一。\r\n', '2018-11-14 11:41:06', '2018-11-30 11:43:43', '2019-07-12 16:29:19', '南开大学', '见详情页', 201811, 1);
INSERT INTO `act_activity` VALUES (2, '梁兵：对冲基金操作风险', '对冲基金操作风险\r\n报告人：梁兵 教授\r\n主评人：李雪莲 副教授\r\n时  间：2018年11月13日（周二）10：00\r\n地  点：津南校区金融学院234\r\n主办单位：金融学院学术发展中心\r\n　　梁兵教授是美国麻州大学爱森堡管理学院的Charles P. McQuaid 金融讲席教授，金融硕士项目的主任。他是全球最著名的研究对冲基金的学者之一，《数量金融百科全书》“对冲基金”词条的撰写者，美国证券交易委员会对冲基金圆桌会议的专家组成员，《另类投资杂志》的主编之一。 他也是上海交通大学上海高级金融学院的特聘教授，中国绝对收益投资管理协会的常务理事，曾任华尔街大型对冲基金组合基金Entrust Capital 的资深风险顾问。', '2018-11-13 11:41:28', '2018-11-13 11:41:28', '2019-07-12 16:30:58', '金融学院学术发展中心', '见详情页', 201811, 1);
INSERT INTO `act_activity` VALUES (3, 'Nature将用8期介绍百年南开！首期看校长阐述迈向科学卓越新纪元', '6月27日，在世界顶级科学期刊Nature主刊的最新一期上，南开大学百年校庆Nature品牌专刊第一辑发布，校长曹雪涛以“Entering a new century of scientific excellence（迈向科学卓越新纪元）”为题接受采访，面向全球读者介绍百年南开立德树人、科研创新的卓越成就，并展望开启新百年“4211卓越南开”行动计划——\r\n未来，还有这些——\r\n为献礼南开大学百年校庆，南开大学联合Nature计划推出《南开大学百年校庆Nature品牌专刊》，系统介绍南开大学在自然科学各学科领域所开展的诸多科研探索及学术成就。\r\n自6月27日起，Nature主刊将在8期中，以特辑的形式刊发介绍南开大学化学学院、生命科学学院、医学院、药学院、物理科学学院、电子信息与光学工程学院、计算机学院、人工智能学院、网络空间安全学院、软件学院、泰达生物技术研究院、环境科学与工程学院等专业学院及研究机构，并最终集合成《南开大学百年校庆Nature品牌专刊》。', '2019-07-07 11:41:46', '2019-07-07 11:41:46', '2019-07-22 12:06:44', '南开大学', '见详情页', 201907, 1);
INSERT INTO `act_activity` VALUES (4, '纪念周恩来总理入学100周年暨视察母校60周年主题展览举行', '　南开新闻网讯（通讯员 余仔见）近日，由南开大学档案馆主办的纪念周恩来总理入学100周年暨视察母校60周年主题展览，在八里台校区二主楼甲座一楼大厅举行。   1919年9月25日，南开大学正式开学，周恩来免试入学，成为南开大学第一届学生，注册号是62号。南开大学创办之时五四运动方兴未艾，首批入学的周恩来、马骏等南开学子深受南开爱国传统的熏陶，创办《天津学生联合会报》，组建青年进步团体觉悟社，积极投身到反帝爱国运动中。张伯苓校长多次称赞“周恩来是南开最好的学生”。周恩来后来在延安接受天津英文报刊《华北明星报》采访时也说：“我在天津南开读中学、大学，这个学校教学严格，课外活泼，我以后参加革命活动是有南开教育影响的。”\r\n　　新中国成立后，周恩来作为开国总理，肩负千钧，日理万机，仍始终关心着母校南开大学的发展，并于1951年、1957年、1959年三返母校视察，详细了解学校的教学科研和师生的学习生活。1959年5月28日，周总理在邓颖超等人陪同下，第三次视察南开大学。从上午9点3刻来学校，到下午6点离开学校，整整一天的时间，周总理参观了学校的实验室、教室、图书馆、资料室、学生宿舍、运动场、职工食堂和经济研究所，几乎走遍了南开园的每个地方。周总理对南开师生提出希望，提出南开在新时代，有新的校风，有新的教学特点，要保证质量，真正能够很好地为社会主义服务，为将来共产主义服务。周恩来总理视察南开大学已经60年了，但周总理的亲切关怀，依然鼓舞着每一个南开人。\r\n　　此次展览旨在让全校师生进一步了解周恩来这位南开大学杰出的校友，在南开大学即将迎来建校百年之际，激励南开师生以周恩来总理为学习的楷模，砥砺前行，开拓创新，勇担实现中华民族伟大复兴的时代使命。展览将持续到2019年6月30日。\r\n　　今年是周恩来总理入学100周年，也是周恩来总理第三次视察母校60周年，学校档案馆举办了馆藏图片展，回顾周恩来总理在南开大学的求学岁月和三次视察南开大学的幸福时光。该展览分为前言、求学南开投身爱国运动、情系南开关心母校发展、亲切关怀视察南开大学、学习楷模勇担时代使命、结语等6部分，通过12张展板60张图片系统展示了周总理与南开大学的历史渊源，追忆周恩来总理对南开大学的亲切关怀，反映周总理与南开师生之间的深厚情谊。', '2019-05-27 11:41:52', '2019-05-29 11:41:52', '2019-07-12 16:28:15', '南开大学', '见详情页', 201905, 2);
INSERT INTO `act_activity` VALUES (5, '习近平总书记视察南开大学', '1月17日上午，习近平来到天津考察调研。在南开大学，他参观了百年校史主题展览，与部分院士、专家和中青年师生代表互动交流，察看了化学学院和元素有机化学国家重点实验室，详细了解南开大学历史沿革、学科建设、人才队伍、科研创新等情况。(新华社记者张晓松、谢环驰)      【习近平寄语南开师生：只有把小我融入大我，才会有海一样的胸怀，山一样的崇高】17日上午，习近平在天津南开大学参观了百年校史主题展览，察看了化学学院和元素有机化学国家重点实验室，并同部分师生代表亲切交流。习近平对大家说，爱国主义是中华民族的民族心、民族魂。南开大学具有光荣的爱国主义传统，这是南开的魂。当年开办南开大学，就是为了中华民族站起来去培养人才的。我们现在迎来了从站起来、富起来到强起来的阶段，我们要把学习的具体目标同民族复兴的宏大目标结合起来，为之而奋斗。只有把小我融入大我，才会有海一样的胸怀，山一样的崇高。希望你们脚踏实地，在新的起点作出你们这一代人的历史贡献，成为南开大学新的骄傲。', '2019-01-18 11:42:05', '2019-01-17 11:42:05', '2019-07-11 15:53:12', '南开大学', '见详情页', 201901, 3);
INSERT INTO `act_activity` VALUES (12, '“跨界赋能 南物真势力”——首届全球南开物理校友代表大会', '        由南开大学物理科学学院、南开物理校友会主办的首届全球南开物理校友代表大会将邀请南开物理系各年级的南开物理人、在南开物理科学学院工作的南开物理人、由南开物理培养的各领域杰出代表、关注南开物理、支持南开物理的各系南开精英、领域精英、以及各南开校友组织代表和兄弟院校组织代表，近200多位杰出校友参加活动。\r\n　　此次会议将囊括科研、商企、教育、金融、大健康、政府等领域的南开物理人精英，由南开物理校友会发动全球南开物理各年级召集人和杰出系友进行推荐和选拔，通过物代会形式聚合资源，增进相互了解与沟通，实现跨界的整合。此次物代会上还将通过南开物理校友会2018年工作报告和2019年工作规划，表彰在2018年校友会作出杰出贡献的先进个人、先进年级、以及南开物理爱心捐赠的先进代表。同时发布南开物理校友会的各年级校友的扶持计划、各年级召集人的服务体系、南开物理校友会百年校庆活动规划。', '2018-10-26 20:54:00', '2018-11-10 14:00:00', '2019-07-12 16:21:28', '南开大学', '见详情页', 201811, 5);
COMMIT;

-- ----------------------------
-- Table structure for act_category
-- ----------------------------
DROP TABLE IF EXISTS `act_category`;
CREATE TABLE `act_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(64) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of act_category
-- ----------------------------
BEGIN;
INSERT INTO `act_category` VALUES (1, '学术活动');
INSERT INTO `act_category` VALUES (2, '纪念活动');
INSERT INTO `act_category` VALUES (3, '发展活动');
INSERT INTO `act_category` VALUES (4, '文体活动');
INSERT INTO `act_category` VALUES (5, '校友活动');
COMMIT;

-- ----------------------------
-- Table structure for act_comment
-- ----------------------------
DROP TABLE IF EXISTS `act_comment`;
CREATE TABLE `act_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `author` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `identity` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_comment` (`activity_id`),
  CONSTRAINT `fk_comment` FOREIGN KEY (`activity_id`) REFERENCES `act_activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of act_comment
-- ----------------------------
BEGIN;
INSERT INTO `act_comment` VALUES (28, '南开越来越好！[em_13]', '李汶蔚', '17级计算机学院', 5, '2019-07-09 20:16:51', '2019-07-22 13:51:11', 0);
INSERT INTO `act_comment` VALUES (29, '百年南开，再创辉煌！[em_71]', '李小明', '17级计算机学院', 5, '2019-07-09 20:17:42', '2019-07-22 13:33:18', 1);
INSERT INTO `act_comment` VALUES (30, '小我融入大我！', '皮春莹', '17级计算机学院', 5, '2019-07-09 20:18:34', '2019-07-09 20:18:34', 1);
INSERT INTO `act_comment` VALUES (31, '南开，100快乐！[em_71][em_71]', '史晓融', '17级计算机学院', 5, '2019-07-09 20:19:38', '2019-07-09 20:19:38', 1);
INSERT INTO `act_comment` VALUES (33, '路过~[em_13]', 'falalala', '17级计算机学院', 5, '2019-07-09 21:40:26', '2019-07-09 21:40:26', 1);
INSERT INTO `act_comment` VALUES (50, '你好，南开！', '路人甲', '17级计算机学院', 5, '2019-07-10 14:22:51', '2019-07-10 14:22:51', 1);
INSERT INTO `act_comment` VALUES (64, 'hhhhh', '路人乙', '17级计算机学院', 5, '2019-07-10 14:36:32', '2019-07-10 14:36:32', 1);
INSERT INTO `act_comment` VALUES (65, '南开南开', 'falalala', '17级计算机学院', 3, '2019-07-10 14:44:54', '2019-07-10 14:44:54', 1);
INSERT INTO `act_comment` VALUES (66, '路过[em_71]', '路人甲', '17级计算机学院', 1, '2019-07-10 16:24:19', '2019-07-10 16:24:19', 1);
COMMIT;

-- ----------------------------
-- Table structure for adminuser
-- ----------------------------
DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile` text,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of adminuser
-- ----------------------------
BEGIN;
INSERT INTO `adminuser` VALUES (1, 'pcy', 'pcy', '2339348937@qq.com', 'A member of the group \"404 NotFound\", take charge of the backend~superAdmin~', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$4zLtetEBck8ANA8gpPmi/Ol8abg8cMq8wT474D829O7Nqgl/FhlKO', '2019-07-11 14:44:11', '2019-07-18 18:02:56');
INSERT INTO `adminuser` VALUES (2, 'lxm', 'lzy', '819814373@qq.com', 'I am a zhizunxingyao', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy', '2019-07-12 16:16:50', '2019-07-21 10:56:00');
INSERT INTO `adminuser` VALUES (3, 'lww', 'lww', '1664032805@qq.com', 'I am a rongyaowangzhe', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy', '2019-07-12 16:18:16', '2019-07-21 10:27:27');
INSERT INTO `adminuser` VALUES (4, 'sxr', 'sxr', '2678365038@qq.com', 'I am a dreamer.', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy', '2019-07-12 16:19:11', '2019-07-21 10:27:01');
INSERT INTO `adminuser` VALUES (6, 'test', 'test', '233934893@qq.com', 'a test adminuser', 'OLCHYELJR0u_PaGkfO7rsmcxye_KXKcn', '$2y$13$Ko4vbCrmpif4R4DPMrThWOkQVep64Yq4z0uxL6hUxEcRmHjVUiB7K', '2019-07-16 14:07:56', '2019-07-16 14:07:56');
COMMIT;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0',
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`item_name`,`created_at`) USING BTREE,
  KEY `auth_user` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_user` FOREIGN KEY (`user_id`) REFERENCES `adminuser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
BEGIN;
INSERT INTO `auth_assignment` VALUES ('超级管理员', 1, 1563001425);
INSERT INTO `auth_assignment` VALUES ('超级管理员权限', 1, 1563001430);
INSERT INTO `auth_assignment` VALUES ('留言审核', 2, 1563244087);
INSERT INTO `auth_assignment` VALUES ('留言审核权限', 2, 1563244087);
INSERT INTO `auth_assignment` VALUES ('留言审核', 3, 1563005982);
INSERT INTO `auth_assignment` VALUES ('管理校庆活动', 4, 1563244279);
INSERT INTO `auth_assignment` VALUES ('管理活动', 4, 1563244286);
INSERT INTO `auth_assignment` VALUES ('查看流量', 6, 1563257275);
COMMIT;

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
BEGIN;
INSERT INTO `auth_item` VALUES ('/*', 2, NULL, NULL, NULL, 1563001303, 1563001303);
INSERT INTO `auth_item` VALUES ('/act-activity/*', 2, NULL, NULL, NULL, 1563244221, 1563244221);
INSERT INTO `auth_item` VALUES ('/message/*', 2, NULL, NULL, NULL, 1563001339, 1563001339);
INSERT INTO `auth_item` VALUES ('/visit-count/*', 2, NULL, NULL, NULL, 1563243989, 1563243989);
INSERT INTO `auth_item` VALUES ('查看流量', 1, '查看流量', NULL, NULL, 1563243860, 1563243860);
INSERT INTO `auth_item` VALUES ('查看流量权限', 2, NULL, NULL, NULL, 1563244022, 1563244022);
INSERT INTO `auth_item` VALUES ('留言审核', 1, '审核南开留言', NULL, NULL, 1563001138, 1563001138);
INSERT INTO `auth_item` VALUES ('留言审核权限', 2, NULL, NULL, NULL, 1563001192, 1563001192);
INSERT INTO `auth_item` VALUES ('管理校庆活动', 2, NULL, NULL, NULL, 1563244246, 1563244246);
INSERT INTO `auth_item` VALUES ('管理活动', 1, '活动类别及发布管理', NULL, NULL, 1563244158, 1563244158);
INSERT INTO `auth_item` VALUES ('超级管理员', 1, '开发人员维护系统', NULL, NULL, 1563001061, 1563001061);
INSERT INTO `auth_item` VALUES ('超级管理员权限', 2, NULL, NULL, NULL, 1563001166, 1563001166);
COMMIT;

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
BEGIN;
INSERT INTO `auth_item_child` VALUES ('超级管理员权限', '/*');
INSERT INTO `auth_item_child` VALUES ('管理校庆活动', '/act-activity/*');
INSERT INTO `auth_item_child` VALUES ('留言审核权限', '/message/*');
INSERT INTO `auth_item_child` VALUES ('查看流量权限', '/visit-count/*');
COMMIT;

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(32) DEFAULT NULL,
  `identity` varchar(32) DEFAULT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of message
-- ----------------------------
BEGIN;
INSERT INTO `message` VALUES (1, '陈静雯', '17级国际关系专业格拉斯哥班', '白河之滨，汇聚四海英才。悠悠学府，天下桃李芬芳。南以开拓，公能传承百年。同祝华诞，再迎日新月异。', 1, '2019-07-07 13:11:52', '2019-07-13 15:13:08');
INSERT INTO `message` VALUES (3, '李庶民', '99级金融学系03级法律硕士校友', '母校与五四运动同龄，这是青春和激情的印记。回顾过去，心潮澎拜，展望未来，激情满怀。不论沧海桑田，我们总以南开为荣。百年的时光，南开正年青。祝愿百年南开在新时代书写新的辉煌篇章。', 1, '2019-07-07 13:12:09', '2019-07-14 11:50:38');
INSERT INTO `message` VALUES (4, '赵明', '哲学系83级', '祝母校南开早日成为世界一流大学，完成张伯苓老校长的夙愿！', 1, '2019-07-07 13:12:10', '2019-07-17 17:22:56');
INSERT INTO `message` VALUES (5, NULL, '南开大学第二十届研究生支教团', '二十载扎根西部，于三尺讲台书青春华章； 一百年壮怀难折，为泱泱中华筑公能学府。 中兴业，当吾辈！巍巍南开，月异日新！', 1, '2019-07-07 13:14:02', '2019-07-17 17:23:39');
INSERT INTO `message` VALUES (6, '邓承浩', '2009级商学院旅游管理校友', '南开百年华诞将至，历百载愈淬公能初心，新时代更彰日新月异，祝愿母校永远年轻！', 1, '2019-07-07 21:52:10', '2019-07-07 21:52:14');
INSERT INTO `message` VALUES (7, '李小明', '17级计算机科学与技术', '母校与五四运动同龄，这是青春和激情的印记。回顾过去，心潮澎拜，展望未来，激情满怀。不论沧海桑田，我们总以南开为荣。百年的时光，南开正年青。祝愿百年南开在新时代书写新的辉煌篇章。', 1, '2019-07-07 22:31:11', '2019-07-07 22:31:22');
INSERT INTO `message` VALUES (8, '李小毓', '17级计算机学院', '南开百年华诞将至，历百载愈淬公能初心，新时代更彰日新月异，祝愿母校永远年轻！', 1, '2019-07-07 22:31:37', '2019-07-07 22:31:45');
INSERT INTO `message` VALUES (9, '李汶蔚', '17级计算机科学与技术', '百年南开，再创辉煌!', 1, '2019-07-08 11:05:53', '2019-07-08 11:16:27');
COMMIT;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
BEGIN;
INSERT INTO `migration` VALUES ('m000000_000000_base', 1563000538);
INSERT INTO `migration` VALUES ('m140506_102106_rbac_init', 1563000829);
COMMIT;

-- ----------------------------
-- Table structure for praise
-- ----------------------------
DROP TABLE IF EXISTS `praise`;
CREATE TABLE `praise` (
  `occured_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(32) NOT NULL,
  PRIMARY KEY (`occured_at`,`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of praise
-- ----------------------------
BEGIN;
INSERT INTO `praise` VALUES ('2019-07-09 14:53:57', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 14:54:12', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:05:01', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:06:41', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:06:50', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:09:29', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:09:41', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:10:04', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:14:50', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:14:57', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:15:14', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:26:17', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:26:30', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:26:42', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:26:50', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:28:47', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:28:57', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:31:24', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:34:46', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:35:23', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:35:37', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:37:55', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:38:16', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:39:44', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:48:27', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:16', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:18', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:19', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:20', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:23', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:25', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:27', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:29', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 15:56:33', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 16:26:20', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 16:27:51', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 16:50:34', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 16:51:51', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 16:56:01', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-09 16:57:43', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-10 15:53:14', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 08:26:26', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 08:26:34', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 08:33:39', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 08:36:34', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 08:36:44', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 11:07:05', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 11:07:27', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 11:07:32', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-11 11:07:52', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-18 11:36:49', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-18 11:40:18', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-18 15:17:52', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-21 13:53:41', '127.0.0.1');
INSERT INTO `praise` VALUES ('2019-07-21 14:11:45', '127.0.0.1');
COMMIT;

-- ----------------------------
-- Table structure for visit_count
-- ----------------------------
DROP TABLE IF EXISTS `visit_count`;
CREATE TABLE `visit_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nums` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of visit_count
-- ----------------------------
BEGIN;
INSERT INTO `visit_count` VALUES (1, 10, '2019-07-11');
INSERT INTO `visit_count` VALUES (2, 12, '2019-07-10');
INSERT INTO `visit_count` VALUES (3, 9, '2019-07-09');
INSERT INTO `visit_count` VALUES (4, 8, '2019-07-08');
INSERT INTO `visit_count` VALUES (5, 14, '2019-07-07');
INSERT INTO `visit_count` VALUES (6, 11, '2019-07-06');
INSERT INTO `visit_count` VALUES (7, 0, '2019-07-11');
INSERT INTO `visit_count` VALUES (8, 0, '2019-07-11');
INSERT INTO `visit_count` VALUES (9, 0, '2019-07-12');
INSERT INTO `visit_count` VALUES (10, 0, '2019-07-13');
INSERT INTO `visit_count` VALUES (11, 8, '2019-07-14');
INSERT INTO `visit_count` VALUES (12, 0, '2019-07-15');
INSERT INTO `visit_count` VALUES (13, 0, '2019-07-16');
INSERT INTO `visit_count` VALUES (14, 4, '2019-07-17');
INSERT INTO `visit_count` VALUES (15, 113, '2019-07-18');
INSERT INTO `visit_count` VALUES (16, 0, '2019-07-19');
INSERT INTO `visit_count` VALUES (17, 0, '2019-07-20');
INSERT INTO `visit_count` VALUES (18, 22, '2019-07-21');
INSERT INTO `visit_count` VALUES (19, 18, '2019-07-22');
COMMIT;

-- ----------------------------
-- Table structure for visit_raw
-- ----------------------------
DROP TABLE IF EXISTS `visit_raw`;
CREATE TABLE `visit_raw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `visit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Procedure structure for queryCount
-- ----------------------------
DROP PROCEDURE IF EXISTS `queryCount`;
delimiter ;;
CREATE DEFINER=`root`@`%` PROCEDURE `queryCount`(IN time datetime, out counts INT)
begin


	if 0=(select exists(select nums from visit_count where DATE_FORMAT(time,'%Y-%m-%d-%H') = DATE_FORMAT(date,'%Y-%m-%d-%H'))) then
		begin
			set counts =
				(select count(id) as num from visit_raw where 
					DATE_FORMAT(visit_time,'%Y-%m-%d-%H') = DATE_FORMAT(time,'%Y-%m-%d-%H'));
			insert into visit_count(nums, date) values(counts, DATE_FORMAT(time,'%Y-%m-%d-%H'));
		end;
		
	elseif CURRENT_TIMESTAMP() BETWEEN DATE_FORMAT(time,'%Y-%m-%d-%H') and DATE_FORMAT(date_add(time, interval 1 hour),'%Y-%m-%d-%H') then
		begin
			set counts =
					(select count(id) as num from visit_raw where 
						DATE_FORMAT(visit_time,'%Y-%m-%d-%H') = DATE_FORMAT(time,'%Y-%m-%d-%H'));
			update visit_count set nums = counts where DATE_FORMAT(time,'%Y-%m-%d-%H') = DATE_FORMAT(date,'%Y-%m-%d-%H');
		end;
		
	else
		begin
				set counts = (select nums from visit_count where DATE_FORMAT(time,'%Y-%m-%d-%H') = DATE_FORMAT(date,'%Y-%m-%d-%H'));

		end;
	end if;
end;
;;
delimiter ;

-- ----------------------------
-- Procedure structure for saveVistNum
-- ----------------------------
DROP PROCEDURE IF EXISTS `saveVistNum`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `saveVistNum`()
BEGIN
 INSERT INTO visit_count (nums,date) VALUES((SELECT COUNT(id) from visit_raw),
(select date_sub(curdate(),interval 1 day)));
 DELETE FROM visit_raw;
 ALTER TABLE visit_raw AUTO_INCREMENT =1;
END;
;;
delimiter ;

-- ----------------------------
-- Event structure for saveVistNum
-- ----------------------------
DROP EVENT IF EXISTS `saveVistNum`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` EVENT `saveVistNum` ON SCHEDULE EVERY 1 DAY STARTS '2019-07-12 00:00:00' ON COMPLETION PRESERVE ENABLE DO CALL saveVistNum();
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
