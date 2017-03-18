-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: db_ta
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `admin_master`
--

DROP TABLE IF EXISTS `admin_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_master` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `id_rfid` bigint(100) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `level` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_master`
--

LOCK TABLES `admin_master` WRITE;
/*!40000 ALTER TABLE `admin_master` DISABLE KEYS */;
INSERT INTO `admin_master` VALUES (1,12418019284,'usman','c297b40a07794397d5fc1009e2897632704bcfd7a720748727fb5e96467dcd53','super');
/*!40000 ALTER TABLE `admin_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_master`
--

DROP TABLE IF EXISTS `book_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_master` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rfid` bigint(255) DEFAULT NULL,
  `book_title` varchar(256) DEFAULT NULL,
  `author` varchar(256) DEFAULT NULL,
  `editor` varchar(32) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` text,
  `isbn` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `input_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `id_publisher` int(11) DEFAULT NULL,
  `publisher` varchar(220) DEFAULT NULL,
  `book_status` varchar(256) DEFAULT NULL,
  `rack` varchar(256) DEFAULT NULL,
  `book_location` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `id_book` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_master`
--

LOCK TABLES `book_master` WRITE;
/*!40000 ALTER TABLE `book_master` DISABLE KEYS */;
INSERT INTO `book_master` VALUES (10,160245194128,'Hadiah Pernikahan Terindah','Ibnu Watiniyah $ Ummu Ali','Bunda Ina',2015,'Buku Tentang Meraih Pernikahn yang Indah','','700','2017-02-17',100000,NULL,0,0,'Kaysa Media','1','rack-01','rack-02'),(11,16024519412823,'Alles Liebe bertahan dn berjuang untuk mu','Farrahnanda','Avifah Ve',2013,'Novel romance','','700','2017-02-20',50000,NULL,NULL,NULL,'de Teens','0',NULL,NULL),(19,16024519412234,'English Grammar plus Idioms for general application','Febryo DW','unname',2014,'','','','2017-02-20',0,NULL,0,0,'dap publisher','1',NULL,NULL),(20,23515159124235,'Menuai Hasil dalam Rei Ki','Irmansyah Effendi','unname',2009,'','','','2017-02-20',0,NULL,0,0,'PT Gramedia Pustaka Utama ','1',NULL,NULL),(29,64215159124,'Smart Way to the Grammar','Aswir Suhud, M.Pd.','Firma Dani, S.Hum.',2013,'Buku tentang cara belajar Grammar dengan mudah','','600','2017-02-23',100000,NULL,0,NULL,'Dunia Cerdas','1','','rack-01'),(30,NULL,'Etika Enjiniring Edisi Kedua','Fleddermann',NULL,2007,'Perkembangan teknologi bagaikan pisau bermata dua: di samping manfaatnya yang nyata bagi kehidupan manusia. terdapat ancaman di baliknya. Ancaman-ancaman itu. yang berwujud hal-hal buruk semisal penyuapan. kecurangan. perusakan lingkungan. pengabaian desain yang tidak aman. kebohongan spesifikasi produk. pengungkapan rahasia perusahaan. kejujuran dalam riset. konflik kepentingan. telah merebak menjadi masalah sehari-hari yang harus dihadapi oleh insinyur. Patut dicamkan bahwa pekerjaan insinyur mempunyai dampak yang luas bagi masyarakat. sebab pekerjaannya dapat mempengaruhi kesehatan dan keselamatan publik. selain itu juga dapat mempengaruhi praktek bisnis maupun politik dan ekonomi. Inilah alasan mengapa insinyur harus membekali dirinya dengan pengetahuan mengenai etika.\r\n','9789797815417','600',NULL,110000,'etika_enjiniring.jpg',NULL,NULL,'Erlangga','1',NULL,NULL),(31,123456,'Biologi 2 Ed 5','Campbell','',0,'BIOLOGI','','500','0000-00-00',400000,'biologi.jpg',0,NULL,'Erlangga','1','',NULL),(32,12345,'werty','wertyu','345678',345,'','','','2017-03-24',23456,NULL,0,NULL,'rtyu','1','2345678',NULL);
/*!40000 ALTER TABLE `book_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_status`
--

DROP TABLE IF EXISTS `book_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_status` (
  `stat_id` int(11) NOT NULL,
  `status` varchar(64) NOT NULL,
  `loc` varchar(64) NOT NULL,
  PRIMARY KEY (`stat_id`),
  UNIQUE KEY `stat_id` (`stat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_status`
--

LOCK TABLES `book_status` WRITE;
/*!40000 ALTER TABLE `book_status` DISABLE KEYS */;
INSERT INTO `book_status` VALUES (0,'Not Avaiable',''),(1,'Avaiable','A32');
/*!40000 ALTER TABLE `book_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` varchar(8) NOT NULL,
  `cat_name` varchar(128) NOT NULL,
  `cat_desc` varchar(128) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('000','Computer science, information & general works','Computer science, information & general works'),('100','Philosophy & psychology','Philosophy & psychology'),('200','Religion','Religion'),('300','Social sciences','Social sciences'),('400','Language','Language'),('500','Science','Science'),('600','Technology','Technology'),('700','Arts & recreation','Arts & recreation'),('800','Literature','Literature'),('900','History & geography','History & geography');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_data`
