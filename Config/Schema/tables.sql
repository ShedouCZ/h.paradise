-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `e-mail` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `kids` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_type_id` (`room_type_id`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `room_types`;
CREATE TABLE `room_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `price_night` int(11) NOT NULL,
  `price_person` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `created`, `modified`) VALUES
(1,	'admin',	'$2a$10$oTInOZNrfJqOdFEjVAb00ugqLRwquceqkt39aam1pY/4m1/py4.nq',	NULL,	'2015-06-24 10:37:25',	'2015-06-24 10:37:25');

-- 2015-09-29 18:12:55
