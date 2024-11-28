-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2024 às 03:13
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `seguradora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `e0_usuario`
--

CREATE TABLE `e0_usuario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(140) DEFAULT NULL,
  `EMAIL` varchar(140) DEFAULT NULL,
  `SENHA` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `e0_usuario`
--

INSERT INTO `e0_usuario` (`ID`, `NOME`, `EMAIL`, `SENHA`) VALUES
(1, 'Administrador', 'administrador@teste.com', '8525');

-- --------------------------------------------------------

--
-- Estrutura da tabela `e1_cliente`
--

CREATE TABLE `e1_cliente` (
  `COD` int(11) NOT NULL,
  `NOME` varchar(30) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e2_veiculos`
--

CREATE TABLE `e2_veiculos` (
  `COD` int(11) NOT NULL,
  `PLACA` varchar(8) DEFAULT NULL,
  `RENAVAN` varchar(11) DEFAULT NULL,
  `FABRICANTE` varchar(15) DEFAULT NULL,
  `MODELO` varchar(15) DEFAULT NULL,
  `ANO` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `e3_ocorrencias`
--

CREATE TABLE `e3_ocorrencias` (
  `COD` int(11) NOT NULL,
  `COD_CLIENTE` int(11) NOT NULL,
  `COD_VEICULO` int(11) NOT NULL,
  `DATA_OCORRENCIA` date DEFAULT NULL,
  `LOCAL_OCORRENCIA` varchar(50) DEFAULT NULL,
  `DESCRICAO_OCORRENCIA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `e0_usuario`
--
ALTER TABLE `e0_usuario`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `e1_cliente`
--
ALTER TABLE `e1_cliente`
  ADD PRIMARY KEY (`COD`);

--
-- Índices para tabela `e2_veiculos`
--
ALTER TABLE `e2_veiculos`
  ADD PRIMARY KEY (`COD`);

--
-- Índices para tabela `e3_ocorrencias`
--
ALTER TABLE `e3_ocorrencias`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `COD_CLIENTE` (`COD_CLIENTE`),
  ADD KEY `COD_VEICULO` (`COD_VEICULO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `e0_usuario`
--
ALTER TABLE `e0_usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `e1_cliente`
--
ALTER TABLE `e1_cliente`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `e2_veiculos`
--
ALTER TABLE `e2_veiculos`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `e3_ocorrencias`
--
ALTER TABLE `e3_ocorrencias`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `e3_ocorrencias`
--
ALTER TABLE `e3_ocorrencias`
  ADD CONSTRAINT `e3_ocorrencias_ibfk_1` FOREIGN KEY (`COD_CLIENTE`) REFERENCES `e1_cliente` (`COD`),
  ADD CONSTRAINT `e3_ocorrencias_ibfk_2` FOREIGN KEY (`COD_VEICULO`) REFERENCES `e2_veiculos` (`COD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
