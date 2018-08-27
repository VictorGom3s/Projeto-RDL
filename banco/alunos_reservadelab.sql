-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2018 às 00:04
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alunos_reservadelab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_curso`
--

CREATE TABLE `cad_curso` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(50) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_lab`
--

CREATE TABLE `cad_lab` (
  `id_lab` int(11) NOT NULL,
  `nome_lab` varchar(50) DEFAULT NULL,
  `qntd_maq` int(11) DEFAULT NULL,
  `projetor` varchar(50) DEFAULT NULL,
  `preferencia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_prof`
--

CREATE TABLE `cad_prof` (
  `id_prof` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_sala`
--

CREATE TABLE `cad_sala` (
  `id_sala` int(11) NOT NULL,
  `nome_sala` varchar(50) DEFAULT NULL,
  `periodo` varchar(50) NOT NULL DEFAULT '0',
  `curso` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_solicitacao`
--

CREATE TABLE `cad_solicitacao` (
  `id_sol` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL COMMENT 'Horairo da Reserva',
  `sala` int(11) DEFAULT NULL,
  `curso` int(11) DEFAULT NULL,
  `professor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `turma` varchar(50) DEFAULT NULL,
  `disciplina` varchar(50) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `projetor` varchar(50) DEFAULT NULL,
  `lab` varchar(50) DEFAULT NULL,
  `horarios` varchar(50) DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `id_prof`, `data`, `turma`, `disciplina`, `periodo`, `projetor`, `lab`, `horarios`, `obs`) VALUES
(NULL, NULL, '2018-08-27', '2018-08-27', NULL, NULL, NULL, '2018-08-27', '2018-08-27', '2018-08-27'),
(NULL, NULL, NULL, 'Exemplo 1', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'Exemplo 1', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'Exemplo 1', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'Exemplo 1', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'Exemplo 1', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'Exemplo 1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id_usuario` int(11) NOT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='registro de logins';

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id_usuario`, `Login`, `Senha`) VALUES
(1, 'teste', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_curso`
--
ALTER TABLE `cad_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `cad_lab`
--
ALTER TABLE `cad_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `cad_prof`
--
ALTER TABLE `cad_prof`
  ADD PRIMARY KEY (`id_prof`);

--
-- Indexes for table `cad_sala`
--
ALTER TABLE `cad_sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indexes for table `cad_solicitacao`
--
ALTER TABLE `cad_solicitacao`
  ADD PRIMARY KEY (`id_sol`),
  ADD KEY `sala` (`sala`),
  ADD KEY `curso` (`curso`),
  ADD KEY `professor` (`professor`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_curso`
--
ALTER TABLE `cad_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cad_lab`
--
ALTER TABLE `cad_lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cad_prof`
--
ALTER TABLE `cad_prof`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cad_sala`
--
ALTER TABLE `cad_sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cad_solicitacao`
--
ALTER TABLE `cad_solicitacao`
  ADD CONSTRAINT `curso` FOREIGN KEY (`curso`) REFERENCES `cad_curso` (`id_curso`),
  ADD CONSTRAINT `professor` FOREIGN KEY (`professor`) REFERENCES `cad_prof` (`id_prof`),
  ADD CONSTRAINT `sala` FOREIGN KEY (`sala`) REFERENCES `cad_sala` (`id_sala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
