CREATE DATABASE  IF NOT EXISTS `id536643_virturama_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `id536643_virturama_db`;

DROP TABLE IF EXISTS `tb_statusAparelho`;

CREATE TABLE `tb_statusAparelho` (
  `id_aparelho` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(1) DEFAULT 0,  
  PRIMARY KEY (`id_aparelho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_statusAparelho` WRITE;

UNLOCK TABLES;
