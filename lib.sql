-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: lib
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `action`
--

DROP TABLE IF EXISTS `action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_chinese_name` varchar(30) NOT NULL,
  `action_controller` varchar(30) DEFAULT NULL,
  `action_a` varchar(30) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action`
--

LOCK TABLES `action` WRITE;
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
INSERT INTO `action` VALUES (1,'书籍清单','book_manage','books_info',14),(2,'添加书籍','book_manage','add_books',14),(6,'添加书籍类别','book_type','add_type',13),(8,'书籍类别清单','book_type','type_index',13),(11,'基本操作',NULL,NULL,0),(12,'欢迎界面','main','welcome',11),(13,'类别管理','book_type','index',0),(14,'书籍管理','book_manage','index',0),(15,'管理员管理',NULL,NULL,0),(16,'添加管理员','admin_manage','adminAdd',15),(17,'管理员列表','admin_manage','adminList',15);
/*!40000 ALTER TABLE `action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login_time` int(11) NOT NULL DEFAULT '0',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (5,'admin2','adsadsa','21232f297a57a5a743894a0e4a801fc3',1369447874,'127.0.0.1'),(1,'admin','huyiming','b5de7e1c0ae93cdec02e164faef69b97',1485444074,'::1'),(10,'admin3','bababa','b5de7e1c0ae93cdec02e164faef69b97',1536809895,'::1');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `book_info`
--

DROP TABLE IF EXISTS `book_info`;
/*!50001 DROP VIEW IF EXISTS `book_info`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `book_info` (
  `info_book_id` tinyint NOT NULL,
  `info_book_owner_name` tinyint NOT NULL,
  `info_book_owner_phone` tinyint NOT NULL,
  `info_book_owner_addr` tinyint NOT NULL,
  `info_book_name` tinyint NOT NULL,
  `info_book_type` tinyint NOT NULL,
  `info_book_autor` tinyint NOT NULL,
  `info_book_price` tinyint NOT NULL,
  `info_book_ISBN` tinyint NOT NULL,
  `info_book_page` tinyint NOT NULL,
  `info_book_publish` tinyint NOT NULL,
  `info_book_detail` tinyint NOT NULL,
  `info_book_add_time` tinyint NOT NULL,
  `book_type_name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `book_type`
--

