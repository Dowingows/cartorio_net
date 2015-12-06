-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela cartorio_net.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `appear` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `controller` varchar(25) NOT NULL,
  `controller_label` varchar(50) DEFAULT NULL,
  `action` varchar(25) NOT NULL,
  `action_label` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `appear` (`appear`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cartorio_net.areas: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`id`, `parent_id`, `appear`, `controller`, `controller_label`, `action`, `action_label`) VALUES
	(1, NULL, 1, 'Users', 'Usu&aacute;rios', 'index', 'Todos'),
	(2, NULL, 0, 'Users', 'Usu&aacute;rios', 'add', 'Criar Novo'),
	(3, NULL, 0, 'Users', 'Usu&aacute;rios', 'edit', 'Editar'),
	(4, NULL, 0, 'Users', 'Usu&aacute;rios', 'delete', 'Excluir'),
	(5, 1, 1, 'Profiles', 'Perf&iacute;s de Usu&aacute;rio', 'index', 'Todos'),
	(6, NULL, 0, 'Profiles', 'Perf&iacute;s de Usu&aacute;rio', 'add', 'Criar Novo'),
	(7, NULL, 0, 'Profiles', 'Perf&iacute;s de Usu&aacute;rio', 'edit', 'Editar'),
	(8, NULL, 0, 'Profiles', 'Perf&iacute;s de Usu&aacute;rio', 'delete', 'Excluir'),
	(9, NULL, 0, 'Profiles', 'Perf&iacute;s de Usu&aacute;rio', 'view', 'Visualizar'),
	(10, NULL, 0, 'Users', 'Usu&aacute;rios', 'view', 'Visualizar'),
	(11, NULL, 1, 'Repositories', 'Reposit&oacute;rios', 'index', 'Todos'),
	(12, NULL, 0, 'Repositories', 'Reposit&oacute;rios', 'add', 'Enviar'),
	(13, NULL, 0, 'Settings', 'Configura&ccedil;&otilde;es', 'index', 'Configura&ccedil;&atilde;o'),
	(14, NULL, 0, 'Sites', 'Sites', 'page_index', 'Todas'),
	(15, NULL, 0, 'Sites', 'Sites', 'page_add', 'Criar Nova'),
	(16, NULL, 0, 'Sites', 'Sites', 'page_edit', 'Editar'),
	(17, NULL, 1, 'SolicitacaoServicos', 'Solicita&ccedil;&otilde;es de Servi&ccedil;os', 'servicos', 'Todas'),
	(18, NULL, 0, 'SolicitacaoServicos', 'Solicita&ccedil;&otilde;es de Servi&ccedil;os', 'solicitar_servico', 'Solicitar Servi&ccedil;o'),
	(19, NULL, 0, 'SolicitacaoServicos', 'Solicita&ccedil;&otilde;es de Servi&ccedil;os', 'view_solicitacao', 'View');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.areas_profiles
CREATE TABLE IF NOT EXISTS `areas_profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) unsigned NOT NULL,
  `profile_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `area_profile` (`area_id`,`profile_id`),
  KEY `profile_area_idx` (`profile_id`),
  CONSTRAINT `area_area_profile` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `profile_area` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cartorio_net.areas_profiles: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `areas_profiles` DISABLE KEYS */;
INSERT INTO `areas_profiles` (`id`, `area_id`, `profile_id`) VALUES
	(71, 1, 1),
	(25, 1, 2),
	(72, 2, 1),
	(26, 2, 2),
	(73, 3, 1),
	(27, 3, 2),
	(74, 4, 1),
	(28, 4, 2),
	(76, 5, 1),
	(77, 6, 1),
	(78, 7, 1),
	(79, 8, 1),
	(80, 9, 1),
	(75, 10, 1),
	(29, 10, 2),
	(81, 11, 1),
	(82, 12, 1),
	(83, 13, 1),
	(84, 14, 1),
	(85, 15, 1),
	(86, 16, 1),
	(87, 17, 1),
	(88, 18, 1),
	(89, 19, 1);
