-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: scutwx
-- ------------------------------------------------------
-- Server version	5.7.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动标题',
  `abstract` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动的简介',
  `schedule` text COLLATE utf8_unicode_ci NOT NULL COMMENT '活动的时间表，进行php序列化储存',
  `way` text COLLATE utf8_unicode_ci,
  `poster` char(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (1,'专辑签售','北湖孙燕姿北二饭堂签售活动，另有王者荣耀好礼相送。','[{\"stage\":\"\\u9752\\u94dc\\u9636\\u6bb5\",\"beginTime\":\"09\\u670810\\u65e5\",\"endTime\":\"09\\u670811\\u65e5\",\"place\":\"\\u5317\\u4e8c\\u996d\\u5802\"},{\"stage\":\"\\u767d\\u94f6\\u9636\\u6bb5\",\"beginTime\":\"09\\u670810\\u65e5\",\"endTime\":\"09\\u670811\\u65e5\",\"place\":\"\\u5317\\u4e09\\u996d\\u5802\"},{\"stage\":\"\\u9ec4\\u91d1\\u9636\\u6bb5\",\"beginTime\":\"09\\u670810\\u65e5\",\"endTime\":\"09\\u670811\\u65e5\",\"place\":\"\\u5317\\u56db\\u996d\\u5802\"}]','[{\"wayname\":\"\\u624b\\u673a\",\"waycontent\":\"18826076955\"},{\"wayname\":\"\\u767e\\u5ea6\",\"waycontent\":\"http:\\/\\/www.baidu.com\"}]','b1b711530ac9b925c38d49b02fdb389c.png',1),(3,'quia','inventore','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(4,'sequi','quia','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(5,'quo','cupiditate','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(6,'eos','est','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(7,'aut','voluptas','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',2),(8,'ducimus','laudantium','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',0),(9,'cumque','eum','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',0),(12,'odit','quibusdam','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',0),(13,'sequi','inventore','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(14,'sunt','sapiente','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(15,'voluptas','tempore','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(16,'nostrum','atque','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(17,'voluptatum','aliquam','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(18,'quia','est','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(19,'ea','fuga','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1),(20,'pariatur','commodi','[{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"},{\"stage\":\"xxoo\",\"beginTime\":\"828361243\",\"endTime\":\"828361243\",\"place\":\"xxooxxoo\"}]','[{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"},{\"wayname\":\"xxoo\",\"waycontent\":\"xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo\"}]','default.png',1);
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员用户名',
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员加密后的密码',
  `nickname` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员昵称',
  `authority` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'MiniFrog','8c426b38c20d2d7cb6ab1608fa93500c2790241e951e5e07abb498d549244b10','MiniFrog',2),(2,'Matafela','6f9cfcf6a060127580f2f2202614bd336a0f3bee600031635536bdfd2bc7e95e','满堂风来',2),(3,'weimian','51b5a91004cbb842932351f50fb589286ef13d67125a43a02b0017a776927255','海勉',2),(4,'zero','e401a2f533e853713eea21b878c1921c19fa9c8b887c1547c771ece46e13f766','零度冰华',2);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `administrator` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrators`
--

LOCK TABLES `administrators` WRITE;
/*!40000 ALTER TABLE `administrators` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `phone_num` char(11) COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号',
  `item_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT '电器名称',
  `campus` tinyint(4) NOT NULL COMMENT '校区，0南校，1北校',
  `dormitory` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '宿舍',
  `under_exam` tinyint(4) NOT NULL COMMENT '是否审核通过，0为未审核，1为通过，2为不通过',
  `detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT '电器问题描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carousel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imgpath` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgmes` char(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片信息',
  `imgtype` char(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片类型',
  `acturl` char(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '跳转链接',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carousel`
--

LOCK TABLES `carousel` WRITE;
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
INSERT INTO `carousel` VALUES (1,'38ae8c7ef0f3b42ab0a67973f1b6bab2.jpeg','无线杯电子设计大赛','协会动态/近期活动','2',NULL,NULL),(2,'d9135e03dbfd27ea4b2ed8827b5ff7d8.jpeg','无线杯电子设计大赛','协会动态/近期活动','3',NULL,NULL),(3,'e8eefd523167d0b747052613da3978b7.jpeg','无线杯电子设计大赛','协会动态/近期活动','4',NULL,NULL),(4,'8ca3296faf69d5839f18f060fdcdcaf7.jpeg','无线杯电子设计大赛','协会动态/近期活动','',NULL,NULL),(5,'b2380c091536131d0e88c46b3f37074d.jpeg','无线杯电子设计大赛','协会动态/近期活动','',NULL,NULL);
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_repair_trick`
--

DROP TABLE IF EXISTS `com_repair_trick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_repair_trick` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `thumb_up` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `com_repair_trick_user_id_index` (`user_id`),
  KEY `com_repair_trick_article_id_index` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_repair_trick`
--

LOCK TABLES `com_repair_trick` WRITE;
/*!40000 ALTER TABLE `com_repair_trick` DISABLE KEYS */;
INSERT INTO `com_repair_trick` VALUES (1,18,2,'Earum quis sit eos sapiente. Dolore nisi eum assumenda impedit. Voluptatem consectetur officia qui ratione enim repellendus veniam.','',0),(2,15,2,'Voluptatem sed beatae nostrum adipisci. Dolores omnis ratione autem. Non ducimus nihil suscipit nostrum et ducimus. Tenetur iure quia ut possimus velit sit.','',0),(3,2,2,'Est omnis consequatur repudiandae neque et in officiis. Deserunt facere expedita reprehenderit quidem asperiores tempore. Quia temporibus vel sint et enim. Magnam molestiae omnis fuga sint.','',0),(4,12,4,'Aut quidem et a aperiam tempore illo in. Expedita ut sit consectetur eligendi ea. Voluptate hic necessitatibus mollitia nobis suscipit. Doloremque praesentium nulla temporibus ipsum maxime cum.','',0),(5,5,4,'Dolores deleniti quo earum itaque. Tempore error ut ut eos. Ullam omnis necessitatibus et.','',0),(6,4,4,'Explicabo quam sit praesentium assumenda. Quo sunt voluptatum magni qui. In atque beatae consequatur repellat consequatur animi eveniet non. Dolores iste perspiciatis quo sunt id.','',0),(7,13,5,'Dignissimos aliquid voluptatem dolore dolore velit dolorem porro dolorem. Labore dolorum et voluptates. Eos vero esse praesentium numquam ex aliquam. Illum exercitationem ad corrupti consequatur.','',0),(8,19,6,'Quisquam ex et odit doloribus. Fugiat et sit alias est rerum. Et aut amet quia ut consequuntur necessitatibus ipsum.\nVelit sunt aperiam nemo nihil. Dolorum expedita earum ipsa natus sit.','',0),(9,9,6,'Ut consequatur neque corporis dicta. Vitae odio eos ut voluptatem et. Consequatur nemo excepturi asperiores quibusdam. Quam rerum a excepturi porro voluptate dolores.','',0),(10,4,7,'Qui est enim aut et inventore ipsam quae provident. Perspiciatis ducimus iste aliquam optio natus nostrum tempore. Sunt officiis soluta blanditiis rerum ad.','',0),(11,4,8,'Fuga nobis labore ea aliquid. Voluptatem repellat voluptate voluptatem repellendus ad quia dolores. Dolorum eum nobis laboriosam quibusdam harum deserunt dolores nisi.','',0),(12,11,8,'Nihil maxime corporis et odio. Animi deserunt consequatur in dolorum. Repellat quidem sit maiores.\nOdit voluptas quam quia natus nemo. Voluptatem molestiae iste cupiditate facere doloribus.','',0),(13,2,8,'Quod eaque dolorum tempore aliquam aut nemo in. Architecto nesciunt ex et cum temporibus mollitia nulla. Ullam natus quaerat in quos ut omnis ut.','',0),(14,15,9,'Aliquam quis quas perferendis enim blanditiis aspernatur voluptate dolorem. Quasi ducimus natus enim corporis.','',0),(15,2,9,'Consequuntur praesentium aspernatur quia in inventore. Et qui quis rem quis sed velit.','',0),(16,3,10,'Iste veritatis temporibus ut et occaecati quis amet. Deleniti similique reiciendis dolores odit ea nesciunt deleniti. Quia veniam molestiae qui eligendi sed. Fugit dolore mollitia deleniti est neque.','',0),(17,15,10,'Voluptatem dolores repellendus delectus. Corrupti provident soluta dolor rem. Alias officiis repellat quibusdam libero. Alias aliquam aliquam at et consequatur provident assumenda.','',0),(18,20,11,'Iusto temporibus architecto eveniet voluptatem repellendus rerum. Natus sequi dicta quos non et qui. Alias repellat numquam ducimus eius dolores voluptatem eum.','',0),(19,14,11,'Quae nam sunt quo voluptatem qui error. Quo a omnis fugit atque ut ut voluptas sapiente. Et hic dicta omnis voluptatem sint qui. Illo itaque delectus qui nam.','',0),(20,12,13,'Repellat vitae voluptatum sit perspiciatis voluptatem. Consequatur cupiditate autem sapiente quod et aperiam perferendis. Ad similique quia vitae est aut corrupti.','',0),(21,4,13,'Id et labore ab sint aut ut. Tenetur incidunt laboriosam amet ipsam consequatur non occaecati. Eligendi quo veritatis inventore error aspernatur. Officiis voluptates cum eum quia quidem.','',0),(22,4,13,'Fugit quia asperiores sed perferendis quos asperiores iusto. Ea facilis corrupti molestiae expedita beatae quia excepturi qui. Qui placeat rerum et cumque. Quisquam est ullam harum.','',0),(23,12,15,'Rerum quo harum occaecati rerum perferendis reiciendis at. Eligendi aperiam veritatis deserunt delectus. Maxime et repellendus ab voluptate dignissimos qui. Est quas ut aliquam tenetur quia aperiam.','',0),(24,16,16,'Aliquid dolorem fuga officiis fugiat soluta. Qui eum quo eos alias incidunt non.','',0),(25,18,16,'Ea ipsam eveniet ducimus totam sit nisi distinctio. Sit hic quod id expedita libero nihil. Qui ut magnam ullam at non perspiciatis. Nulla incidunt mollitia voluptas repellat.','',0),(26,16,16,'Praesentium quidem nemo quas accusamus rerum dolor quaerat. Provident porro ut id impedit eligendi ut minima. Iste in nisi sunt.','',0),(27,7,17,'Magnam fuga perferendis dignissimos quia fugiat. Perferendis modi cumque eius ullam totam doloribus. Recusandae quia qui non distinctio velit temporibus impedit ad.','',0),(28,8,17,'Voluptatem non repellat dolor necessitatibus. Sit magni id rerum distinctio dolore. Enim qui modi nisi quam. Beatae ipsa quasi impedit repudiandae cum et.','',0),(29,7,17,'Alias voluptates quaerat sed temporibus nemo tempora voluptas. Totam placeat sed qui voluptas. Ut aut itaque rem et nemo dolore.','',0),(30,15,18,'Dolorem ab libero laborum nostrum. Quo commodi ut velit dolores.','',0),(31,11,18,'Dolorem asperiores qui ipsam accusantium voluptates pariatur quasi. Ullam rerum adipisci dignissimos. Voluptatem voluptates dignissimos et et quo.','',0),(32,1,18,'Nam commodi omnis molestias eligendi sit. Quo tempore fugiat distinctio modi dolorum similique. Et vel eum et autem repudiandae dignissimos labore.','',0),(33,20,19,'Quasi adipisci eligendi et aut. Commodi blanditiis accusamus explicabo libero doloremque. Quia enim totam rerum.\nDolor cumque quibusdam delectus laborum. Ad nam dolorum qui est.','',0),(34,19,19,'Laudantium et ipsum debitis rerum sit. Velit sit eum qui aliquid. Aut placeat vitae perspiciatis et ullam sed. Voluptas aut sit qui voluptatem quis sed iusto.','',0),(35,2,20,'Ea officia a omnis non dicta. At molestiae ducimus numquam est. Officia nulla quod placeat et voluptate eum ea.','',0),(36,2,20,'Rerum error ratione maiores aut ut facere est. Rerum magni laboriosam eligendi sit reprehenderit. Voluptatibus harum qui nisi sed error cum. Dolore optio deserunt facilis debitis et at.','',0),(37,4,20,'Tempora voluptatem soluta debitis est reprehenderit. Veniam qui facere quibusdam. Fugit suscipit expedita delectus et occaecati.','',0);
/*!40000 ALTER TABLE `com_repair_trick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_report`
--

DROP TABLE IF EXISTS `com_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_report` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT 'user表外键',
  `article_id` int(10) unsigned NOT NULL COMMENT 'report表外键',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `thumb_up` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(10) unsigned NOT NULL COMMENT '创建时间戳',
  PRIMARY KEY (`id`),
  KEY `com_report_user_id_index` (`user_id`),
  KEY `com_report_article_id_index` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_report`
--

LOCK TABLES `com_report` WRITE;
/*!40000 ALTER TABLE `com_report` DISABLE KEYS */;
INSERT INTO `com_report` VALUES (1,6,2,'Et velit quas et quo. Facere vel vel inventore dolorum cupiditate suscipit iure. Non consequuntur quo et vero sit. Adipisci aut cumque cum quo quibusdam.','',0),(2,15,2,'Incidunt numquam et provident fugit ut sint. Recusandae ad expedita placeat. Aut molestiae doloremque commodi consequatur et. Voluptatem veniam repellat qui neque.','',0),(3,4,2,'Et perspiciatis fugiat ex ex. Modi voluptatum et eum omnis perspiciatis minus officia. Ut soluta enim neque aperiam accusantium ut.','',0),(4,9,3,'Sit quia nostrum fugit distinctio. Consequatur ut culpa esse ut animi eum ea. Deserunt doloremque voluptas numquam adipisci consectetur. Aperiam laborum suscipit voluptatem rem itaque corrupti optio.','',0),(5,1,3,'Facere voluptatem quia quo nulla. Quos accusamus possimus soluta ullam et quis consequuntur. Fugiat ut omnis impedit ipsam totam. Possimus natus dolore expedita facilis inventore voluptas.','',0),(6,11,3,'Vitae et ea laudantium praesentium quidem deleniti hic et. Eos repellendus non quaerat fugiat aut. Et officia consectetur repellendus quod illum. Ratione soluta et error nulla quibusdam.','',0),(7,4,4,'Quam voluptas et blanditiis accusamus sint ab ea. Enim sit eos et facilis inventore. Accusamus omnis modi illo debitis quasi ut sunt nostrum. Necessitatibus esse dolores reiciendis commodi.','',0),(8,10,5,'Vel quis ipsam pariatur perferendis. Voluptas sapiente quia quas omnis et. Placeat cum earum quam.','',0),(9,6,5,'Ducimus placeat itaque nihil sapiente nam voluptatem. Occaecati earum mollitia corporis nesciunt ullam eius dolores. Voluptates ab ullam voluptatem expedita non.','',0),(10,4,5,'Tempora deleniti mollitia voluptatibus quia. Eaque est quo ad officia explicabo quidem in. Est inventore suscipit dolorem nobis ducimus qui voluptatem magni.','',0),(11,16,6,'Qui eveniet iure ut quod quod voluptatem. Dolores aut blanditiis dolores est. Deleniti laboriosam reiciendis explicabo qui expedita dolores.','',0),(12,16,6,'Omnis provident perferendis id voluptas qui molestiae. Nesciunt rerum soluta qui sunt qui quod qui.\nRecusandae qui non ipsum ea nihil. Aperiam voluptates autem doloremque est quia veritatis.','',0),(13,4,7,'Eos provident modi minus commodi mollitia qui. Dolore consequatur aperiam velit dicta placeat. Harum vitae dolores nemo dolor rem et. Iure veniam in qui enim voluptatem.','',0),(14,2,7,'Totam placeat iure harum enim sit quia omnis. Pariatur explicabo quia eaque maiores. Nihil ab delectus velit nulla amet.','',0),(15,7,8,'Explicabo fugit at sit delectus alias esse consequatur maiores. Aliquam ex atque ratione corrupti sit temporibus enim. Sint laudantium minima ut fuga alias et.','',0),(16,13,9,'Sit tempora rerum inventore ipsum vel neque. Laborum unde error tempora illum voluptas natus est. Nihil iste harum repudiandae cumque at.','',0),(17,18,9,'Perspiciatis non dicta nihil. Soluta voluptate nostrum rem dolorem dolor et. Quis ut fugit necessitatibus deserunt tempore occaecati. Aut possimus autem dolor. Ipsam sed labore quasi eos.','',0),(18,10,10,'Quasi numquam quos veritatis ducimus cum enim est. Vitae ex sit in porro aspernatur. Nesciunt quia inventore quos illo incidunt.','',0),(19,20,10,'Reiciendis sed eveniet sed fugit. Totam nemo tenetur dolor. Voluptatum nostrum maxime laboriosam qui eaque laborum.','',0),(20,7,11,'Unde quo quia sed soluta. Similique et ipsum omnis quo dolorum nisi. Non hic fugit rerum recusandae dolorem rerum. Veritatis dicta rem quaerat quia.','',0),(21,12,11,'Quia voluptate consequatur et perferendis. Sit culpa ut suscipit. Ex eos sunt est quisquam.','',0),(22,19,11,'Sint aspernatur tenetur enim sequi neque iure est. Non id rem corrupti omnis et voluptatum deleniti. Et magni odit ut est vel. Pariatur fugit officiis qui molestiae perferendis.','',0),(23,9,13,'In omnis quo animi assumenda qui nihil quia. Qui qui et quibusdam. Quas at id necessitatibus fugiat vel autem. Eius quia occaecati voluptas dolores.','',0),(24,17,13,'Debitis tempora voluptatibus totam non. Atque autem ut est recusandae magnam.','',0),(25,11,14,'Laborum nobis animi dignissimos et assumenda delectus molestiae. Est repudiandae nihil magni eligendi numquam. Illo culpa qui sunt libero impedit voluptatibus tempore. Corporis harum omnis vitae qui.','',0),(26,8,15,'Voluptatem consequatur voluptates iste sit tempore. Fugit quia consequatur dolores optio ullam consequatur. Vel quia alias commodi impedit corrupti.','',0),(27,10,16,'Quo ad animi eius ex nulla quasi corrupti. Id error eius voluptatem qui. Facilis repudiandae occaecati vel repellat sint iusto recusandae.','',0),(28,12,17,'Alias qui maxime sit aspernatur dolor ea. Soluta eos ad sapiente perferendis nam quisquam. Repudiandae magnam quidem sapiente impedit.','',0),(29,7,17,'Hic et non doloremque asperiores aperiam. Quam consequatur omnis asperiores est. Voluptatum eveniet modi omnis.','',0),(30,12,18,'Minima deleniti neque placeat excepturi non veritatis. Optio omnis magnam natus quo rerum quas omnis possimus. Et saepe vel voluptatem iusto eaque tempore tempore.','',0),(31,12,18,'Quis facilis inventore nemo. Accusantium et commodi eveniet. Culpa voluptate in ipsa. Laboriosam tempora aut itaque ut consequatur harum dolor.','',0),(32,18,19,'Et autem atque unde non voluptatem quam quos ea. Delectus qui aut et maiores sed molestiae. Vitae dolore voluptas laborum atque quasi autem. Delectus molestiae sequi in autem nulla quidem.','',0);
/*!40000 ALTER TABLE `com_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dynamics`
--

DROP TABLE IF EXISTS `dynamics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dynamics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imgpath` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` char(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `summary` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '摘要',
  `acturl` char(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '跳转链接',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dynamics`
--

LOCK TABLES `dynamics` WRITE;
/*!40000 ALTER TABLE `dynamics` DISABLE KEYS */;
INSERT INTO `dynamics` VALUES (1,'6483491fca146c2c86eaf2bcdca34457.jpeg','无线杯电子设计大赛','文章开头几句balabalabalabala','/api/article/details?id=2',NULL,NULL),(2,'906db4de5b917e76a8495d78570de00d.jpeg','无线杯电子设计大赛','文章开头几句balabalabalabala','/api/article/details?id=1',NULL,NULL),(3,'18530d45357493997827dc9237c5a3d9.jpeg','无线杯电子设计大赛','文章开头几句balabalabalabala','/api/article/details?id=3',NULL,NULL),(4,'c413bf0daec963e8ec0459181d040cfd.jpeg','无线杯电子设计大赛','文章开头几句balabalabalabala','',NULL,NULL),(5,'2c6173bbc9c9bf7eeb0eff4b4fd818e3.jpeg','无线杯电子设计大赛','文章开头几句balabalabalabala','',NULL,NULL),(6,'94393dd5f7c17354a4f66da9d2a0a563.jpeg','无线杯电子设计大赛','文章开头几句balabalabalabala','',NULL,NULL);
/*!40000 ALTER TABLE `dynamics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT 'user表外键',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '提问内容',
  `created_at` int(10) unsigned NOT NULL COMMENT '提交时间戳',
  PRIMARY KEY (`id`),
  KEY `feedback_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,5,'Vel quis quisquam et consequuntur laudantium rerum inventore est. Dolorem qui et quia pariatur quia a. Vitae inventore maiores omnis voluptas sint et atque.',0),(2,20,'Culpa similique voluptas provident. Velit omnis quasi est est. Minus qui dolor quia possimus soluta est natus.',0),(3,12,'Mollitia cupiditate nobis tempore libero. Alias et aut vero rerum quis architecto. Voluptates officia consequatur possimus. Eaque omnis ex et et magnam laborum. Adipisci nemo vero harum tenetur sint.',0),(4,1,'Velit corrupti tempora doloribus voluptatum nihil consequuntur qui. Consequatur saepe natus animi. Quia nam esse eos praesentium eos. Optio rerum necessitatibus omnis enim aut.',0),(5,19,'Quos sunt est et ut maxime vel. Facere ut porro totam animi consequatur nihil. Aspernatur hic atque quis expedita dignissimos voluptas nesciunt. Et quia distinctio voluptatem ipsam consequatur.',0),(6,6,'Eligendi nemo voluptatum doloremque et vero optio itaque. Voluptatem est ex qui. Est harum nihil sunt sint. Voluptas quam perspiciatis pariatur quia vero dolores.',0),(7,2,'Distinctio sed omnis neque omnis harum. Minima ea voluptate fugit iusto commodi. Velit rerum ducimus officia est.',0),(8,18,'Atque et officia nam rerum consequatur illum. Ut vitae voluptatem et maxime itaque aliquid. Amet nemo eum aut.',0),(9,16,'Ad reiciendis temporibus perspiciatis quasi. Mollitia qui odio et officiis quo odit beatae recusandae. Aliquid repellendus officiis dolor sit et nesciunt.',0),(10,10,'Et aut et architecto et. Vel sapiente quibusdam autem est molestiae velit voluptas. Quas ea quo sapiente porro voluptatibus. Repellendus quaerat aut ducimus repellat ipsa.',0),(11,3,'Adipisci molestiae numquam est numquam ut sit temporibus non. In facilis veritatis beatae ea maiores excepturi.',0),(12,7,'Eum sit molestiae natus qui ducimus quia quidem. Nisi laborum facere quasi necessitatibus. Dolores at quod eaque ad saepe repellat. Atque et aspernatur harum officiis perferendis iure.',0),(13,17,'Nostrum neque quia delectus magni eveniet ad et. Aut ut dolor blanditiis porro aut at voluptatem. Aut ea eos repudiandae rerum.',0),(14,9,'Architecto tempore eos ipsam assumenda pariatur ducimus. Quia tempore velit nisi at. Necessitatibus nihil molestiae quos quae. Quidem error aperiam similique ducimus fuga illum rerum sunt.',0),(15,15,'Sed voluptate quos recusandae consequatur distinctio nobis repudiandae illo. Dolor amet consequuntur dolor totam. Quae unde aut eum cumque omnis nesciunt ut.',0),(16,14,'Voluptatem laborum sed consectetur nihil est dolores ut. A nesciunt et dolor tempore.',0),(17,4,'Voluptas iusto rerum nobis aut facere inventore blanditiis. Dolore sed qui doloremque voluptatem ut ab deserunt. Et numquam fugiat labore iure esse. Ad aperiam qui architecto.',0),(18,7,'Sapiente possimus porro dolores doloribus necessitatibus aut molestiae. Voluptatum nisi aut dolorum harum a dolorem reiciendis. Et corrupti reprehenderit et dolorum ab maiores.',0),(19,11,'Possimus sequi officiis omnis enim. Numquam molestias cumque est in recusandae sed enim. Culpa tempora qui aut sequi. Neque ipsum et quis optio.',0),(20,4,'Ut dolor odio sit eos consequuntur. Soluta aut vitae vel quis blanditiis.',0),(21,17,'Et veniam occaecati quia et. Numquam reiciendis porro aut facilis dolor eos vero. Et at dignissimos ut voluptatem provident. Fugiat voluptas asperiores iusto reprehenderit modi. A enim odio et qui.',0),(22,2,'Qui maxime qui sapiente consequatur vitae quam. Minus et aperiam libero. Praesentium ut id ducimus pariatur inventore asperiores. Velit voluptatem iste ut.',0),(23,4,'Eum deserunt velit vitae et. Omnis dicta animi tempore amet dolorem. Consequatur non aperiam est suscipit in et sunt quos.',0),(24,6,'Aliquid ab sit nesciunt ad sunt asperiores quos culpa. Quibusdam perferendis doloribus sed recusandae rem. Velit ut culpa voluptatum voluptas.',0),(25,14,'Voluptate esse sed et voluptatem quam. Sit et illum accusamus ullam cupiditate sit. Laudantium quidem quidem beatae qui unde quo.',0),(26,14,'Eos facilis sed ullam corrupti sunt ipsum. Distinctio est enim tempore. Rerum dignissimos accusamus animi amet et. Ipsum reprehenderit voluptas dolores et et.',0),(27,5,'Accusantium omnis odio quo. Ipsam quia animi fugiat iste qui occaecati veritatis. Ea sunt aut ut laudantium sed. Atque veritatis et sit et. Non libero nihil expedita.',0),(28,10,'Explicabo dignissimos libero et nostrum quibusdam. Saepe amet illum voluptatem. Cupiditate quia ipsum perspiciatis excepturi explicabo. Iste facilis facere laudantium dolor modi.',0),(29,19,'Quia dolores officia reprehenderit velit. Ipsa labore sit ipsam in. Vel vitae ut quisquam. Occaecati minus dolorem rerum ratione natus accusantium sunt. Non quia voluptas ut quidem.',0),(30,16,'Minima ratione non aliquam sint impedit. Et qui ratione voluptas minus ipsam aspernatur vero. Quia ducimus iste voluptatibus quia.',0),(31,2,'Sit distinctio animi distinctio. Velit numquam assumenda necessitatibus unde ex facilis numquam ipsum. Ipsam laboriosam ea eos dicta enim voluptas dicta.',0),(32,8,'Est laudantium et reiciendis voluptatibus veniam. Ad vero magnam dolores sed. Commodi corporis aut autem. Eaque sed soluta officiis sit nihil.',0),(33,9,'Consequatur impedit hic ea esse. Aut quia aliquid corporis nemo.',0),(34,13,'Ullam eaque delectus illum dolore. Illum ipsa assumenda est tempore. Rerum aut necessitatibus et nam error. Id quo consequatur blanditiis autem omnis illum.',0),(35,19,'Fugiat est et modi repellat corporis amet. Eius et fuga id beatae sed ut eum sit. Quod excepturi nam incidunt nostrum ut quam et. Fuga totam quasi eius ab quisquam ea.',0),(36,14,'Quidem aut et iusto eaque totam. Aspernatur alias quas dolores nesciunt odio error. Ex omnis ipsum quas nam velit. Non molestiae ipsum quis occaecati placeat sit itaque.',0),(37,19,'Voluptatibus ducimus quaerat voluptas deleniti sit. Neque ut dolores vero et. Doloremque id beatae sed quia et incidunt quis occaecati. Voluptas quo aut saepe dolores.',0),(38,19,'Deserunt laudantium ab tempore. Quod et modi consectetur laboriosam aliquid. Temporibus eaque dolores deserunt suscipit excepturi autem alias. Ut cum sit voluptatem aut quisquam.',0),(39,13,'Aut hic hic dolor perferendis sed. Pariatur ipsam modi aut consequuntur hic qui quos. Necessitatibus esse quam a doloremque aut quia fugit. Omnis est accusantium aliquid vitae et perferendis quas et.',0),(40,9,'Voluptatem est ut esse ratione. Atque sint et ut laudantium dolorum at. Ea deserunt labore sit consectetur ut ut nulla.',0),(41,0,'[object Object]',1505226562),(42,0,'[object Object]',1505226641),(43,0,'[object Object]',1505226660),(44,0,'zazaza',1505227176),(45,0,'ffffffffffffffffffffffffffffff',1505227437),(46,0,'ttttttttttttttttttttttttttttttttttttttttttt',1505227501),(47,0,'fffffffffffffeefewfref',1505227519),(48,0,'2222222222222222222222222',1505229633),(49,0,'你说',1505541596),(50,0,'wwww',1505552511);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback_response`
--

DROP TABLE IF EXISTS `feedback_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback_response` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT '用户表外键',
  `question_id` int(10) unsigned NOT NULL COMMENT '提问表外键',
  `admin_id` int(10) unsigned NOT NULL COMMENT '回应的管理员',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '回答内容',
  `created_at` int(10) unsigned NOT NULL COMMENT '创建时间戳',
  PRIMARY KEY (`id`),
  KEY `feedback_response_user_id_index` (`user_id`),
  KEY `feedback_response_question_id_index` (`question_id`),
  KEY `feedback_response_admin_id_index` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_response`
--

LOCK TABLES `feedback_response` WRITE;
/*!40000 ALTER TABLE `feedback_response` DISABLE KEYS */;
INSERT INTO `feedback_response` VALUES (1,1,4,4,'Fuga eaque eius quis vero. Ad et natus nulla minus facilis et aut. Voluptas in beatae harum optio tempore voluptatem. Eum totam inventore suscipit.',0),(2,19,5,2,'Quia quod beatae ratione soluta esse distinctio laboriosam. Aut quia maiores illo quia voluptatem quasi deleniti consequatur. Veritatis et qui deserunt consectetur. Ipsa et dicta aut nam magni.',0),(3,6,6,4,'Doloribus ipsam accusantium ut neque sed. Est rerum adipisci et at beatae ea rerum et. Eligendi qui et aperiam iste assumenda.',0),(4,2,7,4,'Mollitia dolorem et quas nostrum quae inventore veritatis. Provident hic voluptas id eligendi incidunt perferendis. Voluptas qui aut eum iure. Voluptatum nam cupiditate quos ea culpa iusto.',0),(5,18,8,2,'Qui et cupiditate eum amet reiciendis. Qui ipsa consequatur incidunt dolorum voluptas et voluptas. Quis nobis sit non voluptas. Ipsa inventore sequi ut quibusdam.',0),(6,16,9,4,'Consectetur architecto fuga et dolores nisi. Nisi ab ipsam fuga enim. Eum rerum voluptates qui et.',0),(7,10,10,4,'Error alias sunt ipsa culpa in accusamus similique. Totam reprehenderit id est voluptate. Quia ut nemo vel et. Omnis sapiente quam adipisci id id corporis.',0),(8,3,11,1,'Doloribus vero error perferendis doloribus et. Et aut veritatis dolor amet sint sed eos. Ea et modi molestiae amet at. Recusandae autem repellendus iste porro.',0),(9,7,12,4,'Qui alias tempore et itaque possimus ea eos. Quam rerum enim error vero numquam sed occaecati. Alias voluptatem atque alias dolor.',0),(10,9,14,4,'Minima libero odio laboriosam et omnis deleniti sunt nihil. Amet voluptatum id voluptas ullam aut sunt veniam. Fugit aut est ut nihil rem. Ut distinctio dolor et non animi voluptate.',0),(11,15,15,3,'Non libero dolor at. Voluptatem ipsam nulla sint est corporis. Inventore hic rerum nihil asperiores incidunt.',0),(12,14,16,3,'Qui nesciunt pariatur ab ut sed ipsum non. Non laborum sint enim qui qui odit magni. Veniam quo architecto neque vero blanditiis repudiandae. Praesentium asperiores animi qui ducimus omnis sunt.',0),(13,4,17,1,'Excepturi voluptatem id ea dolores minus omnis. Dolor aut deleniti consequatur qui nihil dolor. Consequatur ut sit sapiente neque.',0),(14,7,18,3,'Quod nostrum officia unde totam id numquam sit. Est reiciendis a ea corporis quod. Velit voluptatem perferendis est suscipit nihil est.',0),(15,11,19,4,'Tempora autem atque est dolorum cumque ut est. Eveniet sit minima ipsum cupiditate doloremque nihil provident. Sed iusto nostrum id repellendus sed.',0),(16,4,20,2,'Tempore enim in hic mollitia voluptas tempora laborum. Accusamus fuga inventore id consequatur laborum et.',0),(17,17,21,3,'Tempore quia ipsum odit autem nesciunt quos voluptatem. Asperiores ut optio culpa est. Quia et sit omnis amet praesentium. Ut qui aut quo sint ut eius aut.',0),(18,2,22,2,'Quia consequatur vel velit saepe dolorem. Enim reiciendis ut sed sint ullam corporis sed ut. Beatae iure est quasi incidunt eum ea. Cum quaerat enim optio praesentium animi aut.',0),(19,4,23,4,'Nobis quas quisquam assumenda adipisci dolor unde eveniet velit. Architecto dolore similique nulla aliquam sed aliquam eos. Porro veritatis harum aut et non.',0),(20,6,24,3,'Doloribus illo sed eum ut aut illo. Voluptatem laboriosam reiciendis itaque autem laborum et.',0),(21,14,25,2,'Neque eveniet distinctio mollitia. Totam voluptatem tempora quaerat excepturi dolorum ut.',0),(22,14,26,4,'Odio sed reprehenderit et aut aliquam rerum. Sint minima aut voluptas aut sed. Et doloremque sapiente rerum quos accusamus.',0),(23,10,28,2,'Nostrum recusandae optio mollitia voluptatem sint a. Dicta quia deleniti sunt fuga fugit rerum. Et animi voluptatem aut accusamus.',0),(24,19,29,4,'Et qui illo odit rerum ea quis. Dolores incidunt possimus fuga molestias perferendis nam. Aperiam voluptatum voluptas id beatae ut.',0),(25,2,31,4,'Quis ullam eos qui maxime voluptatem. Iusto commodi nihil harum a maxime veritatis cumque. Explicabo dolores deleniti tempore error illum deleniti.',0),(26,8,32,3,'Nihil natus debitis nihil ut. Dolorem suscipit quam ut quis. Nemo quis accusantium perferendis velit consequatur atque et. Fugiat velit iusto suscipit.',0),(27,9,33,2,'Voluptate ut in laboriosam quia cum quis praesentium. Explicabo maiores eius quibusdam facere incidunt. Itaque magnam fuga inventore ipsam. Fuga voluptas eos ut nihil velit aliquid quo.',0),(28,13,34,1,'Amet quia aut nostrum voluptatem omnis. Iure et optio cumque aliquam suscipit molestiae dignissimos. Maxime molestias ut quia error. Maiores ab corrupti deleniti omnis natus.',0),(29,19,35,1,'Saepe voluptatem voluptates est sit dolores et. Qui qui iusto consequuntur minima totam consectetur illo. Quae cum sunt voluptate nihil cumque. Reprehenderit odit eos voluptatem vel.',0),(30,14,36,4,'Distinctio enim vitae consequatur. Quidem vel animi eius aut hic voluptas quod at. Maiores aut tenetur earum. Voluptatem et necessitatibus ea natus reprehenderit excepturi voluptate rerum.',0),(31,19,38,4,'Unde fugiat perferendis eum non. Dolore molestiae quia et est a eaque.',0),(32,13,39,1,'Aliquam enim quos sed vero voluptatum ducimus sapiente dolor. Dignissimos soluta laudantium illo et. Et veritatis sed quo totam ut quas qui.',0),(33,9,40,2,'Atque saepe aliquid molestiae quo suscipit. Eum possimus et et ducimus quis voluptatem. Velit quaerat cumque consequuntur et ad consequatur id. Consectetur dolorem molestias quis et alias facere et.',0),(34,0,1,0,'111111212321321sadxsadsadxzcxzc',1505220204),(35,0,2,0,'asdsadsadsaxzczxcxzc',1505220476),(36,0,30,0,'asdsadasdasdsa',1505221352),(37,0,37,0,'萨达撒旦撒都撒旦',1505221870);
/*!40000 ALTER TABLE `feedback_response` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `florilegium`
--

DROP TABLE IF EXISTS `florilegium`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `florilegium` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `abstract` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '简介',
  `imgpath` char(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` int(10) unsigned NOT NULL COMMENT '创建时间戳',
  `updated_at` int(10) unsigned NOT NULL COMMENT '更新时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `florilegium`
--

LOCK TABLES `florilegium` WRITE;
/*!40000 ALTER TABLE `florilegium` DISABLE KEYS */;
INSERT INTO `florilegium` VALUES (1,'作品集锦','十校联赛一等奖队伍作品。十校联赛一等奖队伍作品。十校联赛一等奖队伍作品。十校联赛一等奖队伍作品。十校联赛一等奖队伍作品。十校联赛一等奖队伍作品。看看字太多hi怎么样看看字太多hi怎么样看看字太多hi怎么样看看字太多hi怎么样看看字太多hi怎么样看看字太多hi怎么样看看字太多hi怎么样看看字太多hi怎','b9f01b29d6087dc34a6cbc08ebe617a9.jpeg',1496643765,2017),(2,'unde','vel','default.png',1496643765,1496643765),(3,'esse','maxime','default.png',1496643765,1496643765),(4,'necessitatibus','praesentium','default.png',1496643765,1496643765),(5,'nam','explicabo','default.png',1496643765,1496643765),(6,'qui','praesentium','default.png',1496643765,1496643765),(7,'quisquam','explicabo','default.png',1496643765,1496643765),(8,'nihil','eos','default.png',1496643765,1496643765),(9,'temporibus','aut','default.png',1496643765,1496643765),(10,'eum','alias','default.png',1496643765,1496643765),(11,'et','iure','default.png',1496643765,1496643765),(12,'officiis','qui','default.png',1496643765,1496643765),(13,'sed','explicabo','default.png',1496643765,1496643765),(14,'repellat','ratione','default.png',1496643765,1496643765),(15,'error','voluptate','default.png',1496643765,1496643765),(16,'maiores','recusandae','default.png',1496643765,1496643765),(17,'consectetur','amet','default.png',1496643765,1496643765),(18,'maiores','fugiat','default.png',1496643765,1496643765),(19,'aut','corrupti','default.png',1496643765,1496643765),(20,'vero','facere','default.png',1496643765,1496643765);
/*!40000 ALTER TABLE `florilegium` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health`
--

DROP TABLE IF EXISTS `health`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `data_time` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health`
--

LOCK TABLES `health` WRITE;
/*!40000 ALTER TABLE `health` DISABLE KEYS */;
/*!40000 ALTER TABLE `health` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned NOT NULL COMMENT 'team表外健',
  `is_leader` tinyint(1) NOT NULL COMMENT '1是队长，0不是',
  `name` char(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '队伍名',
  `phone` char(11) COLLATE utf8_unicode_ci NOT NULL COMMENT '电话号码',
  `qq` char(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'qq号',
  PRIMARY KEY (`id`),
  KEY `member_team_id_foreign` (`team_id`),
  CONSTRAINT `member_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,1,1,'Ms. Micaela Kling','+1-707-608-','culpa'),(2,1,0,'Augustus Shields','(562) 954-6','autem'),(3,1,0,'Brenna Kemmer MD','1-961-213-0','soluta'),(4,2,1,'Mr. Ryleigh Powlowsk','+1910857913','et'),(5,2,0,'Delphia Beatty III','(213) 829-3','sit'),(6,2,0,'Evelyn Blanda V','591.433.014','sequi'),(7,3,1,'Layne Jast','778-351-363','voluptatem'),(8,3,0,'Dr. Eldora Satterfie','(273) 331-0','sed'),(9,3,0,'Hailey Schmidt','1-706-531-4','excepturi'),(10,4,1,'Yasmeen Oberbrunner','(869) 664-6','velit'),(11,4,0,'Mr. Ignacio D\'Amore','487.212.076','omnis'),(12,4,0,'Macie Zboncak','+1320712024','in'),(13,5,1,'Austen Kovacek','+1336673056','tempora'),(14,5,0,'Salvador Veum','1-792-805-6','dicta'),(15,5,0,'Forest Will','557.572.723','id'),(16,6,1,'Tyrique Collins II','(583) 726-6','ut'),(17,6,0,'Athena Grant','+1-376-402-','et'),(18,6,0,'Faye Mante','1-997-253-4','sit'),(19,7,1,'Prof. Jayden Kovacek','308-421-403','sit'),(20,7,0,'Theodora Kerluke','(285) 751-1','vel'),(21,7,0,'Miss Bonnie Ullrich','1-750-893-1','et'),(22,8,1,'Shanny Hane IV','+1.475.598.','voluptate'),(23,8,0,'Miss Yasmeen Kuphal','1-445-320-1','quas'),(24,8,0,'Christy Kautzer IV','1-593-959-3','quidem'),(25,9,1,'Kristian Lind','(990) 966-3','dolores'),(26,9,0,'Prof. Wilbert Wilkin','220.848.883','eum'),(27,9,0,'Ms. Mossie Reichert','617-332-895','fuga'),(28,10,1,'Payton Barton','670.278.776','harum'),(29,10,0,'Prof. Lesly Nader DD','617-800-316','ipsa'),(30,10,0,'Jeromy Fisher','(779) 842-4','distinctio'),(31,11,1,'Tre Kunde','+1257286489','consequatur'),(32,11,0,'Jean Harber','865-875-289','voluptatem'),(33,11,0,'Berta Kihn','(317) 448-6','et'),(34,12,1,'Carlos Dach','(489) 613-6','accusantium'),(35,12,0,'Elna Swift','1-669-258-4','quod'),(36,12,0,'Milton Prosacco','+1 (719) 34','minima'),(37,13,1,'Lavinia Armstrong','+1-673-618-','enim'),(38,13,0,'Maude Rowe','+1.732.286.','odit'),(39,13,0,'Jonathan Hettinger I','+1-248-240-','esse'),(40,14,1,'Chance Ward Jr.','+1 (205) 50','qui'),(41,14,0,'Prof. Charity Ebert','(509) 787-7','ut'),(42,14,0,'Maye Bogan','770-998-285','blanditiis'),(43,15,1,'Marcelino O\'Conner','+1.358.482.','et'),(44,15,0,'Candelario Cremin','(754) 933-0','reiciendis'),(45,15,0,'Dr. Arden Boehm Jr.','(348) 821-3','quod'),(46,16,1,'Dr. Theodore Powlows','391.549.873','est'),(47,16,0,'Amya Hyatt','970.229.514','exercitatio'),(48,16,0,'Dr. Adelia Blick III','+1.847.709.','quis'),(49,17,1,'Cicero Kuphal IV','(242) 662-5','commodi'),(50,17,0,'Ms. Earnestine Dietr','1-392-465-5','eum'),(51,17,0,'Peggie Carroll','818.423.963','quaerat'),(52,18,1,'Tommie Weimann','1-447-687-3','illo'),(53,18,0,'Virgie Boyer DDS','(931) 492-1','dolorem'),(54,18,0,'Horace Mitchell','1-260-257-4','pariatur'),(55,19,1,'Myrna Von','762-501-016','quidem'),(56,19,0,'Merlin Von','+1-378-640-','facere'),(57,19,0,'Mr. Rey VonRueden','717.359.556','ea'),(58,20,1,'Miss Veronica Wolff','+1404607963','sunt'),(59,20,0,'Alverta Hilpert','970-657-445','dolorem'),(60,20,0,'Doug Frami MD','458.905.230','consequatur');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2017_02_05_054122_create_league_sign_up',1),('2017_02_17_104016_create_user',1),('2017_02_17_110455_create_qq_user',1),('2017_02_17_140311_create_activity',1),('2017_02_17_144016_create_report',1),('2017_02_17_144518_create_com_report',1),('2017_02_17_144632_create_forilegium',1),('2017_02_17_144837_create_feedback',1),('2017_02_17_144911_create_feedback_response',1),('2017_02_17_144946_create_appointment',1),('2017_02_20_024014_create_administartors',1),('2017_03_04_041051_create_health',1),('2017_03_05_072356_create_repair_trick',1),('2017_03_05_072437_create_com_repair_trick',1),('2017_03_27_130127_create_admin',1),('2017_05_19_132050_create_wxmes_table',1),('2017_05_19_162453_create_wxls_table',1),('2017_05_19_163005_create_wxdpt_table',1),('2017_05_19_172158_create_wxtec_table',1),('2017_05_23_172720_create_carousel_table',1),('2017_05_23_172743_create_dynamics_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qq_user`
--

DROP TABLE IF EXISTS `qq_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qq_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT 'user表外键',
  `open_id` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户的openid',
  `access_token` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户的口令',
  `refresh_token` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '刷新用口令',
  `user_info` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'php序列化存储用户的头像地址和qq昵称',
  PRIMARY KEY (`id`),
  KEY `qq_user_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qq_user`
--

LOCK TABLES `qq_user` WRITE;
/*!40000 ALTER TABLE `qq_user` DISABLE KEYS */;
INSERT INTO `qq_user` VALUES (1,2,'facere','debitis','repellat','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:11:\"perferendis\";s:9:\"figureurl\";s:57:\"http://nikolaus.com/voluptas-fugit-repudiandae-recusandae\";}'),(2,3,'itaque','qui','sed','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:4:\"quam\";s:9:\"figureurl\";s:68:\"http://www.oconnell.com/aliquam-eaque-et-vitae-aut-veniam-ullam.html\";}'),(3,6,'id','dolorum','a','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:4:\"quia\";s:9:\"figureurl\";s:49:\"http://www.nikolaus.com/facilis-vel-rem-sequi-aut\";}'),(4,10,'non','ratione','culpa','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:2:\"ea\";s:9:\"figureurl\";s:53:\"http://rempel.com/doloribus-aperiam-deserunt-officiis\";}'),(5,11,'sit','nam','quas','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:5:\"nihil\";s:9:\"figureurl\";s:23:\"http://www.turner.info/\";}'),(6,13,'ratione','dolore','est','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:2:\"et\";s:9:\"figureurl\";s:70:\"http://legros.org/quas-magnam-ipsam-laborum-distinctio-ducimus-quaerat\";}'),(7,17,'possimus','voluptate','dicta','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:3:\"cum\";s:9:\"figureurl\";s:52:\"http://kilback.com/porro-beatae-optio-laboriosam-aut\";}'),(8,18,'provident','ut','aut','O:8:\"stdClass\":2:{s:9:\"nick_name\";s:4:\"quis\";s:9:\"figureurl\";s:75:\"https://www.monahan.info/ea-omnis-eveniet-molestias-ut-quia-impedit-dolores\";}');
/*!40000 ALTER TABLE `qq_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_trick`
--

DROP TABLE IF EXISTS `repair_trick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_trick` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `abstract` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '简介',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_trick`
--

LOCK TABLES `repair_trick` WRITE;
/*!40000 ALTER TABLE `repair_trick` DISABLE KEYS */;
INSERT INTO `repair_trick` VALUES (1,'eveniet','sequi',1496643765,1496643765),(2,'quo','animi',1496643765,1496643765),(3,'fuga','aut',1496643765,1496643765),(4,'repudiandae','quas',1496643765,1496643765),(5,'quo','accusamus',1496643765,1496643765),(6,'id','quod',1496643765,1496643765),(7,'quaerat','et',1496643765,1496643765),(8,'praesentium','itaque',1496643765,1496643765),(9,'est','fugit',1496643765,1496643765),(10,'dolores','soluta',1496643765,1496643765),(11,'modi','rerum',1496643765,1496643765),(12,'eos','quis',1496643765,1496643765),(13,'voluptatem','quos',1496643765,1496643765),(14,'quis','fugit',1496643765,1496643765),(15,'occaecati','illum',1496643765,1496643765),(16,'ut','qui',1496643765,1496643765),(17,'impedit','vitae',1496643765,1496643765),(18,'labore','rerum',1496643765,1496643765),(19,'neque','quis',1496643765,1496643765),(20,'quia','tempore',1496643765,1496643765);
/*!40000 ALTER TABLE `repair_trick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `abstract` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '简介',
  `imgpath` char(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` int(10) unsigned NOT NULL COMMENT '创建时间戳',
  `updated_at` int(10) unsigned NOT NULL COMMENT '更新时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
INSERT INTO `report` VALUES (1,'北三某学霸称学英语全靠蹲厕所','据小白爆料，北三学霸王某，自爆英语高分秘籍全靠蹲厕所。','20f63384023cd6ee21ada7e09521e09e.png',1,1496643764,2017),(2,'文章二标题','文章二摘要','c62dd5f5b4ff452f22d356f6cb2464a7.jpeg',1,1496643764,2017),(4,'id','quasi','default.png',1,1496643764,2017),(5,'error','corporis','default.png',0,1496643764,1496643764),(6,'iste','reprehenderit','default.png',0,1496643764,1496643764),(7,'sunt','incidunt','default.png',0,1496643764,1496643764),(8,'ipsum','et','default.png',0,1496643764,1496643764),(9,'quam','tempora','default.png',0,1496643764,1496643764),(10,'est','eveniet','default.png',0,1496643764,1496643764),(11,'quidem','sit','default.png',0,1496643764,1496643764),(12,'non','ullam','default.png',0,1496643764,1496643764),(13,'mollitia','quasi','default.png',0,1496643764,1496643764),(14,'voluptatem','delectus','default.png',0,1496643764,1496643764),(15,'quae','voluptatem','default.png',0,1496643764,1496643764),(16,'esse','non','default.png',0,1496643764,1496643764),(17,'aliquid','at','default.png',0,1496643764,1496643764),(18,'nemo','est','default.png',0,1496643764,1496643764),(19,'in','blanditiis','default.png',0,1496643764,1496643764),(20,'harum','ut','default.png',0,1496643764,1496643764);
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` char(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '队伍名',
  `slogen` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '口号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'totam','itaque'),(2,'provident','minima'),(3,'nobis','maiores'),(4,'non','debitis'),(5,'suscipit','aliquid'),(6,'sit','inventore'),(7,'maxime','tempore'),(8,'inventore','unde'),(9,'dolores','maxime'),(10,'saepe','eius'),(11,'id','ad'),(12,'rerum','omnis'),(13,'numquam','rerum'),(14,'dicta','provident'),(15,'commodi','minus'),(16,'minima','vel'),(17,'aut','excepturi'),(18,'quis','impedit'),(19,'ad','quod'),(20,'dolores','voluptate');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名，暂时不用',
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户密码，暂时不用',
  `nickname` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户自定义昵称，暂时不用',
  `regis_time` int(10) unsigned NOT NULL COMMENT '用户注册时间戳',
  `login_time` int(10) unsigned NOT NULL COMMENT '用户最后一次登陆时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'jaden36','$2y$10$RBWrSrPNhUTZSWff1Hwr4eUiI','molestiae',2013,2011),(2,'chandler.bogan','$2y$10$6NdxmtyEDk.1AEh/flQl3.Ab5','sed',1999,2013),(3,'oral81','$2y$10$gm9yK1LJB7H7n04AikSFy.Kpk','velit',2014,1995),(4,'keaton.kuvalis','$2y$10$LnbOCWBTcDUfrRYytIM2E.vfO','illo',1991,1995),(5,'dortha.hermann','$2y$10$Lti2Xw8ziEMic79HEVcqFOepJ','qui',1992,2011),(6,'qwilkinson','$2y$10$fjf2XV7YqekWl5BqCiWMLueYE','dolorem',1987,2000),(7,'brock.gottlieb','$2y$10$vOF8rRaEkWYXfRV/fnWZ2ufuu','a',1992,1993),(8,'jessyca.thompson','$2y$10$Y/TT/dq1QlPH4zEsSyo.HOc9J','illum',2014,1989),(9,'bailey.ortiz','$2y$10$DRDGXKu.iv7SUXLN2tUJpO6JD','quos',1999,1989),(10,'delfina.satterfield','$2y$10$CaKOAMz5QupcbrHXO5BV8.Zwr','expedita',2002,2014),(11,'tromp.sister','$2y$10$lY/24KFFhW0uuj2qCG2XFOUrW','laudantium',1989,2012),(12,'xnolan','$2y$10$anSHmbY1NuXqDZVAo3JCW.p0S','est',1989,1996),(13,'gpadberg','$2y$10$2zadmnurAjxflcuHVHQ0y.Mfy','nulla',2013,2015),(14,'elta.casper','$2y$10$JgrM6hqCnNRbpY0uVYjsRehlI','delectus',2014,2008),(15,'duane.christiansen','$2y$10$qALkeyFIoT5ET6OXXx5ELuZt9','veniam',2001,2005),(16,'yost.myrtis','$2y$10$/V7UBwsTyuTiT74bv611ku.EY','sed',2014,1994),(17,'vjacobi','$2y$10$f4mN/wleF8NH5wxqEDzpCupTL','et',1995,1993),(18,'gbatz','$2y$10$cls9Fm1gJPONWt1Dv3I4Y.F.5','ipsam',1995,1990),(19,'hbogisich','$2y$10$mSt1PVV6ZIy/7eOxYP4ZNOHJU','iste',2009,2007),(20,'velda62','$2y$10$d4IMQKnIcJEtHGmKBX83O.hes','praesentium',2015,2016);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wxdpt`
--

DROP TABLE IF EXISTS `wxdpt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wxdpt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dpt` char(5) COLLATE utf8_unicode_ci NOT NULL COMMENT '部门名称',
  `intro` text COLLATE utf8_unicode_ci NOT NULL COMMENT '部门介绍',
  `imgpathf` char(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片1',
  `imgpaths` char(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片2',
  `imgpatht` char(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wxdpt`
--

LOCK TABLES `wxdpt` WRITE;
/*!40000 ALTER TABLE `wxdpt` DISABLE KEYS */;
INSERT INTO `wxdpt` VALUES (2,'维修部','维修部，顾名思义，以义务维修为特色。部门成立以来，义修活动已经从校园走到社区，为师生以及居民修理了上千件的电器，赢得了他们的一致好评。“手持烙铁，修遍华园”已经成为了部门的宗旨。作为无协的技术性部门之一，除了义修，维修部还负责电子设计的技术培训以及比赛的筹办。此外，维修部还是一个技术学习交流的平台，为省赛和国赛培养了一批优秀的硬件电子人才。无协维修部，更像是一个温馨，有爱，和谐的大家庭。','bf5c7bdc701afe236de5b7b8938f54bd.jpeg','facbbd0c5b1baa8e50f674209b40d8a6.jpeg','760bab2a6944d68644cc106809ea2546.jpeg',NULL,NULL),(3,'信息部','作为无协的技术部门之一，信息部的主要方向为网络编程，主要职能就是制作与维护无协的官网、参与管理无协公众号的后台、还有为各种跟无协有关的比赛写线上报名页面。信息部迎着无协软硬结合的趋势，驾驭着互联网时代的疾风。在这里，我们轻点鼠标，用代码操控网页背后的浪潮；敲击键盘，我们用代码给大家带来微笑。','d7b96e016bc4e024d9f43ce96624d8fd.jpeg','db434ad361d772607b781e604e359c44.jpeg','398f35b87c1f3db95fcac77044e85ea8.png',NULL,NULL),(4,'组织部','组织部作为无线电协会的大管家、连接外部的窗口、以及各个部门之间合作交流的纽带，主要负责活动策划，人员安排，活动场地、时间的申请和物资的保管等工作。本部门不仅需要随时准备好各种应急方案以解决一些紧急突发情况，同时也需要协助其他部门开展一系列特色活动。我们始终致力于把一切事务安排得井井有条，以便使协会得到更好地发展。','8875cf3f1e575cab6965867d485b5403.jpeg','07ecd46c291317ad73d63e722cde7e64.jpeg','7e4fc780dfaf18e2c389b01863c8fc86.jpeg',NULL,NULL),(6,'微信团队','微信团队，无协最年轻而富有创造力的部门。无协的微信公众号是我们的舞台。日常的推送中，协会动态与技术科普自不必说，更有学界大咖史话，科技前沿资讯，科幻迷之脑洞，不一而足。协会线上各大活动亦由我们牵头。不仅如此，公众号后台各种功能的开发以及官网的管理，我们也参与其中。微团的人们，既能提笔写文章，又能信手敲代码。作为互联网时代的弄潮儿，我们，在路上。','898b1990e0fe155f860ec3da08fa6a3f.jpeg','ab8e8c2d5d97ef144c0a251dbb8152e6.jpeg','',NULL,NULL),(7,'宣传部','无协宣传，宣传无协。宣传部是协会里特立独行的小清新，为理工添上一点文艺范儿。这里永远欢迎最有创意的idea和最善于审美的眼睛。时而讲谈视频特效，时而操刀平面设计。作为无协对外的窗口，我们对内协助协会活动开展，对外展示无协的形象。主要负责制作一系列宣传品，精美的海报传单，简洁大方的 PPT，酷炫燃爆的视频......我们设计，我们宣传；我们是无协宣传部，我们为无协裁剪外装。','3569ac374cf3a4cdf2ec56144a7cbe33.jpeg','f6a91c20ecb0e45b48382c319eaeabb6.jpeg','5f73a2b63f9f1681bc7a379db0d8f704.jpeg',NULL,NULL),(8,'外联部','外联部可能是无线电爱好者里最不无线电的一个部门，因为外联负责的主要是主持活动，争取活约动赞助，协助组织活动的工作。外联部是一个热血激情文艺奔放少男少女聚集的地方，一个充满爱与和平与幸福与安康的地方。外联可以是一种归属，在这里可以获得工作的经验，更重要的是，外联给了我们一个转角，让我们在命运的路口产生交集，给了每一个部员闪耀自己的机会。\r\n','e7db76f2916070d756113ba0754ece43.jpeg','716df15578937adbec0e2461eae10896.jpeg','f2decd5858b6cb865096be368a4ba589.jpeg',NULL,NULL),(9,'技术部','作为无协的技术部门之一，技术部专注于技术的学习和传播，为喜欢电设的同学提供资源和技术指导。一方面，技术部协助其他部门共同举办广州市校园邀请赛，“ 无线杯 ” 等电设比赛，负责制定赛题，验收评选；另一方面，技术部联合维修部共同负责无协的招牌 —— 会员培训，承担着传播技术知识，提高会员技术水平的重任，每年向无协的技术核心 —— 技术小组，输送一大批高质量的技术人才，在国家级，省级电子设计大赛中取得累累硕果，可谓是大神的聚集地。','f3873ee366b5c1c9e101db14dd6aa2e6.jpeg','d172a79503fd673c539f52a0c3c66429.jpeg','73247003e9ff36f7bef954604124a418.jpeg',NULL,NULL);
/*!40000 ALTER TABLE `wxdpt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wxls`
--

DROP TABLE IF EXISTS `wxls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wxls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` char(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '职位',
  `name` char(5) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `wish` text COLLATE utf8_unicode_ci NOT NULL COMMENT '协会寄语',
  `imgpath` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片位置',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wxls`
--

LOCK TABLES `wxls` WRITE;
/*!40000 ALTER TABLE `wxls` DISABLE KEYS */;
INSERT INTO `wxls` VALUES (5,'会长','田赢洲','全名王者荣耀。全名王者荣耀。全名王者荣耀。全名王者荣耀。全名王者荣耀。全名王者荣耀。全名王者荣耀。全名王者荣耀。','b77b653d8086a28d66beb5089811021d.jpeg',NULL,NULL),(6,'技术总监','黄俊贤','xxooxxooxxooxxooxxooxxoo','eb25bb34e8d02e06a5b00cc658dd38e8.png',NULL,NULL),(7,'技术总监','刘俊杰','xxooxxooxxooxxooxxooxxoo','2a974e1f59e7d3d868e77cf7aa71e831.png',NULL,NULL),(8,'信息总监','王忆麟','xxooxxooxxooxxooxxooxxoo','b2ae82efd19b6ebb48520a96365d1e0c.png',NULL,NULL),(9,'副会长','方美铃','xxxxxxxxxxxxxxxxxxxxxxxxx','b87ef12a6cfb24b60e285a5dc1d8fd30.png',NULL,NULL),(10,'副会长','林伟亮','xxxxxxxxxxxxxxxxxxxxxxxxxxx','5540b8b5ccfa1801d7e1b5de1e2773db.png',NULL,NULL),(11,'副会长','林延域','xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx','810c05223162d54f52c9e9539af11487.png',NULL,NULL),(12,'财务总监','张河锁','xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx','de8435da2a9b94692691aa50409dacff.png',NULL,NULL),(13,'微信团队正队长','钟鸿睿','','',NULL,NULL),(14,'微信团队副队长','惠笑非','','',NULL,NULL),(15,'微信团队副队长','吕庆霖','','',NULL,NULL),(16,'微信团队副队长','黄楷训','','',NULL,NULL),(17,'维修部正部长','杨琪钧','','',NULL,NULL),(18,'维修部副部长','林子博','','',NULL,NULL),(19,'维修部副部长','毛婉焜','','',NULL,NULL),(20,'维修部副部长','何铮','','',NULL,NULL),(21,'组织部正部长','曾雅艺','','',NULL,NULL),(22,'组织部副部长','戚芷昊','','',NULL,NULL),(23,'组织部副部长','王煜琛','','',NULL,NULL),(24,'组织部副部长','屈贤','','',NULL,NULL),(25,'外联部正部长','张博扬','','',NULL,NULL),(26,'外联部副部长','刘欣然','','',NULL,NULL),(27,'外联部副部长','董泽坤','','',NULL,NULL),(28,'宣传部正部长','钟淑莹','','',NULL,NULL),(29,'宣传部副部长','方佳钦','','',NULL,NULL),(30,'宣传部副部长','王商羽','','',NULL,NULL),(31,'技术部正部长','吴子正','','',NULL,NULL),(32,'技术部副部长','文耀立','','',NULL,NULL),(33,'技术部副部长','陈思瀚','','',NULL,NULL),(34,'技术部副部长','阳欣怡','','',NULL,NULL),(35,'信息部正部长','魏承东','','',NULL,NULL),(36,'信息部副部长','胡修齐','','',NULL,NULL),(37,'信息部副部长','刘以恒','','',NULL,NULL),(38,'信息部副部长','张书赫','','',NULL,NULL);
/*!40000 ALTER TABLE `wxls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wxmes`
--

DROP TABLE IF EXISTS `wxmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wxmes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intro` text COLLATE utf8_unicode_ci NOT NULL COMMENT '协会简介',
  `introimgpath` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '协会简介图片',
  `activity` text COLLATE utf8_unicode_ci NOT NULL COMMENT '品牌活动',
  `actimgpathf` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动图片1',
  `actimgpaths` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动图片2',
  `update_time` int(11) NOT NULL COMMENT '更改记录的时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wxmes`
--

LOCK TABLES `wxmes` WRITE;
/*!40000 ALTER TABLE `wxmes` DISABLE KEYS */;
INSERT INTO `wxmes` VALUES (1,' 我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......','4ea1b36d7fb43fdf467314ea6b105774.png','我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......我是内容我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......我是内容我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......\r\n我是内容我是内容我是内容，我是内容我是内容我是内容我是。内容我是内容我是内，容我是内容我是内容我是内容我。我是内容我是内容我是内容我是内容我是内容，我是内容我是内容我是内容。我是内容我是内容我是内容我是......我是内容','19091bb39be68e78d4f2b4e377d1ebbf.png','be42165dbca7b2f085cbfa0132fef711.png',1504344216);
/*!40000 ALTER TABLE `wxmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wxtec`
--

DROP TABLE IF EXISTS `wxtec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wxtec` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` char(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '小组名称',
  `intro` text COLLATE utf8_unicode_ci NOT NULL COMMENT '小组介绍',
  `imgpathf` char(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片1',
  `imgpaths` char(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片2',
  `imgpatht` char(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图片3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wxtec`
--

LOCK TABLES `wxtec` WRITE;
/*!40000 ALTER TABLE `wxtec` DISABLE KEYS */;
INSERT INTO `wxtec` VALUES (1,'硬件小组','硬件小组是一个充分利用无协的资源和学院的支持，专注于硬件技术的学习与研究的团队，成员从每年的大二会员中选拔产生，旨在带动学院硬件氛围，提高会员动手能力，培养硬件方面的优秀技术人才。\r\n硬件小组以北三无协实验室为大本营，每年都会开展硬件技术相关的培训，同时会有关于硬件电路和嵌入式芯片的项目，也会针对全国/广东省大学生电子设计大赛作准备。历年来，硬件小组培养了一批批硬件技术高手，在电子设计竞赛中都取得了优异的成绩。\r\n','8eb501c69ada34de0b22ce8695ae8ba2.jpeg','74ef19c5dfbf267613bdac380d50ace7.jpeg','6f797977426c75fec700e30594d9c8da.jpeg',NULL,NULL),(2,'软件小组','软件小组作为无协的技术骨干，拥有很强的软件方面技术实力。软件小组目前分为前端后端服务器与机器学习等方向。我们热衷与技术分享，在将所知所学以博客保存下来，分享自己的想法。我们专心技术探索，官网的建设，离不开我们的键盘。我们是软件小组，一个技术交流、分享与学习的舞台。','37f59dff831acf154b3cc20b93dd9286.png','1a17be0ea1a0c7d337cc3eb54038f4d5.png','c4747507c86141da624bd18f080585b0.png',NULL,NULL);
/*!40000 ALTER TABLE `wxtec` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-27 21:03:56
