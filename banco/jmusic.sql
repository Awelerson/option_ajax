-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2016 às 02:12
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jmusic`
--
CREATE DATABASE IF NOT EXISTS `jmusic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jmusic`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cantor`
--

CREATE TABLE IF NOT EXISTS `cantor` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `estilo` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cantor`
--

INSERT INTO `cantor` (`id`, `nome`, `estilo`) VALUES
(1, 'yui', 'jpop'),
(2, 'one ok rock', 'jrock'),
(3, 'Evanescence', 'rock'),
(4, 'Miwa', 'jpop');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE IF NOT EXISTS `musica` (
  `id` int(11) NOT NULL,
  `nome_musica` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `cantor_nome` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`id`, `nome_musica`, `link`, `cantor_nome`) VALUES
(1, 'again', 'https://www.youtube.com/embed/MLfMrBfqCu8', 'yui'),
(2, 'fight', 'https://www.youtube.com/embed/YGYj5F1OD9w', 'yui'),
(3, 'feel my soul', 'https://www.youtube.com/embed/h9WWfh_WZ6M', 'yui'),
(4, 'the beginning', 'https://www.youtube.com/embed/Hh9yZWeTmVM', 'one ok rock'),
(5, 'bring me to life', 'https://www.youtube.com/embed/3YxaaGgTQYM', 'Evanescence'),
(6, 'change', 'https://www.youtube.com/embed/3yComZ5t00c', 'miwa'),
(7, 'clock strikes', 'https://www.youtube.com/embed/6YZlFdTIdzM', 'one ok rock'),
(8, 'Re:make', 'https://www.youtube.com/embed/bV4vcr8E4HU', 'one ok rock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cantor`
--
ALTER TABLE `cantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cantor`
--
ALTER TABLE `cantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `musica`
--
ALTER TABLE `musica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
