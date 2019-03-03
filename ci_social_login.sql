-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5456
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ci_social_login.auth
DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_and_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_social_login.auth: ~0 rows (approximately)
DELETE FROM `auth`;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` (`id`, `name`, `email_id`, `username`, `password`, `role`, `status`, `date_and_time`) VALUES
	(1, 'Ganesh', 'ganesh@gmail.com', 'admin', 'admin', 'admin', 1, '2018-08-15 08:17:12');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;

-- Dumping structure for table ci_social_login.ci_user_register
DROP TABLE IF EXISTS `ci_user_register`;
CREATE TABLE IF NOT EXISTS `ci_user_register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_login` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COMMENT='Copy data from previous database, if restoring on other database than ''production';

-- Dumping data for table ci_social_login.ci_user_register: 5 rows
DELETE FROM `ci_user_register`;
/*!40000 ALTER TABLE `ci_user_register` DISABLE KEYS */;
INSERT INTO `ci_user_register` (`user_id`, `username`, `password`, `code`, `ip`, `status`, `date_added`, `date_login`) VALUES
	(95, 'webmaster@gmail.com', 'ganesh', '', '::1', 1, '0000-00-00 00:00:00', NULL),
	(96, 'webmaster@dfdsf.asdf', 'ganesh', '', '::1', 1, '2019-03-02 00:03:41', NULL),
	(97, 'ganeshnadar17@gmail.', '123456', '', '::1', 1, '2019-03-02 12:23:38', NULL),
	(98, 'ganesh@gmail.com', '123456', '', '::1', 1, '2019-03-02 12:55:37', NULL),
	(99, 'ganesh1@gmail.com', '123456', '', '::1', 1, '2019-03-02 13:02:12', NULL);
/*!40000 ALTER TABLE `ci_user_register` ENABLE KEYS */;

-- Dumping structure for table ci_social_login.member_list
DROP TABLE IF EXISTS `member_list`;
CREATE TABLE IF NOT EXISTS `member_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `member_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `updated_time` datetime(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_social_login.member_list: ~6 rows (approximately)
DELETE FROM `member_list`;
/*!40000 ALTER TABLE `member_list` DISABLE KEYS */;
INSERT INTO `member_list` (`id`, `user_id`, `member_id`, `password`, `role`, `name`, `email_id`, `number`, `address`, `gender`, `status`, `updated_time`) VALUES
	(1, 1, 'ganesh_nadar', '123456', '', 'Ganesh Muthu Raj Nadar', 'ganeshnadar17@gmail.com', 8828616076, 'A/16 Murgan Chawl Near Tamil School Jari Mari Kurla (W)', 'male', 1, '0000-00-00 00:00:00.0000'),
	(2, 1, 'nadar_17', '', '', 'nadar gopal', 'nadar@gmail.com', 8828616076, 'Mira Road', 'male', 1, '0000-00-00 00:00:00.0000'),
	(4, 1, 'ishu', '123123123', 'level_1', 'Ishu', 'ishu@gmail.com', 9167181902, ' Mira road', 'female', 1, '0000-00-00 00:00:00.0000'),
	(8, 1, 'sona_17', '123456', 'level_1', 'Sona', 'sona@gmail.com', 123456789, ' Mira Road ', 'male', 1, '0000-00-00 00:00:00.0000'),
	(9, 1, 'ishu', '123456', 'level_1', 'Ishu', 'ishu@gmail.com', 9167181902, ' Mira road', 'female', 1, '0000-00-00 00:00:00.0000'),
	(10, 1, 'ishu', '123456', 'level_1', 'Ishu', 'ishu@gmail.com', 9167181902, ' Mira road', 'female', 1, '0000-00-00 00:00:00.0000');
/*!40000 ALTER TABLE `member_list` ENABLE KEYS */;

-- Dumping structure for table ci_social_login.plan
DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_social_login.plan: ~7 rows (approximately)
DELETE FROM `plan`;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
INSERT INTO `plan` (`id`, `user_id`, `plan_name`, `plan_code`) VALUES
	(1, 1, 'plan123', 'p2'),
	(2, 1, 'Cardio Training', 'CT'),
	(3, 1, 'Weight Training plus Cardio Training', 'WCT'),
	(6, 1, 'Cardio Training', 'CT'),
	(7, 1, 'Weight Training	', 'WT'),
	(8, 1, 'Weight Training	', 'WT'),
	(9, 1, 'abcd', 'AB');
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;

-- Dumping structure for table ci_social_login.teriff
DROP TABLE IF EXISTS `teriff`;
CREATE TABLE IF NOT EXISTS `teriff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `time_and_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_social_login.teriff: ~2 rows (approximately)
DELETE FROM `teriff`;
/*!40000 ALTER TABLE `teriff` DISABLE KEYS */;
INSERT INTO `teriff` (`id`, `user_id`, `plan_id`, `duration`, `price`, `offer`, `notes`, `time_and_date`) VALUES
	(1, 1, 8, 3, 5000, 'none', 'no offer available.', '0000-00-00 00:00:00'),
	(2, 1, 3, 3, 7000, 'extra 1 Month', 'total 4 Month.', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `teriff` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
