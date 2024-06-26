
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Banco de dados: `seguradora`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `e0_usuario`
--

CREATE TABLE `e0_usuario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(140) DEFAULT NULL,
  `EMAIL` varchar(140) DEFAULT NULL,
  `SENHA` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `e1_cliente`
--

CREATE TABLE `e1_cliente` (
  `COD` int(3) NOT NULL,
  `NOME` varchar(30) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(10) DEFAULT NULL,
  `TEL` varchar(9) DEFAULT NULL,
  `FK_END_END_PK` int(3) DEFAULT NULL,
  `FK_E2_VEICULOS_COD` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `e2_veiculos`
--

CREATE TABLE `e2_veiculos` (
  `COD` int(3) NOT NULL,
  `PLACA` varchar(8) DEFAULT NULL,
  `RENAVAN` varchar(11) DEFAULT NULL,
  `FABRICANTE` varchar(15) DEFAULT NULL,
  `MODELO` varchar(15) DEFAULT NULL,
  `ANO` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `e3_ocorrencias`
--

CREATE TABLE `e3_ocorrencias` (
  `NR_OCOR` int(3) NOT NULL,
  `DATA` date DEFAULT NULL,
  `LOCAL` varchar(50) DEFAULT NULL,
  `DESCR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `end`
--

CREATE TABLE `end` (
  `END_PK` int(3) NOT NULL,
  `BAIRRO` varchar(50) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `LOGRADOURO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `possui`
--

CREATE TABLE `possui` (
  `FK_E3_OCORRENCIAS_NR_OCOR` int(3) DEFAULT NULL,
  `FK_E2_VEICULOS_COD` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `e0_usuario`
--
ALTER TABLE `e0_usuario`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `e1_cliente`
--
ALTER TABLE `e1_cliente`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `FK_E1_CLIENTE_2` (`FK_END_END_PK`),
  ADD KEY `FK_E1_CLIENTE_3` (`FK_E2_VEICULOS_COD`);

--
-- Índices de tabela `e2_veiculos`
--
ALTER TABLE `e2_veiculos`
  ADD PRIMARY KEY (`COD`);

--
-- Índices de tabela `e3_ocorrencias`
--
ALTER TABLE `e3_ocorrencias`
  ADD PRIMARY KEY (`NR_OCOR`);

--
-- Índices de tabela `end`
--
ALTER TABLE `end`
  ADD PRIMARY KEY (`END_PK`);

--
-- Índices de tabela `possui`
--
ALTER TABLE `possui`
  ADD KEY `FK_POSSUI_1` (`FK_E3_OCORRENCIAS_NR_OCOR`),
  ADD KEY `FK_POSSUI_2` (`FK_E2_VEICULOS_COD`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `e0_usuario`
--
ALTER TABLE `e0_usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `e1_cliente`
--
ALTER TABLE `e1_cliente`
  ADD CONSTRAINT `FK_E1_CLIENTE_2` FOREIGN KEY (`FK_END_END_PK`) REFERENCES `end` (`END_PK`) ON DELETE NO ACTION,
  ADD CONSTRAINT `FK_E1_CLIENTE_3` FOREIGN KEY (`FK_E2_VEICULOS_COD`) REFERENCES `e2_veiculos` (`COD`);

--
-- Restrições para tabelas `possui`
--
ALTER TABLE `possui`
  ADD CONSTRAINT `FK_POSSUI_1` FOREIGN KEY (`FK_E3_OCORRENCIAS_NR_OCOR`) REFERENCES `e3_ocorrencias` (`NR_OCOR`),
  ADD CONSTRAINT `FK_POSSUI_2` FOREIGN KEY (`FK_E2_VEICULOS_COD`) REFERENCES `e2_veiculos` (`COD`);
COMMIT;

