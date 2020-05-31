-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2020 às 15:17
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hunters_2020`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ativacao`
--

CREATE TABLE `ativacao` (
  `idAtiva` int(11) NOT NULL,
  `emailUsuario` varchar(80) NOT NULL,
  `codeGenerate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `campeonato`
--

CREATE TABLE `campeonato` (
  `campeonatoId` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `edicao` varchar(15) DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `premio` varchar(30) DEFAULT NULL,
  `fk_local_localId` int(11) DEFAULT NULL,
  `fk_jogo_jogoId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `jogoId` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `plataforma` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`jogoId`, `nome`, `categoria`, `plataforma`) VALUES
(1, 'CS:GO', 'FPS', 'Steam');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `localId` int(11) NOT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `logradouro` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membrosorg`
--

CREATE TABLE `membrosorg` (
  `idMembroUsuario` int(11) DEFAULT NULL,
  `idOrg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `membrosorg`
--

INSERT INTO `membrosorg` (`idMembroUsuario`, `idOrg`) VALUES
(35, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizacao`
--

CREATE TABLE `organizacao` (
  `organizacaoId` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `nacionalidade` int(11) NOT NULL,
  `usuarioDono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `organizacao`
--

INSERT INTO `organizacao` (`organizacaoId`, `nome`, `nacionalidade`, `usuarioDono`) VALUES
(1, 'UNA eSports', 33, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `paisId` int(11) NOT NULL,
  `paisNome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`paisId`, `paisNome`) VALUES
(1, 'AFEGANISTÃO'),
(2, 'ACROTÍRI E DECELIA'),
(3, 'ÁFRICA DO SUL'),
(4, 'ALBÂNIA'),
(5, 'ALEMANHA'),
(6, 'AMERICAN SAMOA'),
(7, 'ANDORRA'),
(8, 'ANGOLA'),
(9, 'ANGUILLA'),
(10, 'ANTÍGUA E BARBUDA'),
(11, 'ANTILHAS NEERLANDESAS'),
(12, 'ARÁBIA SAUDITA'),
(13, 'ARGÉLIA'),
(14, 'ARGENTINA'),
(15, 'ARMÉNIA'),
(16, 'ARUBA'),
(17, 'AUSTRÁLIA'),
(18, 'ÁUSTRIA'),
(19, 'AZERBAIJÃO'),
(20, 'BAHAMAS'),
(21, 'BANGLADECHE'),
(22, 'BARBADOS'),
(23, 'BARÉM'),
(24, 'BASSAS DA ÍNDIA'),
(25, 'BÉLGICA'),
(26, 'BELIZE'),
(27, 'BENIM'),
(28, 'BERMUDAS'),
(29, 'BIELORRÚSSIA'),
(30, 'BOLÍVIA'),
(31, 'BÓSNIA E HERZEGOVINA'),
(32, 'BOTSUANA'),
(33, 'BRASIL'),
(34, 'BRUNEI DARUSSALAM'),
(35, 'BULGÁRIA'),
(36, 'BURQUINA FASO'),
(37, 'BURUNDI'),
(38, 'BUTÃO'),
(39, 'CABO VERDE'),
(40, 'CAMARÕES'),
(41, 'CAMBOJA'),
(42, 'CANADÁ'),
(43, 'CATAR'),
(44, 'CAZAQUISTÃO'),
(45, 'CENTRO-AFRICANA REPÚBLICA'),
(46, 'CHADE'),
(47, 'CHILE'),
(48, 'CHINA'),
(49, 'CHIPRE'),
(50, 'COLÔMBIA'),
(51, 'COMORES'),
(52, 'CONGO'),
(53, 'CONGO REPÚBLICA DEMOCRÁTICA'),
(54, 'COREIA DO NORTE'),
(55, 'COREIA DO SUL'),
(56, 'COSTA DO MARFIM'),
(57, 'COSTA RICA'),
(58, 'CROÁCIA'),
(59, 'CUBA'),
(60, 'DINAMARCA'),
(61, 'DOMÍNICA'),
(62, 'EGIPTO'),
(63, 'EMIRADOS ÁRABES UNIDOS'),
(64, 'EQUADOR'),
(65, 'ERITREIA'),
(66, 'ESLOVÁQUIA'),
(67, 'ESLOVÉNIA'),
(68, 'ESPANHA'),
(69, 'ESTADOS UNIDOS'),
(70, 'ESTÓNIA'),
(71, 'ETIÓPIA'),
(72, 'FAIXA DE GAZA'),
(73, 'FIJI'),
(74, 'FILIPINAS'),
(75, 'FINLÂNDIA'),
(76, 'FRANÇA'),
(77, 'GABÃO'),
(78, 'GÂMBIA'),
(79, 'GANA'),
(80, 'GEÓRGIA'),
(81, 'GIBRALTAR'),
(82, 'GRANADA'),
(83, 'GRÉCIA'),
(84, 'GRONELÂNDIA'),
(85, 'GUADALUPE'),
(86, 'GUAM'),
(87, 'GUATEMALA'),
(88, 'GUERNSEY'),
(89, 'GUIANA'),
(90, 'GUIANA FRANCESA'),
(91, 'GUINÉ'),
(92, 'GUINÉ EQUATORIAL'),
(93, 'GUINÉ-BISSAU'),
(94, 'HAITI'),
(95, 'HONDURAS'),
(96, 'HONG KONG'),
(97, 'HUNGRIA'),
(98, 'IÉMEN'),
(99, 'ILHA BOUVET'),
(100, 'ILHA CHRISTMAS'),
(101, 'ILHA DE CLIPPERTON'),
(102, 'ILHA DE JOÃO DA NOVA'),
(103, 'ILHA DE MAN'),
(104, 'ILHA DE NAVASSA'),
(105, 'ILHA EUROPA'),
(106, 'ILHA NORFOLK'),
(107, 'ILHA TROMELIN'),
(108, 'ILHAS ASHMORE E CARTIER'),
(109, 'ILHAS CAIMAN'),
(110, 'ILHAS COCOS (KEELING)'),
(111, 'ILHAS COOK'),
(112, 'ILHAS DO MAR DE CORAL'),
(113, 'ILHAS FALKLANDS (ILHAS MALVINAS)'),
(114, 'ILHAS FEROE'),
(115, 'ILHAS GEÓRGIA DO SUL E SANDWICH DO SUL'),
(116, 'ILHAS MARIANAS DO NORTE'),
(117, 'ILHAS MARSHALL'),
(118, 'ILHAS PARACEL'),
(119, 'ILHAS PITCAIRN'),
(120, 'ILHAS SALOMÃO'),
(121, 'ILHAS SPRATLY'),
(122, 'ILHAS VIRGENS AMERICANAS'),
(123, 'ILHAS VIRGENS BRITÂNICAS'),
(124, 'ÍNDIA'),
(125, 'INDONÉSIA'),
(126, 'IRÃO'),
(127, 'IRAQUE'),
(128, 'IRLANDA'),
(129, 'ISLÂNDIA'),
(130, 'ISRAEL'),
(131, 'ITÁLIA'),
(132, 'JAMAICA'),
(133, 'JAN MAYEN'),
(134, 'JAPÃO'),
(135, 'JERSEY'),
(136, 'JIBUTI'),
(137, 'JORDÂNIA'),
(138, 'KIRIBATI'),
(139, 'KOWEIT'),
(140, 'LAOS'),
(141, 'LESOTO'),
(142, 'LETÓNIA'),
(143, 'LÍBANO'),
(144, 'LIBÉRIA'),
(145, 'LÍBIA'),
(146, 'LISTENSTAINE'),
(147, 'LITUÂNIA'),
(148, 'LUXEMBURGO'),
(149, 'MACAU'),
(150, 'MACEDÓNIA'),
(151, 'MADAGÁSCAR'),
(152, 'MALÁSIA'),
(153, 'MALAVI'),
(154, 'MALDIVAS'),
(155, 'MALI'),
(156, 'MALTA'),
(157, 'MARROCOS'),
(158, 'MARTINICA'),
(159, 'MAURÍCIA'),
(160, 'MAURITÂNIA'),
(161, 'MAYOTTE'),
(162, 'MÉXICO'),
(163, 'MIANMAR'),
(164, 'MICRONÉSIA'),
(165, 'MOÇAMBIQUE'),
(166, 'MOLDÁVIA'),
(167, 'MÓNACO'),
(168, 'MONGÓLIA'),
(169, 'MONTENEGRO'),
(170, 'MONTSERRAT'),
(171, 'NAMÍBIA'),
(172, 'NAURU'),
(173, 'NEPAL'),
(174, 'NICARÁGUA'),
(175, 'NÍGER'),
(176, 'NIGÉRIA'),
(177, 'NIUE'),
(178, 'NORUEGA'),
(179, 'NOVA CALEDÓNIA'),
(180, 'NOVA ZELÂNDIA'),
(181, 'OMÃ'),
(182, 'PAÍSES BAIXOS'),
(183, 'PALAU'),
(184, 'PALESTINA'),
(185, 'PANAMÁ'),
(186, 'PAPUÁSIA-NOVA GUINÉ'),
(187, 'PAQUISTÃO'),
(188, 'PARAGUAI'),
(189, 'PERU'),
(190, 'POLINÉSIA FRANCESA'),
(191, 'POLÓNIA'),
(192, 'PORTO RICO'),
(193, 'PORTUGAL'),
(194, 'QUÉNIA'),
(195, 'QUIRGUIZISTÃO'),
(196, 'REINO UNIDO'),
(197, 'REPÚBLICA CHECA'),
(198, 'REPÚBLICA DOMINICANA'),
(199, 'ROMÉNIA'),
(200, 'RUANDA'),
(201, 'RÚSSIA'),
(202, 'SAHARA OCCIDENTAL'),
(203, 'SALVADOR'),
(204, 'SAMOA'),
(205, 'SANTA HELENA'),
(206, 'SANTA LÚCIA'),
(207, 'SANTA SÉ'),
(208, 'SÃO CRISTÓVÃO E NEVES'),
(209, 'SÃO MARINO'),
(210, 'SÃO PEDRO E MIQUELÃO'),
(211, 'SÃO TOMÉ E PRÍNCIPE'),
(212, 'SÃO VICENTE E GRANADINAS'),
(213, 'SEICHELES'),
(214, 'SENEGAL'),
(215, 'SERRA LEOA'),
(216, 'SÉRVIA'),
(217, 'SINGAPURA'),
(218, 'SÍRIA'),
(219, 'SOMÁLIA'),
(220, 'SRI LANCA'),
(221, 'SUAZILÂNDIA'),
(222, 'SUDÃO'),
(223, 'SUÉCIA'),
(224, 'SUÍÇA'),
(225, 'SURINAME'),
(226, 'SVALBARD'),
(227, 'TAILÂNDIA'),
(228, 'TAIWAN'),
(229, 'TAJIQUISTÃO'),
(230, 'TANZÂNIA'),
(231, 'TERRITÓRIO BRITÂNICO DO OCEANO ÍNDICO'),
(232, 'TERRITÓRIO DAS ILHAS HEARD E MCDONALD'),
(233, 'TIMOR-LESTE'),
(234, 'TOGO'),
(235, 'TOKELAU'),
(236, 'TONGA'),
(237, 'TRINDADE E TOBAGO'),
(238, 'TUNÍSIA'),
(239, 'TURKS E CAICOS'),
(240, 'TURQUEMENISTÃO'),
(241, 'TURQUIA'),
(242, 'TUVALU'),
(243, 'UCRÂNIA'),
(244, 'UGANDA'),
(245, 'URUGUAI'),
(246, 'USBEQUISTÃO'),
(247, 'VANUATU'),
(248, 'VENEZUELA'),
(249, 'VIETNAME'),
(250, 'WALLIS E FUTUNA'),
(251, 'ZÂMBIA'),
(252, 'ZIMBABUÉ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `fk_partida_partidaId` int(11) DEFAULT NULL,
  `fk_organizacao_organizacaoId` int(11) DEFAULT NULL,
  `ponto_posicao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `partida`
--

CREATE TABLE `partida` (
  `partidaId` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `fk_campeonato_campeonatoId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(200) NOT NULL,
  `nickName` varchar(150) NOT NULL,
  `dataNascimento` date NOT NULL,
  `nacionalidade` int(11) NOT NULL,
  `avatar_perfil` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idUsuario`, `nomeUsuario`, `nickName`, `dataNascimento`, `nacionalidade`, `avatar_perfil`) VALUES
(35, 'Gabriel de Almeida', '505', '1998-03-31', 33, NULL),
(36, 'Walisson Carvalho', 'WC', '1970-04-30', 33, NULL),
(37, 'Mark', 'MK', '1966-11-20', 33, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuarioId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuarioId`, `email`, `senha`, `ativo`) VALUES
(35, 'gabriel.alemdia.p@outlook.com', 'de12c7a0762ff0c47c0190cb083fb2c9', 2),
(36, 'walisson.carvalho@prof.una.br', 'de12c7a0762ff0c47c0190cb083fb2c9', 2),
(37, 'mark@prof.una.br', 'de12c7a0762ff0c47c0190cb083fb2c9', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ativacao`
--
ALTER TABLE `ativacao`
  ADD PRIMARY KEY (`idAtiva`);

--
-- Indexes for table `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`campeonatoId`),
  ADD KEY `FK_campeonato_2` (`fk_local_localId`),
  ADD KEY `FK_campeonato_3` (`fk_jogo_jogoId`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`jogoId`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`localId`);

--
-- Indexes for table `membrosorg`
--
ALTER TABLE `membrosorg`
  ADD KEY `FK_MEMBROS_ORG` (`idOrg`),
  ADD KEY `FK_MEMBRO_USUARIO` (`idMembroUsuario`);

--
-- Indexes for table `organizacao`
--
ALTER TABLE `organizacao`
  ADD PRIMARY KEY (`organizacaoId`),
  ADD KEY `fk_org_nacional` (`nacionalidade`),
  ADD KEY `fk_usuario_org` (`usuarioDono`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`paisId`);

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD KEY `FK_participantes_1` (`fk_partida_partidaId`),
  ADD KEY `FK_participantes_2` (`fk_organizacao_organizacaoId`);

--
-- Indexes for table `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`partidaId`),
  ADD KEY `FK_partida_2` (`fk_campeonato_campeonatoId`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_pais_nacional` (`nacionalidade`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ativacao`
--
ALTER TABLE `ativacao`
  MODIFY `idAtiva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `campeonatoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `jogoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `localId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizacao`
--
ALTER TABLE `organizacao`
  MODIFY `organizacaoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `paisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `partida`
--
ALTER TABLE `partida`
  MODIFY `partidaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ativacao`
--
ALTER TABLE `ativacao`
  ADD CONSTRAINT `fk_idativa_idusuario` FOREIGN KEY (`idAtiva`) REFERENCES `usuario` (`usuarioId`);

--
-- Limitadores para a tabela `campeonato`
--
ALTER TABLE `campeonato`
  ADD CONSTRAINT `FK_campeonato_2` FOREIGN KEY (`fk_local_localId`) REFERENCES `local` (`localId`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_campeonato_3` FOREIGN KEY (`fk_jogo_jogoId`) REFERENCES `jogo` (`jogoId`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `membrosorg`
--
ALTER TABLE `membrosorg`
  ADD CONSTRAINT `FK_MEMBROS_ORG` FOREIGN KEY (`idOrg`) REFERENCES `organizacao` (`organizacaoId`),
  ADD CONSTRAINT `FK_MEMBRO_USUARIO` FOREIGN KEY (`idMembroUsuario`) REFERENCES `usuario` (`usuarioId`);

--
-- Limitadores para a tabela `organizacao`
--
ALTER TABLE `organizacao`
  ADD CONSTRAINT `fk_org_nacional` FOREIGN KEY (`nacionalidade`) REFERENCES `pais` (`paisId`),
  ADD CONSTRAINT `fk_usuario_org` FOREIGN KEY (`usuarioDono`) REFERENCES `usuario` (`usuarioId`);

--
-- Limitadores para a tabela `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `FK_participantes_1` FOREIGN KEY (`fk_partida_partidaId`) REFERENCES `partida` (`partidaId`),
  ADD CONSTRAINT `FK_participantes_2` FOREIGN KEY (`fk_organizacao_organizacaoId`) REFERENCES `organizacao` (`organizacaoId`);

--
-- Limitadores para a tabela `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `FK_partida_2` FOREIGN KEY (`fk_campeonato_campeonatoId`) REFERENCES `campeonato` (`campeonatoId`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `fk_idusuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`usuarioId`),
  ADD CONSTRAINT `fk_pais_nacional` FOREIGN KEY (`nacionalidade`) REFERENCES `pais` (`paisId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
