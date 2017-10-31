# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Värd: 127.0.0.1 (MySQL 5.5.42)
# Databas: vardskapet
# Genereringstid: 2017-10-30 13:40:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Tabelldump signups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `signups`;

CREATE TABLE `signups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` tinytext,
  `signupdate` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `signups` WRITE;
/*!40000 ALTER TABLE `signups` DISABLE KEYS */;

INSERT INTO `signups` (`id`, `email`, `signupdate`)
VALUES
	(1,NULL,'2017-10-30 13:26:32'),
	(2,NULL,'2017-10-30 13:27:03'),
	(3,NULL,'2017-10-30 13:27:05'),
	(4,'asdasd@asdasd.com','2017-10-30 13:27:18'),
	(5,NULL,'2017-10-30 13:27:37'),
	(6,'asdas@asdasd.com','2017-10-30 13:27:54'),
	(7,'asdas@asda2sd.com','2017-10-30 13:28:42'),
	(8,'asdasda@asdas222d.com','2017-10-30 13:29:20');

/*!40000 ALTER TABLE `signups` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
