-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 27/10/2022 às 03:32
-- Versão do servidor: 5.7.34
-- Versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fiap_mentalid`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `chamada` varchar(300) DEFAULT NULL,
  `texto` text,
  `imagem` varchar(300) DEFAULT NULL,
  `autor` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `destaque` int(11) NOT NULL DEFAULT '0',
  `criado` date NOT NULL,
  `deletado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `chamada`, `texto`, `imagem`, `autor`, `status`, `destaque`, `criado`, `deletado`) VALUES
(1, 'rei arthur', 'chamada', 'lorem ipsum', 'rei-arthur-historia-e-origem-da-lenda-1024x614.jpg', 'autor', 1, 0, '2022-10-26', NULL),
(2, 'pequena sereia', 'chamada', 'lorem ipsum', 'pequena-sereia.jpg', 'autor', 1, 0, '2022-10-26', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
