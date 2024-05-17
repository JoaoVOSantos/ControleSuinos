-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2022 às 02:11
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc-manha2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachaco`
--

CREATE TABLE `cachaco` (
  `raca` varchar(120) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cod_cachaco` int(11) NOT NULL,
  `num_cobertura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cresc`
--

CREATE TABLE `cresc` (
  `cod_cresc` int(11) NOT NULL,
  `data_cresc` date DEFAULT NULL,
  `peso_medio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `desmame`
--

CREATE TABLE `desmame` (
  `cod_desmame` int(11) NOT NULL,
  `num_matriz` int(11) DEFAULT NULL,
  `num_lote` int(11) DEFAULT NULL,
  `peso_medio` float DEFAULT NULL,
  `data_desmame` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestacao`
--

CREATE TABLE `gestacao` (
  `cod_gestacao` int(11) NOT NULL,
  `num_matriz` int(11) DEFAULT NULL,
  `medicamentos` varchar(120) DEFAULT NULL,
  `vacinas` varchar(120) DEFAULT NULL,
  `data_cobertura` date DEFAULT NULL,
  `cod_matriz` int(11) DEFAULT NULL,
  `cod_cachaco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gestacao`
--

INSERT INTO `gestacao` (`cod_gestacao`, `num_matriz`, `medicamentos`, `vacinas`, `data_cobertura`, `cod_matriz`, `cod_cachaco`) VALUES
(1, 332334343, 'aa, aa ,aa', 'aaaa', '2022-11-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote`
--

CREATE TABLE `lote` (
  `peso_medio` float DEFAULT NULL,
  `num_matriz` int(11) DEFAULT NULL,
  `cod_lote` int(11) NOT NULL,
  `num_macho` int(11) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `num_lote` int(11) DEFAULT NULL,
  `num_femea` int(11) DEFAULT NULL,
  `cod_matriz` int(11) DEFAULT NULL,
  `cod_desmame` int(11) DEFAULT NULL,
  `cod_term` int(11) DEFAULT NULL,
  `mumificados` int(11) DEFAULT NULL,
  `vivos` int(11) DEFAULT NULL,
  `mortos` int(11) DEFAULT NULL,
  `codnamemed` int(11) DEFAULT NULL,
  `codnamevac` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote_cresc`
--

CREATE TABLE `lote_cresc` (
  `cod_lote` int(11) DEFAULT NULL,
  `cod_cresc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote_med`
--

CREATE TABLE `lote_med` (
  `cod_med` int(11) DEFAULT NULL,
  `cod_lote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote_vac`
--

CREATE TABLE `lote_vac` (
  `cod_vac` int(11) DEFAULT NULL,
  `cod_lote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz`
--

CREATE TABLE `matriz` (
  `raca` varchar(120) DEFAULT NULL,
  `cod_matriz` int(11) NOT NULL,
  `data_compra` date DEFAULT NULL,
  `cod_lote` int(11) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `num_mossa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matriz`
--

INSERT INTO `matriz` (`raca`, `cod_matriz`, `data_compra`, `cod_lote`, `data_nasc`, `num_mossa`) VALUES
('aaaaaa', 2, '2022-11-24', 23, '2022-11-16', 2232);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `nome` varchar(120) DEFAULT NULL,
  `num_lote` int(11) DEFAULT NULL,
  `data_validade` date DEFAULT NULL,
  `cod_medi` int(11) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `data_chegada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nomemed`
--

CREATE TABLE `nomemed` (
  `nomemed` varchar(100) NOT NULL,
  `codnamemed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nomevac`
--

CREATE TABLE `nomevac` (
  `nomevac` varchar(100) NOT NULL,
  `codnamevac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parto`
--

CREATE TABLE `parto` (
  `num_matriz` int(11) DEFAULT NULL,
  `num_parto` int(11) DEFAULT NULL,
  `data_parto` date DEFAULT NULL,
  `cod_parto` int(11) NOT NULL,
  `cod_lote` int(11) DEFAULT NULL,
  `cod_gestacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parto`
--

INSERT INTO `parto` (`num_matriz`, `num_parto`, `data_parto`, `cod_parto`, `cod_lote`, `cod_gestacao`) VALUES
(54, 5, '2022-11-22', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `terminacao`
--

CREATE TABLE `terminacao` (
  `cod_term` int(11) NOT NULL,
  `data_abate` date DEFAULT NULL,
  `peso_saida` float DEFAULT NULL,
  `peso_entrada` float DEFAULT NULL,
  `data_term` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome_usuario` varchar(150) DEFAULT NULL,
  `email` varchar(160) DEFAULT NULL,
  `senha` varchar(150) DEFAULT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome_usuario`, `email`, `senha`, `codigo`) VALUES
('vitor', 'vitor@gmail.com', '??<?c??????', 1),
('joao', 'j@gmail.com', '???D?A7?aNwv?', 2),
('joao', 'j@gmail.com', '???D?A7?aNwv?', 3),
('joao', 'j@gail.com', '???D?A7?aNwv?', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas`
--

CREATE TABLE `vacinas` (
  `nome` varchar(120) DEFAULT NULL,
  `data_validade` date DEFAULT NULL,
  `lote_vac` int(11) DEFAULT NULL,
  `cod_vac` int(11) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `data_chegada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vacinas`
--

INSERT INTO `vacinas` (`nome`, `data_validade`, `lote_vac`, `cod_vac`, `fabricante`, `data_chegada`) VALUES
('aaaaaaaaaaabbb', '0000-00-00', 2, 2, '3', '2022-11-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cachaco`
--
ALTER TABLE `cachaco`
  ADD PRIMARY KEY (`cod_cachaco`);

--
-- Indexes for table `cresc`
--
ALTER TABLE `cresc`
  ADD PRIMARY KEY (`cod_cresc`);

--
-- Indexes for table `desmame`
--
ALTER TABLE `desmame`
  ADD PRIMARY KEY (`cod_desmame`),
  ADD KEY `num_matriz` (`num_matriz`);

--
-- Indexes for table `gestacao`
--
ALTER TABLE `gestacao`
  ADD PRIMARY KEY (`cod_gestacao`),
  ADD KEY `cod_cachaco` (`cod_cachaco`),
  ADD KEY `cod_matriz` (`cod_matriz`);

--
-- Indexes for table `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`cod_lote`),
  ADD KEY `cod_desmame` (`cod_desmame`),
  ADD KEY `cod_matriz` (`cod_matriz`),
  ADD KEY `cod_term` (`cod_term`),
  ADD KEY `codnamevac` (`codnamevac`),
  ADD KEY `codnamemed` (`codnamemed`);

--
-- Indexes for table `lote_cresc`
--
ALTER TABLE `lote_cresc`
  ADD KEY `cod_lote` (`cod_lote`),
  ADD KEY `cod_cresc` (`cod_cresc`);

--
-- Indexes for table `lote_med`
--
ALTER TABLE `lote_med`
  ADD KEY `cod_med` (`cod_med`),
  ADD KEY `cod_lote` (`cod_lote`);

--
-- Indexes for table `lote_vac`
--
ALTER TABLE `lote_vac`
  ADD KEY `cod_vac` (`cod_vac`),
  ADD KEY `cod_lote` (`cod_lote`);

--
-- Indexes for table `matriz`
--
ALTER TABLE `matriz`
  ADD PRIMARY KEY (`cod_matriz`);

--
-- Indexes for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`cod_medi`);

--
-- Indexes for table `nomemed`
--
ALTER TABLE `nomemed`
  ADD PRIMARY KEY (`codnamemed`);

--
-- Indexes for table `nomevac`
--
ALTER TABLE `nomevac`
  ADD PRIMARY KEY (`codnamevac`);

--
-- Indexes for table `parto`
--
ALTER TABLE `parto`
  ADD PRIMARY KEY (`cod_parto`),
  ADD KEY `cod_lote` (`cod_lote`),
  ADD KEY `cod_gestacao` (`cod_gestacao`);

--
-- Indexes for table `terminacao`
--
ALTER TABLE `terminacao`
  ADD PRIMARY KEY (`cod_term`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `vacinas`
--
ALTER TABLE `vacinas`
  ADD PRIMARY KEY (`cod_vac`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cachaco`
--
ALTER TABLE `cachaco`
  MODIFY `cod_cachaco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cresc`
--
ALTER TABLE `cresc`
  MODIFY `cod_cresc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `desmame`
--
ALTER TABLE `desmame`
  MODIFY `cod_desmame` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gestacao`
--
ALTER TABLE `gestacao`
  MODIFY `cod_gestacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lote`
--
ALTER TABLE `lote`
  MODIFY `cod_lote` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matriz`
--
ALTER TABLE `matriz`
  MODIFY `cod_matriz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `cod_medi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nomemed`
--
ALTER TABLE `nomemed`
  MODIFY `codnamemed` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nomevac`
--
ALTER TABLE `nomevac`
  MODIFY `codnamevac` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parto`
--
ALTER TABLE `parto`
  MODIFY `cod_parto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `terminacao`
--
ALTER TABLE `terminacao`
  MODIFY `cod_term` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vacinas`
--
ALTER TABLE `vacinas`
  MODIFY `cod_vac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `desmame`
--
ALTER TABLE `desmame`
  ADD CONSTRAINT `desmame_ibfk_1` FOREIGN KEY (`num_matriz`) REFERENCES `matriz` (`cod_matriz`);

--
-- Limitadores para a tabela `gestacao`
--
ALTER TABLE `gestacao`
  ADD CONSTRAINT `gestacao_ibfk_1` FOREIGN KEY (`cod_cachaco`) REFERENCES `cachaco` (`cod_cachaco`),
  ADD CONSTRAINT `gestacao_ibfk_2` FOREIGN KEY (`cod_matriz`) REFERENCES `matriz` (`cod_matriz`);

--
-- Limitadores para a tabela `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`cod_desmame`) REFERENCES `desmame` (`cod_desmame`),
  ADD CONSTRAINT `lote_ibfk_2` FOREIGN KEY (`cod_matriz`) REFERENCES `matriz` (`cod_matriz`),
  ADD CONSTRAINT `lote_ibfk_3` FOREIGN KEY (`cod_term`) REFERENCES `terminacao` (`cod_term`),
  ADD CONSTRAINT `lote_ibfk_4` FOREIGN KEY (`codnamevac`) REFERENCES `nomevac` (`codnamevac`),
  ADD CONSTRAINT `lote_ibfk_5` FOREIGN KEY (`codnamevac`) REFERENCES `nomevac` (`codnamevac`),
  ADD CONSTRAINT `lote_ibfk_6` FOREIGN KEY (`codnamemed`) REFERENCES `nomemed` (`codnamemed`);

--
-- Limitadores para a tabela `lote_cresc`
--
ALTER TABLE `lote_cresc`
  ADD CONSTRAINT `lote_cresc_ibfk_1` FOREIGN KEY (`cod_lote`) REFERENCES `lote` (`cod_lote`),
  ADD CONSTRAINT `lote_cresc_ibfk_2` FOREIGN KEY (`cod_cresc`) REFERENCES `cresc` (`cod_cresc`);

--
-- Limitadores para a tabela `lote_med`
--
ALTER TABLE `lote_med`
  ADD CONSTRAINT `lote_med_ibfk_1` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_medi`),
  ADD CONSTRAINT `lote_med_ibfk_2` FOREIGN KEY (`cod_med`) REFERENCES `lote` (`cod_lote`),
  ADD CONSTRAINT `lote_med_ibfk_3` FOREIGN KEY (`cod_med`) REFERENCES `lote` (`cod_lote`),
  ADD CONSTRAINT `lote_med_ibfk_4` FOREIGN KEY (`cod_lote`) REFERENCES `lote` (`cod_lote`),
  ADD CONSTRAINT `lote_med_ibfk_5` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_medi`);

--
-- Limitadores para a tabela `lote_vac`
--
ALTER TABLE `lote_vac`
  ADD CONSTRAINT `lote_vac_ibfk_1` FOREIGN KEY (`cod_vac`) REFERENCES `vacinas` (`cod_vac`),
  ADD CONSTRAINT `lote_vac_ibfk_2` FOREIGN KEY (`cod_lote`) REFERENCES `lote` (`cod_lote`);

--
-- Limitadores para a tabela `parto`
--
ALTER TABLE `parto`
  ADD CONSTRAINT `parto_ibfk_1` FOREIGN KEY (`cod_lote`) REFERENCES `lote` (`cod_lote`),
  ADD CONSTRAINT `parto_ibfk_2` FOREIGN KEY (`cod_gestacao`) REFERENCES `gestacao` (`cod_gestacao`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
