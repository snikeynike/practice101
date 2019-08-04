-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.90-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema fishbook
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ fishbook;
USE fishbook;

--
-- Table structure for table `fishbook`.`tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `idtbl_user` int(10) unsigned NOT NULL auto_increment,
  `fname` varchar(45) NOT NULL default '',
  `lname` varchar(45) NOT NULL default '',
  `mnumber` varchar(20) NOT NULL default '',
  `password` varchar(45) NOT NULL default '',
  `bday` varchar(20) NOT NULL default '0000-00-00',
  `sex` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`idtbl_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fishbook`.`tbl_user`
--

/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`idtbl_user`,`fname`,`lname`,`mnumber`,`password`,`bday`,`sex`) VALUES 
 (1,'hannah','cortez','777','padfj','february 01,1995','Female'),
 (2,'nike','nicor','09747477','strongpass123','january 02,1994','Male'),
 (8,'leomord','cruz','098766','pass','january 02,1995','Male'),
 (9,'Lapu','cruz','098766','pass','february 02,1995','Male'),
 (11,'Mia','cruz','098766','pass','january 02,1995','Female'),
 (12,'layla','cruz','09788','pass','february 03,1996','Female'),
 (13,'zilong','cruz','09788','pass','january 03,1996','Male'),
 (14,'Odette','cruz','0987655','pass','february 01,1994','Female');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
