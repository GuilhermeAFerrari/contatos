-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 28-Set-2020 às 13:14
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ramais`
--

DROP TABLE IF EXISTS `tb_ramais`;
CREATE TABLE IF NOT EXISTS `tb_ramais` (
  `id_ramal` int(11) NOT NULL AUTO_INCREMENT,
  `nm_responsavel` varchar(50) DEFAULT NULL,
  `nr_numero` char(5) DEFAULT NULL,
  `ds_setor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_ramal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registros`
--

DROP TABLE IF EXISTS `tb_registros`;
CREATE TABLE IF NOT EXISTS `tb_registros` (
  `id_contato` int(4) NOT NULL AUTO_INCREMENT,
  `nm_contato` varchar(28) NOT NULL,
  `nm_cidade` varchar(15) DEFAULT NULL,
  `nm_uf` varchar(20) DEFAULT NULL,
  `nm_empresa` varchar(22) DEFAULT NULL,
  `nm_ddd1` varchar(12) DEFAULT NULL,
  `ds_telefone1` varchar(22) DEFAULT NULL,
  `ds_telefone2` varchar(12) DEFAULT NULL,
  `ds_observacao` varchar(30) DEFAULT NULL,
  `nm_ddd2` char(3) DEFAULT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
