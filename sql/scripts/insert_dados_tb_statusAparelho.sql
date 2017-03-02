LOCK TABLES `tb_statusaparelho` WRITE;
INSERT INTO `tb_statusaparelho` VALUES (1,0);
UNLOCK TABLES;

LOCK TABLES `tb_horarios` WRITE;
INSERT INTO `tb_horarios` VALUES (1,'08:00');
UNLOCK TABLES;
