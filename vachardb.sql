-- MySQL dump 10.13  Distrib 5.6.41, for Linux (x86_64)
--
-- Host: localhost    Database: vacharc2_vachardb
-- ------------------------------------------------------
-- Server version	5.6.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_adver_first_page`
--

DROP TABLE IF EXISTS `tbl_adver_first_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_adver_first_page` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` int(2) NOT NULL DEFAULT '1',
  `f6` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_adver_first_page`
--

LOCK TABLES `tbl_adver_first_page` WRITE;
/*!40000 ALTER TABLE `tbl_adver_first_page` DISABLE KEYS */;
INSERT INTO `tbl_adver_first_page` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`) VALUES (1,'در حال بروز رسانی','1398/10/16','','',0,0),(17,'spad','1397/10/2','','',0,4),(19,'smart','1397/10/30','','',1,0),(18,'home2','1397/10/30','','',0,4),(15,'helia','1397/10/2','','',0,3),(16,'home','1397/10/30','','',0,1),(13,'holoo1','1397/10/30','','',0,2);
/*!40000 ALTER TABLE `tbl_adver_first_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_adver_type`
--

DROP TABLE IF EXISTS `tbl_adver_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_adver_type` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f2` int(11) NOT NULL DEFAULT '1',
  `f3` bigint(20) NOT NULL DEFAULT '0',
  `f4` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_adver_type`
--

LOCK TABLES `tbl_adver_type` WRITE;
/*!40000 ALTER TABLE `tbl_adver_type` DISABLE KEYS */;
INSERT INTO `tbl_adver_type` (`auto_id`, `f1`, `f2`, `f3`, `f4`) VALUES (1,'طلایی',60,70000,''),(2,'نقره ای',25,50000,''),(3,'عادی',3,1000,'');
/*!40000 ALTER TABLE `tbl_adver_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_amlak_detail_info`
--

DROP TABLE IF EXISTS `tbl_amlak_detail_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_amlak_detail_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_amlak_detail_info`
--

LOCK TABLES `tbl_amlak_detail_info` WRITE;
/*!40000 ALTER TABLE `tbl_amlak_detail_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_amlak_detail_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_amlak_master_info`
--

DROP TABLE IF EXISTS `tbl_amlak_master_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_amlak_master_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` varchar(10) COLLATE utf8_unicode_ci DEFAULT '',
  `f5` smallint(6) NOT NULL DEFAULT '1',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f7` smallint(6) NOT NULL DEFAULT '1',
  `f8` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `f9` text CHARACTER SET utf8,
  `f10` int(11) NOT NULL DEFAULT '1',
  `f11` int(11) NOT NULL,
  `f12` bigint(20) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_amlak_master_info`
--

LOCK TABLES `tbl_amlak_master_info` WRITE;
/*!40000 ALTER TABLE `tbl_amlak_master_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_amlak_master_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_amlak_pre_need`
--

DROP TABLE IF EXISTS `tbl_amlak_pre_need`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_amlak_pre_need` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f2` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f5` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` smallint(6) NOT NULL DEFAULT '1',
  `f7` int(11) NOT NULL DEFAULT '0',
  `f8` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_amlak_pre_need`
--

LOCK TABLES `tbl_amlak_pre_need` WRITE;
/*!40000 ALTER TABLE `tbl_amlak_pre_need` DISABLE KEYS */;
INSERT INTO `tbl_amlak_pre_need` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`) VALUES (3,'آدرس دقیق','text','','1','',88,0,'0'),(4,'نوع ملک','loockup','','1','',1,0,'0'),(5,'نحوه معامله','loockup','','0','',7,64,'0'),(8,'نحوه معامله','loockup','','0','',18,0,'0'),(13,'مساحت کل','int','','0','مترمربع',3,63,'1'),(14,'زیربنا','int','','1','متر مربع',4,0,'0'),(15,'تراکم','loockup','','1','',6,63,'0'),(16,'کاربری','loockup','','0','',2,0,'0'),(18,'نما','loockup','','1','',9,63,'0'),(19,'سند','loockup','','0','',7,63,'0'),(20,'طبقه/تعداد طبقات','loockup','','1','',11,0,'0'),(21,'سن بنا','loockup','','1','',10,63,'0'),(22,'سیستم نقشه','loockup','','1','',8,63,'0'),(23,'کفش پوش','loockup','','1','',15,0,'0'),(24,'تلفن','boolean','','1','',43,0,'0'),(25,'سرویس آشپزخانه','loockup','','1','',13,0,'0'),(26,'سرویس بهداشتی','loockup','','1','',14,0,'0'),(27,'آشپزخانه اپن','boolean','','1','',39,0,'0'),(28,'پارکینگ','boolean','','1','',51,0,'0'),(29,'انباری','boolean','','1','',52,0,'0'),(30,'شومینه','boolean','','1','',47,0,'0'),(32,'کولر','boolean','','1','',44,0,'0'),(33,'لوستر','boolean','','1','',56,0,'0'),(34,'حیاط','boolean','','1','',50,0,'0'),(35,'حیاط خلوت','boolean','','1','',51,0,'0'),(36,'آب','boolean','','1','',40,0,'0'),(37,'برق','boolean','','1','',41,0,'0'),(38,'گاز','boolean','','1','',42,0,'0'),(39,'شوفاژ','boolean','','1','',46,0,'0'),(40,'چیلر','boolean','','1','',63,0,'0'),(41,'پکیج','boolean','','1','',45,0,'0'),(42,'جکوزی','boolean','','1','',65,0,'0'),(43,'سونا','boolean','','1','',66,0,'0'),(44,'فن کوئل','boolean','','1','',48,0,'0'),(45,'آبگرمکن','boolean','','1','',49,0,'0'),(51,'آیفون تصویری','boolean','','1','',74,0,'0'),(52,'سیستم ایمنی','boolean','','1','',75,0,'0'),(54,'آسانسور','boolean','','1','',77,0,'0'),(55,'سرایداری','boolean','','1','',78,0,'0'),(56,'لابی','boolean','','1','',79,0,'0'),(57,'استخر','boolean','','1','',80,0,'0'),(58,'باربیکیو','boolean','','1','',81,0,'0'),(59,'گچ بری','boolean','','1','',82,0,'0'),(60,'نقاشی','boolean','','1','',83,0,'0'),(61,'شناژ افقی','boolean','','1','',84,0,'0'),(62,'شناژ عمودی','boolean','','1','',85,0,'0'),(63,'سایر توضیحات','text','','1','',89,0,'0'),(64,'تعداد خواب','int','','1','',16,0,'0'),(65,'وضعیت سکونت','loockup','','1','',12,0,'0'),(67,'مبلغ رهن','currency','','0','تومان',30,64,'1'),(68,'مبلغ اجاره','currency','','0','تومان',31,64,'1'),(72,'وضعیت جغرافیایی','loockup','','1','',5,0,'0'),(70,'شماره تلفن','int','','1','',86,0,'0'),(69,'قیمت کل','currency','','0','تومان',22,63,'1'),(71,'شماره همراه','int','','1','',87,0,'0');
/*!40000 ALTER TABLE `tbl_amlak_pre_need` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_amlak_pre_need_loockup`
--

DROP TABLE IF EXISTS `tbl_amlak_pre_need_loockup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_amlak_pre_need_loockup` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=278 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_amlak_pre_need_loockup`
--

LOCK TABLES `tbl_amlak_pre_need_loockup` WRITE;
/*!40000 ALTER TABLE `tbl_amlak_pre_need_loockup` DISABLE KEYS */;
INSERT INTO `tbl_amlak_pre_need_loockup` (`auto_id`, `f1`, `f2`) VALUES (3,4,'منزل ویلایی'),(4,4,'آپارتمان'),(5,4,'ویلا'),(6,4,'باغ'),(7,4,'باغچه'),(8,4,'تالار'),(9,4,'مغازه'),(43,16,'تجاری'),(42,16,'مسکونی'),(12,4,'زمین'),(13,4,'زیر زمین'),(14,4,'پنت هاوس'),(15,4,'سوئیت'),(16,4,'کارخانه'),(17,4,'کارگاه'),(18,4,'سوله'),(19,4,'سایر'),(20,12,'Ø´Ù…Ø§Ù„ÛŒ'),(21,12,'Ø¬Ù†ÙˆØ¨ÛŒ'),(22,12,'Ø´Ø±Ù‚ÛŒ'),(23,12,'ØºØ±Ø¨ÛŒ'),(24,12,'Ø¯Ùˆ Ù†Ø¨Ø´ Ø¬Ù†ÙˆØ¨ÛŒ'),(25,12,'Ø¯ÙˆÙ†Ø¨Ø´ Ø´Ù…Ø§Ù„ÛŒ'),(26,12,'Ø´Ø±Ù‚ÛŒ - ØºØ±Ø¨ÛŒ Ø¯Ùˆ Ú©Ù„Ù‡'),(27,12,'Ø´Ù…Ø§Ù„ÛŒ - Ø¬Ù†ÙˆØ¨ÛŒ Ø¯Ùˆ Ú©Ù„Ù‡'),(28,12,'Ø³Ù‡ Ù†Ø¨Ø´'),(32,15,'10 درصد'),(33,15,'20 درصد'),(34,15,'30 درصد'),(35,15,'40 درصد'),(36,15,'50 درصد'),(37,15,'60 درصد'),(38,15,'70 درصد'),(39,15,'80 درصد'),(40,15,'90 درصد'),(41,15,'100 درصد'),(44,16,'اداری'),(45,16,'تجاری - مسکونی'),(46,16,'تجاری - اداری'),(47,16,'اداری - مسکونی'),(48,16,'تجاری - مسکونی - اداری'),(49,16,'کشاورزی'),(50,16,'صنعتی'),(51,16,'ورزشی'),(52,16,'فرهنگی'),(53,17,'M2'),(54,17,'M3'),(55,17,'M4'),(56,17,'M5'),(57,17,'M6'),(58,17,'M7'),(59,17,'M8'),(60,17,'M9'),(61,17,'M10'),(62,17,'M11'),(63,17,'M12'),(65,18,'سیمان'),(66,18,'سنگ و سفال'),(67,18,'سفال سرامیک'),(68,18,'سفال'),(69,18,'رومی گرانیت'),(70,18,'رومی'),(71,18,'کنیتکس'),(72,18,'سرامیک'),(73,18,'کامپوزیت'),(74,18,'سنگ'),(75,18,'گرانیت'),(76,18,'آجر سه سانت'),(77,18,'ندارد'),(78,19,'سیم سرب ملکی'),(79,19,'اوقافی'),(80,19,'مادر سند کاغذی'),(81,19,'مادر سند سیم سرب'),(82,19,'قولنامه ای'),(83,19,'وکالتی'),(84,19,'مشاع'),(85,19,'سه دانگ'),(86,19,'ششدانگ'),(87,19,'سایر'),(255,20,'زیر زمین'),(256,20,'پیلوت'),(257,20,'همکف'),(258,20,'اول / یک'),(259,20,'دوم / دو'),(260,20,'سوم / سه'),(261,20,'چهارم / چهار'),(262,20,'پنجم  / پنج'),(263,20,'ششم / شش'),(264,20,'هفتم / هفت'),(265,20,'هشتم / هشت'),(266,20,'نهم / نه'),(267,20,'دهم / ده'),(101,21,'قدیمی'),(102,21,'نوساز'),(108,21,'6 سال'),(109,21,'7 سال'),(110,21,'8 سال'),(111,21,'9 سال'),(112,21,'10 سال'),(113,21,'11 سال'),(114,21,'12 سال'),(115,21,'13 سال'),(116,21,'14 سال'),(117,21,'15 سال'),(118,21,'16 سال'),(119,21,'17 سال'),(120,21,'18 سال'),(121,21,'19 سال'),(122,21,'20 سال'),(123,21,'21 سال'),(124,21,'22 سال'),(125,21,'23 سال'),(126,21,'24 سال'),(127,21,'25 سال'),(128,21,'26 سال'),(129,21,'27 سال'),(130,21,'28 سال'),(131,21,'29 سال'),(132,21,'30 سال'),(248,22,'ویلایی'),(249,22,'آپارتمانی'),(250,22,'دوبلکس'),(251,22,'تریبلکس'),(252,22,'نیم دوبلکس'),(253,22,'سوئیت'),(254,22,'سایر'),(166,23,'تک سرام'),(167,23,'سرامیک و موزائیک'),(168,23,'موکت و موزائیک'),(169,23,'موکت و سنگ'),(170,23,'موکت و سرامیک'),(171,23,'موکت'),(172,23,'پارکت'),(173,23,'گرانیت'),(174,23,'سنگ'),(175,23,'سیمان'),(176,23,'موزائیک'),(177,23,'سرامیک'),(180,25,'سایر'),(181,25,'فلزی'),(182,25,'ام دی اف'),(183,25,'ندارد'),(184,26,'ایرانی'),(185,26,'فرنگی'),(186,26,'ایرانی - فرنگی'),(187,65,'مسکونی مالک'),(188,65,'در اجاره'),(189,65,'تخلیه'),(190,8,'فروش'),(193,8,'پیش فروش'),(194,8,'معاوضه'),(195,8,'مشارکت در ساخت'),(197,5,'اجاره'),(198,5,'رهن و اجاره'),(199,5,'رهن کامل'),(200,72,'جنوبی'),(201,72,'شمالی'),(202,72,'شرقی'),(203,72,'غربی'),(204,72,'شمالی - جنوبی'),(205,72,'شرقی - غربی'),(206,16,'ندارد'),(268,20,'یازدهم / یازده'),(269,20,'دوازدهم / دوازده'),(270,20,'سیزدهم / سیزده'),(271,20,'چهاردهم / چهارده'),(272,20,'پانزدهم / پانزده'),(273,20,'شانزدهم  / شانزده'),(274,20,'هفدهم / هفده'),(275,20,'هجدهم / هجده'),(276,20,'نوزدهم / نوزده'),(277,20,'بیستم / بیست به بالا');
/*!40000 ALTER TABLE `tbl_amlak_pre_need_loockup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_basket`
--

DROP TABLE IF EXISTS `tbl_basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_basket` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` bigint(16) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` int(11) NOT NULL DEFAULT '0',
  `f5` smallint(6) NOT NULL DEFAULT '1',
  `f6` text COLLATE utf8_unicode_ci,
  `f7` text CHARACTER SET utf8,
  `f8` bigint(20) NOT NULL DEFAULT '0',
  `f9` int(11) NOT NULL DEFAULT '0',
  `f10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f11` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f12` bigint(16) NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_basket`
--

LOCK TABLES `tbl_basket` WRITE;
/*!40000 ALTER TABLE `tbl_basket` DISABLE KEYS */;
INSERT INTO `tbl_basket` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`) VALUES (1,150140107453,1,1230000,1230000,1,NULL,NULL,300,0,'1',NULL,1501401074),(2,150227174673,3,1170000,1170000,1,NULL,NULL,300,0,'1',NULL,1502271746),(3,150433605126,4,4140000,4140000,1,NULL,NULL,300,0,'1',NULL,1504336051),(5,150563563234,6,6700000,6700000,1,NULL,NULL,300,0,'1',NULL,1505635632),(7,150761317181,3,1170000,1170000,1,NULL,NULL,300,0,'1',NULL,1507613171),(8,150796857219,6,6700000,6700000,1,NULL,NULL,300,0,'1',NULL,1507968572),(9,150796857219,9,5200000,5200000,1,NULL,NULL,500,0,'1',NULL,1507968577),(10,15080584562,9,5200000,5200000,1,NULL,NULL,500,0,'1',NULL,1508058456),(11,15080584562,6,6700000,6700000,1,NULL,NULL,300,0,'1',NULL,1508058462),(12,151342601944,2,2250000,2250000,1,NULL,NULL,300,0,'1',NULL,1513426019),(13,151376946613,7,6950000,6950000,1,NULL,NULL,300,0,'1',NULL,1513769466),(14,151376946613,3,1170000,1170000,1,NULL,NULL,300,0,'1',NULL,1513769466),(15,151376946613,9,5200000,5200000,1,NULL,NULL,500,0,'1',NULL,1513769466),(16,151376946613,8,2950000,2950000,1,NULL,NULL,500,0,'1',NULL,1513769466),(17,151376946613,4,4140000,4140000,1,NULL,NULL,300,0,'1',NULL,1513769466),(18,151376946613,10,6300000,6300000,1,NULL,NULL,500,0,'1',NULL,1513769467),(19,151376946613,1,1230000,1230000,1,NULL,NULL,300,0,'1',NULL,1513769467),(20,151376946613,5,2150000,2150000,1,NULL,NULL,300,0,'1',NULL,1513769467),(21,151376946613,2,2250000,2250000,1,NULL,NULL,300,0,'1',NULL,1513769467),(22,151376946613,6,6700000,6700000,1,NULL,NULL,300,0,'1',NULL,1513769467),(23,151428014112,10,6300000,6300000,1,NULL,NULL,500,0,'1',NULL,1514280141),(24,151521152170,7,6950000,6950000,1,NULL,NULL,300,0,'1',NULL,1515211521),(25,151772935599,6,6700000,6700000,1,NULL,NULL,300,0,'1',NULL,1517729355),(26,151772935599,4,4140000,4140000,1,NULL,NULL,300,0,'1',NULL,1517729364),(27,151774113390,3,1170000,1170000,1,NULL,NULL,300,0,'1',NULL,1517741133),(28,151774113390,7,6950000,6950000,1,NULL,NULL,300,0,'1',NULL,1517741155),(29,151842791268,1,1230000,1230000,1,NULL,NULL,300,0,'1',NULL,1518427912),(30,15200621164,5,2150000,2150000,1,NULL,NULL,300,0,'1',NULL,1520062116),(31,152333632319,4,4140000,4140000,1,NULL,NULL,300,0,'1',NULL,1523336323),(32,152873353512,8,2950000,2950000,1,NULL,NULL,500,0,'1',NULL,1528733535),(34,153354884140,7,6950000,6950000,1,NULL,NULL,300,0,'1',NULL,1533548841),(35,153556462158,9,5200000,5200000,1,NULL,NULL,500,0,'1',NULL,1535564621),(36,153599120415,2,10000000,10000000,1,NULL,NULL,300,129492,'3',NULL,1535991204),(37,15389555065,9,13000000,13000000,1,NULL,NULL,500,0,'1',NULL,1538955506),(39,154287258160,17,14270000,14270000,1,NULL,NULL,300,0,'2',NULL,1542872581),(45,154515364059,18,5500000,5500000,1,NULL,NULL,300,0,'1',NULL,1545153641),(44,154515364059,23,13500000,13500000,1,NULL,NULL,300,0,'1',NULL,1545153640),(46,154515364059,34,9500000,9500000,1,NULL,NULL,300,0,'1',NULL,1545153643),(47,154515364059,46,6690000,6690000,1,NULL,NULL,300,0,'1',NULL,1545153645),(48,154515364059,38,1090000,1090000,1,NULL,NULL,300,0,'1',NULL,1545153645),(49,154515364059,4,7570000,7570000,1,NULL,NULL,300,0,'1',NULL,1545153646),(50,154515364059,43,2690000,2690000,1,NULL,NULL,300,0,'1',NULL,1545153648),(51,154521928373,27,8500000,8500000,1,NULL,NULL,300,0,'1',NULL,1545219283),(52,154572031636,9,13670000,0,1,NULL,NULL,300,0,'2',NULL,1545720316),(53,154617313568,10,9170000,9170000,1,NULL,NULL,300,0,'1',NULL,1546173136),(54,154617316264,10,9170000,9170000,1,NULL,NULL,300,0,'1',NULL,1546173162),(55,154617340646,3,5070000,5070000,1,NULL,NULL,300,0,'1',NULL,1546173406),(56,154617340646,5,13170000,13170000,1,NULL,NULL,300,0,'1',NULL,1546173415),(57,154617669823,1,1670000,1670000,1,NULL,NULL,300,0,'1',NULL,1546176698),(62,15462610565,1,1670000,1670000,1,NULL,NULL,300,0,'1',NULL,1546261246),(61,15462610565,7,6670000,6670000,1,NULL,NULL,300,0,'1',NULL,1546261245),(63,15462610565,3,5070000,5070000,1,NULL,NULL,300,0,'1',NULL,1546261250),(64,15462610565,6,3970000,3970000,1,NULL,NULL,300,0,'1',NULL,1546261398),(65,15462610565,2,2470000,2470000,1,NULL,NULL,300,0,'1',NULL,1546261508),(72,154705751092,4,7570000,7570000,1,NULL,NULL,300,0,'1',NULL,1547057510),(73,154705751092,10,9170000,9170000,1,NULL,NULL,300,0,'1',NULL,1547057520),(74,154804220763,36,18000000,18000000,1,NULL,NULL,300,0,'1',NULL,1548042207),(75,154804220763,11,11870000,11870000,1,NULL,NULL,300,0,'1',NULL,1548042210),(76,154804220763,17,14270000,14270000,1,NULL,NULL,300,0,'1',NULL,1548042287),(77,154804230512,4,7570000,7570000,1,NULL,NULL,300,0,'1',NULL,1548042305),(78,154804230512,38,1090000,1090000,1,NULL,NULL,300,0,'1',NULL,1548042379),(81,1556548910100,3,5070000,5070000,1,NULL,NULL,300,0,'1',NULL,1556548910),(85,156068542398,49,1160000,1160000,1,NULL,NULL,0,0,'0',NULL,1560685423),(86,156241537768,48,580000,580000,1,NULL,NULL,300,0,'1',NULL,1562415377),(87,156473621798,7,7970000,7970000,1,NULL,NULL,300,0,'2',NULL,1564736217),(88,156905543935,7,7970000,7970000,1,NULL,NULL,300,0,'1',NULL,1569055439),(89,157457748095,15,8970000,8970000,1,NULL,NULL,300,0,'1',NULL,1574577480),(90,157828940377,11,16670000,16670000,1,NULL,NULL,300,0,'1',NULL,1578289403),(91,15783219696,8,10870000,10870000,1,NULL,NULL,300,0,'1',NULL,1578321969),(92,158089441710,49,4580000,4580000,1,NULL,NULL,0,0,'0',NULL,1580894417),(93,158089441710,1,2170000,2170000,1,NULL,NULL,300,0,'1',NULL,1580894455),(95,158090250367,1,2170000,2170000,1,NULL,NULL,300,0,'1',NULL,1580902560),(96,158090272659,49,4580000,4580000,1,NULL,NULL,0,0,'0',NULL,1580902726),(97,158097105724,1,2170000,2170000,1,NULL,NULL,300,0,'1',NULL,1580971057),(98,158122872944,48,580000,580000,1,NULL,NULL,300,0,'1',NULL,1581228729),(99,158133689341,15,8970000,8970000,1,NULL,NULL,300,0,'1',NULL,1581336893),(100,158246347672,12,19970000,19970000,1,NULL,NULL,300,0,'1',NULL,1582463476),(101,158255836819,8,10870000,10870000,1,NULL,NULL,300,0,'1',NULL,1582558368);
/*!40000 ALTER TABLE `tbl_basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_brands_temp`
--

DROP TABLE IF EXISTS `tbl_brands_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_brands_temp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `F4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_brands_temp`
--

LOCK TABLES `tbl_brands_temp` WRITE;
/*!40000 ALTER TABLE `tbl_brands_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_brands_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_car_detail_info`
--

DROP TABLE IF EXISTS `tbl_car_detail_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_car_detail_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_car_detail_info`
--

LOCK TABLES `tbl_car_detail_info` WRITE;
/*!40000 ALTER TABLE `tbl_car_detail_info` DISABLE KEYS */;
INSERT INTO `tbl_car_detail_info` (`auto_id`, `f1`, `f2`, `f3`) VALUES (1,1,19,'دایهاتسو'),(2,1,20,'هلند'),(3,1,18,'دوگانه سوز دستی'),(4,1,22,'دنده ای'),(6,1,24,'کاپوت تعویض'),(7,1,25,'ماتیکی'),(8,1,30,'12'),(9,1,27,'ملی'),(10,1,31,'6'),(11,1,26,'زرد');
/*!40000 ALTER TABLE `tbl_car_detail_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_car_master_info`
--

DROP TABLE IF EXISTS `tbl_car_master_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_car_master_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` varchar(10) COLLATE utf8_unicode_ci DEFAULT '',
  `f5` smallint(6) NOT NULL DEFAULT '1',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f7` smallint(6) NOT NULL DEFAULT '1',
  `f8` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `f9` text CHARACTER SET utf8,
  `f10` int(11) NOT NULL DEFAULT '1',
  `f11` bigint(20) NOT NULL,
  `f12` int(11) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_car_master_info`
--

LOCK TABLES `tbl_car_master_info` WRITE;
/*!40000 ALTER TABLE `tbl_car_master_info` DISABLE KEYS */;
INSERT INTO `tbl_car_master_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`) VALUES (1,250,1,128,'1398/10/16',1,'1',188,'0','',1,1578317888,1);
/*!40000 ALTER TABLE `tbl_car_master_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_car_pre_need`
--

DROP TABLE IF EXISTS `tbl_car_pre_need`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_car_pre_need` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f2` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f5` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` smallint(6) NOT NULL DEFAULT '1',
  `f7` int(11) NOT NULL DEFAULT '0',
  `f8` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_car_pre_need`
--

LOCK TABLES `tbl_car_pre_need` WRITE;
/*!40000 ALTER TABLE `tbl_car_pre_need` DISABLE KEYS */;
INSERT INTO `tbl_car_pre_need` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`) VALUES (17,'سال ساخت','int','13','0','',2,0,'1'),(16,'مدل','string','','0','',1,0,'1'),(18,'نوع سوخت','loockup','','1','',4,0,'0'),(19,'برند','loockup','','1','',0,0,'1'),(20,'کشور سازنده','loockup','','0','',3,0,'0'),(21,'کارکرد','int','','1','کیلومتر',6,0,'0'),(22,'گیربکس','loockup','','1','',7,0,'0'),(23,'قیمت','currency','','0','تومان',8,0,'1'),(24,'وضعیت بدنه','loockup','','1','',10,0,'0'),(25,'رنگ بدنه','loockup','','1','',12,0,'0'),(26,'رنگ داخل','loockup','','1','',13,0,'0'),(27,'نوع پلاک','loockup','','1','',11,0,'0'),(28,'شرایط فروش','text','','1','',18,0,'0'),(29,'توضیحات','text','','1','',19,0,'0'),(30,'بیمه شخص ثالث','loockup','','1','ماه',14,0,'0'),(31,'بیمه بدنه','loockup','','1','ماه',15,0,'0'),(32,'تلفن همراه','int','','1','',17,0,'0'),(34,'تلفن ثابت','int','','1','',16,0,'0');
/*!40000 ALTER TABLE `tbl_car_pre_need` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_car_pre_need_loockup`
--

