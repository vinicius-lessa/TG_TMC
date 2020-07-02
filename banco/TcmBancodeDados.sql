-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2020 às 03:28
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tmc_com`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `nome_categoria`) VALUES
(1, 'Violão'),
(2, 'Guitarra'),
(3, 'Bateria'),
(4, 'Contra Baixo'),
(5, 'Teclado'),
(6, 'Piano'),
(7, 'Violino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` varchar(9) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome_cliente`, `telefone`, `cpf`, `email`, `senha`, `logradouro`, `numero`, `uf`, `cep`) VALUES
(1, 'denovo', '22222222', '1111111', 'denovo@email.com', '$2y$10$UAUTYsuqAgVLkbJ/m5QY0u34XoswF6ZH9dYeleB129PKsBAZ0r28K', NULL, NULL, NULL, NULL),
(2, 'vini', '65656565', '215135952', 'vinicius@teste.com', '$2y$10$2d8OhrAiXdHujit2V9Fqvud6.Epz6qi1s/9yyoR/XCXkP8a5UTBFS', NULL, NULL, NULL, NULL),
(3, 're', '1218455121', '54512314963', 're@re', '$2y$10$FpMAvQcbZP14/eHgJzvtTO6rr3cscyU2IBGXFn.ndZ7.ru5kC7xNm', NULL, NULL, NULL, NULL),
(4, 'Vini', '848284805', '55232423232', 'vini@vini.com', '$2y$10$XPVklqCg3/FeuCIxoQ0TIu/NMWLymE0uSIixnei1fYU5i4s7RYfrm', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `cod_comentario` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `data_comentario` date DEFAULT NULL,
  `data_edit` date DEFAULT NULL,
  `excluido` int(11) DEFAULT 0,
  `avaliacao` int(11) DEFAULT 0,
  `titulo_comentario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`cod_comentario`, `cod_cliente`, `cod_produto`, `comentario`, `data_comentario`, `data_edit`, `excluido`, `avaliacao`, `titulo_comentario`) VALUES
(1, 2, 6, 'okok', '2020-06-20', NULL, 1, 2, 'bom'),
(4, 2, 6, 'TESTE', '2020-06-20', NULL, 0, 2, 'TESTE'),
(5, 2, 3, 'eee', '2020-06-20', NULL, 0, 3, 'eee'),
(7, 3, 5, 'Excelente', '2020-06-20', NULL, 1, 4, 'Excelente'),
(8, 3, 5, 'Excelente', '2020-06-20', NULL, 0, 4, 'Excelente'),
(9, 4, 7, 'foda', '2020-06-22', NULL, 1, 4, 'foda'),
(10, 4, 7, 'w,lopqwloq', '2020-06-22', NULL, 0, 4, 'odsodkl');

-- --------------------------------------------------------

--
-- Estrutura da tabela `favorito`
--

