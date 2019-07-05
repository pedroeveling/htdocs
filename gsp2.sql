-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2019 às 04:54
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
(1, 'cliente_1', 1),
(2, 'Leslie Y. Dunn', 2),
(3, 'Jaquelyn X. Berg', 3),
(4, 'Isabelle C. Stuart', 4),
(5, 'Vernon K. Petersen', 5),
(6, 'Ocean T. Hamilton', 6),
(7, 'Leah H. Benjamin', 7),
(8, 'Lisandra S. Gibbs', 8),
(9, 'Hakeem D. Baxter', 9),
(10, 'Amber U. Odonnell', 10),
(11, 'Sharon Q. Woods', 11),
(12, 'Uriah I. Norris', 12),
(13, 'Catherine I. Sampson', 13),
(14, 'Indigo X. Estes', 14),
(15, 'Shelly O. Mejia', 15),
(16, 'Yolanda D. Mcguire', 16),
(17, 'Nathan Q. Meadows', 17),
(18, 'Xavier V. Reeves', 18),
(19, 'Darrel B. Williamson', 19),
(20, 'Wynter E. Whitfield', 20),
(21, 'Yasir I. Harper', 21),
(22, 'Josiah A. Pollard', 22),
(23, 'Cameron P. Brewer', 23),
(24, 'Oliver E. Gill', 24),
(25, 'Courtney W. Lewis', 25),
(26, 'Steel N. Sargent', 26),
(27, 'Yoshio G. Hughes', 27),
(28, 'Willa C. Glover', 28),
(29, 'Emery T. Conner', 29),
(30, 'Yeo R. Marshall', 30),
(31, 'Lester B. Schwartz', 31),
(32, 'Akeem W. Shelton', 32),
(33, 'Angelica B. Casey', 33),
(34, 'Jonas Z. Hess', 34),
(35, 'Levi J. Mueller', 35),
(36, 'Audrey S. Hurley', 36),
(37, 'Cora D. Bradshaw', 37),
(38, 'Rigel S. Goff', 38),
(39, 'Eve D. Norton', 39),
(40, 'Zane A. Sutton', 40),
(41, 'Coby D. Hartman', 41),
(42, 'Lionel J. Rhodes', 42),
(43, 'Kareem C. Cash', 43),
(44, 'Aubrey Y. Huffman', 44),
(45, 'Merrill W. Shaw', 45),
(46, 'Aphrodite G. Avila', 46),
(47, 'Carl S. James', 47),
(48, 'Judith H. Travis', 48),
(49, 'Arsenio N. Sparks', 49),
(50, 'Clayton I. Day', 50),
(51, 'Ross L. Bradshaw', 51),
(52, 'Hilary A. Lang', 52),
(53, 'Nathan B. Douglas', 53),
(54, 'Melanie U. Velez', 54),
(55, 'Xena V. Perry', 55),
(56, 'Rose D. Shelton', 56),
(57, 'Jescie E. Copeland', 57),
(58, 'Josiah P. Mcintyre', 58),
(59, 'Quinn O. Key', 59),
(60, 'Hunter D. Navarro', 60),
(61, 'Brady N. Franco', 61),
(62, 'Echo K. Leonard', 62),
(63, 'Myra Z. Gaines', 63),
(64, 'Janna P. Garner', 64),
(65, 'Veronica G. Underwood', 65),
(66, 'Molly F. Kidd', 66),
(67, 'Constance T. Rogers', 67),
(68, 'Fritz H. Christian', 68),
(69, 'Giselle L. Johnston', 69),
(70, 'William M. Delaney', 70),
(71, 'Emerald M. Ramsey', 71),
(72, 'Amery V. Adkins', 72),
(73, 'Fulton O. Knowles', 73),
(74, 'Orlando B. Wood', 74),
(75, 'Hunter U. Yates', 75),
(76, 'Linus T. Aguilar', 76),
(77, 'Gareth H. Fleming', 77),
(78, 'Lance Y. Buchanan', 78),
(79, 'Gretchen V. Swanson', 79),
(80, 'Rowan R. Oneill', 80),
(81, 'Thomas A. Workman', 81),
(82, 'Walter O. Anthony', 82),
(83, 'Hu P. Hernandez', 83),
(84, 'Reed K. Ruiz', 84),
(85, 'Miranda I. Talley', 85),
(86, 'Damian K. Crane', 86),
(87, 'Aidan T. Mason', 87),
(88, 'Hunter K. Buckley', 88),
(89, 'Ciaran O. Estrada', 89),
(90, 'Keegan H. Evans', 90),
(91, 'Garrison I. Craig', 91),
(92, 'Phelan O. Kelley', 92),
(93, 'Sydnee Y. Patterson', 93),
(94, 'Kay E. Knight', 94),
(95, 'Tatum L. Walls', 95),
(96, 'Chantale G. Clayton', 96),
(97, 'Fatima Y. Cervantes', 97),
(98, 'Berk F. Hyde', 98),
(99, 'Fitzgerald A. Key', 99),
(100, 'Neville T. Sanchez', 100),
(101, 'Tanisha P. Christensen', 101);

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
(1, 'rua_1', 1, '1', 'bairro_1', 'cidade_1', '1', 1),
(2, '570 Ut Road', 0, '', '', 'Guarulhos', 'SP', 13218),
(3, 'Ap #108-4710 Mauris Rd.', 0, '', '', 'Petrolina', 'Pe', 51904),
(4, '4554 Est Avenue', 0, '', '', 'Guarulhos', 'SP', 18037),
(5, '450-9480 Mi Rd.', 0, '', '', 'Belém', 'Pa', 66140),
(6, 'Ap #149-9344 Mauris Ave', 0, '', '', 'Vitória da Conquista', 'BA', 47905),
(7, '188-6746 Pellentesque Street', 0, '', '', 'Camaragibe', 'PE', 51185),
(8, '7939 Lectus Road', 0, '', '', 'Belém', 'PA', 67336),
(9, '951-8644 Mi Rd.', 0, '', '', 'Ilhéus', 'Ba', 41446),
(10, '101-2456 Nisl Av.', 0, '', '', 'Santarém', 'PA', 67637),
(11, '7029 Nec Road', 0, '', '', 'Mogi das Cruzes', 'SP', 15123),
(12, '631-3430 Sem Ave', 0, '', '', 'São João de Meriti', 'RJ', 25752),
(13, '3718 Fusce St.', 0, '', '', 'Mogi das Cruzes', 'Sã', 12317),
(14, 'Ap #103-9485 Pharetra Ave', 0, '', '', 'Pelotas', 'RS', 96759),
(15, 'Ap #112-5605 Lobortis Rd.', 0, '', '', 'Carapicuíba', 'SP', 14846),
(16, '687-6995 Ullamcorper Road', 0, '', '', 'Itabuna', 'Ba', 48167),
(17, 'Ap #978-8944 Nec Rd.', 0, '', '', 'Santa Rita', 'Pa', 58635),
(18, '875-3664 Vulputate Av.', 0, '', '', 'Porto Alegre', 'RS', 95409),
(19, '5868 Ante, Rd.', 0, '', '', 'Jundiaí', 'Sã', 15825),
(20, '366 Diam. Rd.', 0, '', '', 'Uberaba', 'MG', 31339295),
(21, '536-8940 Dui, St.', 0, '', '', 'Crato', 'CE', 61098),
(22, 'Ap #468-4409 Enim. Rd.', 0, '', '', 'Caruaru', 'PE', 51172),
(23, '205-7197 Malesuada St.', 0, '', '', 'Guarulhos', 'SP', 15679),
(24, 'Ap #716-1778 Sed Rd.', 0, '', '', 'Mauá', 'Sã', 15246),
(25, '1624 Gravida St.', 0, '', '', 'Sobral', 'Ce', 61896),
(26, '494-6513 Fringilla Ave', 0, '', '', 'Rio Verde', 'Go', 75730),
(27, '368 Auctor Avenue', 0, '', '', 'Itabuna', 'BA', 46916),
(28, '816-4700 Mi Avenue', 0, '', '', 'Olinda', 'Pe', 51694),
(29, 'Ap #626-2183 Erat Road', 0, '', '', 'Mogi das Cruzes', 'SP', 13616),
(30, 'Ap #171-2098 Ornare. Av.', 0, '', '', 'Recife', 'Pe', 52570),
(31, '7926 Ut, Road', 0, '', '', 'Juazeiro do Norte', 'Ce', 63213),
(32, 'P.O. Box 173, 5473 Dui St.', 0, '', '', 'Santa Maria', 'RS', 94859),
(33, 'Ap #566-7198 Erat. Avenue', 0, '', '', 'Juazeiro do Norte', 'Ce', 61333),
(34, '320-6419 Egestas. Rd.', 0, '', '', 'Uberlândia', 'Mi', 30769373),
(35, 'P.O. Box 242, 679 Amet St.', 0, '', '', 'Juiz de Fora', 'Mi', 33882052),
(36, '8167 Nunc Street', 0, '', '', 'Maracanaú', 'Ce', 60419),
(37, '433-2064 Nec Av.', 0, '', '', 'Petrolina', 'Pe', 54879),
(38, '4566 Et, Av.', 0, '', '', 'Belém', 'PA', 66815),
(39, 'Ap #977-7243 Ac St.', 0, '', '', 'Paranaguá', 'Pa', 83367),
(40, '584-1425 Amet Ave', 0, '', '', 'Juazeiro', 'BA', 47240),
(41, 'Ap #196-9936 Eget Av.', 0, '', '', 'Nova Iguaçu', 'Ri', 24161),
(42, '613-8474 Diam. Road', 0, '', '', 'Foz do Iguaçu', 'Pa', 85958),
(43, '6693 Consectetuer St.', 0, '', '', 'Camaçari', 'Ba', 44450),
(44, 'P.O. Box 657, 9993 Lobortis St.', 0, '', '', 'Contagem', 'Mi', 33472738),
(45, 'Ap #648-4572 Ornare Rd.', 0, '', '', 'Itabuna', 'BA', 45876),
(46, '150-5139 Egestas Rd.', 0, '', '', 'Ponta Grossa', 'PR', 83558),
(47, 'Ap #601-5610 Quisque St.', 0, '', '', 'Jundiaí', 'Sã', 17809),
(48, 'P.O. Box 738, 1127 Amet Rd.', 0, '', '', 'Maracanaú', 'CE', 62728),
(49, '1942 Vitae Avenue', 0, '', '', 'São Gonçalo', 'Ri', 28795),
(50, '369-9273 Nisi Ave', 0, '', '', 'Anápolis', 'GO', 73734),
(51, '563-1429 Ultrices Rd.', 0, '', '', 'Sobral', 'Ce', 62203),
(52, '6630 Tortor, St.', 0, '', '', 'Ilhéus', 'Ba', 40024),
(53, '918-5463 Consequat Avenue', 0, '', '', 'Patos', 'PB', 58518),
(54, 'Ap #942-6621 Eget Ave', 0, '', '', 'Gravataí', 'RS', 96583),
(55, '177 Lorem Rd.', 0, '', '', 'Mauá', 'Sã', 15936),
(56, '9813 Eget Ave', 0, '', '', 'Carapicuíba', 'SP', 16601),
(57, 'Ap #790-3923 Nullam Avenue', 0, '', '', 'Juazeiro', 'BA', 42960),
(58, 'Ap #121-6126 Nulla Av.', 0, '', '', 'Guarapuava', 'PR', 81606),
(59, 'Ap #194-957 Odio St.', 0, '', '', 'Camaçari', 'Ba', 42780),
(60, '4848 Id, Ave', 0, '', '', 'Recife', 'Pe', 52303),
(61, '8279 Feugiat Avenue', 0, '', '', 'Niterói', 'Ri', 28105),
(62, 'P.O. Box 719, 983 Scelerisque, Ave', 0, '', '', 'Açailândia', 'Ma', 65526),
(63, 'Ap #789-4268 Magna. St.', 0, '', '', 'Colombo', 'Pa', 86199),
(64, '266-2394 Ut Ave', 0, '', '', 'Guarapuava', 'PR', 84864),
(65, '9491 Est. Street', 0, '', '', 'Ipatinga', 'Mi', 33701431),
(66, '847-7812 Lectus Street', 0, '', '', 'Guarulhos', 'Sã', 11739),
(67, 'P.O. Box 242, 6980 Magna. Street', 0, '', '', 'Crato', 'CE', 62524),
(68, '462-4046 Mattis Ave', 0, '', '', 'Criciúma', 'Sa', 88677),
(69, 'Ap #344-9785 Integer Rd.', 0, '', '', 'São João de Meriti', 'RJ', 27226),
(70, 'P.O. Box 800, 1009 Nulla St.', 0, '', '', 'Novo Hamburgo', 'Ri', 95703),
(71, 'P.O. Box 853, 4825 Enim. Avenue', 0, '', '', 'Piracicaba', 'Sã', 14920),
(72, '276-5152 Dictum Avenue', 0, '', '', 'São João de Meriti', 'RJ', 21700),
(73, '4898 Malesuada St.', 0, '', '', 'Juazeiro do Norte', 'CE', 63875),
(74, 'P.O. Box 573, 1146 Sit Rd.', 0, '', '', 'Diadema', 'Sã', 17260),
(75, 'Ap #502-1699 Consequat, Ave', 0, '', '', 'Carapicuíba', 'SP', 18322),
(76, 'P.O. Box 593, 3860 Risus. St.', 0, '', '', 'Porto Alegre', 'RS', 95983),
(77, 'Ap #643-1834 Aliquam, Av.', 0, '', '', 'Colombo', 'PR', 83559),
(78, '2804 Mattis Street', 0, '', '', 'Piracicaba', 'Sã', 16888),
(79, '488-2301 Leo, Avenue', 0, '', '', 'Marabá', 'PA', 67523),
(80, '717 Nunc Rd.', 0, '', '', 'Campina Grande', 'PB', 58470),
(81, 'Ap #909-9330 Duis St.', 0, '', '', 'Maringá', 'Pa', 85357),
(82, 'P.O. Box 767, 3698 Aliquam Street', 0, '', '', 'Jundiaí', 'SP', 15626),
(83, '167-5440 Diam. St.', 0, '', '', 'Uberlândia', 'Mi', 38503213),
(84, 'Ap #314-2947 Lorem Rd.', 0, '', '', 'Governador Valadares', 'MG', 38150797),
(85, 'P.O. Box 223, 5783 Vel Road', 0, '', '', 'Águas Lindas de Goiás', 'Go', 74753),
(86, 'P.O. Box 574, 7398 Pede, St.', 0, '', '', 'Itabuna', 'BA', 46081),
(87, '395-9233 Vitae, Av.', 0, '', '', 'Piracicaba', 'Sã', 13642),
(88, '9870 Nec, Avenue', 0, '', '', 'Salvador', 'BA', 48652),
(89, 'Ap #709-7400 Sed Av.', 0, '', '', 'Feira de Santana', 'BA', 47748),
(90, '2791 Elit, Street', 0, '', '', 'Juazeiro do Norte', 'CE', 60730),
(91, 'P.O. Box 204, 3256 Eu Road', 0, '', '', 'São João de Meriti', 'Ri', 28136),
(92, '8675 Eu St.', 0, '', '', 'Ribeirão Preto', 'SP', 13540),
(93, 'Ap #686-1601 Ligula Rd.', 0, '', '', 'Olinda', 'PE', 56944),
(94, '3286 Nullam Street', 0, '', '', 'Feira de Santana', 'Ba', 45365),
(95, 'Ap #980-765 Nullam St.', 0, '', '', 'Ananindeua', 'Pa', 68440),
(96, 'Ap #567-7921 Volutpat. Av.', 0, '', '', 'Niterói', 'Ri', 21911),
(97, 'P.O. Box 641, 1756 Vehicula Street', 0, '', '', 'Jundiaí', 'Sã', 14983),
(98, '555-1781 Lorem, St.', 0, '', '', 'Contagem', 'Mi', 39705113),
(99, 'P.O. Box 264, 7749 Ipsum Av.', 0, '', '', 'Mogi das Cruzes', 'Sã', 19134),
(100, 'Ap #808-7238 Feugiat. Av.', 0, '', '', 'Piracicaba', 'Sã', 11748),
(101, 'Ap #946-3657 Eu, Av.', 0, '', '', 'Chapadinha', 'Ma', 65901);

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
-- Estrutura stand-in para vista `faltaestoque`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `faltaestoque` (
`id` int(11)
,`gerente` int(11)
,`item` int(11)
,`produto` int(11)
,`quantidade` int(11)
);

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
(2, 'fornecedor_2', 2, 2, 2),
(5, 'Susan A. Phillips', 3, 3, 3),
(6, 'Bruce G. Johnston', 4, 4, 4),
(7, 'Aretha O. Sheppard', 5, 5, 5),
(8, 'Mikayla X. Mclean', 6, 6, 6),
(9, 'Felix V. Potts', 7, 7, 7),
(10, 'Randall F. Montoya', 8, 8, 8),
(11, 'Jamalia G. Wise', 9, 9, 9),
(12, 'Jacqueline O. Boone', 10, 10, 10),
(13, 'Joel Q. Gallagher', 11, 11, 11),
(14, 'Hedley N. Conner', 12, 12, 12),
(15, 'Mallory N. Martinez', 13, 13, 13),
(16, 'Keegan Q. Whitfield', 14, 14, 14),
(17, 'Charde L. Decker', 15, 15, 15),
(18, 'Clementine W. Martin', 16, 16, 16),
(19, 'Elizabeth H. Collier', 17, 17, 17),
(20, 'Quinn F. Livingston', 18, 18, 18),
(21, 'Ross N. Carroll', 19, 19, 19),
(22, 'Jerry M. Blevins', 20, 20, 20),
(23, 'Jocelyn D. Kerr', 21, 21, 21),
(24, 'Xander L. Lara', 22, 22, 22),
(25, 'Ora E. Mcknight', 23, 23, 23),
(26, 'Renee H. Pacheco', 24, 24, 24),
(27, 'Emerald C. Hutchinson', 25, 25, 25),
(28, 'Fay V. Morgan', 26, 26, 26),
(29, 'Ella F. Rowland', 27, 27, 27),
(30, 'Yuli A. Rollins', 28, 28, 28),
(31, 'Riley J. Conley', 29, 29, 29),
(32, 'Reece W. Moon', 30, 30, 30),
(33, 'Walter M. Strong', 31, 31, 31),
(34, 'Jonas V. Lewis', 32, 32, 32),
(35, 'Erin Z. Wagner', 33, 33, 33),
(36, 'Moses H. Fitzpatrick', 34, 34, 34),
(37, 'Ahmed K. Love', 35, 35, 35),
(38, 'Kyle M. Vargas', 36, 36, 36),
(39, 'Idona N. Compton', 37, 37, 37),
(40, 'Renee S. Hoover', 38, 38, 38),
(41, 'Hayes D. Nixon', 39, 39, 39),
(42, 'Tasha V. Hendrix', 40, 40, 40),
(43, 'Chadwick R. Ratliff', 41, 41, 41),
(44, 'Raymond O. Price', 42, 42, 42),
(45, 'Nero N. Hopper', 43, 43, 43),
(46, 'Fulton Z. Moon', 44, 44, 44),
(47, 'Nadine U. Kirk', 45, 45, 45),
(48, 'Mohammad R. Mcbride', 46, 46, 46),
(49, 'Wynne P. Holman', 47, 47, 47),
(50, 'Erica N. Christian', 48, 48, 48),
(51, 'Rhoda I. Michael', 49, 49, 49),
(52, 'Celeste I. Burt', 50, 50, 50),
(53, 'Quintessa K. Cooke', 51, 51, 51),
(54, 'Joseph D. Fox', 52, 52, 52),
(55, 'Madaline K. Blevins', 53, 53, 53),
(56, 'Frances Y. Turner', 54, 54, 54),
(57, 'Xander O. Ball', 55, 55, 55),
(58, 'Dexter G. Blankenship', 56, 56, 56),
(59, 'Kenyon M. Guerrero', 57, 57, 57),
(60, 'Paloma P. Bryant', 58, 58, 58),
(61, 'Todd Y. Pickett', 59, 59, 59),
(62, 'Vaughan B. Kane', 60, 60, 60),
(63, 'Nash S. Conner', 61, 61, 61),
(64, 'Patrick X. Osborn', 62, 62, 62),
(65, 'Catherine Q. Mcintosh', 63, 63, 63),
(66, 'Leigh Q. Duffy', 64, 64, 64),
(67, 'Liberty G. Williams', 65, 65, 65),
(68, 'Urielle N. Acosta', 66, 66, 66),
(69, 'Mary J. Collins', 67, 67, 67),
(70, 'Carissa O. Aguilar', 68, 68, 68),
(71, 'Callum I. Roberts', 69, 69, 69),
(72, 'Magee M. Pacheco', 70, 70, 70),
(73, 'Ginger W. Warren', 71, 71, 71),
(74, 'Xenos P. Shepard', 72, 72, 72),
(75, 'Lois V. Barry', 73, 73, 73),
(76, 'Cassandra F. Griffin', 74, 74, 74),
(77, 'Nicholas F. Rose', 75, 75, 75),
(78, 'Sigourney F. Dunlap', 76, 76, 76),
(79, 'Clio X. Winters', 77, 77, 77),
(80, 'Raven C. Holmes', 78, 78, 78),
(81, 'Leonard L. Lawrence', 79, 79, 79),
(82, 'Dorothy B. Ferguson', 80, 80, 80),
(83, 'Adele M. Mathis', 81, 81, 81),
(84, 'Octavia W. Henderson', 82, 82, 82),
(85, 'Quinn H. Carney', 83, 83, 83),
(86, 'McKenzie O. Chaney', 84, 84, 84),
(87, 'Nero D. Stout', 85, 85, 85),
(88, 'Rogan P. Peterson', 86, 86, 86),
(89, 'Adena N. Avila', 87, 87, 87),
(90, 'Kaseem R. Ball', 88, 88, 88),
(91, 'John L. Berry', 89, 89, 89),
(92, 'Abdul H. Sims', 90, 90, 90),
(93, 'Sloane D. Obrien', 91, 91, 91),
(94, 'Leonard G. Mcfarland', 92, 92, 92),
(95, 'Bree K. Roy', 93, 93, 93),
(96, 'Julie R. Griffith', 94, 94, 94),
(97, 'Miriam S. Hanson', 95, 95, 95),
(98, 'Coby S. Bowman', 96, 96, 96),
(99, 'Trevor V. Scott', 97, 97, 97),
(100, 'Erin W. Mcknight', 98, 98, 98),
(101, 'Kirestin P. Williams', 99, 99, 99),
(102, 'Zelenia T. Mcneil', 100, 100, 100),
(103, 'Aaron Y. Grant', 101, 101, 101),
(104, 'Joseph A. Clayton', 102, 102, 102);

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
(5, 'funcionario_5', 5, 5, 5, 5, 5),
(7, 'Lani Q. Stanley', 6, 6, 6, 6, 6),
(8, 'Patrick I. David', 7, 7, 7, 7, 7),
(9, 'Francesca F. Marshall', 8, 8, 8, 8, 8),
(10, 'Sylvia J. Morgan', 9, 9, 9, 9, 9),
(11, 'Hollee I. Diaz', 10, 10, 10, 10, 10),
(12, 'Kirsten R. Pierce', 11, 11, 11, 11, 11),
(13, 'Anjolie L. Fletcher', 12, 12, 12, 12, 12),
(14, 'Jana W. Schwartz', 13, 13, 13, 13, 13),
(15, 'Charity K. Mccarthy', 14, 14, 14, 14, 14),
(16, 'Cody R. Townsend', 15, 15, 15, 15, 15),
(17, 'Harper O. Gilmore', 16, 16, 16, 16, 16),
(18, 'Ebony V. Brewer', 17, 17, 17, 17, 17),
(19, 'Gareth P. Miles', 18, 18, 18, 18, 18),
(20, 'Denise E. Martin', 19, 19, 19, 19, 19),
(21, 'Jana J. Moses', 20, 20, 20, 20, 20),
(22, 'Alden O. Spears', 21, 21, 21, 21, 21),
(23, 'Thomas N. Maynard', 22, 22, 22, 22, 22),
(24, 'Hyatt H. Torres', 23, 23, 23, 23, 23),
(25, 'Derek U. Morales', 24, 24, 24, 24, 24),
(26, 'Cruz V. Clarke', 25, 25, 25, 25, 25),
(27, 'Nell F. Burt', 26, 26, 26, 26, 26),
(28, 'Cody D. Peterson', 27, 27, 27, 27, 27),
(29, 'Norman Y. Tanner', 28, 28, 28, 28, 28),
(30, 'Xander S. Norman', 29, 29, 29, 29, 29),
(31, 'Arthur F. Salinas', 30, 30, 30, 30, 30),
(32, 'Amos N. Fulton', 31, 31, 31, 31, 31),
(33, 'Moses P. Brady', 32, 32, 32, 32, 32),
(34, 'Martena W. Lester', 33, 33, 33, 33, 33),
(35, 'Hoyt I. Jordan', 34, 34, 34, 34, 34),
(36, 'MacKenzie O. Morin', 35, 35, 35, 35, 35),
(37, 'Oliver T. Manning', 36, 36, 36, 36, 36),
(38, 'Myles Y. Randolph', 37, 37, 37, 37, 37),
(39, 'Zelda X. Rosario', 38, 38, 38, 38, 38),
(40, 'Blake Z. Pierce', 39, 39, 39, 39, 39),
(41, 'Amber R. Chandler', 40, 40, 40, 40, 40),
(42, 'Vivien B. Ashley', 41, 41, 41, 41, 41),
(43, 'Melvin M. Lara', 42, 42, 42, 42, 42),
(44, 'Heather G. Rowe', 43, 43, 43, 43, 43),
(45, 'Dahlia C. Roberson', 44, 44, 44, 44, 44),
(46, 'Kirestin R. Chang', 45, 45, 45, 45, 45),
(47, 'Minerva S. Weaver', 46, 46, 46, 46, 46),
(48, 'Julie B. Morgan', 47, 47, 47, 47, 47),
(49, 'Lacey K. Herring', 48, 48, 48, 48, 48),
(50, 'Lara E. Osborne', 49, 49, 49, 49, 49),
(51, 'Harriet J. Trujillo', 50, 50, 50, 50, 50),
(52, 'Aphrodite J. Bowen', 51, 51, 51, 51, 51),
(53, 'Karyn V. Dawson', 52, 52, 52, 52, 52),
(54, 'Cullen V. Oconnor', 53, 53, 53, 53, 53),
(55, 'Buckminster M. Sims', 54, 54, 54, 54, 54),
(56, 'Fritz S. Howard', 55, 55, 55, 55, 55),
(57, 'Alexander X. Donaldson', 56, 56, 56, 56, 56),
(58, 'Jennifer E. Pope', 57, 57, 57, 57, 57),
(59, 'Theodore R. Hahn', 58, 58, 58, 58, 58),
(60, 'Inga B. Ayers', 59, 59, 59, 59, 59),
(61, 'Vivian U. Erickson', 60, 60, 60, 60, 60),
(62, 'Cody Y. Sampson', 61, 61, 61, 61, 61),
(63, 'Victor K. Howe', 62, 62, 62, 62, 62),
(64, 'Mufutau Z. Bates', 63, 63, 63, 63, 63),
(65, 'Hedley C. Allison', 64, 64, 64, 64, 64),
(66, 'Griffith I. Fisher', 65, 65, 65, 65, 65),
(67, 'Eliana X. Griffith', 66, 66, 66, 66, 66),
(68, 'Aline Y. Patterson', 67, 67, 67, 67, 67),
(69, 'Jackson I. Byers', 68, 68, 68, 68, 68),
(70, 'Bryar Z. Hood', 69, 69, 69, 69, 69),
(71, 'Germane K. Baxter', 70, 70, 70, 70, 70),
(72, 'Byron V. Hartman', 71, 71, 71, 71, 71),
(73, 'Armand O. Lane', 72, 72, 72, 72, 72),
(74, 'Prescott Y. Murphy', 73, 73, 73, 73, 73),
(75, 'Illiana F. Hogan', 74, 74, 74, 74, 74),
(76, 'Nehru W. Melton', 75, 75, 75, 75, 75),
(77, 'Nero I. Barnett', 76, 76, 76, 76, 76),
(78, 'Joseph L. Mosley', 77, 77, 77, 77, 77),
(79, 'Axel N. Vargas', 78, 78, 78, 78, 78),
(80, 'Jordan R. Blake', 79, 79, 79, 79, 79),
(81, 'Sasha L. Pratt', 80, 80, 80, 80, 80),
(82, 'Callum Y. Livingston', 81, 81, 81, 81, 81),
(83, 'Jakeem I. Abbott', 82, 82, 82, 82, 82),
(84, 'Kenneth Y. Pace', 83, 83, 83, 83, 83),
(85, 'Darius V. Mclaughlin', 84, 84, 84, 84, 84),
(86, 'Fay R. Lee', 85, 85, 85, 85, 85),
(87, 'Kasimir Z. Gilmore', 86, 86, 86, 86, 86),
(88, 'Denise G. Stevens', 87, 87, 87, 87, 87),
(89, 'Calvin D. Hull', 88, 88, 88, 88, 88),
(90, 'Wesley O. Foley', 89, 89, 89, 89, 89),
(91, 'Nyssa K. Cohen', 90, 90, 90, 90, 90),
(92, 'Zephania Y. Clements', 91, 91, 91, 91, 91),
(93, 'Inez D. Wilson', 92, 92, 92, 92, 92),
(94, 'Xerxes I. Aguirre', 93, 93, 93, 93, 93),
(95, 'Geoffrey O. Booth', 94, 94, 94, 94, 94),
(96, 'Octavius P. Battle', 95, 95, 95, 95, 95),
(97, 'Justin M. Bond', 96, 96, 96, 96, 96),
(98, 'Martena H. Lancaster', 97, 97, 97, 97, 97),
(99, 'Deanna S. Key', 98, 98, 98, 98, 98),
(100, 'Ezekiel D. Thomas', 99, 99, 99, 99, 99),
(101, 'Joel Q. Armstrong', 100, 100, 100, 100, 100),
(102, 'Ivy H. Burnett', 101, 101, 101, 101, 101),
(103, 'Shea A. Peters', 102, 102, 102, 102, 102),
(104, 'Yoko F. Moody', 103, 103, 103, 103, 103),
(105, 'Stephen P. Poole', 104, 104, 104, 104, 104),
(106, 'Xaviera R. Carter', 105, 105, 105, 105, 105);

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
-- Estrutura stand-in para vista `salariofuncionarios`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `salariofuncionarios` (
`nome` varchar(40)
,`cpf` int(11)
,`salario` float
);

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

-- --------------------------------------------------------

--
-- Estrutura para vista `faltaestoque`
--
DROP TABLE IF EXISTS `faltaestoque`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `faltaestoque`  AS  select `estoque`.`id` AS `id`,`estoque`.`gerente` AS `gerente`,`estoque`.`item` AS `item`,`estoque`.`produto` AS `produto`,`estoque`.`quantidade` AS `quantidade` from `estoque` where `estoque`.`produto` in (select `produto`.`id` from `produto`) group by `estoque`.`produto` having `estoque`.`quantidade` < 20 ;

-- --------------------------------------------------------

--
-- Estrutura para vista `salariofuncionarios`
--
DROP TABLE IF EXISTS `salariofuncionarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `salariofuncionarios`  AS  select `f`.`nome` AS `nome`,`f`.`cpf` AS `cpf`,`c`.`salario` AS `salario` from (`funcionario` `f` join `cargo` `c` on(`f`.`cargo` = `c`.`id`)) ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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
