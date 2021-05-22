-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Maio-2021 às 19:45
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curso_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `nomeproduto`, `preco`, `descricao`, `imagem`) VALUES
(5, 'Manteiga ', '6.35', '                                                                                   O café da manhã em família fica ainda mais completo com Qualy Cremosa. Sua textura cremosa e seu sabor amanteigado acompanham pães, brioches, torradas e deixam tudo muito mais                                           ', 'manteiga.jpeg'),
(6, 'Refrigerante Coca-cola 2l Pet', '6.99', 'Refrigerante\r\n \r\nMarca: Coca-Cola\r\nTamanho: 2l\r\nEmbalagem: Pet\r\n \r\n* Imagem meramente ilustrativa.\r\n** A indústria pode alterar a embalagem do produto sem aviso prévio.', 'coca-cola.jpeg'),
(7, 'Biscoito Recheado Richester Escureto 140g', '2.40', 'Biscoito Recheado Richester Escureto 140g', 'biscoito.jpeg'),
(8, 'Achocolatado em Pó NESCAU 400g', '6.19', '    NESCAU® 2.0 é o achocolatado da Nestlé® que todo mundo adora. Além do sabor delicioso de NESCAU®, o produto contém Activ-Go®, uma combinação exclusiva de nutrientes que é fonte de cálcio, ferro, vitaminas A, C, D e vitaminas do Complexo B, que fazem parte de uma alimentação equilibrada.                ', 'nescau.jpeg'),
(10, 'PASTA DE DENTE COLGATE TRIPLA AÇÃO MENTA ORIGINAL COM 90G', '3.55', 'O que é: O Creme Dental Colgate Tripla Ação Menta Original é anticárie e possui flúor, para uma limpeza mais completa e profunda.\r\nPara que serve: Reduz o acúmulo dos germes que contribuem para o amarelamento dos dentes, combate os germes responsáveis pelo mau hálito. Proporciona dentes mais fortes, saudáveis e mais brancos, deixando você com um sorriso mais bonito e brilhante.\r\nModo de usar: Escove os dentes após cada refeição, três vezes ao dia ou segundo a recomendação de seu dentista.', 'creme_dental_colgate_1_.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(20) NOT NULL,
  `nome_usuario` varchar(300) NOT NULL,
  `mail_usuario` varchar(350) NOT NULL,
  `senha_usuario` varchar(80) NOT NULL,
  `nivel_usuario` int(3) NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES
(28, 'Diones', 'teste@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'Ativo'),
(29, 'fulano', 'fulano@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 'Ativo'),
(30, 'maria', 'maria@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
