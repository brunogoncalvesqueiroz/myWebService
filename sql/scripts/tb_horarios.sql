CREATE DATABASE  IF NOT EXISTS `id536643_virturama_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `id536643_virturama_db`;

DROP TABLE IF EXISTS `tb_horarios`;

CREATE TABLE `tb_horarios` (
  `id_horario` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(10) DEFAULT NULL,  
  PRIMARY KEY (`id_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_horarios` WRITE;

UNLOCK TABLES;
