-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jun-2019 às 20:40
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsp`
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
(1, 0, '0000-00-00'),
(2, 0, '2019-06-03'),
(3, 0, '2019-06-03'),
(4, 2, '2019-06-04'),
(5, 2, '2019-06-04');

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
(1, 'caixa', '00:00:40', 1200),
(2, 'gerente', '00:00:40', 0),
(3, 'CafetÃ£o', '00:00:40', 4324),
(4, 'CafetÃ£o', '00:00:40', 4324);

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
(1, 'Fulano', 312312312),
(2, 'Fulanao', 12321321),
(3, 'Fulanao', 12321321);

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
  `cep` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`) VALUES
(1, 'Rua das Flores', 203, '', 'Granjamaica', 'JF', 'MG', '365254'),
(2, 'Coronel Bolsonaro', 123, '1312', 'jamaica', 'JF', 'BA', '3213123'),
(3, 'Coronel Bolsonaro', 123, '1312', 'jamaica', 'JF', 'BA', '3213123'),
(4, 'Coronel Bolsonaro', 123, '1312', 'jamaica', 'JF', 'BA', '3213123'),
(5, 'Coronel Bolsonaro', 123, '1312', 'jamaica', 'JF', 'BA', '3213123'),
(6, 'ewqe', 123, 'asd', 'dasds', 'asds', 'AM', '1231231'),
(7, 'ewqe', 123, 'asd', 'dasds', 'asds', 'AM', '1231231'),
(8, 'ewqe', 123, 'asd', 'dasds', 'asds', 'AM', '1231231'),
(9, 'ewqe', 123, 'asd', 'dasds', 'asds', 'AM', '1231231'),
(10, 'sdqdsaasdas', 12312, 'asdas', 'sadsa', 'asddas', 'BA', '4151515');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `gerente` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'jdjdjd', 321321312, 1, 1),
(5, 'jdjdjd', 321321312, 1, 1);

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
(2, 'PEdro', 23123123, 2, 3, 2, 2);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fornecedor`, `preco`) VALUES
(1, '0', 4, 232);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--
-- Error reading structure for table gsp.setor: #1932 - Table 'gsp.setor' doesn't exist in engine
-- Error reading data for table gsp.setor: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `gsp`.`setor`' na linha 1

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
(1, 32, 32432423),
(2, 32, 32432423);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `codigo` int(8) NOT NULL DEFAULT '0',
  `data` date NOT NULL,
  `valor` float NOT NULL,
  `item` int(8) NOT NULL,
  `caixa` int(4) NOT NULL,
  `cliente` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salario` (`salario`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`,`cpf`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornecedor` (`fornecedor`),
  ADD KEY `produto` (`produto`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estoqueProduto` (`produto`),
  ADD KEY `estoqueGerente` (`gerente`),
  ADD KEY `estoqueItem` (`item`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `telefone` (`telefone`) USING BTREE;

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco` (`endereco`),
  ADD KEY `telefone` (`telefone`) USING BTREE,
  ADD KEY `funcionarioCargo` (`cargo`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornecedor` (`fornecedor`);

--
-- Indexes for table `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promocaoProduto` (`produto`);

--
-- Indexes for table `remuneracao`
--
ALTER TABLE `remuneracao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `salario` (`salario`) USING BTREE;

--
-- Indexes for table `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `item` (`item`),
  ADD KEY `caixa` (`caixa`),
  ADD KEY `cliente` (`cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remuneracao`
--
ALTER TABLE `remuneracao`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salario`
--
ALTER TABLE `salario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
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
  ADD CONSTRAINT `estoqueGerente` FOREIGN KEY (`gerente`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `estoqueItem` FOREIGN KEY (`item`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `estoqueProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `endereco` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`id`),
  ADD CONSTRAINT `telefone` FOREIGN KEY (`telefone`) REFERENCES `telefone` (`id`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionarioCargo` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id`),
  ADD CONSTRAINT `funcionarioEndereco` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`id`),
  ADD CONSTRAINT `funcionarioSetor` FOREIGN KEY (`setor`) REFERENCES `setor` (`id`),
  ADD CONSTRAINT `funcionarioTelefone` FOREIGN KEY (`telefone`) REFERENCES `telefone` (`id`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produtoFornecedor` FOREIGN KEY (`fornecedor`) REFERENCES `fornecedor` (`id`);

--
-- Limitadores para a tabela `promocao`
--
ALTER TABLE `promocao`
  ADD CONSTRAINT `promocaoProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `remuneracao`
--
ALTER TABLE `remuneracao`
  ADD CONSTRAINT `remuneracaoCargo` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id`),
  ADD CONSTRAINT `remuneracaoSalario` FOREIGN KEY (`salario`) REFERENCES `salario` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `vendaCaixa` FOREIGN KEY (`caixa`) REFERENCES `caixa` (`id`),
  ADD CONSTRAINT `vendaCliente` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `vendaItem` FOREIGN KEY (`item`) REFERENCES `item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