/*!40000 ALTER TABLE `areas_profiles` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.dados_documento
CREATE TABLE IF NOT EXISTS `dados_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitacao_servico_id` int(11) NOT NULL,
  `tipo_servico_id` int(11) NOT NULL,
  `regiao` varchar(50) DEFAULT NULL,
  `observacao` text,
  `endereco` text,
  `bairro` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `edificio` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `cartorio` varchar(45) DEFAULT NULL,
  `numero_contrato` varchar(45) DEFAULT NULL,
  `finalidade` varchar(45) DEFAULT NULL,
  `folha` varchar(45) DEFAULT NULL,
  `registro` varchar(45) DEFAULT NULL,
  `livro` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dados_documento_tipos_servicos1_idx` (`tipo_servico_id`),
  KEY `fk_dados_documento_solicitacoes_servicos1_idx` (`solicitacao_servico_id`),
  CONSTRAINT `fk_dados_documento_solicitacoes_servicos1` FOREIGN KEY (`solicitacao_servico_id`) REFERENCES `solicitacoes_servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dados_documento_tipos_servicos1` FOREIGN KEY (`tipo_servico_id`) REFERENCES `tipos_servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cartorio_net.dados_documento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dados_documento` DISABLE KEYS */;
INSERT INTO `dados_documento` (`id`, `solicitacao_servico_id`, `tipo_servico_id`, `regiao`, `observacao`, `endereco`, `bairro`, `estado`, `cidade`, `cep`, `edificio`, `nome`, `cpf`, `rg`, `cnpj`, `cartorio`, `numero_contrato`, `finalidade`, `folha`, `registro`, `livro`, `numero`) VALUES
	(15, 15, 1, NULL, '', 'Alameda 18', 'ParanÃ£ IV', NULL, NULL, '65137-000', 'Brisa Mar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(16, 16, 1, NULL, '', 'Alameda 18 Quadra 28', 'ParanÃ£ IV', NULL, NULL, '65137-000', 'Brisa Mar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(17, 17, 1, NULL, '', 'Alameda 18', 'ParanÃ£ IV', NULL, NULL, '65137-000', 'Brisa Mar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `dados_documento` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created` text NOT NULL,
  `modified` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cartorio_net.pages: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `content`, `created`, `modified`) VALUES
	(1, 'Home', '', '2015-12-04 12:00:00', '2015-12-04 12:00:00'),
	(2, 'Empresa', '<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n', '2015-12-04 12:00:00', '2015-12-04 16:50:40');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cartorio_net.profiles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Admin', '0000-00-00 00:00:00', '2015-12-06 04:09:32'),
	(2, 'Perfil Teste', '2012-03-25 00:21:45', '2012-04-02 17:09:38');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.repositories
CREATE TABLE IF NOT EXISTS `repositories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cartorio_net.repositories: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `repositories` DISABLE KEYS */;
INSERT INTO `repositories` (`id`, `name`, `file_name`, `type`, `size`, `created`, `modified`) VALUES
	(6, 'img', 'e7d6008ebb8583459ef17f59f7839706.jpg', 'jpg', 46568, '2015-12-05 00:19:47', '2015-12-05 00:19:47');
/*!40000 ALTER TABLE `repositories` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wellcome_text` text,
  `email_admin` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `cell_phone` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cartorio_net.settings: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `wellcome_text`, `email_admin`, `email_contact`, `phone`, `cell_phone`, `facebook_link`, `twitter_link`, `created`, `modified`) VALUES
	(1, '<h1><strong>Seja bem-vinda!</strong></h1>\r\n\r\n<h1>&nbsp;</h1>\r\n', 'domingos.adj@gmail.com', 'cordel@cordel.com', '(98) 3237-2222', '(98) 3237-2222', 'fb.me/dowingows', 'twitter.me/dowingows', '2015-12-03 02:59:11', '2015-12-05 00:20:28');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.solicitacoes_servicos
