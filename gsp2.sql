-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2019 às 22:23
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
-- Database: `gsp2`
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
(1, 2, '2019-06-11'),
(2, 0, '0000-00-00');

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
(1, 'CafetÃ£o', '00:00:45', 4434),
(2, 'Miliciano', '00:00:00', 30000),
(3, 'Miliciano', '00:00:45', 30000);

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
(1, 'Fulano', 3213123);

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

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `produto`, `fornecedor`, `quantidade`, `valor`) VALUES
(1, 1, 3, 231, 4324);

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
(1, 'Rua Bolsonaro Filho', 123, '323', 'Grajau', 'Juiz de Fora', 'MG', 3232322);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `gerente` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT '0',
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `gerente`, `item`, `produto`, `quantidade`) VALUES
(2, 0, NULL, 1, 32),
(3, 2, NULL, 1, 32);

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
(3, 'BolsoLicia', 2147483647, 1, 1),
(4, 'EEee', 21312321, 1, 1);

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
(1, 'Flávio Bolsonaro', 123124332, 1, 1, 2, 1),
(2, 'Sergio Moro', 13123123, 1, 1, 1, 1),
(4, 'sdasda', 2312312, 1, 1, 1, 0),
(5, '', 0, 1, 1, 1, 2),
(6, 'Flavio', 1321312, 1, 1, 2, 2);

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
(1, 4, '2019-06-19', 1),
(2, 32, '2019-07-01', 2);

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
(1, '0', 3, 2131),
(2, 'Chapeu', 3, 232);

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
(1, 'Grande Promocao  ', 2, '2019-04-23', '2019-06-30');

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
(1, 747.93, 'B', 321, 0.33, 321),
(2, 790, 'C', 120, 0.33, 1000),
(3, 760, 'D', 100, 0.34, 1000);

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
(2, 1, 'muito lindo'),
(3, 2, 'legal');

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
(2, 32, 32432423),
(3, 32, 999181717);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `codigo` int(8) NOT NULL DEFAULT '0',
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
(1, 0, '2019-06-19', 232, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `caixaFuncionario` (`funcionario`);

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
  ADD KEY `estoqueProduto` (`produto`);

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
-- Indexes for table `setor`
--
ALTER TABLE `setor`
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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `remuneracao`
--
ALTER TABLE `remuneracao`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salario`
--
ALTER TABLE `salario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compraFornecedor` FOREIGN KEY (`fornecedor`) REFERENCES `fornecedor` (`id`),
  ADD CONSTRAINT `compraProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoqueProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `endereco` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`id`),
  ADD CONSTRAINT `telefone` FOREIGN KEY (`telefone`) REFERENCES `telefone` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionarioCargo` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id`),
  ADD CONSTRAINT `funcionarioEndereco` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`id`),
  ADD CONSTRAINT `funcionarioTelefone` FOREIGN KEY (`telefone`) REFERENCES `telefone` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produtoFornecedor` FOREIGN KEY (`fornecedor`) REFERENCES `fornecedor` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Limitadores para a tabela `promocao`
--
ALTER TABLE `promocao`
  ADD CONSTRAINT `promocaoProduto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Limitadores para a tabela `remuneracao`
--
ALTER TABLE `remuneracao`
  ADD CONSTRAINT `remuneracaoCargo` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id`),
  ADD CONSTRAINT `remuneracaoSalario` FOREIGN KEY (`salario`) REFERENCES `salario` (`id`);
  ON UPDATE CASCADE ON DELETE CASCADE;

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
