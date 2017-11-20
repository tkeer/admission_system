-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: admission_system
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
INSERT INTO `admin` VALUES (1,'admin','123456',1,''),(3,'teacher','12344',3,''),(5,'hod','12344',5,''),(7,'director','123455',7,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (143,27,'','2017-11-13 19:24:16','a:3:{i:0;s:1:\"T\";i:1;s:1:\"W\";i:2;s:2:\"TH\";}','11:00:00.000000',5),(144,35,'','2017-11-14 16:06:35','a:4:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:2:\"TH\";i:3;s:1:\"F\";}','12:00:00.000000',5),(145,51,'','2017-11-15 20:08:10','a:4:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";}','09:00:00.000000',5),(146,46,'','2017-11-17 20:04:48','a:2:{i:0;s:2:\"TH\";i:1;s:1:\"F\";}','12:00:00.000000',5),(147,36,'','2017-11-19 14:38:35','a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}','13:00:00.000000',5),(148,41,'','2017-11-19 08:41:41','a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}','10:00:00.000000',5),(154,46,'','2017-11-19 16:36:20','a:2:{i:0;s:2:\"TH\";i:1;s:1:\"F\";}','12:00:00.000000',8),(156,36,'','2017-11-19 16:39:43','a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}','13:00:00.000000',8),(157,49,'','2017-11-20 16:04:02','a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}','11:00:00.000000',8),(158,47,'','2017-11-20 16:10:10','a:1:{i:0;s:2:\"TH\";}','12:00:00.000000',8),(159,48,'','2017-11-20 17:03:34','a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}','09:00:00.000000',8);
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
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_list`
--

LOCK TABLES `course_list` WRITE;
/*!40000 ALTER TABLE `course_list` DISABLE KEYS */;
INSERT INTO `course_list` VALUES (27,'asda','B',22,6,'24','',2,'1','2017-10-01','11:00:00.000000','17:00:00.000000',7,'a:3:{i:0;s:1:\"T\";i:1;s:1:\"W\";i:2;s:2:\"TH\";}',35,33),(34,'test_one adf fd234 ','2',101,5,'1123','sf sf',2,'1','2017-10-02','11:00:00.000000','16:00:00.000000',7,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',35,35),(35,'phy','2',22,2,'1233','',2,'3','2017-11-23','12:00:00.000000','15:00:00.000000',7,'a:4:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:2:\"TH\";i:3;s:1:\"F\";}',35,34),(36,'math','2',102,5,'122','',2,'1','2017-11-21','13:00:00.000000','14:00:00.000000',6,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',35,33),(38,'statics','2',22,2,'435','',2,'3','2017-11-03','11:00:00.000000','13:00:00.000000',6,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',35,35),(39,'elt','2',102,5,'23','sdes',2,'4','2017-11-15','11:00:00.000000','18:00:00.000000',6,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',0,35),(40,'asdssa','2',102,2,'12234','des',2,'3','2017-11-14','12:00:00.000000','18:00:00.000000',6,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',0,35),(41,'this','2',22,2,'1231','',2,'1','2017-11-20','13:00:00.000000','16:00:00.000000',6,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',0,33),(42,'psychology','2',102,5,'201','',2,'3','2017-11-16','13:00:00.000000','14:00:00.000000',6,'a:3:{i:0;s:1:\"T\";i:1;s:1:\"T\";i:2;s:1:\"F\";}',0,35),(43,'chem_1','2',102,5,'180','',2,'4','2017-11-08','13:00:00.000000','14:00:00.000000',6,'a:3:{i:0;s:1:\"T\";i:1;s:1:\"T\";i:2;s:1:\"F\";}',0,35),(45,'test_id','',2001,2,'3','safs',2,'4','2017-11-17','10:00:00.000000','11:00:00.000000',6,'a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}',0,35),(46,'test_09','',22,2,'321','testing_09',2,'4','2017-11-14','12:00:00.000000','13:00:00.000000',7,'a:2:{i:0;s:2:\"TH\";i:1;s:1:\"F\";}',0,33),(47,'test-10','',2001,2,'1112','test_10',2,'1','2017-11-06','12:00:00.000000','13:00:00.000000',6,'a:1:{i:0;s:2:\"TH\";}',0,34),(48,'test_11','',2001,2,'222','dasfa',2,'1','2017-11-23','09:00:00.000000','10:00:00.000000',6,'a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}',0,34),(49,'test_12','',2001,2,'1221','dsafsadf',2,'1','2017-11-06','11:00:00.000000','13:00:00.000000',7,'a:2:{i:0;s:1:\"T\";i:1;s:1:\"W\";}',0,0),(50,'test_13','',2001,5,'1212','test_13',2,'1','2017-11-23','13:00:00.000000','14:00:00.000000',6,'a:1:{i:0;s:1:\"F\";}',0,35),(51,'new course name','',22,2,'23232332','',2,'1','2017-12-12','10:00:00.000000','11:00:00.000000',6,'a:4:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";}',0,34),(52,'new course course','',22,6,'1212','description',2,'4','2017-12-12','09:00:00.000000','10:00:00.000000',7,'a:5:{i:0;s:1:\"M\";i:1;s:1:\"T\";i:2;s:1:\"W\";i:3;s:2:\"TH\";i:4;s:1:\"F\";}',0,35),(53,'asdfasdf','',102,2,'0','',2,'3','2017-11-16','13:00:00.000000','16:00:00.000000',7,'a:1:{i:0;s:1:\"F\";}',0,32),(55,'course name','',22,2,'cmp-12','sdfsdfsdf',2,'3','2017-11-15','10:00:00.000000','13:00:00.000000',6,'a:1:{i:0;s:2:\"TH\";}',0,35);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_request`
--

LOCK TABLES `course_request` WRITE;
/*!40000 ALTER TABLE `course_request` DISABLE KEYS */;
INSERT INTO `course_request` VALUES (1,0,46,'hello',5,'sdfsdf',0,7,1),(2,0,49,'sdfsdfsdfsdfsdf',8,'',0,7,1),(3,0,49,'sdfsdfsdfsdfsdf',8,'',0,7,1),(4,0,47,'please help me go with this',8,'',0,6,1),(5,0,48,'sdssdsd',8,'',0,6,1),(6,7,48,'please add to to this course',9,'',4,6,1),(7,7,48,'please add to to this course',9,'',4,6,1),(8,0,48,'sdssdsd',8,'',0,6,1),(9,0,49,'sdfsdfsdfsdfsdf',8,'',0,7,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_seats`
--

LOCK TABLES `course_seats` WRITE;
/*!40000 ALTER TABLE `course_seats` DISABLE KEYS */;
INSERT INTO `course_seats` VALUES (99,27,5),(100,35,5),(101,51,5),(102,46,5),(103,36,5),(104,41,5),(105,27,8),(106,41,8),(107,53,8),(108,53,8),(109,53,8),(110,46,8),(112,36,8),(113,49,8),(114,47,8),(115,48,8);
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
) ENGINE=InnoDB AUTO_INCREMENT=1005 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depart`
--

LOCK TABLES `depart` WRITE;
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` VALUES (1,22,'Computer','2017-10-12 00:00:00.000000','admin','','2017-10-14 14:14:35'),(5,102,'education','0000-00-00 00:00:00.000000','','','2017-10-21 15:58:04'),(1001,101,'Chemistory','0000-00-00 00:00:00.000000','','','2017-10-21 06:20:42'),(1003,2001,'English','0000-00-00 00:00:00.000000','','','2017-11-04 14:31:55'),(1004,101,'werw_12','0000-00-00 00:00:00.000000','','','2017-11-06 17:46:11');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fall_add`
--

LOCK TABLES `fall_add` WRITE;
/*!40000 ALTER TABLE `fall_add` DISABLE KEYS */;
INSERT INTO `fall_add` VALUES (2,'spring_2019','2017-10-11 00:00:00.000000','admin','','2017-11-20 17:34:51',1),(5,'summer_vacations','2017-10-12 00:00:00.000000','admin','','2017-11-20 17:34:51',1),(6,'fall_2018','0000-00-00 00:00:00.000000','','','2017-11-20 17:34:51',1);
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
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,204),(3,100),(4,11);
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
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_registeration`
--

LOCK TABLES `student_registeration` WRITE;
/*!40000 ALTER TABLE `student_registeration` DISABLE KEYS */;
INSERT INTO `student_registeration` VALUES (1,'irfan','Mumtaz','fanta2042@yahoo.com','fanta2042@yahoo.com','12345','2017-10-07 10:11:08','',12334,'female',NULL),(2,'irfan','Mumtaz','adf@gmail.com','fanta2042','12345','2017-10-07 10:39:05','',300,'male',NULL),(3,'haddi','irfan','adf@gmail.com','username','12345','2017-10-07 11:22:46','',1233,'female',NULL),(4,'haddi','irfan','adf@gmail.com','username','12345','2017-10-07 11:23:28','',1233,'female',NULL),(5,'dfa','qw','fanta2042@yahoo.com','fanta2042','12344','2017-11-06 17:25:54','',12334,'male',NULL),(6,'irfan','Mumtaz','fanta2042@yahoo.com','fanta2042','12345','2017-10-07 11:26:41','',0,'male',NULL),(7,'23','23','admin@sd.sdf','23','123456','2017-11-17 20:43:55','',23,'',NULL),(8,'asdf','asdf','a@a.com','asdf','123456','2017-11-17 20:45:57','',2147483647,'','12-12345'),(9,'new student','new student','eami@sdf.sdf','new student','123455','2017-11-20 16:15:19','',23232323,'','12-11223');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (6,'jhon1','12345','2017-11-19 19:56:24'),(7,'jhon','12345','2017-10-21 06:47:18');
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

-- Dump completed on 2017-11-20 22:36:54
