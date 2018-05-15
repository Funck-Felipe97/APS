CREATE DATABASE aps_db;
USE aps_db;

#CRIANDO UM NOVO USUARIO NO BANCO
CREATE USER 'felipe'@'localhost' IDENTIFIED BY '1234567';
GRANT ALL PRIVILEGES ON aps_db . * TO 'felipe'@'localhost';

-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: aps_db
-- ------------------------------------------------------
-- Server version	5.5.56

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_agenda`
--

DROP TABLE IF EXISTS `tb_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_agenda` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_ser_id` int(11) NOT NULL,
  `age_hor_id` int(11) NOT NULL,
  `age_fun_id` int(11) NOT NULL,
  `age_data` date NOT NULL,
  `age_cli_id` int(11) NOT NULL,
  PRIMARY KEY (`age_id`) USING BTREE,
  KEY `age_cli_id` (`age_cli_id`),
  CONSTRAINT `age_cli_id` FOREIGN KEY (`age_cli_id`) REFERENCES `tb_cliente` (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_agenda`
--

LOCK TABLES `tb_agenda` WRITE;
/*!40000 ALTER TABLE `tb_agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cargo`
--

DROP TABLE IF EXISTS `tb_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cargo` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_descricao` varchar(20) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cargo`
--

LOCK TABLES `tb_cargo` WRITE;
/*!40000 ALTER TABLE `tb_cargo` DISABLE KEYS */;
INSERT INTO `tb_cargo` VALUES (1,'cabeleireiro');
/*!40000 ALTER TABLE `tb_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(50) NOT NULL,
  `cli_cpf` varchar(30) DEFAULT NULL,
  `cli_senha` int(11) NOT NULL,
  `cli_user_name` varchar(20) NOT NULL,
  `cli_data_nasc` date NOT NULL,
  `cli_end_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cli_id`) USING BTREE,
  KEY `cli_end_id` (`cli_end_id`),
  CONSTRAINT `cli_end_id` FOREIGN KEY (`cli_end_id`) REFERENCES `tb_endereco` (`end_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'felipe','12132',213,'dsada','1997-10-10',NULL),(2,'Felipe','112',1234,'funck','1997-11-30',3),(3,'Felipe','111',1234,'funck','1997-11-30',7),(4,'Juca','445',0,'jjuu','5000-11-22',10),(5,'Felipe','2312',1234,'dfd','3000-10-12',11),(6,'felipe','12321',1243,'funck','2012-05-18',12),(7,'felipe','12321',1243,'funck','2012-05-18',13),(8,'felipe','12321',1243,'funck','2012-05-18',14);
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_endereco` (
  `end_id` int(11) NOT NULL AUTO_INCREMENT,
  `end_rua` varchar(40) DEFAULT NULL,
  `end_bairro` varchar(40) DEFAULT NULL,
  `end_cidade` varchar(40) DEFAULT NULL,
  `end_numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`end_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_endereco`
--

LOCK TABLES `tb_endereco` WRITE;
/*!40000 ALTER TABLE `tb_endereco` DISABLE KEYS */;
INSERT INTO `tb_endereco` VALUES (1,'Pará','São Luiz','Santa Helena',NULL),(2,'Pará','São Luiz','Santa Helena',NULL),(3,'Pará','São Luiz','Santa Helena',NULL),(4,'Pará','São Luiz','Santa Helena',NULL),(5,'Pará','São Luiz','Santa Helena',NULL),(6,'Pará','São Luiz','Santa Helena',NULL),(7,'Pará','São Luiz','Santa Helena',NULL),(8,'Pará','São Luiz','Santa Helena',NULL),(9,'Pará','São Luiz','Santa Helena',NULL),(10,'Pará','São Luiz','Santa Helena',NULL),(11,'sa','das','sa',21),(12,'ParÃ¡','SÃ£o Luiz','Santa Helena',602),(13,'ParÃ¡','SÃ£o Luiz','Santa Helena',602),(14,'ParÃ¡','SÃ£o Luiz','Santa Helena',602),(15,'Paraguai','Baixada','Santa Helena',3),(16,'Paraguai','Baixada','Santa Helena',3),(17,'Paraguai','Baixada','Santa Helena',3),(18,'Paraguai','Baixada','Santa Helena',3),(19,'Paraguai','Baixada','Santa Helena',3),(20,'sa','das','sa',21),(21,'Paraguai','Baixada','Santa Helena',3),(22,'Paraguai','Baixada','Santa Helena',3),(23,'23234','231231','23423423',2),(24,'Paraguai','Baixada','Santa Helena',3),(25,'Paraguai','Baixada','Santa Helena',3),(26,'Paraguai','Baixada','Santa Helena',3),(27,'Paraguai','Baixada','Santa Helena',3);
/*!40000 ALTER TABLE `tb_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_fun_hor`
--

DROP TABLE IF EXISTS `tb_fun_hor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_fun_hor` (
  `fun_id` int(11) DEFAULT NULL,
  `hor_id` int(11) DEFAULT NULL,
  `fun_hor_reservado` tinyint(1) NOT NULL,
  KEY `fun_id` (`fun_id`) USING BTREE,
  KEY `hor_id` (`hor_id`) USING BTREE,
  CONSTRAINT `tb_fun_hor_fk1` FOREIGN KEY (`fun_id`) REFERENCES `tb_funcionario` (`fun_id`),
  CONSTRAINT `tb_fun_hor_fk2` FOREIGN KEY (`hor_id`) REFERENCES `tb_horarios` (`hor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_fun_hor`
--

LOCK TABLES `tb_fun_hor` WRITE;
/*!40000 ALTER TABLE `tb_fun_hor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_fun_hor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_funcionario`
--

DROP TABLE IF EXISTS `tb_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_funcionario` (
  `fun_id` int(11) NOT NULL AUTO_INCREMENT,
  `fun_nome` varchar(50) NOT NULL,
  `fun_cpf` varchar(30) DEFAULT NULL,
  `fun_user_name` varchar(20) NOT NULL,
  `fun_senha` int(11) NOT NULL,
  `fun_data_nasc` date NOT NULL,
  `fun_end_id` int(11) DEFAULT NULL,
  `fun_car_id` int(11) NOT NULL,
  PRIMARY KEY (`fun_id`) USING BTREE,
  KEY `fun_end_id` (`fun_end_id`),
  KEY `fun_car_id` (`fun_car_id`),
  CONSTRAINT `fun_car_id` FOREIGN KEY (`fun_car_id`) REFERENCES `tb_cargo` (`car_id`),
  CONSTRAINT `fun_end_id` FOREIGN KEY (`fun_end_id`) REFERENCES `tb_endereco` (`end_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_funcionario`
--

LOCK TABLES `tb_funcionario` WRITE;
/*!40000 ALTER TABLE `tb_funcionario` DISABLE KEYS */;
INSERT INTO `tb_funcionario` VALUES (1,'caju','123','func',12345,'1997-11-30',12,1),(2,'juca','1234','fun',123,'1232-10-10',12,1),(3,'Felipe','2312','dfd',1234,'3000-10-12',20,1),(4,'juca','1231','ju',123,'1230-12-12',23,1),(5,'juca','123','ju',123,'1292-12-12',27,1);
/*!40000 ALTER TABLE `tb_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_horarios`
--

DROP TABLE IF EXISTS `tb_horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_horarios` (
  `hor_id` int(11) NOT NULL AUTO_INCREMENT,
  `hor_data` date NOT NULL,
  `hor_inicio` datetime NOT NULL,
  `hor_fim` datetime NOT NULL,
  PRIMARY KEY (`hor_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_horarios`
--

LOCK TABLES `tb_horarios` WRITE;
/*!40000 ALTER TABLE `tb_horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_servicos`
--

DROP TABLE IF EXISTS `tb_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_servicos` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_descricao` varchar(50) NOT NULL,
  `ser_preco` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ser_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_servicos`
--

LOCK TABLES `tb_servicos` WRITE;
/*!40000 ALTER TABLE `tb_servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'aps_db'
--

--
-- Dumping routines for database 'aps_db'
--
/*!50003 DROP PROCEDURE IF EXISTS `atualizar_cliente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `atualizar_cliente`(IN id INT , IN nome VARCHAR(40)  , IN cpf VARCHAR(40) ,
IN senha INT , IN user VARCHAR(40) , IN data_nasc VARCHAR(40))
BEGIN

	UPDATE tb_cliente SET cli_nome = nome , cli_cpf = cpf , cli_senha = senha,
						  cli_user_name = user, cli_data_nasc = data_nasc
						  WHERE cli_id = id;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `atualizar_funcionario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `atualizar_funcionario`(IN id INT , IN nome VARCHAR(40)  , IN cpf VARCHAR(40) ,
IN senha INT , IN user VARCHAR(40) , IN data_nasc VARCHAR(40) , IN cargo INT)
BEGIN

	UPDATE tb_funcionario SET fun_nome = nome , fun_cpf = cpf , fun_senha = senha,
						  fun_user_name = user, fun_data_nasc = data_nasc , fun_car_id = cargo
						  WHERE fun_id = id;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_cliente_cpf` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_cliente_cpf`(IN cpf VARCHAR(40))
BEGIN

	select *
		from tb_cliente
        join tb_endereco on cli_end_id = end_id
        WHERE cli_cpf = cpf;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_cliente_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_cliente_id`(IN id INT)
BEGIN

	select *
		from tb_cliente
        join tb_endereco on cli_end_id = end_id
        WHERE cli_id = id;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_cliente_user` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_cliente_user`(IN user VARCHAR(40))
BEGIN

	select *
		from tb_cliente
        join tb_endereco on cli_end_id = end_id
        WHERE cli_user_name = user;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_funcionario_cpf` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_funcionario_cpf`(IN cpf VARCHAR(40))
BEGIN

	select *
		from tb_funcionario
        join tb_endereco on fun_end_id = end_id
        join tb_cargo on fun_car_id = car_id
        WHERE fun_cpf = cpf;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_funcionario_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_funcionario_id`(IN id INT)
BEGIN

	select *
		from tb_funcionario
        join tb_endereco on fun_end_id = end_id
        join tb_cargo on fun_car_id = car_id
        WHERE fun_id = id;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_funcionario_user` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_funcionario_user`(IN user VARCHAR(40))
BEGIN

	select *
		from tb_funcionario
        join tb_endereco on fun_end_id = end_id
        join tb_cargo on fun_car_id = car_id
        WHERE fun_user_name = user;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insere_cliente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insere_cliente`(IN nome VARCHAR(40)  , IN cpf VARCHAR(40) ,
IN senha INT , IN user VARCHAR(40) , IN data_nasc VARCHAR(40) ,
IN rua VARCHAR(40),IN bairro VARCHAR(40),IN cidade VARCHAR(40) , IN numero INT)
BEGIN

	#INSERT EM TB_ENDERECO
	INSERT INTO tb_endereco(end_rua , end_bairro , end_cidade , end_numero)
		VALUES(rua , bairro , cidade , numero);
        
	#RETORNANDO O ID DO ULTIMO REGISTRO DE TB_ENDERECO
	set @id_end = (SELECT MAX(end_id) FROM tb_endereco); 
    
    #INSERT EM TB_CLIENTE
	INSERT INTO tb_cliente(cli_nome,cli_cpf,cli_senha,cli_user_name,cli_data_nasc , cli_end_id)
    VALUES(nome , cpf , senha , user, data_nasc , @id_end);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insere_funcionario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insere_funcionario`(IN nome VARCHAR(40)  , IN cpf VARCHAR(40) ,
IN senha INT , IN user VARCHAR(40) , IN data_nasc VARCHAR(40) , IN cargo INT ,
IN rua VARCHAR(40),IN bairro VARCHAR(40),IN cidade VARCHAR(40) , IN numero INT)
BEGIN

	#INSERT EM TB_ENDERECO
	INSERT INTO tb_endereco(end_rua , end_bairro , end_cidade , end_numero)
		VALUES(rua , bairro , cidade , numero);
        
	#RETORNANDO O ID DO ULTIMO REGISTRO DE TB_ENDERECO
	set @id_end = (SELECT MAX(end_id) FROM tb_endereco); 
    
    #INSERT EM TB_FUNCIONARIO
	INSERT INTO tb_funcionario(fun_nome,fun_cpf,fun_senha,fun_user_name,fun_data_nasc , fun_car_id ,fun_end_id)
    VALUES(nome , cpf , senha , user, data_nasc , cargo ,@id_end);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `listar_clientes_todos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_clientes_todos`()
BEGIN

	select *
		from tb_cliente
        join tb_endereco on cli_end_id = end_id;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `listar_funcionarios_todos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_funcionarios_todos`()
BEGIN

	select *
		from tb_funcionario
        join tb_endereco on fun_end_id = end_id
        join tb_cargo on fun_car_id = car_id;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-15 11:07:40
