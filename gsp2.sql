-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2019 às 04:17
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gsp2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(4) NOT NULL,
  `funcionario` int(5) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `funcionario`, `data`) VALUES
(1, 1, '2019-06-01'),
(2, 2, '2019-06-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `horas` time NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`, `horas`, `salario`) VALUES
(1, 'cargo_1', '40:00:00', 1),
(2, 'cargo_2', '40:00:00', 2),
(3, 'cargo_3', '40:00:00', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(49) NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`) VALUES
(1, 'cliente_1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(4) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(8) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`) VALUES
(1, 'rua_1', 1, '1', 'bairro_1', 'cidade_1', '1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `gerente` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT 0,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `gerente`, `item`, `produto`, `quantidade`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(4) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cnpj` int(20) NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `cnpj`, `telefone`, `endereco`) VALUES
(1, 'fornecedor_1', 1, 1, 1),
(2, 'fornecedor_2', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(5) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(4) NOT NULL,
  `endereco` int(4) NOT NULL,
  `cargo` int(4) NOT NULL,
  `setor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `cargo`, `setor`) VALUES
(1, 'funcionario_1', 1, 1, 1, 1, 1),
(2, 'funcionario_2', 2, 2, 2, 2, 2),
(3, 'funcionario_3', 3, 3, 3, 3, 3),
(4, 'funcionario_4', 4, 4, 4, 4, 4),
(5, 'funcionario_5', 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `validade` date NOT NULL,
  `produto` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id`, `quantidade`, `validade`, `produto`) VALUES
(1, 1, '2019-06-01', 1),
(2, 2, '2019-07-02', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(11) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fornecedor`, `preco`) VALUES
(1, 'produto_1', 1, 1),
(2, 'produto_2', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE `promocao` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `produto` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `fim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `promocao`
--

INSERT INTO `promocao` (`id`, `nome`, `produto`, `inicio`, `fim`) VALUES
(1, 'promocao_1', 1, '2019-06-01', '2019-06-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `remuneracao`
--

CREATE TABLE `remuneracao` (
  `id` int(4) NOT NULL,
  `data` date NOT NULL,
  `cargo` int(4) NOT NULL,
  `salario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salario`
--

CREATE TABLE `salario` (
  `id` int(4) NOT NULL,
  `valor` float NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `gratificacao` float NOT NULL,
  `deducaoIRPF` float NOT NULL,
  `valorBruto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salario`
--

INSERT INTO `salario` (`id`, `valor`, `categoria`, `gratificacao`, `deducaoIRPF`, `valorBruto`) VALUES
(1, 1, 'A', 1, 1, 1),
(2, 2, 'B', 2, 2, 2),
(3, 3, 'C', 3, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id` int(4) NOT NULL,
  `coordenador` int(4) NOT NULL,
  `descricao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `coordenador`, `descricao`) VALUES
(1, 1, 'nome_1'),
(2, 2, 'nome_2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id` int(4) NOT NULL,
  `ddd` int(5) NOT NULL,
  `numero` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`id`, `ddd`, `numero`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `codigo` int(8) NOT NULL DEFAULT 0,
  `data` date NOT NULL,
  `valor` float NOT NULL,
  `item` int(8) NOT NULL,
  `caixa` int(4) NOT NULL,
  `cliente` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `codigo`, `data`, `valor`, `item`, `caixa`, `cliente`) VALUES
(1, 1, '2019-06-01', 1, 1, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `caixaFuncionario` (`funcionario`);

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salario` (`salario`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`,`cpf`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornecedor` (`fornecedor`),
  ADD KEY `produto` (`produto`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estoqueProduto` (`produto`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `telefone` (`telefone`) USING BTREE;

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `telefone` (`telefone`) USING BTREE,
  ADD KEY `funcionarioCargo` (`cargo`);

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornecedor` (`fornecedor`);

--
-- Índices para tabela `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promocaoProduto` (`produto`);

--
-- Índices para tabela `remuneracao`
--
ALTER TABLE `remuneracao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `salario` (`salario`) USING BTREE;

--
-- Índices para tabela `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item` (`item`),
  ADD KEY `caixa` (`caixa`),
  ADD KEY `cliente` (`cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `remuneracao`
--
ALTER TABLE `remuneracao`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `salario`
--
ALTER TABLE `salario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compraFornecedor` FOREIGN KEY (`fornecedor`) REFERENCES `fornecedor` (`id`),
  ADD CONSTRAINT `compraProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoqueProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