CREATE TABLE `favorito` (
  `cod_favorito` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `data_inclusao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `favorito`
--

INSERT INTO `favorito` (`cod_favorito`, `cod_produto`, `cod_cliente`, `data_inclusao`) VALUES
(1, 6, 2, '2020-06-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `data_pedido` date NOT NULL,
  `data_entrega` date DEFAULT NULL,
  `valor_pedido` decimal(6,2) DEFAULT NULL,
  `cod_carrinho` varchar(50) DEFAULT NULL,
  `situacao` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`cod_pedido`, `cod_cliente`, `data_pedido`, `data_entrega`, `valor_pedido`, `cod_carrinho`, `situacao`) VALUES
(1, 2, '2020-06-20', '2020-07-05', '1500.00', '0-20062063417', 0),
(2, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(3, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(4, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(5, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(6, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(7, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(8, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(9, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(10, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(11, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(12, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0),
(13, 2, '0000-00-00', NULL, '1500.00', '0-20062063417', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_item`
--

CREATE TABLE `pedido_item` (
  `cod_pedido` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `valor_item` decimal(6,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `nome_prod` varchar(50) NOT NULL,
  `descricao_prod` varchar(250) DEFAULT NULL,
  `valor_un` decimal(6,2) NOT NULL,
  `cover_img` varchar(250) DEFAULT NULL,
  `banner_img` varchar(250) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `cod_categoria` int(11) NOT NULL,
  `destaque` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_produto`, `nome_prod`, `descricao_prod`, `valor_un`, `cover_img`, `banner_img`, `estoque`, `cod_categoria`, `destaque`) VALUES
(3, 'Guitarra', 'Guitarra Profissional', '2300.00', 'imagem-200620200332134861.jpg', 'imagem-200620200332137057.jpg', 78, 2, 1),
(4, 'Contra Baixo', 'Contra Baixo de Ótima Qualidade', '974.00', 'imagem-200620200333231947.jpg', 'imagem-200620200333237300.jpg', 11, 4, 1),
(5, 'Bateria', 'Bateria Ótimo Som', '2469.00', 'imagem-20062020033408538.jpg', 'imagem-200620200334083854.jpg', 63, 3, 1),
(6, 'Violão', 'Violão para Iniciantes', '532.00', 'imagem-200620200338393428.jpg', 'imagem-200620200338392454.jpg', 87, 1, 1),
(7, 'Guitarra 2', 'Guitarra Gybson', '895.00', 'imagem-210620200429128309.jpg', 'imagem-210620200429121096.jpg', 35, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `log` varchar(50) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome_usuario`, `telefone`, `cpf`, `email`, `log`, `senha`) VALUES
(4, 'denovo', '22222222222222', '2222222222222', 'denovo@email.com', 'teste', '$2y$10$mxxXtv6aq9ql8n7QLMbi5OyILYD8PoKUEkFXcymv4Dr0bl08IBstq'),
(5, 'vinicius', '2222222222', '555555555555', 'vinicius@teste.com', 'vinicius', '$2y$10$dPxmh5OM5vULhzJ9ukd3r.DJ9275YEng7u.iQrHRYd.WY0eCkBoRu'),
(6, 'Renata', '6565656565', '1211215212', 'renata@teste.com', 'renata', '$2y$10$34KzZd6oYtztGUGfe1SeD.34ArT0VX.DwMWaQckdZC8Pe0PM7li6G'),
(7, 'lasal,sl', '1548452', '585222', 'la@la.com', 'root', '$2y$10$ASOhQGBhveKSYVqii2PhSu2j.4wMHse1pcENGZVryYwA9VcgWFOLq'),
(8, 'Renata', '6659223232', '4895623232', 're@re', 're', '$2y$10$3UG6rYs2j9O9eEVU0jk/wOot/VZycYmE0OHKuD2EKnquk5BYubfsG'),
(9, 'vinicius', '55481132', '548423232', 'vinicius@teste.com', 'v', '$2y$10$ZQJj9G/ofTfD/BBbso/QjuRnU35I.tJH6z..gLPHvxVtwPc0sg852');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`cod_comentario`),
  ADD KEY `FK_comentario_cliente` (`cod_cliente`),
  ADD KEY `FK_comentario_produto` (`cod_produto`);

--
-- Índices para tabela `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`cod_favorito`),
  ADD KEY `FK_favoritoo_cliente` (`cod_cliente`),
  ADD KEY `FK_favoritoo_produto` (`cod_produto`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_pedido`),
  ADD KEY `FK_pedido_cliente` (`cod_cliente`);

--
-- Índices para tabela `pedido_item`
--
ALTER TABLE `pedido_item`
  ADD KEY `FK_pedidoitem_pedido` (`cod_pedido`),
  ADD KEY `FK_pedidoitem_produto` (`cod_produto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`),
  ADD KEY `FK_produto_categoria` (`cod_categoria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `cod_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `favorito`
--
ALTER TABLE `favorito`
  MODIFY `cod_favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_comentario_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`),
  ADD CONSTRAINT `FK_comentario_produto` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod_produto`);

--
-- Limitadores para a tabela `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `FK_favoritoo_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`),
  ADD CONSTRAINT `FK_favoritoo_produto` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod_produto`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_pedido_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`);

--
-- Limitadores para a tabela `pedido_item`
--
ALTER TABLE `pedido_item`
  ADD CONSTRAINT `FK_pedidoitem_pedido` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`),
  ADD CONSTRAINT `FK_pedidoitem_produto` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod_produto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_produto_categoria` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`cod_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
