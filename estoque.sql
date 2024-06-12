-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para easystock
CREATE DATABASE IF NOT EXISTS `easystock` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `easystock`;

-- Copiando estrutura para tabela easystock.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `est_id` int NOT NULL AUTO_INCREMENT,
  `est_desc` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `est_titular` int NOT NULL,
  PRIMARY KEY (`est_id`),
  KEY `est_titular` (`est_titular`),
  CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`est_titular`) REFERENCES `usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.estoque: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela easystock.filiado
CREATE TABLE IF NOT EXISTS `filiado` (
  `fil_id` int NOT NULL AUTO_INCREMENT,
  `fil_master` int NOT NULL,
  `fil_id_usuario` int NOT NULL,
  `fil_estoq` int NOT NULL,
  `fil_inserted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`fil_id`),
  KEY `fil_master` (`fil_master`),
  KEY `fil_id_usuario` (`fil_id_usuario`),
  KEY `fil_estoq` (`fil_estoq`),
  CONSTRAINT `filiado_ibfk_1` FOREIGN KEY (`fil_master`) REFERENCES `usuario` (`usu_id`),
  CONSTRAINT `filiado_ibfk_2` FOREIGN KEY (`fil_id_usuario`) REFERENCES `usuario` (`usu_id`),
  CONSTRAINT `filiado_ibfk_3` FOREIGN KEY (`fil_estoq`) REFERENCES `estoque` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.filiado: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela easystock.movimentacao
CREATE TABLE IF NOT EXISTS `movimentacao` (
  `mov_id` int NOT NULL AUTO_INCREMENT,
  `mov_data` date NOT NULL,
  `mov_hora` time NOT NULL,
  `mov_tipo` tinyint(1) DEFAULT NULL,
  `mov_qtd` int NOT NULL,
  `mov_est` int NOT NULL,
  `mov_prod` int NOT NULL,
  PRIMARY KEY (`mov_id`),
  KEY `mov_est` (`mov_est`),
  KEY `mov_prod` (`mov_prod`),
  CONSTRAINT `movimentacao_ibfk_1` FOREIGN KEY (`mov_est`) REFERENCES `estoque` (`est_id`),
  CONSTRAINT `movimentacao_ibfk_2` FOREIGN KEY (`mov_prod`) REFERENCES `produto` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.movimentacao: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela easystock.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `prod_id` int NOT NULL AUTO_INCREMENT,
  `prod_nome` varchar(30) NOT NULL,
  `prod_qtd` int NOT NULL,
  `prod_estoque` int NOT NULL,
  `prod_inserted_at` datetime NOT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `prod_estoque` (`prod_estoque`),
  CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`prod_estoque`) REFERENCES `estoque` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.produto: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela easystock.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `usu_login` varchar(15) NOT NULL,
  `usu_senha` varchar(15) NOT NULL,
  `usu_nome` varchar(30) NOT NULL,
  `usu_data_criado` datetime DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`usu_id`, `usu_login`, `usu_senha`, `usu_nome`, `usu_data_criado`) VALUES
	(1, 'thiago', '12345', 'THIAGO', '2024-05-23 21:55:11');




DELIMITER //
CREATE PROCEDURE InsereUsuario (	IN login VARCHAR(50), IN senha VARCHAR(50), IN nome VARCHAR(50))
BEGIN
	INSERT INTO usuario (usu_login,usu_senha,usu_nome,usu_data_criado) VALUES (login,senha,nome,CURRENT_TIMESTAMP());
END;
// DELIMITER


DELIMITER //
CREATE FUNCTION ValidaUsuario (usuario VARCHAR(50), senha VARCHAR(50)) 
RETURNS BOOLEAN deterministic
BEGIN
	DECLARE usuarioExiste BOOLEAN;
	SELECT EXISTS(SELECT 1 FROM usuario WHERE usu_login = usuario AND usu_senha = senha) INTO usuarioExiste; 
	RETURN usuarioExiste;
END;
// DELIMITER






