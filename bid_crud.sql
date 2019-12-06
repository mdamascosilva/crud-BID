-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2019 às 14:47
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bid_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas`
--

CREATE TABLE `atletas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(14) CHARACTER SET latin1 NOT NULL,
  `datanasc` date NOT NULL,
  `naturalidade` varchar(100) CHARACTER SET latin1 NOT NULL,
  `uf` varchar(100) CHARACTER SET latin1 NOT NULL,
  `clubeformador` varchar(100) CHARACTER SET latin1 NOT NULL,
  `clubeatual` varchar(100) CHARACTER SET latin1 NOT NULL,
  `posicao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipocontrato` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fone` int(13) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atletas`
--

INSERT INTO `atletas` (`id`, `nome`, `cpf`, `datanasc`, `naturalidade`, `uf`, `clubeformador`, `clubeatual`, `posicao`, `tipocontrato`, `fone`, `criado`, `modificado`) VALUES
(1, 'Joao da Silva', '45567890934', '1983-12-21', 'Sao Paulo', 'SP', 'Bangu', 'Avai', 'Zagueiro', 'Profissional', 1187654134, '2019-12-06 10:53:19', '2019-12-06 11:40:46'),
(3, 'Pedro Castro da Silva', '00345698745', '1993-03-22', 'Curitiba', 'PR', 'Atletico-PR', 'Vasco', 'Lateral', 'Contrato Definitivo', 2147483647, '2019-12-06 11:43:31', '2019-12-06 11:43:50'),
(5, 'Manoel de Souza', '87956789003', '1992-07-29', 'Rio de Janeiro', 'RJ', 'America', 'Fluminense', 'Volante', 'RescisÃ£o', 2147483647, '2019-12-06 11:46:31', '2019-12-06 11:46:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atletas`
--
ALTER TABLE `atletas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atletas`
--
ALTER TABLE `atletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