--

DROP TABLE IF EXISTS `category_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `category_id` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_data`
--

LOCK TABLES `category_data` WRITE;
/*!40000 ALTER TABLE `category_data` DISABLE KEYS */;
INSERT INTO `category_data` VALUES (1,30,'eng'),(2,30,'eco');
/*!40000 ALTER TABLE `category_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_visitor`
--

DROP TABLE IF EXISTS `log_visitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(100) DEFAULT NULL,
  `rfid` bigint(100) DEFAULT NULL,
  `log_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_visitor`
--

LOCK TABLES `log_visitor` WRITE;
/*!40000 ALTER TABLE `log_visitor` DISABLE KEYS */;
INSERT INTO `log_visitor` VALUES (1,2,16024519412823,'2017-02-22 00:00:00'),(2,2,16024519412823,'2017-02-22 00:00:00'),(3,2,16024519412823,'2017-02-22 00:00:00'),(4,2,16024519412823,'2017-02-22 16:37:45'),(5,2,16024519412823,'2017-02-22 16:38:01'),(6,4,64215159124116,'2017-02-22 16:38:04'),(7,4,64215159124116,'2017-02-22 16:38:05'),(8,4,64215159124116,'2017-02-23 14:39:33'),(9,4,64215159124116,'2017-02-23 14:39:37'),(10,2,16024519412823,'2017-02-23 14:39:41'),(11,4,64215159124116,'2017-02-23 14:39:50'),(12,4,64215159124116,'2017-02-23 14:39:52'),(13,2,16024519412823,'2017-02-23 14:39:55'),(14,2,16024519412823,'2017-02-23 14:39:56'),(15,2,16024519412823,'2017-02-23 14:40:00'),(16,4,64215159124116,'2017-02-23 14:40:01'),(17,4,64215159124116,'2017-02-23 14:44:00'),(18,2,16024519412823,'2017-02-23 14:44:02'),(19,4,64215159124116,'2017-02-23 14:44:39'),(20,4,64215159124116,'2017-02-23 14:44:42'),(21,4,64215159124116,'2017-02-23 14:44:44'),(22,4,64215159124116,'2017-02-23 14:44:45'),(23,4,64215159124116,'2017-02-23 14:44:48'),(24,2,16024519412823,'2017-02-23 14:44:50'),(25,4,64215159124116,'2017-02-23 14:45:56'),(26,4,64215159124116,'2017-02-23 14:45:58'),(27,4,64215159124116,'2017-02-23 14:46:00'),(28,4,64215159124116,'2017-02-23 14:46:03'),(29,2,16024519412823,'2017-02-23 14:46:04'),(30,2,16024519412823,'2017-02-23 14:46:06'),(31,2,16024519412823,'2017-02-23 14:46:07'),(32,4,64215159124116,'2017-02-23 14:46:12'),(33,4,64215159124116,'2017-02-23 14:46:40'),(34,4,64215159124116,'2017-02-23 14:46:41'),(35,4,64215159124116,'2017-02-23 14:46:43'),(36,4,64215159124116,'2017-02-23 14:46:44'),(37,4,64215159124116,'2017-02-23 14:46:55'),(38,4,64215159124116,'2017-02-23 14:46:58'),(39,2,16024519412823,'2017-02-23 14:47:04'),(40,2,16024519412823,'2017-02-23 14:47:05'),(41,4,64215159124116,'2017-02-23 14:47:38'),(42,4,64215159124116,'2017-02-23 14:47:38'),(43,4,64215159124116,'2017-02-23 14:47:39'),(44,2,16024519412823,'2017-02-23 14:47:42'),(45,2,16024519412823,'2017-02-23 14:48:03'),(46,4,64215159124116,'2017-02-23 14:48:19'),(47,4,64215159124116,'2017-02-23 14:48:19'),(48,4,64215159124116,'2017-02-23 14:48:19'),(49,4,64215159124116,'2017-02-23 14:48:22'),(50,4,64215159124116,'2017-02-23 14:48:22'),(51,4,64215159124116,'2017-02-23 14:48:25'),(52,4,64215159124116,'2017-02-23 14:48:25'),(53,4,64215159124116,'2017-02-23 14:48:26'),(54,4,64215159124116,'2017-02-23 14:48:55'),(55,4,64215159124116,'2017-02-23 14:48:58'),(56,2,16024519412823,'2017-02-23 14:49:00'),(57,4,64215159124116,'2017-02-23 14:49:04'),(58,4,64215159124116,'2017-02-23 14:49:04'),(59,4,64215159124116,'2017-02-23 14:49:05'),(60,4,64215159124116,'2017-02-23 14:49:06'),(61,4,64215159124116,'2017-02-23 14:49:09'),(62,2,16024519412823,'2017-02-23 14:49:13'),(63,4,64215159124116,'2017-02-23 14:49:57'),(64,4,64215159124116,'2017-02-23 14:49:59'),(65,4,64215159124116,'2017-02-23 14:50:01'),(66,2,16024519412823,'2017-02-23 14:50:02'),(67,2,16024519412823,'2017-02-23 14:50:03'),(68,2,16024519412823,'2017-02-23 14:50:03'),(69,4,64215159124116,'2017-02-23 14:50:06'),(70,2,16024519412823,'2017-02-23 14:50:11'),(71,4,64215159124116,'2017-02-23 14:50:14'),(72,4,64215159124116,'2017-02-23 14:50:21'),(73,4,64215159124116,'2017-02-23 14:50:23'),(74,4,64215159124116,'2017-02-23 14:50:24'),(75,2,16024519412823,'2017-02-23 14:50:24'),(76,2,16024519412823,'2017-02-23 14:50:25'),(77,2,16024519412823,'2017-02-23 14:50:25'),(78,8,16024519412823,'2017-02-23 14:51:53'),(79,4,64215159124116,'2017-02-23 14:51:56'),(80,8,16024519412823,'2017-02-23 14:51:59'),(81,4,64215159124116,'2017-02-23 14:52:02'),(82,4,64215159124116,'2017-02-23 14:52:05'),(83,4,64215159124116,'2017-02-23 14:52:08'),(84,8,16024519412823,'2017-02-23 14:52:10'),(85,8,16024519412823,'2017-02-23 14:52:10'),(86,8,16024519412823,'2017-02-23 14:52:11'),(87,8,16024519412823,'2017-02-23 14:52:27'),(88,4,64215159124116,'2017-02-23 14:52:29'),(89,8,16024519412823,'2017-02-23 14:52:33'),(90,4,64215159124116,'2017-02-23 14:52:38');
/*!40000 ALTER TABLE `log_visitor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rfid_tag`
--

DROP TABLE IF EXISTS `rfid_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rfid_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfid_id` bigint(100) DEFAULT NULL,
  `reg_time` datetime DEFAULT NULL,
  `use_for` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rfid_tag`
--

LOCK TABLES `rfid_tag` WRITE;
/*!40000 ALTER TABLE `rfid_tag` DISABLE KEYS */;
INSERT INTO `rfid_tag` VALUES (2,64215159124116,'2017-02-22 16:55:37',NULL),(3,64215159124116,'2017-02-22 17:14:40','book'),(4,16024519412823,'2017-02-22 17:16:10','member'),(5,64215159124116,'2017-02-23 14:34:03','book'),(6,16024519412823,'2017-02-23 14:37:07','member');
/*!40000 ALTER TABLE `rfid_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_master`
--

DROP TABLE IF EXISTS `transaction_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction_master` (
  `transaction_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_date` date NOT NULL,
  `late_fee` float NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_master`
--

LOCK TABLES `transaction_master` WRITE;
/*!40000 ALTER TABLE `transaction_master` DISABLE KEYS */;
INSERT INTO `transaction_master` VALUES (79,'2017-03-05','2017-03-19','2017-03-05',0,30,8),(80,'2017-03-05','2017-03-19','2017-03-05',0,30,8),(81,'0000-00-00','0000-00-00','2017-03-19',0,30,8);
/*!40000 ALTER TABLE `transaction_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rfid` bigint(100) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `group_` varchar(64) DEFAULT NULL,
  `gender` set('male','female') DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1235 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_master`
--

LOCK TABLES `user_master` WRITE;
/*!40000 ALTER TABLE `user_master` DISABLE KEYS */;
INSERT INTO `user_master` VALUES (4,64215159124116,'raka','','a7db07a3c1cd5adce6baf3723bb6d6a756f99ba7206a6cd6314ee9ec','Muhammad','Raka Santoso','',NULL,NULL,'male','0000-00-00','2017-02-17'),(8,16024519412823,'usman','usman@student.surya.ac.id',NULL,'usman','','087889647958','asdfghjkl','',NULL,'0000-00-00','2017-02-17'),(1234,13442424,'','',NULL,'','','','','','','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `user_master` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-18 15:41:53
