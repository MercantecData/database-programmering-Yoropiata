-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kristian_login
CREATE DATABASE IF NOT EXISTS `kristian_login` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_danish_ci */;
USE `kristian_login`;

-- Dumping structure for table kristian_login.friends
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `friend` (`friend_id`),
  KEY `user` (`user_id`),
  CONSTRAINT `friend` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

-- Dumping data for table kristian_login.friends: ~0 rows (approximately)
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;

-- Dumping structure for table kristian_login.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE latin1_danish_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user status update` (`user_id`),
  CONSTRAINT `user status update` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

-- Dumping data for table kristian_login.status: ~0 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`id`, `text`, `user_id`, `created`, `modified`) VALUES
	(1, 'fisk', 16, '2017-12-06 14:09:50', '2017-12-06 14:16:57');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Dumping structure for table kristian_login.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `salt` text NOT NULL,
  `hash` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table kristian_login.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `salt`, `hash`, `created`, `modified`) VALUES
	(16, 'aliasrrr', '	xk·‚‚C­•', '}Ç†o(ãømëN~£}[£4xÑ<=”X½Îÿ|öŸœJSŸ‡w=', '2017-12-06 13:41:13', '2017-12-06 13:41:13'),
	(17, 'aliasrrrrrrr', 'gºY6?Õo*pÙA>', '›·Ïþ1¤°“e\'4}œ&no	Ü£¶ñBµÂ`8Ì6y”?ˆ@BiHH', '2017-12-06 13:41:21', '2017-12-06 13:41:21'),
	(18, 'test1', '\0ÝLn96ÿÏzóÁ\\ÍD¸›õø¶Ø‘Wˆê§€4[g½õ?ºmCs:!y*°BæŒ¯Õßi%>l•(Ã÷Ã', 'gKdMhgzvOs1ZFnE5w6jwOQ+W8tLqGAtvOvS/MqTK7s9vIjLVABXQQOMQBS2ROCWbcHTujWuu6nq9/Ovm5Xw6rw==', '2017-12-06 13:49:52', '2017-12-06 13:49:52'),
	(19, 'Test', 'tkW+3tZWSfYlucndpvBVxoWpkC8ShB9K1Eb/6cGdhHG9xmOH9tHefjKZ55tQFJxBP1kDxPc/7BJGXVTLiHQoSQ==', '7pecN5EL039i5OhH4g4NJciePwqb4S9RLcMa18N1SkmC4CDThJk2dzVmDhWllKWGgKQtdQgjQyXkQc2IUTWMlg==', '2017-12-07 08:29:37', '2017-12-07 08:29:37'),
	(20, 'FishyFish', '8U2VFFPZYJg36f4+cDP6DrBZ+s4Pon4H1ynq/hu+zXvpGdQ6rlRjKP2kbyieB2CYJTfo8eCuORfuUciEFNKuGQ==', 'ggQ2jd0Jg1CTj+KLwgSkUjZWR32jcxM+sM2chVaP/AYT/vJCxYeV8a8ALnCOAZsbFtYsJ7V0nsJExSVI/9VaIA==', '2017-12-07 08:30:10', '2017-12-07 08:30:10'),
	(21, 'Testerino', '9a6S3XGBVxXZu1jOBMhfUWmxe1K9Sr4E1RhxQG2dPGYJrqM3tDiDuezyBPwB4Q2s+fbts9ty9VmyVsrKG2S/nw==', '341gG6kzzZzegpB0ZpgU0bWzpUmwdSD50/75FymhgWtkeHDDLICAtn1RwVXiENuU0qzCY/hcp13SaWnhbpdHGQ==', '2017-12-07 08:38:21', '2017-12-07 08:38:21'),
	(22, 'TheDonald', 'lEwX6mvewU/9iFeRjAmH0p3fifwVYgtj7v2J8eqpUcAlmHyAzu4wUJNYwMv4HIYbdRajd1Xa6foQ1JZhUhrcoQ==', 'jftbtN89swHyZrC0mbfJZ/dnehXDubalwO0puEpsfk1dlp2RujlT04GNFbp7MJ8gdEjFadQrZGNBt98wa6gkig==', '2017-12-07 08:47:21', '2017-12-07 08:47:21'),
	(24, 'cof', 'p4ZqJbtXvVBqUryVTScNErOuz3M+FfLwNh2yoPQc3l1N3eJ9uUjSBi7xoCxs39JxBT/o1SLc53Qr5FM7Md/ofQ==', 'oSzw8Pvpvq2VimibmkIHSh2Ck677CMXbFcWaA6GyH4gEi6jZHB+Qni/cS0DMiEwEs1EWOi8EU498nGvnxSjpzg==', '2017-12-07 09:13:20', '2017-12-07 09:13:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
