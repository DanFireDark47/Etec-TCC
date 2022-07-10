-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2022 às 22:47
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `data` varchar(10) DEFAULT NULL,
  `horario` varchar(5) DEFAULT NULL,
  `documentoCliente_agenda` bigint(20) DEFAULT NULL,
  `documentoSalao_agenda` bigint(20) DEFAULT NULL,
  `idServico_agenda` int(11) DEFAULT NULL,
  `idAgenda_estatus` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `data`, `horario`, `documentoCliente_agenda`, `documentoSalao_agenda`, `idServico_agenda`, `idAgenda_estatus`) VALUES
(76, '2022-06-16', '20:43', NULL, 234234, NULL, NULL),
(77, '2022-06-13', '6:00', NULL, 234234, NULL, NULL),
(78, '2022-06-13', '6:30', NULL, 234234, NULL, NULL),
(79, '2022-06-13', '7:00', NULL, 234234, NULL, NULL),
(80, '2022-06-13', '7:30', NULL, 234234, NULL, NULL),
(81, '2022-06-13', '8:00', NULL, 234234, NULL, NULL),
(82, '2022-06-13', '8:30', NULL, 234234, NULL, NULL),
(83, '2022-06-13', '9:00', NULL, 234234, NULL, NULL),
(84, '2022-06-13', '9:30', NULL, 234234, NULL, NULL),
(85, '2022-06-13', '10:00', NULL, 234234, NULL, NULL),
(86, '2022-06-13', '10:30', NULL, 234234, NULL, NULL),
(87, '2022-06-13', '11:00', NULL, 234234, NULL, NULL),
(88, '2022-06-13', '11:30', NULL, 234234, NULL, NULL),
(89, '2022-06-14', '6:00', NULL, 234234, NULL, NULL),
(90, '2022-06-14', '6:30', NULL, 234234, NULL, NULL),
(91, '2022-06-14', '7:00', NULL, 234234, NULL, NULL),
(92, '2022-06-14', '7:30', NULL, 234234, NULL, NULL),
(93, '2022-06-14', '8:00', NULL, 234234, NULL, NULL),
(94, '2022-06-14', '8:30', NULL, 234234, NULL, NULL),
(95, '2022-06-14', '9:00', NULL, 234234, NULL, NULL),
(96, '2022-06-14', '9:30', NULL, 234234, NULL, NULL),
(97, '2022-06-14', '10:00', NULL, 234234, NULL, NULL),
(98, '2022-06-14', '10:30', NULL, 234234, NULL, NULL),
(99, '2022-06-14', '11:00', NULL, 234234, NULL, NULL),
(100, '2022-06-14', '11:30', NULL, 234234, NULL, NULL),
(101, '2022-06-15', '6:00', NULL, 234234, NULL, NULL),
(102, '2022-06-15', '6:30', NULL, 234234, NULL, NULL),
(103, '2022-06-15', '7:00', NULL, 234234, NULL, NULL),
(104, '2022-06-15', '7:30', NULL, 234234, NULL, NULL),
(105, '2022-06-15', '8:00', NULL, 234234, NULL, NULL),
(106, '2022-06-15', '8:30', NULL, 234234, NULL, NULL),
(107, '2022-06-15', '9:00', NULL, 234234, NULL, NULL),
(108, '2022-06-15', '9:30', NULL, 234234, NULL, NULL),
(109, '2022-06-15', '10:00', NULL, 234234, NULL, NULL),
(110, '2022-06-15', '10:30', NULL, 234234, NULL, NULL),
(111, '2022-06-15', '11:00', NULL, 234234, NULL, NULL),
(112, '2022-06-15', '11:30', NULL, 234234, NULL, NULL),
(113, '2022-06-16', '6:00', NULL, 234234, NULL, NULL),
(114, '2022-06-16', '6:30', NULL, 234234, NULL, NULL),
(115, '2022-06-16', '7:00', NULL, 234234, NULL, NULL),
(116, '2022-06-16', '7:30', NULL, 234234, NULL, NULL),
(117, '2022-06-16', '8:00', NULL, 234234, NULL, NULL),
(118, '2022-06-16', '8:30', NULL, 234234, NULL, NULL),
(119, '2022-06-16', '9:00', NULL, 234234, NULL, NULL),
(120, '2022-06-16', '9:30', NULL, 234234, NULL, NULL),
(121, '2022-06-16', '10:00', NULL, 234234, NULL, NULL),
(122, '2022-06-16', '10:30', NULL, 234234, NULL, NULL),
(123, '2022-06-16', '11:00', NULL, 234234, NULL, NULL),
(124, '2022-06-16', '11:30', NULL, 234234, NULL, NULL),
(125, '2022-06-17', '6:00', NULL, 234234, NULL, NULL),
(126, '2022-06-17', '6:30', NULL, 234234, NULL, NULL),
(127, '2022-06-17', '7:00', NULL, 234234, NULL, NULL),
(128, '2022-06-17', '7:30', NULL, 234234, NULL, NULL),
(129, '2022-06-17', '8:00', NULL, 234234, NULL, NULL),
(130, '2022-06-17', '8:30', NULL, 234234, NULL, NULL),
(131, '2022-06-17', '9:00', NULL, 234234, NULL, NULL),
(132, '2022-06-17', '9:30', NULL, 234234, NULL, NULL),
(133, '2022-06-17', '10:00', NULL, 234234, NULL, NULL),
(134, '2022-06-17', '10:30', NULL, 234234, NULL, NULL),
(135, '2022-06-17', '11:00', NULL, 234234, NULL, NULL),
(136, '2022-06-17', '11:30', NULL, 234234, NULL, NULL),
(137, '2022-06-18', '6:00', NULL, 234234, NULL, NULL),
(138, '2022-06-18', '6:30', NULL, 234234, NULL, NULL),
(139, '2022-06-18', '7:00', NULL, 234234, NULL, NULL),
(140, '2022-06-18', '7:30', NULL, 234234, NULL, NULL),
(141, '2022-06-18', '8:00', NULL, 234234, NULL, NULL),
(142, '2022-06-18', '8:30', NULL, 234234, NULL, NULL),
(143, '2022-06-18', '9:00', NULL, 234234, NULL, NULL),
(144, '2022-06-18', '9:30', NULL, 234234, NULL, NULL),
(145, '2022-06-18', '10:00', NULL, 234234, NULL, NULL),
(146, '2022-06-18', '10:30', NULL, 234234, NULL, NULL),
(147, '2022-06-18', '11:00', NULL, 234234, NULL, NULL),
(148, '2022-06-18', '11:30', NULL, 234234, NULL, NULL),
(149, '2022-06-19', '6:00', NULL, 234234, NULL, NULL),
(150, '2022-06-19', '6:30', NULL, 234234, NULL, NULL),
(151, '2022-06-19', '7:00', NULL, 234234, NULL, NULL),
(152, '2022-06-19', '7:30', NULL, 234234, NULL, NULL),
(153, '2022-06-19', '8:00', NULL, 234234, NULL, NULL),
(154, '2022-06-19', '8:30', NULL, 234234, NULL, NULL),
(155, '2022-06-19', '9:00', NULL, 234234, NULL, NULL),
(156, '2022-06-19', '9:30', NULL, 234234, NULL, NULL),
(157, '2022-06-19', '10:00', NULL, 234234, NULL, NULL),
(158, '2022-06-19', '10:30', NULL, 234234, NULL, NULL),
(159, '2022-06-19', '11:00', NULL, 234234, NULL, NULL),
(160, '2022-06-19', '11:30', NULL, 234234, NULL, NULL),
(161, '2022-06-20', '6:00', NULL, 234234, NULL, NULL),
(162, '2022-06-20', '6:30', NULL, 234234, NULL, NULL),
(163, '2022-06-20', '7:00', NULL, 234234, NULL, NULL),
(164, '2022-06-20', '7:30', NULL, 234234, NULL, NULL),
(165, '2022-06-20', '8:00', NULL, 234234, NULL, NULL),
(166, '2022-06-20', '8:30', NULL, 234234, NULL, NULL),
(167, '2022-06-20', '9:00', NULL, 234234, NULL, NULL),
(168, '2022-06-20', '9:30', NULL, 234234, NULL, NULL),
(169, '2022-06-20', '10:00', NULL, 234234, NULL, NULL),
(170, '2022-06-20', '10:30', NULL, 234234, NULL, NULL),
(171, '2022-06-20', '11:00', NULL, 234234, NULL, NULL),
(172, '2022-06-20', '11:30', NULL, 234234, NULL, NULL),
(173, '2022-06-21', '6:00', NULL, 234234, NULL, NULL),
(174, '2022-06-21', '6:30', NULL, 234234, NULL, NULL),
(175, '2022-06-21', '7:00', NULL, 234234, NULL, NULL),
(176, '2022-06-21', '7:30', NULL, 234234, NULL, NULL),
(177, '2022-06-21', '8:00', NULL, 234234, NULL, NULL),
(178, '2022-06-21', '8:30', NULL, 234234, NULL, NULL),
(179, '2022-06-21', '9:00', NULL, 234234, NULL, NULL),
(180, '2022-06-21', '9:30', NULL, 234234, NULL, NULL),
(181, '2022-06-21', '10:00', NULL, 234234, NULL, NULL),
(182, '2022-06-21', '10:30', NULL, 234234, NULL, NULL),
(183, '2022-06-21', '11:00', NULL, 234234, NULL, NULL),
(184, '2022-06-21', '11:30', NULL, 234234, NULL, NULL),
(185, '2022-06-22', '6:00', NULL, 234234, NULL, NULL),
(186, '2022-06-22', '6:30', NULL, 234234, NULL, NULL),
(187, '2022-06-22', '7:00', NULL, 234234, NULL, NULL),
(188, '2022-06-22', '7:30', NULL, 234234, NULL, NULL),
(189, '2022-06-22', '8:00', NULL, 234234, NULL, NULL),
(190, '2022-06-22', '8:30', NULL, 234234, NULL, NULL),
(191, '2022-06-22', '9:00', NULL, 234234, NULL, NULL),
(192, '2022-06-22', '9:30', NULL, 234234, NULL, NULL),
(193, '2022-06-22', '10:00', NULL, 234234, NULL, NULL),
(194, '2022-06-22', '10:30', NULL, 234234, NULL, NULL),
(195, '2022-06-22', '11:00', NULL, 234234, NULL, NULL),
(196, '2022-06-22', '11:30', NULL, 234234, NULL, NULL),
(197, '2022-06-23', '6:00', NULL, 234234, NULL, NULL),
(198, '2022-06-23', '6:30', NULL, 234234, NULL, NULL),
(199, '2022-06-23', '7:00', NULL, 234234, NULL, NULL),
(200, '2022-06-23', '7:30', NULL, 234234, NULL, NULL),
(201, '2022-06-23', '8:00', NULL, 234234, NULL, NULL),
(202, '2022-06-23', '8:30', NULL, 234234, NULL, NULL),
(203, '2022-06-23', '9:00', NULL, 234234, NULL, NULL),
(204, '2022-06-23', '9:30', NULL, 234234, NULL, NULL),
(205, '2022-06-23', '10:00', NULL, 234234, NULL, NULL),
(206, '2022-06-23', '10:30', NULL, 234234, NULL, NULL),
(207, '2022-06-23', '11:00', NULL, 234234, NULL, NULL),
(208, '2022-06-23', '11:30', NULL, 234234, NULL, NULL),
(209, '2022-06-24', '6:00', NULL, 234234, NULL, NULL),
(210, '2022-06-24', '6:30', NULL, 234234, NULL, NULL),
(211, '2022-06-24', '7:00', NULL, 234234, NULL, NULL),
(212, '2022-06-24', '7:30', NULL, 234234, NULL, NULL),
(213, '2022-06-24', '8:00', NULL, 234234, NULL, NULL),
(214, '2022-06-24', '8:30', NULL, 234234, NULL, NULL),
(215, '2022-06-24', '9:00', NULL, 234234, NULL, NULL),
(216, '2022-06-24', '9:30', NULL, 234234, NULL, NULL),
(217, '2022-06-24', '10:00', NULL, 234234, NULL, NULL),
(218, '2022-06-24', '10:30', NULL, 234234, NULL, NULL),
(219, '2022-06-24', '11:00', NULL, 234234, NULL, NULL),
(220, '2022-06-24', '11:30', NULL, 234234, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `card`
--

CREATE TABLE `card` (
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `foto_name` varchar(50) DEFAULT NULL,
  `star` int(3) DEFAULT 0,
  `documentoSalao_card` bigint(20) NOT NULL,
  `especializacao` varchar(50) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `foto_path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `card`
--

INSERT INTO `card` (`nome`, `descricao`, `foto_name`, `star`, `documentoSalao_card`, `especializacao`, `preco`, `foto_path`) VALUES
('Aaa', 'teste trocando Descrição', '234234.png', 0, 234234, 'testando 123', 25, '../imgs/imagens BD/234234.png'),
('Aaa', NULL, NULL, 0, 6758789, NULL, NULL, NULL),
('Barbearia do Antonio', 'Venha cortar seu cabelo aqui', '12391203.jfif', 0, 12391203, 'corte de cabelo', NULL, '../imgs/imagens BD/12391203.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `documento` bigint(20) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`documento`, `nome`, `telefone`, `celular`, `email`, `senha`) VALUES
(123123123, 'Aaa', '12390123', '', 'DFD@gmail.com', 'pato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatus`
--

CREATE TABLE `estatus` (
  `ID` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salao`
--

CREATE TABLE `salao` (
  `documento` bigint(20) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(150) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `idAgenda_salao` int(11) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `salao`
--

INSERT INTO `salao` (`documento`, `nome`, `telefone`, `celular`, `email`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `idAgenda_salao`, `senha`) VALUES
(234234, 'Aaa', '12390123', '2234234', 'DFD@gmail.com', 123123, 'Rua Ká', '234', '', 'Isso Mesmo', 'Mogi', 'PG', NULL, 'pato'),
(6758789, 'Aaa', '12390123', '', 'DFD@gmail.com', 123123, 'Rua Ká', '234', '', 'Mogi Mirim 2', 'Mogi', 'PG', NULL, 'pato'),
(12391203, 'Aaa', '12390123', '1293981023', 'DFD@gmail.com', 123123, 'Rua Ká', '234', '', 'Mogi Mirim 2', 'Mogi', 'PG', NULL, 'pato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `documentoSalao_servico` bigint(20) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `descrição` varchar(50) DEFAULT NULL,
  `preco` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `documentoSalao_servico`, `nome`, `descrição`, `preco`) VALUES
(1, 12391203, 'Corte Relampago', 'Corte de Cabelo Relâmpago ', 10),
(2, 234234, 'Corte Relampago', 'Corte de Cabelo Simples', 25),
(3, 234234, 'Cortes Masculinos', 'Corte para as mulieres', 10),
(4, 234234, 'Corte de Cabelo', 'Corte para as mulieres', 5),
(5, 234234, 'Cortes Masculinos', 'Corte para as mulieres', 25);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_AgendaPesCliente` (`documentoCliente_agenda`),
  ADD KEY `fk_AgendaPesSalao` (`documentoSalao_agenda`),
  ADD KEY `fk_AgendaPesServico` (`idServico_agenda`),
  ADD KEY `fk_AgendaPesEstatus` (`idAgenda_estatus`);

--
-- Índices para tabela `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`documentoSalao_card`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`documento`);

--
-- Índices para tabela `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `salao`
--
ALTER TABLE `salao`
  ADD PRIMARY KEY (`documento`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT de tabela `salao`
--
ALTER TABLE `salao`
  MODIFY `documento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12391204;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_AgendaPesCliente` FOREIGN KEY (`documentoCliente_agenda`) REFERENCES `cliente` (`documento`),
  ADD CONSTRAINT `fk_AgendaPesEstatus` FOREIGN KEY (`idAgenda_estatus`) REFERENCES `estatus` (`ID`),
  ADD CONSTRAINT `fk_AgendaPesSalao` FOREIGN KEY (`documentoSalao_agenda`) REFERENCES `salao` (`documento`),
  ADD CONSTRAINT `fk_AgendaPesServico` FOREIGN KEY (`idServico_agenda`) REFERENCES `servico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