DROP TABLE IF EXISTS `book_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_type` (
  `book_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_type_name` varchar(50) NOT NULL,
  `book_type_parent` int(11) NOT NULL,
  PRIMARY KEY (`book_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_type`
--

LOCK TABLES `book_type` WRITE;
/*!40000 ALTER TABLE `book_type` DISABLE KEYS */;
INSERT INTO `book_type` VALUES (1,'计算机/网络',0),(2,'计算机理论',1),(5,'网络',0),(6,'算法',1);
/*!40000 ALTER TABLE `book_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_book`
--

DROP TABLE IF EXISTS `info_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_book` (
  `info_book_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_book_owner_name` varchar(20) NOT NULL,
  `info_book_owner_phone` varchar(11) NOT NULL,
  `info_book_owner_addr` varchar(255) NOT NULL,
  `info_book_name` varchar(50) NOT NULL,
  `info_book_type` int(11) NOT NULL,
  `info_book_autor` varchar(100) NOT NULL,
  `info_book_price` int(8) NOT NULL,
  `info_book_ISBN` varchar(22) NOT NULL,
  `info_book_page` int(5) NOT NULL,
  `info_book_publish` varchar(50) NOT NULL,
  `info_book_detail` text,
  `info_book_add_time` int(11) NOT NULL,
  PRIMARY KEY (`info_book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_book`
--

LOCK TABLES `info_book` WRITE;
/*!40000 ALTER TABLE `info_book` DISABLE KEYS */;
INSERT INTO `info_book` VALUES (21,'测试卖家','13322222222','测试卖家地址dsadasdasdsadas','算法导论',2,'Thomas H.Cormen、Charles E.Leiserson、Ronald L.Rivest、Clifford Stein',50,'9787111187776',55,'机械工业出版社','					\r\n				',1336282196),(22,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(23,'测试卖家','13322222222','测试卖家地址','ddd',1,'ddd',32,'dsadsa',31,'dsad','',1353429443),(24,'测试卖家','13322222222','测试卖家地址','ffff',1,'ffff',23,'231',231,'dafas','',1353429457),(25,'测试卖家','13322222222','测试卖家地址','ddd',1,'ffff',213,'312321',3213,'3213','',1353429504),(26,'测试卖家','13322222222','测试卖家地址','321',1,'321321',3123,'312312',32131,'31231','',1353429511),(27,'测试卖家','13322222222','测试卖家地址','3231',1,'333333',44444,'555555',66666,'777777','',1353429871),(28,'测试卖家','13322222222','测试卖家地址','32231',1,'3213213',321321434,'543543',643645,'45435','',1353432163),(29,'测试卖家','13322222222','测试卖家地址','543543',1,'654654',6547544,'534534',54353,'42342','',1353432170),(30,'测试卖家','13322222222','测试卖家地址','423423',1,'543543',53454,'423432',42342,'543543','',1353432176),(31,'测试卖家','13322222222','测试卖家地址','423423',1,'423423',423423,'45435435',534534,'4534534','',1353432182),(32,'测试卖家','13322222222','测试卖家地址','543543',1,'4534',54353453,'5654656546',5645645,'565464','',1353432187),(33,'测试卖家','13322222222','测试卖家地址','312312',1,'423423',23423423,'423423',423423,'4234234','',1353432193),(34,'测试卖家','13322222222','测试卖家地址','dsa',1,'dsa',0,'das',0,'das','',1369033090),(35,'和呵呵','13633333333','我在重邮','测试1',1,'我自己',18,'ISBN是个啥',789,'自己打印的','',1369034180),(36,'das','3213','321321','dsa',1,'321',12,'3213213',32,'31232131','dsadsa',1369038483),(37,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(38,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(39,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(40,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(41,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(42,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(43,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(44,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(45,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(46,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(47,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(48,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(49,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(50,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(51,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(52,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(53,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(54,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(55,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(56,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(57,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(58,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(59,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(60,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(61,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(62,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(63,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(64,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(65,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(66,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(67,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(68,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(69,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(70,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(71,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(72,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(73,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(74,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(75,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(76,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(77,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(78,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(79,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(80,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(81,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(82,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(83,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(84,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(85,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(86,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(87,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(88,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(89,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(90,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(91,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(92,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(93,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(94,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(95,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(96,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(97,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(98,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(99,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(100,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(101,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(102,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(103,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(104,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(105,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(106,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(107,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(108,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(109,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(110,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(111,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(112,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(113,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(114,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(115,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(116,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(117,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(118,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(119,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(120,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(121,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(122,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(123,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(124,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(125,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(126,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(127,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(128,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(129,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(130,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(131,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(132,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(133,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(134,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(135,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(136,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427);
/*!40000 ALTER TABLE `info_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_book1`
--

DROP TABLE IF EXISTS `info_book1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_book1` (
  `info_book_id` int(11) NOT NULL DEFAULT '0',
  `info_book_owner_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `info_book_owner_phone` varchar(11) CHARACTER SET utf8 NOT NULL,
  `info_book_owner_addr` varchar(255) CHARACTER SET utf8 NOT NULL,
  `info_book_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `info_book_type` int(11) NOT NULL,
  `info_book_autor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `info_book_price` int(8) NOT NULL,
  `info_book_ISBN` varchar(22) CHARACTER SET utf8 NOT NULL,
  `info_book_page` int(5) NOT NULL,
  `info_book_publish` varchar(50) CHARACTER SET utf8 NOT NULL,
  `info_book_detail` text CHARACTER SET utf8,
  `info_book_add_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_book1`
--

LOCK TABLES `info_book1` WRITE;
/*!40000 ALTER TABLE `info_book1` DISABLE KEYS */;
INSERT INTO `info_book1` VALUES (21,'测试卖家','13322222222','测试卖家地址dsadasdasdsadas','算法导论',2,'Thomas H.Cormen、Charles E.Leiserson、Ronald L.Rivest、Clifford Stein',50,'9787111187776',55,'机械工业出版社','					\r\n				',1336282196),(22,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(23,'测试卖家','13322222222','测试卖家地址','ddd',1,'ddd',32,'dsadsa',31,'dsad','',1353429443),(24,'测试卖家','13322222222','测试卖家地址','ffff',1,'ffff',23,'231',231,'dafas','',1353429457),(25,'测试卖家','13322222222','测试卖家地址','ddd',1,'ffff',213,'312321',3213,'3213','',1353429504),(26,'测试卖家','13322222222','测试卖家地址','321',1,'321321',3123,'312312',32131,'31231','',1353429511),(27,'测试卖家','13322222222','测试卖家地址','3231',1,'333333',44444,'555555',66666,'777777','',1353429871),(28,'测试卖家','13322222222','测试卖家地址','32231',1,'3213213',321321434,'543543',643645,'45435','',1353432163),(29,'测试卖家','13322222222','测试卖家地址','543543',1,'654654',6547544,'534534',54353,'42342','',1353432170),(30,'测试卖家','13322222222','测试卖家地址','423423',1,'543543',53454,'423432',42342,'543543','',1353432176),(31,'测试卖家','13322222222','测试卖家地址','423423',1,'423423',423423,'45435435',534534,'4534534','',1353432182),(32,'测试卖家','13322222222','测试卖家地址','543543',1,'4534',54353453,'5654656546',5645645,'565464','',1353432187),(33,'测试卖家','13322222222','测试卖家地址','312312',1,'423423',23423423,'423423',423423,'4234234','',1353432193),(34,'测试卖家','13322222222','测试卖家地址','dsa',1,'dsa',0,'das',0,'das','',1369033090),(35,'和呵呵','13633333333','我在重邮','测试1',1,'我自己',18,'ISBN是个啥',789,'自己打印的','',1369034180),(36,'das','3213','321321','dsa',1,'321',12,'3213213',32,'31232131','dsadsa',1369038483),(37,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(38,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(39,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(40,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(41,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(42,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(43,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(44,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(45,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(46,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(47,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(48,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(49,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(50,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(51,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(52,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(53,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(54,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(55,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(56,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(57,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(58,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(59,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(60,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(61,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(62,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(63,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(64,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(65,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(66,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(67,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(68,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(69,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(70,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(71,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(72,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(73,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(74,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(75,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(76,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(77,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(78,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(79,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(80,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(81,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(82,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(83,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(84,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(85,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(86,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(87,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(88,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(89,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(90,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(91,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(92,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(93,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(94,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(95,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(96,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(97,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(98,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(99,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(100,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(101,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(102,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(103,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(104,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(105,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(106,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(107,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(108,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(109,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(110,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(111,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(112,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(113,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(114,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(115,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(116,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(117,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(118,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(119,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(120,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(121,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(122,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(123,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(124,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(125,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(126,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(127,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(128,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(129,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(130,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(131,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(132,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(133,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(134,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(135,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427),(136,'测试卖家','13322222222','测试卖家地址','das',1,'dasda',10,'dsad',324,'dsda','',1353429427);
/*!40000 ALTER TABLE `info_book1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rslog_radius_result`
--

DROP TABLE IF EXISTS `tbl_rslog_radius_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rslog_radius_result` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `date` date NOT NULL DEFAULT '1970-01-01',
  `count` bigint(20) NOT NULL DEFAULT '0',
  `pc` int(11) NOT NULL DEFAULT '0',
  `andmb` int(11) NOT NULL DEFAULT '0',
  `apple` int(11) NOT NULL DEFAULT '0',
  `ex1` int(11) NOT NULL DEFAULT '0',
  `ex2` int(11) NOT NULL DEFAULT '0',
  `ex3` int(11) NOT NULL DEFAULT '0',
  `ex4` int(11) NOT NULL DEFAULT '0',
  `ex5` int(11) NOT NULL DEFAULT '0',
  `result` varchar(255) DEFAULT NULL,
  `mobile` int(11) NOT NULL DEFAULT '0',
  `alltotal` int(11) NOT NULL DEFAULT '0',
  `width` varchar(128) DEFAULT NULL,
  `inbit` bigint(20) DEFAULT NULL,
  `outbit` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`date`),
  KEY `name` (`name`),
  KEY `date` (`date`),
  KEY `alltotal` (`alltotal`),
  KEY `width` (`width`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rslog_radius_result`
--

LOCK TABLES `tbl_rslog_radius_result` WRITE;
/*!40000 ALTER TABLE `tbl_rslog_radius_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_rslog_radius_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rslog_radius_result_new`
--

DROP TABLE IF EXISTS `tbl_rslog_radius_result_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rslog_radius_result_new` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `date` date NOT NULL DEFAULT '1970-01-01',
  `count` bigint(20) NOT NULL DEFAULT '0',
  `pc` int(11) NOT NULL DEFAULT '0',
  `andmb` int(11) NOT NULL DEFAULT '0',
  `apple` int(11) NOT NULL DEFAULT '0',
  `ex1` int(11) NOT NULL DEFAULT '0',
  `ex2` int(11) NOT NULL DEFAULT '0',
  `ex3` int(11) NOT NULL DEFAULT '0',
  `ex4` int(11) NOT NULL DEFAULT '0',
  `ex5` int(11) NOT NULL DEFAULT '0',
  `result` varchar(255) DEFAULT NULL,
  `mobile` int(11) NOT NULL DEFAULT '0',
  `alltotal` int(11) NOT NULL DEFAULT '0',
  `width` varchar(128) DEFAULT NULL,
  `inbit` bigint(20) DEFAULT NULL,
  `outbit` bigint(20) DEFAULT NULL,
  `nametype` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`date`),
  KEY `name` (`name`),
  KEY `date` (`date`),
  KEY `alltotal` (`alltotal`),
  KEY `width` (`width`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rslog_radius_result_new`
--

LOCK TABLES `tbl_rslog_radius_result_new` WRITE;
/*!40000 ALTER TABLE `tbl_rslog_radius_result_new` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_rslog_radius_result_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `book_info`
--

/*!50001 DROP TABLE IF EXISTS `book_info`*/;
/*!50001 DROP VIEW IF EXISTS `book_info`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`::1` SQL SECURITY DEFINER */
/*!50001 VIEW `book_info` AS select `info_book`.`info_book_id` AS `info_book_id`,`info_book`.`info_book_owner_name` AS `info_book_owner_name`,`info_book`.`info_book_owner_phone` AS `info_book_owner_phone`,`info_book`.`info_book_owner_addr` AS `info_book_owner_addr`,`info_book`.`info_book_name` AS `info_book_name`,`info_book`.`info_book_type` AS `info_book_type`,`info_book`.`info_book_autor` AS `info_book_autor`,`info_book`.`info_book_price` AS `info_book_price`,`info_book`.`info_book_ISBN` AS `info_book_ISBN`,`info_book`.`info_book_page` AS `info_book_page`,`info_book`.`info_book_publish` AS `info_book_publish`,`info_book`.`info_book_detail` AS `info_book_detail`,`info_book`.`info_book_add_time` AS `info_book_add_time`,`book_type`.`book_type_name` AS `book_type_name` from (`book_type` join `info_book` on((`info_book`.`info_book_type` = `book_type`.`book_type_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-14 11:31:16
