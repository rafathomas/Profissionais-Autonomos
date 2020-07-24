-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Maio-2020 às 22:48
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sexo` varchar(2) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `csenha` varchar(200) NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `usuario_fk` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `sexo`, `email`, `telefone`, `celular`, `usuario`, `senha`, `csenha`, `nivel`) VALUES
(42, 'Rafael Thomas', 'F', 'contato.rafaelthomas@gmail.com', '(18) 3608-2925', '(18) 99818-9919', 'canalti', '123', '123', 1),
(44, 'Rafael Thomas', 'F', 'contato.rafaelthomas@gmail.com', '(18) 3608-2925', '(18) 99818-9919', 'rafa', '123', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigos`
--

DROP TABLE IF EXISTS `codigos`;
CREATE TABLE IF NOT EXISTS `codigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(200) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

DROP TABLE IF EXISTS `profissionais`;
CREATE TABLE IF NOT EXISTS `profissionais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `sexo` varchar(4) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `senhac` varchar(100) NOT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `profissao_id` int(11) DEFAULT NULL,
  `descricao_profissao` text NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `FK_profissoes_usuarios` (`profissao_id`),
  KEY `usuario_fk` (`usuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `profissionais`
--

INSERT INTO `profissionais` (`id`, `nome`, `usuario`, `email`, `telefone`, `celular`, `sexo`, `senha`, `senhac`, `cpf`, `profissao_id`, `descricao_profissao`, `nivel`) VALUES
(10, 'Rafael Thomas', 'admin', 'contato.rafaelthomas@gmail.com', '(18) 3608-2925', '(18) 99818-9919', 'F', '123', '123', '457.619.038-57', 1, 'sadsdsd', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissoes`
--

DROP TABLE IF EXISTS `profissoes`;
CREATE TABLE IF NOT EXISTS `profissoes` (
  `id_profissao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_profissao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id_profissao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissoes`
--

INSERT INTO `profissoes` (`id_profissao`, `nome_profissao`, `imagem`) VALUES
(1, 'Pintor', 'img/tinta.png'),
(2, 'Pedreiro', 'img/cement.svg'),
(3, 'Encanador', 'img/tubo.png'),
(4, 'Eletricista', 'img/alerta.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recover_solicitation`
--

DROP TABLE IF EXISTS `recover_solicitation`;
CREATE TABLE IF NOT EXISTS `recover_solicitation` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `rash` varchar(200) NOT NULL,
  `status` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recover_solicitation`
--

INSERT INTO `recover_solicitation` (`id`, `email`, `rash`, `status`) VALUES
(52, 'contato.rafaelthomas@gmail.com', 'ecd765a7894f538ca25bf15745c682e6', 0),
(51, 'contato.rafaelthomas@gmail.com', 'e63a7411b706bc77e7a709de7b7604ac', 0),
(50, 'contato.rafaelthomas@gmail.com', 'eedd44fef7ed4edd5502856f2709e617', 0),
(49, 'contato.rafaelthomas@gmail.com', '92734499febbc2bccdead48c5373f685', 0),
(48, 'contato.rafaelthomas@gmail.com', 'b085d4cd0982c5f489a479380f54f5b9', 0),
(47, 'contato.rafaelthomas@gmail.com', '1fb704f39d94aa6378f4da9d3041ccfb', 0),
(46, 'contato.rafaelthomas@gmail.com', 'a38791beebad8398303eea5adef528d8', 0),
(45, 'contato.rafaelthomas@gmail.com', '1998bf2497d22cb9f10143c9ed0015bf', 0),
(44, 'contato.rafaelthomas@gmail.com', '3eab7a0851fd44975d33174cfc15ec1b', 0),
(43, 'contato.rafaelthomas@gmail.com', 'e4bb46c9d105c868aa1bd8c2515cda07', 0),
(42, 'contato.rafaelthomas@gmail.com', '8e4857dc5c4fec80d67de434528ed0d2', 0),
(41, 'contato.rafaelthomas@gmail.com', 'a229265bd6a642188db9d5e27c2f20ba', 0),
(40, 'contato.rafaelthomas@gmail.com', 'c1ce0e2f25e492a8d0dde31d5270d956', 0),
(39, 'contato.rafaelthomas@gmail.com', 'd7ffc8b824ca8a8414cb28593ada4fcc', 0),
(38, 'contato.rafaelthomas@gmail.com', '20fd1e9ecc6825197c150e3224f5c9f8', 0),
(37, 'contato.rafaelthomas@gmail.com', '3d58169e6b66093c5051092c0d40a661', 0),
(36, 'contato.rafaelthomas@gmail.com', '28f578de7e9c27e00085871aaca0138c', 0),
(35, 'contato.rafaelthomas@gmail.com', 'c7c7234e5cd0929e30da9dfc4f7b447c', 0),
(34, 'contato.rafaelthomas@gmail.com', '4e0bb1ddfd7e0a63f3e8ad18343aa905', 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `profissionais`
--
ALTER TABLE `profissionais`
  ADD CONSTRAINT `FK_profissoes_usuarios` FOREIGN KEY (`profissao_id`) REFERENCES `profissoes` (`id_profissao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
