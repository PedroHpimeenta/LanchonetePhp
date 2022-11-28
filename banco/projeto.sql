-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jul-2022 às 15:54
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`, `nivel`) VALUES
(1, 'joao', '$2y$10$L.hiY3MzRCgORjLXKbM92OH3HhKOeRxSOpABbjJJUOZioaQ9RtIim', 'admin'),
(2, 'pedro', '$2y$10$7a1RCH9Td42b5nPwh/EEbuuHmeGDVUR3N5/iksq0WHgemws7mUM8e', 'admin'),
(3, 'teste', '$2y$10$f7Aozgqbf0Eyw9tEw0cai.CH.67O7k2IatJliD2NQRI34.C81pSSq', 'editor'),
(13, 'paula', '$2y$10$DSJIUPA7WKo/ForeFsOyyeaZAwOo93xQzsVWJq9eVgjx7a2yO6ZMu', 'editor'),
(16, 'fernandaaaaa', '$2y$10$qhVVJ7Xhx3xVLTlmD6FWaOmmUF51rltMpdx/l09GpX.TPqymAgDqu', 'editor'),
(6, 'fernanda', '$2y$10$dX.MbCG2oYMYh7JiD5WZTOHjXuq4WNs8Bay9in5ow9gmyNkuxx95a', 'editor'),
(7, 'paul', '$2y$10$4YVU4RgKVe4KsSRxxVWqmuNrwTPat68gSyvnKErLrxtfDNZylbgdG', 'admin'),
(8, 'vitoria', '$2y$10$xHXxq3PJnyGQZ2jsH/CbqO8HuJ3Jri80uuIEO4VU54ddCkvD8mYmq', 'admin'),
(15, 'felipe', '$2y$10$vwem8grKEq0isqOF1pEbauPfXEON0ZZsJDL4f6OX0re3zBZPNhzBS', 'editor'),
(10, 'vitoria', '$2y$10$0.IvppmX4Hwv8N0IY5bZuehK3vd2rrNQEewBn0LUP8Y.ZWqAVL8wa', 'admin'),
(17, 'pedroooooo', '$2y$10$3gaezPKOPoJ28nSCBCJrwu0iWTt2k.R37gs73XphrLiM7eYh2hzUW', 'editor'),
(14, 'lucas', '$2y$10$jlpkmJzDw/PuTwHSR9A6YulsIOj3crIr8pJ5ug81i8k704bOIdwlC', 'editor'),
(18, 'pedroooooo', '$2y$10$OBRq3iQ.UwIj28dUqLSpme/WDXoK/vPqEZTenHEAnGIHf0NUmU7GO', 'editor'),
(19, 'pedrooooooooo', '$2y$10$TWzrEWgHPgwdcJROMyB7y.U8BddtxgFRmTvxdF1PbwzQn.NVqWjdu', 'editor'),
(20, 'pedroooooooooooo', '$2y$10$g7EqXMaL68rcfmvERh.Y0OZpZlLOnePmRF4pJl2WtjTT1tWLt.ipe', 'editor'),
(21, 'lucas', '$2y$10$G1YeVNeYiIOhX7ftdnfUvuKvLVA4VsW4nrR6aw.F6.Xc7t5pZme0O', 'editor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secao1`
--

DROP TABLE IF EXISTS `secao1`;
CREATE TABLE IF NOT EXISTS `secao1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(100) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` decimal(7,2) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secao1`
--

INSERT INTO `secao1` (`id`, `nome_servico`, `descricao`, `preco`, `img`) VALUES
(1, 'Pizza de queijo', 'Sabor delicioso', '12.00', 'coxinha.jpg'),
(2, 'Pizza de presunto', 'Sabor otimo', '15.00', 'coxinha.jpg'),
(3, 'Pizza de atum', 'Sabor delicioso', '8.00', 'pizza3.jpg'),
(11, 'fanta', 'refrigerante', '25.00', 'fanta.jpg'),
(5, 'Refrigerante', 'Coca-cola', '5.00', 'coca.jpg'),
(6, 'Cerveja', 'Heineken', '16.00', 'heineken.jpg'),
(17, 'coxinha', 'muito boa', '40.00', 'coxinha.jpg'),
(16, 'lasanha', 'boa', '5.00', 'lasanha.jpg'),
(18, 'queijo', 'queijo', '27.00', 'coxinha.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secao3`
--

DROP TABLE IF EXISTS `secao3`;
CREATE TABLE IF NOT EXISTS `secao3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `depoimento` text,
  `cliente` tinytext,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secao3`
--

INSERT INTO `secao3` (`id`, `depoimento`, `cliente`, `foto`) VALUES
(1, 'Melhor pizzaria da cidade.', 'Maria', 'maria.jpg'),
(2, 'Excelente pizzaria. ', 'Carla', 'carla.jpg'),
(3, 'Gostei  do atendimento.', 'Fernanda', 'fernanda.jpg'),
(4, 'Bom serviço de entrega.', 'Rita', 'rita.jpg'),
(11, 'Gostei demais', 'julia', 'julia.jpg'),
(13, 'Muito bom', 'Gabriela', 'julia.jpg'),
(14, 'Bom', 'joice', 'carla.jpg'),
(16, 'Excelente pizzaria.', 'João', 'joao.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secao4`
--

DROP TABLE IF EXISTS `secao4`;
CREATE TABLE IF NOT EXISTS `secao4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(100) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `preco` decimal(7,2) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secao4`
--

INSERT INTO `secao4` (`id`, `nome_servico`, `descricao`, `preco`, `img`) VALUES
(1, 'Entrega em Domicílio', 'Segunda,quarta e sexta a partir das 18horas!', '5.00', 'entrega.png'),
(2, 'Rodízio', 'Receba no conforto de sua casa.', '27.00', 'coca.jpg'),
(3, 'Buffet', 'Aniversários e festas no geral.', '830.00', 'buffet.jpg'),
(9, 'coxinha', 'Muito boa', '26.00', 'coxinha.jpg'),
(8, 'Rodízio', 'Receba no conforto de sua casa.', '27.00', 'coca.jpg'),
(7, 'rodizio de salgado', 'Rodizio de coxinha', '15.00', 'coxinha.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secao5`
--

DROP TABLE IF EXISTS `secao5`;
CREATE TABLE IF NOT EXISTS `secao5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secao5`
--

INSERT INTO `secao5` (`id`, `titulo`, `img`, `descricao`) VALUES
(1, NULL, 'imagem13.png', 'Rua sao francisco, 85, Diamantina-MG'),
(2, NULL, 'imagem14.png', '(34) 9-9999-9999'),
(3, NULL, 'imagem15.png', 'pizzatudobom@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
