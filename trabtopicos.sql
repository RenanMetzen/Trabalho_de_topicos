-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Abr-2021 às 06:41
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabtopicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sexo` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `idade` int(11) NOT NULL,
  `atividade` int(11) NOT NULL,
  `metabolismo` float NOT NULL,
  `diminuir` float DEFAULT NULL,
  `manter` float DEFAULT NULL,
  `aumentar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sexo`, `peso`, `altura`, `idade`, `atividade`, `metabolismo`, `diminuir`, `manter`, `aumentar`) VALUES
(1, 'Thomas', 2, 4, 7, 3, 2, 1983, 2612, 3073, 3534),
(3, 'Felipe', 2, 3, 5, 2, 3, 1811.6, 2441, 2872, 3303),
(4, 'Maria', 1, 3, 5, 4, 3, 1516.08, 2194, 2581, 2969),
(6, 'Rafa', 2, 4, 7, 3, 2, 1961.5, 2612, 3073, 3534),
(7, 'Luisa', 1, 4, 5, 4, 3, 1610.44, 2194, 2581, 2969),
(9, 'Cris', 1, 4, 3, 5, 1, 1538.24, 3434, 2424, 32423),
(10, 'Lara', 1, 3, 3, 4, 1, 1451.4, 3535, 23445, 3535350),
(11, 'Thais', 1, 4, 5, 5, 2, 1488.2, NULL, NULL, NULL),
(12, 'Vinicius', 2, 3, 5, 4, 3, 1791, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