DROP TABLE IF EXISTS `tbl_car_pre_need_loockup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_car_pre_need_loockup` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=827 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_car_pre_need_loockup`
--

LOCK TABLES `tbl_car_pre_need_loockup` WRITE;
/*!40000 ALTER TABLE `tbl_car_pre_need_loockup` DISABLE KEYS */;
INSERT INTO `tbl_car_pre_need_loockup` (`auto_id`, `f1`, `f2`) VALUES (730,19,'هیوندای'),(731,19,'هیلمن'),(574,20,'سایر'),(575,20,'ویتنام'),(576,20,'ونزوئلا'),(577,20,'هندوستان'),(578,20,'هلند'),(579,20,'نیجریه'),(580,20,'مکزیک'),(581,20,'مصر'),(582,20,'مراکش'),(583,20,'مجارستان'),(584,20,'مالزی'),(585,20,'لهستان'),(586,20,'کنیا'),(587,20,'کلمبیا'),(588,20,'کره جنوبی'),(589,20,'کانادا'),(590,20,'فیلیپین'),(591,20,'فنلاند'),(592,20,'فرانسه'),(593,20,'صربستان'),(594,20,'شیلی'),(595,20,'سوئد'),(596,20,'ژاپن'),(597,20,'زیمباوه'),(598,20,'رومانی'),(599,20,'روسیه'),(600,20,'چین'),(601,20,'جمهوری چک'),(602,20,'ترکیه'),(603,20,'تایوان'),(604,20,'تایلند'),(605,20,'پرتغال'),(606,20,'پاکستان'),(607,20,'بلژیک'),(608,20,'بلاروس'),(609,20,'برزیل'),(610,20,'ایران'),(611,20,'ایتالیا'),(612,20,'انگلستان'),(613,20,'اندونزی'),(614,20,'آمریکا'),(615,20,'آلمان'),(616,20,'اکوادور'),(617,20,'اکراین'),(618,20,'آفریقای جنوبی'),(619,20,'اسلوونی'),(620,20,'اسلوواکی'),(621,20,'استرالیا'),(622,20,'اسپانیا'),(623,20,'ازبکستان'),(624,20,'آرژانتین'),(625,20,'اتریش'),(626,20,'سایر کشورها'),(685,25,'آبی'),(686,25,'سایر'),(726,26,'اخرائی'),(727,26,'آلبالوئی'),(728,26,'آبی'),(729,26,'سایر'),(783,19,'دوو'),(784,19,'دوج'),(785,19,'دنا'),(786,19,'الدزمبیل'),(787,19,'دایهاتسو'),(788,19,'داتسون'),(789,19,'چری'),(790,19,'چانگان'),(791,19,'جیلی'),(792,19,'جیپ'),(793,19,'جگوار'),(794,19,'جک'),(795,19,'جان وی'),(796,19,'تیبا'),(797,19,'تویوتا'),(798,19,'تریموف'),(799,19,'تیوولیت'),(800,19,'پیکان'),(801,19,'پونتیاک'),(802,19,'پورشه'),(803,19,'پلیموت'),(804,19,'پژو'),(805,19,'پروتون'),(806,19,'پراید'),(807,19,'پاژن'),(808,19,'بوگاتی'),(809,19,'بنز'),(810,19,'بنتلی'),(811,19,'بسترن'),(812,19,'برلیانس'),(364,18,'بنزین'),(365,18,'دوگانه سوز کارخانه'),(564,18,'دوگانه سوز دستی'),(732,19,'هوندا'),(733,19,'هولدن'),(734,19,'هامر'),(735,19,'ون'),(736,19,'ولوو'),(737,19,'وست فیلد'),(738,19,'وانت'),(739,19,'واکس هال'),(740,19,'نیسان'),(741,19,'مینی ماینر'),(742,19,'میتسوبیشی'),(743,19,'مورگان'),(744,19,'مک لارن'),(745,19,'مزدا'),(746,19,'مرکوری'),(747,19,'مازراتی'),(748,19,'لینکلن'),(749,19,'لیفان'),(750,19,'لوبو'),(751,19,'لندمارک'),(752,19,'لندرور'),(753,19,'لکسوس'),(754,19,'لانچیا'),(755,19,'لامبورگینی'),(756,19,'لادا'),(757,19,'گگ گونو'),(758,19,'گریت وال'),(759,19,'کیا'),(760,19,'کرایسلر'),(761,19,'کادیلاک'),(762,19,'کاپرا'),(763,19,'فیات'),(764,19,'فولکس'),(765,19,'فورد'),(766,19,'فراری'),(767,19,'شورلت'),(768,19,'سیناد'),(769,19,'سیمرغ'),(770,19,'سیتروئن'),(771,19,'سه آت'),(772,19,'سوزوکی'),(773,19,'سوبارو'),(774,19,'سمند'),(775,19,'سانگ یانگ'),(776,19,'ساب'),(777,19,'زوتی'),(778,19,'روور'),(779,19,'رولز رویس'),(780,19,'رنو'),(781,19,'رانا'),(782,19,'رامبلر'),(421,22,'دنده ای'),(422,22,'اتوماتیک'),(627,24,'اوراقی'),(628,24,'اتاق تعویض'),(629,24,'تصادفی'),(630,24,'کامل رنگ'),(631,24,'دور رنگ'),(632,24,'کاپوت تعویض'),(633,24,'کاپوت رنگ'),(634,24,'گلگیر تعویض'),(635,24,'گلگیر رنگ'),(636,24,'چند لکه رنگ'),(637,24,'دو لکه رنگ'),(638,24,'یک لکه رنگ'),(639,24,'بدون رنگ'),(684,25,'آلبالوئی'),(640,25,'قهوه ای شکلاتی'),(641,25,'آبی کبود'),(642,25,'ماتیکی'),(643,25,'کاربنی'),(644,25,'دودی متالیک'),(645,25,'یشمی'),(646,25,'یاسی'),(647,25,'کرم'),(648,25,'کربن بلک'),(649,25,'نوک مدادی'),(650,25,'نقره ای'),(651,25,'نقرآبی'),(652,25,'نارنجی'),(653,25,'موکا'),(654,25,'مشکی'),(655,25,'مسی'),(656,25,'مارون'),(657,25,'گیلاسی'),(658,25,'قهوه ای'),(659,25,'قرمز'),(660,25,'عنابی'),(661,25,'عدسی'),(662,25,'طوسی'),(663,25,'طلایی'),(664,25,'صورتی'),(665,25,'شتری'),(666,25,'سفید صدفی'),(667,25,'سفید یخچالی'),(668,25,'سفید'),(669,25,'سرمه ای'),(670,25,'سربی'),(671,25,'سبز'),(672,25,'زیتونی'),(673,25,'زرشکی'),(674,25,'زرد'),(675,25,'دلفینی'),(676,25,'خاکستری'),(687,26,'یشمی'),(688,26,'یاسی'),(689,26,'کرم'),(690,26,'کربن بلک'),(691,26,'نوک مدادی'),(692,26,'نقره ای'),(693,26,'نقرآبی'),(694,26,'نارنجی'),(695,26,'موکا'),(696,26,'مشکی'),(697,26,'مسی'),(698,26,'مارون'),(699,26,'گیلاسی'),(700,26,'قهوه ای'),(701,26,'قرمز'),(702,26,'عنابی'),(703,26,'عدسی'),(704,26,'طوسی'),(705,26,'طلایی'),(706,26,'صورتی'),(707,26,'شتری'),(708,26,'سفید صدفی'),(709,26,'سفید یخچالی'),(710,26,'سفید'),(711,26,'سرمه ای'),(712,26,'سربی'),(713,26,'سبز'),(714,26,'زیتونی'),(715,26,'زرشکی'),(716,26,'زرد'),(717,26,'دلفینی'),(718,26,'خاکی'),(719,26,'خاکستری'),(720,26,'پوست پیازی'),(721,26,'بنفش'),(722,26,'بژ'),(723,26,'برنزی'),(724,26,'بادمجانی'),(725,26,'اطلسی'),(519,27,'ملی'),(520,27,'منطقه آزاد'),(521,27,'گذر موقت'),(522,27,'سایر'),(536,30,'1'),(537,30,'2'),(538,30,'3'),(539,30,'4'),(540,30,'5'),(541,30,'6'),(542,30,'7'),(543,30,'8'),(544,30,'9'),(545,30,'10'),(546,30,'11'),(547,30,'12'),(548,30,'ندارد'),(549,31,'1'),(550,31,'2'),(551,31,'3'),(552,31,'4'),(553,31,'5'),(554,31,'6'),(555,31,'7'),(556,31,'8'),(557,31,'9'),(558,31,'10'),(559,31,'11'),(560,31,'12'),(561,31,'ندارد'),(562,33,'ØªÙˆØ§ÙÙ‚ÛŒ'),(563,33,'Ú©Ø§Ø±Ø´Ù†Ø§Ø³ÛŒ'),(565,18,'گازوئیل'),(566,18,'یورو4'),(567,18,'هیربید'),(677,25,'پوست پیازی'),(678,25,'بنفش'),(679,25,'بژ'),(680,25,'برنزی'),(681,25,'بادمجانی'),(682,25,'اطلسی'),(683,25,'اخرائی'),(813,19,'بایک'),(814,19,'ب ام دبلیو'),(815,19,'اینفینیتی'),(816,19,'اینترنشنال'),(817,19,'ایسوزو'),(818,19,'ام وی ام'),(819,19,'ام جی'),(820,19,'اسمارت'),(821,19,'استین'),(822,19,'اپل'),(823,19,'آئودی'),(824,19,'آلفارومئو'),(825,19,'آریا'),(826,19,'سایر');
/*!40000 ALTER TABLE `tbl_car_pre_need_loockup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contactus`
--

DROP TABLE IF EXISTS `tbl_contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contactus` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'code',
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` varchar(1) CHARACTER SET utf8 DEFAULT '0',
  `f9` varchar(1) CHARACTER SET utf8 DEFAULT '0',
  `f10` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `f11` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contactus`
--

LOCK TABLES `tbl_contactus` WRITE;
/*!40000 ALTER TABLE `tbl_contactus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_customer_type`
--

DROP TABLE IF EXISTS `tbl_customer_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_customer_type` (
  `auto_id` int(5) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f2` text COLLATE utf8_unicode_ci,
  `f3` decimal(10,0) DEFAULT NULL,
  `f4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_customer_type`
--

LOCK TABLES `tbl_customer_type` WRITE;
/*!40000 ALTER TABLE `tbl_customer_type` DISABLE KEYS */;
INSERT INTO `tbl_customer_type` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`) VALUES (1,'کاربر عادی','',0,'','','','','',''),(2,'پرسنل شرکت','',20,'','','','','','');
/*!40000 ALTER TABLE `tbl_customer_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_favicon`
--

DROP TABLE IF EXISTS `tbl_favicon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_favicon` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f2` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f3` smallint(6) NOT NULL DEFAULT '1',
  `f4` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(10) COLLATE utf8_unicode_ci DEFAULT '_self',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_favicon`
--

LOCK TABLES `tbl_favicon` WRITE;
/*!40000 ALTER TABLE `tbl_favicon` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_favicon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_help_koli`
--

DROP TABLE IF EXISTS `tbl_help_koli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_help_koli` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f2` text CHARACTER SET utf8,
  `f3` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `f4` text CHARACTER SET utf8 NOT NULL,
  `f5` smallint(6) NOT NULL DEFAULT '1',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_help_koli`
--

LOCK TABLES `tbl_help_koli` WRITE;
/*!40000 ALTER TABLE `tbl_help_koli` DISABLE KEYS */;
INSERT INTO `tbl_help_koli` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`) VALUES (8,'قوانین عمومی','<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>1- عضویت در آرکا کاملاً رایگان می باشد و هر\r\nشخص حقیقی که به سن 18 سال تمام رسیده‌ باشد می‌تواند به عضویت آرکا درآید.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">2- اشخاص حقوقی در صورتیکه دارای مجوز معتبر از\r\nمراجع ذیصلاح باشند، اجازه عضویت در فروشگاه را دارند و می‌توانند بعنوان خریدار و\r\nیا فروشنده از خدمات ارائه شده استفاده نمایند.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">3- آغاز عضويت و شروع استفاده شما از این وب‌\r\nسایت، به منزله موافقت شما با قوانین اعلام ‌شده برای استفاده از آن می</span><span dir=\"LTR\"></span><span dir=\"LTR\"></span><span lang=\"FA\" dir=\"LTR\" style=\"font-family:\r\nw_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"LTR\"></span><span dir=\"LTR\"></span>\r\n</span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\">باشد\r\nو تماما لازم الاجرا هستند.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">4- به منظور تسریع در امر عضویت آرکا پست\r\nالکترونیک و شماره تلفن همراه کاربران را به ترتیب بعنوان نام کاربری و کلمه ی\r\nعبور قرار می‌دهد که کاربران می توانند پس از عضویت جهت جلوگیری از سوء استفاده‌های\r\nاحتمالی نسبت به تغییر کلمه ی عبور خود اقدام نمایند.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">5- دسترسی به مجموعه فروشگاههای اینترنتی آرکا\r\nفقط از طریق </span><span dir=\"LTR\" style=\"font-family:w_Nazanin;mso-hansi-font-family:\r\nw_Nazanin\">arkaengineering.ir</span><span dir=\"RTL\"></span><span dir=\"RTL\"></span><span style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span> <span lang=\"FA\">امکان پذیر می‌باشد و هرگونه آدرس و یا نام‌های\r\nمشابه با این آدرس‌‌ها هیچگونه ارتباطی با آرکا نداشته و ندارند و در صورت اشتباه\r\nکاربر، فروشگاه هیچگونه مسئولیتی در این خصوص نخواهد داشت.<o:p></o:p></span></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">6- کلیه حقوق مادی، علمی و معنوی این وب سایت\r\nمتعلق به آرکا می‌باشد.</span><span dir=\"LTR\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>7- آرکا ممکن است برای برخی از خدمات خود\r\nهزینه‌هایی را از کاربران اخذ نماید که این هزینه‌ها در قسمت‌های مربوطه لحاظ شده‌اند.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">8- آرکا این حق را برای خود محفوظ می‌داند تا به\r\nکاربرانی که به هر دلیلی مورد تایید نیستند خدماتی ارائه ندهد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">9- نشانی کاربران و اطلاعات تماس ایشان، همان\r\nاست که در پنل کاربری خود در هنگام عضویت ثبت نموده اند که در صورت تغییر، می‌بایست\r\nاطلاعات خود را بروز نمایند، در غیر اینصورت تبعات ناشی از عدم درج اطلاعات صحیح\r\nبعهده خود کاربر خواهد بود.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">10- کلیه‌ی مکاتباتی که فروشگاه با کاربران از\r\nطریق پست الکترونیکی ایشان و یا شماره تلفن همراه وی انجام می‌‌دهد، ابلاغ شده\r\nتلقی می‌گردد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">11- کاربران می‌توانند جهت ارتباط با مسئولین\r\nفروشگاه از طریق منوی \"ارتباط با ما\" مکاتبه نمایند.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">12- آرکا حق دارد در هر زمان که بخواهد در متن\r\nاین قوانین تغییرات کلی و یا جزئی ایجاد کند و پس از آن ، تغییرات جدید نسبت به\r\nهمه‌ی کاربران موثر خواهد بود. در صورتیکه در متن قوانین تغییرات اساسی ایجاد گردد\r\nبه نحوی که برای اعمال مقررات جدید نیاز به موافقت دوباره اعضاء باشد این تغییرات\r\nبه اطلاع کاربران خواهد رسید تا در صورت مخالفت با آن درخواست لغو عضویت خود را\r\nاعلام نمایند. در غیر اینصورت تمامی پیامدهای احتمالی آن بر عهده کاربر خواهد بود.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">13- آرکا اطلاعات کاربران را اجاره نمی‌دهد، نمی‌فروشد\r\nو به اشتراک نمی‌گذارد به جز در موارد ذیل:<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">الف) جهت ارائه به موسسات حمل و نقل و هماهنگی\r\nدر خصوص ارسال و تحویل کالا و خدمات فروشگاه؛</span><span dir=\"LTR\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">ب) در صورت تخطی کاربر از قوانین و در صورت وجود\r\nشاکی خصوصی نسبت به عملکرد کاربر، اطلاعات وی در اختیار مراجع قانونی قرار می‌گیرد.</span><span dir=\"LTR\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">ج) در صورتی که مراجع قضایی اطلاعات کاربر را </span><span lang=\"FA\" style=\"font-family:\" sakkal=\"\" majalla\"\"=\"\">–</span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"> به هر دلیلی </span><span lang=\"FA\" style=\"font-family:\" sakkal=\"\" majalla\"\"=\"\">–</span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"> از فروشگاه\r\nبخواهند این اطلاعات در اختیار ایشان قرار می‌گیرد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">14- جهت حفظ حریم اطلاعات شخصی کاربران، کاربر\r\nمتعهد است تا عامل تلاش جهت هک کردن هر گونه اطلاعات موجود در سایت نبوده و هیچ‌گونه\r\nمعاونت و یا مشارکتی با اشخاص حقیقی و یا حقوقی در این امر نداشته باشد؛ و در صورت\r\nمشاهده هر گونه توسل به هک کردن اطلاعات توسط شخص و یا موسسه‌ی دیگر را در اسرع\r\nوقت به مدیر سایت اطلاع دهد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">15- چنانچه در نتیجه نقض این قوانین ضرر و زیانی\r\nاز سوی هر کاربری ، به آرکا، سایر کاربران و یا اشخاص ثالث وارد شود، مسئولیت\r\nجبران خسارت با کاربر خاطی خواهد بود.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">16- تمامی قوانین و مقررات فروشگاه در شرایط\r\nغیرقابل کنترل مانند: زلزله، سیل، آتش سوزی و ... تا برقرای شرایط عادی کان لم یکن\r\nتلقی می‌گردد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">17- در صورتیکه سایت به دلایلی که خارج از عهده‌ی\r\nمسئولین آرکا باشد غیرفعال شد، کاربران حق اعتراض و اقامه دعوی در این خصوص را از\r\nخود سلب می‌نمایند.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">18- با توجه به اینکه نام کابری هر کاربر پست\r\nالکترونیک او می‌باشد، بنابراین پست الکترونیکی وارد شده می‌بایست منحصر به فرد\r\nبوده و نباید شامل اسامی خاص یا برندهای تجاری و یا نام‌ها و عناوین غیراخلاقی\r\nباشد. در صورت مشاهده موارد مغایر با قوانین و مقررات درج شده، آرکا حساب کاربری\r\nمربوطه را مسدود خواهد نمود و کاربر دیگر حق ثبت نام مجدد را نخواهد داشت.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">19- ایجاد حساب کاربری شبیه نام کاربری مدیران\r\nسایت و یا استفاده از آواتار و یا اطلاعات آنها ممنوع است و در صورت مشاهده دسترسی\r\nکاربر بدون اخطار قبلی بسته خواهد شد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">20- قرار دادن تصاویرغیراخلاقی، دارای پوشش\r\nنامناسب، مستهجن، تصاویر موهن سیاسی و مذهبی و دلخراش درعکس پروفایل ممنوع است. در\r\nصورت مشاهده حساب کاربری فرد خاطی مسدود خواهد شد.</span><span dir=\"LTR\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>21- در صورت فراموشی نام کاربری و یا کلمه ی\r\nعبور، بازیابی اطلاعات فوق صرفاً از طریق ایمیل امکان پذیر خواهد بود.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">22- کاربران حق ارائه اطلاعات کاربری خود را به\r\nسایرین ندارند و مسئولیت حفظ نام کاربری و کلمه‌ی عبور بعهده‌ی کاربر می‌باشد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">23- کلیه‌ی کاربران موظفند اطلاعات خواسته شده\r\nدر فرم های مربوطه را به صورت صحیح وارد نماید. در صورت ورود اطلاعات ناقص یا\r\nنادرست، مسئولیت عواقب بعدی این عمل به عهده‌ی کاربر می‌باشد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">24- آرکا مجاز است جهت تایید هویت کاربران خویش\r\nاطلاعات مربوطه را مورد بررسی قرار دهد و در صورت لزوم تحقیق بعمل آورد.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">25- فقط اشخاصی حق فروش کالا در آرکا را دارند\r\nکه تأییدیه و مجوز لازم را از آرکا دریافت کرده باشند.</span><span dir=\"LTR\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>26- آرکا جهت حفظ امنیت اطلاعات کاربران،\r\nدامنه و زیردامنه‌های خود را امن نموده، به نوعی که در صورت دسترسی ناخواسته و\r\nغیرمجاز، این اطلاعات قابل استفاده نباشند. ولیکن متاسفانه با وجود فناوری فوق و\r\nادوات امنیتی نمی‌توان امنیت هیچ مخابره داده‌ای از طریق اینترنت را به صورت 100\r\nدرصد تضمین کرد. بنابراین ما نمی‌توانیم این اطمینان را بصورت قطعی بدهیم که\r\nاطلاعاتی که برای ما فرستاده‌اید در حین ارسال (مخابره) در هر شرایطی در امان\r\nخواهد بود. و علاوه بر آن نمی‌توانیم مسئولیت اتفاقات ناشی از دسترسی غیرقانونی به\r\nاطلاعات شخصی شما را قبول کنیم.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">27- آرکا و هیچ یک از ارگان‏های اصلی یا فرعی آن\r\nبه هیچ وجهی مسئول خسارات اتفاقی غیرقابل ‌پیش‌بینی، تبعی و عدم‌النفع در قبال\r\nکاربران نیست. مسئولیت آرکا، و کارکنان آن محدود به خسارات مستقیم و بلاواسطه‌ای\r\nاست که با اثبات تقصیر سایت به کاربران یا اشخاص ثالث وارد شده است. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;\r\nmso-hansi-font-family:w_Nazanin\">28- عدم تعقیب یا چشم‌پوشی سایت از نقض برخی\r\nتعهدات توسط کاربران به معنای اسقاط حق رسیدگی و تعقیب این تخلفات نیست و در آینده\r\nمی‌توان این تخلفات را تحت تعقیب قانونی قرار داد. بنابراین، طرح ادعای مرور زمان\r\nاز سوی كاربر یا کاربران به هیچ وجه قابل قبول نخواهد بود.</span><span dir=\"LTR\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>29- فروشگاه اینترنتی آرکا، طبق قوانین جهوری\r\nاسلامی ایران، قوانین جرائم اینترنتی و مجموعه‌ی قوانین و مقررات تجارت الکترونیکی\r\nفعالیت می‌نماید و کلیه‌ی کاربران موظفند از درج هرگونه مطالب سیاسی و یا مغایر با\r\nشئونات اخلاقی و مذهبی جمهوری اسلامی ایران خودداری نمایند. در صورت اثبات این\r\nامر، شناسه‌ی کاربری این افراد لغو شده و تبعات این موضوع نیز بر عهده‌ی خود ایشان\r\nخواهد بود.<o:p></o:p></span></p><p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;text-justify:kashida;\r\ntext-kashida:0%;line-height:150%\"><span lang=\"FA\" style=\"font-family:w_Nazanin;mso-hansi-font-family:w_Nazanin\">30- به دلیل نرم افزاری بودن کالاها ، امکان بازگرداندن کالا وجود ندارد.</span></p>','','',0,'1');
/*!40000 ALTER TABLE `tbl_help_koli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_honor`
--

DROP TABLE IF EXISTS `tbl_honor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_honor` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_honor`
--

