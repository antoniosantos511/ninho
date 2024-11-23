-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2024 às 20:51
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_fla`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_fla`
--

CREATE TABLE `dados_fla` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dados_fla`
--

INSERT INTO `dados_fla` (`id`, `nome`, `email`, `senha`, `endereco`, `telefone`) VALUES
(35, 'andre zereferino', 'andre@zeferino.com.br', '123456', 'rua alves peixoto', '2189658965'),
(36, 'antonio', 'antonio@gmail.com', '1511151515', 'rua volin raba', '2198848444'),
(37, 'jr', 'jr@gmail.com', '184184184', 'rua jalin rabei', '2198848444'),
(38, 'jr', 'jr@gmail.com', '184184184', 'rua jalin rabei', '2198848444'),
(39, 'jr', 'jr@gmail.com', '789456015@grtrh', 'rua volin raba', '21 9969696969'),
(40, 'antonio', 'antonio@gmail.com', '7474747478487', 'rua volin raba', '2198848444'),
(41, 'marcia lopes', 'marcialopes07@gmail.com', '123456874', 'rua volin raba', '21995418555'),
(42, 'antonio', 'antonio@gmail.com', '15151151', 'rua volin raba', '2191111111111'),
(43, 'antonio', 'antonio@gmail.com', '78878787878778', 'aaaaaa', '212222222222'),
(44, 'renan', 'renan@gmail.com', '748748748', 'aaaaaa09kkkk', '2198848444'),
(45, 'antonio', 'antonio@gmail.com', '15484848', 'rua volin raba', '2198848444'),
(46, 'jr', 'jr@gmail.com', '18181818818', 'rua jalin rabei', '212222222222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `token_recuperacao` varchar(255) DEFAULT NULL,
  `data_token` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_fla`
--
ALTER TABLE `dados_fla`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_fla`
--
ALTER TABLE `dados_fla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
