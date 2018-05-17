-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2018 às 02:44
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `space-site`
--
CREATE DATABASE IF NOT EXISTS `space-site` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `space-site`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE IF NOT EXISTS `doador` (
  `ID_DOADOR` int(11) NOT NULL AUTO_INCREMENT,
  `CPF_DOADOR` int(11) NOT NULL,
  `NOME_DOADOR` varchar(50) NOT NULL,
  `VALOR_DOACAO` double NOT NULL,
  `DT_ENTRADA` date NOT NULL,
  `ID_JOGADOR_DOADOR` int(11) NOT NULL,
  PRIMARY KEY (`ID_DOADOR`),
  KEY `ID_JOGADOR_DOADOR` (`ID_JOGADOR_DOADOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE IF NOT EXISTS `jogador` (
  `ID_JOGADOR` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME_JOGADOR` varchar(16) NOT NULL,
  `SENHA_JOGADOR` varchar(12) NOT NULL,
  `EMAIL_JOGADOR` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_JOGADOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `doador`
--
ALTER TABLE `doador`
  ADD CONSTRAINT `fk_doador` FOREIGN KEY (`ID_JOGADOR_DOADOR`) REFERENCES `jogador` (`ID_JOGADOR`),
  ADD CONSTRAINT `doador` FOREIGN KEY (`ID_JOGADOR_DOADOR`) REFERENCES `jogador` (`ID_JOGADOR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