LOCK TABLES `tbl_honor` WRITE;
/*!40000 ALTER TABLE `tbl_honor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_honor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_inbox`
--

DROP TABLE IF EXISTS `tbl_inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_inbox` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'code',
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` text CHARACTER SET utf8 NOT NULL,
  `f5` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` varchar(1) CHARACTER SET utf8 DEFAULT '0',
  `f8` varchar(1) CHARACTER SET utf8 DEFAULT '0',
  `f9` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f10` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inbox`
--

LOCK TABLES `tbl_inbox` WRITE;
/*!40000 ALTER TABLE `tbl_inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_index_info`
--

DROP TABLE IF EXISTS `tbl_index_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_index_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f10` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f11` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f12` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f14` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f15` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `f16` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `f17` int(3) NOT NULL DEFAULT '0',
  `f18` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f19` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f20` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_index_info`
--

LOCK TABLES `tbl_index_info` WRITE;
/*!40000 ALTER TABLE `tbl_index_info` DISABLE KEYS */;
INSERT INTO `tbl_index_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`) VALUES (1,'header.php','menu.php','0','slider.php','item_groups.php','off_items.php','new_items.php','more_visited_itmes.php','0','0','0','0','0','footer.php','ØªÙ†Ø¸Ù…Ø§Øª Ø´Ù…Ø§Ø±Ù‡ ÛŒÚ©','aseman_banner.jpg',10,'0','2','1');
/*!40000 ALTER TABLE `tbl_index_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_cust_des`
--

DROP TABLE IF EXISTS `tbl_item_cust_des`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_cust_des` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) DEFAULT NULL,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` int(11) NOT NULL DEFAULT '0',
  `f7` int(11) NOT NULL DEFAULT '0',
  `f8` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `f9` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `f10` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `f11` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_cust_des`
--

LOCK TABLES `tbl_item_cust_des` WRITE;
/*!40000 ALTER TABLE `tbl_item_cust_des` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_item_cust_des` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_group`
--

DROP TABLE IF EXISTS `tbl_item_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_group` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` smallint(6) NOT NULL DEFAULT '1',
  `F4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_group`
--

LOCK TABLES `tbl_item_group` WRITE;
/*!40000 ALTER TABLE `tbl_item_group` DISABLE KEYS */;
INSERT INTO `tbl_item_group` (`auto_id`, `f1`, `f2`, `f3`, `F4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`) VALUES (1,'هلو','',0,'','','','','','',1),(5,'دوره های آموزشی هلو','',0,'','','','','','',2);
/*!40000 ALTER TABLE `tbl_item_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_info`
--

DROP TABLE IF EXISTS `tbl_item_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f4` int(11) NOT NULL DEFAULT '0',
  `f5` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f6` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f7` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f8` int(11) NOT NULL DEFAULT '0',
  `f9` smallint(6) NOT NULL DEFAULT '0',
  `f10` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f11` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f12` text CHARACTER SET utf8,
  `f13` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f14` text CHARACTER SET utf8,
  `f15` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '1',
  `f16` bigint(20) NOT NULL DEFAULT '0',
  `f17` int(11) NOT NULL DEFAULT '1',
  `f18` int(11) NOT NULL DEFAULT '1',
  `f19` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `f20` int(11) DEFAULT '0',
  `f21` int(11) NOT NULL DEFAULT '1',
  `f22` int(11) NOT NULL DEFAULT '0',
  `f23` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `f24` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f25` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `f26` int(11) NOT NULL DEFAULT '0',
  `f27` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0,0',
  `f28` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0,0',
  `f29` varchar(20) CHARACTER SET utf8 DEFAULT '0,0',
  `f30` varchar(20) CHARACTER SET utf8 DEFAULT '0,0',
  `f31` varchar(20) CHARACTER SET utf8 DEFAULT '0,0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_info`
--

LOCK TABLES `tbl_item_info` WRITE;
/*!40000 ALTER TABLE `tbl_item_info` DISABLE KEYS */;
INSERT INTO `tbl_item_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f28`, `f29`, `f30`, `f31`) VALUES (1,1,1,'هلو فروشگاهی پایه کد 10',2170000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه جهت سهولت در عملكرد فروشگاهها طراحی شده است و دارای امكانات پایه شامل: تعریف كالا(در دوسطح)، تعریف اشخاص، تعریف حساب های بانكی، چكهای دریافتی و پرداختی، صدور فاكتور خرید، فروش و مرجوعی ها، استفاده از دستگاه باركدخوان، تهیه پرینت فاكتور به صورت فیش پرینت، ثبت سند اتوماتیك برای فاكتورها، ثبت هزینه و درآمد، ثبت عملیات مالی بصورت نقد،چك، كارت خوان، نسیه، انواع گزارشات اشخاص، انبار(كاردكس كالا  بصورت تعدادی)، چكها، بانكها، گزارشگیری از فاكتور ها (بصورت ستونی)،گزارش اسناد و دفترروزنامه، گزارش سود و زیان، ...','','','1',300,1,2,'1397/8/30',2170000,270,0,'1',NULL,'',173600000,'0,0','0,0','0,0','0,0','0,0'),(2,1,1,'هلو فروشگاهی ساده کد 11',3070000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل كلیه امكانات نسخه پایه(كد10) به انضمام امكاناتی از قبیل: تعریف كالا در سه سطح، صدور پیش فاكتور، فاکتور امانی و ضایعات، ثبت سفارشات خرید، ثبت كلیه امور بانكی، اتصال به ترازوهای دیجیتال، اعلام اتوماتیك سر رسید چكها، تهیه گزارشات آماری، گزارشگیری از فاكتور به شكل فاكتور، گزارش اسناد بصورت ستونی، گزارش از دفاتر كل، معین و تفضیلی، گزارش سود ناویژه هر كالا، هر فاكتور، هر طرف حساب در بازه زمانی مختلف، صدور فاكتور VAT ، گزارشات فصلی فاکتورها جهت ارائه به وزارت  دارایی، امکان fastmode ( جهت تسریع و سهولت در انجام امور  ) و ...','','','1',300,1,4,'1397/8/30',3070000,196,0,'1',NULL,'',230250000,'0,0','0,0','0,0','0,0','0,0'),(3,1,1,'هلو فروشگاهی متوسط کد 12',6070000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل كلیه امكانات نسخه ساده (كد11) به انضمام امكاناتی از قبیل:  حواله بین انبارها ، ثبت چكهای امانی، عملكرد و كنترل واسطه ها، سطح دسترسی برای كاربران، ثبت سند حسابداری غیراتوماتیك (بصورت دستی)، نمایش معین اشخاص با ریز كالاها و چك ها،اعلام سررسید اتوماتیك مهلت تسویه فاكتورها، ثبت هزینه در فاكتور، اتصال به دستگاههای نمایشگر مشتری، چاپ باركد، ترازهای آزمایشی 2 و 4ستونی، گزارش عملكرد دوره ای از انبار، فروش فوری و تک فروشی، ارسال پیامک های عمومی (شامل پیام های تبلیغاتی ، تبریک ،تخفیفات و...) و ...','','','1',300,1,4,'1397/8/30',6070000,6,0,'1',NULL,'',212450000,'0,0','0,0','0,0','0,0','0,0'),(4,1,1,'هلو فروشگاهی پیشرفته کد 13',9870000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل كلیه امكانات نسخه متوسط(كد12) به انضمام امكاناتی از قبیل: تیپ قیمت، دسته بندی مشتریها، خروجی باپسوندهای مختلف، پرداخت به و دریافت از، پرینت چكها, محاسبه راس چكها به دو صورت  ریالی و زمانی،‌ اطلاعات نموداری جهـت ارزیابی مالی و فـروش, گـزارشـات پیشرفتـه (گـردش كالای طـی دوره، كاردكـس ریالی و تعـدادی، مرور حسابها و ....)، طراحی فاکتورتوسط کاربر ، ارسال پیامک های پویا / امکان ارسال اطلاعات داخلی نرم افزار (مانده حساب ها، مشخصات فاکتور، سررسید چک، سررسید اقساط و...) و ...','','','1',300,1,4,'1397/8/30',9870000,274,0,'1',NULL,'',345450000,'0,0','0,0','0,0','0,0','0,0'),(5,1,1,'هلو فروشگاهی پیشرفته دو کاربره کد 15',18970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل کلیه امکانات نسخه کد 13به انضمام قابلیت کاربری تحت شبکه (2 کاربر به طور همزمان) می باشد. شایان ذکر است هیچ یک از کیت های عمومی نرم افزار هلو قابل افزودن به این نسخه نمی باشد و تنها می توان پکیج های ویژه مشاغل را با پرداخت هزینه به این نسخه اضافه نمود.','','','1',300,1,3,'1397/8/30',18970000,415,0,'1',NULL,'',663950000,'0,0','0,0','0,0','0,0','0,0'),(6,2,1,'هلو شرکتی ساده کد 21',4070000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل كلیه عملیات انبار، خرید و فروش، گردش چك و بانك و عملیات مالی به صورت اتوماتیك و غیر اتوماتیك به انضمام امكاناتی از قبیل: صدور فاكتور VAT و گزارشات فصلی فاکتورها جهت ارائه به وزارت  دارایی، اتصال به ترازوهای دیجیتال ،امکان سفارش لیستی، گزارش سود ناویژه هر كالا، هر فاكتور، هر طرف حساب در بازه زمانی مختلف، امكان استفاده ازدستگاه  باركد خوان، ارسال پیامک های عمومی (شامل پیام های تبلیغاتی ، تبریک ،تخفیفات و...)....','','','1',300,1,1,'1397/8/30',4070000,56,0,'1',NULL,'',244200000,'0,0','0,0','0,0','0,0','0,0'),(7,2,1,'هلو شرکتی متوسط کد 22',7970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل نسخه ساده (كد21) به انضمام امكاناتی از قبیل: حواله بین انبارها , ثبت چكهای امانی, عملكرد و كنترل واسطه ها, سطح دسترسی برای كاربران، نمایش معین اشخاص با ریز كالاها و چكها، تبدیل سندهای موقت به دائم و بالعكس, ثبت هزینه در فاكتور, مغایرت گیری از بانك، صندوق، طرف حسابها، اعلام سررسید اتوماتیك مهلت تسویه فاكتورها،‌ گزارش عملكرد دوره ای انبار','','','1',300,1,4,'1397/8/30',7970000,439,0,'1',NULL,'',278950000,'0,0','0,0','0,0','0,0','0,0'),(8,2,1,'هلو شرکتی پیشرفته کد 23',10870000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل نسخه متوسط (كد22) به انضمام امكاناتی از قبیل: تیپ قیمت، دسته بندی مشتریها، خروجی با پسوندهای مختلف، پرداخت به و دریافت از، پرینت چكها, محاسبه راس چكها به دو صورت ریالی و زمانی، اطلاعات نموداری جهت ارزیابی مالی و فـروش, گزارشات پیشرفتـه (گـردش كالای طـی دوره و كاردكـس ریالی و تعـدادی، ترازهای آزمایشی 6 و 8 ستونی، مرور حسابها و ...)، امكان مغایرت گیری از كلیـه سر فصلها، طراحی فاکتورتوسط کاربر، ارسال پیامک های پویا / امکان ارسال اطلاعات داخلی نرم افزار (مانده حساب ها، مشخصات فاکتور، سررسید چک، سررسید اقساط و...) ، امکان اصلاح سرفصلهای پیش فرض به دلخواه کاربران و ...','','','1',300,1,1,'1397/8/30',10870000,128,0,'1',NULL,'',380450000,'0,0','0,0','0,0','0,0','0,0'),(9,2,1,'هلو شرکتی پیشرفته دو کاربره کد 25',19970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل کلیه امکانات نسخه کد 23به انضمام قابلیت کاربری تحت شبکه (2 کاربر به طور همزمان) می باشد. شایان ذکر است هیچ یک از کیت های عمومی نرم افزار هلو قابل افزودن به این نسخه(کد 25)نمی باشد و تنها می توان پکیج های ویژه مشاغل رابا پرداخت هزینه به این نسخه اضافه نمود.','','','1',300,1,2,'1397/8/30',19970000,244,0,'1',NULL,'',698950000,'0,0','0,0','0,0','0,0','0,0'),(10,2,1,'هلو شرکتی ویژه کد 24',11970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','روش حسابدرای این نسخه بصورت دائمی بوده و شامل كلیه امكانات هلـو كد 23 بجز امكان نمایش سـود هر كالا، هر فاكتور، هر طرف حساب می باشد.','','','1',300,1,4,'1397/8/30',11970000,362,0,'1',NULL,'',418950000,'0,0','0,0','0,0','0,0','0,0'),(11,4,1,'هلو جامع کد 41',16670000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','شامل كلیه امكانات نرم افزار هلو تا این تاریخ ، دو جلسه آموزش رایگان در محل شركت مهندسی نرم افزار هلو','','','1',300,1,2,'1397/8/30',16670000,235,0,'1',NULL,'',583450000,'0,0','0,0','0,0','0,0','0,0'),(12,4,1,'هلو صنعتی کد 42',19970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','شامل كلیه امكانات نرم افزار هلو تا این تاریخ ، دو جلسه آموزش رایگان در محل شركت  مهندسی نرم افزار هلو','','','1',300,1,1,'1397/8/30',19970000,79,0,'1',NULL,'',698950000,'0,0','0,0','0,0','0,0','0,0'),(13,4,1,'هلو جامع شبکه کد 44',29970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','هلو تحت شبكه شامل كلیه امكانات نسخه هلو كد 41 (و یا هلو کد 42) به انضمام قابلیت كاربری تحت شبکه (4 كاربر بطور همزمان)  می باشد. ضمنا کاربر میتواند درصورت نیاز با پرداخت هزینه جزئی، تعداد کاربران شبکه را به بیش از 4 کاربر افزایش دهد.','','','1',300,1,2,'1397/8/30',29970000,34,0,'1',NULL,'',1048950000,'0,0','0,0','0,0','0,0','0,0'),(14,3,1,'هلو تولیدی ساده کد 31',5070000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل نسخه ساده شركتی (كد 21) به انضمام عملیات تولید در سطح ساده می باشد .','','','1',300,1,3,'1397/8/30',5070000,81,0,'1',NULL,'',202800000,'0,0','0,0','0,0','0,0','0,0'),(15,3,1,'هلو تولیدی متوسط کد 32',8970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل نسخه ساده ( كد31) به انضمام  امكاناتی از قبیل: عملیات چند انباره , ثبت چكهای امانی, عملكرد و كنترل واسطه ها, سطح دسترسی برای كاربران، نمایش معین اشخاص با ریز كالاها و چكها، تبدیل سندهای موقت به دائم و بالعكس, ثبت هزینه در فاكتور, مغایرت گیری از بانك، صندوق، طرف حسابها، اعمال فاكتورهای نسیه واعلام سررسید اتوماتیك مهلت تسویه فاكتورها،‌ گزارش عملكرد دوره ای انبار و ....','','','1',300,1,1,'1397/8/30',8970000,84,0,'1',NULL,'',313950000,'0,0','0,0','0,0','0,0','0,0'),(16,3,1,'هلو تولیدی پیشرفته کد 33',10870000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل نسخه متوسط (كد32) به انضمام  امكاناتی از قبیل:تولید فرموله ،تخمین تولید و فروش ، تیپ قیمت، دسته بندی مشتریها، خروجی با پسوندهای مختلف، پرداخت به و دریافت از، پرینت چكها, محاسبه راس چكها به دو صورت ریالی و زمانی، اطلاعات نموداری جهت ارزیابی مالی و فـروش, گزارشات پیشرفتـه (گـردش كالای طـی دوره و كاردكـس ریالی و تعـدادی، ترازهای آزمایشی 6 و 8 ستونی، مرور حسابها و ...)، امكان مغایرت گیری از كلیـه سر فصلها، طراحی فاکتورتوسط کاربر، ارسال پیامک های پویا /  امکان ارسال اطلاعات داخلی نرم افزار (مانده حساب ها، مشخصات فاکتور، سررسید چک، سررسید اقساط و...)، امکان اصلاح سرفصلهای پیش فرض به دلخواه کاربران...','','','1',300,1,2,'1397/8/30',10870000,428,0,'1',NULL,'',380450000,'0,0','0,0','0,0','0,0','0,0'),(17,3,1,'هلو تولیدی پیشرفته دو کاربره کد 35',20970000,'1','1','1',1000,0,'نرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','قابلیت های نرم افزار','این نسخه شامل کلیه امکانات نسخه کد 33به انضمام قابلیت کاربری تحت شبکه (2 کاربر به طور همزمان) می باشد. شایان ذکر است هیچ یک از کیت های عمومی نرم افزار هلو قابل افزودن به این نسخه(کد 35)نمی باشد و تنها می توان پکیج های ویژه مشاغل رابا پرداخت هزینه به این نسخه اضافه نمود.','','','1',300,1,19,'1397/8/30',20970000,460,0,'1',NULL,'',733950000,'0,0','0,0','0,0','0,0','0,0'),(18,5,1,'انبار اسپاد پایه تک کاربره کد 71061',5500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد.\nنرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید.\nگفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل امکانات : تعريف گروه انبار در يك سطح و تخصيص انبار به آن  ، تعريف کالا به صورت تک سطحي ، تعريف واحد اندازه گيري (واحد – مقياس ) ، تعريف گروه كالا بصورت درختي در سه سطح  و تعريف كالا و تخصيص آن به گروه  ثبت  انواع رسيدها (تعدادي) ( رسيد خريد ، رسيد فروش  رسيد اماني ، رسيد ضايعات رسيد برگشت از خريد ويا فروش ، رسيد انبار به انبار )  ثبت   انواع حواله ها (تعدادي، حواله فروش ، حواله ضايعات ، حواله اماني و...) ، گزارش از اسناد انبار ، گزارش كاردكس كالا ( تعدادي )، گزارش موجودي کالاها در گروهها ، گزارشات متنوع در خصوص موجودي كالاها ، تبديل اسناد انبار موقت به دائم و بالعکس، تعريف دفترچه تلفن، تعريف سطح دسترسي كاربران و.  تخصيص عكس به كالا ، توضيحات پيش فرض ، باركد خوان و امكان چاپ باركد','چرا اسپاد','مجموعه نرم افزارهای اسپاد به طوری تولید گزدیده است که برای تمام نیازهای سازمانی نرم افزارهای خاص جهت تامین آن نیاز وجود خواهد داشت که هم به صورت تک سیستم و هم به صورت یکپارچه شده و در قالب پک کامل و متناسب با نیاز شما قابل ارائه می باشد.','1',300,1,1,'1397/9/7',5500000,235,0,'2',NULL,'',220000000,'0,0','0,0','0,0','0,0','0,0'),(19,5,1,'انبار اسپاد کاربردی تک کاربره کد 71062',9500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل کليه امکانات کد(71061) به انضمام : تعريف گروه كالا بصورت درختي در سطوح نامحدود و تعريف كالا و تخصيص آن به گروه ، تعريف گروه انبار به صورت درختي در سطوح نامحدود  و تخصيص انبار به آن ، تعريف مسئول انبار براي هريک از انبارها ، نمايش ارتباط اسناد صادر شده با يکديگر ، محاسبه و تعيين مغايرت نسبت به متوسط شمارش ها ، تعريف شماره سريال، انتخاب انبارهاي متعدد در تعريف انبار گرداني ، گزارشات پيشرفته','چرا اسپاد','مجموعه نرم افزارهای اسپاد به طوری تولید گزدیده است که برای تمام نیازهای سازمانی نرم افزارهای خاص جهت تامین آن نیاز وجود خواهد داشت که هم به صورت تک سیستم و هم به صورت یکپارچه شده و در قالب پک کامل و متناسب با نیاز شما قابل ارائه می باشد.','1',300,1,1,'1397/9/7',9500000,380,0,'2',NULL,'',332500000,'0,0','0,0','0,0','0,0','0,0'),(20,5,1,'انبار اسپاد پیشرفته تک کاربره کد 71064',13500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل  کليه امکانات کد (71062) به انضمام :  امکان 30 شرکتی، تعريف واحد جايگزين،  تعريف كالاي جايگزين،تعريف ويژگيهاي كالا و ايجاد كلاس كالا و تعريف كالا با استفاده از كلاس هم بصورت دستي و اتوماتيك  ، ويرايش اسناد انبار ، تعريف درج تکراري سطر سند انبار ، تجميع سطرهاي تکراري در اسناد انبار ، تعريف صدور سند مشابه براي اسناد انبار ، تعريف اسناد يادداشت براي انواع اسناد انبار ، تعريف انبارهاي مورد پذيرش براي انواع اسناد انبار ، تعريف طرف حسابهاي مورد پذيرش ، توليد شماره سند اتوماتيک بر اساس نوع سند و انبار انتخاب شده ، ثبت سند انبار در وضعيت يادداشت ، انتخاب مبناي شمارش بر اساس :آخرين شمارش ، متوسط شمارش ها ، نزديکترين شمارش ها به  موجودي ، شمارش با بيشترين تکرار ، بزرگترين شمارش ، کوچکترين شمارش ، نمايش شمارش هاي قبلي و يا پنهان کردن آن در دفعات شمارش ، افزودن انبارهاي مختلف در تعريف يک انبار گرداني ، افزودن کالاها به صورت دستي و يا اتوماتيک به ليست کالاهاي انبارگرداني ، طراحي گزارشات ،تعريف مشخصات تکميلي اشخاص ، ‌امكان تعريف موءلفه براي واحدهايي از جنس ساير موارد ، امکان تعريف موءلفه از جنس صحيح و اعشاري ، تعريف واحد جايگزين با استفاده از ارتباط مولفه هاي واحد جايگزين با مولفه هاي واحد اصلي ، تعريف گروه ويژگي ها و تخصيص ويژگي ها به هر گروه از ويژگي ها ، تعريف و تخصيص ويژگي هاي قيمت ناپذير (کلاس کالا) ، تخصيص نوع انبار به انواع انبارهاي تعريف شده از قبل (انبار مواد اوليه ، ضايعات و...) ، تعريف اسناد غير کنترلي ، تغيير کليه عناوين موجود در فرمها ، تعريف اسناد وابسته براي هر يک از اسناد ، تعريف گروه کالاهاي مورد پذيرش براي انواع اسناد انبار ، تعريف طرف حساب و انبار براي اسناد انبار به صورت ثابت ، امکان ثبت اسناد وابسته براي اسنادي که اسناد وابسته دارند ، امکان گزارشگيري از شمارش دستي ، شماره عطف ، شماره قرار داد ، شماره بارنامه براي اسناد انبار ، کنترل موجودي منفي در انبارها','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند .\n2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد .\n3.	جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد .\n4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند.\n5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد  مي باشد .\n6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند .\n7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران  مي باشند .  \n(هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .)\n8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است .  \n9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد .\n10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است .\n11.	نرم افزار ها شامل يك قفل سخت افزاري USB و  CD نصب و راهنماي كار با نرم افزار مي باشند .\n12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد .\n13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است.\n14.	ساير نرم افزارهای شرکت اسپاد:\nحسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، \nحقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، \nاجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',13500000,41,0,'2',NULL,'',472500000,'0,0','0,0','0,0','0,0','0,0'),(21,5,1,'انبار اسپاد طلایی تک کاربره کد 71065',26500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل کليه امکانات کد (71064) به انضمام : امکان تعريف انواع اسناد انبار به سليقه کاربر ، سه سال پشتيبانی رايگان ، پنج ساعت استقرار در محل مشتری ، دو جلسه آموزش اضافه بر آموزش تعهدی','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',26500000,279,0,'2',NULL,'',927500000,'0,0','0,0','0,0','0,0','0,0'),(22,5,1,'انبار اسپاد پایه (شبکه) کد 72061',8500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات كد (71061) مي باشد.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',8500000,439,0,'2',NULL,'',297500000,'0,0','0,0','0,0','0,0','0,0'),(23,5,1,'انبار اسپاد کاربردی (شبکه) کد 72062',13500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات كد (71062) مي باشد','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',13500000,478,0,'2',NULL,'',472500000,'0,0','0,0','0,0','0,0','0,0'),(24,5,1,'انبار اسپاد پیشرفته (شبکه) کد 72064',17000000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات كد (71064) مي باشد .\n به انضمام ارسال و دريافت پيام بين كاربران (صوتي، تصويري، متن) مي باشد.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',17000000,22,0,'2',NULL,'',595000000,'0,0','0,0','0,0','0,0','0,0'),(25,5,1,'انبار اسپاد طلایی (شبکه) کد 72065',29500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل  کليه امکانات کد (71064) به انضمام :\nامکان تعريف انواع اسناد انبار به سليقه کاربر ، سه سال پشتيبانی رايگان ، پنج ساعت استقرار در محل مشتری ، دو جلسه آموزش اضافه بر آموزش تعهدی \nاين نسخه در قالب شبكه 2 كاربر ارائه شده است.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',29500000,296,0,'2',NULL,'',1032500000,'0,0','0,0','0,0','0,0','0,0'),(26,6,1,'تدارکات اسپاد تعدادی تک کاربره',5500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل امکانات زیر میباشد:\n•	تعریف سطح دسترسی جهت ثبت درخواست\n•	تعریف کارپرداز (مسئول خرید) و مسئول انبار \n•	تعریف کارتابل بر اساس روندها\n•	تعریف مراکز سفارش دهنده\n•	ثبت درخواست برای هر مرکز به صورت مجزا\n•	تایید، رد و ویرایش درخواست ها توسط مدیر واحد\n•	صدور حواله تحویل سفارش توسط انباردار\n•	ارسال درخواست برای کارپرداز جهت خرید توسط انباردار\n•	تهیه لیست خرید بابت سفارشات توسط کارپرداز\n•	ثبت صورت وضعیت خرید توسط کارپرداز','سایر توضیحات','1.	نسخه تدارکات به همراه نسخه های انبار تعدادی و يا انبار تعدادی-ريالی قابل ارائه خواهد بود.\n2.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند.\n3.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد.\n4.	جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد.\n5.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند.\n6.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد  مي باشد.\n7.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند.\n8.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند.       \n       (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد.)\n9.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است. \n10.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت،‌ امكان پذير مي باشد .\n11.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVEN, VISTA ، XP است.\n12.	نرم افزار ها شامل يك قفل سخت افزاري , USB و CD نصب و راهنماي كار با نرم افزار مي باشند.\n13.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد.\n14.	ارتباط بين سيستم ها (لينک) در نسخه هاي  کاربردي و پیشرفته امکان پذير است. \n15.	ساير نرم افزارهای شرکت اسپاد:\nحسابداری، خزانه داری، انبار ريالی، انبار تعدادی، ثبت سفارش اندرويد، داشبورد مديريتی، خدمات پس از فروش، اموال، بازرگانی، حقوق و\nدستمزد بعلاوه صدور حکم کارگزيني، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت)، اجرای نرم افزارهای\nاسپاد از هر نقطه جغرافيايي.','1',300,1,1,'1397/9/9',5500000,210,0,'2',NULL,'',220000000,'0,0','0,0','0,0','0,0','0,0'),(27,6,1,'تدارکات اسپاد تعدادی شبکه',8500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات (تك كاربره) مي باشد.','سایر توضیحات','1.	نسخه تدارکات به همراه نسخه های انبار تعدادی و يا انبار تعدادی-ريالی قابل ارائه خواهد بود. 2.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند. 3.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد. 4.	جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد. 5.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 6.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد. 7.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند. 8.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند. (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد.) 9.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است. 10.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت،‌ امكان پذير مي باشد . 11.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVEN, VISTA ، XP است. 12.	نرم افزار ها شامل يك قفل سخت افزاري , USB و CD نصب و راهنماي كار با نرم افزار مي باشند. 13.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد. 14. ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پیشرفته امکان پذير است. 15.	ساير نرم افزارهای شرکت اسپاد: حسابداری، خزانه داری، انبار ريالی، انبار تعدادی، ثبت سفارش اندرويد، داشبورد مديريتی، خدمات پس از فروش، اموال، بازرگانی، حقوق و دستمزد بعلاوه صدور حکم کارگزيني، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت)، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي.','1',300,1,1,'1397/9/9',8500000,352,0,'2',NULL,'',297500000,'0,0','0,0','0,0','0,0','0,0'),(28,6,1,'تدارکات اسپاد تعدادی - ریالی تک کاربره',6500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل کليه امکانات تدارکات (تعدادی) به انضمام ارزش ریالی کالاها می باشد.','سایر توضیحات','1.	نسخه تدارکات به همراه نسخه های انبار تعدادی و يا انبار تعدادی-ريالی قابل ارائه خواهد بود. 2.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند. 3.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد. 4.	جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد. 5.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 6.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد. 7.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند. 8.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند. (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد.) 9.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است. 10.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت،‌ امكان پذير مي باشد . 11.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVEN, VISTA ، XP است. 12.	نرم افزار ها شامل يك قفل سخت افزاري , USB و CD نصب و راهنماي كار با نرم افزار مي باشند. 13.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد. 14. ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پیشرفته امکان پذير است. 15.	ساير نرم افزارهای شرکت اسپاد: حسابداری، خزانه داری، انبار ريالی، انبار تعدادی، ثبت سفارش اندرويد، داشبورد مديريتی، خدمات پس از فروش، اموال، بازرگانی، حقوق و دستمزد بعلاوه صدور حکم کارگزيني، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت)، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي.','1',300,1,1,'1397/9/9',6500000,270,0,'2',NULL,'',227500000,'0,0','0,0','0,0','0,0','0,0'),(29,6,1,'تدارکات اسپاد تعدادی - ریالی شبکه',9500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات (تك كاربره) مي باشد.','سایر توضیحات','1.	نسخه تدارکات به همراه نسخه های انبار تعدادی و يا انبار تعدادی-ريالی قابل ارائه خواهد بود. 2.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند. 3.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد. 4.	جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد. 5.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 6.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد. 7.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند. 8.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند. (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد.) 9.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است. 10.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت،‌ امكان پذير مي باشد . 11.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVEN, VISTA ، XP است. 12.	نرم افزار ها شامل يك قفل سخت افزاري , USB و CD نصب و راهنماي كار با نرم افزار مي باشند. 13.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد. 14. ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پیشرفته امکان پذير است. 15.	ساير نرم افزارهای شرکت اسپاد: حسابداری، خزانه داری، انبار ريالی، انبار تعدادی، ثبت سفارش اندرويد، داشبورد مديريتی، خدمات پس از فروش، اموال، بازرگانی، حقوق و دستمزد بعلاوه صدور حکم کارگزيني، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت)، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي.','1',300,1,1,'1397/9/9',9500000,311,0,'2',NULL,'',332500000,'0,0','0,0','0,0','0,0','0,0'),(30,7,1,'انبار اسپاد پایه تک کاربره کد 71051',6500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل امکانات : انبارتعريف گروه انبار در يك سطح و تخصيص انبار به آن  ، تعريف کالا بصورت تک سطحي، تعريف واحداندازه گيري (واحد - مقياس) ، تعريف گروه کالا بصورت درختي در سه سطح و تخصيص کالا به گروه ، ثبت  انواع اسناد رسيد (ريالي ، تعدادي )،ثبت انواع اسناد حواله(ريالي ، تعدادي)  ، کاردکس کالا(ريالي ، تعدادي) ،  امکان قيمت گذاري دسته اي رسيدها و حواله ها ، گزارش از اسناد انبار ، گزارش بر اساس هر کالا(ريالي ، تعدادي) ، گزارش موجودي کالاها در گروهها ، گزارشات دلخواه ، گزارش شمارش انبار گرداني تعريف کليدهاي ميانبر، ورود ليستي اطلاعات ، سطح دسترسي کاربران، تعريف دفترچه تلفن ، روش قيمت گذاري بصورت ميانگين','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',6500000,402,0,'2',NULL,'',227500000,'0,0','0,0','0,0','0,0','0,0'),(31,7,1,'انبار اسپاد کاربردی تک کاربره کد 71052',10500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل کليه امکانات کد (71051) به انضمام :نمايش ارتباط اسناد صادرشده با يکديگر،امکان تعريف شماره سريال کالا، امکان محاسبه و تعيين مغايرت نسبت به متوسط شمارش ها،تعريف گروه انبارها به صورت درختي در سطوح نامحدود،تعريف مسئول انباربراي هريک از انبارها،امکان تعريف گروه کالا به صورت درختي در سطوح نامحدود،گزارشات پيشرفته','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',10500000,27,0,'2',NULL,'',367500000,'0,0','0,0','0,0','0,0','0,0'),(32,7,1,'انبار اسپاد پیشرفته تک کاربره کد 71054',14500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل کليه امکانات کد (71052) به انضمام :امکان 30 شرکتي ، تجميع سطرهاي تکراري در اسناد انبار ، تعريف صدور سند مشابه براي اسناد انبار، تعريف اسناد يادداشت براي انواع اسناد انبار ، تعريف انبارهاي مورد پذيرش براي انواع اسناد انبار ، تعريف طرف حسابهاي مورد پذيرش براي انواع اسناد انبار ، توليد شماره سند اتوماتيک بر اساس نوع سند و انبار انتخاب شده ، ثبت سند انبار در وضعيت يادداشت ، امکان انتخاب مبناي شمارش بر اساس : آخرين شمارش ، متوسط شمارش ها ، نزديکترين شمارش به موجودي ، شمارش با بيشترين تکرار ، بزرگترين شمارش ، کوچکترين شمارش ، نمايش شمارش هاي قبلي و يا پنهان کردن آن در دفعات شمارش ، افزودن کالاها به صورت دستي و يا اتوماتيک به ليست کالاهاي انبار گرداني ، روش قيمت گذاري FIFOو LIFO و شناسايي ويژه، درج تکراري سطر سند انبار در تعريف اسناد انبار ، تعريف مشخصات تکميلي اشخاص، تعريف واحد جايگزين، تعريف كالاي جايگزين ، تعريف ويژگيهاي كالا و ايجاد كلاس كالا و تعريف كالا با استفاده از كلاس بصورت دستي و اتوماتيك   ، تعريف و تخصيص ويژگي هاي قيمت ناپذير (توليد نام کالا)، طراحي گزارشات ، ويرايش اسناد انبار، تنظيم رخدادهاي خاص در ساعات و روزهاي سال و يادآوري اتوماتيک توسط نرم افزار و ... ، تخصيص نوع انبار به انواع انبارهاي تعريف شده از قبل (تعريف انواع انبار شامل انبار مواد اوليه ، انبار ضايعات و...)، تعريف اسناد غير کنترلي (در موجودي و کاردکس کالا تاثير ندارند مثل سفارش ) ، تغيير کليه عناوين موجود در فرمهاي اسناد انبار وابسته به نوع سند انبار ، کنترل موجودي منفي در انبارها ،  تعريف موءلفه براي واحدهايي از جنس ساير موارد ، تعريف موءلفه از جنس صحيح و يا اعشاري ، تعريف واحد جايگزين با استفاده از ارتباط مولفه هاي واحد جايگزين با مولفه واحد اصلي ، تعريف گروه ويژگي ها و تخصيص ويژگي ها به هر گروه از ويژگي ها ، تعريف  اسناد وابسته براي هر يک از انواع اسناد انبار ، تعريف گروه کالاهاي مورد پذيرش براي انواع اسناد انبار ، تعريف طرف حساب و انبار براي اسناد انبار به صورت ثابت ، ثبت اسناد وابسته براي اسنادي که اسناد وابسته دارند ، وجود شماره دستي ، شماره عطف ، امكان گزارشگيري از شماره دستي ، شماره عطف ، شماره قرار داد ، شماره بارنامه در اسناد انبار،','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',14500000,5,0,'2',NULL,'',507500000,'0,0','0,0','0,0','0,0','0,0'),(33,7,1,'انبار اسپاد طلایی تک کاربره کد 71055',27500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل کليه امکانات کد (71054) به انضمام : امکان تعريف انواع اسناد انبار به سليقه کاربر ، سه سال پشتيبانی رايگان ، پنج ساعت استقرار در محل مشتری ، دو جلسه آموزش اضافه بر آموزش تعهدی','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',27500000,460,0,'2',NULL,'',962500000,'0,0','0,0','0,0','0,0','0,0'),(34,7,1,'انبار اسپاد پایه (شبکه) کد 72051',9500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات كد  (71051)مي باشد.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',9500000,380,0,'2',NULL,'',332500000,'0,0','0,0','0,0','0,0','0,0'),(35,7,1,'انبار اسپاد کاربردی (شبکه) کد 72052',14500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات كد (71052)مي باشد.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',14500000,470,0,'2',NULL,'',507500000,'0,0','0,0','0,0','0,0','0,0'),(36,7,1,'انبار اسپاد پیشرفته (شبکه) کد 72054',18000000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه در قالب شبكه 2 كاربر ارائه شده است و شامل كليه امكانات  كد  (71054) به انضمام ارسال و دريافت پيام بين كاربران (صوتي، تصويري، متن)  مي باشد.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',18000000,236,0,'2',NULL,'',630000000,'0,0','0,0','0,0','0,0','0,0'),(37,7,1,'انبار اسپاد طلایی (شبکه) کد 72055',30500000,'1','1','1',1000,0,'نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','قابلیت های نرم افزار','اين نسخه شامل  کليه امکانات کد (71054) به انضمام :\nامکان تعريف انواع اسناد انبار به سليقه کاربر ، سه سال پشتيبانی رايگان ، پنج ساعت استقرار در محل مشتری ، دو جلسه آموزش اضافه بر آموزش تعهدی  اين نسخه در قالب شبكه 2 كاربر ارائه شده است.','سایر توضیحات','1.	نرم افزارها داراي يكسال خدمات پشتيباني رايگان مي باشند . 2.	در پايان يكسال، اعتبار پشتيباني با صرف هزينه قابل تمديد مي باشد . 3. جهت دريافت خدمات، داشتن اعتبار پشتيباني الزامي مي باشد . 4.	هر يک از امكانات نسخه هاي بالاتر با پرداخت هزينه قابل افزودن مي باشند. 5.	نسخه پايه سينگل داراي 2 جلسه خدمات آموزش گروهي و 1 نصب رايگان در محل شركت اسپاد مي باشد . 6.	نسخه هاي کاربردي و پيشرفته سينگل وكليه نسخه هاي شبكه داراي 2 جلسه آموزش و 1نصب رايگان در محل مشتريان تهران مي باشند . 7.	نسخه هاي يکپارچه داراي 3 جلسه آموزش و 1 نصب رايگان در محل مشتريان تهران مي باشند . (هزينه اياب و ذهاب در تهران بر عهده مشترک بوده و علاوه بر هزينه فوق ، هزينه اقامت و پذيرايي نيز برعهده مشترکين خارج از تهران مي باشد .) 8.	افزايش تعداد كاربر در نسخه هاي شبكه با پرداخت هزينه به ازاي هر كاربر 1،500،000 ريال ميسر است . 9.	ارتقا نرم افزار از سطوح پايين تر به سطوح بالاتر با پرداخت مابه التفاوت ،‌ امكان پذير مي باشد . 10.	نرم افزارها قابل نصب در ويندوزهايEIGHT ،SEVENVISTA ، XP است . 11.	نرم افزار ها شامل يك قفل سخت افزاري USB,CDنصب و راهنماي كار با نرم افزار مي باشند . 12.	طبق مصوبات قانوني دولت، 9% عوارض و ماليات بر ارزش افزوده به قيمت هاي فوق افزوده شده و جداگانه در يافت مي گردد . 13.	ارتباط بين سيستم ها (لينک) در نسخه هاي کاربردي و پيشرفته امکان پذير است. 14.	ساير نرم افزارهای شرکت اسپاد: حسابداری ، خزانه داری ، انبار ريالی ، بازرگانی ، ثبت سفارش اندرويد ، داشبورد مديريتی ، خدمات پس از فروش ، اموال ، تدارکات داخلی ، حقوق و دستمزد بعلاوه صدور حکم کارگزيني ، سامانه ابری فيش حقوقی (دريافت فيش حقوقی توسط پرسنل با استفاده از اينترنت) ، اجرای نرم افزارهای اسپاد از هر نقطه جغرافيايي','1',300,1,1,'1397/9/9',30500000,432,0,'2',NULL,'',1067500000,'0,0','0,0','0,0','0,0','0,0'),(47,1,1,'تست فروشگاه',1000,'1','1','0',1,0,'','','','','','1',0,1,1,'1397/9/21',1000,305,2,'0',NULL,'',120,'0,0','0,0','0,0','0,0','0,0'),(48,11,1,'هلو جامع آموزشگاهی',580000,'1','1','1',1000,0,'نرم افزار حسابداری هلو نسخه آموزشگاهی یک نرم افزار با امکانات نسخه جامع  می باشد ، اما بدلیل اینکه برای نیازهای آموزشی طراحی شده است دارای محدودیتهایی در ثبت اطلاعات ، گزارشات و تعداد کالاها و طرف حسابها می باشد.\nبا استفاده از این نرم افزار می توانید نحوه کارکرد نسخه های فروشگاهی ، شرکتی و تولیدی را که در دوره های آموزشی نرم افزار هلو فرا می گیرید به کار ببندید و تعداد محدودی سند ثبت نمایید.\nاستفاده از این نرم افزار به افرادی که در حال گذراندن دوره آموزشی نرم افزار هلو هستند ، دانشجویان و هنرجویان و افراد جویای کار در رشته حسابداری توصیه می گردد.','','','','','1',300,1,1,'1398/2/11',580000,340,0,'1',NULL,'',69600000,'0,0','0,0','0,0','0,0','0,0'),(49,12,1,'آموزش نرم افزار هلو جامع',4580000,'1','1','0',1000,0,'آموزش صفر تا 100 هلو نسخه جامع به همراه ارائه گواهینامه پایان دوره توسط شرکت مهندسی نرم افزار هلو','معرفی دوره و شیوه برگزاری','بعد از یادگیری تمامی مباحث مربوط به حسابداری و با توجه به اینکه سیستم سنتی حسابداری به سمت مکانیزه شدن حرکت می نماید لذا یادگیری نرم افزارهای حسابداری یکی از فاکتورهای بسیار مهم می‌باشد.\nبا توجه به سریع بودن انجام عملیات توسط نرم افزار و نیازهای مقطعی مدیران به اطلاعات حسابداری، استفاده از نرم افزارهای حسابداری توصیه می گردد.\n\nدوره آموزش نرم افزار حسابداری هلو به شیوه کاملا کاربردی و کارگاهی برگزار می گردد و کلیه مفاهیم به صورت عملی و کلیدی آموزش داده می شود. بنابراین در این دوره از ارائه مباحث تئوریک پرهیز شده و دانش پذیران در عمل تکنیک ها و ابزارها را می آموزند.','مخاطبین دوره','صاحبان کسب و کارهای کوچک و بزرگ ، فعالان اقتصادی ، علاقمندان به حوزه حسابداری ، دانشجویان و دانش آموختگان رشته های حسابداری ، مدیریت بازرگانی، مدیریت صنعتی و سایر رشته های مرتبط','1',0,1,1,'1398/2/14',4580000,365,2,'1',NULL,'',274800000,'0,0','0,0','0,0','0,0','0,0');
/*!40000 ALTER TABLE `tbl_item_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_info2`
--

DROP TABLE IF EXISTS `tbl_item_info2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_info2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sell_date` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_info2`
--

LOCK TABLES `tbl_item_info2` WRITE;
/*!40000 ALTER TABLE `tbl_item_info2` DISABLE KEYS */;
INSERT INTO `tbl_item_info2` (`id`, `sell_date`) VALUES (1,1);
/*!40000 ALTER TABLE `tbl_item_info2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_info_des`
--

DROP TABLE IF EXISTS `tbl_item_info_des`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_info_des` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` text COLLATE utf8_unicode_ci,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_info_des`
--

LOCK TABLES `tbl_item_info_des` WRITE;
/*!40000 ALTER TABLE `tbl_item_info_des` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_item_info_des` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_info_tec`
--

DROP TABLE IF EXISTS `tbl_item_info_tec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_info_tec` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `f3` text COLLATE utf8_unicode_ci,
  `f4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_info_tec`
--

LOCK TABLES `tbl_item_info_tec` WRITE;
/*!40000 ALTER TABLE `tbl_item_info_tec` DISABLE KEYS */;
INSERT INTO `tbl_item_info_tec` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`) VALUES (138,17,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(139,17,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(140,17,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(141,17,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(142,17,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(143,17,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(28,1,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(29,1,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(30,1,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(31,1,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(21,2,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(32,1,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(33,1,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(34,1,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(22,2,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(23,2,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(24,2,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(25,2,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(26,2,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(27,2,'شماره شناسنامه','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(35,3,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(36,3,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(37,3,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(38,3,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(39,3,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(40,3,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(41,3,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(42,4,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(43,4,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(44,4,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(45,4,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(46,4,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(47,4,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(48,4,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(49,5,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(50,5,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(51,5,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(52,5,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(53,5,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(54,5,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(55,5,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(56,6,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(57,6,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(58,6,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(59,6,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(60,6,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(61,6,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(62,6,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(63,7,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(64,7,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(65,7,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(66,7,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(67,7,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(68,7,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(69,7,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(70,8,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(71,8,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(73,8,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(74,8,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(76,8,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(77,8,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(78,8,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(79,9,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(80,9,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(81,9,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(82,9,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(83,9,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(84,9,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(85,9,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(86,10,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(87,10,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(88,10,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(89,10,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(90,10,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(91,10,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(92,10,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(93,11,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(94,11,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(95,11,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(96,11,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(97,11,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(98,11,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(99,11,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(100,12,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(101,12,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(102,12,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(103,12,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(104,12,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(105,12,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(106,12,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(107,13,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(108,13,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(109,13,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(110,13,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(111,13,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(112,13,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(113,13,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(114,14,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(115,14,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(116,14,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(117,14,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(118,14,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(120,14,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(121,14,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(122,15,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(124,15,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(126,15,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(127,15,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(128,15,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(129,15,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(130,15,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(131,16,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(132,16,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(133,16,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(134,16,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(135,16,'نوع قفل سخت افزاری','Tiny HID',NULL,NULL,NULL,NULL,NULL,NULL),(136,16,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(137,16,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(144,17,'سایر توضیحات','محیط زیبا و آسان ، پشتیبانی قوی ، تکنولوژی محور',NULL,NULL,NULL,NULL,NULL,NULL),(145,48,'شماره شناسنامه','8-01237-024680',NULL,NULL,NULL,NULL,NULL,NULL),(146,48,'مرجع صادر کننده','وزارت فرهنگ و ارشاد اسلامی',NULL,NULL,NULL,NULL,NULL,NULL),(147,48,'تعداد دیسک','یک حلقه',NULL,NULL,NULL,NULL,NULL,NULL),(148,48,'نوع دیسک','DVD',NULL,NULL,NULL,NULL,NULL,NULL),(149,48,'نوع قفل','نرم افزاری',NULL,NULL,NULL,NULL,NULL,NULL),(150,48,'قابلیت نصب بر روی','Windows XP - 7 - 8 - 8.1 &amp; 10',NULL,NULL,NULL,NULL,NULL,NULL),(164,49,'مدت دوره','ساعت 32',NULL,NULL,NULL,NULL,NULL,NULL),(165,49,'گواهینامه','صدور توسط شرکت مهندسی نرم افزار هلو',NULL,NULL,NULL,NULL,NULL,NULL),(166,49,'محل تشکیل','دانشگاه پیام نور مرکز تربت حیدریه',NULL,NULL,NULL,NULL,NULL,NULL),(163,49,'تاریخ و زمان برگزاری','روزهای دوشنبه و چهارشنبه - دوم بهمن لغایت چهاردهم اسفند',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_item_info_tec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_main_group`
--

DROP TABLE IF EXISTS `tbl_item_main_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_main_group` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` smallint(6) NOT NULL DEFAULT '1',
  `F4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_main_group`
--

LOCK TABLES `tbl_item_main_group` WRITE;
/*!40000 ALTER TABLE `tbl_item_main_group` DISABLE KEYS */;
INSERT INTO `tbl_item_main_group` (`auto_id`, `f1`, `f2`, `f3`, `F4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`) VALUES (1,'نرم افزارهای حسابداری','',0,'','','','','','',''),(2,'دوره های آموزشی','',0,'','','','','','','');
/*!40000 ALTER TABLE `tbl_item_main_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_reg_d_factor`
--

DROP TABLE IF EXISTS `tbl_item_reg_d_factor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_reg_d_factor` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` bigint(16) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` smallint(6) NOT NULL DEFAULT '0',
  `f5` int(11) NOT NULL DEFAULT '1',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f7` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_reg_d_factor`
--

LOCK TABLES `tbl_item_reg_d_factor` WRITE;
/*!40000 ALTER TABLE `tbl_item_reg_d_factor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_item_reg_d_factor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_reg_d_factor_t`
--

DROP TABLE IF EXISTS `tbl_item_reg_d_factor_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_reg_d_factor_t` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` smallint(6) NOT NULL DEFAULT '0',
  `f5` int(11) NOT NULL DEFAULT '1',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f7` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_reg_d_factor_t`
--

LOCK TABLES `tbl_item_reg_d_factor_t` WRITE;
/*!40000 ALTER TABLE `tbl_item_reg_d_factor_t` DISABLE KEYS */;
INSERT INTO `tbl_item_reg_d_factor_t` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`) VALUES (11,1,49,4580000,1000,275349600,'1','1');
/*!40000 ALTER TABLE `tbl_item_reg_d_factor_t` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_reg_m_factor`
--

DROP TABLE IF EXISTS `tbl_item_reg_m_factor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_reg_m_factor` (
  `auto_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_reg_m_factor`
--

LOCK TABLES `tbl_item_reg_m_factor` WRITE;
/*!40000 ALTER TABLE `tbl_item_reg_m_factor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_item_reg_m_factor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_sub_group`
--

DROP TABLE IF EXISTS `tbl_item_sub_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_sub_group` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) DEFAULT NULL,
  `f2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` smallint(6) NOT NULL DEFAULT '1',
  `f5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_sub_group`
--

LOCK TABLES `tbl_item_sub_group` WRITE;
/*!40000 ALTER TABLE `tbl_item_sub_group` DISABLE KEYS */;
INSERT INTO `tbl_item_sub_group` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`) VALUES (1,1,'فروشگاهی','',0,'','','','','','','1'),(2,1,'شرکتی','',1,'','','','','','','1'),(3,1,'تولیدی','',0,'','','','','','','1'),(4,1,'جامع و صنعتی','',1,'','','','','','','1'),(11,1,'آموزشگاهی','',4,'','','','','','','0'),(12,5,'دوره آموزشی هلو جامع','',0,'','','','','','','1');
/*!40000 ALTER TABLE `tbl_item_sub_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item_vote`
--

DROP TABLE IF EXISTS `tbl_item_vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item_vote` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) DEFAULT NULL,
  `f2` int(11) DEFAULT NULL,
  `f3` int(2) DEFAULT NULL,
  `f4` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item_vote`
--

LOCK TABLES `tbl_item_vote` WRITE;
/*!40000 ALTER TABLE `tbl_item_vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_item_vote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_learn_temp`
--

DROP TABLE IF EXISTS `tbl_learn_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_learn_temp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f4` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f14` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f17` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f18` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_learn_temp`
--

LOCK TABLES `tbl_learn_temp` WRITE;
/*!40000 ALTER TABLE `tbl_learn_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_learn_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_license`
--

DROP TABLE IF EXISTS `tbl_license`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_license` (
  `auto_id` int(5) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_license`
--

LOCK TABLES `tbl_license` WRITE;
/*!40000 ALTER TABLE `tbl_license` DISABLE KEYS */;
INSERT INTO `tbl_license` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`) VALUES (7,'نشان ثبت ملی','<img id = \'jxlzrgvjjxlzjxlzfukzrgvj\' style = \'cursor:pointer\' onclick = \'window.open(\"https://logo.samandehi.ir/Verify.aspx?id=131163&p=rfthxlaorfthrfthgvkaxlao\", \"Popup\",\"toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30\")\' alt = \'logo-samandehi\' src = \'https://logo.samandehi.ir/logo.aspx?id=131163&p=nbpdqftinbpdnbpdwlbqqfti\' />','1','1','','','',''),(8,'پروانه نشر دیجیتال','<img id = style = \'cursor:pointer\' onclick = \r\n \'window.open(\"http://arkaengineering.ir/images/license/nashr.jpg\", \"Popup\",\"toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=800, height=559, top=30\")\' alt = \'logo-samandehi\' src = \'http://arkaengineering.ir/images/license/nashrdigi.jpg\' />','2','0','','','',''),(9,'نماد اعتماد','<a target=\"_blank\" href=\"https://trustseal.enamad.ir/?id=113353&amp;Code=L57PqwCuLRRbpitsXaAF\"></a>','0','1','','','','');
/*!40000 ALTER TABLE `tbl_license` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_maghaleh`
--

DROP TABLE IF EXISTS `tbl_maghaleh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_maghaleh` (
  `auto_id` int(11) NOT NULL,
  `f1` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `f2` text COLLATE utf8_persian_ci NOT NULL,
  `f3` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `f4` text COLLATE utf8_persian_ci NOT NULL,
  `f5` smallint(6) NOT NULL,
  `f6` varchar(1) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_maghaleh`
--

LOCK TABLES `tbl_maghaleh` WRITE;
/*!40000 ALTER TABLE `tbl_maghaleh` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_maghaleh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_marqee_word`
--

DROP TABLE IF EXISTS `tbl_marqee_word`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_marqee_word` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` int(2) NOT NULL DEFAULT '1',
  `f5` text COLLATE utf8_unicode_ci,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_marqee_word`
--

LOCK TABLES `tbl_marqee_word` WRITE;
/*!40000 ALTER TABLE `tbl_marqee_word` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_marqee_word` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_master_page_info`
--

DROP TABLE IF EXISTS `tbl_master_page_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_master_page_info` (
  `auto_id` int(5) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` smallint(3) NOT NULL DEFAULT '1',
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f6` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_master_page_info`
--

LOCK TABLES `tbl_master_page_info` WRITE;
/*!40000 ALTER TABLE `tbl_master_page_info` DISABLE KEYS */;
INSERT INTO `tbl_master_page_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`) VALUES (1,'منوهای بازگشت',1,'Return','','','','1'),(2,'تنظیمات پایه',2,'Primary Setting','','','','1'),(3,'تنظیمات مدیریتی',3,'','','','','1'),(4,'مدیریت پیام ها',6,'','','','','1'),(5,'مدیریت کاربران',4,'','','','','1'),(6,'مدیریت کالاهای ثبت شده کاربران',7,'','','','','1'),(7,'مدیریت کالا و خدمات',7,'','','','','1'),(9,'وضعیت کلیه کالاهای ثبت شده',9,'User Items','','','','1'),(10,'پیگیری خرید و فروش ها',10,'','','','','1'),(11,'وضعیت ثبت شده کالاهای کاربر جاری',8,'','','','','1'),(16,'مدیریت اطلاعات کاربری',5,'','','','','1'),(17,'منوهای غیرقابل نمایش',20,'','','','','1'),(18,'مدیریت روش های پستی',14,'','','','','1'),(19,'امور مالی',11,'','','','','1'),(20,'مدیریت فاکتورها و امور مالی ویژه مدیر',12,'','','','','1'),(21,'گزارشات',13,'','','','','1'),(22,'مدیریت بخش املاک',15,'','','','','1'),(23,'ثبت و مدیریت املاک',16,'','','','','1'),(24,'مدیریت خودرو',17,'','','','','1'),(25,'ثبت و مدیریت خودرو',18,'','','','','1'),(26,'پشتیبانی',19,'','','','','1'),(27,'مدیریت درگاههای بانکی',20,'','','','','1');
/*!40000 ALTER TABLE `tbl_master_page_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_news` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f2` text CHARACTER SET utf8 NOT NULL,
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '1',
  `f6` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `f7` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '1',
  `f8` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` text COLLATE utf8_unicode_ci,
  `f14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f16` text COLLATE utf8_unicode_ci,
  `f17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news`
--

LOCK TABLES `tbl_news` WRITE;
/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_option`
--

DROP TABLE IF EXISTS `tbl_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_option` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f2` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f3` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f4` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f5` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f6` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f7` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f8` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f9` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f10` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f11` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f12` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f13` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f14` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f15` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f16` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f17` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f18` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f19` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `f20` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_option`
--

LOCK TABLES `tbl_option` WRITE;
/*!40000 ALTER TABLE `tbl_option` DISABLE KEYS */;
INSERT INTO `tbl_option` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`) VALUES (1,'1','1','1','1','1','1','1','1','1','1','1','1','','','','','','','','');
/*!40000 ALTER TABLE `tbl_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ostan`
--

DROP TABLE IF EXISTS `tbl_ostan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ostan` (
  `ostan_id` int(11) NOT NULL AUTO_INCREMENT,
  `ostan_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `markaze_ostan` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `tarikhe_tasis_ostan` int(11) DEFAULT '0',
  `kode_taghsim_ostan` int(11) DEFAULT NULL COMMENT '0',
  `hamjavarha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ostan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ostan`
--

LOCK TABLES `tbl_ostan` WRITE;
/*!40000 ALTER TABLE `tbl_ostan` DISABLE KEYS */;
INSERT INTO `tbl_ostan` (`ostan_id`, `ostan_name`, `markaze_ostan`, `tarikhe_tasis_ostan`, `kode_taghsim_ostan`, `hamjavarha`) VALUES (1,'گلستان','گرگان',1376,28,'11,7,28'),(2,'ايلام','ايلام',1353,21,'30,13,25'),(3,'اصفهان','اصفهان',1316,3,'23,21,27,16,13,18,8,7'),(4,'تهران','تهران',1357,24,'7,28,29,8,18'),(5,'زنجان','زنجان',1352,17,'20,31,9,26,15,17,22'),(6,'هرمزگان','بندر عباس',1346,14,'24,19,21,10'),(7,'سمنان','سمنان',1355,22,'12,11,1,28,4,8,3,23'),(8,'قم','قم',1375,26,'4,7,3,18'),(9,'كردستان','سنندج',1337,13,'31,5,26,30'),(10,'بوشهر','بوشهر',1352,15,'6,21,27,25'),(11,'خراسان شمالي','بجنورد',1383,30,'12,7,1'),(12,'خراسان رضوي','مشهد',1316,4,'11,7,23,14'),(13,'لرستان','خرم آباد',1352,18,'30,26,18,3,16,25,2'),(14,'خراسان جنوبي','بيرجند',1383,29,'12,24,19,23'),(15,'قزوين','قزوين',1376,27,'17,28,29,18,26,5'),(16,'كهگيلويه و بويراحمد','ياسوج',1355,23,'16,3,21,10,25'),(17,'گيلان','رشت',1316,10,'28,15,5,22'),(18,'مركزي','اراك',1326,12,'15,29,4,8,3,13,26'),(19,'كرمان','كرمان',1316,8,'23,14,24,6,21'),(20,'آذربايجان شرقي','تبريز',1316,1,'22,5,31'),(21,'فارس','شيراز',1316,7,'23,19,6,10,27,3'),(22,'اردبيل','اردبيل',1372,25,'17,5,20'),(23,'يزد','يزد',1352,20,'7,12,14,19,21,3'),(24,'سيستان و بلوچستان','زاهدان',1316,6,'14,19,6'),(25,'خوزستان','اهواز',1316,5,'2,13,16,27,10'),(26,'همدان','همدان',1352,19,'5,15,18,13,30,9'),(27,'چهار محال و بختياري','شهر كرد',1352,16,'3,27,25,13'),(28,'مازندران','ساري',1316,11,'1,7,4,29,15,17'),(29,'البرز','كرج',1389,31,'4,28,15,18'),(30,'كرمانشاه','كرمانشاه',1316,9,'9,26,13,2'),(31,'آذربايجان غربي','اروميه',1316,2,'20,9,5');
/*!40000 ALTER TABLE `tbl_ostan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_page_info`
--

DROP TABLE IF EXISTS `tbl_page_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_page_info` (
  `auto_id` int(5) NOT NULL AUTO_INCREMENT,
  `f1` int(5) NOT NULL DEFAULT '1',
  `f2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f3` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `f4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f6` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f7` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f8` smallint(3) NOT NULL DEFAULT '1',
  `f9` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_page_info`
--

LOCK TABLES `tbl_page_info` WRITE;
/*!40000 ALTER TABLE `tbl_page_info` DISABLE KEYS */;
INSERT INTO `tbl_page_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`) VALUES (1,2,'مدیریت منوهای پنل مدیریتی','admin_page_info.php','Admin Menu','','','.png',2,'1'),(2,5,'تعریف سطوح دسترسی','admin_user_type.php','Admin User Type','','','.png',1,'1'),(3,5,'تعیین سطح دسترسی کاربران','admin_user_access_info.php','Set User Access Permission','','','.png',3,'1'),(4,5,'اطلاعات کاربران سایت','admin_user_info.php','User Define','','','.png',4,'1'),(5,2,'اطلاعات اصلی فروشگاه','admin_shop_info.php ','Admin Shop Info','','','.png',3,'1'),(6,5,'تعریف گروه های مشتریان','admin_customer_type.php','Admin Customer Type','','','.png',2,'1'),(8,7,'مدیریت گروه های کالایی','admin_item_group.php','Admin Item Groups','','','.png',2,'1'),(10,3,'مدیریت تصاویر اسلایدر','admin_adver_first_page.php','Admin Frist Page Advers','','','.png',9,'1'),(12,3,'مقدار دهی مشخصه های فنی کالا','admin_item_info_tec.php','','','','.gif',1,'0'),(14,4,'مدیریت پیام های ویژه مدیر','admin_panel_msg.php','','','','.png',0,'1'),(18,7,'مدیریت تصاویر کالاها','admin_item_info_pic.php','','','','.png',5,'1'),(20,4,'نامه های رسیده','show_letters.php','','','','.png',3,'1'),(21,4,'ارسال پیام','send_message.php','','','','.png',1,'1'),(22,4,'پیام های رسیده','show_inbox.php','','','','.png',2,'1'),(23,3,'تنظیمات چند زبانه','admin_language.php','','','','.png',11,'1'),(24,3,'تنظیمات پیامک های ارسالی','admin_option.php','','','','.png',5,'1'),(25,9,'نظرات کاربران در مورد کالاها','admin_item_cust_des.php','Visitors Description','arabi','rosi','.png',5,'1'),(27,3,'مدیریت متن پیامک ها','admin_sms_text.php','','','','.png',6,'1'),(29,3,'تنظیمات یو آر آل پیامک','admin_tec_option.php','','','','.png',4,'1'),(30,1,'بازگشت به صفحه آغازین سایت','index.php','','','','.png',1,'1'),(31,1,'صفحه اول پنل مدیریتی','index_admin.php','','','','.png',2,'1'),(32,1,'خروج از پنل مدیریتی','index.php?exit','','','','.png',3,'1'),(33,2,'تعریف سرتیتر منوها','admin_master_page_info.php','','','','.png',1,'1'),(38,7,'مدیریت زیرگروه های کالایی','admin_item_sub_group.php','','','','.png',3,'1'),(39,3,'مدیریت پورسانت های فروش کالا','admin_price_of_sell.php','','','','.png',7,'1'),(41,7,'ثبت کالا برای فروش','admin_user_reg_item.php','','','','.png',4,'1'),(42,9,'کالاهای در انتظار تایید','admin_user_item.php?type=0','','','','.png',1,'1'),(43,9,'کالاهای تایید شده','admin_user_item.php?type=1','','','','.png',2,'1'),(44,9,'کالاهای تایید نشده','admin_user_item.php?type=2','','','','.png',3,'1'),(45,9,'کالاهای تایید مشروط شده','admin_user_item.php?type=3','','','','.png',4,'1'),(46,10,'مدیریت فاکتورها','show_recive_order_admin.php','','','','.png',3,'0'),(47,10,'کالاهای خریداری شده','admin_show_user_kharid.php','','','','.png',1,'1'),(48,10,'کالاهای فروخته شده','admin_show_user_foroosh.php','','','','.png',2,'1'),(49,3,'پیوندهای تصویری','admin_pic_link.php','','','','.png',10,'1'),(50,16,'ویرایش پروفایل شخصی','admin_profile.php','','','','.png',1,'1'),(51,16,'مدیریت اطلاعات بانکی کاربر','admin_bank_info.php','','','','.png',2,'1'),(52,11,'کالاهای در انتظار تایید شما','admin_show_user_item.php?type=0','','','','.png',1,'1'),(53,11,'کالاهای تایید شده شما','admin_show_user_item.php?type=1','','','','.png',2,'1'),(54,11,'کالاهای تایید نشده شما','admin_show_user_item.php?type=2','','','','.png',3,'1'),(55,11,'کالاهایی که بصورت مشروط تایید شده اند','admin_show_user_item.php?type=3','','','','.png',4,'1'),(56,7,'پرداخت گروهی پورسانت ها','admin_pay_bach_price.php','','','','.png',7,'1'),(63,18,'اطلاعات استان ها','admin_ostan.php','','','','.png',1,'1'),(58,17,'پرداخت گروهی هزینه ثبت کالاها مرحله 2','admin_pay_bach_price_step2.php','','','','',1,'0'),(59,17,'ثبت کالای فروشی مرحله 2','admin_user_reg_item_step2.php','','','','',2,'0'),(60,17,'ثبت کالای فروشی مرحله 3','admin_user_reg_item_step3.php','','','','',3,'0'),(61,17,'ثبت کالای فروش مرحله 4','admin_user_reg_item_step4.php','','','','',4,'0'),(62,17,'پرداخت وجه ثبت کالا','pay_insert_item.php','','','','',6,'0'),(64,18,'تعریف روش های پستی','admin_post_method.php','','','','.png',2,'1'),(65,18,'تعریف وزن بسته های پستی','admin_post_width.php','','','','.png',3,'1'),(66,18,'هزینه بیمه محموله های پستی','admin_post_bime.php','','','','.png',4,'1'),(67,19,'فاکتور پورسانت های پرداخت شده','admin_show_user_reg_factor.php','','','','.png',2,'1'),(68,19,'فاکتور کالاهای خریداری شده','admin_show_user_kharid_factor.php','','','','.png',3,'1'),(69,19,'جزئیات تمامی تراکنش های مالی','admin_show_user_transaction.php','','','','.png',4,'1'),(70,19,'افزایش اعتبار بانک مجازی','admin_user_pay_money.php','','','','.png',5,'1'),(71,20,'مدیریت کلیه فاکتورهای خرید باز','admin_admin_sell_factor.php','','','','.png',2,'1'),(73,20,'مدیریت کلیه تراکنش های مالی','admin_admin_transaction.php','','','','.png',3,'1'),(72,20,'فاکتور پورسانت های دریافت شده','admin_admin_reg_factor.php','','','','.png',1,'1'),(75,21,'گزارش کلیه فاکتورهای خرید','admin_admin_end_sell_factor.php','','','','.png',2,'1'),(76,7,'تعریف سرتیتر گروههای کالایی','admin_item_main_group.php','','','','.png',1,'1'),(77,2,'تعریف قوانین استفاده از سایت','admin_help_koli.php','','','','.png',6,'1'),(78,22,'ثبت مشخصه های فنی املاک','admin_amlak_pre_need.php','','','','.png',1,'1'),(79,22,'ثبت زیر مجموعه های مشخصات فنی املاک','admin_amlak_pre_need_loockup.php','','','','',2,'0'),(80,23,'ثبت آگهی املاک','admin_user_reg_amlak_master.php','','','','.png',1,'1'),(81,23,'آگهی های املاک تایید شده شما','admin_show_user_amlak.php?m_id=1','','','','.png',2,'1'),(82,23,'آگهی های املاک تایید نشده شما','admin_show_user_amlak.php?m_id=2','','','','.png',3,'1'),(83,22,'آگهی های در انتظار تایید املاک','admin_user_amlak.php?type=0','','','','.png',2,'1'),(84,22,'آگهی های تایید شده املاک','admin_user_amlak.php?type=1','','','','.png',3,'1'),(85,22,'آگهی هایی تایید نشده املاک','admin_user_amlak.php?type=2','','','','.png',4,'1'),(86,22,'آگهی های تایید مشروط شده املاک','admin_user_amlak.php?type=3','','','','.png',5,'1'),(87,24,'ثبت مشخصه های فنی خودرو','admin_car_pre_need.php','','','','.png',1,'1'),(88,24,'ثبت زیر مجموعه های مشخصات فنی املاک','admin_car_pre_need_loockup.php','','','','.png',2,'0'),(89,25,'ثبت آگهی خودرو','admin_user_reg_car_master.php','','','','.png',1,'1'),(90,25,'آگهی های خودرو تایید شده شما','admin_show_user_car.php?m_id=1','','','','.png',2,'1'),(91,25,'آگهی های خودرو تایید نشده شما','admin_show_user_car.php?m_id=2','','','','.png',3,'1'),(92,24,'آگهی های در انتظار تایید خودرو','admin_user_car.php?type=0','','','','.png',2,'1'),(93,24,'آگهی های تایید شده خودرو','admin_user_car.php?type=1','','','','.png',3,'1'),(94,24,'آگهی های تایید نشده خودرو','admin_user_car.php?type=2','','','','.png',4,'1'),(95,24,'آگهی های تایید مشروط شده خودرو','admin_user_car.php?type=3','','','','.png',5,'1'),(96,3,'تعریف انواع آگهی','admin_adver_type.php','','','','.png',8,'1'),(97,21,'گزارش پورسانت های دریافت شده','admin_admin_reg_factor_close.php','','','','.png',1,'1'),(99,2,'مدیریت مجوزهای فروشگاه','admin_license.php','','','','.png',4,'1'),(117,4,'مدیریت ایمیل ها','http://webmail.vachar724.com/','','','','.png',1,'1'),(101,3,'تنظیم متاتگ ها','admin_metateg.php','','','','.png',1,'1'),(102,3,'تنظیم Favicon','admin_favicon.php','','','','.png',2,'1'),(103,3,'مدیریت نقشه سایت','sitemap.php','','','','.png',3,'1'),(104,7,'افزایش/کاهش موجودی کالاها','admin_afzayesh_kala.php','','','','.png',6,'1'),(105,7,'قیمت گذاری پویا','admin_auto_price.php','','','','.png',8,'1'),(106,19,'بانک مجازی','admin_bank.php','','','','.png',1,'1'),(108,21,'گزارش سود فروشگاه','admin_profit.php','','','','.png',3,'1'),(109,26,'تهیه نسخه پشتیبان','admin_backup.php','','','','.png',1,'1'),(110,26,'مدیریت تیکت ها','admin_ticket.php','','','','.png',2,'1'),(111,26,'مدیریت پرسش و پاسخ ها','admin_faq.php','','','','.png',3,'1'),(112,27,'درگاه بانک ملت','payment_bank_mellat.php','','','','.png',1,'1'),(113,27,'درگاه بانک ملی','payment_bank_melli.php','','','','.png',2,'1'),(114,27,'درگاه بانک صادرات','payment_bank_saderat.php','','','','.png',3,'1'),(115,27,'درگاه بانک پارسیان','payment_bank_parsian.php','','','','.png',4,'1'),(116,21,'گزارش آمار بازدید','admireport_items.php','','','','.png',4,'1'),(118,2,'مقالات سایت','admin_maghale.php','','','','',5,'1');
/*!40000 ALTER TABLE `tbl_page_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_panel_msg`
--

DROP TABLE IF EXISTS `tbl_panel_msg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_panel_msg` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f4` text COLLATE utf8_unicode_ci NOT NULL,
  `f5` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f7` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f8` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f9` text CHARACTER SET utf8,
  `f10` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `f11` text CHARACTER SET utf8,
  `f12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_panel_msg`
--

LOCK TABLES `tbl_panel_msg` WRITE;
/*!40000 ALTER TABLE `tbl_panel_msg` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_panel_msg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_parts_page`
--

DROP TABLE IF EXISTS `tbl_parts_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_parts_page` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_parts_page`
--

LOCK TABLES `tbl_parts_page` WRITE;
/*!40000 ALTER TABLE `tbl_parts_page` DISABLE KEYS */;
INSERT INTO `tbl_parts_page` (`auto_id`, `f1`, `f2`, `f3`) VALUES (1,'p1','Ù‡Ø¯Ø± ØµÙØ­Ù‡','header.php'),(2,'p2','Ù…Ù†ÙˆÙ‡Ø§','menu.php'),(3,'p3','Ù…Ø§Ø±Ú©ÛŒ','marqee.php'),(4,'p4','Ø§Ø³Ù„Ø§ÛŒØ¯Ø±','slider.php'),(5,'p5','Ú¯Ø±ÙˆÙ‡ Ù‡Ø§ÛŒÛŒ Ú©Ø§Ù„Ø§ÛŒÛŒ','item_groups.php'),(6,'p5','Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª ÙˆÛŒÚ˜Ù‡','sp_items.php'),(7,'p5','Ú©Ø§Ù„Ø§Ù‡Ø§ÛŒ ØªØ®ÙÛŒÙ Ø®ÙˆØ±Ø¯Ù‡','off_items.php'),(8,'p5','Ù¾Ø± Ø¨Ø§Ø²Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','more_visited_itmes.php'),(9,'p5','Ø¬Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','new_items.php'),(10,'p6','Ú¯Ø±ÙˆÙ‡ Ù‡Ø§ÛŒÛŒ Ú©Ø§Ù„Ø§ÛŒÛŒ','item_groups.php'),(11,'p6','Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª ÙˆÛŒÚ˜Ù‡','sp_items.php'),(12,'p6','Ú©Ø§Ù„Ø§Ù‡Ø§ÛŒ ØªØ®ÙÛŒÙ Ø®ÙˆØ±Ø¯Ù‡','off_items.php'),(13,'p7','Ú¯Ø±ÙˆÙ‡ Ù‡Ø§ÛŒÛŒ Ú©Ø§Ù„Ø§ÛŒÛŒ','item_groups.php'),(14,'p7','Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª ÙˆÛŒÚ˜Ù‡','sp_items.php'),(15,'p8','Ú¯Ø±ÙˆÙ‡ Ù‡Ø§ÛŒÛŒ Ú©Ø§Ù„Ø§ÛŒÛŒ','item_groups.php'),(16,'p9','Ø¹Ù†Ø§ÙˆÛŒÙ† Ø§Ø®Ø¨Ø§Ø±','news_title.php'),(17,'p10','Ø¹Ù†Ø§ÙˆÛŒÙ† Ø§Ø®Ø¨Ø§Ø±','news_title.php'),(18,'p11','Ø¹Ù†Ø§ÙˆÛŒÙ† Ø§Ø®Ø¨Ø§Ø±','news_title.php'),(19,'p12','Ø¹Ù†Ø§ÙˆÛŒÙ† Ø§Ø®Ø¨Ø§Ø±','news_title.php'),(20,'p13','Ø¬ÙˆØ§ÛŒØ² Ø¯Ø±ÛŒØ§ÙØªÛŒ','show_honor.php'),(21,'p14','ÙÙˆØªØ± Ø³Ø§ÛŒØª','footer.php'),(22,'p6','Ù¾Ø± Ø¨Ø§Ø²Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','more_visited_itmes.php'),(23,'p6','Ø¬Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','new_items.php'),(24,'p7','Ú©Ø§Ù„Ø§Ù‡Ø§ÛŒ ØªØ®ÙÛŒÙ Ø®ÙˆØ±Ø¯Ù‡','off_items.php'),(25,'p7','Ù¾Ø± Ø¨Ø§Ø²Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','more_visited_itmes.php'),(26,'p7','Ø¬Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','new_items.php'),(28,'p5','Ù…Ø­Ø¨ÙˆØ¨ ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','mahboob_items.php'),(29,'p6','Ù…Ø­Ø¨ÙˆØ¨ ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','mahboob_items.php'),(30,'p7','Ù…Ø­Ø¨ÙˆØ¨ ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','mahboob_items.php'),(31,'p8','Ù¾ÛŒØ´Ù†Ù‡Ø§Ø¯Ø§Øª ÙˆÛŒÚ˜Ù‡','sp_items.php'),(32,'p8','Ú©Ø§Ù„Ø§Ù‡Ø§ÛŒ ØªØ®ÙÛŒÙ Ø®ÙˆØ±Ø¯Ù‡','off_items.php'),(33,'p8','Ù¾Ø± Ø¨Ø§Ø²Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','more_visited_itmes.php'),(34,'p8','Ø¬Ø¯ÛŒØ¯ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','new_items.php'),(35,'p8','Ù…Ø­Ø¨ÙˆØ¨ ØªØ±ÛŒÙ† Ú©Ø§Ù„Ø§Ù‡Ø§','mahboob_items.php');
/*!40000 ALTER TABLE `tbl_parts_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment` (
  `auto_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f5` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f7` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f8` bigint(20) NOT NULL DEFAULT '0',
  `f9` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f10` text COLLATE utf8_unicode_ci,
  `f11` text COLLATE utf8_unicode_ci,
  `f12` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f14` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f15` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment`
--

LOCK TABLES `tbl_payment` WRITE;
/*!40000 ALTER TABLE `tbl_payment` DISABLE KEYS */;
INSERT INTO `tbl_payment` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`) VALUES (1,1,-1,1000,'1397/9/21','18:09','1','3',0,'143865369835','تست درگاه',NULL,NULL,NULL,NULL,NULL),(2,1,-1,1000,'1397/9/21','18:11','1','2',2,'143865451971','بابت پرداخت هزینه فاکتور خرید کالا از سایت به شماره :2',NULL,NULL,NULL,NULL,NULL),(3,0,-1,0,'1397/9/21','18:13','1','3',0,'143865534632','',NULL,'1','1000','',''),(4,0,-1,1000,'1397/9/21','18:14','1','3',0,'143865584098','تست پرداخت عمومی',NULL,'سید مهدی عربی','09151307726','info@enamad.ir','تست پرداخت عمومی'),(5,0,-1,0,'1397/10/19','21:43','1','3',0,'145007763487','',NULL,'','','',''),(6,0,-1,0,'1398/1/18','22:52','1','3',0,'148846765795','',NULL,'','','',''),(7,0,-1,90000,'1398/1/18','22:54','1','3',0,'148846813062','',NULL,'سید مهدی عربی','09151307726','seyedmehdiarabi@gmail.com',''),(8,0,-1,0,'1398/1/20','15:58','1','3',0,'148911492915','',NULL,'','','',''),(9,0,-1,0,'1398/1/26','15:35','1','3',0,'149159417417','',NULL,'','','',''),(10,0,-1,0,'1398/2/1','10:52','1','3',0,'149422828456','',NULL,'','','',''),(11,0,-1,0,'1398/2/2','21:26','1','3',0,'149496743245','',NULL,'','','',''),(12,0,-1,0,'1398/2/5','15:42','1','3',0,'149620640118','',NULL,'','','',''),(13,0,-1,0,'1398/2/8','21:11','1','3',0,'149770472330','',NULL,'','','',''),(14,0,-1,0,'1398/2/10','14:49','1','3',0,'149846082447','',NULL,'','','',''),(15,0,-1,0,'1398/2/25','19:24','1','3',0,'150530930306','',NULL,'','','',''),(16,0,-1,0,'1398/2/27','13:14','1','3',0,'150601674247','',NULL,'','','',''),(17,0,-1,0,'1398/3/2','11:27','1','3',0,'150880375451','',NULL,'','','',''),(18,0,-1,0,'1398/3/9','16:31','1','3',0,'151202306658','',NULL,'','','',''),(19,0,-1,0,'1398/3/20','16:30','1','3',0,'151700288983','',NULL,'','','',''),(20,1,-1,1160000,'1398/3/26','16:01','1','2',3,'151982098784','بابت پرداخت هزینه فاکتور خرید کالا از سایت به شماره :3',NULL,NULL,NULL,NULL,NULL),(21,2,-1,1160000,'1398/3/26','16:08','1','2',4,'151982278736','بابت پرداخت هزینه فاکتور خرید کالا از سایت به شماره :4',NULL,NULL,NULL,NULL,NULL),(22,0,-1,0,'1398/4/12','12:47','1','3',0,'152832653967','',NULL,'','','',''),(23,0,-1,0,'1398/4/17','9:30','1','3',0,'153063085761','',NULL,'','','',''),(24,0,-1,0,'1398/4/21','19:18','1','3',0,'153280328107','',NULL,'','','',''),(25,0,-1,0,'1398/4/27','9:46','1','3',0,'153546656362','',NULL,'','','',''),(26,0,-1,0,'1398/5/6','19:35','1','3',0,'154084870708','',NULL,'','','',''),(27,0,-1,0,'1398/5/27','20:57','1','3',0,'155131995114','',NULL,'','','',''),(28,0,-1,0,'1398/6/3','12:01','1','3',0,'155464543002','',NULL,'','','',''),(29,0,-1,0,'1398/6/4','7:34','1','3',0,'155506023479','',NULL,'','','',''),(30,0,-1,0,'1398/6/16','11:21','1','3',0,'156115780876','',NULL,'','','',''),(31,0,-1,0,'1398/8/22','11:31','1','3',0,'159431179411','',NULL,'','','','');
/*!40000 ALTER TABLE `tbl_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment_mellat`
--

DROP TABLE IF EXISTS `tbl_payment_mellat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment_mellat` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` text COLLATE utf8_unicode_ci,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` text CHARACTER SET utf8,
  `f6` text CHARACTER SET utf8,
  `f7` text CHARACTER SET utf8,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` text CHARACTER SET utf8,
  `f12` text CHARACTER SET utf8,
  `f13` text CHARACTER SET utf8,
  `f14` text CHARACTER SET utf8,
  `f15` text CHARACTER SET utf8,
  `f16` text COLLATE utf8_unicode_ci,
  `f17` text COLLATE utf8_unicode_ci,
  `f18` text COLLATE utf8_unicode_ci,
  `f19` text CHARACTER SET utf8,
  `f20` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment_mellat`
--

LOCK TABLES `tbl_payment_mellat` WRITE;
/*!40000 ALTER TABLE `tbl_payment_mellat` DISABLE KEYS */;
INSERT INTO `tbl_payment_mellat` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`) VALUES (1,'به پرداخت ملت','1565095','haraj123','27390904','http://arkaengineering.ir/pay_vajh_direct_mellat.php?step=ret\"','','','','0',NULL,NULL,NULL,NULL,NULL,'1','0','1','1',NULL,'0');
/*!40000 ALTER TABLE `tbl_payment_mellat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment_melli`
--

DROP TABLE IF EXISTS `tbl_payment_melli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment_melli` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` text COLLATE utf8_unicode_ci,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` text CHARACTER SET utf8,
  `f6` text CHARACTER SET utf8,
  `f7` text CHARACTER SET utf8,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` text CHARACTER SET utf8,
  `f12` text CHARACTER SET utf8,
  `f13` text CHARACTER SET utf8,
  `f14` text CHARACTER SET utf8,
  `f15` text CHARACTER SET utf8,
  `f16` text COLLATE utf8_unicode_ci,
  `f17` text COLLATE utf8_unicode_ci,
  `f18` text COLLATE utf8_unicode_ci,
  `f19` text CHARACTER SET utf8,
  `f20` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment_melli`
--

LOCK TABLES `tbl_payment_melli` WRITE;
/*!40000 ALTER TABLE `tbl_payment_melli` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_payment_melli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment_parsian`
--

DROP TABLE IF EXISTS `tbl_payment_parsian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment_parsian` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` text COLLATE utf8_unicode_ci,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` text CHARACTER SET utf8,
  `f6` text CHARACTER SET utf8,
  `f7` text CHARACTER SET utf8,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` text CHARACTER SET utf8,
  `f12` text CHARACTER SET utf8,
  `f13` text CHARACTER SET utf8,
  `f14` text CHARACTER SET utf8,
  `f15` text CHARACTER SET utf8,
  `f16` text COLLATE utf8_unicode_ci,
  `f17` text COLLATE utf8_unicode_ci,
  `f18` text COLLATE utf8_unicode_ci,
  `f19` text CHARACTER SET utf8,
  `f20` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment_parsian`
--

LOCK TABLES `tbl_payment_parsian` WRITE;
/*!40000 ALTER TABLE `tbl_payment_parsian` DISABLE KEYS */;
INSERT INTO `tbl_payment_parsian` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`) VALUES (1,'176.9.157.105','176.9.157.105','176.9.157.105','176.9.157.105','176.9.157.105','176.9.157.105','176.9.157.105','176.9.157.105',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_payment_parsian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_payment_saderat`
--

