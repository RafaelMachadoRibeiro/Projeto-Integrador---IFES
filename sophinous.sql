-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/07/2024 às 23:46
-- Versão do servidor: 8.0.36
-- Versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sophinous`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `id arquivo` int NOT NULL,
  `id usuario` int NOT NULL,
  `id pasta` int NOT NULL,
  `nome do arquivo` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `data e hora do upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pasta`
--

CREATE TABLE `pasta` (
  `id pasta` int NOT NULL,
  `Nome da pasta` varchar(45) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id usuario` int NOT NULL,
  `foto` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `contato` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `instituicao` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `curso` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `periodo` int NOT NULL,
  `disciplinas` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `genero` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `sobremim` text COLLATE utf32_unicode_ci NOT NULL,
  `seguindo` int NOT NULL,
  `seguidores` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

CREATE TABLE `postagem` (
  `id postagem` int NOT NULL,
  `id usuario` int NOT NULL,
  `texto` text COLLATE utf32_unicode_ci NOT NULL,
  `arquivo` varchar(45) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuário`
--

CREATE TABLE `usuário` (
  `usuario` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `nome completo` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `data de nascimento` date NOT NULL,
  `email` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf32_unicode_ci NOT NULL,
  `id do usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci COMMENT='Armazena dado dos usuário e também loga o usuário';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
