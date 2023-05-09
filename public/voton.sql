-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Mar-2023 às 11:45
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `voton`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidato` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_de_categoria`
--

DROP TABLE IF EXISTS `lista_de_categoria`;
CREATE TABLE IF NOT EXISTS `lista_de_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidos`
--

DROP TABLE IF EXISTS `partidos`;
CREATE TABLE IF NOT EXISTS `partidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `lema` varchar(300) NOT NULL,
  `qtdmembros` int(11) NOT NULL,
  `presidente` varchar(50) NOT NULL,
  `vicepresidente` varchar(50) NOT NULL,
  `sede` varchar(60) NOT NULL,
  `logo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `partidos`
--

INSERT INTO `partidos` (`id`, `nome`, `lema`, `qtdmembros`, `presidente`, `vicepresidente`, `sede`, `logo`) VALUES
(1, 'MPLA', 'jjsdsdsd', 3, 'Abel Chivukuvuku', 'Natalia Francisco', 'sdsddd', 'uploads/voton-176-mpla.png'),
(2, 'UNITA', 'jjsdsdsd', 3, 'Abel Chivukuvuku', 'Natalia Francisco', 'sdsddd', 'uploads/voton-701-unita.png'),
(5, 'CASACE', 'jjsdsdsd', 3, 'Abel Chivukuvuku', 'Natalia Francisco', 'sdsddd', 'uploads/voton-592-casace.png'),
(6, 'FNLA', 'ASDS', 23, 'ADADAD', 'ADADSS', 'ASD', 'uploads/voton-372-fnla.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_address` varchar(200) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `rank` varchar(30) NOT NULL,
  `profile_pic` varchar(500) DEFAULT NULL,
  `data_de_criacao` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `url_address`, `name`, `email`, `password`, `rank`, `profile_pic`, `data_de_criacao`) VALUES
(1, '8cr0m3cfh9q5qogb898t', 'Natalia', 'nataliafranciscoalbino44@gmail.com', '2298625f2ba17912b286ad9afd8f089e460241b9', 'admin', '', '2023-03-21 11:33:16'),
(2, '71sa', 'Nzola', 'nzolakiampava@gmail.com', '4554f6fc1a2e2f6bdc63b0162bf0ca0650368dd4', 'admin', '', '2023-03-21 11:48:10'),
(3, 'j6djpcl7k92skarcdghaq8sj0p2rh', 'Francisca', 'francisca@gmail.com', 'bf2b6b3480cdcb312161d94112bf70a0ff6d1646', 'admin', NULL, '2023-03-21 12:34:41'),
(4, 'l39sthp8fjfmt52pbc5sc1fol3oo0', 'Joana', 'joana@gmail.com', '2b9bb7d574d844ab4c00a1537715cfbc62cd3347', 'normal', NULL, '2023-03-21 12:38:08'),
(5, '1lsi96ekbcpg8ki', 'Luzia', 'luzia@gmail.com', 'eedc0cc47bd65bf4e09af7cbcabc160fa455a63f', 'normal', NULL, '2023-03-21 13:38:28'),
(6, '526an2kau14nlagotut9ld1jhir6', 'Luizinha', 'luizinha@gmail.com', '172508b5c42f81ba8ebbae4496a37e4a4c9fa4f5', 'normal', NULL, '2023-03-21 13:54:42'),
(7, 'p9e5aad7qic9k4d193', 'Vanessa', 'vanessa@gmail.com', '410013f679f8a5f0c2995c0432467124ef7cea10', 'normal', NULL, '2023-03-21 16:21:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