DROP TABLE IF EXISTS `tbl_payment_saderat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment_saderat` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'code',
  `f1` text COLLATE utf8_unicode_ci NOT NULL,
  `f2` text COLLATE utf8_unicode_ci NOT NULL,
  `f3` text CHARACTER SET utf8 COMMENT 'famil_user',
  `f4` text COLLATE utf8_unicode_ci,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` text COLLATE utf8_unicode_ci NOT NULL,
  `f11` text CHARACTER SET utf8 NOT NULL,
  `f12` text COLLATE utf8_unicode_ci,
  `f13` text COLLATE utf8_unicode_ci NOT NULL,
  `f14` int(11) DEFAULT NULL,
  `f15` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f16` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f17` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f20` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f21` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f22` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f23` int(11) DEFAULT NULL,
  `f24` int(11) DEFAULT NULL,
  `f25` varchar(1) COLLATE utf8_unicode_ci DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment_saderat`
--

LOCK TABLES `tbl_payment_saderat` WRITE;
/*!40000 ALTER TABLE `tbl_payment_saderat` DISABLE KEYS */;
INSERT INTO `tbl_payment_saderat` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`) VALUES (1,'ایران کیش','AB85','-','-','-','-','-','176.9.157.105',NULL,'','',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1');
/*!40000 ALTER TABLE `tbl_payment_saderat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pic_link`
--

DROP TABLE IF EXISTS `tbl_pic_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pic_link` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f2` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f3` smallint(6) NOT NULL DEFAULT '1',
  `f4` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(10) COLLATE utf8_unicode_ci DEFAULT '_self',
  `f6` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pic_link`