CREATE TABLE IF NOT EXISTS `solicitacoes_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_solicitante` varchar(50) NOT NULL,
  `cpf_cnpj_solicitante` varchar(20) NOT NULL,
  `rg_solicitante` varchar(15) DEFAULT NULL,
  `telefone_1_solicitante` varchar(20) NOT NULL,
  `telefone_2_solicitante` varchar(20) DEFAULT NULL,
  `ramal` varchar(30) DEFAULT NULL,
  `celular_solicitante` varchar(20) DEFAULT NULL,
  `email_solicitante` varchar(50) NOT NULL,
  `endereco_entrega` varchar(100) NOT NULL,
  `numero_endereco_entrega` int(11) DEFAULT NULL,
  `bairro_entrega` varchar(30) DEFAULT NULL,
  `cep_entrega` varchar(10) NOT NULL,
  `estado_entrega` varchar(45) NOT NULL,
  `cidade_entrega` varchar(45) NOT NULL,
  `email_send` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cartorio_net.solicitacoes_servicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `solicitacoes_servicos` DISABLE KEYS */;
INSERT INTO `solicitacoes_servicos` (`id`, `nome_solicitante`, `cpf_cnpj_solicitante`, `rg_solicitante`, `telefone_1_solicitante`, `telefone_2_solicitante`, `ramal`, `celular_solicitante`, `email_solicitante`, `endereco_entrega`, `numero_endereco_entrega`, `bairro_entrega`, `cep_entrega`, `estado_entrega`, `cidade_entrega`, `email_send`, `created`, `modified`) VALUES
	(15, 'Domingos', '1231231231231', '123123123123', '(98) 3222-2222', '', NULL, NULL, 'domingos.ad@gmail.com', 'Alameda 18 Quadra 28 Casa 13', NULL, 'ParanÃ£ IV', '65137 000', '', '', 0, '2015-12-06 03:14:13', '2015-12-06 03:14:13'),
	(16, 'Rosiene Baltzar de Carvalho', '123123123', '123123', '12312312', '', NULL, NULL, 'rosie@nuvemsi.com', 'Alameda 18 Quadra 28 Casa 13', NULL, '', '65137 000', '', '', 0, '2015-12-06 03:21:58', '2015-12-06 03:21:58'),
	(17, 'Paulo Ricardo', '12312312', '12312312312', '123123213', '', NULL, NULL, 'prdias@gmail.com', 'Alameda 18 Quadra 28 Casa 13', NULL, 'ParanÃ£ IV', '65137 000', '', '', 1, '2015-12-06 03:25:52', '2015-12-06 03:25:52');
