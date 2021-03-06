-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: admission_system_new
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','123456',1,''),(3,'teacher','12344',3,''),(5,'hod','12344',5,''),(7,'dean','123455',7,'');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `st_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(255) NOT NULL,
  `teach_name` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `days` varchar(255) NOT NULL,
  `time` time(6) NOT NULL,
  `st_id` int(11) NOT NULL,
  PRIMARY KEY (`st_course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (143,27,'','2017-11-13 19:24:16','a:3:{i:0;s:1:\"T\";i:1;s:1:\"W\";i:2;s:2:\"TH\";}','11:00:00.000000',5),(144,35,'','2017-11-14 16:06:35','a:4:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:2:\"TH\";i:3;s:1:\"F\";}','12:00:00.000000',5),(145,51,'','2017-11-15 20:08:10','a:4:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";}','09:00:00.000000',5),(146,46,'','2017-11-17 20:04:48','a:2:{i:0;s:2:\"TH\";i:1;s:1:\"F\";}','12:00:00.000000',5),(147,36,'','2017-11-19 14:38:35','a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}','13:00:00.000000',5),(148,41,'','2017-11-19 08:41:41','a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}','10:00:00.000000',5),(154,46,'','2017-11-19 16:36:20','a:2:{i:0;s:2:\"TH\";i:1;s:1:\"F\";}','12:00:00.000000',8),(156,36,'','2017-11-19 16:39:43','a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}','13:00:00.000000',8),(158,47,'','2017-11-20 16:10:10','a:1:{i:0;s:2:\"TH\";}','12:00:00.000000',8),(160,49,'','2017-11-20 18:19:23','a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}','11:00:00.000000',8),(161,27,'','2017-11-21 15:53:09','a:3:{i:0;s:1:\"T\";i:1;s:1:\"W\";i:2;s:2:\"TH\";}','11:00:00.000000',10),(162,27,'','2017-11-25 11:20:26','a:3:{i:0;s:1:\"T\";i:1;s:1:\"W\";i:2;s:2:\"TH\";}','11:00:00.000000',11),(163,45,'','2017-11-25 11:20:46','a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}','10:00:00.000000',11),(164,60,'','2017-11-25 11:57:15','a:2:{i:0;s:1:\"M\";i:1;s:1:\"W\";}','10:00:00.000000',11),(165,61,'','2017-11-25 11:58:43','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','09:00:00.000000',11),(166,62,'','2017-11-25 12:02:43','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',12),(167,61,'','2017-11-25 12:03:24','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','09:00:00.000000',12),(168,59,'','2017-11-25 12:03:35','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','12:00:00.000000',12),(170,68,'','2017-11-25 12:04:23','a:2:{i:0;s:1:\"M\";i:1;s:1:\"W\";}','11:00:00.000000',12),(171,75,'','2017-11-25 12:30:11','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',12),(172,62,'','2017-11-25 12:38:44','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',13),(173,62,'','2017-11-25 12:40:20','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',14),(174,62,'','2017-11-25 12:41:32','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',15),(175,62,'','2017-11-25 12:42:47','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',16),(176,62,'','2017-11-25 12:44:20','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',17),(177,62,'','2017-11-25 12:45:35','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',18),(178,62,'','2017-11-25 12:46:33','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',19),(179,62,'','2017-11-25 12:47:33','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',20),(180,62,'','2017-11-25 12:49:09','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',21),(181,62,'','2017-11-25 12:50:00','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',22),(182,62,'','2017-11-25 12:51:07','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',23),(183,62,'','2017-11-25 12:52:35','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',24),(184,62,'','2017-11-25 12:53:25','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',25),(185,62,'','2017-11-25 12:54:32','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',26),(186,62,'','2017-11-25 12:55:46','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',27),(187,62,'','2017-11-25 12:57:01','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',28),(188,62,'','2017-11-25 12:57:47','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',29),(189,62,'','2017-11-25 12:58:47','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',30),(190,62,'','2017-11-25 12:59:47','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',31),(191,62,'','2017-11-25 13:02:02','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',32),(192,62,'','2017-11-25 13:02:55','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',33),(193,62,'','2017-11-25 13:03:51','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',34),(194,62,'','2017-11-25 13:07:17','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',35),(195,62,'','2017-11-25 13:08:22','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',36),(196,62,'','2017-11-25 13:11:40','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',37),(198,62,'','2017-11-25 13:17:45','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',39),(199,62,'','2017-11-25 13:20:45','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',40),(200,62,'','2017-11-25 13:21:33','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',41),(201,62,'','2017-11-25 13:22:22','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',42),(202,62,'','2017-11-25 13:23:53','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',43),(203,62,'','2017-11-25 13:24:50','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',44),(204,62,'','2017-11-25 13:25:42','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',45),(205,62,'','2017-11-25 13:26:53','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','10:00:00.000000',46),(206,60,'','2017-11-25 13:44:51','a:2:{i:0;s:1:\"M\";i:1;s:1:\"W\";}','10:00:00.000000',49),(207,76,'','2017-11-25 13:50:56','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',13),(208,76,'','2017-11-25 13:52:18','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',14),(209,76,'','2017-11-25 13:52:45','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',15),(210,76,'','2017-11-25 13:53:06','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',16),(211,76,'','2017-11-25 13:53:26','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',17),(212,76,'','2017-11-25 13:53:47','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',18),(213,76,'','2017-11-25 13:54:06','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',19),(214,76,'','2017-11-25 13:54:24','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',20),(215,76,'','2017-11-25 13:54:56','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',21),(216,76,'','2017-11-25 13:55:14','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',22),(217,76,'','2017-11-25 13:56:31','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',23),(218,76,'','2017-11-25 13:56:49','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',24),(219,76,'','2017-11-25 13:57:15','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',25),(220,76,'','2017-11-25 13:57:51','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',26),(221,76,'','2017-11-25 13:58:10','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',27),(222,76,'','2017-11-25 13:58:44','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',29),(223,76,'','2017-11-25 13:59:08','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',30),(224,76,'','2017-11-25 13:59:33','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',31),(225,76,'','2017-11-25 13:59:54','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',32),(226,76,'','2017-11-25 14:00:09','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',33),(227,76,'','2017-11-25 14:00:26','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',34),(228,76,'','2017-11-25 14:00:58','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',35),(229,76,'','2017-11-25 14:01:16','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',36),(230,76,'','2017-11-25 14:01:34','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',37),(232,76,'','2017-11-25 14:02:16','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',39),(233,76,'','2017-11-25 14:03:11','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',40),(234,76,'','2017-11-25 14:03:29','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',42),(235,76,'','2017-11-25 14:03:50','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',43),(236,76,'','2017-11-25 14:04:13','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',45),(237,76,'','2017-11-25 14:04:37','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',46),(238,76,'','2017-11-25 14:05:21','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',47),(239,76,'','2017-11-25 14:06:10','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',49),(240,76,'','2017-11-25 14:07:15','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',50),(241,76,'','2017-11-25 14:08:10','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','09:00:00.000000',51),(242,77,'','2017-11-25 17:12:00','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','12:00:00.000000',52),(243,77,'','2017-11-25 17:14:04','a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}','12:00:00.000000',40),(244,78,'','2017-11-25 17:25:48','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','11:00:00.000000',40),(245,78,'','2017-11-25 17:26:13','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','11:00:00.000000',44),(246,78,'','2017-11-25 17:26:35','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','11:00:00.000000',30),(247,69,'','2017-11-26 15:22:33','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','11:00:00.000000',38),(248,57,'','2017-11-26 18:40:09','a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}','11:00:00.000000',38);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_list`
--

DROP TABLE IF EXISTS `course_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_list` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `fall_add_id` int(11) NOT NULL,
  `courses_id` varchar(31) DEFAULT NULL,
  `des` varchar(255) NOT NULL,
  `cr` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `instr_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `off` int(11) NOT NULL,
  `avail` int(11) NOT NULL,
  `section` varchar(31) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_list`
--

LOCK TABLES `course_list` WRITE;
/*!40000 ALTER TABLE `course_list` DISABLE KEYS */;
INSERT INTO `course_list` VALUES (50,'test_13','',2001,5,'1212','test_13',2,'1','2017-11-23','13:00:00.000000','14:00:00.000000',6,'a:1:{i:0;s:1:\"F\";}',0,35,NULL),(56,'Basic Urdu','',4,7,'Urdu 101','Basic Urdu Course ',2,'16','2018-01-07','10:00:00.000000','11:00:00.000000',12,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(57,'English Writing','',2,7,'Eng 101','',2,'14','2018-01-08','11:00:00.000000','12:00:00.000000',9,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,9,'A'),(58,'Writing English','',2,7,'Eng 101','Writing Course',2,'13','2018-01-07','12:00:00.000000','13:00:00.000000',9,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"F\";}',0,10,NULL),(59,'Pakistani Poetry','',4,7,'Urdu 205','Basic urdu Course',2,'15','2018-01-08','12:00:00.000000','13:00:00.000000',16,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,34,NULL),(60,'Programming1','',1,7,'Com102','',3,'6','2018-01-07','10:00:00.000000','12:00:00.000000',8,'a:2:{i:0;s:1:\"M\";i:1;s:1:\"W\";}',0,33,'A'),(61,'Programming1','',1,7,'Com102','',2,'7','2018-01-08','09:00:00.000000','11:00:00.000000',8,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,33,NULL),(62,'Basic Math','',3,7,'Math100','',2,'10','2018-01-07','10:00:00.000000','11:00:00.000000',13,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,1,NULL),(63,'Basic Math','',3,7,'Math100','',2,'10','2018-01-08','11:00:00.000000','12:00:00.000000',15,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(64,'Basic Math','',3,7,'Math100','',2,'11','2018-01-08','10:00:00.000000','12:00:00.000000',14,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,10,NULL),(65,'Trigonometry','',3,7,'Math101','',2,'10','2018-01-09','14:00:00.000000','15:00:00.000000',13,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(66,'Trigonometry','',3,7,'Math101','',2,'10','2018-01-08','11:00:00.000000','12:00:00.000000',15,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(67,'Trigonometry','',3,7,'Math101','',2,'10','2018-01-08','10:00:00.000000','11:00:00.000000',14,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(68,'Data Structure','',1,7,'Comp200','',2,'8','2018-01-10','11:00:00.000000','13:00:00.000000',8,'a:2:{i:0;s:1:\"M\";i:1;s:1:\"W\";}',0,34,NULL),(69,'Design And Algo','',1,7,'Com 303','',2,'9','2018-01-09','11:00:00.000000','13:00:00.000000',8,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,9,NULL),(70,'Design And Algo','',1,7,'Com 303','',2,'9','2018-01-09','11:00:00.000000','13:00:00.000000',8,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,10,NULL),(71,'Advance Writing','',2,7,'Eng 103','',2,'14','2018-01-08','10:00:00.000000','11:00:00.000000',9,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(72,'Basic Education ','',5,7,'Edu 100','',2,'12','2018-01-09','09:00:00.000000','11:00:00.000000',10,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,10,NULL),(73,'Basic Education ','',5,7,'Edu 100','',2,'13','2018-01-08','14:00:00.000000','15:00:00.000000',10,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,35,NULL),(74,'Urdu Poetry','',4,7,'Urdu 103','',2,'16','2018-01-08','12:00:00.000000','13:00:00.000000',16,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,10,NULL),(75,'Literary Journalism','',4,7,'Urdu 207','',2,'15','2018-01-09','09:00:00.000000','10:00:00.000000',12,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,34,NULL),(76,'Basic Math','',3,7,'Math100','',2,'11','2018-01-08','09:00:00.000000','10:00:00.000000',13,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,1,NULL),(77,'SQA','',1,7,'CSSE 442','',2,'9','2018-01-08','12:00:00.000000','13:00:00.000000',8,'a:3:{i:0;s:1:\"M\";i:1;s:1:\"W\";i:2;s:1:\"F\";}',0,8,NULL),(78,'ODE','',3,7,'Math 201','',2,'11','2018-01-09','11:00:00.000000','13:00:00.000000',14,'a:2:{i:0;s:1:\"T\";i:1;s:2:\"TH\";}',0,7,NULL),(79,'232323','',5,5,'3232332','323233',2,'10','2017-11-14','10:00:00.000000','13:00:00.000000',12,'a:1:{i:0;s:1:\"W\";}',0,10,NULL),(80,'232332','',5,2,'3232323','dsfsdf',3,'6','2017-12-31','09:00:00.000000','10:00:00.000000',6,'a:1:{i:0;s:1:\"M\";}',0,10,NULL),(81,'Cmp 1122','',2,6,'Cmp 1122','',3,'9','2017-11-30','17:00:00.000000','18:00:00.000000',6,'a:1:{i:0;s:1:\"F\";}',0,10,'B');
/*!40000 ALTER TABLE `course_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_request`
--

DROP TABLE IF EXISTS `course_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `st_id` int(11) NOT NULL,
  `ression` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `teacher_processed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_request`
--

LOCK TABLES `course_request` WRITE;
/*!40000 ALTER TABLE `course_request` DISABLE KEYS */;
INSERT INTO `course_request` VALUES (1,0,46,'hello',5,'sdfsdf',0,7,1),(2,0,49,'sdfsdfsdfsdfsdf',8,'',0,7,1),(3,0,49,'sdfsdfsdfsdfsdf',8,'',0,7,1),(4,0,47,'please help me go with this',8,'',0,6,1),(5,0,48,'sdssdsd',8,'',0,6,1),(6,7,48,'please add to to this course',9,'',4,6,1),(7,7,48,'please add to to this course',9,'',4,6,1),(8,0,48,'sdssdsd',8,'',0,6,1),(9,0,49,'sdfsdfsdfsdfsdf',8,'',0,7,1),(10,0,62,'I want to take this course kindly Allow',47,'',0,13,1),(11,0,62,'Degree req ',48,'',7,13,1),(12,0,62,'Course clash with other section',49,'',0,13,1),(13,0,62,'Req Section 1 ',52,'',0,13,1),(14,-2,76,'dummy request\r\n',52,'',3,13,1),(15,0,62,'I want  this course to complete my req',53,'',7,13,1),(16,0,62,'hello me',38,'',0,13,1),(17,0,57,'dummy request\r\n',38,'',8,9,1);
/*!40000 ALTER TABLE `course_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_seats`
--

DROP TABLE IF EXISTS `course_seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_seats` (
  `course_seats_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  PRIMARY KEY (`course_seats_id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_seats`
--

LOCK TABLES `course_seats` WRITE;
/*!40000 ALTER TABLE `course_seats` DISABLE KEYS */;
INSERT INTO `course_seats` VALUES (99,27,5),(100,35,5),(101,51,5),(102,46,5),(103,36,5),(104,41,5),(105,27,8),(106,41,8),(107,53,8),(108,53,8),(109,53,8),(110,46,8),(112,36,8),(114,47,8),(116,49,8),(117,27,10),(118,27,11),(119,45,11),(120,60,11),(121,61,11),(122,62,12),(123,61,12),(124,59,12),(126,68,12),(127,75,12),(128,62,13),(129,62,14),(130,62,15),(131,62,16),(132,62,17),(133,62,18),(134,62,19),(135,62,20),(136,62,21),(137,62,22),(138,62,23),(139,62,24),(140,62,25),(141,62,26),(142,62,27),(143,62,28),(144,62,29),(145,62,30),(146,62,31),(147,62,32),(148,62,33),(149,62,34),(150,62,35),(151,62,36),(152,62,37),(154,62,39),(155,62,40),(156,62,41),(157,62,42),(158,62,43),(159,62,44),(160,62,45),(161,62,46),(162,60,49),(163,76,13),(164,76,14),(165,76,15),(166,76,16),(167,76,17),(168,76,18),(169,76,19),(170,76,20),(171,76,21),(172,76,22),(173,76,23),(174,76,24),(175,76,25),(176,76,26),(177,76,27),(178,76,29),(179,76,30),(180,76,31),(181,76,32),(182,76,33),(183,76,34),(184,76,35),(185,76,36),(186,76,37),(188,76,39),(189,76,40),(190,76,42),(191,76,43),(192,76,45),(193,76,46),(194,76,47),(195,76,49),(196,76,50),(197,76,51),(198,77,52),(199,77,40),(200,78,40),(201,78,44),(202,78,30),(203,69,38),(204,57,38);
/*!40000 ALTER TABLE `course_seats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depart`
--

DROP TABLE IF EXISTS `depart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` int(11) NOT NULL,
  `dp_name` varchar(255) NOT NULL,
  `created_date` datetime(6) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1010 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depart`
--

LOCK TABLES `depart` WRITE;
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` VALUES (1005,1,'Computer Science','0000-00-00 00:00:00.000000','','','2017-11-25 11:23:56'),(1006,2,'English','0000-00-00 00:00:00.000000','','','2017-11-25 11:24:13'),(1007,3,'Mathematics','0000-00-00 00:00:00.000000','','','2017-11-25 11:24:29'),(1008,4,'Urdu','0000-00-00 00:00:00.000000','','','2017-11-25 11:24:41'),(1009,5,'Education','0000-00-00 00:00:00.000000','','','2017-11-25 11:25:02');
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fall_add`
--

DROP TABLE IF EXISTS `fall_add`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fall_add` (
  `fall_add_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_date` datetime(6) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`fall_add_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fall_add`
--

LOCK TABLES `fall_add` WRITE;
/*!40000 ALTER TABLE `fall_add` DISABLE KEYS */;
INSERT INTO `fall_add` VALUES (2,'spring_2019','2017-10-11 00:00:00.000000','admin','','2017-12-07 19:26:20',1),(5,'summer_vacations','2017-10-12 00:00:00.000000','admin','','2017-12-07 19:26:20',1),(6,'fall_2018','0000-00-00 00:00:00.000000','','','2017-12-07 19:26:20',1),(7,'Spring 2018','0000-00-00 00:00:00.000000','','','2017-12-07 19:26:20',1);
/*!40000 ALTER TABLE `fall_add` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (0,'jhon','2017-10-17 19:00:00');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'admin'),(3,'teacher'),(5,'hod'),(7,'director');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(31) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (6,'S218'),(7,'S219'),(8,'S319'),(9,'S121'),(10,'S412'),(11,'S413'),(12,'E111'),(13,'E121'),(14,'E222'),(15,'E328'),(16,'E330');
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sec`
--

DROP TABLE IF EXISTS `sec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sec` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec` varchar(11) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sec`
--

LOCK TABLES `sec` WRITE;
/*!40000 ALTER TABLE `sec` DISABLE KEYS */;
INSERT INTO `sec` VALUES (3,'spring_2017');
/*!40000 ALTER TABLE `sec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'A'),(2,'B');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_registeration`
--

DROP TABLE IF EXISTS `student_registeration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_registeration` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` varchar(20) NOT NULL,
  `no` int(20) NOT NULL,
  `gander` varchar(10) NOT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `is_holded` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_registeration`
--

LOCK TABLES `student_registeration` WRITE;
/*!40000 ALTER TABLE `student_registeration` DISABLE KEYS */;
INSERT INTO `student_registeration` VALUES (1,'irfan','Mumtaz','fanta2042@yahoo.com','fanta2042@yahoo.com','12345','2017-12-07 19:09:49','',12334,'female',NULL,0),(2,'irfan','Mumtaz','adf@gmail.com','fanta2042','12345','2017-12-07 19:09:51','',300,'male',NULL,0),(3,'haddi','irfan','adf@gmail.com','username','12345','2017-10-07 11:22:46','',1233,'female',NULL,0),(4,'haddi','irfan','adf@gmail.com','username','12345','2017-10-07 11:23:28','',1233,'female',NULL,0),(5,'dfa','qw','fanta2042@yahoo.com','fanta2042','12344','2017-11-06 17:25:54','',12334,'male',NULL,0),(6,'irfan','Mumtaz','fanta2042@yahoo.com','fanta2042','12345','2017-10-07 11:26:41','',0,'male',NULL,0),(7,'23','23','admin@sd.sdf','23','123456','2017-11-17 20:43:55','',23,'',NULL,0),(8,'asdf','asdf','a@a.com','asdf','123456','2017-12-07 19:29:16','',2147483647,'','12-12345',1),(9,'new student','new student','eami@sdf.sdf','new student','123455','2017-11-20 16:15:19','',23232323,'','12-11223',0),(10,'Ahmad','Khan','khurramwarrior@gmail','Ahmad','12345','2017-11-20 18:20:18','',2147483647,'','17-10910',0),(11,'Kiran','Shahzad','kiran@formanite.fcco','Kiran','12345','2017-11-25 11:19:08','',2147483647,'','18-10901',0),(12,'khurram','Shahzad','khurram@formanite','khurram','12345','2017-11-25 12:02:00','',2147483647,'','18-10902',0),(13,'Ali','Shahzad','Ali@formanite','Ali','12345','2017-11-25 12:38:09','',2147483647,'','18-10903',0),(14,'Zain','Ahmad','zain@formanite','Zain','12345','2017-11-25 12:39:50','',2147483647,'','18-10904',0),(15,'Fatima','Khan','fk@formanite','Fatima','12345','2017-11-25 12:41:10','',2147483647,'','18-10905',0),(16,'Bilal','Arshad','bilala@formanite','Bilal','12345','2017-11-25 12:42:26','',2147483647,'','18-10906',0),(17,'Ahmad','Imtiaz','ahmad@gmail.com','Ahmad','12345','2017-11-25 12:43:52','',2147483647,'','18-10907',0),(18,'Junaid','Khan','Jn@formanite','Junaid','12345','2017-11-25 12:45:09','',2147483647,'','18-10908',0),(19,'sajjad','Ali','sajjad@formanite','sajjad','12345','2017-11-25 12:46:16','',2147483647,'','18-10909',0),(20,'sajjad','Ahmad','sajjada@formanite','sajjad','12345','2017-11-25 12:47:09','',2147483647,'','18-10910',0),(21,'Talha','Ahmad','talha@formanite','Talha','12345','2017-11-25 12:48:52','',2147483647,'','18-10911',0),(22,'Talha','Imtiaz','talhaim@formanite','Talha','12345','2017-11-25 12:49:42','',2147483647,'','18-10912',0),(23,'Zain','Arshad','zainA@formanite','Zain','12345','2017-11-25 12:50:39','',2147483647,'','18-10913',0),(24,'kashif','Hassan','kashif@formanite','kashif','12345','2017-11-25 12:52:16','',2147483647,'','18-10914',0),(25,'kashif','Ahmad','kashifa@formanite','kashif','12345','2017-11-25 12:53:07','',2147483647,'','18-10915',0),(26,'Zain','Hassan','zain1@formanite','Zain','12345','2017-11-25 12:54:07','',2147483647,'','18-10916',0),(27,'kashif','Shahzad','kashif@formanite','kashif','12345','2017-11-25 12:55:19','',2147483647,'','18-10917',0),(28,'Ahmad','Hassan','ahmad@gmail.com','Ahmad','12345','2017-11-25 12:56:29','',2147483647,'','18-10918',0),(29,'Bilal','Hassan','bilala@formanite','Bilal','12345','2017-11-25 12:57:32','',2147483647,'','18-10919',0),(30,'Ali','Hassan','Ali@formanite','Ali','12345','2017-11-25 12:58:30','',2147483647,'','18-10920',0),(31,'Ayesha','Khan','ayesha@formanite','Ayesha','12345','2017-11-25 12:59:31','',2147483647,'','18-10921',0),(32,'Ayesha','Ahmad','ayesha@formanite','Ayesha','12345','2017-11-25 13:01:43','',2147483647,'','18-10922',0),(33,'Ayesha','Shahzad','ayeshas@formanite','Ayesha','12345','2017-11-25 13:02:35','',2147483647,'','18-10923',0),(34,'Ayesha','Arshad','ayeshaA@formanite','Ayesha','12345','2017-11-25 13:03:28','',2147483647,'','18-10924',0),(35,'Ayesha','Imtiaz','ayeha@formanite','Ayesha','12345','2017-11-25 13:06:52','',2147483647,'','18-10925',0),(36,'Ayesha','Khan','ayesha23@formanite','Ayesha','12345','2017-11-25 13:08:03','',2147483647,'','18-10926',0),(37,'Ayesha','Zain','ayesha1@formanite','Ayesha','12345','2017-11-25 13:10:15','',2147483647,'','18-10927',0),(38,'Ayesha','Noor','msybashir@gmail.com','Ayesha','12345','2017-11-25 13:15:51','',2147483647,'','18-10928',0),(39,'Noor','Khan','noor@gmail.com','Noor','12345','2017-11-25 13:17:12','',2147483647,'','18-10929',0),(40,'Noor','Ahmad','noor1@gmail.com','Noor','12345','2017-11-25 13:20:25','',2147483647,'','18-10930',0),(41,'Noor','Shahzad','noors@gmail.com','Noor','12345','2017-11-25 13:21:17','',2147483647,'','18-10931',0),(42,'Noor','Hassan','noor@gmail.com','Noor','12345','2017-11-25 13:22:05','',2147483647,'','18-10932',0),(43,'Noor','Imtiaz','noori@gmail.com','Noor','12345','2017-11-25 13:23:33','',2147483647,'','18-10933',0),(44,'Noor','Ali','noora@gmail.com','Noor','12345','2017-11-25 13:24:33','',2147483647,'','18-10934',0),(45,'Azeem','Khan','azeem@formanite','Azeem','12345','2017-11-25 13:25:25','',2147483647,'','18-10935',0),(46,'Azeem','Hassan','azeemh@formanite','Azeem','12345','2017-11-25 13:26:19','',2147483647,'','18-10936',0),(47,'Haider','Ali','haider@gmail.com','Haider','12345','2017-11-25 13:27:57','',2147483647,'','18-10937',0),(48,'Ali','Mahmood','Alim@formanite','Ali','12345','2017-11-25 13:32:03','',2147483647,'','18-10938',0),(49,'Rehan','Ahmad','rehan@gmail.com','Rehan','12345','2017-11-25 13:41:57','',2147483647,'','18-10939',0),(50,'Haider','Hassan','haider@gmail.com','Haider','12345','2017-11-25 14:07:01','',2147483647,'','18-10940',0),(51,'Haider','Imtiaz','haider@gmail.com','Haider','12345','2017-11-25 14:07:41','',2147483647,'','18-10941',0),(52,'Tanveer','Ahmad','tanveer@gmail.com','Tanveer','12345','2017-11-25 14:09:12','',2147483647,'','18-10945',0),(53,'Khurram','Shahid','khurram@formanite','Khurram','12345','2017-11-25 17:43:31','',2147483647,'','18-10950',0);
/*!40000 ALTER TABLE `student_registeration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `instr_id` int(11) NOT NULL AUTO_INCREMENT,
  `teach_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`instr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (6,'jhon1','12345','2017-11-19 19:56:24'),(7,'jhon','12345','2017-10-21 06:47:18'),(8,'A Alvi','12345','2017-11-25 11:11:35'),(9,'Fatima','12345','2017-11-25 11:26:08'),(10,'Adil','12345','2017-11-25 11:28:36'),(12,'Ghafoor','12345','2017-11-25 11:29:15'),(13,'Kamran','12345','2017-11-25 11:29:48'),(14,'Asim','12345','2017-11-25 11:30:03'),(15,'Faiza','12345','2017-11-25 11:30:20'),(16,'Akhtar','12345','2017-11-25 11:30:36'),(17,'Nakhat','12345','2017-11-25 11:30:55');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-08  0:31:21
