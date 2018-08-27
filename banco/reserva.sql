-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2018 às 00:01
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