/*!40000 ALTER TABLE `solicitacoes_servicos` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.tipos_servicos
CREATE TABLE IF NOT EXISTS `tipos_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `fields` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cartorio_net.tipos_servicos: ~106 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_servicos` DISABLE KEYS */;
INSERT INTO `tipos_servicos` (`id`, `nome`, `descricao`, `fields`) VALUES
	(1, '2&ordm; VIA DE ATA DE CONDOMINIO', NULL, 'endereco,bairro,estado,cidade,cep,edificio'),
	(2, '2&#186; VIA DE CONTRATO', NULL, 'nome,rg,cpf,cnpj,estado,cidade,cartorio,numero_contrato'),
	(3, '2&#186; VIA DE PROCURA&Ccedil;&Atilde;O', NULL, ''),
	(4, '2&ordm; VIA DE PROCURA&Ccedil;', NULL, ''),
	(5, '2&#186; VIA RNE', NULL, ''),
	(6, 'ADITIVO DE CONTRATO PARA REGIS', NULL, ''),
	(7, 'ANTECEDENTES CRIMINAIS', NULL, ''),
	(8, 'AVERBA&Ccedil;&Atilde;O - DIV&', NULL, ''),
	(9, 'AVERBA&#199;&#195;O - RETIFICA', NULL, ''),
	(10, 'AVERBA&Ccedil;&Atilde;O NA MAT', NULL, ''),
	(11, 'BAIXA HIPOT&Eacute;CA', NULL, ''),
	(12, 'BATISMO', NULL, ''),
	(13, 'BREVE RELATO COMPLETO', NULL, ''),
	(14, 'BREVE RELATO E FOTOC&Oacute;PI', NULL, ''),
	(15, 'BREVE RELATO SIMPLIFICADO', NULL, ''),
	(16, 'BUSCA CAPITANIA DOS PORTOS', NULL, ''),
	(17, 'BUSCA DE PARTICIPA&Ccedil;&Ati', NULL, ''),
	(18, 'BUSCA DE TESTAMENTO', NULL, ''),
	(19, 'CANCELAMENTO', NULL, ''),
	(20, 'CANCELAMENTO DE PROTESTO', NULL, ''),
	(21, 'CASAMENTO', NULL, ''),
	(49, 'CERTID&Atilde;O DISTRIBUI&Cced', NULL, ''),
	(50, 'CERTID&Atilde;O DE FAL&Ecirc;N', NULL, ''),
	(51, 'CERTID&Atilde;O DE IM&Oacute;V', NULL, ''),
	(52, 'CERTID&Atilde;O DE IM&Oacute;V', NULL, ''),
	(53, 'CERTID&Atilde;O DE MATR&Iacute', NULL, ''),
	(54, 'CERTID&Atilde;O DE MATR&Iacute', NULL, ''),
	(55, 'CERTID&Atilde;O DE MATR&Iacute', NULL, ''),
	(56, 'CITA&Ccedil;&Otilde;ES DE A&Cc', NULL, ''),
	(57, 'CERTID&Atilde;O DE NEGATIVA DO', NULL, ''),
	(58, 'CERTID&Atilde;O DE PACTO ANTEN', NULL, ''),
	(59, 'CERTID&Atilde;O DE TRANSCRI&Cc', NULL, ''),
	(60, 'CERTID&Atilde;O TUTELA E CURAT', NULL, ''),
	(61, 'CERTID&Atilde;O QUINZEN&Aacute', NULL, ''),
	(62, 'CERTID&Atilde;O QUINZEN&Aacute', NULL, ''),
	(63, 'CERTID&Atilde;O QUINZEN&Aacute', NULL, ''),
	(64, 'CITA&Ccedil;&Otilde;ES DE A&Cc', NULL, ''),
	(65, 'CERTID&Atilde;O TRINTEN&Aacute', NULL, ''),
	(66, 'CERTID&Atilde;O TRINTEN&Aacute', NULL, ''),
	(67, 'CERTID&Atilde;O TRINTEN&Aacute', NULL, ''),
	(68, 'CITA&Ccedil;&Otilde;ES DE A&Cc', NULL, ''),
	(69, 'CERTID&Atilde;O VINTEN&Aacute;', NULL, ''),
	(70, 'CERTID&Atilde;O VINTEN&Aacute;', NULL, ''),
	(71, 'CERTID&Atilde;O VINTEN&Aacute;', NULL, ''),
	(72, 'A&Ccedil;&Otilde;ES REIPERSECU', NULL, ''),
	(73, 'CND INSS', NULL, ''),
	(74, 'CND RECEITA FEDERAL', NULL, ''),
	(75, 'CONS&Oacute;CIO RODOBENS', NULL, ''),
	(76, 'CONSULTA RESTRI&Ccedil;&Atilde', NULL, ''),
	(77, 'C&Oacute;PIA DE ESCRITURA OU T', NULL, ''),
	(78, 'C&Oacute;PIA DO CONTRATO SOCIA', NULL, ''),
	(79, 'C&Oacute;PIA DO INSTRUMENTO DE', NULL, ''),
	(80, 'CR&Eacute;DITO IMOBILI&Aacute;', NULL, ''),
	(81, 'DECLARA&Ccedil;&Atilde;O DE HO', NULL, ''),
	(82, 'DESARQUIVAMENTO DE PROCESSO', NULL, ''),
	(83, 'DISTRIBUI&Ccedil;&Otilde;ES DE', NULL, ''),
	(84, 'DISTRIBUIDOR C&Iacute;VEL', NULL, ''),
	(85, 'DOCUMENTOS MICROFILMADOS', NULL, ''),
	(86, 'EXECU&Ccedil;&Atilde;O CRIMINA', NULL, ''),
	(87, 'EXECUTIVOS FISCAIS', NULL, ''),
	(88, 'FGTS', NULL, ''),
	(89, 'HIST&Oacute;RICO ESCOLAR', NULL, ''),
	(90, 'INTEIRO TEOR-CASAMENTO', NULL, ''),
	(91, 'INTEIRO TEOR-NASCIMENTO', NULL, ''),
	(92, 'INTEIRO TEOR-&Oacute;BITO', NULL, ''),
	(93, 'ITR-IMPOSTO TERRITORIAL RURAL', NULL, ''),
	(94, 'JUSTI&Ccedil;A DO TRABALHO', NULL, ''),
	(95, 'JUSTI&Ccedil;A FEDERAL', NULL, ''),
	(96, 'JUSTI&Ccedil;A MILITAR ESTADUA', NULL, ''),
	(97, 'JUSTI&Ccedil;A MILITAR FEDERAL', NULL, ''),
	(98, 'LAVRATURA E REGISTRO DE ESCRIT', NULL, ''),
	(99, 'LEGALIZA&Ccedil;&Atilde;O NO C', NULL, ''),
	(100, 'LEVANTAMENTO DE D&Eacute;BITOS', NULL, ''),
	(101, 'LICALIZA&Ccedil;&Atilde;O DE P', NULL, ''),
	(102, 'MINIST&Eacute;RIO P&Uacute;BLI', NULL, ''),
	(103, 'MULTA N&Atilde;O', NULL, ''),
	(104, 'NASCIMENTO', NULL, ''),
	(105, 'NEGATIVA DE NATURALIZA&Ccedil;', NULL, ''),
	(106, 'NEGATIVA DE PROTESTO', NULL, ''),
	(107, 'NOTIFICA&Ccedil;&Atilde;O', NULL, ''),
	(108, 'NOTIFICA&Ccedil;&Atilde;O CRI', NULL, ''),
	(109, '&Oacute;BITO', NULL, ''),
	(110, 'OBJETO E P&Eacute;', NULL, ''),
	(111, 'OUTROS SERVI&Ccedil;OS', NULL, ''),
	(112, 'PESQUISA DE IM&Oacute;VEIS-ATR', NULL, ''),
	(113, 'PESQUISA DE IM&Oacute;VEIS-ATR', NULL, ''),
	(114, 'PROTESTO DE CHEQUES', NULL, ''),
	(115, 'PROTESTO DE CONTRATO', NULL, ''),
	(116, 'PROTESTO DE NOTAS PROMISS&Oacu', NULL, ''),
	(117, 'QUITA&Ccedil;&Atilde;O FISCAL ', NULL, ''),
	(118, 'REGISTRO DE CONDOM&Iacute;NIO', NULL, ''),
	(119, 'REGISTRO DE CONTRATO-CDT', NULL, ''),
	(120, 'REGISTRO DE CONTRATO-CRI', NULL, ''),
	(121, 'REGISTRO DE INTEGRALIZA&Ccedil', NULL, ''),
	(122, 'REGISTRO DE PARTILHA', NULL, ''),
	(123, 'REGISTRO ESCRITURA PACTO(CART&', NULL, ''),
	(124, 'RESGATE DE CHEQUE', NULL, ''),
	(125, 'RETIRADA E BOLETO ITBI', NULL, ''),
	(126, 'RETIRADA DE CONTRATO E RECONHE', NULL, ''),
	(127, 'SINAL P&Uacute;BLICO', NULL, ''),
	(128, 'SITUA&Ccedil;&Atilde;O ENFITEU', NULL, ''),
	(129, 'TRADI&Ccedil;&Atilde;O DE DOCU', NULL, ''),
	(130, 'TRIBUTOS ESTADUAIS', NULL, ''),
	(131, 'TRIBUTOS ESTADUAIS- NEGATIVA P', NULL, ''),
	(132, 'TRIBUTOS IMOBILI&Aacute;RIOS', NULL, ''),
	(133, 'VALOR VENAL', NULL, '');
/*!40000 ALTER TABLE `tipos_servicos` ENABLE KEYS */;


-- Copiando estrutura para tabela cartorio_net.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) unsigned NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `pass_switched` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `profile_id` (`profile_id`),
  CONSTRAINT `users_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cartorio_net.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `profile_id`, `password`, `name`, `email`, `last_login`, `pass_switched`, `created`, `modified`) VALUES
	(1, 1, 'a78f76a37a7f699f39b324ba58b2aad5', 'Administrador', 'admin', '2015-12-06 04:13:03', 1, '0000-00-00 00:00:00', '2015-12-06 04:13:03'),
	(5, 2, '9bc5f2b8fb63d9ec807dc1d6e35ebf6e', 'Teste', 'teste@teste.com', '2012-04-02 22:41:30', 1, '2012-03-23 15:49:04', '2012-04-02 22:41:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
