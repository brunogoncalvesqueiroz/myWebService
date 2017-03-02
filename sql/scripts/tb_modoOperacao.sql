CREATE DATABASE  IF NOT EXISTS `id536643_virturama_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `id536643_virturama_db`;

DROP TABLE IF EXISTS `tb_modoOperacao`;

CREATE TABLE `tb_modoOperacao` (  
  `tipoOperacao` int(1) DEFAULT NULL,  
  PRIMARY KEY (`tipoOperacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_modoOperacao` WRITE;

UNLOCK TABLES;
