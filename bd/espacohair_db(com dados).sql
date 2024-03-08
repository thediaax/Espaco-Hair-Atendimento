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


-- Copiando estrutura do banco de dados para espacohair_db
CREATE DATABASE IF NOT EXISTS `espacohair_db` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `espacohair_db`;

-- Copiando estrutura para tabela espacohair_db.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `start` timestamp NOT NULL,
  `end` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela espacohair_db.events: ~7 rows (aproximadamente)
INSERT INTO `events` (`id`, `title`, `description`, `color`, `start`, `end`) VALUES
	(29, 'Mão', 'admin@gmail.com', 'blue', '2022-12-21 13:45:00', '2022-12-21 14:30:00'),
	(30, 'Hidratação', 'admin@gmail.com', 'blue', '2022-12-22 15:00:00', '2022-12-22 15:30:00'),
	(32, 'Mão', 'user@gmail.com', 'blue', '2022-12-31 14:00:00', '2022-12-31 14:45:00'),
	(33, 'Pé', 'user@gmail.com', 'blue', '2022-12-28 22:30:00', '2022-12-28 23:30:00'),
	(34, 'Hidratação', 'user@gmail.com', 'blue', '2022-12-23 13:30:00', '2022-12-23 14:00:00'),
	(42, 'Botox', 'joovitorferreira@ymail.com', 'blue', '2022-12-08 13:30:00', '2022-12-08 15:30:00'),
	(43, 'Escova', 'joovitorferreira@ymail.com', 'blue', '2022-12-09 14:30:00', '2022-12-09 15:30:00');

-- Copiando estrutura para tabela espacohair_db.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `diretorio` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela espacohair_db.galeria: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela espacohair_db.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` text NOT NULL,
  `execucao` varchar(4) NOT NULL,
  `preco` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela espacohair_db.servicos: ~11 rows (aproximadamente)
INSERT INTO `servicos` (`id`, `nome`, `descricao`, `execucao`, `preco`) VALUES
	(10, 'Botox', 'Procedimento feito com produtos da linha profissional.', '120', '120,00'),
	(11, 'Progressiva', 'Procedimento feito com produtos da linha profissional.', '120', '140,00'),
	(12, 'Corte', 'Modelagem a pedido do cliente.', '60', '35,00'),
	(13, 'Hidratação', 'Procedimento feito com produtos da linha profissional.', '30', '25,00'),
	(14, 'Escova', 'Procedimento feito com produtos da linha profissional.', '60', '45,00'),
	(15, 'Reconstrução', 'Procedimento feito com produtos da linha profissional.', '30', '25,00'),
	(16, 'Cauterização', 'Procedimento feito com produtos da linha profissional.', '60', '50,00'),
	(17, 'Manicure', 'Procedimento feito com produtos da linha profissional.', '45', '25,00'),
	(19, 'Pedicure', 'Procedimento feito com produtos da linha profissional.', '60', '30,00'),
	(20, 'Manicure + Pedicure', 'Procedimento feito com produtos da linha profissional.', '90', '47,00'),
	(21, 'Design de Sobrancelha', 'Procedimento feito com produtos da linha profissional.', '30', '35,00');

-- Copiando estrutura para tabela espacohair_db.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(65) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `tipo` char(1) DEFAULT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela espacohair_db.usuarios: ~3 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `celular`, `nascimento`, `tipo`, `avatar`) VALUES
	(10, 'Admin', 'admin@gmail.com', 'admin', '985014750', '2022-11-22', '2', 'assets/avatar/admin@gmail.com.jpg'),
	(11, 'User', 'user@gmail.com', 'user', '965471203', '2022-11-30', '1', 'assets/avatar/user@gmail.com.jpg'),
	(12, 'João Vitor Ferreira', 'joovitorferreira@ymail.com', '123', '123', '2022-12-28', '2', 'assets/avatar/joovitorferreira@ymail.com.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
