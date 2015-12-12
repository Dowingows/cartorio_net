-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.9-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela cartorio_net.areas
DROP TABLE IF EXISTS `areas`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.areas_profiles
DROP TABLE IF EXISTS `areas_profiles`;
CREATE TABLE IF NOT EXISTS `areas_profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) unsigned NOT NULL,
  `profile_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `area_profile` (`area_id`,`profile_id`),
  KEY `profile_area_idx` (`profile_id`),
  CONSTRAINT `area_area_profile` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `profile_area` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.dados_documento
DROP TABLE IF EXISTS `dados_documento`;
CREATE TABLE IF NOT EXISTS `dados_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitacao_servico_id` int(11) NOT NULL,
  `tipo_servico_id` int(11) NOT NULL,
  `regiao` varchar(50) DEFAULT NULL,
  `observacao` text,
  `endereco` varchar(256) DEFAULT NULL,
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
  `data_nascimento` varchar(20) DEFAULT NULL,
  `orgao_emissor` varchar(20) DEFAULT NULL,
  `averbacao` varchar(45) DEFAULT NULL,
  `data_registro` varchar(45) DEFAULT NULL,
  `telefone_cartorio` varchar(15) DEFAULT NULL,
  `endereco_cartorio` varchar(45) DEFAULT NULL,
  `cep_cartorio` varchar(15) DEFAULT NULL,
  `has_copia_documento` varchar(45) DEFAULT NULL,
  `termo` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `data_expedicao` varchar(10) DEFAULT NULL,
  `naturalidade` varchar(45) DEFAULT NULL,
  `conjuge` varchar(45) DEFAULT NULL,
  `data_casamento` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `data_batismo` varchar(45) DEFAULT NULL,
  `igreja` varchar(45) DEFAULT NULL,
  `padre` varchar(45) DEFAULT NULL,
  `numero_nire` varchar(45) DEFAULT NULL,
  `endereco_empresa` varchar(45) DEFAULT NULL,
  `ano_empresa` varchar(45) DEFAULT NULL,
  `filiacao` varchar(45) DEFAULT NULL,
  `proposta` varchar(45) DEFAULT NULL,
  `esposa_esposo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dados_documento_tipos_servicos1_idx` (`tipo_servico_id`),
  KEY `fk_dados_documento_solicitacoes_servicos1_idx` (`solicitacao_servico_id`),
  CONSTRAINT `fk_dados_documento_solicitacoes_servicos1` FOREIGN KEY (`solicitacao_servico_id`) REFERENCES `solicitacoes_servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dados_documento_tipos_servicos1` FOREIGN KEY (`tipo_servico_id`) REFERENCES `tipos_servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.estados
DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `codigo_estado` int(11) NOT NULL,
  `sigla` char(2) NOT NULL,
  `nome` char(50) NOT NULL,
  PRIMARY KEY (`codigo_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.municipios
DROP TABLE IF EXISTS `municipios`;
CREATE TABLE IF NOT EXISTS `municipios` (
  `codigo_municipio` int(11) NOT NULL,
  `nome` char(100) NOT NULL,
  `codigo_estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo_municipio`),
  KEY `fk_municipios_estados1_idx` (`codigo_estado`),
  CONSTRAINT `fk_municipios_estados1` FOREIGN KEY (`codigo_estado`) REFERENCES `estados` (`codigo_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.pages
DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `created` text NOT NULL,
  `modified` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.profiles
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.repositories
DROP TABLE IF EXISTS `repositories`;
CREATE TABLE IF NOT EXISTS `repositories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) DEFAULT NULL,
  `site_title` varchar(50) DEFAULT NULL,
  `site_description` varchar(50) DEFAULT NULL,
  `wellcome_text` text,
  `email_admin` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `cell_phone` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `slider_images` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.solicitacoes_servicos
DROP TABLE IF EXISTS `solicitacoes_servicos`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.tipos_servicos
DROP TABLE IF EXISTS `tipos_servicos`;
CREATE TABLE IF NOT EXISTS `tipos_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `fields` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cartorio_net.users
DROP TABLE IF EXISTS `users`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
