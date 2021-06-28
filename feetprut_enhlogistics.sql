-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql1004.mochahost.com:3306
-- Generation Time: May 07, 2021 at 03:39 AM
-- Server version: 5.6.33
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feetprut_enhlogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `designacao` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `designacao`, `descricao`, `tipo`) VALUES
(1, 'Acampamentos', 'acampamentos', 'projecto'),
(2, 'Seguros', 'seguros', 'projecto'),
(3, 'Serviços Gerais', 'servicos_gerais', 'projecto'),
(4, 'Construção', 'construcao', 'parceria'),
(5, 'Logística', 'logistica', 'parceria'),
(6, 'Serviços', 'servicos', 'parceria'),
(7, 'Principal', 'principal', 'principal');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `corpo` text,
  `endereco` varchar(255) NOT NULL,
  `caixa_postal` varchar(10) DEFAULT NULL,
  `telefone` varchar(25) NOT NULL,
  `telefone_sec1` varchar(25) DEFAULT NULL,
  `telefone_sec2` varchar(25) DEFAULT NULL,
  `horario_trabalho` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `email_sec` varchar(50) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '0',
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `chave_mapa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `titulo`, `subtitulo`, `corpo`, `endereco`, `caixa_postal`, `telefone`, `telefone_sec1`, `telefone_sec2`, `horario_trabalho`, `fax`, `email`, `email_sec`, `imagem`, `criado_em`, `estado`, `latitude`, `longitude`, `chave_mapa`) VALUES
(1, 'Mantenha Contacto', 'Equipe de suporte sempre pronta para ajudá-lo', '<p>Envia uma mensagem atrav&eacute;s do nosso formul&aacute;rio on-line para solicitar uma estimativa ou para perguntas gerais sobre n&oacute;s. Estamos ansiosos para servi-lo!</p>', 'Rua dos Desportistas, Edfício JAT V-III, Nº 921, 7º andar, direito, Maputo', '4787', '(+258) 21 32 12 40', '', '', 'Seg - Sex: 07:30 - 15:30', '(+258) 21 42 94 55', 'info@enhlogistics.co.mz', '', NULL, '2020-04-21 11:50:03', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacto_mensagem`
--

CREATE TABLE `contacto_mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacto_mensagem`
--

