/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : focus

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-06-02 13:57:08
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
INSERT INTO `fcs_post` VALUES ('2', '热身-德国2-2喀麦隆 猎豹头炮穆勒许尔勒建功', '腾讯体育6月2日讯 北京时间6月2日凌晨，一场世界杯热身赛中，主场作战的德国队2-2被喀麦隆队逼平。下半时，埃托奥打破僵局，穆勒和许尔勒头顶脚踢帮德国队逆转比分，舒波-莫廷顽强地将比分扳平。\r\n\r\n比赛焦点\r\n\r\n诺伊尔替身发挥上乘：即便未能零封对手，但诺伊尔替身魏登费勒此役发挥也属上乘，他至少扑出对手3记必进射门，出击、摘高球、门内扑救样样不差，心理素质也相当不错，这下勒夫可以放心了。\r\n\r\n埃托奥继续回击质疑：下半时埃托奥首开纪录后，猎豹跑到场边做出一个“老人拄拐”的动作，以此回击外界对其的质疑，为国家队打入56球的埃托奥此役也再度刷新喀麦隆国家队进球纪录。\r\n\r\n博阿滕险送乌龙，因此丢位置？上半时临近结束时，喀麦隆右翼舒波-莫廷起球到后点，皮球在博阿滕身前弹地，面向本方球门的德国后卫一时间不知道如何处理，犹豫之下他头球回点魏登费勒，魏登费勒狼狈倒地还是没能扑到皮球，送给对手角球。博阿滕很可能因为这次不合适的处理球，丢掉主力先发位置。\r\n\r\n友谊赛不友好：开场不到20分钟，德国中场克罗斯和喀麦隆中场姆比亚就掐得不可开交，克罗斯先2次放倒对手，姆比亚马上抓住机会两次踢倒克罗斯，看这架势一点儿也不会觉得这只是一场热身赛。\r\n\r\n数据统计\r\n\r\n德国\r\n项目\r\n喀麦隆\r\n2\r\n比分\r\n2\r\n12\r\n射门次数\r\n12\r\n5\r\n射正次数\r\n6\r\n5\r\n角球\r\n3\r\n63.6%\r\n控球率\r\n36.4%\r\n590\r\n传球次数\r\n241\r\n3\r\n越位\r\n0\r\n14\r\n犯规\r\n14\r\n0\r\n红牌\r\n0\r\n1\r\n黄牌\r\n2\r\n4\r\n门将扑救次数\r\n3\r\n精彩回放\r\n\r\n开场仅40秒，赫迪拉禁区前直塞，厄齐尔反越位插入禁区左脚打近角稍稍偏出。第3分钟，德国队开出左侧战术角球，默特萨克前插接球距球门30米处右脚怒射，皮球擦着门楣出界。第11分钟，穆勒在禁区外背对球门倒钩挑传格策，后者适时插上右脚抽射近角，伊坦杰倒地扑了一下皮球击中立柱弹出。\r\n\r\n第18分钟，埃托奥禁区内拉球戏耍赫迪拉后右脚低射，魏登费勒站位精确将球扑入怀中。第21分钟，巴萨中场宋从背后放倒赫迪拉，皇马中场看了看伤愈不久的右膝并无大碍。第34分钟，罗伊斯左肋突破禁区边上起脚怒射，伊坦杰扑个正着。2分钟后，罗伊斯左路起球精确找到后点埋伏的赫迪拉，德国6号甩头攻门没有顶正位置错失良机。\r\n\r\n第38分钟，埃托奥禁区前直塞禁区，莫坎约斜插到位低射远角，魏登费勒出击及时用腿挡出这记必进球。第57分钟，杜尔姆禁区外凌空抽射打高。第62分钟，埃托奥禁区内劲射被魏登费勒扑出，紧接着左路跟进的舒波-莫廷高速下底倒三角敲到门前，埃托奥包抄推射远角中的，1-0！这是埃托奥为国家队打入的第56球。\r\n\r\n第67分钟，小博阿滕在底线处从埃托克脚下拼来机会，拜仁铁闸随即传中，前点跟进的穆勒跑动中甩头攻门，皮球从门将与近门柱之间的缝隙入网。1-1，穆勒再立奇功。第71分钟，波多尔斯基从左肋形成突破后横传门前，包抄到位的许尔勒一蹴而就，2-1，德国队5分钟内连进2球逆转比分。\r\n\r\n第78分钟，舒波-莫廷右路得球面对博阿滕和默特萨克两队封堵，用速度摆脱、巧妙闪出空当低射中的。2-2！\r\n\r\n赛后言论\r\n\r\n勒夫：我们犯了不少错误，但这会帮助球队进步。这几年我们一直在纠错中行进，我们需要机会。大家可以看到，厄齐尔远未至最佳状态，他需要两周时间调整，世界杯上我们会看到最棒的厄齐尔。\r\n\r\n默特萨克：一旦我们很快失球，就会踢得很乱，我们做得还不够好。\r\n\r\n穆勒：踢得很吃力，没打出最佳水准。\r\n\r\n许尔勒：我敢肯定，世界杯上我们一定踢得比今天好。团队精神已经形成，大家逐渐融为一体。\r\n\r\n杜尔姆：此战对我来说很特别，儿时的梦想终于成真。\r\n\r\n媒体评论\r\n\r\n《踢球者》：一度落后，2-1反超，最后被扳平——勒夫应该对结果满意，比赛中德国队暴露出不少问题，防线问题最多。\r\n\r\n《图片报》：两支球队真刀真枪干了一场，德国队的防守问题还是没解决。不过杜尔姆首秀发挥正常，许尔勒为进入世界杯先发名单殊死一搏，这一夜很有内容！\r\n\r\n出场阵容\r\n\r\n德国队（4231）：\r\n\r\n门将：22-魏登费勒\r\n\r\n后卫：20-杰罗姆-博阿滕、17-默特萨克、5-胡梅尔斯、24-杜尔姆（4-赫韦德斯，85’）\r\n\r\n后腰：6-赫迪拉（25-克莱默，73’）、18-克罗斯\r\n\r\n中场：13-托马斯-穆勒、8-厄齐尔（10-波多尔斯基，64’）、21-罗伊斯\r\n\r\n前锋：19-格策（9-许尔勒，58’）\r\n\r\n喀麦隆（442）：\r\n\r\n门将：16-伊坦杰\r\n\r\n后卫：24-塞德里克（22-恩约姆，83’）、3-恩库鲁、21-马蒂普、12-贝迪莫（2-阿索-埃克托，58’）\r\n\r\n中场：18-恩诺、6-亚历山大-宋、17-姆比亚（7-恩古埃莫，46’）、13-舒波-莫廷\r\n\r\n前锋：9-埃托奥（15-韦伯，90’）、8-莫坎约\r\n\r\n（牛牛）', '0000-00-00 00:00:00', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fcs_user
-- ----------------------------
INSERT INTO `fcs_user` VALUES ('1', 'focus', '$2y$10$SpJe3u78Q4VijuXFPw8iMeJ/MOl/rjsbdlvwdRJVB4RtSUL/ROP7G', 'pngsLLtmu6R7AmjzjWDrNlxzpNh8RFslxOQhGkeM6mRZKr2t4XkxoNrrJFO7', '2014-06-02 12:51:39');
INSERT INTO `fcs_user` VALUES ('2', 'tan', '$10$SpJe3u78Q4VijuXFPw8iMeJ/MOl/rjsbdlvwdRJVB4RtSUL/ROP7G', null, null);
