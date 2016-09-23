CREATE DATABASE  IF NOT EXISTS `hexaview` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hexaview`;
-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: hexaview
-- ------------------------------------------------------
-- Server version	5.5.52-0ubuntu0.14.04.1

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
-- Table structure for table `content_web`
--

DROP TABLE IF EXISTS `content_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_content` varchar(100) NOT NULL,
  `decription_content` text NOT NULL,
  `date_content` varchar(20) NOT NULL,
  `category_content` varchar(45) NOT NULL,
  `image_content` text NOT NULL,
  `title_content` varchar(100) NOT NULL,
  `summary_content` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_web`
--

LOCK TABLES `content_web` WRITE;
/*!40000 ALTER TABLE `content_web` DISABLE KEYS */;
INSERT INTO `content_web` VALUES (3,'Arissaassss','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>asasassa <img class=\"img-responsive show\" data-filename=\"1.jpeg\" style=\"width: 1118px;\" src=\"/img/57e4ac13306fd.jpeg\"></p><p><img class=\"img-responsive show\" data-filename=\"2.jpeg\" style=\"width: 1118px;\" src=\"/img/57e4ac1330c6f.jpeg\"><br></p></body></html>\n','asasassa','advertising-campaigns','7708020160923111411.jpeg','Ajak Arisa','Mengajak Arisa'),(4,'Haierrr','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Test</p><p><img class=\"img-responsive show\" data-filename=\"4.jpeg\" style=\"width: 1118px;\" src=\"/img/57e4b02549c83.jpeg\"><br></p></body></html>\n','wwaasd','advertising-campaigns','6221920160923113133.jpeg','Haier Ok','Test'),(5,'Ada Pocong1','<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p>Waduhhh</p><p><img class=\"img-responsive show\" data-filename=\"1.jpeg\" style=\"width: 1118px;\" src=\"/img/57e4cc9edf14b.jpeg\"><img class=\"img-responsive show\" data-filename=\"4.jpeg\" style=\"width: 1118px;\" src=\"/img/57e4cc9edf6dc.jpeg\"><br></p></body></html>\n','20/9/2001','advertising-campaigns','8149520160923013302.jpeg','Test Pocong1','Pocong Tiarap1');
/*!40000 ALTER TABLE `content_web` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-23 13:37:11
