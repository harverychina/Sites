/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.6.11 : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `blog`;

/*Table structure for table `blog_content` */

DROP TABLE IF EXISTS `blog_content`;

CREATE TABLE `blog_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `author` varchar(30) DEFAULT NULL COMMENT '作者',
  `time` int(11) DEFAULT NULL COMMENT '发布时间',
  `type_id` int(11) DEFAULT NULL COMMENT '分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `blog_content` */

insert  into `blog_content`(`id`,`title`,`content`,`author`,`time`,`type_id`) values (1,'阿里的蚂蚁雄兵，已经俨然一个帝国','今天你到750分了吗？最近这几天，好多人的互相问候都变成了这个数字。据说，到了750分，用户用芝麻分和芝麻信用报告就可申请新加坡和卢森堡签证了。\r\n芝麻分由蚂蚁金服出品。芝麻分的出现和签证的应用，让人们突然认识到蚂蚁金服不只是支付宝、余额宝这么简单了，过去几年蚂蚁金服在不同领域大肆布局，在可以想象的地方都已落子。\r\n仔细梳理这些布局，一个庞大的帝国犹然浮现。从牌照而言，蚂蚁金服已经是全牌照的集团；从业务而言，蚂蚁金服所能服务的客户，比任何一家金融机构都多。不知不觉，阿里的蚂蚁雄兵已经搭建起了大象的帝国。今天，就让我把已经浮出水面的蚂蚁雄兵汇集起来，希望可以尽量拼出蚂蚁帝国的全貌。','X教授',1433992443,2),(4,'马云在纽约到底说了什么：阿里不是来美国竞争','　【财经网讯】6月10日，阿里巴巴集团创始人马云日前受邀在纽约经济俱乐部发表演讲，他在演讲中向美国政商界权威人士再度介绍了阿里巴巴帮助中小企业的愿景，以及这家电商巨头的全球化发展计划。\r\n\r\n　　纽约经济俱乐部是美国一个重要的公共论坛，成立于1907年，至今已有108年历史。它的成员大约有700人，主要是美国商业、财经界及相关行业的高层领导。\r\n\r\n　　在这个俱乐部发表过讲话的演讲者包括多位美国前总统以及英国前首相等国家领导人。\r\n\r\n　　此前，它也迎来过两位来自中国的演讲者，一位是前国家总理朱镕基，另一位是前中国香港特首董建华。','财经网',1433992678,1),(15,'大家好！','&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0061.gif&quot;/&gt;，来访问一下本站！&lt;/p&gt;','哈哈',1434442017,1),(16,'diao ni lao mu','&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0004.gif&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20150616/1434442041140171.jpg&quot; title=&quot;1434442041140171.jpg&quot; alt=&quot;06_2345看图王.jpg&quot;/&gt;&lt;/p&gt;','da bo jiao',1434442042,1);

/*Table structure for table `blog_type` */

DROP TABLE IF EXISTS `blog_type`;

CREATE TABLE `blog_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `blog_type` */

insert  into `blog_type`(`id`,`name`) values (1,'新闻时事'),(2,'科技要闻'),(3,'个人事务'),(5,'军事新闻'),(7,'互联网新闻'),(8,'社会新闻'),(9,'体育新闻');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