--

LOCK TABLES `tbl_pic_link` WRITE;
/*!40000 ALTER TABLE `tbl_pic_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pic_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_post_bime`
--

DROP TABLE IF EXISTS `tbl_post_bime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_post_bime` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` float NOT NULL DEFAULT '0',
  `f4` int(11) NOT NULL DEFAULT '0',
  `f5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_post_bime`
--

LOCK TABLES `tbl_post_bime` WRITE;
/*!40000 ALTER TABLE `tbl_post_bime` DISABLE KEYS */;
INSERT INTO `tbl_post_bime` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`) VALUES (1,0,2000000000,0.2,0,'','');
/*!40000 ALTER TABLE `tbl_post_bime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_post_method`
--

DROP TABLE IF EXISTS `tbl_post_method`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_post_method` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` int(11) NOT NULL DEFAULT '0',
  `f5` int(11) NOT NULL DEFAULT '0',
  `f6` int(11) NOT NULL DEFAULT '0',
  `f7` smallint(6) NOT NULL DEFAULT '0',
  `f8` int(11) NOT NULL DEFAULT '0',
  `f9` int(11) NOT NULL DEFAULT '0',
  `f10` smallint(6) NOT NULL DEFAULT '0',
  `f11` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f12` smallint(6) NOT NULL DEFAULT '0',
  `f13` smallint(6) NOT NULL DEFAULT '0',
  `f14` int(11) NOT NULL DEFAULT '0',
  `f15` int(11) NOT NULL DEFAULT '0',
  `f16` int(11) NOT NULL DEFAULT '0',
  `f17` int(11) NOT NULL DEFAULT '0',
  `f18` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_post_method`
--

LOCK TABLES `tbl_post_method` WRITE;
/*!40000 ALTER TABLE `tbl_post_method` DISABLE KEYS */;
INSERT INTO `tbl_post_method` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`) VALUES (2,'پیشتاز',50000,50000,60000,60000,6600,9,21400,4800,0,'f2',2000,1000,21000,21000,21000,21000,6000);
/*!40000 ALTER TABLE `tbl_post_method` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_post_width`
--

DROP TABLE IF EXISTS `tbl_post_width`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_post_width` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(11) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` int(11) NOT NULL DEFAULT '0',
  `f5` int(11) NOT NULL DEFAULT '0',
  `f6` int(11) NOT NULL DEFAULT '0',
  `f7` int(11) NOT NULL DEFAULT '0',
  `f8` int(11) NOT NULL DEFAULT '0',
  `f9` int(11) NOT NULL DEFAULT '0',
  `f10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_post_width`
--

LOCK TABLES `tbl_post_width` WRITE;
/*!40000 ALTER TABLE `tbl_post_width` DISABLE KEYS */;
INSERT INTO `tbl_post_width` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`) VALUES (8,2,0,500,50000,50000,60000,60000,0,0,''),(9,2,501,1000,65000,65000,80000,80000,0,0,''),(10,2,1001,2000,86000,86000,105000,105000,0,0,'');
/*!40000 ALTER TABLE `tbl_post_width` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_price_of_sell`
--

DROP TABLE IF EXISTS `tbl_price_of_sell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_price_of_sell` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` int(11) DEFAULT '0',
  `f4` int(11) DEFAULT '0',
  `f5` float DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_price_of_sell`
--

LOCK TABLES `tbl_price_of_sell` WRITE;
/*!40000 ALTER TABLE `tbl_price_of_sell` DISABLE KEYS */;
INSERT INTO `tbl_price_of_sell` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`) VALUES (8,'تعرفه 7.5 درصد','',3000001,4000000,7.5),(7,'تعرفه 8 درصد','',2000001,3000000,8),(6,'تعرفه 10 درصد','',1000001,2000000,10),(5,'تعرفه 12 درصد','',0,1000000,12),(9,'تعرفه 6 درصد','',4000001,5000000,6),(10,'تعرفه 4 درصد','',5000001,6000000,4),(11,'تعرفه 3.5 درصد','',6000001,999999999,3.5);
/*!40000 ALTER TABLE `tbl_price_of_sell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_recive_order_detail`
--

DROP TABLE IF EXISTS `tbl_recive_order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_recive_order_detail` (
  `auto_id` int(11) NOT NULL DEFAULT '0',
  `f1` bigint(16) NOT NULL DEFAULT '0',
  `f2` int(11) NOT NULL DEFAULT '0',
  `f3` int(11) NOT NULL DEFAULT '0',
  `f4` int(11) NOT NULL DEFAULT '0',
  `f5` smallint(6) NOT NULL DEFAULT '1',
  `f6` text COLLATE utf8_unicode_ci,
  `f7` text CHARACTER SET utf8,
  `f8` bigint(20) NOT NULL DEFAULT '0',
  `f9` int(11) NOT NULL DEFAULT '0',
  `f10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f11` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f12` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` text COLLATE utf8_unicode_ci,
  `f14` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f15` text COLLATE utf8_unicode_ci,
  `f16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_recive_order_detail`
--

LOCK TABLES `tbl_recive_order_detail` WRITE;
/*!40000 ALTER TABLE `tbl_recive_order_detail` DISABLE KEYS */;
INSERT INTO `tbl_recive_order_detail` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`) VALUES (42,1,47,1000,1000,1,NULL,NULL,1,0,'0',NULL,NULL,NULL,NULL,NULL,NULL),(43,2,47,1000,1000,1,NULL,NULL,0,0,'0',NULL,NULL,NULL,NULL,NULL,NULL),(83,3,49,1160000,1160000,1,NULL,NULL,0,0,'پیشتاز','1398/03/26','012345678909876543210','','1398/03/26','متشکرم',NULL),(84,4,49,1160000,1160000,1,NULL,NULL,0,0,'0',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_recive_order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_recive_order_master`
--

