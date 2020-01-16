# Host: localhost  (Version 5.5.5-10.4.10-MariaDB)
# Date: 2020-01-16 13:07:17
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (7,'Gustavo Silva','gustaff@gmail.com',1),(8,'Teste Silva','test@test.com',1),(9,'Gustavo da Silva','gustavo@email.com',1),(14,'Iphone','iphone@iphone',1);
