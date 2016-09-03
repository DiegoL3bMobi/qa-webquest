-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Set-2016 às 18:58
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quest_app_db`
--
CREATE DATABASE IF NOT EXISTS `quest_app_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quest_app_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `cat_cod` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(40) NOT NULL,
  PRIMARY KEY (`cat_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

DROP TABLE IF EXISTS `parceiros`;
CREATE TABLE IF NOT EXISTS `parceiros` (
  `parc_cod` int(3) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `nm_empresa` varchar(60) NOT NULL,
  PRIMARY KEY (`parc_cod`),
  KEY `parc_empresa` (`nm_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

DROP TABLE IF EXISTS `participantes`;
CREATE TABLE IF NOT EXISTS `participantes` (
  `part_cod` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ocupacao` varchar(40) NOT NULL,
  `sexo` char(1) NOT NULL,
  `estado_civil` varchar(40) DEFAULT NULL,
  `dt_cadastro` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `idade` int(2) NOT NULL,
  `pergunta_secreta` varchar(50) NOT NULL,
  `resposta` varchar(30) NOT NULL,
  `participante_usuario` varchar(20) NOT NULL,
  `participante_senha` varchar(10) NOT NULL,
  `escolaridade` varchar(10) NOT NULL,
  `escolaridade_detalhes` varchar(10) NOT NULL,
  `escolaridade_instituicao` varchar(40) NOT NULL,
  PRIMARY KEY (`part_cod`),
  UNIQUE KEY `ptca_usuario` (`participante_usuario`),
  UNIQUE KEY `escolarid_institu` (`escolaridade_instituicao`),
  KEY `nome` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `participantes`
--

INSERT INTO `participantes` (`part_cod`, `nome`, `ocupacao`, `sexo`, `estado_civil`, `dt_cadastro`, `cidade`, `uf`, `email`, `endereco`, `idade`, `pergunta_secreta`, `resposta`, `participante_usuario`, `participante_senha`, `escolaridade`, `escolaridade_detalhes`, `escolaridade_instituicao`) VALUES
(1, 'Frederica Pellegrini', 'Nadadora profissional', 'F', 'Solteiro (a)', '2016-08-16 22:02:15', 'MIlano Ocidental Italiza', 'BA', 'fede.pellegrini@feva.com.it', 'Avanti oekke Miask dorsa', 45, 'Lugar onde morou até os 10 anos de idade', 'Milano', 'fede.nat1', 'f98babb100', '', '', ''),
(2, 'Laneke Sloetjes', 'Player Volleyball Woman', 'F', 'Solteiro (a)', '2016-08-17 09:33:13', 'Amsterdam, Newue Orange', 'ND', 'sloetjes.lany@volleydalmes.ne', 'Avenue Almdk Kref Mir 1902', 23, 'Lugar onde morou até os 10 anos de idade', 'Amsterdam', 'laneke.bm', '4cc225b66c', '3grau', 'Array', 'Amsterdam Politeknick Technologye'),
(3, 'Barragan Liusengab', 'King of the Otherworld', 'M', 'Divorciado (a)', '2016-08-17 19:57:25', 'Other Nuewe Kinsd Jhau', 'AK', 'barragan@otherworld.com', 'Avenid Mas Sk kdjf 34', 99, 'Super-Héroi favorito', 'Me', 'barragan', 'da0b9bf4e6', '3 Grau', 'Incompleto', 'ABRADANGI Politecnica'),
(4, 'Johnny Bravo', 'Character of Cartoon', 'M', 'Casado (a)', '2016-08-19 21:37:06', 'San Julia de Los Angeles', 'CA', 'johnny.bravo@cartoon.com', 'Hollywood Boulevard 9400', 18, 'Lugar onde morou até os 10 anos de idade', 'Los Angeles', 'Johnny', '9c195e30d1', '3 Grau', 'Completo', 'Univ. of California at'),
(5, 'Lorenna Ribeiro', 'Diretora de Operações 180graus', 'F', 'Solteiro (a)', '2016-08-27 23:38:28', 'Teresina, terra da caujinma', 'PI', 'lorenna.ribeiro@180graus.com', 'Avenida Baraão de Gurgueia 5454', 26, 'Qual seu time de coração', 'River', 'lorenna.180graus', '17778be861', ' 3', 'Completo', 'Universidade Estadual do Piaui');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
CREATE TABLE IF NOT EXISTS `perguntas` (
  `perg_cod` int(4) NOT NULL AUTO_INCREMENT,
  `perg_desc` varchar(40) NOT NULL,
  `categoria_cod` int(4) NOT NULL,
  `resposta_cod` int(4) NOT NULL,
  `participante_cod` int(4) NOT NULL,
  `dt_respondida` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`perg_cod`),
  KEY `categoria_cod` (`categoria_cod`),
  KEY `resposta_cod` (`resposta_cod`),
  KEY `participante_cod` (`participante_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

DROP TABLE IF EXISTS `permissoes`;
CREATE TABLE IF NOT EXISTS `permissoes` (
  `perm_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `perm_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`perm_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `pln_cod` int(4) NOT NULL AUTO_INCREMENT,
  `tp_desc` varchar(30) NOT NULL,
  `pln_vlr` decimal(8,2) NOT NULL,
  PRIMARY KEY (`pln_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos_detalhes`
--

DROP TABLE IF EXISTS `planos_detalhes`;
CREATE TABLE IF NOT EXISTS `planos_detalhes` (
  `pln_det_cod` int(4) NOT NULL AUTO_INCREMENT,
  `pln_cod` int(4) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_encerra` date NOT NULL,
  `situacao` varchar(30) NOT NULL,
  PRIMARY KEY (`pln_det_cod`),
  KEY `FK_plan` (`pln_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos_professores`
--

DROP TABLE IF EXISTS `planos_professores`;
CREATE TABLE IF NOT EXISTS `planos_professores` (
  `plano_cod` int(4) NOT NULL,
  `prof_cod` int(4) NOT NULL,
  PRIMARY KEY (`plano_cod`,`prof_cod`),
  KEY `prof_cod` (`prof_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

DROP TABLE IF EXISTS `professores`;
CREATE TABLE IF NOT EXISTS `professores` (
  `prf_cod` int(3) NOT NULL AUTO_INCREMENT,
  `nome_comp` varchar(40) NOT NULL,
  `instituicao` varchar(40) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tp_plano` varchar(30) NOT NULL,
  `data_entrada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `periodo_pesq` varchar(30) NOT NULL,
  `psqd_usuario` varchar(30) NOT NULL,
  `psqd_senha` varchar(10) NOT NULL,
  PRIMARY KEY (`prf_cod`),
  KEY `nome_comp` (`nome_comp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`prf_cod`, `nome_comp`, `instituicao`, `telefone`, `email`, `cpf`, `tp_plano`, `data_entrada`, `periodo_pesq`, `psqd_usuario`, `psqd_senha`) VALUES
(4, 'Carla Vilhena Andrade', 'GloboTV', '11 41712143', 'carla.vilhena@globo.com', '145217932', 'Tipo #4 - 20 Pesquisas', '2016-06-04 00:00:59', '60 dias', '', ''),
(5, 'Sigmund Folhjeo', 'Weiss Lawer', '55 2958-6335', 'sigmund.lawer@weisslawers.com', '125252', 'Plano Simples - 15 Pesquisas', '2016-07-25 18:46:55', '30 dias', 'Sig.54', '123456'),
(6, 'Silvio Santos', 'SBT', '(11) 2348-7402', 'silvio.santos@sbt.com.br', '123456', 'Plano Médio - 30 Pesquisas', '2016-08-09 20:39:09', '30 dias', 'SSantos', 'b8c433c9fa'),
(8, 'Jonathas Morais Oliveira', 'FACID', '(99) 8197-0737', 'jo3kmor@gmail.com', '1663134324', 'Plano Médio - 30 Pesquisas', '2016-08-12 00:09:47', '60 dias', 'morliz', 'cd2d6ea1e8'),
(9, 'MIreya Ruiz', 'Cuba Associacion Voleyball', '(21)5445-4874', 'mireya.volley@cuba.gov.cb', '817453', 'Plano Médio - 30 Pesquisas', '2016-08-12 00:29:47', '60 dias', 'mireya.queen', 'e24703e73a'),
(10, 'Lana Lang', 'Smallville Town', '(11) 93215-874', 'lana.lang@toch.com', '42674', 'Plano Médio - 30 Pesquisas', '2016-08-15 15:30:33', '90 dias', 'lana.cat', '072a4ffe9e'),
(11, 'Maria Antonieta', 'Ex Rainha degolada', '(99) 98417-548', 'maria.antonieta@putapolonesa.p', '602.624.183-39', 'Plano Completo - 50 Pesquisas', '2016-08-15 15:48:06', '30 dias', 'maria.aant', '1bf6230621');

-- --------------------------------------------------------

--
-- Estrutura da tabela `regras`
--

DROP TABLE IF EXISTS `regras`;
CREATE TABLE IF NOT EXISTS `regras` (
  `regra_cod` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `regra_nm` varchar(50) NOT NULL,
  PRIMARY KEY (`regra_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `regra_permissao`
--

DROP TABLE IF EXISTS `regra_permissao`;
CREATE TABLE IF NOT EXISTS `regra_permissao` (
  `regra_cod` int(10) unsigned NOT NULL,
  `perm_cod` int(10) unsigned NOT NULL,
  KEY `regra_cod` (`regra_cod`),
  KEY `perm_cod` (`perm_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `resp_cod` int(4) NOT NULL AUTO_INCREMENT,
  `resp_desc` varchar(20) NOT NULL,
  PRIMARY KEY (`resp_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

DROP TABLE IF EXISTS `resultados`;
CREATE TABLE IF NOT EXISTS `resultados` (
  `res_cod` int(4) NOT NULL AUTO_INCREMENT,
  `perg_cod` int(4) NOT NULL,
  `part_cod` int(4) NOT NULL,
  `confirma` tinyint(1) NOT NULL,
  `dt_resultado` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`res_cod`),
  KEY `perg_cod` (`perg_cod`),
  KEY `part_cod` (`part_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod_usa` int(4) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `conf_senha` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_usa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_regra`
--

DROP TABLE IF EXISTS `usuario_regra`;
CREATE TABLE IF NOT EXISTS `usuario_regra` (
  `usuario_cod` int(4) NOT NULL,
  `regra_cod` int(4) unsigned NOT NULL,
  KEY `usuario_cod` (`usuario_cod`),
  KEY `regra_cod` (`regra_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `perguntas_ibfk_1` FOREIGN KEY (`categoria_cod`) REFERENCES `categorias` (`cat_cod`),
  ADD CONSTRAINT `perguntas_ibfk_2` FOREIGN KEY (`resposta_cod`) REFERENCES `respostas` (`resp_cod`),
  ADD CONSTRAINT `perguntas_ibfk_3` FOREIGN KEY (`participante_cod`) REFERENCES `participantes` (`part_cod`);

--
-- Limitadores para a tabela `planos_detalhes`
--
ALTER TABLE `planos_detalhes`
  ADD CONSTRAINT `planos_detalhes_ibfk_1` FOREIGN KEY (`pln_cod`) REFERENCES `planos` (`pln_cod`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `planos_professores`
--
ALTER TABLE `planos_professores`
  ADD CONSTRAINT `planos_professores_ibfk_1` FOREIGN KEY (`plano_cod`) REFERENCES `planos` (`pln_cod`),
  ADD CONSTRAINT `planos_professores_ibfk_2` FOREIGN KEY (`prof_cod`) REFERENCES `professores` (`prf_cod`);

--
-- Limitadores para a tabela `regra_permissao`
--
ALTER TABLE `regra_permissao`
  ADD CONSTRAINT `regra_permissao_ibfk_1` FOREIGN KEY (`regra_cod`) REFERENCES `regras` (`regra_cod`),
  ADD CONSTRAINT `regra_permissao_ibfk_2` FOREIGN KEY (`perm_cod`) REFERENCES `permissoes` (`perm_cod`);

--
-- Limitadores para a tabela `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`perg_cod`) REFERENCES `perguntas` (`perg_cod`),
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`part_cod`) REFERENCES `participantes` (`part_cod`);

--
-- Limitadores para a tabela `usuario_regra`
--
ALTER TABLE `usuario_regra`
  ADD CONSTRAINT `usuario_regra_ibfk_1` FOREIGN KEY (`usuario_cod`) REFERENCES `usuarios` (`cod_usa`),
  ADD CONSTRAINT `usuario_regra_ibfk_2` FOREIGN KEY (`regra_cod`) REFERENCES `regras` (`regra_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