DROP TABLE IF EXISTS `tbl_recive_order_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_recive_order_master` (
  `auto_id` bigint(16) NOT NULL AUTO_INCREMENT,
  `f1` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f2` int(11) DEFAULT NULL,
  `f3` int(5) DEFAULT NULL,
  `f4` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` text CHARACTER SET utf8,
  `f7` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_recive_order_master`
--

LOCK TABLES `tbl_recive_order_master` WRITE;
/*!40000 ALTER TABLE `tbl_recive_order_master` DISABLE KEYS */;
INSERT INTO `tbl_recive_order_master` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`) VALUES (1,'154461974881',1,1,'1397/9/21','18:00','بابت خرید از سایت واچار. کد رهگیری: 143864984772','1'),(2,'15446256861',1,1,'1397/9/21','18:11','بابت خرید از سایت واچار. کد رهگیری: 143865451971','1'),(3,'156068458517',1,1,'1398/3/26','16:01','بابت خرید از سایت آرکا. کد رهگیری: 151982098784','1'),(4,'15606850768',2,1,'1398/3/26','16:08','بابت خرید از سایت آرکا. کد رهگیری: 151982278736','1');
/*!40000 ALTER TABLE `tbl_recive_order_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_service_temp`
--

DROP TABLE IF EXISTS `tbl_service_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_service_temp` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `F4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_service_temp`
--

LOCK TABLES `tbl_service_temp` WRITE;
/*!40000 ALTER TABLE `tbl_service_temp` DISABLE KEYS */;
INSERT INTO `tbl_service_temp` (`auto_id`, `f1`, `f2`, `f3`, `F4`, `f5`, `f6`, `f7`, `f8`, `f9`) VALUES (12,'Ù…Ø´Ø§ÙˆØ±Ù‡ ÙÙ†ÛŒ','ÙˆØ§Ø­Ø¯ ÙÙ†ÛŒ-Ù…Ù‡Ù†Ø¯Ø³ÛŒ Ø§ Ø¢Ù…Ø§Ø¯Ù‡ Ù‡Ù…Ú©Ø§Ø±ÛŒ Ø¨Ø§ Ù…Ø´ØªØ±ÛŒØ§Ù† Ùˆ Ú©Ø§Ø±Ø´Ù†Ø§Ø³Ø§Ù† Ù…Ø­ØªØ±Ù… Ø¬Ù‡Øª Ø§Ø±Ø§Ø¦Ù‡ Ø§Ø·Ù„Ø§Ø¹Ø§Øª ÙÙ†ÛŒ Ùˆ Ø±Ø§Ù‡Ú©Ø§Ø±Ù‡Ø§ÛŒ Ù…Ù†Ø§Ø³Ø¨ Ø¬Ù‡Øª Ø¹Ø§ÛŒÙ‚Ú©Ø§Ø±ÛŒ Ø¯Ø± Ø§Ù†ÙˆØ§Ø¹ Ø³Ø§Ø²Ù‡ Ù‡Ø§ÛŒ Ø³Ø§Ø®ØªÙ…Ø§Ù†ÛŒØŒ ØªØ£Ø³ÛŒØ³Ø§ØªÛŒ Ùˆ Ø´Ù‡Ø±ÛŒ Ù…ÛŒ Ø¨Ø§Ø´Ø¯.','1','Changes are occurring','Changes are occurring on the home\r\nbusy making your own dream\r\nmore time with your nearest and dearest\r\nfor free. You can replace all this\r\nlegal action against a photographer','','','',''),(13,'ØªÙˆÙ„ÛŒØ¯ Ø¨Ø± Ù…Ø¨Ù†Ø§ÛŒ Ø³ÙØ§Ø±Ø´',' Ø¨Ù‡ Ø¹Ù†ÙˆØ§Ù† Ø¨Ø²Ø±Ú¯ØªØ±ÛŒÙ† Ùˆ ØªØ®ØµØµÛŒ ØªØ±ÛŒÙ† ØªÙˆÙ„ÛŒØ¯ Ú©Ù†Ù†Ø¯Ù‡ Ø¹Ø§ÛŒÙ‚ Ù‡Ø§ÛŒ Ø±Ø·ÙˆØ¨ØªÛŒ Ø¯Ø± Ø§ÛŒØ±Ø§Ù† Ø¨Ø§ Ø¯Ø§Ø±Ø§ Ø¨ÙˆØ¯Ù† ÙˆØ§Ø­Ø¯ ØªØ­Ù‚ÛŒÙ‚ Ùˆ ØªÙˆØ³Ø¹Ù‡ Ø¢Ù…Ø§Ø¯Ú¯ÛŒ Ø¯Ø§Ø±Ø¯ Ø§Ù†ÙˆØ§Ø¹ Ø¹Ø§ÛŒÙ‚ Ø±Ø·ÙˆØ¨ØªÛŒ Ø®Ø§Øµ Ø¨Ø§ Ù…Ø´Ø®ØµØ§Øª Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ù…Ø´ØªØ±ÛŒØ§Ù† Ú¯Ø±Ø§Ù…ÛŒ Ø±Ø§ Ø¨Ø±Ø§ÛŒ Ú©Ø§Ø±Ø¨Ø±Ø¯Ù‡Ø§ÛŒ ÙˆÛŒÚ˜Ù‡ Ø¨ØµÙˆØ±Øª Ø³ÙØ§Ø±Ø´ÛŒ Ø·Ø±Ø§Ø­ÛŒ Ùˆ ØªÙˆÙ„ÛŒØ¯ Ù†Ù…Ø§ÛŒØ¯.Ø¨Ù‡ Ù…Ù†Ø¸ÙˆØ± Ø§Ø±Ø§Ø¦Ù‡ Ø³ÙØ§Ø±Ø´ Ù…ÛŒ ØªÙˆØ§Ù†ÛŒØ¯ Ù…Ø´Ø®ØµØ§Øª ÙÙ†ÛŒ Ø¹Ø§ÛŒÙ‚ Ù…ÙˆØ±Ø¯ Ù†ÛŒØ§Ø² ÛŒØ§ Ú©Ø§Ø±Ø¨Ø±Ø¯ Ùˆ Ù…Ø­Ù„ Ù…ØµØ±Ù Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ø®ÙˆØ¯ Ø±Ø§ Ø¨Ù‡ Ø´Ø±Ú©Øª Ø§Ø¹Ù„Ø§Ù… Ù†Ù…ÙˆØ¯Ù‡ ØªØ§ Ø¹Ø§ÛŒÙ‚ Ø±Ø·ÙˆØ¨ØªÛŒ Ù…Ù†Ø§Ø³Ø¨ ØªÙˆØ³Ø· ÙˆØ§Ø­Ø¯ØªØ­Ù‚ÛŒÙ‚ Ùˆ ØªÙˆØ³Ø¹Ù‡ Ø´Ø±Ú©ØªØŒ Ø·Ø±Ø§Ø­ÛŒ Ùˆ Ù¾Ø³ Ø§Ø² Ø§Ù†Ø¬Ø§Ù… ØªØ³Øª Ù‡Ø§ÛŒ Ù„Ø§Ø²Ù… ØªÙˆÙ„ÛŒØ¯ Ùˆ ØªØ­ÙˆÛŒÙ„ Ù…ÛŒ Ú¯Ø±Ø¯Ø¯.','1','Productive','talks over his future with Ferrari, and the Italian manufacturer s outgoing president, Luca Di Montezemolo, hopes a suitable decision can be reached talks over his future with Ferrari, and the Italian manufacturer s outgoing president, Luca Di Montezemolo, hopes a suitable decision can be reached','','','',''),(14,'Ø®Ø¯Ù…Ø§Øª Ù¾Ø³ Ø§Ø² ÙØ±ÙˆØ´ (Ø¨ÛŒÙ…Ù‡ Ù†Ø§Ù…Ù‡)',' Ú©ÛŒÙÛŒØª Ù…Ø­ØµÙˆÙ„Ø§Øª Ø®ÙˆØ¯ Ø±Ø§ ØªØ¶Ù…ÛŒÙ† Ù†Ù…ÙˆØ¯Ù‡ Ùˆ Ø¨Ù‡ ØªÙˆÙ„ÛŒØ¯ Ùˆ ØªÙˆØ²ÛŒØ¹ Ú©Ø§Ù„Ø§Ù‡Ø§ÛŒ Ù…Ø±ØºÙˆØ¨ Ùˆ Ø¨Ø§ Ø­Ø¯Ø§Ú©Ø«Ø± Ú©ÛŒÙÛŒØª Ù…ØªØ¹Ù‡ Ø¯ Ø§Ø³Øª. Ú©Ù„ÛŒÙ‡ Ù…Ø­ØµÙˆÙ„Ø§Øª Ø§ÛŒÙ† Ø´Ø±Ú©Øª Ø¯Ø§Ø±Ø§ÛŒ Ø¨ÛŒÙ…Ù‡ Ù†Ø§Ù…Ù‡ 7 Ø³Ø§Ù„Ù‡ Ø§Ø² Ø´Ø±Ú©Øª Ø¨ÛŒÙ…Ù‡ Ø§ÛŒØ±Ø§Ù† Ù…ÛŒ Ø¨Ø§Ø´Ø¯ Ú©Ù‡ Ù¾Ø³ Ø§Ø² Ù†ØµØ¨ Ø¹Ø§ÛŒÙ‚ ØªÙˆØ³Ø· Ø¯ÙØªØ± Ù†ØµØ¨ Ø¯Ø± 4 Ù†Ø³Ø®Ù‡ ØªÙ†Ø¸ÛŒÙ… Ù…ÛŒ Ú¯Ø±Ø¯Ø¯. ÛŒÚ© Ù†Ø³Ø®Ù‡ Ø§Ø² Ø¨ÛŒÙ…Ù‡ Ù†Ø§Ù…Ù‡ Ø¯Ø± Ø§Ø®ØªÛŒØ§Ø± Ø¯ÙØªØ± Ù†ØµØ¨ Ø¨Ø§Ù‚ÛŒ Ù…Ø§Ù†Ø¯Ù‡ Ùˆ Ø³Ø§ÛŒØ± Ù†Ø³Ø® Ø¯Ø± Ø§Ø®ØªÛŒØ§Ø± Ù…Ø´ØªØ±ÛŒ ØŒ Ø´Ø±Ú©Øª Ø§ÛŒØ²ÙˆÚ¯Ø§Ù… Ø´Ø±Ù‚ Ùˆ Ø´Ø±Ú©Øª Ø¨ÛŒÙ…Ù‡ Ø§ÛŒØ±Ø§Ù† Ù‚Ø±Ø§Ø± Ù…ÛŒ Ú¯ÛŒØ±Ø¯.','1','Insurance','has published a video that shows charred plane wreckage and the beheading of a man identified as a pilot of a missing Nigerian Air Force jet, bolstering the has published a video that shows charred plane wreckage and the beheading of a man identified as a pilot of a missing Nigerian Air Force jet, bolstering the ','','','',''),(15,'Ø¢Ù…ÙˆØ²Ø´','Ø¨Ù‡ Ù…Ù†Ø¸ÙˆØ± Ø§Ø±Ø§Ø¦Ù‡ Ø³ÙØ§Ø±Ø´ Ù…ÛŒ ØªÙˆØ§Ù†ÛŒØ¯ Ù…Ø´Ø®ØµØ§Øª ÙÙ†ÛŒ Ø¹Ø§ÛŒÙ‚ Ù…ÙˆØ±Ø¯ Ù†ÛŒØ§Ø² ÛŒØ§ Ú©Ø§Ø±Ø¨Ø±Ø¯ Ùˆ Ù…Ø­Ù„ Ù…ØµØ±Ù Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ø®ÙˆØ¯ Ø±Ø§ Ø¨Ù‡ Ø´Ø±Ú©Øª Ø§Ø¹Ù„Ø§Ù… Ù†Ù…ÙˆØ¯Ù‡ ØªØ§ Ø¹Ø§ÛŒÙ‚ Ø±Ø·ÙˆØ¨ØªÛŒ Ù…Ù†Ø§Ø³Ø¨ ØªÙˆØ³Ø· ÙˆØ§Ø­Ø¯ØªØ­Ù‚ÛŒÙ‚ Ùˆ ØªÙˆØ³Ø¹Ù‡ Ø´Ø±Ú©ØªØŒ Ø·Ø±Ø§Ø­ÛŒ Ùˆ Ù¾Ø³ Ø§Ø² Ø§Ù†Ø¬Ø§Ù… ØªØ³Øª Ù‡Ø§ÛŒ Ù„Ø§Ø²Ù… ØªÙˆÙ„ÛŒØ¯ Ùˆ ØªØ­ÙˆÛŒÙ„ Ù…ÛŒ Ú¯Ø±Ø¯Ø¯. Ø¨Ù‡ Ù…Ù†Ø¸ÙˆØ± Ø§Ø±Ø§Ø¦Ù‡ Ø³ÙØ§Ø±Ø´ Ù…ÛŒ ØªÙˆØ§Ù†ÛŒØ¯ Ù…Ø´Ø®ØµØ§Øª ÙÙ†ÛŒ Ø¹Ø§ÛŒÙ‚ Ù…ÙˆØ±Ø¯ Ù†ÛŒØ§Ø² ÛŒØ§ Ú©Ø§Ø±Ø¨Ø±Ø¯ Ùˆ Ù…Ø­Ù„ Ù…ØµØ±Ù Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ø®ÙˆØ¯ Ø±Ø§ Ø¨Ù‡ Ø´Ø±Ú©Øª Ø§Ø¹Ù„Ø§Ù… Ù†Ù…ÙˆØ¯Ù‡ ØªØ§ Ø¹Ø§ÛŒÙ‚ Ø±Ø·ÙˆØ¨ØªÛŒ Ù…Ù†Ø§Ø³Ø¨ ØªÙˆØ³Ø· ÙˆØ§Ø­Ø¯ØªØ­Ù‚ÛŒÙ‚ Ùˆ ØªÙˆØ³Ø¹Ù‡ Ø´Ø±Ú©ØªØŒ Ø·Ø±Ø§Ø­ÛŒ Ùˆ Ù¾Ø³ Ø§Ø² Ø§Ù†Ø¬Ø§Ù… ØªØ³Øª Ù‡Ø§ÛŒ Ù„Ø§Ø²Ù… ØªÙˆÙ„ÛŒØ¯ Ùˆ ØªØ­ÙˆÛŒÙ„ Ù…ÛŒ Ú¯Ø±Ø¯Ø¯.','1','Learning','Changes are occurring on the home busy making your own dream more time with your nearest and dearest for free. You can replace all this legal action against a hotographer Changes are occurring on the home busy making your own dream more time with your nearest and dearest for free. You can replace all this legal action against a photographer ','','','',''),(17,'Ø®Ø¯Ù…Øª Ø¬Ø¯ÛŒØ¯','ØªØ§ØªØ§ØªØ§Øª','1','NEW SERVICES','NEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICESNEW SERVICES','','','','');
/*!40000 ALTER TABLE `tbl_service_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_shahr`
--

DROP TABLE IF EXISTS `tbl_shahr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_shahr` (
  `shahr_id` int(11) NOT NULL AUTO_INCREMENT,
  `shomare` int(11) DEFAULT NULL,
  `shahrestan` varchar(255) DEFAULT NULL,
  `markaze_shahrestan` varchar(255) DEFAULT NULL,
  `tarikhe_tasis` varchar(255) DEFAULT NULL,
  `kode_taghsim` varchar(255) DEFAULT NULL,
  `ostan_name` varchar(255) DEFAULT NULL,
  `ostan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`shahr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=406 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_shahr`
--

LOCK TABLES `tbl_shahr` WRITE;
/*!40000 ALTER TABLE `tbl_shahr` DISABLE KEYS */;
INSERT INTO `tbl_shahr` (`shahr_id`, `shomare`, `shahrestan`, `markaze_shahrestan`, `tarikhe_tasis`, `kode_taghsim`, `ostan_name`, `ostan_id`) VALUES (1,1,'هشترود','هشترود','1337','120','آذربايجان شرقي',20),(2,2,'اهر','اهر','1323','64','آذربايجان شرقي',20),(3,3,'جلفا','جلفا','1374','243','آذربايجان شرقي',20),(4,4,'آذرشهر','آذرشهر','1376','275','آذربايجان شرقي',20),(5,5,'چاراويماق','قره آغاج','1379','287','آذربايجان شرقي',20),(6,6,'مراغه','مراغه','1316','44','آذربايجان شرقي',20),(7,7,'هريس','هريس','1368','212','آذربايجان شرقي',20),(8,8,'شبستر','شبستر','1369','219','آذربايجان شرقي',20),(9,9,'ميانه','ميانه','1327','94','آذربايجان شرقي',20),(10,10,'ورزقان','ورزقان','1380','297','آذربايجان شرقي',20),(11,11,'بستان آباد','بستان آباد','1369','218','آذربايجان شرقي',20),(12,12,'تبريز','تبريز','1316','16','آذربايجان شرقي',20),(13,13,'سراب','سراب','1327','90','آذربايجان شرقي',20),(14,14,'كليبر','كليبر','1368','209','آذربايجان شرقي',20),(15,15,'مرند','مرند','1327','93','آذربايجان شرقي',20),(16,16,'خدا آفرين','خمارلو','1389','389','آذربايجان شرقي',20),(17,17,'ملكان','ملكان','1374','251','آذربايجان شرقي',20),(18,18,'بناب','بناب','1368','213','آذربايجان شرقي',20),(19,19,'اسكو','اسكو','1376','277','آذربايجان شرقي',20),(20,20,'عجب شير','عجب شير','1380','294','آذربايجان شرقي',20),(21,1,'مياندوآب','مياندوآب','1337','117','آذربايجان غربي',31),(22,2,'خوي','خوي','1316','22','آذربايجان غربي',31),(23,3,'پلدشت','پلدشت','1386','339','آذربايجان غربي',31),(24,4,'سر دشت','سر دشت','1348','144','آذربايجان غربي',31),(25,5,'ماكو','ماكو','1320','51','آذربايجان غربي',31),(26,6,'تكاب','تكاب','1369','226','آذربايجان غربي',31),(27,7,'پيرانشهر','پيرانشهر','1348','143','آذربايجان غربي',31),(28,8,'شوط','شوط','1386','341','آذربايجان غربي',31),(29,9,'اشنويه','اشنويه','1375','259','آذربايجان غربي',31),(30,10,'شاهين دژ','شاهين دژ','1369','227','آذربايجان غربي',31),(31,11,'چالدران','سيه چشمه','1375','264','آذربايجان غربي',31),(32,12,'چايپاره','قره ضياء الدين','1386','340','آذربايجان غربي',31),(33,13,'بوكان','بوكان','1369','216','آذربايجان غربي',31),(34,14,'سلماس','سلماس','1337','116','آذربايجان غربي',31),(35,15,'اروميه','اروميه','1316','4','آذربايجان غربي',31),(36,16,'نقده','نقده','1337','118','آذربايجان غربي',31),(37,17,'مهاباد','مهاباد','1316','47','آذربايجان غربي',31),(38,1,'نير','نير','1376','265','اردبيل',22),(39,2,'اردبيل','اردبيل','1316','3','اردبيل',22),(40,3,'خلخال','خلخال','1322','57','اردبيل',22),(41,4,'كوثر','گيوي','1375','261','اردبيل',22),(42,5,'مشگين شهر','مشگين شهر','1327','89','اردبيل',22),(43,6,'بيله سوار','بيله سوار','1370','228','اردبيل',22),(44,7,'سرعين','سرعين','1388','374','اردبيل',22),(45,8,'پارس آباد','پارس آباد','1370','229','اردبيل',22),(46,9,'گرمي','گرمي','1355','160','اردبيل',22),(47,10,'نمين','نمين','1375','253','اردبيل',22),(48,1,'نائين','نائين','1327','92','اصفهان',3),(49,2,'نجف آباد','نجف آباد','1337','114','اصفهان',3),(50,3,'آران و بيدگل','آران و بيدگل','1375','254','اصفهان',3),(51,4,'چادگان','چادگان','1381','304','اصفهان',3),(52,5,'تيران و كرون','تيران','1376','274','اصفهان',3),(53,6,'اصفهان','اصفهان','1316','6','اصفهان',3),(54,7,'شهرضا','شهرضا','1321','56','اصفهان',3),(55,8,'سميرم','سميرم','1342','139','اصفهان',3),(56,9,'خميني شهر','خميني شهر','1359','181','اصفهان',3),(57,10,'دهاقان','دهاقان','1382','316','اصفهان',3),(58,11,'برخوار','دولت آباد','1386','337','اصفهان',3),(59,12,'شاهين شهر و ميمه','شاهين شهر','1368','205','اصفهان',3),(60,13,'خوانسار','خوانسار','1358','167','اصفهان',3),(61,14,'نطنز','نطنز','1337','115','اصفهان',3),(62,15,'مباركه','مباركه','1369','222','اصفهان',3),(63,16,'اردستان','اردستان','1327','95','اصفهان',3),(64,17,'خور و بيابانك','خور','1388','377','اصفهان',3),(65,18,'فلاورجان','فلاورجان','1359','182','اصفهان',3),(66,19,'فريدونشهر','فريدونشهر','1358','179','اصفهان',3),(67,20,'كاشان','كاشان','1316','37','اصفهان',3),(68,21,'لنجان','لنجان','1352','150','اصفهان',3),(69,22,'گلپايگان','گلپايگان','1316','41','اصفهان',3),(70,23,'فريدن','داران','1325','75','اصفهان',3),(71,1,'اشتهارد','اشتهارد','1391','403','البرز',29),(72,2,'طالقان','طالقان','1389','387','البرز',29),(73,3,'نظر آباد','نظر آباد','1381','309','البرز',29),(74,4,'كرج','كرج','1333','99','البرز',29),(75,5,'ساوجبلاغ','هشتگرد','1368','203','البرز',29),(76,1,'مهران','مهران','1343','142','ايلام',2),(77,2,'ايلام','ايلام','1316','8','ايلام',2),(78,3,'ايوان','ايوان','1374','247','ايلام',2),(79,4,'شيروان و چرداول','سرابله','1359','187','ايلام',2),(80,5,'دره شهر','دره شهر','1343','140','ايلام',2),(81,6,'آبدانان','آبدانان','1374','245','ايلام',2),(82,7,'دهلران','دهلران','1343','141','ايلام',2),(83,8,'ملكشاهي','اركواز','1387','365','ايلام',2),(84,1,'تنگستان','اهرم','1358','166','بوشهر',10),(85,2,'ديلم','بندر ديلم','1374','249','بوشهر',10),(86,3,'جم','جم','1381','307','بوشهر',10),(87,4,'گناوه','بندر گناوه','1358','172','بوشهر',10),(88,5,'دشتي','خورموج','1358','168','بوشهر',10),(89,6,'دشتستان','برازجان','1333','98','بوشهر',10),(90,7,'دير','بندر دير','1359','184','بوشهر',10),(91,8,'بوشهر','بوشهر','1316','13','بوشهر',10),(92,9,'كنگان','بندر كنگان','1358','171','بوشهر',10),(93,1,'بهارستان','گلستان و نسيم شهر','1389','395','تهران',4),(94,2,'شميرانات','تجريش','1357','164','تهران',4),(95,3,'رباط كريم','رباط كريم','1375','258','تهران',4),(96,4,'فيروز كوه','فيروز كوه','1375','260','تهران',4),(97,5,'ورامين','ورامين','1354','153','تهران',4),(98,6,'اسلامشهر','اسلامشهر','1373','237','تهران',4),(99,7,'تهران','تهران','1316','19','تهران',4),(100,8,'ري','ري','1357','163','تهران',4),(101,9,'پاكدشت','پاكدشت','1376','273','تهران',4),(102,10,'پيشوا','پيشوا','1389','388','تهران',4),(103,11,'قدس','قدس','1388','369','تهران',4),(104,12,'ملارد','ملارد','1388','371','تهران',4),(105,13,'شهريار','شهريار','1368','206','تهران',4),(106,14,'دماوند','دماوند','1325','81','تهران',4),(107,1,'شهر كرد','شهر كرد','1321','55','چهار محال و بختياري',27),(108,2,'اردل','اردل','1369','224','چهار محال و بختياري',27),(109,3,'فارسان','فارسان','1359','185','چهار محال و بختياري',27),(110,4,'كوهرنگ','چلگرد','1380','295','چهار محال و بختياري',27),(111,5,'لردگان','لردگان','1359','186','چهار محال و بختياري',27),(112,6,'كيار','شلمزار','1386','350','چهار محال و بختياري',27),(113,7,'بروجن','بروجن','1337','113','چهار محال و بختياري',27),(114,1,'زيركوه','حاجي آباد','1391','401','خراسان جنوبي',14),(115,2,'خوسف','خوسف','1391','402','خراسان جنوبي',14),(116,3,'قائنات','قائن','1358','170','خراسان جنوبي',14),(117,4,'درميان','اسديه','1384','325','خراسان جنوبي',14),(118,5,'بشرويه','بشرويه','1387','366','خراسان جنوبي',14),(119,6,'فردوس','فردوس','1323','67','خراسان جنوبي',14),(120,7,'سربيشه','سربيشه','1382','312','خراسان جنوبي',14),(121,8,'بيرجند','بيرجند','1316','15','خراسان جنوبي',14),(122,9,'سرايان','سرايان','1384','333','خراسان جنوبي',14),(123,10,'نهبندان','نهبندان','1368','211','خراسان جنوبي',14),(124,1,'داورزن','داورزن','1391','404','خراسان رضوي',12),(125,2,'كلات','كلات','1382','311','خراسان رضوي',12),(126,3,'بردسكن','بردسكن','1374','242','خراسان رضوي',12),(127,4,'نيشابور','نيشابور','1320','52','خراسان رضوي',12),(128,5,'تربت حيدريه','تربت حيدريه','1316','17','خراسان رضوي',12),(129,6,'تايباد','تايباد','1354','154','خراسان رضوي',12),(130,7,'خواف','خواف','1368','202','خراسان رضوي',12),(131,8,'مه ولات','فيض آباد','1384','326','خراسان رضوي',12),(132,9,'چناران','چناران','1369','217','خراسان رضوي',12),(133,10,'درگز','درگز','1327','91','خراسان رضوي',12),(134,11,'فيروزه','فيروزه','1386','355','خراسان رضوي',12),(135,12,'سرخس','سرخس','1368','204','خراسان رضوي',12),(136,13,'گناباد','گناباد','1316','42','خراسان رضوي',12),(137,14,'رشتخوار','رشتخوار','1381','301','خراسان رضوي',12),(138,15,'سبزوار','سبزوار','1316','29','خراسان رضوي',12),(139,16,'بينالود','-','1386','354','خراسان رضوي',12),(140,17,'زاوه','دولت آباد','1387','364','خراسان رضوي',12),(141,18,'جوين','نقاب','1386','357','خراسان رضوي',12),(142,19,'مشهد','مشهد','1316','45','خراسان رضوي',12),(143,20,'بجستان','بجستان','1386','353','خراسان رضوي',12),(144,21,'باخرز','باخرز','1389','385','خراسان رضوي',12),(145,22,'فريمان','فريمان','1372','230','خراسان رضوي',12),(146,23,'قوچان','قوچان','1316','36','خراسان رضوي',12),(147,24,'تربت جام','تربت جام','1336','102','خراسان رضوي',12),(148,25,'خليل آباد','خليل آباد','1382','315','خراسان رضوي',12),(149,26,'كاشمر','كاشمر','1322','59','خراسان رضوي',12),(150,27,'جغتاي','جغتاي','1386','356','خراسان رضوي',12),(151,28,'خوشاب','سلطان آباد','1389','386','خراسان رضوي',12),(152,1,'بجنورد','بجنورد','1316','9','خراسان شمالي',11),(153,2,'جاجرم','جاجرم','1376','267','خراسان شمالي',11),(154,3,'اسفراين','اسفراين','1339','131','خراسان شمالي',11),(155,4,'فاروج','فاروج','1383','317','خراسان شمالي',11),(156,5,'مانه و سملقان','آشخانه','1379','290','خراسان شمالي',11),(157,6,'شيروان','شيروان','1339','132','خراسان شمالي',11),(158,7,'گرمه','گرمه','1387','368','خراسان شمالي',11),(159,1,'آغاجاري','آغاجاري','1391','405','خوزستان',25),(160,2,'شوشتر','شوشتر','1326','87','خوزستان',25),(161,3,'دشت آزادگان','سوسنگرد','1323','61','خوزستان',25),(162,4,'اميديه','اميديه','1375','255','خوزستان',25),(163,5,'گتوند','گتوند','1384','330','خوزستان',25),(164,6,'شادگان','شادگان','1358','169','خوزستان',25),(165,7,'دزفول','دزفول','1325','82','خوزستان',25),(166,8,'رامشير','رامشير','1384','329','خوزستان',25),(167,9,'بهبهان','بهبهان','1316','12','خوزستان',25),(168,10,'باوي','ملاثاني','1389','381','خوزستان',25),(169,11,'انديمشك','انديمشك','1359','192','خوزستان',25),(170,12,'اندیکا','قلعه خواجه','1386','343','خوزستان',25),(171,13,'هنديجان','هنديجان','1382','314','خوزستان',25),(172,14,'رامهرمز','رامهرمز','1337','121','خوزستان',25),(173,15,'شوش','شوش','1368','207','خوزستان',25),(174,16,'لالي','لالي','1382','313','خوزستان',25),(175,17,'ايذه','ايذه','1337','112','خوزستان',25),(176,18,'هويزه','هويزه','1386','347','خوزستان',25),(177,19,'مسجد سليمان','مسجد سليمان','1333','100','خوزستان',25),(178,20,'آبادان','آبادان','1321','54','خوزستان',25),(179,21,'اهواز','اهواز','1316','7','خوزستان',25),(180,22,'خرمشهر','خرمشهر','1316','21','خوزستان',25),(181,23,'باغ ملك','باغ ملك','1369','225','خوزستان',25),(182,24,'بندر ماهشهر','بندر ماهشهر','1338','129','خوزستان',25),(183,25,'هفتگل','هفتگل','1386','352','خوزستان',25),(184,1,'خدابنده','قيدار','1348','149','زنجان',5),(185,2,'خرمدره','خرمدره','1376','280','زنجان',5),(186,3,'زنجان','زنجان','1316','26','زنجان',5),(187,4,'طارم','آب بر','1376','271','زنجان',5),(188,5,'ايجرود','زرين آباد','1376','266','زنجان',5),(189,6,'ابهر','ابهر','1348','145','زنجان',5),(190,7,'ماهنشان','ماه نشان','1375','257','زنجان',5),(191,1,'ميامي','ميامي','1390','399','سمنان',7),(192,2,'آرادان','آرادان','1390','398','سمنان',7),(193,3,'مهدي شهر','مهدي شهر','1386','351','سمنان',7),(194,4,'دامغان','دامغان','1325','76','سمنان',7),(195,5,'شاهرود','شاهرود','1321','53','سمنان',7),(196,6,'گرمسار','گرمسار','1337','123','سمنان',7),(197,7,'سمنان','سمنان','1316','30','سمنان',7),(198,1,'كنارك','كنارك','1384','331','سيستان و بلوچستان',24),(199,2,'نيك شهر','نيك شهر','1369','220','سيستان و بلوچستان',24),(200,3,'چاه بهار','چاه بهار','1326','85','سيستان و بلوچستان',24),(201,4,'مهرستان','مهرستان','1386','360','سيستان و بلوچستان',24),(202,5,'سرباز','راسك','1379','286','سيستان و بلوچستان',24),(203,6,'دلگان','گلمورتي','1386','358','سيستان و بلوچستان',24),(204,7,'خاش','خاش','1352','151','سيستان و بلوچستان',24),(205,8,'هيرمند','دوست محمد','1386','362','سيستان و بلوچستان',24),(206,9,'زهك','زهك','1384','334','سيستان و بلوچستان',24),(207,10,'زابل','زابل','1316','24','سيستان و بلوچستان',24),(208,11,'ايرانشهر','ايرانشهر','1326','84','سيستان و بلوچستان',24),(209,12,'زاهدان','زاهدان','1316','25','سيستان و بلوچستان',24),(210,13,'سراوان','سراوان','1326','86','سيستان و بلوچستان',24),(211,14,'سيب سوران','سوران','1386','361','سيستان و بلوچستان',24),(212,1,'خرامه','خرامه','1389','393','فارس',21),(213,2,'لارستان','لار','1316','43','فارس',21),(214,3,'مرودشت','مرودشت','1354','158','فارس',21),(215,4,'بوانات','بوانات','1374','248','فارس',21),(216,5,'اقليد','اقليد','1354','155','فارس',21),(217,6,'فسا','فسا','1316','33','فارس',21),(218,7,'داراب','داراب','1337','106','فارس',21),(219,8,'ممسني','نور آباد','1340','135','فارس',21),(220,9,'كازرون','كازرون','1325','77','فارس',21),(221,10,'استهبان','استهبان','1337','105','فارس',21),(222,11,'ارسنجان','ارسنجان','1376','276','فارس',21),(223,12,'جهرم','جهرم','1323','65','فارس',21),(224,13,'خنج','خنج','1383','324','فارس',21),(225,14,'زرين دشت','حاجي آباد','1379','291','فارس',21),(226,15,'آباده','آباده','1316','1','فارس',21),(227,16,'مهر','مهر','1380','299','فارس',21),(228,17,'گراش','گراش','1388','380','فارس',21),(229,18,'سپيدان','اردكان','1354','159','فارس',21),(230,19,'فراشبند','فراشبند','1381','308','فارس',21),(231,20,'پاسارگاد','سعادت شهر','1384','328','فارس',21),(232,21,'شيراز','شيراز','1316','32','فارس',21),(233,22,'رستم','مصيري','1387','363','فارس',21),(234,23,'لامرد','لامرد','1368','214','فارس',21),(235,24,'ني ريز','ني ريز','1337','107','فارس',21),(236,25,'سروستان','سروستان','1386','338','فارس',21),(237,26,'كوار','كوار','1389','391','فارس',21),(238,27,'خرم بيد','صفاشهر','1376','269','فارس',21),(239,28,'قيروكارزين','قير','1380','298','فارس',21),(240,29,'فيروز آباد','فيروز آباد','1322','58','فارس',21),(241,1,'آوج','آوج','1390','400','قزوين',15),(242,2,'البرز','الوند','1383','323','قزوين',15),(243,3,'قزوين','قزوين','1316','34','قزوين',15),(244,4,'تاكستان','تاكستان','1359','183','قزوين',15),(245,5,'بوئين زهرا','بوئين زهرا','1375','262','قزوين',15),(246,6,'آبيك','آبيك','1380','296','قزوين',15),(247,1,'قم','قم','1316','35','قم',8),(248,1,'دهگلان','دهگلان','1386','348','كردستان',9),(249,2,'سنندج','سنندج','1316','31','كردستان',9),(250,3,'ديواندره','ديواندره','1373','235','كردستان',9),(251,4,'سروآباد','سروآباد','1381','302','كردستان',9),(252,5,'بانه','بانه','1337','109','كردستان',9),(253,6,'كامياران','كامياران','1373','236','كردستان',9),(254,7,'قروه','قروه','1338','128','كردستان',9),(255,8,'سقز','سقز','1325','79','كردستان',9),(256,9,'بيجار','بيجار','1316','14','كردستان',9),(257,10,'مريوان','مريوان','1337','110','كردستان',9),(258,1,'فارياب','فارياب','1389','394','كرمان',19),(259,2,'ارزوئيه','ارزوئيه','1389','397','كرمان',19),(260,3,'نرماشير','نرماشير','1389','392','كرمان',19),(261,4,'فهرج','فهرج','1388','373','كرمان',19),(262,5,'رفسنجان','رفسنجان','1324','71','كرمان',19),(263,6,'كوهبنان','كوهبنان','1383','322','كرمان',19),(264,7,'رودبار جنوب','رودبار','1384','335','كرمان',19),(265,8,'عنبر آباد','عنبر آباد','1382','310','كرمان',19),(266,9,'كهنوج','كهنوج','1359','180','كرمان',19),(267,10,'جيرفت','جيرفت','1325','78','كرمان',19),(268,11,'شهر بابك','شهر بابك','1354','157','كرمان',19),(269,12,'كرمان','كرمان','1316','38','كرمان',19),(270,13,'بم','بم','1316','10','كرمان',19),(271,14,'رابر','رابر','1388','379','كرمان',19),(272,15,'بافت','بافت','1341','136','كرمان',19),(273,16,'منوجان','منوجان','1381','303','كرمان',19),(274,17,'زرند','زرند','1354','156','كرمان',19),(275,18,'ريگان','محمدآباد','1386','359','كرمان',19),(276,19,'انار','انار','1388','372','كرمان',19),(277,20,'راور','راور','1375','263','كرمان',19),(278,21,'قلعه گنج','قلعه گنج','1384','336','كرمان',19),(279,22,'بردسير','بردسير','1358','175','كرمان',19),(280,23,'سيرجان','سيرجان','1323','66','كرمان',19),(281,1,'اسلام آباد غرب','اسلام آباد غرب','1316','5','كرمانشاه',30),(282,2,'كرمانشاه','كرمانشاه','1316','39','كرمانشاه',30),(283,3,'سنقر','سنقر','1341','137','كرمانشاه',30),(284,4,'پاوه','پاوه','1337','111','كرمانشاه',30),(285,5,'ثلاث باباجاني','تازه آباد','1381','300','كرمانشاه',30),(286,6,'دالاهو','كرند غرب','1384','327','كرمانشاه',30),(287,7,'جوانرود','جوانرود','1368','201','كرمانشاه',30),(288,8,'هرسين','هرسين','1374','252','كرمانشاه',30),(289,9,'سر پل ذهاب','سر پل ذهاب','1359','193','كرمانشاه',30),(290,10,'قصر شيرين','قصر شيرين','1324','70','كرمانشاه',30),(291,11,'كنگاور','كنگاور','1359','191','كرمانشاه',30),(292,12,'روانسر','روانسر','1383','319','كرمانشاه',30),(293,13,'صحنه','صحنه','1372','234','كرمانشاه',30),(294,14,'گيلانغرب','گيلانغرب','1359','194','كرمانشاه',30),(295,1,'دنا','سي سخت','1379','289','كهگيلويه و بويراحمد',16),(296,2,'باشت','باشت','1389','382','كهگيلويه و بويراحمد',16),(297,3,'گچساران','دوگنبدان','1353','152','كهگيلويه و بويراحمد',16),(298,4,'بهمئي','ليكك','1383','320','كهگيلويه و بويراحمد',16),(299,5,'چرام','چرام','1389','383','كهگيلويه و بويراحمد',16),(300,6,'كهگيلويه','دهدشت','1337','122','كهگيلويه و بويراحمد',16),(301,7,'بوير احمد','ياسوج','1342','138','كهگيلويه و بويراحمد',16),(302,1,'تركمن','بندرتركمن','1358','165','گلستان',1),(303,2,'بندر گز','بندر گز','1376','279','گلستان',1),(304,3,'گاليكش','گاليكش','1389','384','گلستان',1),(305,4,'كلاله','كلاله','1379','285','گلستان',1),(306,5,'مينودشت','مينودشت','1368','210','گلستان',1),(307,6,'علي آباد','علي آباد','1358','177','گلستان',1),(308,7,'گنبد كاووس','گنبد كاووس','1327','88','گلستان',1),(309,8,'مراوه تپه','مراوه تپه','1386','346','گلستان',1),(310,9,'راميان','راميان','1380','293','گلستان',1),(311,10,'كردكوي','كردكوي','1359','190','گلستان',1),(312,11,'گميشان','گميش تپه','1388','370','گلستان',1),(313,12,'آق قلا','آق قلا','1379','284','گلستان',1),(314,13,'آزاد شهر','آزاد شهر','1380','292','گلستان',1),(315,14,'گرگان','گرگان','1316','40','گلستان',1),(316,1,'بندر انزلي','بندر انزلي','1323','62','گيلان',17),(317,2,'صومعه سرا','صومعه سرا','1338','127','گيلان',17),(318,3,'لاهيجان','لاهيجان','1324','69','گيلان',17),(319,4,'رشت','رشت','1316','23','گيلان',17),(320,5,'لنگرود','لنگرود','1338','125','گيلان',17),(321,6,'رودسر','رودسر','1337','108','گيلان',17),(322,7,'املش','املش','1376','278','گيلان',17),(323,8,'ماسال','ماسال','1376','272','گيلان',17),(324,9,'شفت','شفت','1374','250','گيلان',17),(325,10,'رودبار','رودبار','1338','126','گيلان',17),(326,11,'فومن','فومن','1323','68','گيلان',17),(327,12,'آستارا','آستارا','1337','119','گيلان',17),(328,13,'سياهكل','سياهكل','1376','281','گيلان',17),(329,14,'آستانه اشرفيه','آستانه اشرفيه','1358','178','گيلان',17),(330,15,'رضوانشهر','رضوانشهر','1376','270','گيلان',17),(331,16,'طوالش','هشتپر','1323','63','گيلان',17),(332,1,'دوره','سراب دوره','1386','349','لرستان',13),(333,2,'دورود','دورود','1368','199','لرستان',13),(334,3,'ازنا','ازنا','1373','238','لرستان',13),(335,4,'سلسله','الشتر','1373','240','لرستان',13),(336,5,'اليگودرز','اليگودرز','1336','104','لرستان',13),(337,6,'خرم آباد','خرم آباد','1316','20','لرستان',13),(338,7,'پلدختر','پلدختر','1373','239','لرستان',13),(339,8,'دلفان','نور آباد','1368','197','لرستان',13),(340,9,'بروجرد','بروجرد','1319','50','لرستان',13),(341,10,'كوهدشت','كوهدشت','1368','198','لرستان',13),(342,1,'عباس آباد','عباس آباد','1388','375','مازندران',28),(343,2,'بابل','بابل','1322','60','مازندران',28),(344,3,'تنكابن','تنكابن','1316','18','مازندران',28),(345,4,'بابلسر','بابلسر','1368','200','مازندران',28),(346,5,'آمل','آمل','1325','73','مازندران',28),(347,6,'محمود آباد','محمود آباد','1374','244','مازندران',28),(348,7,'گلوگاه','گلوگاه','1384','332','مازندران',28),(349,8,'سواد كوه','پل سفيد','1359','188','مازندران',28),(350,9,'ساري','ساري','1316','27','مازندران',28),(351,10,'نوشهر','نوشهر','1325','74','مازندران',28),(352,11,'نور','نور','1339','130','مازندران',28),(353,12,'مياندورود','سورك','1389','390','مازندران',28),(354,13,'رامسر','رامسر','1358','174','مازندران',28),(355,14,'چالوس','چالوس','1375','256','مازندران',28),(356,15,'جويبار','جويبار','1376','268','مازندران',28),(357,16,'بهشهر','بهشهر','1333','101','مازندران',28),(358,17,'قائم شهر','قائم شهر','1324','72','مازندران',28),(359,18,'فريدونكنار','فريدونكنار','1386','342','مازندران',28),(360,19,'نكا','نكا','1374','246','مازندران',28),(361,1,'فراهان','فرمهين','1388','396','مركزي',18),(362,2,'خنداب','خنداب','1386','344','مركزي',18),(363,3,'زرنديه','مامونيه','1381','305','مركزي',18),(364,4,'دليجان','دليجان','1358','176','مركزي',18),(365,5,'آشتيان','آشتيان','1356','162','مركزي',18),(366,6,'شازند','شازند','1359','189','مركزي',18),(367,7,'اراك','اراك','1316','2','مركزي',18),(368,8,'محلات','محلات','1325','80','مركزي',18),(369,9,'كميجان','كميجان','1381','306','مركزي',18),(370,10,'ساوه','ساوه','1316','28','مركزي',18),(371,11,'تفرش','تفرش','1336','103','مركزي',18),(372,12,'خمين','خمين','1337','124','مركزي',18),(373,1,'رودان','دهبارز','1368','215','هرمزگان',6),(374,2,'ابوموسي','ابوموسي','1361','195','هرمزگان',6),(375,3,'ميناب','ميناب','1339','134','هرمزگان',6),(376,4,'جاسك','بندر جاسك','1366','196','هرمزگان',6),(377,5,'پارسيان','پارسيان','1383','318','هرمزگان',6),(378,6,'بندرلنگه','بندر لنگه','1329','97','هرمزگان',6),(379,7,'قشم','قشم','1355','161','هرمزگان',6),(380,8,'بندرعباس','بندر عباس','1316','11','هرمزگان',6),(381,9,'بستك','بستك','1379','288','هرمزگان',6),(382,10,'سيريك','سيريك','1386','345','هرمزگان',6),(383,11,'خمير','خمير','1383','321','هرمزگان',6),(384,12,'بشاگرد','سردشت','1387','367','هرمزگان',6),(385,13,'حاجي آباد','حاجي آباد','1372','233','هرمزگان',6),(386,1,'اسد آباد','اسد آباد','1369','221','همدان',26),(387,2,'تويسركان','تويسركان','1328','96','همدان',26),(388,3,'رزن','رزن','1372','232','همدان',26),(389,4,'نهاوند','نهاوند','1325','83','همدان',26),(390,5,'بهار','بهار','1372','231','همدان',26),(391,6,'همدان','همدان','1316','48','همدان',26),(392,7,'كبودرآهنگ','كبودر آهنگ','1368','208','همدان',26),(393,8,'فامنين','فامنين','1388','376','همدان',26),(394,9,'ملاير','ملاير','1316','46','همدان',26),(395,1,'مهريز','مهريز','1358','173','يزد',23),(396,2,'اردكان','اردكان','1348','146','يزد',23),(397,3,'ابركوه','ابركوه','1373','241','يزد',23),(398,4,'ميبد','ميبد','1369','223','يزد',23),(399,5,'خاتم','هرات','1378','283','يزد',23),(400,6,'بافق','بافق','1348','147','يزد',23),(401,7,'بهاباد','بهاباد','1388','378','يزد',23),(402,8,'تفت','تفت','1348','148','يزد',23),(403,9,'طبس','طبس','1339','133','يزد',23),(404,10,'صدوق','اشكذر','1376','282','يزد',23),(405,11,'يزد','يزد','1316','49','يزد',23);
/*!40000 ALTER TABLE `tbl_shahr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_shop_info`
--

DROP TABLE IF EXISTS `tbl_shop_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_shop_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) NOT NULL DEFAULT '',
  `f2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(400) DEFAULT NULL,
  `f6` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f10` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f11` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f12` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f13` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f14` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f15` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f16` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f17` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f18` varchar(255) DEFAULT NULL,
  `f19` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f20` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f21` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f22` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f23` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f24` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f25` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f26` varchar(255) DEFAULT NULL,
  `f27` varchar(255) DEFAULT NULL,
  `f28` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f29` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f30` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f31` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f32` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f33` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f34` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f35` text,
  `f36` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f37` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f38` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f39` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f40` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f41` varchar(255) DEFAULT NULL,
  `f42` varchar(255) DEFAULT NULL,
  `f43` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f44` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f45` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f46` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f47` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f48` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f49` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f50` text,
  `f51` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f52` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f53` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `f54` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_shop_info`
--

LOCK TABLES `tbl_shop_info` WRITE;
/*!40000 ALTER TABLE `tbl_shop_info` DISABLE KEYS */;
INSERT INTO `tbl_shop_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f28`, `f29`, `f30`, `f31`, `f32`, `f33`, `f34`, `f35`, `f36`, `f37`, `f38`, `f39`, `f40`, `f41`, `f42`, `f43`, `f44`, `f45`, `f46`, `f47`, `f48`, `f49`, `f50`, `f51`, `f52`, `f53`, `f54`) VALUES (1,'فروشگاه اینترنتی  آرکا','مدیریت کسب و کار','سید مهدی عربی','05152212668','تربت حیدریه ، شهرک ولیعصر ، خیابان پشت خیرین مسکن ساز ، بلوک 2 ، واحد 14',' seyedmehdiarabi {at} gmail {dot} com','10005152290695','09151307726','آرکا نمایندگی فروش و خدمات  ، محصولات گروه شرکت‌های طرفه نگار که شامل نرم افزارهای حسابداری هلو ، هلیا و اسپاد است؛ می‌باشد. \r\nنرم‌ افزارهای مالی و حسابداری یکپارچه هلو (انبار، حسابداری، خرید و فروش، کنترل چک و تولید) نسخه‌های تخصصی برای فروشگاه‌ها، شرکت‌ها و تولیدی‌ها دارند. این نرم‌ افزارهای حسابداری و مالی شامل امکانات بی‌شماری ازجمله صدور انواع فاکتور، اعلام سررسید چک‌ها به صورت اتوماتیک، امکان دریافت گزارش‌های متنوع و... هستند. کاربری آسان همراه با امکانات گسترده، نرم‌ افزارهای حسابداری هلو را به پرکاربرترین نرم‌ افزار مالی و حسابداری کشور تبدیل کرده است.نرم افزار حسابداری هلو در نسخه‌های تک‌کاربره و شبکه ارائه می‌شود.','نرم افزارهای مالی و حسابداری اسپاد','نرم افزارهای مالی و حسابداری اسپاد با ارائه هزاران نسخه به شرکت ها و سازمان های خصوصی و دولتی، یکی از پرنفوذترین نرم افزارها در حوزه تامین نیاز به نرم افزاری جهت مدیریت فزآیندهای مالی و حسابداری می باشد. نرم افزارهای مالی و حسابداری اسپاد با شناخت نیاز کاربران و استاندارهای فرآیندهای مالی افدام به ارائه راه حل های جامع جهت مدیریت فرآیندهای مالی و حسابداری نموده است، به طوریکه در عین سادگی استفاده، با ارائه گزارش های متنوع و سفارشی شده ی کاربران، مدیران را در تحلیل مالی و دارایی کمک بسزایی می نماید. گفتنی است که مجموعه نرم افزارهای مالی و حسابداری اسپاد، با نظر متحصصان مجرب و با استفاده از تکنولوژی های نوین تحلیل، و با استفاده از بروزترین ابزارها تولید و تست شده و در اختیار کاربران قرار گرفته است.','نرم افزارهای هلیا','مجموعه نرم افزارهای هلیا ویژه تاکسی سرویس، حمل بار و پیک موتوری، کتابخانه، املاک، مدیریت مجتمع و آپارتمان ها ارائه شده است.','Vachar724','Buy and Sell','Seyed Mahdi Arabi','00985152290696','Torbat-e-Heydariyeh , Shahrak Valiasr , St.daneshju11','1000515229',' info {at} vachar724 {dot} com','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','09151307726','09212728230');
/*!40000 ALTER TABLE `tbl_shop_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sms_text`
--

DROP TABLE IF EXISTS `tbl_sms_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sms_text` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f2` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f3` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f4` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f5` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f6` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f7` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f8` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f9` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f10` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f11` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f12` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f13` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f14` varchar(500) COLLATE utf8_unicode_ci DEFAULT 'www.tavakolisaffron.com',
  `f15` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f16` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f17` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f18` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f19` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  `f20` varchar(500) CHARACTER SET utf8 DEFAULT 'www.tavakolisaffron.com',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sms_text`
--

LOCK TABLES `tbl_sms_text` WRITE;
/*!40000 ALTER TABLE `tbl_sms_text` DISABLE KEYS */;
INSERT INTO `tbl_sms_text` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`) VALUES (1,'مهندسی آرکا عضویت شما را گرامی میدارد ، .نام کاربری و کلمه عبور شما به شرح ذیل می‌باشد.\r\nuser\r\npass','عضو جدید درسایت','از خرید شما سپاسگزاریم ، سفارش شما تایید و در اولین فرصت ارسال میگردد.','سفارش خرید تایید شد.','با سلام نظر شما ثبت و پس از تایید نمایش داده خواهد شد - واچار 724','ثبت نظر جدید در سایت','با سلام و تشکر پیام شما دریافت شد - واچار 724','ثبت پیام جدید در سایت','با سلام عضویت شما فعال گردید - واچار 724','با سلام و تشکر، نظر شما تایید و در فروشگاه نمایش داده می‌شود - واچار 724','','','','','','','','','','');
/*!40000 ALTER TABLE `tbl_sms_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tec_option`
--

DROP TABLE IF EXISTS `tbl_tec_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tec_option` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` text COLLATE utf8_unicode_ci,
  `f2` text COLLATE utf8_unicode_ci,
  `f3` text COLLATE utf8_unicode_ci,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` text COLLATE utf8_unicode_ci,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` text COLLATE utf8_unicode_ci,
  `f8` text COLLATE utf8_unicode_ci,
  `f9` text COLLATE utf8_unicode_ci,
  `f10` text COLLATE utf8_unicode_ci,
  `f11` text COLLATE utf8_unicode_ci,
  `f12` text COLLATE utf8_unicode_ci,
  `f13` text COLLATE utf8_unicode_ci,
  `f14` text COLLATE utf8_unicode_ci,
  `f15` text COLLATE utf8_unicode_ci,
  `f16` text COLLATE utf8_unicode_ci,
  `f17` text COLLATE utf8_unicode_ci,
  `f18` text COLLATE utf8_unicode_ci,
  `f19` text COLLATE utf8_unicode_ci,
  `f20` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tec_option`
--

LOCK TABLES `tbl_tec_option` WRITE;
/*!40000 ALTER TABLE `tbl_tec_option` DISABLE KEYS */;
INSERT INTO `tbl_tec_option` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`) VALUES (1,'10005152290695*9105754401*Vachar@SMS2017','tel','body','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `tbl_tec_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_access_info`
--

DROP TABLE IF EXISTS `tbl_user_access_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_access_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` int(5) NOT NULL DEFAULT '0',
  `f2` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7659 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_access_info`
--

LOCK TABLES `tbl_user_access_info` WRITE;
/*!40000 ALTER TABLE `tbl_user_access_info` DISABLE KEYS */;
INSERT INTO `tbl_user_access_info` (`auto_id`, `f1`, `f2`) VALUES (6586,96,9),(6585,95,9),(6584,94,9),(6583,93,9),(6582,92,9),(6581,91,9),(6580,90,9),(6579,89,9),(6230,53,10),(6229,52,10),(7657,117,1),(7656,116,1),(7655,115,1),(7654,114,1),(7653,113,1),(7652,112,1),(7651,111,1),(7650,110,1),(7649,109,1),(7648,108,1),(7647,106,1),(7646,105,1),(7645,104,1),(7644,103,1),(7643,102,1),(7642,101,1),(7641,99,1),(7640,97,1),(7639,96,1),(7638,95,1),(7637,94,1),(7636,93,1),(7635,92,1),(7634,91,1),(7633,90,1),(7632,89,1),(7631,88,1),(7630,87,1),(7629,86,1),(7628,85,1),(7627,84,1),(7626,83,1),(7625,82,1),(7624,81,1),(7623,80,1),(7622,79,1),(7621,78,1),(6243,91,10),(6242,90,10),(6241,89,10),(6240,82,10),(6239,81,10),(6238,80,10),(6237,70,10),(6236,69,10),(6235,68,10),(6234,67,10),(6233,56,10),(6232,55,10),(6231,54,10),(7620,77,1),(7329,97,2),(7328,96,2),(7327,95,2),(7326,94,2),(7325,93,2),(7324,92,2),(7323,91,2),(7322,90,2),(7321,89,2),(7320,88,2),(7319,87,2),(7318,86,2),(7317,85,2),(7316,84,2),(7315,83,2),(7314,82,2),(7313,81,2),(7312,80,2),(7311,79,2),(7310,78,2),(7309,77,2),(7308,76,2),(7307,75,2),(7306,73,2),(7305,72,2),(7304,71,2),(7303,70,2),(7619,76,1),(6578,88,9),(6577,87,9),(6576,86,9),(6575,85,9),(6574,84,9),(6573,83,9),(6572,82,9),(6571,81,9),(6570,80,9),(6569,79,9),(6568,78,9),(6567,77,9),(7302,69,2),(7301,68,2),(7300,67,2),(7618,75,1),(7617,73,1),(7616,72,1),(7615,71,1),(7614,70,1),(7299,66,2),(7298,65,2),(7613,69,1),(7612,68,1),(7611,67,1),(7297,64,2),(7296,63,2),(7295,62,2),(7294,61,2),(7610,66,1),(7609,65,1),(6566,76,9),(6565,75,9),(6564,73,9),(6563,72,9),(6562,71,9),(6561,70,9),(7293,60,2),(7292,59,2),(7291,58,2),(7608,64,1),(5191,51,7),(5190,50,7),(5189,48,7),(5188,47,7),(7290,56,2),(7289,55,2),(7607,63,1),(7288,54,2),(7606,62,1),(7287,53,2),(7605,61,1),(7286,52,2),(7604,60,1),(7285,51,2),(6560,69,9),(7603,59,1),(7602,58,1),(7284,50,2),(7283,49,2),(7601,56,1),(7282,48,2),(5187,46,7),(5186,32,7),(5185,31,7),(5184,30,7),(5183,18,7),(7600,55,1),(7599,54,1),(7598,53,1),(7597,52,1),(7596,51,1),(7595,50,1),(7281,47,2),(7280,46,2),(7279,45,2),(7278,44,2),(7277,43,2),(7276,42,2),(6559,68,9),(6558,67,9),(6557,66,9),(7275,41,2),(7274,39,2),(7273,38,2),(7272,33,2),(7271,32,2),(7270,31,2),(7269,30,2),(7268,29,2),(7267,27,2),(7594,49,1),(7593,48,1),(7592,47,1),(7591,46,1),(7590,45,1),(7589,44,1),(7588,43,1),(7587,42,1),(7586,41,1),(5182,75,6),(5181,72,6),(5180,71,6),(5179,70,6),(5178,51,6),(5177,50,6),(5176,48,6),(5175,47,6),(5174,46,6),(5173,45,6),(5172,44,6),(5171,43,6),(5170,42,6),(5169,32,6),(5168,31,6),(5167,30,6),(6228,51,10),(6227,50,10),(6226,48,10),(6225,47,10),(6224,41,10),(6223,32,10),(6222,31,10),(6221,30,10),(7585,39,1),(7266,25,2),(6556,65,9),(6555,64,9),(6554,63,9),(6553,62,9),(6552,61,9),(6551,60,9),(6550,59,9),(6549,58,9),(7584,38,1),(7583,33,1),(7582,32,1),(7581,31,1),(7580,30,1),(7579,29,1),(7578,27,1),(6548,56,9),(6547,55,9),(6546,54,9),(6545,53,9),(7577,25,1),(7576,24,1),(7575,23,1),(7574,22,1),(7573,21,1),(7572,20,1),(7571,18,1),(7570,14,1),(7569,12,1),(6544,52,9),(6543,51,9),(6542,50,9),(6541,49,9),(6540,48,9),(6539,47,9),(6538,46,9),(6537,45,9),(6536,44,9),(6535,43,9),(6534,42,9),(6533,41,9),(6532,39,9),(6531,38,9),(6530,33,9),(6529,32,9),(6528,31,9),(6527,30,9),(6526,29,9),(6525,27,9),(6524,25,9),(6523,24,9),(6522,23,9),(6521,22,9),(6520,21,9),(6519,20,9),(6518,18,9),(6517,14,9),(6516,12,9),(6515,10,9),(6514,8,9),(6513,6,9),(6512,5,9),(6511,4,9),(6510,3,9),(6509,2,9),(6508,1,9),(7560,69,3),(6587,97,9),(7559,68,3),(7558,67,3),(7557,62,3),(7556,61,3),(7555,60,3),(7554,59,3),(7553,58,3),(7552,56,3),(7551,55,3),(7550,54,3),(7549,53,3),(7548,52,3),(7547,51,3),(7546,50,3),(7545,47,3),(7544,41,3),(7543,32,3),(7542,31,3),(7541,30,3),(7265,24,2),(7264,23,2),(7263,22,2),(7262,21,2),(7261,20,2),(7260,18,2),(7259,14,2),(7258,12,2),(7257,10,2),(7256,8,2),(7255,6,2),(7254,5,2),(7253,4,2),(7252,3,2),(7251,2,2),(7250,1,2),(7540,18,3),(7568,10,1),(7567,8,1),(7566,6,1),(7565,5,1),(7564,4,1),(7563,3,1),(7562,2,1),(7330,99,2),(7331,100,2),(7332,101,2),(7333,102,2),(7334,103,2),(7335,104,2),(7336,105,2),(7337,106,2),(7338,108,2),(7339,109,2),(7340,110,2),(7341,111,2),(7342,112,2),(7343,113,2),(7344,114,2),(7345,115,2),(7561,1,1),(7658,118,1);
/*!40000 ALTER TABLE `tbl_user_access_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_info`
--

DROP TABLE IF EXISTS `tbl_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_info` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'code',
  `f1` int(5) NOT NULL DEFAULT '0' COMMENT 'name_user',
  `f2` int(5) NOT NULL DEFAULT '0' COMMENT 'pass_user',
  `f3` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'famil_user',
  `f4` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f5` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f9` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f10` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `f11` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `f12` text COLLATE utf8_unicode_ci,
  `f13` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `f14` int(11) DEFAULT NULL,
  `f15` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f16` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f17` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f20` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f21` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f22` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f23` int(11) DEFAULT NULL,
  `f24` int(11) DEFAULT NULL,
  `f25` varchar(1) COLLATE utf8_unicode_ci DEFAULT '1',
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_info`
--

LOCK TABLES `tbl_user_info` WRITE;
/*!40000 ALTER TABLE `tbl_user_info` DISABLE KEYS */;
INSERT INTO `tbl_user_info` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`) VALUES (1,1,1,'سید مهدی','1','','09151307726','شهرک ولیعصر','seyedmehdiarabi@gmail.com','1397/8/30','','Arka2018!','','1',0,'','','','','','','','عربی',12,128,'1'),(2,1,3,'نماد','1','','09105754401','وزارت صمت','info@enamad.ir','1397/8/30','','eNamad2018','','1',0,'','','','','','','','اعتماد',4,99,'1'),(3,1,3,'ali',NULL,NULL,'09379312898','milad ave-num 8','nahidi@yhoo.com','1398/11/16','nahidi@yhoo.com','09379312898',NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'nahidi',20,18,'1');
/*!40000 ALTER TABLE `tbl_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_type`
--

DROP TABLE IF EXISTS `tbl_user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_type` (
  `auto_id` int(5) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `f2` text COLLATE utf8_unicode_ci,
  `f3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f4` text COLLATE utf8_unicode_ci,
  `f5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f6` text COLLATE utf8_unicode_ci,
  `f7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f8` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_type`
--

LOCK TABLES `tbl_user_type` WRITE;
/*!40000 ALTER TABLE `tbl_user_type` DISABLE KEYS */;
INSERT INTO `tbl_user_type` (`auto_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`) VALUES (1,'مدیر کل','','','','','','',''),(2,'مدیر فروشگاه','','','','','','',''),(3,'کاربر عادی','','','','','','','');
/*!40000 ALTER TABLE `tbl_user_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_visit`
--

DROP TABLE IF EXISTS `tbl_visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_visit` (
  `auto_id` bigint(16) NOT NULL AUTO_INCREMENT,
  `f1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` int(11) DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=462 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_visit`
--

LOCK TABLES `tbl_visit` WRITE;
/*!40000 ALTER TABLE `tbl_visit` DISABLE KEYS */;
INSERT INTO `tbl_visit` (`auto_id`, `f1`, `f2`) VALUES (1,'21 11 2018',54),(2,'22 11 2018',7),(3,'23 11 2018',4),(4,'25 11 2018',2),(5,'26 11 2018',2),(6,'27 11 2018',29),(7,'28 11 2018',35),(8,'29 11 2018',6),(9,'30 11 2018',18),(10,'01 12 2018',26),(11,'02 12 2018',11),(12,'03 12 2018',52),(13,'04 12 2018',7),(14,'05 12 2018',7),(15,'06 12 2018',8),(16,'07 12 2018',8),(17,'08 12 2018',6),(18,'09 12 2018',8),(19,'10 12 2018',48),(20,'11 12 2018',37),(21,'12 12 2018',45),(22,'13 12 2018',29),(23,'14 12 2018',15),(24,'15 12 2018',14),(25,'16 12 2018',31),(26,'17 12 2018',28),(27,'18 12 2018',23),(28,'19 12 2018',21),(29,'20 12 2018',26),(30,'21 12 2018',19),(31,'22 12 2018',31),(32,'23 12 2018',32),(33,'24 12 2018',65),(34,'25 12 2018',47),(35,'26 12 2018',35),(36,'27 12 2018',33),(37,'28 12 2018',22),(38,'29 12 2018',28),(39,'30 12 2018',40),(40,'31 12 2018',25),(41,'01 01 2019',22),(42,'02 01 2019',35),(43,'03 01 2019',32),(44,'04 01 2019',12),(45,'05 01 2019',18),(46,'06 01 2019',21),(47,'07 01 2019',19),(48,'08 01 2019',18),(49,'09 01 2019',27),(50,'10 01 2019',15),(51,'11 01 2019',19),(52,'12 01 2019',20),(53,'13 01 2019',21),(54,'14 01 2019',62),(55,'15 01 2019',28),(56,'16 01 2019',23),(57,'17 01 2019',12),(58,'18 01 2019',8),(59,'19 01 2019',28),(60,'20 01 2019',31),(61,'21 01 2019',37),(62,'22 01 2019',22),(63,'23 01 2019',26),(64,'24 01 2019',32),(65,'25 01 2019',24),(66,'26 01 2019',35),(67,'27 01 2019',27),(68,'28 01 2019',27),(69,'29 01 2019',34),(70,'30 01 2019',26),(71,'31 01 2019',35),(72,'01 02 2019',35),(73,'02 02 2019',30),(74,'03 02 2019',35),(75,'04 02 2019',43),(76,'05 02 2019',56),(77,'06 02 2019',34),(78,'07 02 2019',11),(79,'08 02 2019',20),(80,'09 02 2019',29),(81,'10 02 2019',15),(82,'11 02 2019',48),(83,'12 02 2019',44),(84,'13 02 2019',34),(85,'14 02 2019',11),(86,'15 02 2019',23),(87,'16 02 2019',42),(88,'17 02 2019',22),(89,'18 02 2019',59),(90,'19 02 2019',47),(91,'20 02 2019',31),(92,'21 02 2019',33),(93,'22 02 2019',25),(94,'23 02 2019',39),(95,'24 02 2019',36),(96,'25 02 2019',32),(97,'26 02 2019',27),(98,'27 02 2019',36),(99,'28 02 2019',28),(100,'01 03 2019',21),(101,'02 03 2019',30),(102,'03 03 2019',26),(103,'04 03 2019',40),(104,'05 03 2019',33),(105,'06 03 2019',43),(106,'07 03 2019',16),(107,'08 03 2019',19),(108,'09 03 2019',37),(109,'10 03 2019',41),(110,'11 03 2019',30),(111,'12 03 2019',28),(112,'13 03 2019',42),(113,'14 03 2019',20),(114,'15 03 2019',21),(115,'16 03 2019',34),(116,'17 03 2019',22),(117,'18 03 2019',36),(118,'19 03 2019',28),(119,'20 03 2019',20),(120,'21 03 2019',22),(121,'22 03 2019',20),(122,'23 03 2019',24),(123,'24 03 2019',21),(124,'25 03 2019',21),(125,'26 03 2019',42),(126,'27 03 2019',42),(127,'28 03 2019',30),(128,'29 03 2019',23),(129,'30 03 2019',32),(130,'31 03 2019',20),(131,'01 04 2019',15),(132,'02 04 2019',43),(133,'03 04 2019',21),(134,'04 04 2019',39),(135,'05 04 2019',24),(136,'06 04 2019',41),(137,'07 04 2019',39),(138,'08 04 2019',25),(139,'09 04 2019',35),(140,'10 04 2019',39),(141,'11 04 2019',29),(142,'12 04 2019',16),(143,'13 04 2019',27),(144,'14 04 2019',31),(145,'15 04 2019',32),(146,'16 04 2019',42),(147,'17 04 2019',24),(148,'18 04 2019',29),(149,'19 04 2019',31),(150,'20 04 2019',40),(151,'21 04 2019',26),(152,'22 04 2019',36),(153,'23 04 2019',32),(154,'24 04 2019',28),(155,'25 04 2019',21),(156,'26 04 2019',27),(157,'27 04 2019',31),(158,'28 04 2019',67),(159,'29 04 2019',38),(160,'30 04 2019',51),(161,'01 05 2019',42),(162,'02 05 2019',47),(163,'03 05 2019',48),(164,'04 05 2019',78),(165,'05 05 2019',67),(166,'06 05 2019',46),(167,'07 05 2019',50),(168,'08 05 2019',54),(169,'09 05 2019',35),(170,'10 05 2019',23),(171,'11 05 2019',26),(172,'12 05 2019',22),(173,'13 05 2019',44),(174,'14 05 2019',66),(175,'15 05 2019',57),(176,'16 05 2019',63),(177,'17 05 2019',52),(178,'18 05 2019',28),(179,'19 05 2019',22),(180,'20 05 2019',35),(181,'21 05 2019',45),(182,'22 05 2019',81),(183,'23 05 2019',57),(184,'24 05 2019',33),(185,'25 05 2019',54),(186,'26 05 2019',67),(187,'27 05 2019',36),(188,'28 05 2019',34),(189,'29 05 2019',43),(190,'30 05 2019',23),(191,'31 05 2019',46),(192,'01 06 2019',47),(193,'02 06 2019',32),(194,'03 06 2019',56),(195,'04 06 2019',31),(196,'05 06 2019',31),(197,'06 06 2019',47),(198,'07 06 2019',37),(199,'08 06 2019',35),(200,'09 06 2019',37),(201,'10 06 2019',45),(202,'11 06 2019',47),(203,'12 06 2019',41),(204,'13 06 2019',30),(205,'14 06 2019',19),(206,'15 06 2019',31),(207,'16 06 2019',47),(208,'17 06 2019',43),(209,'18 06 2019',51),(210,'19 06 2019',37),(211,'20 06 2019',39),(212,'21 06 2019',31),(213,'22 06 2019',34),(214,'23 06 2019',53),(215,'24 06 2019',46),(216,'25 06 2019',42),(217,'26 06 2019',38),(218,'27 06 2019',18),(219,'28 06 2019',26),(220,'29 06 2019',29),(221,'30 06 2019',47),(222,'01 07 2019',29),(223,'02 07 2019',27),(224,'03 07 2019',16),(225,'04 07 2019',37),(226,'05 07 2019',23),(227,'06 07 2019',25),(228,'07 07 2019',18),(229,'08 07 2019',26),(230,'09 07 2019',20),(231,'10 07 2019',36),(232,'11 07 2019',32),(233,'11 07 2019',32),(234,'12 07 2019',40),(235,'13 07 2019',39),(236,'14 07 2019',23),(237,'15 07 2019',32),(238,'16 07 2019',46),(239,'17 07 2019',22),(240,'18 07 2019',18),(241,'19 07 2019',22),(242,'20 07 2019',21),(243,'21 07 2019',28),(244,'22 07 2019',18),(245,'23 07 2019',50),(246,'24 07 2019',35),(247,'25 07 2019',32),(248,'26 07 2019',34),(249,'27 07 2019',34),(250,'28 07 2019',35),(251,'29 07 2019',51),(252,'30 07 2019',28),(253,'31 07 2019',36),(254,'01 08 2019',23),(255,'02 08 2019',41),(256,'03 08 2019',32),(257,'04 08 2019',30),(258,'05 08 2019',32),(259,'06 08 2019',28),(260,'07 08 2019',38),(261,'08 08 2019',19),(262,'09 08 2019',20),(263,'10 08 2019',34),(264,'11 08 2019',34),(265,'12 08 2019',26),(266,'13 08 2019',39),(267,'14 08 2019',25),(268,'15 08 2019',17),(269,'16 08 2019',22),(270,'17 08 2019',16),(271,'18 08 2019',22),(272,'19 08 2019',43),(273,'20 08 2019',30),(274,'21 08 2019',41),(275,'22 08 2019',26),(276,'23 08 2019',19),(277,'24 08 2019',47),(278,'25 08 2019',49),(279,'26 08 2019',56),(280,'27 08 2019',48),(281,'28 08 2019',26),(282,'29 08 2019',30),(283,'30 08 2019',26),(284,'31 08 2019',36),(285,'01 09 2019',41),(286,'02 09 2019',20),(287,'03 09 2019',32),(288,'04 09 2019',31),(289,'05 09 2019',42),(290,'06 09 2019',29),(291,'07 09 2019',34),(292,'08 09 2019',42),(293,'09 09 2019',19),(294,'10 09 2019',22),(295,'11 09 2019',42),(296,'12 09 2019',20),(297,'13 09 2019',28),(298,'14 09 2019',22),(299,'15 09 2019',39),(300,'16 09 2019',18),(301,'17 09 2019',31),(302,'18 09 2019',24),(303,'19 09 2019',25),(304,'20 09 2019',24),(305,'21 09 2019',28),(306,'22 09 2019',38),(307,'23 09 2019',34),(308,'24 09 2019',41),(309,'25 09 2019',48),(310,'26 09 2019',30),(311,'27 09 2019',19),(312,'28 09 2019',27),(313,'29 09 2019',40),(314,'30 09 2019',52),(315,'01 10 2019',65),(316,'02 10 2019',46),(317,'03 10 2019',35),(318,'04 10 2019',28),(319,'05 10 2019',55),(320,'06 10 2019',40),(321,'07 10 2019',45),(322,'08 10 2019',37),(323,'09 10 2019',49),(324,'10 10 2019',29),(325,'11 10 2019',23),(326,'12 10 2019',32),(327,'13 10 2019',25),(328,'14 10 2019',31),(329,'15 10 2019',45),(330,'16 10 2019',29),(331,'17 10 2019',19),(332,'18 10 2019',21),(333,'19 10 2019',8),(334,'20 10 2019',43),(335,'21 10 2019',40),(336,'22 10 2019',47),(337,'23 10 2019',37),(338,'24 10 2019',48),(339,'25 10 2019',24),(340,'26 10 2019',38),(341,'27 10 2019',22),(342,'28 10 2019',42),(343,'29 10 2019',11),(344,'30 10 2019',51),(345,'31 10 2019',36),(346,'01 11 2019',31),(347,'02 11 2019',43),(348,'03 11 2019',42),(349,'04 11 2019',18),(350,'05 11 2019',37),(351,'06 11 2019',29),(352,'07 11 2019',42),(353,'08 11 2019',38),(354,'09 11 2019',38),(355,'10 11 2019',30),(356,'11 11 2019',51),(357,'12 11 2019',18),(358,'13 11 2019',40),(359,'14 11 2019',24),(360,'15 11 2019',18),(361,'16 11 2019',42),(362,'17 11 2019',24),(363,'18 11 2019',9),(364,'19 11 2019',14),(365,'20 11 2019',14),(366,'21 11 2019',17),(367,'22 11 2019',27),(368,'23 11 2019',57),(369,'24 11 2019',36),(370,'25 11 2019',48),(371,'26 11 2019',36),(372,'27 11 2019',38),(373,'28 11 2019',18),(374,'29 11 2019',20),(375,'30 11 2019',29),(376,'01 12 2019',42),(377,'02 12 2019',22),(378,'03 12 2019',28),(379,'04 12 2019',19),(380,'05 12 2019',20),(381,'06 12 2019',17),(382,'07 12 2019',12),(383,'08 12 2019',15),(384,'09 12 2019',22),(385,'10 12 2019',19),(386,'11 12 2019',33),(387,'12 12 2019',14),(388,'13 12 2019',16),(389,'14 12 2019',27),(390,'15 12 2019',20),(391,'16 12 2019',21),(392,'17 12 2019',37),(393,'18 12 2019',35),(394,'19 12 2019',42),(395,'20 12 2019',17),(396,'21 12 2019',6),(397,'22 12 2019',20),(398,'23 12 2019',29),(399,'24 12 2019',17),(400,'25 12 2019',28),(401,'26 12 2019',18),(402,'27 12 2019',14),(403,'28 12 2019',17),(404,'29 12 2019',17),(405,'30 12 2019',25),(406,'31 12 2019',35),(407,'01 01 2020',45),(408,'02 01 2020',16),(409,'03 01 2020',26),(410,'04 01 2020',17),(411,'05 01 2020',25),(412,'06 01 2020',21),(413,'07 01 2020',34),(414,'08 01 2020',59),(415,'09 01 2020',17),(416,'10 01 2020',14),(417,'11 01 2020',18),(418,'12 01 2020',20),(419,'13 01 2020',12),(420,'14 01 2020',28),(421,'15 01 2020',21),(422,'16 01 2020',29),(423,'17 01 2020',19),(424,'18 01 2020',22),(425,'19 01 2020',35),(426,'20 01 2020',19),(427,'21 01 2020',16),(428,'22 01 2020',15),(429,'23 01 2020',11),(430,'24 01 2020',15),(431,'25 01 2020',44),(432,'26 01 2020',34),(433,'27 01 2020',39),(434,'28 01 2020',59),(435,'29 01 2020',6),(436,'30 01 2020',12),(437,'31 01 2020',31),(438,'01 02 2020',20),(439,'02 02 2020',19),(440,'03 02 2020',39),(441,'04 02 2020',11),(442,'05 02 2020',4545364),(443,'06 02 2020',17),(444,'07 02 2020',14),(445,'08 02 2020',19),(446,'09 02 2020',24),(447,'10 02 2020',14),(448,'11 02 2020',12),(449,'12 02 2020',9),(450,'13 02 2020',10000),(451,'14 02 2020',17),(452,'15 02 2020',26),(453,'16 02 2020',25),(454,'17 02 2020',27),(455,'18 02 2020',30),(456,'19 02 2020',32),(457,'20 02 2020',19),(458,'21 02 2020',14),(459,'22 02 2020',12),(460,'23 02 2020',24),(461,'24 02 2020',15);
/*!40000 ALTER TABLE `tbl_visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_visit_temp`
--

DROP TABLE IF EXISTS `tbl_visit_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_visit_temp` (
  `auto_id` bigint(16) NOT NULL AUTO_INCREMENT,
  `f1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` bigint(16) DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13526 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_visit_temp`
--

LOCK TABLES `tbl_visit_temp` WRITE;
/*!40000 ALTER TABLE `tbl_visit_temp` DISABLE KEYS */;
INSERT INTO `tbl_visit_temp` (`auto_id`, `f1`, `f2`) VALUES (13014,'157.55.39.113',1580229329),(13015,'217.218.21.242',1580229395),(13016,'217.218.21.242',1580229626),(13017,'217.218.21.242',1580229790),(13018,'217.218.21.242',1580230224),(13019,'66.249.64.79',1580234709),(13020,'35.170.79.193',1580249601),(13021,'34.223.90.9',1580277743),(13022,'157.55.39.144',1580279081),(13023,'46.229.168.145',1580283766),(13024,'213.180.203.57',1580329446),(13025,'141.8.142.20',1580347037),(13026,'167.172.255.133',1580348419),(13027,'66.249.66.28',1580348619),(13028,'54.36.150.69',1580354864),(13029,'54.36.150.56',1580354968),(13030,'141.8.142.20',1580370192),(13031,'46.229.168.146',1580373657),(13032,'64.225.23.192',1580376235),(13033,'167.114.64.113',1580379242),(13034,'64.225.23.167',1580382689),(13035,'66.249.66.221',1580398393),(13036,'46.229.168.139',1580425388),(13037,'66.249.64.93',1580432985),(13038,'66.249.64.95',1580440212),(13039,'66.249.64.91',1580443505),(13040,'66.249.64.251',1580451349),(13041,'66.249.64.91',1580453178),(13042,'40.77.167.13',1580453558),(13043,'18.191.203.175',1580457926),(13044,'18.191.203.175',1580457926),(13045,'66.249.64.93',1580461414),(13046,'54.36.150.20',1580463235),(13047,'54.36.150.92',1580465546),(13048,'54.36.150.129',1580471793),(13049,'66.249.64.251',1580471849),(13050,'66.249.64.253',1580471879),(13051,'54.36.150.39',1580473259),(13052,'51.15.124.39',1580474874),(13053,'66.249.64.95',1580474915),(13054,'66.249.64.251',1580477318),(13055,'141.8.142.20',1580478607),(13056,'66.249.64.93',1580481760),(13057,'66.249.64.91',1580487180),(13058,'66.249.64.253',1580488823),(13059,'66.249.64.91',1580490873),(13060,'66.249.64.251',1580491324),(13061,'66.249.64.225',1580493524),(13062,'18.191.254.238',1580495717),(13063,'18.191.254.238',1580495717),(13064,'66.249.64.93',1580496582),(13065,'66.249.64.253',1580500825),(13066,'66.249.64.253',1580511346),(13067,'157.55.39.68',1580513359),(13068,'66.249.64.251',1580515360),(13069,'54.36.150.190',1580516234),(13070,'5.232.117.60',1580527421),(13071,'141.8.142.184',1580528454),(13072,'5.232.117.60',1580528928),(13073,'5.232.117.60',1580529208),(13074,'87.250.224.87',1580531419),(13075,'5.232.99.233',1580535142),(13076,'93.158.166.5',1580535218),(13077,'5.232.99.233',1580535669),(13078,'5.232.99.233',1580535807),(13079,'2.183.189.196',1580540202),(13080,'54.36.150.8',1580553110),(13081,'157.55.39.95',1580555695),(13082,'95.108.181.77',1580558214),(13083,'54.36.149.64',1580564023),(13084,'157.55.39.68',1580578066),(13085,'157.55.39.68',1580598743),(13086,'54.36.148.136',1580603387),(13087,'157.55.39.95',1580605004),(13088,'54.36.148.47',1580607176),(13089,'5.232.109.3',1580617791),(13090,'5.232.67.176',1580622558),(13091,'185.130.77.254',1580622562),(13092,'5.232.67.176',1580623417),(13093,'5.232.67.176',1580624198),(13094,'5.232.67.176',1580625416),(13095,'5.232.67.176',1580627953),(13096,'5.232.67.176',1580628333),(13097,'5.232.67.176',1580628564),(13098,'54.36.148.170',1580632219),(13099,'173.252.87.26',1580635377),(13100,'54.36.148.136',1580638308),(13101,'74.208.28.204',1580655299),(13102,'141.8.142.20',1580667113),(13103,'54.36.148.156',1580681082),(13104,'54.36.149.23',1580683402),(13105,'66.249.64.253',1580686642),(13106,'141.8.142.192',1580687471),(13107,'66.249.64.79',1580687673),(13108,'207.46.13.204',1580691095),(13109,'3.231.53.245',1580692798),(13110,'54.36.150.46',1580697728),(13111,'5.232.102.32',1580700910),(13112,'5.232.102.32',1580701547),(13113,'157.55.39.89',1580704325),(13114,'178.238.203.214',1580709494),(13115,'5.232.113.170',1580710496),(13116,'2.180.18.111',1580715125),(13117,'66.249.64.91',1580716741),(13118,'173.252.87.43',1580717319),(13119,'176.65.176.225',1580719120),(13120,'5.226.139.121',1580719792),(13121,'66.249.64.95',1580720541),(13122,'66.249.64.225',1580721513),(13123,'66.249.64.225',1580721717),(13124,'134.209.168.104',1580722518),(13125,'207.46.13.199',1580724751),(13126,'66.249.64.253',1580724848),(13127,'165.227.99.141',1580724905),(13128,'66.249.64.251',1580726649),(13129,'54.36.149.31',1580728017),(13130,'54.36.148.18',1580730914),(13131,'54.36.150.3',1580732284),(13132,'46.229.168.140',1580733583),(13133,'66.249.64.225',1580740672),(13134,'66.249.64.251',1580742799),(13135,'66.249.64.251',1580745136),(13136,'66.249.64.95',1580751808),(13137,'66.249.64.225',1580752568),(13138,'46.229.168.146',1580753268),(13139,'54.36.149.26',1580757926),(13140,'46.101.185.245',1580760091),(13141,'176.65.164.211',1580787887),(13142,'54.36.150.78',1580794374),(13143,'5.232.124.11',1580797139),(13144,'2.182.115.68',1580800979),(13145,'192.40.57.59',1580820129),(13146,'2.182.115.251',1580822223),(13147,'45.144.64.236',1580824356),(13148,'40.77.167.222',1580835224),(13149,'165.227.103.109',1580838735),(13150,'40.77.167.80',1580847351),(13151,'54.36.150.84',1580853679),(13152,'3.230.3.155',1580864417),(13153,'64.246.165.140',1580870204),(13154,'5.232.119.98',1580874300),(13155,'66.249.64.91',1580874645),(13156,'40.77.167.222',1580875662),(13157,'40.77.167.80',1580877552),(13158,'2.182.114.200',1580884022),(13159,'34.222.214.83',1580887767),(13160,'157.55.39.123',1580888795),(13161,'2.180.18.111',1580889084),(13162,'5.126.154.172',1580894192),(13163,'5.126.154.172',1580894321),(13164,'5.126.154.172',1580894445),(13165,'66.249.64.91',1580898811),(13166,'2.180.18.111',1580901499),(13167,'5.126.154.172',1580902498),(13168,'5.126.154.172',1580902687),(13169,'93.158.166.5',1580912295),(13170,'141.8.142.20',1580917430),(13171,'54.36.148.47',1580920955),(13172,'66.249.64.253',1580926375),(13173,'54.36.150.34',1580939162),(13174,'54.36.149.37',1580941152),(13175,'54.36.148.145',1580941883),(13176,'185.130.77.110',1580945088),(13177,'46.229.168.146',1580959347),(13178,'207.46.13.36',1580960365),(13179,'54.36.149.48',1580962090),(13180,'54.36.149.18',1580962730),(13181,'5.232.95.134',1580971045),(13182,'46.229.168.152',1580990584),(13183,'46.229.168.141',1580990586),(13184,'54.36.150.187',1580992467),(13185,'54.36.148.115',1580992685),(13186,'66.249.64.253',1581004522),(13187,'54.36.149.36',1581005681),(13188,'54.36.150.24',1581011035),(13189,'207.46.13.160',1581047362),(13190,'34.205.225.124',1581055247),(13191,'134.209.23.82',1581058541),(13192,'54.36.150.132',1581072068),(13193,'207.46.13.177',1581072956),(13194,'46.100.115.190',1581075572),(13195,'46.100.115.190',1581075664),(13196,'46.229.168.161',1581077941),(13197,'34.205.225.124',1581100457),(13198,'54.36.148.169',1581101200),(13199,'93.158.166.5',1581101389),(13200,'54.36.150.103',1581103327),(13201,'54.36.149.65',1581105873),(13202,'207.46.13.28',1581127486),(13203,'2.182.119.49',1581132088),(13204,'2.183.190.146',1581148888),(13205,'95.82.20.29',1581150467),(13206,'207.46.13.160',1581152344),(13207,'46.229.168.137',1581153437),(13208,'207.46.13.102',1581159358),(13209,'54.36.150.187',1581160118),(13210,'54.36.150.77',1581166072),(13211,'207.46.13.102',1581166638),(13212,'46.229.168.148',1581174831),(13213,'31.171.251.194',1581175961),(13214,'45.142.54.144',1581178726),(13215,'66.249.64.95',1581178773),(13216,'207.46.13.102',1581180082),(13217,'151.80.39.40',1581180409),(13218,'151.80.39.40',1581192829),(13219,'46.229.168.140',1581193354),(13220,'3.231.158.78',1581203704),(13221,'151.80.39.63',1581205146),(13222,'207.46.13.102',1581211077),(13223,'66.249.64.253',1581213787),(13224,'151.80.39.63',1581218001),(13225,'46.229.168.147',1581218971),(13226,'2.182.115.210',1581219046),(13227,'78.38.130.22',1581223882),(13228,'185.130.78.70',1581225361),(13229,'5.126.214.158',1581228645),(13230,'5.126.214.158',1581229191),(13231,'159.89.207.86',1581229722),(13232,'151.80.39.40',1581231336),(13233,'2.180.18.111',1581233630),(13234,'54.36.149.21',1581245704),(13235,'40.77.167.12',1581246042),(13236,'40.77.167.12',1581249840),(13237,'46.229.168.147',1581257826),(13238,'40.77.167.12',1581258879),(13239,'151.80.39.40',1581260481),(13240,'2.180.18.111',1581262846),(13241,'2.180.18.111',1581263976),(13242,'40.77.167.12',1581275483),(13243,'54.36.149.69',1581280865),(13244,'149.56.19.35',1581281308),(13245,'40.77.167.12',1581290712),(13246,'184.75.211.131',1581305021),(13247,'176.65.161.130',1581307371),(13248,'2.180.18.111',1581315301),(13249,'95.108.213.31',1581318133),(13250,'3.231.202.129',1581328805),(13251,'5.45.207.39',1581332101),(13252,'2.180.18.111',1581336836),(13253,'54.36.148.52',1581349598),(13254,'66.249.66.219',1581358977),(13255,'54.36.150.107',1581362082),(13256,'46.229.168.130',1581401902),(13257,'66.249.66.223',1581413460),(13258,'66.249.66.221',1581414827),(13259,'3.228.0.164',1581420641),(13260,'54.36.148.114',1581422230),(13261,'54.36.150.181',1581430362),(13262,'54.36.148.201',1581441558),(13263,'165.22.192.97',1581448675),(13264,'40.77.167.204',1581449519),(13265,'54.36.148.248',1581450613),(13266,'54.36.148.156',1581452685),(13267,'46.229.168.151',1581467122),(13268,'5.232.97.161',1581481900),(13269,'66.249.64.95',1581485041),(13270,'54.36.150.176',1581491261),(13271,'151.80.39.40',1581502066),(13272,'54.36.150.159',1581503222),(13273,'66.249.64.93',1581523734),(13274,'207.46.13.98',1581531887),(13275,'141.8.142.20',1581552362),(13276,'54.36.148.161',1581555777),(13277,'107.174.150.108',1581567801),(13278,'151.80.39.40',1581568906),(13279,'54.36.150.31',1581569805),(13280,'104.36.18.163',1581573074),(13281,'151.80.39.63',1581575747),(13282,'66.249.64.81',1581579058),(13283,'54.36.150.149',1581583355),(13284,'179.61.185.121',1581588584),(13285,'151.80.39.40',1581591367),(13286,'2.180.18.111',1581594592),(13287,'3.235.3.46',1581596357),(13288,'151.80.39.63',1581596822),(13289,'151.80.39.40',1581600875),(13290,'66.249.64.91',1581603142),(13291,'66.249.64.93',1581605444),(13292,'151.80.39.40',1581605777),(13293,'151.80.39.63',1581613129),(13294,'54.36.150.27',1581617564),(13295,'54.36.150.76',1581624402),(13296,'54.36.150.138',1581631824),(13297,'151.80.39.63',1581635540),(13298,'151.80.39.40',1581640221),(13299,'66.249.64.95',1581641449),(13300,'151.80.39.63',1581656263),(13301,'141.8.142.20',1581657474),(13302,'151.80.39.40',1581659522),(13303,'66.249.64.91',1581659892),(13304,'54.36.148.175',1581664440),(13305,'151.80.39.40',1581667368),(13306,'66.249.64.253',1581669563),(13307,'54.36.150.75',1581681911),(13308,'54.36.148.1',1581682598),(13309,'151.80.39.63',1581698086),(13310,'151.80.39.40',1581704500),(13311,'151.80.39.63',1581709787),(13312,'151.80.39.63',1581713157),(13313,'151.80.39.63',1581716909),(13314,'151.80.39.63',1581722124),(13315,'151.80.39.63',1581724988),(13316,'213.180.203.26',1581725583),(13317,'151.80.39.63',1581728422),(13318,'151.80.39.63',1581731879),(13319,'151.80.39.40',1581736843),(13320,'2.182.114.192',1581738502),(13321,'151.80.39.40',1581741791),(13322,'84.17.47.171',1581746771),(13323,'66.249.64.95',1581750649),(13324,'151.80.39.40',1581752567),(13325,'66.249.64.95',1581753712),(13326,'157.55.39.123',1581756266),(13327,'176.65.191.148',1581756274),(13328,'151.80.39.40',1581757045),(13329,'151.80.39.40',1581767500),(13330,'151.80.39.63',1581772281),(13331,'34.234.223.87',1581773311),(13332,'151.80.39.63',1581777531),(13333,'151.80.39.40',1581781199),(13334,'151.80.39.40',1581786488),(13335,'66.249.64.95',1581789671),(13336,'151.80.39.40',1581795102),(13337,'151.80.39.63',1581802600),(13338,'54.36.150.178',1581806379),(13339,'34.234.223.87',1581817680),(13340,'66.249.66.219',1581823378),(13341,'176.65.165.228',1581823418),(13342,'5.232.107.172',1581824659),(13343,'66.249.76.189',1581829116),(13344,'217.218.21.242',1581833148),(13345,'176.65.174.106',1581833931),(13346,'5.232.81.254',1581834053),(13347,'54.36.149.36',1581836269),(13348,'54.36.148.87',1581838660),(13349,'64.94.208.195',1581840196),(13350,'64.94.208.195',1581840741),(13351,'207.46.13.182',1581841728),(13352,'2.180.18.111',1581851215),(13353,'141.8.142.20',1581852146),(13354,'198.143.178.104',1581853548),(13355,'2.180.18.111',1581855601),(13356,'46.229.168.146',1581858024),(13357,'66.249.76.177',1581861311),(13358,'54.36.148.187',1581874427),(13359,'157.55.39.196',1581880217),(13360,'46.229.168.129',1581883547),(13361,'66.249.64.95',1581902724),(13362,'34.229.57.237',1581904049),(13363,'151.80.39.63',1581908907),(13364,'141.8.142.20',1581909360),(13365,'151.234.113.133',1581909902),(13366,'5.232.95.37',1581911611),(13367,'54.36.150.109',1581915130),(13368,'3.80.11.93',1581922190),(13369,'66.249.64.91',1581924229),(13370,'176.65.179.248',1581927788),(13371,'3.80.11.93',1581927856),(13372,'151.80.39.40',1581930325),(13373,'151.80.39.63',1581933479),(13374,'54.36.148.53',1581934609),(13375,'151.80.39.40',1581938660),(13376,'54.36.149.36',1581942797),(13377,'2.180.18.111',1581942828),(13378,'151.80.39.63',1581943345),(13379,'66.249.64.91',1581943674),(13380,'157.55.39.48',1581944556),(13381,'66.249.64.79',1581947099),(13382,'37.27.147.19',1581953582),(13383,'66.249.64.91',1581955305),(13384,'54.36.149.53',1581959907),(13385,'5.117.1.170',1581964213),(13386,'151.80.39.40',1581965040),(13387,'151.80.39.63',1581980844),(13388,'54.36.150.36',1581984798),(13389,'151.80.39.40',1581988416),(13390,'151.80.39.63',1581996481),(13391,'5.232.114.219',1581996494),(13392,'5.232.114.219',1581998751),(13393,'2.182.113.9',1582001602),(13394,'2.182.113.9',1582002269),(13395,'151.80.39.40',1582002911),(13396,'5.232.126.23',1582006604),(13397,'80.191.246.61',1582007736),(13398,'80.191.246.61',1582008127),(13399,'80.191.246.61',1582008664),(13400,'176.65.188.79',1582009739),(13401,'151.80.39.40',1582009919),(13402,'176.65.188.79',1582010319),(13403,'176.65.188.79',1582012203),(13404,'176.65.188.79',1582012398),(13405,'151.80.39.63',1582016502),(13406,'151.80.39.63',1582022032),(13407,'151.80.39.40',1582028288),(13408,'207.46.13.218',1582039006),(13409,'40.77.167.220',1582040564),(13410,'151.80.39.63',1582045111),(13411,'37.9.113.206',1582045372),(13412,'151.80.39.63',1582049612),(13413,'173.245.203.99',1582050152),(13414,'167.172.180.145',1582052084),(13415,'151.80.39.40',1582055880),(13416,'151.80.39.40',1582059807),(13417,'151.80.39.40',1582065051),(13418,'84.17.48.201',1582066488),(13419,'151.80.39.40',1582070903),(13420,'151.80.39.63',1582076222),(13421,'151.80.39.63',1582081480),(13422,'176.65.178.17',1582083623),(13423,'5.232.64.179',1582085179),(13424,'151.80.39.40',1582090646),(13425,'54.36.148.189',1582091908),(13426,'54.36.149.10',1582092107),(13427,'217.218.21.242',1582095008),(13428,'176.65.168.79',1582099737),(13429,'141.8.142.20',1582100873),(13430,'151.80.39.63',1582101270),(13431,'5.232.103.130',1582101360),(13432,'5.232.103.130',1582101870),(13433,'104.245.35.103',1582102368),(13434,'54.36.148.176',1582103012),(13435,'54.36.150.2',1582105007),(13436,'54.36.149.17',1582105602),(13437,'217.218.21.242',1582108235),(13438,'151.80.39.40',1582110756),(13439,'217.218.21.242',1582111479),(13440,'46.229.168.142',1582114377),(13441,'2.180.18.111',1582114760),(13442,'54.36.148.60',1582115981),(13443,'151.80.39.40',1582120989),(13444,'91.137.18.81',1582126759),(13445,'54.36.148.134',1582133378),(13446,'151.80.39.40',1582136329),(13447,'46.229.168.137',1582147425),(13448,'46.229.168.142',1582147427),(13449,'157.55.39.196',1582147950),(13450,'151.80.39.40',1582152888),(13451,'40.77.167.134',1582160410),(13452,'37.179.42.33',1582163094),(13453,'54.36.150.172',1582163461),(13454,'141.8.142.20',1582166762),(13455,'151.80.39.63',1582171019),(13456,'54.36.149.49',1582181500),(13457,'176.65.161.254',1582185990),(13458,'54.36.148.174',1582186448),(13459,'213.180.203.26',1582194364),(13460,'54.36.148.28',1582194709),(13461,'66.249.64.91',1582198144),(13462,'5.125.139.184',1582200167),(13463,'54.36.150.181',1582200546),(13464,'54.36.148.120',1582218400),(13465,'46.229.168.146',1582235916),(13466,'31.171.248.238',1582250357),(13467,'40.77.167.94',1582256564),(13468,'66.249.64.81',1582257531),(13469,'18.209.248.183',1582257627),(13470,'66.249.64.225',1582258166),(13471,'141.8.142.20',1582266079),(13472,'93.158.166.5',1582269067),(13473,'46.229.168.133',1582301212),(13474,'207.46.13.218',1582304268),(13475,'52.6.80.58',1582308434),(13476,'213.180.203.26',1582308525),(13477,'176.65.166.237',1582309883),(13478,'3.227.255.32',1582331659),(13479,'217.218.21.242',1582354814),(13480,'34.200.224.64',1582361218),(13481,'34.200.224.64',1582366109),(13482,'217.218.21.242',1582366365),(13483,'217.218.21.242',1582366669),(13484,'83.122.186.127',1582368311),(13485,'185.212.170.118',1582369894),(13486,'207.46.13.44',1582372170),(13487,'52.53.188.6',1582384518),(13488,'54.153.72.31',1582384522),(13489,'66.249.64.77',1582426415),(13490,'5.232.75.45',1582429003),(13491,'46.229.168.141',1582432187),(13492,'207.46.13.44',1582432761),(13493,'2.180.18.111',1582433008),(13494,'2.180.18.111',1582435814),(13495,'141.8.142.20',1582435834),(13496,'2.180.18.111',1582436257),(13497,'2.180.18.111',1582436751),(13498,'46.229.168.137',1582441705),(13499,'5.232.114.11',1582444169),(13500,'2.180.18.111',1582447469),(13501,'2.180.18.111',1582447599),(13502,'5.255.174.141',1582456326),(13503,'66.249.64.225',1582461823),(13504,'5.125.63.56',1582463340),(13505,'5.125.63.56',1582463459),(13506,'3.221.127.202',1582466338),(13507,'78.39.152.65',1582468787),(13508,'54.237.82.35',1582481872),(13509,'66.249.64.81',1582484242),(13510,'66.249.64.95',1582484311),(13511,'66.249.64.225',1582485749),(13512,'5.232.77.68',1582516634),(13513,'2.180.18.111',1582518472),(13514,'54.187.3.2',1582531214),(13515,'93.117.177.208',1582543269),(13516,'93.117.177.208',1582543473),(13517,'93.117.177.208',1582543755),(13518,'2.180.18.111',1582544397),(13519,'2.180.18.111',1582544535),(13520,'2.180.18.111',1582548157),(13521,'2.180.3.233',1582548772),(13522,'46.229.168.148',1582552362),(13523,'2.180.18.111',1582553992),(13524,'40.77.167.131',1582554135),(13525,'2.180.18.111',1582558366);
/*!40000 ALTER TABLE `tbl_visit_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'vacharc2_vachardb'
--

--
-- Dumping routines for database 'vacharc2_vachardb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-24 21:12:52
