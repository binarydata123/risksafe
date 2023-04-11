-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: risksafe
-- ------------------------------------------------------
-- Server version	5.6.22-log

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
-- Table structure for table `as_actiontype`
--

DROP TABLE IF EXISTS `as_actiontype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_actiontype` (
  `idaction` int(11) NOT NULL AUTO_INCREMENT,
  `ac_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idaction`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_actiontype`
--

LOCK TABLES `as_actiontype` WRITE;
/*!40000 ALTER TABLE `as_actiontype` DISABLE KEYS */;
INSERT INTO `as_actiontype` VALUES (1,'Avoid (Discontinue risky activity)'),(2,'Accept (Retain by informed decision)'),(3,'Remove (Remove risky activity)'),(4,'Take on Risk to increase opportunity'),(5,'Change Likelihood'),(6,'Change Consequence'),(7,'Share risk with 3rd party (Insurence or Joint Venture)');
/*!40000 ALTER TABLE `as_actiontype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_ascontrols`
--

DROP TABLE IF EXISTS `as_ascontrols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_ascontrols` (
  `idcontrol` int(11) NOT NULL AUTO_INCREMENT,
  `ct_det` int(11) DEFAULT NULL,
  `ct_descript` varchar(255) DEFAULT NULL,
  `ct_tmpid` int(11) DEFAULT NULL,
  `ct_assessment` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcontrol`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_ascontrols`
--

LOCK TABLES `as_ascontrols` WRITE;
/*!40000 ALTER TABLE `as_ascontrols` DISABLE KEYS */;
INSERT INTO `as_ascontrols` VALUES (1,3,'asdasdsasd',-1,NULL),(2,3,'asdasdsasd',-1,NULL),(3,3,'sdfsdf',-1,NULL),(7,0,'fdsfsdf',-1,NULL),(8,3,'asdasd',-1,NULL),(9,3,'asdasdas',-1,NULL),(16,4,'asdasdasd',-1,NULL),(17,8,'adasd',-1,8),(18,8,'asdasdas',-1,8),(24,10,'asdasd',-1,9),(25,11,'sdfsdf',-1,9),(28,9,'asdasd',-1,9),(29,-1,'Errors in text',-1,9),(30,-1,'Errors in text',-1,9),(31,-1,'Errors in text',-1,9),(32,-1,'Errors in text',-1,9),(33,-1,'Errors in text',-1,9),(34,-1,'Errors in text',-1,9),(36,-1,'Errors in text',-1,9),(37,-1,'Errors in text',-1,9),(38,-1,'Errors in text',-1,9),(39,9,'Errors in text',-1,9),(40,9,'Errors in text',-1,9),(41,-1,'Errors in text',-1,9);
/*!40000 ALTER TABLE `as_ascontrols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_assessment`
--

DROP TABLE IF EXISTS `as_assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_assessment` (
  `idassessment` int(11) NOT NULL AUTO_INCREMENT,
  `as_user` int(11) DEFAULT NULL,
  `as_type` int(11) DEFAULT NULL,
  `as_team` varchar(255) DEFAULT NULL,
  `as_task` varchar(255) DEFAULT NULL,
  `as_descript` text,
  `as_number` varchar(255) DEFAULT NULL,
  `as_owner` varchar(255) DEFAULT NULL,
  `as_next` date DEFAULT NULL,
  `as_assessor` varchar(255) DEFAULT NULL,
  `as_approval` varchar(255) DEFAULT NULL,
  `as_completed` tinyint(4) DEFAULT NULL,
  `as_date` date DEFAULT NULL,
  PRIMARY KEY (`idassessment`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_assessment`
--

LOCK TABLES `as_assessment` WRITE;
/*!40000 ALTER TABLE `as_assessment` DISABLE KEYS */;
INSERT INTO `as_assessment` VALUES (1,1,1,'Matej Drabik','Development','','555','Me','2015-11-10','Me','1',0,'2015-11-16'),(3,1,1,'sdfsd','fsdf','','sdfsd','fsdf','2015-11-18','sdfsdf','1',0,'2015-11-16'),(4,999,1,'sdfsdf','dfsdf',NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL),(6,1,2,'Matej 2','Tako je','sdasdasd','','sdfsdfsdfsdfsdf','2015-11-17','sdfsdfsdf','1',0,'2015-11-17'),(7,1,1,'dasd','asdas','dasd','1','asdasd','2015-11-17','asdasd','1',0,'2015-11-17'),(8,1,2,'Test 111','dsdasd','asdasd','1','asdasd','2015-11-17','asd','1',0,'2015-11-17'),(9,1,3,'test2222','dsdasd','asdasd','1','asdasd','2015-11-17','asdasd','1',0,'2015-11-17');
/*!40000 ALTER TABLE `as_assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_astreat`
--

DROP TABLE IF EXISTS `as_astreat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_astreat` (
  `idtreat` int(11) NOT NULL AUTO_INCREMENT,
  `tr_det` int(11) DEFAULT NULL,
  `tr_descript` varchar(255) DEFAULT NULL,
  `tr_tmpid` int(11) DEFAULT NULL,
  `tr_assessment` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtreat`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_astreat`
--

LOCK TABLES `as_astreat` WRITE;
/*!40000 ALTER TABLE `as_astreat` DISABLE KEYS */;
INSERT INTO `as_astreat` VALUES (13,4,'adsad',-1,NULL),(16,9,'asdasd',-1,9),(17,10,'asdasd',-1,9),(18,11,'sdfsdf',-1,9),(20,9,'asdasdasd',-1,9),(21,9,'test',-1,9),(23,-1,'Treatment 2',-1,9),(24,-1,'Treatment 2',-1,9),(25,-1,'Treatment 2',-1,9),(26,-1,'Treatment 2',-1,9),(33,9,'Treatment 2',-1,9),(35,-1,'Treatment 2',-1,9);
/*!40000 ALTER TABLE `as_astreat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_auditcontrols`
--

DROP TABLE IF EXISTS `as_auditcontrols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_auditcontrols` (
  `idcontrol` int(11) NOT NULL AUTO_INCREMENT,
  `con_user` int(11) DEFAULT NULL,
  `con_company` varchar(255) DEFAULT NULL,
  `con_industry` varchar(255) DEFAULT NULL,
  `con_team` varchar(255) DEFAULT NULL,
  `con_task` varchar(255) DEFAULT NULL,
  `con_assessor` varchar(100) DEFAULT NULL,
  `con_site` varchar(100) DEFAULT NULL,
  `con_date` date DEFAULT NULL,
  `con_time` varchar(45) DEFAULT NULL,
  `con_street` varchar(100) DEFAULT NULL,
  `con_building` varchar(100) DEFAULT NULL,
  `con_zipcode` varchar(45) DEFAULT NULL,
  `con_state` varchar(100) DEFAULT NULL,
  `con_country` varchar(100) DEFAULT NULL,
  `con_control` varchar(255) DEFAULT NULL,
  `con_effect` int(11) DEFAULT NULL,
  `con_observation` varchar(255) DEFAULT NULL,
  `con_treatment` varchar(255) DEFAULT NULL,
  `con_frequency` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcontrol`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_auditcontrols`
--

LOCK TABLES `as_auditcontrols` WRITE;
/*!40000 ALTER TABLE `as_auditcontrols` DISABLE KEYS */;
INSERT INTO `as_auditcontrols` VALUES (4,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dfsdfsdf',0,'sdfsdf','sdfsdf',2),(10,1,'Specto d.o.o.','Graphich industry','Prepress','Backup','Matej Drabik','Hall 2','2015-11-28','12:30pm','Široka 3, Batrina','Building 1','35410','Brodsko-posavska','Croatia','Errors in text',2,'Control not in place','Place control',7);
/*!40000 ALTER TABLE `as_auditcontrols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_auditcriteria`
--

DROP TABLE IF EXISTS `as_auditcriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_auditcriteria` (
  `idcriteria` int(11) NOT NULL AUTO_INCREMENT,
  `cri_control` int(11) DEFAULT NULL,
  `cri_question` varchar(255) DEFAULT NULL,
  `cri_expected` varchar(255) DEFAULT NULL,
  `cri_outcome` int(11) DEFAULT NULL,
  `cri_notes` text,
  PRIMARY KEY (`idcriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_auditcriteria`
--

LOCK TABLES `as_auditcriteria` WRITE;
/*!40000 ALTER TABLE `as_auditcriteria` DISABLE KEYS */;
INSERT INTO `as_auditcriteria` VALUES (1,3,'dfds','fsdfsdf',0,'sdfsdf'),(2,4,'sdfsdf11133111','sdfsdf',2,'sdfsdfsd'),(3,3,'asda','sdasdasd',0,'asdasdsa'),(4,3,'dasdasd','asdasdasd',0,''),(6,8,'asdasd111ad111','asdasd',0,'asdasd'),(7,10,'Do we have it','Have no idea',1,'dsdadsasd');
/*!40000 ALTER TABLE `as_auditcriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_audits`
--

DROP TABLE IF EXISTS `as_audits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_audits` (
  `idaudit` int(11) NOT NULL AUTO_INCREMENT,
  `au_user` int(11) DEFAULT NULL,
  `au_assessment` int(11) DEFAULT NULL,
  `au_descript` varchar(255) DEFAULT NULL,
  `au_date` date DEFAULT NULL,
  PRIMARY KEY (`idaudit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_audits`
--

LOCK TABLES `as_audits` WRITE;
/*!40000 ALTER TABLE `as_audits` DISABLE KEYS */;
INSERT INTO `as_audits` VALUES (1,1,1,'sdasda','2015-11-18'),(3,1,-1,'NO CONN','2015-11-19'),(4,1,-1,'adasdasdasd','2015-11-20');
/*!40000 ALTER TABLE `as_audits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_bia`
--

DROP TABLE IF EXISTS `as_bia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_bia` (
  `idbia` int(11) NOT NULL AUTO_INCREMENT,
  `bia_activity` varchar(255) DEFAULT NULL,
  `bia_descript` text,
  `bia_priority` varchar(10) DEFAULT NULL,
  `bia_impact` varchar(45) DEFAULT NULL,
  `bia_time` int(11) DEFAULT NULL,
  `bia_action` varchar(255) DEFAULT NULL,
  `bia_resource` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idbia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_bia`
--

LOCK TABLES `as_bia` WRITE;
/*!40000 ALTER TABLE `as_bia` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_bia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_cat`
--

DROP TABLE IF EXISTS `as_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_cat` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_risk` int(11) DEFAULT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_descript` text,
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=488 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_cat`
--

LOCK TABLES `as_cat` WRITE;
/*!40000 ALTER TABLE `as_cat` DISABLE KEYS */;
INSERT INTO `as_cat` VALUES (173,1,'Incorporation - equity allocation,  vesting, share buy back',NULL),(174,1,'Fund Raising - raising money, dilution, personal expenses & company expenses ',NULL),(175,1,'IP Agreement',NULL),(176,1,'Hiring - founder employment, Hiring, Termination ',NULL),(177,1,'Founder skills & experience ',NULL),(178,2,'Product market fit',NULL),(179,2,'Customer segments ',NULL),(180,2,'Barriers to entry ',NULL),(181,2,'Market adoption',NULL),(182,2,'Exit strategy ',NULL),(183,2,'Customer demand',NULL),(184,2,'Increased competition',NULL),(185,2,'Adoption of new Technology or Service',NULL),(186,2,'New Business Opportunity',NULL),(187,3,'Non-compliance with regulations ',NULL),(188,3,'Insurance coverage',NULL),(189,3,'Workers Compensation',NULL),(190,3,'Policies, procedures or expectations, which may be set by contracts, customers',NULL),(191,3,'Negligence',NULL),(192,3,'Codes of Practice',NULL),(193,3,'Lack of licence or permits',NULL),(194,3,'Police checks and background checks for employees and contractors',NULL),(195,4,'Non-compliance with state and national privacy laws on recording, storing and disposing of customer information',NULL),(196,4,'Records Management',NULL),(197,4,'Cyber Security breaches due to Weak passwords that are used repeatedly, Phishing, System vulnerabilities',NULL),(198,5,'Financial Markets',NULL),(199,5,'Unemployment',NULL),(200,5,'Mergers and Acquistion',NULL),(201,5,'Competition',NULL),(202,6,'Financial Viability',NULL),(203,6,'Lack of Sales & Marketing',NULL),(204,6,'Planning & Scoping',NULL),(205,6,'Qualiy of execution',NULL),(206,6,'Resourcing',NULL),(207,6,'Customer interaction and after-sales service',NULL),(208,6,'Service level agreements',NULL),(209,6,'Non existent contracts',NULL),(210,7,'Government/Policy changes',NULL),(211,7,'Laws & Regulations',NULL),(212,8,'Employee capability',NULL),(213,8,'Harrassment & Unfair Dismissal',NULL),(214,8,'Fraudulent acivity (Internal & External)',NULL),(215,8,'Staff Absence ',NULL),(216,8,'Illness or retirement of key staff',NULL),(217,8,'Sucession planning',NULL),(218,9,'Capacity',NULL),(219,9,'Design',NULL),(220,9,'Execution',NULL),(221,9,'Suppliers & Dependancies',NULL),(222,10,'Data Integrity',NULL),(223,10,'Data & systems availabiliy',NULL),(224,10,'Development & Deployment',NULL),(225,10,'Maintenance',NULL),(226,10,'Availability of assets',NULL),(227,10,'Capability of assets',NULL),(228,10,'Access to capital',NULL),(229,10,'Complexity',NULL),(230,11,'Cash flow & budgetary requirements',NULL),(231,11,'Ad hoc income',NULL),(232,11,'Tax  & GST obligations',NULL),(233,11,'Creditor and debtor management',NULL),(234,11,'Remuneration',NULL),(235,11,'Customers defaulting on payments',NULL),(236,11,'Depreciation of assets',NULL),(237,11,'Accounting and Financial Management ',NULL),(238,12,'Individual safety',NULL),(239,12,'Workplace safety',NULL),(240,12,'Public safety',NULL),(241,12,'Dangerous objects & Substances',NULL),(242,12,'First Aid',NULL),(243,12,'Safety and appropriateness of products or services delivered',NULL),(244,13,'Loss or damage due to accidents ',NULL),(245,13,'Natural disasters such as fire, flood, hail or storms',NULL),(246,13,'Property damage caused by burst water pipes',NULL),(247,13,'Power failure',NULL),(248,13,'Security of the business premises, assets and people',NULL),(249,14,'Conduct of the entity',NULL),(250,14,'Complaints Management',NULL),(251,14,'Quality and appropriateness of service ',NULL),(252,14,'Customer interaction and ',NULL),(253,14,'Conduct of employees or other individuals ',NULL),(254,15,'Equipment used for operations ',NULL),(255,15,'Maintenance',NULL),(256,15,'Depreciation',NULL),(257,15,'Upgrade',NULL),(258,16,'Inappropriate organisational structure ',NULL),(259,16,'Management of external stakeholders',NULL),(260,16,'Identifying, establishing and maintaining appropriate relationships',NULL),(316,17,'Manual tasks',NULL),(317,17,'Gravity',NULL),(318,17,'Restricted Space',NULL),(319,17,'Other',NULL),(320,18,'Electricity',NULL),(321,18,'LPG Gas',NULL),(322,18,'Pressurised containsers',NULL),(323,18,'Other',NULL),(324,19,'Machinery (fixed)',NULL),(325,19,'Machinery (portable)',NULL),(326,19,'Hand Tools',NULL),(327,19,'Vehicles/ trailers',NULL),(328,19,'Other',NULL),(329,20,'Non Hazardous Chemicals',NULL),(330,20,'Hazardous Chemical',NULL),(331,20,'Radiation',NULL),(332,20,'Fumes, Vapours or Dust',NULL),(333,20,'Other',NULL),(334,21,'Buildings and fixtures',NULL),(335,21,'Driveways and Paths',NULL),(336,21,'Workshops and work  rooms',NULL),(337,21,'Playground equipment',NULL),(338,21,'Furniture',NULL),(339,21,'Swimming Pool',NULL),(340,21,'Slips and Trips',NULL),(341,21,'Other',NULL),(342,45,'Noise',NULL),(343,45,'Sun Exposure',NULL),(344,45,'Water',NULL),(345,45,'Animals/Insects',NULL),(346,45,'Storms/weather',NULL),(347,45,'Temparature',NULL),(348,45,'Inadequate Light',NULL),(349,45,'Other',NULL),(350,22,'Bodily Fluid',NULL),(351,22,'Viruses/Disease',NULL),(352,22,'Blood/Cuts ',NULL),(353,22,'Other',NULL),(354,23,'Apprentices and students',NULL),(355,23,'Staff',NULL),(356,23,'Parents/Others',NULL),(357,23,'Physical',NULL),(358,23,'Physchological/stress',NULL),(359,23,'Other',NULL),(360,24,'Fire',NULL),(361,24,'Asbestos',NULL),(362,25,'Contamination or deteriarations',NULL),(363,25,'Cleanliness',NULL),(364,25,'Regulatory requirements',NULL),(365,25,'Labelling & Allergies',NULL),(366,25,'Alcohol & Intoxication',NULL),(367,26,'Being Cut or Stabbed',NULL),(368,26,'Shearing or friction',NULL),(369,26,'Vibration',NULL),(370,26,'Struck, Crushed or Entangled',NULL),(371,33,'Budgeting',NULL),(372,33,'Sponsorship',NULL),(373,33,'Lack of financial viability',NULL),(374,33,'Discretion limits on expenses',NULL),(375,33,'Lack of Audits',NULL),(376,33,'Fraud (Internal & External)',NULL),(377,33,'Inaccurate and/or insufficient financial information ',NULL),(378,33,'Tax management ',NULL),(379,33,'Debtor & Creditor management',NULL),(380,34,'Animals',NULL),(381,34,'Festivals/Events',NULL),(382,34,'Fire',NULL),(383,34,'Food & Drink',NULL),(384,34,'Machines',NULL),(385,34,'Vehicles',NULL),(386,34,'Damage to property',NULL),(387,35,'Acting in breach of trust ',NULL),(388,35,'Incorporation',NULL),(389,35,'Non-compliance with regulations (such as changes to workplace health and safety standards)',NULL),(390,35,'Insurance coverage',NULL),(391,35,'Workers Compensation',NULL),(392,35,'Policies, procedures or expectations, which may be set by contracts, customers',NULL),(393,35,'Negligence',NULL),(394,35,'Codes of Practice',NULL),(395,35,'Lack of licence or permits',NULL),(396,36,'Non-compliance with state and national privacy laws on recording, storing and disposing of customer information.',NULL),(397,36,'Availability of Systems ',NULL),(398,36,'Integrity of systems',NULL),(399,36,'Records Management',NULL),(400,36,'Cyber Security breaches due to; Weak passwords that are used repeatedly, Phishing, System vulnerabilities',NULL),(401,37,'Supervision of Volunteers',NULL),(402,37,'Code of Conduct',NULL),(403,37,'Training',NULL),(404,37,'Member protection policy',NULL),(405,37,'Police checks and background checks for employees and contractors',NULL),(406,38,'Government/Policy changes',NULL),(407,38,'Laws & Regulations',NULL),(408,39,'Employee capability',NULL),(409,39,'Poor staff recruitment and training ',NULL),(410,39,'Lack of beneficiary welfare or safety ',NULL),(411,39,'Harrassment & Unfair Dismissal',NULL),(412,39,'Staff Absence ',NULL),(413,39,'Illness of key staff',NULL),(414,39,'Sucession planning',NULL),(415,40,'Capacity planning ',NULL),(416,40,'Design',NULL),(417,40,'Execution',NULL),(418,40,'Suppliers & Dependancies',NULL),(419,41,'Individual safety ',NULL),(420,41,'Workplace safety',NULL),(421,41,'Public safety',NULL),(422,41,'Dangerous Objects & Substances',NULL),(423,41,'First Aid',NULL),(424,41,'Safety and appropriateness of products or services delivered',NULL),(425,42,'Loss or damage due to accidents ',NULL),(426,42,'Natural disasters such as fire, flood, hail or storms',NULL),(427,42,'Power failure',NULL),(428,42,'Security of the business premises, assets and people',NULL),(429,43,'Demographic changes such as an increase in the size of beneficiary group ',NULL),(430,43,'Poor public perception and reputation',NULL),(431,43,'Viability of product or service associated ',NULL),(432,43,'Conduct of employees or members',NULL),(433,44,'Management of external stakeholders',NULL),(434,44,'Identifying, establishing and maintaining an appropriate relationship',NULL),(435,44,'Inappropriate organisational structure ',NULL),(436,44,'Trustee body lacks relevant skills or commitment',NULL),(437,44,'Conflicts of interest',NULL),(438,27,'Unauthorised activity - Rogue trading involving staff',NULL),(439,27,'Theft & Fraud - Inernal Fraud invovling staff',NULL),(440,27,'Theft & Fraud - Intentional theft and malicious damage, destruction or sabotage of assets involving ANZ staff',NULL),(441,27,'Theft & Fraud - Unethical or corrupt activities (smullging, tax evasion, bribes, kick backs)',NULL),(442,27,'Theft & Fraud - Insider trading',NULL),(443,28,'Theft & Fraud - Theft or robbery by an external party',NULL),(444,28,'Theft & Fraud - Fraud by an external party',NULL),(445,28,'Systems security - Damage to systems due to external hacking or malware',NULL),(446,28,'Systems security - Theft and or unauthorised access to information held within systems by an external party',NULL),(447,46,'Employee relations - Inappropriate employee terminatin, redundancy and or retrenchment',NULL),(448,46,'Employee relations - Employee remuneration/benefits/conditions are not in accordance with employment agreement or law',NULL),(449,46,'Employee relations - Inability to attract, retain or effectively deploy/train capable staff or required skill or experience',NULL),(450,46,'Safe environment - Inadequate workplace health, safety or wellbeing provided to staff or the public',NULL),(451,46,'Diversity & discrimination - Inadequate diversity and or anit discrimination practices within the workplace',NULL),(452,29,'Suitability, disclosure and fiduciary - Management of client/customer/member funds entrusted ',NULL),(453,29,'Suitability, disclosure and fiduciary - Inadequate identification of client/customers and their needs in order to provide suitable products or services',NULL),(454,29,'Suitability, disclosure and fiduciary - Inadequate disclosure of required information to clients/customers',NULL),(455,29,'Suitability, disclosure and fiduciary - Inadequate protection of client/customer/employee data, including misuse of restricted/confidential or commericially sensitive information',NULL),(456,29,'Suitability, disclosure and fiduciary - Inappropriate sales practices to maximise sales rather than in client/customers best interests',NULL),(457,29,'Suitability, disclosure and fiduciary - Inappropriate client/customer lending practices',NULL),(458,29,'Improper business or market practices - Anti competitive practices/behaviours and ir market manipulation',NULL),(459,29,'Improper business or market practices - Unethical, improper business or unconscionable trade/mrket practices',NULL),(460,29,'Improper business or market practices - Insder trading activities (on internal accounts) ',NULL),(461,29,'Improper business or market practices - Activities are undertaken outside of relevant banking or regulatory licenses',NULL),(462,29,'Improper business or market practices - Involvement in money laundering/terrorist financing activities',NULL),(463,29,'Improper business or market practices - Dealing in a manner that contravenes global economic and trade sanctions',NULL),(464,29,'Improper business or market practices - Failure to establish mandated governance and/or prudential arrangements',NULL),(465,29,'Improper business or market practices - Inadequate customer/client/member complaints management',NULL),(466,29,'Improper business or market practices - Failure to actively identify/manage a conflict of interest',NULL),(467,29,'Advisory activities - Incorrect advisory process provided to client/customer',NULL),(468,29,'Product flaws - Product defects due to inadequate product design, delivery or maintenance',NULL),(469,29,'Product flaws - Model error due to inadequate modeldesign, delivery or operation',NULL),(470,29,'Selection, sponsorship and exppsure - Exceeding customer/client exposure limits',NULL),(471,30,'Disasters and othe events - Damage to physical assets due to natural disaster or disruption event',NULL),(472,30,'Disasters and othe events - Business disruption due to natural disaster or disruption event',NULL),(473,31,'Systems - Business disruption due to hardware or software failure',NULL),(474,31,'Systems - Business disruption due to external telecommunications or utility failure',NULL),(475,32,'Transaction capture, execution and maintenance - Transaction error due to human processing error',NULL),(476,32,'Transaction capture, execution and maintenance - Transaction errors due to system development, proramming or logical error',NULL),(477,32,'Transaction capture, execution and maintenance - Inadequate maintenance of transaction and/or product reference data',NULL),(478,32,'Transaction capture, execution and maintenance - Inadequate management of collateral/ security ',NULL),(479,32,'Customer intake and documentation - Inadequate preparation, collection or maintenance of clien/customer and legal documentation',NULL),(480,32,'Customer intake and documentation - Inadequate onboarding of client/customer',NULL),(481,32,'Customer / client account management - Unauthorised access granted to client/custmer accounts',NULL),(482,32,'Customer / client account management - Inadequate maintenance of client/customer electronic records',NULL),(483,32,'Customer / client account management - Negligent loss or damage of client/custoer assets',NULL),(484,32,'Trade counterparties - Trade counterparty misperformance or disputes',NULL),(485,32,'Outsourcing & 3rd Party Failures - Vendor / supplier / outsource provider dispute',NULL),(486,32,'Outsourcing & 3rd Party Failures - Vendor / supplier / oursourced provider misperformance or permanent loss',NULL),(487,32,'Regulatory reporting failures - Failure to meet external mandatory reporting, disclosure and approval obligations',NULL);
/*!40000 ALTER TABLE `as_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_consequence`
--

DROP TABLE IF EXISTS `as_consequence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_consequence` (
  `idconsequence` int(11) NOT NULL AUTO_INCREMENT,
  `con_consequence` varchar(255) DEFAULT NULL,
  `con_value` int(11) DEFAULT NULL,
  PRIMARY KEY (`idconsequence`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_consequence`
--

LOCK TABLES `as_consequence` WRITE;
/*!40000 ALTER TABLE `as_consequence` DISABLE KEYS */;
INSERT INTO `as_consequence` VALUES (1,'Insignificant',1),(2,'Minor',2),(3,'Moderate',3),(4,'Major',4),(5,'Severe',5);
/*!40000 ALTER TABLE `as_consequence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_context`
--

DROP TABLE IF EXISTS `as_context`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_context` (
  `idcontext` int(11) NOT NULL AUTO_INCREMENT,
  `cx_user` int(11) DEFAULT NULL,
  `cx_objectives` varchar(255) DEFAULT NULL,
  `cx_processes` varchar(255) DEFAULT NULL,
  `cx_products` varchar(255) DEFAULT NULL,
  `cx_projects` varchar(255) DEFAULT NULL,
  `cx_systems` varchar(255) DEFAULT NULL,
  `cx_relation` varchar(255) DEFAULT NULL,
  `cx_internallosses` varchar(255) DEFAULT NULL,
  `cx_externallosses` varchar(255) DEFAULT NULL,
  `cx_competitors` varchar(255) DEFAULT NULL,
  `cx_environment` varchar(255) DEFAULT NULL,
  `cx_regulatory` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcontext`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_context`
--

LOCK TABLES `as_context` WRITE;
/*!40000 ALTER TABLE `as_context` DISABLE KEYS */;
INSERT INTO `as_context` VALUES (1,2,'','','','','','','','','','',''),(2,1,'objectives','processes','Products','Projects','Systrems','Relations','losses1','losses2','competitors','environment','regulatory');
/*!40000 ALTER TABLE `as_context` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_details`
--

DROP TABLE IF EXISTS `as_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_details` (
  `iddetail` int(11) NOT NULL AUTO_INCREMENT,
  `as_assessment` int(11) DEFAULT NULL,
  `as_risk` int(11) DEFAULT NULL,
  `as_hazard` int(11) DEFAULT NULL,
  `as_descript` text,
  `as_like` int(11) DEFAULT NULL,
  `as_consequence` int(11) DEFAULT NULL,
  `as_rating` int(11) DEFAULT NULL,
  `as_effect` text,
  `as_action` int(11) DEFAULT NULL,
  `as_duedate` date DEFAULT NULL,
  `as_owner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddetail`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_details`
--

LOCK TABLES `as_details` WRITE;
/*!40000 ALTER TABLE `as_details` DISABLE KEYS */;
INSERT INTO `as_details` VALUES (1,3,4,196,'ararsa',1,1,NULL,'',1,'1970-01-01','qweqweqwe'),(2,3,5,200,'qewqewqeqwe',1,1,NULL,'',1,'2015-11-26','qeqweqwe'),(3,3,2,183,'asdasdasd',1,1,NULL,'',3,'2015-11-03','adsasd'),(4,1,5,200,'Description111',5,1,NULL,'Effective11',5,'2015-11-17','Matej1'),(5,1,4,196,'sadasd',1,5,NULL,'asdasd',1,'2015-11-17','asdasd'),(6,6,3,189,'dadasdasd',3,4,3,'dasdasd',4,'2015-11-17','ddsdasd'),(7,1,5,200,'adasd',3,3,3,'adsadasd',2,'2015-11-17','adsasd'),(8,8,21,336,'adasdasdas',2,3,3,'adasda',4,'2015-11-17','adsasd'),(9,9,29,454,'sdasd',3,2,2,'asdasdasd',2,'2015-11-17','adasdasd'),(10,9,30,471,'asdasd',5,1,1,'asdasdasd',2,'2015-11-17','adsasd'),(11,9,29,462,'fdsfsfdf',2,3,3,'sdfsdf',5,'2015-11-29','sdfsdfsdf');
/*!40000 ALTER TABLE `as_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_incidents`
--

DROP TABLE IF EXISTS `as_incidents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_incidents` (
  `idincident` int(11) NOT NULL AUTO_INCREMENT,
  `in_user` int(11) DEFAULT NULL,
  `in_title` varchar(100) DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `in_reported` varchar(100) DEFAULT NULL,
  `in_team` varchar(100) DEFAULT NULL,
  `in_descript` text,
  `in_impact` varchar(255) DEFAULT NULL,
  `in_priority` int(11) DEFAULT NULL,
  `in_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idincident`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_incidents`
--

LOCK TABLES `as_incidents` WRITE;
/*!40000 ALTER TABLE `as_incidents` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_incidents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_insurance`
--

DROP TABLE IF EXISTS `as_insurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_insurance` (
  `idinsurance` int(11) NOT NULL AUTO_INCREMENT,
  `is_type` varchar(255) DEFAULT NULL,
  `is_coverage` varchar(255) DEFAULT NULL,
  `is_exclusions` varchar(255) DEFAULT NULL,
  `is_company` varchar(255) DEFAULT NULL,
  `is_date` date DEFAULT NULL,
  `is_details` varchar(255) DEFAULT NULL,
  `is_actions` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idinsurance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_insurance`
--

LOCK TABLES `as_insurance` WRITE;
/*!40000 ALTER TABLE `as_insurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_insurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_like`
--

DROP TABLE IF EXISTS `as_like`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_like` (
  `idlike` int(11) NOT NULL AUTO_INCREMENT,
  `li_like` varchar(255) DEFAULT NULL,
  `li_value` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlike`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_like`
--

LOCK TABLES `as_like` WRITE;
/*!40000 ALTER TABLE `as_like` DISABLE KEYS */;
INSERT INTO `as_like` VALUES (1,'Almost Certain',5),(2,'Likely',4),(3,'Possible',3),(4,'Unlikely',2),(5,'Rare',1);
/*!40000 ALTER TABLE `as_like` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_riskdescript`
--

DROP TABLE IF EXISTS `as_riskdescript`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_riskdescript` (
  `iddescript` int(11) NOT NULL AUTO_INCREMENT,
  `d_cat` int(11) DEFAULT NULL,
  `d_descript` text,
  PRIMARY KEY (`iddescript`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_riskdescript`
--

LOCK TABLES `as_riskdescript` WRITE;
/*!40000 ALTER TABLE `as_riskdescript` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_riskdescript` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_risks`
--

DROP TABLE IF EXISTS `as_risks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_risks` (
  `idrisk` int(11) NOT NULL AUTO_INCREMENT,
  `ri_type` int(11) DEFAULT NULL,
  `ri_name` varchar(100) DEFAULT NULL,
  `ri_descript` text,
  PRIMARY KEY (`idrisk`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_risks`
--

LOCK TABLES `as_risks` WRITE;
/*!40000 ALTER TABLE `as_risks` DISABLE KEYS */;
INSERT INTO `as_risks` VALUES (1,1,'Formation/Founding Team',NULL),(2,1,'Market',NULL),(3,1,'Legal Risks',NULL),(4,1,'Privacy and Information Risks',NULL),(5,1,'Economic',NULL),(6,1,'Strategic',NULL),(7,1,'Political',NULL),(8,1,'People',NULL),(9,1,'Process',NULL),(10,1,'Tehcnology',NULL),(11,1,'Financial',NULL),(12,1,'Health and Safety',NULL),(13,1,'Environmental',NULL),(14,1,'Reputation',NULL),(15,1,'Equipment',NULL),(16,1,'Governance & Stakeholder Management',NULL),(17,2,'Manual Handling/Ergonomics',NULL),(18,2,'Energy Systems',NULL),(19,2,'Machinery, Plant and equipment',NULL),(20,2,'Chemicals',NULL),(21,2,'Facilities/Built Environment',NULL),(22,2,'Biological',NULL),(23,2,'People hazards',NULL),(24,2,'Emergency Incidents',NULL),(25,2,'Food & Drink',NULL),(26,2,'Physical Hazard Identification',NULL),(27,3,'Internal Fraud',NULL),(28,3,'External Fraud',NULL),(29,3,'Clients, Products ad Business Practices',NULL),(30,3,'Damage to Physical Assets',NULL),(31,3,'Business Disruption',NULL),(32,3,'Execution, Delivery and Process Mangement',NULL),(33,4,'Financial',NULL),(34,4,'Physical',NULL),(35,4,'Legal Risks',NULL),(36,4,'Technology, Privacy and Information Risks',NULL),(37,4,'Volunteers & Members',NULL),(38,4,'Political',NULL),(39,4,'People',NULL),(40,4,'Process',NULL),(41,4,'Health and Safety',NULL),(42,4,'Environmental',NULL),(43,4,'External Risks',NULL),(44,4,'Governance & Stakeholder Management',NULL),(45,2,'Environment',NULL),(46,3,'Employment Practices and Workplace Safety',NULL);
/*!40000 ALTER TABLE `as_risks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_treatments`
--

DROP TABLE IF EXISTS `as_treatments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_treatments` (
  `idtreatment` int(11) NOT NULL AUTO_INCREMENT,
  `tre_user` int(11) DEFAULT NULL,
  `tre_team` varchar(255) DEFAULT NULL,
  `tre_assessor` varchar(255) DEFAULT NULL,
  `tre_treatment` varchar(255) DEFAULT NULL,
  `tre_cost_ben` varchar(255) DEFAULT NULL,
  `tre_progress` varchar(255) DEFAULT NULL,
  `tre_owner` varchar(100) DEFAULT NULL,
  `tre_start` date DEFAULT NULL,
  `tre_due` date DEFAULT NULL,
  `tre_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtreatment`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_treatments`
--

LOCK TABLES `as_treatments` WRITE;
/*!40000 ALTER TABLE `as_treatments` DISABLE KEYS */;
INSERT INTO `as_treatments` VALUES (2,1,'Business','Matej Drabik','Treatment 2','Something','No update','Matej','2015-11-29','2015-12-23',1);
/*!40000 ALTER TABLE `as_treatments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_types`
--

DROP TABLE IF EXISTS `as_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_types` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `ty_name` varchar(100) DEFAULT NULL,
  `ty_descript` text,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_types`
--

LOCK TABLES `as_types` WRITE;
/*!40000 ALTER TABLE `as_types` DISABLE KEYS */;
INSERT INTO `as_types` VALUES (1,'Startups & Small Business',NULL),(2,'Health & Safety',NULL),(3,'Financial Services',NULL),(4,'Community Groups',NULL);
/*!40000 ALTER TABLE `as_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `u_mail` varchar(100) DEFAULT NULL,
  `u_password` varchar(100) DEFAULT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `u_phone` varchar(50) DEFAULT NULL,
  `u_location` varchar(50) DEFAULT NULL,
  `c_company` varchar(50) DEFAULT NULL,
  `c_address` varchar(100) DEFAULT NULL,
  `c_city` varchar(50) DEFAULT NULL,
  `c_state` varchar(30) DEFAULT NULL,
  `c_postcode` varchar(20) DEFAULT NULL,
  `c_country` varchar(25) DEFAULT NULL,
  `u_complete` tinyint(4) DEFAULT NULL,
  `u_datetime` datetime DEFAULT NULL,
  `u_expire` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-04 10:27:30
