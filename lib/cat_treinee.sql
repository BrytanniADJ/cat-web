-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2024 às 18:29
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cat_treinee`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agente`
--

CREATE TABLE `agente` (
  `cod_agente` varchar(30) NOT NULL,
  `nome_agente` varchar(200) NOT NULL,
  `descricao_agente` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agente`
--

INSERT INTO `agente` (`cod_agente`, `nome_agente`, `descricao_agente`) VALUES
('', '', ''),
('1', 'dd', 'dfe'),
('30.20.70.100', 'Escavação', 'Para edifício, estrada, etc'),
('30.30.15.100', 'Talhadeira', 'Ferramenta portátil com força motriz ou aquecimento'),
('30.30.20.040', 'Serra', 'Máquina'),
('30.30.50.200', 'Caldeira', 'Sem descrição');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat`
--

CREATE TABLE `cat` (
  `cod_cat` int(11) NOT NULL,
  `emitente_cat` varchar(30) DEFAULT NULL,
  `data_emissao_cat` date DEFAULT NULL,
  `tipo_cat` varchar(10) DEFAULT NULL,
  `comunicacao_obito` varchar(5) DEFAULT NULL,
  `filiacao` varchar(50) DEFAULT NULL,
  `email_emitente` varchar(40) DEFAULT NULL,
  `nome_empresa` varchar(20) NOT NULL,
  `tipo_num_doc_empresa` varchar(14) NOT NULL,
  `cnae_empresa` varchar(12) NOT NULL,
  `telefone_empresa` varchar(20) NOT NULL,
  `cep_empresa` varchar(12) NOT NULL,
  `bairro_empresa` varchar(30) DEFAULT NULL,
  `estado_empresa` varchar(25) DEFAULT NULL,
  `endereco_empresa` varchar(30) DEFAULT NULL,
  `municipio_empresa` varchar(40) DEFAULT NULL,
  `nome_func` varchar(40) NOT NULL,
  `nome_mae_func` varchar(40) DEFAULT NULL,
  `data_nascimento_func` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `grau_instrucao_func` varchar(25) DEFAULT NULL,
  `identidade_func` varchar(15) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `ctps_func` varchar(30) NOT NULL,
  `remuneracao_func` varchar(20) NOT NULL,
  `pis_pasep_nit_func` varchar(20) DEFAULT NULL,
  `cep_func` varchar(15) NOT NULL,
  `endereco_func` varchar(40) DEFAULT NULL,
  `bairro_func` varchar(30) DEFAULT NULL,
  `municipio_func` varchar(40) DEFAULT NULL,
  `estado_func` varchar(25) DEFAULT NULL,
  `telefone_func` varchar(20) NOT NULL,
  `cbo_func` varchar(10) NOT NULL,
  `aposentadoria_func` varchar(15) DEFAULT NULL,
  `area_func` varchar(40) NOT NULL,
  `data_acidente` date DEFAULT NULL,
  `hora_acidente` varchar(10) DEFAULT NULL,
  `horas_trabalhadas` varchar(10) DEFAULT NULL,
  `tipo_acidente` varchar(50) DEFAULT NULL,
  `afastamento` varchar(5) DEFAULT NULL,
  `reg_policial` varchar(7) DEFAULT NULL,
  `local_acidente` varchar(40) DEFAULT NULL,
  `esp_local` varchar(30) DEFAULT NULL,
  `cnpj_cgc_empresa` varchar(18) DEFAULT NULL,
  `uf_acidente` varchar(40) DEFAULT NULL,
  `municipio_acidente` varchar(30) DEFAULT NULL,
  `ult_dia_trab_dt_obt` varchar(10) DEFAULT NULL,
  `parte_corpo` varchar(255) DEFAULT NULL,
  `agente_causador` varchar(150) DEFAULT NULL,
  `sit_geradora` varchar(255) DEFAULT NULL,
  `morte` varchar(5) DEFAULT NULL,
  `data_obito` date DEFAULT NULL,
  `unidade` varchar(100) DEFAULT NULL,
  `data_atendimento_medico` date DEFAULT NULL,
  `hora_atendimento_medico` varchar(10) DEFAULT NULL,
  `houve_internacao` varchar(5) DEFAULT NULL,
  `afastado` varchar(5) DEFAULT NULL,
  `nat_lesao` varchar(255) DEFAULT NULL,
  `cid` varchar(10) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `crm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cat`
--

INSERT INTO `cat` (`cod_cat`, `emitente_cat`, `data_emissao_cat`, `tipo_cat`, `comunicacao_obito`, `filiacao`, `email_emitente`, `nome_empresa`, `tipo_num_doc_empresa`, `cnae_empresa`, `telefone_empresa`, `cep_empresa`, `bairro_empresa`, `estado_empresa`, `endereco_empresa`, `municipio_empresa`, `nome_func`, `nome_mae_func`, `data_nascimento_func`, `sexo`, `grau_instrucao_func`, `identidade_func`, `estado_civil`, `ctps_func`, `remuneracao_func`, `pis_pasep_nit_func`, `cep_func`, `endereco_func`, `bairro_func`, `municipio_func`, `estado_func`, `telefone_func`, `cbo_func`, `aposentadoria_func`, `area_func`, `data_acidente`, `hora_acidente`, `horas_trabalhadas`, `tipo_acidente`, `afastamento`, `reg_policial`, `local_acidente`, `esp_local`, `cnpj_cgc_empresa`, `uf_acidente`, `municipio_acidente`, `ult_dia_trab_dt_obt`, `parte_corpo`, `agente_causador`, `sit_geradora`, `morte`, `data_obito`, `unidade`, `data_atendimento_medico`, `hora_atendimento_medico`, `houve_internacao`, `afastado`, `nat_lesao`, `cid`, `observacao`, `crm`) VALUES
(1, 'Maria Eduarda', '2024-09-02', 'INICIAL', 'SIM', 'Natura', 'dudafernandes@gmail.com', 'Natura', '21516514-51', '51-2/10', '(31)99797-9688', '35702-195', 'Rua coelho neto 928', 'JK', 'Sete Lagoas', 'MG', 'Maria Eduarda', 'Sil', '2007-03-16', 'FEMININO', 'Ensino medio', 'VIÚVO(A)', '25121211412', '6541515312', '25.000', '3241412515524-1', '35702-195', 'Rua coelho neto 928', 'JK', 'Sete lagoas', 'AC', '(31)99797-9688', '545641', 'SIM', 'Vendedora', '2024-09-02', '16:08', '5613', 'Grave', 'SIM', 'SIM', 'Casa', 'Rua', '512211', '5415214', 'Sete lagoas', '20240209', 'Braço', 'Clara', '52121', 'SIM', '2024-09-02', 'Hospital', '2024-02-09', '16:09', 'SIM', 'SIM', '2123', '5132', 'Nenhuma', '42123132');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cid`
--

CREATE TABLE `cid` (
  `cod_cid` varchar(30) NOT NULL,
  `descricao_cid` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cid`
--

INSERT INTO `cid` (`cod_cid`, `descricao_cid`) VALUES
('1', 'dvdvgd hsa'),
('500', 'maria clara'),
('501', 'maria eduarda'),
('A00.0', 'Cólera devida a Vibrio cholerae 01, biótipo cholerae'),
('A00.9', 'Cólera não especificada'),
('A03.8', 'Shiguelose não especificada'),
('A96.0', 'Febre amarela urbana'),
('A98.4', 'Doença do vírus Ebola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cod_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(20) NOT NULL,
  `tipo_num_doc_empresa` varchar(14) NOT NULL,
  `cnpj_empresa` varchar(20) NOT NULL,
  `cnae_empresa` varchar(12) NOT NULL,
  `cep_empresa` varchar(12) NOT NULL,
  `endereco_empresa` varchar(30) DEFAULT NULL,
  `bairro_empresa` varchar(30) DEFAULT NULL,
  `municipio_empresa` varchar(40) DEFAULT NULL,
  `estado_empresa` varchar(25) DEFAULT NULL,
  `telefone_empresa` varchar(20) NOT NULL,
  `email_empresa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`cod_empresa`, `nome_empresa`, `tipo_num_doc_empresa`, `cnpj_empresa`, `cnae_empresa`, `cep_empresa`, `endereco_empresa`, `bairro_empresa`, `municipio_empresa`, `estado_empresa`, `telefone_empresa`, `email_empresa`) VALUES
(1, 'link 7', '61773839-39', '../-', '7168-2/89', '63773-838', 'fahhs', '', '', 'AC', '()-', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_funcionario` int(11) NOT NULL,
  `cod_empresa` int(11) DEFAULT NULL,
  `nome_func` varchar(40) NOT NULL,
  `nome_mae_func` varchar(40) DEFAULT NULL,
  `data_nascimento_func` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `remuneracao_func` varchar(20) NOT NULL,
  `ctps_func` varchar(30) NOT NULL,
  `identidade_func` varchar(15) NOT NULL,
  `pis_pasep_nit_func` varchar(20) DEFAULT NULL,
  `cep_func` varchar(15) NOT NULL,
  `endereco_func` varchar(40) DEFAULT NULL,
  `bairro_func` varchar(30) DEFAULT NULL,
  `estado_func` varchar(25) DEFAULT NULL,
  `municipio_func` varchar(40) DEFAULT NULL,
  `telefone_func` varchar(20) NOT NULL,
  `cbo_func` varchar(10) NOT NULL,
  `aposentadoria_func` varchar(15) DEFAULT NULL,
  `area_func` varchar(40) NOT NULL,
  `ra_func` varchar(8) NOT NULL,
  `cpf_func` varchar(15) NOT NULL,
  `email_func` varchar(40) NOT NULL,
  `grau_instrucao_func` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `cod_empresa`, `nome_func`, `nome_mae_func`, `data_nascimento_func`, `sexo`, `estado_civil`, `remuneracao_func`, `ctps_func`, `identidade_func`, `pis_pasep_nit_func`, `cep_func`, `endereco_func`, `bairro_func`, `estado_func`, `municipio_func`, `telefone_func`, `cbo_func`, `aposentadoria_func`, `area_func`, `ra_func`, `cpf_func`, `email_func`, `grau_instrucao_func`) VALUES
(1, 1, 'clara', 'elieide', '2007-03-14', 'MASCULINO', 'SOLTEIRO(A)', 'hyuy', 'ikikki', 'ujh', '6363525265525-12', '55665-556', 'hjh', 'hhj', 'AC', 'hh', '(66)65563-5252', 'jjj', 'sim', 'kjkkik', '964056', '106.864.156-80', 'hhjhj', 'EDUCAÇÃO BÁSICA'),
(5, 2, 'gvd', 'sd', '2010-02-21', 'MASCULINO', 'SOLTEIRO(A)', 'nh', 'gj', 'ccfs', '6332366336525-25', '54525-255', 'jhj', 'nhjk', 'AC', 'juhu', '(63)63525-2663', 'juh', 'sim', 'hbuj', '552665', '558.415.264-14', 'bgj', 'EDUCAÇÃO BÁSICA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lesao`
--

CREATE TABLE `lesao` (
  `cod_lesao` varchar(30) NOT NULL,
  `descricao_lesao` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lesao`
--

INSERT INTO `lesao` (`cod_lesao`, `descricao_lesao`) VALUES
('', ''),
('1', 'cde ha'),
('702010000', 'Corte, Laceração, ferida contusa, ounctura(ferida aberta)'),
('702030000', 'Luxação'),
('702060000', 'Choque elétrico e eletroplessão(eletrocussão)'),
('702080000', 'Concussão cerebral'),
('706050000', 'Lesões múltiplas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `cod_medico` int(11) NOT NULL,
  `nome_medico` varchar(40) NOT NULL,
  `cpf_medico` varchar(15) NOT NULL,
  `email_medico` varchar(40) NOT NULL,
  `especialidade_medico` varchar(40) NOT NULL,
  `crm_medico` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`cod_medico`, `nome_medico`, `cpf_medico`, `email_medico`, `especialidade_medico`, `crm_medico`) VALUES
(1, 'maria', '111.111.111-11', 'clara@gmail', 'clinico geral', '11111');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agente`
--
ALTER TABLE `agente`
  ADD PRIMARY KEY (`cod_agente`);

--
-- Índices para tabela `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cod_cat`);

--
-- Índices para tabela `cid`
--
ALTER TABLE `cid`
  ADD PRIMARY KEY (`cod_cid`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod_empresa`),
  ADD UNIQUE KEY `cod_empresa` (`cod_empresa`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_funcionario`),
  ADD UNIQUE KEY `cod_funcionario` (`cod_funcionario`),
  ADD UNIQUE KEY `ra_func` (`ra_func`),
  ADD UNIQUE KEY `cpf_func` (`cpf_func`);

--
-- Índices para tabela `lesao`
--
ALTER TABLE `lesao`
  ADD PRIMARY KEY (`cod_lesao`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`cod_medico`),
  ADD UNIQUE KEY `cod_medico` (`cod_medico`),
  ADD UNIQUE KEY `crm_medico` (`crm_medico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cat`
--
ALTER TABLE `cat`
  MODIFY `cod_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
