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
  `est_criado_em` datetime DEFAULT NULL,
  `est_titular` int NOT NULL,
  PRIMARY KEY (`est_id`),
  KEY `est_titular` (`est_titular`),
  CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`est_titular`) REFERENCES `usuario` (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.estoque: ~0 rows (aproximadamente)
INSERT INTO `estoque` (`est_id`, `est_desc`, `est_criado_em`, `est_titular`) VALUES
	(1, 'Thiago', '2024-06-16 15:10:42', 1),
	(3, 'Pirulito Kids', '2024-06-16 15:52:30', 2),
	(8, 'TESTE', '2024-06-16 17:52:57', 1),
	(11, 'tRABALHO', '2024-06-16 17:54:07', 1),
	(13, 'TESTE', '2024-06-16 23:23:03', 1),
	(14, 'teste2', '2024-06-16 23:27:30', 1),
	(15, 'test3', '2024-06-16 23:28:07', 1),
	(16, 'test4', '2024-06-16 23:28:15', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.filiado: ~0 rows (aproximadamente)
INSERT INTO `filiado` (`fil_id`, `fil_master`, `fil_id_usuario`, `fil_estoq`, `fil_inserted_at`) VALUES
	(1, 1, 2, 1, '2024-06-16 15:35:36'),
	(3, 2, 4, 3, '2024-06-16 20:04:57'),
	(9, 1, 1, 3, '2024-06-16 17:54:07'),
	(11, 2, 2, 3, '2024-06-16 19:39:48'),
	(12, 1, 1, 13, '2024-06-16 23:23:03'),
	(13, 1, 1, 14, '2024-06-16 23:27:30'),
	(14, 1, 1, 15, '2024-06-16 23:28:07'),
	(15, 1, 1, 16, '2024-06-16 23:28:15');

-- Copiando estrutura para procedure easystock.InsereUsuario
DELIMITER //
CREATE PROCEDURE `InsereUsuario`(
	IN `login` VARCHAR(50),
	IN `senha` VARCHAR(50),
	IN `nome` VARCHAR(50),
	IN `email` VARCHAR(50)
)
BEGIN
	INSERT INTO usuario (usu_login,usu_senha,usu_nome,usu_email,usu_data_criado) VALUES (login,senha,nome,email,CURRENT_TIMESTAMP());
END//
DELIMITER ;

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
  `prod_min` int DEFAULT NULL,
  `prod_max` int DEFAULT NULL,
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
  `usu_email` varchar(50) DEFAULT NULL,
  `usu_data_criado` datetime DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela easystock.usuario: ~3 rows (aproximadamente)
INSERT INTO `usuario` (`usu_id`, `usu_login`, `usu_senha`, `usu_nome`, `usu_email`, `usu_data_criado`) VALUES
	(1, 'thiago', '12345', 'THIAGO', NULL, '2024-05-23 21:55:11'),
	(2, 'Maria', 'maria', 'Maria', 'marial@slaoq.com.,br', '2024-06-11 19:53:49'),
	(4, 'Sabrina', 'sabrina', 'Sabrina', 'sabrina.coelho@gmail.com', '2024-06-16 15:52:01');

-- Copiando estrutura para função easystock.ValidaUsuario
DELIMITER //
CREATE FUNCTION `ValidaUsuario`(usuario VARCHAR(50), senha VARCHAR(50)) RETURNS tinyint(1)
    DETERMINISTIC
BEGIN
	DECLARE usuarioExiste BOOLEAN;
	SELECT EXISTS(SELECT 1 FROM usuario WHERE usu_login = usuario AND usu_senha = senha) INTO usuarioExiste; 
	RETURN usuarioExiste;
END//
DELIMITER ;

-- Copiando estrutura para trigger easystock.AdicionaNaFiliado
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `AdicionaNaFiliado` AFTER INSERT ON `estoque` FOR EACH ROW INSERT INTO filiado (fil_master,fil_id_usuario,fil_estoq,fil_inserted_at) VALUES (NEW.est_titular,NEW.est_titular, NEW.est_id,CURRENT_TIMESTAMP())//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
