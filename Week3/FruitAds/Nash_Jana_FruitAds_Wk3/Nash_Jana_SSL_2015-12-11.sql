# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: SSL
# Generation Time: 2015-12-11 16:37:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fruits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fruits`;

CREATE TABLE `fruits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fruitName` varchar(50) DEFAULT '',
  `fruitColor` varchar(50) DEFAULT '',
  `fruitImage` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;

INSERT INTO `fruits` (`id`, `fruitName`, `fruitColor`, `fruitImage`)
VALUES
	(6,'apple','red','http://www.kimmelorchard.org/img/icon_apple_red_delicious.png'),
	(7,'lemon','yellow','https://rs706.pbsrc.com/albums/ww61/lemon56/lemon.jpg~c200'),
	(15,'watermelon','yellow-green','http://www.pvfarms.com/images/ourproduce_watermelon.png'),
	(16,'apple','green','http://www.lanierupshaw.com/wp-content/uploads/2014/10/green-apple-fruit-hd-wallpaper.jpg'),
	(18,'cranberry','red','http://www.anaturaldifference.com/wp-content/uploads/2014/01/shutterstock_107675522.jpg'),
	(21,'orange','orange','http://weknowyourdreams.com/images/orange/orange-04.jpg'),
	(23,'lime','green','http://researcher.watson.ibm.com/researcher/files/us-rabbah/lime.gif'),
	(24,'jabuticaba','purple','http://media.mnn.com/assets/images/2010/08/jabuticaba.jpg.638x0_q80_crop-smart.jpg');

/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
