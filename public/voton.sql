-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Mar-2023 às 19:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

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

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `candidato` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_de_categoria`
--

CREATE TABLE `lista_de_categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidos`
--

CREATE TABLE `partidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `lema` varchar(300) NOT NULL,
  `qtdmembros` int(11) NOT NULL,
  `presidente` varchar(50) NOT NULL,
  `vicepresidente` varchar(50) NOT NULL,
  `sede` varchar(60) NOT NULL,
  `logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `partidos`
--

INSERT INTO `partidos` (`id`, `nome`, `lema`, `qtdmembros`, `presidente`, `vicepresidente`, `sede`, `logo`) VALUES
(1, 'MPLA', 'Melhorar o que esta bom e corrigir o que esta mal', 3, 'Joao Lourenco', 'Nzola Kiampava', 'Maianga', 'uploads/voton-910-200064859_345328086936841_5645211025142170459_n.jpg'),
(2, 'UNITA', 'Melhor Angola', 56, 'Aldaberto da Costa Junior', 'Natalia Francisco', 'Bengo', 'uploads/voton-26-alone-g8223da09e_640.jpg'),
(3, 'Vanessa', 'nnn', 1, 'Natalia Albino', 'MIUXXXX', 'Maianga', 'uploads/voton-65-R.png vote.png'),
(4, 'CASACE', 'jjsdsdsd', 3, 'Abel Chivukuvuku', 'Natalia Francisco', 'sdsddd', 'uploads/voton-442-R.png vote.png'),
(5, 'KIAM', 'Lama', 3, 'Kiampava', 'Lama', 'skdshdsjd', 'uploads/voton-451-R.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `url_address` varchar(200) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `rank` varchar(30) NOT NULL,
  `profile_pic` varchar(500) DEFAULT NULL,
  `data_de_criacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lista_de_categoria`
--
ALTER TABLE `lista_de_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lista_de_categoria`
--
ALTER TABLE `lista_de_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
