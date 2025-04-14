-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14/04/2025 às 20:05
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produto`
--
CREATE DATABASE IF NOT EXISTS `produto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `produto`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(50) NOT NULL,
  `pro_descricao` varchar(200) NOT NULL,
  `pro_unimedida` varchar(30) NOT NULL,
  `pro_valor` varchar(40) NOT NULL,
  `pro_quantidade` varchar(20) NOT NULL,
  `pro_data` varchar(10) NOT NULL,
  `pro_fornecedor` varchar(50) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`pro_id`, `pro_nome`, `pro_descricao`, `pro_unimedida`, `pro_valor`, `pro_quantidade`, `pro_data`, `pro_fornecedor`) VALUES
(1, ' 8jjg', 'jghjgjhg', 'litro', '789', '78', '2025-04-14', 'jsdj'),
(2, ' 8jjg', 'jghjgjhg', 'litro', '789', '78', '2025-04-14', 'jsdj'),
(3, ' 8jjg', 'jghjgjhg', 'litro', '789', '78', '2025-04-14', 'jsdj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