INSERT INTO `contacto_mensagem` (`id_mensagem`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `criado_em`) VALUES
(1, 'Fabiao Alberto Dimande', 'fabiaoalberto@gmail.com', '827539055', 'Pedido de Esclarecimentos', 'Peço esclarecimentos em relação a seguinte informação ...', '2020-04-21 20:00:32'),
(2, 'Francisco Joshua', 'francisco.joshua@yahoo.com', '844445558', 'Informação sobre o website', 'Alterações são necessárias...', '2020-04-21 20:07:23'),
(3, 'Denilson', 'denilsonmucavel@outlook.com', 'denilsonmucav', 'Proposta de sistemas de informacao', 'Te', '2021-04-29 08:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `avenida_rua` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `outro` varchar(255) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `avenida_rua`, `numero`, `outro`, `provincia`) VALUES
(1, 'AV. 25 de Setembro', '270', 'Prédio Times Square, Bloco 1, 1° Andar', 'Maputo');

-- --------------------------------------------------------

--
-- Table structure for table `estrutura_organica`
--

CREATE TABLE `estrutura_organica` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `corpo` text,
  `id_media` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estrutura_organica`
--

INSERT INTO `estrutura_organica` (`id`, `titulo`, `corpo`, `id_media`) VALUES
(1, 'Estrutura Orgânica', '', 57);

-- --------------------------------------------------------

--
-- Table structure for table `galeria_album`
--

CREATE TABLE `galeria_album` (
  `id_album` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeria_album`
--

INSERT INTO `galeria_album` (`id_album`, `descricao`, `id_media`) VALUES
(1, 'Trabalho de Campo', 55);

-- --------------------------------------------------------

--
-- Table structure for table `galeria_photo`
--

CREATE TABLE `galeria_photo` (
  `id_photo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_media` int(11) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeria_photo`
--

INSERT INTO `galeria_photo` (`id_photo`, `titulo`, `descricao`, `id_media`, `id_album`) VALUES
(1, '', 'Projecto Rompco Loopline II', 55, 1),
(2, '', 'Vista Aérea da Base Logística de Pemba', 56, 1),
(3, '', 'Fábrica da SASOL em Temane', 51, 1),
(4, '', 'Barcaça/ Pontão', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeria_video`
--

CREATE TABLE `galeria_video` (
  `id_video` varchar(30) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_media` int(11) NOT NULL,
  `link_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeria_video`
--

INSERT INTO `galeria_video` (`id_video`, `tipo`, `titulo`, `descricao`, `id_media`, `link_video`) VALUES
('dsAogk-bwv8', 'video', 'Bonatti Institutional 2019', 'Bonatti Institutional 2019', 29, 'https://www.youtube.com/'),
('j96KeC5FZnk', 'video', 'ENHL BONATTI - ROMPCO Loop Line 2 Project', 'ENHL BONATTI - ROMPCO Loop Line 2 Project', 29, 'https://youtu.be/'),
('UcS4bNtbRA0', 'video', 'Bonatti - Well Production Services', 'Bonatti - Well Production Services', 29, 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info_historica`
--

CREATE TABLE `info_historica` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_historica`
--

INSERT INTO `info_historica` (`id`, `data`, `titulo`, `descricao`) VALUES
(1, 'DEZEMBRO 2011', 'Constituição da ENH Logistics, S.A', 'Constituição da ENH Logistics, S.A							'),
(2, 'ABRIL 2012', 'Roadshows de Apresentação da Empresa', 'Roadshows de Apresentação da Empresa'),
(3, 'JULHO 2012', 'Constituição da Primeira Joint Venture da ENHL: a ENHL-Bonatti, Lda.', 'Constituição da Primeira Joint Venture da ENHL: a ENHL-Bonatti, Lda.'),
(4, 'MAIO 2013', 'EInício de Actividades na ENHL Início de Actividades na ENHL', 'EInício de Actividades na ENHL Início de Actividades na ENHL'),
(5, 'AGOSTO 2013', 'Início da elaboração do PGU 18.000 Hectares', 'Início da elaboração do PGU 18.000 Hectares'),
(6, 'DEZEMBRO 2013', 'Abertura do 1º Acampamento em Palma', 'Abertura do 1º Acampamento em Palma'),
(7, 'MARÇO 2014', 'Constituição da Segunda Joint Venture: a ENHILS', '						Constituição da Segunda Joint Venture: a ENHILS					'),
(8, 'JANEIRO 2015', 'Início da Construção da da Base Logística de Pemba', 'Início da Construção da da Base Logística de Pemba'),
(9, 'SETEMBRO 2016', 'Primeiros Dividendos das Joint-Ventures', 'Primeiros Dividendos das Joint-Ventures'),
(10, 'JUNHO 2017', 'A ENHL regista o Primeiro Resultado Líquido Positivo', 'A ENHL regista o Primeiro Resultado Líquido Positivo'),
(11, 'JULHO 2018', 'Início da Elaboração do Plano de Pormenor dos 18.000 ha', 'Início da Elaboração do Plano de Pormenor dos 18.000 ha'),
(12, 'OUTUBRO 2019', 'Cedência do segundo Acampamento à ENHL pela ENH', 'Cedência do segundo Acampamento à ENHL pela ENH'),
(13, 'JULHO 2020', 'Constituição da ENHL-Zakher Scale, Lda, Joint Venture entre ENHL e a Zakher Marine International, Inc', 'Constituição da ENHL-Zakher Scale, Lda, Joint Venture entre ENHL e a Zakher Marine International, Inc								');

-- --------------------------------------------------------

--
-- Table structure for table `item_menu`
--

CREATE TABLE `item_menu` (
  `id_item_menu` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_menu`
--

INSERT INTO `item_menu` (`id_item_menu`, `titulo`, `link`, `id_pagina`, `id_menu`) VALUES
(1, 'Imobiliário', NULL, 7, 1),
(2, 'Portos', NULL, 10, 1),
(3, 'Nossas Áreas de Logística', NULL, 8, 1),
(4, 'Manutenção', NULL, 9, 1),
(5, 'Companhia Moçambicana de Hidrocarbonetos, SA', 'http://www.cmh.co.mz/', NULL, 2),
(6, 'Empresa Nacional de Hidrocarbonetos, E.P', 'https://www.enh.co.mz/', NULL, 2),
(7, 'Ministério dos Recursos Minerais e Energia', 'http://www.mireme.gov.mz/', NULL, 2),
(8, 'Instituto Nacional de Petróleo', 'http://www.inp.gov.mz/', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mapa`
--

CREATE TABLE `mapa` (
  `id_mapa` int(11) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `designacao` varchar(45) DEFAULT NULL,
  `id_slide` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_noticia` int(11) DEFAULT NULL,
  `id_blog` int(11) DEFAULT NULL,
  `id_seccao` int(11) DEFAULT NULL,
  `id_pagina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `foto`, `designacao`, `id_slide`, `id_usuario`, `id_noticia`, `id_blog`, `id_seccao`, `id_pagina`) VALUES
(5, 'img/20200830160800_20136845.jpg', 'ENHL', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'img/20200830160846_56271240.png', 'Cabeçalho', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'img/20200831140824_42394755.jpg', 'Cabeçalho 2', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'img/blp.png', 'blp.png', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'img/03.jpg', '03.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'img/coral.jpg', 'coral.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'img/BLP.jpg', 'BLP.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'img/Plataforma.jpg', 'Plataforma.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'img/Braço_de_acesso.jpg', 'Braço_de_acesso.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'img/mensagem.jpg', 'mensagem.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'img/covid19.jpg', 'covid19.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'img/organograma.png', 'organograma.png', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'img/enhl-technipfmc.png', 'enhl-technipfmc.png', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'img/enmar.png', 'enmar.png', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'img/enhl-zmi.png', 'enhl-zmi.png', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'img/enhl-bonatti.png', 'enhl-bonatti.png', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'img/enhl-belleli.png', 'enhl-belleli.png', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'img/enhl-lngshipping.png', 'enhl-lngshipping.png', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'img/enhils.png', 'enhils.png', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'img/enhl-sscalelng.png', 'enhl-sscalelng.png', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'img/arpjv.png', 'arpjv.png', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'img/Base_Logistica_de_Pemba.jpg', 'Base_Logistica_de_Pemba.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'img/office.jpg', 'office.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'img/imobiliario.jpg', 'imobiliario.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'img/areasde_actuacao.jpg', 'areasde_actuacao.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'img/manutencao.jpg', 'manutencao.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'img/portos.jpg', 'portos.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'img/covid19.png', 'covid19.png', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'img/loopline.png', 'loopline.png', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'img/coral1.jpg', 'coral1.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'img/enhils1.png', 'enhils1.png', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'img/hidrocarbonetos.jpg', 'hidrocarbonetos.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'img/zakher.png', 'zakher.png', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'img/Barcaça.png', 'Barcaça.png', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'img/Sasol_Plant.jpg', 'Sasol_Plant.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'img/IMG-20200914-WA0016.jpg', 'IMG-20200914-WA0016.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'img/IMG-20200914-WA0015.jpg', 'IMG-20200914-WA0015.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'img/gas_summit.png', 'gas_summit.png', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'img/rompco.jpg', 'rompco.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'img/bl.jpg', 'bl.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'img/organograma1.png', 'organograma1.png', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'img/parceiro_mds.png', 'parceiro_mds.png', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'img/parceiro_arpsa.png', 'parceiro_arpsa.png', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'img/portfolio.png', 'portfolio.png', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'img/Screenshot_(3).png', 'Screenshot_(3).png', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'img/IMG-20200219-WA0041.jpg', 'IMG-20200219-WA0041.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `designacao` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `id_widget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `designacao`, `descricao`, `id_widget`) VALUES
(1, 'Áreas De Logística', 'Para todos itens de menu para Áreas De Logística', NULL),
(2, 'Links Relacionados', 'Links Relacionados', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `criado_em` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_em` datetime DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_media` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `id_pagina`, `criado_em`, `actualizado_em`, `id_usuario`, `id_media`) VALUES
(1, 11, '2020-09-13 23:21:25', NULL, 1, 24),
(2, 12, '2020-09-14 20:21:18', NULL, 1, 45),
(4, 13, '2020-09-14 20:38:15', NULL, 1, 46),
(5, 14, '2020-09-14 20:38:40', NULL, 1, 47),
(6, 15, '2020-09-14 20:39:00', NULL, 1, 48),
(7, 16, '2020-09-14 20:39:16', NULL, 1, 49);

-- --------------------------------------------------------

--
-- Table structure for table `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `introducao` text,
  `corpo` text,
  `sidebar` varchar(255) DEFAULT NULL,
  `imagem_destaque` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado_em` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `tipo`, `alias`, `titulo`, `subtitulo`, `introducao`, `corpo`, `sidebar`, `imagem_destaque`, `criado_em`, `actualizado_em`, `id_usuario`) VALUES
(6, 'mensagem', 'mensagem', 'BEM VINDO À NOSSA PÁGINA WEB', 'A ENH LOGISTICS tem o maior prazer de apresentar a sua nova página web', '<p><strong>Caro leitor,</strong></p>\r\n<p>A <strong>ENH LOGISTICS</strong> tem o maior prazer de apresentar a sua nova p&aacute;gina web, desenhada principalmente pensando nos nossos actuais e futuros potenciais parceiros de neg&oacute;cio mas sem deixar de lado a si caro leitor, em geral, que possa ter o maior interesse de conhecer a nossa empresa.</p>\r\n<p>Visitando a nossa p&aacute;gina, ficar&aacute; a saber quem somos n&oacute;s, o que fazemos e conhecer&aacute; a diversidade de empresas formadas pela ENH Logistics e os servi&ccedil;os especializados que cada uma oferece na &aacute;rea de log&iacute;stica e provis&atilde;o de infraestruturas de suporte &agrave;s opera&ccedil;&otilde;es da ind&uacute;stria petrol&iacute;fera em Mo&ccedil;ambique.</p>', '<p style=\"text-align: justify;\"><strong>BEM VINDO &Agrave; NOSSA P&Aacute;GINA WEB</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Caro leitor,</strong></p>\r\n<p style=\"text-align: justify;\">A <strong>ENH LOGISTICS</strong> tem o maior prazer de apresentar a sua nova p&aacute;gina web, desenhada principalmente pensando nos nossos actuais e futuros potenciais parceiros de neg&oacute;cio mas sem deixar de lado a si caro leitor, em geral, que possa ter o maior interesse de conhecer a nossa empresa.</p>\r\n<p style=\"text-align: justify;\">Visitando a nossa p&aacute;gina, ficar&aacute; a saber quem somos n&oacute;s, o que fazemos e conhecer&aacute; a diversidade de empresas formadas pela ENH Logistics e os servi&ccedil;os especializados que cada uma oferece na &aacute;rea de log&iacute;stica e provis&atilde;o de infraestruturas de suporte &agrave;s opera&ccedil;&otilde;es da ind&uacute;stria petrol&iacute;fera em Mo&ccedil;ambique.</p>\r\n<p style=\"text-align: justify;\">De maneira muito especial, aos nossos futuros parceiros ter&atilde;o a possibilidade de conhecer melhor a nossa empresa e, sobretudo, de ver e compreender as nossas &aacute;reas de actua&ccedil;&atilde;o o que ir&aacute; permitir explorar poss&iacute;veis oportunidades de forma&ccedil;&atilde;o de parcerias com a ENH Logsitics para o desenvolvimento de neg&oacute;cios rent&aacute;veis e sustent&aacute;veis.</p>\r\n<p style=\"text-align: justify;\">J&aacute; aos nossos estimados parceiros, mais do que apresentar a nossa nova p&aacute;gina web, queremos, com muita satisfa&ccedil;&atilde;o, compartilhar o incomensur&aacute;vel orgulho que sentimos ao lan&ccedil;ar para o mundo mais uma plataforma que, certamente, representa uma verdadeira montra de difus&atilde;o das nossas <em>Joint Ventures</em>, das suas actividades e do que, juntos, bem e melhor sabemos e podemos fazer. Queremos pois, e justamente, nesta oportunidade, endere&ccedil;ar os nossos maiores agradecimentos por terem optado por unir-se a ENH Logistics.</p>\r\n<p style=\"text-align: justify;\">Para terminar, e porque lan&ccedil;amos a p&aacute;gina num ano particularmente at&iacute;pico, assolado pela pandemia secular - Covid-19 &ndash; que est&aacute; afectando de maneira global e dr&aacute;stica a sa&uacute;de das pessoas, a vida social, a economia em geral e, de forma particular e directa as nossas empresas gostaria de desejar a toda a fam&iacute;lia ENH Logistics os maiores cuidados, a melhor protec&ccedil;&atilde;o e livre da infec&ccedil;&atilde;o pelo Covid-19.</p>\r\n<p style=\"text-align: justify;\">Eis a nossa p&aacute;gina web! Visite-nos sempre.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 'Entre em Contacto', 'img/IMG-20200914-WA0016.jpg', '2020-09-10 17:05:05', NULL, 1),
(7, 'area_logistica', 'imobiliario', 'Imobiliário', '', '<p><strong>SGI- Sistema de Gest&atilde;o Imobili&aacute;ria</strong></p>\r\n<div><strong>Actividade Principal</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Gest&atilde;o de Im&oacute;veis: Criar um sistema de gest&atilde;o do patrim&oacute;nio imobili&aacute;rio da empresa como instrumento de competitividade.</li>\r\n<li>Busca de Novos im&oacute;veis: Analisar as novas oportunidades de neg&oacute;cio e pesquisar os im&oacute;veis mais adequados para as opera&ccedil;&oacute;es.</li>\r\n</ul>\r\n</div>\r\n<div><strong>Outros Servi&ccedil;os</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Renda dos im&oacute;veis: Fornecer um servi&ccedil;o de aluguer dos im&oacute;veis como uma ulterior fonte de receitas para a empresa.</li>\r\n</ul>\r\n</div>', '<p><strong>SGI- Sistema de Gest&atilde;o Imobili&aacute;ria</strong></p>\r\n<div><strong>Actividade Principal</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Gest&atilde;o de Im&oacute;veis: Criar um sistema de gest&atilde;o do patrim&oacute;nio imobili&aacute;rio da empresa como instrumento de competitividade.</li>\r\n<li>Busca de Novos im&oacute;veis: Analisar as novas oportunidades de neg&oacute;cio e pesquisar os im&oacute;veis mais adequados para as opera&ccedil;&oacute;es.</li>\r\n</ul>\r\n</div>\r\n<div><strong>Outros Servi&ccedil;os</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Renda dos im&oacute;veis: Fornecer um servi&ccedil;o de aluguer dos im&oacute;veis como uma ulterior fonte de receitas para a empresa.</li>\r\n</ul>\r\n</div>', 'Áreas de Logística', 'img/imobiliario.jpg', '2020-09-10 17:05:05', NULL, 1),
(8, 'area_logistica', 'nossas-areas-logistica', 'Nossas Áreas de Logística', '', '<p>Considerando o &acirc;mbito alargado que compreende a actividade principal da ENH Logistics, ou seja, a presta&ccedil;&atilde;o de servi&ccedil;os e fornecimento de infraestruturas ao sector do Hidrocarbonetos, foram identificados os principais sectores onde a ENH Loistics desenvolver&aacute; a sua actividade em parceria com as empresas de explora&ccedil;&atilde;o e Produ&ccedil;&atilde;o, o Empresariado Mo&ccedil;ambicano e eventuais parceiros internacionais.</p>', '<p>Considerando o &acirc;mbito alargado que compreende a actividade principal da ENH Logistics, ou seja, a presta&ccedil;&atilde;o de servi&ccedil;os e fornecimento de infraestruturas ao sector do Hidrocarbonetos, foram identificados os principais sectores onde a ENH Loistics desenvolver&aacute; a sua actividade em parceria com as empresas de explora&ccedil;&atilde;o e Produ&ccedil;&atilde;o, o Empresariado Mo&ccedil;ambicano e eventuais parceiros internacionais.</p>', 'Áreas de Logística', 'img/areasde_actuacao.jpg', '2020-09-10 17:05:05', NULL, 1),
(9, 'area_logistica', 'manutencao', 'Manutenção', '', '<p><strong>SGM- Sistema de Gest&atilde;o das Manuten&ccedil;&otilde;es</strong></p>\r\n<div><strong>Actividade Principal</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Manuten&ccedil;&otilde;es na Industria de LNG: Fornecer um servi&ccedil;o de manuten&ccedil;&atilde;o para a ind&uacute;stria de LNG, utilizando no princ&iacute;pio as parcerias para a obten&ccedil;&atilde;o das compet&ecirc;ncias necess&aacute;rias</li>\r\n</ul>\r\n</div>\r\n<div><strong>Outros Servi&ccedil;os</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Fornecer um sistema de manuten&ccedil;&atilde;o nas outras &aacute;reas abrangidas pela ind&uacute;stria do LNG.</li>\r\n</ul>\r\n</div>', '<p><strong>SGM- Sistema de Gest&atilde;o das Manuten&ccedil;&otilde;es</strong></p>\r\n<div><strong>Actividade Principal</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Manuten&ccedil;&otilde;es na Industria de LNG: Fornecer um servi&ccedil;o de manuten&ccedil;&atilde;o para a ind&uacute;stria de LNG, utilizando no princ&iacute;pio as parcerias para a obten&ccedil;&atilde;o das compet&ecirc;ncias necess&aacute;rias</li>\r\n</ul>\r\n</div>\r\n<div><strong>Outros Servi&ccedil;os</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Fornecer um sistema de manuten&ccedil;&atilde;o nas outras &aacute;reas abrangidas pela ind&uacute;stria do LNG.</li>\r\n</ul>\r\n</div>', 'Áreas de Logística', 'img/manutencao.jpg', '2020-09-10 17:05:05', NULL, 1),
(10, 'area_logistica', 'portos', 'Portos', '', '<p><strong>Servi&ccedil;os do GPP e do GPPA</strong></p>\r\n<div><strong>Actividade Principal</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Estaleiros: fornecer espa&ccedil;os abertos para a armazenagem dos equipamentos para as opera&ccedil;&otilde;es.</li>\r\n<li>Acomoda&ccedil;&atilde;o: providenciar um servi&ccedil;o de acomoda&ccedil;&atilde;o integrada para todos os funcion&aacute;rios das operadoras</li>\r\n<li>Seguran&ccedil;a: Servi&ccedil;os de seguran&ccedil;a profissional.</li>\r\n<li>Armaz&eacute;ns: Oferecer espa&ccedil;os de armazenagem coberta.</li>\r\n</ul>\r\n</div>\r\n<div><strong>Outros Servi&ccedil;os</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Telecomunica&ccedil;&otilde;es: Sistema de telecomunica&ccedil;&atilde;o entre os p&oacute;los de trabalho das operadoras.</li>\r\n</ul>\r\n</div>', '<p><strong>Servi&ccedil;os do GPP e do GPPA</strong></p>\r\n<div><strong>Actividade Principal</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Estaleiros: fornecer espa&ccedil;os abertos para a armazenagem dos equipamentos para as opera&ccedil;&otilde;es.</li>\r\n<li>Acomoda&ccedil;&atilde;o: providenciar um servi&ccedil;o de acomoda&ccedil;&atilde;o integrada para todos os funcion&aacute;rios das operadoras</li>\r\n<li>Seguran&ccedil;a: Servi&ccedil;os de seguran&ccedil;a profissional.</li>\r\n<li>Armaz&eacute;ns: Oferecer espa&ccedil;os de armazenagem coberta.</li>\r\n</ul>\r\n</div>\r\n<div><strong>Outros Servi&ccedil;os</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Telecomunica&ccedil;&otilde;es: Sistema de telecomunica&ccedil;&atilde;o entre os p&oacute;los de trabalho das operadoras.</li>\r\n</ul>\r\n</div>\r\n<div><strong>Terminais Diversos</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Terminal de contentores: Servi&ccedil;o comercial de contentores.</li>\r\n<li>Terminal de carv&atilde;o: Futura terminal de carv&atilde;o.</li>\r\n<li>Terminal de combust&iacute;vel: Terminal para a gest&atilde;o dos combust&iacute;veis.</li>\r\n</ul>\r\n</div>', 'Áreas de Logística', 'img/portos.jpg', '2020-09-10 17:05:05', NULL, 1),
(11, 'noticias', 'noticias', 'MEDIDAS DE PREVENÇÃO CONTRA O COVID-19', '', '<p>No &acirc;mbito da sua Responsabilidade Social, a ENH Logistics definiu um conjunto de Medidas de Preven&ccedil;&atilde;o ao COVID-19</p>', '<ol>\r\n<li><strong>INTRODU&Ccedil;&Atilde;O</strong></li>\r\n</ol>\r\n<p>No &acirc;mbito da sua Responsabilidade Social, a ENH Logistics definiu um conjunto de Medidas de Preven&ccedil;&atilde;o ao COVID-19, que &eacute; uma ferramenta estabelecida e implementada na empresa para a preven&ccedil;&atilde;o desta Pandemia. O Plano foi desenhado seguindo as orienta&ccedil;&otilde;es emanadas pela &nbsp;Organiza&ccedil;&atilde;o Mundial da Sa&uacute;de, pelo Minist&eacute;rio da Sa&uacute;de, bem como as medidas emanadas no &acirc;mbito do Estado de Emerg&ecirc;ncia.</p>\r\n<ol start=\"2\">\r\n<li><strong>OBJETIVO DO PLANO A N&Iacute;VEL DA EMPRESA</strong></li>\r\n</ol>\r\n<ul>\r\n<li>Evitar o cont&aacute;gio entre colaboradores e assegurar a protec&ccedil;&atilde;o das suas fam&iacute;lias.</li>\r\n</ul>\r\n<ol start=\"3\">\r\n<li><strong>MEDIDAS IMPLEMENTADAS PARA A PREVEN&Ccedil;&Atilde;O DO COVID-19</strong></li>\r\n</ol>\r\n<ul>\r\n<li>Restri&ccedil;&atilde;o de viagens tanto internacionais como dom&eacute;sticas;</li>\r\n<li>Montagem de dispensadores com &aacute;lcool para desinfec&ccedil;&atilde;o das m&atilde;os; &nbsp;</li>\r\n<li>Esteriliza&ccedil;&atilde;o regular de lou&ccedil;a sanit&aacute;ria;</li>\r\n<li>Desinfec&ccedil;&atilde;o peri&oacute;dica geral dos escrit&oacute;rio;</li>\r\n<li>Uso de Term&oacute;metro Infravermelho de medi&ccedil;&atilde;o de temperatura;</li>\r\n<li>Prefer&ecirc;ncia pelo uso de Sistemas de v&iacute;deo-confer&ecirc;ncias e limita&ccedil;&atilde;o de reuni&otilde;es presenciais;</li>\r\n<li>Coloca&ccedil;&atilde;o de um dispositivo para a desinfec&ccedil;&atilde;o dos p&eacute;s;</li>\r\n<li>Restri&ccedil;&otilde;es de encontros internos com m&aacute;ximo 4 pessoas com dist&acirc;ncia de cerca de 1 metro;</li>\r\n<li>Lavagem das m&atilde;os com &aacute;gua e sab&atilde;o;</li>\r\n<li>Evitar ao m&aacute;ximo a troca de equipamentos e pertences entre colaboradores;</li>\r\n<li>Adop&ccedil;&atilde;o do sistema de rotatividade dos colaboradores e prefer&ecirc;ncia pelo tele-trabalho;</li>\r\n<li>Disponibiliza&ccedil;&atilde;o de m&aacute;scaras descart&aacute;veis para visitantes;</li>\r\n<li>Uso obrigat&oacute;rio de m&aacute;scara pelos colaboradores.</li>\r\n</ul>\r\n<ul>\r\n<li>Cubrir o nariz e a boca ao tossir e espirrar;</li>\r\n<li>Evitar tocar nos olhos, nariz e boca;</li>\r\n<li>Evitar contato pr&oacute;ximo (menos de 2 metros) entre colegas</li>\r\n</ul>\r\n<p><strong>Recomenda&ccedil;&otilde;es em caso de suspeita de sintomas do Covid-19</strong></p>\r\n<ul>\r\n<li><strong>Restrinja as atividades fora de casa, exceto para buscar assist&ecirc;ncia m&eacute;dica.</strong>&nbsp;N&atilde;o ir ao trabalho ou a &aacute;reas p&uacute;blicas e n&atilde;o use transporte p&uacute;blico ou t&aacute;xi. Use servi&ccedil;os de entrega para compras em supermercados, farm&aacute;cias e alimentos.</li>\r\n<li><strong>Separe-se das outras pessoas em sua casa.</strong>&nbsp;N&atilde;o receber visitas sociais e restrinja ao m&aacute;ximo o n&uacute;mero de contatos, principalmente com idosos. Se voc&ecirc; estiver hospedado com outras pessoas, tanto quanto poss&iacute;vel, voc&ecirc; deve ficar em um c&ocirc;modo diferente dos demais.</li>\r\n<li><strong>Se tiver sintomas, ligue antes de ir para uma cl&iacute;nica</strong>&nbsp;ou hospital de refer&ecirc;ncia.</li>\r\n<li><strong>Use uma m&aacute;scara facial:</strong>&nbsp;voc&ecirc; deve usar uma m&aacute;scara quando estiver no mesmo ambiente que outras pessoas e quando for visitar um m&eacute;dico. Se voc&ecirc; n&atilde;o pode usar uma m&aacute;scara e tiver sintomas, as pessoas que moram com voc&ecirc; devem usar uma enquanto estiverem no mesmo c&ocirc;modo que voc&ecirc;. Lembre-se de trocar a m&aacute;scara ou lavar com &aacute;gua e sab&atilde;o sempre que necess&aacute;rio.</li>\r\n<li><strong>Em caso de tosse ou espirro, cubra a boca e o nariz com um len&ccedil;o de papel</strong>&nbsp;ou com a protec&ccedil;&atilde;o do bra&ccedil;o dobrado em formato de &ldquo;V&rdquo;. Jogue len&ccedil;os usados ​​em uma lixeira forrada e lave imediatamente as m&atilde;os com &aacute;gua e sab&atilde;o.</li>\r\n<li><strong>Lave as m&atilde;os frequentemente e com bastante &aacute;gua e sab&atilde;o</strong>&nbsp;por pelo menos 20 segundos. Voc&ecirc; pode usar um desinfetante para as m&atilde;os &agrave; base de &aacute;lcool se n&atilde;o houver &aacute;gua e sab&atilde;o e se as m&atilde;os n&atilde;o estiverem visivelmente sujas. Evite tocar nos olhos, nariz e boca com as m&atilde;os n&atilde;o lavadas</li>\r\n<li><strong>Evite compartilhar itens dom&eacute;sticos.</strong> N&atilde;o deve compartilhar pratos, copos, x&iacute;caras, utens&iacute;lios de cozinha, toalhas, roupas de cama ou outros itens com outras pessoas em sua casa. Depois de usar esses itens, voc&ecirc; deve lav&aacute;-los cuidadosamente com &aacute;gua e sab&atilde;o.</li>\r\n</ul>', 'Sem Barra Lateral', 'img/covid19.png', '2020-09-13 23:10:54', NULL, 1),
(12, 'noticias', 'noticias', 'Projecto Rompco Loopline II', '', '<p>Expans&atilde;o de um gasoduto de 865 km de transporte de hidrocarbonetos da Central de Processamento em Temane , na prov&iacute;ncia de Inhambane...</p>', '<p>Um projecto de investimento que contemplou a expans&atilde;o de um gasoduto de 865 km de transporte de hidrocarbonetos da Central de Processamento em Temane, na prov&iacute;ncia de Inhambane, para Secunda, na &Aacute;frica do Sul, ao benef&iacute;cio de mercados adicionais em Mo&ccedil;ambique e na &Aacute;frica do Sul, &agrave; medida que o g&aacute;s se tornar dispon&iacute;vel.</p>\r\n<p>Durante o desenvolvimento, tamb&eacute;m concebeu-se o Projecto de constru&ccedil;&atilde;o e gest&atilde;o do Acampamento de Funhalouro com a capacidade de albergar mais de 500 pessoas, que serviu de infraestrutura de suporte para implementa&ccedil;&atilde;o do projecto Rompco Loopline 2.</p>', 'Sem Barra Lateral', 'img/loopline.png', '2020-09-14 19:57:59', NULL, 0),
(13, 'noticias', 'noticias', 'Lançamento do Casco Coral Sul FLNG da ENI', '', '<p>Lan&ccedil;amento do Casco Coral Sul FLNG da ENI</p>', '<p>Lan&ccedil;amento do Casco Coral Sul FLNG da ENI</p>', '', 'img/coral1.jpg', '2020-09-14 20:32:21', NULL, 0),
(14, 'noticias', 'noticias', 'ENH Integrated Logistics Services - ENHILS', '', '<p>ENH Integrated Logistics Services - ENHILS &eacute; respons&aacute;vel pelo investimento, projec&ccedil;&atilde;o, constru&ccedil;&atilde;o, opera&ccedil;&atilde;o da Base Log&iacute;stica de Pemba e gest&atilde;o de terminais portu&aacute;rios...</p>', '<p>A ENHILS &eacute; uma parceria entre a ENH Logistics, SA a Orleans Invest Holding, Lda e a ENH Rovuma &Aacute;rea 1. &Eacute; respons&aacute;vel pelo investimento, projec&ccedil;&atilde;o, constru&ccedil;&atilde;o, opera&ccedil;&atilde;o da Base Log&iacute;stica de Pemba e gest&atilde;o de terminai portu&aacute;rios na Prov&iacute;ncia de Cabo Delgado, bem como o desenvolvimento e implementa&ccedil;&atilde;o de infraestruturas de apoio as opera&ccedil;&otilde;es de petr&oacute;leo e g&aacute;s em Onshore e Offshore.</p>\r\n<p>O Centro Integrado de Servi&ccedil;os de Petr&oacute;leo e G&aacute;s em Pemba (Base Log&iacute;stica de Pemba) foi concebido para fornecer servi&ccedil;os log&iacute;sticos integrados num sistema <em>one-stop-shop</em>, e ir&aacute; contemplar as seguintes infraestruturas:</p>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Um porto comercial;</li>\r\n<li>Uma base de tr&acirc;nsito e aprovisionamento;</li>\r\n<li>Estaleiros de constru&ccedil;&atilde;o/fabrico submarinos;</li>\r\n<li>Instala&ccedil;&otilde;es de tubula&ccedil;&atilde;o;</li>\r\n<li>Instala&ccedil;&otilde;es de abastecimento de combust&iacute;vel /terminais;</li>\r\n<li>Estaleiros de repara&ccedil;&atilde;o naval;</li>\r\n<li>Desenvolvimento de apoio necess&aacute;rio ao trabalho e gest&atilde;o di&aacute;rios do porto, incluindo instala&ccedil;&otilde;es residenciais e comerciais;</li>\r\n<li>&Aacute;reas de apoio &agrave;s actividades relacionadas com petr&oacute;leo e g&aacute;s a jusante, incluindo um pequeno terminal de recep&ccedil;&atilde;o de GNL, fertilizantes, GTL, DME e centrais el&eacute;ctricas.</li>\r\n</ul>', '', 'img/enhils1.png', '2020-09-14 20:34:11', NULL, 0),
(15, 'noticias', 'noticias', 'Cimeira de Gás, alusivo ao Gás Summit', '', '<p>Presidente da Rep&uacute;blica destaca sector de Hidrocarbonetos na Agenda Governativa dos pr&oacute;ximos 5 anos</p>', '', 'Sem Barra Lateral', 'img/gas_summit.png', '2020-09-14 20:36:20', NULL, 0),
(16, 'noticias', 'noticias', 'ENHL – Zakher', '', '<p>A Zakher det&eacute;m uma quota de mercado no M&eacute;dio Oriente de aproximadamente 80% no fornecimento e opera&ccedil;&atilde;o de &ldquo;Jack-Up Barges&rdquo;...</p>', '<p>A ENHL-Zakher, Lda &eacute; uma parceria entre a ENHL e a Zakher Marine International Inc., para prover servi&ccedil;os mar&iacute;timos &agrave; ind&uacute;stria de Petr&oacute;leo e G&aacute;s com o objectivo de operar navios tais como: <em>Anchor Handling Tug Supply Vessel (AHTS), Platform Supply Vessel (PSV), Fast Supply Intervention Vessel (FSIV), Multi Purpose Support Vessel (MPSV)</em> e outros navios de transporte de tripula&ccedil;&atilde;o.</p>\r\n<p>A Zakher det&eacute;m uma quota de mercado no M&eacute;dio Oriente de aproximadamente 80% no fornecimento e opera&ccedil;&atilde;o de &ldquo;Jack-Up Barges&rdquo;, tamb&eacute;m ocupa uma posi&ccedil;&atilde;o de destaque com um portf&oacute;lio diversificado de contratos que lhe permite operar em Mo&ccedil;ambique como um mercado emergente no contexto da ind&uacute;stria de Petr&oacute;leo &amp; G&aacute;s.</p>', '', 'img/zakher.png', '2020-09-14 20:37:40', NULL, 0),
(18, 'sobre_nos', NULL, 'SUDO', '', '', '<p>TESTE</p>', 'Áreas de Logística', '', '2020-12-15 09:19:06', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pagina_widget`
--

CREATE TABLE `pagina_widget` (
  `id_pagina_widget` int(11) NOT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `id_widget` int(11) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagina_widget`
--

INSERT INTO `pagina_widget` (`id_pagina_widget`, `id_pagina`, `id_widget`, `tipo`) VALUES
(1, NULL, 1, 'area_logistica'),
(2, NULL, 2, 'area_logistica'),
(3, NULL, 3, 'contactos');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `introducao` varchar(255) DEFAULT NULL,
  `corpo` text,
  `categoria` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `titulo`, `introducao`, `corpo`, `categoria`, `tipo`, `id_media`) VALUES
(1, 'Parceria entre a ENHL e Zakher', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Trata-se de uma parceria firmada entre a ENHL e a empresa emiradense Zakher Marine International Inc., em 2019, para pr', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Trata-se de uma parceria firmada entre a ENHL e a empresa dos Emirados &Aacute;rabes Unidos Zakher Marine International Inc., em 2019, para prover servi&ccedil;os mar&iacute;tmos &agrave; ind&uacute;stria de petr&oacute;leo e g&aacute;s.</span></p>\r\n<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A sociedade denominada ENHL-Zakher, Lda foi criada como o objectivo de operar navios (AHTS, PSV, FSIV, MPSV e outros navios de transporte de tripula&ccedil;&atilde;o.</span></p>', 'Serviços', 'parceria', 0),
(2, 'Parceria entre a ENHL e TechnipFMC', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Trata-se parceria firmada em 2018, entre a ENH Logistics e a TechnipFMC, A sociedade tem por objecto a presta&ccedil;&a', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A ENHL-TechnipFMC, Lda resulta da parceria estabelecida em 2018, entre a ENH Logistics e a Technip Middle East FZCO.</span></p>\r\n<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> A sociedade tem por objecto a presta&ccedil;&atilde;o de servi&ccedil;os de engenharia e gest&atilde;o de projectos &agrave; ind&uacute;stria do petr&oacute;leo e g&aacute;s de Mo&ccedil;ambique, incluindo a elabora&ccedil;&atilde;o de estudos de viabilidade, concep&ccedil;&atilde;o, projecto e constru&ccedil;&atilde;o, o acompanhamento de processos de fabrica&ccedil;&atilde;o, instala&ccedil;&atilde;o e teste, servi&ccedil;os de pr&eacute; e p&oacute;s-comissionamento, e quaisquer outros servi&ccedil;os conexos ou relacionados com os acima referidos.</span></p>', 'Serviços', 'parceria', 0),
(3, 'ENMAR', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Trata-se uma parceria firmada entre a ENHL, a Subsea 7 e a WORLD ASSISTANCE PETROLEUM OPERATIONS (WAPO), com objectivo ', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A ENMAR resulta da parceria estabelecida em 2013, entre a ENHL, a Subsea 7 e a WORLD ASSISTANCE PETROLEUM OPERATIONS (WAPO).</span></p>\r\n<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A sociedade foi constituida com objectivo de desenvolver e operar uma unidade de fabrica&ccedil;&atilde;o (Fabrication Yard) para atender &agrave;s necessidades dos futuros projectos de constru&ccedil;&atilde;o de Petr&oacute;leo &amp; G&aacute;s onshore e offshore.</span></p>', 'Logística', 'parceria', 0),
(5, 'ARP SA', '', '', 'Serviços', 'parceria', 0),
(6, 'ENHL Small Scale LNG', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Esta parceria foi firmada em Dezembro de 2019 entre a ENHL conta com 51% do interesse participativo e a TCRK LNG com 49', '<p style=\"text-align: justify;\"><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Esta parceria foi estabelecida em 2019 entre a ENHL e a TCRK LNG, e ter&aacute; a Stena Bulk como parceiro t&eacute;cnico.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A sociedade ENHL Small Scale LNG, Lda foi criada para desenvolver um projecto de importa&ccedil;&atilde;o e distribui&ccedil;&atilde;o de G&aacute;s Natural Liquefeito para o pa&iacute;s e para a regi&atilde;o da SADC.</span></p>', 'Logística', 'parceria', 0),
(7, 'ENH LNG Shipping', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">ENH LNG Shipping Lda &eacute; uma sociedade Joint Venture constitu&iacute;da entre a ENH Logistics e a TCRK Marine Moza', '<p style=\"text-align: justify;\"><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">ENH LNG Shipping Lda &eacute; uma sociedade constitu&iacute;da em 2019 entre a ENH Logistics e a TCRK Marine Mozambique. TCRK Marine Mozambique &eacute; uma Joint Venture entre a TCRK Marine e a Stena Bulk AB. Sendo que a Stena Bulk &eacute; uma companhia de navega&ccedil;&atilde;o de classe mundial propriet&aacute;ria e operadora de navios que, a atrav&eacute;s da &ldquo;Stena Sphere&rdquo; abrange todo o leque da opera&ccedil;&atilde;o de navios desde a gest&atilde;o aos servi&ccedil;os t&eacute;cnicos.</span></p>\r\n<p style=\"text-align: justify;\"><br style=\"box-sizing: border-box; color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A ENH LNG Shipping tem a miss&atilde;o de contribuir para o desenvolvimento da capacidade interna e conhecimento no sector de transporte mar&iacute;timo de G&aacute;s Natural Liquefeito por forma a assegurar a participa&ccedil;&atilde;o de Mo&ccedil;ambique em toda cadeia de valor de produ&ccedil;&atilde;o do g&aacute;s.</span></p>', 'Logística', 'parceria', 0),
(8, 'Parceria entre a ENHL e Bonatti', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Trata-se de uma parceria firmada em 2013, entre ENH Logistics e a empresa italiana Bonatti, Spa, para actuar na presta&', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Trata-se de uma parceria firmada em 2013, entre ENH Logistics e a empresa italiana Bonatti, Spa, para actuar na presta&ccedil;&atilde;o de servi&ccedil;os &agrave; ind&uacute;stria de petr&oacute;leio e g&aacute;s, nas &aacute;reas de Constru&ccedil;&atilde;o, Gest&atilde;o e Manuten&ccedil;&atilde;o de infraestruturas petrol&iacute;feras. Actualmente a ENHL-Bonatti, tem as suas aten&ccedil;&otilde;es centradas na zona de Temane, na prov&iacute;ncia de Inhambane e distrito de Palma, na prov&iacute;ncia de Cabo Delgado.</span></p>\r\n<p><strong>PROJECTOS DESENVOLVIDOS</strong></p>\r\n<p><strong>Instala&ccedil;&atilde;o de Compressor de Baixa Press&atilde;o Fase 3-LPC3</strong></p>\r\n<p>O projecto LPC 3 que teve o seu in&iacute;cio em Outubro em 2018 e sua conclus&atilde;o em Agosto de 2019 e foi or&ccedil;ado em USD 6,5 Milh&otilde;es. Este projecto consistiu em trabalhos de engenharia conducentes &agrave; instala&ccedil;&atilde;o de uma nova esta&ccedil;&atilde;o de compress&atilde;o no <em>Central Processing Facility</em> (CPF).</p>\r\n<p><strong>Instala&ccedil;&atilde;o do Acampamento T3 da Sasol</strong></p>\r\n<p>O projecto foi or&ccedil;ado em&nbsp; USD7 milh&otilde;es e tinha como objectivos a constru&ccedil;&atilde;o de um acampamento na base de Pre-fabricados para a Sasol, com capacidade para acomodar cerca de 160 pessoas.</p>\r\n<p><strong>Constru&ccedil;&atilde;o do Acampamento Pioneiro</strong></p>\r\n<p>O projecto est&aacute; or&ccedil;ado em cerca de USD 45 milh&otilde;es e visava a constru&ccedil;&atilde;o de um acampamento na base de Pre-fabricados para a Exxonmobil, com capacidade para acomodar cerca de 500 pessoas, e extens&atilde;o para mais 700 pessoas.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>PROJECTOS EM CARTEIRA</strong></p>\r\n<p><strong>Constru&ccedil;&atilde;o do Acampamento da Total em Muxara</strong></p>\r\n<p style=\"language: pt; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: justify; text-justify: inter-ideograph; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: black;\">O contrato em refer&ecirc;ncia est&aacute; avaliado em USD 5 milh&otilde;es, tendo iniciado em Fevereiro de 2021 e ter&aacute; a dura&ccedil;&atilde;o de 7 meses.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"> </span></p>\r\n<p style=\"language: pt; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: justify; text-justify: inter-ideograph; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\">&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"> </span></p>\r\n<p style=\"language: pt; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: justify; text-justify: inter-ideograph; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif; color: black;\">Quando estiver conclu&iacute;do o Acampamento da Total em Muxara ter&aacute; capacidade para acomodar 90 pessoas.</span></p>\r\n<p style=\"language: pt; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: justify; text-justify: inter-ideograph; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\">&nbsp;</p>', 'Construção', 'parceria', 0),
(9, 'ENHILS', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A ENH Integrated Logistics Services, S.A &eacute; respons&aacute;vel por investir e gerir a Base Log&iacute;stica de Pe', '<p><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A ENH Integrated Logistics Services, S.A. (ENHILS) &eacute; uma sociedade que resulta da parceria estabelecida entre a ENH Logistics, a Orleans Invest Holding, Lda e a ENH Rovuma &Aacute;rea 1 em 2014. A ENHILS &eacute; respons&aacute;vel por investir e gerir a Base Log&iacute;stica de Pemba.</span></p>\r\n<p><br style=\"box-sizing: border-box; color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: \'Fira Sans\', sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">A mesma foca-se na projec&ccedil;&atilde;o, constru&ccedil;&atilde;o, opera&ccedil;&atilde;o e gest&atilde;o de terminais portu&aacute;rios especializados na prov&iacute;ncia de Cabo Delgado, bem como o desenvolvimento e implementa&ccedil;&atilde;o de infraestruturas de apoioas opera&ccedil;&otilde;es de petr&oacute;leo e g&aacute;s Onshore e Offshore.</span></p>', 'Logística', 'parceria', 0),
(11, 'NOSSO PORTFÓLIO', '', '', 'Principal', 'principal', 60);

-- --------------------------------------------------------

--
-- Table structure for table `seccao`
--

CREATE TABLE `seccao` (
  `id_seccao` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `subtitulo` varchar(45) DEFAULT NULL,
  `colunas` varchar(45) DEFAULT NULL,
  `foto_fundo` varchar(45) DEFAULT NULL,
  `cor_fundo` varchar(45) DEFAULT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `id_home` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `id_slider` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `introducao` mediumtext,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `descricao`, `id_slider`, `titulo`, `introducao`, `id_media`) VALUES
(16, 'Fábrica da SASOL em Temane!', 1, 'Fábrica da SASOL em Temane!', 'A fábrica da Sasol Petróleo Internacional em Temane, Província de Inhambane, foi construída para processar o Gás Natural de Pande e Temane. O gás processado é depois exportado para África do Sul através de um gasoduto transfronteiriço, onde a maior parte do produto é consumido.', 51),
(17, '', 1, 'Projecto Rompco Loopline II', 'O Loopline 2 foi um projecto de investimento de 210 milhões de Dólares Americanos, que contemplava a expansão do gasoduto de 865 km (Loopline 1)', 55),
(18, '', 1, 'Vista Aérea da Base Logística de Pemba', 'O Centro de Serviços de Petróleo e Gás em Pemba, vulgarmente conhecido por “Base Logística de Pemba” (BLP), é uma infraestrutura concebida para albergar um sistema de uma solução integrada, one-stop-shop, para a prestação de serviços logísticos de apoio à indústria petrolífera em Moçambique.', 56);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `designacao` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `designacao`, `descricao`) VALUES
(1, 'Home Slider', 'Banner Principal');

-- --------------------------------------------------------

--
-- Table structure for table `sobre_nos`
--

CREATE TABLE `sobre_nos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `corpo` text NOT NULL,
  `missao` text NOT NULL,
  `visao` text NOT NULL,
  `valores` text NOT NULL,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sobre_nos`
--

INSERT INTO `sobre_nos` (`id`, `titulo`, `corpo`, `missao`, `visao`, `valores`, `id_media`) VALUES
(1, 'ENH Logistics', '<p class=\"text\">A ENH Logistics, SA &eacute; uma empresa subsidi&aacute;ria da ENH, E.P., criada em Dezembro de 2011 com o objectivo de prestar servi&ccedil;os de Log&iacute;stica e fornecer infraestruturas de suporte ao sector de Hidrocarbonetos em Mo&ccedil;ambique.</p>\r\n<p>&nbsp;</p>\r\n<h3>Objectivos</h3>\r\n<ul>\r\n<li>Estabelecer empresas nacionais que se dediquem a presta&ccedil;&atilde;o de servi&ccedil;os especializados de log&iacute;stica, conforme as unidades de neg&oacute;cio da ENH Log&iacute;stics.</li>\r\n<li>Promover o crescimento sustent&aacute;vel das opera&ccedil;&otilde;es de log&iacute;stica, atrav&eacute;s do estabelecimento do contrato de longa dura&ccedil;&atilde;o com os operadores.</li>\r\n<li>Tomar a ENH Logistics como o ve&iacute;culo principal de log&iacute;stica para as opera&ccedil;&otilde;es na ind&uacute;stria petrol&iacute;fera, representando os demais intervenientes no processo de presta&ccedil;&atilde;o de servi&ccedil;os.</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<p>Prestar servi&ccedil;os de log&iacute;stica rent&aacute;vel, com seguran&ccedil;a e qualidade exemplar, de modo a servir as companhias petrol&iacute;feras em Mo&ccedil;ambique, contribuindo significativamente para o desenvolvimento do pa&iacute;s, atrav&eacute;s das suas diversificadas frentes de actua&ccedil;&atilde;o e implementar uma politica de responsabilidade s&oacute;cio ambiental que beneficie as comunidades locais, garantindo a sustentabilidade das nossas actividades.</p>', '<p>Liderar a presta&ccedil;&atilde;o de servi&ccedil;os log&iacute;sticos de apoio ao sector petrol&iacute;fero no pa&iacute;s, com garantia de qualidade e seguran&ccedil;a, apresenta&ccedil;&atilde;o como diferencial a actua&ccedil;&atilde;o de forma integrada, prestando servi&ccedil;o a toda cadeia de valores da produ&ccedil;&atilde;o petrol&iacute;fera.</p>', '<ul>\r\n<li>Mo&ccedil;ambicanidade</li>\r\n<li>Responsabilidade</li>\r\n<li>Integridade</li>\r\n<li>Lideran&ccedil;a</li>\r\n<li>Seguran&ccedil;a</li>\r\n<li>Qualidade</li>\r\n</ul>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id_social` int(11) NOT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `twiter` varchar(50) DEFAULT NULL,
  `google_plus` varchar(50) DEFAULT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `pinterest` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `designacao` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`, `designacao`, `descricao`, `alias`) VALUES
(1, 'geral', 'Áreas De Logística', 'Para todas as paginas e itens de menu criados para Áreas De Logística', 'area_logistica'),
(3, 'geral', 'Contactos', 'Para paginas do tipo contacto', 'contactos'),
(4, 'geral', 'Sem Tipo', 'Para paginas de tipo', 'sem_tipo'),
(5, 'geral', 'Blog', 'Para paginas que estarão no blog do website', 'blog'),
(6, 'geral', 'Parceiros', 'Para paginas dos parceiros ', 'parceiros'),
(7, 'geral', 'Projectos', 'Para paginas dos projecto ', 'projectos'),
(8, 'geral', 'Sobre Nós', 'Para paginas e sub-paginas da secção ou menu de Sobre Nós', 'sobre_nos'),
(9, 'geral', 'Pagina Inicial', 'Para secções da pagina inicial', 'pagina_inicial'),
(10, 'widget', 'Endereço', '', 'endereco'),
(11, 'widget', 'Mapa', '', 'mapa'),
(12, 'widget', 'Contacto', '', 'contacto'),
(13, 'widget', 'Social', '', 'social'),
(14, 'widget', 'Menu', '', 'menu'),
(15, 'geral', 'Notícia', 'Para notícias', 'noticias');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `usuario`, `senha`, `email`, `criado_em`, `estado`, `foto`) VALUES
(1, 'Administrador', 'enhladmin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@enhl.co.mz', '2020-03-30 09:01:55', 1, NULL),
(3, 'Teste', 'teste', '2e6f9b0d5885b6010f9167787445617f553a735f', 'teste@email.com', '2020-05-10 11:10:01', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id_widget` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `corpo` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `id_associado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id_widget`, `titulo`, `corpo`, `tipo`, `id_associado`) VALUES
(1, 'Áreas de Logística', '', 'menu', 1),
(2, 'Entre em Contacto', '', 'contacto', 1),
(3, 'Endereço', '', 'endereco', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `contacto_mensagem`
--
ALTER TABLE `contacto_mensagem`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Indexes for table `estrutura_organica`
--
ALTER TABLE `estrutura_organica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria_album`
--
ALTER TABLE `galeria_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `galeria_photo`
--
ALTER TABLE `galeria_photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `galeria_video`
--
ALTER TABLE `galeria_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `info_historica`
--
ALTER TABLE `info_historica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_menu`
--
ALTER TABLE `item_menu`
  ADD PRIMARY KEY (`id_item_menu`);

--
-- Indexes for table `mapa`
--
ALTER TABLE `mapa`
  ADD PRIMARY KEY (`id_mapa`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indexes for table `pagina_widget`
--
ALTER TABLE `pagina_widget`
  ADD PRIMARY KEY (`id_pagina_widget`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seccao`
--
ALTER TABLE `seccao`
  ADD PRIMARY KEY (`id_seccao`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `sobre_nos`
--
ALTER TABLE `sobre_nos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id_social`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id_widget`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacto_mensagem`
--
ALTER TABLE `contacto_mensagem`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estrutura_organica`
--
ALTER TABLE `estrutura_organica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeria_album`
--
ALTER TABLE `galeria_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeria_photo`
--
ALTER TABLE `galeria_photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_historica`
--
ALTER TABLE `info_historica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item_menu`
--
ALTER TABLE `item_menu`
  MODIFY `id_item_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mapa`
--
ALTER TABLE `mapa`
  MODIFY `id_mapa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pagina_widget`
--
ALTER TABLE `pagina_widget`
  MODIFY `id_pagina_widget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seccao`
--
ALTER TABLE `seccao`
  MODIFY `id_seccao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sobre_nos`
--
ALTER TABLE `sobre_nos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id_social` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `id_widget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
