-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.9-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for pms
CREATE DATABASE IF NOT EXISTS `pms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pms`;


-- Dumping structure for table pms.type_off_accounts
CREATE TABLE IF NOT EXISTS `type_off_accounts` (
  `typeoffAcc_id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`typeoffAcc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pms.type_off_accounts: ~1 rows (approximately)
/*!40000 ALTER TABLE `type_off_accounts` DISABLE KEYS */;
INSERT INTO `type_off_accounts` (`typeoffAcc_id`, `nome`) VALUES
	(0, 'Admin');
/*!40000 ALTER TABLE `type_off_accounts` ENABLE KEYS */;


-- Dumping structure for table pms.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account` int(11) NOT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  KEY `type_off_accout` (`account`),
  CONSTRAINT `type_off_accout` FOREIGN KEY (`account`) REFERENCES `type_off_accounts` (`typeoffAcc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pms.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_ID`, `email`, `username`, `password`, `account`) VALUES
	(4, 'filipe095@live.com.pt', 'filipe', 'fililipe', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
